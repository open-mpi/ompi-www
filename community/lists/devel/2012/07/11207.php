<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  2 14:06:35 2012" -->
<!-- isoreceived="20120702180635" -->
<!-- sent="Mon, 2 Jul 2012 14:06:30 -0400" -->
<!-- isosent="20120702180630" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm" -->
<!-- id="5C45C5AF-0F88-43EB-8937-250D43553AB1_at_ornl.gov" -->
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
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-02 14:06:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11208.php">Barrett, Brian W: "[OMPI devel] Open MPI 1.7 development and testing"</a>
<li><strong>Previous message:</strong> <a href="11206.php">Shamis, Pavel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<li><strong>In reply to:</strong> <a href="11200.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11212.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<li><strong>Reply:</strong> <a href="11212.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, it is going to 1.7
<br>
<p>Do you want to move your UD connection manager code there :)
<br>
<p>Pavel (Pasha) Shamis
<br>
<pre>
---
Application Performance Tools Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Jul 2, 2012, at 11:20 AM, Nathan Hjelm wrote:
&gt; Nice! Are we moving this to 1.7 as well?
&gt; 
&gt; -Nathan
&gt; 
&gt; On Mon, Jul 02, 2012 at 11:20:12AM -0400, svn-commit-mailer_at_[hidden] wrote:
&gt;&gt; Author: pasha (Pavel Shamis)
&gt;&gt; Date: 2012-07-02 11:20:12 EDT (Mon, 02 Jul 2012)
&gt;&gt; New Revision: 26707
&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/26707">https://svn.open-mpi.org/trac/ompi/changeset/26707</a>
&gt;&gt; 
&gt;&gt; Log:
&gt;&gt; 1. Adding 2 new components:
&gt;&gt; ofacm - generic connection manager for IB interconnects.
&gt;&gt; ofautils - IB common utilities and compatibility code
&gt;&gt; 
&gt;&gt; 2. Updating OpenIB configure code
&gt;&gt; 
&gt;&gt; - ORNL &amp; Mellanox Teams
&gt;&gt; 
&gt;&gt; Added:
&gt;&gt;   trunk/ompi/config/ompi_check_openfabrics.m4
&gt;&gt;   trunk/ompi/mca/common/ofacm/
&gt;&gt;   trunk/ompi/mca/common/ofacm/Makefile.am
&gt;&gt;   trunk/ompi/mca/common/ofacm/base.h
&gt;&gt;   trunk/ompi/mca/common/ofacm/common_ofacm_base.c
&gt;&gt;   trunk/ompi/mca/common/ofacm/common_ofacm_empty.c
&gt;&gt;   trunk/ompi/mca/common/ofacm/common_ofacm_empty.h
&gt;&gt;   trunk/ompi/mca/common/ofacm/common_ofacm_oob.c
&gt;&gt;   trunk/ompi/mca/common/ofacm/common_ofacm_oob.h
&gt;&gt;   trunk/ompi/mca/common/ofacm/common_ofacm_xoob.c
&gt;&gt;   trunk/ompi/mca/common/ofacm/common_ofacm_xoob.h
&gt;&gt;   trunk/ompi/mca/common/ofacm/configure.m4
&gt;&gt;   trunk/ompi/mca/common/ofacm/configure.params
&gt;&gt;   trunk/ompi/mca/common/ofacm/connect.h
&gt;&gt;   trunk/ompi/mca/common/ofacm/help-mpi-common-ofacm-base.txt
&gt;&gt;   trunk/ompi/mca/common/ofacm/help-mpi-common-ofacm-oob.txt
&gt;&gt;   trunk/ompi/mca/common/ofautils/
&gt;&gt;   trunk/ompi/mca/common/ofautils/Makefile.am
&gt;&gt;   trunk/ompi/mca/common/ofautils/common_ofautils.c
&gt;&gt;   trunk/ompi/mca/common/ofautils/common_ofautils.h
&gt;&gt;   trunk/ompi/mca/common/ofautils/configure.m4
&gt;&gt;   trunk/ompi/mca/common/ofautils/configure.params
&gt;&gt; Deleted:
&gt;&gt;   trunk/ompi/config/ompi_check_openib.m4
&gt;&gt; Text files modified: 
&gt;&gt;   trunk/ompi/config/ompi_check_openfabrics.m4                |   403 +++++++++                               
&gt;&gt;   /dev/null                                                  |   329 -------                                 
&gt;&gt;   trunk/ompi/mca/btl/ofud/configure.m4                       |     2                                         
&gt;&gt;   trunk/ompi/mca/btl/openib/Makefile.am                      |     4                                         
&gt;&gt;   trunk/ompi/mca/btl/openib/btl_openib_component.c           |    49 -                                       
&gt;&gt;   trunk/ompi/mca/btl/openib/configure.m4                     |     5                                         
&gt;&gt;   trunk/ompi/mca/common/ofacm/Makefile.am                    |    76 +                                       
&gt;&gt;   trunk/ompi/mca/common/ofacm/base.h                         |   193 ++++                                    
&gt;&gt;   trunk/ompi/mca/common/ofacm/common_ofacm_base.c            |   678 ++++++++++++++++                        
&gt;&gt;   trunk/ompi/mca/common/ofacm/common_ofacm_empty.c           |    48 +                                       
&gt;&gt;   trunk/ompi/mca/common/ofacm/common_ofacm_empty.h           |    22                                         
&gt;&gt;   trunk/ompi/mca/common/ofacm/common_ofacm_oob.c             |  1672 ++++++++++++++++++++++++++++++++++++++++
&gt;&gt;   trunk/ompi/mca/common/ofacm/common_ofacm_oob.h             |    20                                         
&gt;&gt;   trunk/ompi/mca/common/ofacm/common_ofacm_xoob.c            |  1537 ++++++++++++++++++++++++++++++++++++    
&gt;&gt;   trunk/ompi/mca/common/ofacm/common_ofacm_xoob.h            |    69 +                                       
&gt;&gt;   trunk/ompi/mca/common/ofacm/configure.m4                   |    63 +                                       
&gt;&gt;   trunk/ompi/mca/common/ofacm/configure.params               |    26                                         
&gt;&gt;   trunk/ompi/mca/common/ofacm/connect.h                      |   541 ++++++++++++                            
&gt;&gt;   trunk/ompi/mca/common/ofacm/help-mpi-common-ofacm-base.txt |    41                                         
&gt;&gt;   trunk/ompi/mca/common/ofacm/help-mpi-common-ofacm-oob.txt  |    20                                         
&gt;&gt;   trunk/ompi/mca/common/ofautils/Makefile.am                 |    68 +                                       
&gt;&gt;   trunk/ompi/mca/common/ofautils/common_ofautils.c           |    89 ++                                      
&gt;&gt;   trunk/ompi/mca/common/ofautils/common_ofautils.h           |    26                                         
&gt;&gt;   trunk/ompi/mca/common/ofautils/configure.m4                |    43 +                                       
&gt;&gt;   trunk/ompi/mca/common/ofautils/configure.params            |    26                                         
&gt;&gt;   trunk/ompi/mca/dpm/dpm.h                                   |     4                                         
&gt;&gt;   26 files changed, 5674 insertions(+), 380 deletions(-)
&gt;&gt; 
&gt;&gt; 
&gt;&gt; Diff not shown due to size (240057 bytes).
&gt;&gt; To see the diff, run the following command:
&gt;&gt; 
&gt;&gt; 	svn diff -r 26706:26707 --no-diff-deleted
&gt;&gt; 
&gt;&gt; _______________________________________________
&gt;&gt; svn mailing list
&gt;&gt; svn_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11208.php">Barrett, Brian W: "[OMPI devel] Open MPI 1.7 development and testing"</a>
<li><strong>Previous message:</strong> <a href="11206.php">Shamis, Pavel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<li><strong>In reply to:</strong> <a href="11200.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11212.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<li><strong>Reply:</strong> <a href="11212.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
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
