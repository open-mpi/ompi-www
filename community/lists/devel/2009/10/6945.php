<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22077";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  8 15:46:18 2009" -->
<!-- isoreceived="20091008194618" -->
<!-- sent="Thu, 8 Oct 2009 13:46:12 -0600" -->
<!-- isosent="20091008194612" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22077" -->
<!-- id="10554645-17AB-46EF-86F7-BD895871619D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20091008193958.GA14474_at_sun.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-08 15:46:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6946.php">David Gunter: "[OMPI devel] SC09 gatherings?"</a>
<li><strong>Previous message:</strong> <a href="6944.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22077"</a>
<li><strong>In reply to:</strong> <a href="6944.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22077"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed - thanks!
<br>
<p>On Oct 8, 2009, at 1:39 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; I think we're missing a couple semicolons (see below).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Oct/08/2009 01:53:43PM, rhc_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Author: rhc
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2009-10-08 13:53:43 EDT (Thu, 08 Oct 2009)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 22077
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/22077">https://svn.open-mpi.org/trac/ompi/changeset/22077</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Closes #2048: Fix uninitialized variable in MPI_Comm_spawn_multiple
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Submitted by tdd, reviewed by jsquyres, RM-approved by bbenton
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Includes r22075 and r22076
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Properties modified:
</span><br>
<span class="quotelev2">&gt;&gt;   branches/v1.3/   (props changed)
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;   branches/v1.3/ompi/mpi/c/comm_spawn.c          |     5 +++++
</span><br>
<span class="quotelev2">&gt;&gt;   branches/v1.3/ompi/mpi/c/comm_spawn_multiple.c |     7 ++++++-
</span><br>
<span class="quotelev2">&gt;&gt;   2 files changed, 11 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: branches/v1.3/ompi/mpi/c/comm_spawn.c
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- branches/v1.3/ompi/mpi/c/comm_spawn.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ branches/v1.3/ompi/mpi/c/comm_spawn.c	2009-10-08 13:53:43 EDT  
</span><br>
<span class="quotelev2">&gt;&gt; (Thu, 08 Oct 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -10,6 +10,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;  * Copyright (c) 2004-2005 The Regents of the University of  
</span><br>
<span class="quotelev2">&gt;&gt; California.
</span><br>
<span class="quotelev2">&gt;&gt;  *                         All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt;  * Copyright (c) 2006-2007 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; + * Copyright (c) 2009      Sun Microsystems, Inc.  All rights  
</span><br>
<span class="quotelev2">&gt;&gt; reserved.
</span><br>
<span class="quotelev2">&gt;&gt;  * $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt;&gt;  *
</span><br>
<span class="quotelev2">&gt;&gt;  * Additional copyrights may follow
</span><br>
<span class="quotelev2">&gt;&gt; @@ -106,6 +107,10 @@
</span><br>
<span class="quotelev2">&gt;&gt;             if (OMPI_SUCCESS != (rc = ompi_dpm.open_port  
</span><br>
<span class="quotelev2">&gt;&gt; (port_name, OMPI_RML_TAG_INVALID))) {
</span><br>
<span class="quotelev2">&gt;&gt;                 goto error;
</span><br>
<span class="quotelev2">&gt;&gt;             }
</span><br>
<span class="quotelev2">&gt;&gt; +        } else if (1 &lt; ompi_comm_size(comm)) {
</span><br>
<span class="quotelev2">&gt;&gt; +             /* we do not support non_mpi spawns on comms this  
</span><br>
<span class="quotelev2">&gt;&gt; size */
</span><br>
<span class="quotelev2">&gt;&gt; +             rc = OMPI_ERR_NOT_SUPPORTED
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +             goto error;
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt;         if (OMPI_SUCCESS != (rc = ompi_dpm.spawn (1, &amp;command,  
</span><br>
<span class="quotelev2">&gt;&gt; &amp;argv, &amp;maxprocs,
</span><br>
<span class="quotelev2">&gt;&gt;                                                   &amp;info,  
</span><br>
<span class="quotelev2">&gt;&gt; port_name))) {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: branches/v1.3/ompi/mpi/c/comm_spawn_multiple.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- branches/v1.3/ompi/mpi/c/comm_spawn_multiple.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ branches/v1.3/ompi/mpi/c/comm_spawn_multiple.c	2009-10-08  
</span><br>
<span class="quotelev2">&gt;&gt; 13:53:43 EDT (Thu, 08 Oct 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -10,6 +10,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;  * Copyright (c) 2004-2005 The Regents of the University of  
</span><br>
<span class="quotelev2">&gt;&gt; California.
</span><br>
<span class="quotelev2">&gt;&gt;  *                         All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt;  * Copyright (c) 2006      Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; + * Copyright (c) 2009      Sun Microsystems, Inc.  All rights  
</span><br>
<span class="quotelev2">&gt;&gt; reserved.
</span><br>
<span class="quotelev2">&gt;&gt;  * $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt;&gt;  *
</span><br>
<span class="quotelev2">&gt;&gt;  * Additional copyrights may follow
</span><br>
<span class="quotelev2">&gt;&gt; @@ -45,7 +46,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;     ompi_communicator_t *newcomp=NULL;
</span><br>
<span class="quotelev2">&gt;&gt;     bool send_first=false; /* they are contacting us first */
</span><br>
<span class="quotelev2">&gt;&gt;     char port_name[MPI_MAX_PORT_NAME];
</span><br>
<span class="quotelev2">&gt;&gt; -    bool non_mpi, cumulative = false;
</span><br>
<span class="quotelev2">&gt;&gt; +    bool non_mpi = false, cumulative = false;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     MEMCHECKER(
</span><br>
<span class="quotelev2">&gt;&gt;         memchecker_comm(comm);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -146,6 +147,10 @@
</span><br>
<span class="quotelev2">&gt;&gt;             if (OMPI_SUCCESS != (rc = ompi_dpm.open_port  
</span><br>
<span class="quotelev2">&gt;&gt; (port_name, OMPI_RML_TAG_INVALID))) {
</span><br>
<span class="quotelev2">&gt;&gt;                 goto error;
</span><br>
<span class="quotelev2">&gt;&gt;             }
</span><br>
<span class="quotelev2">&gt;&gt; +        } else if (1 &lt; ompi_comm_size(comm)) {
</span><br>
<span class="quotelev2">&gt;&gt; +             /* we do not support non_mpi spawns on comms this  
</span><br>
<span class="quotelev2">&gt;&gt; size */
</span><br>
<span class="quotelev2">&gt;&gt; +             rc = OMPI_ERR_NOT_SUPPORTED
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +             goto error;
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt;         if (OMPI_SUCCESS != (rc = ompi_dpm.spawn(count,  
</span><br>
<span class="quotelev2">&gt;&gt; array_of_commands,
</span><br>
<span class="quotelev2">&gt;&gt;                                                  array_of_argv,  
</span><br>
<span class="quotelev2">&gt;&gt; array_of_maxprocs,
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6946.php">David Gunter: "[OMPI devel] SC09 gatherings?"</a>
<li><strong>Previous message:</strong> <a href="6944.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22077"</a>
<li><strong>In reply to:</strong> <a href="6944.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22077"</a>
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
