<?
$subject_val = "Re: [OMPI devel] RFC: Move the Open MPI communication infrastructure in OPAL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 10 14:57:04 2014" -->
<!-- isoreceived="20140710185704" -->
<!-- sent="Thu, 10 Jul 2014 11:56:35 -0700" -->
<!-- isosent="20140710185635" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Move the Open MPI communication infrastructure in OPAL" -->
<!-- id="E7514517-3D85-409D-8285-A3F61E5EE6AA_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJJpkVFJL4CZapN-YgV4auv1qqtucwHi=cdnnWvppVEopBpJQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Move the Open MPI communication infrastructure in OPAL<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-10 14:56:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15101.php">Nathan Hjelm: "[OMPI devel] RFC: BTL Interface Change (2 of 5)"</a>
<li><strong>Previous message:</strong> <a href="15099.php">Nathan Hjelm: "Re: [OMPI devel] hwloc and pmi"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14974.php">George Bosilca: "[OMPI devel] RFC: Move the Open MPI communication infrastructure in OPAL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15104.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Move the Open MPI communication	infrastructure in OPAL"</a>
<li><strong>Reply:</strong> <a href="15104.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Move the Open MPI communication	infrastructure in OPAL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George: any update on when this will happen?
<br>
<p><p>On Jun 4, 2014, at 9:14 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; WHAT:    Open our low-level communication infrastructure by moving all
</span><br>
<span class="quotelev1">&gt; necessary components
</span><br>
<span class="quotelev1">&gt;               (btl/rcache/allocator/mpool) down in OPAL
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY: All the components required for inter-process communications are
</span><br>
<span class="quotelev1">&gt; currently deeply integrated in the OMPI
</span><br>
<span class="quotelev1">&gt;              layer. Several groups/institutions have express interest
</span><br>
<span class="quotelev1">&gt; in having a more generic communication
</span><br>
<span class="quotelev1">&gt;              infrastructure, without all the OMPI layer dependencies.
</span><br>
<span class="quotelev1">&gt; This communication layer should be made
</span><br>
<span class="quotelev1">&gt;              available at a different software level, available to
</span><br>
<span class="quotelev1">&gt; all layers in the Open MPI software stack. As an
</span><br>
<span class="quotelev1">&gt;              example, our ORTE layer could replace the current OOB
</span><br>
<span class="quotelev1">&gt; and instead use the BTL directly, gaining
</span><br>
<span class="quotelev1">&gt;              access to more reactive network interfaces than TCP.
</span><br>
<span class="quotelev1">&gt; Similarly, external software libraries could take
</span><br>
<span class="quotelev1">&gt;              advantage of our highly optimized AM (active message)
</span><br>
<span class="quotelev1">&gt; communication layer for their own purpose.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;              UTK with support from Sandia, developped a version of
</span><br>
<span class="quotelev1">&gt; Open MPI where the entire communication
</span><br>
<span class="quotelev1">&gt;              infrastucture has been moved down to OPAL
</span><br>
<span class="quotelev1">&gt; (btl/rcache/allocator/mpool). Most of the moved
</span><br>
<span class="quotelev1">&gt;              components have been updated to match the new schema,
</span><br>
<span class="quotelev1">&gt; with few exceptions (mainly BTLs
</span><br>
<span class="quotelev1">&gt;              where I have no way of compiling/testing them). Thus,
</span><br>
<span class="quotelev1">&gt; the completion of this RFC is tied to
</span><br>
<span class="quotelev1">&gt;              being able to completing this move for all BTLs. For
</span><br>
<span class="quotelev1">&gt; this we need help from the rest of the Open MPI
</span><br>
<span class="quotelev1">&gt;              community, especially those supporting some of the BTLs.
</span><br>
<span class="quotelev1">&gt; A non-exhaustive list of BTLs that
</span><br>
<span class="quotelev1">&gt;              qualify here is: mx, portals4, scif, udapl, ugni, usnic.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE:  bitbucket.org/bosilca/ompi-btl (updated today with respect to
</span><br>
<span class="quotelev1">&gt; trunk r31952)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMEOUT: After all the BTLs have been amended to match the new
</span><br>
<span class="quotelev1">&gt; location and usage. We will discuss
</span><br>
<span class="quotelev1">&gt;              the last bits regarding this RFC at the Open MPI
</span><br>
<span class="quotelev1">&gt; developers meeting in Chicago, June 24-26. The
</span><br>
<span class="quotelev1">&gt;              RFC will become final only after the meeting.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14974.php">http://www.open-mpi.org/community/lists/devel/2014/06/14974.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15101.php">Nathan Hjelm: "[OMPI devel] RFC: BTL Interface Change (2 of 5)"</a>
<li><strong>Previous message:</strong> <a href="15099.php">Nathan Hjelm: "Re: [OMPI devel] hwloc and pmi"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14974.php">George Bosilca: "[OMPI devel] RFC: Move the Open MPI communication infrastructure in OPAL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15104.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Move the Open MPI communication	infrastructure in OPAL"</a>
<li><strong>Reply:</strong> <a href="15104.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Move the Open MPI communication	infrastructure in OPAL"</a>
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
