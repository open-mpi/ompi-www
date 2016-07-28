<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 31 09:45:35 2006" -->
<!-- isoreceived="20061031144535" -->
<!-- sent="Tue, 31 Oct 2006 16:45:20 +0200" -->
<!-- isosent="20061031144520" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MCA_BTL_DES_FLAGS_PRIORITY  usage" -->
<!-- id="20061031144520.GE14049_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="45475F19.4090002_at_Sun.COM" -->
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
<strong>Date:</strong> 2006-10-31 09:45:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1153.php">Galen M. Shipman: "Re: [OMPI devel] [openib-general] psm.h not found"</a>
<li><strong>Previous message:</strong> <a href="1151.php">Donald Kerr: "[OMPI devel] MCA_BTL_DES_FLAGS_PRIORITY  usage"</a>
<li><strong>In reply to:</strong> <a href="1151.php">Donald Kerr: "[OMPI devel] MCA_BTL_DES_FLAGS_PRIORITY  usage"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Oct 31, 2006 at 09:35:05AM -0500, Donald Kerr wrote:
<br>
<span class="quotelev1">&gt; Can someone explain to me the intended use of the following flag and/or 
</span><br>
<span class="quotelev1">&gt; all that it implies when set : MCA_BTL_DES_FLAGS_PRIORITY
</span><br>
<span class="quotelev1">&gt;
</span><br>
I can explain how this flag is treated in openib BTL. We have two QPs
<br>
high and low priority. High priority QP is always checked first for
<br>
events. If descriptor has MCA_BTL_DES_FLAGS_PRIORITY flag set it is send
<br>
via high priority QP.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1153.php">Galen M. Shipman: "Re: [OMPI devel] [openib-general] psm.h not found"</a>
<li><strong>Previous message:</strong> <a href="1151.php">Donald Kerr: "[OMPI devel] MCA_BTL_DES_FLAGS_PRIORITY  usage"</a>
<li><strong>In reply to:</strong> <a href="1151.php">Donald Kerr: "[OMPI devel] MCA_BTL_DES_FLAGS_PRIORITY  usage"</a>
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
