<?
$subject_val = "Re: [OMPI users] Global Communicator";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  6 11:02:21 2009" -->
<!-- isoreceived="20090206160221" -->
<!-- sent="Fri, 6 Feb 2009 08:02:16 -0800 (PST)" -->
<!-- isosent="20090206160216" -->
<!-- name="Ted Yu" -->
<!-- email="tedhyu_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Global Communicator" -->
<!-- id="946517.50258.qm_at_web82701.mail.mud.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0BF5F2B9-5EF1-44FA-B3C2-82BCF3EA396D_at_lanl.gov" -->
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
<strong>From:</strong> Ted Yu (<em>tedhyu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-06 11:02:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7984.php">McCalla, Mac: "Re: [OMPI users] Global Communicator"</a>
<li><strong>Previous message:</strong> <a href="7982.php">Ralph Castain: "Re: [OMPI users] Global Communicator"</a>
<li><strong>In reply to:</strong> <a href="7982.php">Ralph Castain: "Re: [OMPI users] Global Communicator"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7984.php">McCalla, Mac: "Re: [OMPI users] Global Communicator"</a>
<li><strong>Reply:</strong> <a href="7984.php">McCalla, Mac: "Re: [OMPI users] Global Communicator"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just to make sure, because I have to use open mpi for this program:
<br>
<p>I'm using the default mpirun command.
<br>
<p>When I type &quot;man mpirun&quot;, these are the first few lines:
<br>
<p>MPIRUN(1)&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; OPEN MPI COMMANDS&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MPIRUN(1)
<br>
<p>NAME
<br>
&#160;&#160;&#160;&#160;&#160;&#160; orterun,&#160; mpirun,&#160; mpiexec&#160; - Execute serial and parallel jobs in Open
<br>
&#160;&#160;&#160;&#160;&#160;&#160; MPI.
<br>
<p>&#160;&#160;&#160;&#160;&#160;&#160; Note: mpirun, mpiexec, and orterun are all&#160; exact&#160; synonyms&#160; for&#160; each
<br>
&#160;&#160;&#160;&#160;&#160;&#160; other.&#160; Using any of the names will result in exactly identical behav-
<br>
&#160;&#160;&#160;&#160;&#160;&#160; ior.
<br>
<p>Ted
<br>
--- On Fri, 2/6/09, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
From: Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Global Communicator
<br>
To: tedhyu_at_[hidden], &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Friday, February 6, 2009, 7:55 AM
<br>
<p>Hi Ted
<br>
<span class="quotelev1">&gt;From what I can tell, you are not using Open MPI, but mpich's mpirun. You might want to ask for help on their mailing list.
</span><br>
Ralph
<br>
On Feb 6, 2009, at 8:49 AM, Ted Yu wrote:
<br>
Thanx for the reply.&#160; 
<br>
<p>I guess I should go back a step:&#160; I had used the openmpi version on my system which is simply:
<br>
&quot;mpirun -machinefile $PBS_NODEFILE -np $NPROCS ${CODE} &gt;/ul/tedhyu/fuelcell/HOH/test/HH.out&quot;
<br>
<p>This did not work because I was just getting a blank output.
<br>
<p>I tried this older version because at least i was getting an output.
<br>
&quot;/opt/mpich-1.2.5.10-ch_p4-gcc/bin/mpirun -machinefile $PBS_NODEFILE -np
<br>
$NPROCS ${CODE} &gt;/ul/tedhyu/fuelcell/HOH/test/HH.out&quot; I think this older version is failing me for whatever reason.&#160; Do you have any clue?&#160; I read somewhere that new versions of mpirun adds extra commandline arguments to the end of the line.&#160; Therefore the newer version of mpirun may be not be giving an output because it sees all extra commandline arguments after my output file &gt;/ul/tedhyu/fuelcell/HOH/test/HH.out
<br>
<p>This is where I'm reading that there are extra commandline arguments for a version of mpirun:
<br>
<a href="https://lists.sdsc.edu/pipermail/npaci-rocks-discussion/2008-February/029333.html">https://lists.sdsc.edu/pipermail/npaci-rocks-discussion/2008-February/029333.html</a>
<br>
<p>Again, I'm new at this, and I'm just guessing.&#160; Any ideas of where to turn would be helpful!
<br>
<p>Ted
<br>
<p>--- On Thu, 2/5/09, doriankrause &lt;doriankrause_at_[hidden]&gt; wrote:
<br>
From: doriankrause &lt;doriankrause_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Global Communicator
<br>
To: tedhyu_at_[hidden], &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Thursday, February 5, 2009, 11:14 PM
<br>
<p>Ted Yu wrote:
<br>
<span class="quotelev1">&gt; I'm trying to run a job based on openmpi.  For some reason, the
</span><br>
program and the global communicator are not in sync and it reads that there is
<br>
only one processors, whereas, there should be 2 or more.  Any advice on where to
<br>
look?  Here is my PBS script.  Thanx!
<br>
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
<span class="quotelev1">&gt; ### Specify the number of cpus for your job.  This example will run on 32
</span><br>
cpus
<br>
<span class="quotelev1">&gt;
</span><br>
&nbsp;### using 8 nodes with 4 processes per node.
<br>
<span class="quotelev1">&gt; #PBS -l nodes=1:ppn=2,walltime=70:00:00
</span><br>
<span class="quotelev1">&gt; # Switch to the working directory; by default PBS launches processes from
</span><br>
your home directory.
<br>
<span class="quotelev1">&gt; # Jobs should only be run from /home, /project, or /work; PBS returns
</span><br>
results via NFS.
<br>
<span class="quotelev1">&gt; PBS_O_WORKDIR=/temp1/tedhyu/HH
</span><br>
<span class="quotelev1">&gt; export
</span><br>
CODE=/project/source/seqquest/seqquest_source_v261j/hive_CentOS4.5_parallel/build_261j/quest_ompi.x
<br>
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
<span class="quotelev1">&gt; echo
</span><br>
&nbsp;${Number}
<br>
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
<span class="quotelev1">&gt; #mpirun  -machinefile $PBS_NODEFILE  ${CODE}
</span><br>
<span class="quotelev1">&gt;/ul/tedhyu/fuelcell/HOH/test/HH.out
</span><br>
<span class="quotelev1">&gt; #mpiexec -np 2  ${CODE} &gt;/ul/tedhyu/fuelcell/HOH/test/HH.out
</span><br>
<span class="quotelev1">&gt; /opt/mpich-1.2.5.10-ch_p4-gcc/bin/mpirun -machinefile $PBS_NODEFILE -np
</span><br>
$NPROCS ${CODE} &gt;/ul/tedhyu/fuelcell/HOH/test/HH.out
<br>
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
<span class="quotelev1">&gt;
</span><br>
&nbsp;_______________________________________________
<br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7983/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7984.php">McCalla, Mac: "Re: [OMPI users] Global Communicator"</a>
<li><strong>Previous message:</strong> <a href="7982.php">Ralph Castain: "Re: [OMPI users] Global Communicator"</a>
<li><strong>In reply to:</strong> <a href="7982.php">Ralph Castain: "Re: [OMPI users] Global Communicator"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7984.php">McCalla, Mac: "Re: [OMPI users] Global Communicator"</a>
<li><strong>Reply:</strong> <a href="7984.php">McCalla, Mac: "Re: [OMPI users] Global Communicator"</a>
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
