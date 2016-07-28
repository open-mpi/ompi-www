<?
$subject_val = "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r20938";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  6 06:49:43 2009" -->
<!-- isoreceived="20090406104943" -->
<!-- sent="Mon, 6 Apr 2009 06:49:32 -0400" -->
<!-- isosent="20090406104932" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r20938" -->
<!-- id="96C5CC86-4711-4215-A30F-FA040B41CA70_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200904051658.n35GwWtt026634_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r20938<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-06 06:49:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5795.php">Lenny Verkhovsky: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>Previous message:</strong> <a href="5793.php">Terry Dontje: "Re: [OMPI devel] access to tests"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Taking a *very cursory look* at the 1.3 make dist failures, it looks  
<br>
like this commit may have broken it...?
<br>
<p><p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: April 5, 2009 12:58:32 PM EDT
</span><br>
<span class="quotelev1">&gt; To: &lt;svn-full_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI svn-full] svn:open-mpi r20938
</span><br>
<span class="quotelev1">&gt; Reply-To: &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Author: rhc
</span><br>
<span class="quotelev1">&gt; Date: 2009-04-05 12:58:29 EDT (Sun, 05 Apr 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 20938
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/20938">https://svn.open-mpi.org/trac/ompi/changeset/20938</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Closes #1865: Bringover r20915 manpage changes to 1.3 branch
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Submitted by tdd, no review required, RM-approved by bbenton
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; r20915:
</span><br>
<span class="quotelev1">&gt;         Contains manpage changes to allow catman to produce  
</span><br>
<span class="quotelev1">&gt; unmangled windex file
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    branches/v1.3/ompi/mca/crcp/ompi_crcp.7in            |     2 +-
</span><br>
<span class="quotelev1">&gt;    branches/v1.3/ompi/tools/ompi-server/ompi-server.1in |     8 +++ 
</span><br>
<span class="quotelev1">&gt; +----
</span><br>
<span class="quotelev1">&gt;    branches/v1.3/ompi/tools/ortetools/Makefile.am       |     3 ++-
</span><br>
<span class="quotelev1">&gt;    branches/v1.3/opal/mca/crs/opal_crs.7in              |     3 ++-
</span><br>
<span class="quotelev1">&gt;    branches/v1.3/orte/mca/filem/orte_filem.7in          |     4 ++--
</span><br>
<span class="quotelev1">&gt;    branches/v1.3/orte/mca/snapc/orte_snapc.7in          |     4 ++--
</span><br>
<span class="quotelev1">&gt;    branches/v1.3/orte/tools/orte-iof/orte-iof.1in       |     4 ++--
</span><br>
<span class="quotelev1">&gt;    branches/v1.3/orte/tools/orte-ps/orte-ps.1in         |     4 ++--
</span><br>
<span class="quotelev1">&gt;    branches/v1.3/orte/tools/orterun/orterun.1in         |     2 +-
</span><br>
<span class="quotelev1">&gt;    branches/v1.3/orte/util/hostfile/orte_hosts.7in      |     6 +++---
</span><br>
<span class="quotelev1">&gt;    10 files changed, 21 insertions(+), 19 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: branches/v1.3/ompi/mca/crcp/ompi_crcp.7in
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- branches/v1.3/ompi/mca/crcp/ompi_crcp.7in   (original)
</span><br>
<span class="quotelev1">&gt; +++ branches/v1.3/ompi/mca/crcp/ompi_crcp.7in   2009-04-05 12:58:29  
</span><br>
<span class="quotelev1">&gt; EDT (Sun, 05 Apr 2009)
</span><br>
<span class="quotelev1">&gt; @@ -2,7 +2,7 @@
</span><br>
<span class="quotelev1">&gt;  .\&quot; Man page for OMPI's CRCP Functionality
</span><br>
<span class="quotelev1">&gt;  .\&quot;
</span><br>
<span class="quotelev1">&gt;  .\&quot; .TH name     section center-footer   left-footer  center-header
</span><br>
<span class="quotelev1">&gt; -.TH     OMPI_CRCP  7 &quot;#OMPI_DATE#&quot; &quot;#PACKAGE_VERSION#&quot;  
</span><br>
<span class="quotelev1">&gt; &quot;#PACKAGE_NAME#&quot;
</span><br>
<span class="quotelev1">&gt; +.TH OMPI_CRCP 7 &quot;#OMPI_DATE#&quot; &quot;#PACKAGE_VERSION#&quot; &quot;#PACKAGE_NAME#&quot;
</span><br>
<span class="quotelev1">&gt;  .\&quot; **************************
</span><br>
<span class="quotelev1">&gt;  .\&quot;    Name Section
</span><br>
<span class="quotelev1">&gt;  .\&quot; **************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: branches/v1.3/ompi/tools/ompi-server/ompi-server.1in
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- branches/v1.3/ompi/tools/ompi-server/ompi-server.1in         
</span><br>
<span class="quotelev1">&gt; (original)
</span><br>
<span class="quotelev1">&gt; +++ branches/v1.3/ompi/tools/ompi-server/ompi-server.1in         
</span><br>
<span class="quotelev1">&gt; 2009-04-05 12:58:29 EDT (Sun, 05 Apr 2009)
</span><br>
<span class="quotelev1">&gt; @@ -1,12 +1,12 @@
</span><br>
<span class="quotelev1">&gt;  .\&quot;
</span><br>
<span class="quotelev1">&gt; -.\&quot; Copyright (c) 2007 Los Alamos National Security, LLC
</span><br>
<span class="quotelev1">&gt; -.\&quot;                    All rights reserved.
</span><br>
<span class="quotelev1">&gt; -.\&quot; Copyright (c) 2008 Sun Microsystems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; +.\&quot; Copyright (c) 2007      Los Alamos National Security, LLC
</span><br>
<span class="quotelev1">&gt; +.\&quot;                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; +.\&quot; Copyright (c) 2008-2009 Sun Microsystems, Inc.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt;  .\&quot;
</span><br>
<span class="quotelev1">&gt;  .\&quot; Man page for OMPI's ompi-server command
</span><br>
<span class="quotelev1">&gt;  .\&quot;
</span><br>
<span class="quotelev1">&gt;  .\&quot; .TH name     section center-footer   left-footer  center-header
</span><br>
<span class="quotelev1">&gt; -.TH     OMPI-SERVER  1 &quot;#OMPI_DATE#&quot; &quot;#PACKAGE_VERSION#&quot;  
</span><br>
<span class="quotelev1">&gt; &quot;#PACKAGE_NAME#&quot;
</span><br>
<span class="quotelev1">&gt; +.TH OMPI-SERVER 1 &quot;#OMPI_DATE#&quot; &quot;#PACKAGE_VERSION#&quot; &quot;#PACKAGE_NAME#&quot;
</span><br>
<span class="quotelev1">&gt;  .\&quot; **************************
</span><br>
<span class="quotelev1">&gt;  .\&quot;    Name Section
</span><br>
<span class="quotelev1">&gt;  .\&quot; **************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: branches/v1.3/ompi/tools/ortetools/Makefile.am
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- branches/v1.3/ompi/tools/ortetools/Makefile.am      (original)
</span><br>
<span class="quotelev1">&gt; +++ branches/v1.3/ompi/tools/ortetools/Makefile.am      2009-04-05  
</span><br>
<span class="quotelev1">&gt; 12:58:29 EDT (Sun, 05 Apr 2009)
</span><br>
<span class="quotelev1">&gt; @@ -10,6 +10,7 @@
</span><br>
<span class="quotelev1">&gt;  # Copyright (c) 2004-2005 The Regents of the University of  
</span><br>
<span class="quotelev1">&gt; California.
</span><br>
<span class="quotelev1">&gt;  #                         All rights reserved.
</span><br>
<span class="quotelev1">&gt;  # Copyright (c) 2008      Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2009      Sun Microsystems, Inc.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt;  # $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt;  # Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -17,7 +18,7 @@
</span><br>
<span class="quotelev1">&gt;  # $HEADER$
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -man_pages = mpirun.1 mpiexec.1 ompi-ps.1 ompi-clean.1
</span><br>
<span class="quotelev1">&gt; +man_pages = mpirun.1 mpiexec.1 ompi-iof.1 ompi-ps.1 ompi-top.1 ompi- 
</span><br>
<span class="quotelev1">&gt; clean.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  if OMPI_INSTALL_BINARIES
</span><br>
<span class="quotelev1">&gt;  if !ORTE_DISABLE_FULL_SUPPORT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: branches/v1.3/opal/mca/crs/opal_crs.7in
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- branches/v1.3/opal/mca/crs/opal_crs.7in     (original)
</span><br>
<span class="quotelev1">&gt; +++ branches/v1.3/opal/mca/crs/opal_crs.7in     2009-04-05 12:58:29  
</span><br>
<span class="quotelev1">&gt; EDT (Sun, 05 Apr 2009)
</span><br>
<span class="quotelev1">&gt; @@ -2,11 +2,12 @@
</span><br>
<span class="quotelev1">&gt;  .\&quot; Copyright (c) 2004-2007 The Trustees of Indiana University and  
</span><br>
<span class="quotelev1">&gt; Indiana
</span><br>
<span class="quotelev1">&gt;  .\&quot;                         University Research and Technology
</span><br>
<span class="quotelev1">&gt;  .\&quot;                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; +.\&quot; Copyright (c) 2009      Sun Microsystems, Inc.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt;  .\&quot;
</span><br>
<span class="quotelev1">&gt;  .\&quot; Man page for OPAL's CRS Functionality
</span><br>
<span class="quotelev1">&gt;  .\&quot;
</span><br>
<span class="quotelev1">&gt;  .\&quot; .TH name     section center-footer   left-footer  center-header
</span><br>
<span class="quotelev1">&gt; -.TH     OPAL_CRS  7 &quot;#OMPI_DATE#&quot; &quot;#PACKAGE_VERSION#&quot;  
</span><br>
<span class="quotelev1">&gt; &quot;#PACKAGE_NAME#&quot;
</span><br>
<span class="quotelev1">&gt; +.TH OPAL_CRS 7 &quot;#OMPI_DATE#&quot; &quot;#PACKAGE_VERSION#&quot; &quot;#PACKAGE_NAME#&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  .\&quot; **************************
</span><br>
<span class="quotelev1">&gt;  .\&quot;    Name Section
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: branches/v1.3/orte/mca/filem/orte_filem.7in
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- branches/v1.3/orte/mca/filem/orte_filem.7in (original)
</span><br>
<span class="quotelev1">&gt; +++ branches/v1.3/orte/mca/filem/orte_filem.7in 2009-04-05 12:58:29  
</span><br>
<span class="quotelev1">&gt; EDT (Sun, 05 Apr 2009)
</span><br>
<span class="quotelev1">&gt; @@ -2,12 +2,12 @@
</span><br>
<span class="quotelev1">&gt;  .\&quot; Copyright (c) 2004-2007 The Trustees of Indiana University and  
</span><br>
<span class="quotelev1">&gt; Indiana
</span><br>
<span class="quotelev1">&gt;  .\&quot;                         University Research and Technology
</span><br>
<span class="quotelev1">&gt;  .\&quot;                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; -.\&quot; Copyright (c) 2008      Sun Microsystems, Inc.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt; +.\&quot; Copyright (c) 2008-2009 Sun Microsystems, Inc.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt;  .\&quot;
</span><br>
<span class="quotelev1">&gt;  .\&quot; Man page for ORTE's FileM Functionality
</span><br>
<span class="quotelev1">&gt;  .\&quot;
</span><br>
<span class="quotelev1">&gt;  .\&quot; .TH name     section center-footer   left-footer  center-header
</span><br>
<span class="quotelev1">&gt; -.TH     ORTE_FILEM  7 &quot;#OMPI_DATE#&quot; &quot;#PACKAGE_VERSION#&quot;  
</span><br>
<span class="quotelev1">&gt; &quot;#PACKAGE_NAME#&quot;
</span><br>
<span class="quotelev1">&gt; +.TH ORTE_FILEM 7 &quot;#OMPI_DATE#&quot; &quot;#PACKAGE_VERSION#&quot; &quot;#PACKAGE_NAME#&quot;
</span><br>
<span class="quotelev1">&gt;  .\&quot; **************************
</span><br>
<span class="quotelev1">&gt;  .\&quot;    Name Section
</span><br>
<span class="quotelev1">&gt;  .\&quot; **************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: branches/v1.3/orte/mca/snapc/orte_snapc.7in
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- branches/v1.3/orte/mca/snapc/orte_snapc.7in (original)
</span><br>
<span class="quotelev1">&gt; +++ branches/v1.3/orte/mca/snapc/orte_snapc.7in 2009-04-05 12:58:29  
</span><br>
<span class="quotelev1">&gt; EDT (Sun, 05 Apr 2009)
</span><br>
<span class="quotelev1">&gt; @@ -2,12 +2,12 @@
</span><br>
<span class="quotelev1">&gt;  .\&quot; Copyright (c) 2004-2007 The Trustees of Indiana University and  
</span><br>
<span class="quotelev1">&gt; Indiana
</span><br>
<span class="quotelev1">&gt;  .\&quot;                         University Research and Technology
</span><br>
<span class="quotelev1">&gt;  .\&quot;                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; -.\&quot; Copyright (c) 2008      Sun Microsystems, Inc.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt; +.\&quot; Copyright (c) 2008-2009 Sun Microsystems, Inc.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt;  .\&quot;
</span><br>
<span class="quotelev1">&gt;  .\&quot; Man page for ORTE's SnapC Functionality
</span><br>
<span class="quotelev1">&gt;  .\&quot;
</span><br>
<span class="quotelev1">&gt;  .\&quot; .TH name     section center-footer   left-footer  center-header
</span><br>
<span class="quotelev1">&gt; -.TH     ORTE_SNAPC  7 &quot;#OMPI_DATE#&quot; &quot;#PACKAGE_VERSION#&quot;  
</span><br>
<span class="quotelev1">&gt; &quot;#PACKAGE_NAME#&quot;
</span><br>
<span class="quotelev1">&gt; +.TH ORTE_SNAPC 7 &quot;#OMPI_DATE#&quot; &quot;#PACKAGE_VERSION#&quot; &quot;#PACKAGE_NAME#&quot;
</span><br>
<span class="quotelev1">&gt;  .\&quot; **************************
</span><br>
<span class="quotelev1">&gt;  .\&quot;    Name Section
</span><br>
<span class="quotelev1">&gt;  .\&quot; **************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: branches/v1.3/orte/tools/orte-iof/orte-iof.1in
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- branches/v1.3/orte/tools/orte-iof/orte-iof.1in      (original)
</span><br>
<span class="quotelev1">&gt; +++ branches/v1.3/orte/tools/orte-iof/orte-iof.1in      2009-04-05  
</span><br>
<span class="quotelev1">&gt; 12:58:29 EDT (Sun, 05 Apr 2009)
</span><br>
<span class="quotelev1">&gt; @@ -2,12 +2,12 @@
</span><br>
<span class="quotelev1">&gt;  .\&quot; Copyright (c) 2004-2007 The Trustees of Indiana University and  
</span><br>
<span class="quotelev1">&gt; Indiana
</span><br>
<span class="quotelev1">&gt;  .\&quot;                         University Research and Technology
</span><br>
<span class="quotelev1">&gt;  .\&quot;                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; -.\&quot; Copyright (c) 2008      Sun Microsystems, Inc.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt; +.\&quot; Copyright (c) 2008-2009 Sun Microsystems, Inc.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt;  .\&quot;
</span><br>
<span class="quotelev1">&gt;  .\&quot; Man page for OMPI's ompi-iof command
</span><br>
<span class="quotelev1">&gt;  .\&quot;
</span><br>
<span class="quotelev1">&gt;  .\&quot; .TH name     section center-footer   left-footer  center-header
</span><br>
<span class="quotelev1">&gt; -.TH     OMPI-IOF  1 &quot;#OMPI_DATE#&quot; &quot;#PACKAGE_VERSION#&quot;  
</span><br>
<span class="quotelev1">&gt; &quot;#PACKAGE_NAME#&quot;
</span><br>
<span class="quotelev1">&gt; +.TH OMPI-IOF 1 &quot;#OMPI_DATE#&quot; &quot;#PACKAGE_VERSION#&quot; &quot;#PACKAGE_NAME#&quot;
</span><br>
<span class="quotelev1">&gt;  .\&quot; **************************
</span><br>
<span class="quotelev1">&gt;  .\&quot;    Name Section
</span><br>
<span class="quotelev1">&gt;  .\&quot; **************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: branches/v1.3/orte/tools/orte-ps/orte-ps.1in
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- branches/v1.3/orte/tools/orte-ps/orte-ps.1in        (original)
</span><br>
<span class="quotelev1">&gt; +++ branches/v1.3/orte/tools/orte-ps/orte-ps.1in        2009-04-05  
</span><br>
<span class="quotelev1">&gt; 12:58:29 EDT (Sun, 05 Apr 2009)
</span><br>
<span class="quotelev1">&gt; @@ -2,12 +2,12 @@
</span><br>
<span class="quotelev1">&gt;  .\&quot; Copyright (c) 2004-2007 The Trustees of Indiana University and  
</span><br>
<span class="quotelev1">&gt; Indiana
</span><br>
<span class="quotelev1">&gt;  .\&quot;                         University Research and Technology
</span><br>
<span class="quotelev1">&gt;  .\&quot;                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; -.\&quot; Copyright (c) 2008      Sun Microsystems, Inc.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt; +.\&quot; Copyright (c) 2008-2009 Sun Microsystems, Inc.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt;  .\&quot;
</span><br>
<span class="quotelev1">&gt;  .\&quot; Man page for OMPI's ompi-ps command
</span><br>
<span class="quotelev1">&gt;  .\&quot;
</span><br>
<span class="quotelev1">&gt;  .\&quot; .TH name     section center-footer   left-footer  center-header
</span><br>
<span class="quotelev1">&gt; -.TH     OMPI-PS  1 &quot;#OMPI_DATE#&quot; &quot;#PACKAGE_VERSION#&quot; &quot;#PACKAGE_NAME#&quot;
</span><br>
<span class="quotelev1">&gt; +.TH OMPI-PS 1 &quot;#OMPI_DATE#&quot; &quot;#PACKAGE_VERSION#&quot; &quot;#PACKAGE_NAME#&quot;
</span><br>
<span class="quotelev1">&gt;  .\&quot; **************************
</span><br>
<span class="quotelev1">&gt;  .\&quot;    Name Section
</span><br>
<span class="quotelev1">&gt;  .\&quot; **************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: branches/v1.3/orte/tools/orterun/orterun.1in
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- branches/v1.3/orte/tools/orterun/orterun.1in        (original)
</span><br>
<span class="quotelev1">&gt; +++ branches/v1.3/orte/tools/orterun/orterun.1in        2009-04-05  
</span><br>
<span class="quotelev1">&gt; 12:58:29 EDT (Sun, 05 Apr 2009)
</span><br>
<span class="quotelev1">&gt; @@ -4,7 +4,7 @@
</span><br>
<span class="quotelev1">&gt;  .\&quot; Man page for ORTE's orterun command
</span><br>
<span class="quotelev1">&gt;  .\&quot;
</span><br>
<span class="quotelev1">&gt;  .\&quot; .TH name     section center-footer   left-footer  center-header
</span><br>
<span class="quotelev1">&gt; -.TH     MPIRUN  1 &quot;#OMPI_DATE#&quot; &quot;#PACKAGE_VERSION#&quot; &quot;#PACKAGE_NAME#&quot;
</span><br>
<span class="quotelev1">&gt; +.TH MPIRUN 1 &quot;#OMPI_DATE#&quot; &quot;#PACKAGE_VERSION#&quot; &quot;#PACKAGE_NAME#&quot;
</span><br>
<span class="quotelev1">&gt;  .\&quot; **************************
</span><br>
<span class="quotelev1">&gt;  .\&quot;    Name Section
</span><br>
<span class="quotelev1">&gt;  .\&quot; **************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: branches/v1.3/orte/util/hostfile/orte_hosts.7in
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- branches/v1.3/orte/util/hostfile/orte_hosts.7in     (original)
</span><br>
<span class="quotelev1">&gt; +++ branches/v1.3/orte/util/hostfile/orte_hosts.7in     2009-04-05  
</span><br>
<span class="quotelev1">&gt; 12:58:29 EDT (Sun, 05 Apr 2009)
</span><br>
<span class="quotelev1">&gt; @@ -1,11 +1,11 @@
</span><br>
<span class="quotelev1">&gt;  .\&quot;
</span><br>
<span class="quotelev1">&gt; -.\&quot; Copyright (c) 2008 Los Alamos National Security, LLC  All  
</span><br>
<span class="quotelev1">&gt; rights reserved.
</span><br>
<span class="quotelev1">&gt; -.\&quot; Copyright (c) 2008  Sun Microsystems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; +.\&quot; Copyright (c) 2008      Los Alamos National Security, LLC  All  
</span><br>
<span class="quotelev1">&gt; rights reserved.
</span><br>
<span class="quotelev1">&gt; +.\&quot; Copyright (c) 2008-2009  Sun Microsystems, Inc.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt;  .\&quot;
</span><br>
<span class="quotelev1">&gt;  .\&quot; Man page for ORTE's Hostfile functionality
</span><br>
<span class="quotelev1">&gt;  .\&quot;
</span><br>
<span class="quotelev1">&gt;  .\&quot; .TH name     section center-footer   left-footer  center-header
</span><br>
<span class="quotelev1">&gt; -.TH     ORTE_HOSTS 7 &quot;#OMPI_DATE#&quot; &quot;#PACKAGE_VERSION#&quot;  
</span><br>
<span class="quotelev1">&gt; &quot;#PACKAGE_NAME#&quot;
</span><br>
<span class="quotelev1">&gt; +.TH ORTE_HOSTS 7 &quot;#OMPI_DATE#&quot; &quot;#PACKAGE_VERSION#&quot; &quot;#PACKAGE_NAME#&quot;
</span><br>
<span class="quotelev1">&gt;  .\&quot; **************************
</span><br>
<span class="quotelev1">&gt;  .\&quot;    Name Section
</span><br>
<span class="quotelev1">&gt;  .\&quot; **************************
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5794/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5795.php">Lenny Verkhovsky: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>Previous message:</strong> <a href="5793.php">Terry Dontje: "Re: [OMPI devel] access to tests"</a>
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
