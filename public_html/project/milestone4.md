<table><tr><td> <em>Assignment: </em> IT202 Milestone 4 Bank Project</td></tr>
<tr><td> <em>Student: </em> Desimir Berardo(db32)</td></tr>
<tr><td> <em>Generated: </em> 5/3/2022 7:13:18 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S22/it202-milestone-4-bank-project/grade/db32" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone4 branch </li>
<li>Create a new markdown file called milestone4.md</li>
<li>git add/commit/push immediate</li>
<li>Fill in the milestone4.md link (from Milestone4) into the proposal.md file under each milestone4 feature</li>
<li>For each feature in the proposal add a related direct link to Heroku prod for a file related to it the feature</li>
<li>Fill in the below deliverables</li>
<li>At the end copy the markdown and paste it into milestone4.md</li>
<li>Add/commit/push the changes to Milestone4</li>
<li>PR Milestone4 to dev and verify</li>
<li>PR dev to prod and verify</li>
<li>Checkout dev locally and pull changes</li>
<li>Submit the direct link to this new milestone4.md file from your GitHub prod branch to Canvas</li>
</ol>
<p>Note: Ensure all images appear properly on GitHub and everywhere else.
Images are only accepted from dev or prod, not localhost.
All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod). </p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> User can set their profile to public or private </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of new column on the Users table</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/166572623-63495a24-45a2-4acf-8322-1b75ac57fecc.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>New column visibility on the users table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of updated profile edit view</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/166572733-772ba4b8-7739-4416-a234-bfc406371cf1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>new profile edit view with the public and private toggle switch<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot of profile view view (ensure email isn't shown publicly)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/166574661-e9fc48f5-139f-4ec8-af2c-4cfbf4af2310.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Profile view of a public profile<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request(s) links</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/DesiBerardo/IT202-008/pull/90">https://github.com/DesiBerardo/IT202-008/pull/90</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add direct link to a public profile from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://db32-prod.herokuapp.com/project/profile.php?id=3">https://db32-prod.herokuapp.com/project/profile.php?id=3</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly explain the logic behind how public/private profile works</td></tr>
<tr><td> <em>Response:</em> <p>The visibility column in the database determines if the profile is public or<br>private. When the user toggles the switch, the value gets changed when the<br>user updates the profile. There is a query that grabs the visibility value<br>and php will check if the profile is set to public or private.<br>If it is public, it will show the user&#39;s username and join date.<br>If it is private, it will give a flash message and redirect to<br>the home page.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> User will be able to open a savings account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the create account page for savings with the form filled in</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/166575608-7671a8cb-abaf-491a-8626-a753d4e2a8af.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Here is the savings account creation page with the form filled in<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of the code that determines the APY</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/166576096-dce5f06b-9d72-498d-aa75-155b4987c81e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Here is the code that determines the APY. There was no requirement to<br>have a page to set the apy value, but it can be set<br>with some sql like these statements here<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshots of the related error and success messages when creating a savings account</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/166576621-657a96f2-9431-4d23-8520-f32d5d608028.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Here is an error for not having the minimum deposit.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/166576937-20cec052-103e-4db7-8e1a-fa28dd64e6c0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>happy good message saying the account is made<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the db showing the new savings account</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/166577994-cc1fa253-e825-4ddd-b588-06ebfdccc1e5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Here is the new savings account<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/DesiBerardo/IT202-008/pull/91">https://github.com/DesiBerardo/IT202-008/pull/91</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Add link to the related page on heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://db32-prod.herokuapp.com/project/create_account.php">https://db32-prod.herokuapp.com/project/create_account.php</a> </td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly explain the logic behind the APY value</td></tr>
<tr><td> <em>Response:</em> <p>The APY value is what banks use to calculate interest for money in<br>certain types of accounts. In the case of this project, the APY value<br>is just another number in the database, and is not used in any<br>calculations for my project. I know what it is supposed to do, but<br>I did not want to risk breaking my project to get the calculation<br>right, plus since money in my bank is an integer and not a<br>flaoting point value like a double, there would not be much point in<br>having an APY calculation.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User will be able to take out a loan </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot showing the form for opening a loan along with the system generated APY</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/166583362-9bf23677-e806-41a3-8fcf-0b0c7fdb2081.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is the form for opening a loan<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot showing the user's accounts that can be deposited into</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/166584169-d6f9b5b7-aa61-4352-91be-7ff5fb576113.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Here are the accounts that u can use. Note that none are existing<br>loans<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot from the db showing the loan account has a negative balance</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/166584423-c58f4266-97f5-462c-adf2-b0581ad39fde.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Here are a few loan entries, all of which have negative balances<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot from the User's account list page showing the loan displaying as a positive value</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/166584498-563f980c-8a07-48d7-aeba-263924c2d081.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Unfortunately, I did not make it so that my loans displayed as positive<br>values. However, this does not affect the transaction logic and they will operate<br>as intended.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a screenshot showing the code logic for updating the loan's balance per the requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/166584652-3d8dc67a-6411-48eb-888b-e1581ab4da05.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Loans have their balances updated the same way that other accounts do.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/166584803-43b2bb38-b9f8-4372-b2d8-41e93b3d1ea5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Here is how loans are created though<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/166584907-c996bf4c-9fc0-4992-a8cb-76464e2ef3be.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Loan creation cont.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add screenshot showing user can't transfer more money from a loan account (alternatively don't show loan accounts in the dropdown for transfer transactions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/166584169-d6f9b5b7-aa61-4352-91be-7ff5fb576113.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This dropdown and other dropdowns that are source accounts will not show loan<br>accounts<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 7: </em> Add screenshots of any other errors and success</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/166585158-001313d4-c25e-4491-ba02-3d771c4c440a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>minimum deposit loan error<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/166585204-bf570025-11e5-45f3-99d8-174d390334ce.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Loan success messages<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 8: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/DesiBerardo/IT202-008/pull/92">https://github.com/DesiBerardo/IT202-008/pull/92</a> </td></tr>
<tr><td> <em>Sub-Task 9: </em> Add link to create/open loan page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://db32-prod.herokuapp.com/project/create_loan.php">https://db32-prod.herokuapp.com/project/create_loan.php</a> </td></tr>
<tr><td> <em>Sub-Task 10: </em> Briefly explain the special code implementations for loans</td></tr>
<tr><td> <em>Response:</em> <p>Loans required their own special page for opening one so that it can<br>display the current apy. I will say, the way that I did loans<br>didnt really change much from other accounts. I did not do anything special<br>other than dispaly the APY and have them be negative balances. Honestly its<br>not much different than a deposit except you pay back the deposit. My<br>bad.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Listing accounts should show applicable APY or - if none is set for a particular account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the account list showing a combination of checkings, savings, loans, etc</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/166585693-754b9012-846f-487f-9bcf-fa32ea087081.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Accounts listed have the apy listed and &quot;-&quot; if null<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/DesiBerardo/IT202-008/pull/93">https://github.com/DesiBerardo/IT202-008/pull/93</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a link to the Account list page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://db32-prod.herokuapp.com/project/my_accounts.php">https://db32-prod.herokuapp.com/project/my_accounts.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> User will be able to close an account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot showing validation that an account can't be closed if it has a balance (regular account and loan)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/166585829-2b9ae18b-f8b4-4138-90ee-38ad8f29730b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Error for trying to close an account with a non zero balance<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot from the DB showing a closed account as inactive</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/166585960-c97f7752-07aa-49d4-827e-1e08e640407c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Here is a closed checking account with a 0 balance and is also<br>inactive.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshots of the various account list queries (in the code) showing the changes to use is_active (be sure to include ucid and date)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/166586010-367208ca-2bcf-4125-8449-e87b3c45d895.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Here is the query for depositing<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/166586061-4e6c900f-c4bd-44b6-a5a3-32e05e0a4ecd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>query for ext_transfer. I promise every query is like this man (also caption<br>for account closing: there is no proper link to close the account but<br>you can do it directly from the accounts page)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/DesiBerardo/IT202-008/pull/94">https://github.com/DesiBerardo/IT202-008/pull/94</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a link to the page where a user can close an account</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://db32-prod.herokuapp.com/project/my_accounts.php">https://db32-prod.herokuapp.com/project/my_accounts.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Admin role </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of user search with search results shown (show the user's name, link to view their accounts, link to open account, and link/button to deactivate user)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/166586219-dbd292f9-d2c2-437a-ad7c-e467f243f165.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Here is where you can get to the users accounts. Within the view<br>accounts page you can open an account for that user, shown in the<br>next screenshot<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/166586290-0ec0b9a7-b4df-4e43-8fd0-d582cd5a0189.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>here is the view accounts page for the selected user, with a create<br>new account button on the bottom<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the updated User's table of the new is_active column</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/166586370-134b6fdb-520f-42ad-9757-20f3b225dd51.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Here is the isactive column of the database. I dont have any deactivated<br>accounts because i needed them active for this assignment but i promise it<br>works<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the admin's view of listing another user's account (from the user search results link) Show a mix of frozen and unfrozen accounts</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/166586606-6b5ebfad-30fd-474b-a1d3-33e5c300683c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Here is the accounts listed. Note that 1 is frozen and the freeze<br>account link will freeze the account and unfreeze as well.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the admin's view of listing another user's transaction history</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/166586705-284304c4-9079-467c-b720-cc695d90940c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This account&#39;s transaction history is being viewed by an admin<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add screenshot of account lookup page with partial result matches (ensure it has links to the transactions page of the account and the ability to freeze/unfreeze)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/166586762-60089628-005c-4d5b-87e3-6c052e3b4919.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Here is the accounts lookup with partial matches (I forgot to change the<br>title whoopsie). The view transaction link will bring it to the transaction page,<br>where the admin will have the ability to freeze the account.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/DesiBerardo/IT202-008/pull/95">https://github.com/DesiBerardo/IT202-008/pull/95</a> </td></tr>
<tr><td> <em>Sub-Task 7: </em> Add related url(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://db32-prod.herokuapp.com/project/admin/search_user.php">https://db32-prod.herokuapp.com/project/admin/search_user.php</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://db32-prod.herokuapp.com/project/admin/search_account.php">https://db32-prod.herokuapp.com/project/admin/search_account.php</a> </td></tr>
<tr><td> <em>Sub-Task 8: </em> Briefly explain the code logic for the different views and admin actions</td></tr>
<tr><td> <em>Response:</em> <p>The admin account can only see admin pages, and there is a check<br>at the top of each of them. </p><br><ul><br><li>The search user page compares<br>both the first and last name of each user with the input and<br>will pull up a list of matches. <br>   *<br>The change active page is just a link that checks what isActive is<br>set to for the user and swaps it and redirects back to the<br>page.</li><br><li>the view accounts page is just view accounts but instead pulls the<br>user id from the searched user to check their accounts as an admin.</li><br></ul><br><p>*<br>freezing accounts is done similarly to the isActive swap, just with accounts</p><br><ul><br><li>the<br>partial matches are done by using a query with &#39;%&#39;s around the input<br>and will check for matches and list them in a table.<br></li><br></ul><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Proposal.md </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em>  Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone4.md accordingly and a direct link to the path on Heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/166587674-21116a8b-2491-4998-abb5-ca40cd35348d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Here it is with all dates links and titles<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone4 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/166587795-01d80196-ee82-4ee0-80f1-b4602103c1a9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Project board with all issues marked as closed<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S22/it202-milestone-4-bank-project/grade/db32" target="_blank">Grading</a></td></tr></table>