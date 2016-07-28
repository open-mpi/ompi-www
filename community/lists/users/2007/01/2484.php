<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan 17 13:12:03 2007" -->
<!-- isoreceived="20070117181203" -->
<!-- sent="Wed, 17 Jan 2007 11:11:47 -0700" -->
<!-- isosent="20070117181147" -->
<!-- name="Brian W. Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.2b3 man pages" -->
<!-- id="93253058-9248-4CBB-A538-E4B0593D123E_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="87E30915-46C3-4BEE-8F3B-057FA75947DA_at_nrlssc.navy.mil" -->
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
<strong>From:</strong> Brian W. Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-17 13:11:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2485.php">Tim Campbell: "[OMPI users] mpi_initialized interface"</a>
<li><strong>Previous message:</strong> <a href="2483.php">Tim Campbell: "[OMPI users] 1.2b3 man pages"</a>
<li><strong>In reply to:</strong> <a href="2483.php">Tim Campbell: "[OMPI users] 1.2b3 man pages"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 17, 2007, at 10:56 AM, Tim Campbell wrote:
<br>
<p><span class="quotelev1">&gt; In the 1.2b3 build I notice that the opal* page links are not longer
</span><br>
<span class="quotelev1">&gt; included.  Is this by design?  Also, and more importantly, the actual
</span><br>
<span class="quotelev1">&gt; opalcc.1 man page which the links point to is not copied into the
</span><br>
<span class="quotelev1">&gt; man1 directory.  I trace this to the addition (in 1.2b3) of
</span><br>
<span class="quotelev1">&gt; WANT_INSTALL_HEADERS_TRUE to the man_MANS definition in opal/tools/
</span><br>
<span class="quotelev1">&gt; wrappers/Makefile.in.  I checked config.log and it shows that
</span><br>
<span class="quotelev1">&gt; WANT_INSTALL_HEADERS_TRUE = '#', which results in man_MANS not being
</span><br>
<span class="quotelev1">&gt; defined.  Is this a bug or should I be specifying something new (as
</span><br>
<span class="quotelev1">&gt; compared to 1.2b2) when running configure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>The fact that the opal* and orte* wrapper compiler man pages are not  
<br>
installed was by design.  However, it looks like a mistake was made  
<br>
in the v1.2 tarballs with regards to the symlinks.  I'll make sure  
<br>
that gets sorted out before the v1.2 release.
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI Team, CCS-1
   Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2485.php">Tim Campbell: "[OMPI users] mpi_initialized interface"</a>
<li><strong>Previous message:</strong> <a href="2483.php">Tim Campbell: "[OMPI users] 1.2b3 man pages"</a>
<li><strong>In reply to:</strong> <a href="2483.php">Tim Campbell: "[OMPI users] 1.2b3 man pages"</a>
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
