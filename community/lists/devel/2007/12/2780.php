<?
$subject_val = "Re: [OMPI devel] Dynamically Turning On and Off Memory Manager of Open	MPI at Runtime??";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 10 21:19:43 2007" -->
<!-- isoreceived="20071211021943" -->
<!-- sent="Mon, 10 Dec 2007 21:19:35 -0500" -->
<!-- isosent="20071211021935" -->
<!-- name="Patrick Geoffray" -->
<!-- email="patrick_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Dynamically Turning On and Off Memory Manager of Open	MPI at Runtime??" -->
<!-- id="475DF3B7.7060809_at_myri.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OFEA1CC824.231BB406-ON852573AD.007C15CC-862573AD.007E34B2_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Dynamically Turning On and Off Memory Manager of Open	MPI at Runtime??<br>
<strong>From:</strong> Patrick Geoffray (<em>patrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-10 21:19:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2781.php">George Bosilca: "Re: [OMPI devel] openmpi-1.2.4 compilation error in orte_abort.c on Fedora 8 - patch included"</a>
<li><strong>Previous message:</strong> <a href="2779.php">Brian W. Barrett: "Re: [OMPI devel] Dynamically Turning On and Off Memory Manager of Open MPI at Runtime??"</a>
<li><strong>In reply to:</strong> <a href="2778.php">Peter Wong: "[OMPI devel] Dynamically Turning On and Off Memory Manager of Open MPI at Runtime??"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Peter,
<br>
<p>Peter Wong wrote:
<br>
<span class="quotelev1">&gt; Open MPI defines its own malloc (by default), so malloc of glibc
</span><br>
<span class="quotelev1">&gt; is not called.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But, without calling malloc of glibc, the allocator of libhugetlbfs
</span><br>
<span class="quotelev1">&gt; to back text and dynamic data by large pages, e.g., 16MB pages on
</span><br>
<span class="quotelev1">&gt; POWER systems, is not used.
</span><br>
<p>You could modify ptmalloc2 in OpenMPI to allocate Huge Pages directly. 
<br>
It would be a nice feature.
<br>
<p>Patrick
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2781.php">George Bosilca: "Re: [OMPI devel] openmpi-1.2.4 compilation error in orte_abort.c on Fedora 8 - patch included"</a>
<li><strong>Previous message:</strong> <a href="2779.php">Brian W. Barrett: "Re: [OMPI devel] Dynamically Turning On and Off Memory Manager of Open MPI at Runtime??"</a>
<li><strong>In reply to:</strong> <a href="2778.php">Peter Wong: "[OMPI devel] Dynamically Turning On and Off Memory Manager of Open MPI at Runtime??"</a>
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
