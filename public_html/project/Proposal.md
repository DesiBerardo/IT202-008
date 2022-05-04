# Project Name: Simple Bank
## Project Summary: This project will create a bank simulation for users. They’ll be able to have various accounts, do standard bank functions like deposit, withdraw, internal (user’s accounts)/external(other user’s accounts) transfers, and creating/closing accounts.
## Github Link: https://github.com/DesiBerardo/IT202-008/tree/prod
## Project Board Link: https://github.com/DesiBerardo/IT202-008/projects/1
## Website Link: https://db32-prod.herokuapp.com/
## Your Name: Desimir Berardo
## https://www.youtube.com/watch?v=xK8_0slBi6s

<!-- Line item / Feature template (use this for each bullet point) -- DO NOT DELETE THIS SECTION


- [ ] \(mm/dd/yyyy of completion) Feature Title (from the proposal bullet point, if it's a sub-point indent it properly)
  -  Link to related .md file: [Link Name](link url)

 End Line item / Feature Template -- DO NOT DELETE THIS SECTION --> 
 
 
### Proposal Checklist and Evidence

- Milestone 1
  - [x] \(02/22/2022) * User will be able to register a new account
  -  https://github.com/DesiBerardo/IT202-008/blob/Milestone1/public_html/project/milestone1.md

  - [x] \(02/22/2022)* User will be able to login to their account (given they enter the correct credentials)
  -  https://github.com/DesiBerardo/IT202-008/blob/Milestone1/public_html/project/milestone1.md

  - [x] \(02/22/2022) * User will be able to logout
  -  https://github.com/DesiBerardo/IT202-008/blob/Milestone1/public_html/project/milestone1.md

  - [x] \(02/22/2022) * Basic security rules implemented
  -  https://github.com/DesiBerardo/IT202-008/blob/Milestone1/public_html/project/milestone1.md

  - [x] \(mm/dd/yyyy of completion) * Basic Roles implemented
  -  https://github.com/DesiBerardo/IT202-008/blob/Milestone1/public_html/project/milestone1.md 

  - [x] \(mm/dd/yyyy of completion) * Site should have basic styles/theme applied; everything should be styled
  -  https://github.com/DesiBerardo/IT202-008/blob/Milestone1/public_html/project/milestone1.md

  - [x] \(03/03/2022) * Any output messages/errors should be “user friendly”
  -  https://github.com/DesiBerardo/IT202-008/blob/Milestone1/public_html/project/milestone1.md

  - [x] \(03/03/2022) * User will be able to see their profile
  -  https://github.com/DesiBerardo/IT202-008/blob/Milestone1/public_html/project/milestone1.md

  - [x] \(03/03/2022) * User will be able to edit their profile
  -  https://github.com/DesiBerardo/IT202-008/blob/Milestone1/public_html/project/milestone1.md
  
  
- Milestone 2
  - [x] \(4/7/2022) Create the Accounts table (id, account_number [unique, always 12 characters], user_id, balance (default 0), account_type, created, modified)
  - https://github.com/DesiBerardo/IT202-008/blob/Milestone2/public_html/project/milestone2.md
  - https://github.com/DesiBerardo/IT202-008/pull/59

  - [x] \(4/15/2022) Project setup steps:
  - https://github.com/DesiBerardo/IT202-008/blob/Milestone2/public_html/project/milestone2.md
  - 

  - [x] \(4/15/2022) Create the Transactions table (see reference at end of document)
  - https://github.com/DesiBerardo/IT202-008/blob/Milestone2/public_html/project/milestone2.md
  - 

  - [x] \(4/15/2022) Dashboard Page
  - https://github.com/DesiBerardo/IT202-008/blob/Milestone2/public_html/project/milestone2.md

  - [x] \(4/16/2022) User will be able to create a checking account
  - https://github.com/DesiBerardo/IT202-008/blob/Milestone2/public_html/project/milestone2.md
  - https://db32-prod.herokuapp.com/project/create_account.php

  - [x] \(4/16/2022) User will be able to list their accounts
  - https://github.com/DesiBerardo/IT202-008/blob/Milestone2/public_html/project/milestone2.md
  - https://db32-prod.herokuapp.com/project/my_accounts.php

  - [x] \(4/17/2022) User will be able to click an account for more information (a.k.a Transaction History page)
  - https://github.com/DesiBerardo/IT202-008/blob/Milestone2/public_html/project/milestone2.md
  - https://db32-prod.herokuapp.com/project/transactions.php?id=7

  - [x] \(4/16/2022)User will be able to deposit/withdraw from their account(s)
  - https://github.com/DesiBerardo/IT202-008/blob/Milestone2/public_html/project/milestone2.md
  - https://db32-prod.herokuapp.com/project/deposit.php
  - https://db32-prod.herokuapp.com/project/withdraw.php

- Milestone 3
  - [x] \(4/25/2022) User will be able to transfer between their accounts
  -  https://github.com/DesiBerardo/IT202-008/blob/Milestone3/public_html/project/milestone3.md
  -  https://db32-prod.herokuapp.com/project/int_transfer.php

  - [x] \(4/26/2022) Transaction History Page
  -  https://github.com/DesiBerardo/IT202-008/blob/Milestone3/public_html/project/milestone3.md
  -  https://db32-prod.herokuapp.com/project/transactions.php?id=2

  - [x] \(4/21/2022) User's profile First name and Last name
  -  https://github.com/DesiBerardo/IT202-008/blob/Milestone3/public_html/project/milestone3.md
  -  https://db32-prod.herokuapp.com/project/profile.php

  - [x] \(4/28/2022) User will be able to transfer funds to another user
  -  https://github.com/DesiBerardo/IT202-008/blob/Milestone3/public_html/project/milestone3.md
  -  https://db32-prod.herokuapp.com/project/ext_transfer.php


- Milestone 4
  - [x] \(4/29/2022) User can set their profile to be public or private (will need another column in Users table)
  -  https://github.com/DesiBerardo/IT202-008/blob/Milestone4/public_html/project/milestone4.md
  -  https://db32-prod.herokuapp.com/project/profile.php?id=3
  - [x] \(4/29/2022) User will be able open a savings account
  -  https://github.com/DesiBerardo/IT202-008/blob/Milestone4/public_html/project/milestone4.md
  -  https://db32-prod.herokuapp.com/project/create_account.php
  - [x] \(5/02/2022) User will be able to take out a loan
  -  https://github.com/DesiBerardo/IT202-008/blob/Milestone4/public_html/project/milestone4.md
  -  https://db32-prod.herokuapp.com/project/create_loan.php
  - [x] \(5/02/2022) Listing accounts and/or viewing Account Details should show any applicable APY or “-” if none is set for the particular account
  -  https://github.com/DesiBerardo/IT202-008/blob/Milestone4/public_html/project/milestone4.md
  -  https://db32-prod.herokuapp.com/project/my_accounts.php
  - [x] \(5/02/2022) User will be able to close an account
  -  https://github.com/DesiBerardo/IT202-008/blob/Milestone4/public_html/project/milestone4.md
  -  https://db32-prod.herokuapp.com/project/my_accounts.php
  - [x] \(5/03/2022) Admin role (leave this section for last)
  -  https://github.com/DesiBerardo/IT202-008/blob/Milestone4/public_html/project/milestone4.md
  -  https://db32-prod.herokuapp.com/project/admin/search_user.php
  -  https://db32-prod.herokuapp.com/project/admin/search_account.php
### Intructions
#### Don't delete this
1. Pick one project type
2. Create a proposal.md file in the root of your project directory of your GitHub repository
3. Copy the contents of the Google Doc into this readme file per the template
4. Convert the list items to markdown checkboxes (apply any other markdown for organizational purposes)
5. Create a new Project Board on GitHub
   - Choose the Automated Kanban Board Template
   - For each major line item (or sub line item if applicable) create a GitHub issue
   - The title should be the line item text
   - The first comment should be the acceptance criteria (i.e., what you need to accomplish for it to be "complete")
   - Leave these in "to do" status until you start working on them
   - Assign each issue to your Project Board (the right-side panel)
   - Assign each issue to yourself (the right-side panel)
6. As you work
  1. As you work on features, create separate branches for the code in the style of Feature-ShortDescription (using the Milestone# branch as the source to branch from and to merge into)
  2. Add, commit, push the related file changes to this branch
  3. Add evidence to the PR (Feat to Milestone) conversation view comments showing the feature being implemented (these will be used to populate the related .md files for each milestone, forgetting to capture this will give you more work later on)
     - Screenshot(s) of the site view (make sure they clearly show the feature)
     - Screenshot of the database data if applicable
     - Describe each screenshot to specify exactly what's being shown
     - A code snippet screenshot or reference via GitHub markdown may be used as an alternative for evidence that can't be captured on the screen
  4. Update the checklist of the proposal.md file for each feature this branch is completing (ideally should be 1 branch/pull request per feature, but some cases may have multiple)
    - Basically add an x to the checkbox markdown along with a date after
      - (i.e.,   - [x] (mm/dd/yy) ....) See Template above
    - Add the pull request link as a new indented line for each line item being completed
    - Attach any related issue items on the right-side panel
  5. Merge the Feature Branch into your Milestone branch (this should close the pull request and the attached issues)
    - Merge the Milestone branch into dev, then dev into prod as needed (be sure it doesn't break anything in prod)
    - Last two steps are mostly for getting it to prod for delivery of the assignment 
  7. If the attached issues don't close wait until the next step
  8. Merge the updated dev branch into your production branch via a pull request
  9. Close any related issues that didn't auto close
    - You can edit the dropdown on the issue or drag/drop it to the proper column on the project board