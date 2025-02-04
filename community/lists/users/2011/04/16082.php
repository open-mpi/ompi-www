<?
$subject_val = "Re: [OMPI users] openmpi/pbsdsh/Torque problem";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr  3 11:34:31 2011" -->
<!-- isoreceived="20110403153431" -->
<!-- sent="Sun, 3 Apr 2011 10:34:26 -0500" -->
<!-- isosent="20110403153426" -->
<!-- name="Laurence Marks" -->
<!-- email="L-marks_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi/pbsdsh/Torque problem" -->
<!-- id="BANLkTi=jHbhp=4EPWRowGtFEuco5A4EdFA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5ACC1F69-A289-40EF-9E24-C6DB76699C77_at_open-mpi.org" -->
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
<strong>From:</strong> Laurence Marks (<em>L-marks_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-03 11:34:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16083.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Previous message:</strong> <a href="16081.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>In reply to:</strong> <a href="16079.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16083.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Reply:</strong> <a href="16083.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, Apr 3, 2011 at 9:56 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 3, 2011, at 8:14 AM, Laurence Marks wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Let me expand on this slightly (in response to Ralph Castain's posting
</span><br>
<span class="quotelev2">&gt;&gt; -- I had digest mode set). As currently constructed a shellscript in
</span><br>
<span class="quotelev2">&gt;&gt; Wien2k (www.wien2k.at) launches a series of tasks using
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ($remote $remotemachine &quot;cd $PWD;$t $ttt;rm -f .lock_$lockfile[$p]&quot;)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; .time1_$loop &amp;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; where the standard setting for &quot;remote&quot; is &quot;ssh&quot;, remotemachine is the
</span><br>
<span class="quotelev2">&gt;&gt; appropriate host, &quot;t&quot; is &quot;time&quot; and &quot;ttt&quot; is a concatenation of
</span><br>
<span class="quotelev2">&gt;&gt; commands, for instance when using 2 cores on one node for Task1, 2
</span><br>
<span class="quotelev2">&gt;&gt; cores on 2 nodes for Task2 and 2 cores on 1 node for Task3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Task1:
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -v -x LD_LIBRARY_PATH -x PATH -np 2 -machinefile .machine1
</span><br>
<span class="quotelev2">&gt;&gt; /home/lma712/src/Virgin_10.1/lapw1Q_mpi lapw1Q_1.def
</span><br>
<span class="quotelev2">&gt;&gt; Task2:
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -v -x LD_LIBRARY_PATH -x PATH -np 4 -machinefile .machine2
</span><br>
<span class="quotelev2">&gt;&gt; /home/lma712/src/Virgin_10.1/lapw1Q_mpi lapw1Q_2.def
</span><br>
<span class="quotelev2">&gt;&gt; Task3:
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -v -x LD_LIBRARY_PATH -x PATH -np 2 -machinefile .machine3
</span><br>
<span class="quotelev2">&gt;&gt; /home/lma712/src/Virgin_10.1/lapw1Q_mpi lapw1Q_3.def
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is a stable script, works under SGI, linux, mvapich and many
</span><br>
<span class="quotelev2">&gt;&gt; others using ssh or rsh (although I've never myself used it with rsh).
</span><br>
<span class="quotelev2">&gt;&gt; It is general purpose, i.e. will work to run just 1 task on 8x8
</span><br>
<span class="quotelev2">&gt;&gt; nodes/cores or 8 parallel tasks on 8 nodes all with 8 cores or any
</span><br>
<span class="quotelev2">&gt;&gt; scatter of nodes/cores.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; According to some, ssh is becoming obsolete within supercomputers and
</span><br>
<span class="quotelev2">&gt;&gt; the &quot;replacement&quot; is pbsdsh at least under Torque.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Somebody is playing an April Fools joke on you. The majority of supercomputers use ssh as their sole launch mechanism, and I have seen no indication that anyone intends to change that situation. That said, Torque is certainly popular and a good environment.
</span><br>
<p>Alas, it is not an April fools joke, to quote from
<br>
<a href="http://www.bear.bham.ac.uk/bluebear/pbsdsh.shtml">http://www.bear.bham.ac.uk/bluebear/pbsdsh.shtml</a>
<br>
&quot;pbsdsh can be used as a replacement for an ssh or rsh command which
<br>
invokes a user command on a worker machine. Some applications expect
<br>
the availability of rsh or ssh  in order to invoke parts of the
<br>
computation on the sister worker nodes of the main worker. Using
<br>
pbsdsh instead is necessary on this cluster because direct use of ssh
<br>
or rsh is not allowed, for accounting and security reasons.&quot;
<br>
<p>I am not using that computer. A scenario that I have come across is
<br>
that when a msub job is killed because it has exceeded it's Walltime
<br>
mpi tasks spawned by ssh may not be terminated because (so I am told)
<br>
Torque does not know about them.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Getting pbsdsh is
</span><br>
<span class="quotelev2">&gt;&gt; certainly not as simple as the documentation I've seen. To get it to
</span><br>
<span class="quotelev2">&gt;&gt; even partially work I am using for &quot;remote&quot; a script &quot;pbsh&quot; which
</span><br>
<span class="quotelev2">&gt;&gt; creates an executable bash file where HOME, PATH, LD_LIBRARY_PATH etc
</span><br>
<span class="quotelev2">&gt;&gt; as well as the PBS environmental variables listed at the bottom of
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.bear.bham.ac.uk/bluebear/pbsdsh.shtml">http://www.bear.bham.ac.uk/bluebear/pbsdsh.shtml</a> plus PBS_NODEFILE to
</span><br>
<span class="quotelev2">&gt;&gt; a file $PBS_O_WORKDIR/.tmp_$1 followed by the relevant command and
</span><br>
<span class="quotelev2">&gt;&gt; then runs
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; pbsdsh -h $1 /bin/bash -lc &quot; $PBS_O_WORKDIR/.tmp_$1 &#194;&#160;&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This works fine so long as Task2 does not have 2 nodes (probably 3 as
</span><br>
<span class="quotelev2">&gt;&gt; well, I've not tested this). If it does there is a communications
</span><br>
<span class="quotelev2">&gt;&gt; failure with nothing launched on the 2nd node of Task2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm including the script below, as maybe there are some other
</span><br>
<span class="quotelev2">&gt;&gt; environmental variables needed or some should not be there in order to
</span><br>
<span class="quotelev2">&gt;&gt; properly rebuilt the environment so things will work. (And yes, I know
</span><br>
<span class="quotelev2">&gt;&gt; there should be tests to see if the variables are set first and so
</span><br>
<span class="quotelev2">&gt;&gt; forth and this is not so clean, this is just an initial version.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By providing all those PBS-related envars to OMPI, you are causing OMPI to think it should use Torque as the launch mechanism. Unfortunately, that won't work in this scenario.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When you start a Torque job (get an allocation etc.), Torque puts you on one of the allocated nodes and creates a &quot;sister mom&quot; on that node. This is your job's &quot;master node&quot;. All Torque-based launches must take place from that location.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So when you pbsdsh to another node and attempt to execute mpirun with those envars set, mpirun attempts to contact the local &quot;sister mom&quot; so it can order the launch of any daemons on other nodes....only the &quot;sister mom&quot; isn't there! So the connection fails and mpirun aborts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If mpirun is -only- launching procs on the local node, then it doesn't need to launch another daemon (as mpirun will host the local procs itself), and so it doesn't attempt to contact the &quot;sister mom&quot; and the comm failure doesn't occur.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I still don't understand is why you are trying to do it this way. Why not just run
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; time mpirun -v -x LD_LIBRARY_PATH -x PATH -np 2 -machinefile .machineN /home/lma712/src/Virgin_10.1/lapw1Q_mpi lapw1Q_1.def
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where machineN contains the names of the nodes where you want the MPI apps to execute? mpirun will only execute apps on those nodes, so this accomplishes the same thing as your script - only with a lot less pain.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your script would just contain a sequence of these commands, each with its number of procs and machinefile as required.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually, it would be pretty much identical to the script I use when doing scaling tests...
</span><br>
<p>This can be done, and in fact I have a job running where non-mpi is
<br>
launched using pbsdsh but all the mpi is launched locally and this
<br>
seems to be working. This may be a viable, general solution but there
<br>
could also be issues with SCRATCH and other directories. In principle
<br>
there could also be issues with launching N mpi tasks from one node.
<br>
The executables I am using work well with very scattered cores, e.g.
<br>
using procs=64 or procs=256 but (at least with the system I am using)
<br>
I may only end up with 1 or 2 cores on the local node where the job
<br>
starts. (I've asked the sys admin people to find a way to do this
<br>
better, e.g. prefer launching from the node with the largest number of
<br>
cores available which I think can be done, but they do not have this
<br>
setup as yet.)
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----------
</span><br>
<span class="quotelev2">&gt;&gt; # Script to replace ssh by pbsdsh
</span><br>
<span class="quotelev2">&gt;&gt; # Beta version, April 2011, L. D. Marks
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # Remove old file -- needed !
</span><br>
<span class="quotelev2">&gt;&gt; rm -f $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # Create a script that exports the environment we have
</span><br>
<span class="quotelev2">&gt;&gt; # This may not be enough
</span><br>
<span class="quotelev2">&gt;&gt; echo #!/bin/bash &gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev2">&gt;&gt; echo source $HOME/.bashrc &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev2">&gt;&gt; echo cd $PBS_O_WORKDIR &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;&gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev2">&gt;&gt; echo export PATH=$PBS_O_PATH &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;&gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev2">&gt;&gt; echo export TMPDIR=$TMPDIR &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;&gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev2">&gt;&gt; echo export SCRATCH=$SCRATCH &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;&gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev2">&gt;&gt; echo export LD_LIBRARY_PATH=$LD_LIBRARY_PATH &#194;&#160; &#194;&#160;&gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # Openmpi needs to have this defined, even if we don't use it
</span><br>
<span class="quotelev2">&gt;&gt; echo export PBS_NODEFILE=$PBS_NODEFILE &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev2">&gt;&gt; echo export PBS_ENVIRONMENT=$PBS_ENVIRONMENT &#194;&#160; &#194;&#160;&gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev2">&gt;&gt; echo export PBS_JOBCOOKIE=$PBS_JOBCOOKIE &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;&gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev2">&gt;&gt; echo export PBS_JOBID=$PBS_JOBID &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;&gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev2">&gt;&gt; echo export PBS_JOBNAME=$PBS_JOBNAME &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;&gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev2">&gt;&gt; echo export PBS_MOMPORT=$PBS_MOMPORT &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;&gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev2">&gt;&gt; echo export PBS_NODENUM=$PBS_NODENUM &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;&gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev2">&gt;&gt; echo export PBS_O_HOME=$PBS_O_HOME &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;&gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev2">&gt;&gt; echo export PBS_O_HOST=$PBS_O_HOST &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;&gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev2">&gt;&gt; echo export PBS_O_LANG=$PBS_O_LANG &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;&gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev2">&gt;&gt; echo export PBS_O_LOGNAME=$PBS_O_LOGNAME &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;&gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev2">&gt;&gt; echo export PBS_O_MAIL=$PBS_O_MAIL &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;&gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev2">&gt;&gt; echo export PBS_O_PATH=$PBS_O_PATH &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;&gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev2">&gt;&gt; echo export PBS_O_QUEUE=$PBS_O_QUEUE &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;&gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev2">&gt;&gt; echo export PBS_O_SHELL=$PBS_O_SHELL &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;&gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev2">&gt;&gt; echo export PBS_O_WORKDIR=$PBS_O_WORKDIR &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;&gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev2">&gt;&gt; echo export PBS_QUEUE=$PBS_QUEUE &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;&gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev2">&gt;&gt; echo export PBS_TASKNUM=$PBS_TASKNUM &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;&gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev2">&gt;&gt; echo export PBS_VNODENUM=$PBS_VNODENUM &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;&gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # Now the command we want to run
</span><br>
<span class="quotelev2">&gt;&gt; echo $2 &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # Make it executable
</span><br>
<span class="quotelev2">&gt;&gt; chmod a+x $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; pbsdsh -h $1 /bin/bash -lc &quot; $PBS_O_WORKDIR/.tmp_$1 &#194;&#160;&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #Cleanup if needed (commented out for debugging)
</span><br>
<span class="quotelev2">&gt;&gt; #rm $PBS_O_WORKDIR/.tmp_$1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sat, Apr 2, 2011 at 9:36 PM, Laurence Marks &lt;L-marks_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a problem which may or may not be openmpi, but since this list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was useful before with a race condition I am posting.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am trying to use pbsdsh as a ssh replacement, pushed by sysadmins as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Torque does not know about ssh tasks launched from a task. In a simple
</span><br>
<span class="quotelev3">&gt;&gt;&gt; case, a script launches three mpi tasks in parallel,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Task1: NodeA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Task2: NodeB and NodeC
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Task3: NodeD
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (some cores on each, all handled correctly). Reproducible (but with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different nodes and numbers of cores) Task1 and Task3 work fine, the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi task starts on NodeB but nothing starts on NodeC, it appears that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NodeC does not communicate. It does not have to be this it could be
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Task1: NodeA NodeB
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Task2: NodeC NodeD
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here NodeC will start and it looks as if NodeD never starts anything.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've also run it with 4 Tasks (1,3,4 work) and if Task2 only uses one
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Node (number of cores do not matter) it is fine.
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
<span class="quotelev3">&gt;&gt;&gt; Albert Szent-Gy&#195;&#182;rgi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Laurence Marks
</span><br>
<span class="quotelev2">&gt;&gt; Department of Materials Science and Engineering
</span><br>
<span class="quotelev2">&gt;&gt; MSE Rm 2036 Cook Hall
</span><br>
<span class="quotelev2">&gt;&gt; 2220 N Campus Drive
</span><br>
<span class="quotelev2">&gt;&gt; Northwestern University
</span><br>
<span class="quotelev2">&gt;&gt; Evanston, IL 60208, USA
</span><br>
<span class="quotelev2">&gt;&gt; Tel: (847) 491-3996 Fax: (847) 491-7820
</span><br>
<span class="quotelev2">&gt;&gt; email: L-marks at northwestern dot edu
</span><br>
<span class="quotelev2">&gt;&gt; Web: www.numis.northwestern.edu
</span><br>
<span class="quotelev2">&gt;&gt; Chair, Commission on Electron Crystallography of IUCR
</span><br>
<span class="quotelev2">&gt;&gt; www.numis.northwestern.edu/
</span><br>
<span class="quotelev2">&gt;&gt; Research is to see what everybody else has seen, and to think what
</span><br>
<span class="quotelev2">&gt;&gt; nobody else has thought
</span><br>
<span class="quotelev2">&gt;&gt; Albert Szent-Gy&#195;&#182;rgi
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
<p><p><p><pre>
-- 
Laurence Marks
Department of Materials Science and Engineering
MSE Rm 2036 Cook Hall
2220 N Campus Drive
Northwestern University
Evanston, IL 60208, USA
Tel: (847) 491-3996 Fax: (847) 491-7820
email: L-marks at northwestern dot edu
Web: www.numis.northwestern.edu
Chair, Commission on Electron Crystallography of IUCR
www.numis.northwestern.edu/
Research is to see what everybody else has seen, and to think what
nobody else has thought
Albert Szent-Gyorgi
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16083.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Previous message:</strong> <a href="16081.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>In reply to:</strong> <a href="16079.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16083.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Reply:</strong> <a href="16083.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
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
