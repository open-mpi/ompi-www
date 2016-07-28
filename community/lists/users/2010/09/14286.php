<?
$subject_val = "Re: [OMPI users] PathScale problems persist";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 23 03:56:37 2010" -->
<!-- isoreceived="20100923075637" -->
<!-- sent="Thu, 23 Sep 2010 09:56:08 +0200" -->
<!-- isosent="20100923075608" -->
<!-- name="Rafael Arco Arredondo" -->
<!-- email="rafaarco_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PathScale problems persist" -->
<!-- id="1285228568.10475.10.camel_at_boabdilmec" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI users] PathScale problems persist" -->
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
<strong>Subject:</strong> Re: [OMPI users] PathScale problems persist<br>
<strong>From:</strong> Rafael Arco Arredondo (<em>rafaarco_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-23 03:56:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14287.php">Jeff Squyres: "Re: [OMPI users] PathScale problems persist"</a>
<li><strong>Previous message:</strong> <a href="14285.php">Jeff Squyres: "Re: [OMPI users] BTL layer"</a>
<li><strong>Maybe in reply to:</strong> <a href="14256.php">Rafael Arco Arredondo: "[OMPI users] PathScale problems persist"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14287.php">Jeff Squyres: "Re: [OMPI users] PathScale problems persist"</a>
<li><strong>Reply:</strong> <a href="14287.php">Jeff Squyres: "Re: [OMPI users] PathScale problems persist"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am using GCC 4.x:
<br>
<p>$ pathCC -v
<br>
PathScale(TM) Compiler Suite: Version 3.2
<br>
Built on: 2008-06-16 16:41:38 -0700
<br>
Thread model: posix
<br>
GNU gcc version 4.2.0 (PathScale 3.2 driver)
<br>
<p>$ pathCC -show-defaults
<br>
Optimization level and compilation target:
<br>
&nbsp;&nbsp;&nbsp;-O2 -mcpu=opteron -m64 -msse -msse2 -mno-sse3 -mno-3dnow -mno-sse4a
<br>
-gnu4
<br>
<p>And I also tried with mpiCC -gnu4 to be totally sure. It's rather weird
<br>
that I get this error and Ake does not...
<br>
<p>I configured Open MPI with PathScale with the following line, by the
<br>
way:
<br>
<p>./configure --with-openib=/usr --with-openib-libdir=/usr/lib64
<br>
--with-sge --enable-static CC=pathcc CXX=pathCC F77=pathf90 F90=pathf90
<br>
FC=pathf90
<br>
<p>And with GCC:
<br>
<p>./configure --with-openib=/usr --with-openib-libdir=/usr/lib64
<br>
--with-sge --enable-static
<br>
<p>It's not an Infiniband or SGE issue. I also tried with all processes
<br>
running on the same node and without SGE.
<br>
<p>Best regards,
<br>
<p>Rafa
<br>
<p>On Wed, 2010-09-22 at 14:54 +0200, Ake Sandgren wrote:
<br>
<span class="quotelev1">&gt; On Wed, 2010-09-22 at 14:16 +0200, Ake Sandgren wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, 2010-09-22 at 07:42 -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This is a problem with the Pathscale compiler and old versions of
</span><br>
<span class="quotelev1">&gt; GCC.  See:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=building#pathscale-broken-with-mpi-c%2B%2B-api">http://www.open-mpi.org/faq/?category=building#pathscale-broken-with-mpi-c%2B%2B-api</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I note that you said you're already using GCC 4.x, but it's not
</span><br>
<span class="quotelev1">&gt; clear from your text whether pathscale is using that compiler or a
</span><br>
<span class="quotelev1">&gt; different GCC on the back-end.  If you can confirm that pathscale *is*
</span><br>
<span class="quotelev1">&gt; using GCC 4.x on the back-end, then this is worth reporting to the
</span><br>
<span class="quotelev1">&gt; pathscale support people.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have no problem running the code below compiled with openmpi 1.4.2
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev2">&gt; &gt; pathscale 3.2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And i should of course have specified that this is with a GCC4.x
</span><br>
<span class="quotelev1">&gt; backend.
</span><br>
<pre>
-- 
Rafael Arco Arredondo
Centro de Servicios de Inform&#195;&#161;tica y Redes de Comunicaciones
Campus de Fuentenueva - Edificio Mecenas
Universidad de Granada
E-18071 Granada Spain
Tel: +34 958 241010   Ext:31114   E-mail: rafaarco_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14287.php">Jeff Squyres: "Re: [OMPI users] PathScale problems persist"</a>
<li><strong>Previous message:</strong> <a href="14285.php">Jeff Squyres: "Re: [OMPI users] BTL layer"</a>
<li><strong>Maybe in reply to:</strong> <a href="14256.php">Rafael Arco Arredondo: "[OMPI users] PathScale problems persist"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14287.php">Jeff Squyres: "Re: [OMPI users] PathScale problems persist"</a>
<li><strong>Reply:</strong> <a href="14287.php">Jeff Squyres: "Re: [OMPI users] PathScale problems persist"</a>
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
