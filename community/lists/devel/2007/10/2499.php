<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 25 10:55:52 2007" -->
<!-- isoreceived="20071025145552" -->
<!-- sent="Thu, 25 Oct 2007 10:55:25 -0400" -->
<!-- isosent="20071025145525" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add &amp;quot;connect&amp;quot; field to openib BTL INI file" -->
<!-- id="C0B234E8-C353-415B-B603-56F5558EFF56_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071025143507.GE12525_at_minantech.com" -->
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
<strong>Date:</strong> 2007-10-25 10:55:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2500.php">Gleb Natapov: "Re: [OMPI devel] RFC: Add &quot;connect&quot; field to openib BTL INI file"</a>
<li><strong>Previous message:</strong> <a href="2498.php">Gleb Natapov: "Re: [OMPI devel] RFC: Add &quot;connect&quot; field to openib BTL INI file"</a>
<li><strong>In reply to:</strong> <a href="2498.php">Gleb Natapov: "Re: [OMPI devel] RFC: Add &quot;connect&quot; field to openib BTL INI file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2500.php">Gleb Natapov: "Re: [OMPI devel] RFC: Add &quot;connect&quot; field to openib BTL INI file"</a>
<li><strong>Reply:</strong> <a href="2500.php">Gleb Natapov: "Re: [OMPI devel] RFC: Add &quot;connect&quot; field to openib BTL INI file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 25, 2007, at 10:35 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt; I don't think xrc should be used by default even if HW supports it.  
</span><br>
<span class="quotelev1">&gt; Only if
</span><br>
<span class="quotelev1">&gt; special config option is set xrc should be attempted.
</span><br>
<p>Why?
<br>
<p><span class="quotelev1">&gt; And xrc availability
</span><br>
<span class="quotelev1">&gt; can be tested in runtime without additional options in ini file.
</span><br>
<p>Is there a flag on the device / port that indicates XRC availability?
<br>
<p><span class="quotelev1">&gt; I don't know iWarp enough to tell if it is possible to find out in
</span><br>
<span class="quotelev1">&gt; runtime if rdma_cm is mandatory or other means of connection
</span><br>
<span class="quotelev1">&gt; establishment can be used, but if there is no way to do it, then new
</span><br>
<span class="quotelev1">&gt; parameter &quot;hca_type&quot; could be added to ini file with two possible
</span><br>
<span class="quotelev1">&gt; values &quot;ib&quot; and &quot;iwarp&quot;.
</span><br>
<p>Yes, there is a flag on either the device or port (I forget which)  
<br>
which indicates whether it's an iwarp or IB device.  I think (at  
<br>
least for today) we can assume that all iWARP devices require RDMA CM  
<br>
-- right, iWARP guys?
<br>
<p>So do you want the arbitration rules for which CPC to be used to be  
<br>
hard-coded in the openib component (possibly overridden by MCA  
<br>
parameter to force a specific selection)?
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
<li><strong>Next message:</strong> <a href="2500.php">Gleb Natapov: "Re: [OMPI devel] RFC: Add &quot;connect&quot; field to openib BTL INI file"</a>
<li><strong>Previous message:</strong> <a href="2498.php">Gleb Natapov: "Re: [OMPI devel] RFC: Add &quot;connect&quot; field to openib BTL INI file"</a>
<li><strong>In reply to:</strong> <a href="2498.php">Gleb Natapov: "Re: [OMPI devel] RFC: Add &quot;connect&quot; field to openib BTL INI file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2500.php">Gleb Natapov: "Re: [OMPI devel] RFC: Add &quot;connect&quot; field to openib BTL INI file"</a>
<li><strong>Reply:</strong> <a href="2500.php">Gleb Natapov: "Re: [OMPI devel] RFC: Add &quot;connect&quot; field to openib BTL INI file"</a>
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
