const scriptURL =
  "https://script.google.com/macros/s/AKfycbxlmQu-gkzr56kiPJKjgT9xPDJ_V0jkDX5BXSaR3IY4nYhOAHQmNk5xTjwMUrXRpePt/exec";

async function sendBookingToGoogleSheet(formData, sheetType) {
  if (!["vehicle", "truck"].includes(sheetType)) {
    throw new Error("Unsupported Google Sheets booking type.");
  }

  if (!scriptURL || !scriptURL.endsWith("/exec")) {
    throw new Error(
      "Set scriptURL to the deployed Google Apps Script /exec URL.",
    );
  }

  const requestBody = new URLSearchParams();
  for (const [key, value] of formData.entries()) {
    if (typeof value === "string") requestBody.append(key, value);
  }
  requestBody.set("form_type", sheetType);

  const response = await fetch(scriptURL, {
    method: "POST",
    mode: "no-cors",
    body: requestBody,
  });

  if (response.type !== "opaque") {
    throw new Error("Google Apps Script did not accept the request.");
  }
}
