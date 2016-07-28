<?
$subject_val = "Re: [OMPI users] Global Communicator";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  6 02:16:56 2009" -->
<!-- isoreceived="20090206071656" -->
<!-- sent="Fri, 06 Feb 2009 08:14:46 +0100" -->
<!-- isosent="20090206071446" -->
<!-- name="doriankrause" -->
<!-- email="doriankrause_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Global Communicator" -->
<!-- id="498BE366.6010702_at_web.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="214206.52541.qm_at_web82707.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Global Communicator<br>
<strong>From:</strong> doriankrause (<em>doriankrause_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-06 02:14:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7980.php">Bernhard Knapp: "[OMPI users] open-mpi ssh hostname problem"</a>
<li><strong>Previous message:</strong> <a href="7978.php">Ted Yu: "[OMPI users] Global Communicator"</a>
<li><strong>In reply to:</strong> <a href="7978.php">Ted Yu: "[OMPI users] Global Communicator"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7981.php">Ted Yu: "Re: [OMPI users] Global Communicator"</a>
<li><strong>Reply:</strong> <a href="7981.php">Ted Yu: "Re: [OMPI users] Global Communicator"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ted Yu wrote:
<br>
<span class="quotelev1">&gt; I'm trying to run a job based on openmpi.  For some reason, the program and the global communicator are not in sync and it reads that there is only one processors, whereas, there should be 2 or more.  Any advice on where to look?  Here is my PBS script.  Thanx!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PBS SCRIPT:
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; ### Set the job name
</span><br>
<span class="quotelev1">&gt; #PBS -N HH
</span><br>
<span class="quotelev1">&gt; ### Declare myprogram non-rerunable
</span><br>
<span class="quotelev1">&gt; #PBS -r n
</span><br>
<span class="quotelev1">&gt; ### Combine standard error and standard out to one file.
</span><br>
<span class="quotelev1">&gt; #PBS -j oe
</span><br>
<span class="quotelev1">&gt; ### Have PBS mail you results
</span><br>
<span class="quotelev1">&gt; #PBS -m ae
</span><br>
<span class="quotelev1">&gt; #PBS -M tedhyu_at_[hidden]
</span><br>
<span class="quotelev1">&gt; ### Set the queue name, given to you when you get a reservation.
</span><br>
<span class="quotelev1">&gt; #PBS -q workq
</span><br>
<span class="quotelev1">&gt; ### Specify the number of cpus for your job.  This example will run on 32 cpus
</span><br>
<span class="quotelev1">&gt; ### using 8 nodes with 4 processes per node.
</span><br>
<span class="quotelev1">&gt; #PBS -l nodes=1:ppn=2,walltime=70:00:00
</span><br>
<span class="quotelev1">&gt; # Switch to the working directory; by default PBS launches processes from your home directory.
</span><br>
<span class="quotelev1">&gt; # Jobs should only be run from /home, /project, or /work; PBS returns results via NFS.
</span><br>
<span class="quotelev1">&gt; PBS_O_WORKDIR=/temp1/tedhyu/HH
</span><br>
<span class="quotelev1">&gt; export CODE=/project/source/seqquest/seqquest_source_v261j/hive_CentOS4.5_parallel/build_261j/quest_ompi.x
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; echo Working directory is $PBS_O_WORKDIR
</span><br>
<span class="quotelev1">&gt; mkdir -p $PBS_O_WORKDIR
</span><br>
<span class="quotelev1">&gt; cd $PBS_O_WORKDIR
</span><br>
<span class="quotelev1">&gt; rm -rf *
</span><br>
<span class="quotelev1">&gt; cp /ul/tedhyu/fuelcell/HOH/test/HH.in ./lcao.in
</span><br>
<span class="quotelev1">&gt; cp /ul/tedhyu/atom_pbe/* .
</span><br>
<span class="quotelev1">&gt; echo Running on host `hostname`
</span><br>
<span class="quotelev1">&gt; echo Time is `date`
</span><br>
<span class="quotelev1">&gt; echo Directory is `pwd`
</span><br>
<span class="quotelev1">&gt; echo This jobs runs on the following processors:
</span><br>
<span class="quotelev1">&gt; echo `cat $PBS_NODEFILE`
</span><br>
<span class="quotelev1">&gt; Number=`wc -l $PBS_NODEFILE | awk '{print $1}'`
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export Number
</span><br>
<span class="quotelev1">&gt; echo ${Number}
</span><br>
<span class="quotelev1">&gt; # Define number of processors
</span><br>
<span class="quotelev1">&gt; NPROCS=`wc -l &lt; $PBS_NODEFILE`
</span><br>
<span class="quotelev1">&gt; # And the number or hosts
</span><br>
<span class="quotelev1">&gt; NHOSTS=`cat $PBS_NODEFILE|uniq|wc -l`
</span><br>
<span class="quotelev1">&gt; echo This job has allocated $NPROCS cpus
</span><br>
<span class="quotelev1">&gt; echo NHOSTS
</span><br>
<span class="quotelev1">&gt; #mpirun  -machinefile $PBS_NODEFILE  ${CODE} &gt;/ul/tedhyu/fuelcell/HOH/test/HH.out
</span><br>
<span class="quotelev1">&gt; #mpiexec -np 2  ${CODE} &gt;/ul/tedhyu/fuelcell/HOH/test/HH.out
</span><br>
<span class="quotelev1">&gt; /opt/mpich-1.2.5.10-ch_p4-gcc/bin/mpirun -machinefile $PBS_NODEFILE -np $NPROCS ${CODE} &gt;/ul/tedhyu/fuelcell/HOH/test/HH.out
</span><br>
<span class="quotelev1">&gt; cd ..
</span><br>
<span class="quotelev1">&gt; rm -rf HH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Please note, that you are mixing Open MPI (API/Library) with MPICH 
<br>
(mpirun). This is a mistake I like to make, too. If you use
<br>
the ompi mpiexec program, it probably works.
<br>
<p>Dorian
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="7980.php">Bernhard Knapp: "[OMPI users] open-mpi ssh hostname problem"</a>
<li><strong>Previous message:</strong> <a href="7978.php">Ted Yu: "[OMPI users] Global Communicator"</a>
<li><strong>In reply to:</strong> <a href="7978.php">Ted Yu: "[OMPI users] Global Communicator"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7981.php">Ted Yu: "Re: [OMPI users] Global Communicator"</a>
<li><strong>Reply:</strong> <a href="7981.php">Ted Yu: "Re: [OMPI users] Global Communicator"</a>
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
