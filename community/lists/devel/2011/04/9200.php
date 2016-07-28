<?
$subject_val = "Re: [OMPI devel] RFC: Second Try: Add support to send/receive CUDA device memory directly";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 19 16:54:41 2011" -->
<!-- isoreceived="20110419205441" -->
<!-- sent="Tue, 19 Apr 2011 13:54:35 -0700" -->
<!-- isosent="20110419205435" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Second Try: Add support to send/receive CUDA device memory directly" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F3018915642A_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-19 16:54:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9201.php">Ken Lloyd: "Re: [OMPI devel] RFC: Second Try: Add support to send/receive CUDA device memory directly"</a>
<li><strong>Previous message:</strong> <a href="9199.php">Rolf vandeVaart: "[OMPI devel] RFC: Second Try: Add support to send/receive CUDA device memory directly"</a>
<li><strong>In reply to:</strong> <a href="9199.php">Rolf vandeVaart: "[OMPI devel] RFC: Second Try: Add support to send/receive CUDA device memory directly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9203.php">Jeff Squyres: "Re: [OMPI devel] RFC: Second Try: Add support to send/receive CUDA device memory directly"</a>
<li><strong>Reply:</strong> <a href="9203.php">Jeff Squyres: "Re: [OMPI devel] RFC: Second Try: Add support to send/receive CUDA device memory directly"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Forgot the link...
<br>
<p><a href="https://bitbucket.org/rolfv/ompi-trunk-cuda-rfc2">https://bitbucket.org/rolfv/ompi-trunk-cuda-rfc2</a>
<br>
<p><p><p>From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On Behalf Of Rolf vandeVaart
<br>
Sent: Tuesday, April 19, 2011 4:45 PM
<br>
To: Open MPI Developers
<br>
Subject: [OMPI devel] RFC: Second Try: Add support to send/receive CUDA device memory directly
<br>
<p>WHAT: Second try to add support to send data directly from CUDA device memory via MPI calls.
<br>
<p>TIMEOUT: 4/26/2011
<br>
<p>DETAILS: Based on all the feedback (thanks to everyone who looked at it),  I have whittled down what I hope to accomplish with this RFC.  There were suggestions to better modularize the CUDA registration code so I will take a look at that separately.  Since the registration code is a performance feature, it will be dropped from this RFC and investigated separately.  This significantly reduced the changes being proposed here.  With this RFC, all the changes are isolated in datatype and convertor code.   As mentioned before, the changes mostly boil down to replacing memcpy with cuMemcpy when moving the data to or from a CUDA device buffer.
<br>
<p>Per suggestions, the choice to disable the large memory RDMA now happens on a per message basis.  This is done by adding a flag to the convertor which tells the BTLs that an intermediate buffer is needed when dealing with device memory.
<br>
<p>As before, this code would be enabled via a configure option.  A mostly completed version is viewable on bitbucket although I know the configure code is sorely lacking.
<br>
<p>This is the new list of changed files.
<br>
<p>M       opal/config/opal_configure_options.m4
<br>
A       opal/datatype/opal_datatype_cuda.c
<br>
A       opal/datatype/opal_datatype_cuda.h
<br>
M       opal/datatype/opal_convertor.h
<br>
M       opal/datatype/opal_datatype_copy.c
<br>
M       opal/datatype/opal_datatype_unpack.c
<br>
M       opal/datatype/Makefile.am
<br>
M       opal/datatype/opal_datatype_pack.h
<br>
M       opal/datatype/opal_convertor.c
<br>
M       opal/datatype/opal_datatype_unpack.h
<br>
M       ompi/mca/pml/ob1/pml_ob1_sendreq.h
<br>
<p>Thanks,
<br>
Rolf
<br>
<p>-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9200/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9201.php">Ken Lloyd: "Re: [OMPI devel] RFC: Second Try: Add support to send/receive CUDA device memory directly"</a>
<li><strong>Previous message:</strong> <a href="9199.php">Rolf vandeVaart: "[OMPI devel] RFC: Second Try: Add support to send/receive CUDA device memory directly"</a>
<li><strong>In reply to:</strong> <a href="9199.php">Rolf vandeVaart: "[OMPI devel] RFC: Second Try: Add support to send/receive CUDA device memory directly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9203.php">Jeff Squyres: "Re: [OMPI devel] RFC: Second Try: Add support to send/receive CUDA device memory directly"</a>
<li><strong>Reply:</strong> <a href="9203.php">Jeff Squyres: "Re: [OMPI devel] RFC: Second Try: Add support to send/receive CUDA device memory directly"</a>
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
