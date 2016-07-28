<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 25 16:08:11 2009" -->
<!-- isoreceived="20090925200811" -->
<!-- sent="Fri, 25 Sep 2009 16:08:06 -0400" -->
<!-- isosent="20090925200806" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1319" -->
<!-- id="C4EF5F97-82F3-45A7-8A25-E17AFE386ED3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-25 16:08:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0437.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<li><strong>Previous message:</strong> <a href="0435.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<li><strong>In reply to:</strong> <a href="0434.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0438.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<li><strong>Reply:</strong> <a href="0438.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 24, 2009, at 12:46 PM, Mike Dubman wrote:
<br>
<p><span class="quotelev1">&gt; Im not familiar with :\n semantics, how does it force Bourne shell  
</span><br>
<span class="quotelev1">&gt; and what it actually does :)? (seems like leftovers from 1960....)
</span><br>
<p>Yes, it might be left over from 1960.  :-)  But the nice thing is that  
<br>
you then don't have to identify /bin/sh or /usr/bin/sh.  It's  
<br>
convenient and it works everywhere.
<br>
<p><span class="quotelev1">&gt; I think when interpreter is not explicitly specified - the default  
</span><br>
<span class="quotelev1">&gt; user`s shell is used.
</span><br>
<span class="quotelev1">&gt; see in the DoCommand::Cmd() ..... it check the buffer`s  first line  
</span><br>
<span class="quotelev1">&gt; for #!/... semantic and if found - saves buffer to file, adds +x  
</span><br>
<span class="quotelev1">&gt; perm,  and just executes it as a regular script.
</span><br>
<p>I don't think that's universal, is it?
<br>
<p><span class="quotelev1">&gt; When I passed a buffer with shell commands but 1st line was not #!/ 
</span><br>
<span class="quotelev1">&gt; bin/sh - it  failed with syntax errors.
</span><br>
<p>Right.  Try passing with &quot;:&quot; as the first line.  :-)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0437.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<li><strong>Previous message:</strong> <a href="0435.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<li><strong>In reply to:</strong> <a href="0434.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0438.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<li><strong>Reply:</strong> <a href="0438.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
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
