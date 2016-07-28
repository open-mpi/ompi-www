<?
$subject_val = "[OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  5 17:13:45 2014" -->
<!-- isoreceived="20140605211345" -->
<!-- sent="Thu, 5 Jun 2014 17:13:43 -0400" -->
<!-- isosent="20140605211343" -->
<!-- name="Dan Dietz" -->
<!-- email="ddietz_at_[hidden]" -->
<!-- subject="[OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1" -->
<!-- id="CABy+9wGjs9EV4+SBL3MSM+js_sG3bqQqGo5SoGJZxf0m+P9H_w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1<br>
<strong>From:</strong> Dan Dietz (<em>ddietz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-05 17:13:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24556.php">Fischer, Greg A.: "Re: [OMPI users] openib segfaults with Torque"</a>
<li><strong>Previous message:</strong> <a href="24554.php">Fischer, Greg A.: "[OMPI users] openib segfaults with Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24558.php">Ralph Castain: "Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="24558.php">Ralph Castain: "Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
<p>I'd like to bind 8 cores to a single MPI rank for hybrid MPI/OpenMP
<br>
codes. In OMPI 1.6.3, I can do:
<br>
<p>$ mpirun -np 2 -cpus-per-rank 8  -machinefile ./nodes ./hello
<br>
<p>I get one rank bound to procs 0-7 and the other bound to 8-15. Great!
<br>
<p>But I'm having some difficulties doing this with openmpi 1.8.1:
<br>
<p>$ mpirun -np 2 -cpus-per-rank 8  -machinefile ./nodes ./hello
<br>
--------------------------------------------------------------------------
<br>
The following command line options and corresponding MCA parameter have
<br>
been deprecated and replaced as follows:
<br>
<p>&nbsp;&nbsp;Command line options:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Deprecated:  --cpus-per-proc, -cpus-per-proc, --cpus-per-rank,
<br>
-cpus-per-rank
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Replacement: --map-by &lt;obj&gt;:PE=N
<br>
<p>&nbsp;&nbsp;Equivalent MCA parameter:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Deprecated:  rmaps_base_cpus_per_proc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Replacement: rmaps_base_mapping_policy=&lt;obj&gt;:PE=N
<br>
<p>The deprecated forms *will* disappear in a future version of Open MPI.
<br>
Please update to the new syntax.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
There are not enough slots available in the system to satisfy the 2 slots
<br>
that were requested by the application:
<br>
&nbsp;&nbsp;./hello
<br>
<p>Either request fewer slots for your application, or make more slots available
<br>
for use.
<br>
--------------------------------------------------------------------------
<br>
<p>OK, let me try the new syntax...
<br>
<p>$ mpirun -np 2 --map-by core:pe=8 -machinefile ./nodes ./hello
<br>
--------------------------------------------------------------------------
<br>
There are not enough slots available in the system to satisfy the 2 slots
<br>
that were requested by the application:
<br>
&nbsp;&nbsp;./hello
<br>
<p>Either request fewer slots for your application, or make more slots available
<br>
for use.
<br>
--------------------------------------------------------------------------
<br>
<p>What am I doing wrong? The documentation on these new options is
<br>
somewhat poor and confusing so I'm probably doing something wrong. If
<br>
anyone could provide some pointers here it'd be much appreciated! If
<br>
it's not something simple and you need config logs and such please let
<br>
me know.
<br>
<p>As a side note -
<br>
<p>If I try this using the PBS nodefile with the above, I get a confusing message:
<br>
<p>--------------------------------------------------------------------------
<br>
A request for multiple cpus-per-proc was given, but a directive
<br>
was also give to map to an object level that has less cpus than
<br>
requested ones:
<br>
<p>&nbsp;&nbsp;#cpus-per-proc:  8
<br>
&nbsp;&nbsp;number of cpus:  1
<br>
&nbsp;&nbsp;map-by:          BYCORE:NOOVERSUBSCRIBE
<br>
<p>Please specify a mapping level that has more cpus, or else let us
<br>
define a default mapping that will allow multiple cpus-per-proc.
<br>
--------------------------------------------------------------------------
<br>
<p><span class="quotelev1">&gt;From what I've gathered this is because I have a node listed 16 times
</span><br>
in my PBS nodefile so it's assuming then I have 1 core per node? Some
<br>
better documentation here would be helpful. I haven't been able to
<br>
figure out how to use the &quot;oversubscribe&quot; option listed in the docs.
<br>
Not that I really want to oversubscribe, of course, I need to modify
<br>
the nodefile, but this just stumped me for a while as 1.6.3 didn't
<br>
have this behavior.
<br>
<p><p>As a extra bonus, I get a segfault in this situation:
<br>
<p>$ mpirun -np 2 -machinefile ./nodes ./hello
<br>
[conte-a497:13255] *** Process received signal ***
<br>
[conte-a497:13255] Signal: Segmentation fault (11)
<br>
[conte-a497:13255] Signal code: Address not mapped (1)
<br>
[conte-a497:13255] Failing at address: 0x2c
<br>
[conte-a497:13255] [ 0] /lib64/libpthread.so.0[0x3c9460f500]
<br>
[conte-a497:13255] [ 1]
<br>
/apps/rhel6/openmpi/1.8.1/intel-14.0.2.144/lib/libopen-rte.so.7(orte_plm_base_complete_setup+0x615)[0x2ba960a59015]
<br>
[conte-a497:13255] [ 2]
<br>
/apps/rhel6/openmpi/1.8.1/intel-14.0.2.144/lib/libopen-pal.so.6(opal_libevent2021_event_base_loop+0xa05)[0x2ba961666715]
<br>
[conte-a497:13255] [ 3] mpirun(orterun+0x1b45)[0x40684f]
<br>
[conte-a497:13255] [ 4] mpirun(main+0x20)[0x4047f4]
<br>
[conte-a497:13255] [ 5] /lib64/libc.so.6(__libc_start_main+0xfd)[0x3a1bc1ecdd]
<br>
[conte-a497:13255] [ 6] mpirun[0x404719]
<br>
[conte-a497:13255] *** End of error message ***
<br>
Segmentation fault (core dumped)
<br>
<p><p>My &quot;nodes&quot; file simply contains the first two lines of my original
<br>
$PBS_NODEFILE provided by Torque. See above why I modified. Works fine
<br>
if use the full file.
<br>
<p><p><p>Thanks in advance for any pointers you all may have!
<br>
<p>Dan
<br>
<p><p><pre>
-- 
Dan Dietz
Scientific Applications Analyst
ITaP Research Computing, Purdue University
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24556.php">Fischer, Greg A.: "Re: [OMPI users] openib segfaults with Torque"</a>
<li><strong>Previous message:</strong> <a href="24554.php">Fischer, Greg A.: "[OMPI users] openib segfaults with Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24558.php">Ralph Castain: "Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="24558.php">Ralph Castain: "Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1"</a>
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
