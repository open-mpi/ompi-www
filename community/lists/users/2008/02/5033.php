<?
$subject_val = "Re: [OMPI users] Can't get OPENMPI to run parallel job with Myrinet/GM";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 14 22:18:40 2008" -->
<!-- isoreceived="20080215031840" -->
<!-- sent="Thu, 14 Feb 2008 22:18:30 -0500" -->
<!-- isosent="20080215031830" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't get OPENMPI to run parallel job with Myrinet/GM" -->
<!-- id="49E10404-7857-407A-96DF-ECA887C3C4F2_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080214161525.29E2A12D1_at_rds4020.akr.goodyear.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can't get OPENMPI to run parallel job with Myrinet/GM<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-14 22:18:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5034.php">Thomas Ropars: "Re: [OMPI users] MPI piggyback mechanism"</a>
<li><strong>Previous message:</strong> <a href="5032.php">Anze Slosar: "Re: [OMPI users] build trouble"</a>
<li><strong>In reply to:</strong> <a href="5031.php">Tom Wurgler: "[OMPI users] Can't get OPENMPI to run parallel job with Myrinet/GM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5043.php">twurgl_at_[hidden]: "Re: [OMPI users] Can't get OPENMPI to run parallel job with	Myrinet/GM"</a>
<li><strong>Reply:</strong> <a href="5043.php">twurgl_at_[hidden]: "Re: [OMPI users] Can't get OPENMPI to run parallel job with	Myrinet/GM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I run a full testing on the GM with 1.2.5 and with the trunk. Both of  
<br>
them run to completion without any errors.
<br>
<p>Moreover, the error message only say that one of the processes was  
<br>
terminated, which usually means that something bad happened somewhere  
<br>
else, and the runtime decided to terminate the whole job. This might  
<br>
be a segfault, an abort. Without more information it will be difficult  
<br>
to help or to offer any advice..
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Feb 14, 2008, at 11:15 AM, Tom Wurgler wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to use openmpi 1.2.5 (I also tried 1.2.4) to run a  
</span><br>
<span class="quotelev1">&gt; parallel job
</span><br>
<span class="quotelev1">&gt; using GM drivers.  The only message I get is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 19508 on node node93 exited on
</span><br>
<span class="quotelev1">&gt; signal 15 (Terminated).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can run serially on one node (4 processors), it just dies when  
</span><br>
<span class="quotelev1">&gt; trying to use
</span><br>
<span class="quotelev1">&gt; more than one node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5033/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5034.php">Thomas Ropars: "Re: [OMPI users] MPI piggyback mechanism"</a>
<li><strong>Previous message:</strong> <a href="5032.php">Anze Slosar: "Re: [OMPI users] build trouble"</a>
<li><strong>In reply to:</strong> <a href="5031.php">Tom Wurgler: "[OMPI users] Can't get OPENMPI to run parallel job with Myrinet/GM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5043.php">twurgl_at_[hidden]: "Re: [OMPI users] Can't get OPENMPI to run parallel job with	Myrinet/GM"</a>
<li><strong>Reply:</strong> <a href="5043.php">twurgl_at_[hidden]: "Re: [OMPI users] Can't get OPENMPI to run parallel job with	Myrinet/GM"</a>
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
