<table><tr><td> <em>Assignment: </em> IT202 Milestone1 Deliverable</td></tr>
<tr><td> <em>Student: </em> Desimir Berardo(db32)</td></tr>
<tr><td> <em>Generated: </em> 3/31/2022 6:28:40 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S22/it202-milestone1-deliverable/grade/db32" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone1 branch</li>
<li>Create a milestone1.md file in your Project folder</li>
<li>Git add/commit/push this empty file to Milestone1 (you&#39;ll need the link later) </li>
<li>Fill in the deliverable items<ol>
<li>For the proposal.md file use the direct link to milestone1.md from the Milestone1 branch for all of the features  </li>
<li>For each feature, add a direct link (or links) to the expected file the implements the feature from Heroku Prod (I.e, <a href="https://mt85-prod.herokuapp.com/Project/register.php">https://mt85-prod.herokuapp.com/Project/register.php</a>)</li>
</ol>
</li>
<li>Ensure your images display correctly in the sample markdown at the bottom</li>
<li>Save the submission items</li>
<li>Copy/paste the markdown from the &quot;Copy markdown to clipboard link&quot;</li>
<li>Paste the code into the milestone1.md file</li>
<li>Git add/commit/push the md file to Milestone1</li>
<li>Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)</li>
<li>Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)<ol>
<li>Make sure everything looks ok on heroku</li>
</ol>
</li>
<li>Make a pull request from dev to prod (resolve any conflicts) <ol>
<li>Make sure everything looks ok on heroku</li>
</ol>
</li>
<li>Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)</li>
</ol>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Feature: User will be able to register a new account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/161152552-168823ad-a9fa-4215-8969-1ea1d483302f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>checks for email<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/161152640-212d7407-ebd9-4766-bba0-b3346e9204d9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Register checks for valid password<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/161152771-678329f5-0ce7-4188-be4b-de64431e4ebc.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User is able to be registered when requirements are filled<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Users table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/161152881-e58a5213-9755-4ecc-b90e-44e8ee21e51c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Users table with data<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/DesiBerardo/IT202-008/pull/17">https://github.com/DesiBerardo/IT202-008/pull/17</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>HTML: adds a form that gets filled out with some length parameters</p><br><p>PHP: sanitizes<br>inputs and checks for validity of information. If information is valid adds user<br>to database<br><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Feature: User will be able to login to their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/161153472-f195b5ec-3139-49ce-9876-5f266ad8faab.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Checks for password length<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/161153601-40ea25ac-416e-47e2-8b83-d9cb0efcca5f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>checks for valid email<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/161153740-3ff020a9-af67-49fa-ba3f-7c082eec6896.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>checks for valid password<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of successful login</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/161153798-9e18cd35-a5e9-49d7-9da0-1a5a162593aa.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>successful login<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/DesiBerardo/IT202-008/pull/18">https://github.com/DesiBerardo/IT202-008/pull/18</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>HTML: structure for the form<br>PHP: Checks to make sure text fields aren&#39;t empty,<br>checks to see if email has an @ and a . , checks<br>if password is too short or empty. If all checks are good, refernces<br>info on database to find valid password and email. If all is found,<br>log the user in.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Feat: Users will be able to logout </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the successful logout message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/161156533-803d4fb3-5200-48c2-a2c2-fb47f9b6c00f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>logout message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the logged out user can't access a login-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/161156641-0834d368-5fba-46d6-a337-2d9977a4b50a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>user is redirected to login when trying to access home<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/DesiBerardo/IT202-008/pull/20">https://github.com/DesiBerardo/IT202-008/pull/20</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>PHP: When logout is clicked, it will call reset_session() which resests the session<br>and logs the user out. User is redirected to login screen.<br><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Feature: Basic Security Rules Implemented / Basic Roles Implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the logged out user can't access a login-protected page (may be the same as similar request)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/161156641-0834d368-5fba-46d6-a337-2d9977a4b50a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>user cannot access home without being logged in<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a user without an appropriate role can't access the role-protected page (a test/dummy page is fine)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/161157122-0b5fc2c1-9cb5-43b5-b550-d7b013210fee.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>non-admin user cannot access list_roles.php. They do not have the right O&#39; do<br>not have the right<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Roles table with data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/161157312-1ef004f1-7ab0-4fac-ae03-acceb0e894d9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>only two roles, admin and Bazinga. bazinga<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the UserRoles table with data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/161157233-15c386a1-a8e6-4876-b0db-cc9a8c16baaf.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Only one account has admin rights.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add the related pull request(s) for these features</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/DesiBerardo/IT202-008/pull/41">https://github.com/DesiBerardo/IT202-008/pull/41</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Explain briefly how the process/code works for login-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>PHP: calls is_logged_in() function to check if user is logged in. If it<br>is not true, user is redirected to login page<br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Explain briefly how the process/code works for role-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>PHP: calls function has_role to check if the user has the admin role.<br>If not, flash message appears that they do not have permission, and user<br>is redirected to home.php<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Feature: Site should have basic styles/theme applied; everything should be styled </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots to show examples of your site's styles/theme</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/161158062-02a47b65-fbfa-4e17-b2e9-d9b31045e6a1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>example of my css<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/DesiBerardo/IT202-008/pull/42">https://github.com/DesiBerardo/IT202-008/pull/42</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain your CSS at a high level</td></tr>
<tr><td> <em>Response:</em> <p>css made the navigation horizontal, centered items and lengthed them.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Feature: Any output messages/errors should be "user friendly" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of some examples of errors/messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/161156641-0834d368-5fba-46d6-a337-2d9977a4b50a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>user could not access site<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/161157122-0b5fc2c1-9cb5-43b5-b550-d7b013210fee.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>user could not access restricted part of site<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/161152640-212d7407-ebd9-4766-bba0-b3346e9204d9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>password validity<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a related pull request</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/DesiBerardo/IT202-008/pull/20">https://github.com/DesiBerardo/IT202-008/pull/20</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you made messages user friendly</td></tr>
<tr><td> <em>Response:</em> <p>flash.php contains the code for having flash messages appear. This has CSS that<br>has colors according to what kind of error happens. Red is danger, green<br>is success, yellow is warning, etc.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Feature: Users will be able to see their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/161158924-409b4975-64f0-4fc4-bc29-1b4ba118839a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>profile page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/DesiBerardo/IT202-008/pull/21">https://github.com/DesiBerardo/IT202-008/pull/21</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain briefly how the process/code works (view only)</td></tr>
<tr><td> <em>Response:</em> <p>HTML: displays current users profile information from the database, and has text boxes<br>to change the current password.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Feature: User will be able to edit their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page validation messages and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/161159280-5da086c6-9d70-47fe-b295-4fc09ad64cd2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>checks to see if passwords match<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/161159357-f5c46ebf-310b-4379-a1c8-a26c129f5f21.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>checks if current password is valid<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add before and after screenshots of the Users table when a user edits their profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/161159451-f20fcda2-daf2-426b-986c-9b283fcd5bef.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>before<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/161159625-c1c83e78-fd17-440b-8dee-6632aa370b1a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>after<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/DesiBerardo/IT202-008/pull/21">https://github.com/DesiBerardo/IT202-008/pull/21</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works (edit only)</td></tr>
<tr><td> <em>Response:</em> <p>checks to see if passwords match and are valid and if original password<br>is correct</p><br><p>updates username to database when changed<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Proposal and Issues </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone1.md accordingly and a direct link to the path on heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/161159983-91b78d72-00d3-4efe-82e3-ed8adc859021.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>proposal.md with links and checkboxes<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/161160048-ab984141-47f4-4a3d-a60b-14221a8fdaed.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>project with all items in done category<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S22/it202-milestone1-deliverable/grade/db32" target="_blank">Grading</a></td></tr></table>