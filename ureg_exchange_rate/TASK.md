# U-Reg Coding Challenge (Full-stack)

**Requirements**

You are required to develop a simple web application (API and frontend) that displays the latest and historical exchange rates.

On initial load, call a RESTful GET endpoint to display the latest exchange rates for all available currencies. Application should also provide a way to check the historical exchange rates through a date picker. When a date is selected, get the rates for the selected date using the same API endpoint and display it in application.

Use this for the database schema and seed data: https://gist.github.com/ureg-tech/e4168553bb7d3f0f8ef23c23917dc0b0 (you can add more currencies and rates for testing)

Here is the wireframe for reference:

![N|Solid](https://i.imgur.com/cqksM5z.png)

Feel free to develop this application in any language, framework, database you prefer. Please don't forget to add a simple readme file on how to install and run your application.

**Primary Objectives**

The goal of this coding challenge is to assess the following:
- Coding style, structure and quality
-- Code in such a way that it can be easily modified to support additional endpoints or screens (what if we decide to add a create new currency or update rates feature?)
- Secure coding
- Best practices

**Stretch Objectives**

Additional points will be given if you are also able to do the following:
- Implement lazy-loading when loading all rates (load 12 currencies per scroll)
- Add a Dockerfile for easier installation using Docker
- Unit tests
