<?
$subject_val = "Re: [OMPI users] PathScale problems persist";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 23 06:09:49 2010" -->
<!-- isoreceived="20100923100949" -->
<!-- sent="Thu, 23 Sep 2010 06:09:44 -0400" -->
<!-- isosent="20100923100944" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PathScale problems persist" -->
<!-- id="8EC7CEBB-E3DB-48FE-82E0-6BF95503C0AD_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1285228568.10475.10.camel_at_boabdilmec" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-23 06:09:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14288.php">Gabriele Fatigati: "[OMPI users] Question about Asynchronous collectives"</a>
<li><strong>Previous message:</strong> <a href="14286.php">Rafael Arco Arredondo: "Re: [OMPI users] PathScale problems persist"</a>
<li><strong>In reply to:</strong> <a href="14286.php">Rafael Arco Arredondo: "Re: [OMPI users] PathScale problems persist"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You should probably take this up with Pathscale's support team.
<br>
<p><p>On Sep 23, 2010, at 3:56 AM, Rafael Arco Arredondo wrote:
<br>
<p><span class="quotelev1">&gt; I am using GCC 4.x:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ pathCC -v
</span><br>
<span class="quotelev1">&gt; PathScale(TM) Compiler Suite: Version 3.2
</span><br>
<span class="quotelev1">&gt; Built on: 2008-06-16 16:41:38 -0700
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; GNU gcc version 4.2.0 (PathScale 3.2 driver)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ pathCC -show-defaults
</span><br>
<span class="quotelev1">&gt; Optimization level and compilation target:
</span><br>
<span class="quotelev1">&gt;   -O2 -mcpu=opteron -m64 -msse -msse2 -mno-sse3 -mno-3dnow -mno-sse4a
</span><br>
<span class="quotelev1">&gt; -gnu4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And I also tried with mpiCC -gnu4 to be totally sure. It's rather weird
</span><br>
<span class="quotelev1">&gt; that I get this error and Ake does not...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I configured Open MPI with PathScale with the following line, by the
</span><br>
<span class="quotelev1">&gt; way:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --with-openib=/usr --with-openib-libdir=/usr/lib64
</span><br>
<span class="quotelev1">&gt; --with-sge --enable-static CC=pathcc CXX=pathCC F77=pathf90 F90=pathf90
</span><br>
<span class="quotelev1">&gt; FC=pathf90
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And with GCC:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --with-openib=/usr --with-openib-libdir=/usr/lib64
</span><br>
<span class="quotelev1">&gt; --with-sge --enable-static
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's not an Infiniband or SGE issue. I also tried with all processes
</span><br>
<span class="quotelev1">&gt; running on the same node and without SGE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rafa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, 2010-09-22 at 14:54 +0200, Ake Sandgren wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, 2010-09-22 at 14:16 +0200, Ake Sandgren wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, 2010-09-22 at 07:42 -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is a problem with the Pathscale compiler and old versions of
</span><br>
<span class="quotelev2">&gt;&gt; GCC.  See:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=building#pathscale-broken-with-mpi-c%2B%2B-api">http://www.open-mpi.org/faq/?category=building#pathscale-broken-with-mpi-c%2B%2B-api</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I note that you said you're already using GCC 4.x, but it's not
</span><br>
<span class="quotelev2">&gt;&gt; clear from your text whether pathscale is using that compiler or a
</span><br>
<span class="quotelev2">&gt;&gt; different GCC on the back-end.  If you can confirm that pathscale *is*
</span><br>
<span class="quotelev2">&gt;&gt; using GCC 4.x on the back-end, then this is worth reporting to the
</span><br>
<span class="quotelev2">&gt;&gt; pathscale support people.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have no problem running the code below compiled with openmpi 1.4.2
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pathscale 3.2.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; And i should of course have specified that this is with a GCC4.x
</span><br>
<span class="quotelev2">&gt;&gt; backend.
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Rafael Arco Arredondo
</span><br>
<span class="quotelev1">&gt; Centro de Servicios de Inform&#225;tica y Redes de Comunicaciones
</span><br>
<span class="quotelev1">&gt; Campus de Fuentenueva - Edificio Mecenas
</span><br>
<span class="quotelev1">&gt; Universidad de Granada
</span><br>
<span class="quotelev1">&gt; E-18071 Granada Spain
</span><br>
<span class="quotelev1">&gt; Tel: +34 958 241010   Ext:31114   E-mail: rafaarco_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14288.php">Gabriele Fatigati: "[OMPI users] Question about Asynchronous collectives"</a>
<li><strong>Previous message:</strong> <a href="14286.php">Rafael Arco Arredondo: "Re: [OMPI users] PathScale problems persist"</a>
<li><strong>In reply to:</strong> <a href="14286.php">Rafael Arco Arredondo: "Re: [OMPI users] PathScale problems persist"</a>
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
