<?
$subject_val = "Re: [OMPI devel] autodetect broken";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 21 20:00:21 2009" -->
<!-- isoreceived="20090722000021" -->
<!-- sent="Tue, 21 Jul 2009 20:00:16 -0400" -->
<!-- isosent="20090722000016" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] autodetect broken" -->
<!-- id="8CE9572E-7678-4C74-A115-A7E326B8A8D8_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="631A5D99-BAC2-4FE4-8C70-4FDB2D1C7A39_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] autodetect broken<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-21 20:00:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6488.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>Previous message:</strong> <a href="6486.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>In reply to:</strong> <a href="6486.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 21, 2009, at 7:55 PM, Iain Bason wrote:
<br>
<p><span class="quotelev2">&gt; &gt;  $ ./configure --prefix=/home/jsquyres/bogus --disable-mpi-f77 --
</span><br>
<span class="quotelev2">&gt; &gt; enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; No OPAL_* env variables set.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Same thing happens on OS X and Linux.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And does it fail when actually installed in /home/jsquyres/bogus, or
</span><br>
<span class="quotelev1">&gt; only when installed elsewhere?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>I have done a plain &quot;make -j 4 all; make install&quot; -- so it resides in / 
<br>
home/jsquyres/bogus.
<br>
<p>Per your prior mail, I'll back it out.
<br>
<p>I know Brian has some opinions about the changes in the base functions  
<br>
-- he'll be replying shortly (he's still driving home).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6488.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>Previous message:</strong> <a href="6486.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>In reply to:</strong> <a href="6486.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
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
