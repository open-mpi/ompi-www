<?
$subject_val = "Re: [OMPI devel] still supporting pgi?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 11 14:08:45 2014" -->
<!-- isoreceived="20141211190845" -->
<!-- sent="Thu, 11 Dec 2014 20:08:43 +0100" -->
<!-- isosent="20141211190843" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] still supporting pgi?" -->
<!-- id="5489EBBB.2090309_at_itc.rwth-aachen.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5FC79A6A-D106-4987-9D3A-77CB7BBEB3B2_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] still supporting pgi?<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-11 14:08:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16509.php">Vishwanath Venkatesan: "Re: [OMPI devel] Introducing memkind + Adding component in mpool framework"</a>
<li><strong>Previous message:</strong> <a href="16507.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] still supporting pgi?"</a>
<li><strong>In reply to:</strong> <a href="16507.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] still supporting pgi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16511.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] still supporting pgi?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
PGI compiler(s) are available on our Cluster:
<br>
<p>$ module avail pgi
<br>
<p>there are a lot of older versions, too:
<br>
$ module load DEPRECATED
<br>
$ module avail pgi
<br>
<p><p>best
<br>
<p>Paul
<br>
<p><p>P.S. in our standard environmet, Intel compieler and Open MPI are active, so
<br>
<p>$ module unload openmpi intel
<br>
$ module load pgi&lt;/waht_versions_you_wanna&gt;
<br>
<p>P.S. We also have Sun/Oracle Studio:
<br>
$ module avail studio
<br>
<p><p><p>On 12/11/14 19:45, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Ok.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW: I test with gcc and the intel compiler suite.  I do not have a PGI license to test with.
</span><br>
<p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, IT Center
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16508/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16509.php">Vishwanath Venkatesan: "Re: [OMPI devel] Introducing memkind + Adding component in mpool framework"</a>
<li><strong>Previous message:</strong> <a href="16507.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] still supporting pgi?"</a>
<li><strong>In reply to:</strong> <a href="16507.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] still supporting pgi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16511.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] still supporting pgi?"</a>
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
