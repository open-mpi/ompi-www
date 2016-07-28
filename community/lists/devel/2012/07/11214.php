<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  2 18:09:41 2012" -->
<!-- isoreceived="20120702220941" -->
<!-- sent="Mon, 02 Jul 2012 17:09:34 -0500" -->
<!-- isosent="20120702220934" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm" -->
<!-- id="4FF21C1E.60902_at_opengridcomputing.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="00AC23F1-4C66-4E56-8936-9C52C99A1C69_at_cisco.com" -->
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
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-02 18:09:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11215.php">Jeff Squyres: "[OMPI devel] agenda item"</a>
<li><strong>Previous message:</strong> <a href="11213.php">Steve Wise: "Re: [OMPI devel] openib btl and cq overflows"</a>
<li><strong>In reply to:</strong> <a href="11210.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11219.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<li><strong>Reply:</strong> <a href="11219.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/2/2012 4:14 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Steve --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you extend this new stuff to support RDMACM, including the warp-needed connector-sends-first stuff?
</span><br>
<p>I have no time right now.  I could test something perhaps if someone can 
<br>
do the initial pull of the rdma cpc code into the ofacm...
<br>
<p><p><p><span class="quotelev1">&gt; It would be *very* nice to ditch the openib CPC stuff and only have the new ofacm stuff.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm asking Steve because he's effectively the only iWARP vendor left around (and iWARP *requires* RDMACM)...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 2, 2012, at 2:05 PM, Shamis, Pavel wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So is ofacm another replacement for ibcm and rdmacm?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Essentially it extraction of the OpenIB BTL connection manager functionality (minus rdmacm) from the OpenIB BTL. The idea is to allow access to this functionality for other communication components, like collectives and btls. OFACM supports OOB and XRC-OOB connection managers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Pasha
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 7/2/2012 11:20 AM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Nice! Are we moving this to 1.7 as well?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Nathan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Jul 02, 2012 at 11:20:12AM -0400, svn-commit-mailer_at_[hidden]&lt;mailto:svn-commit-mailer_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;    trunk/ompi/config/ompi_check_openfabrics.m4
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/common/ofacm/
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/common/ofacm/Makefile.am
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/common/ofacm/base.h
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/common/ofacm/common_ofacm_base.c
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/common/ofacm/common_ofacm_empty.c
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/common/ofacm/common_ofacm_empty.h
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/common/ofacm/common_ofacm_oob.c
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/common/ofacm/common_ofacm_oob.h
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/common/ofacm/common_ofacm_xoob.c
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/common/ofacm/common_ofacm_xoob.h
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/common/ofacm/configure.m4
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/common/ofacm/configure.params
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/common/ofacm/connect.h
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/common/ofacm/help-mpi-common-ofacm-base.txt
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/common/ofacm/help-mpi-common-ofacm-oob.txt
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/common/ofautils/
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/common/ofautils/Makefile.am
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/common/ofautils/common_ofautils.c
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/common/ofautils/common_ofautils.h
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/common/ofautils/configure.m4
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/common/ofautils/configure.params
</span><br>
<span class="quotelev2">&gt;&gt; Deleted:
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/config/ompi_check_openib.m4
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/config/ompi_check_openfabrics.m4                |   403 +++++++++
</span><br>
<span class="quotelev2">&gt;&gt;    /dev/null                                                  |   329 -------
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/btl/ofud/configure.m4                       |     2
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/btl/openib/Makefile.am                      |     4
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/btl/openib/btl_openib_component.c           |    49 -
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/btl/openib/configure.m4                     |     5
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/common/ofacm/Makefile.am                    |    76 +
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/common/ofacm/base.h                         |   193 ++++
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/common/ofacm/common_ofacm_base.c            |   678 ++++++++++++++++
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/common/ofacm/common_ofacm_empty.c           |    48 +
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/common/ofacm/common_ofacm_empty.h           |    22
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/common/ofacm/common_ofacm_oob.c             |  1672 ++++++++++++++++++++++++++++++++++++++++
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/common/ofacm/common_ofacm_oob.h             |    20
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/common/ofacm/common_ofacm_xoob.c            |  1537 ++++++++++++++++++++++++++++++++++++
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/common/ofacm/common_ofacm_xoob.h            |    69 +
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/common/ofacm/configure.m4                   |    63 +
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/common/ofacm/configure.params               |    26
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/common/ofacm/connect.h                      |   541 ++++++++++++
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/common/ofacm/help-mpi-common-ofacm-base.txt |    41
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/common/ofacm/help-mpi-common-ofacm-oob.txt  |    20
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/common/ofautils/Makefile.am                 |    68 +
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/common/ofautils/common_ofautils.c           |    89 ++
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/common/ofautils/common_ofautils.h           |    26
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/common/ofautils/configure.m4                |    43 +
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/common/ofautils/configure.params            |    26
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/dpm/dpm.h                                   |     4
</span><br>
<span class="quotelev2">&gt;&gt;    26 files changed, 5674 insertions(+), 380 deletions(-)
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
<span class="quotelev2">&gt;&gt;         svn diff -r 26706:26707 --no-diff-deleted
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn_at_[hidden]&lt;mailto:svn_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev2">&gt;&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev2">&gt;&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev2">&gt;&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev2">&gt;&gt; Email terry.dontje_at_[hidden]&lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11215.php">Jeff Squyres: "[OMPI devel] agenda item"</a>
<li><strong>Previous message:</strong> <a href="11213.php">Steve Wise: "Re: [OMPI devel] openib btl and cq overflows"</a>
<li><strong>In reply to:</strong> <a href="11210.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11219.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<li><strong>Reply:</strong> <a href="11219.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
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
