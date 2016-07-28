<?
$subject_val = "Re: [OMPI devel] RFC: Second Try: Add support to send/receive CUDA device memory directly";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 19 16:59:06 2011" -->
<!-- isoreceived="20110419205906" -->
<!-- sent="Tue, 19 Apr 2011 14:58:59 -0600" -->
<!-- isosent="20110419205859" -->
<!-- name="Ken Lloyd" -->
<!-- email="kenneth.lloyd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Second Try: Add support to send/receive CUDA device memory directly" -->
<!-- id="1303246739.5004.1.camel_at_localhost.localdomain" -->
<!-- charset="utf-8" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F3018915641E_at_HQMAIL02.nvidia.com" -->
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
<strong>From:</strong> Ken Lloyd (<em>kenneth.lloyd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-19 16:58:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9202.php">Jeff Squyres: "[OMPI devel] RFC: mpirun command line arugments"</a>
<li><strong>Previous message:</strong> <a href="9200.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Second Try: Add support to send/receive CUDA device memory directly"</a>
<li><strong>In reply to:</strong> <a href="9199.php">Rolf vandeVaart: "[OMPI devel] RFC: Second Try: Add support to send/receive CUDA device memory directly"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Rolf.  We'll try it out.
<br>
<p>Ken
<br>
<p>On Tue, 2011-04-19 at 13:45 -0700, Rolf vandeVaart wrote:
<br>
<span class="quotelev1">&gt; WHAT: Second try to add support to send data directly from CUDA device
</span><br>
<span class="quotelev1">&gt; memory via MPI calls.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMEOUT: 4/26/2011
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; DETAILS: Based on all the feedback (thanks to everyone who looked at
</span><br>
<span class="quotelev1">&gt; it),  I have whittled down what I hope to accomplish with this RFC.
</span><br>
<span class="quotelev1">&gt; There were suggestions to better modularize the CUDA registration code
</span><br>
<span class="quotelev1">&gt; so I will take a look at that separately.  Since the registration code
</span><br>
<span class="quotelev1">&gt; is a performance feature, it will be dropped from this RFC and
</span><br>
<span class="quotelev1">&gt; investigated separately.  This significantly reduced the changes being
</span><br>
<span class="quotelev1">&gt; proposed here.  With this RFC, all the changes are isolated in
</span><br>
<span class="quotelev1">&gt; datatype and convertor code.   As mentioned before, the changes mostly
</span><br>
<span class="quotelev1">&gt; boil down to replacing memcpy with cuMemcpy when moving the data to or
</span><br>
<span class="quotelev1">&gt; from a CUDA device buffer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Per suggestions, the choice to disable the large memory RDMA now
</span><br>
<span class="quotelev1">&gt; happens on a per message basis.  This is done by adding a flag to the
</span><br>
<span class="quotelev1">&gt; convertor which tells the BTLs that an intermediate buffer is needed
</span><br>
<span class="quotelev1">&gt; when dealing with device memory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As before, this code would be enabled via a configure option.  A
</span><br>
<span class="quotelev1">&gt; mostly completed version is viewable on bitbucket although I know the
</span><br>
<span class="quotelev1">&gt; configure code is sorely lacking.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is the new list of changed files.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; M       opal/config/opal_configure_options.m4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A       opal/datatype/opal_datatype_cuda.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A       opal/datatype/opal_datatype_cuda.h
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; M       opal/datatype/opal_convertor.h
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; M       opal/datatype/opal_datatype_copy.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; M       opal/datatype/opal_datatype_unpack.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; M       opal/datatype/Makefile.am
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; M       opal/datatype/opal_datatype_pack.h
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; M       opal/datatype/opal_convertor.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; M       opal/datatype/opal_datatype_unpack.h
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/pml/ob1/pml_ob1_sendreq.h
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
<p><p><p><p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9201/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9202.php">Jeff Squyres: "[OMPI devel] RFC: mpirun command line arugments"</a>
<li><strong>Previous message:</strong> <a href="9200.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Second Try: Add support to send/receive CUDA device memory directly"</a>
<li><strong>In reply to:</strong> <a href="9199.php">Rolf vandeVaart: "[OMPI devel] RFC: Second Try: Add support to send/receive CUDA device memory directly"</a>
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
