<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 24 09:02:35 2009" -->
<!-- isoreceived="20090924130235" -->
<!-- sent="Thu, 24 Sep 2009 09:02:30 -0400" -->
<!-- isosent="20090924130230" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1319" -->
<!-- id="6275EF87-4D4B-4519-B555-399E6C5FFDD9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200909241206.n8OC64Cl018289_at_sourcehaven.osl.iu.edu" -->
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
<strong>Date:</strong> 2009-09-24 09:02:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0434.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<li><strong>Previous message:</strong> <a href="0432.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1316"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0434.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<li><strong>Reply:</strong> <a href="0434.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not sure this is right.
<br>
<p>The DoCommand.pm sub added &quot;:\n&quot; to the beginning to force the Bourne  
<br>
shell interpreter.  This is necessary for some cases where an  
<br>
interpreter is not otherwise specified.
<br>
<p>I see why you did it -- you want the ability to add your own  
<br>
interpreter in &amp;shell_script().  Why not either make a parameter to  
<br>
add the &quot;:\n&quot; or not, or better yet, have DoCommand.pm analyze the  
<br>
beginning of the string and if it contains &quot;^:\n&quot; or &quot;^#!&quot;, then don't  
<br>
add anything.  But if it doesn't contain either of those, then prefix  
<br>
it with &quot;:\n&quot;.
<br>
<p>How does that sound?
<br>
<p>Also, is &quot;&amp;shell_script()&quot; a good name?  If you can specify your own  
<br>
interpreter, it might not be a shell script.  How about &amp;executable()?
<br>
<p><p>On Sep 24, 2009, at 8:06 AM, miked_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: miked
</span><br>
<span class="quotelev1">&gt; Date: 2009-09-24 08:06:04 EDT (Thu, 24 Sep 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 1319
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1319">https://svn.open-mpi.org/trac/mtt/changeset/1319</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; bug fix: CmdScript() - no need to add extra chars &quot;\n:&quot; to the start  
</span><br>
<span class="quotelev1">&gt; of shell script file
</span><br>
<span class="quotelev1">&gt; new funclet: shell_script(section,param)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/lib/MTT/DoCommand.pm        |     2 +-
</span><br>
<span class="quotelev1">&gt;   trunk/lib/MTT/Values/Functions.pm |    19 +++++++++++++++++++
</span><br>
<span class="quotelev1">&gt;   2 files changed, 20 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/DoCommand.pm
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
<span class="quotelev1">&gt; --- trunk/lib/MTT/DoCommand.pm	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/DoCommand.pm	2009-09-24 08:06:04 EDT (Thu, 24 Sep  
</span><br>
<span class="quotelev1">&gt; 2009)
</span><br>
<span class="quotelev1">&gt; @@ -797,7 +797,7 @@
</span><br>
<span class="quotelev1">&gt;     $cmds =~ s/\&quot;$//
</span><br>
<span class="quotelev1">&gt;         if ($cmds =~ s/^\&quot;//);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    print $fh &quot;:\n$cmds\n&quot;;
</span><br>
<span class="quotelev1">&gt; +    print $fh &quot;$cmds\n&quot;;
</span><br>
<span class="quotelev1">&gt;     close($fh);
</span><br>
<span class="quotelev1">&gt;     chmod(0700, $filename);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/Values/Functions.pm
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
<span class="quotelev1">&gt; --- trunk/lib/MTT/Values/Functions.pm	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/Values/Functions.pm	2009-09-24 08:06:04 EDT (Thu,  
</span><br>
<span class="quotelev1">&gt; 24 Sep 2009)
</span><br>
<span class="quotelev1">&gt; @@ -3026,4 +3026,23 @@
</span><br>
<span class="quotelev1">&gt;     return md5_hex($str);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +# Run shell commands as a script, i.e
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# [mtt]
</span><br>
<span class="quotelev1">&gt; +# myscript=&lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt; +# #!/bin/sh
</span><br>
<span class="quotelev1">&gt; +# pwd
</span><br>
<span class="quotelev1">&gt; +# ls
</span><br>
<span class="quotelev1">&gt; +# EOT
</span><br>
<span class="quotelev1">&gt; +# on_stop=&amp;shell_script(&quot;mtt&quot;,myscript)
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +sub shell_script {
</span><br>
<span class="quotelev1">&gt; +	my ($cmd_section, $cmd_param) = @_;
</span><br>
<span class="quotelev1">&gt; +	my $cmd = &amp;get_ini_val($cmd_section, $cmd_param);
</span><br>
<span class="quotelev1">&gt; +	my $x = MTT::DoCommand::CmdScript(1, $cmd);
</span><br>
<span class="quotelev1">&gt; +	return $x-&gt;{result_stdout};
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; 1;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-svn mailing list
</span><br>
<span class="quotelev1">&gt; mtt-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
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
<li><strong>Next message:</strong> <a href="0434.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<li><strong>Previous message:</strong> <a href="0432.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1316"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0434.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<li><strong>Reply:</strong> <a href="0434.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
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
