<?
$subject_val = "Re: [OMPI devel] Existing frameworks for remote device memory exclusive read/write";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 23 10:56:45 2012" -->
<!-- isoreceived="20120723145645" -->
<!-- sent="Mon, 23 Jul 2012 16:56:38 +0200" -->
<!-- isosent="20120723145638" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Existing frameworks for remote device memory exclusive read/write" -->
<!-- id="0B778751-7148-4D4D-966D-7EDC87ADFC23_at_eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAGR4S9FApvFeVHNvUZDTTPj615+A2XQAEtLhMY7JgouQZ7h3qw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Existing frameworks for remote device memory exclusive read/write<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-23 10:56:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11314.php">George Bosilca: "[OMPI devel] Blame the compiler &#133;"</a>
<li><strong>Previous message:</strong> <a href="11312.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26825 - branches/v1.7/contrib"</a>
<li><strong>In reply to:</strong> <a href="11308.php">Dmitry N. Mikushin: "[OMPI devel] Existing frameworks for remote device memory exclusive read/write"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dima,
<br>
<p>A while back we investigated the potential of a memcpy module in the OPAL layer. We had some proof of concept, but finally didn't went forward due to lack of resources. However, we the skeleton of the code is still in the trunk (in opal/mca/memcpy). While I don't think it will cover all the cases expressed in your email due to it's synchronous nature, it can be a first step.
<br>
<p>In Open MPI, we avoid using memcpy directly. Instead, we use the convertor mechanism to deal with all memory to memory type of operations (as it hide the complexities of managing complex memory layout as defined by the MPI datatypes). Few weeks ago, Rolf (our NVIDIA guru), applied a patch allowing asynchronous memcpy in the OB1 PML for the last version of CUDA. Dig in the code looking for the HAVE_CUDA define to see the code he used to achieve asynchronous memcpy.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Jul 21, 2012, at 00:27 , Dmitry N. Mikushin wrote:
<br>
<p><span class="quotelev1">&gt; Dear OpenMPI developers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My question is not directly related to OpenMPI, but might be related to internal project kitchen and your wide experiences.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Say, there is a need to implement a transparent read/write of PCI-Express device internal memory from the host system. It is allowed to use only software capabilities of PCI-E device, which can memcpy synchronously and asynchronously in both directions. Memcpy can be initiated both by host and device. Host is required to implement its device memory read/write in critical sections: no PCI-E code could be using the same memory, while it is in operation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Question: could you please point related projects/subsystems, which code could be reused to implement the described functionality? We are mostly interested in ones implementing multiple strategies of memory synchronization, since there could be quite some, depending on typical memory access patterns, for example. This subsystem is necessary for our project, however not its primary goal, that's why we would like to borrow existing things in best possible way.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks and best regards,
</span><br>
<span class="quotelev1">&gt; - Dima.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11314.php">George Bosilca: "[OMPI devel] Blame the compiler &#133;"</a>
<li><strong>Previous message:</strong> <a href="11312.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26825 - branches/v1.7/contrib"</a>
<li><strong>In reply to:</strong> <a href="11308.php">Dmitry N. Mikushin: "[OMPI devel] Existing frameworks for remote device memory exclusive read/write"</a>
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
