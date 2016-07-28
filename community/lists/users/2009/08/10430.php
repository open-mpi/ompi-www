<?
$subject_val = "[OMPI users] problem with LD_LIBRARY_PATH???";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 19 10:36:33 2009" -->
<!-- isoreceived="20090819143633" -->
<!-- sent="Wed, 19 Aug 2009 14:36:28 +0000 (GMT)" -->
<!-- isosent="20090819143628" -->
<!-- name="Jean Potsam" -->
<!-- email="jeanpotsam_at_[hidden]" -->
<!-- subject="[OMPI users] problem with LD_LIBRARY_PATH???" -->
<!-- id="380149.94906.qm_at_web28311.mail.ukl.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] problem with LD_LIBRARY_PATH???<br>
<strong>From:</strong> Jean Potsam (<em>jeanpotsam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-19 10:36:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10431.php">Josh Hursey: "Re: [OMPI users] OPEN MPI with self"</a>
<li><strong>Previous message:</strong> <a href="10429.php">Jeff Squyres: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10432.php">Ralph Castain: "Re: [OMPI users] problem with LD_LIBRARY_PATH???"</a>
<li><strong>Reply:</strong> <a href="10432.php">Ralph Castain: "Re: [OMPI users] problem with LD_LIBRARY_PATH???"</a>
<li><strong>Reply:</strong> <a href="10433.php">Lenny Verkhovsky: "Re: [OMPI users] problem with LD_LIBRARY_PATH???"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; I'm a trying to install openmpi with self. However, I am experiencing some problems with openmpi itself.
<br>
<p>I have successfully installed the software and added the path in the .bashrc file as follows:
<br>
<p>export PATH=&quot;/home/jean/openmpisof/bin:$PATH&quot;
<br>
export LD_LIBRARY_PATH=&quot;/home/jean/openmpisof/lib:$LD_LIBRARY_PATH&quot;
<br>
<p>when i run my mpi application specifying the whole path to mpirun, it works fine. 
<br>
<p>jean:$ /home/jean/openmpisof/bin/mpirun mympi
<br>
<p>however if I do:
<br>
jean:$ mpirun mympi
<br>
<p>I get:
<br>
<p>################
<br>
bash: orted: command not found
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 8464) died unexpectedly with status 127 while attempting
<br>
to launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
mpirun: clean termination accomplished
<br>
<p>######################
<br>
<p>I am using&#160; a single processor desktop PC with linux Ubuntu as the OS. 
<br>
<p>Please email me of you have any solution for this problem.
<br>
<p>Cheers
<br>
<p>Jean
<br>
<p><p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10430/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10431.php">Josh Hursey: "Re: [OMPI users] OPEN MPI with self"</a>
<li><strong>Previous message:</strong> <a href="10429.php">Jeff Squyres: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10432.php">Ralph Castain: "Re: [OMPI users] problem with LD_LIBRARY_PATH???"</a>
<li><strong>Reply:</strong> <a href="10432.php">Ralph Castain: "Re: [OMPI users] problem with LD_LIBRARY_PATH???"</a>
<li><strong>Reply:</strong> <a href="10433.php">Lenny Verkhovsky: "Re: [OMPI users] problem with LD_LIBRARY_PATH???"</a>
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
