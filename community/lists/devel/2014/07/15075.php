<?
$subject_val = "[OMPI devel] segv in ompi_info";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  8 09:20:11 2014" -->
<!-- isoreceived="20140708132011" -->
<!-- sent="Tue, 8 Jul 2014 16:20:09 +0300" -->
<!-- isosent="20140708132009" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="[OMPI devel] segv in ompi_info" -->
<!-- id="CAAO1Kybiur4p6gXVQOcCUSKj8NR8ipdrr_g6He-kFW0pFTyNjg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] segv in ompi_info<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-08 09:20:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15076.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] segv in ompi_info"</a>
<li><strong>Previous message:</strong> <a href="15074.php">Gilles Gouaillardet: "Re: [OMPI devel] centos-7 / rhel-7 build fail (configure fails to recognize g++)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15076.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] segv in ompi_info"</a>
<li><strong>Reply:</strong> <a href="15076.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] segv in ompi_info"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
$/usr/mpi/gcc/openmpi-1.8.2a1/bin/ompi_info -a -l 9|less
<br>
Caught signal 13 (Broken pipe)
<br>
==== backtrace ====
<br>
&nbsp;2 0x0000000000054cac mxm_handle_error()
<br>
&nbsp;/var/tmp/OFED_topdir/BUILD/mxm-3.2.2883/src/mxm/util/debug/debug.c:653
<br>
&nbsp;3 0x0000000000054e74 mxm_error_signal_handler()
<br>
&nbsp;/var/tmp/OFED_topdir/BUILD/mxm-3.2.2883/src/mxm/util/debug/debug.c:628
<br>
&nbsp;4 0x00000033fbe32920 killpg()  ??:0
<br>
&nbsp;5 0x00000033fbedb650 __write_nocancel()  interp.c:0
<br>
&nbsp;6 0x00000033fbe71d53 _IO_file_write@@GLIBC_2.2.5()  ??:0
<br>
&nbsp;7 0x00000033fbe73305 _IO_do_write@@GLIBC_2.2.5()  ??:0
<br>
&nbsp;8 0x00000033fbe719cd _IO_file_xsputn@@GLIBC_2.2.5()  ??:0
<br>
&nbsp;9 0x00000033fbe48410 _IO_vfprintf()  ??:0
<br>
10 0x00000033fbe4f40a printf()  ??:0
<br>
11 0x000000000002bc84 opal_info_out()
<br>
&nbsp;/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2a1/opal/runtime/opal_info_support.c:853
<br>
12 0x000000000002c6bb opal_info_show_mca_group_params()
<br>
&nbsp;/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2a1/opal/runtime/opal_info_support.c:658
<br>
13 0x000000000002c882 opal_info_show_mca_group_params()
<br>
&nbsp;/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2a1/opal/runtime/opal_info_support.c:716
<br>
14 0x000000000002cc13 opal_info_show_mca_params()
<br>
&nbsp;/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2a1/opal/runtime/opal_info_support.c:742
<br>
15 0x000000000002d074 opal_info_do_params()
<br>
&nbsp;/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2a1/opal/runtime/opal_info_support.c:485
<br>
16 0x000000000040167b main()  ??:0
<br>
17 0x00000033fbe1ecdd __libc_start_main()  ??:0
<br>
18 0x0000000000401349 _start()  ??:0
<br>
===================
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15075/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15076.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] segv in ompi_info"</a>
<li><strong>Previous message:</strong> <a href="15074.php">Gilles Gouaillardet: "Re: [OMPI devel] centos-7 / rhel-7 build fail (configure fails to recognize g++)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15076.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] segv in ompi_info"</a>
<li><strong>Reply:</strong> <a href="15076.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] segv in ompi_info"</a>
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
