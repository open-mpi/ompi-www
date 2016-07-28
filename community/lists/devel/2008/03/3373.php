<?
$subject_val = "Re: [OMPI devel] Orte cleanup";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  5 09:39:25 2008" -->
<!-- isoreceived="20080305143925" -->
<!-- sent="Wed, 5 Mar 2008 09:39:13 -0500" -->
<!-- isosent="20080305143913" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Orte cleanup" -->
<!-- id="C947FF16-46AF-4446-8826-4247E3B82596_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C3F3F192.C857%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-05 09:39:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3374.php">Ralph H Castain: "[OMPI devel] Vprotocol warnings"</a>
<li><strong>Previous message:</strong> <a href="3372.php">Ralph H Castain: "Re: [OMPI devel] Orte cleanup"</a>
<li><strong>In reply to:</strong> <a href="3372.php">Ralph H Castain: "Re: [OMPI devel] Orte cleanup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3380.php">Ralph H Castain: "Re: [OMPI devel] Orte cleanup"</a>
<li><strong>Reply:</strong> <a href="3380.php">Ralph H Castain: "Re: [OMPI devel] Orte cleanup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Scenario 2 is definitely one of those we have been experienced (we are  
<br>
making some changes to orte and this lead some orted to crash). I will  
<br>
try to find a way to reproduce easily the other one, where aborted MPI  
<br>
processes are left behind (but no orted).
<br>
<p>Thanks,
<br>
Aurelien
<br>
<p><p>Le 5 mars 08 &#224; 08:43, Ralph H Castain a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Awesome. I haven't been seeing this behavior, but I won't swear that  
</span><br>
<span class="quotelev1">&gt; it is
</span><br>
<span class="quotelev1">&gt; anywhere near fully tested.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A couple of possibilities come to mind:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. are you building threaded? If so, then all bets are off. The new  
</span><br>
<span class="quotelev1">&gt; release
</span><br>
<span class="quotelev1">&gt; of orte depends heavily on libevent. As George pointed out on the Tues
</span><br>
<span class="quotelev1">&gt; telecon, libevent is definitely not thread safe. So, if you are  
</span><br>
<span class="quotelev1">&gt; building
</span><br>
<span class="quotelev1">&gt; threaded, you can just about guarantee a problem will occur,  
</span><br>
<span class="quotelev1">&gt; especially if
</span><br>
<span class="quotelev1">&gt; something crashes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. are the orteds crashing? If so, and you are using the tree routed  
</span><br>
<span class="quotelev1">&gt; module
</span><br>
<span class="quotelev1">&gt; (which is the default), then application procs will be blocked from
</span><br>
<span class="quotelev1">&gt; finalizing since they will not be able to complete the barrier in
</span><br>
<span class="quotelev1">&gt; MPI_Finalize. That barrier relies on the RML to communicate between  
</span><br>
<span class="quotelev1">&gt; each
</span><br>
<span class="quotelev1">&gt; process and the rank=0 process. In the tree routed module, all RML
</span><br>
<span class="quotelev1">&gt; communications is done through the local daemon - if that daemon  
</span><br>
<span class="quotelev1">&gt; dies during
</span><br>
<span class="quotelev1">&gt; the job, then comm is broken. There currently is no recovery  
</span><br>
<span class="quotelev1">&gt; mechanism, nor
</span><br>
<span class="quotelev1">&gt; does the OOB sense that the daemon socket is gone and abort the  
</span><br>
<span class="quotelev1">&gt; proc. We
</span><br>
<span class="quotelev1">&gt; probably need to develop at least a method for doing the latter so  
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev1">&gt; things don't just hang.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is all I can think of immediately. If you can tell me more  
</span><br>
<span class="quotelev1">&gt; about the
</span><br>
<span class="quotelev1">&gt; scenario, I can try to look at it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 3/4/08 9:37 PM, &quot;Aur&#233;lien Bouteiller&quot; &lt;bouteill_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I noticed that the new release of orte is not as good as it used to  
</span><br>
<span class="quotelev2">&gt;&gt; be
</span><br>
<span class="quotelev2">&gt;&gt; to cleanup the mess left by crashed/aborted mpi processes. Recently  
</span><br>
<span class="quotelev2">&gt;&gt; We
</span><br>
<span class="quotelev2">&gt;&gt; have been experiencing a lot of zombie or live locked processes
</span><br>
<span class="quotelev2">&gt;&gt; running on the cluster nodes and disturbing following experiments. I
</span><br>
<span class="quotelev2">&gt;&gt; didn't really had time to investigate the issue, maybe ralph can  
</span><br>
<span class="quotelev2">&gt;&gt; set a
</span><br>
<span class="quotelev2">&gt;&gt; ticket if he is able to reproduce this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Aurelien
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; * Dr. Aur&#233;lien Bouteiller
</span><br>
<span class="quotelev2">&gt;&gt; * Sr. Research Associate at Innovative Computing Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; * University of Tennessee
</span><br>
<span class="quotelev2">&gt;&gt; * 1122 Volunteer Boulevard, suite 350
</span><br>
<span class="quotelev2">&gt;&gt; * Knoxville, TN 37996
</span><br>
<span class="quotelev2">&gt;&gt; * 865 974 6321
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="3374.php">Ralph H Castain: "[OMPI devel] Vprotocol warnings"</a>
<li><strong>Previous message:</strong> <a href="3372.php">Ralph H Castain: "Re: [OMPI devel] Orte cleanup"</a>
<li><strong>In reply to:</strong> <a href="3372.php">Ralph H Castain: "Re: [OMPI devel] Orte cleanup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3380.php">Ralph H Castain: "Re: [OMPI devel] Orte cleanup"</a>
<li><strong>Reply:</strong> <a href="3380.php">Ralph H Castain: "Re: [OMPI devel] Orte cleanup"</a>
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
