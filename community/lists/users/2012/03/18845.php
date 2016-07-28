<?
$subject_val = "Re: [OMPI users] mpirun is in the PATH, but &quot;orted: command not found&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 26 09:55:49 2012" -->
<!-- isoreceived="20120326135549" -->
<!-- sent="Mon, 26 Mar 2012 15:55:44 +0200" -->
<!-- isosent="20120326135544" -->
<!-- name="giggzounet" -->
<!-- email="giggzounet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun is in the PATH, but &amp;quot;orted: command not found&amp;quot;" -->
<!-- id="CAAsad9mzRvvfa_bH1ojGoiGKan0W5ysV0oepMiGhpMyEjH7qRQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="67F7E863-D1ED-4763-B410-CDAC0212E0D0_at_open-mpi.org" -->
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
<strong>From:</strong> giggzounet (<em>giggzounet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-26 09:55:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18846.php">Tom Bryan: "Re: [OMPI users] How to check that open MPI installed and work correctly"</a>
<li><strong>Previous message:</strong> <a href="18844.php">Rodrigo Oliveira: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>In reply to:</strong> <a href="18843.php">Ralph Castain: "Re: [OMPI users] mpirun is in the PATH, but &quot;orted: command not found&quot;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Arghhhhhh. You're right...
<br>
<p>thx a lot!
<br>
<p>Le 26 mars 2012 15:36, Ralph Castain &lt;rhc_at_[hidden]&gt; a &#233;crit :
<br>
<p><span class="quotelev1">&gt; How did you configure OMPI? Did you inlaced --with-tm so that the native
</span><br>
<span class="quotelev1">&gt; Torque support was built? If you do, then you shouldn't need to add a
</span><br>
<span class="quotelev1">&gt; -machinefile to your cmd line as we'll automatically pickup the allocation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you run your second way:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; /appl/mpi/openmpi/1.4.4/bin/mpirun -n $NUMPROCS -machinefile
</span><br>
<span class="quotelev1">&gt; ./hosts_openmpi /appl/mpi/openmpi/1.4.4/bin/mpitests-IMB-MPI1 runs without
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; then mpirun automatically assigns the required paths because you used an
</span><br>
<span class="quotelev1">&gt; absolute path to mpirun. However, this only occurs if you are using the rsh
</span><br>
<span class="quotelev1">&gt; launcher instead of the Torque one, so I suspect you forgot to include the
</span><br>
<span class="quotelev1">&gt; native Torque support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem is that without the native support, Torque doesn't know about
</span><br>
<span class="quotelev1">&gt; the orteds (as they are launched via rsh instead of Torque), and so Torque
</span><br>
<span class="quotelev1">&gt; can't forward the environment like it is supposed to do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 26, 2012, at 2:08 AM, giggzounet wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My problem:
</span><br>
<span class="quotelev2">&gt; &gt; On our cluster, openmpi 1.4.4 is installed. We are using the module
</span><br>
<span class="quotelev1">&gt; environment so I have created a module file to set up openmpi:
</span><br>
<span class="quotelev2">&gt; &gt; prepend-path PATH /appl/mpi/openmpi/1.4.4/bin
</span><br>
<span class="quotelev2">&gt; &gt; prepend-path LD_LIBRARY_PATH /appl/mpi/openmpi/1.4.4/lib
</span><br>
<span class="quotelev2">&gt; &gt; prepend-path MANPATH /appl/mpi/openmpi/1.4.4/share/man
</span><br>
<span class="quotelev2">&gt; &gt; setenv                  MPI_BIN         /appl/mpi/openmpi/1.4.4/bin
</span><br>
<span class="quotelev2">&gt; &gt; setenv                  MPI_SYSCONFIG   /appl/mpi/openmpi/1.4.4/etc
</span><br>
<span class="quotelev2">&gt; &gt; setenv                  MPI_INCLUDE     /appl/mpi/openmpi/1.4.4/include
</span><br>
<span class="quotelev2">&gt; &gt; setenv                  MPI_LIB         /appl/mpi/openmpi/1.4.4/lib
</span><br>
<span class="quotelev2">&gt; &gt; setenv                  MPI_MAN         /appl/mpi/openmpi/1.4.4/share/man
</span><br>
<span class="quotelev2">&gt; &gt; setenv                  MPI_COMPILER    openmpi-x86_64
</span><br>
<span class="quotelev2">&gt; &gt; setenv                  MPI_SUFFIX      _openmpi
</span><br>
<span class="quotelev2">&gt; &gt; setenv                  MPI_HOME        /appl/mpi/openmpi/1.4.4
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This openmpi module loads without problem and mpirun, orted...are in the
</span><br>
<span class="quotelev1">&gt; PATH.
</span><br>
<span class="quotelev2">&gt; &gt; Now I want to start a pbs job:
</span><br>
<span class="quotelev2">&gt; &gt; #!/bin/bash
</span><br>
<span class="quotelev2">&gt; &gt; #PBS -N mpi-test
</span><br>
<span class="quotelev2">&gt; &gt; #PBS -j oe
</span><br>
<span class="quotelev2">&gt; &gt; #PBS -m abe
</span><br>
<span class="quotelev2">&gt; &gt; #PBS -l nodes=2:ppn=2
</span><br>
<span class="quotelev2">&gt; &gt; #PBS -l walltime=2:00:00
</span><br>
<span class="quotelev2">&gt; &gt; #PBS -q long
</span><br>
<span class="quotelev2">&gt; &gt; module list
</span><br>
<span class="quotelev2">&gt; &gt; module unload mpi/intel-mpi/2012
</span><br>
<span class="quotelev2">&gt; &gt; module load mpi/openmpi/1.4.4
</span><br>
<span class="quotelev2">&gt; &gt; module list
</span><br>
<span class="quotelev2">&gt; &gt; cd $PBS_O_WORKDIR
</span><br>
<span class="quotelev2">&gt; &gt; cat $PBS_NODEFILE &gt; hosts_openmpi
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -n $NUMPROCS -machinefile ./hosts_openmpi mpitests-IMB-MPI1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; And I get:
</span><br>
<span class="quotelev2">&gt; &gt; bash: orted: command not found
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; A daemon (pid 7399) died unexpectedly with status 127 while attempting
</span><br>
<span class="quotelev2">&gt; &gt; to launch so we are aborting.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev2">&gt; &gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev2">&gt; &gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev2">&gt; &gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It is very strange.../appl/mpi/openmpi/1.4.4/bin/ is in the PATH IN the
</span><br>
<span class="quotelev1">&gt; pbs environment (I check that with env in a pbs job). But it doesn't work...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /appl/mpi/openmpi/1.4.4/bin/mpirun -n $NUMPROCS -machinefile
</span><br>
<span class="quotelev1">&gt; ./hosts_openmpi /appl/mpi/openmpi/1.4.4/bin/mpitests-IMB-MPI1 runs without
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So I don't understand where I did an error...If someone could help me...
</span><br>
<span class="quotelev2">&gt; &gt; Thx a lot,
</span><br>
<span class="quotelev2">&gt; &gt; Best regards,
</span><br>
<span class="quotelev2">&gt; &gt; Guillaume
</span><br>
<span class="quotelev2">&gt; &gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18845/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18846.php">Tom Bryan: "Re: [OMPI users] How to check that open MPI installed and work correctly"</a>
<li><strong>Previous message:</strong> <a href="18844.php">Rodrigo Oliveira: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>In reply to:</strong> <a href="18843.php">Ralph Castain: "Re: [OMPI users] mpirun is in the PATH, but &quot;orted: command not found&quot;"</a>
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
