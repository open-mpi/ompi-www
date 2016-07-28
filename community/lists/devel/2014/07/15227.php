<?
$subject_val = "Re: [OMPI devel] RFC: Move the Open MPI communication	infrastructure in OPAL";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 23 22:11:06 2014" -->
<!-- isoreceived="20140724021106" -->
<!-- sent="Thu, 24 Jul 2014 02:11:03 +0000" -->
<!-- isosent="20140724021103" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Move the Open MPI communication	infrastructure in OPAL" -->
<!-- id="56FCD00B-9233-4387-A8BD-B60E83AC49C2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="11BDF6E7-0925-47BA-8816-67CCABF23C8A_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Move the Open MPI communication	infrastructure in OPAL<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-23 22:11:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15228.php">George Bosilca: "Re: [OMPI devel] RFC: Move the Open MPI communication	infrastructure in OPAL"</a>
<li><strong>Previous message:</strong> <a href="15226.php">Ralph Castain: "Re: [OMPI devel] RFC: Move the Open MPI communication infrastructure in OPAL"</a>
<li><strong>In reply to:</strong> <a href="15226.php">Ralph Castain: "Re: [OMPI devel] RFC: Move the Open MPI communication infrastructure in OPAL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15228.php">George Bosilca: "Re: [OMPI devel] RFC: Move the Open MPI communication	infrastructure in OPAL"</a>
<li><strong>Reply:</strong> <a href="15228.php">George Bosilca: "Re: [OMPI devel] RFC: Move the Open MPI communication	infrastructure in OPAL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph and I chatted in IM.
<br>
<p>For the moment, I'm masking off the lower 32 bits to get the VPID, the uppermost 16 as the job family, and the next 16 as the sub-family.
<br>
<p>If George makes the name be a handle with accessors to get the parts, we can switch to using that.
<br>
<p><p><p>On Jul 23, 2014, at 9:57 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; You should be able to memcpy it to an ompi_process_name_t and then extract it as usual
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 23, 2014, at 6:51 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; George --
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there a way to get the MPI_COMM_WORLD rank of an opal_process_name_t?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am currently outputting some information about peer processes in the usnic BTL to include the peer's VPID, which is the MCW rank.  I'll be sad if that goes away...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 15, 2014, at 2:06 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There are two reasons that prevent me from pushing this RFC forward.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. Minor: The code has some minor issues related to the last set of BTL/PML changes, and I didn't found the time to fix them.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. Major: Not all BTLs have been updated and validated. What we need at this point from their respective developers is a little help with the validation process. We need to validate that the new code works as expected and passes all tests.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The move will be ready to go as soon as all BTL developers raise the green flag. I got it from Jeff (but the last USNIC commit broke something), and myself. In other words, TCP, self, SM and USNIC are good to go. For the others, as I didn't heard back from their developers/maintainers, I assume they are not yet ready. Here I am referring to OpenIB, Portals4, Scif, smcuda, ugni, usnic and vader.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; George.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PS: As a reminder the code is available at <a href="https://bitbucket.org/bosilca/ompi-btl">https://bitbucket.org/bosilca/ompi-btl</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, Jul 11, 2014 at 3:17 PM, Pritchard, Howard P &lt;howardp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Folks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now work is planned for the uGNI BTL at this time either.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Howard
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Thursday, July 10, 2014 5:04 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Developers List
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI devel] RFC: Move the Open MPI communication infrastructure in OPAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FWIW: I can't speak for other BTL maintainers, but I'm out of the office for the next week, and the usnic BTL will be standing still during that time.  Once I return, I will be making additional changes in the usnic BTL (new features, updates, ...etc.).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So if you have the cycles, doing it in the next week or so would be good because at least there will be no conflicts with usnic BTL concurrent development.  :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 10, 2014, at 2:56 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; George: any update on when this will happen?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jun 4, 2014, at 9:14 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; WHAT:    Open our low-level communication infrastructure by moving all
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; necessary components
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            (btl/rcache/allocator/mpool) down in OPAL
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; WHY: All the components required for inter-process communications are
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; currently deeply integrated in the OMPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           layer. Several groups/institutions have express interest
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in having a more generic communication
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           infrastructure, without all the OMPI layer dependencies.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This communication layer should be made
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           available at a different software level, available to all
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; layers in the Open MPI software stack. As an
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           example, our ORTE layer could replace the current OOB and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; instead use the BTL directly, gaining
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           access to more reactive network interfaces than TCP.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Similarly, external software libraries could take
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           advantage of our highly optimized AM (active message)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; communication layer for their own purpose.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           UTK with support from Sandia, developped a version of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Open MPI where the entire communication
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           infrastucture has been moved down to OPAL
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (btl/rcache/allocator/mpool). Most of the moved
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           components have been updated to match the new schema,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with few exceptions (mainly BTLs
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           where I have no way of compiling/testing them). Thus, the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; completion of this RFC is tied to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           being able to completing this move for all BTLs. For this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; we need help from the rest of the Open MPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           community, especially those supporting some of the BTLs.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; A non-exhaustive list of BTLs that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           qualify here is: mx, portals4, scif, udapl, ugni, usnic.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; WHERE:  bitbucket.org/bosilca/ompi-btl (updated today with respect to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; trunk r31952)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; TIMEOUT: After all the BTLs have been amended to match the new
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; location and usage. We will discuss
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           the last bits regarding this RFC at the Open MPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; developers meeting in Chicago, June 24-26. The
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           RFC will become final only after the meeting.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14974.php">http://www.open-mpi.org/community/lists/devel/2014/06/14974.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15100.php">http://www.open-mpi.org/community/lists/devel/2014/07/15100.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15104.php">http://www.open-mpi.org/community/lists/devel/2014/07/15104.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15111.php">http://www.open-mpi.org/community/lists/devel/2014/07/15111.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15142.php">http://www.open-mpi.org/community/lists/devel/2014/07/15142.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15225.php">http://www.open-mpi.org/community/lists/devel/2014/07/15225.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15226.php">http://www.open-mpi.org/community/lists/devel/2014/07/15226.php</a>
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
<li><strong>Next message:</strong> <a href="15228.php">George Bosilca: "Re: [OMPI devel] RFC: Move the Open MPI communication	infrastructure in OPAL"</a>
<li><strong>Previous message:</strong> <a href="15226.php">Ralph Castain: "Re: [OMPI devel] RFC: Move the Open MPI communication infrastructure in OPAL"</a>
<li><strong>In reply to:</strong> <a href="15226.php">Ralph Castain: "Re: [OMPI devel] RFC: Move the Open MPI communication infrastructure in OPAL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15228.php">George Bosilca: "Re: [OMPI devel] RFC: Move the Open MPI communication	infrastructure in OPAL"</a>
<li><strong>Reply:</strong> <a href="15228.php">George Bosilca: "Re: [OMPI devel] RFC: Move the Open MPI communication	infrastructure in OPAL"</a>
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
