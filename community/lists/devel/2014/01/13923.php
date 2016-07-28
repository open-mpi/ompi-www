<?
$subject_val = "[OMPI devel] SNAPC: dynamic send buffers";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 27 11:12:26 2014" -->
<!-- isoreceived="20140127161226" -->
<!-- sent="Mon, 27 Jan 2014 17:12:24 +0100" -->
<!-- isosent="20140127161224" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="[OMPI devel] SNAPC: dynamic send buffers" -->
<!-- id="20140127161224.GY30959_at_lisas.de" -->
<!-- charset="us-ascii" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [OMPI devel] SNAPC: dynamic send buffers<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-27 11:12:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13924.php">Nathan Hjelm: "Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures"</a>
<li><strong>Previous message:</strong> <a href="13922.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13935.php">Ralph Castain: "Re: [OMPI devel] SNAPC: dynamic send buffers"</a>
<li><strong>Reply:</strong> <a href="13935.php">Ralph Castain: "Re: [OMPI devel] SNAPC: dynamic send buffers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have the following patches which I would like to commit. All changes
<br>
are in the SNAPC component. The first patch replaces all statically
<br>
allocated buffers with dynamically allocate buffers. The second patch
<br>
removes compiler warnings and the last patch tries to re-introduce
<br>
functionality which I removed with my 'getting-it-compiled-again'
<br>
patches. Instead of blocking recv() calls it now uses
<br>
ORTE_WAIT_FOR_COMPLETION(). I included gitweb links to the patches.
<br>
<p>Please have a look at the patches.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<p>commit 6f10b44499b59c84d9032378c7f8c6b3526a029b
<br>
Author: Adrian Reber &lt;adrian.reber_at_[hidden]&gt;
<br>
Date:   Sun Jan 26 12:10:41 2014 +0100
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;SNAPC: use dynamic buffers for rml.send and rml.recv
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;The snapc component was still using static buffers
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for send_buffer_nb(). This patch changes opal_buffer_t buffer;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;to opal_buffer_t *buffer;
<br>
<p>&nbsp;orte/mca/snapc/full/snapc_full_app.c    | 119 +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-----------------------------------------------------------
<br>
&nbsp;orte/mca/snapc/full/snapc_full_global.c |  73 ++++++++++++++++++++++++++++++++++++------------------------------------
<br>
&nbsp;orte/mca/snapc/full/snapc_full_local.c  |  33 +++++++++++++++++++--------------
<br>
&nbsp;3 files changed, 114 insertions(+), 111 deletions(-)
<br>
<p>&nbsp;&nbsp;<a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=6f10b44499b59c84d9032378c7f8c6b3526a029b">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=6f10b44499b59c84d9032378c7f8c6b3526a029b</a>
<br>
<p>commit 218d04ad663ad76ad23cd99b62e83c435ccfe418
<br>
Author: Adrian Reber &lt;adrian.reber_at_[hidden]&gt;
<br>
Date:   Mon Jan 27 12:49:30 2014 +0100
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;SNAPC: remove compiler warnings
<br>
<p>&nbsp;orte/mca/snapc/full/snapc_full_global.c | 19 +++++--------------
<br>
&nbsp;orte/mca/snapc/full/snapc_full_local.c  | 29 ++++++-----------------------
<br>
&nbsp;2 files changed, 11 insertions(+), 37 deletions(-)
<br>
<p>&nbsp;&nbsp;<a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=218d04ad663ad76ad23cd99b62e83c435ccfe418">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=218d04ad663ad76ad23cd99b62e83c435ccfe418</a>
<br>
<p>commit 67d435cbe5df5c59519d605ce25443880244d2d5
<br>
Author: Adrian Reber &lt;adrian.reber_at_[hidden]&gt;
<br>
Date:   Mon Jan 27 14:31:36 2014 +0100
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;use ORTE_WAIT_FOR_COMPLETION with non-blocking receives
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;During the commits to make the C/R code compile again the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;blocking receive calls in snapc_full_app.c were
<br>
&nbsp;&nbsp;&nbsp;&nbsp;replaced by non-blocking receive calls with a dummy callback
<br>
&nbsp;&nbsp;&nbsp;&nbsp;function. This commit adds ORTE_WAIT_FOR_COMPLETION()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;after each non-blocking receive to wait for the data.
<br>
<p>&nbsp;orte/mca/snapc/full/snapc_full_app.c | 56 +++++++++++++++++---------------------------------------
<br>
&nbsp;1 file changed, 17 insertions(+), 39 deletions(-)
<br>
<p>&nbsp;&nbsp;<a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=67d435cbe5df5c59519d605ce25443880244d2d5">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=67d435cbe5df5c59519d605ce25443880244d2d5</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13924.php">Nathan Hjelm: "Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures"</a>
<li><strong>Previous message:</strong> <a href="13922.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13935.php">Ralph Castain: "Re: [OMPI devel] SNAPC: dynamic send buffers"</a>
<li><strong>Reply:</strong> <a href="13935.php">Ralph Castain: "Re: [OMPI devel] SNAPC: dynamic send buffers"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
