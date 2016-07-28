<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 17 16:06:34 2007" -->
<!-- isoreceived="20070917200634" -->
<!-- sent="Mon, 17 Sep 2007 16:06:26 -0400" -->
<!-- isosent="20070917200626" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="[MTT users] OSU parsing module issue?" -->
<!-- id="20070917200626.GO24027_at_sun.com" -->
<!-- charset="us-ascii" -->
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
<strong>Date:</strong> 2007-09-17 16:06:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0409.php">Ethan Mallove: "Re: [MTT users] OSU parsing module issue?"</a>
<li><strong>Previous message:</strong> <a href="0407.php">Ethan Mallove: "[MTT users] Capturing stderr using &amp;shell()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0409.php">Ethan Mallove: "Re: [MTT users] OSU parsing module issue?"</a>
<li><strong>Reply:</strong> <a href="0409.php">Ethan Mallove: "Re: [MTT users] OSU parsing module issue?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>Here is a run of &quot;osu&quot; test results that did not seem
<br>
to register any latency_bandwidth data: 
<br>
<p>&nbsp;&nbsp;<a href="http://www.open-mpi.org/mtt/index.php?do_redir=340">http://www.open-mpi.org/mtt/index.php?do_redir=340</a>
<br>
<p>Below is the mttdatabase debug file. Could the
<br>
Analyze/OSU.pm module is getting flummoxed by the warnings
<br>
that precede the actual performance data tables?
<br>
<p>&nbsp;&nbsp;$VAR1 = {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'duration_1' =&gt; '71 seconds',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'mpi_install_section_name_1' =&gt; 'developer',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'environment_2' =&gt; '',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'hostname' =&gt; 'fog01',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'result_stdout_1' =&gt; 'warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;# OSU MPI Bandwidth Test (Version 2.1)
<br>
&nbsp;&nbsp;# Size		Bandwidth (MB/s) 
<br>
&nbsp;&nbsp;1		0.395771
<br>
&nbsp;&nbsp;2		0.782770
<br>
&nbsp;&nbsp;4		1.554345
<br>
&nbsp;&nbsp;8		2.796567
<br>
&nbsp;&nbsp;16		6.600534
<br>
&nbsp;&nbsp;32		13.161827
<br>
&nbsp;&nbsp;64		23.404541
<br>
&nbsp;&nbsp;128		43.974274
<br>
&nbsp;&nbsp;256		87.473876
<br>
&nbsp;&nbsp;512		161.514271
<br>
&nbsp;&nbsp;1024		218.590781
<br>
&nbsp;&nbsp;2048		224.491837
<br>
&nbsp;&nbsp;4096		229.415259
<br>
&nbsp;&nbsp;8192		238.724045
<br>
&nbsp;&nbsp;16384		243.492486
<br>
&nbsp;&nbsp;32768		244.995704
<br>
&nbsp;&nbsp;65536		245.507191
<br>
&nbsp;&nbsp;131072		232.206820
<br>
&nbsp;&nbsp;262144		201.486492
<br>
&nbsp;&nbsp;524288		182.285115
<br>
&nbsp;&nbsp;1048576		163.190881
<br>
&nbsp;&nbsp;2097152		170.839062
<br>
&nbsp;&nbsp;4194304		166.220132
<br>
&nbsp;&nbsp;',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'launcher_1' =&gt; 'mpirun',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'launcher_3' =&gt; 'mpirun',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'resource_manager_2' =&gt; 'unknown',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'np_1' =&gt; '16',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'description_2' =&gt; undef,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'command_1' =&gt; 'mpirun -mca pml cm -mca mtl mx -x LD_LIBRARY_PATH=/opt/mx/lib --host fog01,fog02,fog03,fog04,fog05,fog06,fog07,fog08 -np 16 --prefix /home/paklui/paklui-1.2-pml/shared-install osu_bw ',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'test_result_1' =&gt; 1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'exit_value_3' =&gt; 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'result_stderr_2' =&gt; undef,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'network_1' =&gt; '',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'mpi_version' =&gt; '1.2.4b1r16122M',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'test_build_section_name_2' =&gt; 'osu',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'parameters_3' =&gt; '',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'result_stderr_3' =&gt; undef,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'duration_3' =&gt; '108 seconds',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'number_of_results' =&gt; '3',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'phase' =&gt; 'Test Run',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'exit_signal_3' =&gt; -1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'parameters_2' =&gt; '',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'parameters_1' =&gt; '',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'start_timestamp_3' =&gt; 'Mon Sep 17 18:54:35 2007',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'variant_3' =&gt; 1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'result_message_1' =&gt; 'Passed',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'test_name_1' =&gt; 'osu_bw',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'result_message_2' =&gt; 'Passed',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'result_message_3' =&gt; 'Passed',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'variant_2' =&gt; 1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'fields' =&gt; 'command,description,duration,environment,exit_signal,exit_value,launcher,mpi_install_section_name,mpi_name,mpi_version,network,np,parameters,phase,resource_manager,result_message,result_stderr,result_stdout,start_timestamp,test_build_id,test_build_section_name,test_name,test_result,variant',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'exit_value_2' =&gt; 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'exit_signal_2' =&gt; -1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'test_name_2' =&gt; 'osu_latency',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'resource_manager_1' =&gt; 'unknown',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'command_3' =&gt; 'mpirun -mca pml cm -mca mtl mx -x LD_LIBRARY_PATH=/opt/mx/lib --host fog01,fog02,fog03,fog04,fog05,fog06,fog07,fog08 -np 16 --prefix /home/paklui/paklui-1.2-pml/shared-install osu_bibw ',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'test_build_section_name_3' =&gt; 'osu',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'trial' =&gt; 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'mpi_name' =&gt; 'developer',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'duration_2' =&gt; '13 seconds',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'description_1' =&gt; undef,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'test_name_3' =&gt; 'osu_bibw',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'exit_value_1' =&gt; 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'start_timestamp_1' =&gt; 'Mon Sep 17 18:53:11 2007',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'environment_1' =&gt; '',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'result_stdout_3' =&gt; 'warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;# OSU MPI Bidirectional Bandwidth Test (Version 2.1)
<br>
&nbsp;&nbsp;# Size		Bi-Bandwidth (MB/s) 
<br>
&nbsp;&nbsp;1		0.387445
<br>
&nbsp;&nbsp;2		0.777100
<br>
&nbsp;&nbsp;4		1.656051
<br>
&nbsp;&nbsp;8		3.309626
<br>
&nbsp;&nbsp;16		6.634281
<br>
&nbsp;&nbsp;32		13.279331
<br>
&nbsp;&nbsp;64		23.694901
<br>
&nbsp;&nbsp;128		44.994681
<br>
&nbsp;&nbsp;256		82.401900
<br>
&nbsp;&nbsp;512		155.905137
<br>
&nbsp;&nbsp;1024		303.218196
<br>
&nbsp;&nbsp;2048		383.744225
<br>
&nbsp;&nbsp;4096		430.012409
<br>
&nbsp;&nbsp;8192		462.876255
<br>
&nbsp;&nbsp;16384		480.684461
<br>
&nbsp;&nbsp;32768		485.238770
<br>
&nbsp;&nbsp;65536		472.589674
<br>
&nbsp;&nbsp;131072		277.318527
<br>
&nbsp;&nbsp;262144		306.109573
<br>
&nbsp;&nbsp;524288		226.592213
<br>
&nbsp;&nbsp;1048576		261.033587
<br>
&nbsp;&nbsp;2097152		264.315791
<br>
&nbsp;&nbsp;4194304		188.471704
<br>
&nbsp;&nbsp;',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'test_build_section_name_1' =&gt; 'osu',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'mpi_install_section_name_3' =&gt; 'developer',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'result_stderr_1' =&gt; undef,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'platform_name' =&gt; 'fog01',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'exit_signal_1' =&gt; -1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'network_2' =&gt; '',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'test_build_id' =&gt; 52047,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'client_serial' =&gt; '3939',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'np_3' =&gt; '16',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'test_result_3' =&gt; 1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'environment_3' =&gt; '',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'test_result_2' =&gt; 1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'np_2' =&gt; '16',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'result_stdout_2' =&gt; 'warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;warning:regcache incompatible with malloc
<br>
&nbsp;&nbsp;# OSU MPI Latency Test (Version 2.1)
<br>
&nbsp;&nbsp;# Size		Latency (us) 
<br>
&nbsp;&nbsp;0		4.84
<br>
&nbsp;&nbsp;1		5.06
<br>
&nbsp;&nbsp;2		5.07
<br>
&nbsp;&nbsp;4		5.06
<br>
&nbsp;&nbsp;8		5.07
<br>
&nbsp;&nbsp;16		5.13
<br>
&nbsp;&nbsp;32		5.15
<br>
&nbsp;&nbsp;64		5.93
<br>
&nbsp;&nbsp;128		6.47
<br>
&nbsp;&nbsp;256		8.64
<br>
&nbsp;&nbsp;512		10.40
<br>
&nbsp;&nbsp;1024		13.65
<br>
&nbsp;&nbsp;2048		18.16
<br>
&nbsp;&nbsp;4096		27.26
<br>
&nbsp;&nbsp;8192		46.41
<br>
&nbsp;&nbsp;16384		85.18
<br>
&nbsp;&nbsp;32768		156.52
<br>
&nbsp;&nbsp;65536		331.39
<br>
&nbsp;&nbsp;131072		609.71
<br>
&nbsp;&nbsp;262144		1169.93
<br>
&nbsp;&nbsp;524288		2292.13
<br>
&nbsp;&nbsp;1048576		4553.35
<br>
&nbsp;&nbsp;2097152		9060.36
<br>
&nbsp;&nbsp;4194304		18122.39
<br>
&nbsp;&nbsp;',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'mpi_install_section_name_2' =&gt; 'developer',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'network_3' =&gt; '',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'command_2' =&gt; 'mpirun -mca pml cm -mca mtl mx -x LD_LIBRARY_PATH=/opt/mx/lib --host fog01,fog02,fog03,fog04,fog05,fog06,fog07,fog08 -np 16 --prefix /home/paklui/paklui-1.2-pml/shared-install osu_latency ',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'start_timestamp_2' =&gt; 'Mon Sep 17 18:54:22 2007',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'mtt_client_version' =&gt; '2.1devel',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'resource_manager_3' =&gt; 'unknown',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'description_3' =&gt; undef,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'variant_1' =&gt; 1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'local_username' =&gt; 'paklui',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'launcher_2' =&gt; 'mpirun'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;};
<br>
<p>-Ethan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0409.php">Ethan Mallove: "Re: [MTT users] OSU parsing module issue?"</a>
<li><strong>Previous message:</strong> <a href="0407.php">Ethan Mallove: "[MTT users] Capturing stderr using &amp;shell()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0409.php">Ethan Mallove: "Re: [MTT users] OSU parsing module issue?"</a>
<li><strong>Reply:</strong> <a href="0409.php">Ethan Mallove: "Re: [MTT users] OSU parsing module issue?"</a>
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
