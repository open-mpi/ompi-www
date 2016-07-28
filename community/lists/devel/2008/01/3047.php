<?
$subject_val = "Re: [OMPI devel] Fwd: === CREATE FAILURE ===";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 24 18:26:33 2008" -->
<!-- isoreceived="20080124232633" -->
<!-- sent="Thu, 24 Jan 2008 18:25:29 -0500" -->
<!-- isosent="20080124232529" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: === CREATE FAILURE ===" -->
<!-- id="C1A24280-449F-46D7-A5A6-0E8ADA51D8DC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47991D4A.7040700_at_Sun.COM" -->
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
<strong>Date:</strong> 2008-01-24 18:25:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3048.php">Rolf Vandevaart: "[OMPI devel] Hierarchical Collectives Query"</a>
<li><strong>Previous message:</strong> <a href="3046.php">Rolf Vandevaart: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<li><strong>In reply to:</strong> <a href="3046.php">Rolf Vandevaart: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3040.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Correct.  Still looking into that problem -- we'll likely .ompi_ignore  
<br>
the v pml tonight.
<br>
<p><p>On Jan 24, 2008, at 6:20 PM, Rolf Vandevaart wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Works for me.  I downloaded both the gz and bz2 formats.  Unzipped and
</span><br>
<span class="quotelev1">&gt; untarred using Solaris tar on sparc and all looks good.  No issues  
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt; the long filename.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also ran configure and saw this error:
</span><br>
<span class="quotelev1">&gt; config.status: error: cannot find input file:
</span><br>
<span class="quotelev1">&gt; ompi/mca/pml/v/vprotocol/pessimist/Makefile.in
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I assume that has nothing to do with the tar issue?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Rolf -- I've made tarballs in the ustar format; can you give them a
</span><br>
<span class="quotelev2">&gt;&gt; whirl?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/~jsquyres/unofficial/">http://www.open-mpi.org/~jsquyres/unofficial/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 24, 2008, at 5:07 PM, Rolf Vandevaart wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jan 24, 2008, at 4:00 PM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Automake forces v7 mode so that Solaris tar can untar the  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tarball,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; IIRC.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; You can choose how it should behave:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;<a href="http://www.gnu.org/software/automake/manual/html_node/Options.html#tar_002dformats">http://www.gnu.org/software/automake/manual/html_node/Options.html#tar_002dformats</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;<a href="http://www.gnu.org/software/automake/manual/tar/Formats.html">http://www.gnu.org/software/automake/manual/tar/Formats.html</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can Solaris untar the other formats?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I just did a quick check on Solaris tar and GNU tar on Solaris 9 and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 10.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like Solaris tar can handle the v7,oldgnu,ustar,gnu.  It
</span><br>
<span class="quotelev3">&gt;&gt;&gt; seemed to handle the posix format, but spit out some complaints.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (tar: ompi/PaxHeaders.19602/test_get1_mod.c~: typeflag 'x' not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; recognized, converting to regular file)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can dig deeper into this if we need to.  From what I have read  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; maybe
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using the ustar format will satisfy all our needs?  We get the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; longer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; filenames and compatibility with older tars.  The tar man page on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Solaris 9 and 10 does not mention a 99 character limit, it says:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                             &quot;the   filename   cannot
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                             exceed  256 characters. In addition,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                             it must be  possible  to  split  the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                             name  between parent directory names
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                             so that the prefix is no longer than
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                             155  characters  and  the name is no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                             longer than 100 characters.&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =========================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rolf.vandevaart_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 781-442-3043
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =========================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="3048.php">Rolf Vandevaart: "[OMPI devel] Hierarchical Collectives Query"</a>
<li><strong>Previous message:</strong> <a href="3046.php">Rolf Vandevaart: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<li><strong>In reply to:</strong> <a href="3046.php">Rolf Vandevaart: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3040.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
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
