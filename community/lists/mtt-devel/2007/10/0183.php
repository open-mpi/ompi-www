<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Oct 27 07:47:25 2007" -->
<!-- isoreceived="20071027114725" -->
<!-- sent="Sat, 27 Oct 2007 07:47:14 -0400" -->
<!-- isosent="20071027114714" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT server error (user: ibm)" -->
<!-- id="0155A08B-F9C4-4DB8-A60E-64788E5F9B20_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200710270715.l9R7FvC4022461_at_milliways.osl.iu.edu" -->
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
<strong>Date:</strong> 2007-10-27 07:47:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0184.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: ibm)"</a>
<li><strong>Previous message:</strong> <a href="0182.php">Jeff Squyres: "[MTT devel] nbcbench output format changed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0184.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: ibm)"</a>
<li><strong>Reply:</strong> <a href="0184.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: ibm)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like the runs from IBM forgot to send along a client_serial  
<br>
for MPI Install in last nights runs. Any idea why the client might  
<br>
allow that to happen?
<br>
<p>-- Josh
<br>
<p>On Oct 27, 2007, at 3:15 AM, jjhursey_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SQL QUERY: INSERT INTO mpi_install
</span><br>
<span class="quotelev1">&gt; 	(mpi_install_id, submit_id, compute_cluster_id,  
</span><br>
<span class="quotelev1">&gt; mpi_install_compiler_id, mpi_get_id, mpi_install_configure_id,  
</span><br>
<span class="quotelev1">&gt; description_id, start_timestamp, test_result, trial,  
</span><br>
<span class="quotelev1">&gt; submit_timestamp, duration, environment_id, result_stdout,  
</span><br>
<span class="quotelev1">&gt; result_stderr, result_message_id, merge_stdout_stderr, exit_value,  
</span><br>
<span class="quotelev1">&gt; exit_signal, client_serial) VALUES
</span><br>
<span class="quotelev1">&gt; 	('14464', '2280', '122', '9', '622', '108', '0', 'Sat Oct 27  
</span><br>
<span class="quotelev1">&gt; 07:08:59 2007', '1', '0', DEFAULT, '417 seconds', '0', DEFAULT,  
</span><br>
<span class="quotelev1">&gt; '--- &quot;make all&quot; result_stderr ---
</span><br>
<span class="quotelev1">&gt; keyval_lex.c:1673: warning: `yy_flex_realloc'' defined but not used
</span><br>
<span class="quotelev1">&gt; show_help_lex.c:1610: warning: `yy_flex_realloc'' defined but not used
</span><br>
<span class="quotelev1">&gt; btl_openib_lex.c:1740: warning: `yy_flex_realloc'' defined but not  
</span><br>
<span class="quotelev1">&gt; used
</span><br>
<span class="quotelev1">&gt; ', '1', '0', '0', '-1', '')
</span><br>
<span class="quotelev1">&gt; SQL ERROR: ERROR:  invalid input syntax for integer: &quot;&quot;
</span><br>
<span class="quotelev1">&gt; SQL ERROR:
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0184.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: ibm)"</a>
<li><strong>Previous message:</strong> <a href="0182.php">Jeff Squyres: "[MTT devel] nbcbench output format changed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0184.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: ibm)"</a>
<li><strong>Reply:</strong> <a href="0184.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: ibm)"</a>
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
