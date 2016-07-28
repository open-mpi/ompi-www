<?
$subject_val = "Re: [OMPI users] oob-tcp error (warning?) message";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 27 09:27:08 2015" -->
<!-- isoreceived="20151127142708" -->
<!-- sent="Fri, 27 Nov 2015 14:26:49 +0000" -->
<!-- isosent="20151127142649" -->
<!-- name="Grigory Shamov" -->
<!-- email="Grigory.Shamov_at_[hidden]" -->
<!-- subject="Re: [OMPI users] oob-tcp error (warning?) message" -->
<!-- id="D27DC32E.873AF%Grigory.Shamov_at_ad.umanitoba.ca" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="77AF8BF1-9480-422A-96B4-A694E5EB271C_at_open-mpi.org" -->
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
<strong>From:</strong> Grigory Shamov (<em>Grigory.Shamov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-27 09:26:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28116.php">Ralph Castain: "Re: [OMPI users] oob-tcp error (warning?) message"</a>
<li><strong>Previous message:</strong> <a href="28114.php">Ralph Castain: "Re: [OMPI users] oob-tcp error (warning?) message"</a>
<li><strong>In reply to:</strong> <a href="28114.php">Ralph Castain: "Re: [OMPI users] oob-tcp error (warning?) message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28116.php">Ralph Castain: "Re: [OMPI users] oob-tcp error (warning?) message"</a>
<li><strong>Reply:</strong> <a href="28116.php">Ralph Castain: "Re: [OMPI users] oob-tcp error (warning?) message"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Thanks for the reply!
<br>
I have tried, but couldn't get 1.8.8 or 1.10 (tried 1.10.0 back then) to
<br>
work with our pretty old Torque 2.5.13 with cpusets . Under some
<br>
circumstances (process/node layout as given by Torque), it fails to bind
<br>
cores with messages like:
<br>
<p>&nbsp;&nbsp;Error message:     hwloc_set_cpubind returned &quot;Error&quot; for bitmap &quot;0&quot;
<br>
&nbsp;&nbsp;Location:        
<br>
../../../../../openmpi-1.10.0/orte/mca/odls/default/odls_default_module.c:5
<br>
51
<br>
<p><p><p><pre>
-- 
Grigory Shamov
HPC Analist,
Westgrid/ComputeCanada Site Lead
University of Manitoba
E2-588 EITC Building,
(204) 474-9625
On 15-11-26 6:42 PM, &quot;users on behalf of Ralph Castain&quot;
&lt;users-bounces_at_[hidden] on behalf of rhc_at_[hidden]&gt; wrote:
&gt;You might want to upgrade to 1.10.1, or at least to 1.8.8 as 1.6.5 is
&gt;pretty old
&gt;
&gt;&gt; On Nov 26, 2015, at 1:49 PM, Grigory Shamov
&gt;&gt;&lt;Grigory.Shamov_at_[hidden]&gt; wrote:
&gt;&gt; 
&gt;&gt; Hi All,
&gt;&gt; 
&gt;&gt; For a parallel MPI job, we sometimes (not always) get the following
&gt;&gt; message:
&gt;&gt; 
&gt;&gt; [n047:25850] [[36630,0],1] -&gt; [[36630,0],0] (node: n230) oob-tcp: Number
&gt;&gt; of attempts to create TCP connection has been exceeded.  Can not
&gt;&gt; communicate with peer
&gt;&gt; [n047:25850] [[36630,0],1] ORTE_ERROR_LOG: Unreachable in file
&gt;&gt; ../../../../../openmpi-1.6.5/orte/mca/grpcomm/bad/grpcomm_bad_module.c
&gt;&gt;at
&gt;&gt; line 412
&gt;&gt; [n047:25850] [[36630,0],1] -&gt; [[36630,0],0] (node: n230) oob-tcp: Number
&gt;&gt; of attempts to create TCP connection has been exceeded.  Can not
&gt;&gt; communicate with peer
&gt;&gt; 
&gt;&gt; These appear in the middle of a running job; we use OpenMPI 1.6.5 and
&gt;&gt;OFED
&gt;&gt; 2.4 on CentOS 6.
&gt;&gt; 
&gt;&gt; -- 
&gt;&gt; Grigory Shamov
&gt;&gt; HPC Analist,
&gt;&gt; Westgrid/ComputeCanada Site Lead
&gt;&gt; University of Manitoba
&gt;&gt; E2-588 EITC Building,
&gt;&gt; (204) 474-9625
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; Link to this post:
&gt;&gt;<a href="http://www.open-mpi.org/community/lists/users/2015/11/28113.php">http://www.open-mpi.org/community/lists/users/2015/11/28113.php</a>
&gt;
&gt;_______________________________________________
&gt;users mailing list
&gt;users_at_[hidden]
&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;Link to this post:
&gt;<a href="http://www.open-mpi.org/community/lists/users/2015/11/28114.php">http://www.open-mpi.org/community/lists/users/2015/11/28114.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28116.php">Ralph Castain: "Re: [OMPI users] oob-tcp error (warning?) message"</a>
<li><strong>Previous message:</strong> <a href="28114.php">Ralph Castain: "Re: [OMPI users] oob-tcp error (warning?) message"</a>
<li><strong>In reply to:</strong> <a href="28114.php">Ralph Castain: "Re: [OMPI users] oob-tcp error (warning?) message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28116.php">Ralph Castain: "Re: [OMPI users] oob-tcp error (warning?) message"</a>
<li><strong>Reply:</strong> <a href="28116.php">Ralph Castain: "Re: [OMPI users] oob-tcp error (warning?) message"</a>
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
