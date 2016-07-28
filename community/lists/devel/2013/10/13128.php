<?
$subject_val = "Re: [OMPI devel] Developer's guide to OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 24 03:04:05 2013" -->
<!-- isoreceived="20131024070405" -->
<!-- sent="Thu, 24 Oct 2013 09:04:03 +0200" -->
<!-- isosent="20131024070403" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Developer's guide to OpenMPI" -->
<!-- id="DA231B81-043C-4C24-BD91-DF5047FCAAD6_at_icl.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CANFHntD_p3ADX==jMy_VSyKNwuvb0tCGp-yQzeM4OtyeU06hGQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Developer's guide to OpenMPI<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-24 03:04:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13129.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29519 - trunk/oshmem/mca/atomic/mxm"</a>
<li><strong>Previous message:</strong> <a href="13127.php">Bibrak Qamar: "[OMPI devel] Developer's guide to OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="13127.php">Bibrak Qamar: "[OMPI devel] Developer's guide to OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not as a real document. But gdb exists partially to supplement this lack of documentation. It can definitively help you understand what is going on during the initialization stage of the MPI library.
<br>
<p>To answer specifically your question about MPI_COMM_WORLD, take a look in ompi/communicator/comm_init.c around line 98.
<br>
<p>&nbsp;&nbsp;Have fun,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;George.
<br>
<p><p>On Oct 24, 2013, at 07:03 , Bibrak Qamar &lt;bibrakc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am searching for something of a guide to OpenMPI developer. Specifically, I need to understand how the OpenMPI is initialized. For example how the COMM_WORLD is initialized. Is there any help in this regard?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Bibrak Qamar
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13128/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13129.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29519 - trunk/oshmem/mca/atomic/mxm"</a>
<li><strong>Previous message:</strong> <a href="13127.php">Bibrak Qamar: "[OMPI devel] Developer's guide to OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="13127.php">Bibrak Qamar: "[OMPI devel] Developer's guide to OpenMPI"</a>
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
