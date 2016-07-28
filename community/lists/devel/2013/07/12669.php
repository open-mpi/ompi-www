<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 20 17:34:01 2013" -->
<!-- isoreceived="20130720213401" -->
<!-- sent="Sat, 20 Jul 2013 23:33:27 +0200" -->
<!-- isosent="20130720213327" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup" -->
<!-- id="23205AB4-5FE5-4404-8AB7-DCC930F1576C_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CE0ED16D.12355%bwbarre_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-20 17:33:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12670.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup"</a>
<li><strong>Previous message:</strong> <a href="12668.php">Jeff Squyres (jsquyres): "[OMPI devel] New SVN commit message tokens for CMRs"</a>
<li><strong>In reply to:</strong> <a href="12667.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12670.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup"</a>
<li><strong>Reply:</strong> <a href="12670.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 19, 2013, at 19:29 , &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 7/19/13 10:58 AM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. The BML endpoint structure (aka. BML proc) is well known and defined
</span><br>
<span class="quotelev2">&gt;&gt; in the bml.h. So it is not technically opaque&#138;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's opaque in that outside of the R2 BML, users were not supposed to poke
</span><br>
<span class="quotelev1">&gt; at what's in proc_bml without using the BML interface.  Some do, although
</span><br>
<span class="quotelev1">&gt; that was easy to accommodate.
</span><br>
<span class="quotelev2">&gt;&gt; 2. When allocating an ompi_proc_t structure you will always have to
</span><br>
<span class="quotelev2">&gt;&gt; allocate for an array large enough to contain up to the max size detected
</span><br>
<span class="quotelev2">&gt;&gt; during configure. There is significant potential for oversized arrays in
</span><br>
<span class="quotelev2">&gt;&gt; one of the most space critical structure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It could, if we're not careful with our tag requests.  In the prototype I
</span><br>
<span class="quotelev1">&gt; wrote up, the sizes of endpoint storage in ompi_proc_t are as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  * Current trunk: 16 bytes
</span><br>
<span class="quotelev1">&gt;  * Proposed trunk, no dynamic support, no MTLs: 8 bytes
</span><br>
<span class="quotelev1">&gt;  * Proposed trunk, dynamic support, no MTLs: 16 bytes
</span><br>
<span class="quotelev1">&gt;  * Proposed trunk, dynamic support, MXM, PSM, or MX: 24 bytes
</span><br>
<span class="quotelev1">&gt;  * Proposed trunk, Portals, no dynamic support: 16 bytes
</span><br>
<span class="quotelev1">&gt;  * Proposed trunk, Portals, dynamic support: 24 bytes
</span><br>
<span class="quotelev1">&gt;  * Proposed trunk, Portals, MX, PSM, or MXM, dynamic support: 32 bytes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, yes, you're right.  But the situations where you see growth are not
</span><br>
<span class="quotelev1">&gt; normal OMPI builds (for example, Portals &amp; MXM support).  In the common
</span><br>
<span class="quotelev1">&gt; cases, we could actually shrink by 8 bytes by disabling dynamic support.
</span><br>
<span class="quotelev1">&gt; It would also (finally) allow us to run the MTLs and BTLs simultaneously,
</span><br>
<span class="quotelev1">&gt; which is something we haven't been able to do previously.
</span><br>
<p>Sure, but if we look a little forward having such a mechanism available might raise interest from others  components to take advantage of it, leading to a larger number of such TAGs. There is potential for a larger and sparser proc array (as not all modules that reserve a TAG will be loaded simultaneously) in ompi_proc_t.
<br>
<p><p>I would like to propose a simpler solution. Imagine having a unique global index in the ompi_proc_t structure, one that will indicate the position of the ompi_proc_t in the global array of processors. One could use this unique index to access any type of information in similarly shaped arrays to our global ompi processor list. Thus all components that need to share some other information would be able to take advantage of ompi_proc_t index so share information they agree on on an array that they agree on. This extra array where they will access this information can either be created using their already shared infrastructure (if such infrastructure exists), or we can leverage the new MCA parameters infrastructure to create a hidden/internal parameter that point to the array.
<br>
<p>What is the cost of this approach?
<br>
<p>- There are several fields in the ompi_proc_t structure that can be used to store the global index. As an example we can take advantage of the proc-&gt;super.item_free that is never used in the context of ompi_proc_t (this field is only used for LIFO/FIFO). This is an int32_t so we're good in number of processes for a while. Thus compared with today there will be no extra storage cost for hang this global index.
<br>
<p>- The cost of accessing the endpoints will be a load from the ompi_proc_t to get that global index and then another relative load (using this index and the array of endpoints). So exactly the same number of loads as the dynamic case, but one more compared with the &quot;no dynamic support&quot; case in your proposal.
<br>
<p>- In terms of memory this solution provide an approach where there will never be an extra overhead. The ompi_proc_t is not changed, and the extra array of endpoints is only created if the components that share it, are all loaded and enabled.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 3. I don't know at which point this really matter but with this change
</span><br>
<span class="quotelev2">&gt;&gt; two Open MPI libraries might become binary incompatible (if the #define
</span><br>
<span class="quotelev2">&gt;&gt; is exchanged between nodes).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The #defines are local process only.  ompi_proc_ts aren't global
</span><br>
<span class="quotelev1">&gt; structures (the pointer to them is), so there's no binary incompatibility.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hacked up a prototype in tmp-public/snl-proc-tags/ last night.  It
</span><br>
<span class="quotelev1">&gt; currently lacks dynamic support (since we have no users for that), but
</span><br>
<span class="quotelev1">&gt; otherwise works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;  Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;  Scalable System Software Group
</span><br>
<span class="quotelev1">&gt;  Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12670.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup"</a>
<li><strong>Previous message:</strong> <a href="12668.php">Jeff Squyres (jsquyres): "[OMPI devel] New SVN commit message tokens for CMRs"</a>
<li><strong>In reply to:</strong> <a href="12667.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12670.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup"</a>
<li><strong>Reply:</strong> <a href="12670.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup"</a>
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
