<?
$subject_val = "[OMPI devel] RFC: Second Try: Add support to send/receive CUDA device memory directly";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 19 16:45:16 2011" -->
<!-- isoreceived="20110419204516" -->
<!-- sent="Tue, 19 Apr 2011 13:45:09 -0700" -->
<!-- isosent="20110419204509" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Second Try: Add support to send/receive CUDA device memory directly" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F3018915641E_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Second Try: Add support to send/receive CUDA device memory directly<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-19 16:45:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9200.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Second Try: Add support to send/receive CUDA device memory directly"</a>
<li><strong>Previous message:</strong> <a href="9198.php">Jeff Squyres: "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r24617"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9200.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Second Try: Add support to send/receive CUDA device memory directly"</a>
<li><strong>Reply:</strong> <a href="9200.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Second Try: Add support to send/receive CUDA device memory directly"</a>
<li><strong>Reply:</strong> <a href="9201.php">Ken Lloyd: "Re: [OMPI devel] RFC: Second Try: Add support to send/receive CUDA device memory directly"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Second try to add support to send data directly from CUDA device memory via MPI calls.
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
<p><p>-----------------------------------------------------------------------------------
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9199/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9200.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Second Try: Add support to send/receive CUDA device memory directly"</a>
<li><strong>Previous message:</strong> <a href="9198.php">Jeff Squyres: "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r24617"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9200.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Second Try: Add support to send/receive CUDA device memory directly"</a>
<li><strong>Reply:</strong> <a href="9200.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Second Try: Add support to send/receive CUDA device memory directly"</a>
<li><strong>Reply:</strong> <a href="9201.php">Ken Lloyd: "Re: [OMPI devel] RFC: Second Try: Add support to send/receive CUDA device memory directly"</a>
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
