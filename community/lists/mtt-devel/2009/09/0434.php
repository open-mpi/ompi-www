<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 24 12:46:47 2009" -->
<!-- isoreceived="20090924164647" -->
<!-- sent="Thu, 24 Sep 2009 19:46:40 +0300" -->
<!-- isosent="20090924164640" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1319" -->
<!-- id="b20b52800909240946p14e62f03y20987d902a40a48_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6275EF87-4D4B-4519-B555-399E6C5FFDD9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] [MTT svn] svn:mtt-svn r1319<br>
<strong>From:</strong> Mike Dubman (<em>mike.ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-24 12:46:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0435.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<li><strong>Previous message:</strong> <a href="0433.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<li><strong>In reply to:</strong> <a href="0433.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0435.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<li><strong>Reply:</strong> <a href="0435.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<li><strong>Reply:</strong> <a href="0436.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey Jeff,
<br>
<p>On Thu, Sep 24, 2009 at 4:02 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The DoCommand.pm sub added &quot;:\n&quot; to the beginning to force the Bourne shell
</span><br>
<span class="quotelev1">&gt; interpreter.  This is necessary for some cases where an interpreter is not
</span><br>
<span class="quotelev1">&gt; otherwise specified.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Im not familiar with :\n semantics, how does it force Bourne shell and what
<br>
it actually does :)? (seems like leftovers from 1960....)
<br>
I think when interpreter is not explicitly specified - the default user`s
<br>
shell is used.
<br>
see in the DoCommand::Cmd() ..... it check the buffer`s  first line for
<br>
#!/... semantic and if found - saves buffer to file, adds +x perm,  and just
<br>
executes it as a regular script.
<br>
<p>When I passed a buffer with shell commands but 1st line was not #!/bin/sh -
<br>
it  failed with syntax errors.
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see why you did it -- you want the ability to add your own interpreter in
</span><br>
<span class="quotelev1">&gt; &amp;shell_script().  Why not either make a parameter to add the &quot;:\n&quot; or not,
</span><br>
<span class="quotelev1">&gt; or better yet, have DoCommand.pm analyze the beginning of the string and if
</span><br>
<span class="quotelev1">&gt; it contains &quot;^:\n&quot; or &quot;^#!&quot;, then don't add anything.  But if it doesn't
</span><br>
<span class="quotelev1">&gt; contain either of those, then prefix it with &quot;:\n&quot;.
</span><br>
<p><p><span class="quotelev1">&gt; How does that sound?
</span><br>
<span class="quotelev1">&gt;
</span><br>
sounds good!
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, is &quot;&amp;shell_script()&quot; a good name?  If you can specify your own
</span><br>
<span class="quotelev1">&gt; interpreter, it might not be a shell script.  How about &amp;executable()?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ok - &amp;executable() it will be!
</span><br>
<p><p>regards
<br>
<p>Mike
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 24, 2009, at 8:06 AM, miked_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Author: miked
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2009-09-24 08:06:04 EDT (Thu, 24 Sep 2009)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 1319
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1319">https://svn.open-mpi.org/trac/mtt/changeset/1319</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; bug fix: CmdScript() - no need to add extra chars &quot;\n:&quot; to the start of
</span><br>
<span class="quotelev2">&gt;&gt; shell script file
</span><br>
<span class="quotelev2">&gt;&gt; new funclet: shell_script(section,param)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/lib/MTT/DoCommand.pm        |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/lib/MTT/Values/Functions.pm |    19 +++++++++++++++++++
</span><br>
<span class="quotelev2">&gt;&gt;  2 files changed, 20 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/lib/MTT/DoCommand.pm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/lib/MTT/DoCommand.pm  (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/lib/MTT/DoCommand.pm  2009-09-24 08:06:04 EDT (Thu, 24 Sep 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -797,7 +797,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    $cmds =~ s/\&quot;$//
</span><br>
<span class="quotelev2">&gt;&gt;        if ($cmds =~ s/^\&quot;//);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -    print $fh &quot;:\n$cmds\n&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; +    print $fh &quot;$cmds\n&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;    close($fh);
</span><br>
<span class="quotelev2">&gt;&gt;    chmod(0700, $filename);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/lib/MTT/Values/Functions.pm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/lib/MTT/Values/Functions.pm   (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/lib/MTT/Values/Functions.pm   2009-09-24 08:06:04 EDT (Thu, 24
</span><br>
<span class="quotelev2">&gt;&gt; Sep 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -3026,4 +3026,23 @@
</span><br>
<span class="quotelev2">&gt;&gt;    return md5_hex($str);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +# Run shell commands as a script, i.e
</span><br>
<span class="quotelev2">&gt;&gt; +#
</span><br>
<span class="quotelev2">&gt;&gt; +# [mtt]
</span><br>
<span class="quotelev2">&gt;&gt; +# myscript=&lt;&lt;EOT
</span><br>
<span class="quotelev2">&gt;&gt; +# #!/bin/sh
</span><br>
<span class="quotelev2">&gt;&gt; +# pwd
</span><br>
<span class="quotelev2">&gt;&gt; +# ls
</span><br>
<span class="quotelev2">&gt;&gt; +# EOT
</span><br>
<span class="quotelev2">&gt;&gt; +# on_stop=&amp;shell_script(&quot;mtt&quot;,myscript)
</span><br>
<span class="quotelev2">&gt;&gt; +#
</span><br>
<span class="quotelev2">&gt;&gt; +#
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +sub shell_script {
</span><br>
<span class="quotelev2">&gt;&gt; +       my ($cmd_section, $cmd_param) = @_;
</span><br>
<span class="quotelev2">&gt;&gt; +       my $cmd = &amp;get_ini_val($cmd_section, $cmd_param);
</span><br>
<span class="quotelev2">&gt;&gt; +       my $x = MTT::DoCommand::CmdScript(1, $cmd);
</span><br>
<span class="quotelev2">&gt;&gt; +       return $x-&gt;{result_stdout};
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; 1;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0434/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0435.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<li><strong>Previous message:</strong> <a href="0433.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<li><strong>In reply to:</strong> <a href="0433.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0435.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<li><strong>Reply:</strong> <a href="0435.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<li><strong>Reply:</strong> <a href="0436.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
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
