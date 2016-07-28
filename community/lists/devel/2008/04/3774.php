<?
$subject_val = "Re: [OMPI devel] Mercurial demo OMPI repository";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 28 22:59:04 2008" -->
<!-- isoreceived="20080429025904" -->
<!-- sent="Mon, 28 Apr 2008 21:58:54 -0500" -->
<!-- isosent="20080429025854" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Mercurial demo OMPI repository" -->
<!-- id="F25801C9-E806-45F9-9420-0E3EC083BB8E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5CA494DB-AE48-4592-9D9B-4E0277A38C6C_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Mercurial demo OMPI repository<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-28 22:58:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3775.php">Ralph Castain: "Re: [OMPI devel] Mercurial demo OMPI repository"</a>
<li><strong>Previous message:</strong> <a href="3773.php">Josh Hursey: "Re: [OMPI devel] Mercurial demo OMPI repository"</a>
<li><strong>In reply to:</strong> <a href="3773.php">Josh Hursey: "Re: [OMPI devel] Mercurial demo OMPI repository"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3775.php">Ralph Castain: "Re: [OMPI devel] Mercurial demo OMPI repository"</a>
<li><strong>Reply:</strong> <a href="3775.php">Ralph Castain: "Re: [OMPI devel] Mercurial demo OMPI repository"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe that the correct URL should not have an extra &quot;/hg/&quot; in  
<br>
there after /jsquyres/
<br>
<p><p><p>On Apr 28, 2008, at 9:37 PM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; Hum. So I just tried this and I got:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; shell$  hg clone <a href="http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/hg/ompi-svn-conversion-r17921/">http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/hg/ompi-svn-conversion-r17921/</a>
</span><br>
<span class="quotelev1">&gt; destination directory: ompi-svn-conversion-r17921
</span><br>
<span class="quotelev1">&gt; abort: '<a href="http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/hg/ompi-svn-conversion-r17921/">http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/hg/ompi-svn-conversion-r17921/</a>'
</span><br>
<span class="quotelev1">&gt;  does not appear to be an hg repository!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any thoughts on why?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 2, 2008, at 7:26 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks to the sysadmins at IU, I put up a sample Mercurial OMPI
</span><br>
<span class="quotelev2">&gt;&gt; repository here:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/hg/hgwebdir.cgi/">http://www.open-mpi.org/hg/hgwebdir.cgi/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I converted the entire SVN ompi repository history (/trunk, /tags,
</span><br>
<span class="quotelev2">&gt;&gt; and /branches only) as of r17921.  Note that it shows some commits on
</span><br>
<span class="quotelev2">&gt;&gt; the 0.9 branch as the most recent activity only because it converts
</span><br>
<span class="quotelev2">&gt;&gt; the branches in reverse order -- the entire trunk is there as of
</span><br>
<span class="quotelev2">&gt;&gt; r17921.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can clone this repository with the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    hg clone <a href="http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/hg/ompi-svn-conversion-r17921/">http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/hg/ompi-svn-conversion-r17921/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Enjoy.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="3775.php">Ralph Castain: "Re: [OMPI devel] Mercurial demo OMPI repository"</a>
<li><strong>Previous message:</strong> <a href="3773.php">Josh Hursey: "Re: [OMPI devel] Mercurial demo OMPI repository"</a>
<li><strong>In reply to:</strong> <a href="3773.php">Josh Hursey: "Re: [OMPI devel] Mercurial demo OMPI repository"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3775.php">Ralph Castain: "Re: [OMPI devel] Mercurial demo OMPI repository"</a>
<li><strong>Reply:</strong> <a href="3775.php">Ralph Castain: "Re: [OMPI devel] Mercurial demo OMPI repository"</a>
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
