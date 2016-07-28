<?
$subject_val = "Re: [OMPI users] [[INVALID], INVALID] ORTE_ERROR_LOG: Not found in file ess_env_module.c at line 367";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 23 15:19:45 2016" -->
<!-- isoreceived="20160623191945" -->
<!-- sent="Thu, 23 Jun 2016 13:19:44 -0600" -->
<!-- isosent="20160623191944" -->
<!-- name="Blair Climenhaga" -->
<!-- email="blairclimenhaga_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [[INVALID], INVALID] ORTE_ERROR_LOG: Not found in file ess_env_module.c at line 367" -->
<!-- id="BLU183-W8040062C0BA1000FFC4B2ED72D0_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="2FB32C9F-BF89-4779-8FF8-8EC52483F72F_at_open-mpi.org" -->
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
<strong>From:</strong> Blair Climenhaga (<em>blairclimenhaga_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-23 15:19:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29537.php">Ralph Castain: "Re: [OMPI users] [[INVALID], INVALID] ORTE_ERROR_LOG: Not found in file ess_env_module.c at line 367"</a>
<li><strong>Previous message:</strong> <a href="29535.php">Ralph Castain: "Re: [OMPI users] [[INVALID], INVALID] ORTE_ERROR_LOG: Not found in file ess_env_module.c at line 367"</a>
<li><strong>In reply to:</strong> <a href="29535.php">Ralph Castain: "Re: [OMPI users] [[INVALID], INVALID] ORTE_ERROR_LOG: Not found in file ess_env_module.c at line 367"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29537.php">Ralph Castain: "Re: [OMPI users] [[INVALID], INVALID] ORTE_ERROR_LOG: Not found in file ess_env_module.c at line 367"</a>
<li><strong>Reply:</strong> <a href="29537.php">Ralph Castain: "Re: [OMPI users] [[INVALID], INVALID] ORTE_ERROR_LOG: Not found in file ess_env_module.c at line 367"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Thank you for your reply. How would I check that the PATH and LD_LIBRARY_PATH are correct on all nodes? I have a feeling that this is a likely problem though as the computer I am using has had many iterations of MPI installed on it and likely in different locations. 
<br>
<p>All the best,
<br>
Blair Climenhaga
<br>
<p>From: rhc_at_[hidden]
<br>
Date: Thu, 23 Jun 2016 11:59:56 -0700
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] [[INVALID],	INVALID] ORTE_ERROR_LOG: Not found in file ess_env_module.c at line	367
<br>
<p>Looks like you are getting mixes of OMPI installations between the nodes - try ensuring that the PATH and LD_LIBRARY_PATH are correct on all the nodes
<br>
On Jun 23, 2016, at 11:48 AM, Blair Climenhaga &lt;blairclimenhaga_at_[hidden]&gt; wrote:Hello Everyone!
<br>
<p>I recently downloaded OpenFOAM and while attempting to use its parallel features (which use mpi) I recieve the following error:
<br>
<p>su2_at_su2-HP:~/OpenFOAM/su2-3.0.1/run/tutorials/incompressible/simpleFoam/motorBike_baseCase$ mpirun -np 4 simpleFoam -parallel
<br>
[su2-HP:21015] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file ess_env_module.c at line 367
<br>
[su2-HP:21016] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file ess_env_module.c at line 367
<br>
[su2-HP:21013] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file ess_env_module.c at line 367
<br>
[su2-HP:21014] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file ess_env_module.c at line 367
<br>
[su2-HP:21011] tcp_peer_recv_connect_ack: invalid header type: -1721630720
<br>
[su2-HP:21011] tcp_peer_recv_connect_ack: invalid header type: -1721630720
<br>
[su2-HP:21011] tcp_peer_recv_connect_ack: invalid header type: -1721630720
<br>
[su2-HP:21011] tcp_peer_recv_connect_ack: invalid header type: -1721630720
<br>
<p>I have double-checked with colleagues that all OpenFOAM functions were correct so the only two remaining causes are that the mpi was not installed correctly and or that it is not correctly linked to the OpenFOAM. From the errors shown above, does anyone have an idea of which it may be? Or if it may be another problem entirely. Thank you everyone for your time and for any help you may be able to give. 
<br>
<p>All the best,
<br>
Blair Climenhaga
<br>
_______________________________________________users mailing listusers_at_open-mpi.orgSubscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/usersLink">https://www.open-mpi.org/mailman/listinfo.cgi/usersLink</a> to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29534.php">http://www.open-mpi.org/community/lists/users/2016/06/29534.php</a>
<br>
<p>_______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29535.php">http://www.open-mpi.org/community/lists/users/2016/06/29535.php</a> 		 	   		  
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29536/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29537.php">Ralph Castain: "Re: [OMPI users] [[INVALID], INVALID] ORTE_ERROR_LOG: Not found in file ess_env_module.c at line 367"</a>
<li><strong>Previous message:</strong> <a href="29535.php">Ralph Castain: "Re: [OMPI users] [[INVALID], INVALID] ORTE_ERROR_LOG: Not found in file ess_env_module.c at line 367"</a>
<li><strong>In reply to:</strong> <a href="29535.php">Ralph Castain: "Re: [OMPI users] [[INVALID], INVALID] ORTE_ERROR_LOG: Not found in file ess_env_module.c at line 367"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29537.php">Ralph Castain: "Re: [OMPI users] [[INVALID], INVALID] ORTE_ERROR_LOG: Not found in file ess_env_module.c at line 367"</a>
<li><strong>Reply:</strong> <a href="29537.php">Ralph Castain: "Re: [OMPI users] [[INVALID], INVALID] ORTE_ERROR_LOG: Not found in file ess_env_module.c at line 367"</a>
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
