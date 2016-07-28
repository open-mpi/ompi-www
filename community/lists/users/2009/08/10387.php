<?
$subject_val = "Re: [OMPI users] Invalid Info object in MPI_Comm_spawn_multiple";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 17 11:33:42 2009" -->
<!-- isoreceived="20090817153342" -->
<!-- sent="Mon, 17 Aug 2009 09:33:37 -0600" -->
<!-- isosent="20090817153337" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Invalid Info object in MPI_Comm_spawn_multiple" -->
<!-- id="71d2d8cc0908170833h58c5301bte1d15f0a3ef34b97_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="b88e40560908170828kd7c934fhb34670b792dd4e02_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Invalid Info object in MPI_Comm_spawn_multiple<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-17 11:33:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10388.php">Eugene Loh: "Re: [OMPI users] Help: How to accomplish processors affinity"</a>
<li><strong>Previous message:</strong> <a href="10386.php">Federico Golfr&#232; Andreasi: "[OMPI users] Invalid Info object in MPI_Comm_spawn_multiple"</a>
<li><strong>In reply to:</strong> <a href="10386.php">Federico Golfr&#232; Andreasi: "[OMPI users] Invalid Info object in MPI_Comm_spawn_multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10390.php">Jeff Squyres: "Re: [OMPI users] Invalid Info object in MPI_Comm_spawn_multiple"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We tried to make the most common info_keys the same, but there can be
<br>
differences. What info keys are you trying to pass?
<br>
<p><p>2009/8/17 Federico Golfr&#232; Andreasi &lt;federico.golfre_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Hi!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a little code that uses the MPI_Comm_spawn_multiple,
</span><br>
<span class="quotelev1">&gt; I've used it without any problems with the MPICH2 and MVAPICH2
</span><br>
<span class="quotelev1">&gt; implementation of MPI-2,
</span><br>
<span class="quotelev1">&gt; but with the Open MPI v1.3.3 it throws this error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Comm_spawn_multiple
</span><br>
<span class="quotelev1">&gt; *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; *** MPI_ERR_INFO: invalid info object
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and I've seen on
</span><br>
<span class="quotelev1">&gt; <a href="http://www.mpi-forum.org/docs/mpi21-report-bw/node204.htm#Node204">http://www.mpi-forum.org/docs/mpi21-report-bw/node204.htm#Node204</a>
</span><br>
<span class="quotelev1">&gt; that the MPI_Info object keys depend on the implementation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does the OpenMPI have a different implementation in respect of the
</span><br>
<span class="quotelev1">&gt; MPICH/MVAPICH?
</span><br>
<span class="quotelev1">&gt; What I have to change in order to make it run?
</span><br>
<span class="quotelev1">&gt; Or the problem is elsewhere located?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you very much,
</span><br>
<span class="quotelev1">&gt;    Federico Golfr&#232; Andreasi
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10387/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10388.php">Eugene Loh: "Re: [OMPI users] Help: How to accomplish processors affinity"</a>
<li><strong>Previous message:</strong> <a href="10386.php">Federico Golfr&#232; Andreasi: "[OMPI users] Invalid Info object in MPI_Comm_spawn_multiple"</a>
<li><strong>In reply to:</strong> <a href="10386.php">Federico Golfr&#232; Andreasi: "[OMPI users] Invalid Info object in MPI_Comm_spawn_multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10390.php">Jeff Squyres: "Re: [OMPI users] Invalid Info object in MPI_Comm_spawn_multiple"</a>
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
