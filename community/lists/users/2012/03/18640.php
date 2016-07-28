<?
$subject_val = "Re: [OMPI users] compilation error with pgcc Unknown switch";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  1 08:53:48 2012" -->
<!-- isoreceived="20120301135348" -->
<!-- sent="Thu, 1 Mar 2012 21:53:42 +0800" -->
<!-- isosent="20120301135342" -->
<!-- name="Abhinav Sarje" -->
<!-- email="asarje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compilation error with pgcc Unknown switch" -->
<!-- id="CADbPk81BsGrug5ONBA8CR=7tQv8xucCyXzeesN80zd8MLx4rTA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BFBA6F78-48A7-4AC5-84F4-6D3890B2717C_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] compilation error with pgcc Unknown switch<br>
<strong>From:</strong> Abhinav Sarje (<em>asarje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-01 08:53:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18641.php">Jeffrey Squyres: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Previous message:</strong> <a href="18639.php">Mohamed Adel: "Re: [OMPI users] Simple question on GRID"</a>
<li><strong>In reply to:</strong> <a href="18633.php">Ralph Castain: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18641.php">Jeffrey Squyres: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Reply:</strong> <a href="18641.php">Jeffrey Squyres: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralph. That did help, but only till the next hurdle. Now the
<br>
build fails at the following point with an 'undefined reference':
<br>
-----------
<br>
Making all in tools/ompi_info
<br>
make[2]: Entering directory
<br>
`/global/u1/a/asarje/hopper/openmpi-dev-trunk/build/ompi/tools/ompi_info'
<br>
&nbsp;&nbsp;CC     ompi_info.o
<br>
&nbsp;&nbsp;CC     output.o
<br>
&nbsp;&nbsp;CC     param.o
<br>
&nbsp;&nbsp;CC     components.o
<br>
&nbsp;&nbsp;CC     version.o
<br>
&nbsp;&nbsp;CCLD   ompi_info
<br>
../../../ompi/.libs/libmpi.so: undefined reference to `opal_atomic_swap_64'
<br>
make[2]: *** [ompi_info] Error 2
<br>
make[2]: Leaving directory
<br>
`/global/u1/a/asarje/hopper/openmpi-dev-trunk/build/ompi/tools/ompi_info'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory
<br>
`/global/u1/a/asarje/hopper/openmpi-dev-trunk/build/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
-----------
<br>
<p><p><p><p><p><p>On Thu, Mar 1, 2012 at 5:25 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; You need to update your source code - this was identified and fixed on Wed. Unfortunately, our trunk is a developer's environment. While we try hard to keep it fully functional, bugs do occasionally work their way into the code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 1, 2012, at 1:37 AM, Abhinav Sarje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Nathan,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried building on an internal login node, and it did not fail at the
</span><br>
<span class="quotelev2">&gt;&gt; previous point. But, after compiling for a very long time, it failed
</span><br>
<span class="quotelev2">&gt;&gt; while building libmpi.la, with a multiple definition error:
</span><br>
<span class="quotelev2">&gt;&gt; ----------
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; &#160;CC &#160; &#160; mpiext/mpiext.lo
</span><br>
<span class="quotelev2">&gt;&gt; &#160;CC &#160; &#160; mpi/f77/base/mpi_f77_base_libmpi_f77_base_la-attr_fn_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; &#160;CC &#160; &#160; mpi/f77/base/mpi_f77_base_libmpi_f77_base_la-conversion_fn_null_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; &#160;CC &#160; &#160; mpi/f77/base/mpi_f77_base_libmpi_f77_base_la-f90_accessors.lo
</span><br>
<span class="quotelev2">&gt;&gt; &#160;CC &#160; &#160; mpi/f77/base/mpi_f77_base_libmpi_f77_base_la-strings.lo
</span><br>
<span class="quotelev2">&gt;&gt; &#160;CC &#160; &#160; mpi/f77/base/mpi_f77_base_libmpi_f77_base_la-test_constants_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; &#160;CCLD &#160; mpi/f77/base/libmpi_f77_base.la
</span><br>
<span class="quotelev2">&gt;&gt; &#160;CCLD &#160; libmpi.la
</span><br>
<span class="quotelev2">&gt;&gt; mca/fcoll/dynamic/.libs/libmca_fcoll_dynamic.a(fcoll_dynamic_file_write_all.o):
</span><br>
<span class="quotelev2">&gt;&gt; In function `local_heap_sort':
</span><br>
<span class="quotelev2">&gt;&gt; /global/u1/a/asarje/hopper/openmpi-dev-trunk/build/ompi/mca/fcoll/dynamic/../../../../../ompi/mca/fcoll/dynamic/fcoll_dynamic_file_write_all.c:1111:
</span><br>
<span class="quotelev2">&gt;&gt; multiple definition of `local_heap_sort'
</span><br>
<span class="quotelev2">&gt;&gt; mca/fcoll/static/.libs/libmca_fcoll_static.a(fcoll_static_file_write_all.o):/global/u1/a/asarje/hopper/openmpi-dev-trunk/build/ompi/mca/fcoll/static/../../../../../ompi/mca/fcoll/static/fcoll_static_file_write_all.c:929:
</span><br>
<span class="quotelev2">&gt;&gt; first defined here
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [libmpi.la] Error 2
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/global/u1/a/asarje/hopper/openmpi-dev-trunk/build/ompi'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/global/u1/a/asarje/hopper/openmpi-dev-trunk/build/ompi'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; ----------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any idea why this is happening, and how to fix it? Again, I am using
</span><br>
<span class="quotelev2">&gt;&gt; the XE6 platform configuration file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Abhinav.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Feb 29, 2012 at 12:13 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, 27 Feb 2012, Abhinav Sarje wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Nathan, Gus, Manju,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I got a chance to try out the XE6 support build, but with no success.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; First I was getting this error: &quot;PGC-F-0010-File write error occurred
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (temporary pragma .s file)&quot;. After searching online about this error,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I saw that there is a patch at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;<a href="https://svn.open-mpi.org/trac/ompi/attachment/ticket/2913/openmpi-trunk-ident_string.patch">https://svn.open-mpi.org/trac/ompi/attachment/ticket/2913/openmpi-trunk-ident_string.patch</a>&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for this particular error.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; With the patched version, I did not get this error anymore, but got
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the unknown switch flag error for the flag &quot;-march=amdfam10&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (specified in the XE6 configuration in the dev trunk) at a particular
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; point even if I use the '-noswitcherror' flag with the pgcc compiler.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If I remove this flag (-march=amdfam10), the build fails later at the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; following point:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Making all in mca/ras/alps
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: Entering directory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `/{mydir}/openmpi-dev-trunk/build/orte/mca/ras/alps'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;CC &#160; &#160; ras_alps_component.lo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;CC &#160; &#160; ras_alps_module.lo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PGC-F-0206-Can't find include file alps/apInfo.h
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (../../../../../orte/mca/ras/alps/ras_alps_module.c: 37)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PGC/x86-64 Linux 11.10-0: compilation aborted
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: *** [ras_alps_module.lo] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `/{mydir}/openmpi-dev-trunk/build/orte/mca/ras/alps'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: Leaving directory `/{mydir}/openmpi-dev-trunk/build/orte'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is a known issue with Cray's frontend environment. Build on one of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; internal login nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Nathan
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="18641.php">Jeffrey Squyres: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Previous message:</strong> <a href="18639.php">Mohamed Adel: "Re: [OMPI users] Simple question on GRID"</a>
<li><strong>In reply to:</strong> <a href="18633.php">Ralph Castain: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18641.php">Jeffrey Squyres: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Reply:</strong> <a href="18641.php">Jeffrey Squyres: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
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
