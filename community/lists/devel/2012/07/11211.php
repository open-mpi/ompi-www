<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi:	config mca/btl/ofud mca/btl/openib mca/common/ofacm	mca/common/ofautils mca/dpm";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  2 17:25:05 2012" -->
<!-- isoreceived="20120702212505" -->
<!-- sent="Mon, 2 Jul 2012 17:24:55 -0400" -->
<!-- isosent="20120702212455" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi:	config mca/btl/ofud mca/btl/openib mca/common/ofacm	mca/common/ofautils mca/dpm" -->
<!-- id="BE982011-D442-48C4-ABC7-0F11DE6A0C35_at_ornl.gov" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi:	config mca/btl/ofud mca/btl/openib mca/common/ofacm	mca/common/ofautils mca/dpm<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-02 17:24:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11212.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<li><strong>Previous message:</strong> <a href="11210.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<li><strong>In reply to:</strong> <a href="11210.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11214.php">Steve Wise: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yevgeny,
<br>
<p>ROCEE transport relays on RDMACM as well. I believe, Mellanox should be interested to support it.
<br>
<p>Pavel (Pasha) Shamis
<br>
<pre>
---
Application Performance Tools Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Jul 2, 2012, at 5:14 PM, Jeff Squyres wrote:
&gt; Steve --
&gt; 
&gt; Can you extend this new stuff to support RDMACM, including the warp-needed connector-sends-first stuff?  It would be *very* nice to ditch the openib CPC stuff and only have the new ofacm stuff.
&gt; 
&gt; I'm asking Steve because he's effectively the only iWARP vendor left around (and iWARP *requires* RDMACM)...
&gt; 
&gt; 
&gt; On Jul 2, 2012, at 2:05 PM, Shamis, Pavel wrote:
&gt; 
&gt;&gt; 
&gt;&gt; So is ofacm another replacement for ibcm and rdmacm?
&gt;&gt; 
&gt;&gt; Essentially it extraction of the OpenIB BTL connection manager functionality (minus rdmacm) from the OpenIB BTL. The idea is to allow access to this functionality for other communication components, like collectives and btls. OFACM supports OOB and XRC-OOB connection managers.
&gt;&gt; 
&gt;&gt; - Pasha
&gt;&gt; 
&gt;&gt; 
&gt;&gt; --td
&gt;&gt; 
&gt;&gt; On 7/2/2012 11:20 AM, Nathan Hjelm wrote:
&gt;&gt; 
&gt;&gt; Nice! Are we moving this to 1.7 as well?
&gt;&gt; 
&gt;&gt; -Nathan
&gt;&gt; 
&gt;&gt; On Mon, Jul 02, 2012 at 11:20:12AM -0400, svn-commit-mailer_at_[hidden]&lt;mailto:svn-commit-mailer_at_[hidden]&gt; wrote:
&gt;&gt; 
&gt;&gt; 
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
&gt;&gt;  trunk/ompi/config/ompi_check_openfabrics.m4
&gt;&gt;  trunk/ompi/mca/common/ofacm/
&gt;&gt;  trunk/ompi/mca/common/ofacm/Makefile.am
&gt;&gt;  trunk/ompi/mca/common/ofacm/base.h
&gt;&gt;  trunk/ompi/mca/common/ofacm/common_ofacm_base.c
&gt;&gt;  trunk/ompi/mca/common/ofacm/common_ofacm_empty.c
&gt;&gt;  trunk/ompi/mca/common/ofacm/common_ofacm_empty.h
&gt;&gt;  trunk/ompi/mca/common/ofacm/common_ofacm_oob.c
&gt;&gt;  trunk/ompi/mca/common/ofacm/common_ofacm_oob.h
&gt;&gt;  trunk/ompi/mca/common/ofacm/common_ofacm_xoob.c
&gt;&gt;  trunk/ompi/mca/common/ofacm/common_ofacm_xoob.h
&gt;&gt;  trunk/ompi/mca/common/ofacm/configure.m4
&gt;&gt;  trunk/ompi/mca/common/ofacm/configure.params
&gt;&gt;  trunk/ompi/mca/common/ofacm/connect.h
&gt;&gt;  trunk/ompi/mca/common/ofacm/help-mpi-common-ofacm-base.txt
&gt;&gt;  trunk/ompi/mca/common/ofacm/help-mpi-common-ofacm-oob.txt
&gt;&gt;  trunk/ompi/mca/common/ofautils/
&gt;&gt;  trunk/ompi/mca/common/ofautils/Makefile.am
&gt;&gt;  trunk/ompi/mca/common/ofautils/common_ofautils.c
&gt;&gt;  trunk/ompi/mca/common/ofautils/common_ofautils.h
&gt;&gt;  trunk/ompi/mca/common/ofautils/configure.m4
&gt;&gt;  trunk/ompi/mca/common/ofautils/configure.params
&gt;&gt; Deleted:
&gt;&gt;  trunk/ompi/config/ompi_check_openib.m4
&gt;&gt; Text files modified:
&gt;&gt;  trunk/ompi/config/ompi_check_openfabrics.m4                |   403 +++++++++
&gt;&gt;  /dev/null                                                  |   329 -------
&gt;&gt;  trunk/ompi/mca/btl/ofud/configure.m4                       |     2
&gt;&gt;  trunk/ompi/mca/btl/openib/Makefile.am                      |     4
&gt;&gt;  trunk/ompi/mca/btl/openib/btl_openib_component.c           |    49 -
&gt;&gt;  trunk/ompi/mca/btl/openib/configure.m4                     |     5
&gt;&gt;  trunk/ompi/mca/common/ofacm/Makefile.am                    |    76 +
&gt;&gt;  trunk/ompi/mca/common/ofacm/base.h                         |   193 ++++
&gt;&gt;  trunk/ompi/mca/common/ofacm/common_ofacm_base.c            |   678 ++++++++++++++++
&gt;&gt;  trunk/ompi/mca/common/ofacm/common_ofacm_empty.c           |    48 +
&gt;&gt;  trunk/ompi/mca/common/ofacm/common_ofacm_empty.h           |    22
&gt;&gt;  trunk/ompi/mca/common/ofacm/common_ofacm_oob.c             |  1672 ++++++++++++++++++++++++++++++++++++++++
&gt;&gt;  trunk/ompi/mca/common/ofacm/common_ofacm_oob.h             |    20
&gt;&gt;  trunk/ompi/mca/common/ofacm/common_ofacm_xoob.c            |  1537 ++++++++++++++++++++++++++++++++++++
&gt;&gt;  trunk/ompi/mca/common/ofacm/common_ofacm_xoob.h            |    69 +
&gt;&gt;  trunk/ompi/mca/common/ofacm/configure.m4                   |    63 +
&gt;&gt;  trunk/ompi/mca/common/ofacm/configure.params               |    26
&gt;&gt;  trunk/ompi/mca/common/ofacm/connect.h                      |   541 ++++++++++++
&gt;&gt;  trunk/ompi/mca/common/ofacm/help-mpi-common-ofacm-base.txt |    41
&gt;&gt;  trunk/ompi/mca/common/ofacm/help-mpi-common-ofacm-oob.txt  |    20
&gt;&gt;  trunk/ompi/mca/common/ofautils/Makefile.am                 |    68 +
&gt;&gt;  trunk/ompi/mca/common/ofautils/common_ofautils.c           |    89 ++
&gt;&gt;  trunk/ompi/mca/common/ofautils/common_ofautils.h           |    26
&gt;&gt;  trunk/ompi/mca/common/ofautils/configure.m4                |    43 +
&gt;&gt;  trunk/ompi/mca/common/ofautils/configure.params            |    26
&gt;&gt;  trunk/ompi/mca/dpm/dpm.h                                   |     4
&gt;&gt;  26 files changed, 5674 insertions(+), 380 deletions(-)
&gt;&gt; 
&gt;&gt; 
&gt;&gt; Diff not shown due to size (240057 bytes).
&gt;&gt; To see the diff, run the following command:
&gt;&gt; 
&gt;&gt;       svn diff -r 26706:26707 --no-diff-deleted
&gt;&gt; 
&gt;&gt; _______________________________________________
&gt;&gt; svn mailing list
&gt;&gt; svn_at_[hidden]&lt;mailto:svn_at_[hidden]&gt;
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
&gt;&gt; 
&gt;&gt; 
&gt;&gt; _______________________________________________
&gt;&gt; devel mailing list
&gt;&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt; 
&gt;&gt; 
&gt;&gt; --
&gt;&gt; Terry D. Dontje | Principal Software Engineer
&gt;&gt; Developer Tools Engineering | +1.781.442.2631
&gt;&gt; Oracle - Performance Technologies
&gt;&gt; 95 Network Drive, Burlington, MA 01803
&gt;&gt; Email terry.dontje_at_[hidden]&lt;mailto:terry.dontje_at_[hidden]&gt;
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; _______________________________________________
&gt;&gt; devel mailing list
&gt;&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt; 
&gt;&gt; 
&gt;&gt; _______________________________________________
&gt;&gt; devel mailing list
&gt;&gt; devel_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt; 
&gt; 
&gt; -- 
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; 
&gt; 
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11212.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<li><strong>Previous message:</strong> <a href="11210.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<li><strong>In reply to:</strong> <a href="11210.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11214.php">Steve Wise: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
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
