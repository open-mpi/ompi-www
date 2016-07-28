<?
$subject_val = "Re: [OMPI devel] sendi sm BTL function";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 10 18:39:58 2008" -->
<!-- isoreceived="20081010223958" -->
<!-- sent="Fri, 10 Oct 2008 18:39:46 -0400" -->
<!-- isosent="20081010223946" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] sendi sm BTL function" -->
<!-- id="0358953C-5500-4A1E-904C-E1D50903919E_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48EFD14E.2060205_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] sendi sm BTL function<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-10 18:39:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4757.php">Lenny Verkhovsky: "Re: [OMPI devel] OpenIB BTL - removing btl_openib_ib_pkey_ix parameter"</a>
<li><strong>Previous message:</strong> <a href="4755.php">Eugene Loh: "[OMPI devel] sendi sm BTL function"</a>
<li><strong>In reply to:</strong> <a href="4755.php">Eugene Loh: "[OMPI devel] sendi sm BTL function"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is a simple (and good) reason not to have it in the upcoming  
<br>
release. By lack of time, I didn't manage to test it well enough. As  
<br>
I'm not 100% confident that it will not create any problems, I  
<br>
preferred to left it out of the 1.3.
<br>
<p>If you want to test it, please fell free to do so. And let me know if  
<br>
you have any problems.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 10, 2008, at 6:03 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Can someone tell me about mca_btl_sm_sendi()?  In btl_sm.c, I see  
</span><br>
<span class="quotelev1">&gt; that it's commented out of the structure &quot;mca_btl_sm&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems to me that pingpong latency over shared memory in OMPI  
</span><br>
<span class="quotelev1">&gt; isn't as fast as certain &quot;competitors&quot;.  If I put mca_btl_sm_sendi  
</span><br>
<span class="quotelev1">&gt; back in, it seems to improve the pingpong latency a little.  For  
</span><br>
<span class="quotelev1">&gt; some pingpong test and some hardware and some compiler, etc., etc.,  
</span><br>
<span class="quotelev1">&gt; I get 953 nsec out of the box and 902 nsec if I use  
</span><br>
<span class="quotelev1">&gt; mca_btl_sm_sendi.  So, it seems to improve latency.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why is it commented out?  E.g., look at btl_sm.c and search for the  
</span><br>
<span class="quotelev1">&gt; first occurrence of &quot;sendi&quot;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   mca_btl_sm_t mca_btl_sm = {
</span><br>
<span class="quotelev1">&gt;       {
</span><br>
<span class="quotelev1">&gt;           &amp;mca_btl_sm_component.super,
</span><br>
<span class="quotelev1">&gt;           ...
</span><br>
<span class="quotelev1">&gt;           NULL /*mca_btl_sm_sendi*/,  /* send immediate */
</span><br>
<span class="quotelev1">&gt;           ...
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;   };
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (I'm just about to leave for a week, but I look forward to reading  
</span><br>
<span class="quotelev1">&gt; everyone's insightful comments and lively discussion upon my return.)
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="4757.php">Lenny Verkhovsky: "Re: [OMPI devel] OpenIB BTL - removing btl_openib_ib_pkey_ix parameter"</a>
<li><strong>Previous message:</strong> <a href="4755.php">Eugene Loh: "[OMPI devel] sendi sm BTL function"</a>
<li><strong>In reply to:</strong> <a href="4755.php">Eugene Loh: "[OMPI devel] sendi sm BTL function"</a>
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
