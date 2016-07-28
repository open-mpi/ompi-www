<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21723";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 21 19:35:39 2009" -->
<!-- isoreceived="20090721233539" -->
<!-- sent="Tue, 21 Jul 2009 19:35:27 -0400" -->
<!-- isosent="20090721233527" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r21723" -->
<!-- id="5BD307E7-C70C-4D60-A678-A99B8AA3A0F1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F3A6B177-1E27-4069-A200-105B9000FCCD_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r21723<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-21 19:35:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6481.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>Previous message:</strong> <a href="6479.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>In reply to:</strong> <a href="6478.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21723"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6483.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21723"</a>
<li><strong>Reply:</strong> <a href="6483.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21723"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, it seems to compile ok for me on Leopard (i.e., autodetect  
<br>
disables itself):
<br>
<p>--- MCA component installdirs:autodetect (m4 configuration macro)
<br>
checking for MCA component installdirs:autodetect compile mode... static
<br>
checking procfs.h usability... no
<br>
checking procfs.h presence... no
<br>
checking for procfs.h... no
<br>
checking for /proc/self/maps... no
<br>
checking if MCA component installdirs:autodetect can compile... no
<br>
<p>However, I see that autodetect configure.m4 is checking  
<br>
$backtrace_installdirs_happy -- which seems like a no-no.  The  
<br>
ordering of framework / component configure.m4 scripts is not  
<br>
guaranteed, so it's not a good idea to check the output of another  
<br>
configure.m4's macro.
<br>
<p><p>On Jul 21, 2009, at 6:45 PM, Iain Bason wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 21, 2009, at 6:31 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; This commit appears to have broken the build system for Mac OSX.
</span><br>
<span class="quotelev2">&gt; &gt; Could you please fix it - since it only supports Solaris and Linux,
</span><br>
<span class="quotelev2">&gt; &gt; how about setting it so it continues to work in other environments??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That was the intent of the configure.m4 script in that directory.  It
</span><br>
<span class="quotelev1">&gt; is supposed to check for the existence of some files in /proc, which
</span><br>
<span class="quotelev1">&gt; should not exist on a Mac.  Could you send me the relevant portion of
</span><br>
<span class="quotelev1">&gt; the config.log on Mac OSX?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Iain
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
<li><strong>Next message:</strong> <a href="6481.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>Previous message:</strong> <a href="6479.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>In reply to:</strong> <a href="6478.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21723"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6483.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21723"</a>
<li><strong>Reply:</strong> <a href="6483.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21723"</a>
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
