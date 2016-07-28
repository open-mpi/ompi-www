<?
$subject_val = "Re: [OMPI devel] Orte cleanup";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  5 08:43:43 2008" -->
<!-- isoreceived="20080305134343" -->
<!-- sent="Wed, 05 Mar 2008 06:43:30 -0700" -->
<!-- isosent="20080305134330" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Orte cleanup" -->
<!-- id="C3F3F192.C857%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="11736AE8-ED46-4B6F-946A-9EB4DEFA9360_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Orte cleanup<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-05 08:43:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3373.php">Aurélien Bouteiller: "Re: [OMPI devel] Orte cleanup"</a>
<li><strong>Previous message:</strong> <a href="3371.php">Jeff Squyres: "Re: [OMPI devel] Fwd: OpenMPI changes"</a>
<li><strong>In reply to:</strong> <a href="3366.php">Aur&#233;lien Bouteiller: "[OMPI devel] Orte cleanup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3373.php">Aurélien Bouteiller: "Re: [OMPI devel] Orte cleanup"</a>
<li><strong>Reply:</strong> <a href="3373.php">Aurélien Bouteiller: "Re: [OMPI devel] Orte cleanup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Awesome. I haven't been seeing this behavior, but I won't swear that it is
<br>
anywhere near fully tested.
<br>
<p>A couple of possibilities come to mind:
<br>
<p>1. are you building threaded? If so, then all bets are off. The new release
<br>
of orte depends heavily on libevent. As George pointed out on the Tues
<br>
telecon, libevent is definitely not thread safe. So, if you are building
<br>
threaded, you can just about guarantee a problem will occur, especially if
<br>
something crashes
<br>
<p>2. are the orteds crashing? If so, and you are using the tree routed module
<br>
(which is the default), then application procs will be blocked from
<br>
finalizing since they will not be able to complete the barrier in
<br>
MPI_Finalize. That barrier relies on the RML to communicate between each
<br>
process and the rank=0 process. In the tree routed module, all RML
<br>
communications is done through the local daemon - if that daemon dies during
<br>
the job, then comm is broken. There currently is no recovery mechanism, nor
<br>
does the OOB sense that the daemon socket is gone and abort the proc. We
<br>
probably need to develop at least a method for doing the latter so that
<br>
things don't just hang.
<br>
<p>That is all I can think of immediately. If you can tell me more about the
<br>
scenario, I can try to look at it.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p><p>On 3/4/08 9:37 PM, &quot;Aur&#233;lien Bouteiller&quot; &lt;bouteill_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I noticed that the new release of orte is not as good as it used to be
</span><br>
<span class="quotelev1">&gt; to cleanup the mess left by crashed/aborted mpi processes. Recently We
</span><br>
<span class="quotelev1">&gt; have been experiencing a lot of zombie or live locked processes
</span><br>
<span class="quotelev1">&gt; running on the cluster nodes and disturbing following experiments. I
</span><br>
<span class="quotelev1">&gt; didn't really had time to investigate the issue, maybe ralph can set a
</span><br>
<span class="quotelev1">&gt; ticket if he is able to reproduce this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; * Dr. Aur&#233;lien Bouteiller
</span><br>
<span class="quotelev1">&gt; * Sr. Research Associate at Innovative Computing Laboratory
</span><br>
<span class="quotelev1">&gt; * University of Tennessee
</span><br>
<span class="quotelev1">&gt; * 1122 Volunteer Boulevard, suite 350
</span><br>
<span class="quotelev1">&gt; * Knoxville, TN 37996
</span><br>
<span class="quotelev1">&gt; * 865 974 6321
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="3373.php">Aurélien Bouteiller: "Re: [OMPI devel] Orte cleanup"</a>
<li><strong>Previous message:</strong> <a href="3371.php">Jeff Squyres: "Re: [OMPI devel] Fwd: OpenMPI changes"</a>
<li><strong>In reply to:</strong> <a href="3366.php">Aur&#233;lien Bouteiller: "[OMPI devel] Orte cleanup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3373.php">Aurélien Bouteiller: "Re: [OMPI devel] Orte cleanup"</a>
<li><strong>Reply:</strong> <a href="3373.php">Aurélien Bouteiller: "Re: [OMPI devel] Orte cleanup"</a>
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
