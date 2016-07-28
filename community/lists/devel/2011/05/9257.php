<?
$subject_val = "Re: [OMPI devel] Multiple Memory Pools";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 16 18:16:39 2011" -->
<!-- isoreceived="20110516221639" -->
<!-- sent="Mon, 16 May 2011 16:16:31 -0600" -->
<!-- isosent="20110516221631" -->
<!-- name="Ken Lloyd" -->
<!-- email="kenneth.lloyd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Multiple Memory Pools" -->
<!-- id="1305584191.803.16.camel_at_localhost.localdomain" -->
<!-- charset="utf-8" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F30189D7378A_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Multiple Memory Pools<br>
<strong>From:</strong> Ken Lloyd (<em>kenneth.lloyd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-16 18:16:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9258.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>Previous message:</strong> <a href="9256.php">Rolf vandeVaart: "[OMPI devel] Multiple Memory Pools"</a>
<li><strong>In reply to:</strong> <a href="9256.php">Rolf vandeVaart: "[OMPI devel] Multiple Memory Pools"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rolf,
<br>
<p>We have identified a need in certain high performance applications to
<br>
specify memory sections -&gt; L3 -&gt; L2 - &gt;L1 -&gt; specific core -&gt; specific
<br>
CPU -&gt; specific machine. These tend toward hybridized CUDA apps where
<br>
other sections of the CPU are involved in non-CUDA (non-GPU) functions.
<br>
In our discussions, however, we haven't come across others who see the
<br>
same need. IOW, we are a very small market.
<br>
<p>Ken
<br>
<p>On Mon, 2011-05-16 at 14:52 -0700, Rolf vandeVaart wrote:
<br>
<span class="quotelev1">&gt; I see in the sm BTL that there is the concept of memory affinity and
</span><br>
<span class="quotelev1">&gt; the potential to support multiple memory pools.  I am curious if
</span><br>
<span class="quotelev1">&gt; anyone is making use of that feature?  I am looking in the function
</span><br>
<span class="quotelev1">&gt; sm_btl_first_time_init() in the btl_sm.c file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ______________________________________________________________________
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s)
</span><br>
<span class="quotelev1">&gt; and may contain confidential information.  Any unauthorized review,
</span><br>
<span class="quotelev1">&gt; use, disclosure or distribution is prohibited.  If you are not the
</span><br>
<span class="quotelev1">&gt; intended recipient, please contact the sender by reply email and
</span><br>
<span class="quotelev1">&gt; destroy all copies of the original message. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ______________________________________________________________________
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>=====================
<br>
Kenneth A. Lloyd
<br>
CEO - Director of Systems Science
<br>
Watt Systems Technologies Inc.
<br>
www.wattsys.com
<br>
kenneth.lloyd_at_[hidden] 
<br>
<p>This e-mail is covered by the Electronic Communications Privacy Act, 18
<br>
U.S.C. 2510-2521 and is intended only for the addressee named above. It
<br>
may contain privileged or confidential information. If you are not the
<br>
addressee you must not copy, distribute, disclose or use any of the
<br>
information in it. If you have received it in error please delete it and
<br>
immediately notify the sender.
<br>
<p><p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9257/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9258.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>Previous message:</strong> <a href="9256.php">Rolf vandeVaart: "[OMPI devel] Multiple Memory Pools"</a>
<li><strong>In reply to:</strong> <a href="9256.php">Rolf vandeVaart: "[OMPI devel] Multiple Memory Pools"</a>
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
