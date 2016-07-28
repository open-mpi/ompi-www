<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17584";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 25 09:59:31 2008" -->
<!-- isoreceived="20080225145931" -->
<!-- sent="Mon, 25 Feb 2008 16:59:22 +0200" -->
<!-- isosent="20080225145922" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lennyb_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17584" -->
<!-- id="39C75744D164D948A170E9792AF8E7CAE14C2A_at_exil.voltaire.com" -->
<!-- charset="windows-1255" -->
<!-- inreplyto="1E92B16B-9B3D-48C5-95AA-4AF502EAFCD9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17584<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lennyb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-25 09:59:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3298.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17584"</a>
<li><strong>Previous message:</strong> <a href="3296.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17584"</a>
<li><strong>In reply to:</strong> <a href="3296.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17584"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3298.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17584"</a>
<li><strong>Reply:</strong> <a href="3298.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17584"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres [mailto:jsquyres_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: &#225; 25 &#244;&#225;&#248;&#229;&#224;&#248; 2008 16:52
</span><br>
<span class="quotelev1">&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Cc: Lenny Verkhovsky
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI svn-full] svn:open-mpi r17584
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Lenny --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this the patch that Sharon was working on? I literally just
</span><br>
<span class="quotelev1">&gt; created a new branch for bringing in plpa v1.1.  Should I do it on
</span><br>
<span class="quotelev1">&gt; your rank_file branch instead?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>No need to.
<br>
Yes, it's Sharon's patch,
<br>
<p>I made a new branch for Rank Mapping RMAPS component that is a copy of Ralph's rhc-step2b branch with a new PLPA1.1
<br>
I also had to patch the files due to new API of PLPA with Sharon's patch.
<br>
<p>Are you planning to merge new PLPA1.1 with the trunk ?
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 25, 2008, at 9:46 AM, lennyve_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Author: lennyve
</span><br>
<span class="quotelev2">&gt; &gt; Date: 2008-02-25 09:46:28 EST (Mon, 25 Feb 2008)
</span><br>
<span class="quotelev2">&gt; &gt; New Revision: 17584
</span><br>
<span class="quotelev2">&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/17584">https://svn.open-mpi.org/trac/ompi/changeset/17584</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Log:
</span><br>
<span class="quotelev2">&gt; &gt; Added patched files due to PLPA.1.1 API
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Added:
</span><br>
<span class="quotelev2">&gt; &gt;   tmp-public/rank_file/opal/mca/paffinity/linux/Makefile.am
</span><br>
<span class="quotelev2">&gt; &gt;   tmp-public/rank_file/opal/mca/paffinity/linux/configure.m4
</span><br>
<span class="quotelev2">&gt; &gt;   tmp-public/rank_file/opal/mca/paffinity/linux/configure.params
</span><br>
<span class="quotelev2">&gt; &gt;   tmp-public/rank_file/opal/mca/paffinity/linux/paffinity_linux.h
</span><br>
<span class="quotelev2">&gt; &gt;   tmp-public/rank_file/opal/mca/paffinity/linux/
</span><br>
<span class="quotelev2">&gt; &gt; paffinity_linux_component.c
</span><br>
<span class="quotelev2">&gt; &gt;   tmp-public/rank_file/opal/mca/paffinity/linux/
</span><br>
<span class="quotelev2">&gt; &gt; paffinity_linux_module.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Added: tmp-public/rank_file/opal/mca/paffinity/linux/Makefile.am
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; ======================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- (empty file)
</span><br>
<span class="quotelev2">&gt; &gt; +++ tmp-public/rank_file/opal/mca/paffinity/linux/Makefile.am
</span><br>
<span class="quotelev2">&gt; &gt; 2008-02-25 09:46:28 EST (Mon, 25 Feb 2008)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -0,0 +1,53 @@
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +# Copyright (c) 2004-2005 The Trustees of Indiana University and
</span><br>
<span class="quotelev2">&gt; &gt; Indiana
</span><br>
<span class="quotelev2">&gt; &gt; +#                         University Research and Technology
</span><br>
<span class="quotelev2">&gt; &gt; +#                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; +# Copyright (c) 2004-2005 The University of Tennessee and The
</span><br>
<span class="quotelev2">&gt; &gt; University
</span><br>
<span class="quotelev2">&gt; &gt; +#                         of Tennessee Research Foundation.  All
</span><br>
<span class="quotelev2">&gt; &gt; rights
</span><br>
<span class="quotelev2">&gt; &gt; +#                         reserved.
</span><br>
<span class="quotelev2">&gt; &gt; +# Copyright (c) 2004-2005 High Performance Computing Center
</span><br>
<span class="quotelev2">&gt; &gt; Stuttgart,
</span><br>
<span class="quotelev2">&gt; &gt; +#                         University of Stuttgart.  All rights
</span><br>
<span class="quotelev2">&gt; &gt; reserved.
</span><br>
<span class="quotelev2">&gt; &gt; +# Copyright (c) 2004-2005 The Regents of the University of
</span><br>
<span class="quotelev2">&gt; &gt; California.
</span><br>
<span class="quotelev2">&gt; &gt; +#                         All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; +# Copyright (c) 2007      Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; +# $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +# Additional copyrights may follow
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +# $HEADER$
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +SUBDIRS = plpa
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +# To find plpa_bottom.h
</span><br>
<span class="quotelev2">&gt; &gt; +AM_CPPFLAGS = -I$(top_srcdir)/opal/mca/paffinity/linux/plpa/src/
</span><br>
<span class="quotelev2">&gt; &gt; libplpa
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +sources = \
</span><br>
<span class="quotelev2">&gt; &gt; +        paffinity_linux.h \
</span><br>
<span class="quotelev2">&gt; &gt; +        paffinity_linux_component.c \
</span><br>
<span class="quotelev2">&gt; &gt; +        paffinity_linux_module.c
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +# Make the output library in this directory, and name it either
</span><br>
<span class="quotelev2">&gt; &gt; +# mca_&lt;type&gt;_&lt;name&gt;.la (for DSO builds) or libmca_&lt;type&gt;_&lt;name&gt;.la
</span><br>
<span class="quotelev2">&gt; &gt; +# (for static builds).
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +if OMPI_BUILD_paffinity_linux_DSO
</span><br>
<span class="quotelev2">&gt; &gt; +component_noinst =
</span><br>
<span class="quotelev2">&gt; &gt; +component_install = mca_paffinity_linux.la
</span><br>
<span class="quotelev2">&gt; &gt; +else
</span><br>
<span class="quotelev2">&gt; &gt; +component_noinst = libmca_paffinity_linux.la
</span><br>
<span class="quotelev2">&gt; &gt; +component_install =
</span><br>
<span class="quotelev2">&gt; &gt; +endif
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +mcacomponentdir = $(pkglibdir)
</span><br>
<span class="quotelev2">&gt; &gt; +mcacomponent_LTLIBRARIES = $(component_install)
</span><br>
<span class="quotelev2">&gt; &gt; +mca_paffinity_linux_la_SOURCES = $(sources)
</span><br>
<span class="quotelev2">&gt; &gt; +mca_paffinity_linux_la_LDFLAGS = -module -avoid-version
</span><br>
<span class="quotelev2">&gt; &gt; +mca_paffinity_linux_la_LIBADD = \
</span><br>
<span class="quotelev2">&gt; &gt; +        $(top_ompi_builddir)/opal/mca/paffinity/linux/plpa/src/
</span><br>
<span class="quotelev2">&gt; &gt; libplpa/libplpa_included.la
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +noinst_LTLIBRARIES = $(component_noinst)
</span><br>
<span class="quotelev2">&gt; &gt; +libmca_paffinity_linux_la_SOURCES =$(sources)
</span><br>
<span class="quotelev2">&gt; &gt; +libmca_paffinity_linux_la_LDFLAGS = -module -avoid-version
</span><br>
<span class="quotelev2">&gt; &gt; +libmca_paffinity_linux_la_LIBADD = \
</span><br>
<span class="quotelev2">&gt; &gt; +        $(top_ompi_builddir)/opal/mca/paffinity/linux/plpa/src/
</span><br>
<span class="quotelev2">&gt; &gt; libplpa/libplpa_included.la
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Added: tmp-public/rank_file/opal/mca/paffinity/linux/configure.m4
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; ======================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- (empty file)
</span><br>
<span class="quotelev2">&gt; &gt; +++ tmp-public/rank_file/opal/mca/paffinity/linux/configure.m4
</span><br>
<span class="quotelev2">&gt; &gt; 2008-02-25 09:46:28 EST (Mon, 25 Feb 2008)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -0,0 +1,34 @@
</span><br>
<span class="quotelev2">&gt; &gt; +# -*- shell-script -*-
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +# Copyright (c) 2004-2005 The Trustees of Indiana University and
</span><br>
<span class="quotelev2">&gt; &gt; Indiana
</span><br>
<span class="quotelev2">&gt; &gt; +#                         University Research and Technology
</span><br>
<span class="quotelev2">&gt; &gt; +#                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; +# Copyright (c) 2004-2005 The University of Tennessee and The
</span><br>
<span class="quotelev2">&gt; &gt; University
</span><br>
<span class="quotelev2">&gt; &gt; +#                         of Tennessee Research Foundation.  All
</span><br>
<span class="quotelev2">&gt; &gt; rights
</span><br>
<span class="quotelev2">&gt; &gt; +#                         reserved.
</span><br>
<span class="quotelev2">&gt; &gt; +# Copyright (c) 2004-2005 High Performance Computing Center
</span><br>
<span class="quotelev2">&gt; &gt; Stuttgart,
</span><br>
<span class="quotelev2">&gt; &gt; +#                         University of Stuttgart.  All rights
</span><br>
<span class="quotelev2">&gt; &gt; reserved.
</span><br>
<span class="quotelev2">&gt; &gt; +# Copyright (c) 2004-2005 The Regents of the University of
</span><br>
<span class="quotelev2">&gt; &gt; California.
</span><br>
<span class="quotelev2">&gt; &gt; +#                         All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; +# Copyright (c) 2007      Cisco Systems, Inc. All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +# $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +# Additional copyrights may follow
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +# $HEADER$
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +# MCA_paffinity_linux_CONFIG([action-if-found], [action-if-not-
</span><br>
<span class="quotelev2">&gt; &gt; found])
</span><br>
<span class="quotelev2">&gt; &gt; +# -----------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; +m4_include(opal/mca/paffinity/linux/plpa/config/plpa.m4)
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +AC_DEFUN([MCA_paffinity_linux_POST_CONFIG],[
</span><br>
<span class="quotelev2">&gt; &gt; +    PLPA_DO_AM_CONDITIONALS
</span><br>
<span class="quotelev2">&gt; &gt; +])dnl
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +AC_DEFUN([MCA_paffinity_linux_CONFIG],[
</span><br>
<span class="quotelev2">&gt; &gt; +    PLPA_SET_SYMBOL_PREFIX([opal_paffinity_linux_plpa_])
</span><br>
<span class="quotelev2">&gt; &gt; +    PLPA_INCLUDED([opal/mca/paffinity/linux/plpa])
</span><br>
<span class="quotelev2">&gt; &gt; +    PLPA_INIT([$1],[$2])
</span><br>
<span class="quotelev2">&gt; &gt; +])dnl
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Added: tmp-public/rank_file/opal/mca/paffinity/linux/configure.params
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; ======================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- (empty file)
</span><br>
<span class="quotelev2">&gt; &gt; +++ tmp-public/rank_file/opal/mca/paffinity/linux/configure.params
</span><br>
<span class="quotelev2">&gt; &gt; 2008-02-25 09:46:28 EST (Mon, 25 Feb 2008)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -0,0 +1,22 @@
</span><br>
<span class="quotelev2">&gt; &gt; +# -*- shell-script -*-
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +# Copyright (c) 2004-2005 The Trustees of Indiana University and
</span><br>
<span class="quotelev2">&gt; &gt; Indiana
</span><br>
<span class="quotelev2">&gt; &gt; +#                         University Research and Technology
</span><br>
<span class="quotelev2">&gt; &gt; +#                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; +# Copyright (c) 2004-2005 The University of Tennessee and The
</span><br>
<span class="quotelev2">&gt; &gt; University
</span><br>
<span class="quotelev2">&gt; &gt; +#                         of Tennessee Research Foundation.  All
</span><br>
<span class="quotelev2">&gt; &gt; rights
</span><br>
<span class="quotelev2">&gt; &gt; +#                         reserved.
</span><br>
<span class="quotelev2">&gt; &gt; +# Copyright (c) 2004-2005 High Performance Computing Center
</span><br>
<span class="quotelev2">&gt; &gt; Stuttgart,
</span><br>
<span class="quotelev2">&gt; &gt; +#                         University of Stuttgart.  All rights
</span><br>
<span class="quotelev2">&gt; &gt; reserved.
</span><br>
<span class="quotelev2">&gt; &gt; +# Copyright (c) 2004-2005 The Regents of the University of
</span><br>
<span class="quotelev2">&gt; &gt; California.
</span><br>
<span class="quotelev2">&gt; &gt; +#                         All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; +# Copyright (c) 2007      Los Alamos National Security, LLC.  All
</span><br>
<span class="quotelev2">&gt; &gt; rights
</span><br>
<span class="quotelev2">&gt; &gt; +#                         reserved.
</span><br>
<span class="quotelev2">&gt; &gt; +# $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +# Additional copyrights may follow
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +# $HEADER$
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +PARAM_CONFIG_FILES=&quot;Makefile&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Added: tmp-public/rank_file/opal/mca/paffinity/linux/paffinity_linux.h
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; ======================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- (empty file)
</span><br>
<span class="quotelev2">&gt; &gt; +++ tmp-public/rank_file/opal/mca/paffinity/linux/paffinity_linux.h
</span><br>
<span class="quotelev2">&gt; &gt; 2008-02-25 09:46:28 EST (Mon, 25 Feb 2008)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -0,0 +1,69 @@
</span><br>
<span class="quotelev2">&gt; &gt; +/*
</span><br>
<span class="quotelev2">&gt; &gt; + * Copyright (c) 2004-2005 The Trustees of Indiana University and
</span><br>
<span class="quotelev2">&gt; &gt; Indiana
</span><br>
<span class="quotelev2">&gt; &gt; + *                         University Research and Technology
</span><br>
<span class="quotelev2">&gt; &gt; + *                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; + * Copyright (c) 2004-2005 The University of Tennessee and The
</span><br>
<span class="quotelev2">&gt; &gt; University
</span><br>
<span class="quotelev2">&gt; &gt; + *                         of Tennessee Research Foundation.  All
</span><br>
<span class="quotelev2">&gt; &gt; rights
</span><br>
<span class="quotelev2">&gt; &gt; + *                         reserved.
</span><br>
<span class="quotelev2">&gt; &gt; + * Copyright (c) 2004-2005 High Performance Computing Center
</span><br>
<span class="quotelev2">&gt; &gt; Stuttgart,
</span><br>
<span class="quotelev2">&gt; &gt; + *                         University of Stuttgart.  All rights
</span><br>
<span class="quotelev2">&gt; &gt; reserved.
</span><br>
<span class="quotelev2">&gt; &gt; + * Copyright (c) 2004-2005 The Regents of the University of
</span><br>
<span class="quotelev2">&gt; &gt; California.
</span><br>
<span class="quotelev2">&gt; &gt; + *                         All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; + * Copyright (c) 2006-2007 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; + *
</span><br>
<span class="quotelev2">&gt; &gt; + * $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt; &gt; + *
</span><br>
<span class="quotelev2">&gt; &gt; + * Additional copyrights may follow
</span><br>
<span class="quotelev2">&gt; &gt; + *
</span><br>
<span class="quotelev2">&gt; &gt; + * $HEADER$
</span><br>
<span class="quotelev2">&gt; &gt; + */
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +/**
</span><br>
<span class="quotelev2">&gt; &gt; + * @file
</span><br>
<span class="quotelev2">&gt; &gt; + *
</span><br>
<span class="quotelev2">&gt; &gt; + * Processor affinity for Linux.
</span><br>
<span class="quotelev2">&gt; &gt; + *
</span><br>
<span class="quotelev2">&gt; &gt; + * Linux sucks.  There are at least 3 different ways that
</span><br>
<span class="quotelev2">&gt; &gt; + * sched_setaffinity is implemented.
</span><br>
<span class="quotelev2">&gt; &gt; + *
</span><br>
<span class="quotelev2">&gt; &gt; + * Fortunately we have an independent project called Portable Linux
</span><br>
<span class="quotelev2">&gt; &gt; + * Processor Affinity (PLPA) which allows us to do processor affinity
</span><br>
<span class="quotelev2">&gt; &gt; + * without knowing which flavor of afffinity is installed on the
</span><br>
<span class="quotelev2">&gt; &gt; + * system a priori - PLPA does a few probes behind the scenes and
</span><br>
<span class="quotelev2">&gt; &gt; + * utilizes the correct syntax to the correct system call to set
</span><br>
<span class="quotelev2">&gt; &gt; + * or get processor affinity for us.
</span><br>
<span class="quotelev2">&gt; &gt; + *
</span><br>
<span class="quotelev2">&gt; &gt; + */
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +#ifndef MCA_PAFFINITY_LINUX_EXPORT_H
</span><br>
<span class="quotelev2">&gt; &gt; +#define MCA_PAFFINITY_LINUX_EXPORT_H
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +#include &quot;opal_config.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +#include &quot;opal/mca/mca.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +#include &quot;opal/mca/paffinity/paffinity.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +#include &quot;opal/mca/paffinity/linux/plpa/src/libplpa/plpa.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +#if defined(c_plusplus) || defined(__cplusplus)
</span><br>
<span class="quotelev2">&gt; &gt; +extern &quot;C&quot; {
</span><br>
<span class="quotelev2">&gt; &gt; +#endif
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    /**
</span><br>
<span class="quotelev2">&gt; &gt; +     * Globally exported variable
</span><br>
<span class="quotelev2">&gt; &gt; +     */
</span><br>
<span class="quotelev2">&gt; &gt; +    OPAL_DECLSPEC extern const opal_paffinity_base_component_1_1_0_t
</span><br>
<span class="quotelev2">&gt; &gt; +        mca_paffinity_linux_component;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    /**
</span><br>
<span class="quotelev2">&gt; &gt; +     * paffinity query API function
</span><br>
<span class="quotelev2">&gt; &gt; +     */
</span><br>
<span class="quotelev2">&gt; &gt; +    const opal_paffinity_base_module_1_1_0_t *
</span><br>
<span class="quotelev2">&gt; &gt; +        opal_paffinity_linux_component_query(int *query);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +#if defined(c_plusplus) || defined(__cplusplus)
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +#endif
</span><br>
<span class="quotelev2">&gt; &gt; +#endif /* MCA_PAFFINITY_LINUX_EXPORT_H */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Added: tmp-public/rank_file/opal/mca/paffinity/linux/
</span><br>
<span class="quotelev2">&gt; &gt; paffinity_linux_component.c
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; ======================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- (empty file)
</span><br>
<span class="quotelev2">&gt; &gt; +++ tmp-public/rank_file/opal/mca/paffinity/linux/
</span><br>
<span class="quotelev2">&gt; &gt; paffinity_linux_component.c	2008-02-25 09:46:28 EST (Mon, 25 Feb 2008)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -0,0 +1,91 @@
</span><br>
<span class="quotelev2">&gt; &gt; +/*
</span><br>
<span class="quotelev2">&gt; &gt; + * Copyright (c) 2004-2007 The Trustees of Indiana University and
</span><br>
<span class="quotelev2">&gt; &gt; Indiana
</span><br>
<span class="quotelev2">&gt; &gt; + *                         University Research and Technology
</span><br>
<span class="quotelev2">&gt; &gt; + *                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; + * Copyright (c) 2004-2005 The University of Tennessee and The
</span><br>
<span class="quotelev2">&gt; &gt; University
</span><br>
<span class="quotelev2">&gt; &gt; + *                         of Tennessee Research Foundation.  All
</span><br>
<span class="quotelev2">&gt; &gt; rights
</span><br>
<span class="quotelev2">&gt; &gt; + *                         reserved.
</span><br>
<span class="quotelev2">&gt; &gt; + * Copyright (c) 2004-2005 High Performance Computing Center
</span><br>
<span class="quotelev2">&gt; &gt; Stuttgart,
</span><br>
<span class="quotelev2">&gt; &gt; + *                         University of Stuttgart.  All rights
</span><br>
<span class="quotelev2">&gt; &gt; reserved.
</span><br>
<span class="quotelev2">&gt; &gt; + * Copyright (c) 2004-2005 The Regents of the University of
</span><br>
<span class="quotelev2">&gt; &gt; California.
</span><br>
<span class="quotelev2">&gt; &gt; + *                         All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; + * Copyright (c) 2007      Cisco, Inc. All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; + * $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt; &gt; + *
</span><br>
<span class="quotelev2">&gt; &gt; + * Additional copyrights may follow
</span><br>
<span class="quotelev2">&gt; &gt; + *
</span><br>
<span class="quotelev2">&gt; &gt; + * $HEADER$
</span><br>
<span class="quotelev2">&gt; &gt; + *
</span><br>
<span class="quotelev2">&gt; &gt; + * These symbols are in a file by themselves to provide nice linker
</span><br>
<span class="quotelev2">&gt; &gt; + * semantics.  Since linkers generally pull in symbols by object
</span><br>
<span class="quotelev2">&gt; &gt; + * files, keeping these symbols as the only symbols in this file
</span><br>
<span class="quotelev2">&gt; &gt; + * prevents utility programs such as &quot;ompi_info&quot; from having to
</span><br>
<span class="quotelev2">&gt; &gt; import
</span><br>
<span class="quotelev2">&gt; &gt; + * entire components just to query their version and parameters.
</span><br>
<span class="quotelev2">&gt; &gt; + */
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +#include &quot;opal_config.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +#include &quot;opal/constants.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +#include &quot;opal/mca/paffinity/paffinity.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +#include &quot;paffinity_linux.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +/*
</span><br>
<span class="quotelev2">&gt; &gt; + * Public string showing the paffinity ompi_linux component version
</span><br>
<span class="quotelev2">&gt; &gt; number
</span><br>
<span class="quotelev2">&gt; &gt; + */
</span><br>
<span class="quotelev2">&gt; &gt; +const char *opal_paffinity_linux_component_version_string =
</span><br>
<span class="quotelev2">&gt; &gt; +    &quot;OPAL linux paffinity MCA component version &quot; OPAL_VERSION;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +/*
</span><br>
<span class="quotelev2">&gt; &gt; + * Local function
</span><br>
<span class="quotelev2">&gt; &gt; + */
</span><br>
<span class="quotelev2">&gt; &gt; +static int linux_open(void);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +/*
</span><br>
<span class="quotelev2">&gt; &gt; + * Instantiate the public struct with all of our public information
</span><br>
<span class="quotelev2">&gt; &gt; + * and pointers to our public functions in it
</span><br>
<span class="quotelev2">&gt; &gt; + */
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +const opal_paffinity_base_component_1_1_0_t
</span><br>
<span class="quotelev2">&gt; &gt; mca_paffinity_linux_component = {
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    /* First, the mca_component_t struct containing meta information
</span><br>
<span class="quotelev2">&gt; &gt; +       about the component itself */
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    {
</span><br>
<span class="quotelev2">&gt; &gt; +        /* Indicate that we are a paffinity v1.1.0 component (which
</span><br>
<span class="quotelev2">&gt; &gt; also
</span><br>
<span class="quotelev2">&gt; &gt; +           implies a specific MCA version) */
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +        OPAL_PAFFINITY_BASE_VERSION_1_1_0,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +        /* Component name and version */
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +        &quot;linux&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; +        OPAL_MAJOR_VERSION,
</span><br>
<span class="quotelev2">&gt; &gt; +        OPAL_MINOR_VERSION,
</span><br>
<span class="quotelev2">&gt; &gt; +        OPAL_RELEASE_VERSION,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +        /* Component open and close functions */
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +        linux_open,
</span><br>
<span class="quotelev2">&gt; &gt; +        NULL
</span><br>
<span class="quotelev2">&gt; &gt; +    },
</span><br>
<span class="quotelev2">&gt; &gt; +    {
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +        /* The component is checkpoint ready */
</span><br>
<span class="quotelev2">&gt; &gt; +        MCA_BASE_METADATA_PARAM_CHECKPOINT
</span><br>
<span class="quotelev2">&gt; &gt; +    },
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    /* Query function */
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    opal_paffinity_linux_component_query
</span><br>
<span class="quotelev2">&gt; &gt; +};
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +static int linux_open(void)
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; mca_base_param_reg_int
</span><br>
<span class="quotelev2">&gt; &gt; (&amp;mca_paffinity_linux_component.paffinityc_version,
</span><br>
<span class="quotelev2">&gt; &gt; +                           &quot;priority&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; +                           &quot;Priority of the linux paffinity
</span><br>
<span class="quotelev2">&gt; &gt; component&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; +                           false, false, 10, NULL);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    return OPAL_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Added: tmp-public/rank_file/opal/mca/paffinity/linux/
</span><br>
<span class="quotelev2">&gt; &gt; paffinity_linux_module.c
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; ======================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- (empty file)
</span><br>
<span class="quotelev2">&gt; &gt; +++ tmp-public/rank_file/opal/mca/paffinity/linux/
</span><br>
<span class="quotelev2">&gt; &gt; paffinity_linux_module.c	2008-02-25 09:46:28 EST (Mon, 25 Feb 2008)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -0,0 +1,185 @@
</span><br>
<span class="quotelev2">&gt; &gt; +/*
</span><br>
<span class="quotelev2">&gt; &gt; + * Copyright (c) 2004-2005 The Trustees of Indiana University and
</span><br>
<span class="quotelev2">&gt; &gt; Indiana
</span><br>
<span class="quotelev2">&gt; &gt; + *                         University Research and Technology
</span><br>
<span class="quotelev2">&gt; &gt; + *                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; + * Copyright (c) 2004-2005 The University of Tennessee and The
</span><br>
<span class="quotelev2">&gt; &gt; University
</span><br>
<span class="quotelev2">&gt; &gt; + *                         of Tennessee Research Foundation.  All
</span><br>
<span class="quotelev2">&gt; &gt; rights
</span><br>
<span class="quotelev2">&gt; &gt; + *                         reserved.
</span><br>
<span class="quotelev2">&gt; &gt; + * Copyright (c) 2004-2005 High Performance Computing Center
</span><br>
<span class="quotelev2">&gt; &gt; Stuttgart,
</span><br>
<span class="quotelev2">&gt; &gt; + *                         University of Stuttgart.  All rights
</span><br>
<span class="quotelev2">&gt; &gt; reserved.
</span><br>
<span class="quotelev2">&gt; &gt; + * Copyright (c) 2004-2005 The Regents of the University of
</span><br>
<span class="quotelev2">&gt; &gt; California.
</span><br>
<span class="quotelev2">&gt; &gt; + *                         All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; + * Copyright (c) 2006-2007 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; + *
</span><br>
<span class="quotelev2">&gt; &gt; + * $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt; &gt; + *
</span><br>
<span class="quotelev2">&gt; &gt; + * Additional copyrights may follow
</span><br>
<span class="quotelev2">&gt; &gt; + *
</span><br>
<span class="quotelev2">&gt; &gt; + * $HEADER$
</span><br>
<span class="quotelev2">&gt; &gt; + */
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +#include &quot;opal_config.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +/* This component will only be compiled on Linux, where we are
</span><br>
<span class="quotelev2">&gt; &gt; +   guaranteed to have &lt;unistd.h&gt; and friends */
</span><br>
<span class="quotelev2">&gt; &gt; +#include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +#include &lt;unistd.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; +#include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; +#include &lt;string.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; +#include &lt;errno.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +#include &quot;opal/constants.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +#include &quot;opal/mca/base/mca_base_param.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +#include &quot;opal/mca/paffinity/paffinity.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +#include &quot;opal/mca/paffinity/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +#include &quot;paffinity_linux.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +#include &quot;plpa/src/libplpa/plpa.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +/*
</span><br>
<span class="quotelev2">&gt; &gt; + * Local functions
</span><br>
<span class="quotelev2">&gt; &gt; + */
</span><br>
<span class="quotelev2">&gt; &gt; +static int linux_module_init(void);
</span><br>
<span class="quotelev2">&gt; &gt; +static int linux_module_set(opal_paffinity_base_cpu_set_t cpumask);
</span><br>
<span class="quotelev2">&gt; &gt; +static int linux_module_get(opal_paffinity_base_cpu_set_t *cpumask);
</span><br>
<span class="quotelev2">&gt; &gt; +static int linux_module_map_to_processor_id(int socket, int core,
</span><br>
<span class="quotelev2">&gt; &gt; int *processor_id);
</span><br>
<span class="quotelev2">&gt; &gt; +static int linux_module_map_to_socket_core(int processor_id, int
</span><br>
<span class="quotelev2">&gt; &gt; *socket, int *core);
</span><br>
<span class="quotelev2">&gt; &gt; +static int linux_module_get_processor_info(int *num_processors, int
</span><br>
<span class="quotelev2">&gt; &gt; *max_processor_id);
</span><br>
<span class="quotelev2">&gt; &gt; +static int linux_module_get_socket_info(int *num_sockets, int
</span><br>
<span class="quotelev2">&gt; &gt; *max_socket_num);
</span><br>
<span class="quotelev2">&gt; &gt; +static int linux_module_get_core_info(int socket, int *num_cores,
</span><br>
<span class="quotelev2">&gt; &gt; int *max_core_num);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +/*
</span><br>
<span class="quotelev2">&gt; &gt; + * Linux paffinity module
</span><br>
<span class="quotelev2">&gt; &gt; + */
</span><br>
<span class="quotelev2">&gt; &gt; +static const opal_paffinity_base_module_1_1_0_t module = {
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    /* Initialization function */
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    linux_module_init,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    /* Module function pointers */
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    linux_module_set,
</span><br>
<span class="quotelev2">&gt; &gt; +    linux_module_get,
</span><br>
<span class="quotelev2">&gt; &gt; +    linux_module_map_to_processor_id,
</span><br>
<span class="quotelev2">&gt; &gt; +    linux_module_map_to_socket_core,
</span><br>
<span class="quotelev2">&gt; &gt; +    linux_module_get_processor_info,
</span><br>
<span class="quotelev2">&gt; &gt; +    linux_module_get_socket_info,
</span><br>
<span class="quotelev2">&gt; &gt; +    linux_module_get_core_info,
</span><br>
<span class="quotelev2">&gt; &gt; +    NULL
</span><br>
<span class="quotelev2">&gt; &gt; +};
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +const opal_paffinity_base_module_1_1_0_t *
</span><br>
<span class="quotelev2">&gt; &gt; +opal_paffinity_linux_component_query(int *query)
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +    int param;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    param = mca_base_param_find(&quot;paffinity&quot;, &quot;linux&quot;, &quot;priority&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    mca_base_param_lookup_int(param, query);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    return &amp;module;
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +static int linux_module_init(void)
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +    /* Nothing to do */
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    return OPAL_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +/
</span><br>
<span class="quotelev2">&gt; &gt; ************************************************************************
</span><br>
<span class="quotelev2">&gt; &gt; +   See the note in paffinity_linux.h -- there are at least 3
</span><br>
<span class="quotelev2">&gt; &gt; different
</span><br>
<span class="quotelev2">&gt; &gt; +   ways that Linux's sched_setaffinity()/sched_getaffinity() are
</span><br>
<span class="quotelev2">&gt; &gt; +   implemented.  Thankfully there is the Portable Linux Processor
</span><br>
<span class="quotelev2">&gt; &gt; +   Affinity project which determines the flavor of affinity at
</span><br>
<span class="quotelev2">&gt; &gt; runtime
</span><br>
<span class="quotelev2">&gt; &gt; +   and takes care of of the problem.
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +   Using get/set affinity functions from plpa - configured with an
</span><br>
<span class="quotelev2">&gt; &gt; +   opal prefix.
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +   User needs to set a mask with the bit number of the cpu set. We
</span><br>
<span class="quotelev2">&gt; &gt; provide
</span><br>
<span class="quotelev2">&gt; &gt; +   macros to do this.
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ************************************************************************/
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +static int linux_module_set(opal_paffinity_base_cpu_set_t mask)
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    opal_paffinity_linux_plpa_cpu_set_t plpa_mask;
</span><br>
<span class="quotelev2">&gt; &gt; +    unsigned int i;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    if (sizeof(mask) &gt; sizeof(plpa_mask)) {
</span><br>
<span class="quotelev2">&gt; &gt; +        return OPAL_ERR_BAD_PARAM;
</span><br>
<span class="quotelev2">&gt; &gt; +    } else {
</span><br>
<span class="quotelev2">&gt; &gt; +        PLPA_CPU_ZERO(&amp;plpa_mask);
</span><br>
<span class="quotelev2">&gt; &gt; +	for (i = 0; i &lt; sizeof(plpa_mask) ; i++) {
</span><br>
<span class="quotelev2">&gt; &gt; +	    if (PLPA_CPU_ISSET(i,&amp;mask)) {
</span><br>
<span class="quotelev2">&gt; &gt; +		PLPA_CPU_SET(i,&amp;plpa_mask);
</span><br>
<span class="quotelev2">&gt; &gt; +	    }
</span><br>
<span class="quotelev2">&gt; &gt; +	}
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    if (0 != opal_paffinity_linux_plpa_sched_setaffinity(getpid(),
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; sizeof(plpa_mask),
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; &amp;plpa_mask)) {
</span><br>
<span class="quotelev2">&gt; &gt; +        return OPAL_ERR_IN_ERRNO;
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +    return OPAL_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +static int linux_module_get(opal_paffinity_base_cpu_set_t *mask)
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +    opal_paffinity_linux_plpa_cpu_set_t plpa_mask;
</span><br>
<span class="quotelev2">&gt; &gt; +    unsigned int i;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    if (NULL == mask) {
</span><br>
<span class="quotelev2">&gt; &gt; +        return OPAL_ERR_BAD_PARAM;
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    if (sizeof(*mask) &gt; sizeof(plpa_mask)) {
</span><br>
<span class="quotelev2">&gt; &gt; +        return OPAL_ERR_BAD_PARAM; /* look up in header file */
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    if (0 != opal_paffinity_linux_plpa_sched_getaffinity(getpid(),
</span><br>
<span class="quotelev2">&gt; &gt; sizeof(plpa_mask), &amp;plpa_mask)) {
</span><br>
<span class="quotelev2">&gt; &gt; +        return OPAL_ERR_IN_ERRNO;
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +    for (i = 0; i &lt; sizeof(mask); i++) {
</span><br>
<span class="quotelev2">&gt; &gt; +	if (PLPA_CPU_ISSET(i,&amp;plpa_mask)) {
</span><br>
<span class="quotelev2">&gt; &gt; +	    PLPA_CPU_SET(i,mask);
</span><br>
<span class="quotelev2">&gt; &gt; +	}
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    return OPAL_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +static int linux_module_map_to_processor_id(int socket, int core,
</span><br>
<span class="quotelev2">&gt; &gt; int *processor_id)
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +   return opal_paffinity_linux_plpa_map_to_processor_id(socket,
</span><br>
<span class="quotelev2">&gt; &gt; core, processor_id);
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +static int linux_module_map_to_socket_core(int processor_id, int
</span><br>
<span class="quotelev2">&gt; &gt; *socket, int *core)
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +   return
</span><br>
<span class="quotelev2">&gt; &gt; opal_paffinity_linux_plpa_map_to_socket_core(processor_id, socket,
</span><br>
<span class="quotelev2">&gt; &gt; core);
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +static int linux_module_get_processor_info(int *num_processors, int
</span><br>
<span class="quotelev2">&gt; &gt; *max_processor_id)
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +   return
</span><br>
<span class="quotelev2">&gt; &gt; opal_paffinity_linux_plpa_get_processor_info(num_processors,
</span><br>
<span class="quotelev2">&gt; &gt; max_processor_id);
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +static int linux_module_get_socket_info(int *num_sockets, int
</span><br>
<span class="quotelev2">&gt; &gt; *max_socket_num)
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +   return opal_paffinity_linux_plpa_get_socket_info(num_sockets,
</span><br>
<span class="quotelev2">&gt; &gt; max_socket_num);
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +static int linux_module_get_core_info(int socket, int *num_cores,
</span><br>
<span class="quotelev2">&gt; &gt; int *max_core_num)
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +   return opal_paffinity_linux_plpa_get_core_info(socket,
</span><br>
<span class="quotelev2">&gt; &gt; num_cores, max_core_num);
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; svn-full mailing list
</span><br>
<span class="quotelev2">&gt; &gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3298.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17584"</a>
<li><strong>Previous message:</strong> <a href="3296.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17584"</a>
<li><strong>In reply to:</strong> <a href="3296.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17584"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3298.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17584"</a>
<li><strong>Reply:</strong> <a href="3298.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17584"</a>
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
