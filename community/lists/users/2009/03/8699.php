<?
$subject_val = "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 31 22:36:34 2009" -->
<!-- isoreceived="20090401023634" -->
<!-- sent="Tue, 31 Mar 2009 21:36:30 -0500" -->
<!-- isosent="20090401023630" -->
<!-- name="Rahul Nabar" -->
<!-- email="rpnabar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque." -->
<!-- id="c4d69730903311936t49979892k87fa4c6b05f905c8_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9A32E87F-6E83-44B4-A6C3-646E3B8166CE_at_lanl.gov" -->
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
<strong>From:</strong> Rahul Nabar (<em>rpnabar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-31 22:36:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8700.php">PN: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="8698.php">Rahul Nabar: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<li><strong>In reply to:</strong> <a href="8696.php">Ralph Castain: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/8702.php">Ralph Castain: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/8702.php">Ralph Castain: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2009/3/31 Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; It is very hard to debug the problem with so little information. We
</span><br>
<span class="quotelev1">&gt; regularly run OMPI jobs on Torque without issue.
</span><br>
<p>Another small thing that I noticed. Not sure if it is relevant.
<br>
<p>When the job starts running there is an orte process. The args to this
<br>
process are slightly different depending on whether the job was
<br>
submitted with Torque or directly on a node. Could this be an issue?
<br>
Just a thought.
<br>
<p>The essential difference seems that the torque run has the
<br>
--no-daemonize option whereas the direct run has a --set-sid option. I
<br>
got these via ps after I submitted an interactive Torque job.
<br>
<p>Do these matter at all? Full ps output snippets reproduced below. Some
<br>
other numbers also seem different on closer inspection but that might
<br>
be by design.
<br>
<p>###############via Torque; segfaults. ##################
<br>
rpnabar  11287  0.1  0.0  24680  1828 ?        Ss   21:04   0:00 orted
<br>
--no-daemonize --bootproxy 1 --name 0.0.1 --num_procs 2 --vpid_start 0
<br>
--nodename node17 --universe rpnabar_at_node17:default-universe-11286
<br>
--nsreplica &quot;0.0.0;tcp://10.0.0.17:45839&quot; --gprreplica
<br>
&quot;0.0.0;tcp://10.0.0.17:45839&quot;
<br>
######################################################
<br>
<p><p>##############direct MPI run; this works OK################
<br>
rpnabar  11026  0.0  0.0  24676  1712 ?        Ss   20:52   0:00 orted
<br>
--bootproxy 1 --name 0.0.1 --num_procs 2 --vpid_start 0 --nodename
<br>
node17 --universe rpnabar_at_node17:default-universe-11024 --nsreplica
<br>
&quot;0.0.0;tcp://10.0.0.17:34716&quot; --gprreplica
<br>
&quot;0.0.0;tcp://10.0.0.17:34716&quot; --set-sid
<br>
##########################################################
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8700.php">PN: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="8698.php">Rahul Nabar: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<li><strong>In reply to:</strong> <a href="8696.php">Ralph Castain: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/8702.php">Ralph Castain: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/8702.php">Ralph Castain: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
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
