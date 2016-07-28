<?
$subject_val = "[OMPI devel] Gnu #ident";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 14 13:52:08 2007" -->
<!-- isoreceived="20071214185208" -->
<!-- sent="Fri, 14 Dec 2007 13:47:57 -0500" -->
<!-- isosent="20071214184757" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Gnu #ident" -->
<!-- id="2537E051-45CD-4F63-913D-F0126DF476FB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Gnu #ident<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-14 13:47:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2855.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Previous message:</strong> <a href="2853.php">Jeff Squyres: "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r16959"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We recently put in a feature on the trunk to put in ident strings in  
<br>
the 3 OMPI libraries.
<br>
<p>Short version:
<br>
--------------
<br>
<p>We use &quot;#ident foo&quot; for GNU, but it emits a stderr warning that it's a  
<br>
GCC extension when used with -pedantic (we check that #ident works in  
<br>
configure).  Does anyone care?  Should we add an option to disable  
<br>
#ident for GNU compilers?
<br>
<p>Longer version:
<br>
---------------
<br>
<p>configure checks for 2 things:
<br>
<p>1. Does &quot;#pragma ident &lt;foo&gt;&quot; work
<br>
2. Does &quot;#ident &lt;foo&gt;&quot; work
<br>
<p>If either of these work (in order), they are used.  If neither work, a  
<br>
static const char[] is used.  This feature was added as part of the  
<br>
&quot;branding&quot; strategy, and also to help Sun with debugging because they  
<br>
have a handy command (ident(1)?  I don't remember offhand) that will  
<br>
look for the #pragma ident in a library and print it out.  Good for  
<br>
support issues.
<br>
<p>However, the GNU compilers support #ident but apparently print a  
<br>
stderr warning about it when -pedantic is used (which we automatically  
<br>
enable for debugging builds via --enable-picky).
<br>
<p>Does anyone care?  Should we put in an option to turn off #ident for  
<br>
the GNU compilers (perhaps only when -pedantic is used)?
<br>
<p>I ask because a few people have noticed the new output on stderr and  
<br>
asked me about it, so I figured I'd raise the &quot;does anyone care?&quot;  
<br>
flag...
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
<li><strong>Next message:</strong> <a href="2855.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Previous message:</strong> <a href="2853.php">Jeff Squyres: "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r16959"</a>
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
