<?
$subject_val = "Re: [OMPI devel] Orte cleanup";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  5 14:08:12 2008" -->
<!-- isoreceived="20080305190812" -->
<!-- sent="Wed, 05 Mar 2008 12:08:01 -0700" -->
<!-- isosent="20080305190801" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Orte cleanup" -->
<!-- id="C3F43DA1.C89A%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C947FF16-46AF-4446-8826-4247E3B82596_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2008-03-05 14:08:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3381.php">Camille Coti: "[OMPI devel] orte_job_data"</a>
<li><strong>Previous message:</strong> <a href="3379.php">Greg Watson: "Re: [OMPI devel] Fwd: OpenMPI changes"</a>
<li><strong>In reply to:</strong> <a href="3373.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] Orte cleanup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3390.php">Ralph Castain: "Re: [OMPI devel] Orte cleanup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Wow, this took 4.5 hours to get through our Lab's email filter! You must
<br>
have been very bad recently. ;-))  Probably because you are being mean to my
<br>
poor little orteds...
<br>
<p>We still don't have a reliable way for mpirun to detect that orteds have
<br>
crashed. I am working on some methods right now that look like they will
<br>
work in TM (and perhaps SLURM) environments, and am working on ensuring that
<br>
mpirun can reliably tell all the other orteds to die when this is detected.
<br>
There already is a mechanism in the system that was a first cut at ensuring
<br>
all orteds get the &quot;die&quot; message, but I'm not convinced it is truly robust
<br>
yet.
<br>
<p>Brian contacted me via iPhone email to indicate that he might be willing to
<br>
restore the functionality whereby an app process would detect it had no RML
<br>
comm routes available any more and &quot;abort&quot;. Hopefully, when he gets
<br>
somewhere where a longer message is possible, he can confirm (or deny!) that
<br>
understanding.
<br>
<p>Let me know if I can be of help
<br>
Ralph
<br>
<p><p><p>On 3/5/08 7:39 AM, &quot;Aur&#233;lien Bouteiller&quot; &lt;bouteill_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Scenario 2 is definitely one of those we have been experienced (we are
</span><br>
<span class="quotelev1">&gt; making some changes to orte and this lead some orted to crash). I will
</span><br>
<span class="quotelev1">&gt; try to find a way to reproduce easily the other one, where aborted MPI
</span><br>
<span class="quotelev1">&gt; processes are left behind (but no orted).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 5 mars 08 &#224; 08:43, Ralph H Castain a &#233;crit :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Awesome. I haven't been seeing this behavior, but I won't swear that
</span><br>
<span class="quotelev2">&gt;&gt; it is
</span><br>
<span class="quotelev2">&gt;&gt; anywhere near fully tested.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; A couple of possibilities come to mind:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. are you building threaded? If so, then all bets are off. The new
</span><br>
<span class="quotelev2">&gt;&gt; release
</span><br>
<span class="quotelev2">&gt;&gt; of orte depends heavily on libevent. As George pointed out on the Tues
</span><br>
<span class="quotelev2">&gt;&gt; telecon, libevent is definitely not thread safe. So, if you are
</span><br>
<span class="quotelev2">&gt;&gt; building
</span><br>
<span class="quotelev2">&gt;&gt; threaded, you can just about guarantee a problem will occur,
</span><br>
<span class="quotelev2">&gt;&gt; especially if
</span><br>
<span class="quotelev2">&gt;&gt; something crashes
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. are the orteds crashing? If so, and you are using the tree routed
</span><br>
<span class="quotelev2">&gt;&gt; module
</span><br>
<span class="quotelev2">&gt;&gt; (which is the default), then application procs will be blocked from
</span><br>
<span class="quotelev2">&gt;&gt; finalizing since they will not be able to complete the barrier in
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Finalize. That barrier relies on the RML to communicate between
</span><br>
<span class="quotelev2">&gt;&gt; each
</span><br>
<span class="quotelev2">&gt;&gt; process and the rank=0 process. In the tree routed module, all RML
</span><br>
<span class="quotelev2">&gt;&gt; communications is done through the local daemon - if that daemon
</span><br>
<span class="quotelev2">&gt;&gt; dies during
</span><br>
<span class="quotelev2">&gt;&gt; the job, then comm is broken. There currently is no recovery
</span><br>
<span class="quotelev2">&gt;&gt; mechanism, nor
</span><br>
<span class="quotelev2">&gt;&gt; does the OOB sense that the daemon socket is gone and abort the
</span><br>
<span class="quotelev2">&gt;&gt; proc. We
</span><br>
<span class="quotelev2">&gt;&gt; probably need to develop at least a method for doing the latter so
</span><br>
<span class="quotelev2">&gt;&gt; that
</span><br>
<span class="quotelev2">&gt;&gt; things don't just hang.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That is all I can think of immediately. If you can tell me more
</span><br>
<span class="quotelev2">&gt;&gt; about the
</span><br>
<span class="quotelev2">&gt;&gt; scenario, I can try to look at it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 3/4/08 9:37 PM, &quot;Aur&#233;lien Bouteiller&quot; &lt;bouteill_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I noticed that the new release of orte is not as good as it used to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to cleanup the mess left by crashed/aborted mpi processes. Recently
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have been experiencing a lot of zombie or live locked processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; running on the cluster nodes and disturbing following experiments. I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; didn't really had time to investigate the issue, maybe ralph can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; set a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ticket if he is able to reproduce this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Aurelien
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Dr. Aur&#233;lien Bouteiller
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Sr. Research Associate at Innovative Computing Laboratory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * University of Tennessee
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * 1122 Volunteer Boulevard, suite 350
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Knoxville, TN 37996
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * 865 974 6321
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="3381.php">Camille Coti: "[OMPI devel] orte_job_data"</a>
<li><strong>Previous message:</strong> <a href="3379.php">Greg Watson: "Re: [OMPI devel] Fwd: OpenMPI changes"</a>
<li><strong>In reply to:</strong> <a href="3373.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] Orte cleanup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3390.php">Ralph Castain: "Re: [OMPI devel] Orte cleanup"</a>
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
