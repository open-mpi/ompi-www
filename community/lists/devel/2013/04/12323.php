<?
$subject_val = "Re: [OMPI devel] [patch] MPI-2.2: Ordering of attribution deletion callbacks on MPI_COMM_SELF";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 29 12:21:18 2013" -->
<!-- isoreceived="20130429162118" -->
<!-- sent="Mon, 29 Apr 2013 16:21:13 +0000" -->
<!-- isosent="20130429162113" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [patch] MPI-2.2: Ordering of attribution deletion callbacks on MPI_COMM_SELF" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4B1C9F75_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130430011445.36075e6826ef88202c934e88_at_nifty.com" -->
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
<strong>Date:</strong> 2013-04-29 12:21:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12324.php">Ralph Castain: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Previous message:</strong> <a href="12322.php">KAWASHIMA Takahiro: "Re: [OMPI devel] [patch] MPI-2.2: Ordering of attribution deletion callbacks on MPI_COMM_SELF"</a>
<li><strong>In reply to:</strong> <a href="12322.php">KAWASHIMA Takahiro: "Re: [OMPI devel] [patch] MPI-2.2: Ordering of attribution deletion callbacks on MPI_COMM_SELF"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I apologize for the delay.  I literally started re-looking at your patches this past Friday.
<br>
<p>I have an additional patch on top of them to remove the majority of the locking -- the sequence of two locks makes things too complicated.  I'm still working out the final bugs; I was going to send you and George a patch / bitbucket later today for review...
<br>
<p><p>On Apr 29, 2013, at 12:14 PM, KAWASHIMA Takahiro &lt;rivis.kawashima_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This MPI-2.2 feature does not seem to be implemented yet in trunk.
</span><br>
<span class="quotelev1">&gt; How about my patches posted 3 months ago? They can be applied to
</span><br>
<span class="quotelev1">&gt; the latest trunk. If you don't like them, I can improve it.
</span><br>
<span class="quotelev1">&gt; I've attached same patches to this mail again. One for the implementation
</span><br>
<span class="quotelev1">&gt; of this MPI-2.2 feature and another for bug fixes, as described in
</span><br>
<span class="quotelev1">&gt; my previous mail.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; KAWASHIMA Takahiro
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff, George,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've implemented George's idea for ticket #3123 &quot;MPI-2.2: Ordering of
</span><br>
<span class="quotelev2">&gt;&gt; attribution deletion callbacks on MPI_COMM_SELF&quot;. See attached
</span><br>
<span class="quotelev2">&gt;&gt; delete-attr-order.patch.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It is implemented by creating a temporal array of ordered attribute_value_t
</span><br>
<span class="quotelev2">&gt;&gt; pointers at ompi_attr_delete_all() call using attribute creation sequence
</span><br>
<span class="quotelev2">&gt;&gt; numbers. It requires linear cost only at the communicator destruction
</span><br>
<span class="quotelev2">&gt;&gt; stage and its implementation is rather simpler than my previous patch.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; And apart from this MPI-2.2 ticket, I found some minor bugs and typos
</span><br>
<span class="quotelev2">&gt;&gt; in attribute.c and attribute.h. They can be fixed by the attached
</span><br>
<span class="quotelev2">&gt;&gt; attribute-bug-fix.patch. All fixes are assembled into one patch file.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've pushed my modifications to Bitbucket.
</span><br>
<span class="quotelev2">&gt;&gt;  <a href="https://bitbucket.org/rivis/openmpi-delattrorder/src/49bf3dc7cdbc/?at=sequence">https://bitbucket.org/rivis/openmpi-delattrorder/src/49bf3dc7cdbc/?at=sequence</a>
</span><br>
<span class="quotelev2">&gt;&gt; Note that my modifications are in &quot;sequence&quot; branch, not &quot;default&quot; branch.
</span><br>
<span class="quotelev2">&gt;&gt; I had committed each implementation/fixes independently that are
</span><br>
<span class="quotelev2">&gt;&gt; assembled in two patches attached to this mail. So you can see
</span><br>
<span class="quotelev2">&gt;&gt; comment/diff of each modification on Bitbucket.
</span><br>
<span class="quotelev2">&gt;&gt;  <a href="https://bitbucket.org/rivis/openmpi-delattrorder/commits/all">https://bitbucket.org/rivis/openmpi-delattrorder/commits/all</a>
</span><br>
<span class="quotelev2">&gt;&gt; Changesets eaa2432 and ace994b are for ticket #3123,
</span><br>
<span class="quotelev2">&gt;&gt; and other 7 latest changesets are for bug/typo-fixes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; KAWASHIMA Takahiro
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OK. I'll try implementing George's idea and then you can compare which
</span><br>
<span class="quotelev3">&gt;&gt;&gt; one is simpler.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; KAWASHIMA Takahiro
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Not that I'm aware of; that would be great.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Unlike George, however, I'm not concerned about converting to linear operations for attributes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Attributes are not used often, but when they are:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a) there aren't many of them (so a linear penalty is trivial)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; b) they're expected to be low performance
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So if it makes the code simpler, I certainly don't mind linear operations.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jan 17, 2013, at 9:32 AM, KAWASHIMA Takahiro &lt;rivis.kawashima_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; George,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Your idea makes sense.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is anyone working on it? If not, I'll try.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; KAWASHIMA Takahiro
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Takahiro,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks for the patch. I deplore the lost of the hash table in the attribute management, as the potential of transforming all attributes operation to a linear complexity is not very appealing.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; As you already took the decision C, it means that at the communicator destruction stage the hash table is not relevant anymore. Thus, I would have converted the hash table to an ordered list (ordered by the creation index, a global entity atomically updated every time an attribute is created), and proceed to destroy the attributed in the desired order. Thus instead of having a linear operation for every operation on attributes, we only have a single linear operation per communicator (and this during the destruction stage).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; George.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Jan 16, 2013, at 16:37 , KAWASHIMA Takahiro &lt;rivis.kawashima_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I've implemented ticket #3123 &quot;MPI-2.2: Ordering of attribution deletion
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; callbacks on MPI_COMM_SELF&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/3123">https://svn.open-mpi.org/trac/ompi/ticket/3123</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; As this ticket says, attributes had been stored in unordered hash.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; So I've replaced opal_hash_table_t with opal_list_t and made necessary
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; modifications for it. And I've also fixed some multi-threaded concurrent
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (get|set|delete)_attr call issues.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; By this modification, following behavior changes are introduced.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (A) MPI_(Comm|Type|Win)_(get|set|delete)_attr function may be slower
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;    for MPI objects that has many attributes attached.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (B) When the user-defined delete callback function is called, the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;    attribute is already removed from the list. In other words,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;    if MPI_(Comm|Type|Win)_get_attr is called by the user-defined
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;    delete callback function for the same attribute key, it returns
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;    flag = false.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (C) Even if the user-defined delete callback function returns non-
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;    MPI_SUCCESS value, the attribute is not reverted to the list.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (A) is due to a sequential list search instead of a hash. See find_value
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; function for its implementation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (B) and (C) are due to an atomic deletion of the attribute to allow
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; multi-threaded concurrent (get|set|delete)_attr call in MPI_THREAD_MULTIPLE.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; See ompi_attr_delete function for its implementation. I think this does
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; not matter because MPI standard doesn't specify behavior in such cases.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; The patch for Open MPI trunk is attached. If you like it, take in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; this patch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Though I'm a employee of a company, this is my independent and private
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; work at my home. No intellectual property from my company. If needed,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'll sign to Individual Contributor License Agreement.
</span><br>
<span class="quotelev1">&gt; &lt;delete-attr-order.patch&gt;&lt;attribute-bug-fix.patch&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="12324.php">Ralph Castain: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Previous message:</strong> <a href="12322.php">KAWASHIMA Takahiro: "Re: [OMPI devel] [patch] MPI-2.2: Ordering of attribution deletion callbacks on MPI_COMM_SELF"</a>
<li><strong>In reply to:</strong> <a href="12322.php">KAWASHIMA Takahiro: "Re: [OMPI devel] [patch] MPI-2.2: Ordering of attribution deletion callbacks on MPI_COMM_SELF"</a>
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
