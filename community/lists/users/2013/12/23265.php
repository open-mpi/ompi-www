<?
$subject_val = "Re: [OMPI users] MPI_Comm_spawn and exported variables";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 19 23:08:24 2013" -->
<!-- isoreceived="20131220040824" -->
<!-- sent="Thu, 19 Dec 2013 23:08:24 -0500" -->
<!-- isosent="20131220040824" -->
<!-- name="Tim Miller" -->
<!-- email="btamiller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn and exported variables" -->
<!-- id="CAMsSzSBT5tjW_kdBmjzjH6cq2otQv1EgY1C5Z3qa7yZEEx037g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="32F28FBF-C28D-447F-9F15-515E85A2ED3E_at_open-mpi.org" -->
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
<strong>From:</strong> Tim Miller (<em>btamiller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-19 23:08:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23266.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4a1r29646	with	-hostfile	option	under	Torque manager"</a>
<li><strong>Previous message:</strong> <a href="23264.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4a1r29646	with	-hostfile	option	under	Torque manager"</a>
<li><strong>In reply to:</strong> <a href="23263.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and exported variables"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23272.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and exported variables"</a>
<li><strong>Reply:</strong> <a href="23272.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and exported variables"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>That's correct. All of the original processes see the -x values, but
<br>
spawned ones do not.
<br>
<p>Regards,
<br>
Tim
<br>
<p><p>On Thu, Dec 19, 2013 at 6:09 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 19, 2013, at 2:57 PM, Tim Miller &lt;btamiller_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi All,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have a question similar (but not identical to) the one asked by Tom
</span><br>
<span class="quotelev1">&gt; Fogel a week or so back...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have a code that uses MPI_Comm_spawn to launch different processes.
</span><br>
<span class="quotelev1">&gt; The executables for these use libraries in non-standard locations, so what
</span><br>
<span class="quotelev1">&gt; I've done is add the directories containing them to my LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; environment variable, and then calling mpirun with &quot;-x LD_LIBRARY_PATH&quot;.
</span><br>
<span class="quotelev1">&gt; This works well for me on OpenMPI 1.6.3 and earlier. However, I've been
</span><br>
<span class="quotelev1">&gt; playing with OpenMPI 1.7.3 and this no longer seems to work. As soon as my
</span><br>
<span class="quotelev1">&gt; code MPI_Comm_spawns, all the spawned processes die complaining that they
</span><br>
<span class="quotelev1">&gt; can't find the correct libraries to start the executable.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Has there been a way that exported variables are passed to spawned
</span><br>
<span class="quotelev1">&gt; processes between OpenMPI 1.6 and 1.7?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not intentionally, though it is possible that some bug crept into the
</span><br>
<span class="quotelev1">&gt; code. If I understand correctly, the -x values are being seen by the
</span><br>
<span class="quotelev1">&gt; original procs, but not by the comm_spawned ones?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there something else I'm doing wrong here?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Tim
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23265/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23266.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4a1r29646	with	-hostfile	option	under	Torque manager"</a>
<li><strong>Previous message:</strong> <a href="23264.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4a1r29646	with	-hostfile	option	under	Torque manager"</a>
<li><strong>In reply to:</strong> <a href="23263.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and exported variables"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23272.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and exported variables"</a>
<li><strong>Reply:</strong> <a href="23272.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and exported variables"</a>
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
