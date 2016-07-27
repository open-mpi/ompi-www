<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep  5 23:32:47 2007" -->
<!-- isoreceived="20070906033247" -->
<!-- sent="Wed, 5 Sep 2007 23:31:47 -0400" -->
<!-- isosent="20070906033147" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT users] Test runs not getting into database" -->
<!-- id="F5ECD144-C615-435A-B6F2-964D7ED9699C_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2DBC961B-1FA0-409E-8FC8-19EE2E1C54D2_at_cisco.com" -->
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
<strong>Date:</strong> 2007-09-05 23:31:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0084.php">Jeff Squyres: "[MTT devel] First cut at MTT web pages"</a>
<li><strong>Previous message:</strong> <a href="0082.php">Jeff Squyres: "Re: [MTT devel] [MTT users] Test runs not getting into database"</a>
<li><strong>In reply to:</strong> <a href="0082.php">Jeff Squyres: "Re: [MTT devel] [MTT users] Test runs not getting into database"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0085.php">Josh Hursey: "Re: [MTT devel] [MTT users] Test runs not getting into database"</a>
<li><strong>Reply:</strong> <a href="0085.php">Josh Hursey: "Re: [MTT devel] [MTT users] Test runs not getting into database"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
yeah I'll try to take a look at it tomorrow. I suspect that something  
<br>
is going wrong with the relay, but I can't really think of what it  
<br>
might be at the moment.
<br>
<p>-- Josh
<br>
<p>On Sep 5, 2007, at 9:11 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Josh / Ethan --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not getting a serial means that the client is not getting a value
</span><br>
<span class="quotelev1">&gt; back from the server that it can parse into a serial.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you guys dig into this and see why the mtt dbdebug file that Tim
</span><br>
<span class="quotelev1">&gt; has at the end of this message is not getting a serial?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 5, 2007, at 9:24 AM, Tim Prins wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is the smallest one. Let me know if you need anything else.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tim
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you send any one of those mtt database files?  We'll need to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; figure out if this is a client or a server problem.  :-(
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 5, 2007, at 7:40 AM, Tim Prins wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; BigRed has not gotten its test results into the database for a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; while.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is running the ompi-core-testers branch. We run by passing the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; results through the mtt-relay.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The mtt-output file has lines like:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** WARNING: MTTDatabase did not get a serial; phases will be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; isolated
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from each other in the reports
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Reported to MTTDatabase: 1 successful submit, 0 failed submits
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (total of 1 result)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have the database submit files if they would help.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $VAR1 = {
</span><br>
<span class="quotelev2">&gt;&gt;           'exit_signal_1' =&gt; -1,
</span><br>
<span class="quotelev2">&gt;&gt;           'duration_1' =&gt; '5 seconds',
</span><br>
<span class="quotelev2">&gt;&gt;           'mpi_version' =&gt; '1.3a1r16038',
</span><br>
<span class="quotelev2">&gt;&gt;           'trial' =&gt; 0,
</span><br>
<span class="quotelev2">&gt;&gt;           'mpi_install_section_name_1' =&gt; 'bigred 32 bit gcc',
</span><br>
<span class="quotelev2">&gt;&gt;           'client_serial' =&gt; undef,
</span><br>
<span class="quotelev2">&gt;&gt;           'hostname' =&gt; 's1c2b12',
</span><br>
<span class="quotelev2">&gt;&gt;           'result_stdout_1' =&gt; '/bin/rm -f *.o *~ PI* core IMB-IO
</span><br>
<span class="quotelev2">&gt;&gt; IMB-EXT IMB-MPI1 exe_io exe_ext exe_mpi1
</span><br>
<span class="quotelev2">&gt;&gt; touch IMB_declare.h
</span><br>
<span class="quotelev2">&gt;&gt; touch exe_mpi1 *.c; rm -rf exe_io exe_ext
</span><br>
<span class="quotelev2">&gt;&gt; make MPI1 CPP=MPI1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Entering directory `/N/ptl01/mpiteam/bigred/20070905-
</span><br>
<span class="quotelev2">&gt;&gt; Wednesday/pb_0/installs/d7Ri/tests/imb/IMB_2.3/src\'
</span><br>
<span class="quotelev2">&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB.c
</span><br>
<span class="quotelev2">&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_declare.c
</span><br>
<span class="quotelev2">&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_init.c
</span><br>
<span class="quotelev2">&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_mem_manager.c
</span><br>
<span class="quotelev2">&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_parse_name_mpi1.c
</span><br>
<span class="quotelev2">&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_benchlist.c
</span><br>
<span class="quotelev2">&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_strgs.c
</span><br>
<span class="quotelev2">&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_err_handler.c
</span><br>
<span class="quotelev2">&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_g_info.c
</span><br>
<span class="quotelev2">&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_warm_up.c
</span><br>
<span class="quotelev2">&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_output.c
</span><br>
<span class="quotelev2">&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_pingpong.c
</span><br>
<span class="quotelev2">&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_pingping.c
</span><br>
<span class="quotelev2">&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_allreduce.c
</span><br>
<span class="quotelev2">&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_reduce_scatter.c
</span><br>
<span class="quotelev2">&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_reduce.c
</span><br>
<span class="quotelev2">&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_exchange.c
</span><br>
<span class="quotelev2">&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_bcast.c
</span><br>
<span class="quotelev2">&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_barrier.c
</span><br>
<span class="quotelev2">&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_allgather.c
</span><br>
<span class="quotelev2">&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_allgatherv.c
</span><br>
<span class="quotelev2">&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_alltoall.c
</span><br>
<span class="quotelev2">&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_sendrecv.c
</span><br>
<span class="quotelev2">&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_init_transfer.c
</span><br>
<span class="quotelev2">&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_chk_diff.c
</span><br>
<span class="quotelev2">&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_cpu_exploit.c
</span><br>
<span class="quotelev2">&gt;&gt; mpicc   -o IMB-MPI1 IMB.o IMB_declare.o  IMB_init.o
</span><br>
<span class="quotelev2">&gt;&gt; IMB_mem_manager.o IMB_parse_name_mpi1.o  IMB_benchlist.o
</span><br>
<span class="quotelev2">&gt;&gt; IMB_strgs.o IMB_err_handler.o IMB_g_info.o  IMB_warm_up.o
</span><br>
<span class="quotelev2">&gt;&gt; IMB_output.o IMB_pingpong.o IMB_pingping.o IMB_allreduce.o
</span><br>
<span class="quotelev2">&gt;&gt; IMB_reduce_scatter.o IMB_reduce.o IMB_exchange.o IMB_bcast.o
</span><br>
<span class="quotelev2">&gt;&gt; IMB_barrier.o IMB_allgather.o IMB_allgatherv.o IMB_alltoall.o
</span><br>
<span class="quotelev2">&gt;&gt; IMB_sendrecv.o IMB_init_transfer.o  IMB_chk_diff.o IMB_cpu_exploit.o
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/N/ptl01/mpiteam/bigred/20070905-
</span><br>
<span class="quotelev2">&gt;&gt; Wednesday/pb_0/installs/d7Ri/tests/imb/IMB_2.3/src\'
</span><br>
<span class="quotelev2">&gt;&gt; ',
</span><br>
<span class="quotelev2">&gt;&gt;           'mpi_name' =&gt; 'ompi-nightly-trunk',
</span><br>
<span class="quotelev2">&gt;&gt;           'number_of_results' =&gt; '1',
</span><br>
<span class="quotelev2">&gt;&gt;           'phase' =&gt; 'Test Build',
</span><br>
<span class="quotelev2">&gt;&gt;           'compiler_version_1' =&gt; '3.3.3',
</span><br>
<span class="quotelev2">&gt;&gt;           'exit_value_1' =&gt; 0,
</span><br>
<span class="quotelev2">&gt;&gt;           'result_message_1' =&gt; 'Success',
</span><br>
<span class="quotelev2">&gt;&gt;           'start_timestamp_1' =&gt; 'Wed Sep  5 04:16:52 2007',
</span><br>
<span class="quotelev2">&gt;&gt;           'compiler_name_1' =&gt; 'gnu',
</span><br>
<span class="quotelev2">&gt;&gt;           'suite_name_1' =&gt; 'imb',
</span><br>
<span class="quotelev2">&gt;&gt;           'test_result_1' =&gt; 1,
</span><br>
<span class="quotelev2">&gt;&gt;           'mtt_client_version' =&gt; '2.1devel',
</span><br>
<span class="quotelev2">&gt;&gt;           'fields' =&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 'compiler_name,compiler_version,duration,exit_signal,exit_value,mpi_g 
</span><br>
<span class="quotelev2">&gt;&gt; e
</span><br>
<span class="quotelev2">&gt;&gt; t_section_name,mpi_install_id,mpi_install_section_name,mpi_name,mpi_v 
</span><br>
<span class="quotelev2">&gt;&gt; e
</span><br>
<span class="quotelev2">&gt;&gt; rsion,phase,result_message,result_stdout,start_timestamp,suite_name,t 
</span><br>
<span class="quotelev2">&gt;&gt; e
</span><br>
<span class="quotelev2">&gt;&gt; st_result',
</span><br>
<span class="quotelev2">&gt;&gt;           'mpi_install_id' =&gt; undef,
</span><br>
<span class="quotelev2">&gt;&gt;           'platform_name' =&gt; 'IU_BigRed',
</span><br>
<span class="quotelev2">&gt;&gt;           'local_username' =&gt; 'mpiteam',
</span><br>
<span class="quotelev2">&gt;&gt;           'mpi_get_section_name_1' =&gt; 'ompi-nightly-trunk'
</span><br>
<span class="quotelev2">&gt;&gt;         };
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="0084.php">Jeff Squyres: "[MTT devel] First cut at MTT web pages"</a>
<li><strong>Previous message:</strong> <a href="0082.php">Jeff Squyres: "Re: [MTT devel] [MTT users] Test runs not getting into database"</a>
<li><strong>In reply to:</strong> <a href="0082.php">Jeff Squyres: "Re: [MTT devel] [MTT users] Test runs not getting into database"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0085.php">Josh Hursey: "Re: [MTT devel] [MTT users] Test runs not getting into database"</a>
<li><strong>Reply:</strong> <a href="0085.php">Josh Hursey: "Re: [MTT devel] [MTT users] Test runs not getting into database"</a>
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
