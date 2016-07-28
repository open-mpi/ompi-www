<?
$subject_val = "Re: [OMPI devel] Datatype question";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 10 08:33:17 2011" -->
<!-- isoreceived="20110110133317" -->
<!-- sent="Mon, 10 Jan 2011 08:33:12 -0500" -->
<!-- isosent="20110110133312" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Datatype question" -->
<!-- id="C9C32BB3-A2AC-4C63-940C-31254B1AE4BE_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="75C6A527-B4A1-4A92-8966-02FE2BADFBAA_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Datatype question<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-10 08:33:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8850.php">Eugene Loh: "[OMPI devel] u_int8_t"</a>
<li><strong>Previous message:</strong> <a href="8848.php">Pascal Deveze: "Re: [OMPI devel] Problem with attributes attached to communicators"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/12/8813.php">George Bosilca: "Re: [OMPI devel] Datatype question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian -- is this enough information to complete the blocker defect <a href="https://svn.open-mpi.org/trac/ompi/ticket/2656">https://svn.open-mpi.org/trac/ompi/ticket/2656</a>?
<br>
<p><p>On Dec 21, 2010, at 2:54 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Anyway, back to your question. The MPI and OPAL datatypes uses the same indexes, for all the OPAL predefined types. Several MPI types map to the same underlying OPAL type: such as MPI_INT, MPI_INTEGER, MPI_INT32_T. All MPI types not supported at OPAL level, will get their indexes contiguously after the OPAL_DATATYPE_MAX_PREDEFINED upper bound (up to OMPI_DATATYPE_MPI_MAX_PREDEFINED). Moreover, the OPAL layer has been modified to support up to OPAL_DATATYPE_MAX_SUPPORTED datatypes, and this value should be modified based on the upper level requirements (today it is set to 46 as this is the total number of MPI supported datatypes, including the Fortran ones). bdt_used is currently defined as an uint32_t, so obviously there is not enough place to hold all possible MPI datatypes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Solution 1: We can change the bdt_used to uint64_t. This requires some work, and I will prefer to have some time to see exactly all the implications.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Solution 2: Quick and dirty, but not the fastest one. Instead of walking the bdt_used you can walk the btypes array. If the count is not zero, then the MPI datatype corresponding to the index in the array is used.
</span><br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="8850.php">Eugene Loh: "[OMPI devel] u_int8_t"</a>
<li><strong>Previous message:</strong> <a href="8848.php">Pascal Deveze: "Re: [OMPI devel] Problem with attributes attached to communicators"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/12/8813.php">George Bosilca: "Re: [OMPI devel] Datatype question"</a>
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
