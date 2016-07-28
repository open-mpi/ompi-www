<?
$subject_val = "Re: [MTT devel] Analysis of hung jobs.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  6 11:25:53 2009" -->
<!-- isoreceived="20091006152553" -->
<!-- sent="Tue, 6 Oct 2009 11:25:46 -0400" -->
<!-- isosent="20091006152546" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Analysis of hung jobs." -->
<!-- id="20091006152545.GN34883_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1254821028.8491.71.camel_at_alpha" -->
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
<strong>Subject:</strong> Re: [MTT devel] Analysis of hung jobs.<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-06 11:25:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0448.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>Previous message:</strong> <a href="0446.php">Ashley Pittman: "[MTT devel] Analysis of hung jobs."</a>
<li><strong>In reply to:</strong> <a href="0446.php">Ashley Pittman: "[MTT devel] Analysis of hung jobs."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0448.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>Reply:</strong> <a href="0448.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Oct/06/2009 10:23:48AM, Ashley Pittman wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Further to the mail linked below, padb is able to perform diagnostics,
</span><br>
<span class="quotelev1">&gt; including backtraces on hung jobs and integrates well into automated
</span><br>
<span class="quotelev1">&gt; testing environments.
</span><br>
<p>Can padb get a backtrace from a non-debuggable MPI (e.g., not compiled
<br>
with -g)?
<br>
<p>-Ethan
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The attached patch is a minimal change which should enable the
</span><br>
<span class="quotelev1">&gt; functionality.  I don't however have access to a working MTT
</span><br>
<span class="quotelev1">&gt; installation to test this however.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/mtt-devel/2009/06/0415.php">http://www.open-mpi.org/community/lists/mtt-devel/2009/06/0415.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This will require a HEAD version of padb, at least r273 to allow it to
</span><br>
<span class="quotelev1">&gt; accept the pid of mpirun rather than a jobid assigned by the underlying
</span><br>
<span class="quotelev1">&gt; resource manager.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yours,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley Pittman, Bath, UK.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Padb - A parallel job inspection tool for cluster computing
</span><br>
<span class="quotelev1">&gt; <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</span><br>
<p><span class="quotelev1">&gt; Index: lib/MTT/DoCommand.pm
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- lib/MTT/DoCommand.pm	(revision 1322)
</span><br>
<span class="quotelev1">&gt; +++ lib/MTT/DoCommand.pm	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -359,6 +359,7 @@
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      my $killed_status = undef;
</span><br>
<span class="quotelev1">&gt;      my $last_over = 0;
</span><br>
<span class="quotelev1">&gt; +    my $padb_output;
</span><br>
<span class="quotelev1">&gt;      while ($done &gt; 0) {
</span><br>
<span class="quotelev1">&gt;          my $nfound = select($rout = $rin, undef, undef, $t);
</span><br>
<span class="quotelev1">&gt;          if (vec($rout, fileno(OUTread), 1) == 1) {
</span><br>
<span class="quotelev1">&gt; @@ -410,6 +411,8 @@
</span><br>
<span class="quotelev1">&gt;                  my $timeout_email_recipient = $MTT::Globals::Values-&gt;{docommand_timeout_notify_email};
</span><br>
<span class="quotelev1">&gt;                  my $timeout_notify_timeout  = $MTT::Globals::Values-&gt;{docommand_timeout_notify_timeout};
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +		$padb_output = `padb --config-option rmgr=mpirun --full-report=$pid`;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;                  if (defined($timeout_sentinel_file)) {
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;                      # Email someone, if an email address has been specified
</span><br>
<span class="quotelev1">&gt; @@ -493,6 +496,9 @@
</span><br>
<span class="quotelev1">&gt;      # Return an anonymous hash containing the relevant data
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      $ret-&gt;{result_stdout} = join('', @out);
</span><br>
<span class="quotelev1">&gt; +    if ( defined $padb_output ) {
</span><br>
<span class="quotelev1">&gt; +      $ret-&gt;{result_stdout} .= &quot;\n$padb_output&quot;;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt;      $ret-&gt;{result_stderr} = join('', @err),
</span><br>
<span class="quotelev1">&gt;          if (!$merge_output);
</span><br>
<span class="quotelev1">&gt;      return $ret;
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="0448.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>Previous message:</strong> <a href="0446.php">Ashley Pittman: "[MTT devel] Analysis of hung jobs."</a>
<li><strong>In reply to:</strong> <a href="0446.php">Ashley Pittman: "[MTT devel] Analysis of hung jobs."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0448.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>Reply:</strong> <a href="0448.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
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
