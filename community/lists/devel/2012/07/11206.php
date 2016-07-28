<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  2 14:05:04 2012" -->
<!-- isoreceived="20120702180504" -->
<!-- sent="Mon, 2 Jul 2012 14:05:00 -0400" -->
<!-- isosent="20120702180500" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm" -->
<!-- id="E8B0EC4B-2ABE-46CB-B7DB-7DE95AD19155_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FF1BE9D.8040803_at_oracle.com" -->
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
<strong>Date:</strong> 2012-07-02 14:05:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11207.php">Shamis, Pavel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<li><strong>Previous message:</strong> <a href="11205.php">Shamis, Pavel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi:	config mca/btl/ofud mca/btl/openib mca/common/ofacm	mca/common/ofautils mca/dpm"</a>
<li><strong>In reply to:</strong> <a href="11203.php">TERRY DONTJE: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11210.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<li><strong>Reply:</strong> <a href="11210.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So is ofacm another replacement for ibcm and rdmacm?
<br>
<p>Essentially it extraction of the OpenIB BTL connection manager functionality (minus rdmacm) from the OpenIB BTL. The idea is to allow access to this functionality for other communication components, like collectives and btls. OFACM supports OOB and XRC-OOB connection managers.
<br>
<p>- Pasha
<br>
<p><p>--td
<br>
<p>On 7/2/2012 11:20 AM, Nathan Hjelm wrote:
<br>
<p>Nice! Are we moving this to 1.7 as well?
<br>
<p>-Nathan
<br>
<p>On Mon, Jul 02, 2012 at 11:20:12AM -0400, svn-commit-mailer_at_[hidden]&lt;mailto:svn-commit-mailer_at_[hidden]&gt; wrote:
<br>
<p><p>Author: pasha (Pavel Shamis)
<br>
Date: 2012-07-02 11:20:12 EDT (Mon, 02 Jul 2012)
<br>
New Revision: 26707
<br>
URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/26707">https://svn.open-mpi.org/trac/ompi/changeset/26707</a>
<br>
<p>Log:
<br>
1. Adding 2 new components:
<br>
ofacm - generic connection manager for IB interconnects.
<br>
ofautils - IB common utilities and compatibility code
<br>
<p>2. Updating OpenIB configure code
<br>
<p>- ORNL &amp; Mellanox Teams
<br>
<p>Added:
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/config/ompi_check_openfabrics.m4
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/mca/common/ofacm/
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/mca/common/ofacm/Makefile.am
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/mca/common/ofacm/base.h
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/mca/common/ofacm/common_ofacm_base.c
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/mca/common/ofacm/common_ofacm_empty.c
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/mca/common/ofacm/common_ofacm_empty.h
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/mca/common/ofacm/common_ofacm_oob.c
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/mca/common/ofacm/common_ofacm_oob.h
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/mca/common/ofacm/common_ofacm_xoob.c
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/mca/common/ofacm/common_ofacm_xoob.h
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/mca/common/ofacm/configure.m4
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/mca/common/ofacm/configure.params
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/mca/common/ofacm/connect.h
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/mca/common/ofacm/help-mpi-common-ofacm-base.txt
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/mca/common/ofacm/help-mpi-common-ofacm-oob.txt
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/mca/common/ofautils/
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/mca/common/ofautils/Makefile.am
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/mca/common/ofautils/common_ofautils.c
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/mca/common/ofautils/common_ofautils.h
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/mca/common/ofautils/configure.m4
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/mca/common/ofautils/configure.params
<br>
Deleted:
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/config/ompi_check_openib.m4
<br>
Text files modified:
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/config/ompi_check_openfabrics.m4                |   403 +++++++++
<br>
&nbsp;&nbsp;&nbsp;/dev/null                                                  |   329 -------
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/mca/btl/ofud/configure.m4                       |     2
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/mca/btl/openib/Makefile.am                      |     4
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/mca/btl/openib/btl_openib_component.c           |    49 -
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/mca/btl/openib/configure.m4                     |     5
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/mca/common/ofacm/Makefile.am                    |    76 +
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/mca/common/ofacm/base.h                         |   193 ++++
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/mca/common/ofacm/common_ofacm_base.c            |   678 ++++++++++++++++
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/mca/common/ofacm/common_ofacm_empty.c           |    48 +
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/mca/common/ofacm/common_ofacm_empty.h           |    22
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/mca/common/ofacm/common_ofacm_oob.c             |  1672 ++++++++++++++++++++++++++++++++++++++++
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/mca/common/ofacm/common_ofacm_oob.h             |    20
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/mca/common/ofacm/common_ofacm_xoob.c            |  1537 ++++++++++++++++++++++++++++++++++++
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/mca/common/ofacm/common_ofacm_xoob.h            |    69 +
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/mca/common/ofacm/configure.m4                   |    63 +
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/mca/common/ofacm/configure.params               |    26
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/mca/common/ofacm/connect.h                      |   541 ++++++++++++
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/mca/common/ofacm/help-mpi-common-ofacm-base.txt |    41
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/mca/common/ofacm/help-mpi-common-ofacm-oob.txt  |    20
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/mca/common/ofautils/Makefile.am                 |    68 +
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/mca/common/ofautils/common_ofautils.c           |    89 ++
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/mca/common/ofautils/common_ofautils.h           |    26
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/mca/common/ofautils/configure.m4                |    43 +
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/mca/common/ofautils/configure.params            |    26
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/mca/dpm/dpm.h                                   |     4
<br>
&nbsp;&nbsp;&nbsp;26 files changed, 5674 insertions(+), 380 deletions(-)
<br>
<p><p>Diff not shown due to size (240057 bytes).
<br>
To see the diff, run the following command:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;svn diff -r 26706:26707 --no-diff-deleted
<br>
<p>_______________________________________________
<br>
svn mailing list
<br>
svn_at_[hidden]&lt;mailto:svn_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
<br>
<p><p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p><p><pre>
--
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle - Performance Technologies
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden]&lt;mailto:terry.dontje_at_[hidden]&gt;
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11207.php">Shamis, Pavel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<li><strong>Previous message:</strong> <a href="11205.php">Shamis, Pavel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi:	config mca/btl/ofud mca/btl/openib mca/common/ofacm	mca/common/ofautils mca/dpm"</a>
<li><strong>In reply to:</strong> <a href="11203.php">TERRY DONTJE: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11210.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<li><strong>Reply:</strong> <a href="11210.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
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
