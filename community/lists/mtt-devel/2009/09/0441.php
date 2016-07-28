<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1320";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 29 14:35:30 2009" -->
<!-- isoreceived="20090929183530" -->
<!-- sent="Tue, 29 Sep 2009 14:35:18 -0400" -->
<!-- isosent="20090929183518" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1320" -->
<!-- id="20090929183517.GI34883_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="200909291234.n8TCYiL8031088_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [MTT devel] [MTT svn] svn:mtt-svn r1320<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-29 14:35:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0442.php">Mike Dubman: "[MTT devel] MTToGDS"</a>
<li><strong>Previous message:</strong> <a href="0440.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0444.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1320"</a>
<li><strong>Reply:</strong> <a href="0444.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1320"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Should &amp;shell() be deprecated? It looks awfully similar to
<br>
&amp;executable().
<br>
<p>-Ethan
<br>
<p>On Tue, Sep/29/2009 08:34:44AM, miked_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Author: miked
</span><br>
<span class="quotelev1">&gt; Date: 2009-09-29 08:34:44 EDT (Tue, 29 Sep 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 1320
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1320">https://svn.open-mpi.org/trac/mtt/changeset/1320</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; applied Jeff,Ethan comments:
</span><br>
<span class="quotelev1">&gt; 1. rename on_stop,on_start to after_mtt_start_exec, before_mtt_start_exec
</span><br>
<span class="quotelev1">&gt; 2. treat *_mtt_start_exec params in the same way like others before/after_* params 
</span><br>
<span class="quotelev1">&gt; 3. rename shell_script to executable
</span><br>
<span class="quotelev1">&gt; 4. fix DoCommand:CmdScript() to recognize shebang chars and do not add &quot;:\n&quot; if #!.... is present
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;    trunk/client/mtt                  |    15 +++++++++++++--                         
</span><br>
<span class="quotelev1">&gt;    trunk/lib/MTT/DoCommand.pm        |     5 +++--                                   
</span><br>
<span class="quotelev1">&gt;    trunk/lib/MTT/Values/Functions.pm |     2 +-                                      
</span><br>
<span class="quotelev1">&gt;    3 files changed, 17 insertions(+), 5 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/client/mtt
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/client/mtt	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/client/mtt	2009-09-29 08:34:44 EDT (Tue, 29 Sep 2009)
</span><br>
<span class="quotelev1">&gt; @@ -496,7 +496,8 @@
</span><br>
<span class="quotelev1">&gt;      MTT::Lock::Init($ini);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      # execute on_start callback if exists
</span><br>
<span class="quotelev1">&gt; -    _process_get_value_option(&quot;mtt,on_start&quot;, $ini);
</span><br>
<span class="quotelev1">&gt; +	_do_step($ini, &quot;mtt&quot;, &quot;before_mtt_start_exec&quot;);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      # Set the logfile, if specified
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; @@ -565,7 +566,7 @@
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      # execute on_stop callback if exists
</span><br>
<span class="quotelev1">&gt; -    _process_get_value_option(&quot;mtt,on_stop&quot;, $ini);
</span><br>
<span class="quotelev1">&gt; +	_do_step($ini, &quot;mtt&quot;, &quot;after_mtt_start_exec&quot;);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      # Shut down locks
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; @@ -737,3 +738,13 @@
</span><br>
<span class="quotelev1">&gt;          print &quot;$value\n&quot;;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# Run cmd, specified in the non Test* sections
</span><br>
<span class="quotelev1">&gt; +sub _do_step {
</span><br>
<span class="quotelev1">&gt; +	my ($ini, $section,$param) = @_;
</span><br>
<span class="quotelev1">&gt; +	my $cmd = $ini-&gt;val($section, $param);
</span><br>
<span class="quotelev1">&gt; +	if ( defined $cmd ) {
</span><br>
<span class="quotelev1">&gt; +		my $x = MTT::DoCommand::RunStep(1, $cmd, -1, $ini, $section, $param);
</span><br>
<span class="quotelev1">&gt; +		Verbose(&quot;  Output: $x-&gt;{result_stdout}\n&quot;)
</span><br>
<span class="quotelev1">&gt; +	}
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/DoCommand.pm
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/DoCommand.pm	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/DoCommand.pm	2009-09-29 08:34:44 EDT (Tue, 29 Sep 2009)
</span><br>
<span class="quotelev1">&gt; @@ -794,9 +794,10 @@
</span><br>
<span class="quotelev1">&gt;      # protects against a common funclet syntax error.
</span><br>
<span class="quotelev1">&gt;      # We can safely do this since &quot;foo&quot; (literally, with
</span><br>
<span class="quotelev1">&gt;      # quotes included) would never be a valid shell command.
</span><br>
<span class="quotelev1">&gt; -    $cmds =~ s/\&quot;$//
</span><br>
<span class="quotelev1">&gt; -        if ($cmds =~ s/^\&quot;//);
</span><br>
<span class="quotelev1">&gt; +    $cmds =~ s/\&quot;$// if ($cmds =~ s/^\&quot;//);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +	print $fh &quot;:\n&quot; if ($cmds !~ /^\s*\#\!/); # no shell specified - use default
</span><br>
<span class="quotelev1">&gt;      print $fh &quot;$cmds\n&quot;;
</span><br>
<span class="quotelev1">&gt;      close($fh);
</span><br>
<span class="quotelev1">&gt;      chmod(0700, $filename);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/Values/Functions.pm
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/Values/Functions.pm	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/Values/Functions.pm	2009-09-29 08:34:44 EDT (Tue, 29 Sep 2009)
</span><br>
<span class="quotelev1">&gt; @@ -3038,7 +3038,7 @@
</span><br>
<span class="quotelev1">&gt;  # 
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -sub shell_script {
</span><br>
<span class="quotelev1">&gt; +sub executable {
</span><br>
<span class="quotelev1">&gt;  	my ($cmd_section, $cmd_param) = @_;
</span><br>
<span class="quotelev1">&gt;  	my $cmd = &amp;get_ini_val($cmd_section, $cmd_param);
</span><br>
<span class="quotelev1">&gt;  	my $x = MTT::DoCommand::CmdScript(1, $cmd);
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-svn mailing list
</span><br>
<span class="quotelev1">&gt; mtt-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0442.php">Mike Dubman: "[MTT devel] MTToGDS"</a>
<li><strong>Previous message:</strong> <a href="0440.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0444.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1320"</a>
<li><strong>Reply:</strong> <a href="0444.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1320"</a>
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
