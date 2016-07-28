<?
$subject_val = "Re: [OMPI devel] [patch] MPI-2.2: Ordering of attribution deletion callbacks on MPI_COMM_SELF";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 17 06:10:50 2013" -->
<!-- isoreceived="20130117111050" -->
<!-- sent="Thu, 17 Jan 2013 12:10:44 +0100" -->
<!-- isosent="20130117111044" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [patch] MPI-2.2: Ordering of attribution deletion callbacks on MPI_COMM_SELF" -->
<!-- id="DA365D3D-3D9D-4AA3-996A-616E47A7118F_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130117003728.03495499ad6cad580bcc7017_at_nifty.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [patch] MPI-2.2: Ordering of attribution deletion callbacks on MPI_COMM_SELF<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-17 06:10:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11931.php">KAWASHIMA Takahiro: "Re: [OMPI devel] [patch] MPI-2.2: Ordering of attribution deletion callbacks on MPI_COMM_SELF"</a>
<li><strong>Previous message:</strong> <a href="11929.php">Gutierrez, Samuel K: "[OMPI devel] Question About &quot;mpi_leaved_pinned 1&quot; Option"</a>
<li><strong>In reply to:</strong> <a href="11928.php">KAWASHIMA Takahiro: "[OMPI devel] [patch] MPI-2.2: Ordering of attribution deletion callbacks on MPI_COMM_SELF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11931.php">KAWASHIMA Takahiro: "Re: [OMPI devel] [patch] MPI-2.2: Ordering of attribution deletion callbacks on MPI_COMM_SELF"</a>
<li><strong>Reply:</strong> <a href="11931.php">KAWASHIMA Takahiro: "Re: [OMPI devel] [patch] MPI-2.2: Ordering of attribution deletion callbacks on MPI_COMM_SELF"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Takahiro,
<br>
<p>Thanks for the patch. I deplore the lost of the hash table in the attribute management, as the potential of transforming all attributes operation to a linear complexity is not very appealing.
<br>
<p>As you already took the decision C, it means that at the communicator destruction stage the hash table is not relevant anymore. Thus, I would have converted the hash table to an ordered list (ordered by the creation index, a global entity atomically updated every time an attribute is created), and proceed to destroy the attributed in the desired order. Thus instead of having a linear operation for every operation on attributes, we only have a single linear operation per communicator (and this during the destruction stage).
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Jan 16, 2013, at 16:37 , KAWASHIMA Takahiro &lt;rivis.kawashima_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've implemented ticket #3123 &quot;MPI-2.2: Ordering of attribution deletion
</span><br>
<span class="quotelev1">&gt; callbacks on MPI_COMM_SELF&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  <a href="https://svn.open-mpi.org/trac/ompi/ticket/3123">https://svn.open-mpi.org/trac/ompi/ticket/3123</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As this ticket says, attributes had been stored in unordered hash.
</span><br>
<span class="quotelev1">&gt; So I've replaced opal_hash_table_t with opal_list_t and made necessary
</span><br>
<span class="quotelev1">&gt; modifications for it. And I've also fixed some multi-threaded concurrent
</span><br>
<span class="quotelev1">&gt; (get|set|delete)_attr call issues.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; By this modification, following behavior changes are introduced.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  (A) MPI_(Comm|Type|Win)_(get|set|delete)_attr function may be slower
</span><br>
<span class="quotelev1">&gt;      for MPI objects that has many attributes attached.
</span><br>
<span class="quotelev1">&gt;  (B) When the user-defined delete callback function is called, the
</span><br>
<span class="quotelev1">&gt;      attribute is already removed from the list. In other words,
</span><br>
<span class="quotelev1">&gt;      if MPI_(Comm|Type|Win)_get_attr is called by the user-defined
</span><br>
<span class="quotelev1">&gt;      delete callback function for the same attribute key, it returns
</span><br>
<span class="quotelev1">&gt;      flag = false.
</span><br>
<span class="quotelev1">&gt;  (C) Even if the user-defined delete callback function returns non-
</span><br>
<span class="quotelev1">&gt;      MPI_SUCCESS value, the attribute is not reverted to the list.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (A) is due to a sequential list search instead of a hash. See find_value
</span><br>
<span class="quotelev1">&gt; function for its implementation.
</span><br>
<span class="quotelev1">&gt; (B) and (C) are due to an atomic deletion of the attribute to allow
</span><br>
<span class="quotelev1">&gt; multi-threaded concurrent (get|set|delete)_attr call in MPI_THREAD_MULTIPLE.
</span><br>
<span class="quotelev1">&gt; See ompi_attr_delete function for its implementation. I think this does
</span><br>
<span class="quotelev1">&gt; not matter because MPI standard doesn't specify behavior in such cases.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The patch for Open MPI trunk is attached. If you like it, take in
</span><br>
<span class="quotelev1">&gt; this patch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Though I'm a employee of a company, this is my independent and private
</span><br>
<span class="quotelev1">&gt; work at my home. No intellectual property from my company. If needed,
</span><br>
<span class="quotelev1">&gt; I'll sign to Individual Contributor License Agreement.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; KAWASHIMA Takahiro
</span><br>
<span class="quotelev1">&gt; &lt;delete-attr-order.patch.gz&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="11931.php">KAWASHIMA Takahiro: "Re: [OMPI devel] [patch] MPI-2.2: Ordering of attribution deletion callbacks on MPI_COMM_SELF"</a>
<li><strong>Previous message:</strong> <a href="11929.php">Gutierrez, Samuel K: "[OMPI devel] Question About &quot;mpi_leaved_pinned 1&quot; Option"</a>
<li><strong>In reply to:</strong> <a href="11928.php">KAWASHIMA Takahiro: "[OMPI devel] [patch] MPI-2.2: Ordering of attribution deletion callbacks on MPI_COMM_SELF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11931.php">KAWASHIMA Takahiro: "Re: [OMPI devel] [patch] MPI-2.2: Ordering of attribution deletion callbacks on MPI_COMM_SELF"</a>
<li><strong>Reply:</strong> <a href="11931.php">KAWASHIMA Takahiro: "Re: [OMPI devel] [patch] MPI-2.2: Ordering of attribution deletion callbacks on MPI_COMM_SELF"</a>
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
