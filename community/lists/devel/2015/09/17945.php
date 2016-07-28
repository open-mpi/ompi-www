<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-2436-g7adb9b7";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  3 14:46:32 2015" -->
<!-- isoreceived="20150903184632" -->
<!-- sent="Thu, 3 Sep 2015 18:46:30 +0000" -->
<!-- isosent="20150903184630" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-2436-g7adb9b7" -->
<!-- id="C70E20EE-3225-41A9-85F4-1E96E62F8E1D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20150903180338.EE9A7261089_at_lion.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-2436-g7adb9b7<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-03 14:46:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17946.php">Ralph Castain: "Re: [OMPI devel] periodic hangs of hello_usempi.x on uh jenkins slave"</a>
<li><strong>Previous message:</strong> <a href="17944.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17950.php">Burette, Yohann: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master	updated.	dev-2436-g7adb9b7"</a>
<li><strong>Reply:</strong> <a href="17950.php">Burette, Yohann: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master	updated.	dev-2436-g7adb9b7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 3, 2015, at 1:03 PM, gitdub_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; diff --git a/ompi/mca/mtl/ofi/mtl_ofi.h b/ompi/mca/mtl/ofi/mtl_ofi.h
</span><br>
<span class="quotelev1">&gt; index 3584d8a..a035b1c 100644
</span><br>
<span class="quotelev1">&gt; --- a/ompi/mca/mtl/ofi/mtl_ofi.h
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/mca/mtl/ofi/mtl_ofi.h
</span><br>
<span class="quotelev1">&gt; @@ -38,6 +38,14 @@
</span><br>
<span class="quotelev1">&gt; #include &quot;mtl_ofi_endpoint.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;mtl_ofi_compat.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +#define FI_RETRY_UNTIL_DONE(FUNC) \
</span><br>
<span class="quotelev1">&gt; +    do { \
</span><br>
<span class="quotelev1">&gt; +        do { \
</span><br>
<span class="quotelev1">&gt; +            ret = FUNC; \
</span><br>
<span class="quotelev1">&gt; +            if(OPAL_LIKELY(0 == ret)) {break;} \
</span><br>
<span class="quotelev1">&gt; +        } while(-FI_EAGAIN == ret); \
</span><br>
<span class="quotelev1">&gt; +    } while(0);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; BEGIN_C_DECLS
</span><br>
<p>Minor nit: it would be best to avoid stomping the &quot;FI_&quot; and &quot;fi_&quot; namespaces in OMPI code.  I find it unlikely that this particular symbol/macro would ever be defined, but it's usually just a good idea to stay away from the entire namespace.
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17946.php">Ralph Castain: "Re: [OMPI devel] periodic hangs of hello_usempi.x on uh jenkins slave"</a>
<li><strong>Previous message:</strong> <a href="17944.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17950.php">Burette, Yohann: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master	updated.	dev-2436-g7adb9b7"</a>
<li><strong>Reply:</strong> <a href="17950.php">Burette, Yohann: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master	updated.	dev-2436-g7adb9b7"</a>
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
