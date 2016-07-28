<?
$subject_val = "Re: [OMPI devel] 1.7.4rc2r30076 Missing Mellanox vendor ID";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 26 12:48:04 2013" -->
<!-- isoreceived="20131226174804" -->
<!-- sent="Thu, 26 Dec 2013 09:46:59 -0800" -->
<!-- isosent="20131226174659" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc2r30076 Missing Mellanox vendor ID" -->
<!-- id="1501BE58-DBEB-4C7C-B586-84CFCDABE248_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA16hkYpAudH-VV3erY0128GkXveoHH-RzGVEvdvk21Uk6A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc2r30076 Missing Mellanox vendor ID<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-26 12:46:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13563.php">Adrian Reber: "[OMPI devel] return value of opal_compress_base_register() in opal/mca/compress/base/compress_base_open.c"</a>
<li><strong>Previous message:</strong> <a href="13561.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30076 Missing Mellanox vendor ID"</a>
<li><strong>In reply to:</strong> <a href="13561.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30076 Missing Mellanox vendor ID"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I checked the email archives and found that we had indeed included this ID in prior releases - don't know why it got reverted out here. I've committed to trunk and flagged Mellanox to review for 1.7.4
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>On Dec 24, 2013, at 9:18 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I get a warning from the current 1.7.4rc2r30076:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------                         
</span><br>
<span class="quotelev1">&gt; WARNING: No preset parameters were found for the device that Open MPI
</span><br>
<span class="quotelev1">&gt; detected:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Local host:            pcp-j-20
</span><br>
<span class="quotelev1">&gt;   Device name:           mthca0
</span><br>
<span class="quotelev1">&gt;   Device vendor ID:      0x15b3
</span><br>
<span class="quotelev1">&gt;   Device vendor part ID: 23108
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Default device parameters will be used, which may result in lower
</span><br>
<span class="quotelev1">&gt; performance.  You can edit any of the files specified by the
</span><br>
<span class="quotelev1">&gt; btl_openib_device_param_files MCA parameter to set values for your
</span><br>
<span class="quotelev1">&gt; device.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NOTE: You can turn off this warning by setting the MCA parameter
</span><br>
<span class="quotelev1">&gt;       btl_openib_warn_no_device_params_found to 0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is the same vendor ID I reported as missing back in the 1.5rc series:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2012/02/10615.php">http://www.open-mpi.org/community/lists/devel/2012/02/10615.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13562/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13563.php">Adrian Reber: "[OMPI devel] return value of opal_compress_base_register() in opal/mca/compress/base/compress_base_open.c"</a>
<li><strong>Previous message:</strong> <a href="13561.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30076 Missing Mellanox vendor ID"</a>
<li><strong>In reply to:</strong> <a href="13561.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30076 Missing Mellanox vendor ID"</a>
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
