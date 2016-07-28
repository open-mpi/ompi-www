<?
$subject_val = "Re: [OMPI devel] valgrind warnings (uninited mem passed to syscall)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 18 15:41:39 2007" -->
<!-- isoreceived="20071218204139" -->
<!-- sent="Tue, 18 Dec 2007 15:41:27 -0500" -->
<!-- isosent="20071218204127" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] valgrind warnings (uninited mem passed to syscall)" -->
<!-- id="7ED46D23-BBA6-4A01-8C69-05643E921537_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="e7ba66e40712171308x2a763085x9363fd634fca8be5_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] valgrind warnings (uninited mem passed to syscall)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-18 15:41:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2882.php">George Bosilca: "[OMPI devel] EuroPVM/MPI 2008 First Call for Papers"</a>
<li><strong>Previous message:</strong> <a href="2880.php">Tim Mattox: "[OMPI devel] Open MPI v1.2.5rc2 has been posted"</a>
<li><strong>In reply to:</strong> <a href="2876.php">Lisandro Dalcin: "[OMPI devel] valgrind warnings (uninited mem passed to syscall)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is not at this point.  There's stuff in the works (HLRS is  
<br>
working on some cool valgrind integration which goes beyond normal  
<br>
memory checking), but it's not ready yet.
<br>
<p>I'm aware of at least one place in the oob tcp that gets such a  
<br>
warning (we're sending an entire struct down the wire, but there's  
<br>
some &quot;holes&quot; in the memory such that we don't care about the values  
<br>
and they are therefore uninitialized); where are you seeing the issue?
<br>
<p><p><p>On Dec 17, 2007, at 4:08 PM, Lisandro Dalcin wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm getting valgrind warnings related to syscalls with uninitialized
</span><br>
<span class="quotelev1">&gt; memory (with release 1.2.4).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Before providing more details and code reproducing the problem, I
</span><br>
<span class="quotelev1">&gt; would like to know if there is any configure option I should take care
</span><br>
<span class="quotelev1">&gt; of which enables extra memory initialization (--enable-debug is
</span><br>
<span class="quotelev1">&gt; enough? I ask this because MPICH2 has specific configure option for
</span><br>
<span class="quotelev1">&gt; this, perhaps you also have something similar).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Lisandro Dalc&#237;n
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
</span><br>
<span class="quotelev1">&gt; Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
</span><br>
<span class="quotelev1">&gt; Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
</span><br>
<span class="quotelev1">&gt; PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
</span><br>
<span class="quotelev1">&gt; Tel/Fax: +54-(0)342-451.1594
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
<li><strong>Next message:</strong> <a href="2882.php">George Bosilca: "[OMPI devel] EuroPVM/MPI 2008 First Call for Papers"</a>
<li><strong>Previous message:</strong> <a href="2880.php">Tim Mattox: "[OMPI devel] Open MPI v1.2.5rc2 has been posted"</a>
<li><strong>In reply to:</strong> <a href="2876.php">Lisandro Dalcin: "[OMPI devel] valgrind warnings (uninited mem passed to syscall)"</a>
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
