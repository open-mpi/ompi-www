<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22077";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  8 15:40:04 2009" -->
<!-- isoreceived="20091008194004" -->
<!-- sent="Thu, 8 Oct 2009 15:39:58 -0400" -->
<!-- isosent="20091008193958" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22077" -->
<!-- id="20091008193958.GA14474_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="200910081753.n98HrhoE008546_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22077<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-08 15:39:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6945.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22077"</a>
<li><strong>Previous message:</strong> <a href="6943.php">George Bosilca: "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6945.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22077"</a>
<li><strong>Reply:</strong> <a href="6945.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22077"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think we're missing a couple semicolons (see below).
<br>
<p>On Thu, Oct/08/2009 01:53:43PM, rhc_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Author: rhc
</span><br>
<span class="quotelev1">&gt; Date: 2009-10-08 13:53:43 EDT (Thu, 08 Oct 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 22077
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/22077">https://svn.open-mpi.org/trac/ompi/changeset/22077</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Closes #2048: Fix uninitialized variable in MPI_Comm_spawn_multiple
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Submitted by tdd, reviewed by jsquyres, RM-approved by bbenton
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Includes r22075 and r22076
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Properties modified: 
</span><br>
<span class="quotelev1">&gt;    branches/v1.3/   (props changed)
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;    branches/v1.3/ompi/mpi/c/comm_spawn.c          |     5 +++++                                   
</span><br>
<span class="quotelev1">&gt;    branches/v1.3/ompi/mpi/c/comm_spawn_multiple.c |     7 ++++++-                                 
</span><br>
<span class="quotelev1">&gt;    2 files changed, 11 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: branches/v1.3/ompi/mpi/c/comm_spawn.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- branches/v1.3/ompi/mpi/c/comm_spawn.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ branches/v1.3/ompi/mpi/c/comm_spawn.c	2009-10-08 13:53:43 EDT (Thu, 08 Oct 2009)
</span><br>
<span class="quotelev1">&gt; @@ -10,6 +10,7 @@
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev1">&gt;   *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2006-2007 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2009      Sun Microsystems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;   * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;   * 
</span><br>
<span class="quotelev1">&gt;   * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -106,6 +107,10 @@
</span><br>
<span class="quotelev1">&gt;              if (OMPI_SUCCESS != (rc = ompi_dpm.open_port (port_name, OMPI_RML_TAG_INVALID))) {
</span><br>
<span class="quotelev1">&gt;                  goto error;
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt; +        } else if (1 &lt; ompi_comm_size(comm)) {
</span><br>
<span class="quotelev1">&gt; +             /* we do not support non_mpi spawns on comms this size */
</span><br>
<span class="quotelev1">&gt; +             rc = OMPI_ERR_NOT_SUPPORTED
</span><br>
<p>Here.
<br>
<p><span class="quotelev1">&gt; +             goto error;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;          if (OMPI_SUCCESS != (rc = ompi_dpm.spawn (1, &amp;command, &amp;argv, &amp;maxprocs, 
</span><br>
<span class="quotelev1">&gt;                                                    &amp;info, port_name))) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: branches/v1.3/ompi/mpi/c/comm_spawn_multiple.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- branches/v1.3/ompi/mpi/c/comm_spawn_multiple.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ branches/v1.3/ompi/mpi/c/comm_spawn_multiple.c	2009-10-08 13:53:43 EDT (Thu, 08 Oct 2009)
</span><br>
<span class="quotelev1">&gt; @@ -10,6 +10,7 @@
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev1">&gt;   *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2006      Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2009      Sun Microsystems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;   * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;   * 
</span><br>
<span class="quotelev1">&gt;   * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -45,7 +46,7 @@
</span><br>
<span class="quotelev1">&gt;      ompi_communicator_t *newcomp=NULL;
</span><br>
<span class="quotelev1">&gt;      bool send_first=false; /* they are contacting us first */
</span><br>
<span class="quotelev1">&gt;      char port_name[MPI_MAX_PORT_NAME];
</span><br>
<span class="quotelev1">&gt; -    bool non_mpi, cumulative = false;
</span><br>
<span class="quotelev1">&gt; +    bool non_mpi = false, cumulative = false;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      MEMCHECKER(
</span><br>
<span class="quotelev1">&gt;          memchecker_comm(comm);
</span><br>
<span class="quotelev1">&gt; @@ -146,6 +147,10 @@
</span><br>
<span class="quotelev1">&gt;              if (OMPI_SUCCESS != (rc = ompi_dpm.open_port (port_name, OMPI_RML_TAG_INVALID))) {
</span><br>
<span class="quotelev1">&gt;                  goto error;
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt; +        } else if (1 &lt; ompi_comm_size(comm)) {
</span><br>
<span class="quotelev1">&gt; +             /* we do not support non_mpi spawns on comms this size */
</span><br>
<span class="quotelev1">&gt; +             rc = OMPI_ERR_NOT_SUPPORTED
</span><br>
<p>And here.
<br>
<p>-Ethan
<br>
<p><span class="quotelev1">&gt; +             goto error;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;          if (OMPI_SUCCESS != (rc = ompi_dpm.spawn(count, array_of_commands,
</span><br>
<span class="quotelev1">&gt;                                                   array_of_argv, array_of_maxprocs,
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6945.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22077"</a>
<li><strong>Previous message:</strong> <a href="6943.php">George Bosilca: "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6945.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22077"</a>
<li><strong>Reply:</strong> <a href="6945.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22077"</a>
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
