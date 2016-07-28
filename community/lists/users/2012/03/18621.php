<?
$subject_val = "Re: [OMPI users] compilation error with pgcc Unknown switch";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  1 03:38:11 2012" -->
<!-- isoreceived="20120301083811" -->
<!-- sent="Thu, 1 Mar 2012 16:37:40 +0800" -->
<!-- isosent="20120301083740" -->
<!-- name="Abhinav Sarje" -->
<!-- email="asarje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compilation error with pgcc Unknown switch" -->
<!-- id="CADbPk80Wa+zzauzSNii6vKnjp2W-QT6TFLQgn-5om5a9sXdOrQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.OSX.2.00.1202280911310.12520_at_panthera.lanl.gov" -->
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
<strong>From:</strong> Abhinav Sarje (<em>asarje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-01 03:37:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18622.php">Ralph Castain: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Previous message:</strong> <a href="18620.php">Pinero, Pedro_jose: "Re: [OMPI users] Very slow MPI_GATHER"</a>
<li><strong>In reply to:</strong> <a href="../../2012/02/18568.php">Nathan Hjelm: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18622.php">Ralph Castain: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Reply:</strong> <a href="18622.php">Ralph Castain: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Nathan,
<br>
<p>I tried building on an internal login node, and it did not fail at the
<br>
previous point. But, after compiling for a very long time, it failed
<br>
while building libmpi.la, with a multiple definition error:
<br>
----------
<br>
...
<br>
&nbsp;&nbsp;CC     mpiext/mpiext.lo
<br>
&nbsp;&nbsp;CC     mpi/f77/base/mpi_f77_base_libmpi_f77_base_la-attr_fn_f.lo
<br>
&nbsp;&nbsp;CC     mpi/f77/base/mpi_f77_base_libmpi_f77_base_la-conversion_fn_null_f.lo
<br>
&nbsp;&nbsp;CC     mpi/f77/base/mpi_f77_base_libmpi_f77_base_la-f90_accessors.lo
<br>
&nbsp;&nbsp;CC     mpi/f77/base/mpi_f77_base_libmpi_f77_base_la-strings.lo
<br>
&nbsp;&nbsp;CC     mpi/f77/base/mpi_f77_base_libmpi_f77_base_la-test_constants_f.lo
<br>
&nbsp;&nbsp;CCLD   mpi/f77/base/libmpi_f77_base.la
<br>
&nbsp;&nbsp;CCLD   libmpi.la
<br>
mca/fcoll/dynamic/.libs/libmca_fcoll_dynamic.a(fcoll_dynamic_file_write_all.o):
<br>
In function `local_heap_sort':
<br>
/global/u1/a/asarje/hopper/openmpi-dev-trunk/build/ompi/mca/fcoll/dynamic/../../../../../ompi/mca/fcoll/dynamic/fcoll_dynamic_file_write_all.c:1111:
<br>
multiple definition of `local_heap_sort'
<br>
mca/fcoll/static/.libs/libmca_fcoll_static.a(fcoll_static_file_write_all.o):/global/u1/a/asarje/hopper/openmpi-dev-trunk/build/ompi/mca/fcoll/static/../../../../../ompi/mca/fcoll/static/fcoll_static_file_write_all.c:929:
<br>
first defined here
<br>
make[2]: *** [libmpi.la] Error 2
<br>
make[2]: Leaving directory
<br>
`/global/u1/a/asarje/hopper/openmpi-dev-trunk/build/ompi'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory
<br>
`/global/u1/a/asarje/hopper/openmpi-dev-trunk/build/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
----------
<br>
<p>Any idea why this is happening, and how to fix it? Again, I am using
<br>
the XE6 platform configuration file.
<br>
<p>Abhinav.
<br>
<p>On Wed, Feb 29, 2012 at 12:13 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, 27 Feb 2012, Abhinav Sarje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Nathan, Gus, Manju,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I got a chance to try out the XE6 support build, but with no success.
</span><br>
<span class="quotelev2">&gt;&gt; First I was getting this error: &quot;PGC-F-0010-File write error occurred
</span><br>
<span class="quotelev2">&gt;&gt; (temporary pragma .s file)&quot;. After searching online about this error,
</span><br>
<span class="quotelev2">&gt;&gt; I saw that there is a patch at
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;<a href="https://svn.open-mpi.org/trac/ompi/attachment/ticket/2913/openmpi-trunk-ident_string.patch">https://svn.open-mpi.org/trac/ompi/attachment/ticket/2913/openmpi-trunk-ident_string.patch</a>&quot;
</span><br>
<span class="quotelev2">&gt;&gt; for this particular error.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With the patched version, I did not get this error anymore, but got
</span><br>
<span class="quotelev2">&gt;&gt; the unknown switch flag error for the flag &quot;-march=amdfam10&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (specified in the XE6 configuration in the dev trunk) at a particular
</span><br>
<span class="quotelev2">&gt;&gt; point even if I use the '-noswitcherror' flag with the pgcc compiler.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I remove this flag (-march=amdfam10), the build fails later at the
</span><br>
<span class="quotelev2">&gt;&gt; following point:
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/ras/alps
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt; `/{mydir}/openmpi-dev-trunk/build/orte/mca/ras/alps'
</span><br>
<span class="quotelev2">&gt;&gt; &#160;CC &#160; &#160; ras_alps_component.lo
</span><br>
<span class="quotelev2">&gt;&gt; &#160;CC &#160; &#160; ras_alps_module.lo
</span><br>
<span class="quotelev2">&gt;&gt; PGC-F-0206-Can't find include file alps/apInfo.h
</span><br>
<span class="quotelev2">&gt;&gt; (../../../../../orte/mca/ras/alps/ras_alps_module.c: 37)
</span><br>
<span class="quotelev2">&gt;&gt; PGC/x86-64 Linux 11.10-0: compilation aborted
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [ras_alps_module.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/{mydir}/openmpi-dev-trunk/build/orte/mca/ras/alps'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/{mydir}/openmpi-dev-trunk/build/orte'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a known issue with Cray's frontend environment. Build on one of the
</span><br>
<span class="quotelev1">&gt; internal login nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18622.php">Ralph Castain: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Previous message:</strong> <a href="18620.php">Pinero, Pedro_jose: "Re: [OMPI users] Very slow MPI_GATHER"</a>
<li><strong>In reply to:</strong> <a href="../../2012/02/18568.php">Nathan Hjelm: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18622.php">Ralph Castain: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Reply:</strong> <a href="18622.php">Ralph Castain: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
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
