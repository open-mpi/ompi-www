<?
$subject_val = "Re: [OMPI devel] Changed behaviour with PSM on master";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 11 14:20:47 2015" -->
<!-- isoreceived="20150111192047" -->
<!-- sent="Sun, 11 Jan 2015 12:20:46 -0700" -->
<!-- isosent="20150111192046" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Changed behaviour with PSM on master" -->
<!-- id="CAF1Cqj6R8SRYAOowQHXkTRynzFc283_-Z6tpz1AAd3av=GVz6A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="6777BD114B546D458A2696C0DEB863DF5F6107AE_at_ORSMSX107.amr.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Changed behaviour with PSM on master<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-11 14:20:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16778.php">Howard Pritchard: "Re: [OMPI devel] #327"</a>
<li><strong>Previous message:</strong> <a href="16776.php">Adrian Reber: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<li><strong>In reply to:</strong> <a href="16775.php">Burette, Yohann: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16776.php">Adrian Reber: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Yohann,
<br>
<p>Actually, I think that comment in the code is old.  Looks like
<br>
ompi_mtl_base_select goes for trying to open all mtl components,
<br>
which has worked fine until recently since the available commercially
<br>
supported mtls (mxm and psm) are mutually orthogonal, and the
<br>
portals4 mtl shouldn't interfere with either the mxm or psm.
<br>
<p>What probably should be done is to rely on the MCA's priority
<br>
scheme.  You can see an example of how this works in the
<br>
pmix_base_select.c and the various pmix s1/s2/cray component files,
<br>
e.g. the pmix_s2_component_query function in pmix_s2_component.c.
<br>
<p>LANL would be interested in working with you on this if you need help.
<br>
<p>We have both intel/infinipath and intel/mlnx systems, and in the case of the
<br>
former, the head/io nodes typically have mlnx hca's as well since these
<br>
hca's are typically better for interfacing to lustre.  So we'd have
<br>
non-trivial build
<br>
environments/runtime environments which would be better at testing
<br>
if something we broke something.
<br>
<p>Howard
<br>
<p><p><p>2015-01-09 17:36 GMT-07:00 Burette, Yohann &lt;yohann.burette_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For those of you who don't know me, my name is Yohann Burette, I work for
</span><br>
<span class="quotelev1">&gt; Intel and I contributed the OFI MTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; AFAIK, the PSM MTL should have the priority over the OFI MTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please excuse my ignorance but is there a way to express this priority in
</span><br>
<span class="quotelev1">&gt; the MTLs? Here is what is in ompi/mca/mtl/base/mtl_base_frame.c:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt;  * Function for selecting one component from all those that are
</span><br>
<span class="quotelev1">&gt;  * available.
</span><br>
<span class="quotelev1">&gt;  *
</span><br>
<span class="quotelev1">&gt;  * For now, we take the first component that says it can run.  Might
</span><br>
<span class="quotelev1">&gt;  * need to reexamine this at a later time.
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; int
</span><br>
<span class="quotelev1">&gt; ompi_mtl_base_select(bool enable_progress_threads,
</span><br>
<span class="quotelev1">&gt;                      bool enable_mpi_threads)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am I missing anything?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt; Yohann
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; (jsquyres)
</span><br>
<span class="quotelev1">&gt; Sent: Friday, January 09, 2015 1:27 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers List
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] Changed behaviour with PSM on master
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +1 -- someone should file a bug.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think Intel needs to decide how they want to handle this (e.g., whether
</span><br>
<span class="quotelev1">&gt; the PSM MTL or OFI MTL should be the default, and how the other can detect
</span><br>
<span class="quotelev1">&gt; if it's not the default and therefore it's safe to call psm_init... or
</span><br>
<span class="quotelev1">&gt; something like that).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 9, 2015, at 4:10 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; HI Adrian,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please open an issue.  We don't want users having to explicitly
</span><br>
<span class="quotelev2">&gt; &gt; specify the mtl to use just to get a job to run on a intel/infinipath
</span><br>
<span class="quotelev1">&gt; system.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Howard
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2015-01-09 13:04 GMT-07:00 Adrian Reber &lt;adrian_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt; &gt; Should I still open a ticket? Will these be changed or do I always
</span><br>
<span class="quotelev2">&gt; &gt; have to provide '--mca mtl psm' in the future?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Jan 09, 2015 at 12:27:59PM -0700, Howard Pritchard wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; HI Adrian, Andrew,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Sorry try again,  both the libfabric psm provider and the open mpi
</span><br>
<span class="quotelev3">&gt; &gt; &gt; psm mtl are trying to use psm_init.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; So, to avoid this problem, add
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --mca mtl psm
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; to your mpirun command line.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Sorry for the confusion.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Howard
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 2015-01-09 7:52 GMT-07:00 Friedley, Andrew &lt;andrew.friedley_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; No this is not expected behavior.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; The PSM MTL code has not changed in 2 months, when I fixed that
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; unused variable warning for you.  That suggests something above
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; the PSM MTL broke things.  I see no reason your older software
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; install should suddenly stopping working if all you are updating
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; is OMPI master -- at least with respect to PSM anyway.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; The error message is right, it's not possible to open more than
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; one context per process.  This hasn't changed.  It does indicate
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; that maybe something is causing the MTL to be opened twice in each
</span><br>
<span class="quotelev1">&gt; process?
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Andrew
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Adrian Reber
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Sent: Friday, January 9, 2015 4:13 AM
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Subject: [OMPI devel] Changed behaviour with PSM on master
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Running the mpi_test_suite on master used to work with no
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; problems. At some point in time it stopped working however and
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; now I get only error messages from PSM:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &quot;&quot;&quot;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; n050301:3.0.In PSM version 1.14, it is not possible to open more
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; than
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; one
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; context per process
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; [n050301:26526] Open MPI detected an unexpected PSM error in
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; opening an
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; endpoint: In PSM version 1.14, it is not possible to open more
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; than one context per process &quot;&quot;&quot;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; I know that I do not have the newest version of the PSM library
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; and that
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; need to update the library but as this requires many software
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; packages
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; to be
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; re-compiled we are trying to avoid it on our CentOS6 based system.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; My main question (probably for Andrew) is if this is an expected
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; behaviour
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; on master. It works on 1.8.x and it used to work on master at
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; least
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; until 2014-
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 12-08.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; This is the last MTT entry for working PSM (with my older
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; version)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; <a href="http://mtt.open-mpi.org/index.php?do_redir=2226">http://mtt.open-mpi.org/index.php?do_redir=2226</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; and since a few days it fails on master
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; <a href="http://mtt.open-mpi.org/index.php?do_redir=2225">http://mtt.open-mpi.org/index.php?do_redir=2225</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; On another system (RHEL7) with newer PSM libraries there is no
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; such
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; error.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;               Adrian
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16766.php">http://www.open-mpi.org/community/lists/devel/2015/01/16766.php</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16769.php">http://www.open-mpi.org/community/lists/devel/2015/01/16769.php</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16770.php">http://www.open-mpi.org/community/lists/devel/2015/01/16770.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16772.php">http://www.open-mpi.org/community/lists/devel/2015/01/16772.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16773.php">http://www.open-mpi.org/community/lists/devel/2015/01/16773.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16775.php">http://www.open-mpi.org/community/lists/devel/2015/01/16775.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16777/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16778.php">Howard Pritchard: "Re: [OMPI devel] #327"</a>
<li><strong>Previous message:</strong> <a href="16776.php">Adrian Reber: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<li><strong>In reply to:</strong> <a href="16775.php">Burette, Yohann: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16776.php">Adrian Reber: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
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
