<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 12 12:38:32 2007" -->
<!-- isoreceived="20070712163832" -->
<!-- sent="Thu, 12 Jul 2007 10:38:16 -0600" -->
<!-- isosent="20070712163816" -->
<!-- name="Galen Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenIB BTL and SRQs" -->
<!-- id="5D132232-BF38-4536-A80B-6BF2AC796088_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="469656D0.10603_at_Sun.COM" -->
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
<strong>From:</strong> Galen Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-12 12:38:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1861.php">Jeff Squyres: "Re: [OMPI devel] OpenIB BTL and SRQs"</a>
<li><strong>Previous message:</strong> <a href="1859.php">Don Kerr: "[OMPI devel] OpenIB BTL and SRQs"</a>
<li><strong>In reply to:</strong> <a href="1859.php">Don Kerr: "[OMPI devel] OpenIB BTL and SRQs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1861.php">Jeff Squyres: "Re: [OMPI devel] OpenIB BTL and SRQs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 12, 2007, at 10:29 AM, Don Kerr wrote:
<br>
<p><span class="quotelev1">&gt; Through mca parameters one can select the use of shared receive queues
</span><br>
<span class="quotelev1">&gt; in the openib btl, other than having fewer queues I am wondering what
</span><br>
<span class="quotelev1">&gt; are the benefits of using this option. Can anyone eleborate on using
</span><br>
<span class="quotelev1">&gt; them vs the default?
</span><br>
<span class="quotelev1">&gt;
</span><br>
In the trunk the number of queue pairs is the same, regardless of SRQ  
<br>
or NON-SRQ hence forth named PP (per-peer).
<br>
The difference is that PP receive resources scale with the number of  
<br>
active QP connections. SRQ receive resources do not.
<br>
So the real difference is the memory footprint of the the receive  
<br>
resources. SRQ is potentially much smaller. This comes at a cost; SRQ  
<br>
does not have flow control as we cannot reserve resources for a  
<br>
particular peer, so we do have the possibility of an RNR (receiver  
<br>
not ready) NAK if all the shared receive resources are consumed and  
<br>
some peer is still transmitting messages. This has a performance  
<br>
penalty as an RNR NAK stalls the IB pipeline. With PP, we can  
<br>
guarantee that resources are available to the peer and thereby avoid  
<br>
RNR (although there is a bug in the trunk right now in that sometimes  
<br>
we get RNR even with PP, but this is being worked on).
<br>
<p>I have been working on a modification to the OpenIB BTL which allows  
<br>
the user to specify SRQ and PP QPs arbitrarily. That is we can use a  
<br>
mix of PP and SRQ with a mix of receive sizes for each. This is  
<br>
coming into the trunk very soon, perhaps tomorrow but we need to  
<br>
verify the branch with some additional testing.
<br>
<p>I hope this helps, I have a paper at EuroPVM/MPI that discusses much  
<br>
of this, I will send you a copy off list.
<br>
<p>- Galen
<br>
<p><p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1861.php">Jeff Squyres: "Re: [OMPI devel] OpenIB BTL and SRQs"</a>
<li><strong>Previous message:</strong> <a href="1859.php">Don Kerr: "[OMPI devel] OpenIB BTL and SRQs"</a>
<li><strong>In reply to:</strong> <a href="1859.php">Don Kerr: "[OMPI devel] OpenIB BTL and SRQs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1861.php">Jeff Squyres: "Re: [OMPI devel] OpenIB BTL and SRQs"</a>
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
