<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep  6 10:04:41 2007" -->
<!-- isoreceived="20070906140441" -->
<!-- sent="Thu, 6 Sep 2007 10:04:36 -0400" -->
<!-- isosent="20070906140436" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT users] [MTT devel]  Test runs not getting into database" -->
<!-- id="693E9833-0F66-440E-BBF5-1AAA5788B821_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F5ECD144-C615-435A-B6F2-964D7ED9699C_at_open-mpi.org" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-06 10:04:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0404.php">Ethan Mallove: "Re: [MTT users] Associating &quot;description&quot; with a single phase"</a>
<li><strong>Previous message:</strong> <a href="0402.php">Josh Hursey: "Re: [MTT users] Test runs not getting into database"</a>
<li><strong>In reply to:</strong> <a href="0402.php">Josh Hursey: "Re: [MTT users] Test runs not getting into database"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0405.php">Josh Hursey: "Re: [MTT users] [MTT devel]  Test runs not getting into database"</a>
<li><strong>Reply:</strong> <a href="0405.php">Josh Hursey: "Re: [MTT users] [MTT devel]  Test runs not getting into database"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Weird this looks like a mirror issue again. Below is some more debug  
<br>
output from MTT on BigRed:
<br>
&lt;----------------------------------------&gt;
<br>
*** Reporter initializing
<br>
Evaluating: MTTDatabase
<br>
<span class="quotelev2"> &gt;&gt; Initializing reporter module: MTTDatabase
</span><br>
Evaluating: require MTT::Reporter::MTTDatabase
<br>
Evaluating: $ret = &amp;MTT::Reporter::MTTDatabase::Init(@args)
<br>
Evaluating: XXUsernameXX
<br>
Evaluating: XXPasswordXX
<br>
Evaluating: <a href="http://s10c2b3.dim:8008/">http://s10c2b3.dim:8008/</a>
<br>
Evaluating: OMPI
<br>
Evaluating: 1
<br>
Evaluating: IU_BigRed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Set HTTP credentials for realm &quot;OMPI&quot;
<br>
MTTDatabase getting a client serial number...
<br>
MTTDatabase trying proxy:  / Default (none)
<br>
MTTDatabase got response: Sorry, this page is not mirrored.  Please  
<br>
see the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;a href=&quot;<a href="http://www.open-mpi.org/mtt/submit/index.php">http://www.open-mpi.org/mtt/submit/index.php</a>&quot;&gt;original  
<br>
version
<br>
&nbsp;&nbsp;&nbsp;&nbsp;of this page&lt;/a&gt; on the main Open MPI web site.
<br>
*** WARNING: MTTDatabase did not get a serial
<br>
Making dir:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/N/ptl01/mpiteam/bigred/20070906-CronTest-cron/pb_0/mttdatabase- 
<br>
submit
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(cwd: /N/ptl01/mpiteam/bigred/20070906-CronTest-cron/pb_0)
<br>
&lt;----------------------------------------&gt;
<br>
<p>In the INI file we have the following for the reporter so we can do  
<br>
the redirect through the head node (s10c2b3.dim):
<br>
&lt;------------------------------------&gt;
<br>
[Reporter: IU database]
<br>
module = MTTDatabase
<br>
<p>mttdatabase_realm = OMPI
<br>
<p>mttdatabase_url = <a href="http://s10c2b3.dim:8008/">http://s10c2b3.dim:8008/</a>
<br>
<p>mttdatabase_username = XXUsernameXX
<br>
mttdatabase_password = XXPasswordXX
<br>
<p>mttdatabase_platform = IU_BigRed
<br>
mttdatabase_keep_debug_files = 1
<br>
<p>&lt;------------------------------------&gt;
<br>
<p>It looks like IU is using the trunk version of the mtt-relay, and the  
<br>
branch version of the MTT client. The mtt-relay code is the same on  
<br>
both the trunk and the branch. The relay seems to be submitting to:
<br>
<a href="https://www.open-mpi.org/mtt/submit/index.php">https://www.open-mpi.org/mtt/submit/index.php</a>
<br>
<p>Any thoughts on why this might be happening? It looks like the mirror  
<br>
check is messed up again.
<br>
<p>-- Josh
<br>
<p>On Sep 5, 2007, at 11:31 PM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; yeah I'll try to take a look at it tomorrow. I suspect that something
</span><br>
<span class="quotelev1">&gt; is going wrong with the relay, but I can't really think of what it
</span><br>
<span class="quotelev1">&gt; might be at the moment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 5, 2007, at 9:11 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Josh / Ethan --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Not getting a serial means that the client is not getting a value
</span><br>
<span class="quotelev2">&gt;&gt; back from the server that it can parse into a serial.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you guys dig into this and see why the mtt dbdebug file that Tim
</span><br>
<span class="quotelev2">&gt;&gt; has at the end of this message is not getting a serial?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 5, 2007, at 9:24 AM, Tim Prins wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is the smallest one. Let me know if you need anything else.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can you send any one of those mtt database files?  We'll need to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; figure out if this is a client or a server problem.  :-(
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sep 5, 2007, at 7:40 AM, Tim Prins wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; BigRed has not gotten its test results into the database for a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; while.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This is running the ompi-core-testers branch. We run by passing  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; results through the mtt-relay.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The mtt-output file has lines like:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** WARNING: MTTDatabase did not get a serial; phases will be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; isolated
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; from each other in the reports
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Reported to MTTDatabase: 1 successful submit, 0 failed submits
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (total of 1 result)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have the database submit files if they would help.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $VAR1 = {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           'exit_signal_1' =&gt; -1,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           'duration_1' =&gt; '5 seconds',
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           'mpi_version' =&gt; '1.3a1r16038',
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           'trial' =&gt; 0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           'mpi_install_section_name_1' =&gt; 'bigred 32 bit gcc',
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           'client_serial' =&gt; undef,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           'hostname' =&gt; 's1c2b12',
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           'result_stdout_1' =&gt; '/bin/rm -f *.o *~ PI* core IMB-IO
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IMB-EXT IMB-MPI1 exe_io exe_ext exe_mpi1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; touch IMB_declare.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; touch exe_mpi1 *.c; rm -rf exe_io exe_ext
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make MPI1 CPP=MPI1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Entering directory `/N/ptl01/mpiteam/bigred/20070905-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Wednesday/pb_0/installs/d7Ri/tests/imb/IMB_2.3/src\'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_declare.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_init.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_mem_manager.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_parse_name_mpi1.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_benchlist.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_strgs.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_err_handler.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_g_info.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_warm_up.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_output.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_pingpong.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_pingping.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_allreduce.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_reduce_scatter.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_reduce.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_exchange.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_bcast.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_barrier.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_allgather.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_allgatherv.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_alltoall.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_sendrecv.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_init_transfer.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_chk_diff.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_cpu_exploit.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc   -o IMB-MPI1 IMB.o IMB_declare.o  IMB_init.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IMB_mem_manager.o IMB_parse_name_mpi1.o  IMB_benchlist.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IMB_strgs.o IMB_err_handler.o IMB_g_info.o  IMB_warm_up.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IMB_output.o IMB_pingpong.o IMB_pingping.o IMB_allreduce.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IMB_reduce_scatter.o IMB_reduce.o IMB_exchange.o IMB_bcast.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IMB_barrier.o IMB_allgather.o IMB_allgatherv.o IMB_alltoall.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IMB_sendrecv.o IMB_init_transfer.o  IMB_chk_diff.o IMB_cpu_exploit.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Leaving directory `/N/ptl01/mpiteam/bigred/20070905-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Wednesday/pb_0/installs/d7Ri/tests/imb/IMB_2.3/src\'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ',
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           'mpi_name' =&gt; 'ompi-nightly-trunk',
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           'number_of_results' =&gt; '1',
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           'phase' =&gt; 'Test Build',
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           'compiler_version_1' =&gt; '3.3.3',
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           'exit_value_1' =&gt; 0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           'result_message_1' =&gt; 'Success',
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           'start_timestamp_1' =&gt; 'Wed Sep  5 04:16:52 2007',
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           'compiler_name_1' =&gt; 'gnu',
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           'suite_name_1' =&gt; 'imb',
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           'test_result_1' =&gt; 1,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           'mtt_client_version' =&gt; '2.1devel',
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           'fields' =&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'compiler_name,compiler_version,duration,exit_signal,exit_value,mpi_ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; g
</span><br>
<span class="quotelev3">&gt;&gt;&gt; e
</span><br>
<span class="quotelev3">&gt;&gt;&gt; t_section_name,mpi_install_id,mpi_install_section_name,mpi_name,mpi_ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v
</span><br>
<span class="quotelev3">&gt;&gt;&gt; e
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rsion,phase,result_message,result_stdout,start_timestamp,suite_name, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; e
</span><br>
<span class="quotelev3">&gt;&gt;&gt; st_result',
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           'mpi_install_id' =&gt; undef,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           'platform_name' =&gt; 'IU_BigRed',
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           'local_username' =&gt; 'mpiteam',
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           'mpi_get_section_name_1' =&gt; 'ompi-nightly-trunk'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         };
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0404.php">Ethan Mallove: "Re: [MTT users] Associating &quot;description&quot; with a single phase"</a>
<li><strong>Previous message:</strong> <a href="0402.php">Josh Hursey: "Re: [MTT users] Test runs not getting into database"</a>
<li><strong>In reply to:</strong> <a href="0402.php">Josh Hursey: "Re: [MTT users] Test runs not getting into database"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0405.php">Josh Hursey: "Re: [MTT users] [MTT devel]  Test runs not getting into database"</a>
<li><strong>Reply:</strong> <a href="0405.php">Josh Hursey: "Re: [MTT users] [MTT devel]  Test runs not getting into database"</a>
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
