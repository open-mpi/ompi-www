<?
$subject_val = "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 27 14:45:41 2014" -->
<!-- isoreceived="20140527184541" -->
<!-- sent="Tue, 27 May 2014 11:45:37 -0700" -->
<!-- isosent="20140527184537" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework" -->
<!-- id="0068B3D9-816F-48F4-9E01-98E232228629_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5384D962.7020309_at_cs.uh.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-27 14:45:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14858.php">Edgar Gabriel: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>Previous message:</strong> <a href="14856.php">Edgar Gabriel: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>In reply to:</strong> <a href="14856.php">Edgar Gabriel: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14858.php">Edgar Gabriel: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>Reply:</strong> <a href="14858.php">Edgar Gabriel: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think so long as we leave these components out of any release, there is a limited potential for problems (probably most importantly, we sidestep all the issues about syncing releases!).
<br>
<p>However, that said, I'm not sure what it gains anyone to include a component that *isn't* going in a release. Nobody outside your organizations is going to build against it - so what did it accomplish to push the code into the repo?
<br>
<p>Mind you, I'm not saying I'm staunchly opposed - just trying to understand how it benefits anyone.
<br>
<p><p>On May 27, 2014, at 11:28 AM, Edgar Gabriel &lt;gabriel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; To through in my $0.02, I would see a benefit in adding the component to
</span><br>
<span class="quotelev1">&gt; the trunk. As I mentioned in the last teleconf, we are currently working
</span><br>
<span class="quotelev1">&gt; on adding support for the HPX runtime environment to Open MPI, and for
</span><br>
<span class="quotelev1">&gt; various reasons (that I can explain if somebody is interested), we think
</span><br>
<span class="quotelev1">&gt; at the moment that using the RTE abstraction layer could be easier for
</span><br>
<span class="quotelev1">&gt; achieving what we want to do. That is not at all a judgment on ORTE, but
</span><br>
<span class="quotelev1">&gt; a combination of what HPX offers and what we want to achieve within that
</span><br>
<span class="quotelev1">&gt; project.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I do not foresee at this point that our component would be production
</span><br>
<span class="quotelev1">&gt; quality or part of an upcoming OMPI release, having however another
</span><br>
<span class="quotelev1">&gt; component in the rte framework  could be useful from our point of view.
</span><br>
<span class="quotelev1">&gt; (And yes, the person that asked the pmi/rte question on the mailing list
</span><br>
<span class="quotelev1">&gt; was my student who tried to make the pmi component work, and was
</span><br>
<span class="quotelev1">&gt; confused about the fact that other emails said that the pmi stuff is
</span><br>
<span class="quotelev1">&gt; working, while he couldn't even get it to compile :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 5/27/2014 12:23 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I have mixed thoughts on this request. We have a policy of only
</span><br>
<span class="quotelev2">&gt;&gt; including things in the code base that are of general utility - i.e.,
</span><br>
<span class="quotelev2">&gt;&gt; that should be generally distributed across the community. This
</span><br>
<span class="quotelev2">&gt;&gt; component is only applicable to ORNL, and it would therefore seem
</span><br>
<span class="quotelev2">&gt;&gt; more sensible to have it continue to be maintained there.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm unaware of anyone outside of ORNL that regularly tests for
</span><br>
<span class="quotelev2">&gt;&gt; ompi-rte abstraction violations, and I suspect that your internal
</span><br>
<span class="quotelev2">&gt;&gt; tests are the right place for catching them as nobody else really
</span><br>
<span class="quotelev2">&gt;&gt; seems to care. It isn't clear to me how adding this component
</span><br>
<span class="quotelev2">&gt;&gt; directly to the general code base impacts that operation. The
</span><br>
<span class="quotelev2">&gt;&gt; original PMI component in the ompi/rte framework wasn't intended to
</span><br>
<span class="quotelev2">&gt;&gt; provide an alternative method for building OMPI - it was solely
</span><br>
<span class="quotelev2">&gt;&gt; created to support the development of that framework and had no
</span><br>
<span class="quotelev2">&gt;&gt; intended utility beyond that time (hence the RFC to remove it to
</span><br>
<span class="quotelev2">&gt;&gt; avoid user confusion as we just saw on the user mailing list).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 27, 2014, at 9:25 AM, Thomas Naughton &lt;naughtont_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHAT:  add new component to ompi/rte framework
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHY:   because it will simplify our maintenance &amp; provide an alt.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reference
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHEN:  no rush, soon-ish? (June 12?)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is a component we currently maintain outside of the ompi tree
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to support using OMPI with an alternate runtime system.  This will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; also provide an alternate component to ORTE, which was motivation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for PMI component in related RFC.   We build/test nightly and it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; occasionally catches ompi-rte abstraction violations, etc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thomas
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _________________________________________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; Thomas Naughton                                      naughtont_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Research Associate                                   (865)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 576-4184
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________ devel mailing list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden] Subscription:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> Link to this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14852.php">http://www.open-mpi.org/community/lists/devel/2014/05/14852.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________ devel mailing list 
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] Subscription:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14854.php">http://www.open-mpi.org/community/lists/devel/2014/05/14854.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Edgar Gabriel
</span><br>
<span class="quotelev1">&gt; Associate Professor
</span><br>
<span class="quotelev1">&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev1">&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev1">&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev1">&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14856.php">http://www.open-mpi.org/community/lists/devel/2014/05/14856.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14858.php">Edgar Gabriel: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>Previous message:</strong> <a href="14856.php">Edgar Gabriel: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>In reply to:</strong> <a href="14856.php">Edgar Gabriel: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14858.php">Edgar Gabriel: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>Reply:</strong> <a href="14858.php">Edgar Gabriel: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
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
