<?
$subject_val = "Re: [OMPI devel] reorder parameter in MPI_Cart_create";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 13 18:08:40 2009" -->
<!-- isoreceived="20090813220840" -->
<!-- sent="Thu, 13 Aug 2009 18:08:35 -0400" -->
<!-- isosent="20090813220835" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] reorder parameter in MPI_Cart_create" -->
<!-- id="271A94CE-031C-4936-9CB4-C40B97D40104_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1250156298.7103.20.camel_at_hp-laptop" -->
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
<strong>Subject:</strong> Re: [OMPI devel] reorder parameter in MPI_Cart_create<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-13 18:08:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6630.php">Greg Watson: "[OMPI devel] XML request"</a>
<li><strong>Previous message:</strong> <a href="6628.php">Terry Dontje: "[OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6627.php">Kiril Dichev: "[OMPI devel] reorder parameter in MPI_Cart_create"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You're absolutely correct; committed in trunk in r21816.  I filed CMR <a href="https://svn.open-mpi.org/trac/ompi/ticket/1998">https://svn.open-mpi.org/trac/ompi/ticket/1998</a> 
<br>
&nbsp;&nbsp;to get it into v1.3.4.
<br>
<p>Thanks!
<br>
<p><p>On Aug 13, 2009, at 5:38 AM, Kiril Dichev wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a tool developer reported a problem with MPI_Cart_create. The function
</span><br>
<span class="quotelev1">&gt; seems to be non-standard conform.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The parameter &quot;reorder&quot; is a logical flag. According to section 2.6.3
</span><br>
<span class="quotelev1">&gt; from the MPI standard, a value &quot;0&quot; means false, and a non-zero value
</span><br>
<span class="quotelev1">&gt; means &quot;true&quot;. However, anything other than &quot;0&quot; and &quot;1&quot; leads to  
</span><br>
<span class="quotelev1">&gt; program
</span><br>
<span class="quotelev1">&gt; abortion for this parameter.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I attach the trivial patch I propose for this (to be applied in
</span><br>
<span class="quotelev1">&gt; &quot;ompi/mpi/c/&quot;) and the test program used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Kiril
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Dipl.-Inf. Kiril Dichev
</span><br>
<span class="quotelev1">&gt; Tel.: +49 711 685 60492
</span><br>
<span class="quotelev1">&gt; E-mail: dichev_at_[hidden]
</span><br>
<span class="quotelev1">&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev1">&gt; Universit&#228;t Stuttgart
</span><br>
<span class="quotelev1">&gt; 70550 Stuttgart
</span><br>
<span class="quotelev1">&gt; Germany
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;cart.c&gt;&lt;cart_create.c.diff&gt;&lt;ATT12335162.txt&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6630.php">Greg Watson: "[OMPI devel] XML request"</a>
<li><strong>Previous message:</strong> <a href="6628.php">Terry Dontje: "[OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6627.php">Kiril Dichev: "[OMPI devel] reorder parameter in MPI_Cart_create"</a>
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
