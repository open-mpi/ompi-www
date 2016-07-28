<?
$subject_val = "Re: [OMPI devel] Bug in MPI.MINLOC with Java binding";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 12 16:15:53 2013" -->
<!-- isoreceived="20131112211553" -->
<!-- sent="Tue, 12 Nov 2013 22:15:50 +0100" -->
<!-- isosent="20131112211550" -->
<!-- name="Oscar Vega-Gisbert" -->
<!-- email="ovega_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bug in MPI.MINLOC with Java binding" -->
<!-- id="20131112221550.90162y075uuhuqgw_at_webmail.dsic.upv.es" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E9E7C25B-BDC7-43E6-B2D2-18373CE4B813_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Bug in MPI.MINLOC with Java binding<br>
<strong>From:</strong> Oscar Vega-Gisbert (<em>ovega_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-12 16:15:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13243.php">Nathan Hjelm: "[OMPI devel] Heads Up: ROMIO refresh incoming"</a>
<li><strong>Previous message:</strong> <a href="13241.php">Ralph Castain: "[OMPI devel] Fwd:  Bug in MPI.MINLOC with Java binding"</a>
<li><strong>Maybe in reply to:</strong> <a href="13236.php">Saliya Ekanayake: "[OMPI devel] Bug in MPI.MINLOC with Java binding"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Saliya,
<br>
<p>In the in the previous versions of the library, MAXLOC and MINLOC were  
<br>
implemented in Java and it was possible to use Java int arrays. But  
<br>
now the implementation is native and you can not use Java int because  
<br>
on some platforms the int size (in the C side) may be different.
<br>
<p>You must use the struct 'mpi.Int2' as you can see in your corrected example.
<br>
<p>Regards,
<br>
Oscar
<br>
<p><span class="quotelev1">&gt; From: Saliya Ekanayake &lt;esaliya_at_[hidden]&lt;mailto:esaliya_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] Bug in MPI.MINLOC with Java binding
</span><br>
<span class="quotelev1">&gt; Date: November 11, 2013 3:35:23 PM EST
</span><br>
<span class="quotelev1">&gt; To: &lt;devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Reply-To: Open MPI Developers &lt;devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've been using nightly tarball openmpi-1.9a1r28919 with Java  
</span><br>
<span class="quotelev1">&gt; binding and it had a bug in its MINLOC implementation (Minloc.java).  
</span><br>
<span class="quotelev1">&gt; Essentially, the following line,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; out_array [outdisp + 1] = in_array [outdisp + 1] ;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; should be changed to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; out_array [outdisp + 1] = in_array [indisp + 1] ;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The same should be done for MAXLOC (Maxloc.java) implementation as  
</span><br>
<span class="quotelev1">&gt; well. I tested with the change and both MINLOC and MAXLOC worked as  
</span><br>
<span class="quotelev1">&gt; expected afterwards.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, these files are no longer available in the latest trunk and  
</span><br>
<span class="quotelev1">&gt; it seems the API for collective operations have changed as well.  
</span><br>
<span class="quotelev1">&gt; Still MINLOC (and MAXLOC) does not work as expected. I've attached a  
</span><br>
<span class="quotelev1">&gt; sample code to reproduce the issue and an output from it (for MINLOC).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am running on 64bit Ubuntu 12.04.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you in advance,
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Saliya Ekanayake esaliya_at_[hidden]&lt;mailto:esaliya_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://saliya.org<http://saliya.org/">http://saliya.org<http://saliya.org/</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:  
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p>----------------------------------------------------------------
<br>
This message was sent using IMP, the Internet Messaging Program.
<br>
<p>
<br><p>
<p><hr>
<ul>
<li>text/x-java attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13242/MinlocTester.java">MinlocTester.java</a>
</ul>
<!-- attachment="MinlocTester.java" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13243.php">Nathan Hjelm: "[OMPI devel] Heads Up: ROMIO refresh incoming"</a>
<li><strong>Previous message:</strong> <a href="13241.php">Ralph Castain: "[OMPI devel] Fwd:  Bug in MPI.MINLOC with Java binding"</a>
<li><strong>Maybe in reply to:</strong> <a href="13236.php">Saliya Ekanayake: "[OMPI devel] Bug in MPI.MINLOC with Java binding"</a>
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
