<?
$subject_val = "Re: [OMPI devel] Fwd: === CREATE FAILURE ===";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 24 17:07:05 2008" -->
<!-- isoreceived="20080124220705" -->
<!-- sent="Thu, 24 Jan 2008 17:06:44 -0500" -->
<!-- isosent="20080124220644" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: === CREATE FAILURE ===" -->
<!-- id="4FFED176-813A-4302-BF5B-4561F3DFCAD5_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="479906A4.7080906_at_lbl.gov" -->
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
<strong>Date:</strong> 2008-01-24 17:06:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3043.php">Rolf Vandevaart: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<li><strong>Previous message:</strong> <a href="3041.php">Paul H. Hargrove: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<li><strong>In reply to:</strong> <a href="3041.php">Paul H. Hargrove: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3044.php">Jennis Pruett: "[OMPI devel] Svn password issues with MTT"</a>
<li><strong>Reply:</strong> <a href="3044.php">Jennis Pruett: "[OMPI devel] Svn password issues with MTT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My question before is still relevant: can Solaris untar tarballs that  
<br>
are in the POSIX format?  If not, finding a tar that makes POSIX  
<br>
tarballs is moot.
<br>
<p><p>On Jan 24, 2008, at 4:44 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; IMHO shortening the names now just delays dealing with the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see 2 possible approaches to a long-term fix:
</span><br>
<span class="quotelev1">&gt; 1) add some machinery on the build system to complain when a filename
</span><br>
<span class="quotelev1">&gt; would exceed 99 chars (before the file gets into svn).
</span><br>
<span class="quotelev1">&gt; 2) probe at configure time for a $TAR command that produces the  
</span><br>
<span class="quotelev1">&gt; POSIX format
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I favor #2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aur&#233;lien Bouteiller wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Ok, I'll change the filenames.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Aurelien
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 24 janv. 08 &#224; 15:43, Brian W. Barrett a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Automake forces v7 mode so that Solaris tar can untar the tarball,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IIRC.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, 24 Jan 2008, Aur&#195;&#169;lien Bouteiller wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; According to posix, tar should not limit the file name length. Only
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the v7 implementation of tar is limited to 99 characters. GNU tar  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; has
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; never been limited in the number of characters file names can have.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You should check with tar --help that tar on your machine  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; defaults to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; format=gnu or format=posix. If it defaults to format=v7 I am  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; curious
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; why. Are you using solaris ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Aurelien
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Le 24 janv. 08 &#195;  15:18, Jeff Squyres a &#195;&#169;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm trying to replicate and getting a lot of these:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tar: openmpi-1.3a1r17212M/ompi/mca/pml/v/vprotocol/mca/vprotocol/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; pessimist/vprotocol_pessimist_sender_based.c: file name is too  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; long
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (max 99); not dumped
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tar: openmpi-1.3a1r17212M/ompi/mca/pml/v/vprotocol/mca/vprotocol/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; pessimist/vprotocol_pessimist_component.c: file name is too long
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (max
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 99); not dumped
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'll bet that this is the real problem.  GNU tar on linux defaults
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 99 characters max, and the _component.c filename is 102, for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; example.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Can you shorten your names?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; [snip]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="3043.php">Rolf Vandevaart: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<li><strong>Previous message:</strong> <a href="3041.php">Paul H. Hargrove: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<li><strong>In reply to:</strong> <a href="3041.php">Paul H. Hargrove: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3044.php">Jennis Pruett: "[OMPI devel] Svn password issues with MTT"</a>
<li><strong>Reply:</strong> <a href="3044.php">Jennis Pruett: "[OMPI devel] Svn password issues with MTT"</a>
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
