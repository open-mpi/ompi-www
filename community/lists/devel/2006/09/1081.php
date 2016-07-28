<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 25 12:06:30 2006" -->
<!-- isoreceived="20060925160630" -->
<!-- sent="Mon, 25 Sep 2006 12:06:26 -0400" -->
<!-- isosent="20060925160626" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl_openib_max_btls" -->
<!-- id="C13D76C2.28334%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5d5f7eba0609220425v1ba6dd9fva8fda8dd907e5129_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2006-09-25 12:06:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1082.php">Ralph H Castain: "[OMPI devel] Tentative OpenRTE tutorial agenda"</a>
<li><strong>Previous message:</strong> <a href="1080.php">Brian Barrett: "Re: [OMPI devel] Buffer Overflow Error"</a>
<li><strong>In reply to:</strong> <a href="1073.php">Nysal Jan: "[OMPI devel] btl_openib_max_btls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1085.php">Nysal Jan: "Re: [OMPI devel] btl_openib_max_btls"</a>
<li><strong>Reply:</strong> <a href="1085.php">Nysal Jan: "Re: [OMPI devel] btl_openib_max_btls"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What version of Open MPI are you using?
<br>
<p>We had a bug with this on the trunk and [unreleased] v1.2 branch; it was
<br>
just fixed within the last few hours in both places.  It should not be a
<br>
problem in the released v1.1 series.
<br>
<p>Can you confirm that you were using the OMPI trunk or the v1.2 branch?  If
<br>
you're seeing this in the v1.1 series, then we need to look at this a bit
<br>
closer...
<br>
<p><p>On 9/22/06 1:25 PM, &quot;Nysal Jan&quot; &lt;jnysal_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The ompi_info command shows the following description for
</span><br>
<span class="quotelev1">&gt; &quot;btl_openib_max_btls&quot; parameter
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl_openib_max_btls&quot; (current value: &quot;-1&quot;)  Maximum
</span><br>
<span class="quotelev1">&gt; number of HCA ports to use (-1 = use all available, otherwise must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Even though I specify &quot;mpirun --mca btl_openib_max_btls 1 .....&quot;  2 openib
</span><br>
<span class="quotelev1">&gt; btls are created(the HCA has 2 ports).
</span><br>
<span class="quotelev1">&gt; When I try to run Open MPI across 2 nodes (one node has an HCA with 2 ports
</span><br>
<span class="quotelev1">&gt; and the other has only one port). Both endpoints send the QP information
</span><br>
<span class="quotelev1">&gt; over to the peer. Only one endpoint exists at the peer so it prints the
</span><br>
<span class="quotelev1">&gt; following error message:
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_openib_endpoint.c:706:mca_btl_openib_endpoint_recv] can't find
</span><br>
<span class="quotelev1">&gt; suitable endpoint for this peer
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib_endpoint.c:913:mca_btl_openib_endpoint_connect] error
</span><br>
<span class="quotelev1">&gt; posting receive errno says Operation now in progress
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib_endpoint.c:737:mca_btl_openib_endpoint_recv] endpoint
</span><br>
<span class="quotelev1">&gt; connect error: -1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is &quot;btl_openib_max_btls&quot; the maximum number of BTLs or maximum number of
</span><br>
<span class="quotelev1">&gt; BTLs per port (which is what the current implementation &quot;init_one_hca()&quot;
</span><br>
<span class="quotelev1">&gt; looks like)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nysal
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1082.php">Ralph H Castain: "[OMPI devel] Tentative OpenRTE tutorial agenda"</a>
<li><strong>Previous message:</strong> <a href="1080.php">Brian Barrett: "Re: [OMPI devel] Buffer Overflow Error"</a>
<li><strong>In reply to:</strong> <a href="1073.php">Nysal Jan: "[OMPI devel] btl_openib_max_btls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1085.php">Nysal Jan: "Re: [OMPI devel] btl_openib_max_btls"</a>
<li><strong>Reply:</strong> <a href="1085.php">Nysal Jan: "Re: [OMPI devel] btl_openib_max_btls"</a>
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
