<?
$subject_val = "Re: [OMPI devel] Another patch for v1.2.5";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec  1 11:27:51 2007" -->
<!-- isoreceived="20071201162751" -->
<!-- sent="Sat, 1 Dec 2007 09:27:46 -0700" -->
<!-- isosent="20071201162746" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Another patch for v1.2.5" -->
<!-- id="006E90A8-E2A6-4881-A59F-718E5B556966_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3B994209-A685-4BD9-97FF-A966A0F01F76_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Another patch for v1.2.5<br>
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-01 11:27:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2700.php">Pavel Shamis (Pasha): "Re: [OMPI devel] tmp XRC branches"</a>
<li><strong>Previous message:</strong> <a href="2698.php">Jeff Squyres: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>In reply to:</strong> <a href="2696.php">George Bosilca: "Re: [OMPI devel] Another patch for v1.2.5"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Probably, but there's two main differences:
<br>
<p>1) the TCP btl doesn't have the all-to-one startup issue that causes  
<br>
the ECONNREFUSED when everyone goes back to the head node (doesn't  
<br>
even do n-to-n, since it's lazy wireup)
<br>
<p>2) the TCP btl doesn't squawk about connection retries nearly as often  
<br>
and just silently makes it work (this patch also removes an awful lot  
<br>
of noisy printfs).
<br>
<p>So while it wouldn't hurt to update the TCP btl, I don't think it's  
<br>
necessary (and am definitely calling &quot;not it&quot;).
<br>
<p>Brian
<br>
<p><p>On Dec 1, 2007, at 1:22 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Isn't a similar patch required for the TCP BTL ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks,
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 30, 2007, at 4:59 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Inspired by this thread:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/community/lists/users/2007/11/4547.php">http://www.open-mpi.org/community/lists/users/2007/11/4547.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian kindly donated a patch to make Linux ECONNREFUSED behavior
</span><br>
<span class="quotelev2">&gt;&gt; better in the oob TCP.  I filed CMR 1192 to get this into 1.2.5.   
</span><br>
<span class="quotelev2">&gt;&gt; It's
</span><br>
<span class="quotelev2">&gt;&gt; not critical for 1.2.5, but it would be nice to have.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2700.php">Pavel Shamis (Pasha): "Re: [OMPI devel] tmp XRC branches"</a>
<li><strong>Previous message:</strong> <a href="2698.php">Jeff Squyres: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>In reply to:</strong> <a href="2696.php">George Bosilca: "Re: [OMPI devel] Another patch for v1.2.5"</a>
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
