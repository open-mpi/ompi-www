# How to contribute to Open MPI

First off, thank you for taking the time to prepare a contribution to
Open MPI!

![You're awesome!](https://www.open-mpi.org/images/youre-awesome.jpg)

General information about contributing to the Open MPI project can be found at the [Contributing to Open MPI webpage](https://www.open-mpi.org/community/contribute/).
The instructions below are specifically for opening issues and pull requests against Open MPI's web site.

## Content

We love getting contributions from anyone.

A contribution can be as small as a minor bug fix, or as big as a bunch of updates and fixes to our FAQ.

We love them all!

For the FAQ in particular, [we do have a bunch of suggestions about how to write good FAQ entries](https://github.com/open-mpi/ompi/wiki/OMPIFAQEntries).  In particular, note that our FAQ is currently a hand-rolled PHP system with it's own markup syntax.  It's not complicated, but you might want to read that wiki page before starting.

## Contributor's Declaration

Our web site is code, and we maintain it under [the same open source license as the main Open MPI code base](https://github.com/open-mpi/ompi/blob/master/LICENSE).

As such, we need to ensure that all contributions are compatible with that license.

To that end, we require that all Git commits contributed to Open MPI
have a "Signed-off-by" token indicating that the commit author agrees
with [Open MPI's Contributor's
Declaration](https://github.com/open-mpi/ompi/wiki/Administrative-rules#contributors-declaration).

If you have not already done so, please ensure that:

1. Every commit contains exactly the "Signed-off-by" token.  You can
add this token via `git commit -s`.
1. The email address after "Signed-off-by" must match the Git commit
email address.

## How to contribute: pull requests

All changes to the web site go through GitHub pull requests.

Use the normal "GitHub flow" to make a pull request:

1. Make a fork of `open-mpi/ompi-www`
1. Make a branch in that fork
1. Commit your update(s)/fix(es) to that branch
1. Open a pull requests against `open-mpi/www`

We're not *as* picky about code on our web site as we are with code in the main Open MPI code repository, but having good, easy-to-read and easy-to-review commits is definitely helpful.

Testing your commits before making the pull request is strongly suggested.  You should be able to test most functionality on the web site with any modern PHP-enabled web server.

Before submitting, please read the [Contributing to the Open MPI Project FAQ](https://www.open-mpi.org/faq/?category=contributing) web page, and the [SubmittingPullRequests](https://github.com/open-mpi/ompi/wiki/SubmittingPullRequests) wiki page.  In particular, note that all Git commits contributed to Open MPI require a "Signed-off-by" line.

## Thank you!

That's about it.  Thank you!

— The Open MPI Team
