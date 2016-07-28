<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan  8 14:53:03 2007" -->
<!-- isoreceived="20070108195303" -->
<!-- sent="Mon, 8 Jan 2007 13:52:42 -0600" -->
<!-- isosent="20070108195242" -->
<!-- name="Grobe, Gary L. \(JSC-EV\)[ESCG]" -->
<!-- email="gary.l.grobe_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Ompi failing on mx only" -->
<!-- id="559847D38F12F742B0EE27727596F42901AB8D34_at_NDJSEVS14.ndc.nasa.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0B3D6095-A116-4D41-8B98-901FE8D3D174_at_cs.utk.edu" -->
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
<strong>From:</strong> Grobe, Gary L. \(JSC-EV\)[ESCG] (<em>gary.l.grobe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-08 14:52:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2440.php">Jeff Squyres: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Previous message:</strong> <a href="2438.php">Rainer Keller: "Re: [OMPI users] external32 i/o not implemented?"</a>
<li><strong>In reply to:</strong> <a href="2434.php">George Bosilca: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2440.php">Jeff Squyres: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Reply:</strong> <a href="2440.php">Jeff Squyres: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was wondering if someone could send me the HACKING file so I can do a
<br>
bit more with debugging on the snapshots. Our web proxy has webdav
<br>
methods turned off (request methods fail) so that I can't get to the
<br>
latest of the svn repos.
<br>
<p><span class="quotelev1">&gt; Second thing. From one of your previous emails, I see that MX 
</span><br>
<span class="quotelev1">&gt; is configured with 4 instance by node. Your running with 
</span><br>
<span class="quotelev1">&gt; exactly 4 processes on the first 2 nodes. Weirds things might 
</span><br>
<span class="quotelev1">&gt; happens ...
</span><br>
<p>Just curious about this comment. Are you referring to over subscribing?
<br>
We run 4 processes on each node because we have 2 dual core cpu's on
<br>
each node. Am I not understanding processor counts correctly?
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; PS: Is there any way you can attach to the processes with gdb 
</span><br>
<span class="quotelev1">&gt; ? I would like to see the backtrace as showed by gdb in order 
</span><br>
<span class="quotelev1">&gt; to be able to figure out what's wrong there.
</span><br>
<p>When I can get more detailed dbg, I'll send. Though I'm not clear on
<br>
what executable is being searched for below.
<br>
<p>$ mpirun -dbg=gdb --prefix /usr/local/openmpi-1.2b3r13030 -x
<br>
LD_LIBRARY_PATH=${LD_LIBRARY_PATH} --hostfile ./h1-3 -np 5 --mca pml cm
<br>
--mca mtl mx ./cpi
<br>
<p>[juggernaut:14949] connect_uni: connection not allowed
<br>
[juggernaut:14949] connect_uni: connection not allowed
<br>
[juggernaut:14949] connect_uni: connection not allowed
<br>
[juggernaut:14949] connect_uni: connection not allowed
<br>
[juggernaut:14949] connect_uni: connection not allowed
<br>
[juggernaut:14949] connect_uni: connection not allowed
<br>
[juggernaut:14949] connect_uni: connection not allowed
<br>
[juggernaut:14949] connect_uni: connection not allowed
<br>
[juggernaut:14949] connect_uni: connection not allowed
<br>
[juggernaut:14949] [0,0,0] setting up session dir with
<br>
[juggernaut:14949]  universe default-universe-14949
<br>
[juggernaut:14949]  user ggrobe
<br>
[juggernaut:14949]  host juggernaut
<br>
[juggernaut:14949]  jobid 0
<br>
[juggernaut:14949]  procid 0
<br>
[juggernaut:14949] procdir:
<br>
/tmp/openmpi-sessions-ggrobe_at_juggernaut_0/default-universe-14949/0/0
<br>
[juggernaut:14949] jobdir:
<br>
/tmp/openmpi-sessions-ggrobe_at_juggernaut_0/default-universe-14949/0
<br>
[juggernaut:14949] unidir:
<br>
/tmp/openmpi-sessions-ggrobe_at_juggernaut_0/default-universe-14949
<br>
[juggernaut:14949] top: openmpi-sessions-ggrobe_at_juggernaut_0
<br>
[juggernaut:14949] tmp: /tmp
<br>
[juggernaut:14949] [0,0,0] contact_file
<br>
/tmp/openmpi-sessions-ggrobe_at_juggernaut_0/default-universe-14949/univers
<br>
e-setup.txt
<br>
[juggernaut:14949] [0,0,0] wrote setup file
<br>
[juggernaut:14949] pls:rsh: local csh: 0, local sh: 1
<br>
[juggernaut:14949] pls:rsh: assuming same remote shell as local shell
<br>
[juggernaut:14949] pls:rsh: remote csh: 0, remote sh: 1
<br>
[juggernaut:14949] pls:rsh: final template argv:
<br>
[juggernaut:14949] pls:rsh:     /usr/bin/ssh &lt;template&gt; orted --debug
<br>
--bootproxy 1 --name &lt;template&gt; --num_procs 2 --vpid_start 0 --nodename
<br>
&lt;template&gt; --universe ggrobe_at_juggernaut:default-universe-14949
<br>
--nsreplica &quot;0.0.0;tcp://192.168.2.10:43121&quot; --gprreplica
<br>
&quot;0.0.0;tcp://192.168.2.10:43121&quot;
<br>
[juggernaut:14949] pls:rsh: launching on node juggernaut
<br>
[juggernaut:14949] pls:rsh: juggernaut is a LOCAL node
<br>
[juggernaut:14949] pls:rsh: changing to directory /home/ggrobe
<br>
[juggernaut:14949] pls:rsh: executing: orted --debug --bootproxy 1
<br>
--name 0.0.1 --num_procs 2 --vpid_start 0 --nodename juggernaut
<br>
--universe ggrobe_at_juggernaut:default-universe-14949 --nsreplica
<br>
&quot;0.0.0;tcp://192.168.2.10:43121&quot; --gprreplica
<br>
&quot;0.0.0;tcp://192.168.2.10:43121&quot;
<br>
[juggernaut:14950] [0,0,1] setting up session dir with
<br>
[juggernaut:14950]  universe default-universe-14949
<br>
[juggernaut:14950]  user ggrobe
<br>
[juggernaut:14950]  host juggernaut
<br>
[juggernaut:14950]  jobid 0
<br>
[juggernaut:14950]  procid 1
<br>
[juggernaut:14950] procdir:
<br>
/tmp/openmpi-sessions-ggrobe_at_juggernaut_0/default-universe-14949/0/1
<br>
[juggernaut:14950] jobdir:
<br>
/tmp/openmpi-sessions-ggrobe_at_juggernaut_0/default-universe-14949/0
<br>
[juggernaut:14950] unidir:
<br>
/tmp/openmpi-sessions-ggrobe_at_juggernaut_0/default-universe-14949
<br>
[juggernaut:14950] top: openmpi-sessions-ggrobe_at_juggernaut_0
<br>
[juggernaut:14950] tmp: /tmp
<br>
------------------------------------------------------------------------
<br>
<pre>
--
Failed to find the following executable:
Host:       juggernaut
Executable: -b
Cannot continue.
------------------------------------------------------------------------
--
[juggernaut:14950] [0,0,1] ORTE_ERROR_LOG: Fatal in file
odls_default_module.c at line 1193
[juggernaut:14949] spawn: in job_state_callback(jobid = 1, state = 0x80)
[juggernaut:14950] [0,0,1] ORTE_ERROR_LOG: Fatal in file orted.c at line
575
[juggernaut:14950] sess_dir_finalize: job session dir not empty -
leaving
[juggernaut:14950] sess_dir_finalize: proc session dir not empty -
leaving
[juggernaut:14949] sess_dir_finalize: proc session dir not empty -
leaving
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2440.php">Jeff Squyres: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Previous message:</strong> <a href="2438.php">Rainer Keller: "Re: [OMPI users] external32 i/o not implemented?"</a>
<li><strong>In reply to:</strong> <a href="2434.php">George Bosilca: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2440.php">Jeff Squyres: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Reply:</strong> <a href="2440.php">Jeff Squyres: "Re: [OMPI users] Ompi failing on mx only"</a>
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
