<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 25 16:59:17 2009" -->
<!-- isoreceived="20090925205917" -->
<!-- sent="Fri, 25 Sep 2009 16:59:11 -0400" -->
<!-- isosent="20090925205911" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1319" -->
<!-- id="E5628FA1-410E-4AD7-B9E0-6358B4BC81B7_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20090924190901.GG34886_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-25 16:59:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0438.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<li><strong>Previous message:</strong> <a href="0436.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<li><strong>In reply to:</strong> <a href="0435.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0439.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<li><strong>Reply:</strong> <a href="0439.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not sure what you mean -- I thought they added a funclect, not a  
<br>
field...?
<br>
<p>On Sep 24, 2009, at 3:09 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; I think on_stop should conform more to these params:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   after_each_exec
</span><br>
<span class="quotelev1">&gt;   before_any_exec
</span><br>
<span class="quotelev1">&gt;   after_all_exec
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; E.g.,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   before_mtt_start_exec
</span><br>
<span class="quotelev1">&gt;   after_mtt_start_exec
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then have &amp;_process_get_value_option() call DoCommand. Note, DoCommand
</span><br>
<span class="quotelev1">&gt; is aware of hashbangs (see &amp;_contains_shell_script_characters()), so
</span><br>
<span class="quotelev1">&gt; &amp;shell_script() might be redundant.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Sep/24/2009 07:46:40PM, Mike Dubman wrote:
</span><br>
<span class="quotelev2">&gt; &gt;    Hey Jeff,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    On Thu, Sep 24, 2009 at 4:02 PM, Jeff Squyres  
</span><br>
<span class="quotelev1">&gt; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      The DoCommand.pm sub added &quot;:\n&quot; to the beginning to force  
</span><br>
<span class="quotelev1">&gt; the Bourne
</span><br>
<span class="quotelev2">&gt; &gt;      shell interpreter. *This is necessary for some cases where an
</span><br>
<span class="quotelev2">&gt; &gt;      interpreter is not otherwise specified.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Im not familiar with :\n semantics, how does it force Bourne  
</span><br>
<span class="quotelev1">&gt; shell and
</span><br>
<span class="quotelev2">&gt; &gt;    what it actually does :)? (seems like leftovers from 1960....)
</span><br>
<span class="quotelev2">&gt; &gt;    I think when interpreter is not explicitly specified - the  
</span><br>
<span class="quotelev1">&gt; default user`s
</span><br>
<span class="quotelev2">&gt; &gt;    shell is used.
</span><br>
<span class="quotelev2">&gt; &gt;    see in the DoCommand::Cmd() ..... it check the buffer`s* first  
</span><br>
<span class="quotelev1">&gt; line for
</span><br>
<span class="quotelev2">&gt; &gt;    #!/... semantic and if found - saves buffer to file, adds +x  
</span><br>
<span class="quotelev1">&gt; perm,* and
</span><br>
<span class="quotelev2">&gt; &gt;    just executes it as a regular script.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    When I passed a buffer with shell commands but 1st line was not  
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev2">&gt; &gt;    - it* failed with syntax errors.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    *
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      I see why you did it -- you want the ability to add your own  
</span><br>
<span class="quotelev1">&gt; interpreter
</span><br>
<span class="quotelev2">&gt; &gt;      in &amp;shell_script(). *Why not either make a parameter to add  
</span><br>
<span class="quotelev1">&gt; the &quot;:\n&quot; or
</span><br>
<span class="quotelev2">&gt; &gt;      not, or better yet, have DoCommand.pm analyze the beginning  
</span><br>
<span class="quotelev1">&gt; of the
</span><br>
<span class="quotelev2">&gt; &gt;      string and if it contains &quot;^:\n&quot; or &quot;^#!&quot;, then don't add  
</span><br>
<span class="quotelev1">&gt; anything. *But
</span><br>
<span class="quotelev2">&gt; &gt;      if it doesn't contain either of those, then prefix it with &quot;: 
</span><br>
<span class="quotelev1">&gt; \n&quot;.*
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      How does that sound?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    sounds good!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      Also, is &quot;&amp;shell_script()&quot; a good name? *If you can specify  
</span><br>
<span class="quotelev1">&gt; your own
</span><br>
<span class="quotelev2">&gt; &gt;      interpreter, it might not be a shell script. *How about  
</span><br>
<span class="quotelev1">&gt; &amp;executable()?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    ok - &amp;executable() it will be!
</span><br>
<span class="quotelev2">&gt; &gt;    *
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    regards
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Mike
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      On Sep 24, 2009, at 8:06 AM, miked_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        Author: miked
</span><br>
<span class="quotelev2">&gt; &gt;        Date: 2009-09-24 08:06:04 EDT (Thu, 24 Sep 2009)
</span><br>
<span class="quotelev2">&gt; &gt;        New Revision: 1319
</span><br>
<span class="quotelev2">&gt; &gt;        URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1319">https://svn.open-mpi.org/trac/mtt/changeset/1319</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        Log:
</span><br>
<span class="quotelev2">&gt; &gt;        bug fix: CmdScript() - no need to add extra chars &quot;\n:&quot; to  
</span><br>
<span class="quotelev1">&gt; the start
</span><br>
<span class="quotelev2">&gt; &gt;        of shell script file
</span><br>
<span class="quotelev2">&gt; &gt;        new funclet: shell_script(section,param)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        Text files modified:
</span><br>
<span class="quotelev2">&gt; &gt;        *trunk/lib/MTT/DoCommand.pm * * * *| * * 2 +-
</span><br>
<span class="quotelev2">&gt; &gt;        *trunk/lib/MTT/Values/Functions.pm | * *19 +++++++++++++++++ 
</span><br>
<span class="quotelev1">&gt; ++
</span><br>
<span class="quotelev2">&gt; &gt;        *2 files changed, 20 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        Modified: trunk/lib/MTT/DoCommand.pm
</span><br>
<span class="quotelev2">&gt; &gt;         
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev2">&gt; &gt;        --- trunk/lib/MTT/DoCommand.pm *(original)
</span><br>
<span class="quotelev2">&gt; &gt;        +++ trunk/lib/MTT/DoCommand.pm *2009-09-24 08:06:04 EDT  
</span><br>
<span class="quotelev1">&gt; (Thu, 24 Sep
</span><br>
<span class="quotelev2">&gt; &gt;        2009)
</span><br>
<span class="quotelev2">&gt; &gt;        @@ -797,7 +797,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;        * *$cmds =~ s/\&quot;$//
</span><br>
<span class="quotelev2">&gt; &gt;        * * * *if ($cmds =~ s/^\&quot;//);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        - * *print $fh &quot;:\n$cmds\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt;        + * *print $fh &quot;$cmds\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt;        * *close($fh);
</span><br>
<span class="quotelev2">&gt; &gt;        * *chmod(0700, $filename);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        Modified: trunk/lib/MTT/Values/Functions.pm
</span><br>
<span class="quotelev2">&gt; &gt;         
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev2">&gt; &gt;        --- trunk/lib/MTT/Values/Functions.pm * (original)
</span><br>
<span class="quotelev2">&gt; &gt;        +++ trunk/lib/MTT/Values/Functions.pm * 2009-09-24 08:06:04  
</span><br>
<span class="quotelev1">&gt; EDT (Thu,
</span><br>
<span class="quotelev2">&gt; &gt;        24 Sep 2009)
</span><br>
<span class="quotelev2">&gt; &gt;        @@ -3026,4 +3026,23 @@
</span><br>
<span class="quotelev2">&gt; &gt;        * *return md5_hex($str);
</span><br>
<span class="quotelev2">&gt; &gt;        }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        +# Run shell commands as a script, i.e
</span><br>
<span class="quotelev2">&gt; &gt;        +#
</span><br>
<span class="quotelev2">&gt; &gt;        +# [mtt]
</span><br>
<span class="quotelev2">&gt; &gt;        +# myscript=&lt;&lt;EOT
</span><br>
<span class="quotelev2">&gt; &gt;        +# #!/bin/sh
</span><br>
<span class="quotelev2">&gt; &gt;        +# pwd
</span><br>
<span class="quotelev2">&gt; &gt;        +# ls
</span><br>
<span class="quotelev2">&gt; &gt;        +# EOT
</span><br>
<span class="quotelev2">&gt; &gt;        +# on_stop=&amp;shell_script(&quot;mtt&quot;,myscript)
</span><br>
<span class="quotelev2">&gt; &gt;        +#
</span><br>
<span class="quotelev2">&gt; &gt;        +#
</span><br>
<span class="quotelev2">&gt; &gt;        +
</span><br>
<span class="quotelev2">&gt; &gt;        +sub shell_script {
</span><br>
<span class="quotelev2">&gt; &gt;        + * * * my ($cmd_section, $cmd_param) = @_;
</span><br>
<span class="quotelev2">&gt; &gt;        + * * * my $cmd = &amp;get_ini_val($cmd_section, $cmd_param);
</span><br>
<span class="quotelev2">&gt; &gt;        + * * * my $x = MTT::DoCommand::CmdScript(1, $cmd);
</span><br>
<span class="quotelev2">&gt; &gt;        + * * * return $x-&gt;{result_stdout};
</span><br>
<span class="quotelev2">&gt; &gt;        +}
</span><br>
<span class="quotelev2">&gt; &gt;        +
</span><br>
<span class="quotelev2">&gt; &gt;        1;
</span><br>
<span class="quotelev2">&gt; &gt;        _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;        mtt-svn mailing list
</span><br>
<span class="quotelev2">&gt; &gt;        mtt-svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      --
</span><br>
<span class="quotelev2">&gt; &gt;      Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt;      jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;      mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt;      mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;      <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; References
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Visible links
</span><br>
<span class="quotelev2">&gt; &gt;    . mailto:jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;    . mailto:miked_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;    . <a href="https://svn.open-mpi.org/trac/mtt/changeset/1319">https://svn.open-mpi.org/trac/mtt/changeset/1319</a>
</span><br>
<span class="quotelev2">&gt; &gt;    . mailto:mtt-svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;    . <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<span class="quotelev2">&gt; &gt;    . mailto:jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;    . mailto:mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;    . <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0438.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<li><strong>Previous message:</strong> <a href="0436.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<li><strong>In reply to:</strong> <a href="0435.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0439.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<li><strong>Reply:</strong> <a href="0439.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
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
