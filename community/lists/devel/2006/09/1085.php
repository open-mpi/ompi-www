<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 27 04:12:17 2006" -->
<!-- isoreceived="20060927081217" -->
<!-- sent="Wed, 27 Sep 2006 13:42:07 +0530" -->
<!-- isosent="20060927081207" -->
<!-- name="Nysal Jan" -->
<!-- email="jnysal_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl_openib_max_btls" -->
<!-- id="5d5f7eba0609270112k55e93edfhe3535e825cf0bc63_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C13D76C2.28334%jsquyres_at_cisco.com" -->
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
<strong>From:</strong> Nysal Jan (<em>jnysal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-27 04:12:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1086.php">Edgar Gabriel: "Re: [OMPI devel] some possible bugs"</a>
<li><strong>Previous message:</strong> <a href="1084.php">Jeff Squyres: "Re: [OMPI devel] some possible bugs"</a>
<li><strong>In reply to:</strong> <a href="1081.php">Jeff Squyres: "Re: [OMPI devel] btl_openib_max_btls"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was using the v1.2 branch. Gleb's fix has resolved the problem.
<br>
Thanks
<br>
--Nysal
<br>
<p>On 9/25/06, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What version of Open MPI are you using?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We had a bug with this on the trunk and [unreleased] v1.2 branch; it was
</span><br>
<span class="quotelev1">&gt; just fixed within the last few hours in both places.  It should not be a
</span><br>
<span class="quotelev1">&gt; problem in the released v1.1 series.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you confirm that you were using the OMPI trunk or the v1.2 branch?  If
</span><br>
<span class="quotelev1">&gt; you're seeing this in the v1.1 series, then we need to look at this a bit
</span><br>
<span class="quotelev1">&gt; closer...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 9/22/06 1:25 PM, &quot;Nysal Jan&quot; &lt;jnysal_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; The ompi_info command shows the following description for
</span><br>
<span class="quotelev2">&gt; &gt; &quot;btl_openib_max_btls&quot; parameter
</span><br>
<span class="quotelev2">&gt; &gt; MCA btl: parameter &quot;btl_openib_max_btls&quot; (current value: &quot;-1&quot;)  Maximum
</span><br>
<span class="quotelev2">&gt; &gt; number of HCA ports to use (-1 = use all available, otherwise must be &gt;=
</span><br>
<span class="quotelev1">&gt; 1)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Even though I specify &quot;mpirun --mca btl_openib_max_btls 1 .....&quot;  2
</span><br>
<span class="quotelev1">&gt; openib
</span><br>
<span class="quotelev2">&gt; &gt; btls are created(the HCA has 2 ports).
</span><br>
<span class="quotelev2">&gt; &gt; When I try to run Open MPI across 2 nodes (one node has an HCA with 2
</span><br>
<span class="quotelev1">&gt; ports
</span><br>
<span class="quotelev2">&gt; &gt; and the other has only one port). Both endpoints send the QP information
</span><br>
<span class="quotelev2">&gt; &gt; over to the peer. Only one endpoint exists at the peer so it prints the
</span><br>
<span class="quotelev2">&gt; &gt; following error message:
</span><br>
<span class="quotelev2">&gt; &gt; [0,1,1][btl_openib_endpoint.c:706:mca_btl_openib_endpoint_recv] can't
</span><br>
<span class="quotelev1">&gt; find
</span><br>
<span class="quotelev2">&gt; &gt; suitable endpoint for this peer
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [0,1,0][btl_openib_endpoint.c:913:mca_btl_openib_endpoint_connect] error
</span><br>
<span class="quotelev2">&gt; &gt; posting receive errno says Operation now in progress
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [0,1,0][btl_openib_endpoint.c:737:mca_btl_openib_endpoint_recv] endpoint
</span><br>
<span class="quotelev2">&gt; &gt; connect error: -1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is &quot;btl_openib_max_btls&quot; the maximum number of BTLs or maximum number of
</span><br>
<span class="quotelev2">&gt; &gt; BTLs per port (which is what the current implementation &quot;init_one_hca()&quot;
</span><br>
<span class="quotelev2">&gt; &gt; looks like)?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Nysal
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1085/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1086.php">Edgar Gabriel: "Re: [OMPI devel] some possible bugs"</a>
<li><strong>Previous message:</strong> <a href="1084.php">Jeff Squyres: "Re: [OMPI devel] some possible bugs"</a>
<li><strong>In reply to:</strong> <a href="1081.php">Jeff Squyres: "Re: [OMPI devel] btl_openib_max_btls"</a>
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
