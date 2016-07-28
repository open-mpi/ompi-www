<?
$subject_val = "Re: [OMPI users] Implementation of TCP v/s OpenIB (Eager and Rendezvous) protocols";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  1 11:46:50 2014" -->
<!-- isoreceived="20140201164650" -->
<!-- sent="Sat, 1 Feb 2014 10:46:49 -0600" -->
<!-- isosent="20140201164649" -->
<!-- name="Siddhartha Jana" -->
<!-- email="siddharthajana24_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Implementation of TCP v/s OpenIB (Eager and Rendezvous) protocols" -->
<!-- id="CAPkf6e3MAn2fgcXb37XOu45pCWASqye6GsBKTCYgOWFAc7U+KA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="513C1F2A-8FED-4626-B75F-F0FEC2325053_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Implementation of TCP v/s OpenIB (Eager and Rendezvous) protocols<br>
<strong>From:</strong> Siddhartha Jana (<em>siddharthajana24_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-01 11:46:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23528.php">Patrick Boehl: "[OMPI users] Use of __float128 with openmpi"</a>
<li><strong>Previous message:</strong> <a href="23526.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<li><strong>In reply to:</strong> <a href="23523.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Implementation of TCP v/s OpenIB (Eager and	Rendezvous) protocols"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the reply Jeff. This is directional.
<br>
On 01-Feb-2014 7:51 am, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; On Jan 31, 2014, at 2:49 AM, Siddhartha Jana &lt;siddharthajana24_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sorry for the typo:
</span><br>
<span class="quotelev2">&gt; &gt; **  I was hoping to understand the impact of OpenMPI's implementation of
</span><br>
<span class="quotelev1">&gt; these protocols using traditional TCP.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is the paper I was referring to:
</span><br>
<span class="quotelev2">&gt; &gt; Woodall, et al., &quot;High Performance RDMA Protocols in HPC&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 31 January 2014 00:43, Siddhartha Jana &lt;siddharthajana24_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Good evening
</span><br>
<span class="quotelev2">&gt; &gt; Is there any documentation describing the difference in MPI-level
</span><br>
<span class="quotelev1">&gt; implementation of the eager and rendezvous protocols in OpenIB BTL versus
</span><br>
<span class="quotelev1">&gt; TCP BTL ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, there is not, sorry.  Just the code.  :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am only aware of the following paper. While this presents an excellent
</span><br>
<span class="quotelev1">&gt; overview of how RDMA capabilities of modern interconnects can be leveraged
</span><br>
<span class="quotelev1">&gt; for implementing these protocols, I was hoping to understand how OpenMPI
</span><br>
<span class="quotelev1">&gt; implications of handling these protocols using traditional TCP.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The easiest way to think about it is that the TCP BTL could well be
</span><br>
<span class="quotelev1">&gt; implemented with just the &quot;send&quot; method (and no &quot;get&quot; or &quot;put&quot; methods).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That being said, the TCP BTL does emulate the &quot;put&quot; method (meaning:
</span><br>
<span class="quotelev1">&gt; there's obviously no hardware support for a direct data placement using a
</span><br>
<span class="quotelev1">&gt; general socket in TCP like there is with OpenFabrics-style RDMA) simply
</span><br>
<span class="quotelev1">&gt; because it allows us to be slightly more efficient on the receiver (IIRC;
</span><br>
<span class="quotelev1">&gt; it's been a loooong time since I've looked at that code).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23527/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23528.php">Patrick Boehl: "[OMPI users] Use of __float128 with openmpi"</a>
<li><strong>Previous message:</strong> <a href="23526.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<li><strong>In reply to:</strong> <a href="23523.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Implementation of TCP v/s OpenIB (Eager and	Rendezvous) protocols"</a>
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
