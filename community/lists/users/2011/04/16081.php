<?
$subject_val = "Re: [OMPI users] openmpi/pbsdsh/Torque problem";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr  3 11:17:33 2011" -->
<!-- isoreceived="20110403151733" -->
<!-- sent="Sun, 3 Apr 2011 09:17:24 -0600" -->
<!-- isosent="20110403151724" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi/pbsdsh/Torque problem" -->
<!-- id="0D66F7A6-B6CE-49A4-A8B7-A3940AB12478_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BC3C38E3-3774-431B-A406-DA3CA3A0B9CF_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi/pbsdsh/Torque problem<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-03 11:17:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16082.php">Laurence Marks: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Previous message:</strong> <a href="16080.php">Reuti: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>In reply to:</strong> <a href="16080.php">Reuti: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16082.php">Laurence Marks: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 3, 2011, at 9:12 AM, Reuti wrote:
<br>
<p><span class="quotelev1">&gt; Am 03.04.2011 um 16:56 schrieb Ralph Castain:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 3, 2011, at 8:14 AM, Laurence Marks wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Let me expand on this slightly (in response to Ralph Castain's posting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- I had digest mode set). As currently constructed a shellscript in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Wien2k (www.wien2k.at) launches a series of tasks using
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ($remote $remotemachine &quot;cd $PWD;$t $ttt;rm -f .lock_$lockfile[$p]&quot;)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; .time1_$loop &amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where the standard setting for &quot;remote&quot; is &quot;ssh&quot;, remotemachine is the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; appropriate host, &quot;t&quot; is &quot;time&quot; and &quot;ttt&quot; is a concatenation of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; commands, for instance when using 2 cores on one node for Task1, 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cores on 2 nodes for Task2 and 2 cores on 1 node for Task3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Task1:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -v -x LD_LIBRARY_PATH -x PATH -np 2 -machinefile .machine1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/lma712/src/Virgin_10.1/lapw1Q_mpi lapw1Q_1.def
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Task2:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -v -x LD_LIBRARY_PATH -x PATH -np 4 -machinefile .machine2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/lma712/src/Virgin_10.1/lapw1Q_mpi lapw1Q_2.def
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Task3:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -v -x LD_LIBRARY_PATH -x PATH -np 2 -machinefile .machine3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/lma712/src/Virgin_10.1/lapw1Q_mpi lapw1Q_3.def
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is a stable script, works under SGI, linux, mvapich and many
</span><br>
<span class="quotelev3">&gt;&gt;&gt; others using ssh or rsh (although I've never myself used it with rsh).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It is general purpose, i.e. will work to run just 1 task on 8x8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nodes/cores or 8 parallel tasks on 8 nodes all with 8 cores or any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; scatter of nodes/cores.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; According to some, ssh is becoming obsolete within supercomputers and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the &quot;replacement&quot; is pbsdsh at least under Torque.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Somebody is playing an April Fools joke on you. The majority of supercomputers use ssh as their sole launch mechanism, and I have seen no
</span><br>
<span class="quotelev2">&gt;&gt; indication that anyone intends to change that situation. That said, Torque is certainly popular and a good environment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I operate my Linux clusters without `ssh` or `rsh`. I use SGE's `qrsh` instead. How will you get a tight integration with correct accounting and job control otherwise? This might be different when you have an AIX or NEC SX machine, as they provide additonal control mechanisms.
</span><br>
<p>Like I said, the majority of supercomputers use ssh as their sole -launch- mechanism. They use a variety of methods for resource management, which is a separate issue.
<br>
<p>I'm not arguing the good/bad of any arrangement. We support quite a few, as you know :-)
<br>
<p>Just saying that the notion that ssh is going away isn't supported by the facts.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Getting pbsdsh is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; certainly not as simple as the documentation I've seen. To get it to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; even partially work I am using for &quot;remote&quot; a script &quot;pbsh&quot; which
</span><br>
<span class="quotelev3">&gt;&gt;&gt; creates an executable bash file where HOME, PATH, LD_LIBRARY_PATH etc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as well as the PBS environmental variables listed at the bottom of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.bear.bham.ac.uk/bluebear/pbsdsh.shtml">http://www.bear.bham.ac.uk/bluebear/pbsdsh.shtml</a> plus PBS_NODEFILE to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a file $PBS_O_WORKDIR/.tmp_$1 followed by the relevant command and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then runs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pbsdsh -h $1 /bin/bash -lc &quot; $PBS_O_WORKDIR/.tmp_$1  &quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This works fine so long as Task2 does not have 2 nodes (probably 3 as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; well, I've not tested this). If it does there is a communications
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failure with nothing launched on the 2nd node of Task2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm including the script below, as maybe there are some other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environmental variables needed or some should not be there in order to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; properly rebuilt the environment so things will work. (And yes, I know
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there should be tests to see if the variables are set first and so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; forth and this is not so clean, this is just an initial version.)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; By providing all those PBS-related envars to OMPI, you are causing OMPI to think it should use Torque as the launch mechanism. Unfortunately, that won't work in this scenario.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When you start a Torque job (get an allocation etc.), Torque puts you on one of the allocated nodes and creates a &quot;sister mom&quot; on that node. This is your job's &quot;master node&quot;. All Torque-based launches must take place from that location.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So when you pbsdsh to another node and attempt to execute mpirun with those envars set, mpirun attempts to contact the local &quot;sister mom&quot; so it can order the launch of any daemons on other nodes....only the &quot;sister mom&quot; isn't there! So the connection fails and mpirun aborts.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If mpirun is -only- launching procs on the local node, then it doesn't need to launch another daemon (as mpirun will host the local procs itself), and so it doesn't attempt to contact the &quot;sister mom&quot; and the comm failure doesn't occur.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What I still don't understand is why you are trying to do it this way. Why not just run
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; time mpirun -v -x LD_LIBRARY_PATH -x PATH -np 2 -machinefile .machineN /home/lma712/src/Virgin_10.1/lapw1Q_mpi lapw1Q_1.def
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; where machineN contains the names of the nodes where you want the MPI apps to execute? mpirun will only execute apps on those nodes, so this accomplishes the same thing as your script - only with a lot less pain.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Your script would just contain a sequence of these commands, each with its number of procs and machinefile as required.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Actually, it would be pretty much identical to the script I use when doing scaling tests...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Script to replace ssh by pbsdsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Beta version, April 2011, L. D. Marks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Remove old file -- needed !
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rm -f $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Create a script that exports the environment we have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # This may not be enough
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo #!/bin/bash &gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo source $HOME/.bashrc                       &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo cd $PBS_O_WORKDIR                          &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo export PATH=$PBS_O_PATH                    &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo export TMPDIR=$TMPDIR                      &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo export SCRATCH=$SCRATCH                    &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo export LD_LIBRARY_PATH=$LD_LIBRARY_PATH    &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Openmpi needs to have this defined, even if we don't use it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo export PBS_NODEFILE=$PBS_NODEFILE &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo export PBS_ENVIRONMENT=$PBS_ENVIRONMENT    &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo export PBS_JOBCOOKIE=$PBS_JOBCOOKIE        &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo export PBS_JOBID=$PBS_JOBID                &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo export PBS_JOBNAME=$PBS_JOBNAME            &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo export PBS_MOMPORT=$PBS_MOMPORT            &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo export PBS_NODENUM=$PBS_NODENUM            &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo export PBS_O_HOME=$PBS_O_HOME              &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo export PBS_O_HOST=$PBS_O_HOST              &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo export PBS_O_LANG=$PBS_O_LANG              &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo export PBS_O_LOGNAME=$PBS_O_LOGNAME        &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo export PBS_O_MAIL=$PBS_O_MAIL              &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo export PBS_O_PATH=$PBS_O_PATH              &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo export PBS_O_QUEUE=$PBS_O_QUEUE            &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo export PBS_O_SHELL=$PBS_O_SHELL            &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo export PBS_O_WORKDIR=$PBS_O_WORKDIR        &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo export PBS_QUEUE=$PBS_QUEUE                &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo export PBS_TASKNUM=$PBS_TASKNUM            &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo export PBS_VNODENUM=$PBS_VNODENUM          &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Now the command we want to run
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo $2 &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Make it executable
</span><br>
<span class="quotelev3">&gt;&gt;&gt; chmod a+x $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pbsdsh -h $1 /bin/bash -lc &quot; $PBS_O_WORKDIR/.tmp_$1  &quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #Cleanup if needed (commented out for debugging)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #rm $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sat, Apr 2, 2011 at 9:36 PM, Laurence Marks &lt;L-marks_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have a problem which may or may not be openmpi, but since this list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; was useful before with a race condition I am posting.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am trying to use pbsdsh as a ssh replacement, pushed by sysadmins as
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Torque does not know about ssh tasks launched from a task. In a simple
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; case, a script launches three mpi tasks in parallel,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Task1: NodeA
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Task2: NodeB and NodeC
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Task3: NodeD
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (some cores on each, all handled correctly). Reproducible (but with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; different nodes and numbers of cores) Task1 and Task3 work fine, the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpi task starts on NodeB but nothing starts on NodeC, it appears that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; NodeC does not communicate. It does not have to be this it could be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Task1: NodeA NodeB
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Task2: NodeC NodeD
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here NodeC will start and it looks as if NodeD never starts anything.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I've also run it with 4 Tasks (1,3,4 work) and if Task2 only uses one
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Node (number of cores do not matter) it is fine.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Laurence Marks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Department of Materials Science and Engineering
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MSE Rm 2036 Cook Hall
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2220 N Campus Drive
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Northwestern University
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Evanston, IL 60208, USA
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tel: (847) 491-3996 Fax: (847) 491-7820
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; email: L-marks at northwestern dot edu
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Web: www.numis.northwestern.edu
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Chair, Commission on Electron Crystallography of IUCR
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; www.numis.northwestern.edu/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Research is to see what everybody else has seen, and to think what
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nobody else has thought
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Albert Szent-Gy&#246;rgi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Laurence Marks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Department of Materials Science and Engineering
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MSE Rm 2036 Cook Hall
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2220 N Campus Drive
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Northwestern University
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Evanston, IL 60208, USA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tel: (847) 491-3996 Fax: (847) 491-7820
</span><br>
<span class="quotelev3">&gt;&gt;&gt; email: L-marks at northwestern dot edu
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Web: www.numis.northwestern.edu
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Chair, Commission on Electron Crystallography of IUCR
</span><br>
<span class="quotelev3">&gt;&gt;&gt; www.numis.northwestern.edu/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Research is to see what everybody else has seen, and to think what
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nobody else has thought
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Albert Szent-Gy&#246;rgi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16082.php">Laurence Marks: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Previous message:</strong> <a href="16080.php">Reuti: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>In reply to:</strong> <a href="16080.php">Reuti: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16082.php">Laurence Marks: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
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
