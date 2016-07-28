<?
$subject_val = "Re: [OMPI users] openmpi/pbsdsh/Torque problem";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr  3 10:14:50 2011" -->
<!-- isoreceived="20110403141450" -->
<!-- sent="Sun, 3 Apr 2011 09:14:44 -0500" -->
<!-- isosent="20110403141444" -->
<!-- name="Laurence Marks" -->
<!-- email="L-marks_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi/pbsdsh/Torque problem" -->
<!-- id="BANLkTinzRAznAu2=fv9PtJnze3D7xK3iSg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="BANLkTin9kVWQ0kccWRijtjQ3ir2UZUXjOg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-04-03 10:14:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16079.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Previous message:</strong> <a href="16077.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>In reply to:</strong> <a href="16076.php">Laurence Marks: "[OMPI users] openmpi/pbsdsh/Torque problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16079.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Reply:</strong> <a href="16079.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Let me expand on this slightly (in response to Ralph Castain's posting
<br>
-- I had digest mode set). As currently constructed a shellscript in
<br>
Wien2k (www.wien2k.at) launches a series of tasks using
<br>
<p>($remote $remotemachine &quot;cd $PWD;$t $ttt;rm -f .lock_$lockfile[$p]&quot;)
<br>
<span class="quotelev2">&gt;&gt;.time1_$loop &amp;
</span><br>
<p>where the standard setting for &quot;remote&quot; is &quot;ssh&quot;, remotemachine is the
<br>
appropriate host, &quot;t&quot; is &quot;time&quot; and &quot;ttt&quot; is a concatenation of
<br>
commands, for instance when using 2 cores on one node for Task1, 2
<br>
cores on 2 nodes for Task2 and 2 cores on 1 node for Task3
<br>
<p>Task1:
<br>
mpirun -v -x LD_LIBRARY_PATH -x PATH -np 2 -machinefile .machine1
<br>
/home/lma712/src/Virgin_10.1/lapw1Q_mpi lapw1Q_1.def
<br>
Task2:
<br>
mpirun -v -x LD_LIBRARY_PATH -x PATH -np 4 -machinefile .machine2
<br>
/home/lma712/src/Virgin_10.1/lapw1Q_mpi lapw1Q_2.def
<br>
Task3:
<br>
mpirun -v -x LD_LIBRARY_PATH -x PATH -np 2 -machinefile .machine3
<br>
/home/lma712/src/Virgin_10.1/lapw1Q_mpi lapw1Q_3.def
<br>
<p>This is a stable script, works under SGI, linux, mvapich and many
<br>
others using ssh or rsh (although I've never myself used it with rsh).
<br>
It is general purpose, i.e. will work to run just 1 task on 8x8
<br>
nodes/cores or 8 parallel tasks on 8 nodes all with 8 cores or any
<br>
scatter of nodes/cores.
<br>
<p>According to some, ssh is becoming obsolete within supercomputers and
<br>
the &quot;replacement&quot; is pbsdsh at least under Torque. Getting pbsdsh is
<br>
certainly not as simple as the documentation I've seen. To get it to
<br>
even partially work I am using for &quot;remote&quot; a script &quot;pbsh&quot; which
<br>
creates an executable bash file where HOME, PATH, LD_LIBRARY_PATH etc
<br>
as well as the PBS environmental variables listed at the bottom of
<br>
<a href="http://www.bear.bham.ac.uk/bluebear/pbsdsh.shtml">http://www.bear.bham.ac.uk/bluebear/pbsdsh.shtml</a> plus PBS_NODEFILE to
<br>
a file $PBS_O_WORKDIR/.tmp_$1 followed by the relevant command and
<br>
then runs
<br>
<p>pbsdsh -h $1 /bin/bash -lc &quot; $PBS_O_WORKDIR/.tmp_$1  &quot;
<br>
<p>This works fine so long as Task2 does not have 2 nodes (probably 3 as
<br>
well, I've not tested this). If it does there is a communications
<br>
failure with nothing launched on the 2nd node of Task2.
<br>
<p>I'm including the script below, as maybe there are some other
<br>
environmental variables needed or some should not be there in order to
<br>
properly rebuilt the environment so things will work. (And yes, I know
<br>
there should be tests to see if the variables are set first and so
<br>
forth and this is not so clean, this is just an initial version.)
<br>
<p>----------
<br>
# Script to replace ssh by pbsdsh
<br>
# Beta version, April 2011, L. D. Marks
<br>
#
<br>
# Remove old file -- needed !
<br>
rm -f $PBS_O_WORKDIR/.tmp_$1
<br>
<p># Create a script that exports the environment we have
<br>
# This may not be enough
<br>
echo #!/bin/bash &gt; $PBS_O_WORKDIR/.tmp_$1
<br>
echo source $HOME/.bashrc                       &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
<br>
echo cd $PBS_O_WORKDIR                          &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
<br>
echo export PATH=$PBS_O_PATH                    &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
<br>
echo export TMPDIR=$TMPDIR                      &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
<br>
echo export SCRATCH=$SCRATCH                    &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
<br>
echo export LD_LIBRARY_PATH=$LD_LIBRARY_PATH    &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
<br>
<p># Openmpi needs to have this defined, even if we don't use it
<br>
echo export PBS_NODEFILE=$PBS_NODEFILE &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
<br>
echo export PBS_ENVIRONMENT=$PBS_ENVIRONMENT    &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
<br>
echo export PBS_JOBCOOKIE=$PBS_JOBCOOKIE        &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
<br>
echo export PBS_JOBID=$PBS_JOBID                &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
<br>
echo export PBS_JOBNAME=$PBS_JOBNAME            &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
<br>
echo export PBS_MOMPORT=$PBS_MOMPORT            &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
<br>
echo export PBS_NODENUM=$PBS_NODENUM            &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
<br>
echo export PBS_O_HOME=$PBS_O_HOME              &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
<br>
echo export PBS_O_HOST=$PBS_O_HOST              &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
<br>
echo export PBS_O_LANG=$PBS_O_LANG              &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
<br>
echo export PBS_O_LOGNAME=$PBS_O_LOGNAME        &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
<br>
echo export PBS_O_MAIL=$PBS_O_MAIL              &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
<br>
echo export PBS_O_PATH=$PBS_O_PATH              &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
<br>
echo export PBS_O_QUEUE=$PBS_O_QUEUE            &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
<br>
echo export PBS_O_SHELL=$PBS_O_SHELL            &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
<br>
echo export PBS_O_WORKDIR=$PBS_O_WORKDIR        &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
<br>
echo export PBS_QUEUE=$PBS_QUEUE                &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
<br>
echo export PBS_TASKNUM=$PBS_TASKNUM            &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
<br>
echo export PBS_VNODENUM=$PBS_VNODENUM          &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
<br>
<p># Now the command we want to run
<br>
echo $2 &gt;&gt; $PBS_O_WORKDIR/.tmp_$1
<br>
<p># Make it executable
<br>
chmod a+x $PBS_O_WORKDIR/.tmp_$1
<br>
<p>pbsdsh -h $1 /bin/bash -lc &quot; $PBS_O_WORKDIR/.tmp_$1  &quot;
<br>
<p>#Cleanup if needed (commented out for debugging)
<br>
#rm $PBS_O_WORKDIR/.tmp_$1
<br>
<p><p>On Sat, Apr 2, 2011 at 9:36 PM, Laurence Marks &lt;L-marks_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I have a problem which may or may not be openmpi, but since this list
</span><br>
<span class="quotelev1">&gt; was useful before with a race condition I am posting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to use pbsdsh as a ssh replacement, pushed by sysadmins as
</span><br>
<span class="quotelev1">&gt; Torque does not know about ssh tasks launched from a task. In a simple
</span><br>
<span class="quotelev1">&gt; case, a script launches three mpi tasks in parallel,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Task1: NodeA
</span><br>
<span class="quotelev1">&gt; Task2: NodeB and NodeC
</span><br>
<span class="quotelev1">&gt; Task3: NodeD
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (some cores on each, all handled correctly). Reproducible (but with
</span><br>
<span class="quotelev1">&gt; different nodes and numbers of cores) Task1 and Task3 work fine, the
</span><br>
<span class="quotelev1">&gt; mpi task starts on NodeB but nothing starts on NodeC, it appears that
</span><br>
<span class="quotelev1">&gt; NodeC does not communicate. It does not have to be this it could be
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Task1: NodeA NodeB
</span><br>
<span class="quotelev1">&gt; Task2: NodeC NodeD
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here NodeC will start and it looks as if NodeD never starts anything.
</span><br>
<span class="quotelev1">&gt; I've also run it with 4 Tasks (1,3,4 work) and if Task2 only uses one
</span><br>
<span class="quotelev1">&gt; Node (number of cores do not matter) it is fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Laurence Marks
</span><br>
<span class="quotelev1">&gt; Department of Materials Science and Engineering
</span><br>
<span class="quotelev1">&gt; MSE Rm 2036 Cook Hall
</span><br>
<span class="quotelev1">&gt; 2220 N Campus Drive
</span><br>
<span class="quotelev1">&gt; Northwestern University
</span><br>
<span class="quotelev1">&gt; Evanston, IL 60208, USA
</span><br>
<span class="quotelev1">&gt; Tel: (847) 491-3996 Fax: (847) 491-7820
</span><br>
<span class="quotelev1">&gt; email: L-marks at northwestern dot edu
</span><br>
<span class="quotelev1">&gt; Web: www.numis.northwestern.edu
</span><br>
<span class="quotelev1">&gt; Chair, Commission on Electron Crystallography of IUCR
</span><br>
<span class="quotelev1">&gt; www.numis.northwestern.edu/
</span><br>
<span class="quotelev1">&gt; Research is to see what everybody else has seen, and to think what
</span><br>
<span class="quotelev1">&gt; nobody else has thought
</span><br>
<span class="quotelev1">&gt; Albert Szent-Gy&#195;&#182;rgi
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
Albert Szent-Gy&#195;&#182;rgi
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16079.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Previous message:</strong> <a href="16077.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>In reply to:</strong> <a href="16076.php">Laurence Marks: "[OMPI users] openmpi/pbsdsh/Torque problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16079.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Reply:</strong> <a href="16079.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
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
