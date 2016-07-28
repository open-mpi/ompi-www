<?
$subject_val = "Re: [OMPI devel] RFC: Move the Open MPI	communication	infrastructure in OPAL";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 11 15:17:24 2014" -->
<!-- isoreceived="20140711191724" -->
<!-- sent="Fri, 11 Jul 2014 19:17:23 +0000" -->
<!-- isosent="20140711191723" -->
<!-- name="Pritchard, Howard P" -->
<!-- email="howardp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Move the Open MPI	communication	infrastructure in OPAL" -->
<!-- id="5F6FB0CDAF4F98419A0D970E1F65ED05AB2BA5_at_ECS-EXG-P-MB05.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7DABE093-8597-4D61-A50D-F871383942DE_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Move the Open MPI	communication	infrastructure in OPAL<br>
<strong>From:</strong> Pritchard, Howard P (<em>howardp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-11 15:17:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15112.php">Ralph Castain: "Re: [OMPI devel] hwloc and pmi"</a>
<li><strong>Previous message:</strong> <a href="15110.php">Mike Dubman: "Re: [OMPI devel] hwloc and pmi"</a>
<li><strong>In reply to:</strong> <a href="15104.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Move the Open MPI communication	infrastructure in OPAL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15142.php">George Bosilca: "Re: [OMPI devel] RFC: Move the Open MPI communication infrastructure in OPAL"</a>
<li><strong>Reply:</strong> <a href="15142.php">George Bosilca: "Re: [OMPI devel] RFC: Move the Open MPI communication infrastructure in OPAL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Folks,
<br>
<p>Now work is planned for the uGNI BTL at this time either.  
<br>
<p>Howard
<br>
<p><p>-----Original Message-----
<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Jeff Squyres (jsquyres)
<br>
Sent: Thursday, July 10, 2014 5:04 PM
<br>
To: Open MPI Developers List
<br>
Subject: Re: [OMPI devel] RFC: Move the Open MPI communication infrastructure in OPAL
<br>
<p>FWIW: I can't speak for other BTL maintainers, but I'm out of the office for the next week, and the usnic BTL will be standing still during that time.  Once I return, I will be making additional changes in the usnic BTL (new features, updates, ...etc.).
<br>
<p>So if you have the cycles, doing it in the next week or so would be good because at least there will be no conflicts with usnic BTL concurrent development.  :-)
<br>
<p><p><p><p>On Jul 10, 2014, at 2:56 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; George: any update on when this will happen?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 4, 2014, at 9:14 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHAT:    Open our low-level communication infrastructure by moving all
</span><br>
<span class="quotelev2">&gt;&gt; necessary components
</span><br>
<span class="quotelev2">&gt;&gt;              (btl/rcache/allocator/mpool) down in OPAL
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHY: All the components required for inter-process communications are 
</span><br>
<span class="quotelev2">&gt;&gt; currently deeply integrated in the OMPI
</span><br>
<span class="quotelev2">&gt;&gt;             layer. Several groups/institutions have express interest 
</span><br>
<span class="quotelev2">&gt;&gt; in having a more generic communication
</span><br>
<span class="quotelev2">&gt;&gt;             infrastructure, without all the OMPI layer dependencies.
</span><br>
<span class="quotelev2">&gt;&gt; This communication layer should be made
</span><br>
<span class="quotelev2">&gt;&gt;             available at a different software level, available to all 
</span><br>
<span class="quotelev2">&gt;&gt; layers in the Open MPI software stack. As an
</span><br>
<span class="quotelev2">&gt;&gt;             example, our ORTE layer could replace the current OOB and 
</span><br>
<span class="quotelev2">&gt;&gt; instead use the BTL directly, gaining
</span><br>
<span class="quotelev2">&gt;&gt;             access to more reactive network interfaces than TCP.
</span><br>
<span class="quotelev2">&gt;&gt; Similarly, external software libraries could take
</span><br>
<span class="quotelev2">&gt;&gt;             advantage of our highly optimized AM (active message) 
</span><br>
<span class="quotelev2">&gt;&gt; communication layer for their own purpose.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;             UTK with support from Sandia, developped a version of 
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI where the entire communication
</span><br>
<span class="quotelev2">&gt;&gt;             infrastucture has been moved down to OPAL 
</span><br>
<span class="quotelev2">&gt;&gt; (btl/rcache/allocator/mpool). Most of the moved
</span><br>
<span class="quotelev2">&gt;&gt;             components have been updated to match the new schema, 
</span><br>
<span class="quotelev2">&gt;&gt; with few exceptions (mainly BTLs
</span><br>
<span class="quotelev2">&gt;&gt;             where I have no way of compiling/testing them). Thus, the 
</span><br>
<span class="quotelev2">&gt;&gt; completion of this RFC is tied to
</span><br>
<span class="quotelev2">&gt;&gt;             being able to completing this move for all BTLs. For this 
</span><br>
<span class="quotelev2">&gt;&gt; we need help from the rest of the Open MPI
</span><br>
<span class="quotelev2">&gt;&gt;             community, especially those supporting some of the BTLs.
</span><br>
<span class="quotelev2">&gt;&gt; A non-exhaustive list of BTLs that
</span><br>
<span class="quotelev2">&gt;&gt;             qualify here is: mx, portals4, scif, udapl, ugni, usnic.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHERE:  bitbucket.org/bosilca/ompi-btl (updated today with respect to 
</span><br>
<span class="quotelev2">&gt;&gt; trunk r31952)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; TIMEOUT: After all the BTLs have been amended to match the new 
</span><br>
<span class="quotelev2">&gt;&gt; location and usage. We will discuss
</span><br>
<span class="quotelev2">&gt;&gt;             the last bits regarding this RFC at the Open MPI 
</span><br>
<span class="quotelev2">&gt;&gt; developers meeting in Chicago, June 24-26. The
</span><br>
<span class="quotelev2">&gt;&gt;             RFC will become final only after the meeting.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14974.php">http://www.open-mpi.org/community/lists/devel/2014/06/14974.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15100.php">http://www.open-mpi.org/community/lists/devel/2014/07/15100.php</a>
</span><br>
<p><p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
devel mailing list
devel_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15104.php">http://www.open-mpi.org/community/lists/devel/2014/07/15104.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15112.php">Ralph Castain: "Re: [OMPI devel] hwloc and pmi"</a>
<li><strong>Previous message:</strong> <a href="15110.php">Mike Dubman: "Re: [OMPI devel] hwloc and pmi"</a>
<li><strong>In reply to:</strong> <a href="15104.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Move the Open MPI communication	infrastructure in OPAL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15142.php">George Bosilca: "Re: [OMPI devel] RFC: Move the Open MPI communication infrastructure in OPAL"</a>
<li><strong>Reply:</strong> <a href="15142.php">George Bosilca: "Re: [OMPI devel] RFC: Move the Open MPI communication infrastructure in OPAL"</a>
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
