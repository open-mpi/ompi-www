<?
$subject_val = "Re: [OMPI devel] FLOSS Weekly and comment about Mercurial";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 13 08:38:07 2009" -->
<!-- isoreceived="20090113133807" -->
<!-- sent="Tue, 13 Jan 2009 08:38:01 -0500" -->
<!-- isosent="20090113133801" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] FLOSS Weekly and comment about Mercurial" -->
<!-- id="CE5E6339-B652-4D39-8263-C0A1B666AB4E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="496C1B5B.3020505_at_gmail.com" -->
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
<strong>Date:</strong> 2009-01-13 08:38:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5128.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath disabled"</a>
<li><strong>Previous message:</strong> <a href="5126.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.3rc3 has been posted"</a>
<li><strong>In reply to:</strong> <a href="5120.php">Paul Franz: "Re: [OMPI devel] FLOSS Weekly and comment about Mercurial"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5157.php">Jeff Squyres: "Re: [OMPI devel] FLOSS Weekly and comment about Mercurial"</a>
<li><strong>Reply:</strong> <a href="5157.php">Jeff Squyres: "Re: [OMPI devel] FLOSS Weekly and comment about Mercurial"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 12, 2009, at 11:40 PM, Paul Franz wrote:
<br>
<p><span class="quotelev1">&gt; I will see what I can do.
</span><br>
<p>Many thanks!  I'm going to take full advantage of your offer and ask  
<br>
for the moon, even thought it's a large list. :-)
<br>
<p><span class="quotelev1">&gt; BTW, what kind of integration are you looking for? Do you just want  
</span><br>
<span class="quotelev1">&gt; the changeset to be logged in the Trac bug via a hook that looks at  
</span><br>
<span class="quotelev1">&gt; the comment for the appropriate bug number? Or something different?
</span><br>
<p>We enjoy SVN+Trac integration right now that does the following:
<br>
<p>- SVN commits are logged in trac such that they show up in the  
<br>
timeline (<a href="https://svn.open-mpi.org/trac/ompi/timeline">https://svn.open-mpi.org/trac/ompi/timeline</a>).  I'm not the  
<br>
sysadmin, but I assume that this is via some SVN commit hook on the  
<br>
server and could be pretty easily accomplished via hg as well.
<br>
<p>- SVN history is available in two forms:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Viewing &quot;enhanced&quot; diffs for individual commits (colorized,  
<br>
links to show each individual file in the commit, links to show just  
<br>
the diffs for one file, marking files that are added or deleted -- not  
<br>
necessarily showing &quot;-&quot; or &quot;+&quot; for every line in a removed/added file;  
<br>
e.g., <a href="https://svn.open-mpi.org/trac/ompi/changeset/20219">https://svn.open-mpi.org/trac/ompi/changeset/20219</a>)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--&gt; I personally find the &quot;Show ___ lines around each change&quot;  
<br>
option on the trac web page to be fantastic!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Viewing any file in the repository and its associated SVN history
<br>
<p>- Browsing the repository at any arbitrary state (r number)
<br>
<p>- The search box allows typing &quot;r12345&quot; which quick-jumps to viewing  
<br>
that individual commit
<br>
<p>- Comparisons between:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- The same repository section (file or directory) at different r  
<br>
numbers (e.g., compare /trunk/foo_at_HEAD against r12345 /trunk/foo_at_12345)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Different repository sections (file or directory) at the same  
<br>
or different r numbers (e.g., compare /trunk_at_HEAD to /branch/ 
<br>
release_at_12345)
<br>
<p>- Wiki syntax of &quot;r12345&quot; automatically links to SVN changeset 12345.
<br>
<p>Some of these issues likely need to be enhanced to use the hex commit  
<br>
ID instead of &quot;r12345&quot; to ensure the uniqueness of hg commits (perhaps  
<br>
&quot;hg&lt;hex ID&gt;&quot;?).
<br>
<p>There's also the issue of converting all of our old data from the SVN  
<br>
&quot;rxxxxx&quot; format to whatever the new HG format is.
<br>
<p>- we have lots of SVN commit messages that refer to &quot;rxxxxx&quot;; it would  
<br>
be awesome to be automatically able to update them to the appropriate  
<br>
new HG hex reference
<br>
- ditto goes for all the wiki pages and ticket entries
<br>
<p>...or perhaps it would be easier to support the old &quot;rxxxxx&quot; syntax on  
<br>
all already-existing commits/wiki pages/ticket entries as an alias for  
<br>
the newly updated hg commit references.
<br>
<p>This is my wish-list as of 8:30am (pre-caffeine).  :-)
<br>
<p>I did a quick search on selenic.com this morning for Trac and came up  
<br>
with:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.selenic.com/mercurial/wiki/index.cgi/HgTracExtension">http://www.selenic.com/mercurial/wiki/index.cgi/HgTracExtension</a>
<br>
<p>But the link it points to (<a href="http://hg.softcircuit.com.au/tools/hgtrac/">http://hg.softcircuit.com.au/tools/hgtrac/</a>)  
<br>
seems to be an unresponsive server:
<br>
<p>shell% telnet hg.softcircuit.com.au 80
<br>
Trying 202.125.37.135...
<br>
telnet: connect to address 202.125.37.135: Connection refused
<br>
telnet: Unable to connect to remote host
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5128.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath disabled"</a>
<li><strong>Previous message:</strong> <a href="5126.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.3rc3 has been posted"</a>
<li><strong>In reply to:</strong> <a href="5120.php">Paul Franz: "Re: [OMPI devel] FLOSS Weekly and comment about Mercurial"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5157.php">Jeff Squyres: "Re: [OMPI devel] FLOSS Weekly and comment about Mercurial"</a>
<li><strong>Reply:</strong> <a href="5157.php">Jeff Squyres: "Re: [OMPI devel] FLOSS Weekly and comment about Mercurial"</a>
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
