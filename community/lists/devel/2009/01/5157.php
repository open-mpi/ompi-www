<?
$subject_val = "Re: [OMPI devel] FLOSS Weekly and comment about Mercurial";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 13 20:11:21 2009" -->
<!-- isoreceived="20090114011121" -->
<!-- sent="Tue, 13 Jan 2009 20:11:15 -0500" -->
<!-- isosent="20090114011115" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] FLOSS Weekly and comment about Mercurial" -->
<!-- id="2D5B07D0-198D-4BFA-927F-CCB7F392B2ED_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CE5E6339-B652-4D39-8263-C0A1B666AB4E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] FLOSS Weekly and comment about Mercurial<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-13 20:11:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5158.php">Jeff Squyres: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<li><strong>Previous message:</strong> <a href="5156.php">Patrick Geoffray: "Re: [OMPI devel] 1.3 PML default choice"</a>
<li><strong>In reply to:</strong> <a href="5127.php">Jeff Squyres: "Re: [OMPI devel] FLOSS Weekly and comment about Mercurial"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like the TracMercurial plugin does most of what is on my wish  
<br>
list -- the IU sysadmins graciously installed a sandbox version of it  
<br>
today that is feeding off the official HG mirror of OMPI's SVN (so it  
<br>
updates about once an hour):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi_hg/">https://svn.open-mpi.org/trac/ompi_hg/</a>
<br>
<p>Additionally, a thread started on the Mercurial users list about Open  
<br>
MPI; I'll probably be asking a few more questions over there over the  
<br>
next several days / week or so.
<br>
<p><p><p>On Jan 13, 2009, at 8:38 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jan 12, 2009, at 11:40 PM, Paul Franz wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I will see what I can do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Many thanks!  I'm going to take full advantage of your offer and ask  
</span><br>
<span class="quotelev1">&gt; for the moon, even thought it's a large list. :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; BTW, what kind of integration are you looking for? Do you just want  
</span><br>
<span class="quotelev2">&gt;&gt; the changeset to be logged in the Trac bug via a hook that looks at  
</span><br>
<span class="quotelev2">&gt;&gt; the comment for the appropriate bug number? Or something different?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We enjoy SVN+Trac integration right now that does the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - SVN commits are logged in trac such that they show up in the  
</span><br>
<span class="quotelev1">&gt; timeline (<a href="https://svn.open-mpi.org/trac/ompi/timeline">https://svn.open-mpi.org/trac/ompi/timeline</a>).  I'm not the  
</span><br>
<span class="quotelev1">&gt; sysadmin, but I assume that this is via some SVN commit hook on the  
</span><br>
<span class="quotelev1">&gt; server and could be pretty easily accomplished via hg as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - SVN history is available in two forms:
</span><br>
<span class="quotelev1">&gt;    - Viewing &quot;enhanced&quot; diffs for individual commits (colorized,  
</span><br>
<span class="quotelev1">&gt; links to show each individual file in the commit, links to show just  
</span><br>
<span class="quotelev1">&gt; the diffs for one file, marking files that are added or deleted --  
</span><br>
<span class="quotelev1">&gt; not necessarily showing &quot;-&quot; or &quot;+&quot; for every line in a removed/added  
</span><br>
<span class="quotelev1">&gt; file; e.g., <a href="https://svn.open-mpi.org/trac/ompi/changeset/20219">https://svn.open-mpi.org/trac/ompi/changeset/20219</a>)
</span><br>
<span class="quotelev1">&gt;      --&gt; I personally find the &quot;Show ___ lines around each change&quot;  
</span><br>
<span class="quotelev1">&gt; option on the trac web page to be fantastic!
</span><br>
<span class="quotelev1">&gt;    - Viewing any file in the repository and its associated SVN history
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Browsing the repository at any arbitrary state (r number)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - The search box allows typing &quot;r12345&quot; which quick-jumps to viewing  
</span><br>
<span class="quotelev1">&gt; that individual commit
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Comparisons between:
</span><br>
<span class="quotelev1">&gt;    - The same repository section (file or directory) at different r  
</span><br>
<span class="quotelev1">&gt; numbers (e.g., compare /trunk/foo_at_HEAD against r12345 /trunk/ 
</span><br>
<span class="quotelev1">&gt; foo_at_12345)
</span><br>
<span class="quotelev1">&gt;    - Different repository sections (file or directory) at the same  
</span><br>
<span class="quotelev1">&gt; or different r numbers (e.g., compare /trunk_at_HEAD to /branch/ 
</span><br>
<span class="quotelev1">&gt; release_at_12345)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Wiki syntax of &quot;r12345&quot; automatically links to SVN changeset 12345.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some of these issues likely need to be enhanced to use the hex  
</span><br>
<span class="quotelev1">&gt; commit ID instead of &quot;r12345&quot; to ensure the uniqueness of hg commits  
</span><br>
<span class="quotelev1">&gt; (perhaps &quot;hg&lt;hex ID&gt;&quot;?).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's also the issue of converting all of our old data from the  
</span><br>
<span class="quotelev1">&gt; SVN &quot;rxxxxx&quot; format to whatever the new HG format is.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - we have lots of SVN commit messages that refer to &quot;rxxxxx&quot;; it  
</span><br>
<span class="quotelev1">&gt; would be awesome to be automatically able to update them to the  
</span><br>
<span class="quotelev1">&gt; appropriate new HG hex reference
</span><br>
<span class="quotelev1">&gt; - ditto goes for all the wiki pages and ticket entries
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...or perhaps it would be easier to support the old &quot;rxxxxx&quot; syntax  
</span><br>
<span class="quotelev1">&gt; on all already-existing commits/wiki pages/ticket entries as an  
</span><br>
<span class="quotelev1">&gt; alias for the newly updated hg commit references.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is my wish-list as of 8:30am (pre-caffeine).  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did a quick search on selenic.com this morning for Trac and came  
</span><br>
<span class="quotelev1">&gt; up with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.selenic.com/mercurial/wiki/index.cgi/HgTracExtension">http://www.selenic.com/mercurial/wiki/index.cgi/HgTracExtension</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But the link it points to (<a href="http://hg.softcircuit.com.au/tools/">http://hg.softcircuit.com.au/tools/</a> 
</span><br>
<span class="quotelev1">&gt; hgtrac/) seems to be an unresponsive server:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; shell% telnet hg.softcircuit.com.au 80
</span><br>
<span class="quotelev1">&gt; Trying 202.125.37.135...
</span><br>
<span class="quotelev1">&gt; telnet: connect to address 202.125.37.135: Connection refused
</span><br>
<span class="quotelev1">&gt; telnet: Unable to connect to remote host
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5158.php">Jeff Squyres: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<li><strong>Previous message:</strong> <a href="5156.php">Patrick Geoffray: "Re: [OMPI devel] 1.3 PML default choice"</a>
<li><strong>In reply to:</strong> <a href="5127.php">Jeff Squyres: "Re: [OMPI devel] FLOSS Weekly and comment about Mercurial"</a>
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
