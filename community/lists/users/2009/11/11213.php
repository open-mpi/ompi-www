<?
$subject_val = "[OMPI users] custom modules per job (PBS/OpenMPI/environment-modules)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 17 04:43:15 2009" -->
<!-- isoreceived="20091117094315" -->
<!-- sent="Tue, 17 Nov 2009 03:43:06 -0600" -->
<!-- isosent="20091117094306" -->
<!-- name="Michael Sternberg" -->
<!-- email="sternberg_at_[hidden]" -->
<!-- subject="[OMPI users] custom modules per job (PBS/OpenMPI/environment-modules)" -->
<!-- id="7409DC78-C200-4C0E-B2F8-880D276709A4_at_anl.gov" -->
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
<strong>Subject:</strong> [OMPI users] custom modules per job (PBS/OpenMPI/environment-modules)<br>
<strong>From:</strong> Michael Sternberg (<em>sternberg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-17 04:43:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11214.php">David Singleton: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<li><strong>Previous message:</strong> <a href="11212.php">Laurin M&#195;&#188;ller: "[OMPI users] mpirun not working on more than one node"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear readers,
<br>
<p>With OpenMPI, how would one go about requesting to load environment modules (of the <a href="http://modules.sourceforge.net/">http://modules.sourceforge.net/</a> kind) on remote nodes, augmenting those  normally loaded there by shell dotfiles?
<br>
<p><p>Background:
<br>
<p>I run a RHEL-5/CentOS-5 cluster.  I load a bunch of default modules through /etc/profile.d/ and recommend to users to customize modules in ~/.bashrc.  A problem arises for PBS jobs which might need job-specific modules, e.g., to pick a specific flavor of an application.  With other MPI implementations (ahem) which export all (or judiciously nearly all) environment variables by default, you can say:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#PBS ...
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;module load foo		# not for OpenMPI
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 42 ... \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bar-app
<br>
<p>Not so with OpenMPI - any such customization is only effective for processes on the master (=local) node of the job, and any variables changed by a given module would have to be specifically passed via mpirun -x VARNAME.   On the remote nodes, those variables are not available in the dotfiles because they are passed only once orted is live (after dotfile processing by the shell), which then immediately spawns the application binaries (right?)
<br>
<p>I thought along the following lines:
<br>
<p>(1) I happen to run Lustre, which would allow writing a file coherently across nodes prior to mpirun, and thus hook into the shell dotfile processing, but that seems rather crude.
<br>
<p>(2) &quot;mpirun -x PATH -x LD_LIBRARY_PATH &#133;&quot; would take care of a lot, but is not really general.
<br>
<p>Is there a recommended way?
<br>
<p><p>regards,
<br>
Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11214.php">David Singleton: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<li><strong>Previous message:</strong> <a href="11212.php">Laurin M&#195;&#188;ller: "[OMPI users] mpirun not working on more than one node"</a>
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
