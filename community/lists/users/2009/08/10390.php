<?
$subject_val = "Re: [OMPI users] Invalid Info object in MPI_Comm_spawn_multiple";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 17 14:12:32 2009" -->
<!-- isoreceived="20090817181232" -->
<!-- sent="Mon, 17 Aug 2009 14:12:27 -0400" -->
<!-- isosent="20090817181227" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Invalid Info object in MPI_Comm_spawn_multiple" -->
<!-- id="ED9D76E2-9364-4AF2-8C19-1D52846DED4B_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-17 14:12:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10391.php">Jeff Squyres: "Re: [OMPI users] problem starting openmpi on core duo macosx5"</a>
<li><strong>Previous message:</strong> <a href="10389.php">Ralph Castain: "Re: [OMPI users] PBS tm error returns"</a>
<li><strong>In reply to:</strong> <a href="10386.php">Federico Golfr&#232; Andreasi: "[OMPI users] Invalid Info object in MPI_Comm_spawn_multiple"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are you initializing your MPI_Info object?  Remember that -- at a  
<br>
minimum -- you need to call MPI_INFO_CREATE on an MPI_Info object (or  
<br>
pass MPI_INFO_NULL).
<br>
<p>On Aug 17, 2009, at 11:28 AM, Federico Golfr&#232; Andreasi wrote:
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
<span class="quotelev1">&gt; and I've seen on <a href="http://www.mpi-forum.org/docs/mpi21-report-bw/node204.htm#Node204">http://www.mpi-forum.org/docs/mpi21-report-bw/node204.htm#Node204</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10391.php">Jeff Squyres: "Re: [OMPI users] problem starting openmpi on core duo macosx5"</a>
<li><strong>Previous message:</strong> <a href="10389.php">Ralph Castain: "Re: [OMPI users] PBS tm error returns"</a>
<li><strong>In reply to:</strong> <a href="10386.php">Federico Golfr&#232; Andreasi: "[OMPI users] Invalid Info object in MPI_Comm_spawn_multiple"</a>
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
