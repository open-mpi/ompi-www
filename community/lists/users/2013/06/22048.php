<?
$subject_val = "Re: [OMPI users] Oversubcription for mimd/mpmd mpiruns";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  6 12:46:51 2013" -->
<!-- isoreceived="20130606164651" -->
<!-- sent="Thu, 6 Jun 2013 09:46:44 -0700" -->
<!-- isosent="20130606164644" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Oversubcription for mimd/mpmd mpiruns" -->
<!-- id="45FF57BD-B1EC-422B-89D0-41B8E51DE52A_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="trinity-5a4d5d79-b674-4bd0-82bd-042922b1a65f-1370536190549_at_3capp-gmx-bs44" -->
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
<strong>Subject:</strong> Re: [OMPI users] Oversubcription for mimd/mpmd mpiruns<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-06 12:46:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22049.php">George Bosilca: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<li><strong>Previous message:</strong> <a href="22047.php">Ralph Castain: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<li><strong>In reply to:</strong> <a href="22045.php">Nima Aghajari: "Re: [OMPI users] Oversubcription for mimd/mpmd mpiruns"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 6, 2013, at 9:29 AM, &quot;Nima Aghajari&quot; &lt;greyy_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; first of all thanks for your reply. I tried specifying the --slot-list option like you proposed. This will unfortunately lead to the same mpirun with 5 cores. Adding another slot-list command for the second program, e.g.
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;      mpirun -np 4 --slot-list 0-3 prog_1 : -np 1 --slot-list 0 prog_2
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; will actually run on only 4 cores, but now it takes more than triple the time as needed before on 5 cores. I suppose there should be some overhead because of the oversubscription but that definitely seems too much. Any suggestions?
</span><br>
<p>Not really - oversubscription is pretty painful, depending on what mechanism you use to &quot;idle&quot; prog_2. It could be polling if you aren't careful. You also have to see how you are &quot;idling&quot; prog_1 once it completes its task - again, it could be polling hard if it is in a barrier in MPI_Finalize.
<br>
<p><p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22048/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22049.php">George Bosilca: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<li><strong>Previous message:</strong> <a href="22047.php">Ralph Castain: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<li><strong>In reply to:</strong> <a href="22045.php">Nima Aghajari: "Re: [OMPI users] Oversubcription for mimd/mpmd mpiruns"</a>
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
