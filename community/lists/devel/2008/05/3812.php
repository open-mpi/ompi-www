<?
$subject_val = "Re: [OMPI devel] Build failure on FreeBSD 7";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May  3 19:32:13 2008" -->
<!-- isoreceived="20080503233213" -->
<!-- sent="Sat, 3 May 2008 16:32:06 -0700" -->
<!-- isosent="20080503233206" -->
<!-- name="Brad Penoff" -->
<!-- email="penoff_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build failure on FreeBSD 7" -->
<!-- id="b89c3c270805031632o44a8ab3bn48969bf41a990405_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="b89c3c270805010902i4836a04emde3fe9e280df5570_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2008-05-03 19:32:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3813.php">Jeff Squyres: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>Previous message:</strong> <a href="3811.php">George Bosilca: "Re: [OMPI devel] MCA component open"</a>
<li><strong>In reply to:</strong> <a href="3792.php">Brad Penoff: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3813.php">Jeff Squyres: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>Reply:</strong> <a href="3813.php">Jeff Squyres: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The small commit that Karol originally suggested was just pushed to
<br>
ompi-trunk.  This just simply adds the appropriate header files for
<br>
FreeBSD (6.2, 6.3 and 7) to be able to compile.
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/changeset/18366">https://svn.open-mpi.org/trac/ompi/changeset/18366</a>
<br>
<p>This didn't fix the hanging on the kevent call mentioned in this
<br>
thread, however, setting the environment variable EVENT_NOKQUEUE did
<br>
find a work-around.  I'm not sure if that is the solution we want for
<br>
all FreeBSD platforms in the long term (requiring the user to set
<br>
particular environment variables for particular platforms), but for
<br>
now at least I can run the MTT tests that I need to (once it gets in a
<br>
nightly build).
<br>
<p>Feel free to contact me if you would care to work together on another
<br>
solution.  Or is it as simple as returning NULL from kq_init if
<br>
EVENT_NOKQUEUE is set or #if defined(__FreeBSD__) like the minor patch
<br>
below?
<br>
<p>Thanks,
<br>
brad
<br>
<p>--- opal/event/kqueue.c (revision 18366)
<br>
+++ opal/event/kqueue.c (working copy)
<br>
@@ -116,7 +116,11 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct kqop *kqueueop;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Disable kqueue when this environment variable is set */
<br>
-    if (getenv(&quot;EVENT_NOKQUEUE&quot;))
<br>
+    if (getenv(&quot;EVENT_NOKQUEUE&quot;)
<br>
+#if defined(__FreeBSD__)
<br>
+        || 1
<br>
+#endif
<br>
+       )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return (NULL);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (!(kqueueop = calloc(1, sizeof(struct kqop))))
<br>
<p><p>On Thu, May 1, 2008 at 9:02 AM, Brad Penoff &lt;penoff_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I believe Karol's patch in the original mail in this thread adds the
</span><br>
<span class="quotelev1">&gt;  appropriate headers for openpty to be resolved when --enable-picky is
</span><br>
<span class="quotelev1">&gt;  supplied.  Without --enable-picky, it's able to resolve it too, as the
</span><br>
<span class="quotelev1">&gt;  code is.  However, even if it compiles, the call to kevent (line 177
</span><br>
<span class="quotelev1">&gt;  of opal/event/kqueue.c) still hangs, so this is more of the mystery...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Would giving you access to a FreeBSD 7 machine be useful?  Contact me
</span><br>
<span class="quotelev1">&gt;  off the list, if so and we'll try to sort something out.  Or if you
</span><br>
<span class="quotelev1">&gt;  have any patches/suggestions you'd like to try to fix this, I could
</span><br>
<span class="quotelev1">&gt;  run them myself and let you know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks,
</span><br>
<span class="quotelev1">&gt;  brad
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On Thu, May 1, 2008 at 5:51 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;  &gt; George -- did you get to make this fix?
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;  What header file is openpty declared in on FreeBSD 7?  It should be
</span><br>
<span class="quotelev2">&gt;  &gt;  easy enough to add the right #include to that file.
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;  On Apr 29, 2008, at 7:45 PM, Brad Penoff wrote:
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; hey all,
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; I was just configuring MTT to run some multihost tests on FreeBSD 7
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; and I came across this same error you guys were, using the
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; openmpi-1.3a1r18325.tar.gz trunk nightly tarball :
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; kqueue.c:165: error: implicit declaration of function 'openpty'
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; However, this error seems to only come up if I use --enable-picky to
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; configure.  Getting rid of --enable-picky results in a successful
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; compilation.  Any idea why that is?  Should this be fixed in the long
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; term?
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; For now, I'm just adjusting my MTT runs to not have --enable-picky in
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; the ompi_configure_arguments...
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; brad
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; 2008/4/11 George Bosilca &lt;bosilca_at_[hidden]&gt;:
</span><br>
<span class="quotelev4">&gt;  &gt;  &gt;&gt; That's good that you guys revive this thread, I almost forget about
</span><br>
<span class="quotelev4">&gt;  &gt;  &gt;&gt; it.
</span><br>
<span class="quotelev4">&gt;  &gt;  &gt;&gt;
</span><br>
<span class="quotelev4">&gt;  &gt;  &gt;&gt;  The code you're referring, is not part of the libevent. It was one
</span><br>
<span class="quotelev4">&gt;  &gt;  &gt;&gt; of my
</span><br>
<span class="quotelev4">&gt;  &gt;  &gt;&gt; &quot;fixes&quot; around for problem on OS X (where kevent is not able to
</span><br>
<span class="quotelev4">&gt;  &gt;  &gt;&gt; work nicely
</span><br>
<span class="quotelev4">&gt;  &gt;  &gt;&gt; with pty). It works on MAC as the code trigger an error so there is
</span><br>
<span class="quotelev4">&gt;  &gt;  &gt;&gt; no need
</span><br>
<span class="quotelev4">&gt;  &gt;  &gt;&gt; for the timeout ... I'll make the corrections over the weekend.
</span><br>
<span class="quotelev4">&gt;  &gt;  &gt;&gt;
</span><br>
<span class="quotelev4">&gt;  &gt;  &gt;&gt;  Thanks,
</span><br>
<span class="quotelev4">&gt;  &gt;  &gt;&gt;    george.
</span><br>
<span class="quotelev4">&gt;  &gt;  &gt;&gt;
</span><br>
<span class="quotelev4">&gt;  &gt;  &gt;&gt;
</span><br>
<span class="quotelev4">&gt;  &gt;  &gt;&gt;
</span><br>
<span class="quotelev4">&gt;  &gt;  &gt;&gt; On Apr 11, 2008, at 7:39 PM, Karol Mroz wrote:
</span><br>
<span class="quotelev4">&gt;  &gt;  &gt;&gt;
</span><br>
<span class="quotelev1">&gt;  &gt;  &gt;&gt;&gt; Hi, Jeff...
</span><br>
<span class="quotelev1">&gt;  &gt;  &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;  &gt;  &gt;&gt;&gt; This test was performed locally, yes. I'm short on machines at the
</span><br>
<span class="quotelev1">&gt;  &gt;  &gt;&gt;&gt; moment
</span><br>
<span class="quotelev4">&gt;  &gt;  &gt;&gt; to perform any proper distributed tests.
</span><br>
<span class="quotelev1">&gt;  &gt;  &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;  &gt;  &gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;  &gt;  &gt;&gt;&gt; Karol
</span><br>
<span class="quotelev1">&gt;  &gt;  &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;  &gt;  &gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt;  &gt;  &gt;&gt;&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;  &gt;  &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;  &gt;  &gt;&gt;&gt; Date: Fri, 11 Apr 2008 16:36:33
</span><br>
<span class="quotelev1">&gt;  &gt;  &gt;&gt;&gt; To:Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;  &gt;  &gt;&gt;&gt; Subject: Re: [OMPI devel] Build failure on FreeBSD 7
</span><br>
<span class="quotelev1">&gt;  &gt;  &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;  &gt;  &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;  &gt;  &gt;&gt;&gt; This may depend on how you ran the app on FreeBSD -- did you run on
</span><br>
<span class="quotelev1">&gt;  &gt;  &gt;&gt;&gt; the localhost only?
</span><br>
<span class="quotelev1">&gt;  &gt;  &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;  &gt;  &gt;&gt;&gt; We have/had a problem when running locally with regards to kevent --
</span><br>
<span class="quotelev1">&gt;  &gt;  &gt;&gt;&gt; I'm not 100% sure if we've fixed it yet.  Let me check...
</span><br>
<span class="quotelev1">&gt;  &gt;  &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;  &gt;  &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;  &gt;  &gt;&gt;&gt; On Apr 5, 2008, at 1:53 AM, Karol Mroz wrote:
</span><br>
<span class="quotelev1">&gt;  &gt;  &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;  &gt;  &gt;&gt;&gt;&gt; After digging a little deeper, it turns out that the kevent()
</span><br>
<span class="quotelev2">&gt;  &gt;  &gt;&gt;&gt;&gt; call in
</span><br>
<span class="quotelev2">&gt;  &gt;  &gt;&gt;&gt;&gt; opal/event/kquene.c:
</span><br>
<span class="quotelev2">&gt;  &gt;  &gt;&gt;&gt;&gt;       if (kevent(kq,
</span><br>
<span class="quotelev2">&gt;  &gt;  &gt;&gt;&gt;&gt;         kqueueop-&gt;changes, 1, kqueueop-&gt;events, NEVENT, NULL) !=
</span><br>
<span class="quotelev2">&gt;  &gt;  &gt;&gt;&gt;&gt; 1 ||
</span><br>
<span class="quotelev2">&gt;  &gt;  &gt;&gt;&gt;&gt;          (int)kqueueop-&gt;events[0].ident != master ||
</span><br>
<span class="quotelev2">&gt;  &gt;  &gt;&gt;&gt;&gt;          kqueueop-&gt;events[0].flags != EV_ERROR) {
</span><br>
<span class="quotelev2">&gt;  &gt;  &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;  &gt;  &gt;&gt;&gt;&gt; seems to hang in freebsd 7. Changing the NULL parameter to, lets
</span><br>
<span class="quotelev2">&gt;  &gt;  &gt;&gt;&gt;&gt; say
</span><br>
<span class="quotelev2">&gt;  &gt;  &gt;&gt;&gt;&gt; 1000, causes the function to return and print out the error
</span><br>
<span class="quotelev2">&gt;  &gt;  &gt;&gt;&gt;&gt; message:
</span><br>
<span class="quotelev2">&gt;  &gt;  &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;  &gt;  &gt;&gt;&gt;&gt;       event_warn(&quot;%s: detected broken kqueue (failed delete); not
</span><br>
<span class="quotelev4">&gt;  &gt;  &gt;&gt; using
</span><br>
<span class="quotelev2">&gt;  &gt;  &gt;&gt;&gt;&gt; error %d (%s)&quot;, __func__, errno, strerror(errno));
</span><br>
<span class="quotelev2">&gt;  &gt;  &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;  &gt;  &gt;&gt;&gt;&gt; The simple non-blocking send/recv app used to test this then runs
</span><br>
<span class="quotelev2">&gt;  &gt;  &gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;  &gt;  &gt;&gt;&gt;&gt; completion. Compiling OpenMPI on linux and running this same app
</span><br>
<span class="quotelev2">&gt;  &gt;  &gt;&gt;&gt;&gt; produces no errors.
</span><br>
<span class="quotelev2">&gt;  &gt;  &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;  &gt;  &gt;&gt;&gt;&gt; Any ideas?
</span><br>
<span class="quotelev2">&gt;  &gt;  &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;  &gt;  &gt;&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;  &gt;  &gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;  &gt;  &gt;&gt;&gt;&gt; Karol
</span><br>
<span class="quotelev2">&gt;  &gt;  &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;  &gt;  &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;  &gt;  &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;  &gt;  &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;  &gt;  &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;  &gt;  &gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;  &gt;  &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;  &gt;  &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;  &gt;  &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;  &gt;  &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;  &gt;  &gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;  &gt;  &gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;  &gt;  &gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;  &gt;  &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;  &gt;  &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;  &gt;  &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;  &gt;  &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  &gt;  &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;  &gt;  &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;  &gt;  &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;  &gt;  &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;  &gt;  &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  &gt;  &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;  &gt;  &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;  &gt;  &gt;&gt;
</span><br>
<span class="quotelev4">&gt;  &gt;  &gt;&gt;
</span><br>
<span class="quotelev4">&gt;  &gt;  &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;  &gt;  &gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;  &gt;  &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;  &gt;  &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;  &gt;  &gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;  --
</span><br>
<span class="quotelev2">&gt;  &gt;  Jeff Squyres
</span><br>
<span class="quotelev2">&gt;  &gt;  Cisco Systems
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;  &gt;  devel mailing list
</span><br>
<span class="quotelev2">&gt;  &gt;  devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;  &gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3813.php">Jeff Squyres: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>Previous message:</strong> <a href="3811.php">George Bosilca: "Re: [OMPI devel] MCA component open"</a>
<li><strong>In reply to:</strong> <a href="3792.php">Brad Penoff: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3813.php">Jeff Squyres: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>Reply:</strong> <a href="3813.php">Jeff Squyres: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
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
