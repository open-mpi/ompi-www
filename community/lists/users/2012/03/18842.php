<?
$subject_val = "[OMPI users] mpirun is in the PATH, but &quot;orted: command not found&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 26 04:08:05 2012" -->
<!-- isoreceived="20120326080805" -->
<!-- sent="Mon, 26 Mar 2012 10:08:01 +0200" -->
<!-- isosent="20120326080801" -->
<!-- name="giggzounet" -->
<!-- email="giggzounet_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun is in the PATH, but &amp;quot;orted: command not found&amp;quot;" -->
<!-- id="CAAsad9=qRKbCA5454gkeo1i-HXpBeFZYNj3vQDjnNn9OFG9crg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] mpirun is in the PATH, but &quot;orted: command not found&quot;<br>
<strong>From:</strong> giggzounet (<em>giggzounet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-26 04:08:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18843.php">Ralph Castain: "Re: [OMPI users] mpirun is in the PATH, but &quot;orted: command not found&quot;"</a>
<li><strong>Previous message:</strong> <a href="18841.php">Hameed Alzahrani: "[OMPI users] How to check that open MPI installed and work correctly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18843.php">Ralph Castain: "Re: [OMPI users] mpirun is in the PATH, but &quot;orted: command not found&quot;"</a>
<li><strong>Reply:</strong> <a href="18843.php">Ralph Castain: "Re: [OMPI users] mpirun is in the PATH, but &quot;orted: command not found&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>My problem:
<br>
On our cluster, openmpi 1.4.4 is installed. We are using the module
<br>
environment so I have created a module file to set up openmpi:
<br>
prepend-path PATH /appl/mpi/openmpi/1.4.4/bin
<br>
prepend-path LD_LIBRARY_PATH /appl/mpi/openmpi/1.4.4/lib
<br>
prepend-path MANPATH /appl/mpi/openmpi/1.4.4/share/man
<br>
setenv                  MPI_BIN         /appl/mpi/openmpi/1.4.4/bin
<br>
setenv                  MPI_SYSCONFIG   /appl/mpi/openmpi/1.4.4/etc
<br>
setenv                  MPI_INCLUDE     /appl/mpi/openmpi/1.4.4/include
<br>
setenv                  MPI_LIB         /appl/mpi/openmpi/1.4.4/lib
<br>
setenv                  MPI_MAN         /appl/mpi/openmpi/1.4.4/share/man
<br>
setenv                  MPI_COMPILER    openmpi-x86_64
<br>
setenv                  MPI_SUFFIX      _openmpi
<br>
setenv                  MPI_HOME        /appl/mpi/openmpi/1.4.4
<br>
<p>This openmpi module loads without problem and mpirun, orted...are in the
<br>
PATH.
<br>
Now I want to start a pbs job:
<br>
#!/bin/bash
<br>
#PBS -N mpi-test
<br>
#PBS -j oe
<br>
#PBS -m abe
<br>
#PBS -l nodes=2:ppn=2
<br>
#PBS -l walltime=2:00:00
<br>
#PBS -q long
<br>
module list
<br>
module unload mpi/intel-mpi/2012
<br>
module load mpi/openmpi/1.4.4
<br>
module list
<br>
cd $PBS_O_WORKDIR
<br>
cat $PBS_NODEFILE &gt; hosts_openmpi
<br>
mpirun -n $NUMPROCS -machinefile ./hosts_openmpi mpitests-IMB-MPI1
<br>
<p><p>And I get:
<br>
bash: orted: command not found
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 7399) died unexpectedly with status 127 while attempting
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
<p><p><p>It is very strange.../appl/mpi/openmpi/1.4.4/bin/ is in the PATH IN the pbs
<br>
environment (I check that with env in a pbs job). But it doesn't work...
<br>
<p>/appl/mpi/openmpi/1.4.4/bin/mpirun -n $NUMPROCS -machinefile
<br>
./hosts_openmpi /appl/mpi/openmpi/1.4.4/bin/mpitests-IMB-MPI1 runs without
<br>
problem.
<br>
<p>So I don't understand where I did an error...If someone could help me...
<br>
Thx a lot,
<br>
Best regards,
<br>
Guillaume
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18842/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18843.php">Ralph Castain: "Re: [OMPI users] mpirun is in the PATH, but &quot;orted: command not found&quot;"</a>
<li><strong>Previous message:</strong> <a href="18841.php">Hameed Alzahrani: "[OMPI users] How to check that open MPI installed and work correctly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18843.php">Ralph Castain: "Re: [OMPI users] mpirun is in the PATH, but &quot;orted: command not found&quot;"</a>
<li><strong>Reply:</strong> <a href="18843.php">Ralph Castain: "Re: [OMPI users] mpirun is in the PATH, but &quot;orted: command not found&quot;"</a>
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
