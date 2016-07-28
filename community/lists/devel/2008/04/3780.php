<?
$subject_val = "Re: [OMPI devel] Build failure on FreeBSD 7";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 29 19:43:40 2008" -->
<!-- isoreceived="20080429234340" -->
<!-- sent="Tue, 29 Apr 2008 16:43:33 -0700" -->
<!-- isosent="20080429234333" -->
<!-- name="Brad Penoff" -->
<!-- email="penoff_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build failure on FreeBSD 7" -->
<!-- id="b89c3c270804291643p12f68bb5ic7167c7313789f33_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E3080BDD-4453-4A95-8270-31E958251293_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2008-04-29 19:43:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3781.php">Brad Penoff: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>Previous message:</strong> <a href="3779.php">Josh Hursey: "[OMPI devel] [RFC] mca_base_select()"</a>
<li><strong>In reply to:</strong> <a href="3705.php">George Bosilca: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3781.php">Brad Penoff: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hey all,
<br>
<p>I was just configuring MTT to run some multihost tests on FreeBSD 7
<br>
and I came across this same error you guys were, using the
<br>
openmpi-1.3a1r18325.tar.gz trunk nightly tarball :
<br>
<p>kqueue.c:165: error: implicit declaration of function 'openpty'
<br>
<p>However, this error seems to only come up if I use --enable-picky to
<br>
configure.  Getting rid of --enable-picky results in a successful
<br>
compilation.  Any idea why that is?  Should this be fixed in the long
<br>
term?
<br>
<p>For now, I'm just adjusting my MTT runs to not have --enable-picky in
<br>
the ompi_configure_arguments...
<br>
<p>brad
<br>
<p><p>2008/4/11 George Bosilca &lt;bosilca_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; That's good that you guys revive this thread, I almost forget about it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   The code you're referring, is not part of the libevent. It was one of my
</span><br>
<span class="quotelev1">&gt; &quot;fixes&quot; around for problem on OS X (where kevent is not able to work nicely
</span><br>
<span class="quotelev1">&gt; with pty). It works on MAC as the code trigger an error so there is no need
</span><br>
<span class="quotelev1">&gt; for the timeout ... I'll make the corrections over the weekend.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On Apr 11, 2008, at 7:39 PM, Karol Mroz wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi, Jeff...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This test was performed locally, yes. I'm short on machines at the moment
</span><br>
<span class="quotelev1">&gt; to perform any proper distributed tests.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Karol
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Date: Fri, 11 Apr 2008 16:36:33
</span><br>
<span class="quotelev2">&gt; &gt; To:Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI devel] Build failure on FreeBSD 7
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This may depend on how you ran the app on FreeBSD -- did you run on
</span><br>
<span class="quotelev2">&gt; &gt; the localhost only?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We have/had a problem when running locally with regards to kevent --
</span><br>
<span class="quotelev2">&gt; &gt; I'm not 100% sure if we've fixed it yet.  Let me check...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 5, 2008, at 1:53 AM, Karol Mroz wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; After digging a little deeper, it turns out that the kevent() call in
</span><br>
<span class="quotelev3">&gt; &gt; &gt; opal/event/kquene.c:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        if (kevent(kq,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;          kqueueop-&gt;changes, 1, kqueueop-&gt;events, NEVENT, NULL) !=
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 1 ||
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           (int)kqueueop-&gt;events[0].ident != master ||
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           kqueueop-&gt;events[0].flags != EV_ERROR) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; seems to hang in freebsd 7. Changing the NULL parameter to, lets say
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 1000, causes the function to return and print out the error message:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        event_warn(&quot;%s: detected broken kqueue (failed delete); not
</span><br>
<span class="quotelev1">&gt; using
</span><br>
<span class="quotelev3">&gt; &gt; &gt; error %d (%s)&quot;, __func__, errno, strerror(errno));
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The simple non-blocking send/recv app used to test this then runs to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; completion. Compiling OpenMPI on linux and running this same app
</span><br>
<span class="quotelev3">&gt; &gt; &gt; produces no errors.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Any ideas?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Karol
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;  devel mailing list
</span><br>
<span class="quotelev1">&gt;  devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3781.php">Brad Penoff: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>Previous message:</strong> <a href="3779.php">Josh Hursey: "[OMPI devel] [RFC] mca_base_select()"</a>
<li><strong>In reply to:</strong> <a href="3705.php">George Bosilca: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3781.php">Brad Penoff: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
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
