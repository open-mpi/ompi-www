<?
$subject_val = "Re: [OMPI users] MPI over tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  7 07:48:33 2012" -->
<!-- isoreceived="20120507114833" -->
<!-- sent="Mon, 7 May 2012 11:48:29 +0000" -->
<!-- isosent="20120507114829" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI over tcp" -->
<!-- id="C58785FC-0790-4534-A4BB-9D566A2259A0_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20120504224320.GS3458_at_rzlab.ucr.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI over tcp<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-07 07:48:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19205.php">ahmed lasheen: "[OMPI users] problem in installation"</a>
<li><strong>Previous message:</strong> <a href="19203.php">Eugene Loh: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>In reply to:</strong> <a href="19202.php">Don Armstrong: "Re: [OMPI users] MPI over tcp"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 4, 2012, at 6:43 PM, Don Armstrong wrote:
<br>
<p><span class="quotelev1">&gt; Even though this might have seemed like a stupid question, it put me
</span><br>
<span class="quotelev1">&gt; onto the right track. Apparently, mca_btl_tcp_endpoint_accept (or
</span><br>
<span class="quotelev1">&gt; similar) is unable to handle multiple IP addresses on the same
</span><br>
<span class="quotelev1">&gt; interface, and rejects the connection.
</span><br>
<p>Yes, I don't think we anticipated this scenario.
<br>
<p>This sounds FAQ-worthy to me -- just added it:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=tcp#ip-multiaddress-devices">http://www.open-mpi.org/faq/?category=tcp#ip-multiaddress-devices</a>
<br>
<p>I'll also file a feature enhancement; this sounds like a condition we should be able to detect and warn about.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19205.php">ahmed lasheen: "[OMPI users] problem in installation"</a>
<li><strong>Previous message:</strong> <a href="19203.php">Eugene Loh: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>In reply to:</strong> <a href="19202.php">Don Armstrong: "Re: [OMPI users] MPI over tcp"</a>
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
