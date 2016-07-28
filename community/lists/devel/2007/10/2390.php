<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Oct  6 15:10:45 2007" -->
<!-- isoreceived="20071006191045" -->
<!-- sent="Sat, 06 Oct 2007 12:08:51 -0700" -->
<!-- isosent="20071006190851" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Consolidating some IB code" -->
<!-- id="4707DD43.2070902_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="112DB3AF-5B82-481E-A8EC-D8CBF41E80F7_at_cisco.com" -->
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
<strong>Date:</strong> 2007-10-06 15:08:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2391.php">Jeff Squyres: "Re: [OMPI devel] Consolidating some IB code"</a>
<li><strong>Previous message:</strong> <a href="2389.php">Jeff Squyres: "[OMPI devel] Consolidating some IB code"</a>
<li><strong>In reply to:</strong> <a href="2389.php">Jeff Squyres: "[OMPI devel] Consolidating some IB code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2391.php">Jeff Squyres: "Re: [OMPI devel] Consolidating some IB code"</a>
<li><strong>Reply:</strong> <a href="2391.php">Jeff Squyres: "Re: [OMPI devel] Consolidating some IB code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; FYI: at the meeting in Paris this week, we decided that it would be a  
</span><br>
<span class="quotelev1">&gt; good idea to consolidate some &quot;utility&quot; IB code into mca/common/of  
</span><br>
<span class="quotelev1">&gt; (OpenFabrics) so that it could be shared among multiple components  
</span><br>
<span class="quotelev1">&gt; (e.g., some IB-specific collective components).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Exactly what will be moved into common is still TBD, but some obvious  
</span><br>
<span class="quotelev1">&gt; candidates are HCA information/querying/selecting, protection  
</span><br>
<span class="quotelev1">&gt; domains, etc.  QP creation will likely not be worth sharing, but  
</span><br>
<span class="quotelev1">&gt; we'll see.  More info later, but I figured it was worth a &quot;heads up&quot;  
</span><br>
<span class="quotelev1">&gt; to everyone before you see the /tmp-public/of-common commit in a few  
</span><br>
<span class="quotelev1">&gt; minutes.  :-)
</span><br>
<p>Yeah so the HCA querying/selecting will be good to have separate, as 
<br>
well as PD/registration stuff -- for example I copied the mpool rdma 
<br>
callback functions verbatim from the OpenIB BTL to the UD BTL.  I don't 
<br>
think QP creation is worth sharing, nor any of the connection 
<br>
establishment stuff.
<br>
<p>Which reminds me, can we rename the OpenIB BTL to 'ofrc' as discussed on 
<br>
a call a long time ago?  I will do the work if it's cool with everyone. 
<br>
&nbsp;&nbsp;Do we care about backwards compatibility of the openib name?  I might 
<br>
need help doing that, but shouldn't be a big deal.
<br>
<p>Andrew
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll be creating a skeleton mca/common/of pseudo-component shortly;  
</span><br>
<span class="quotelev1">&gt; Gleb and Torsten will likely be populating it in the not-distant future.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Andrew Friedley: you might also want to get in on this stuff...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2391.php">Jeff Squyres: "Re: [OMPI devel] Consolidating some IB code"</a>
<li><strong>Previous message:</strong> <a href="2389.php">Jeff Squyres: "[OMPI devel] Consolidating some IB code"</a>
<li><strong>In reply to:</strong> <a href="2389.php">Jeff Squyres: "[OMPI devel] Consolidating some IB code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2391.php">Jeff Squyres: "Re: [OMPI devel] Consolidating some IB code"</a>
<li><strong>Reply:</strong> <a href="2391.php">Jeff Squyres: "Re: [OMPI devel] Consolidating some IB code"</a>
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
