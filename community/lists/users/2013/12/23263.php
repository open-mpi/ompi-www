<?
$subject_val = "Re: [OMPI users] MPI_Comm_spawn and exported variables";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 19 18:10:14 2013" -->
<!-- isoreceived="20131219231014" -->
<!-- sent="Thu, 19 Dec 2013 15:09:55 -0800" -->
<!-- isosent="20131219230955" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn and exported variables" -->
<!-- id="32F28FBF-C28D-447F-9F15-515E85A2ED3E_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAMsSzSCv7g4aCc0_mazy2WOYm675V65jhzRcFDfTHTCkWNxFFw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Comm_spawn and exported variables<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-19 18:09:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23264.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4a1r29646	with	-hostfile	option	under	Torque manager"</a>
<li><strong>Previous message:</strong> <a href="23262.php">Tim Miller: "[OMPI users] MPI_Comm_spawn and exported variables"</a>
<li><strong>In reply to:</strong> <a href="23262.php">Tim Miller: "[OMPI users] MPI_Comm_spawn and exported variables"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23265.php">Tim Miller: "Re: [OMPI users] MPI_Comm_spawn and exported variables"</a>
<li><strong>Reply:</strong> <a href="23265.php">Tim Miller: "Re: [OMPI users] MPI_Comm_spawn and exported variables"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 19, 2013, at 2:57 PM, Tim Miller &lt;btamiller_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a question similar (but not identical to) the one asked by Tom Fogel a week or so back...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a code that uses MPI_Comm_spawn to launch different processes. The executables for these use libraries in non-standard locations, so what I've done is add the directories containing them to my LD_LIBRARY_PATH environment variable, and then calling mpirun with &quot;-x LD_LIBRARY_PATH&quot;. This works well for me on OpenMPI 1.6.3 and earlier. However, I've been playing with OpenMPI 1.7.3 and this no longer seems to work. As soon as my code MPI_Comm_spawns, all the spawned processes die complaining that they can't find the correct libraries to start the executable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Has there been a way that exported variables are passed to spawned processes between OpenMPI 1.6 and 1.7?
</span><br>
<p>Not intentionally, though it is possible that some bug crept into the code. If I understand correctly, the -x values are being seen by the original procs, but not by the comm_spawned ones?
<br>
<p><p><span class="quotelev1">&gt; Is there something else I'm doing wrong here?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; Tim
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
<li><strong>Next message:</strong> <a href="23264.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4a1r29646	with	-hostfile	option	under	Torque manager"</a>
<li><strong>Previous message:</strong> <a href="23262.php">Tim Miller: "[OMPI users] MPI_Comm_spawn and exported variables"</a>
<li><strong>In reply to:</strong> <a href="23262.php">Tim Miller: "[OMPI users] MPI_Comm_spawn and exported variables"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23265.php">Tim Miller: "Re: [OMPI users] MPI_Comm_spawn and exported variables"</a>
<li><strong>Reply:</strong> <a href="23265.php">Tim Miller: "Re: [OMPI users] MPI_Comm_spawn and exported variables"</a>
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
