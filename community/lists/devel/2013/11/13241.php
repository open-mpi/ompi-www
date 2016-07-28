<?
$subject_val = "[OMPI devel] Fwd:  Bug in MPI.MINLOC with Java binding";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 12 14:46:55 2013" -->
<!-- isoreceived="20131112194655" -->
<!-- sent="Tue, 12 Nov 2013 11:46:09 -0800" -->
<!-- isosent="20131112194609" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd:  Bug in MPI.MINLOC with Java binding" -->
<!-- id="F8F37167-3B72-44BC-BC92-30E4F555F61C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="03297873-C4B1-4DD4-804A-48A1B113895E_at_dsic.upv.es" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd:  Bug in MPI.MINLOC with Java binding<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-12 14:46:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13242.php">Oscar Vega-Gisbert: "Re: [OMPI devel] Bug in MPI.MINLOC with Java binding"</a>
<li><strong>Previous message:</strong> <a href="13240.php">Ralph Castain: "Re: [OMPI devel] Bug in MPI.MINLOC with Java binding"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This was resolved off-list, but I'm reposting it here so it (a) resides in our archives, and (b) is available for others with similar questions about the revised Java bindings.
<br>
<p>Ralph
<br>
<p><p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: &quot;Jose E. Roman&quot; &lt;jroman_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Fwd: [OMPI devel] Bug in MPI.MINLOC with Java binding
</span><br>
<span class="quotelev1">&gt; Date: November 11, 2013 at 11:05:12 PM PST
</span><br>
<span class="quotelev1">&gt; To: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Inicio del mensaje reenviado:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; De: Oscar Vega-Gisbert &lt;ovega_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Fecha: 12 de noviembre de 2013 00:08:41 GMT+01:00
</span><br>
<span class="quotelev2">&gt;&gt; Para: esaliya_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Cc: Jose Roman &lt;jroman_at_[hidden]&gt;, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Asunto: Re: Fwd: [OMPI devel] Bug in MPI.MINLOC with Java binding
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Saliya,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In the in the previous versions of the library, MAXLOC and MINLOC were implemented in Java and it was possible to use Java int arrays. But now the implementation is native and you can not use Java int because on some platforms the int size (in the C side) may be different.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You must use the struct 'mpi.Int2' as you can see in your corrected example.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Oscar
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Saliya Ekanayake &lt;esaliya_at_[hidden]&lt;mailto:esaliya_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: [OMPI devel] Bug in MPI.MINLOC with Java binding
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: November 11, 2013 3:35:23 PM EST
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: &lt;devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reply-To: Open MPI Developers &lt;devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've been using nightly tarball openmpi-1.9a1r28919 with Java binding and it had a bug in its MINLOC implementation (Minloc.java). Essentially, the following line,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; out_array [outdisp + 1] = in_array [outdisp + 1] ;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should be changed to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; out_array [outdisp + 1] = in_array [indisp + 1] ;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The same should be done for MAXLOC (Maxloc.java) implementation as well. I tested with the change and both MINLOC and MAXLOC worked as expected afterwards.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, these files are no longer available in the latest trunk and it seems the API for collective operations have changed as well. Still MINLOC (and MAXLOC) does not work as expected. I've attached a sample code to reproduce the issue and an output from it (for MINLOC).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am running on 64bit Ubuntu 12.04.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any suggestions?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you in advance,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Saliya
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Saliya Ekanayake esaliya_at_[hidden]&lt;mailto:esaliya_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://saliya.org<http://saliya.org/">http://saliya.org<http://saliya.org/</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; This message was sent using IMP, the Internet Messaging Program.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13241/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13241/MinlocTester.java.tar.gz">MinlocTester.java.tar.gz</a>
</ul>
<!-- attachment="MinlocTester.java.tar.gz" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13241/03-attachment">attachment</a>
</ul>
<!-- attachment="03-attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13242.php">Oscar Vega-Gisbert: "Re: [OMPI devel] Bug in MPI.MINLOC with Java binding"</a>
<li><strong>Previous message:</strong> <a href="13240.php">Ralph Castain: "Re: [OMPI devel] Bug in MPI.MINLOC with Java binding"</a>
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
