<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 16 09:49:47 2006" -->
<!-- isoreceived="20060616134947" -->
<!-- sent="Fri, 16 Jun 2006 15:49:39 +0200" -->
<!-- isosent="20060616134939" -->
<!-- name="Martin Schaff&#246;ner" -->
<!-- email="martin.schaffoener_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps throughTM interface" -->
<!-- id="200606161549.39891.martin.schaffoener_at_e-technik.uni-magdeburg.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AFA4338F_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> Martin Schaff&#246;ner (<em>martin.schaffoener_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-16 09:49:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1432.php">Eric Thibodeau: "[OMPI users] pls:rsh: execv failed with errno=2"</a>
<li><strong>Previous message:</strong> <a href="1430.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps throughTM interface"</a>
<li><strong>In reply to:</strong> <a href="1430.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps throughTM interface"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Friday 16 June 2006 15:00, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Try two things:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Use the pbsdsh command to try to launch a trivial non-MPI application
</span><br>
<span class="quotelev1">&gt; (e.g., hostname):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (inside a PBS job)
</span><br>
<span class="quotelev1">&gt; pbsdsh -&lt;N&gt; -v hostname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where &lt;N&gt; is the number of vcpu's in your job.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. If that works, try mpirun'ing a trivial non-MPI application (e.g.,
</span><br>
<span class="quotelev1">&gt; hostname):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (inside a PBS job)
</span><br>
<span class="quotelev1">&gt; mpirun -np &lt;N&gt; -d --mca pls_tm_debug 1 hostname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If #1 fails, then there is something wrong with your Torque installation
</span><br>
<span class="quotelev1">&gt; (pbsdsh uses the same PBS API that Open MPI does), and Open MPI's failure
</span><br>
<span class="quotelev1">&gt; is a symptom of the underlying problem.  If #1 succeeds and #2 fails, send
</span><br>
<span class="quotelev1">&gt; back the details and let's go from there.
</span><br>
<p>So, #1 works (I know because we're constantly using pbsdsh and OSC's mpiexec 
<br>
for mpich-type implementations). #2 doesn't work; I'll repeat the session log 
<br>
from my first post, this time (hopefully!!!) with linebreaks (could it be 
<br>
that the mailing list has problems with utf8 posts?):
<br>
<p>schaffoe_at_node16:~/tmp/mpitest&gt; mpiexec -np 1 --mca pls_tm_debug 1 --mca pls tm 
<br>
`pwd`/openmpitest
<br>
[node16:03113] pls:tm: final top-level argv:
<br>
[node16:03113] pls:tm: &#160; &#160; orted --no-daemonize --bootproxy 1 --name &#160;
<br>
--num_procs 2 --vpid_start 0 --nodename &#160;--universe 
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
[node16:03113] pls:tm: &#160; &#160; orted --no-daemonize --bootproxy 1 --name &#160;
<br>
--num_procs 3 --vpid_start 0 --nodename &#160;--universe 
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
[node16:03113] pls:tm: &#160; &#160; orted --no-daemonize --bootproxy 1 --name &#160;
<br>
--num_procs 4 --vpid_start 0 --nodename &#160;--universe 
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
[node16:03113] pls:tm: &#160; &#160; orted --no-daemonize --bootproxy 1 --name &#160;
<br>
--num_procs 5 --vpid_start 0 --nodename &#160;--universe 
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
[node16:03113] pls:tm: &#160; &#160; orted --no-daemonize --bootproxy 1 --name &#160;
<br>
--num_procs 6 --vpid_start 0 --nodename &#160;--universe 
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
started processes had terminated. &#160;You should double check and ensure
<br>
that there are no runaway processes still executing.
<br>
--------------------------------------------------------------------------
<br>
<p>CU,
<br>
<pre>
-- 
Martin Schaff&#246;ner
Cognitive Systems Group, Institute of Electronics, Signal Processing and 
Communication Technologies, Department of Electrical Engineering, 
Otto-von-Guericke University Magdeburg
Phone: +49 391 6720063
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1432.php">Eric Thibodeau: "[OMPI users] pls:rsh: execv failed with errno=2"</a>
<li><strong>Previous message:</strong> <a href="1430.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps throughTM interface"</a>
<li><strong>In reply to:</strong> <a href="1430.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps throughTM interface"</a>
<!-- nextthread="start" -->
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
