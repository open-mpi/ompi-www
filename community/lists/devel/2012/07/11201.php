<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  2 11:24:24 2012" -->
<!-- isoreceived="20120702152424" -->
<!-- sent="Mon, 2 Jul 2012 11:24:19 -0400" -->
<!-- isosent="20120702152419" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm" -->
<!-- id="385B40A3-5D28-447B-9539-FFD32816B9B5_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20120702152055.GB84484_at_panthera.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-02 11:24:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11202.php">Steve Wise: "[OMPI devel] openib btl and cq overflows"</a>
<li><strong>Previous message:</strong> <a href="11200.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<li><strong>In reply to:</strong> <a href="11200.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11205.php">Shamis, Pavel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi:	config mca/btl/ofud mca/btl/openib mca/common/ofacm	mca/common/ofautils mca/dpm"</a>
<li><strong>Reply:</strong> <a href="11205.php">Shamis, Pavel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi:	config mca/btl/ofud mca/btl/openib mca/common/ofacm	mca/common/ofautils mca/dpm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Keep in mind that this is currently not used for the openib BTL.  It is only used in the upcoming OpenFabrics-based collectives component.
<br>
<p>The iWARP-required connector-must-send-first logic is not yet included in this code, as I understand it.  That must be added before it can be used with the openib BTL.
<br>
<p><p>On Jul 2, 2012, at 11:20 AM, Nathan Hjelm wrote:
<br>
<p><span class="quotelev1">&gt; Nice! Are we moving this to 1.7 as well?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Jul 02, 2012 at 11:20:12AM -0400, svn-commit-mailer_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Author: pasha (Pavel Shamis)
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2012-07-02 11:20:12 EDT (Mon, 02 Jul 2012)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 26707
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/26707">https://svn.open-mpi.org/trac/ompi/changeset/26707</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; 1. Adding 2 new components:
</span><br>
<span class="quotelev2">&gt;&gt; ofacm - generic connection manager for IB interconnects.
</span><br>
<span class="quotelev2">&gt;&gt; ofautils - IB common utilities and compatibility code
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. Updating OpenIB configure code
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - ORNL &amp; Mellanox Teams
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Added:
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/config/ompi_check_openfabrics.m4
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/common/ofacm/
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/common/ofacm/Makefile.am
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/common/ofacm/base.h
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/common/ofacm/common_ofacm_base.c
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/common/ofacm/common_ofacm_empty.c
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/common/ofacm/common_ofacm_empty.h
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/common/ofacm/common_ofacm_oob.c
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/common/ofacm/common_ofacm_oob.h
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/common/ofacm/common_ofacm_xoob.c
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/common/ofacm/common_ofacm_xoob.h
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/common/ofacm/configure.m4
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/common/ofacm/configure.params
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/common/ofacm/connect.h
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/common/ofacm/help-mpi-common-ofacm-base.txt
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/common/ofacm/help-mpi-common-ofacm-oob.txt
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/common/ofautils/
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/common/ofautils/Makefile.am
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/common/ofautils/common_ofautils.c
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/common/ofautils/common_ofautils.h
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/common/ofautils/configure.m4
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/common/ofautils/configure.params
</span><br>
<span class="quotelev2">&gt;&gt; Deleted:
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/config/ompi_check_openib.m4
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/config/ompi_check_openfabrics.m4                |   403 +++++++++                               
</span><br>
<span class="quotelev2">&gt;&gt;   /dev/null                                                  |   329 -------                                 
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/btl/ofud/configure.m4                       |     2                                         
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/btl/openib/Makefile.am                      |     4                                         
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/btl/openib/btl_openib_component.c           |    49 -                                       
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/btl/openib/configure.m4                     |     5                                         
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/common/ofacm/Makefile.am                    |    76 +                                       
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/common/ofacm/base.h                         |   193 ++++                                    
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/common/ofacm/common_ofacm_base.c            |   678 ++++++++++++++++                        
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/common/ofacm/common_ofacm_empty.c           |    48 +                                       
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/common/ofacm/common_ofacm_empty.h           |    22                                         
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/common/ofacm/common_ofacm_oob.c             |  1672 ++++++++++++++++++++++++++++++++++++++++
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/common/ofacm/common_ofacm_oob.h             |    20                                         
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/common/ofacm/common_ofacm_xoob.c            |  1537 ++++++++++++++++++++++++++++++++++++    
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/common/ofacm/common_ofacm_xoob.h            |    69 +                                       
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/common/ofacm/configure.m4                   |    63 +                                       
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/common/ofacm/configure.params               |    26                                         
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/common/ofacm/connect.h                      |   541 ++++++++++++                            
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/common/ofacm/help-mpi-common-ofacm-base.txt |    41                                         
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/common/ofacm/help-mpi-common-ofacm-oob.txt  |    20                                         
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/common/ofautils/Makefile.am                 |    68 +                                       
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/common/ofautils/common_ofautils.c           |    89 ++                                      
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/common/ofautils/common_ofautils.h           |    26                                         
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/common/ofautils/configure.m4                |    43 +                                       
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/common/ofautils/configure.params            |    26                                         
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/dpm/dpm.h                                   |     4                                         
</span><br>
<span class="quotelev2">&gt;&gt;   26 files changed, 5674 insertions(+), 380 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Diff not shown due to size (240057 bytes).
</span><br>
<span class="quotelev2">&gt;&gt; To see the diff, run the following command:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 	svn diff -r 26706:26707 --no-diff-deleted
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11202.php">Steve Wise: "[OMPI devel] openib btl and cq overflows"</a>
<li><strong>Previous message:</strong> <a href="11200.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<li><strong>In reply to:</strong> <a href="11200.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11205.php">Shamis, Pavel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi:	config mca/btl/ofud mca/btl/openib mca/common/ofacm	mca/common/ofautils mca/dpm"</a>
<li><strong>Reply:</strong> <a href="11205.php">Shamis, Pavel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi:	config mca/btl/ofud mca/btl/openib mca/common/ofacm	mca/common/ofautils mca/dpm"</a>
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
