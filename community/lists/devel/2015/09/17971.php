<?
$subject_val = "Re: [OMPI devel] 1.10.0 issue";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 10:45:24 2015" -->
<!-- isoreceived="20150904144524" -->
<!-- sent="Fri, 4 Sep 2015 14:45:02 +0000" -->
<!-- isosent="20150904144502" -->
<!-- name="Friedley, Andrew" -->
<!-- email="andrew.friedley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0 issue" -->
<!-- id="0429C22EBDB44040B478F8F77EF14518DD2DC7_at_ORSMSX114.amr.corp.intel.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="22097F3E-2CF2-49D9-8FC2-7E6D8533D2E0_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.10.0 issue<br>
<strong>From:</strong> Friedley, Andrew (<em>andrew.friedley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-04 10:45:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17972.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Previous message:</strong> <a href="17970.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>In reply to:</strong> <a href="17956.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17972.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Reply:</strong> <a href="17972.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The PSM2 MTL code I submitted to master, 1.10, and 2.x will auto-build if the library is detected in the system; I don't think that's been changed since.  Feel free to disable the auto-build until we can get a PSM2 solution, but we'd much prefer not to outright remove the PSM2 MTL.
<br>

<br>
Andrew
<br>

<br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph
</span><br>
<span class="quotelev1">&gt; Castain
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, September 3, 2015 4:44 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] 1.10.0 issue
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, it actually is rather easy to do. I can check, but I think that should happen
</span><br>
<span class="quotelev1">&gt; now (unless psm2 was set to auto-build if the lib was detected). Regardless,
</span><br>
<span class="quotelev1">&gt; we can always have RH et al simply build with &#226;&#128;&#148;enable-mca-no-build=mtl-
</span><br>
<span class="quotelev1">&gt; psm2 and that will solve the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please keep us posted - and thanks!
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Sep 3, 2015, at 3:44 PM, Friedley, Andrew &lt;andrew.friedley_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Ralph &amp; crew,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm representing the Intel PSM team to Open MPI.  They're aware of the
</span><br>
<span class="quotelev1">&gt; problem and have seen the comments on both this thread and in OFI, and
</span><br>
<span class="quotelev1">&gt; are working on solving the issue within PSM2.  Current estimate is that it will
</span><br>
<span class="quotelev1">&gt; take 3-4 weeks.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If it comes to removing the PSM2 MTL from 1.10, would it instead be
</span><br>
<span class="quotelev1">&gt; possible to disable it from being configured/built by default, unless
</span><br>
<span class="quotelev1">&gt; specifically requested using --with-psm2?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Andrew
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Castain
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sent: Wednesday, September 2, 2015 6:22 PM
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subject: [OMPI devel] 1.10.0 issue
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi folks
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I regret to say that 1.10.0 is hitting an issue with at least one upstream
</span><br>
<span class="quotelev1">&gt; distro.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Apparently, there is a symbol conflict between the PSM and PSM2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; libraries that precludes building both of those MTLs at the same
</span><br>
<span class="quotelev3">&gt; &gt;&gt; time. This is leading the distro to push for release of two OMPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1.10.0 builds - one with PSM and the other with PSM2.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; IMO, this is a very undesirable situation. I agree with the distro
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that delaying release for some significant time as this would impact
</span><br>
<span class="quotelev1">&gt; everyone else&#226;&#128;&#153;s users.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Therefore, assuming that the PSM team is unable to quickly resolve
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the problem in their libraries, my inclination is to release an
</span><br>
<span class="quotelev3">&gt; &gt;&gt; immediate 1.10.1 with the PSM2 MTL removed.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I&#226;&#128;&#153;m soliciting input - any opinions?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post: <a href="http://www.open-">http://www.open-</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpi.org/community/lists/devel/2015/09/17919.php
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17953.php">http://www.open-mpi.org/community/lists/devel/2015/09/17953.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-">http://www.open-</a>
</span><br>
<span class="quotelev1">&gt; mpi.org/community/lists/devel/2015/09/17956.php
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17972.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Previous message:</strong> <a href="17970.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>In reply to:</strong> <a href="17956.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17972.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Reply:</strong> <a href="17972.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
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
