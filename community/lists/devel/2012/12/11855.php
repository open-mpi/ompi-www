<?
$subject_val = "[OMPI devel] openmpi-1.7rc5 on cygwin ; results and patches";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 19 12:50:22 2012" -->
<!-- isoreceived="20121219175022" -->
<!-- sent="Wed, 19 Dec 2012 18:50:11 +0100" -->
<!-- isosent="20121219175011" -->
<!-- name="marco atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="[OMPI devel] openmpi-1.7rc5 on cygwin ; results and patches" -->
<!-- id="50D1FE53.2020107_at_gmail.com" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI devel] openmpi-1.7rc5 on cygwin ; results and patches<br>
<strong>From:</strong> marco atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-19 12:50:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11856.php">Jeff Squyres: "Re: [OMPI devel] openmpi-1.7rc5 on cygwin ; results and patches"</a>
<li><strong>Previous message:</strong> <a href="11854.php">Rolf vandeVaart: "[OMPI devel] RFC: Support for asynchronous copies of GPU buffers over IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11856.php">Jeff Squyres: "Re: [OMPI devel] openmpi-1.7rc5 on cygwin ; results and patches"</a>
<li><strong>Reply:</strong> <a href="11856.php">Jeff Squyres: "Re: [OMPI devel] openmpi-1.7rc5 on cygwin ; results and patches"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Built and tested openmpi-1.7rc5 on cygwin, same configuration
<br>
than 1.6.3-4 package
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./autogen.sh
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;configure \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LDFLAGS=&quot;-Wl,--export-all-symbols -no-undefined&quot;  \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--disable-mca-dso \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--disable-sysv-shmem \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--without-udapl \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-cxx-exceptions \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-threads=posix \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--without-cs-fs \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-heterogeneous \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-mpi-param_check=always \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-contrib-no-build=vt,libompitrace \
<br>
&nbsp;
<br>
--enable-mca-no-build=paffinity,installdirs-windows,timer-windows,shmem-sysv
<br>
<p><p>In addition to the previous 3 patches:
<br>
&nbsp;&nbsp;&nbsp;path_null.patch     : <a href="https://svn.open-mpi.org/trac/ompi/ticket/3371">https://svn.open-mpi.org/trac/ompi/ticket/3371</a>
<br>
&nbsp;&nbsp;&nbsp;SHM.patch           : posix alternative at  &quot;SHM_R | SHM_W&quot;
<br>
&nbsp;&nbsp;&nbsp;cygwin-dlname.patch : cygwin specific for .dll instead of .so suffix
<br>
<p>I needed additional patches:
<br>
&nbsp;&nbsp;&nbsp;ERROR.patch         : ERROR is already defined, so another label
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;is needed for &quot;goto ERROR&quot;
<br>
&nbsp;&nbsp;&nbsp;interface.patch     : same for interface , it seems a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct somewhere else
<br>
&nbsp;&nbsp;&nbsp;min.patch           : min already defined as macro
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(I saw in the source also a MIN macro defined)
<br>
&nbsp;&nbsp;&nbsp;mpifh.patch         : to avoid undefined error
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi_mpifh_la_LIBADD needs
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(top_builddir)/ompi/libmpi.la
<br>
&nbsp;&nbsp;&nbsp;winsock.patch       : defense against &lt;winsock2.h&gt; usage
<br>
<p><p>Full package here :
<br>
<a href="http://matzeri.altervista.org/cygwin-1.7/openmpi/">http://matzeri.altervista.org/cygwin-1.7/openmpi/</a>
<br>
<p>Osu-micro-benchmarks-3.7 results here :
<br>
<a href="http://matzeri.altervista.org/works/ompi/">http://matzeri.altervista.org/works/ompi/</a>
<br>
<p>Regards
<br>
Marco
<br>
<p>







<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11855/cygwin-dlname.patch">cygwin-dlname.patch</a>
</ul>
<!-- attachment="cygwin-dlname.patch" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11855/ERROR.patch">ERROR.patch</a>
</ul>
<!-- attachment="ERROR.patch" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11855/interface.patch">interface.patch</a>
</ul>
<!-- attachment="interface.patch" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11855/min.patch">min.patch</a>
</ul>
<!-- attachment="min.patch" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11855/mpifh.patch">mpifh.patch</a>
</ul>
<!-- attachment="mpifh.patch" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11855/path_null.patch">path_null.patch</a>
</ul>
<!-- attachment="path_null.patch" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11855/SHM.patch">SHM.patch</a>
</ul>
<!-- attachment="SHM.patch" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11855/winsock.patch">winsock.patch</a>
</ul>
<!-- attachment="winsock.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11856.php">Jeff Squyres: "Re: [OMPI devel] openmpi-1.7rc5 on cygwin ; results and patches"</a>
<li><strong>Previous message:</strong> <a href="11854.php">Rolf vandeVaart: "[OMPI devel] RFC: Support for asynchronous copies of GPU buffers over IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11856.php">Jeff Squyres: "Re: [OMPI devel] openmpi-1.7rc5 on cygwin ; results and patches"</a>
<li><strong>Reply:</strong> <a href="11856.php">Jeff Squyres: "Re: [OMPI devel] openmpi-1.7rc5 on cygwin ; results and patches"</a>
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
