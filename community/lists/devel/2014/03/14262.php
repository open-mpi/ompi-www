<?
$subject_val = "Re: [OMPI devel] v1.7.5rc1 posted";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar  2 23:08:31 2014" -->
<!-- isoreceived="20140303040831" -->
<!-- sent="Sun, 2 Mar 2014 20:08:29 -0800" -->
<!-- isosent="20140303040829" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.7.5rc1 posted" -->
<!-- id="CAAvDA17FHVWdR4ThhY8NekgahcFdNFiGsSVuBaTFhvneA60odg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5313FBD9.3000705_at_cora.nwra.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.7.5rc1 posted<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-02 23:08:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14263.php">Orion Poplawski: "Re: [OMPI devel] v1.7.5rc1 posted"</a>
<li><strong>Previous message:</strong> <a href="14261.php">Orion Poplawski: "Re: [OMPI devel] v1.7.5rc1 posted"</a>
<li><strong>In reply to:</strong> <a href="14261.php">Orion Poplawski: "Re: [OMPI devel] v1.7.5rc1 posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14263.php">Orion Poplawski: "Re: [OMPI devel] v1.7.5rc1 posted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, Mar 2, 2014 at 7:49 PM, Orion Poplawski &lt;orion_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 03/01/2014 07:13 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt; In the usual place:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/software/ompi/v1.7/">http://www.open-mpi.org/software/ompi/v1.7/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please subject this to your best tests as we hope to roll this (plus bug
</span><br>
<span class="quotelev1">&gt; fixes) to 1.8.0 at the end of the month. This includes the new OSHMEM
</span><br>
<span class="quotelev1">&gt; support, plus a completely updated MPI-3 compliant one-sided implementation.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Scheduled release date: Mar 10
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; According to configure --help:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    --enable-oshmem-fortran enable OSHMEM Fortran bindings (default:
</span><br>
<span class="quotelev1">&gt; enabled if
</span><br>
<span class="quotelev1">&gt;                            Fortran compiler found)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, it is not being automatically enabled for me:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking if want to build OSHMEM fortran bindings... no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This seems to be because the configure test uses:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if test &quot;$enable_oshmem_fortran&quot; != &quot;no&quot; -a &quot;$ompi_fortran_happy&quot; = 1; then
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but ompi_fortran_happy is not yet set at this point.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Orion
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I can confirm that OSHMEM Fortran bindings aren't getting built for any of
<br>
my testers either.
<br>
<p>I am slightly concerned that at least one oshmem/fortran issue (
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/02/14114.php">http://www.open-mpi.org/community/lists/devel/2014/02/14114.php</a> / ticket
<br>
#4626) might be wider spread than we had thought.  In particular the
<br>
failure was only occurring on a platform where I had an
<br>
explicit --enable-mpi-fortran=usempi.  I am investigating now if explicitly
<br>
enabling fortran will reproduce issue 4626 on other systems.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14262/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14263.php">Orion Poplawski: "Re: [OMPI devel] v1.7.5rc1 posted"</a>
<li><strong>Previous message:</strong> <a href="14261.php">Orion Poplawski: "Re: [OMPI devel] v1.7.5rc1 posted"</a>
<li><strong>In reply to:</strong> <a href="14261.php">Orion Poplawski: "Re: [OMPI devel] v1.7.5rc1 posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14263.php">Orion Poplawski: "Re: [OMPI devel] v1.7.5rc1 posted"</a>
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
