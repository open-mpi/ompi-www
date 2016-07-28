<?
$subject_val = "Re: [OMPI users] [EXT] Re:  Openmpi 1.8.8 and affinty";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 15 12:07:18 2016" -->
<!-- isoreceived="20160115170718" -->
<!-- sent="Fri, 15 Jan 2016 17:07:07 +0000" -->
<!-- isosent="20160115170707" -->
<!-- name="Tom Wurgler" -->
<!-- email="twurgl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXT] Re:  Openmpi 1.8.8 and affinty" -->
<!-- id="BY2PR07MB17287A2AE01F974AB21E7A2B6CD0_at_BY2PR07MB172.namprd07.prod.outlook.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="778B4EE0-C1A1-4C47-B990-98D4012E2B2D_at_open-mpi.org" -->
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
<strong>From:</strong> Tom Wurgler (<em>twurgl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-15 12:07:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28298.php">Ralph Castain: "Re: [OMPI users] [EXT] Re:  Openmpi 1.8.8 and affinty"</a>
<li><strong>Previous message:</strong> <a href="28296.php">Matt Thompson: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<li><strong>In reply to:</strong> <a href="28293.php">Ralph Castain: "Re: [OMPI users] Openmpi 1.8.8 and affinty"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28298.php">Ralph Castain: "Re: [OMPI users] [EXT] Re:  Openmpi 1.8.8 and affinty"</a>
<li><strong>Reply:</strong> <a href="28298.php">Ralph Castain: "Re: [OMPI users] [EXT] Re:  Openmpi 1.8.8 and affinty"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes Ralph, that is correct.
<br>
<p>________________________________________
<br>
From: users &lt;users-bounces_at_[hidden]&gt; on behalf of Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
Sent: Friday, January 15, 2016 11:32 AM
<br>
To: Open MPI Users
<br>
Subject: [EXT] Re: [OMPI users] Openmpi 1.8.8 and affinty
<br>
<p>Let me first check to see if I understand the question. You are running lsf and launching more than 1 job on the same node. You want the jobs to restrict themselves to a set of cores that have been assigned to them by lsf so they avoid overloading procs onto the same cores.
<br>
<p>Is that an accurate statement?
<br>
<p><span class="quotelev1">&gt; On Jan 15, 2016, at 6:53 AM, twurgl_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the past (v 1.6.4-) we used mpirun args of
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --mca mpi_paffinity_alone 1 --mca btl openib,tcp,sm,self
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with lsf 7.0.6, and this was enough to make cores not be oversubscribed when
</span><br>
<span class="quotelev1">&gt; submitting 2 or more jobs to the same node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now I am using 1.8.8 and thus far don't have the right combination of args to
</span><br>
<span class="quotelev1">&gt; make sure cores don't oversubscribe.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am currently using:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -report-bindings --map-by core --bind-to core --nooversubscribe --mca btl
</span><br>
<span class="quotelev1">&gt; openib,tcp,sm,self
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do I have the incorrect options or am I missing an option?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for any info
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tom
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28288.php">http://www.open-mpi.org/community/lists/users/2016/01/28288.php</a>
</span><br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28293.php">http://www.open-mpi.org/community/lists/users/2016/01/28293.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28298.php">Ralph Castain: "Re: [OMPI users] [EXT] Re:  Openmpi 1.8.8 and affinty"</a>
<li><strong>Previous message:</strong> <a href="28296.php">Matt Thompson: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<li><strong>In reply to:</strong> <a href="28293.php">Ralph Castain: "Re: [OMPI users] Openmpi 1.8.8 and affinty"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28298.php">Ralph Castain: "Re: [OMPI users] [EXT] Re:  Openmpi 1.8.8 and affinty"</a>
<li><strong>Reply:</strong> <a href="28298.php">Ralph Castain: "Re: [OMPI users] [EXT] Re:  Openmpi 1.8.8 and affinty"</a>
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
