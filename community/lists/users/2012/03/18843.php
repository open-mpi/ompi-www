<?
$subject_val = "Re: [OMPI users] mpirun is in the PATH, but &quot;orted: command not found&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 26 09:36:28 2012" -->
<!-- isoreceived="20120326133628" -->
<!-- sent="Mon, 26 Mar 2012 07:36:19 -0600" -->
<!-- isosent="20120326133619" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun is in the PATH, but &amp;quot;orted: command not found&amp;quot;" -->
<!-- id="67F7E863-D1ED-4763-B410-CDAC0212E0D0_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAsad9=qRKbCA5454gkeo1i-HXpBeFZYNj3vQDjnNn9OFG9crg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun is in the PATH, but &quot;orted: command not found&quot;<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-26 09:36:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18844.php">Rodrigo Oliveira: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>Previous message:</strong> <a href="18842.php">giggzounet: "[OMPI users] mpirun is in the PATH, but &quot;orted: command not found&quot;"</a>
<li><strong>In reply to:</strong> <a href="18842.php">giggzounet: "[OMPI users] mpirun is in the PATH, but &quot;orted: command not found&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18845.php">giggzounet: "Re: [OMPI users] mpirun is in the PATH, but &quot;orted: command not found&quot;"</a>
<li><strong>Reply:</strong> <a href="18845.php">giggzounet: "Re: [OMPI users] mpirun is in the PATH, but &quot;orted: command not found&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How did you configure OMPI? Did you inlaced --with-tm so that the native Torque support was built? If you do, then you shouldn't need to add a -machinefile to your cmd line as we'll automatically pickup the allocation.
<br>
<p>If you run your second way:
<br>
<p><span class="quotelev1">&gt; /appl/mpi/openmpi/1.4.4/bin/mpirun -n $NUMPROCS -machinefile ./hosts_openmpi /appl/mpi/openmpi/1.4.4/bin/mpitests-IMB-MPI1 runs without problem.
</span><br>
<p>then mpirun automatically assigns the required paths because you used an absolute path to mpirun. However, this only occurs if you are using the rsh launcher instead of the Torque one, so I suspect you forgot to include the native Torque support.
<br>
<p>The problem is that without the native support, Torque doesn't know about the orteds (as they are launched via rsh instead of Torque), and so Torque can't forward the environment like it is supposed to do.
<br>
<p><p>On Mar 26, 2012, at 2:08 AM, giggzounet wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My problem:
</span><br>
<span class="quotelev1">&gt; On our cluster, openmpi 1.4.4 is installed. We are using the module environment so I have created a module file to set up openmpi:
</span><br>
<span class="quotelev1">&gt; prepend-path PATH /appl/mpi/openmpi/1.4.4/bin
</span><br>
<span class="quotelev1">&gt; prepend-path LD_LIBRARY_PATH /appl/mpi/openmpi/1.4.4/lib
</span><br>
<span class="quotelev1">&gt; prepend-path MANPATH /appl/mpi/openmpi/1.4.4/share/man
</span><br>
<span class="quotelev1">&gt; setenv                  MPI_BIN         /appl/mpi/openmpi/1.4.4/bin
</span><br>
<span class="quotelev1">&gt; setenv                  MPI_SYSCONFIG   /appl/mpi/openmpi/1.4.4/etc
</span><br>
<span class="quotelev1">&gt; setenv                  MPI_INCLUDE     /appl/mpi/openmpi/1.4.4/include
</span><br>
<span class="quotelev1">&gt; setenv                  MPI_LIB         /appl/mpi/openmpi/1.4.4/lib
</span><br>
<span class="quotelev1">&gt; setenv                  MPI_MAN         /appl/mpi/openmpi/1.4.4/share/man
</span><br>
<span class="quotelev1">&gt; setenv                  MPI_COMPILER    openmpi-x86_64
</span><br>
<span class="quotelev1">&gt; setenv                  MPI_SUFFIX      _openmpi
</span><br>
<span class="quotelev1">&gt; setenv                  MPI_HOME        /appl/mpi/openmpi/1.4.4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This openmpi module loads without problem and mpirun, orted...are in the PATH.
</span><br>
<span class="quotelev1">&gt; Now I want to start a pbs job:
</span><br>
<span class="quotelev1">&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt; #PBS -N mpi-test
</span><br>
<span class="quotelev1">&gt; #PBS -j oe
</span><br>
<span class="quotelev1">&gt; #PBS -m abe
</span><br>
<span class="quotelev1">&gt; #PBS -l nodes=2:ppn=2
</span><br>
<span class="quotelev1">&gt; #PBS -l walltime=2:00:00
</span><br>
<span class="quotelev1">&gt; #PBS -q long
</span><br>
<span class="quotelev1">&gt; module list
</span><br>
<span class="quotelev1">&gt; module unload mpi/intel-mpi/2012
</span><br>
<span class="quotelev1">&gt; module load mpi/openmpi/1.4.4
</span><br>
<span class="quotelev1">&gt; module list
</span><br>
<span class="quotelev1">&gt; cd $PBS_O_WORKDIR
</span><br>
<span class="quotelev1">&gt; cat $PBS_NODEFILE &gt; hosts_openmpi
</span><br>
<span class="quotelev1">&gt; mpirun -n $NUMPROCS -machinefile ./hosts_openmpi mpitests-IMB-MPI1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And I get:
</span><br>
<span class="quotelev1">&gt; bash: orted: command not found
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid 7399) died unexpectedly with status 127 while attempting
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is very strange.../appl/mpi/openmpi/1.4.4/bin/ is in the PATH IN the pbs environment (I check that with env in a pbs job). But it doesn't work...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /appl/mpi/openmpi/1.4.4/bin/mpirun -n $NUMPROCS -machinefile ./hosts_openmpi /appl/mpi/openmpi/1.4.4/bin/mpitests-IMB-MPI1 runs without problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I don't understand where I did an error...If someone could help me...
</span><br>
<span class="quotelev1">&gt; Thx a lot,
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Guillaume
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18844.php">Rodrigo Oliveira: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>Previous message:</strong> <a href="18842.php">giggzounet: "[OMPI users] mpirun is in the PATH, but &quot;orted: command not found&quot;"</a>
<li><strong>In reply to:</strong> <a href="18842.php">giggzounet: "[OMPI users] mpirun is in the PATH, but &quot;orted: command not found&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18845.php">giggzounet: "Re: [OMPI users] mpirun is in the PATH, but &quot;orted: command not found&quot;"</a>
<li><strong>Reply:</strong> <a href="18845.php">giggzounet: "Re: [OMPI users] mpirun is in the PATH, but &quot;orted: command not found&quot;"</a>
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
