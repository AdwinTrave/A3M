# Contributing to A3M


A3M is a community driven project and accepts contributions of code and documentation from the community. These contributions are made in the form of Issues or [Pull Requests](http://help.github.com/send-pull-requests/) on the [A3M repository](https://github.com/donjakobo/A3M>) on GitHub.

Issues are a quick way to point out a bug. If you find a bug or documentation error in A3M then please check a few things first:

1. There is not already an open Issue
2. The issue has already been fixed (check the develop branch, or look for closed Issues)
3. Is it something really obvious that you can fix yourself?
4. Wasn't your question answered on [StackOverflow.com](http://www.stackoverflow.com/)?

Reporting issues is helpful but an even better approach is to send a Pull Request, which is done by "Forking" the main repository and committing to your own copy. This will require you to use the version control system called Git.

## Guidelines

Before we look into how, here are the guidelines. If your Pull Requests fail
to pass these guidelines it will be declined and you will need to re-submit
when you’ve made the changes. This might sound a bit tough, but it is required
for us to maintain quality of the code-base.

### PHP Style

All code must meet the CodeIgniter [Style Guide](http://codeigniter.com/user_guide/general/styleguide.html), which is
essentially the [Allman indent style](http://en.wikipedia.org/wiki/Indent_style#Allman_style), underscores and readable operators. This makes certain that all code is the same format as the existing code and means it will be as readable as possible.

### Documentation

If you change anything that requires a change to documentation then you will need to add it. New classes, methods, parameters, changing default values, etc are all things that will require a change to documentation. The change-log must also be updated for every change. Also PHPDoc blocks must be maintained.

### Compatibility

A3M is compatible with PHP 5.3 so all code supplied must stick to
this requirement. If PHP 5.4 or 5.3 functions or features are used then there
must be a fallback for PHP 5.3 or 5.2.4 (where possible).

### Branching

CodeIgniter uses the [Git-Flow](http://nvie.com/posts/a-successful-git-branching-model/) branching model which requires all pull requests to be sent to the "develop" branch. This is
where the next planned version will be developed. The "master" branch will always contain the latest stable version and is kept clean so a "hotfix" (e.g: an emergency security patch) can be applied to master to create a new version, without worrying about other features holding it up. For this reason all commits need to be made to "develop" and any sent to "master" will be closed automatically. If you have multiple changes to submit, please place all changes into their own branch on your fork.

One thing at a time: A pull request should only contain one change. That does not mean only one commit, but one change - however many commits it took. The reason for this is that if you change X and Y but send a pull request for both at the same time, we might really want X but disagree with Y, meaning we cannot merge the request. Using the Git-Flow branching model you can create new branches for both of these features and send two requests.
