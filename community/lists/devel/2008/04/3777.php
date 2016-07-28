<?
$subject_val = "Re: [OMPI devel] Mercurial demo OMPI repository";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 29 14:44:34 2008" -->
<!-- isoreceived="20080429184434" -->
<!-- sent="Tue, 29 Apr 2008 14:44:10 -0400" -->
<!-- isosent="20080429184410" -->
<!-- name="Pak Lui" -->
<!-- email="Pak.Lui_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Mercurial demo OMPI repository" -->
<!-- id="48176C7A.6050201_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="42361E61-B0F1-42F7-B2CA-2D4E0168E03A_at_open-mpi.org" -->
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
<strong>From:</strong> Pak Lui (<em>Pak.Lui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-29 14:44:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3778.php">Ralf Wildenhues: "[OMPI devel] forgetting to run ./autogen.sh should not be fatal"</a>
<li><strong>Previous message:</strong> <a href="3776.php">Josh Hursey: "Re: [OMPI devel] Mercurial demo OMPI repository"</a>
<li><strong>In reply to:</strong> <a href="3776.php">Josh Hursey: "Re: [OMPI devel] Mercurial demo OMPI repository"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just ran into the same problem as Josh did. I had to take out 'hg' 
<br>
from Ralph's hg trunk. Otherwise hg clone wouldn't take it.
<br>
<p><a href="http://www.open-mpi.org/hg/hgwebdir.cgi/rhc/trunk">http://www.open-mpi.org/hg/hgwebdir.cgi/rhc/trunk</a>
<br>
<p>Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; Yay. Looks like that is working.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 29, 2008, at 6:21 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; And if you're looking for my stuff, it's at:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/hg/hgwebdir.cgi/rhc/hg/">http://www.open-mpi.org/hg/hgwebdir.cgi/rhc/hg/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 4/28/08 8:58 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I believe that the correct URL should not have an extra &quot;/hg/&quot; in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there after /jsquyres/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 28, 2008, at 9:37 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hum. So I just tried this and I got:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shell$  hg clone
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/hg/ompi-svn-conversion-r1792">http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/hg/ompi-svn-conversion-r1792</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; destination directory: ompi-svn-conversion-r17921
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; abort:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; '<a href="http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/hg/ompi-svn-conversion-r179">http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/hg/ompi-svn-conversion-r179</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 21/'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; does not appear to be an hg repository!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any thoughts on why?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Apr 2, 2008, at 7:26 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks to the sysadmins at IU, I put up a sample Mercurial OMPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; repository here:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   <a href="http://www.open-mpi.org/hg/hgwebdir.cgi/">http://www.open-mpi.org/hg/hgwebdir.cgi/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I converted the entire SVN ompi repository history (/trunk, /tags,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and /branches only) as of r17921.  Note that it shows some  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; commits on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the 0.9 branch as the most recent activity only because it converts
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the branches in reverse order -- the entire trunk is there as of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; r17921.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; You can clone this repository with the following:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   hg clone
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/hg/ompi-svn-conversion-r179">http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/hg/ompi-svn-conversion-r179</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 21/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Enjoy.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
- Pak Lui
pak.lui_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3778.php">Ralf Wildenhues: "[OMPI devel] forgetting to run ./autogen.sh should not be fatal"</a>
<li><strong>Previous message:</strong> <a href="3776.php">Josh Hursey: "Re: [OMPI devel] Mercurial demo OMPI repository"</a>
<li><strong>In reply to:</strong> <a href="3776.php">Josh Hursey: "Re: [OMPI devel] Mercurial demo OMPI repository"</a>
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
