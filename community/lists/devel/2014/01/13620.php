<?
$subject_val = "[OMPI devel] 1.7.4rc2r30168 - warnings for pointer/integer of different size";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  9 04:07:23 2014" -->
<!-- isoreceived="20140109090723" -->
<!-- sent="Thu, 9 Jan 2014 01:07:22 -0800" -->
<!-- isosent="20140109090722" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.4rc2r30168 - warnings for pointer/integer of different size" -->
<!-- id="CAAvDA1460AE=ruuUn0oM0Ljeq2yuoqjGNdG0t6UUKMK-yZCmqQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.4rc2r30168 - warnings for pointer/integer of different size<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-09 04:07:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13621.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - warnings for pointer/integer of different size"</a>
<li><strong>Previous message:</strong> <a href="13619.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30168 - misc harmless *BSD warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13621.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - warnings for pointer/integer of different size"</a>
<li><strong>Reply:</strong> <a href="13621.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - warnings for pointer/integer of different size"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The following three warnings occur on 32-bit targets, and can each be
<br>
avoided by adding an intermediate cast to uintptr_t or intptr_t:
<br>
<p>-bash-4.2$ grep -B2 'different size' make.log
<br>
&nbsp;&nbsp;CC       fcoll_dynamic_file_read_all.lo
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-netbsd6-i386/openmpi-1.7.4rc2r30168/ompi/mca/fcoll/dynamic/fcoll_dynamic_file_read_all.c:
<br>
In function 'mca_fcoll_dynamic_file_read_all':
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-netbsd6-i386/openmpi-1.7.4rc2r30168/ompi/mca/fcoll/dynamic/fcoll_dynamic_file_read_all.c:591:5:
<br>
warning: cast to pointer from integer of different size
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-netbsd6-i386/openmpi-1.7.4rc2r30168/ompi/mca/fcoll/dynamic/fcoll_dynamic_file_read_all.c:606:9:
<br>
warning: cast to pointer from integer of different size
<br>
<pre>
--
  CC       io_ompio.lo
/home/phargrov/OMPI/openmpi-1.7-latest-netbsd6-i386/openmpi-1.7.4rc2r30168/ompi/mca/io/ompio/io_ompio.c:
In function 'ompi_io_ompio_generate_current_file_view':
/home/phargrov/OMPI/openmpi-1.7-latest-netbsd6-i386/openmpi-1.7.4rc2r30168/ompi/mca/io/ompio/io_ompio.c:249:17:
warning: cast from pointer to integer of different size
The following additional warnings show up on a 32-bit Solaris system with
InfiniBand.
I've not looked at whether or not an (u)intptr_t cast is appropriate for
these.
$ grep -B2 'different size' make.log
  CC       btl_openib.lo
/shared/OMPI/openmpi-1.7-latest-solaris11-x86-ib-gcc452/openmpi-1.7.4rc2r30168/ompi/mca/btl/openib/btl_openib.c:
In function 'check_if_device_support_modify_srq':
/shared/OMPI/openmpi-1.7-latest-solaris11-x86-ib-gcc452/openmpi-1.7.4rc2r30168/ompi/mca/btl/openib/btl_openib.c:272:21:
warning: cast from pointer to integer of different size
--
  CC       connect/btl_openib_connect_udcm.lo
/shared/OMPI/openmpi-1.7-latest-solaris11-x86-ib-gcc452/openmpi-1.7.4rc2r30168/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c:
In function 'udcm_post_send':
/shared/OMPI/openmpi-1.7-latest-solaris11-x86-ib-gcc452/openmpi-1.7.4rc2r30168/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c:1455:17:
warning: cast to pointer from integer of different size
--
  CC       btl_usnic_module.lo
/shared/OMPI/openmpi-1.7-latest-solaris11-x86-ib-gcc452/openmpi-1.7.4rc2r30168/ompi/mca/btl/usnic/btl_usnic_module.c:
In function 'prepare_src_small':
/shared/OMPI/openmpi-1.7-latest-solaris11-x86-ib-gcc452/openmpi-1.7.4rc2r30168/ompi/mca/btl/usnic/btl_usnic_module.c:404:17:
warning: cast to pointer from integer of different size
/shared/OMPI/openmpi-1.7-latest-solaris11-x86-ib-gcc452/openmpi-1.7.4rc2r30168/ompi/mca/btl/usnic/btl_usnic_mo
dule.c: In function 'usnic_send':
/shared/OMPI/openmpi-1.7-latest-solaris11-x86-ib-gcc452/openmpi-1.7.4rc2r30168/ompi/mca/btl/usnic/btl_usnic_module.c:1345:21:
warning: cast to pointer from integer of different size
--
  CC
btl_usnic_component.lo/shared/OMPI/openmpi-1.7-latest-solaris11-x86-ib-gcc452/openmpi-1.7.4rc2r30168/ompi/mca/btl/usnic/btl_usnic_component.c:
In function 'usnic_component_progress':
/shared/OMPI/openmpi-1.7-latest-solaris11-x86-ib-gcc452/openmpi-1.7.4rc2r30168/ompi/mca/btl/usnic/btl_usnic_component.c:884:28:
warning: cast to pointer from integer of different size
--
  CC
btl_usnic_send.lo/shared/OMPI/openmpi-1.7-latest-solaris11-x86-ib-gcc452/openmpi-1.7.4rc2r30168/ompi/mca/btl/usnic/btl_usnic_send.c:
In function 'ompi_btl_usnic_finish_put_or_send':
/shared/OMPI/openmpi-1.7-latest-solaris11-x86-ib-gcc452/openmpi-1.7.4rc2r30168/ompi/mca/btl/usnic/btl_usnic_send.c:138:21:
warning: cast to pointer from integer of different size
-Paul
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13620/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13621.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - warnings for pointer/integer of different size"</a>
<li><strong>Previous message:</strong> <a href="13619.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30168 - misc harmless *BSD warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13621.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - warnings for pointer/integer of different size"</a>
<li><strong>Reply:</strong> <a href="13621.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - warnings for pointer/integer of different size"</a>
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
