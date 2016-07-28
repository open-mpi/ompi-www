<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep  6 10:38:43 2007" -->
<!-- isoreceived="20070906143843" -->
<!-- sent="Thu, 6 Sep 2007 10:38:39 -0400" -->
<!-- isosent="20070906143839" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT users]   Test runs not getting into database" -->
<!-- id="EF69E6A1-F73B-478D-AC3B-60C5B38EF70E_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1A340991-AE33-48F0-9BF0-7CF3F6A50E53_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-09-06 10:38:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0088.php">Ethan Mallove: "Re: [MTT devel] First cut at MTT web pages"</a>
<li><strong>Previous message:</strong> <a href="0086.php">Josh Hursey: "Re: [MTT devel] [MTT users]   Test runs not getting into database"</a>
<li><strong>In reply to:</strong> <a href="0086.php">Josh Hursey: "Re: [MTT devel] [MTT users]   Test runs not getting into database"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For now I put a quick hack in the /l/osl/www/www.open-mpi.org/mtt/ 
<br>
config.inc file to allow this specific BigRed server to submit. This  
<br>
will bring the BigRed runs back online until one of you can fix the  
<br>
mirror/mpi-relay issue.
<br>
<p>&lt;-------------------------&gt;
<br>
[jjhursey_at_milliways mtt] svn diff
<br>
Index: config.inc
<br>
===================================================================
<br>
--- config.inc  (revision 721)
<br>
+++ config.inc  (working copy)
<br>
@@ -3,18 +3,23 @@
<br>
# Open MPI-specific functionality: deny mirrors access to Open MPI MTT
<br>
$mother_site = &quot;www.open-mpi.org&quot;;
<br>
$server_dir = &quot;/&quot;;
<br>
+# JJH: Hack work around for BigRed which uses the mtt-relay and  
<br>
reports the
<br>
+# JJH: following name. This should be fixed by fixing the mtt-relay
<br>
+$iu_bigred_site = &quot;s10c2b3.dim&quot;;
<br>
# Are we the &quot;mother site&quot; or a mirror?  Remember that &quot;alerts.php&quot; is
<br>
# run locally as a script via cron, therefore it won't have certain
<br>
# array keys set in $_SERVER (and therefore should not be subject to
<br>
# the mirroring stuff).
<br>
if (array_key_exists(&quot;SERVER_NAME&quot;, $_SERVER) &amp;&amp;
<br>
-    $_SERVER[&quot;SERVER_NAME&quot;] != $mother_site) {
<br>
+    (0 != strncmp($_SERVER[&quot;SERVER_NAME&quot;], $mother_site, strlen 
<br>
($mother_site)) &amp;&amp;
<br>
+     0 != strncmp($_SERVER[&quot;SERVER_NAME&quot;], $iu_bigred_site, strlen 
<br>
($iu_bigred_site)) ) ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$equiv_dir = ereg_replace(&quot;^$server_dir&quot;, '', $_SERVER 
<br>
[&quot;REQUEST_URI&quot;]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print &quot;Sorry, this page is not mirrored.  &quot; .
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;Please see the &lt;a href=\&quot;<a href="http://$mother_site/$equiv_dir">http://$mother_site/$equiv_dir</a> 
<br>
\&quot;&gt;&quot; .
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;original version of this page&lt;/a&gt; &quot; .
<br>
-            &quot;on the main Open MPI web site.\n&quot;;
<br>
+           &quot;on the main Open MPI web site.\n&quot;.
<br>
+           &quot;DEBUG [&quot;.$_SERVER[&quot;SERVER_NAME&quot;].&quot;] != [&quot;.$mother_site.&quot;] 
<br>
\n&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit();
<br>
}
<br>
[jjhursey_at_milliways mtt] pwd
<br>
/l/osl/www/www.open-mpi.org/mtt
<br>
&lt;-------------------------&gt;
<br>
<p>-- Josh
<br>
<p><p>On Sep 6, 2007, at 10:25 AM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; (Off Users list for the moment)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A bit of debug output:
</span><br>
<span class="quotelev1">&gt; $_SERVER[&quot;SERVER_NAME&quot;] = s10c2b3.dim
</span><br>
<span class="quotelev1">&gt; $mother_site = www.open-mpi.org
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So it looks like the relay is doing something a bit odd. :/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 6, 2007, at 10:04 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Weird this looks like a mirror issue again. Below is some more debug
</span><br>
<span class="quotelev2">&gt;&gt; output from MTT on BigRed:
</span><br>
<span class="quotelev2">&gt;&gt; &lt;----------------------------------------&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *** Reporter initializing
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: MTTDatabase
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Initializing reporter module: MTTDatabase
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: require MTT::Reporter::MTTDatabase
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: $ret = &amp;MTT::Reporter::MTTDatabase::Init(@args)
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: XXUsernameXX
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: XXPasswordXX
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: <a href="http://s10c2b3.dim:8008/">http://s10c2b3.dim:8008/</a>
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: OMPI
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: 1
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: IU_BigRed
</span><br>
<span class="quotelev2">&gt;&gt;     Set HTTP credentials for realm &quot;OMPI&quot;
</span><br>
<span class="quotelev2">&gt;&gt; MTTDatabase getting a client serial number...
</span><br>
<span class="quotelev2">&gt;&gt; MTTDatabase trying proxy:  / Default (none)
</span><br>
<span class="quotelev2">&gt;&gt; MTTDatabase got response: Sorry, this page is not mirrored.  Please
</span><br>
<span class="quotelev2">&gt;&gt; see the
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;a href=&quot;<a href="http://www.open-mpi.org/mtt/submit/index.php">http://www.open-mpi.org/mtt/submit/index.php</a>&quot;&gt;original
</span><br>
<span class="quotelev2">&gt;&gt; version
</span><br>
<span class="quotelev2">&gt;&gt;     of this page&lt;/a&gt; on the main Open MPI web site.
</span><br>
<span class="quotelev2">&gt;&gt; *** WARNING: MTTDatabase did not get a serial
</span><br>
<span class="quotelev2">&gt;&gt; Making dir:
</span><br>
<span class="quotelev2">&gt;&gt;     /N/ptl01/mpiteam/bigred/20070906-CronTest-cron/pb_0/mttdatabase-
</span><br>
<span class="quotelev2">&gt;&gt; submit
</span><br>
<span class="quotelev2">&gt;&gt;     (cwd: /N/ptl01/mpiteam/bigred/20070906-CronTest-cron/pb_0)
</span><br>
<span class="quotelev2">&gt;&gt; &lt;----------------------------------------&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the INI file we have the following for the reporter so we can do
</span><br>
<span class="quotelev2">&gt;&gt; the redirect through the head node (s10c2b3.dim):
</span><br>
<span class="quotelev2">&gt;&gt; &lt;------------------------------------&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [Reporter: IU database]
</span><br>
<span class="quotelev2">&gt;&gt; module = MTTDatabase
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mttdatabase_realm = OMPI
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mttdatabase_url = <a href="http://s10c2b3.dim:8008/">http://s10c2b3.dim:8008/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mttdatabase_username = XXUsernameXX
</span><br>
<span class="quotelev2">&gt;&gt; mttdatabase_password = XXPasswordXX
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mttdatabase_platform = IU_BigRed
</span><br>
<span class="quotelev2">&gt;&gt; mttdatabase_keep_debug_files = 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;------------------------------------&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like IU is using the trunk version of the mtt-relay, and the
</span><br>
<span class="quotelev2">&gt;&gt; branch version of the MTT client. The mtt-relay code is the same on
</span><br>
<span class="quotelev2">&gt;&gt; both the trunk and the branch. The relay seems to be submitting to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://www.open-mpi.org/mtt/submit/index.php">https://www.open-mpi.org/mtt/submit/index.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any thoughts on why this might be happening? It looks like the mirror
</span><br>
<span class="quotelev2">&gt;&gt; check is messed up again.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 5, 2007, at 11:31 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; yeah I'll try to take a look at it tomorrow. I suspect that  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; something
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is going wrong with the relay, but I can't really think of what it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; might be at the moment.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 5, 2007, at 9:11 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Josh / Ethan --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Not getting a serial means that the client is not getting a value
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; back from the server that it can parse into a serial.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can you guys dig into this and see why the mtt dbdebug file that  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; has at the end of this message is not getting a serial?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sep 5, 2007, at 9:24 AM, Tim Prins wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Here is the smallest one. Let me know if you need anything else.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Can you send any one of those mtt database files?  We'll need to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; figure out if this is a client or a server problem.  :-(
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Sep 5, 2007, at 7:40 AM, Tim Prins wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; BigRed has not gotten its test results into the database for a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; while.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; This is running the ompi-core-testers branch. We run by passing
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; results through the mtt-relay.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; The mtt-output file has lines like:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; *** WARNING: MTTDatabase did not get a serial; phases will be
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; isolated
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; from each other in the reports
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Reported to MTTDatabase: 1 successful submit, 0 failed submits
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (total of 1 result)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I have the database submit files if they would help.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $VAR1 = {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           'exit_signal_1' =&gt; -1,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           'duration_1' =&gt; '5 seconds',
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           'mpi_version' =&gt; '1.3a1r16038',
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           'trial' =&gt; 0,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           'mpi_install_section_name_1' =&gt; 'bigred 32 bit gcc',
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           'client_serial' =&gt; undef,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           'hostname' =&gt; 's1c2b12',
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           'result_stdout_1' =&gt; '/bin/rm -f *.o *~ PI* core IMB-IO
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; IMB-EXT IMB-MPI1 exe_io exe_ext exe_mpi1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; touch IMB_declare.h
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; touch exe_mpi1 *.c; rm -rf exe_io exe_ext
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make MPI1 CPP=MPI1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[1]: Entering directory `/N/ptl01/mpiteam/bigred/20070905-
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Wednesday/pb_0/installs/d7Ri/tests/imb/IMB_2.3/src\'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_declare.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_init.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_mem_manager.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_parse_name_mpi1.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_benchlist.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_strgs.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_err_handler.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_g_info.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_warm_up.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_output.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_pingpong.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_pingping.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_allreduce.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_reduce_scatter.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_reduce.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_exchange.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_bcast.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_barrier.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_allgather.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_allgatherv.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_alltoall.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_sendrecv.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_init_transfer.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_chk_diff.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpicc  -I.  -DMPI1 -O -c IMB_cpu_exploit.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpicc   -o IMB-MPI1 IMB.o IMB_declare.o  IMB_init.o
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; IMB_mem_manager.o IMB_parse_name_mpi1.o  IMB_benchlist.o
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; IMB_strgs.o IMB_err_handler.o IMB_g_info.o  IMB_warm_up.o
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; IMB_output.o IMB_pingpong.o IMB_pingping.o IMB_allreduce.o
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; IMB_reduce_scatter.o IMB_reduce.o IMB_exchange.o IMB_bcast.o
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; IMB_barrier.o IMB_allgather.o IMB_allgatherv.o IMB_alltoall.o
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; IMB_sendrecv.o IMB_init_transfer.o  IMB_chk_diff.o
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; IMB_cpu_exploit.o
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[1]: Leaving directory `/N/ptl01/mpiteam/bigred/20070905-
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Wednesday/pb_0/installs/d7Ri/tests/imb/IMB_2.3/src\'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ',
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           'mpi_name' =&gt; 'ompi-nightly-trunk',
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           'number_of_results' =&gt; '1',
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           'phase' =&gt; 'Test Build',
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           'compiler_version_1' =&gt; '3.3.3',
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           'exit_value_1' =&gt; 0,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           'result_message_1' =&gt; 'Success',
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           'start_timestamp_1' =&gt; 'Wed Sep  5 04:16:52 2007',
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           'compiler_name_1' =&gt; 'gnu',
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           'suite_name_1' =&gt; 'imb',
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           'test_result_1' =&gt; 1,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           'mtt_client_version' =&gt; '2.1devel',
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           'fields' =&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 'compiler_name,compiler_version,duration,exit_signal,exit_value,mp 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; i
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; g
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; e
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; t_section_name,mpi_install_id,mpi_install_section_name,mpi_name,mp 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; i
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; v
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; e
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; rsion,phase,result_message,result_stdout,start_timestamp,suite_nam 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; e
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; t
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; e
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; st_result',
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           'mpi_install_id' =&gt; undef,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           'platform_name' =&gt; 'IU_BigRed',
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           'local_username' =&gt; 'mpiteam',
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           'mpi_get_section_name_1' =&gt; 'ompi-nightly-trunk'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         };
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cisco Systems
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
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
<li><strong>Next message:</strong> <a href="0088.php">Ethan Mallove: "Re: [MTT devel] First cut at MTT web pages"</a>
<li><strong>Previous message:</strong> <a href="0086.php">Josh Hursey: "Re: [MTT devel] [MTT users]   Test runs not getting into database"</a>
<li><strong>In reply to:</strong> <a href="0086.php">Josh Hursey: "Re: [MTT devel] [MTT users]   Test runs not getting into database"</a>
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
