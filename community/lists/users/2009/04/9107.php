<?
$subject_val = "Re: [OMPI users] OpenMPI MPI_Bcast Algorithms";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 28 06:33:26 2009" -->
<!-- isoreceived="20090428103326" -->
<!-- sent="Tue, 28 Apr 2009 16:05:22 +0530" -->
<!-- isosent="20090428103522" -->
<!-- name="neeraj_at_[hidden]" -->
<!-- email="neeraj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI MPI_Bcast Algorithms" -->
<!-- id="OF709A25D5.AEBB3682-ON652575A6.00397128-652575A6.0039F93C_at_crlindia.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="505357.11067.qm_at_web62006.mail.re1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI MPI_Bcast Algorithms<br>
<strong>From:</strong> <a href="mailto:neeraj_at_[hidden]?Subject=Re:%20[OMPI%20users]%20OpenMPI%20MPI_Bcast%20Algorithms"><em>neeraj_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-04-28 06:35:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9108.php">Hugh Dickinson: "[OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<li><strong>Previous message:</strong> <a href="9106.php">shan axida: "[OMPI users] OpenMPI MPI_Bcast Algorithms"</a>
<li><strong>In reply to:</strong> <a href="9106.php">shan axida: "[OMPI users] OpenMPI MPI_Bcast Algorithms"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Axida,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;There are two ways you can call MPI_collectives. 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1) Automatic decision by OpenMPI which in turn call tuned 
<br>
collectives
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2) Forced decision, where you can override OpenMPI to call certain 
<br>
algorithms available for collective say MPI_Bcast.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The logic for 1. can be found in function 
<br>
ompi_coll_tuned_bcast_intra_dec_fixed at (file 
<br>
:ompi/mca/coll/tuned/coll_tuned_decision_fixed.c , line 221, version 
<br>
openmpi-1.3.2).
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;By default, openmpi switches algo based on message size, 
<br>
communicator size which they have put based on some heuristics which may 
<br>
differ from one network topology to another.
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In that case, i would suggest you to run benchmark programs with 
<br>
2. option and fine tune the MPI Collectives suited for your cluster 
<br>
architecture. 
<br>
Regards
<br>
<p>Neeraj Chourasia
<br>
Member of Technical Staff
<br>
Computational Research Laboratories Limited
<br>
(A wholly Owned Subsidiary of TATA SONS Ltd)
<br>
P: +91.9225520634
<br>
<p><p><p><p><p>shan axida &lt;axida2009_at_[hidden]&gt; 
<br>
Sent by: users-bounces_at_[hidden]
<br>
04/28/2009 03:25 PM
<br>
Please respond to
<br>
Open MPI Users &lt;users_at_[hidden]&gt;
<br>
<p><p>To
<br>
users_at_[hidden]
<br>
cc
<br>
<p>Subject
<br>
[OMPI users] OpenMPI MPI_Bcast Algorithms
<br>
<p><p><p><p><p><p>Hi all,
<br>
I think there are several algorithms used in MPI_Bcast.
<br>
I am wondering how are they decided to be excuted ?
<br>
I mean, How to decide which algorithm will be used? 
<br>
Is it depending on the message size or something ?
<br>
Would some people help me?
<br>
<p>Thank you!
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>=====-----=====-----=====
<br>
<p><p><p>Notice: The information contained in this e-mail
<br>
message and/or attachments to it may contain 
<br>
confidential or privileged information. If you are 
<br>
not the intended recipient, any dissemination, use, 
<br>
review, distribution, printing or copying of the 
<br>
information contained in this e-mail message 
<br>
and/or attachments to it are strictly prohibited. If 
<br>
you have received this communication in error, 
<br>
please notify us by reply e-mail or telephone and 
<br>
immediately and permanently delete the message 
<br>
and any attachments. 
<br>
<p>Internet communications cannot be guaranteed to be timely,
<br>
secure, error or virus-free. The sender does not accept liability
<br>
for any errors or omissions.Thank you
<br>
<p>=====-----=====-----=====
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9107/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9108.php">Hugh Dickinson: "[OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<li><strong>Previous message:</strong> <a href="9106.php">shan axida: "[OMPI users] OpenMPI MPI_Bcast Algorithms"</a>
<li><strong>In reply to:</strong> <a href="9106.php">shan axida: "[OMPI users] OpenMPI MPI_Bcast Algorithms"</a>
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
