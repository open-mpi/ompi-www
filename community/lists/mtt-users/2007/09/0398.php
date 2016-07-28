<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep  5 09:24:01 2007" -->
<!-- isoreceived="20070905132401" -->
<!-- sent="Wed, 05 Sep 2007 09:24:02 -0400" -->
<!-- isosent="20070905132402" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [MTT users] Test runs not getting into database" -->
<!-- id="46DEADF2.6090709_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4EF247D7-72D3-45E7-A1F2-569F8A564415_at_cisco.com" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-05 09:24:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0399.php">Jeff Squyres: "Re: [MTT users] [MTT] #245: Support multiplicative effect for other	INI params"</a>
<li><strong>Previous message:</strong> <a href="0397.php">Jeff Squyres: "Re: [MTT users] Test runs not getting into database"</a>
<li><strong>In reply to:</strong> <a href="0397.php">Jeff Squyres: "Re: [MTT users] Test runs not getting into database"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0401.php">Jeff Squyres: "Re: [MTT users] Test runs not getting into database"</a>
<li><strong>Reply:</strong> <a href="0401.php">Jeff Squyres: "Re: [MTT users] Test runs not getting into database"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here is the smallest one. Let me know if you need anything else.
<br>
<p>Tim
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Can you send any one of those mtt database files?  We'll need to  
</span><br>
<span class="quotelev1">&gt; figure out if this is a client or a server problem.  :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 5, 2007, at 7:40 AM, Tim Prins wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; BigRed has not gotten its test results into the database for a while.
</span><br>
<span class="quotelev2">&gt;&gt; This is running the ompi-core-testers branch. We run by passing the
</span><br>
<span class="quotelev2">&gt;&gt; results through the mtt-relay.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The mtt-output file has lines like:
</span><br>
<span class="quotelev2">&gt;&gt; *** WARNING: MTTDatabase did not get a serial; phases will be isolated
</span><br>
<span class="quotelev2">&gt;&gt; from each other in the reports
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Reported to MTTDatabase: 1 successful submit, 0 failed submits
</span><br>
<span class="quotelev2">&gt;&gt; (total of 1 result)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have the database submit files if they would help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tim
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
<span class="quotelev1">&gt; 
</span><br>
<p><p>
<br><p>
$VAR1 = {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'exit_signal_1' =&gt; -1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'duration_1' =&gt; '5 seconds',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'mpi_version' =&gt; '1.3a1r16038',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'trial' =&gt; 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'mpi_install_section_name_1' =&gt; 'bigred 32 bit gcc',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'client_serial' =&gt; undef,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'hostname' =&gt; 's1c2b12',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'result_stdout_1' =&gt; '/bin/rm -f *.o *~ PI* core IMB-IO IMB-EXT IMB-MPI1 exe_io exe_ext exe_mpi1
<br>
touch IMB_declare.h
<br>
touch exe_mpi1 *.c; rm -rf exe_io exe_ext
<br>
make MPI1 CPP=MPI1
<br>
make[1]: Entering directory `/N/ptl01/mpiteam/bigred/20070905-Wednesday/pb_0/installs/d7Ri/tests/imb/IMB_2.3/src\'
<br>
mpicc  -I.  -DMPI1 -O -c IMB.c
<br>
mpicc  -I.  -DMPI1 -O -c IMB_declare.c
<br>
mpicc  -I.  -DMPI1 -O -c IMB_init.c
<br>
mpicc  -I.  -DMPI1 -O -c IMB_mem_manager.c
<br>
mpicc  -I.  -DMPI1 -O -c IMB_parse_name_mpi1.c
<br>
mpicc  -I.  -DMPI1 -O -c IMB_benchlist.c
<br>
mpicc  -I.  -DMPI1 -O -c IMB_strgs.c
<br>
mpicc  -I.  -DMPI1 -O -c IMB_err_handler.c
<br>
mpicc  -I.  -DMPI1 -O -c IMB_g_info.c
<br>
mpicc  -I.  -DMPI1 -O -c IMB_warm_up.c
<br>
mpicc  -I.  -DMPI1 -O -c IMB_output.c
<br>
mpicc  -I.  -DMPI1 -O -c IMB_pingpong.c
<br>
mpicc  -I.  -DMPI1 -O -c IMB_pingping.c
<br>
mpicc  -I.  -DMPI1 -O -c IMB_allreduce.c
<br>
mpicc  -I.  -DMPI1 -O -c IMB_reduce_scatter.c
<br>
mpicc  -I.  -DMPI1 -O -c IMB_reduce.c
<br>
mpicc  -I.  -DMPI1 -O -c IMB_exchange.c
<br>
mpicc  -I.  -DMPI1 -O -c IMB_bcast.c
<br>
mpicc  -I.  -DMPI1 -O -c IMB_barrier.c
<br>
mpicc  -I.  -DMPI1 -O -c IMB_allgather.c
<br>
mpicc  -I.  -DMPI1 -O -c IMB_allgatherv.c
<br>
mpicc  -I.  -DMPI1 -O -c IMB_alltoall.c
<br>
mpicc  -I.  -DMPI1 -O -c IMB_sendrecv.c
<br>
mpicc  -I.  -DMPI1 -O -c IMB_init_transfer.c
<br>
mpicc  -I.  -DMPI1 -O -c IMB_chk_diff.c
<br>
mpicc  -I.  -DMPI1 -O -c IMB_cpu_exploit.c
<br>
mpicc   -o IMB-MPI1 IMB.o IMB_declare.o  IMB_init.o IMB_mem_manager.o IMB_parse_name_mpi1.o  IMB_benchlist.o IMB_strgs.o IMB_err_handler.o IMB_g_info.o  IMB_warm_up.o IMB_output.o IMB_pingpong.o IMB_pingping.o IMB_allreduce.o IMB_reduce_scatter.o IMB_reduce.o IMB_exchange.o IMB_bcast.o IMB_barrier.o IMB_allgather.o IMB_allgatherv.o IMB_alltoall.o IMB_sendrecv.o IMB_init_transfer.o  IMB_chk_diff.o IMB_cpu_exploit.o   
<br>
make[1]: Leaving directory `/N/ptl01/mpiteam/bigred/20070905-Wednesday/pb_0/installs/d7Ri/tests/imb/IMB_2.3/src\'
<br>
',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'mpi_name' =&gt; 'ompi-nightly-trunk',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'number_of_results' =&gt; '1',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'phase' =&gt; 'Test Build',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'compiler_version_1' =&gt; '3.3.3',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'exit_value_1' =&gt; 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'result_message_1' =&gt; 'Success',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'start_timestamp_1' =&gt; 'Wed Sep  5 04:16:52 2007',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'compiler_name_1' =&gt; 'gnu',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'suite_name_1' =&gt; 'imb',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'test_result_1' =&gt; 1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'mtt_client_version' =&gt; '2.1devel',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'fields' =&gt; 'compiler_name,compiler_version,duration,exit_signal,exit_value,mpi_get_section_name,mpi_install_id,mpi_install_section_name,mpi_name,mpi_version,phase,result_message,result_stdout,start_timestamp,suite_name,test_result',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'mpi_install_id' =&gt; undef,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'platform_name' =&gt; 'IU_BigRed',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'local_username' =&gt; 'mpiteam',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'mpi_get_section_name_1' =&gt; 'ompi-nightly-trunk'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;};
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0399.php">Jeff Squyres: "Re: [MTT users] [MTT] #245: Support multiplicative effect for other	INI params"</a>
<li><strong>Previous message:</strong> <a href="0397.php">Jeff Squyres: "Re: [MTT users] Test runs not getting into database"</a>
<li><strong>In reply to:</strong> <a href="0397.php">Jeff Squyres: "Re: [MTT users] Test runs not getting into database"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0401.php">Jeff Squyres: "Re: [MTT users] Test runs not getting into database"</a>
<li><strong>Reply:</strong> <a href="0401.php">Jeff Squyres: "Re: [MTT users] Test runs not getting into database"</a>
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
