<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 11 17:49:50 2007" -->
<!-- isoreceived="20071011214950" -->
<!-- sent="Thu, 11 Oct 2007 17:49:33 -0400" -->
<!-- isosent="20071011214933" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] DDT for v1.2 branch" -->
<!-- id="262AFDD2-3C30-40C9-A6FF-62A06E970913_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="66D7CFFA-B9F0-4F82-AEB4-D9200FB0644F_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-11 17:49:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2434.php">George Bosilca: "Re: [OMPI devel] small configure cache variable bug"</a>
<li><strong>Previous message:</strong> <a href="2432.php">Ralf Wildenhues: "Re: [OMPI devel] small configure cache variable bug"</a>
<li><strong>In reply to:</strong> <a href="2426.php">Jeff Squyres: "Re: [OMPI devel] DDT for v1.2 branch"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 11, 2007, at 5:05 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; George will have to answer this -- George?  (he's on pseudo-vacation
</span><br>
<span class="quotelev1">&gt; for the next 10 days)
</span><br>
<p>No, no, no. It's not pseudo at all :) It's as real as possible, when  
<br>
one still have access to email ... Anyway, I'm working out a way to  
<br>
enjoy every moment out of it !!!
<br>
<p><span class="quotelev3">&gt;&gt;&gt; I do not think that this has been tested yet, but are there any  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; knee-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jerk reactions against doing this?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can this be done in a tmp branch and tested out before commiting to
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; 1.2 branch?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't see any technical reason why not.  It could also be done on a
</span><br>
<span class="quotelev1">&gt; 1.2 workspace and tested (just not committed) if the changes are as
</span><br>
<span class="quotelev1">&gt; simple as &quot;cp trunk_workspace/ompi/datatype/* v1.2_workspace/ompi/
</span><br>
<span class="quotelev1">&gt; datatype&quot;.
</span><br>
<p>Meanwhile, I came out with a patch. I include only the fix for the  
<br>
bug on the mailing list, the fix for the MPI_Get_content on Solaris  
<br>
(related to the alignment problems) and some other small typos. The  
<br>
patch is attached to this email and soon will go in the bug report  
<br>
(ticket 1149) and a new CMR (ticket 1165). I slightly test it, on all  
<br>
datatype and point-to-point tests on my laptop (MAC OS X) and my  
<br>
cluster (Debian AMD 64) and everything runs fine.
<br>
<p>Sooner it get included in the 1.2.5 release candidate, sooner it will  
<br>
get intensively tested.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>

<br><p>
<p><p><p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2433/ddt-1.2.patch">ddt-1.2.patch</a>
</ul>
<!-- attachment="ddt-1.2.patch" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2433/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2434.php">George Bosilca: "Re: [OMPI devel] small configure cache variable bug"</a>
<li><strong>Previous message:</strong> <a href="2432.php">Ralf Wildenhues: "Re: [OMPI devel] small configure cache variable bug"</a>
<li><strong>In reply to:</strong> <a href="2426.php">Jeff Squyres: "Re: [OMPI devel] DDT for v1.2 branch"</a>
<!-- nextthread="start" -->
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
