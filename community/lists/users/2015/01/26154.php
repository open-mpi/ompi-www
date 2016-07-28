<?
$subject_val = "Re: [OMPI users] send and receive vectors + variable length";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  9 12:31:05 2015" -->
<!-- isoreceived="20150109173105" -->
<!-- sent="Fri, 9 Jan 2015 17:31:03 +0000" -->
<!-- isosent="20150109173103" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI users] send and receive vectors + variable length" -->
<!-- id="EA78A4B0-432B-40D0-84BB-02976C482C53_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="EDF98D70-48D6-4A3C-BE48-EC3437EDDB13_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] send and receive vectors + variable length<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-09 12:31:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26155.php">George Bosilca: "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>Previous message:</strong> <a href="26153.php">Moritz Hanke: "[OMPI users] Issue with requests in openmpi?"</a>
<li><strong>In reply to:</strong> <a href="26150.php">Jeff Squyres (jsquyres): "Re: [OMPI users] send and receive vectors + variable length"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26155.php">George Bosilca: "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>Reply:</strong> <a href="26155.php">George Bosilca: "Re: [OMPI users] send and receive vectors + variable length"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 9, 2015, at 7:46 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>

<br>
<span class="quotelev1">&gt; Yes, I know examples 3.8/3.9 are blocking examples.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But it's morally the same as:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_WAITALL(send_requests...)
</span><br>
<span class="quotelev1">&gt; MPI_WAITALL(recv_requests...)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Strictly speaking, that can deadlock, too.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It reality, it has far less chance of deadlocking than examples 3.8 and 3.9 (because you're likely within the general progression engine, and the implementation will progress both the send and receive requests while in the first WAITALL).  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But still, it would be valid for an implementation to *only* progress the send requests -- and NOT the receive requests -- while in the first WAITALL.  Which makes it functionally equivalent to examples 3.8/3.9.
</span><br>

<br>
That's not true.  The implementation is required to make progress on all outstanding requests (assuming they can be progressed).  The following should not deadlock:
<br>

<br>
----&#226;&#156;&#130;----
<br>
for (...)  MPI_Isend(...)
<br>
for (...)  MPI_Irecv(...)
<br>
MPI_Waitall(send_requests...)
<br>
MPI_Waitall(recv_requests...)
<br>
----&#226;&#156;&#130;----
<br>

<br>
-Dave
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26155.php">George Bosilca: "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>Previous message:</strong> <a href="26153.php">Moritz Hanke: "[OMPI users] Issue with requests in openmpi?"</a>
<li><strong>In reply to:</strong> <a href="26150.php">Jeff Squyres (jsquyres): "Re: [OMPI users] send and receive vectors + variable length"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26155.php">George Bosilca: "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>Reply:</strong> <a href="26155.php">George Bosilca: "Re: [OMPI users] send and receive vectors + variable length"</a>
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
