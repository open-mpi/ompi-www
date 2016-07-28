<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 28 16:20:33 2009" -->
<!-- isoreceived="20090928202033" -->
<!-- sent="Mon, 28 Sep 2009 16:20:27 -0400" -->
<!-- isosent="20090928202027" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1319" -->
<!-- id="20090928202027.GG34883_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E5628FA1-410E-4AD7-B9E0-6358B4BC81B7_at_cisco.com" -->
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
<strong>Date:</strong> 2009-09-28 16:20:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0440.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<li><strong>Previous message:</strong> <a href="0438.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<li><strong>In reply to:</strong> <a href="0437.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0440.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<li><strong>Reply:</strong> <a href="0440.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Sep/25/2009 04:59:11PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I'm not sure what you mean -- I thought they added a funclect, not a 
</span><br>
<span class="quotelev1">&gt; field...?
</span><br>
<p>I was commenting on both r1304 and r1319. 
<br>
<p>These INI params:
<br>
<p>&nbsp;&nbsp;on_start
<br>
&nbsp;&nbsp;on_stop
<br>
&nbsp;&nbsp;
<br>
are very similar to these INI params: 
<br>
<p>&nbsp;&nbsp;after_each_exec
<br>
&nbsp;&nbsp;before_any_exec
<br>
&nbsp;&nbsp;after_all_exec
<br>
<p>My thought was that it would make sense for them to use a similar
<br>
naming scheme and implementation (e.g., use suffix &quot;_exec&quot; and be
<br>
passed to DoCommand::Cmd()).
<br>
<p>-Ethan
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 24, 2009, at 3:09 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think on_stop should conform more to these params:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   after_each_exec
</span><br>
<span class="quotelev2">&gt;&gt;   before_any_exec
</span><br>
<span class="quotelev2">&gt;&gt;   after_all_exec
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; E.g.,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   before_mtt_start_exec
</span><br>
<span class="quotelev2">&gt;&gt;   after_mtt_start_exec
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Then have &amp;_process_get_value_option() call DoCommand. Note, DoCommand
</span><br>
<span class="quotelev2">&gt;&gt; is aware of hashbangs (see &amp;_contains_shell_script_characters()), so
</span><br>
<span class="quotelev2">&gt;&gt; &amp;shell_script() might be redundant.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Ethan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Sep/24/2009 07:46:40PM, Mike Dubman wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    Hey Jeff,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    On Thu, Sep 24, 2009 at 4:02 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      The DoCommand.pm sub added &quot;:\n&quot; to the beginning to force the 
</span><br>
<span class="quotelev2">&gt;&gt; Bourne
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      shell interpreter. *This is necessary for some cases where an
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      interpreter is not otherwise specified.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    Im not familiar with :\n semantics, how does it force Bourne shell 
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    what it actually does :)? (seems like leftovers from 1960....)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    I think when interpreter is not explicitly specified - the default 
</span><br>
<span class="quotelev2">&gt;&gt; user`s
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    shell is used.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    see in the DoCommand::Cmd() ..... it check the buffer`s* first line 
</span><br>
<span class="quotelev2">&gt;&gt; for
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    #!/... semantic and if found - saves buffer to file, adds +x perm,* 
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    just executes it as a regular script.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    When I passed a buffer with shell commands but 1st line was not 
</span><br>
<span class="quotelev2">&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    - it* failed with syntax errors.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    *
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      I see why you did it -- you want the ability to add your own 
</span><br>
<span class="quotelev2">&gt;&gt; interpreter
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      in &amp;shell_script(). *Why not either make a parameter to add the 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;:\n&quot; or
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      not, or better yet, have DoCommand.pm analyze the beginning of the
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      string and if it contains &quot;^:\n&quot; or &quot;^#!&quot;, then don't add anything. 
</span><br>
<span class="quotelev2">&gt;&gt; *But
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      if it doesn't contain either of those, then prefix it with &quot;:\n&quot;.*
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      How does that sound?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    sounds good!
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      Also, is &quot;&amp;shell_script()&quot; a good name? *If you can specify your 
</span><br>
<span class="quotelev2">&gt;&gt; own
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      interpreter, it might not be a shell script. *How about 
</span><br>
<span class="quotelev2">&gt;&gt; &amp;executable()?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    ok - &amp;executable() it will be!
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    *
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    regards
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    Mike
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      On Sep 24, 2009, at 8:06 AM, miked_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        Author: miked
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        Date: 2009-09-24 08:06:04 EDT (Thu, 24 Sep 2009)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        New Revision: 1319
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1319">https://svn.open-mpi.org/trac/mtt/changeset/1319</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        Log:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        bug fix: CmdScript() - no need to add extra chars &quot;\n:&quot; to the 
</span><br>
<span class="quotelev2">&gt;&gt; start
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        of shell script file
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        new funclet: shell_script(section,param)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        Text files modified:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        *trunk/lib/MTT/DoCommand.pm * * * *| * * 2 +-
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        *trunk/lib/MTT/Values/Functions.pm | * *19 +++++++++++++++++++
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        *2 files changed, 20 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        Modified: trunk/lib/MTT/DoCommand.pm
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        --- trunk/lib/MTT/DoCommand.pm *(original)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        +++ trunk/lib/MTT/DoCommand.pm *2009-09-24 08:06:04 EDT (Thu, 24 
</span><br>
<span class="quotelev2">&gt;&gt; Sep
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        2009)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        @@ -797,7 +797,7 @@
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        * *$cmds =~ s/\&quot;$//
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        * * * *if ($cmds =~ s/^\&quot;//);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        - * *print $fh &quot;:\n$cmds\n&quot;;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        + * *print $fh &quot;$cmds\n&quot;;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        * *close($fh);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        * *chmod(0700, $filename);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        Modified: trunk/lib/MTT/Values/Functions.pm
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        --- trunk/lib/MTT/Values/Functions.pm * (original)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        +++ trunk/lib/MTT/Values/Functions.pm * 2009-09-24 08:06:04 EDT 
</span><br>
<span class="quotelev2">&gt;&gt; (Thu,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        24 Sep 2009)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        @@ -3026,4 +3026,23 @@
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        * *return md5_hex($str);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        }
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        +# Run shell commands as a script, i.e
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        +#
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        +# [mtt]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        +# myscript=&lt;&lt;EOT
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        +# #!/bin/sh
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        +# pwd
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        +# ls
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        +# EOT
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        +# on_stop=&amp;shell_script(&quot;mtt&quot;,myscript)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        +#
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        +#
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        +
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        +sub shell_script {
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        + * * * my ($cmd_section, $cmd_param) = @_;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        + * * * my $cmd = &amp;get_ini_val($cmd_section, $cmd_param);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        + * * * my $x = MTT::DoCommand::CmdScript(1, $cmd);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        + * * * return $x-&gt;{result_stdout};
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        +}
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        +
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        1;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        mtt-svn mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        mtt-svn_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      --
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      mtt-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      mtt-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; References
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    Visible links
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    . mailto:jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    . mailto:miked_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    . <a href="https://svn.open-mpi.org/trac/mtt/changeset/1319">https://svn.open-mpi.org/trac/mtt/changeset/1319</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    . mailto:mtt-svn_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    . <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    . mailto:jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    . mailto:mtt-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    . <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mtt-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0440.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<li><strong>Previous message:</strong> <a href="0438.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<li><strong>In reply to:</strong> <a href="0437.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0440.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<li><strong>Reply:</strong> <a href="0440.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
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
