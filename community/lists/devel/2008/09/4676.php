<?
$subject_val = "[OMPI devel] proper way to shut down orted";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 12:08:21 2008" -->
<!-- isoreceived="20080922160821" -->
<!-- sent="Mon, 22 Sep 2008 10:08:14 -0600" -->
<!-- isosent="20080922160814" -->
<!-- name="Timothy Kaiser" -->
<!-- email="tkaiser_at_[hidden]" -->
<!-- subject="[OMPI devel] proper way to shut down orted" -->
<!-- id="48D7C2EE.7020908_at_mines.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] proper way to shut down orted<br>
<strong>From:</strong> Timothy Kaiser (<em>tkaiser_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-22 12:08:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4677.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r19599"</a>
<li><strong>Previous message:</strong> <a href="4675.php">Ralph Castain: "Re: [OMPI devel] -display-map and mpi_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4682.php">Ralph Castain: "Re: [OMPI devel] proper way to shut down orted"</a>
<li><strong>Reply:</strong> <a href="4682.php">Ralph Castain: "Re: [OMPI devel] proper way to shut down orted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings,
<br>
<p>I have a manager/worker application.  The
<br>
manager is called &quot;t2a&quot; and the workers &quot;w2d&quot;
<br>
<p>I launch the manager and each worker with
<br>
its own mpiexec with n=1.  They connect using
<br>
various calls including MPI_Open_port,
<br>
MPI_Comm_accept, MPI_Comm_connect and
<br>
MPI_Intercomm_merge.
<br>
<p>It works fine.
<br>
<p><p>I am using the command:
<br>
<p>orted --persistent --seed --scope public --universe univ3 --set-sid
<br>
<p>to set up the universe and the mpiexec commands are:
<br>
<p>mpiexec -np 1 --universe univ3 t2a
<br>
<p>mpiexec -np 1 --universe univ3 w2d
<br>
<p>mpiexec -np 1 --universe univ3 w2d
<br>
<p>mpiexec -np 1 --universe univ3 w2d
<br>
<p><p>Question:
<br>
<p>What is the proper way to shutdown orted?
<br>
I have found that if I just kill orted then
<br>
I can't reuse the universe name.
<br>
<p>Platforms and OpenMPI versions:
<br>
<p>OS X  openmpi-1.2.7 or openmpi-1.2.6 (ethernet)
<br>
<p>Rocks openmpi-1.2.6 (Infiniband)
<br>
<p><p><p><p>Thanks!
<br>
<p>Tim
<br>
<p><pre>
-- 
------------------------------------------------------
Timothy H. Kaiser, Ph.D. tkaiser_at_[hidden]  CSM::GECO
&quot;Nobody made a greater mistake than he who did nothing
because he could only do a little&quot; (Edmund Burke)
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4677.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r19599"</a>
<li><strong>Previous message:</strong> <a href="4675.php">Ralph Castain: "Re: [OMPI devel] -display-map and mpi_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4682.php">Ralph Castain: "Re: [OMPI devel] proper way to shut down orted"</a>
<li><strong>Reply:</strong> <a href="4682.php">Ralph Castain: "Re: [OMPI devel] proper way to shut down orted"</a>
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
