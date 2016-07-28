<?
$subject_val = "Re: [OMPI devel] Fwd: === CREATE FAILURE ===";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 24 16:49:21 2008" -->
<!-- isoreceived="20080124214921" -->
<!-- sent="Thu, 24 Jan 2008 13:44:04 -0800" -->
<!-- isosent="20080124214404" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: === CREATE FAILURE ===" -->
<!-- id="479906A4.7080906_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BC1A583-848D-4987-8D9D-88063982C04C_at_eecs.utk.edu" -->
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
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-24 16:44:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3042.php">Jeff Squyres: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<li><strong>Previous message:</strong> <a href="3040.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<li><strong>In reply to:</strong> <a href="3040.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3042.php">Jeff Squyres: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<li><strong>Reply:</strong> <a href="3042.php">Jeff Squyres: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
IMHO shortening the names now just delays dealing with the problem.
<br>
<p>I see 2 possible approaches to a long-term fix:
<br>
1) add some machinery on the build system to complain when a filename 
<br>
would exceed 99 chars (before the file gets into svn).
<br>
2) probe at configure time for a $TAR command that produces the POSIX format
<br>
<p>I favor #2
<br>
<p>-Paul
<br>
<p>Aur&#233;lien Bouteiller wrote:
<br>
<span class="quotelev1">&gt; Ok, I'll change the filenames.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 24 janv. 08 &#224; 15:43, Brian W. Barrett a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Automake forces v7 mode so that Solaris tar can untar the tarball,  
</span><br>
<span class="quotelev2">&gt;&gt; IIRC.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, 24 Jan 2008, Aur&#195;&#169;lien Bouteiller wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; According to posix, tar should not limit the file name length. Only
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the v7 implementation of tar is limited to 99 characters. GNU tar has
</span><br>
<span class="quotelev3">&gt;&gt;&gt; never been limited in the number of characters file names can have.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You should check with tar --help that tar on your machine defaults to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; format=gnu or format=posix. If it defaults to format=v7 I am curious
</span><br>
<span class="quotelev3">&gt;&gt;&gt; why. Are you using solaris ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Aurelien
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 24 janv. 08 &#195;  15:18, Jeff Squyres a &#195;&#169;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm trying to replicate and getting a lot of these:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tar: openmpi-1.3a1r17212M/ompi/mca/pml/v/vprotocol/mca/vprotocol/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pessimist/vprotocol_pessimist_sender_based.c: file name is too long
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (max 99); not dumped
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tar: openmpi-1.3a1r17212M/ompi/mca/pml/v/vprotocol/mca/vprotocol/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pessimist/vprotocol_pessimist_component.c: file name is too long  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (max
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 99); not dumped
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'll bet that this is the real problem.  GNU tar on linux defaults  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 99 characters max, and the _component.c filename is 102, for  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; example.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can you shorten your names?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
[snip]
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3042.php">Jeff Squyres: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<li><strong>Previous message:</strong> <a href="3040.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<li><strong>In reply to:</strong> <a href="3040.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3042.php">Jeff Squyres: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<li><strong>Reply:</strong> <a href="3042.php">Jeff Squyres: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
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
