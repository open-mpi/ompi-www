<?
$subject_val = "Re: [OMPI devel] Build failure on FreeBSD 7";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 11 19:40:26 2008" -->
<!-- isoreceived="20080411234026" -->
<!-- sent="Fri, 11 Apr 2008 23:39:06 +0000" -->
<!-- isosent="20080411233906" -->
<!-- name="Karol Mroz" -->
<!-- email="mroz.karol_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build failure on FreeBSD 7" -->
<!-- id="1093674308-1207957214-cardhu_decombobulator_blackberry.rim.net-1191971337-_at_bxe024.bisx.prod.on.blackberry" -->
<!-- inreplyto="91D22679-CFC4-4C0D-ADF6-E9053BDAC158_at_cisco.com" -->
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
<strong>From:</strong> Karol Mroz (<em>mroz.karol_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-11 19:39:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3705.php">George Bosilca: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>Previous message:</strong> <a href="3703.php">Jeff Squyres: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>In reply to:</strong> <a href="3703.php">Jeff Squyres: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3705.php">George Bosilca: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>Reply:</strong> <a href="3705.php">George Bosilca: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, Jeff...
<br>
<p>This test was performed locally, yes. I'm short on machines at the moment to perform any proper distributed tests.
<br>
<p><pre>
--
Karol
-----Original Message-----
From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
Date: Fri, 11 Apr 2008 16:36:33 
To:Open MPI Developers &lt;devel_at_[hidden]&gt;
Subject: Re: [OMPI devel] Build failure on FreeBSD 7
This may depend on how you ran the app on FreeBSD -- did you run on  
the localhost only?
We have/had a problem when running locally with regards to kevent --  
I'm not 100% sure if we've fixed it yet.  Let me check...
On Apr 5, 2008, at 1:53 AM, Karol Mroz wrote:
&gt; After digging a little deeper, it turns out that the kevent() call in
&gt; opal/event/kquene.c:
&gt; 	if (kevent(kq,
&gt;            kqueueop-&gt;changes, 1, kqueueop-&gt;events, NEVENT, NULL) !=  
&gt; 1 ||
&gt; 	   (int)kqueueop-&gt;events[0].ident != master ||
&gt; 	   kqueueop-&gt;events[0].flags != EV_ERROR) {
&gt;
&gt; seems to hang in freebsd 7. Changing the NULL parameter to, lets say
&gt; 1000, causes the function to return and print out the error message:
&gt;
&gt; 	event_warn(&quot;%s: detected broken kqueue (failed delete); not 		 	using
&gt; error %d (%s)&quot;, __func__, errno, strerror(errno));
&gt;
&gt; The simple non-blocking send/recv app used to test this then runs to
&gt; completion. Compiling OpenMPI on linux and running this same app
&gt; produces no errors.
&gt;
&gt; Any ideas?
&gt;
&gt; Thanks.
&gt; -- 
&gt; Karol
&gt;
&gt;
&gt;
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
-- 
Jeff Squyres
Cisco Systems
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3705.php">George Bosilca: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>Previous message:</strong> <a href="3703.php">Jeff Squyres: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>In reply to:</strong> <a href="3703.php">Jeff Squyres: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3705.php">George Bosilca: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>Reply:</strong> <a href="3705.php">George Bosilca: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
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
