<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 17 17:12:29 2007" -->
<!-- isoreceived="20070917211229" -->
<!-- sent="Mon, 17 Sep 2007 17:12:24 -0400" -->
<!-- isosent="20070917211224" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] OSU parsing module issue?" -->
<!-- id="20070917211224.GA13767_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20070917200626.GO24027_at_sun.com" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-17 17:12:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0410.php">Jelena Pjesivac-Grbovic: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<li><strong>Previous message:</strong> <a href="0408.php">Ethan Mallove: "[MTT users] OSU parsing module issue?"</a>
<li><strong>In reply to:</strong> <a href="0408.php">Ethan Mallove: "[MTT users] OSU parsing module issue?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The warnings emitted before the performance data *were* the
<br>
problem. Fixed in r1027.
<br>
<p>-Ethan
<br>
<p><p>On Mon, Sep/17/2007 04:06:26PM, Ethan Mallove wrote:
<br>
<span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is a run of &quot;osu&quot; test results that did not seem
</span><br>
<span class="quotelev1">&gt; to register any latency_bandwidth data: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.open-mpi.org/mtt/index.php?do_redir=340">http://www.open-mpi.org/mtt/index.php?do_redir=340</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Below is the mttdatabase debug file. Could the
</span><br>
<span class="quotelev1">&gt; Analyze/OSU.pm module is getting flummoxed by the warnings
</span><br>
<span class="quotelev1">&gt; that precede the actual performance data tables?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   $VAR1 = {
</span><br>
<span class="quotelev1">&gt;             'duration_1' =&gt; '71 seconds',
</span><br>
<span class="quotelev1">&gt;             'mpi_install_section_name_1' =&gt; 'developer',
</span><br>
<span class="quotelev1">&gt;             'environment_2' =&gt; '',
</span><br>
<span class="quotelev1">&gt;             'hostname' =&gt; 'fog01',
</span><br>
<span class="quotelev1">&gt;             'result_stdout_1' =&gt; 'warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   # OSU MPI Bandwidth Test (Version 2.1)
</span><br>
<span class="quotelev1">&gt;   # Size		Bandwidth (MB/s) 
</span><br>
<span class="quotelev1">&gt;   1		0.395771
</span><br>
<span class="quotelev1">&gt;   2		0.782770
</span><br>
<span class="quotelev1">&gt;   4		1.554345
</span><br>
<span class="quotelev1">&gt;   8		2.796567
</span><br>
<span class="quotelev1">&gt;   16		6.600534
</span><br>
<span class="quotelev1">&gt;   32		13.161827
</span><br>
<span class="quotelev1">&gt;   64		23.404541
</span><br>
<span class="quotelev1">&gt;   128		43.974274
</span><br>
<span class="quotelev1">&gt;   256		87.473876
</span><br>
<span class="quotelev1">&gt;   512		161.514271
</span><br>
<span class="quotelev1">&gt;   1024		218.590781
</span><br>
<span class="quotelev1">&gt;   2048		224.491837
</span><br>
<span class="quotelev1">&gt;   4096		229.415259
</span><br>
<span class="quotelev1">&gt;   8192		238.724045
</span><br>
<span class="quotelev1">&gt;   16384		243.492486
</span><br>
<span class="quotelev1">&gt;   32768		244.995704
</span><br>
<span class="quotelev1">&gt;   65536		245.507191
</span><br>
<span class="quotelev1">&gt;   131072		232.206820
</span><br>
<span class="quotelev1">&gt;   262144		201.486492
</span><br>
<span class="quotelev1">&gt;   524288		182.285115
</span><br>
<span class="quotelev1">&gt;   1048576		163.190881
</span><br>
<span class="quotelev1">&gt;   2097152		170.839062
</span><br>
<span class="quotelev1">&gt;   4194304		166.220132
</span><br>
<span class="quotelev1">&gt;   ',
</span><br>
<span class="quotelev1">&gt;             'launcher_1' =&gt; 'mpirun',
</span><br>
<span class="quotelev1">&gt;             'launcher_3' =&gt; 'mpirun',
</span><br>
<span class="quotelev1">&gt;             'resource_manager_2' =&gt; 'unknown',
</span><br>
<span class="quotelev1">&gt;             'np_1' =&gt; '16',
</span><br>
<span class="quotelev1">&gt;             'description_2' =&gt; undef,
</span><br>
<span class="quotelev1">&gt;             'command_1' =&gt; 'mpirun -mca pml cm -mca mtl mx -x LD_LIBRARY_PATH=/opt/mx/lib --host fog01,fog02,fog03,fog04,fog05,fog06,fog07,fog08 -np 16 --prefix /home/paklui/paklui-1.2-pml/shared-install osu_bw ',
</span><br>
<span class="quotelev1">&gt;             'test_result_1' =&gt; 1,
</span><br>
<span class="quotelev1">&gt;             'exit_value_3' =&gt; 0,
</span><br>
<span class="quotelev1">&gt;             'result_stderr_2' =&gt; undef,
</span><br>
<span class="quotelev1">&gt;             'network_1' =&gt; '',
</span><br>
<span class="quotelev1">&gt;             'mpi_version' =&gt; '1.2.4b1r16122M',
</span><br>
<span class="quotelev1">&gt;             'test_build_section_name_2' =&gt; 'osu',
</span><br>
<span class="quotelev1">&gt;             'parameters_3' =&gt; '',
</span><br>
<span class="quotelev1">&gt;             'result_stderr_3' =&gt; undef,
</span><br>
<span class="quotelev1">&gt;             'duration_3' =&gt; '108 seconds',
</span><br>
<span class="quotelev1">&gt;             'number_of_results' =&gt; '3',
</span><br>
<span class="quotelev1">&gt;             'phase' =&gt; 'Test Run',
</span><br>
<span class="quotelev1">&gt;             'exit_signal_3' =&gt; -1,
</span><br>
<span class="quotelev1">&gt;             'parameters_2' =&gt; '',
</span><br>
<span class="quotelev1">&gt;             'parameters_1' =&gt; '',
</span><br>
<span class="quotelev1">&gt;             'start_timestamp_3' =&gt; 'Mon Sep 17 18:54:35 2007',
</span><br>
<span class="quotelev1">&gt;             'variant_3' =&gt; 1,
</span><br>
<span class="quotelev1">&gt;             'result_message_1' =&gt; 'Passed',
</span><br>
<span class="quotelev1">&gt;             'test_name_1' =&gt; 'osu_bw',
</span><br>
<span class="quotelev1">&gt;             'result_message_2' =&gt; 'Passed',
</span><br>
<span class="quotelev1">&gt;             'result_message_3' =&gt; 'Passed',
</span><br>
<span class="quotelev1">&gt;             'variant_2' =&gt; 1,
</span><br>
<span class="quotelev1">&gt;             'fields' =&gt; 'command,description,duration,environment,exit_signal,exit_value,launcher,mpi_install_section_name,mpi_name,mpi_version,network,np,parameters,phase,resource_manager,result_message,result_stderr,result_stdout,start_timestamp,test_build_id,test_build_section_name,test_name,test_result,variant',
</span><br>
<span class="quotelev1">&gt;             'exit_value_2' =&gt; 0,
</span><br>
<span class="quotelev1">&gt;             'exit_signal_2' =&gt; -1,
</span><br>
<span class="quotelev1">&gt;             'test_name_2' =&gt; 'osu_latency',
</span><br>
<span class="quotelev1">&gt;             'resource_manager_1' =&gt; 'unknown',
</span><br>
<span class="quotelev1">&gt;             'command_3' =&gt; 'mpirun -mca pml cm -mca mtl mx -x LD_LIBRARY_PATH=/opt/mx/lib --host fog01,fog02,fog03,fog04,fog05,fog06,fog07,fog08 -np 16 --prefix /home/paklui/paklui-1.2-pml/shared-install osu_bibw ',
</span><br>
<span class="quotelev1">&gt;             'test_build_section_name_3' =&gt; 'osu',
</span><br>
<span class="quotelev1">&gt;             'trial' =&gt; 0,
</span><br>
<span class="quotelev1">&gt;             'mpi_name' =&gt; 'developer',
</span><br>
<span class="quotelev1">&gt;             'duration_2' =&gt; '13 seconds',
</span><br>
<span class="quotelev1">&gt;             'description_1' =&gt; undef,
</span><br>
<span class="quotelev1">&gt;             'test_name_3' =&gt; 'osu_bibw',
</span><br>
<span class="quotelev1">&gt;             'exit_value_1' =&gt; 0,
</span><br>
<span class="quotelev1">&gt;             'start_timestamp_1' =&gt; 'Mon Sep 17 18:53:11 2007',
</span><br>
<span class="quotelev1">&gt;             'environment_1' =&gt; '',
</span><br>
<span class="quotelev1">&gt;             'result_stdout_3' =&gt; 'warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   # OSU MPI Bidirectional Bandwidth Test (Version 2.1)
</span><br>
<span class="quotelev1">&gt;   # Size		Bi-Bandwidth (MB/s) 
</span><br>
<span class="quotelev1">&gt;   1		0.387445
</span><br>
<span class="quotelev1">&gt;   2		0.777100
</span><br>
<span class="quotelev1">&gt;   4		1.656051
</span><br>
<span class="quotelev1">&gt;   8		3.309626
</span><br>
<span class="quotelev1">&gt;   16		6.634281
</span><br>
<span class="quotelev1">&gt;   32		13.279331
</span><br>
<span class="quotelev1">&gt;   64		23.694901
</span><br>
<span class="quotelev1">&gt;   128		44.994681
</span><br>
<span class="quotelev1">&gt;   256		82.401900
</span><br>
<span class="quotelev1">&gt;   512		155.905137
</span><br>
<span class="quotelev1">&gt;   1024		303.218196
</span><br>
<span class="quotelev1">&gt;   2048		383.744225
</span><br>
<span class="quotelev1">&gt;   4096		430.012409
</span><br>
<span class="quotelev1">&gt;   8192		462.876255
</span><br>
<span class="quotelev1">&gt;   16384		480.684461
</span><br>
<span class="quotelev1">&gt;   32768		485.238770
</span><br>
<span class="quotelev1">&gt;   65536		472.589674
</span><br>
<span class="quotelev1">&gt;   131072		277.318527
</span><br>
<span class="quotelev1">&gt;   262144		306.109573
</span><br>
<span class="quotelev1">&gt;   524288		226.592213
</span><br>
<span class="quotelev1">&gt;   1048576		261.033587
</span><br>
<span class="quotelev1">&gt;   2097152		264.315791
</span><br>
<span class="quotelev1">&gt;   4194304		188.471704
</span><br>
<span class="quotelev1">&gt;   ',
</span><br>
<span class="quotelev1">&gt;             'test_build_section_name_1' =&gt; 'osu',
</span><br>
<span class="quotelev1">&gt;             'mpi_install_section_name_3' =&gt; 'developer',
</span><br>
<span class="quotelev1">&gt;             'result_stderr_1' =&gt; undef,
</span><br>
<span class="quotelev1">&gt;             'platform_name' =&gt; 'fog01',
</span><br>
<span class="quotelev1">&gt;             'exit_signal_1' =&gt; -1,
</span><br>
<span class="quotelev1">&gt;             'network_2' =&gt; '',
</span><br>
<span class="quotelev1">&gt;             'test_build_id' =&gt; 52047,
</span><br>
<span class="quotelev1">&gt;             'client_serial' =&gt; '3939',
</span><br>
<span class="quotelev1">&gt;             'np_3' =&gt; '16',
</span><br>
<span class="quotelev1">&gt;             'test_result_3' =&gt; 1,
</span><br>
<span class="quotelev1">&gt;             'environment_3' =&gt; '',
</span><br>
<span class="quotelev1">&gt;             'test_result_2' =&gt; 1,
</span><br>
<span class="quotelev1">&gt;             'np_2' =&gt; '16',
</span><br>
<span class="quotelev1">&gt;             'result_stdout_2' =&gt; 'warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt;   # OSU MPI Latency Test (Version 2.1)
</span><br>
<span class="quotelev1">&gt;   # Size		Latency (us) 
</span><br>
<span class="quotelev1">&gt;   0		4.84
</span><br>
<span class="quotelev1">&gt;   1		5.06
</span><br>
<span class="quotelev1">&gt;   2		5.07
</span><br>
<span class="quotelev1">&gt;   4		5.06
</span><br>
<span class="quotelev1">&gt;   8		5.07
</span><br>
<span class="quotelev1">&gt;   16		5.13
</span><br>
<span class="quotelev1">&gt;   32		5.15
</span><br>
<span class="quotelev1">&gt;   64		5.93
</span><br>
<span class="quotelev1">&gt;   128		6.47
</span><br>
<span class="quotelev1">&gt;   256		8.64
</span><br>
<span class="quotelev1">&gt;   512		10.40
</span><br>
<span class="quotelev1">&gt;   1024		13.65
</span><br>
<span class="quotelev1">&gt;   2048		18.16
</span><br>
<span class="quotelev1">&gt;   4096		27.26
</span><br>
<span class="quotelev1">&gt;   8192		46.41
</span><br>
<span class="quotelev1">&gt;   16384		85.18
</span><br>
<span class="quotelev1">&gt;   32768		156.52
</span><br>
<span class="quotelev1">&gt;   65536		331.39
</span><br>
<span class="quotelev1">&gt;   131072		609.71
</span><br>
<span class="quotelev1">&gt;   262144		1169.93
</span><br>
<span class="quotelev1">&gt;   524288		2292.13
</span><br>
<span class="quotelev1">&gt;   1048576		4553.35
</span><br>
<span class="quotelev1">&gt;   2097152		9060.36
</span><br>
<span class="quotelev1">&gt;   4194304		18122.39
</span><br>
<span class="quotelev1">&gt;   ',
</span><br>
<span class="quotelev1">&gt;             'mpi_install_section_name_2' =&gt; 'developer',
</span><br>
<span class="quotelev1">&gt;             'network_3' =&gt; '',
</span><br>
<span class="quotelev1">&gt;             'command_2' =&gt; 'mpirun -mca pml cm -mca mtl mx -x LD_LIBRARY_PATH=/opt/mx/lib --host fog01,fog02,fog03,fog04,fog05,fog06,fog07,fog08 -np 16 --prefix /home/paklui/paklui-1.2-pml/shared-install osu_latency ',
</span><br>
<span class="quotelev1">&gt;             'start_timestamp_2' =&gt; 'Mon Sep 17 18:54:22 2007',
</span><br>
<span class="quotelev1">&gt;             'mtt_client_version' =&gt; '2.1devel',
</span><br>
<span class="quotelev1">&gt;             'resource_manager_3' =&gt; 'unknown',
</span><br>
<span class="quotelev1">&gt;             'description_3' =&gt; undef,
</span><br>
<span class="quotelev1">&gt;             'variant_1' =&gt; 1,
</span><br>
<span class="quotelev1">&gt;             'local_username' =&gt; 'paklui',
</span><br>
<span class="quotelev1">&gt;             'launcher_2' =&gt; 'mpirun'
</span><br>
<span class="quotelev1">&gt;           };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0410.php">Jelena Pjesivac-Grbovic: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<li><strong>Previous message:</strong> <a href="0408.php">Ethan Mallove: "[MTT users] OSU parsing module issue?"</a>
<li><strong>In reply to:</strong> <a href="0408.php">Ethan Mallove: "[MTT users] OSU parsing module issue?"</a>
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
