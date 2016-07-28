<?
$subject_val = "Re: [OMPI devel] RFC: Second Try: Add support to send/receive CUDA device memory directly";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 21 18:19:30 2011" -->
<!-- isoreceived="20110421221930" -->
<!-- sent="Thu, 21 Apr 2011 18:19:22 -0400" -->
<!-- isosent="20110421221922" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Second Try: Add support to send/receive CUDA device memory directly" -->
<!-- id="05FFEEA8-5911-4C05-BAFF-32B99B818C34_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F3018915642A_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Second Try: Add support to send/receive CUDA device memory directly<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-21 18:19:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9204.php">Ralph Castain: "Re: [OMPI devel] RFC: mpirun command line arugments"</a>
<li><strong>Previous message:</strong> <a href="9202.php">Jeff Squyres: "[OMPI devel] RFC: mpirun command line arugments"</a>
<li><strong>In reply to:</strong> <a href="9200.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Second Try: Add support to send/receive CUDA device memory directly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9210.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Second Try: Add support to send/receive CUDA	device memory directly"</a>
<li><strong>Reply:</strong> <a href="9210.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Second Try: Add support to send/receive CUDA	device memory directly"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George -- what say you?
<br>
<p>On Apr 19, 2011, at 4:54 PM, Rolf vandeVaart wrote:
<br>
<p><span class="quotelev1">&gt; Forgot the link&#133;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; <a href="https://bitbucket.org/rolfv/ompi-trunk-cuda-rfc2">https://bitbucket.org/rolfv/ompi-trunk-cuda-rfc2</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On Behalf Of Rolf vandeVaart
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, April 19, 2011 4:45 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] RFC: Second Try: Add support to send/receive CUDA device memory directly
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; WHAT: Second try to add support to send data directly from CUDA device memory via MPI calls.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; TIMEOUT: 4/26/2011
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; DETAILS: Based on all the feedback (thanks to everyone who looked at it),  I have whittled down what I hope to accomplish with this RFC.  There were suggestions to better modularize the CUDA registration code so I will take a look at that separately.  Since the registration code is a performance feature, it will be dropped from this RFC and investigated separately.  This significantly reduced the changes being proposed here.  With this RFC, all the changes are isolated in datatype and convertor code.   As mentioned before, the changes mostly boil down to replacing memcpy with cuMemcpy when moving the data to or from a CUDA device buffer.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Per suggestions, the choice to disable the large memory RDMA now happens on a per message basis.  This is done by adding a flag to the convertor which tells the BTLs that an intermediate buffer is needed when dealing with device memory.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; As before, this code would be enabled via a configure option.  A mostly completed version is viewable on bitbucket although I know the configure code is sorely lacking.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; This is the new list of changed files.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; M       opal/config/opal_configure_options.m4
</span><br>
<span class="quotelev1">&gt; A       opal/datatype/opal_datatype_cuda.c
</span><br>
<span class="quotelev1">&gt; A       opal/datatype/opal_datatype_cuda.h
</span><br>
<span class="quotelev1">&gt; M       opal/datatype/opal_convertor.h
</span><br>
<span class="quotelev1">&gt; M       opal/datatype/opal_datatype_copy.c
</span><br>
<span class="quotelev1">&gt; M       opal/datatype/opal_datatype_unpack.c
</span><br>
<span class="quotelev1">&gt; M       opal/datatype/Makefile.am
</span><br>
<span class="quotelev1">&gt; M       opal/datatype/opal_datatype_pack.h
</span><br>
<span class="quotelev1">&gt; M       opal/datatype/opal_convertor.c
</span><br>
<span class="quotelev1">&gt; M       opal/datatype/opal_datatype_unpack.h
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/pml/ob1/pml_ob1_sendreq.h
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may contain confidential information.  Any unauthorized review, use, disclosure or distribution is prohibited.  If you are not the intended recipient, please contact the sender by reply email and destroy all copies of the original message.
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9204.php">Ralph Castain: "Re: [OMPI devel] RFC: mpirun command line arugments"</a>
<li><strong>Previous message:</strong> <a href="9202.php">Jeff Squyres: "[OMPI devel] RFC: mpirun command line arugments"</a>
<li><strong>In reply to:</strong> <a href="9200.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Second Try: Add support to send/receive CUDA device memory directly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9210.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Second Try: Add support to send/receive CUDA	device memory directly"</a>
<li><strong>Reply:</strong> <a href="9210.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Second Try: Add support to send/receive CUDA	device memory directly"</a>
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
