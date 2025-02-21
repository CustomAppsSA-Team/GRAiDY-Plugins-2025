# Welcome to GRAiDY

We appreciate your interest in the GRAiDY project.

GRAiDY is designed to revolutionize the way assessments are managed and graded, making the process more efficient and insightful.

To learn more about GRAiDY and explore its features, visit:

[🌐 WeEnvisionAI / WeAi](www.weenvisionai.com)

[🌐 GRAiDY Website](https://graidy.tech)

[🌐 GRAiDY Pricing](https://portal.graidy.tech/pricing)

## Revolutionizing Exam & Essay Marking with AI!

GRAiDY is an advanced AI grading tool that seamlessly integrates with Moodle, empowering educators to grade assignments and quizzes with ease. Say goodbye to manual marking and hello to automated feedback, powerful analytics, and efficient grading workflows.

### Why Choose GRAiDY?

* **Effortless Integration**: Works directly with Moodle assign and quiz activities. No major change management required.
* **Smart AI Grading**: Utilize cutting-edge AI for accurate and consistent grading across various assessment types.
* **Feedback Automation**: Provide personalized feedback instantly, saving time and enhancing student learning.
* **Powerful Analytics**: Gain insights into student performance and assessment effectiveness.
* **Flexible Pricing**: Start grading today with upto 200 Free Credits!

## Plugin Installation Guide

### Downloading the plugin as a Zipped folder

1. **Unzip the Plugin Folder**  
    Extract the downloaded plugin folder.

2. **Copy the Plugin Folder**  
    Copy the unzipped folder into the `moodle/local/` directory.

3. **Navigate to the Moodle Frontend**  
    Follow the installation instructions on the Moodle frontend.

4. **Web Service Setup**  
    After installation, navigate to:  
    `/admin/settings.php?section=local_graidy_settings`  
    Follow the Web Service setup instructions.

5. **Generate Tokens**  
    Once the tokens are generated for your GRAiDY representative(s), they will be able to use GRAiDY on their course assign and quiz activities.

### Cloning the plugin from the Git repo

1. **Navigate to Moodle Directory**  
    cd moodle/local/

2. **Clone the Repository**  
    git clone https://github.com/CustomAppsSA-Team/GRAiDY-Plugins.git graidy


3. **Navigate to the Moodle Frontend**  
    Follow the installation instructions on the Moodle frontend.

4. **Web Service Setup**  
    After installation, navigate to:  
    `/admin/settings.php?section=local_graidy_settings`  
    Follow the Web Service setup instructions.

5. **Generate User Tokens**  
    Once the tokens are generated for your GRAiDY representative(s), they will be able to use GRAiDY on their course assign and quiz activities.

## GRAiDY Setup Instructions

### GRAiDY Server Configuration

To connect your Moodle instance with GRAiDY, follow these steps:

1. **Register Your Organization**  
    Visit https://portal.graidy.tech/register to sign up.

2. **Complete Organization Registration**  
    Log in to your GRAiDY portal and finish your organization registration.


3. **Update Moodle URL**  
    Under "Preferences," update your Moodle instance site URL

4. **Get Your Organization API Key**  
    Go to API / Integrations in GRAiDY and copy your organization API key.

5. **Complete Setup**  
    Configure the GRAiDY server instance that this Moodle site will connect to.

        https://portal.graidy.tech

    Paste the API key into the settings field in Moodle to complete the setup.

        Example: xxxxx-xxxx-xxxx-xxxx

### Allow GRAiDY Access to Moodle

To connect your Moodle instance with GRAiDY, follow these steps:

1. **Enable web services**  
    Web services must be enabled in Advanced features.

2. **Enable rest protocols**  
    At least one protocol should be enabled.

3. **Create a specific user (Optional)**  
    A web services user is required to represent the system controlling Moodle.

4. **Assign role**  
    Assign "GRAiDY Web Service" role to the user or teachers you want to have access to the GRAiDY feature. The `graidy_webservice.xml` is the role preset required to access course information and activities and student attempts

5. **Select a service**  
    A service is a set of web service functions. You will allow the user to access to this service. On the Add service page check 'Enable' and 'Authorised users' options.

6. **Select a specific user**  
    Add the web services user as an authorised user.

7. **Create a token for a user**  
    Create a token for the user created in the previous step. This token will be used by GRAiDY to authenticate with Moodle.

## Getting Started with GRAiDY
Experience Seamless AI Grading with Moodle & GRAiDY

Enhance your Moodle assessments with:

* **AI-Powered Grading**: Fast, consistent, and accurate grading.
* **Feedback Automation**: Personalized feedback without manual effort.
* **Actionable Insights**: Powerful analytics to improve learning outcomes.
* **Upto 200 Free Credits on Registration**: Start grading today with no upfront cost.

## Support & Documentation
For more information, visit:


[🌐 GRAiDY Portal Help & Support](https://portal.graidy.tech/support)

[🌐 GRAiDY Portal Documentation & Tutorials](https://portal.graidy.tech/support/docs)

[🌐 GRAiDY Portal Pricing](https://portal.graidy.tech/pricing)

For support or more complex inquiries, please contact customer support:

✉️  [info@graidy.tech](mailto:info@graidy.tech)
 
☎️ [](tel:27310125253)
 
    Phone : +27 31 0125 253

    