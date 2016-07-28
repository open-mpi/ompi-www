<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 15 09:42:49 2006" -->
<!-- isoreceived="20060615134249" -->
<!-- sent="Thu, 15 Jun 2006 15:42:42 +0200" -->
<!-- isosent="20060615134242" -->
<!-- name="Martin Schaff&#195;&#182;ner" -->
<!-- email="martin.schaffoener_at_[hidden]" -->
<!-- subject="[OMPI users] Openmpi 1.0.3svn10374 not launching apps through TM interface" -->
<!-- id="200606151542.42535.martin.schaffoener_at_e-technik.uni-magdeburg.de" -->
<!-- charset="utf-8" -->
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
<strong>From:</strong> Martin Schaff&#195;&#182;ner (<em>martin.schaffoener_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-15 09:42:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1421.php">Brock Palen: "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps through TM interface"</a>
<li><strong>Previous message:</strong> <a href="1419.php">Brian Barrett: "Re: [OMPI users] Trouble with open MPI and Slurm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1421.php">Brock Palen: "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps through TM interface"</a>
<li><strong>Reply:</strong> <a href="1421.php">Brock Palen: "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps through TM interface"</a>
<li><strong>Reply:</strong> <a href="1422.php">Brock Palen: "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps through TM interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have been trying to set up OpenMPI 1.0.3a1r10374 on our cluster and was 
<br>
partly successful. Partly, because installation worked, compiling a simple 
<br>
example and running it through the rsh pls also worked. However, I'm the only 
<br>
user who has rsh access to the nodes, all other users must go through torque 
<br>
and launch mpi apps using torque's TM subsystem. That's where my problem 
<br>
starts: I was not successful in launching apps through TM. TM pls is 
<br>
configured okay, I can see it making connections to torque mom in mom's 
<br>
logfile; however, the app never gets run. Even if I only request one 
<br>
processor, mpiexec spawns several orted in a row. Here is my session log 
<br>
(where I kill mpiexec  using CTRL-C cause it would otherwise run forever):
<br>
<p>schaffoe_at_node16:~/tmp/mpitest&gt; mpiexec -np 1 --mca pls_tm_debug 1 --mca pls tm 
<br>
`pwd`/openmpitest
<br>
[node16:03113] pls:tm: final top-level argv:
<br>
[node16:03113] pls:tm:     orted --no-daemonize --bootproxy 1 --name  
<br>
--num_procs 2 --vpid_start 0 --nodename  --universe 
<br>
schaffoe_at_node16:default-universe-3113 --nsreplica 
<br>
&quot;0.0.0;tcp://192.168.1.16:60601&quot; --gprreplica 
<br>
&quot;0.0.0;tcp://192.168.1.16:60601&quot;
<br>
[node16:03113] pls:tm: launching on node node16
<br>
[node16:03113] pls:tm: found /opt/openmpi/bin/orted
<br>
[node16:03113] pls:tm: not oversubscribed -- setting mpi_yield_when_idle to 0
<br>
[node16:03113] pls:tm: executing: orted --no-daemonize --bootproxy 1 --name 
<br>
0.0.1 --num_procs 2 --vpid_start 0 --nodename node16 --universe 
<br>
schaffoe_at_node16:default-universe-3113 --nsreplica 
<br>
&quot;0.0.0;tcp://192.168.1.16:60601&quot; --gprreplica 
<br>
&quot;0.0.0;tcp://192.168.1.16:60601&quot;
<br>
[node16:03113] pls:tm: final top-level argv:
<br>
[node16:03113] pls:tm:     orted --no-daemonize --bootproxy 1 --name  
<br>
--num_procs 3 --vpid_start 0 --nodename  --universe 
<br>
schaffoe_at_node16:default-universe-3113 --nsreplica 
<br>
&quot;0.0.0;tcp://192.168.1.16:60601&quot; --gprreplica 
<br>
&quot;0.0.0;tcp://192.168.1.16:60601&quot;
<br>
[node16:03113] pls:tm: launching on node node16
<br>
[node16:03113] pls:tm: not oversubscribed -- setting mpi_yield_when_idle to 0
<br>
[node16:03113] pls:tm: executing: orted --no-daemonize --bootproxy 1 --name 
<br>
0.0.2 --num_procs 3 --vpid_start 0 --nodename node16 --universe 
<br>
schaffoe_at_node16:default-universe-3113 --nsreplica 
<br>
&quot;0.0.0;tcp://192.168.1.16:60601&quot; --gprreplica 
<br>
&quot;0.0.0;tcp://192.168.1.16:60601&quot;
<br>
[node16:03113] pls:tm: final top-level argv:
<br>
[node16:03113] pls:tm:     orted --no-daemonize --bootproxy 1 --name  
<br>
--num_procs 4 --vpid_start 0 --nodename  --universe 
<br>
schaffoe_at_node16:default-universe-3113 --nsreplica 
<br>
&quot;0.0.0;tcp://192.168.1.16:60601&quot; --gprreplica 
<br>
&quot;0.0.0;tcp://192.168.1.16:60601&quot;
<br>
[node16:03113] pls:tm: launching on node node16
<br>
[node16:03113] pls:tm: not oversubscribed -- setting mpi_yield_when_idle to 0
<br>
[node16:03113] pls:tm: executing: orted --no-daemonize --bootproxy 1 --name 
<br>
0.0.3 --num_procs 4 --vpid_start 0 --nodename node16 --universe 
<br>
schaffoe_at_node16:default-universe-3113 --nsreplica 
<br>
&quot;0.0.0;tcp://192.168.1.16:60601&quot; --gprreplica 
<br>
&quot;0.0.0;tcp://192.168.1.16:60601&quot;
<br>
mpiexec: killing job...
<br>
[node16:03113] pls:tm: final top-level argv:
<br>
[node16:03113] pls:tm:     orted --no-daemonize --bootproxy 1 --name  
<br>
--num_procs 5 --vpid_start 0 --nodename  --universe 
<br>
schaffoe_at_node16:default-universe-3113 --nsreplica 
<br>
&quot;0.0.0;tcp://192.168.1.16:60601&quot; --gprreplica 
<br>
&quot;0.0.0;tcp://192.168.1.16:60601&quot;
<br>
[node16:03113] pls:tm: launching on node node16
<br>
[node16:03113] pls:tm: not oversubscribed -- setting mpi_yield_when_idle to 0
<br>
[node16:03113] pls:tm: executing: orted --no-daemonize --bootproxy 1 --name 
<br>
0.0.4 --num_procs 5 --vpid_start 0 --nodename node16 --universe 
<br>
schaffoe_at_node16:default-universe-3113 --nsreplica 
<br>
&quot;0.0.0;tcp://192.168.1.16:60601&quot; --gprreplica 
<br>
&quot;0.0.0;tcp://192.168.1.16:60601&quot;
<br>
[node16:03113] pls:tm: final top-level argv:
<br>
[node16:03113] pls:tm:     orted --no-daemonize --bootproxy 1 --name  
<br>
--num_procs 6 --vpid_start 0 --nodename  --universe 
<br>
schaffoe_at_node16:default-universe-3113 --nsreplica 
<br>
&quot;0.0.0;tcp://192.168.1.16:60601&quot; --gprreplica 
<br>
&quot;0.0.0;tcp://192.168.1.16:60601&quot;
<br>
[node16:03113] pls:tm: launching on node node16
<br>
[node16:03113] pls:tm: not oversubscribed -- setting mpi_yield_when_idle to 0
<br>
[node16:03113] pls:tm: executing: orted --no-daemonize --bootproxy 1 --name 
<br>
0.0.5 --num_procs 6 --vpid_start 0 --nodename node16 --universe 
<br>
schaffoe_at_node16:default-universe-3113 --nsreplica 
<br>
&quot;0.0.0;tcp://192.168.1.16:60601&quot; --gprreplica 
<br>
&quot;0.0.0;tcp://192.168.1.16:60601&quot;
<br>
--------------------------------------------------------------------------
<br>
WARNING: mpiexec encountered an abnormal exit.
<br>
<p>This means that mpiexec exited before it received notification that all
<br>
started processes had terminated.  You should double check and ensure
<br>
that there are no runaway processes still executing.
<br>
--------------------------------------------------------------------------
<br>
<p><p>I read in the README that TM pls is working, whereas in the latex usersguide 
<br>
it says that only rsh and bproc are supported. I am confused...
<br>
<p>Can anybody shed a better light on this?
<br>
<p>Regards,
<br>
<pre>
-- 
Martin Schaff&#195;&#182;ner
Cognitive Systems Group, Institute of Electronics, Signal Processing and 
Communication Technologies, Department of Electrical Engineering, 
Otto-von-Guericke University Magdeburg
Phone: +49 391 6720063
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1421.php">Brock Palen: "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps through TM interface"</a>
<li><strong>Previous message:</strong> <a href="1419.php">Brian Barrett: "Re: [OMPI users] Trouble with open MPI and Slurm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1421.php">Brock Palen: "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps through TM interface"</a>
<li><strong>Reply:</strong> <a href="1421.php">Brock Palen: "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps through TM interface"</a>
<li><strong>Reply:</strong> <a href="1422.php">Brock Palen: "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps through TM interface"</a>
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
