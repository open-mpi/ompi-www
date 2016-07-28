<?
$subject_val = "Re: [OMPI devel] Build failure on FreeBSD 7";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 11 19:37:16 2008" -->
<!-- isoreceived="20080411233716" -->
<!-- sent="Fri, 11 Apr 2008 16:36:33 -0700" -->
<!-- isosent="20080411233633" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build failure on FreeBSD 7" -->
<!-- id="91D22679-CFC4-4C0D-ADF6-E9053BDAC158_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47F73DF9.20500_at_gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-11 19:36:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3704.php">Karol Mroz: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>Previous message:</strong> <a href="3702.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Fix typo in configure helptext"</a>
<li><strong>In reply to:</strong> <a href="3667.php">Karol Mroz: "[OMPI devel] Build failure on FreeBSD 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3704.php">Karol Mroz: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>Reply:</strong> <a href="3704.php">Karol Mroz: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This may depend on how you ran the app on FreeBSD -- did you run on  
<br>
the localhost only?
<br>
<p>We have/had a problem when running locally with regards to kevent --  
<br>
I'm not 100% sure if we've fixed it yet.  Let me check...
<br>
<p><p>On Apr 5, 2008, at 1:53 AM, Karol Mroz wrote:
<br>
<span class="quotelev1">&gt; After digging a little deeper, it turns out that the kevent() call in
</span><br>
<span class="quotelev1">&gt; opal/event/kquene.c:
</span><br>
<span class="quotelev1">&gt; 	if (kevent(kq,
</span><br>
<span class="quotelev1">&gt;            kqueueop-&gt;changes, 1, kqueueop-&gt;events, NEVENT, NULL) !=  
</span><br>
<span class="quotelev1">&gt; 1 ||
</span><br>
<span class="quotelev1">&gt; 	   (int)kqueueop-&gt;events[0].ident != master ||
</span><br>
<span class="quotelev1">&gt; 	   kqueueop-&gt;events[0].flags != EV_ERROR) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; seems to hang in freebsd 7. Changing the NULL parameter to, lets say
</span><br>
<span class="quotelev1">&gt; 1000, causes the function to return and print out the error message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	event_warn(&quot;%s: detected broken kqueue (failed delete); not 		 	using
</span><br>
<span class="quotelev1">&gt; error %d (%s)&quot;, __func__, errno, strerror(errno));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The simple non-blocking send/recv app used to test this then runs to
</span><br>
<span class="quotelev1">&gt; completion. Compiling OpenMPI on linux and running this same app
</span><br>
<span class="quotelev1">&gt; produces no errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Karol
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3704.php">Karol Mroz: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>Previous message:</strong> <a href="3702.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Fix typo in configure helptext"</a>
<li><strong>In reply to:</strong> <a href="3667.php">Karol Mroz: "[OMPI devel] Build failure on FreeBSD 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3704.php">Karol Mroz: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>Reply:</strong> <a href="3704.php">Karol Mroz: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
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
