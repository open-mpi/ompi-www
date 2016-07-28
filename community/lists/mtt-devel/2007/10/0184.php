<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Oct 27 08:00:37 2007" -->
<!-- isoreceived="20071027120037" -->
<!-- sent="Sat, 27 Oct 2007 08:00:23 -0400" -->
<!-- isosent="20071027120023" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT server error (user: ibm)" -->
<!-- id="6699A3F7-0FF4-47BB-A0B3-FC82D5B5FD99_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="0155A08B-F9C4-4DB8-A60E-64788E5F9B20_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-27 08:00:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2007/11/0185.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1094 (for review)"</a>
<li><strong>Previous message:</strong> <a href="0183.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: ibm)"</a>
<li><strong>In reply to:</strong> <a href="0183.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: ibm)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm.  That should only happen if a previous submit failed.
<br>
<p><p>On Oct 27, 2007, at 7:47 AM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; It looks like the runs from IBM forgot to send along a client_serial
</span><br>
<span class="quotelev1">&gt; for MPI Install in last nights runs. Any idea why the client might
</span><br>
<span class="quotelev1">&gt; allow that to happen?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 27, 2007, at 3:15 AM, jjhursey_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; SQL QUERY: INSERT INTO mpi_install
</span><br>
<span class="quotelev2">&gt;&gt; 	(mpi_install_id, submit_id, compute_cluster_id,
</span><br>
<span class="quotelev2">&gt;&gt; mpi_install_compiler_id, mpi_get_id, mpi_install_configure_id,
</span><br>
<span class="quotelev2">&gt;&gt; description_id, start_timestamp, test_result, trial,
</span><br>
<span class="quotelev2">&gt;&gt; submit_timestamp, duration, environment_id, result_stdout,
</span><br>
<span class="quotelev2">&gt;&gt; result_stderr, result_message_id, merge_stdout_stderr, exit_value,
</span><br>
<span class="quotelev2">&gt;&gt; exit_signal, client_serial) VALUES
</span><br>
<span class="quotelev2">&gt;&gt; 	('14464', '2280', '122', '9', '622', '108', '0', 'Sat Oct 27
</span><br>
<span class="quotelev2">&gt;&gt; 07:08:59 2007', '1', '0', DEFAULT, '417 seconds', '0', DEFAULT,
</span><br>
<span class="quotelev2">&gt;&gt; '--- &quot;make all&quot; result_stderr ---
</span><br>
<span class="quotelev2">&gt;&gt; keyval_lex.c:1673: warning: `yy_flex_realloc'' defined but not used
</span><br>
<span class="quotelev2">&gt;&gt; show_help_lex.c:1610: warning: `yy_flex_realloc'' defined but not  
</span><br>
<span class="quotelev2">&gt;&gt; used
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_lex.c:1740: warning: `yy_flex_realloc'' defined but not
</span><br>
<span class="quotelev2">&gt;&gt; used
</span><br>
<span class="quotelev2">&gt;&gt; ', '1', '0', '0', '-1', '')
</span><br>
<span class="quotelev2">&gt;&gt; SQL ERROR: ERROR:  invalid input syntax for integer: &quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; SQL ERROR:
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2007/11/0185.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1094 (for review)"</a>
<li><strong>Previous message:</strong> <a href="0183.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: ibm)"</a>
<li><strong>In reply to:</strong> <a href="0183.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: ibm)"</a>
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
