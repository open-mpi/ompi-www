<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1320";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 30 14:05:41 2009" -->
<!-- isoreceived="20090930180541" -->
<!-- sent="Wed, 30 Sep 2009 20:05:36 +0200" -->
<!-- isosent="20090930180536" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1320" -->
<!-- id="b20b52800909301105j5d137f62p1dd3fc00fa36bf9a_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20090929183517.GI34883_at_sun.com" -->
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
<strong>From:</strong> Mike Dubman (<em>mike.ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-30 14:05:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0445.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Previous message:</strong> <a href="0443.php">Ethan Mallove: "Re: [MTT devel] MTToGDS"</a>
<li><strong>In reply to:</strong> <a href="0441.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1320"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
it seems it can be retired. executable() covers more cases.
<br>
shell() can be the alias of executable() for backwards compatibility.
<br>
<p>Also, DoCommand::CmdScript should be changed to DoCommand::Cmd inside
<br>
executable() to really cover more cases.
<br>
regards
<br>
<p>Mike
<br>
<p>On Tue, Sep 29, 2009 at 8:35 PM, Ethan Mallove &lt;ethan.mallove_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Should &amp;shell() be deprecated? It looks awfully similar to
</span><br>
<span class="quotelev1">&gt; &amp;executable().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Sep/29/2009 08:34:44AM, miked_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Author: miked
</span><br>
<span class="quotelev2">&gt; &gt; Date: 2009-09-29 08:34:44 EDT (Tue, 29 Sep 2009)
</span><br>
<span class="quotelev2">&gt; &gt; New Revision: 1320
</span><br>
<span class="quotelev2">&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1320">https://svn.open-mpi.org/trac/mtt/changeset/1320</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Log:
</span><br>
<span class="quotelev2">&gt; &gt; applied Jeff,Ethan comments:
</span><br>
<span class="quotelev2">&gt; &gt; 1. rename on_stop,on_start to after_mtt_start_exec, before_mtt_start_exec
</span><br>
<span class="quotelev2">&gt; &gt; 2. treat *_mtt_start_exec params in the same way like others
</span><br>
<span class="quotelev1">&gt; before/after_* params
</span><br>
<span class="quotelev2">&gt; &gt; 3. rename shell_script to executable
</span><br>
<span class="quotelev2">&gt; &gt; 4. fix DoCommand:CmdScript() to recognize shebang chars and do not add
</span><br>
<span class="quotelev1">&gt; &quot;:\n&quot; if #!.... is present
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Text files modified:
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/client/mtt                  |    15 +++++++++++++--
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/lib/MTT/DoCommand.pm        |     5 +++--
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/lib/MTT/Values/Functions.pm |     2 +-
</span><br>
<span class="quotelev2">&gt; &gt;    3 files changed, 17 insertions(+), 5 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/client/mtt
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/client/mtt  (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/client/mtt  2009-09-29 08:34:44 EDT (Tue, 29 Sep 2009)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -496,7 +496,8 @@
</span><br>
<span class="quotelev2">&gt; &gt;      MTT::Lock::Init($ini);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      # execute on_start callback if exists
</span><br>
<span class="quotelev2">&gt; &gt; -    _process_get_value_option(&quot;mtt,on_start&quot;, $ini);
</span><br>
<span class="quotelev2">&gt; &gt; +     _do_step($ini, &quot;mtt&quot;, &quot;before_mtt_start_exec&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      # Set the logfile, if specified
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -565,7 +566,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;      }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      # execute on_stop callback if exists
</span><br>
<span class="quotelev2">&gt; &gt; -    _process_get_value_option(&quot;mtt,on_stop&quot;, $ini);
</span><br>
<span class="quotelev2">&gt; &gt; +     _do_step($ini, &quot;mtt&quot;, &quot;after_mtt_start_exec&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      # Shut down locks
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -737,3 +738,13 @@
</span><br>
<span class="quotelev2">&gt; &gt;          print &quot;$value\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt;      }
</span><br>
<span class="quotelev2">&gt; &gt;  }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +# Run cmd, specified in the non Test* sections
</span><br>
<span class="quotelev2">&gt; &gt; +sub _do_step {
</span><br>
<span class="quotelev2">&gt; &gt; +     my ($ini, $section,$param) = @_;
</span><br>
<span class="quotelev2">&gt; &gt; +     my $cmd = $ini-&gt;val($section, $param);
</span><br>
<span class="quotelev2">&gt; &gt; +     if ( defined $cmd ) {
</span><br>
<span class="quotelev2">&gt; &gt; +             my $x = MTT::DoCommand::RunStep(1, $cmd, -1, $ini,
</span><br>
<span class="quotelev1">&gt; $section, $param);
</span><br>
<span class="quotelev2">&gt; &gt; +             Verbose(&quot;  Output: $x-&gt;{result_stdout}\n&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; +     }
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/lib/MTT/DoCommand.pm
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/lib/MTT/DoCommand.pm        (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/lib/MTT/DoCommand.pm        2009-09-29 08:34:44 EDT (Tue, 29
</span><br>
<span class="quotelev1">&gt; Sep 2009)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -794,9 +794,10 @@
</span><br>
<span class="quotelev2">&gt; &gt;      # protects against a common funclet syntax error.
</span><br>
<span class="quotelev2">&gt; &gt;      # We can safely do this since &quot;foo&quot; (literally, with
</span><br>
<span class="quotelev2">&gt; &gt;      # quotes included) would never be a valid shell command.
</span><br>
<span class="quotelev2">&gt; &gt; -    $cmds =~ s/\&quot;$//
</span><br>
<span class="quotelev2">&gt; &gt; -        if ($cmds =~ s/^\&quot;//);
</span><br>
<span class="quotelev2">&gt; &gt; +    $cmds =~ s/\&quot;$// if ($cmds =~ s/^\&quot;//);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +     print $fh &quot;:\n&quot; if ($cmds !~ /^\s*\#\!/); # no shell specified -
</span><br>
<span class="quotelev1">&gt; use default
</span><br>
<span class="quotelev2">&gt; &gt;      print $fh &quot;$cmds\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt;      close($fh);
</span><br>
<span class="quotelev2">&gt; &gt;      chmod(0700, $filename);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/lib/MTT/Values/Functions.pm
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/lib/MTT/Values/Functions.pm (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/lib/MTT/Values/Functions.pm 2009-09-29 08:34:44 EDT (Tue, 29
</span><br>
<span class="quotelev1">&gt; Sep 2009)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -3038,7 +3038,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;  #
</span><br>
<span class="quotelev2">&gt; &gt;  #
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -sub shell_script {
</span><br>
<span class="quotelev2">&gt; &gt; +sub executable {
</span><br>
<span class="quotelev2">&gt; &gt;       my ($cmd_section, $cmd_param) = @_;
</span><br>
<span class="quotelev2">&gt; &gt;       my $cmd = &amp;get_ini_val($cmd_section, $cmd_param);
</span><br>
<span class="quotelev2">&gt; &gt;       my $x = MTT::DoCommand::CmdScript(1, $cmd);
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-svn mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0444/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0445.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Previous message:</strong> <a href="0443.php">Ethan Mallove: "Re: [MTT devel] MTToGDS"</a>
<li><strong>In reply to:</strong> <a href="0441.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1320"</a>
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
