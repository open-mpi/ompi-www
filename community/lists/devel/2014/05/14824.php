<?
$subject_val = "Re: [OMPI devel] problem compiling trunk after r31810";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 18 23:39:39 2014" -->
<!-- isoreceived="20140519033939" -->
<!-- sent="Sun, 18 May 2014 20:37:29 -0700" -->
<!-- isosent="20140519033729" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] problem compiling trunk after r31810" -->
<!-- id="E23E2697-1EA7-410F-B00F-C73DCFEE4170_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5v=tJ_gjgrN8itYJGMsTa1FjRv=a9xJ7CGB+O+aRAdseA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] problem compiling trunk after r31810<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-18 23:37:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14825.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31786 - trunk/ompi/mca/bml/r2"</a>
<li><strong>Previous message:</strong> <a href="14823.php">Gilles Gouaillardet: "[OMPI devel] problem compiling trunk after r31810"</a>
<li><strong>In reply to:</strong> <a href="14823.php">Gilles Gouaillardet: "[OMPI devel] problem compiling trunk after r31810"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, that patch isn't correct either - I'll fix it
<br>
<p><p>On May 18, 2014, at 7:44 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i was unable to compile trunk after svn update.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i use different directories (aka VPATH) for source and build
</span><br>
<span class="quotelev1">&gt; error message is related to the missing shmem/java directory
</span><br>
<span class="quotelev1">&gt; from the oshmem directory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The attached patch fixed this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* that being said, i did not try to build java for oshmem,
</span><br>
<span class="quotelev1">&gt; so the i did not commit this patch since it might not work when needed */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; &lt;oshmem.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14823.php">http://www.open-mpi.org/community/lists/devel/2014/05/14823.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14825.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31786 - trunk/ompi/mca/bml/r2"</a>
<li><strong>Previous message:</strong> <a href="14823.php">Gilles Gouaillardet: "[OMPI devel] problem compiling trunk after r31810"</a>
<li><strong>In reply to:</strong> <a href="14823.php">Gilles Gouaillardet: "[OMPI devel] problem compiling trunk after r31810"</a>
<!-- nextthread="start" -->
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
