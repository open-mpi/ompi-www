<?
$subject_val = "Re: [OMPI users] oob-tcp error (warning?) message";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 27 11:54:01 2015" -->
<!-- isoreceived="20151127165401" -->
<!-- sent="Fri, 27 Nov 2015 08:53:55 -0800" -->
<!-- isosent="20151127165355" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] oob-tcp error (warning?) message" -->
<!-- id="A0D85959-0693-4688-9E29-F24E5067AADD_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="D27DC32E.873AF%Grigory.Shamov_at_ad.umanitoba.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] oob-tcp error (warning?) message<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-27 11:53:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28117.php">Felipe .: "[OMPI users] MPI_AllReduce vs MPI_IAllReduce"</a>
<li><strong>Previous message:</strong> <a href="28115.php">Grigory Shamov: "Re: [OMPI users] oob-tcp error (warning?) message"</a>
<li><strong>In reply to:</strong> <a href="28115.php">Grigory Shamov: "Re: [OMPI users] oob-tcp error (warning?) message"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I know there was an issue with Torque and cpusets at one time, but I believe that has been fixed (likely later in 1.10 series).
<br>
<p>Regardless, the error message you are seeing indicates the failure to open a socket between daemons on different nodes. Could be hitting a file descriptor limit, or it may just be an issue with specific nodes (and so you&#226;&#128;&#153;d only see it if your allocation included those nodes).
<br>
<p>You should only see that message during MPI_Init, not in the middle of the job.
<br>
<p><span class="quotelev1">&gt; On Nov 27, 2015, at 6:26 AM, Grigory Shamov &lt;Grigory.Shamov_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the reply!
</span><br>
<span class="quotelev1">&gt; I have tried, but couldn't get 1.8.8 or 1.10 (tried 1.10.0 back then) to
</span><br>
<span class="quotelev1">&gt; work with our pretty old Torque 2.5.13 with cpusets . Under some
</span><br>
<span class="quotelev1">&gt; circumstances (process/node layout as given by Torque), it fails to bind
</span><br>
<span class="quotelev1">&gt; cores with messages like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Error message:     hwloc_set_cpubind returned &quot;Error&quot; for bitmap &quot;0&quot;
</span><br>
<span class="quotelev1">&gt;  Location:        
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.10.0/orte/mca/odls/default/odls_default_module.c:5
</span><br>
<span class="quotelev1">&gt; 51
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Grigory Shamov
</span><br>
<span class="quotelev1">&gt; HPC Analist,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Westgrid/ComputeCanada Site Lead
</span><br>
<span class="quotelev1">&gt; University of Manitoba
</span><br>
<span class="quotelev1">&gt; E2-588 EITC Building,
</span><br>
<span class="quotelev1">&gt; (204) 474-9625
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
<span class="quotelev1">&gt; On 15-11-26 6:42 PM, &quot;users on behalf of Ralph Castain&quot;
</span><br>
<span class="quotelev1">&gt; &lt;users-bounces_at_[hidden] on behalf of rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You might want to upgrade to 1.10.1, or at least to 1.8.8 as 1.6.5 is
</span><br>
<span class="quotelev2">&gt;&gt; pretty old
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 26, 2015, at 1:49 PM, Grigory Shamov
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;Grigory.Shamov_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi All,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For a parallel MPI job, we sometimes (not always) get the following
</span><br>
<span class="quotelev3">&gt;&gt;&gt; message:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n047:25850] [[36630,0],1] -&gt; [[36630,0],0] (node: n230) oob-tcp: Number
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of attempts to create TCP connection has been exceeded.  Can not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communicate with peer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n047:25850] [[36630,0],1] ORTE_ERROR_LOG: Unreachable in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../openmpi-1.6.5/orte/mca/grpcomm/bad/grpcomm_bad_module.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; line 412
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n047:25850] [[36630,0],1] -&gt; [[36630,0],0] (node: n230) oob-tcp: Number
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of attempts to create TCP connection has been exceeded.  Can not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communicate with peer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; These appear in the middle of a running job; we use OpenMPI 1.6.5 and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OFED
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2.4 on CentOS 6.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Grigory Shamov
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HPC Analist,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Westgrid/ComputeCanada Site Lead
</span><br>
<span class="quotelev3">&gt;&gt;&gt; University of Manitoba
</span><br>
<span class="quotelev3">&gt;&gt;&gt; E2-588 EITC Building,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (204) 474-9625
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/11/28113.php">http://www.open-mpi.org/community/lists/users/2015/11/28113.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/11/28114.php">http://www.open-mpi.org/community/lists/users/2015/11/28114.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/11/28115.php">http://www.open-mpi.org/community/lists/users/2015/11/28115.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28117.php">Felipe .: "[OMPI users] MPI_AllReduce vs MPI_IAllReduce"</a>
<li><strong>Previous message:</strong> <a href="28115.php">Grigory Shamov: "Re: [OMPI users] oob-tcp error (warning?) message"</a>
<li><strong>In reply to:</strong> <a href="28115.php">Grigory Shamov: "Re: [OMPI users] oob-tcp error (warning?) message"</a>
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
