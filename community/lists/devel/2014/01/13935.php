<?
$subject_val = "Re: [OMPI devel] SNAPC: dynamic send buffers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 28 11:02:02 2014" -->
<!-- isoreceived="20140128160202" -->
<!-- sent="Tue, 28 Jan 2014 08:01:53 -0800" -->
<!-- isosent="20140128160153" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SNAPC: dynamic send buffers" -->
<!-- id="44242987-2F5E-4517-A245-C244D007A12F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140127161224.GY30959_at_lisas.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SNAPC: dynamic send buffers<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-28 11:01:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13936.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2 is out"</a>
<li><strong>Previous message:</strong> <a href="13934.php">Jeff Squyres (jsquyres): "[OMPI devel] NEWS bullets"</a>
<li><strong>In reply to:</strong> <a href="13923.php">Adrian Reber: "[OMPI devel] SNAPC: dynamic send buffers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13944.php">Adrian Reber: "Re: [OMPI devel] SNAPC: dynamic send buffers"</a>
<li><strong>Reply:</strong> <a href="13944.php">Adrian Reber: "Re: [OMPI devel] SNAPC: dynamic send buffers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This looks okay to me. Couple of comments:
<br>
<p>1. if you don't want to create your own callback function, you can use the standard one. It does more than you need, but won't hurt anything:
<br>
<p>ORTE_DECLSPEC void orte_rml_recv_callback(int status, orte_process_name_t* sender,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_buffer_t *buffer,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_rml_tag_t tag, void *cbdata);
<br>
<p>The code is in orte/mca/rml/base/rml_base_frame.c
<br>
<p>2. be aware that ORTE_WAIT_FOR_COMPLETION will block if you are in an RML callback. I don't think that's an issue here, but just wanted to point it out.
<br>
<p>Ralph
<br>
<p>On Jan 27, 2014, at 8:12 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have the following patches which I would like to commit. All changes
</span><br>
<span class="quotelev1">&gt; are in the SNAPC component. The first patch replaces all statically
</span><br>
<span class="quotelev1">&gt; allocated buffers with dynamically allocate buffers. The second patch
</span><br>
<span class="quotelev1">&gt; removes compiler warnings and the last patch tries to re-introduce
</span><br>
<span class="quotelev1">&gt; functionality which I removed with my 'getting-it-compiled-again'
</span><br>
<span class="quotelev1">&gt; patches. Instead of blocking recv() calls it now uses
</span><br>
<span class="quotelev1">&gt; ORTE_WAIT_FOR_COMPLETION(). I included gitweb links to the patches.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please have a look at the patches.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		Adrian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; commit 6f10b44499b59c84d9032378c7f8c6b3526a029b
</span><br>
<span class="quotelev1">&gt; Author: Adrian Reber &lt;adrian.reber_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Sun Jan 26 12:10:41 2014 +0100
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    SNAPC: use dynamic buffers for rml.send and rml.recv
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    The snapc component was still using static buffers
</span><br>
<span class="quotelev1">&gt;    for send_buffer_nb(). This patch changes opal_buffer_t buffer;
</span><br>
<span class="quotelev1">&gt;    to opal_buffer_t *buffer;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; orte/mca/snapc/full/snapc_full_app.c    | 119 +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-----------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; orte/mca/snapc/full/snapc_full_global.c |  73 ++++++++++++++++++++++++++++++++++++------------------------------------
</span><br>
<span class="quotelev1">&gt; orte/mca/snapc/full/snapc_full_local.c  |  33 +++++++++++++++++++--------------
</span><br>
<span class="quotelev1">&gt; 3 files changed, 114 insertions(+), 111 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  <a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=6f10b44499b59c84d9032378c7f8c6b3526a029b">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=6f10b44499b59c84d9032378c7f8c6b3526a029b</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; commit 218d04ad663ad76ad23cd99b62e83c435ccfe418
</span><br>
<span class="quotelev1">&gt; Author: Adrian Reber &lt;adrian.reber_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Mon Jan 27 12:49:30 2014 +0100
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    SNAPC: remove compiler warnings
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; orte/mca/snapc/full/snapc_full_global.c | 19 +++++--------------
</span><br>
<span class="quotelev1">&gt; orte/mca/snapc/full/snapc_full_local.c  | 29 ++++++-----------------------
</span><br>
<span class="quotelev1">&gt; 2 files changed, 11 insertions(+), 37 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  <a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=218d04ad663ad76ad23cd99b62e83c435ccfe418">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=218d04ad663ad76ad23cd99b62e83c435ccfe418</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; commit 67d435cbe5df5c59519d605ce25443880244d2d5
</span><br>
<span class="quotelev1">&gt; Author: Adrian Reber &lt;adrian.reber_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Mon Jan 27 14:31:36 2014 +0100
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    use ORTE_WAIT_FOR_COMPLETION with non-blocking receives
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    During the commits to make the C/R code compile again the
</span><br>
<span class="quotelev1">&gt;    blocking receive calls in snapc_full_app.c were
</span><br>
<span class="quotelev1">&gt;    replaced by non-blocking receive calls with a dummy callback
</span><br>
<span class="quotelev1">&gt;    function. This commit adds ORTE_WAIT_FOR_COMPLETION()
</span><br>
<span class="quotelev1">&gt;    after each non-blocking receive to wait for the data.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; orte/mca/snapc/full/snapc_full_app.c | 56 +++++++++++++++++---------------------------------------
</span><br>
<span class="quotelev1">&gt; 1 file changed, 17 insertions(+), 39 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  <a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=67d435cbe5df5c59519d605ce25443880244d2d5">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=67d435cbe5df5c59519d605ce25443880244d2d5</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13936.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2 is out"</a>
<li><strong>Previous message:</strong> <a href="13934.php">Jeff Squyres (jsquyres): "[OMPI devel] NEWS bullets"</a>
<li><strong>In reply to:</strong> <a href="13923.php">Adrian Reber: "[OMPI devel] SNAPC: dynamic send buffers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13944.php">Adrian Reber: "Re: [OMPI devel] SNAPC: dynamic send buffers"</a>
<li><strong>Reply:</strong> <a href="13944.php">Adrian Reber: "Re: [OMPI devel] SNAPC: dynamic send buffers"</a>
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
