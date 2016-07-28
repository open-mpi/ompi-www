<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 25 11:18:25 2007" -->
<!-- isoreceived="20071025151825" -->
<!-- sent="Thu, 25 Oct 2007 17:18:19 +0200" -->
<!-- isosent="20071025151819" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add &amp;quot;connect&amp;quot; field to openib BTL INI file" -->
<!-- id="20071025151819.GG12525_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C0B234E8-C353-415B-B603-56F5558EFF56_at_cisco.com" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-25 11:18:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2501.php">Jeff Squyres: "Re: [OMPI devel] FD leak in Altix timer code?"</a>
<li><strong>Previous message:</strong> <a href="2499.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add &quot;connect&quot; field to openib BTL INI file"</a>
<li><strong>In reply to:</strong> <a href="2499.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add &quot;connect&quot; field to openib BTL INI file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2504.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add &quot;connect&quot; field to openib BTL INI file"</a>
<li><strong>Reply:</strong> <a href="2504.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add &quot;connect&quot; field to openib BTL INI file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Oct 25, 2007 at 10:55:25AM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Oct 25, 2007, at 10:35 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I don't think xrc should be used by default even if HW supports it.  
</span><br>
<span class="quotelev2">&gt; &gt; Only if
</span><br>
<span class="quotelev2">&gt; &gt; special config option is set xrc should be attempted.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why?
</span><br>
<p>XRC is a crippled RC protocol for scalability sake. Its use makes
<br>
progress of one process depend on behaviour of other processes on the
<br>
same node which make cause different interesting effects. And of cause 
<br>
SW flow control is not possible when using XRC, so for small jobs it
<br>
will be actually slower. I don't thinks it is wise to use XRC over
<br>
regular RC if there is a choice.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; And xrc availability
</span><br>
<span class="quotelev2">&gt; &gt; can be tested in runtime without additional options in ini file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a flag on the device / port that indicates XRC availability?
</span><br>
XRC requires creation of special kind of QP. If this fails XRC is not
<br>
available.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I don't know iWarp enough to tell if it is possible to find out in
</span><br>
<span class="quotelev2">&gt; &gt; runtime if rdma_cm is mandatory or other means of connection
</span><br>
<span class="quotelev2">&gt; &gt; establishment can be used, but if there is no way to do it, then new
</span><br>
<span class="quotelev2">&gt; &gt; parameter &quot;hca_type&quot; could be added to ini file with two possible
</span><br>
<span class="quotelev2">&gt; &gt; values &quot;ib&quot; and &quot;iwarp&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, there is a flag on either the device or port (I forget which)  
</span><br>
<span class="quotelev1">&gt; which indicates whether it's an iwarp or IB device.  I think (at  
</span><br>
<span class="quotelev1">&gt; least for today) we can assume that all iWARP devices require RDMA CM  
</span><br>
<span class="quotelev1">&gt; -- right, iWARP guys?
</span><br>
Great! Then I don't see the need to add parameters to ini file.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So do you want the arbitration rules for which CPC to be used to be  
</span><br>
<span class="quotelev1">&gt; hard-coded in the openib component (possibly overridden by MCA  
</span><br>
<span class="quotelev1">&gt; parameter to force a specific selection)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Not hard-coded, but controlled by regular mca mechanism, with default
<br>
behaviour dependant on HCA type. Not something new. We have this with
<br>
SRQ.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2501.php">Jeff Squyres: "Re: [OMPI devel] FD leak in Altix timer code?"</a>
<li><strong>Previous message:</strong> <a href="2499.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add &quot;connect&quot; field to openib BTL INI file"</a>
<li><strong>In reply to:</strong> <a href="2499.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add &quot;connect&quot; field to openib BTL INI file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2504.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add &quot;connect&quot; field to openib BTL INI file"</a>
<li><strong>Reply:</strong> <a href="2504.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add &quot;connect&quot; field to openib BTL INI file"</a>
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
