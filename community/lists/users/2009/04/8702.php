<?
$subject_val = "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  1 02:13:35 2009" -->
<!-- isoreceived="20090401061335" -->
<!-- sent="Wed, 1 Apr 2009 00:13:26 -0600" -->
<!-- isosent="20090401061326" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque." -->
<!-- id="D81DD46A-04CD-42D6-8C06-4401E39EAA0F_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="c4d69730903311936t49979892k87fa4c6b05f905c8_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque.<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-01 02:13:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8703.php">M C: "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8701.php">Rahul Nabar: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8699.php">Rahul Nabar: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8723.php">Rahul Nabar: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<li><strong>Reply:</strong> <a href="8723.php">Rahul Nabar: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The difference you are seeing here indicates that the &quot;direct&quot; run is  
<br>
using the rsh launcher, while the other run is using the Torque  
<br>
launcher.
<br>
<p>So I gather that by &quot;direct&quot; you mean that you don't get an allocation  
<br>
from Maui before running the job, but for the other you do? Otherwise,  
<br>
OMPI should detect the that it is running under Torque and  
<br>
automatically use the Torque launcher unless directed to do otherwise.
<br>
<p>The --set-sid option causes the orteds to separate from mpirun's  
<br>
process group. This was done on the rsh launcher to avoid having  
<br>
signals directly propagate to local processes so that mpirun could  
<br>
properly deal with them.
<br>
<p>The --no-daemonize option on the Torque launch keeps the daemons in  
<br>
the PBS job so that Torque can properly terminate them all when you  
<br>
reach your time limit. We let the rsh-launched daemons daemonize so  
<br>
that they terminate the ssh session as there are system limits to the  
<br>
number of ssh sessions you can have concurrently open.
<br>
<p>Once the daemon gets running on the node, there isn't anything  
<br>
different about how it starts a process that depends upon how the  
<br>
daemon was started. The environment seen by the processes will be the  
<br>
same either way, with the exception of the process group. Is there  
<br>
something about that application which is sensitive to the process  
<br>
group?
<br>
<p>If so, what you could do is simply add -mca pls rsh to your command  
<br>
line when launching it. This will direct OMPI to use the rsh launcher,  
<br>
which will give you the same behavior as your &quot;direct&quot; scenario (we  
<br>
will still read the PBS_NODEFILE to get the allocation).
<br>
<p>You might also want to upgrade to the 1.3 series - the launch system  
<br>
there is simpler and scales better. If your application cares about  
<br>
process group, you might still need to specify the rsh launcher (in  
<br>
1.3, you would use -mca plm rsh to do this - slight syntax change),  
<br>
but it would be interesting to see if it has any impact...and would  
<br>
definitely run better either way.
<br>
<p>Ralph
<br>
<p><p><p>On Mar 31, 2009, at 8:36 PM, Rahul Nabar wrote:
<br>
<p><span class="quotelev1">&gt; 2009/3/31 Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; It is very hard to debug the problem with so little information. We
</span><br>
<span class="quotelev2">&gt;&gt; regularly run OMPI jobs on Torque without issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another small thing that I noticed. Not sure if it is relevant.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When the job starts running there is an orte process. The args to this
</span><br>
<span class="quotelev1">&gt; process are slightly different depending on whether the job was
</span><br>
<span class="quotelev1">&gt; submitted with Torque or directly on a node. Could this be an issue?
</span><br>
<span class="quotelev1">&gt; Just a thought.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The essential difference seems that the torque run has the
</span><br>
<span class="quotelev1">&gt; --no-daemonize option whereas the direct run has a --set-sid option. I
</span><br>
<span class="quotelev1">&gt; got these via ps after I submitted an interactive Torque job.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do these matter at all? Full ps output snippets reproduced below. Some
</span><br>
<span class="quotelev1">&gt; other numbers also seem different on closer inspection but that might
</span><br>
<span class="quotelev1">&gt; be by design.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ###############via Torque; segfaults. ##################
</span><br>
<span class="quotelev1">&gt; rpnabar  11287  0.1  0.0  24680  1828 ?        Ss   21:04   0:00 orted
</span><br>
<span class="quotelev1">&gt; --no-daemonize --bootproxy 1 --name 0.0.1 --num_procs 2 --vpid_start 0
</span><br>
<span class="quotelev1">&gt; --nodename node17 --universe rpnabar_at_node17:default-universe-11286
</span><br>
<span class="quotelev1">&gt; --nsreplica &quot;0.0.0;tcp://10.0.0.17:45839&quot; --gprreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://10.0.0.17:45839&quot;
</span><br>
<span class="quotelev1">&gt; ######################################################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ##############direct MPI run; this works OK################
</span><br>
<span class="quotelev1">&gt; rpnabar  11026  0.0  0.0  24676  1712 ?        Ss   20:52   0:00 orted
</span><br>
<span class="quotelev1">&gt; --bootproxy 1 --name 0.0.1 --num_procs 2 --vpid_start 0 --nodename
</span><br>
<span class="quotelev1">&gt; node17 --universe rpnabar_at_node17:default-universe-11024 --nsreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://10.0.0.17:34716&quot; --gprreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://10.0.0.17:34716&quot; --set-sid
</span><br>
<span class="quotelev1">&gt; ##########################################################
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
<li><strong>Next message:</strong> <a href="8703.php">M C: "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8701.php">Rahul Nabar: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8699.php">Rahul Nabar: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8723.php">Rahul Nabar: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<li><strong>Reply:</strong> <a href="8723.php">Rahul Nabar: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
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
