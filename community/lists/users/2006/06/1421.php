<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 15 10:06:39 2006" -->
<!-- isoreceived="20060615140639" -->
<!-- sent="Thu, 15 Jun 2006 10:05:19 -0400" -->
<!-- isosent="20060615140519" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps through TM interface" -->
<!-- id="690642A4-6DB1-4C3A-B3AF-843AF5C5FAA0_at_umich.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200606151542.42535.martin.schaffoener_at_e-technik.uni-magdeburg.de" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-15 10:05:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1422.php">Brock Palen: "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps through TM interface"</a>
<li><strong>Previous message:</strong> <a href="1420.php">Martin Schaff&#195;&#182;ner: "[OMPI users] Openmpi 1.0.3svn10374 not launching apps through TM interface"</a>
<li><strong>In reply to:</strong> <a href="1420.php">Martin Schaff&#195;&#182;ner: "[OMPI users] Openmpi 1.0.3svn10374 not launching apps through TM interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1424.php">Martin Schafföner: "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps through TM interface"</a>
<li><strong>Reply:</strong> <a href="1424.php">Martin Schafföner: "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps through TM interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I dont know about ompi-1.0.3 snapshots,  but we use ompi-1.0.2 with  
<br>
both torque-2.0.0p8 and torque-2.1.0p0 using the tm interface without  
<br>
any problems.
<br>
Are you using PBSPro?  OpenPBS?
<br>
As for you mpiexec  is that the one included with OpenMPI  (just a  
<br>
symlink to orterun)  or the one from
<br>
<a href="http://www.osc.edu/~pw/mpiexec/index.php">http://www.osc.edu/~pw/mpiexec/index.php</a>
<br>
<p>Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p>On Jun 15, 2006, at 9:42 AM, Martin Schaff&#246;ner wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have been trying to set up OpenMPI 1.0.3a1r10374 on our cluster  
</span><br>
<span class="quotelev1">&gt; and was
</span><br>
<span class="quotelev1">&gt; partly successful. Partly, because installation worked, compiling a  
</span><br>
<span class="quotelev1">&gt; simple
</span><br>
<span class="quotelev1">&gt; example and running it through the rsh pls also worked. However,  
</span><br>
<span class="quotelev1">&gt; I'm the only
</span><br>
<span class="quotelev1">&gt; user who has rsh access to the nodes, all other users must go  
</span><br>
<span class="quotelev1">&gt; through torque
</span><br>
<span class="quotelev1">&gt; and launch mpi apps using torque's TM subsystem. That's where my  
</span><br>
<span class="quotelev1">&gt; problem
</span><br>
<span class="quotelev1">&gt; starts: I was not successful in launching apps through TM. TM pls is
</span><br>
<span class="quotelev1">&gt; configured okay, I can see it making connections to torque mom in  
</span><br>
<span class="quotelev1">&gt; mom's
</span><br>
<span class="quotelev1">&gt; logfile; however, the app never gets run. Even if I only request one
</span><br>
<span class="quotelev1">&gt; processor, mpiexec spawns several orted in a row. Here is my  
</span><br>
<span class="quotelev1">&gt; session log
</span><br>
<span class="quotelev1">&gt; (where I kill mpiexec  using CTRL-C cause it would otherwise run  
</span><br>
<span class="quotelev1">&gt; forever):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; schaffoe_at_node16:~/tmp/mpitest&gt; mpiexec -np 1 --mca pls_tm_debug 1 -- 
</span><br>
<span class="quotelev1">&gt; mca pls tm
</span><br>
<span class="quotelev1">&gt; `pwd`/openmpitest
</span><br>
<span class="quotelev1">&gt; [node16:03113] pls:tm: final top-level argv:
</span><br>
<span class="quotelev1">&gt; [node16:03113] pls:tm:     orted --no-daemonize --bootproxy 1 --name
</span><br>
<span class="quotelev1">&gt; --num_procs 2 --vpid_start 0 --nodename  --universe
</span><br>
<span class="quotelev1">&gt; schaffoe_at_node16:default-universe-3113 --nsreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.1.16:60601&quot; --gprreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.1.16:60601&quot;
</span><br>
<span class="quotelev1">&gt; [node16:03113] pls:tm: launching on node node16
</span><br>
<span class="quotelev1">&gt; [node16:03113] pls:tm: found /opt/openmpi/bin/orted
</span><br>
<span class="quotelev1">&gt; [node16:03113] pls:tm: not oversubscribed -- setting  
</span><br>
<span class="quotelev1">&gt; mpi_yield_when_idle to 0
</span><br>
<span class="quotelev1">&gt; [node16:03113] pls:tm: executing: orted --no-daemonize --bootproxy  
</span><br>
<span class="quotelev1">&gt; 1 --name
</span><br>
<span class="quotelev1">&gt; 0.0.1 --num_procs 2 --vpid_start 0 --nodename node16 --universe
</span><br>
<span class="quotelev1">&gt; schaffoe_at_node16:default-universe-3113 --nsreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.1.16:60601&quot; --gprreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.1.16:60601&quot;
</span><br>
<span class="quotelev1">&gt; [node16:03113] pls:tm: final top-level argv:
</span><br>
<span class="quotelev1">&gt; [node16:03113] pls:tm:     orted --no-daemonize --bootproxy 1 --name
</span><br>
<span class="quotelev1">&gt; --num_procs 3 --vpid_start 0 --nodename  --universe
</span><br>
<span class="quotelev1">&gt; schaffoe_at_node16:default-universe-3113 --nsreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.1.16:60601&quot; --gprreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.1.16:60601&quot;
</span><br>
<span class="quotelev1">&gt; [node16:03113] pls:tm: launching on node node16
</span><br>
<span class="quotelev1">&gt; [node16:03113] pls:tm: not oversubscribed -- setting  
</span><br>
<span class="quotelev1">&gt; mpi_yield_when_idle to 0
</span><br>
<span class="quotelev1">&gt; [node16:03113] pls:tm: executing: orted --no-daemonize --bootproxy  
</span><br>
<span class="quotelev1">&gt; 1 --name
</span><br>
<span class="quotelev1">&gt; 0.0.2 --num_procs 3 --vpid_start 0 --nodename node16 --universe
</span><br>
<span class="quotelev1">&gt; schaffoe_at_node16:default-universe-3113 --nsreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.1.16:60601&quot; --gprreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.1.16:60601&quot;
</span><br>
<span class="quotelev1">&gt; [node16:03113] pls:tm: final top-level argv:
</span><br>
<span class="quotelev1">&gt; [node16:03113] pls:tm:     orted --no-daemonize --bootproxy 1 --name
</span><br>
<span class="quotelev1">&gt; --num_procs 4 --vpid_start 0 --nodename  --universe
</span><br>
<span class="quotelev1">&gt; schaffoe_at_node16:default-universe-3113 --nsreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.1.16:60601&quot; --gprreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.1.16:60601&quot;
</span><br>
<span class="quotelev1">&gt; [node16:03113] pls:tm: launching on node node16
</span><br>
<span class="quotelev1">&gt; [node16:03113] pls:tm: not oversubscribed -- setting  
</span><br>
<span class="quotelev1">&gt; mpi_yield_when_idle to 0
</span><br>
<span class="quotelev1">&gt; [node16:03113] pls:tm: executing: orted --no-daemonize --bootproxy  
</span><br>
<span class="quotelev1">&gt; 1 --name
</span><br>
<span class="quotelev1">&gt; 0.0.3 --num_procs 4 --vpid_start 0 --nodename node16 --universe
</span><br>
<span class="quotelev1">&gt; schaffoe_at_node16:default-universe-3113 --nsreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.1.16:60601&quot; --gprreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.1.16:60601&quot;
</span><br>
<span class="quotelev1">&gt; mpiexec: killing job...
</span><br>
<span class="quotelev1">&gt; [node16:03113] pls:tm: final top-level argv:
</span><br>
<span class="quotelev1">&gt; [node16:03113] pls:tm:     orted --no-daemonize --bootproxy 1 --name
</span><br>
<span class="quotelev1">&gt; --num_procs 5 --vpid_start 0 --nodename  --universe
</span><br>
<span class="quotelev1">&gt; schaffoe_at_node16:default-universe-3113 --nsreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.1.16:60601&quot; --gprreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.1.16:60601&quot;
</span><br>
<span class="quotelev1">&gt; [node16:03113] pls:tm: launching on node node16
</span><br>
<span class="quotelev1">&gt; [node16:03113] pls:tm: not oversubscribed -- setting  
</span><br>
<span class="quotelev1">&gt; mpi_yield_when_idle to 0
</span><br>
<span class="quotelev1">&gt; [node16:03113] pls:tm: executing: orted --no-daemonize --bootproxy  
</span><br>
<span class="quotelev1">&gt; 1 --name
</span><br>
<span class="quotelev1">&gt; 0.0.4 --num_procs 5 --vpid_start 0 --nodename node16 --universe
</span><br>
<span class="quotelev1">&gt; schaffoe_at_node16:default-universe-3113 --nsreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.1.16:60601&quot; --gprreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.1.16:60601&quot;
</span><br>
<span class="quotelev1">&gt; [node16:03113] pls:tm: final top-level argv:
</span><br>
<span class="quotelev1">&gt; [node16:03113] pls:tm:     orted --no-daemonize --bootproxy 1 --name
</span><br>
<span class="quotelev1">&gt; --num_procs 6 --vpid_start 0 --nodename  --universe
</span><br>
<span class="quotelev1">&gt; schaffoe_at_node16:default-universe-3113 --nsreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.1.16:60601&quot; --gprreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.1.16:60601&quot;
</span><br>
<span class="quotelev1">&gt; [node16:03113] pls:tm: launching on node node16
</span><br>
<span class="quotelev1">&gt; [node16:03113] pls:tm: not oversubscribed -- setting  
</span><br>
<span class="quotelev1">&gt; mpi_yield_when_idle to 0
</span><br>
<span class="quotelev1">&gt; [node16:03113] pls:tm: executing: orted --no-daemonize --bootproxy  
</span><br>
<span class="quotelev1">&gt; 1 --name
</span><br>
<span class="quotelev1">&gt; 0.0.5 --num_procs 6 --vpid_start 0 --nodename node16 --universe
</span><br>
<span class="quotelev1">&gt; schaffoe_at_node16:default-universe-3113 --nsreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.1.16:60601&quot; --gprreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.1.16:60601&quot;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; WARNING: mpiexec encountered an abnormal exit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This means that mpiexec exited before it received notification that  
</span><br>
<span class="quotelev1">&gt; all
</span><br>
<span class="quotelev1">&gt; started processes had terminated.  You should double check and ensure
</span><br>
<span class="quotelev1">&gt; that there are no runaway processes still executing.
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I read in the README that TM pls is working, whereas in the latex  
</span><br>
<span class="quotelev1">&gt; usersguide
</span><br>
<span class="quotelev1">&gt; it says that only rsh and bproc are supported. I am confused...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anybody shed a better light on this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Martin Schaff&#246;ner
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cognitive Systems Group, Institute of Electronics, Signal  
</span><br>
<span class="quotelev1">&gt; Processing and
</span><br>
<span class="quotelev1">&gt; Communication Technologies, Department of Electrical Engineering,
</span><br>
<span class="quotelev1">&gt; Otto-von-Guericke University Magdeburg
</span><br>
<span class="quotelev1">&gt; Phone: +49 391 6720063
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
<li><strong>Next message:</strong> <a href="1422.php">Brock Palen: "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps through TM interface"</a>
<li><strong>Previous message:</strong> <a href="1420.php">Martin Schaff&#195;&#182;ner: "[OMPI users] Openmpi 1.0.3svn10374 not launching apps through TM interface"</a>
<li><strong>In reply to:</strong> <a href="1420.php">Martin Schaff&#195;&#182;ner: "[OMPI users] Openmpi 1.0.3svn10374 not launching apps through TM interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1424.php">Martin Schafföner: "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps through TM interface"</a>
<li><strong>Reply:</strong> <a href="1424.php">Martin Schafföner: "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps through TM interface"</a>
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
