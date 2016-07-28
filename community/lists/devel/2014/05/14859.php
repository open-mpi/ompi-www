<?
$subject_val = "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 27 15:46:43 2014" -->
<!-- isoreceived="20140527194643" -->
<!-- sent="Tue, 27 May 2014 12:46:39 -0700" -->
<!-- isosent="20140527194639" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework" -->
<!-- id="498EE46E-21B1-4975-956C-18FE5D1F0ED4_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5384E72D.3080502_at_cs.uh.edu" -->
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
<strong>Date:</strong> 2014-05-27 15:46:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14860.php">Edgar Gabriel: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>Previous message:</strong> <a href="14858.php">Edgar Gabriel: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>In reply to:</strong> <a href="14858.php">Edgar Gabriel: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14860.php">Edgar Gabriel: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>Reply:</strong> <a href="14860.php">Edgar Gabriel: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 27, 2014, at 12:27 PM, Edgar Gabriel &lt;gabriel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'll let ORNL talk about the STCI component itself (which might have
</span><br>
<span class="quotelev1">&gt; additional reasons), but keeping the code in trunk vs. an outside
</span><br>
<span class="quotelev1">&gt; github/mercurial repository has two advantages in my opinion: i) it
</span><br>
<span class="quotelev1">&gt; simplifies the propagation of know-how between the groups,
</span><br>
<p>Afraid I don't understand that - this is just glue, right?
<br>
<p><span class="quotelev1">&gt; and ii)
</span><br>
<span class="quotelev1">&gt; avoids having to keep a separate branch up to date. (We did the second
</span><br>
<span class="quotelev1">&gt; part with OMPIO for a couple of years, and that was really painful).
</span><br>
<p>Ah, perhaps this is the &quot;rub&quot; - are you saying that you expect us to propagate any changes in the RTE interface to your component? If so, then that violates the original agreement about this framework. It was solely to provide a point-of-interface for *external* groups to connect their RTE's into OMPI. We agreed that we would notify people of changes to that interface, and give them a chance to provide input on those changes - but under no conditions were we wiling to accept responsibility for maintaining those branch interfaces.
<br>
<p>Given that the interface is wholly contained in the ompi/rte component, I guess I struggle to understand the code conflict issue. There is no change in the OMPI code base that can possibly conflict with your component. The only things that could impact you are changes in the OMPI layer that require modification to your component, which is something you'd have to do regardless. We will not test nor update that component for you.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In addition, IANAL, but I was actually wandering about the implications
</span><br>
<span class="quotelev1">&gt; of using separate code repositories outside of ompi for sharing code,
</span><br>
<span class="quotelev1">&gt; and whether that is truly still covered by the contributors agreement
</span><br>
<span class="quotelev1">&gt; that we all signed.
</span><br>
<p>Of course not - OMPI's license only declares that anything you push into the main OMPI code repo (and hence, our official releases) is covered by that agreement. Anything you add or distribute externally is on your own. You can *choose* to license that code in accordance with the OMPI license, but you aren't *required* to do so.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyway, I don't have strong feelings either way as well, just would see
</span><br>
<span class="quotelev1">&gt; a couple of advantages (for us) if the code was in the trunk.
</span><br>
<p>I'm still trying to understand those - sorry to be a pain, but my biggest fear at this point is that the perceived advantage is based on a misunderstanding, and I'd like to head that off before it causes problems.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 5/27/2014 1:45 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I think so long as we leave these components out of any release,
</span><br>
<span class="quotelev2">&gt;&gt; there is a limited potential for problems (probably most importantly,
</span><br>
<span class="quotelev2">&gt;&gt; we sidestep all the issues about syncing releases!).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, that said, I'm not sure what it gains anyone to include a
</span><br>
<span class="quotelev2">&gt;&gt; component that *isn't* going in a release. Nobody outside your
</span><br>
<span class="quotelev2">&gt;&gt; organizations is going to build against it - so what did it
</span><br>
<span class="quotelev2">&gt;&gt; accomplish to push the code into the repo?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Mind you, I'm not saying I'm staunchly opposed - just trying to
</span><br>
<span class="quotelev2">&gt;&gt; understand how it benefits anyone.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 27, 2014, at 11:28 AM, Edgar Gabriel &lt;gabriel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To through in my $0.02, I would see a benefit in adding the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; component to the trunk. As I mentioned in the last teleconf, we are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; currently working on adding support for the HPX runtime environment
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to Open MPI, and for various reasons (that I can explain if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; somebody is interested), we think at the moment that using the RTE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; abstraction layer could be easier for achieving what we want to do.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That is not at all a judgment on ORTE, but a combination of what
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HPX offers and what we want to achieve within that project.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I do not foresee at this point that our component would be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; production quality or part of an upcoming OMPI release, having
</span><br>
<span class="quotelev3">&gt;&gt;&gt; however another component in the rte framework  could be useful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from our point of view. (And yes, the person that asked the pmi/rte
</span><br>
<span class="quotelev3">&gt;&gt;&gt; question on the mailing list was my student who tried to make the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pmi component work, and was confused about the fact that other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; emails said that the pmi stuff is working, while he couldn't even
</span><br>
<span class="quotelev3">&gt;&gt;&gt; get it to compile :)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Edgar
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 5/27/2014 12:23 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have mixed thoughts on this request. We have a policy of only 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; including things in the code base that are of general utility -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; i.e., that should be generally distributed across the community.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This component is only applicable to ORNL, and it would therefore
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; seem more sensible to have it continue to be maintained there.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm unaware of anyone outside of ORNL that regularly tests for 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi-rte abstraction violations, and I suspect that your
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; internal tests are the right place for catching them as nobody
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; else really seems to care. It isn't clear to me how adding this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; component directly to the general code base impacts that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; operation. The original PMI component in the ompi/rte framework
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wasn't intended to provide an alternative method for building
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI - it was solely created to support the development of that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; framework and had no intended utility beyond that time (hence the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; RFC to remove it to avoid user confusion as we just saw on the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; user mailing list).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On May 27, 2014, at 9:25 AM, Thomas Naughton
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;naughtont_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; WHAT:  add new component to ompi/rte framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; WHY:   because it will simplify our maintenance &amp; provide an
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; alt. reference
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; WHEN:  no rush, soon-ish? (June 12?)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This is a component we currently maintain outside of the ompi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tree to support using OMPI with an alternate runtime system.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This will also provide an alternate component to ORTE, which
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; was motivation for PMI component in related RFC.   We
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; build/test nightly and it occasionally catches ompi-rte
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; abstraction violations, etc.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thomas
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _________________________________________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; Thomas Naughton                                      naughtont_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Research Associate                                   (865) 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 576-4184
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________ devel mailing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; list devel_at_[hidden] Subscription: 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> Link to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; this post: 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14852.php">http://www.open-mpi.org/community/lists/devel/2014/05/14852.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________ devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden] Subscription: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> Link to this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; post: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14854.php">http://www.open-mpi.org/community/lists/devel/2014/05/14854.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Edgar Gabriel Associate Professor Parallel Software Technologies
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a> Department of Computer Science
</span><br>
<span class="quotelev3">&gt;&gt;&gt; University of Houston Philip G. Hoffman Hall, Room 524
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Houston, TX-77204, USA Tel: +1 (713) 743-3857                  Fax:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +1 (713) 743-3335
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
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14856.php">http://www.open-mpi.org/community/lists/devel/2014/05/14856.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________ devel mailing list 
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] Subscription:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14857.php">http://www.open-mpi.org/community/lists/devel/2014/05/14857.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14858.php">http://www.open-mpi.org/community/lists/devel/2014/05/14858.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14860.php">Edgar Gabriel: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>Previous message:</strong> <a href="14858.php">Edgar Gabriel: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>In reply to:</strong> <a href="14858.php">Edgar Gabriel: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14860.php">Edgar Gabriel: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>Reply:</strong> <a href="14860.php">Edgar Gabriel: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
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
