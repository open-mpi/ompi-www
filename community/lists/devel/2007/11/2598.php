<?
$subject_val = "Re: [OMPI devel] Moving fragments in btl sm";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  9 04:53:35 2007" -->
<!-- isoreceived="20071109095335" -->
<!-- sent="Fri, 9 Nov 2007 10:53:28 +0100 (CET)" -->
<!-- isosent="20071109095328" -->
<!-- name="Torje Henriksen" -->
<!-- email="torjeh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Moving fragments in btl sm" -->
<!-- id="Pine.LNX.4.63.0711091051250.5138_at_lgserv3.stud.cs.uit.no" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2D54E08B-0ABC-4127-8298-D53BC1BE6092_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Moving fragments in btl sm<br>
<strong>From:</strong> Torje Henriksen (<em>torjeh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-09 04:53:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2599.php">Josh Hursey: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<li><strong>Previous message:</strong> <a href="2597.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16691"</a>
<li><strong>In reply to:</strong> <a href="2593.php">George Bosilca: "Re: [OMPI devel] Moving fragments in btl sm"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, don't know how long it would take me to find it on my own.
<br>
<p>And thanks to you too of course, Ollie :)
<br>
<p><p>Regards,
<br>
<p>-Torje
<br>
<p><p>On Thu, 8 Nov 2007, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; The real memory copy happen in the convertor, more specifically in the 
</span><br>
<span class="quotelev1">&gt; ompi_convertor_pack for the sender and in the ompi_convertor_unpack for the 
</span><br>
<span class="quotelev1">&gt; receiver. In fact, none of the BTL directly call memcpy, all memory movements 
</span><br>
<span class="quotelev1">&gt; are done via the convertor.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 8, 2007, at 7:38 AM, Torje Henriksen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have a question that I shouldn't need to ask, but I'm
</span><br>
<span class="quotelev2">&gt;&gt; kind of lost in the code.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The btl sm component is using the circular buffers to write and read
</span><br>
<span class="quotelev2">&gt;&gt; fragments (sending and receiving).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In the write_to_head and read_from_tail I can only see pointers beeing set,
</span><br>
<span class="quotelev2">&gt;&gt; no data being moved. So where does the actual data movement/copying take
</span><br>
<span class="quotelev2">&gt;&gt; place? I'm thinking maybe a callback function existing somewhere :)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for your help now and earlier.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Torje Henriksen
</span><br>
<span class="quotelev2">&gt;&gt; (torjeh_at_[hidden])
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2599.php">Josh Hursey: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<li><strong>Previous message:</strong> <a href="2597.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16691"</a>
<li><strong>In reply to:</strong> <a href="2593.php">George Bosilca: "Re: [OMPI devel] Moving fragments in btl sm"</a>
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
