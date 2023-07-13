<h3>Google Login With Laravel Socialite</h3>
1) Socialite package--> **composer require laravel/socialite**

2) Configure credentials
   
Navigate to the **config/services.php** file and add the following configuration for the Google provider:-->

<code>
    'google' => [
    'client_id' => env('GOOGLE_CLIENT_ID'),
    'client_secret' => env('GOOGLE_CLIENT_SECRET'),
    'redirect' => env('GOOGLE_REDIRECT_URI'),
],
</code>
 
Step 1: Go to the Google Developers Console
Visit the Google Developers Console at **https://console.developers.google.com/** and sign in with your Google account.

Step 2: Create a new project
Click on the project drop-down and select "New Project". Enter a name for your project and click the "Create" button.

Step 3: Enable the Google+ API
In the left sidebar, click on "Dashboard" and search for "Google+ API". Click on the search result, and on the next screen, click the "Enable" button.

Step 4: Configure the OAuth consent screen
In the left sidebar, under "APIs & Services", click on "OAuth consent screen". Choose an appropriate user type, enter a name for your application, and fill in any other required fields. At a minimum, you need to enter the "Authorized domains" field with the domain name of your application. Once you have filled in the necessary information, click the "Save" button.

Step 5: Create OAuth client credentials
In the left sidebar, under "APIs & Services", click on "Credentials". On the next screen, click the "Create Credentials" button and select "OAuth client ID". Choose "Web application" as the application type.

Step 6: Configure the authorized redirect URI
In the "Authorized JavaScript origins" field, enter the base URL of your application. For example, if your application runs on http://localhost:8000, enter http://localhost:8000 as the origin. In the "Authorized redirect URIs" field, enter the callback URL for the Google login process in your application. The URL should be in the format http://your-domain/login/google/callback. Replace your-domain with your actual domain. Once you have entered the redirect URI, click the "Create" button.

Step 7: Obtain the client ID and client secret
After creating the OAuth client credentials, you will see a screen displaying the client ID and client secret. Take note of these values as you will need them in the Laravel configuration.

Step 8: Configure Laravel environment variables
In your Laravel project's root directory, open the** .env file**. Add the following lines and replace your-client-id, your-client-secret, and your-redirect-uri with the corresponding values you obtained in the previous steps:

<code>
GOOGLE_CLIENT_ID=your-client-id
GOOGLE_CLIENT_SECRET=your-client-secret
GOOGLE_REDIRECT_URI=your-redirect-uri
</code>
