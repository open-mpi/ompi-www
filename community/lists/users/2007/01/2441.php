<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan  8 15:46:24 2007" -->
<!-- isoreceived="20070108204624" -->
<!-- sent="Mon, 8 Jan 2007 14:46:09 -0600" -->
<!-- isosent="20070108204609" -->
<!-- name="Grobe, Gary L. \(JSC-EV\)[ESCG]" -->
<!-- email="gary.l.grobe_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Ompi failing on mx only" -->
<!-- id="559847D38F12F742B0EE27727596F42901AB8D9F_at_NDJSEVS14.ndc.nasa.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="06FEC5A0-A74B-4DDF-8531-8489187CAEAC_at_cisco.com" -->
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
<strong>Date:</strong> 2007-01-08 15:46:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2442.php">Adrian Knoth: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Previous message:</strong> <a href="2440.php">Jeff Squyres: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>In reply to:</strong> <a href="2440.php">Jeff Squyres: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2442.php">Adrian Knoth: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev3">&gt; &gt;&gt; PS: Is there any way you can attach to the processes with gdb ? I 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; would like to see the backtrace as showed by gdb in order 
</span><br>
<span class="quotelev1">&gt; to be able 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to figure out what's wrong there.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When I can get more detailed dbg, I'll send. Though I'm not 
</span><br>
<span class="quotelev1">&gt; clear on 
</span><br>
<span class="quotelev2">&gt; &gt; what executable is being searched for below.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ mpirun -dbg=gdb --prefix /usr/local/openmpi-1.2b3r13030 -x 
</span><br>
<span class="quotelev2">&gt; &gt; LD_LIBRARY_PATH=${LD_LIBRARY_PATH} --hostfile ./h1-3 -np 5 
</span><br>
<span class="quotelev1">&gt; --mca pml 
</span><br>
<span class="quotelev2">&gt; &gt; cm --mca mtl mx ./cpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW, note that &quot;-dbg&quot; is not a recognized Open MPI mpirun 
</span><br>
<span class="quotelev1">&gt; command line switch -- after all the debugging information, 
</span><br>
<span class="quotelev1">&gt; Open MPI finally gets to telling you:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Sorry, wrong mpi, ok ... Fwiw, here's a working crash w/ just the -d
<br>
option. The problem I'm trying to get to right now is how to dbg the 2nd
<br>
process on the 2nd node since that's where the crash is always
<br>
happening. One process past the 1st node works find (5 procs w/ 4 per
<br>
node), but when a second process on the 2nd node starts or anything more
<br>
than that, the crashes will occur.
<br>
<p>$ mpirun -d --prefix /usr/local/openmpi-1.2b3r13030 -x
<br>
LD_LIBRARY_PATH=${LD_LIBRARY_PATH} --hostfile ./h1-3 -np 6 --mca pml cm
<br>
--mca mtl mx ./cpi &gt; dbg.out 2&gt;&amp;1
<br>
<p>[juggernaut:15087] connect_uni: connection not allowed
<br>
[juggernaut:15087] connect_uni: connection not allowed
<br>
[juggernaut:15087] connect_uni: connection not allowed
<br>
[juggernaut:15087] connect_uni: connection not allowed
<br>
[juggernaut:15087] connect_uni: connection not allowed
<br>
[juggernaut:15087] connect_uni: connection not allowed
<br>
[juggernaut:15087] connect_uni: connection not allowed
<br>
[juggernaut:15087] connect_uni: connection not allowed
<br>
[juggernaut:15087] connect_uni: connection not allowed
<br>
[juggernaut:15087] [0,0,0] setting up session dir with
<br>
[juggernaut:15087]  universe default-universe-15087
<br>
[juggernaut:15087]  user ggrobe
<br>
[juggernaut:15087]  host juggernaut
<br>
[juggernaut:15087]  jobid 0
<br>
[juggernaut:15087]  procid 0
<br>
[juggernaut:15087] procdir:
<br>
/tmp/openmpi-sessions-ggrobe_at_juggernaut_0/default-universe-15087/0/0
<br>
[juggernaut:15087] jobdir:
<br>
/tmp/openmpi-sessions-ggrobe_at_juggernaut_0/default-universe-15087/0
<br>
[juggernaut:15087] unidir:
<br>
/tmp/openmpi-sessions-ggrobe_at_juggernaut_0/default-universe-15087
<br>
[juggernaut:15087] top: openmpi-sessions-ggrobe_at_juggernaut_0
<br>
[juggernaut:15087] tmp: /tmp
<br>
[juggernaut:15087] [0,0,0] contact_file
<br>
/tmp/openmpi-sessions-ggrobe_at_juggernaut_0/default-universe-15087/univers
<br>
e-setup.txt
<br>
[juggernaut:15087] [0,0,0] wrote setup file
<br>
[juggernaut:15087] pls:rsh: local csh: 0, local sh: 1
<br>
[juggernaut:15087] pls:rsh: assuming same remote shell as local shell
<br>
[juggernaut:15087] pls:rsh: remote csh: 0, remote sh: 1
<br>
[juggernaut:15087] pls:rsh: final template argv:
<br>
[juggernaut:15087] pls:rsh:     /usr/bin/ssh &lt;template&gt; orted --debug
<br>
--bootproxy 1 --name &lt;template&gt; --num_procs 3 --vpid_start 0 --nodename
<br>
&lt;template&gt; --universe ggrobe_at_juggernaut:default-universe-15087
<br>
--nsreplica &quot;0.0.0;tcp://192.168.2.10:52099&quot; --gprreplica
<br>
&quot;0.0.0;tcp://192.168.2.10:52099&quot;
<br>
[juggernaut:15087] pls:rsh: launching on node node-1
<br>
[juggernaut:15087] pls:rsh: node-1 is a REMOTE node
<br>
[juggernaut:15087] pls:rsh: executing: /usr/bin/ssh node-1
<br>
PATH=/usr/local/openmpi-1.2b3r13030/bin:$PATH ; export PATH ;
<br>
LD_LIBRARY_PATH=/usr/local/openmpi-1.2b3r13030/lib:$LD_LIBRARY_PATH ;
<br>
export LD_LIBRARY_PATH ; /usr/local/openmpi-1.2b3r13030/bin/orted
<br>
--debug --bootproxy 1 --name 0.0.1 --num_procs 3 --vpid_start 0
<br>
--nodename node-1 --universe ggrobe_at_juggernaut:default-universe-15087
<br>
--nsreplica &quot;0.0.0;tcp://192.168.2.10:52099&quot; --gprreplica
<br>
&quot;0.0.0;tcp://192.168.2.10:52099&quot;
<br>
[juggernaut:15087] pls:rsh: launching on node node-2
<br>
[juggernaut:15087] pls:rsh: node-2 is a REMOTE node
<br>
[juggernaut:15087] pls:rsh: executing: /usr/bin/ssh node-2
<br>
PATH=/usr/local/openmpi-1.2b3r13030/bin:$PATH ; export PATH ;
<br>
LD_LIBRARY_PATH=/usr/local/openmpi-1.2b3r13030/lib:$LD_LIBRARY_PATH ;
<br>
export LD_LIBRARY_PATH ; /usr/local/openmpi-1.2b3r13030/bin/orted
<br>
--debug --bootproxy 1 --name 0.0.2 --num_procs 3 --vpid_start 0
<br>
--nodename node-2 --universe ggrobe_at_juggernaut:default-universe-15087
<br>
--nsreplica &quot;0.0.0;tcp://192.168.2.10:52099&quot; --gprreplica
<br>
&quot;0.0.0;tcp://192.168.2.10:52099&quot;
<br>
[node-2:11499] [0,0,2] setting up session dir with
<br>
[node-2:11499]  universe default-universe-15087
<br>
[node-2:11499]  user ggrobe
<br>
[node-2:11499]  host node-2
<br>
[node-2:11499]  jobid 0
<br>
[node-2:11499]  procid 2
<br>
[node-1:10307] procdir:
<br>
/tmp/openmpi-sessions-ggrobe_at_node-1_0/default-universe-15087/0/1
<br>
[node-1:10307] jobdir:
<br>
/tmp/openmpi-sessions-ggrobe_at_node-1_0/default-universe-15087/0
<br>
[node-1:10307] unidir:
<br>
/tmp/openmpi-sessions-ggrobe_at_node-1_0/default-universe-15087
<br>
[node-1:10307] top: openmpi-sessions-ggrobe_at_node-1_0
<br>
[node-2:11499] procdir:
<br>
/tmp/openmpi-sessions-ggrobe_at_node-2_0/default-universe-15087/0/2
<br>
[node-2:11499] jobdir:
<br>
/tmp/openmpi-sessions-ggrobe_at_node-2_0/default-universe-15087/0
<br>
[node-2:11499] unidir:
<br>
/tmp/openmpi-sessions-ggrobe_at_node-2_0/default-universe-15087
<br>
[node-2:11499] top: openmpi-sessions-ggrobe_at_node-2_0
<br>
[node-2:11499] tmp: /tmp
<br>
[node-1:10307] tmp: /tmp
<br>
[node-2:11500] [0,1,4] setting up session dir with
<br>
[node-2:11500]  universe default-universe-15087
<br>
[node-2:11500]  user ggrobe
<br>
[node-2:11500]  host node-2
<br>
[node-2:11500]  jobid 1
<br>
[node-2:11500]  procid 4
<br>
[node-2:11501] [0,1,5] setting up session dir with
<br>
[node-2:11501]  universe default-universe-15087
<br>
[node-2:11501]  user ggrobe
<br>
[node-2:11501]  host node-2
<br>
[node-2:11501]  jobid 1
<br>
[node-2:11501]  procid 5
<br>
[node-1:10308] [0,1,0] setting up session dir with
<br>
[node-1:10308]  universe default-universe-15087
<br>
[node-1:10308]  user ggrobe
<br>
[node-1:10308]  host node-1
<br>
[node-1:10308]  jobid 1
<br>
[node-1:10308]  procid 0
<br>
[node-2:11500] procdir:
<br>
/tmp/openmpi-sessions-ggrobe_at_node-2_0/default-universe-15087/1/4
<br>
[node-2:11500] jobdir:
<br>
/tmp/openmpi-sessions-ggrobe_at_node-2_0/default-universe-15087/1
<br>
[node-2:11500] unidir:
<br>
/tmp/openmpi-sessions-ggrobe_at_node-2_0/default-universe-15087
<br>
[node-2:11500] top: openmpi-sessions-ggrobe_at_node-2_0
<br>
[node-2:11500] tmp: /tmp
<br>
[node-2:11501] procdir:
<br>
/tmp/openmpi-sessions-ggrobe_at_node-2_0/default-universe-15087/1/5
<br>
[node-2:11501] jobdir:
<br>
/tmp/openmpi-sessions-ggrobe_at_node-2_0/default-universe-15087/1
<br>
[node-2:11501] unidir:
<br>
/tmp/openmpi-sessions-ggrobe_at_node-2_0/default-universe-15087
<br>
[node-2:11501] top: openmpi-sessions-ggrobe_at_node-2_0
<br>
[node-2:11501] tmp: /tmp
<br>
[node-1:10308] procdir:
<br>
/tmp/openmpi-sessions-ggrobe_at_node-1_0/default-universe-15087/1/0
<br>
[node-1:10308] jobdir:
<br>
/tmp/openmpi-sessions-ggrobe_at_node-1_0/default-universe-15087/1
<br>
[node-1:10308] unidir:
<br>
/tmp/openmpi-sessions-ggrobe_at_node-1_0/default-universe-15087
<br>
[node-1:10308] top: openmpi-sessions-ggrobe_at_node-1_0
<br>
[node-1:10308] tmp: /tmp
<br>
[node-1:10311] [0,1,3] setting up session dir with
<br>
[node-1:10311]  universe default-universe-15087
<br>
[node-1:10311]  user ggrobe
<br>
[node-1:10311]  host node-1
<br>
[node-1:10311]  jobid 1
<br>
[node-1:10311]  procid 3
<br>
[node-1:10310] [0,1,2] setting up session dir with
<br>
[node-1:10310]  universe default-universe-15087
<br>
[node-1:10310]  user ggrobe
<br>
[node-1:10310]  host node-1
<br>
[node-1:10310]  jobid 1
<br>
[node-1:10310]  procid 2
<br>
[node-1:10311] procdir:
<br>
/tmp/openmpi-sessions-ggrobe_at_node-1_0/default-universe-15087/1/3
<br>
[node-1:10311] jobdir:
<br>
/tmp/openmpi-sessions-ggrobe_at_node-1_0/default-universe-15087/1
<br>
[node-1:10311] unidir:
<br>
/tmp/openmpi-sessions-ggrobe_at_node-1_0/default-universe-15087
<br>
[node-1:10311] top: openmpi-sessions-ggrobe_at_node-1_0
<br>
[node-1:10311] tmp: /tmp
<br>
[node-1:10310] procdir:
<br>
/tmp/openmpi-sessions-ggrobe_at_node-1_0/default-universe-15087/1/2
<br>
[node-1:10310] jobdir:
<br>
/tmp/openmpi-sessions-ggrobe_at_node-1_0/default-universe-15087/1
<br>
[node-1:10310] unidir:
<br>
/tmp/openmpi-sessions-ggrobe_at_node-1_0/default-universe-15087
<br>
[node-1:10310] top: openmpi-sessions-ggrobe_at_node-1_0
<br>
[node-1:10310] tmp: /tmp
<br>
[node-1:10309] [0,1,1] setting up session dir with
<br>
[node-1:10309]  universe default-universe-15087
<br>
[node-1:10309]  user ggrobe
<br>
[node-1:10309]  host node-1
<br>
[node-1:10309]  jobid 1
<br>
[node-1:10309]  procid 1
<br>
[node-1:10309] procdir:
<br>
/tmp/openmpi-sessions-ggrobe_at_node-1_0/default-universe-15087/1/1
<br>
[node-1:10309] jobdir:
<br>
/tmp/openmpi-sessions-ggrobe_at_node-1_0/default-universe-15087/1
<br>
[node-1:10309] unidir:
<br>
/tmp/openmpi-sessions-ggrobe_at_node-1_0/default-universe-15087
<br>
[node-1:10309] top: openmpi-sessions-ggrobe_at_node-1_0
<br>
[node-1:10309] tmp: /tmp
<br>
Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:(nil)
<br>
Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:(nil)
<br>
[0]
<br>
func:/usr/local/openmpi-1.2b3r13030/lib/libopen-pal.so.0(opal_backtrace_
<br>
print+0x1f) [0x2b8b99905d3f]
<br>
[1] func:/usr/local/openmpi-1.2b3r13030/lib/libopen-pal.so.0
<br>
[0x2b8b99904891]
<br>
[2] func:/lib/libpthread.so.0 [0x2b8b99ec6d00]
<br>
[3] func:/opt/mx/lib/libmyriexpress.so(mx_open_endpoint+0x6df)
<br>
[0x2b8b9cb072af]
<br>
[4]
<br>
func:/usr/local/openmpi-1.2b3r13030/lib/openmpi/mca_mtl_mx.so(ompi_mtl_m
<br>
x_module_init+0x20) [0x2b8b9c9fcb50]
<br>
[5] func:/usr/local/openmpi-1.2b3r13030/lib/openmpi/mca_mtl_mx.so
<br>
[0x2b8b9c9fccb5]
<br>
[6]
<br>
func:/usr/local/openmpi-1.2b3r13030/lib/libmpi.so.0(ompi_mtl_base_select
<br>
+0x6f) [0x2b8b9966165f]
<br>
[7] func:/usr/local/openmpi-1.2b3r13030/lib/openmpi/mca_pml_cm.so
<br>
[0x2b8b9c6d1aa6]
<br>
[8]
<br>
func:/usr/local/openmpi-1.2b3r13030/lib/libmpi.so.0(mca_pml_base_select+
<br>
0x113) [0x2b8b99663ef3]
<br>
[9]
<br>
func:/usr/local/openmpi-1.2b3r13030/lib/libmpi.so.0(ompi_mpi_init+0x45e)
<br>
[0x2b8b9962c7de]
<br>
[10] func:/usr/local/openmpi-1.2b3r13030/lib/libmpi.so.0(MPI_Init+0x83)
<br>
[0x2b8b9964d903]
<br>
[11] func:./cpi(main+0x42) [0x400cd5]
<br>
[12] func:/lib/libc.so.6(__libc_start_main+0xf4) [0x2b8b99fed134]
<br>
[13] func:./cpi [0x400bd9]
<br>
*** End of error message ***
<br>
^@[0]
<br>
func:/usr/local/openmpi-1.2b3r13030/lib/libopen-pal.so.0(opal_backtrace_
<br>
print+0x1f) [0x2b548c138d3f]
<br>
[1] func:/usr/local/openmpi-1.2b3r13030/lib/libopen-pal.so.0
<br>
[0x2b548c137891]
<br>
[2] func:/lib/libpthread.so.0 [0x2b548c6f9d00]
<br>
[3] func:/opt/mx/lib/libmyriexpress.so(mx_open_endpoint+0x6df)
<br>
[0x2b548f33a2af]
<br>
[4]
<br>
func:/usr/local/openmpi-1.2b3r13030/lib/openmpi/mca_mtl_mx.so(ompi_mtl_m
<br>
x_module_init+0x20) [0x2b548f22fb50]
<br>
[5] func:/usr/local/openmpi-1.2b3r13030/lib/openmpi/mca_mtl_mx.so
<br>
[0x2b548f22fcb5]
<br>
[6]
<br>
func:/usr/local/openmpi-1.2b3r13030/lib/libmpi.so.0(ompi_mtl_base_select
<br>
+0x6f) [0x2b548be9465f]
<br>
[7] func:/usr/local/openmpi-1.2b3r13030/lib/openmpi/mca_pml_cm.so
<br>
[0x2b548ef04aa6]
<br>
[8]
<br>
func:/usr/local/openmpi-1.2b3r13030/lib/libmpi.so.0(mca_pml_base_select+
<br>
0x113) [0x2b548be96ef3]
<br>
[9]
<br>
func:/usr/local/openmpi-1.2b3r13030/lib/libmpi.so.0(ompi_mpi_init+0x45e)
<br>
[0x2b548be5f7de]
<br>
[10] func:/usr/local/openmpi-1.2b3r13030/lib/libmpi.so.0(MPI_Init+0x83)
<br>
[0x2b548be80903]
<br>
[11] func:./cpi(main+0x42) [0x400cd5]
<br>
[12] func:/lib/libc.so.6(__libc_start_main+0xf4) [0x2b548c820134]
<br>
[13] func:./cpi [0x400bd9]
<br>
*** End of error message ***
<br>
^@[node-1:10307] sess_dir_finalize: proc session dir not empty - leaving
<br>
[juggernaut:15087] spawn: in job_state_callback(jobid = 1, state = 0x80)
<br>
mpirun noticed that job rank 0 with PID 0 on node node-1 exited on
<br>
signal 15.
<br>
[node-1:10307] sess_dir_finalize: job session dir not empty - leaving
<br>
[node-2:11499] sess_dir_finalize: job session dir not empty - leaving
<br>
5 additional processes aborted (not shown)
<br>
[juggernaut:15087] sess_dir_finalize: proc session dir not empty -
<br>
leaving
<br>
[node-1:10307] sess_dir_finalize: proc session dir not empty - leaving
<br>
[node-2:11499] sess_dir_finalize: proc session dir not empty - leaving
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2442.php">Adrian Knoth: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Previous message:</strong> <a href="2440.php">Jeff Squyres: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>In reply to:</strong> <a href="2440.php">Jeff Squyres: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2442.php">Adrian Knoth: "Re: [OMPI users] Ompi failing on mx only"</a>
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
