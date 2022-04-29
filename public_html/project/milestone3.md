<table><tr><td> <em>Assignment: </em> IT202 Milestone 3 Bank Project</td></tr>
<tr><td> <em>Student: </em> Desimir Berardo(db32)</td></tr>
<tr><td> <em>Generated: </em> 4/28/2022 8:25:57 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S22/it202-milestone-3-bank-project/grade/db32" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone3 branch </li>
<li>Create a new markdown file called milestone3.md</li>
<li>git add/commit/push immediate</li>
<li>Fill in the milestone3.md link (from Milestone3) into the proposal.md file under each milestone3 feature</li>
<li>For each feature in the proposal add a related direct link to Heroku prod for a file related to it the feature</li>
<li>Fill in the below deliverables</li>
<li>At the end copy the markdown and paste it into milestone3.md</li>
<li>Add/commit/push the changes to Milestone3</li>
<li>PR Milestone3 to dev and verify</li>
<li>PR dev to prod and verify</li>
<li>Checkout dev locally and pull changes to get ready for Milestone 4</li>
<li>Submit the direct link to this new milestone3.md file from your GitHub prod branch to Canvas</li>
</ol>
<p>Note: Ensure all images appear properly on GitHub and everywhere else.
Images are only accepted from dev or prod, not localhost.
All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod). </p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> User will be able to transfer between their accounts </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of transfer page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/165863388-0874ee99-4449-4170-90af-8cef16c04967.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Here is the transfer page for internal transfers<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot showing dropdown values</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/165863388-0874ee99-4449-4170-90af-8cef16c04967.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The same image also shows the dropdown values<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot showing user can't transfer more funds than they have</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/165863498-ded928d8-bd21-4530-af7c-9d01650f099b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is what happens when a user attempts to transfer too much money<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add screenshot showing user can't transfer to the same account</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/165863573-44f104f3-e2e8-4226-8639-6a60fe8c3f28.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is what happens when a user tries to transfer with the same<br>account<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add screenshot showing you can't transfer an negative balance</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/165863639-380b09f7-224d-43b7-b96a-e85c7ca70e32.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is the negative balance error<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add screenshot of the generated transaction history from the db</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/165863724-1f744081-bd6d-493b-9540-07ac60fa821f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Here is a few internal transfers from the db (the second one is<br>labeled incorrectly and should be an external transfer. I mistakenly forgot to change<br>the transaction type in the execute statement. This was fixed later after I<br>noticed it.)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 7: </em> Add a screenshot of the Accounts table showing both affected accounts</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/165863927-4d22322d-4ddf-4a66-ace9-f4185b14d57d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Here is the transaction table showing the successful transfer from 0002<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/165863995-cc3e5771-643c-4f32-9f34-e4727794661b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Here is the same for 0003<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 8: </em> Briefly explain the code process/flow of a transfer including how the accounts are fetched for the dropdowns</td></tr>
<tr><td> <em>Response:</em> <p>So each account is fetched using the same method of grabbing the current<br>user&#39;s id and having each account added to a selector that the user<br>can pick from. Once the accounts are picked, the user puts in a<br>value to transfer from the soruce account to the destination account. The program<br>checks to see if the account has enough funds, if it is a<br>positive number, and if both accounts are different. It then does the actual<br>transaction logic that I tweaked from deposit that uses the destination account&#39;s id<br>instead of the world account.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 9: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/DesiBerardo/IT202-008/pull/77">https://github.com/DesiBerardo/IT202-008/pull/77</a> </td></tr>
<tr><td> <em>Sub-Task 10: </em> Add link to transfer page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://db32-prod.herokuapp.com/project/int_transfer.php">https://db32-prod.herokuapp.com/project/int_transfer.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Transaction History Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of transaction history page showing the new transfer transaction</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/165863927-4d22322d-4ddf-4a66-ace9-f4185b14d57d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Here is a previous screenshot of the transfer transaction. Also note that transactions<br>are sorted by most recent.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots demonstrating the filters and pagination</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/165864475-13684f4b-f47a-4a16-af21-2737891f062d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Here is the latest 10 transactions which paginate after 10 transactions.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/165863927-4d22322d-4ddf-4a66-ace9-f4185b14d57d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Here is the second page of the transaction history page showing the remaining<br>transactions<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/165864576-dc059565-ef12-4707-8adf-9d7c092378ad.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Here is the transactions with all three filters applied, showing only deposits from<br>the specified dates.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how the filters/pagination work</td></tr>
<tr><td> <em>Response:</em> <p>So I put two date inputs to be the start and end date<br>filters as well as a filter to only show the specified transaction type.<br>When the user selects the desired filter, it is passed in using $_GET<br>so that the form remains filled even if they navigate with the pagination<br>stuff. When the filters are put in, the program checks if they are<br>set and within specified parameters (start date cant be after end date) and<br>are appended as WHERE clauses to a query which is then appended to<br>the base query which pulls the account info from the database and displays<br>it for the user<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/DesiBerardo/IT202-008/pull/78">https://github.com/DesiBerardo/IT202-008/pull/78</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add link to transfer page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://db32-prod.herokuapp.com/project/transactions.php?id=2">https://db32-prod.herokuapp.com/project/transactions.php?id=2</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://db32-prod.herokuapp.com/project/int_transfer.php">https://db32-prod.herokuapp.com/project/int_transfer.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User's profile First name and Last name </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the user's profile with the new fields</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/165865290-505770f4-1753-40e7-94fe-290464db97b5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Here are the fields for the users first and last name (The first<br>and last name fields are not pre-filled but I had fixed this once<br>I noticed I promise it works)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/DesiBerardo/IT202-008/pull/76">https://github.com/DesiBerardo/IT202-008/pull/76</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add link to transfer page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://db32-prod.herokuapp.com/project/profile.php">https://db32-prod.herokuapp.com/project/profile.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> User will be able to transfer funds to another user </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the external transfer page with filled in data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/165866047-d2a40016-6e0d-4743-8a41-0ddfc7a2b1da.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>External transfer page full of wonderful data<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot showing user can't send more than they have</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/165866455-7ce36240-bf6e-4637-a65b-ea23ef356efd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Error for trying to transfer too much<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot showing they can't send a negative amount</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/165866519-bb6cf099-48bb-49e1-aafc-d0df5eda4077.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Error for negative amount<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add screenshot(s) showing message if a user doesn't exist and/or a destination account wasn't found</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/165866558-6f1cdbe8-aa4f-4b47-9040-3484cec23ef4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Bundled incorrect number/name into same error for ease. Call me lazy I call<br>it efficient<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add screenshot of the transactions table showing the recorded transfer</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/165866809-5ff0713d-dee0-4f01-88b1-39c3d0f6de8b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>database showing external transfers<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add screenshot(s) showing the updated account balances</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/165866695-eb085efe-2d90-4a68-82d3-48d1590d529e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>updated balance of 0002<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/165866756-0bb234d4-dd87-4650-aef6-6547e1c59429.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>updated balance of 0007<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly explain the process of looking up the target user's account and the validation logic</td></tr>
<tr><td> <em>Response:</em> <p>So when both the text inputs for lastname and last 4 of account<br>number are filled out, the program will check if the number is valid<br>(4 digits long) and then a query will run searching for a user<br>with that last name and with an account that ends in those four<br>digits. If one isnt found, the program will not do the transaction. If<br>it doesnt, Itll use the same transfer logic as an internal transfer.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 8: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/DesiBerardo/IT202-008/pull/79">https://github.com/DesiBerardo/IT202-008/pull/79</a> </td></tr>
<tr><td> <em>Sub-Task 9: </em> Add link to transfer page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://db32-prod.herokuapp.com/project/ext_transfer.php">https://db32-prod.herokuapp.com/project/ext_transfer.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Proposal.md </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em>  Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone3.md accordingly and a direct link to the path on Heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/165867863-59f439fb-1e03-4d51-b06c-3f8066c81b40.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Here are all the items for milestone 3 correctly accounted for<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone3 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/71346396/165867959-bc408246-6966-49c7-8ff0-66496acd09c4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Heres the project board with closed issues<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S22/it202-milestone-3-bank-project/grade/db32" target="_blank">Grading</a></td></tr></table>