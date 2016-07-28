<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Oct  6 16:00:51 2007" -->
<!-- isoreceived="20071006200051" -->
<!-- sent="Sat, 06 Oct 2007 12:59:01 -0700" -->
<!-- isosent="20071006195901" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Consolidating some IB code" -->
<!-- id="4707E905.6040304_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="98527743-7F9B-44E9-B5E0-52C4B45F5C7C_at_cisco.com" -->
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
<strong>From:</strong> Andrew Friedley (<em>afriedle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-06 15:59:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2393.php">Jeff Squyres: "Re: [OMPI devel] Consolidating some IB code"</a>
<li><strong>Previous message:</strong> <a href="2391.php">Jeff Squyres: "Re: [OMPI devel] Consolidating some IB code"</a>
<li><strong>In reply to:</strong> <a href="2391.php">Jeff Squyres: "Re: [OMPI devel] Consolidating some IB code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2393.php">Jeff Squyres: "Re: [OMPI devel] Consolidating some IB code"</a>
<li><strong>Reply:</strong> <a href="2393.php">Jeff Squyres: "Re: [OMPI devel] Consolidating some IB code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Oct 6, 2007, at 9:08 PM, Andrew Friedley wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yeah so the HCA querying/selecting will be good to have separate, as
</span><br>
<span class="quotelev2">&gt;&gt; well as PD/registration stuff -- for example I copied the mpool rdma
</span><br>
<span class="quotelev2">&gt;&gt; callback functions verbatim from the OpenIB BTL to the UD BTL.  I  
</span><br>
<span class="quotelev2">&gt;&gt; don't
</span><br>
<span class="quotelev2">&gt;&gt; think QP creation is worth sharing, nor any of the connection
</span><br>
<span class="quotelev2">&gt;&gt; establishment stuff.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ha,.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Which reminds me, can we rename the OpenIB BTL to 'ofrc' as  
</span><br>
<span class="quotelev2">&gt;&gt; discussed on
</span><br>
<span class="quotelev2">&gt;&gt; a call a long time ago?  I will do the work if it's cool with  
</span><br>
<span class="quotelev2">&gt;&gt; everyone.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can we wait until we bring the common/of stuff back from the tmp  
</span><br>
<span class="quotelev1">&gt; branch?  It'll make the changes to the openib BTL significantly  
</span><br>
<span class="quotelev1">&gt; easier to merge.
</span><br>
<p>I assumed that would be the case.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know Torsten's/Gleb's timeframe for moving everything to  
</span><br>
<span class="quotelev1">&gt; common/of -- my job was to provide the skeleton and I did so.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   Do we care about backwards compatibility of the openib name?  I  
</span><br>
<span class="quotelev2">&gt;&gt; might
</span><br>
<span class="quotelev2">&gt;&gt; need help doing that, but shouldn't be a big deal.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, I very much care about backward compatibility of the openib name  
</span><br>
<span class="quotelev1">&gt; and MCA parameters...  This is, as I see it, the biggest issue with  
</span><br>
<span class="quotelev1">&gt; changing the name.  Stuff like this has to work:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	mpirun --mca btl openib,self ...
</span><br>
<span class="quotelev1">&gt; 	mpirun --mca btl_openib_foo 32 ...
</span><br>
<p>Ah that could be fun, do you have ideas or should I try to figure this 
<br>
out myself?
<br>
<p>Wish I could have come to the meetings :(
<br>
<p>Andrew
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2393.php">Jeff Squyres: "Re: [OMPI devel] Consolidating some IB code"</a>
<li><strong>Previous message:</strong> <a href="2391.php">Jeff Squyres: "Re: [OMPI devel] Consolidating some IB code"</a>
<li><strong>In reply to:</strong> <a href="2391.php">Jeff Squyres: "Re: [OMPI devel] Consolidating some IB code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2393.php">Jeff Squyres: "Re: [OMPI devel] Consolidating some IB code"</a>
<li><strong>Reply:</strong> <a href="2393.php">Jeff Squyres: "Re: [OMPI devel] Consolidating some IB code"</a>
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
