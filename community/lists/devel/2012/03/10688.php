<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26118";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  8 17:08:38 2012" -->
<!-- isoreceived="20120308220838" -->
<!-- sent="Thu, 8 Mar 2012 17:08:33 -0500" -->
<!-- isosent="20120308220833" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26118" -->
<!-- id="94B4712C-C869-4E9E-840D-7127C7F1E92E_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201203082157.q28LvkG5002252_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26118<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-08 17:08:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10689.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26118"</a>
<li><strong>Previous message:</strong> <a href="10687.php">Ralph Castain: "Re: [OMPI devel] [PATCH] iof/hnp: daemon part of the sink structure is not initialized when forwarding stdin to all ranks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10689.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26118"</a>
<li><strong>Reply:</strong> <a href="10689.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26118"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh,
<br>
<p>Open MPI already have a similar function in the communicator part, function that is not exposed to the upper layer. I think that using the code in ompi_comm_compare (the second part that compare groups) is sound proof. Moreover, if now we have an ompi_group_compare function you should use it in the ompi_comm_compare to ease the readability of the code.
<br>
<p>&nbsp;&nbsp;Regards,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><p><p>On Mar 8, 2012, at 16:57 , jjhursey_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: jjhursey
</span><br>
<span class="quotelev1">&gt; Date: 2012-03-08 16:57:45 EST (Thu, 08 Mar 2012)
</span><br>
<span class="quotelev1">&gt; New Revision: 26118
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/26118">https://svn.open-mpi.org/trac/ompi/changeset/26118</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Abstract MPI_Group_compare to an OMPI function for internal use (point the MPI interface to the internal function).
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10689.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26118"</a>
<li><strong>Previous message:</strong> <a href="10687.php">Ralph Castain: "Re: [OMPI devel] [PATCH] iof/hnp: daemon part of the sink structure is not initialized when forwarding stdin to all ranks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10689.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26118"</a>
<li><strong>Reply:</strong> <a href="10689.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26118"</a>
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
