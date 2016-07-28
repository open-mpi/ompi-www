<?
$subject_val = "Re: [OMPI users] Global Communicator";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  6 11:59:15 2009" -->
<!-- isoreceived="20090206165915" -->
<!-- sent="Fri, 6 Feb 2009 10:59:09 -0600" -->
<!-- isosent="20090206165909" -->
<!-- name="McCalla, Mac" -->
<!-- email="macmccalla_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Global Communicator" -->
<!-- id="F53E389D6EDBD6408B5BEED30A9DAD630510E92B_at_HACSSEX005.ihess.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="946517.50258.qm_at_web82701.mail.mud.yahoo.com" -->
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
<strong>From:</strong> McCalla, Mac (<em>macmccalla_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-06 11:59:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7985.php">Jeff Squyres: "Re: [OMPI users] signal 15 (terminated)"</a>
<li><strong>Previous message:</strong> <a href="7983.php">Ted Yu: "Re: [OMPI users] Global Communicator"</a>
<li><strong>In reply to:</strong> <a href="7983.php">Ted Yu: "Re: [OMPI users] Global Communicator"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7987.php">Jeff Squyres: "Re: [OMPI users] Global Communicator"</a>
<li><strong>Reply:</strong> <a href="7987.php">Jeff Squyres: "Re: [OMPI users] Global Communicator"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ted,
<br>
Does the &quot;default mpirun command&quot; implementation match the build
<br>
environment for quest_ompi.x ?  
<br>
ie., what mpi implementation (mpich, LAM/MPI, OPENMPI, or other) was
<br>
quest_ompi.x  compiled/linked with? and does that match the result of
<br>
&quot;which mpirun&quot;?  You might try running a job using your PBS system that
<br>
simply executes the which mpirun command and see what you get.
<br>
&nbsp;
<br>
HTH,
<br>
&nbsp;
<br>
Mac McCalla
<br>
Houston
<br>
<p>________________________________
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Ted Yu
<br>
Sent: 06 February 2009 10:02
<br>
To: Open MPI Users; Ralph Castain
<br>
Subject: Re: [OMPI users] Global Communicator
<br>
<p><p>Just to make sure, because I have to use open mpi for this program:
<br>
<p>I'm using the default mpirun command.
<br>
<p>When I type &quot;man mpirun&quot;, these are the first few lines:
<br>
<p>MPIRUN(1)                     OPEN MPI COMMANDS
<br>
MPIRUN(1)
<br>
<p>NAME
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orterun,  mpirun,  mpiexec  - Execute serial and parallel jobs in
<br>
Open
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Note: mpirun, mpiexec, and orterun are all  exact  synonyms  for
<br>
each
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;other.  Using any of the names will result in exactly identical
<br>
behav-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ior.
<br>
<p>Ted
<br>
--- On Fri, 2/6/09, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From: Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject: Re: [OMPI users] Global Communicator
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To: tedhyu_at_[hidden], &quot;Open MPI Users&quot;
<br>
&lt;users_at_[hidden]&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date: Friday, February 6, 2009, 7:55 AM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hi Ted 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From what I can tell, you are not using Open MPI, but mpich's
<br>
mpirun. You might want to ask for help on their mailing list.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ralph
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On Feb 6, 2009, at 8:49 AM, Ted Yu wrote:
<br>
<p><p>Thanx for the reply.  
<br>
<p>I guess I should go back a step:  I had used the openmpi version on my
<br>
system which is simply:
<br>
&quot;mpirun -machinefile $PBS_NODEFILE -np $NPROCS ${CODE}
<br>
<span class="quotelev1">&gt;/ul/tedhyu/fuelcell/HOH/test/HH.out&quot;
</span><br>
<p>This did not work because I was just getting a blank output.
<br>
<p>I tried this older version because at least i was getting an output.
<br>
&quot;/opt/mpich-1.2.5.10-ch_p4-gcc/bin/mpirun -machinefile $PBS_NODEFILE -np
<br>
<p>$NPROCS ${CODE} &gt;/ul/tedhyu/fuelcell/HOH/test/HH.out&quot;
<br>
I think this older version is failing me for whatever reason.  Do you
<br>
have any clue?  I read somewhere that new versions of mpirun adds extra
<br>
commandline arguments to the end of the line.  Therefore the newer
<br>
version of mpirun may be not be giving an output because it sees all
<br>
extra commandline arguments after my output file
<br>
<span class="quotelev1">&gt;/ul/tedhyu/fuelcell/HOH/test/HH.out
</span><br>
<p>This is where I'm reading that there are extra commandline arguments for
<br>
a version of mpirun:
<br>
<a href="https://lists.sdsc.edu/pipermail/npaci-rocks-discussion/2008-February/02">https://lists.sdsc.edu/pipermail/npaci-rocks-discussion/2008-February/02</a>
<br>
9333.html
<br>
<p>Again, I'm new at this, and I'm just guessing.  Any ideas of where to
<br>
turn would be helpful!
<br>
<p>Ted
<br>
<p>--- On Thu, 2/5/09, doriankrause &lt;doriankrause_at_[hidden]&gt; wrote:
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From: doriankrause &lt;doriankrause_at_[hidden]&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject: Re: [OMPI users] Global Communicator
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To: tedhyu_at_[hidden], &quot;Open MPI Users&quot;
<br>
&lt;users_at_[hidden]&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date: Thursday, February 5, 2009, 11:14 PM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ted Yu wrote:
<br>
<span class="quotelev1">	&gt; I'm trying to run a job based on openmpi. 
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For some reason, the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;program and the global communicator are not in sync and it reads
<br>
that there is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;only one processors, whereas, there should be 2 or more.  Any
<br>
advice on where to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;look?  Here is my PBS script.  Thanx!
<br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; PBS SCRIPT:
</span><br>
<span class="quotelev1">	&gt; #!/bin/sh
</span><br>
<span class="quotelev1">	&gt; ### Set the job name
</span><br>
<span class="quotelev1">	&gt; #PBS -N HH
</span><br>
<span class="quotelev1">	&gt; ### Declare myprogram non-rerunable
</span><br>
<span class="quotelev1">	&gt; #PBS -r n
</span><br>
<span class="quotelev1">	&gt; ### Combine standard error and standard out to one file.
</span><br>
<span class="quotelev1">	&gt; #PBS -j oe
</span><br>
<span class="quotelev1">	&gt; ### Have PBS mail you results
</span><br>
<span class="quotelev1">	&gt; #PBS -m ae
</span><br>
<span class="quotelev1">	&gt; #PBS -M tedhyu_at_[hidden]
</span><br>
<span class="quotelev1">	&gt; ### Set the queue name, given to you when you get a
</span><br>
reservation.
<br>
<span class="quotelev1">	&gt; #PBS -q workq
</span><br>
<span class="quotelev1">	&gt; ### Specify the number of cpus for your job.  This example
</span><br>
will run on 32
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cpus
<br>
<span class="quotelev1">	&gt;
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;### using 8 nodes with 4 processes per node.
<br>
<span class="quotelev1">	&gt; #PBS -l nodes=1:ppn=2,walltime=70:00:00
</span><br>
<span class="quotelev1">	&gt; # Switch to the working directory; by default PBS launches
</span><br>
processes from
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;your home directory.
<br>
<span class="quotelev1">	&gt;
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Jobs should only be run from /home, /project, or /work; PBS
<br>
returns
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;results via NFS.
<br>
<span class="quotelev1">	&gt; PBS_O_WORKDIR=/temp1/tedhyu/HH
</span><br>
<span class="quotelev1">	&gt; export
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
CODE=/project/source/seqquest/seqquest_source_v261j/hive_CentOS4.5_paral
<br>
lel/build_261j/quest_ompi.x
<br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; echo Working directory is $PBS_O_WORKDIR
</span><br>
<span class="quotelev1">	&gt; mkdir -p $PBS_O_WORKDIR
</span><br>
<span class="quotelev1">	&gt; cd $PBS_O_WORKDIR
</span><br>
<span class="quotelev1">	&gt; rm -rf *
</span><br>
<span class="quotelev1">	&gt; cp /ul/tedhyu/fuelcell/HOH/test/HH.in ./lcao.in
</span><br>
<span class="quotelev1">	&gt; cp /ul/tedhyu/atom_pbe/* .
</span><br>
<span class="quotelev1">	&gt; echo Running on host `hostname`
</span><br>
<span class="quotelev1">	&gt; echo Time is `date`
</span><br>
<span class="quotelev1">	&gt; echo Directory is `pwd`
</span><br>
<span class="quotelev1">	&gt; echo This jobs runs on the following processors:
</span><br>
<span class="quotelev1">	&gt; echo `cat $PBS_NODEFILE`
</span><br>
<span class="quotelev1">	&gt; Number=`wc -l $PBS_NODEFILE | awk '{print $1}'`
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; export Number
</span><br>
<span class="quotelev1">	&gt; echo
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;${Number}
<br>
<span class="quotelev1">	&gt; # Define number of processors
</span><br>
<span class="quotelev1">	&gt; NPROCS=`wc -l &lt; $PBS_NODEFILE`
</span><br>
<span class="quotelev1">	&gt; # And the number or hosts
</span><br>
<span class="quotelev1">	&gt; NHOSTS=`cat $PBS_NODEFILE|uniq|wc -l`
</span><br>
<span class="quotelev1">	&gt; echo This job has
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;allocated $NPROCS cpus
<br>
<span class="quotelev1">	&gt; echo NHOSTS
</span><br>
<span class="quotelev1">	&gt; #mpirun  -machinefile $PBS_NODEFILE  ${CODE}
</span><br>
<span class="quotelev1">	&gt;/ul/tedhyu/fuelcell/HOH/test/HH.out
</span><br>
<span class="quotelev1">	&gt; #mpiexec -np 2  ${CODE} &gt;/ul/tedhyu/fuelcell/HOH/test/HH.out
</span><br>
<span class="quotelev1">	&gt; /opt/mpich-1.2.5.10-ch_p4-gcc/bin/mpirun -machinefile
</span><br>
$PBS_NODEFILE -np
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$NPROCS ${CODE} &gt;/ul/tedhyu/fuelcell/HOH/test/HH.out
<br>
<span class="quotelev1">	&gt; cd ..
</span><br>
<span class="quotelev1">	&gt; rm -rf HH
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;   
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please note, that you are mixing Open MPI (API/Library) with
<br>
MPICH 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(mpirun). This is a mistake I like to make, too. If you use
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the ompi mpiexec program, it probably works.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dorian
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;       
</span><br>
<span class="quotelev1">	&gt;   
</span><br>
<span class="quotelev1">	&gt;
</span><br>
------------------------------------------------------------------------
<br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________________________________________
<br>
<span class="quotelev1">	&gt; users mailing list
</span><br>
<span class="quotelev1">	&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">	&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________________________________________
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users mailing list
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7984/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7985.php">Jeff Squyres: "Re: [OMPI users] signal 15 (terminated)"</a>
<li><strong>Previous message:</strong> <a href="7983.php">Ted Yu: "Re: [OMPI users] Global Communicator"</a>
<li><strong>In reply to:</strong> <a href="7983.php">Ted Yu: "Re: [OMPI users] Global Communicator"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7987.php">Jeff Squyres: "Re: [OMPI users] Global Communicator"</a>
<li><strong>Reply:</strong> <a href="7987.php">Jeff Squyres: "Re: [OMPI users] Global Communicator"</a>
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
