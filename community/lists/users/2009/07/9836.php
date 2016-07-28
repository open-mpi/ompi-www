<?
$subject_val = "Re: [OMPI users] (no subject)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  6 09:00:41 2009" -->
<!-- isoreceived="20090706130041" -->
<!-- sent="Mon, 06 Jul 2009 09:00:36 -0400" -->
<!-- isosent="20090706130036" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] (no subject)" -->
<!-- id="118CBEBE-32DF-45AE-9B63-A1622C98B963_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="284847.56891.qm_at_web37306.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] (no subject)<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-06 09:00:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9837.php">Dorian Krause: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<li><strong>Previous message:</strong> <a href="9835.php">Catalin David: "[OMPI users] Segmentation fault - Address not mapped"</a>
<li><strong>In reply to:</strong> <a href="9832.php">Mallikarjuna Shastry: "[OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The MPI standard does not define any functions for taking checkpoints  
<br>
from the application.
<br>
<p>The checkpoint/restart work in Open MPI is a command line driven,  
<br>
transparent solution. So the application does not have change in any  
<br>
way, and the user (or scheduler) must initiate the checkpoint from the  
<br>
command line (on the same node as the mpirun process).
<br>
<p>We have experimented with adding Open MPI specific checkpoint/restart  
<br>
interfaces in the context of the MPI Forum. These prototypes have not  
<br>
made it to the Open MPI trunk. Some information about that particular  
<br>
development is at the link below:
<br>
&nbsp;&nbsp;&nbsp;<a href="https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/Quiescence">https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/Quiescence</a>
<br>
<p>Best,
<br>
Josh
<br>
<p>On Jul 6, 2009, at 12:07 AM, Mallikarjuna Shastry wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; dear sir/madam
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; what are the mpi functins used for taking checkpoint and restart  
</span><br>
<span class="quotelev1">&gt; within applicaion in mpi programs and where do i get these functions  
</span><br>
<span class="quotelev1">&gt; from ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mallikarjuna shastry
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9837.php">Dorian Krause: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<li><strong>Previous message:</strong> <a href="9835.php">Catalin David: "[OMPI users] Segmentation fault - Address not mapped"</a>
<li><strong>In reply to:</strong> <a href="9832.php">Mallikarjuna Shastry: "[OMPI users] (no subject)"</a>
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
