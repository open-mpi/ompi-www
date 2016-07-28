<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 27 15:54:18 2009" -->
<!-- isoreceived="20090927195418" -->
<!-- sent="Sun, 27 Sep 2009 21:54:13 +0200" -->
<!-- isosent="20090927195413" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1319" -->
<!-- id="b20b52800909271254g2539eb50h29ed26ba2b2fd983_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C4EF5F97-82F3-45A7-8A25-E17AFE386ED3_at_cisco.com" -->
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
<strong>Date:</strong> 2009-09-27 15:54:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0439.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<li><strong>Previous message:</strong> <a href="0437.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<li><strong>In reply to:</strong> <a href="0436.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Sep 25, 2009 at 10:08 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Sep 24, 2009, at 12:46 PM, Mike Dubman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Im not familiar with :\n semantics, how does it force Bourne shell and
</span><br>
<span class="quotelev2">&gt;&gt; what it actually does :)? (seems like leftovers from 1960....)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, it might be left over from 1960.  :-)  But the nice thing is that you
</span><br>
<span class="quotelev1">&gt; then don't have to identify /bin/sh or /usr/bin/sh.  It's convenient and it
</span><br>
<span class="quotelev1">&gt; works everywhere.
</span><br>
<p><p>Found some info re &quot;:\n&quot; as a shebang line:
<br>
...
<br>
':' was actually the first comment character.
<br>
All shells I tried still recognize it as such, so it is not obsolete, but
<br>
perhaps slightly deprecated.
<br>
<p>The first versions of csh used '#' as a comment and used the presence of one
<br>
comment character or the other to decide which shell to run (assuming it was
<br>
given a text file with the execute bit set). This was before the advent of
<br>
the kernel-based #! &quot;magic number&quot;
<br>
The early &quot;/bin/sh&quot; versions assumed they were the only shell on the system
<br>
and had no need to choose an interpreter.
<br>
...
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0438/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0439.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<li><strong>Previous message:</strong> <a href="0437.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
<li><strong>In reply to:</strong> <a href="0436.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1319"</a>
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
