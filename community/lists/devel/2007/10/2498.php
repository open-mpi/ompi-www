<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 25 10:35:15 2007" -->
<!-- isoreceived="20071025143515" -->
<!-- sent="Thu, 25 Oct 2007 16:35:07 +0200" -->
<!-- isosent="20071025143507" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add &amp;quot;connect&amp;quot; field to openib BTL INI file" -->
<!-- id="20071025143507.GE12525_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9069082C-730E-4E6F-AFBE-A6E0C1CE05C8_at_cisco.com" -->
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
<strong>Date:</strong> 2007-10-25 10:35:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2499.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add &quot;connect&quot; field to openib BTL INI file"</a>
<li><strong>Previous message:</strong> <a href="2497.php">Brian Barrett: "Re: [OMPI devel] PML cm and heterogeneous support"</a>
<li><strong>In reply to:</strong> <a href="2495.php">Jeff Squyres: "[OMPI devel] RFC: Add &quot;connect&quot; field to openib BTL INI file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2499.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add &quot;connect&quot; field to openib BTL INI file"</a>
<li><strong>Reply:</strong> <a href="2499.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add &quot;connect&quot; field to openib BTL INI file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Oct 24, 2007 at 08:01:44PM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; My proposal is that the &quot;connect&quot; field can be added to the INI file  
</span><br>
<span class="quotelev1">&gt; and take a comma-delimited list of values of acceptable CPCs for a  
</span><br>
<span class="quotelev1">&gt; given device.  For example, the ConnectX HCA can take the following  
</span><br>
<span class="quotelev1">&gt; value:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      connect = xrc, rdma_cm, oob
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Meaning:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - first, try the XRC CPC to try to make the connection
</span><br>
<span class="quotelev1">&gt; - if that fails, try the RDMA CM CPC
</span><br>
<span class="quotelev1">&gt; - if that fails, try the OOB CPC
</span><br>
<span class="quotelev1">&gt; - if that fails, fail the connection
</span><br>
<span class="quotelev1">&gt; 
</span><br>
I don't think xrc should be used by default even if HW supports it. Only if
<br>
special config option is set xrc should be attempted. And xrc availability
<br>
can be tested in runtime without additional options in ini file.
<br>
I don't know iWarp enough to tell if it is possible to find out in
<br>
runtime if rdma_cm is mandatory or other means of connection
<br>
establishment can be used, but if there is no way to do it, then new
<br>
parameter &quot;hca_type&quot; could be added to ini file with two possible
<br>
values &quot;ib&quot; and &quot;iwarp&quot;.
<br>
<p><p><span class="quotelev1">&gt; iWARP-based NICs can use the following value:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      connect = rdma_cm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If no &quot;connect&quot; value is specified, then default value of &quot;oob,  
</span><br>
<span class="quotelev1">&gt; rdma_cm&quot; can be assumed (possibly someday changing to &quot;rdma_cm, oob&quot;).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I mention this here on the devel list because disparate groups are  
</span><br>
<span class="quotelev1">&gt; working on different CPC's; coordination will be required to  
</span><br>
<span class="quotelev1">&gt; implement this arbitration mechanism.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Comments?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2499.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add &quot;connect&quot; field to openib BTL INI file"</a>
<li><strong>Previous message:</strong> <a href="2497.php">Brian Barrett: "Re: [OMPI devel] PML cm and heterogeneous support"</a>
<li><strong>In reply to:</strong> <a href="2495.php">Jeff Squyres: "[OMPI devel] RFC: Add &quot;connect&quot; field to openib BTL INI file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2499.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add &quot;connect&quot; field to openib BTL INI file"</a>
<li><strong>Reply:</strong> <a href="2499.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add &quot;connect&quot; field to openib BTL INI file"</a>
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
