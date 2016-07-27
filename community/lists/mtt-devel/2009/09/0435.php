<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 24 15:09:07 2009" -->
<!-- isoreceived="20090924190907" -->
<!-- sent="Thu, 24 Sep 2009 15:09:02 -0400" -->
<!-- isosent="20090924190902" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1319" -->
<!-- id="20090924190901.GG34886_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="b20b52800909240946p14e62f03y20987d902a40a48_at_mail.gmail.com" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-24 15:09:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0436.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<li><strong>Previous message:</strong> <a href="0434.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<li><strong>In reply to:</strong> <a href="0434.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0437.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<li><strong>Reply:</strong> <a href="0437.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think on_stop should conform more to these params:
<br>
<p>&nbsp;&nbsp;after_each_exec
<br>
&nbsp;&nbsp;before_any_exec
<br>
&nbsp;&nbsp;after_all_exec
<br>
<p>E.g.,
<br>
<p>&nbsp;&nbsp;before_mtt_start_exec
<br>
&nbsp;&nbsp;after_mtt_start_exec
<br>
<p>Then have &amp;_process_get_value_option() call DoCommand. Note, DoCommand
<br>
is aware of hashbangs (see &amp;_contains_shell_script_characters()), so
<br>
&amp;shell_script() might be redundant.
<br>
<p>-Ethan
<br>
<p><p>On Thu, Sep/24/2009 07:46:40PM, Mike Dubman wrote:
<br>
<span class="quotelev1">&gt;    Hey Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    On Thu, Sep 24, 2009 at 4:02 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      The DoCommand.pm sub added &quot;:\n&quot; to the beginning to force the Bourne
</span><br>
<span class="quotelev1">&gt;      shell interpreter. *This is necessary for some cases where an
</span><br>
<span class="quotelev1">&gt;      interpreter is not otherwise specified.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Im not familiar with :\n semantics, how does it force Bourne shell and
</span><br>
<span class="quotelev1">&gt;    what it actually does :)? (seems like leftovers from 1960....)
</span><br>
<span class="quotelev1">&gt;    I think when interpreter is not explicitly specified - the default user`s
</span><br>
<span class="quotelev1">&gt;    shell is used.
</span><br>
<span class="quotelev1">&gt;    see in the DoCommand::Cmd() ..... it check the buffer`s* first line for
</span><br>
<span class="quotelev1">&gt;    #!/... semantic and if found - saves buffer to file, adds +x perm,* and
</span><br>
<span class="quotelev1">&gt;    just executes it as a regular script.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    When I passed a buffer with shell commands but 1st line was not #!/bin/sh
</span><br>
<span class="quotelev1">&gt;    - it* failed with syntax errors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    *
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      I see why you did it -- you want the ability to add your own interpreter
</span><br>
<span class="quotelev1">&gt;      in &amp;shell_script(). *Why not either make a parameter to add the &quot;:\n&quot; or
</span><br>
<span class="quotelev1">&gt;      not, or better yet, have DoCommand.pm analyze the beginning of the
</span><br>
<span class="quotelev1">&gt;      string and if it contains &quot;^:\n&quot; or &quot;^#!&quot;, then don't add anything. *But
</span><br>
<span class="quotelev1">&gt;      if it doesn't contain either of those, then prefix it with &quot;:\n&quot;.*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      How does that sound?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    sounds good!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Also, is &quot;&amp;shell_script()&quot; a good name? *If you can specify your own
</span><br>
<span class="quotelev1">&gt;      interpreter, it might not be a shell script. *How about &amp;executable()?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    ok - &amp;executable() it will be!
</span><br>
<span class="quotelev1">&gt;    *
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Mike
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      On Sep 24, 2009, at 8:06 AM, miked_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Author: miked
</span><br>
<span class="quotelev1">&gt;        Date: 2009-09-24 08:06:04 EDT (Thu, 24 Sep 2009)
</span><br>
<span class="quotelev1">&gt;        New Revision: 1319
</span><br>
<span class="quotelev1">&gt;        URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1319">https://svn.open-mpi.org/trac/mtt/changeset/1319</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Log:
</span><br>
<span class="quotelev1">&gt;        bug fix: CmdScript() - no need to add extra chars &quot;\n:&quot; to the start
</span><br>
<span class="quotelev1">&gt;        of shell script file
</span><br>
<span class="quotelev1">&gt;        new funclet: shell_script(section,param)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Text files modified:
</span><br>
<span class="quotelev1">&gt;        *trunk/lib/MTT/DoCommand.pm * * * *| * * 2 +-
</span><br>
<span class="quotelev1">&gt;        *trunk/lib/MTT/Values/Functions.pm | * *19 +++++++++++++++++++
</span><br>
<span class="quotelev1">&gt;        *2 files changed, 20 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Modified: trunk/lib/MTT/DoCommand.pm
</span><br>
<span class="quotelev1">&gt;        ==============================================================================
</span><br>
<span class="quotelev1">&gt;        --- trunk/lib/MTT/DoCommand.pm *(original)
</span><br>
<span class="quotelev1">&gt;        +++ trunk/lib/MTT/DoCommand.pm *2009-09-24 08:06:04 EDT (Thu, 24 Sep
</span><br>
<span class="quotelev1">&gt;        2009)
</span><br>
<span class="quotelev1">&gt;        @@ -797,7 +797,7 @@
</span><br>
<span class="quotelev1">&gt;        * *$cmds =~ s/\&quot;$//
</span><br>
<span class="quotelev1">&gt;        * * * *if ($cmds =~ s/^\&quot;//);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        - * *print $fh &quot;:\n$cmds\n&quot;;
</span><br>
<span class="quotelev1">&gt;        + * *print $fh &quot;$cmds\n&quot;;
</span><br>
<span class="quotelev1">&gt;        * *close($fh);
</span><br>
<span class="quotelev1">&gt;        * *chmod(0700, $filename);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Modified: trunk/lib/MTT/Values/Functions.pm
</span><br>
<span class="quotelev1">&gt;        ==============================================================================
</span><br>
<span class="quotelev1">&gt;        --- trunk/lib/MTT/Values/Functions.pm * (original)
</span><br>
<span class="quotelev1">&gt;        +++ trunk/lib/MTT/Values/Functions.pm * 2009-09-24 08:06:04 EDT (Thu,
</span><br>
<span class="quotelev1">&gt;        24 Sep 2009)
</span><br>
<span class="quotelev1">&gt;        @@ -3026,4 +3026,23 @@
</span><br>
<span class="quotelev1">&gt;        * *return md5_hex($str);
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        +# Run shell commands as a script, i.e
</span><br>
<span class="quotelev1">&gt;        +#
</span><br>
<span class="quotelev1">&gt;        +# [mtt]
</span><br>
<span class="quotelev1">&gt;        +# myscript=&lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt;        +# #!/bin/sh
</span><br>
<span class="quotelev1">&gt;        +# pwd
</span><br>
<span class="quotelev1">&gt;        +# ls
</span><br>
<span class="quotelev1">&gt;        +# EOT
</span><br>
<span class="quotelev1">&gt;        +# on_stop=&amp;shell_script(&quot;mtt&quot;,myscript)
</span><br>
<span class="quotelev1">&gt;        +#
</span><br>
<span class="quotelev1">&gt;        +#
</span><br>
<span class="quotelev1">&gt;        +
</span><br>
<span class="quotelev1">&gt;        +sub shell_script {
</span><br>
<span class="quotelev1">&gt;        + * * * my ($cmd_section, $cmd_param) = @_;
</span><br>
<span class="quotelev1">&gt;        + * * * my $cmd = &amp;get_ini_val($cmd_section, $cmd_param);
</span><br>
<span class="quotelev1">&gt;        + * * * my $x = MTT::DoCommand::CmdScript(1, $cmd);
</span><br>
<span class="quotelev1">&gt;        + * * * return $x-&gt;{result_stdout};
</span><br>
<span class="quotelev1">&gt;        +}
</span><br>
<span class="quotelev1">&gt;        +
</span><br>
<span class="quotelev1">&gt;        1;
</span><br>
<span class="quotelev1">&gt;        _______________________________________________
</span><br>
<span class="quotelev1">&gt;        mtt-svn mailing list
</span><br>
<span class="quotelev1">&gt;        mtt-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt;        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      --
</span><br>
<span class="quotelev1">&gt;      Jeff Squyres
</span><br>
<span class="quotelev1">&gt;      jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      _______________________________________________
</span><br>
<span class="quotelev1">&gt;      mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt;      mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; References
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Visible links
</span><br>
<span class="quotelev1">&gt;    . mailto:jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    . mailto:miked_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    . <a href="https://svn.open-mpi.org/trac/mtt/changeset/1319">https://svn.open-mpi.org/trac/mtt/changeset/1319</a>
</span><br>
<span class="quotelev1">&gt;    . mailto:mtt-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    . <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<span class="quotelev1">&gt;    . mailto:jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    . mailto:mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    . <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
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
<li><strong>Next message:</strong> <a href="0436.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<li><strong>Previous message:</strong> <a href="0434.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<li><strong>In reply to:</strong> <a href="0434.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0437.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<li><strong>Reply:</strong> <a href="0437.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
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
