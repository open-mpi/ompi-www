<?
$subject_val = "Re: [OMPI devel] RFC: Bump minimum sm pool size to 128K from 64K";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 26 15:19:42 2014" -->
<!-- isoreceived="20140726191942" -->
<!-- sent="Sat, 26 Jul 2014 15:19:40 -0400" -->
<!-- isosent="20140726191940" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Bump minimum sm pool size to 128K from 64K" -->
<!-- id="CAMJJpkWFD+KhsptM9LiDh-hVnn+_yFOrCEnY1EAfeA_g-HwTpQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F36046F85270_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Bump minimum sm pool size to 128K from 64K<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-26 15:19:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15274.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Bump minimum sm pool size to 128K from 64K"</a>
<li><strong>Previous message:</strong> <a href="15272.php">Ralph Castain: "Re: [OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>In reply to:</strong> <a href="15257.php">Rolf vandeVaart: "[OMPI devel] RFC: Bump minimum sm pool size to 128K from 64K"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15274.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Bump minimum sm pool size to 128K from 64K"</a>
<li><strong>Reply:</strong> <a href="15274.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Bump minimum sm pool size to 128K from 64K"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We are talking MB not KB isn't it?
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p>On Thu, Jul 24, 2014 at 2:57 PM, Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: Bump up the minimum sm pool size to 128K from 64K.
</span><br>
<span class="quotelev1">&gt; WHY: When running OSU benchmark on 2 nodes and utilizing a larger
</span><br>
<span class="quotelev1">&gt; btl_smcuda_max_send_size, we can run into the case where the free list
</span><br>
<span class="quotelev1">&gt; cannot grow.  This is not a common case, but it is something that folks
</span><br>
<span class="quotelev1">&gt; sometimes experiment with.  Also note that this minimum was set back 5
</span><br>
<span class="quotelev1">&gt; years ago so it seems that it could be time to bump it up.
</span><br>
<span class="quotelev1">&gt; WHEN: Tuesday, July 29, 2014 after weekly concall if there are no
</span><br>
<span class="quotelev1">&gt; objections.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [rvandevaart_at_ivy0 ompi-trunk-regerror]$ svn diff
</span><br>
<span class="quotelev1">&gt; ompi/mca/mpool/sm/mpool_sm_component.c
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/mpool/sm/mpool_sm_component.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/mpool/sm/mpool_sm_component.c      (revision 32293)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/mpool/sm/mpool_sm_component.c      (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -80,7 +80,7 @@
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  };
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -static long default_min = 67108864;
</span><br>
<span class="quotelev1">&gt; +static long default_min = 134217728;
</span><br>
<span class="quotelev1">&gt;  static unsigned long long ompi_mpool_sm_min_size;
</span><br>
<span class="quotelev1">&gt;  static int ompi_mpool_sm_verbose;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [rvandevaart_at_drossetti-ivy0 ompi-trunk-regerror]$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and
</span><br>
<span class="quotelev1">&gt; may contain
</span><br>
<span class="quotelev1">&gt; confidential information.  Any unauthorized review, use, disclosure or
</span><br>
<span class="quotelev1">&gt; distribution
</span><br>
<span class="quotelev1">&gt; is prohibited.  If you are not the intended recipient, please contact the
</span><br>
<span class="quotelev1">&gt; sender by
</span><br>
<span class="quotelev1">&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15257.php">http://www.open-mpi.org/community/lists/devel/2014/07/15257.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15273/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15274.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Bump minimum sm pool size to 128K from 64K"</a>
<li><strong>Previous message:</strong> <a href="15272.php">Ralph Castain: "Re: [OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>In reply to:</strong> <a href="15257.php">Rolf vandeVaart: "[OMPI devel] RFC: Bump minimum sm pool size to 128K from 64K"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15274.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Bump minimum sm pool size to 128K from 64K"</a>
<li><strong>Reply:</strong> <a href="15274.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Bump minimum sm pool size to 128K from 64K"</a>
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
