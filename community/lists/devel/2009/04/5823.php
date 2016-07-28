<?
$subject_val = "Re: [OMPI devel] [Open MPI] #1881: Remove -lopenmpi-malloc support";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 16:28:47 2009" -->
<!-- isoreceived="20090414202847" -->
<!-- sent="Tue, 14 Apr 2009 16:28:42 -0400" -->
<!-- isosent="20090414202842" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Open MPI] #1881: Remove -lopenmpi-malloc support" -->
<!-- id="AA3D6AA6-5356-46C3-84AF-4FC9472EFE9C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="044.76953abd7ea4c3265741e3c77ece34e1_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [Open MPI] #1881: Remove -lopenmpi-malloc support<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-14 16:28:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5824.php">Jeff Squyres: "[OMPI devel] NEWS bullets for 1.3.2"</a>
<li><strong>Previous message:</strong> <a href="5822.php">Timothy Hayes: "Re: [OMPI devel] A Couple of Questions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Does anyone have any objections to this ticket for the v1.5 series?
<br>
<p><p>On Apr 14, 2009, at 4:21 PM, Open MPI wrote:
<br>
<p><span class="quotelev1">&gt; #1881: Remove -lopenmpi-malloc support
</span><br>
<span class="quotelev1">&gt; ------------------------ 
</span><br>
<span class="quotelev1">&gt; +---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Reporter:  jsquyres     |       Owner:  jsquyres
</span><br>
<span class="quotelev1">&gt;     Type:  enhancement  |      Status:  new
</span><br>
<span class="quotelev1">&gt; Priority:  major        |   Milestone:  Open MPI 1.5
</span><br>
<span class="quotelev1">&gt;  Version:  trunk        |    Keywords:
</span><br>
<span class="quotelev1">&gt; ------------------------ 
</span><br>
<span class="quotelev1">&gt; +---------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  -lopenmpi-malloc was introduced in v1.3 and was deprecated in  
</span><br>
<span class="quotelev1">&gt; v1.3.2 when
</span><br>
<span class="quotelev1">&gt;  we stopped using mallopt.  The libopenmpi-malloc library still  
</span><br>
<span class="quotelev1">&gt; exists for
</span><br>
<span class="quotelev1">&gt;  the rest of the 1.3 and 1.4 series, but is empty / harmless.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  In v1.5, we should remove this library.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Ticket URL: &lt;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1881">https://svn.open-mpi.org/trac/ompi/ticket/1881</a>&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI &lt;<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="5824.php">Jeff Squyres: "[OMPI devel] NEWS bullets for 1.3.2"</a>
<li><strong>Previous message:</strong> <a href="5822.php">Timothy Hayes: "Re: [OMPI devel] A Couple of Questions"</a>
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
