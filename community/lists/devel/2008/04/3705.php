<?
$subject_val = "Re: [OMPI devel] Build failure on FreeBSD 7";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 11 19:49:25 2008" -->
<!-- isoreceived="20080411234925" -->
<!-- sent="Fri, 11 Apr 2008 19:49:16 -0400" -->
<!-- isosent="20080411234916" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build failure on FreeBSD 7" -->
<!-- id="E3080BDD-4453-4A95-8270-31E958251293_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1093674308-1207957214-cardhu_decombobulator_blackberry.rim.net-1191971337-_at_bxe024.bisx.prod.on.blackberry" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-11 19:49:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3706.php">Jeff Squyres: "[OMPI devel] Pathscale compilers"</a>
<li><strong>Previous message:</strong> <a href="3704.php">Karol Mroz: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>In reply to:</strong> <a href="3704.php">Karol Mroz: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3780.php">Brad Penoff: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>Reply:</strong> <a href="3780.php">Brad Penoff: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>Reply:</strong> <a href="3781.php">Brad Penoff: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's good that you guys revive this thread, I almost forget about it.
<br>
<p>&nbsp;&nbsp;The code you're referring, is not part of the libevent. It was one  
<br>
of my &quot;fixes&quot; around for problem on OS X (where kevent is not able to  
<br>
work nicely with pty). It works on MAC as the code trigger an error so  
<br>
there is no need for the timeout ... I'll make the corrections over  
<br>
the weekend.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Apr 11, 2008, at 7:39 PM, Karol Mroz wrote:
<br>
<span class="quotelev1">&gt; Hi, Jeff...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This test was performed locally, yes. I'm short on machines at the  
</span><br>
<span class="quotelev1">&gt; moment to perform any proper distributed tests.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Karol
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Date: Fri, 11 Apr 2008 16:36:33
</span><br>
<span class="quotelev1">&gt; To:Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] Build failure on FreeBSD 7
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may depend on how you ran the app on FreeBSD -- did you run on
</span><br>
<span class="quotelev1">&gt; the localhost only?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have/had a problem when running locally with regards to kevent --
</span><br>
<span class="quotelev1">&gt; I'm not 100% sure if we've fixed it yet.  Let me check...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 5, 2008, at 1:53 AM, Karol Mroz wrote:
</span><br>
<span class="quotelev2">&gt;&gt; After digging a little deeper, it turns out that the kevent() call in
</span><br>
<span class="quotelev2">&gt;&gt; opal/event/kquene.c:
</span><br>
<span class="quotelev2">&gt;&gt; 	if (kevent(kq,
</span><br>
<span class="quotelev2">&gt;&gt;           kqueueop-&gt;changes, 1, kqueueop-&gt;events, NEVENT, NULL) !=
</span><br>
<span class="quotelev2">&gt;&gt; 1 ||
</span><br>
<span class="quotelev2">&gt;&gt; 	   (int)kqueueop-&gt;events[0].ident != master ||
</span><br>
<span class="quotelev2">&gt;&gt; 	   kqueueop-&gt;events[0].flags != EV_ERROR) {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; seems to hang in freebsd 7. Changing the NULL parameter to, lets say
</span><br>
<span class="quotelev2">&gt;&gt; 1000, causes the function to return and print out the error message:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 	event_warn(&quot;%s: detected broken kqueue (failed delete); not 		 	 
</span><br>
<span class="quotelev2">&gt;&gt; using
</span><br>
<span class="quotelev2">&gt;&gt; error %d (%s)&quot;, __func__, errno, strerror(errno));
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The simple non-blocking send/recv app used to test this then runs to
</span><br>
<span class="quotelev2">&gt;&gt; completion. Compiling OpenMPI on linux and running this same app
</span><br>
<span class="quotelev2">&gt;&gt; produces no errors.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any ideas?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Karol
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3705/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3706.php">Jeff Squyres: "[OMPI devel] Pathscale compilers"</a>
<li><strong>Previous message:</strong> <a href="3704.php">Karol Mroz: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>In reply to:</strong> <a href="3704.php">Karol Mroz: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3780.php">Brad Penoff: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>Reply:</strong> <a href="3780.php">Brad Penoff: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>Reply:</strong> <a href="3781.php">Brad Penoff: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
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
