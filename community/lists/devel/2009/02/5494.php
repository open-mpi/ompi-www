<?
$subject_val = "Re: [OMPI devel] 1.3 runtime message ?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 16:19:41 2009" -->
<!-- isoreceived="20090219211941" -->
<!-- sent="Thu, 19 Feb 2009 16:19:36 -0500" -->
<!-- isosent="20090219211936" -->
<!-- name="Don Kerr" -->
<!-- email="Don.Kerr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.3 runtime message ?" -->
<!-- id="499DCCE8.7020006_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="499DC7C4.7070104_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.3 runtime message ?<br>
<strong>From:</strong> Don Kerr (<em>Don.Kerr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-19 16:19:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5495.php">Jim Langston: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<li><strong>Previous message:</strong> <a href="5493.php">Jim Langston: "[OMPI devel] 1.3 runtime message ?"</a>
<li><strong>In reply to:</strong> <a href="5493.php">Jim Langston: "[OMPI devel] 1.3 runtime message ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5495.php">Jim Langston: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<li><strong>Reply:</strong> <a href="5495.php">Jim Langston: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 02/19/09 15:57, Jim Langston wrote:
<br>
<span class="quotelev1">&gt; After building 1.3, running the example I get this message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [[55888,1],0]: A high-performance Open MPI point-to-point messaging 
</span><br>
<span class="quotelev1">&gt; module
</span><br>
<span class="quotelev1">&gt; was unable to find any relevant network interfaces:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Module: uDAPL
</span><br>
<span class="quotelev1">&gt;  Host: alpha
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 2
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 1 of 2
</span><br>
<span class="quotelev1">&gt; [alpha:09794] 1 more process has sent help message 
</span><br>
<span class="quotelev1">&gt; help-mpi-btl-base.txt / btl:no-nics
</span><br>
<span class="quotelev1">&gt; [alpha:09794] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see 
</span><br>
<span class="quotelev1">&gt; all help / error messages
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there something I need to do at runtime to eliminate the 
</span><br>
<span class="quotelev1">&gt; point-to-point message ?
</span><br>
So you want the message not to be reported. I believe &quot;--mca 
<br>
btl_base_warn_component_unused 0&quot;  will do the trick.
<br>
<p>-DON
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5495.php">Jim Langston: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<li><strong>Previous message:</strong> <a href="5493.php">Jim Langston: "[OMPI devel] 1.3 runtime message ?"</a>
<li><strong>In reply to:</strong> <a href="5493.php">Jim Langston: "[OMPI devel] 1.3 runtime message ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5495.php">Jim Langston: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<li><strong>Reply:</strong> <a href="5495.php">Jim Langston: "Re: [OMPI devel] 1.3 runtime message ?"</a>
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
