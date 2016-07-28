<?
$subject_val = "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 20 18:50:21 2015" -->
<!-- isoreceived="20150820225021" -->
<!-- sent="Thu, 20 Aug 2015 15:50:16 -0700" -->
<!-- isosent="20150820225016" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure" -->
<!-- id="CAAvDA149bXY_9z1W73f42eCNw0KoDTfNRiON1foRfhOyHS__ng_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="39894404-22F9-4AF7-AAB8-8FAA3E005E49_at_cisco.com" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-20 18:50:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17781.php">Mark Santcroos: "[OMPI devel] orte-dvm startup fails on HEAD"</a>
<li><strong>Previous message:</strong> <a href="17779.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-2340-gd5763a8"</a>
<li><strong>In reply to:</strong> <a href="17778.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17786.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
<li><strong>Reply:</strong> <a href="17786.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Aug 20, 2015 at 1:14 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; And therefore it didn't generate libmpi_mpifh_sizeof.a (gfortran &lt;v4.9
</span><br>
<span class="quotelev1">&gt; will generate an effectively &quot;empty&quot; libmpi_mpifh_sizeof.a).  Hence, a
</span><br>
<span class="quotelev1">&gt; subsequent link that depended on that library failed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Paul: can you verify my theory?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do this in your existing build:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; rm -f ompi/mpi/fortran/base/gen-mpi-sizeof.pl
</span><br>
<span class="quotelev1">&gt; wget \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://raw.githubusercontent.com/open-mpi/ompi/master/ompi/mpi/fortran/base/gen-mpi-sizeof.pl">https://raw.githubusercontent.com/open-mpi/ompi/master/ompi/mpi/fortran/base/gen-mpi-sizeof.pl</a>
</span><br>
<span class="quotelev1">&gt; \
</span><br>
<span class="quotelev1">&gt;   -O ompi/mpi/fortran/base/gen-mpi-sizeof.pl
</span><br>
<span class="quotelev1">&gt; chmod +x ompi/mpi/fortran/base/gen-mpi-sizeof.pl
</span><br>
<span class="quotelev1">&gt; rm ompi/mpi/fortran/mpif-h/profile/psizeof_f.f90
</span><br>
<span class="quotelev1">&gt; make -j 32
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I made changes to your instruction appropriate to my VPATH build (cd
<br>
$BLDDIR after the chmod).
<br>
Solaris make has no '-j' option, but since I am running in a VM on a
<br>
dual-core laptop I chose to omit &quot;-j 32&quot; even after switching to gmake.
<br>
<p>Good-natured-nit-picking aside, the solution does NOT work (it may be
<br>
necessary, but is not sufficient).
<br>
There is a new generated psizeof_f.f90, containing a dummy subroutine, but
<br>
my pandas are still sad.
<br>
In fact, these pandas are so despondent that they started chewing on your
<br>
.gitconfig file (but I asked them to be --quiet about it).
<br>
<p>A log from &quot;gmake clean all V=1&quot; in the mpif-h directory is (again)
<br>
attached.
<br>
<p>I direct your attention to the following line:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/bin/sh ../../../../libtool  --tag=FC   --mode=link f90  -m32 -g   -o
<br>
libmpi_mpifh_sizeof.la    -lm -lsocket -lnsl
<br>
Somebody appears to have specified no linker inputs!
<br>
On other platforms I see a &quot;sizeof_f.lo&quot; immediately before the -l options.
<br>
I am pretty sure this is a contributing factor. ;-)
<br>
<p>-Paul
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17780/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17780/log.bz2">log.bz2</a>
</ul>
<!-- attachment="log.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17781.php">Mark Santcroos: "[OMPI devel] orte-dvm startup fails on HEAD"</a>
<li><strong>Previous message:</strong> <a href="17779.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-2340-gd5763a8"</a>
<li><strong>In reply to:</strong> <a href="17778.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17786.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
<li><strong>Reply:</strong> <a href="17786.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
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
