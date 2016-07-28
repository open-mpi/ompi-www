<?
$subject_val = "Re: [OMPI users] [[INVALID], INVALID] ORTE_ERROR_LOG: Not found in file ess_env_module.c at line 367";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 23 15:43:01 2016" -->
<!-- isoreceived="20160623194301" -->
<!-- sent="Thu, 23 Jun 2016 12:42:57 -0700" -->
<!-- isosent="20160623194257" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [[INVALID], INVALID] ORTE_ERROR_LOG: Not found in file ess_env_module.c at line 367" -->
<!-- id="38749EA0-4250-489E-B572-E8BB3E0E6125_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="BLU183-W8040062C0BA1000FFC4B2ED72D0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] [[INVALID], INVALID] ORTE_ERROR_LOG: Not found in file ess_env_module.c at line 367<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-23 15:42:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29538.php">Wilkinson, Collin: "[OMPI users] Fwd: Run MPI in Firewall Enviroment"</a>
<li><strong>Previous message:</strong> <a href="29536.php">Blair Climenhaga: "Re: [OMPI users] [[INVALID], INVALID] ORTE_ERROR_LOG: Not found in file ess_env_module.c at line 367"</a>
<li><strong>In reply to:</strong> <a href="29536.php">Blair Climenhaga: "Re: [OMPI users] [[INVALID], INVALID] ORTE_ERROR_LOG: Not found in file ess_env_module.c at line 367"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One easy solution: configure OMPI with &#226;&#128;&#148;enable-orterun-prefix-by-default and it will ensure that all the launched daemons and procs have the right setting on the backend nodes. Or you can ssh to each node and print the relevant envars and see what they say.
<br>
<p><p><span class="quotelev1">&gt; On Jun 23, 2016, at 12:19 PM, Blair Climenhaga &lt;blairclimenhaga_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for your reply. How would I check that the PATH and LD_LIBRARY_PATH are correct on all nodes? I have a feeling that this is a likely problem though as the computer I am using has had many iterations of MPI installed on it and likely in different locations. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All the best,
</span><br>
<span class="quotelev1">&gt; Blair Climenhaga
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: rhc_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Thu, 23 Jun 2016 11:59:56 -0700
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] [[INVALID],	INVALID] ORTE_ERROR_LOG: Not found in file ess_env_module.c at line	367
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looks like you are getting mixes of OMPI installations between the nodes - try ensuring that the PATH and LD_LIBRARY_PATH are correct on all the nodes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 23, 2016, at 11:48 AM, Blair Climenhaga &lt;blairclimenhaga_at_[hidden] &lt;mailto:blairclimenhaga_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello Everyone!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I recently downloaded OpenFOAM and while attempting to use its parallel features (which use mpi) I recieve the following error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; su2_at_su2-HP:~/OpenFOAM/su2-3.0.1/run/tutorials/incompressible/simpleFoam/motorBike_baseCase$ mpirun -np 4 simpleFoam -parallel
</span><br>
<span class="quotelev1">&gt; [su2-HP:21015] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file ess_env_module.c at line 367
</span><br>
<span class="quotelev1">&gt; [su2-HP:21016] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file ess_env_module.c at line 367
</span><br>
<span class="quotelev1">&gt; [su2-HP:21013] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file ess_env_module.c at line 367
</span><br>
<span class="quotelev1">&gt; [su2-HP:21014] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file ess_env_module.c at line 367
</span><br>
<span class="quotelev1">&gt; [su2-HP:21011] tcp_peer_recv_connect_ack: invalid header type: -1721630720
</span><br>
<span class="quotelev1">&gt; [su2-HP:21011] tcp_peer_recv_connect_ack: invalid header type: -1721630720
</span><br>
<span class="quotelev1">&gt; [su2-HP:21011] tcp_peer_recv_connect_ack: invalid header type: -1721630720
</span><br>
<span class="quotelev1">&gt; [su2-HP:21011] tcp_peer_recv_connect_ack: invalid header type: -1721630720
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have double-checked with colleagues that all OpenFOAM functions were correct so the only two remaining causes are that the mpi was not installed correctly and or that it is not correctly linked to the OpenFOAM. From the errors shown above, does anyone have an idea of which it may be? Or if it may be another problem entirely. Thank you everyone for your time and for any help you may be able to give. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All the best,
</span><br>
<span class="quotelev1">&gt; Blair Climenhaga
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29534.php">http://www.open-mpi.org/community/lists/users/2016/06/29534.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/06/29534.php">http://www.open-mpi.org/community/lists/users/2016/06/29534.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________ users mailing list users_at_[hidden] &lt;mailto:users_at_[hidden]&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29535.php">http://www.open-mpi.org/community/lists/users/2016/06/29535.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/06/29535.php">http://www.open-mpi.org/community/lists/users/2016/06/29535.php</a>&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29536.php">http://www.open-mpi.org/community/lists/users/2016/06/29536.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/06/29536.php">http://www.open-mpi.org/community/lists/users/2016/06/29536.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29537/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29538.php">Wilkinson, Collin: "[OMPI users] Fwd: Run MPI in Firewall Enviroment"</a>
<li><strong>Previous message:</strong> <a href="29536.php">Blair Climenhaga: "Re: [OMPI users] [[INVALID], INVALID] ORTE_ERROR_LOG: Not found in file ess_env_module.c at line 367"</a>
<li><strong>In reply to:</strong> <a href="29536.php">Blair Climenhaga: "Re: [OMPI users] [[INVALID], INVALID] ORTE_ERROR_LOG: Not found in file ess_env_module.c at line 367"</a>
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
