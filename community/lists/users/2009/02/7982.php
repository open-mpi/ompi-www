<?
$subject_val = "Re: [OMPI users] Global Communicator";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  6 10:56:08 2009" -->
<!-- isoreceived="20090206155608" -->
<!-- sent="Fri, 6 Feb 2009 08:55:56 -0700" -->
<!-- isosent="20090206155556" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Global Communicator" -->
<!-- id="0BF5F2B9-5EF1-44FA-B3C2-82BCF3EA396D_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="495623.71048.qm_at_web82708.mail.mud.yahoo.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-06 10:55:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7983.php">Ted Yu: "Re: [OMPI users] Global Communicator"</a>
<li><strong>Previous message:</strong> <a href="7981.php">Ted Yu: "Re: [OMPI users] Global Communicator"</a>
<li><strong>In reply to:</strong> <a href="7981.php">Ted Yu: "Re: [OMPI users] Global Communicator"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7983.php">Ted Yu: "Re: [OMPI users] Global Communicator"</a>
<li><strong>Reply:</strong> <a href="7983.php">Ted Yu: "Re: [OMPI users] Global Communicator"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ted
<br>
<p>&nbsp;From what I can tell, you are not using Open MPI, but mpich's mpirun.  
<br>
You might want to ask for help on their mailing list.
<br>
<p>Ralph
<br>
<p>On Feb 6, 2009, at 8:49 AM, Ted Yu wrote:
<br>
<p><span class="quotelev1">&gt; Thanx for the reply.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I guess I should go back a step:  I had used the openmpi version on  
</span><br>
<span class="quotelev1">&gt; my system which is simply:
</span><br>
<span class="quotelev1">&gt; &quot;mpirun -machinefile $PBS_NODEFILE -np $NPROCS ${CODE} &gt;/ul/tedhyu/ 
</span><br>
<span class="quotelev1">&gt; fuelcell/HOH/test/HH.out&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This did not work because I was just getting a blank output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried this older version because at least i was getting an output.
</span><br>
<span class="quotelev1">&gt; &quot;/opt/mpich-1.2.5.10-ch_p4-gcc/bin/mpirun -machinefile $PBS_NODEFILE  
</span><br>
<span class="quotelev1">&gt; -np
</span><br>
<span class="quotelev1">&gt; $NPROCS ${CODE} &gt;/ul/tedhyu/fuelcell/HOH/test/HH.out&quot;
</span><br>
<span class="quotelev1">&gt; I think this older version is failing me for whatever reason.  Do  
</span><br>
<span class="quotelev1">&gt; you have any clue?  I read somewhere that new versions of mpirun  
</span><br>
<span class="quotelev1">&gt; adds extra commandline arguments to the end of the line.  Therefore  
</span><br>
<span class="quotelev1">&gt; the newer version of mpirun may be not be giving an output because  
</span><br>
<span class="quotelev1">&gt; it sees all extra commandline arguments after my output file &gt;/ul/ 
</span><br>
<span class="quotelev1">&gt; tedhyu/fuelcell/HOH/test/HH.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is where I'm reading that there are extra commandline arguments  
</span><br>
<span class="quotelev1">&gt; for a version of mpirun:
</span><br>
<span class="quotelev1">&gt; <a href="https://lists.sdsc.edu/pipermail/npaci-rocks-discussion/2008-February/029333.html">https://lists.sdsc.edu/pipermail/npaci-rocks-discussion/2008-February/029333.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again, I'm new at this, and I'm just guessing.  Any ideas of where  
</span><br>
<span class="quotelev1">&gt; to turn would be helpful!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ted
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- On Thu, 2/5/09, doriankrause &lt;doriankrause_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; From: doriankrause &lt;doriankrause_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Global Communicator
</span><br>
<span class="quotelev1">&gt; To: tedhyu_at_[hidden], &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Thursday, February 5, 2009, 11:14 PM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ted Yu wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I'm trying to run a job based on openmpi.  For some reason, the
</span><br>
<span class="quotelev1">&gt; program and the global communicator are not in sync and it reads  
</span><br>
<span class="quotelev1">&gt; that there is
</span><br>
<span class="quotelev1">&gt; only one processors, whereas, there should be 2 or more.  Any advice  
</span><br>
<span class="quotelev1">&gt; on where to
</span><br>
<span class="quotelev1">&gt; look?  Here is my PBS script.  Thanx!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; PBS SCRIPT:
</span><br>
<span class="quotelev2">&gt; &gt; #!/bin/sh
</span><br>
<span class="quotelev2">&gt; &gt; ### Set the job name
</span><br>
<span class="quotelev2">&gt; &gt; #PBS -N HH
</span><br>
<span class="quotelev2">&gt; &gt; ### Declare myprogram non-rerunable
</span><br>
<span class="quotelev2">&gt; &gt; #PBS -r n
</span><br>
<span class="quotelev2">&gt; &gt; ### Combine standard error and standard out to one file.
</span><br>
<span class="quotelev2">&gt; &gt; #PBS -j oe
</span><br>
<span class="quotelev2">&gt; &gt; ### Have PBS mail you results
</span><br>
<span class="quotelev2">&gt; &gt; #PBS -m ae
</span><br>
<span class="quotelev2">&gt; &gt; #PBS -M tedhyu_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; ### Set the queue name, given to you when you get a reservation.
</span><br>
<span class="quotelev2">&gt; &gt; #PBS -q workq
</span><br>
<span class="quotelev2">&gt; &gt; ### Specify the number of cpus for your job.  This example will  
</span><br>
<span class="quotelev1">&gt; run on 32
</span><br>
<span class="quotelev1">&gt; cpus
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;  ### using 8 nodes with 4 processes per node.
</span><br>
<span class="quotelev2">&gt; &gt; #PBS -l nodes=1:ppn=2,walltime=70:00:00
</span><br>
<span class="quotelev2">&gt; &gt; # Switch to the working directory; by default PBS launches  
</span><br>
<span class="quotelev1">&gt; processes from
</span><br>
<span class="quotelev1">&gt; your home directory.
</span><br>
<span class="quotelev2">&gt; &gt; # Jobs should only be run from /home, /project, or /work; PBS  
</span><br>
<span class="quotelev1">&gt; returns
</span><br>
<span class="quotelev1">&gt; results via NFS.
</span><br>
<span class="quotelev2">&gt; &gt; PBS_O_WORKDIR=/temp1/tedhyu/HH
</span><br>
<span class="quotelev2">&gt; &gt; export
</span><br>
<span class="quotelev1">&gt; CODE=/project/source/seqquest/seqquest_source_v261j/ 
</span><br>
<span class="quotelev1">&gt; hive_CentOS4.5_parallel/build_261j/quest_ompi.x
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; echo Working directory is $PBS_O_WORKDIR
</span><br>
<span class="quotelev2">&gt; &gt; mkdir -p $PBS_O_WORKDIR
</span><br>
<span class="quotelev2">&gt; &gt; cd $PBS_O_WORKDIR
</span><br>
<span class="quotelev2">&gt; &gt; rm -rf *
</span><br>
<span class="quotelev2">&gt; &gt; cp /ul/tedhyu/fuelcell/HOH/test/HH.in ./lcao.in
</span><br>
<span class="quotelev2">&gt; &gt; cp /ul/tedhyu/atom_pbe/* .
</span><br>
<span class="quotelev2">&gt; &gt; echo Running on host `hostname`
</span><br>
<span class="quotelev2">&gt; &gt; echo Time is `date`
</span><br>
<span class="quotelev2">&gt; &gt; echo Directory is `pwd`
</span><br>
<span class="quotelev2">&gt; &gt; echo This jobs runs on the following processors:
</span><br>
<span class="quotelev2">&gt; &gt; echo `cat $PBS_NODEFILE`
</span><br>
<span class="quotelev2">&gt; &gt; Number=`wc -l $PBS_NODEFILE | awk '{print $1}'`
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; export Number
</span><br>
<span class="quotelev2">&gt; &gt; echo
</span><br>
<span class="quotelev1">&gt;  ${Number}
</span><br>
<span class="quotelev2">&gt; &gt; # Define number of processors
</span><br>
<span class="quotelev2">&gt; &gt; NPROCS=`wc -l &lt; $PBS_NODEFILE`
</span><br>
<span class="quotelev2">&gt; &gt; # And the number or hosts
</span><br>
<span class="quotelev2">&gt; &gt; NHOSTS=`cat $PBS_NODEFILE|uniq|wc -l`
</span><br>
<span class="quotelev2">&gt; &gt; echo This job has allocated $NPROCS cpus
</span><br>
<span class="quotelev2">&gt; &gt; echo NHOSTS
</span><br>
<span class="quotelev2">&gt; &gt; #mpirun  -machinefile $PBS_NODEFILE  ${CODE}
</span><br>
<span class="quotelev2">&gt; &gt;/ul/tedhyu/fuelcell/HOH/test/HH.out
</span><br>
<span class="quotelev2">&gt; &gt; #mpiexec -np 2  ${CODE} &gt;/ul/tedhyu/fuelcell/HOH/test/HH.out
</span><br>
<span class="quotelev2">&gt; &gt; /opt/mpich-1.2.5.10-ch_p4-gcc/bin/mpirun -machinefile  
</span><br>
<span class="quotelev1">&gt; $PBS_NODEFILE -np
</span><br>
<span class="quotelev1">&gt; $NPROCS ${CODE} &gt;/ul/tedhyu/fuelcell/HOH/test/HH.out
</span><br>
<span class="quotelev2">&gt; &gt; cd ..
</span><br>
<span class="quotelev2">&gt; &gt; rm -rf HH
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please note, that you are mixing Open MPI (API/Library) with MPICH
</span><br>
<span class="quotelev1">&gt; (mpirun). This is a mistake I like to make, too. If you use
</span><br>
<span class="quotelev1">&gt; the ompi mpiexec program, it probably works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dorian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7982/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7983.php">Ted Yu: "Re: [OMPI users] Global Communicator"</a>
<li><strong>Previous message:</strong> <a href="7981.php">Ted Yu: "Re: [OMPI users] Global Communicator"</a>
<li><strong>In reply to:</strong> <a href="7981.php">Ted Yu: "Re: [OMPI users] Global Communicator"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7983.php">Ted Yu: "Re: [OMPI users] Global Communicator"</a>
<li><strong>Reply:</strong> <a href="7983.php">Ted Yu: "Re: [OMPI users] Global Communicator"</a>
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
