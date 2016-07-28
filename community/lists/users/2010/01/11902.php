<?
$subject_val = "[OMPI users] Non-homogeneous Cluster Implementation";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 27 21:08:47 2010" -->
<!-- isoreceived="20100128020847" -->
<!-- sent="Wed, 27 Jan 2010 18:08:42 -0800" -->
<!-- isosent="20100128020842" -->
<!-- name="Lee Manko" -->
<!-- email="lmanko_at_[hidden]" -->
<!-- subject="[OMPI users] Non-homogeneous Cluster Implementation" -->
<!-- id="e33c0c7d1001271808u2e62f158o661fd2b8665c1728_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI users] Non-homogeneous Cluster Implementation<br>
<strong>From:</strong> Lee Manko (<em>lmanko_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-27 21:08:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11903.php">Terry Frankcombe: "Re: [OMPI users] How to start MPI_Spawn child processes early?"</a>
<li><strong>Previous message:</strong> <a href="11901.php">Douglas Guptill: "Re: [OMPI users] How to start MPI_Spawn child processes early?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11905.php">jody: "Re: [OMPI users] Non-homogeneous Cluster Implementation"</a>
<li><strong>Reply:</strong> <a href="11905.php">jody: "Re: [OMPI users] Non-homogeneous Cluster Implementation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK, so please stop me if you have heard this before, but I couldn&#146;t find
<br>
anything in the archives that addressed my situation.
<br>
<p><p><p>I have a Beowulf cluster where ALL the node are PS3s running Yellow Dog
<br>
Linux 6.2 and a host (server) that is a Dell i686 Quad-core running Fedora
<br>
Core 12.  After a failed attempt at letting yum install openmpi, I
<br>
downloaded v1.4.1, compiled and installed on all machines (PS3s and Dell).  I
<br>
have an NSF shared directory on the host where the application resides after
<br>
building.  All nodes have access to the shared volume and they can see any
<br>
files in the shared volume.
<br>
<p><p><p>I wrote a very simple master/slave application where the slave does a simple
<br>
computation and gets the processor name.  The slave returns both pieces of
<br>
information to the master who then simply displays it in the terminal
<br>
window.  After the slaves work on 1024 such tasks, the master exists.
<br>
<p><p><p>When I run on the host, without distributing to the nodes, I use the
<br>
command:
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#147;mpirun &#150;np 4 ./MPI_Example&#148;
<br>
<p><p><p>Compiling and running the application on the native hardware works perfectly
<br>
(ie: compiled and run on the PS3 or compiled and run on the Dell).
<br>
<p><p><p>However, when I went to scatter the tasks to the nodes, using the following
<br>
command,
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#147;mpirun &#150;np 4 &#150;hostfile mpi-hostfile ./MPI_Example&#148;
<br>
<p><p><p>the application fails.  I&#146;m surmising that the issue is with running code
<br>
that was compiled for the Dell on the PS3 since the MPI_Init will launch the
<br>
application from the shared volume.
<br>
<p><p><p>So, I took the source code and compiled it on both the Dell and the PS3 and
<br>
placed the executables in /shared_volume/Dell and /shared_volume/PS3 and
<br>
added the paths to the environment variable PATH.  I tried to run the
<br>
application from the host again using the following command,
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#147;mpirun &#150;np 4 &#150;hostfile mpi-hostfile &#150;wdir
<br>
/shared_volume/PS3 ./MPI_Example&#148;
<br>
<p><p><p>Hoping that the wdir would set the working directory at the time of the call
<br>
to MPI_Init() so that MPI_Init will launch the PS3 version of the
<br>
executable.
<br>
<p><p><p>I get the error:
<br>
<p>Could not execute the executable &#147;./MPI_Example&#148; : Exec format error
<br>
<p>This could mean that your PATH or executable name is wrong, or that you do
<br>
not
<br>
<p>have the necessary permissions.  Please ensure that the executable is able
<br>
to be
<br>
<p>found and executed.
<br>
<p><p><p>Now, I know I&#146;m gonna get some heat for this, but all of these machine use
<br>
only the root account with full root privileges, so it&#146;s not a permission
<br>
issue.
<br>
<p><p><p><p><p>I am sure there is simple solution to my problem.  Replacing the host with a
<br>
PS3 is not an option. Does anyone have any suggestions?
<br>
<p><p><p>Thanks.
<br>
<p><p><p>PS: When I get to programming the Cell BE, then I&#146;ll use the IBM Cell SDK
<br>
with its cross-compiler toolchain.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11902/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11903.php">Terry Frankcombe: "Re: [OMPI users] How to start MPI_Spawn child processes early?"</a>
<li><strong>Previous message:</strong> <a href="11901.php">Douglas Guptill: "Re: [OMPI users] How to start MPI_Spawn child processes early?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11905.php">jody: "Re: [OMPI users] Non-homogeneous Cluster Implementation"</a>
<li><strong>Reply:</strong> <a href="11905.php">jody: "Re: [OMPI users] Non-homogeneous Cluster Implementation"</a>
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
