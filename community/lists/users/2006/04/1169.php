<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Apr 30 19:36:30 2006" -->
<!-- isoreceived="20060430233630" -->
<!-- sent="Sun, 30 Apr 2006 19:36:17 -0400" -->
<!-- isosent="20060430233617" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Default number of slots when using Torque" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF7544A2_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Default number of slots when using Torque" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-30 19:36:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1170.php">Brian Barrett: "Re: [OMPI users] Default number of slots when using Torque"</a>
<li><strong>Previous message:</strong> <a href="1168.php">Michael Kluskens: "[OMPI users] MPI_Intercomm_Merge -- Fortran"</a>
<li><strong>Maybe in reply to:</strong> <a href="1167.php">Ogden, Jeffry Brandon: "[OMPI users] Default number of slots when using Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1170.php">Brian Barrett: "Re: [OMPI users] Default number of slots when using Torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OMPI will use as many slots as Torque tells it to.  So if you qsub with
<br>
ppn=2, then OMPI will use 2 slots per node; if you qsub with ppn=1, then
<br>
OMPI will use 1 slot per node, etc.
<br>
<p>OMPI defaults to -byslot scheduling, so if you qsub with ppn=2/OMPI uses
<br>
2 slots per node, OMPI will schedule MPI_COMM_WORLD ranks 0 and 1 on the
<br>
first node, 2 and 3 on the next node, etc.
<br>
<p>There is not currently any diagnostic output that shows this; I can add
<br>
it to my to-do list.
<br>
<p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Ogden, Jeffry Brandon
</span><br>
<span class="quotelev1">&gt; Sent: Friday, April 28, 2006 6:20 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Default number of slots when using Torque
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How does the orterun launch determine the default number of slots per
</span><br>
<span class="quotelev1">&gt; node when running in a Torque job?  Is there debug output from orterun
</span><br>
<span class="quotelev1">&gt; that will show me this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1170.php">Brian Barrett: "Re: [OMPI users] Default number of slots when using Torque"</a>
<li><strong>Previous message:</strong> <a href="1168.php">Michael Kluskens: "[OMPI users] MPI_Intercomm_Merge -- Fortran"</a>
<li><strong>Maybe in reply to:</strong> <a href="1167.php">Ogden, Jeffry Brandon: "[OMPI users] Default number of slots when using Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1170.php">Brian Barrett: "Re: [OMPI users] Default number of slots when using Torque"</a>
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
