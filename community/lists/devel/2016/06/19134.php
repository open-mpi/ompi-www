<?
$subject_val = "Re: [OMPI devel] Posting To Group";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 22 08:06:03 2016" -->
<!-- isoreceived="20160622120603" -->
<!-- sent="Wed, 22 Jun 2016 21:06:01 +0900" -->
<!-- isosent="20160622120601" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Posting To Group" -->
<!-- id="CAAkFZ5tEgmYQUJ-tkTfuPV0K6zVpUTy7cxjO779ei-_JSmhjHw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CADfeNhkK=gJeV2N2Ly2_r_xPkyS1HVjojdxKa9BNqpU261mqYg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Posting To Group<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-22 08:06:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19135.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Posting To Group"</a>
<li><strong>Previous message:</strong> <a href="19133.php">mayank bhuwal: "Re: [OMPI devel] Posting To Group"</a>
<li><strong>In reply to:</strong> <a href="19133.php">mayank bhuwal: "Re: [OMPI devel] Posting To Group"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19135.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Posting To Group"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
note Open MPI 1.10.3 has just been released, and you should use it,
<br>
install procedure of 1.8.1 should work too.
<br>
<p>what is exactly the issue ?
<br>
the fortran wrapper is mpifort, mpif90 is just an alias.
<br>
is there a Fortran compiler on your system ?
<br>
if not, just install one and re configure/make install
<br>
<p>strictly speaking, there is no fortran 77 vs 90 vs 2008, but
<br>
include 'mpif.h'
<br>
vs
<br>
use mpi
<br>
vs
<br>
use mpi_f08
<br>
<p>if you need
<br>
use mpi
<br>
support, usually but incorrectly referred as f90 support, you can
<br>
configure --enable-mpi-fortran=usempi
<br>
it will abort if your compiler cannot build that,
<br>
please post the configure output and config.log so we can have a look
<br>
<p><p>Cheers,
<br>
<p>Gilles
<br>
<p>On Wednesday, June 22, 2016, mayank bhuwal &lt;mayankwondorous2789_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; I have installed OpenMPI following the instruction given in the below link
</span><br>
<span class="quotelev1">&gt; :
</span><br>
<span class="quotelev1">&gt; <a href="http://sysads.co.uk/2014/05/install-open-mpi-1-8-ubuntu-14-04-13-10/">http://sysads.co.uk/2014/05/install-open-mpi-1-8-ubuntu-14-04-13-10/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also i have checked that mpif90 is present inside the bin folder of
</span><br>
<span class="quotelev1">&gt; openmpi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jun 22, 2016 at 5:01 PM, mayank bhuwal &lt;
</span><br>
<span class="quotelev1">&gt; mayankwondorous2789_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','mayankwondorous2789_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear Team ,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please help in resolving an issue which is :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately, this installation of Open MPI was not compiled with
</span><br>
<span class="quotelev2">&gt;&gt; Fortran 90 support.  As such, the mpif90 compiler is non-functional
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks !!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19134/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19135.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Posting To Group"</a>
<li><strong>Previous message:</strong> <a href="19133.php">mayank bhuwal: "Re: [OMPI devel] Posting To Group"</a>
<li><strong>In reply to:</strong> <a href="19133.php">mayank bhuwal: "Re: [OMPI devel] Posting To Group"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19135.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Posting To Group"</a>
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
