<?
$subject_val = "Re: [OMPI users] [EXT] Re:  Openmpi 1.8.8 and affinty";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 15 12:20:09 2016" -->
<!-- isoreceived="20160115172009" -->
<!-- sent="Fri, 15 Jan 2016 09:20:06 -0800" -->
<!-- isosent="20160115172006" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXT] Re:  Openmpi 1.8.8 and affinty" -->
<!-- id="CFE6DF2C-BB53-4DDB-AE10-242E2F43314A_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="BY2PR07MB17287A2AE01F974AB21E7A2B6CD0_at_BY2PR07MB172.namprd07.prod.outlook.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXT] Re:  Openmpi 1.8.8 and affinty<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-15 12:20:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28299.php">¨q¡ï¨s: "[OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="28297.php">Tom Wurgler: "Re: [OMPI users] [EXT] Re:  Openmpi 1.8.8 and affinty"</a>
<li><strong>In reply to:</strong> <a href="28297.php">Tom Wurgler: "Re: [OMPI users] [EXT] Re:  Openmpi 1.8.8 and affinty"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28325.php">Dave Love: "Re: [OMPI users] Openmpi 1.8.8 and affinty"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I&#226;&#128;&#153;m not that familiar with LSF, though we do have some IBM folks on the list who may be better able to help. What you need to do is have LSF bind the job to some specified number of cores on each node - we will detect that envelope and stay inside it, which will provide the desired separation.
<br>
<p>Your other option is to just specify &#226;&#128;&#156;-bind-to none&#226;&#128;&#157;, and we won&#226;&#128;&#153;t bind to anything and thus the cores will be okay.
<br>
<p><p><span class="quotelev1">&gt; On Jan 15, 2016, at 9:07 AM, Tom Wurgler &lt;twurgl_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes Ralph, that is correct.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: users &lt;users-bounces_at_[hidden]&gt; on behalf of Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Friday, January 15, 2016 11:32 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: [EXT] Re: [OMPI users] Openmpi 1.8.8 and affinty
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let me first check to see if I understand the question. You are running lsf and launching more than 1 job on the same node. You want the jobs to restrict themselves to a set of cores that have been assigned to them by lsf so they avoid overloading procs onto the same cores.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is that an accurate statement?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 15, 2016, at 6:53 AM, twurgl_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In the past (v 1.6.4-) we used mpirun args of
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --mca mpi_paffinity_alone 1 --mca btl openib,tcp,sm,self
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; with lsf 7.0.6, and this was enough to make cores not be oversubscribed when
</span><br>
<span class="quotelev2">&gt;&gt; submitting 2 or more jobs to the same node.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Now I am using 1.8.8 and thus far don't have the right combination of args to
</span><br>
<span class="quotelev2">&gt;&gt; make sure cores don't oversubscribe.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am currently using:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -report-bindings --map-by core --bind-to core --nooversubscribe --mca btl
</span><br>
<span class="quotelev2">&gt;&gt; openib,tcp,sm,self
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Do I have the incorrect options or am I missing an option?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for any info
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; tom
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28288.php">http://www.open-mpi.org/community/lists/users/2016/01/28288.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28293.php">http://www.open-mpi.org/community/lists/users/2016/01/28293.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28297.php">http://www.open-mpi.org/community/lists/users/2016/01/28297.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28299.php">¨q¡ï¨s: "[OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="28297.php">Tom Wurgler: "Re: [OMPI users] [EXT] Re:  Openmpi 1.8.8 and affinty"</a>
<li><strong>In reply to:</strong> <a href="28297.php">Tom Wurgler: "Re: [OMPI users] [EXT] Re:  Openmpi 1.8.8 and affinty"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28325.php">Dave Love: "Re: [OMPI users] Openmpi 1.8.8 and affinty"</a>
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
