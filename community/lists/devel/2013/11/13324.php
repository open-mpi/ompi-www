<?
$subject_val = "Re: [OMPI devel] CUDA support not working?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 25 07:40:51 2013" -->
<!-- isoreceived="20131125124051" -->
<!-- sent="Mon, 25 Nov 2013 07:40:47 -0500" -->
<!-- isosent="20131125124047" -->
<!-- name="J&#246;rg Bornschein" -->
<!-- email="jb_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] CUDA support not working?" -->
<!-- id="BB12C791-326F-43AF-882F-5451E3C57972_at_capsec.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="812F22F5D75FE946B6D9883F4D3ECEA104057B8A_at_Piggulke.himolde.no" -->
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
<strong>Subject:</strong> Re: [OMPI devel] CUDA support not working?<br>
<strong>From:</strong> J&#246;rg Bornschein (<em>jb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-25 07:40:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13325.php">Nadia Derbey: "Re: [OMPI devel] bug in opal_generic_simple_pack_function()"</a>
<li><strong>Previous message:</strong> <a href="13323.php">George Bosilca: "Re: [OMPI devel] bug in opal_generic_simple_pack_function()"</a>
<li><strong>In reply to:</strong> <a href="13322.php">Solibakke Per Bjarte: "Re: [OMPI devel] CUDA support not working?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13328.php">Rolf vandeVaart: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>Reply:</strong> <a href="13328.php">Rolf vandeVaart: "Re: [OMPI devel] CUDA support not working?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 25.11.2013, at 07:34, Solibakke Per Bjarte &lt;Per.B.Solibakke_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; For version 1.7.3 and 1.7.4a1r29747 and CUDA-support&#133;&#133;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; --with-cuda &#150;with-hwloc &#150;enable-shared and the use of -VT
</span><br>
<span class="quotelev1">&gt; ] 
</span><br>
<span class="quotelev1">&gt; Running without VT:
</span><br>
<span class="quotelev1">&gt;             Error: /usr/local/lib/openmpi/mca_pml_obl.so: undefined symbol: progress_one_cuda_htod_event
</span><br>
<span class="quotelev1">&gt;  
</span><br>
..
<br>
<span class="quotelev1">&gt; Suggestions for option specifications. I have followed the e-mail correspondence between
</span><br>
<span class="quotelev1">&gt; J&#246;rg Bornschein,
</span><br>
<span class="quotelev1">&gt; Ralph Castain
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I have changed the Makefile.am before ./configure according to attached diff.pml
</span><br>
<span class="quotelev1">&gt; However, nothing helps for neither 1.7.3 nor 1.7.4a1r29747
</span><br>
<p><p>After patching Makefile.am, did you regenerate the automake/autoconf by running 
<br>
./autogen.sh at the top-level?
<br>
<p>&nbsp;&nbsp;&nbsp;j
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13325.php">Nadia Derbey: "Re: [OMPI devel] bug in opal_generic_simple_pack_function()"</a>
<li><strong>Previous message:</strong> <a href="13323.php">George Bosilca: "Re: [OMPI devel] bug in opal_generic_simple_pack_function()"</a>
<li><strong>In reply to:</strong> <a href="13322.php">Solibakke Per Bjarte: "Re: [OMPI devel] CUDA support not working?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13328.php">Rolf vandeVaart: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>Reply:</strong> <a href="13328.php">Rolf vandeVaart: "Re: [OMPI devel] CUDA support not working?"</a>
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
