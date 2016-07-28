<?
$subject_val = "Re: [OMPI devel] Build failure on FreeBSD 7";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 29 22:14:32 2008" -->
<!-- isoreceived="20080430021432" -->
<!-- sent="Tue, 29 Apr 2008 19:14:22 -0700" -->
<!-- isosent="20080430021422" -->
<!-- name="Brad Penoff" -->
<!-- email="penoff_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build failure on FreeBSD 7" -->
<!-- id="b89c3c270804291914k551a1b38k715a4b48c21e09de_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="b89c3c270804291645r352f7705nbc9559f8bdd2d1a6_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Build failure on FreeBSD 7<br>
<strong>From:</strong> Brad Penoff (<em>penoff_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-29 22:14:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3783.php">Mukesh K Srivastava: "[OMPI devel] Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message."</a>
<li><strong>Previous message:</strong> <a href="3781.php">Brad Penoff: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>In reply to:</strong> <a href="3781.php">Brad Penoff: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/05/3788.php">Jeff Squyres: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/05/3788.php">Jeff Squyres: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hey again,
<br>
<p>One quick follow-up, as things are still misbehaving...
<br>
<p>While removing --enable-picky in the ompi_configure_arguments got MTT
<br>
to compile the nightly tarball, no MPI program succeeds (both in MTT
<br>
and outside) for any BTL included in the nightly tarball when ran on
<br>
FreeBSD 7.
<br>
<p>I did a quick investigation and it appears as if I'm arriving at the
<br>
same thing that Karol did in the Apr 5th email in this thread...
<br>
<p>Things hang on the call to kevent on line 177 of opal/event/kqueue.c .
<br>
<p>Jeff had replied asking if Karol had only ran locally, citing past
<br>
problems he'd seen with kevent running locally.  I tried also running
<br>
on a remote machine, and it hung in the same way.  George mentioned he
<br>
had done a fix for an OS X issue recently.... just curious but did you
<br>
guys (or anyone else) ever get a chance to cycle back to this?
<br>
<p>Thanks!
<br>
brad
<br>
<p><p>On Tue, Apr 29, 2008 at 4:45 PM, Brad Penoff &lt;penoff_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; hey all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I was just configuring MTT to run some multihost tests on FreeBSD 7
</span><br>
<span class="quotelev1">&gt;  and I came across this same error you guys were, using the
</span><br>
<span class="quotelev1">&gt;  openmpi-1.3a1r18325.tar.gz trunk nightly tarball :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  kqueue.c:165: error: implicit declaration of function 'openpty'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  However, this error seems to only come up if I use --enable-picky to
</span><br>
<span class="quotelev1">&gt;  configure.  Getting rid of --enable-picky results in a successful
</span><br>
<span class="quotelev1">&gt;  compilation.  Any idea why that is?  Should this be fixed in the long
</span><br>
<span class="quotelev1">&gt;  term?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  For now, I'm just adjusting my MTT runs to not have --enable-picky in
</span><br>
<span class="quotelev1">&gt;  the ompi_configure_arguments...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  brad
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  2008/4/11 George Bosilca &lt;bosilca_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; That's good that you guys revive this thread, I almost forget about it.
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;   The code you're referring, is not part of the libevent. It was one of my
</span><br>
<span class="quotelev2">&gt;  &gt; &quot;fixes&quot; around for problem on OS X (where kevent is not able to work nicely
</span><br>
<span class="quotelev2">&gt;  &gt; with pty). It works on MAC as the code trigger an error so there is no need
</span><br>
<span class="quotelev2">&gt;  &gt; for the timeout ... I'll make the corrections over the weekend.
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;   Thanks,
</span><br>
<span class="quotelev2">&gt;  &gt;     george.
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;  On Apr 11, 2008, at 7:39 PM, Karol Mroz wrote:
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; Hi, Jeff...
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; This test was performed locally, yes. I'm short on machines at the moment
</span><br>
<span class="quotelev2">&gt;  &gt; to perform any proper distributed tests.
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; --
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; Karol
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; Date: Fri, 11 Apr 2008 16:36:33
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; To:Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; Subject: Re: [OMPI devel] Build failure on FreeBSD 7
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; This may depend on how you ran the app on FreeBSD -- did you run on
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; the localhost only?
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; We have/had a problem when running locally with regards to kevent --
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; I'm not 100% sure if we've fixed it yet.  Let me check...
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; On Apr 5, 2008, at 1:53 AM, Karol Mroz wrote:
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; After digging a little deeper, it turns out that the kevent() call in
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; opal/event/kquene.c:
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;        if (kevent(kq,
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;          kqueueop-&gt;changes, 1, kqueueop-&gt;events, NEVENT, NULL) !=
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; 1 ||
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;           (int)kqueueop-&gt;events[0].ident != master ||
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;           kqueueop-&gt;events[0].flags != EV_ERROR) {
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; seems to hang in freebsd 7. Changing the NULL parameter to, lets say
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; 1000, causes the function to return and print out the error message:
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;        event_warn(&quot;%s: detected broken kqueue (failed delete); not
</span><br>
<span class="quotelev2">&gt;  &gt; using
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; error %d (%s)&quot;, __func__, errno, strerror(errno));
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; The simple non-blocking send/recv app used to test this then runs to
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; completion. Compiling OpenMPI on linux and running this same app
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; produces no errors.
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; Any ideas?
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; Thanks.
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; --
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; Karol
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; --
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;  &gt;  devel mailing list
</span><br>
<span class="quotelev2">&gt;  &gt;  devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;  &gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3783.php">Mukesh K Srivastava: "[OMPI devel] Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message."</a>
<li><strong>Previous message:</strong> <a href="3781.php">Brad Penoff: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>In reply to:</strong> <a href="3781.php">Brad Penoff: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/05/3788.php">Jeff Squyres: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/05/3788.php">Jeff Squyres: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
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
