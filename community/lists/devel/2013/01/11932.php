<?
$subject_val = "Re: [OMPI devel] [patch] MPI-2.2: Ordering of attribution deletion callbacks on MPI_COMM_SELF";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 17 10:45:58 2013" -->
<!-- isoreceived="20130117154558" -->
<!-- sent="Thu, 17 Jan 2013 15:45:53 +0000" -->
<!-- isosent="20130117154553" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [patch] MPI-2.2: Ordering of attribution deletion callbacks on MPI_COMM_SELF" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC3E070BFE_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130117233258.07134d6c28521a4ea213920f_at_nifty.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-17 10:45:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11933.php">Jeff Squyres (jsquyres): "[OMPI devel] sanity check on 1.6.4 .so versions"</a>
<li><strong>Previous message:</strong> <a href="11931.php">KAWASHIMA Takahiro: "Re: [OMPI devel] [patch] MPI-2.2: Ordering of attribution deletion callbacks on MPI_COMM_SELF"</a>
<li><strong>In reply to:</strong> <a href="11931.php">KAWASHIMA Takahiro: "Re: [OMPI devel] [patch] MPI-2.2: Ordering of attribution deletion callbacks on MPI_COMM_SELF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11936.php">KAWASHIMA Takahiro: "Re: [OMPI devel] [patch] MPI-2.2: Ordering of attribution deletion callbacks on MPI_COMM_SELF"</a>
<li><strong>Reply:</strong> <a href="11936.php">KAWASHIMA Takahiro: "Re: [OMPI devel] [patch] MPI-2.2: Ordering of attribution deletion callbacks on MPI_COMM_SELF"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not that I'm aware of; that would be great.
<br>
<p>Unlike George, however, I'm not concerned about converting to linear operations for attributes.
<br>
<p>Attributes are not used often, but when they are:
<br>
<p>a) there aren't many of them (so a linear penalty is trivial)
<br>
b) they're expected to be low performance
<br>
<p>So if it makes the code simpler, I certainly don't mind linear operations.
<br>
<p><p><p>On Jan 17, 2013, at 9:32 AM, KAWASHIMA Takahiro &lt;rivis.kawashima_at_[hidden]&gt;
<br>
&nbsp;wrote:
<br>
<p><span class="quotelev1">&gt; George,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your idea makes sense.
</span><br>
<span class="quotelev1">&gt; Is anyone working on it? If not, I'll try.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; KAWASHIMA Takahiro
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Takahiro,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the patch. I deplore the lost of the hash table in the attribute management, as the potential of transforming all attributes operation to a linear complexity is not very appealing.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As you already took the decision C, it means that at the communicator destruction stage the hash table is not relevant anymore. Thus, I would have converted the hash table to an ordered list (ordered by the creation index, a global entity atomically updated every time an attribute is created), and proceed to destroy the attributed in the desired order. Thus instead of having a linear operation for every operation on attributes, we only have a single linear operation per communicator (and this during the destruction stage).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  George.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 16, 2013, at 16:37 , KAWASHIMA Takahiro &lt;rivis.kawashima_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've implemented ticket #3123 &quot;MPI-2.2: Ordering of attribution deletion
</span><br>
<span class="quotelev3">&gt;&gt;&gt; callbacks on MPI_COMM_SELF&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/3123">https://svn.open-mpi.org/trac/ompi/ticket/3123</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As this ticket says, attributes had been stored in unordered hash.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So I've replaced opal_hash_table_t with opal_list_t and made necessary
</span><br>
<span class="quotelev3">&gt;&gt;&gt; modifications for it. And I've also fixed some multi-threaded concurrent
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (get|set|delete)_attr call issues.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; By this modification, following behavior changes are introduced.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (A) MPI_(Comm|Type|Win)_(get|set|delete)_attr function may be slower
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     for MPI objects that has many attributes attached.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (B) When the user-defined delete callback function is called, the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     attribute is already removed from the list. In other words,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     if MPI_(Comm|Type|Win)_get_attr is called by the user-defined
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     delete callback function for the same attribute key, it returns
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     flag = false.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (C) Even if the user-defined delete callback function returns non-
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_SUCCESS value, the attribute is not reverted to the list.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (A) is due to a sequential list search instead of a hash. See find_value
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function for its implementation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (B) and (C) are due to an atomic deletion of the attribute to allow
</span><br>
<span class="quotelev3">&gt;&gt;&gt; multi-threaded concurrent (get|set|delete)_attr call in MPI_THREAD_MULTIPLE.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; See ompi_attr_delete function for its implementation. I think this does
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not matter because MPI standard doesn't specify behavior in such cases.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The patch for Open MPI trunk is attached. If you like it, take in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this patch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Though I'm a employee of a company, this is my independent and private
</span><br>
<span class="quotelev3">&gt;&gt;&gt; work at my home. No intellectual property from my company. If needed,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'll sign to Individual Contributor License Agreement.
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11933.php">Jeff Squyres (jsquyres): "[OMPI devel] sanity check on 1.6.4 .so versions"</a>
<li><strong>Previous message:</strong> <a href="11931.php">KAWASHIMA Takahiro: "Re: [OMPI devel] [patch] MPI-2.2: Ordering of attribution deletion callbacks on MPI_COMM_SELF"</a>
<li><strong>In reply to:</strong> <a href="11931.php">KAWASHIMA Takahiro: "Re: [OMPI devel] [patch] MPI-2.2: Ordering of attribution deletion callbacks on MPI_COMM_SELF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11936.php">KAWASHIMA Takahiro: "Re: [OMPI devel] [patch] MPI-2.2: Ordering of attribution deletion callbacks on MPI_COMM_SELF"</a>
<li><strong>Reply:</strong> <a href="11936.php">KAWASHIMA Takahiro: "Re: [OMPI devel] [patch] MPI-2.2: Ordering of attribution deletion callbacks on MPI_COMM_SELF"</a>
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
