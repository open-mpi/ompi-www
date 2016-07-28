<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Oct  6 15:34:10 2007" -->
<!-- isoreceived="20071006193410" -->
<!-- sent="Sat, 6 Oct 2007 21:34:00 +0200" -->
<!-- isosent="20071006193400" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Consolidating some IB code" -->
<!-- id="98527743-7F9B-44E9-B5E0-52C4B45F5C7C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4707DD43.2070902_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-06 15:34:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2392.php">Andrew Friedley: "Re: [OMPI devel] Consolidating some IB code"</a>
<li><strong>Previous message:</strong> <a href="2390.php">Andrew Friedley: "Re: [OMPI devel] Consolidating some IB code"</a>
<li><strong>In reply to:</strong> <a href="2390.php">Andrew Friedley: "Re: [OMPI devel] Consolidating some IB code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2392.php">Andrew Friedley: "Re: [OMPI devel] Consolidating some IB code"</a>
<li><strong>Reply:</strong> <a href="2392.php">Andrew Friedley: "Re: [OMPI devel] Consolidating some IB code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 6, 2007, at 9:08 PM, Andrew Friedley wrote:
<br>
<p><span class="quotelev1">&gt; Yeah so the HCA querying/selecting will be good to have separate, as
</span><br>
<span class="quotelev1">&gt; well as PD/registration stuff -- for example I copied the mpool rdma
</span><br>
<span class="quotelev1">&gt; callback functions verbatim from the OpenIB BTL to the UD BTL.  I  
</span><br>
<span class="quotelev1">&gt; don't
</span><br>
<span class="quotelev1">&gt; think QP creation is worth sharing, nor any of the connection
</span><br>
<span class="quotelev1">&gt; establishment stuff.
</span><br>
<p>Ha,.
<br>
<p><span class="quotelev1">&gt; Which reminds me, can we rename the OpenIB BTL to 'ofrc' as  
</span><br>
<span class="quotelev1">&gt; discussed on
</span><br>
<span class="quotelev1">&gt; a call a long time ago?  I will do the work if it's cool with  
</span><br>
<span class="quotelev1">&gt; everyone.
</span><br>
<p>Can we wait until we bring the common/of stuff back from the tmp  
<br>
branch?  It'll make the changes to the openib BTL significantly  
<br>
easier to merge.
<br>
<p>I don't know Torsten's/Gleb's timeframe for moving everything to  
<br>
common/of -- my job was to provide the skeleton and I did so.  :-)
<br>
<p><span class="quotelev1">&gt;   Do we care about backwards compatibility of the openib name?  I  
</span><br>
<span class="quotelev1">&gt; might
</span><br>
<span class="quotelev1">&gt; need help doing that, but shouldn't be a big deal.
</span><br>
<p>Yes, I very much care about backward compatibility of the openib name  
<br>
and MCA parameters...  This is, as I see it, the biggest issue with  
<br>
changing the name.  Stuff like this has to work:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca btl openib,self ...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca btl_openib_foo 32 ...
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2392.php">Andrew Friedley: "Re: [OMPI devel] Consolidating some IB code"</a>
<li><strong>Previous message:</strong> <a href="2390.php">Andrew Friedley: "Re: [OMPI devel] Consolidating some IB code"</a>
<li><strong>In reply to:</strong> <a href="2390.php">Andrew Friedley: "Re: [OMPI devel] Consolidating some IB code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2392.php">Andrew Friedley: "Re: [OMPI devel] Consolidating some IB code"</a>
<li><strong>Reply:</strong> <a href="2392.php">Andrew Friedley: "Re: [OMPI devel] Consolidating some IB code"</a>
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
