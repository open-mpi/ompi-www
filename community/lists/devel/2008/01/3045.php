<?
$subject_val = "Re: [OMPI devel] Fwd: === CREATE FAILURE ===";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 24 17:33:35 2008" -->
<!-- isoreceived="20080124223335" -->
<!-- sent="Thu, 24 Jan 2008 17:32:57 -0500" -->
<!-- isosent="20080124223257" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: === CREATE FAILURE ===" -->
<!-- id="C2EB0C45-09CE-438F-B941-FC5B57EF4FF3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47990C25.9080200_at_Sun.COM" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fwd: === CREATE FAILURE ===<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-24 17:32:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3046.php">Rolf Vandevaart: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<li><strong>Previous message:</strong> <a href="3044.php">Jennis Pruett: "[OMPI devel] Svn password issues with MTT"</a>
<li><strong>In reply to:</strong> <a href="3043.php">Rolf Vandevaart: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3046.php">Rolf Vandevaart: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<li><strong>Reply:</strong> <a href="3046.php">Rolf Vandevaart: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rolf -- I've made tarballs in the ustar format; can you give them a  
<br>
whirl?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/~jsquyres/unofficial/">http://www.open-mpi.org/~jsquyres/unofficial/</a>
<br>
<p><p>On Jan 24, 2008, at 5:07 PM, Rolf Vandevaart wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 24, 2008, at 4:00 PM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Automake forces v7 mode so that Solaris tar can untar the tarball,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; IIRC.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can choose how it should behave:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;<a href="http://www.gnu.org/software/automake/manual/html_node/Options.html#tar_002dformats">http://www.gnu.org/software/automake/manual/html_node/Options.html#tar_002dformats</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;<a href="http://www.gnu.org/software/automake/manual/tar/Formats.html">http://www.gnu.org/software/automake/manual/tar/Formats.html</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can Solaris untar the other formats?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just did a quick check on Solaris tar and GNU tar on Solaris 9 and  
</span><br>
<span class="quotelev1">&gt; 10.
</span><br>
<span class="quotelev1">&gt;  It looks like Solaris tar can handle the v7,oldgnu,ustar,gnu.  It
</span><br>
<span class="quotelev1">&gt; seemed to handle the posix format, but spit out some complaints.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (tar: ompi/PaxHeaders.19602/test_get1_mod.c~: typeflag 'x' not
</span><br>
<span class="quotelev1">&gt; recognized, converting to regular file)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can dig deeper into this if we need to.  From what I have read maybe
</span><br>
<span class="quotelev1">&gt; using the ustar format will satisfy all our needs?  We get the longer
</span><br>
<span class="quotelev1">&gt; filenames and compatibility with older tars.  The tar man page on
</span><br>
<span class="quotelev1">&gt; Solaris 9 and 10 does not mention a 99 character limit, it says:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                              &quot;the   filename   cannot
</span><br>
<span class="quotelev1">&gt;                              exceed  256 characters. In addition,
</span><br>
<span class="quotelev1">&gt;                              it must be  possible  to  split  the
</span><br>
<span class="quotelev1">&gt;                              name  between parent directory names
</span><br>
<span class="quotelev1">&gt;                              so that the prefix is no longer than
</span><br>
<span class="quotelev1">&gt;                              155  characters  and  the name is no
</span><br>
<span class="quotelev1">&gt;                              longer than 100 characters.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =========================
</span><br>
<span class="quotelev1">&gt; rolf.vandevaart_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 781-442-3043
</span><br>
<span class="quotelev1">&gt; =========================
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
<li><strong>Next message:</strong> <a href="3046.php">Rolf Vandevaart: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<li><strong>Previous message:</strong> <a href="3044.php">Jennis Pruett: "[OMPI devel] Svn password issues with MTT"</a>
<li><strong>In reply to:</strong> <a href="3043.php">Rolf Vandevaart: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3046.php">Rolf Vandevaart: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<li><strong>Reply:</strong> <a href="3046.php">Rolf Vandevaart: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
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
