<?
$subject_val = "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 20 16:14:33 2015" -->
<!-- isoreceived="20150820201433" -->
<!-- sent="Thu, 20 Aug 2015 20:14:30 +0000" -->
<!-- isosent="20150820201430" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure" -->
<!-- id="39894404-22F9-4AF7-AAB8-8FAA3E005E49_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F253196-48FF-460E-BDF0-3634635E8A60_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-20 16:14:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17779.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-2340-gd5763a8"</a>
<li><strong>Previous message:</strong> <a href="17777.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-2340-gd5763a8"</a>
<li><strong>In reply to:</strong> <a href="17776.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17780.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
<li><strong>Reply:</strong> <a href="17780.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 20, 2015, at 3:56 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'll bet that OMPI determined that your Fortran compiler didn't support enough Fortran mojo to properly support MPI_SIZEOF.  So it generated an empty .f90 file.  And therefore it 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And therefore it didn't generate libmpi_mpifh_sizeof.a (gfortran &lt;v4.9 will generate an effectively &quot;empty&quot; libmpi_mpifh_sizeof.a).  Hence, a subsequent link that depended on that library failed.
</span><br>
<p>Paul: can you verify my theory?
<br>
<p>Do this in your existing build:
<br>
<p>-----
<br>
rm -f ompi/mpi/fortran/base/gen-mpi-sizeof.pl
<br>
wget \
<br>
&nbsp;&nbsp;<a href="https://raw.githubusercontent.com/open-mpi/ompi/master/ompi/mpi/fortran/base/gen-mpi-sizeof.pl">https://raw.githubusercontent.com/open-mpi/ompi/master/ompi/mpi/fortran/base/gen-mpi-sizeof.pl</a> \
<br>
&nbsp;&nbsp;-O ompi/mpi/fortran/base/gen-mpi-sizeof.pl
<br>
chmod +x ompi/mpi/fortran/base/gen-mpi-sizeof.pl
<br>
rm ompi/mpi/fortran/mpif-h/profile/psizeof_f.f90
<br>
make -j 32
<br>
-----
<br>
<p>That will download the new script from master (which is identical to the v1.10 version, but I have committed the fix to master), make it executable, remove the generated psizeof_f.f90 file, and then run the build again -- which will cause it to generate psizeof_f.f90 again and try to build again.
<br>
<p>Thanks!
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17779.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-2340-gd5763a8"</a>
<li><strong>Previous message:</strong> <a href="17777.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-2340-gd5763a8"</a>
<li><strong>In reply to:</strong> <a href="17776.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17780.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
<li><strong>Reply:</strong> <a href="17780.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
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
