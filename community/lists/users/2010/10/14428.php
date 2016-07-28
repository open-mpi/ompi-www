<?
$subject_val = "Re: [OMPI users] Pros and cons of --enable-heterogeneous";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  8 14:21:15 2010" -->
<!-- isoreceived="20101008182115" -->
<!-- sent="Fri, 8 Oct 2010 14:21:10 -0400" -->
<!-- isosent="20101008182110" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pros and cons of --enable-heterogeneous" -->
<!-- id="7252EB6E-C0B2-4F3A-9BEC-9D5E7A5CEB31_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTik7m7kGCp5b0w2ZPogO1KhMiAcfvU4barLMCCiZ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Pros and cons of --enable-heterogeneous<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-08 14:21:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14429.php">Richard Walsh: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>Previous message:</strong> <a href="14427.php">Jeff Squyres: "Re: [OMPI users] Pros and cons of --enable-heterogeneous"</a>
<li><strong>In reply to:</strong> <a href="14411.php">Durga Choudhury: "Re: [OMPI users] Pros and cons of --enable-heterogeneous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14432.php">Jeff Squyres: "Re: [OMPI users] Pros and cons of --enable-heterogeneous"</a>
<li><strong>Reply:</strong> <a href="14432.php">Jeff Squyres: "Re: [OMPI users] Pros and cons of --enable-heterogeneous"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 7, 2010, at 3:53 PM, Durga Choudhury wrote:
<br>
<p><span class="quotelev1">&gt; If I compile with --enable-heterogenous flag for different
</span><br>
<span class="quotelev1">&gt; *architectures* (I have a mix of old 32 bit x86, newer x86_64 and some
</span><br>
<span class="quotelev1">&gt; Cell BE based boxes (PS3)), would I be able to form a MPD ring between
</span><br>
<span class="quotelev1">&gt; all these different machines?
</span><br>
<p>No.  Open MPI does not have MPD -- I think you're thinking of a different MPI implementation.  :-)
<br>
<p>If you can run Linux on all these machines, then hypothetically the heterogeneous flag would allow a single Open MPI job to run across all of them.  I say &quot;hypothetically&quot; because I think we have done basic testing to ensure this stuff works, but it is used so infrequently (in reality, most people don't mix and match too often) that we don't stress test it, nor do we test it in exotic environments.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14429.php">Richard Walsh: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>Previous message:</strong> <a href="14427.php">Jeff Squyres: "Re: [OMPI users] Pros and cons of --enable-heterogeneous"</a>
<li><strong>In reply to:</strong> <a href="14411.php">Durga Choudhury: "Re: [OMPI users] Pros and cons of --enable-heterogeneous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14432.php">Jeff Squyres: "Re: [OMPI users] Pros and cons of --enable-heterogeneous"</a>
<li><strong>Reply:</strong> <a href="14432.php">Jeff Squyres: "Re: [OMPI users] Pros and cons of --enable-heterogeneous"</a>
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
