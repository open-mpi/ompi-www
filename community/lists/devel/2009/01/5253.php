<?
$subject_val = "Re: [OMPI devel] RFC: sm Latency";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 21 01:18:32 2009" -->
<!-- isoreceived="20090121061832" -->
<!-- sent="Tue, 20 Jan 2009 22:22:50 -0800" -->
<!-- isosent="20090121062250" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: sm Latency" -->
<!-- id="4976BF3A.50908_at_sun.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5ABD4142-A5D0-40F2-BF2E-8AA91FBBB00A_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: sm Latency<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-21 01:22:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5254.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Previous message:</strong> <a href="5252.php">Patrick Geoffray: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>In reply to:</strong> <a href="5249.php">Brian Barrett: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5256.php">Jeff Squyres: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Reply:</strong> <a href="5256.php">Jeff Squyres: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; I unfortunately don't have time to look in depth at the patch.  But 
</span><br>
<span class="quotelev1">&gt; my  concern is that currently (today, not at some made up time in the  
</span><br>
<span class="quotelev1">&gt; future, maybe), we use the BTLs for more than just MPI point-to- 
</span><br>
<span class="quotelev1">&gt; point.  The rdma one-sided component (which was added for 1.3 and  
</span><br>
<span class="quotelev1">&gt; hopefully will be the default for 1.4) sends messages directly over  
</span><br>
<span class="quotelev1">&gt; the btls.  It would be interesting to know how that is handled.
</span><br>
<p>I'm not sure I understand what you're saying.
<br>
<p>Does it help to point out that existing BTL routines don't change?  The 
<br>
existing sendi is just a function that, if available, can be used, where 
<br>
appropriate, to send &quot;immediately&quot;.  Similarly for the proposed recvi.  
<br>
No existing BTL functionality is removed.  Just new, optional functions 
<br>
added for whoever wants to (and can) use them.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5254.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Previous message:</strong> <a href="5252.php">Patrick Geoffray: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>In reply to:</strong> <a href="5249.php">Brian Barrett: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5256.php">Jeff Squyres: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Reply:</strong> <a href="5256.php">Jeff Squyres: "Re: [OMPI devel] RFC: sm Latency"</a>
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
