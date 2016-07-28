<?
$subject_val = "Re: [OMPI devel] 1.7.4rc2r30168 - warnings for pointer/integer of different size";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  9 04:18:57 2014" -->
<!-- isoreceived="20140109091857" -->
<!-- sent="Thu, 9 Jan 2014 01:18:55 -0800" -->
<!-- isosent="20140109091855" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc2r30168 - warnings for pointer/integer of different size" -->
<!-- id="CAAvDA14qoM+bAb+rsSx75xnv=XFNKJLt_4TP9rXrPp_Xd9o5Pw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA1460AE=ruuUn0oM0Ljeq2yuoqjGNdG0t6UUKMK-yZCmqQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc2r30168 - warnings for pointer/integer of different size<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-09 04:18:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13622.php">Jeff Squyres (jsquyres): "[OMPI devel] hcoll destruction via MPI attribute"</a>
<li><strong>Previous message:</strong> <a href="13620.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30168 - warnings for pointer/integer of different size"</a>
<li><strong>In reply to:</strong> <a href="13620.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30168 - warnings for pointer/integer of different size"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
And FWIW, all of those warnings occur on a Linux/x86 host with InfiniBand.
<br>
So, despite the platforms shown in my previous email the problem is not
<br>
related to use of NetBSD or Solaris.
<br>
<p>/home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/openmpi-1.7.4rc2r30168/ompi/mca/btl/openib/btl_openib.c:272:
<br>
warning: cast from pointer to integer of different size
<br>
/home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/openmpi-1.7.4rc2r30168/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c:1455:
<br>
warning: cast to pointer from integer of different size
<br>
/home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/openmpi-1.7.4rc2r30168/ompi/mca/btl/usnic/btl_usnic_module.c:404:
<br>
warning: cast to pointer from integer of different size
<br>
/home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/openmpi-1.7.4rc2r30168/ompi/mca/btl/usnic/btl_usnic_module.c:1345:
<br>
warning: cast to pointer from integer of different size
<br>
/home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/openmpi-1.7.4rc2r30168/ompi/mca/btl/usnic/btl_usnic_component.c:884:
<br>
warning: cast to pointer from integer of different size
<br>
/home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/openmpi-1.7.4rc2r30168/ompi/mca/btl/usnic/btl_usnic_send.c:138:
<br>
warning: cast to pointer from integer of different size
<br>
/home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/openmpi-1.7.4rc2r30168/ompi/mca/fcoll/dynamic/fcoll_dynamic_file_read_all.c:591:
<br>
warning: cast to pointer from integer of different size
<br>
/home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/openmpi-1.7.4rc2r30168/ompi/mca/fcoll/dynamic/fcoll_dynamic_file_read_all.c:606:
<br>
warning: cast to pointer from integer of different size
<br>
/home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/openmpi-1.7.4rc2r30168/ompi/mca/io/ompio/io_ompio.c:249:
<br>
warning: cast from pointer to integer of different size
<br>
<p>-Paul
<br>
<p><p>On Thu, Jan 9, 2014 at 1:07 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The following three warnings occur on 32-bit targets, and can each be
</span><br>
<span class="quotelev1">&gt; avoided by adding an intermediate cast to uintptr_t or intptr_t:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -bash-4.2$ grep -B2 'different size' make.log
</span><br>
<span class="quotelev1">&gt;   CC       fcoll_dynamic_file_read_all.lo
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7-latest-netbsd6-i386/openmpi-1.7.4rc2r30168/ompi/mca/fcoll/dynamic/fcoll_dynamic_file_read_all.c:
</span><br>
<span class="quotelev1">&gt; In function 'mca_fcoll_dynamic_file_read_all':
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7-latest-netbsd6-i386/openmpi-1.7.4rc2r30168/ompi/mca/fcoll/dynamic/fcoll_dynamic_file_read_all.c:591:5:
</span><br>
<span class="quotelev1">&gt; warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7-latest-netbsd6-i386/openmpi-1.7.4rc2r30168/ompi/mca/fcoll/dynamic/fcoll_dynamic_file_read_all.c:606:9:
</span><br>
<span class="quotelev1">&gt; warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;   CC       io_ompio.lo
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7-latest-netbsd6-i386/openmpi-1.7.4rc2r30168/ompi/mca/io/ompio/io_ompio.c:
</span><br>
<span class="quotelev1">&gt; In function 'ompi_io_ompio_generate_current_file_view':
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7-latest-netbsd6-i386/openmpi-1.7.4rc2r30168/ompi/mca/io/ompio/io_ompio.c:249:17:
</span><br>
<span class="quotelev1">&gt; warning: cast from pointer to integer of different size
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The following additional warnings show up on a 32-bit Solaris system with
</span><br>
<span class="quotelev1">&gt; InfiniBand.
</span><br>
<span class="quotelev1">&gt; I've not looked at whether or not an (u)intptr_t cast is appropriate for
</span><br>
<span class="quotelev1">&gt; these.
</span><br>
<span class="quotelev1">&gt; $ grep -B2 'different size' make.log
</span><br>
<span class="quotelev1">&gt;   CC       btl_openib.lo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /shared/OMPI/openmpi-1.7-latest-solaris11-x86-ib-gcc452/openmpi-1.7.4rc2r30168/ompi/mca/btl/openib/btl_openib.c:
</span><br>
<span class="quotelev1">&gt; In function 'check_if_device_support_modify_srq':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /shared/OMPI/openmpi-1.7-latest-solaris11-x86-ib-gcc452/openmpi-1.7.4rc2r30168/ompi/mca/btl/openib/btl_openib.c:272:21:
</span><br>
<span class="quotelev1">&gt; warning: cast from pointer to integer of different size
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;   CC       connect/btl_openib_connect_udcm.lo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /shared/OMPI/openmpi-1.7-latest-solaris11-x86-ib-gcc452/openmpi-1.7.4rc2r30168/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c:
</span><br>
<span class="quotelev1">&gt; In function 'udcm_post_send':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /shared/OMPI/openmpi-1.7-latest-solaris11-x86-ib-gcc452/openmpi-1.7.4rc2r30168/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c:1455:17:
</span><br>
<span class="quotelev1">&gt; warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;   CC       btl_usnic_module.lo
</span><br>
<span class="quotelev1">&gt; /shared/OMPI/openmpi-1.7-latest-solaris11-x86-ib-gcc452/openmpi-1.7.4rc2r30168/ompi/mca/btl/usnic/btl_usnic_module.c:
</span><br>
<span class="quotelev1">&gt; In function 'prepare_src_small':
</span><br>
<span class="quotelev1">&gt; /shared/OMPI/openmpi-1.7-latest-solaris11-x86-ib-gcc452/openmpi-1.7.4rc2r30168/ompi/mca/btl/usnic/btl_usnic_module.c:404:17:
</span><br>
<span class="quotelev1">&gt; warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /shared/OMPI/openmpi-1.7-latest-solaris11-x86-ib-gcc452/openmpi-1.7.4rc2r30168/ompi/mca/btl/usnic/btl_usnic_mo
</span><br>
<span class="quotelev1">&gt; dule.c: In function 'usnic_send':
</span><br>
<span class="quotelev1">&gt; /shared/OMPI/openmpi-1.7-latest-solaris11-x86-ib-gcc452/openmpi-1.7.4rc2r30168/ompi/mca/btl/usnic/btl_usnic_module.c:1345:21:
</span><br>
<span class="quotelev1">&gt; warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;   CC
</span><br>
<span class="quotelev1">&gt; btl_usnic_component.lo/shared/OMPI/openmpi-1.7-latest-solaris11-x86-ib-gcc452/openmpi-1.7.4rc2r30168/ompi/mca/btl/usnic/btl_usnic_component.c:
</span><br>
<span class="quotelev1">&gt; In function 'usnic_component_progress':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /shared/OMPI/openmpi-1.7-latest-solaris11-x86-ib-gcc452/openmpi-1.7.4rc2r30168/ompi/mca/btl/usnic/btl_usnic_component.c:884:28:
</span><br>
<span class="quotelev1">&gt; warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;   CC
</span><br>
<span class="quotelev1">&gt; btl_usnic_send.lo/shared/OMPI/openmpi-1.7-latest-solaris11-x86-ib-gcc452/openmpi-1.7.4rc2r30168/ompi/mca/btl/usnic/btl_usnic_send.c:
</span><br>
<span class="quotelev1">&gt; In function 'ompi_btl_usnic_finish_put_or_send':
</span><br>
<span class="quotelev1">&gt; /shared/OMPI/openmpi-1.7-latest-solaris11-x86-ib-gcc452/openmpi-1.7.4rc2r30168/ompi/mca/btl/usnic/btl_usnic_send.c:138:21:
</span><br>
<span class="quotelev1">&gt; warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13621/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13622.php">Jeff Squyres (jsquyres): "[OMPI devel] hcoll destruction via MPI attribute"</a>
<li><strong>Previous message:</strong> <a href="13620.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30168 - warnings for pointer/integer of different size"</a>
<li><strong>In reply to:</strong> <a href="13620.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30168 - warnings for pointer/integer of different size"</a>
<!-- nextthread="start" -->
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
