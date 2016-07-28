<?
$subject_val = "Re: [OMPI devel] RFC: mpirun command line arugments";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 21 20:44:57 2011" -->
<!-- isoreceived="20110422004457" -->
<!-- sent="Thu, 21 Apr 2011 20:44:50 -0400" -->
<!-- isosent="20110422004450" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: mpirun command line arugments" -->
<!-- id="1F070FC4-C959-4EC0-A999-FC617D7BD066_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4DB0C9EE.1010806_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: mpirun command line arugments<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-21 20:44:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9210.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Second Try: Add support to send/receive CUDA	device memory directly"</a>
<li><strong>Previous message:</strong> <a href="9208.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: mpirun command line arugments"</a>
<li><strong>In reply to:</strong> <a href="9208.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: mpirun command line arugments"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9206.php">Jeff Squyres: "Re: [OMPI devel] RFC: mpirun command line arugments"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 21, 2011, at 8:21 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; I saw the &quot;extra bonus points&quot; proposal for svn-style &quot;mpirun help command&quot;, and I interpreted it to be slightly different from what I had in mind.  What I indented by my suggestion was regrouping the existing 200+ line alphabetical-by-option-name output into from 5 to 10 topic sections - relatively minor &quot;editorial&quot; work (not that I am volunteering) when compared to writing new documentation.
</span><br>
<p>Ah, I gotcha.  
<br>
<p>I understand you now, but I still classify it as &quot;I'd love to see someone's patch for it.&quot;  :-)
<br>
<p><span class="quotelev1">&gt; Oh, one more related thing.  At least in 1.4.2 the --help output goes to stderr rather than stdout.  The gnu utilities all send their --help output to stdout.  This may seem like a extremely minor point to the folks on this list, but you would be surprised how many end-users don't know how to redirect stderr to a pipe (that is to say &quot;mpirun --help | less&quot; doesn't do what the user wants).  Perhaps that is already fixed in 1.5.x?
</span><br>
<p>Nope, it's not.  But that's a good reason to change it (GNU apps send to stdout).  I'll take that as a friendly amendment to my proposal.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9210.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Second Try: Add support to send/receive CUDA	device memory directly"</a>
<li><strong>Previous message:</strong> <a href="9208.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: mpirun command line arugments"</a>
<li><strong>In reply to:</strong> <a href="9208.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: mpirun command line arugments"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9206.php">Jeff Squyres: "Re: [OMPI devel] RFC: mpirun command line arugments"</a>
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
