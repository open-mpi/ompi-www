<?
$subject_val = "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 27 14:28:37 2014" -->
<!-- isoreceived="20140527182837" -->
<!-- sent="Tue, 27 May 2014 13:28:50 -0500" -->
<!-- isosent="20140527182850" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework" -->
<!-- id="5384D962.7020309_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E2C12C79-F99B-4FCE-8F07-66552DAE531B_at_open-mpi.org" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-27 14:28:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14857.php">Ralph Castain: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>Previous message:</strong> <a href="14855.php">Ralph Castain: "Re: [OMPI devel] RFC: remove PMI component in OMPI/RTE framework"</a>
<li><strong>In reply to:</strong> <a href="14854.php">Ralph Castain: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14857.php">Ralph Castain: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>Reply:</strong> <a href="14857.php">Ralph Castain: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To through in my $0.02, I would see a benefit in adding the component to
<br>
the trunk. As I mentioned in the last teleconf, we are currently working
<br>
on adding support for the HPX runtime environment to Open MPI, and for
<br>
various reasons (that I can explain if somebody is interested), we think
<br>
at the moment that using the RTE abstraction layer could be easier for
<br>
achieving what we want to do. That is not at all a judgment on ORTE, but
<br>
a combination of what HPX offers and what we want to achieve within that
<br>
project.
<br>
<p>I do not foresee at this point that our component would be production
<br>
quality or part of an upcoming OMPI release, having however another
<br>
component in the rte framework  could be useful from our point of view.
<br>
(And yes, the person that asked the pmi/rte question on the mailing list
<br>
was my student who tried to make the pmi component work, and was
<br>
confused about the fact that other emails said that the pmi stuff is
<br>
working, while he couldn't even get it to compile :)
<br>
<p>Edgar
<br>
<p>On 5/27/2014 12:23 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I have mixed thoughts on this request. We have a policy of only
</span><br>
<span class="quotelev1">&gt; including things in the code base that are of general utility - i.e.,
</span><br>
<span class="quotelev1">&gt; that should be generally distributed across the community. This
</span><br>
<span class="quotelev1">&gt; component is only applicable to ORNL, and it would therefore seem
</span><br>
<span class="quotelev1">&gt; more sensible to have it continue to be maintained there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm unaware of anyone outside of ORNL that regularly tests for
</span><br>
<span class="quotelev1">&gt; ompi-rte abstraction violations, and I suspect that your internal
</span><br>
<span class="quotelev1">&gt; tests are the right place for catching them as nobody else really
</span><br>
<span class="quotelev1">&gt; seems to care. It isn't clear to me how adding this component
</span><br>
<span class="quotelev1">&gt; directly to the general code base impacts that operation. The
</span><br>
<span class="quotelev1">&gt; original PMI component in the ompi/rte framework wasn't intended to
</span><br>
<span class="quotelev1">&gt; provide an alternative method for building OMPI - it was solely
</span><br>
<span class="quotelev1">&gt; created to support the development of that framework and had no
</span><br>
<span class="quotelev1">&gt; intended utility beyond that time (hence the RFC to remove it to
</span><br>
<span class="quotelev1">&gt; avoid user confusion as we just saw on the user mailing list).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 27, 2014, at 9:25 AM, Thomas Naughton &lt;naughtont_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHAT:  add new component to ompi/rte framework
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHY:   because it will simplify our maintenance &amp; provide an alt.
</span><br>
<span class="quotelev2">&gt;&gt; reference
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHEN:  no rush, soon-ish? (June 12?)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is a component we currently maintain outside of the ompi tree
</span><br>
<span class="quotelev2">&gt;&gt; to support using OMPI with an alternate runtime system.  This will
</span><br>
<span class="quotelev2">&gt;&gt; also provide an alternate component to ORTE, which was motivation
</span><br>
<span class="quotelev2">&gt;&gt; for PMI component in related RFC.   We build/test nightly and it
</span><br>
<span class="quotelev2">&gt;&gt; occasionally catches ompi-rte abstraction violations, etc.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thomas
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _________________________________________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
Thomas Naughton                                      naughtont_at_[hidden]
<br>
<span class="quotelev2">&gt;&gt; Research Associate                                   (865)
</span><br>
<span class="quotelev2">&gt;&gt; 576-4184
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________ devel mailing list 
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] Subscription:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> Link to this
</span><br>
<span class="quotelev2">&gt;&gt; post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14852.php">http://www.open-mpi.org/community/lists/devel/2014/05/14852.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________ devel mailing list 
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] Subscription:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14854.php">http://www.open-mpi.org/community/lists/devel/2014/05/14854.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14856/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14857.php">Ralph Castain: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>Previous message:</strong> <a href="14855.php">Ralph Castain: "Re: [OMPI devel] RFC: remove PMI component in OMPI/RTE framework"</a>
<li><strong>In reply to:</strong> <a href="14854.php">Ralph Castain: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14857.php">Ralph Castain: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>Reply:</strong> <a href="14857.php">Ralph Castain: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
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
