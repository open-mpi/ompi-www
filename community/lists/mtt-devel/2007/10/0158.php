<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 15 11:42:08 2007" -->
<!-- isoreceived="20071015154208" -->
<!-- sent="Mon, 15 Oct 2007 11:42:04 -0400" -->
<!-- isosent="20071015154204" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT server error (user: uh)" -->
<!-- id="AD10BC81-E298-4B25-BD68-6B03AE9A713A_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200710151537.l9FFbXou026547_at_milliways.osl.iu.edu" -->
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
<strong>Date:</strong> 2007-10-15 11:42:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0159.php">Mohamad Chaarawi: "Re: [MTT devel] MTT server error (user: uh)"</a>
<li><strong>Previous message:</strong> <a href="0157.php">Josh Hursey: "Re: [MTT devel] Adding libnbc performance Performance Analyze module for MTT"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2007/09/0105.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: uh)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0159.php">Mohamad Chaarawi: "Re: [MTT devel] MTT server error (user: uh)"</a>
<li><strong>Reply:</strong> <a href="0159.php">Mohamad Chaarawi: "Re: [MTT devel] MTT server error (user: uh)"</a>
<li><strong>Reply:</strong> <a href="0160.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: uh)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm getting the following from 'uh'. The problem is that they supply  
<br>
'-np' with no argument. The submit script is rejecting the submit, so  
<br>
the database is fine. I think this is a user problem, but it kind of  
<br>
looks like a client problem.
<br>
<p>Thought I would post to see if anyone has any thoughts.
<br>
<p>-- Josh
<br>
<p>On Oct 15, 2007, at 11:37 AM, jjhursey_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SQL QUERY: INSERT INTO test_run
</span><br>
<span class="quotelev1">&gt; 	(test_run_id, submit_id, compute_cluster_id,  
</span><br>
<span class="quotelev1">&gt; mpi_install_compiler_id, mpi_get_id, mpi_install_configure_id,  
</span><br>
<span class="quotelev1">&gt; mpi_install_id, test_suite_id, test_build_compiler_id,  
</span><br>
<span class="quotelev1">&gt; test_build_id, test_name_id, performance_id, test_run_command_id,  
</span><br>
<span class="quotelev1">&gt; np, full_command, description_id, start_timestamp, test_result,  
</span><br>
<span class="quotelev1">&gt; trial, submit_timestamp, duration, environment_id, result_stdout,  
</span><br>
<span class="quotelev1">&gt; result_stderr, result_message_id, merge_stdout_stderr, exit_value,  
</span><br>
<span class="quotelev1">&gt; exit_signal, client_serial) VALUES
</span><br>
<span class="quotelev1">&gt; 	('25748604', '3227', '141', '37', '602', '567', '13687', '4',  
</span><br>
<span class="quotelev1">&gt; '37', '60596', '700', '0', '2', '', 'mpirun  -np  --mca btl self,sm  
</span><br>
<span class="quotelev1">&gt; --prefix /home/mschaara/mtt-testing/scratch/scratch2/installs/lAQN/ 
</span><br>
<span class="quotelev1">&gt; install src/IMB-MPI1 -npmin  PingPong', '0', 'Mon Oct 15 15:37:29  
</span><br>
<span class="quotelev1">&gt; 2007', '0', '1', DEFAULT, '0 seconds', '0',  
</span><br>
<span class="quotelev1">&gt; '--------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; mpirun was unable to launch the specified application as it could  
</span><br>
<span class="quotelev1">&gt; not find an executable:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Executable: btl
</span><br>
<span class="quotelev1">&gt; Node: shark01
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; while attempting to start process rank 0.
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; 3 additional processes aborted (not shown)
</span><br>
<span class="quotelev1">&gt; ', '', '82', DEFAULT, '1', '-1', '10200')
</span><br>
<span class="quotelev1">&gt; SQL ERROR: ERROR:  invalid input syntax for integer: &quot;&quot;
</span><br>
<span class="quotelev1">&gt; SQL ERROR:
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0159.php">Mohamad Chaarawi: "Re: [MTT devel] MTT server error (user: uh)"</a>
<li><strong>Previous message:</strong> <a href="0157.php">Josh Hursey: "Re: [MTT devel] Adding libnbc performance Performance Analyze module for MTT"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2007/09/0105.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: uh)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0159.php">Mohamad Chaarawi: "Re: [MTT devel] MTT server error (user: uh)"</a>
<li><strong>Reply:</strong> <a href="0159.php">Mohamad Chaarawi: "Re: [MTT devel] MTT server error (user: uh)"</a>
<li><strong>Reply:</strong> <a href="0160.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: uh)"</a>
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
