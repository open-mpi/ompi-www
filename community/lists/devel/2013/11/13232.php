<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29651 - in trunk: config examples	oshmem/include oshmem/tools/oshmem_info";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 11 13:22:52 2013" -->
<!-- isoreceived="20131111182252" -->
<!-- sent="Mon, 11 Nov 2013 18:22:49 +0000" -->
<!-- isosent="20131111182249" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29651 - in trunk: config examples	oshmem/include oshmem/tools/oshmem_info" -->
<!-- id="575053FE-6F54-49B6-9828-0CAEC2D747E3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20131111142626.62EAC160F13_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29651 - in trunk: config examples	oshmem/include oshmem/tools/oshmem_info<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-11 13:22:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13233.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29651 - in trunk:	config examples	oshmem/include oshmem/tools/oshmem_info"</a>
<li><strong>Previous message:</strong> <a href="13231.php">Joshua Ladd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29644 -	trunk/orte/mca/rmaps/mindist"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13233.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29651 - in trunk:	config examples	oshmem/include oshmem/tools/oshmem_info"</a>
<li><strong>Reply:</strong> <a href="13233.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29651 - in trunk:	config examples	oshmem/include oshmem/tools/oshmem_info"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This commit produces warnings in the output of oshmem_info:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;OSHMEM Fort shmem.fh: yes
<br>
**************************************************************************
<br>
*** DEVELOPER WARNING: A field in ompi_info output is too long and
<br>
*** will appear poorly in the prettyprint output.
<br>
***
<br>
***   Value:      &quot;OSHMEM SGI/Quadrix compatibility mode&quot;
<br>
***   Max length: 24
<br>
**************************************************************************
<br>
OSHMEM SGI/Quadrix compatibility mode: yes
<br>
**************************************************************************
<br>
*** DEVELOPER WARNING: A field in ompi_info output is too long and
<br>
*** will appear poorly in the prettyprint output.
<br>
***
<br>
***   Value:      &quot;OSHMEM API functions parameter checking&quot;
<br>
***   Max length: 24
<br>
**************************************************************************
<br>
OSHMEM API functions parameter checking: yes
<br>
OSHMEM profiling support: yes
<br>
<p><p><p>On Nov 11, 2013, at 9:26 AM, svn-commit-mailer_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: miked (Mike Dubman)
</span><br>
<span class="quotelev1">&gt; Date: 2013-11-11 09:26:25 EST (Mon, 11 Nov 2013)
</span><br>
<span class="quotelev1">&gt; New Revision: 29651
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/29651">https://svn.open-mpi.org/trac/ompi/changeset/29651</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Applying Jeff`s comments about proper SHMEM fortran organization of files.
</span><br>
<span class="quotelev1">&gt; Refs: 3870
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Added:
</span><br>
<span class="quotelev1">&gt;   trunk/examples/hello_shmemfh.f90
</span><br>
<span class="quotelev1">&gt;   trunk/examples/ring_shmemfh.f90
</span><br>
<span class="quotelev1">&gt; Deleted:
</span><br>
<span class="quotelev1">&gt;   trunk/examples/hello_shmemfh.f
</span><br>
<span class="quotelev1">&gt;   trunk/examples/ring_shmem.f90
</span><br>
<span class="quotelev1">&gt;   trunk/examples/ring_shmemfh.f
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/config/oshmem_configure_options.m4   |     1                                         
</span><br>
<span class="quotelev1">&gt;   trunk/examples/Makefile                    |    31 ++++++++++-------                       
</span><br>
<span class="quotelev1">&gt;   trunk/examples/Makefile.include            |     5 +-                                      
</span><br>
<span class="quotelev1">&gt;   trunk/examples/README                      |     5 +-                                      
</span><br>
<span class="quotelev1">&gt;   /dev/null                                  |    19 ----------                              
</span><br>
<span class="quotelev1">&gt;   trunk/examples/hello_shmemfh.f90           |    22 ++++++++++++                            
</span><br>
<span class="quotelev1">&gt;   /dev/null                                  |    64 ------------------------------------    
</span><br>
<span class="quotelev1">&gt;   /dev/null                                  |    71 ----------------------------------------
</span><br>
<span class="quotelev1">&gt;   trunk/examples/ring_shmemfh.f90            |    62 ++++++++++++++++++++++++++++++++++      
</span><br>
<span class="quotelev1">&gt;   trunk/oshmem/include/shmem.fh              |     2 +                                       
</span><br>
<span class="quotelev1">&gt;   trunk/oshmem/tools/oshmem_info/Makefile.am |    11 ++++++                                  
</span><br>
<span class="quotelev1">&gt;   trunk/oshmem/tools/oshmem_info/param.c     |    18 +++++++++-                              
</span><br>
<span class="quotelev1">&gt;   12 files changed, 135 insertions(+), 176 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/config/oshmem_configure_options.m4
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/config/oshmem_configure_options.m4	Sat Nov  9 23:12:14 2013	(r29650)
</span><br>
<span class="quotelev1">&gt; +++ trunk/config/oshmem_configure_options.m4	2013-11-11 09:26:25 EST (Mon, 11 Nov 2013)	(r29651)
</span><br>
<span class="quotelev1">&gt; @@ -112,7 +112,6 @@
</span><br>
<span class="quotelev1">&gt;     [AC_MSG_RESULT([no])])
</span><br>
<span class="quotelev1">&gt; ])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; AC_DEFUN([OSHMEM_SETUP_CFLAGS],[
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/examples/Makefile
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/examples/Makefile	Sat Nov  9 23:12:14 2013	(r29650)
</span><br>
<span class="quotelev1">&gt; +++ trunk/examples/Makefile	2013-11-11 09:26:25 EST (Mon, 11 Nov 2013)	(r29651)
</span><br>
<span class="quotelev1">&gt; @@ -50,8 +50,8 @@
</span><br>
<span class="quotelev1">&gt; 	 hello_mpifh \
</span><br>
<span class="quotelev1">&gt; 	 hello_usempi \
</span><br>
<span class="quotelev1">&gt; 	 hello_usempif08 \
</span><br>
<span class="quotelev1">&gt; -     hello_shmem \
</span><br>
<span class="quotelev1">&gt; -     hello_shmemfh \
</span><br>
<span class="quotelev1">&gt; +	 hello_shmem \
</span><br>
<span class="quotelev1">&gt; +	 hello_shmemfh \
</span><br>
<span class="quotelev1">&gt; 	 Hello.class \
</span><br>
<span class="quotelev1">&gt;          ring_c \
</span><br>
<span class="quotelev1">&gt; 	 ring_cxx \
</span><br>
<span class="quotelev1">&gt; @@ -60,14 +60,16 @@
</span><br>
<span class="quotelev1">&gt; 	 ring_usempif08 \
</span><br>
<span class="quotelev1">&gt; 	 ring_shmem \
</span><br>
<span class="quotelev1">&gt; 	 ring_shmemfh \
</span><br>
<span class="quotelev1">&gt; -	 ring_shmemf90 \
</span><br>
<span class="quotelev1">&gt; 	 Ring.class \
</span><br>
<span class="quotelev1">&gt; 	 connectivity_c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -# Default target.  Always build the C example.  Only build the others
</span><br>
<span class="quotelev1">&gt; -# if Open MPI was build with the relevant language bindings.
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +# Default target. 
</span><br>
<span class="quotelev1">&gt; all: hello_c ring_c connectivity_c
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# Always build the C example.  Only build the others
</span><br>
<span class="quotelev1">&gt; +# if Open MPI was build with the relevant language bindings.
</span><br>
<span class="quotelev1">&gt; +mpi:
</span><br>
<span class="quotelev1">&gt; +	
</span><br>
<span class="quotelev1">&gt; 	@ if ompi_info --parsable | grep bindings:cxx:yes &gt;/dev/null; then \
</span><br>
<span class="quotelev1">&gt; 	    $(MAKE) hello_cxx ring_cxx; \
</span><br>
<span class="quotelev1">&gt; 	fi
</span><br>
<span class="quotelev1">&gt; @@ -83,12 +85,17 @@
</span><br>
<span class="quotelev1">&gt; 	@ if ompi_info --parsable | grep bindings:java:yes &gt;/dev/null; then \
</span><br>
<span class="quotelev1">&gt; 	    $(MAKE) Hello.class Ring.class; \
</span><br>
<span class="quotelev1">&gt; 	fi
</span><br>
<span class="quotelev1">&gt; -	@ if ompi_info --parsable | grep mca:shmem &gt;/dev/null; then \
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# Only build if we built OSHMEM support.  
</span><br>
<span class="quotelev1">&gt; +# Only build the Fortran examples if we have Fortran OSHMEM support.
</span><br>
<span class="quotelev1">&gt; +shmem:
</span><br>
<span class="quotelev1">&gt; +	@ if oshmem_info --parsable | grep oshmem:bindings:c &gt;/dev/null; then \
</span><br>
<span class="quotelev1">&gt; 	    $(MAKE) hello_shmem; \
</span><br>
<span class="quotelev1">&gt; -	    $(MAKE) hello_shmemfh; \
</span><br>
<span class="quotelev1">&gt; 	    $(MAKE) ring_shmem; \
</span><br>
<span class="quotelev1">&gt; +	fi
</span><br>
<span class="quotelev1">&gt; +	@ if oshmem_info --parsable | grep oshmem:bindings:fort &gt;/dev/null; then \
</span><br>
<span class="quotelev1">&gt; +	    $(MAKE) hello_shmemfh; \
</span><br>
<span class="quotelev1">&gt; 	    $(MAKE) ring_shmemfh; \
</span><br>
<span class="quotelev1">&gt; -	    $(MAKE) ring_shmemf90; \
</span><br>
<span class="quotelev1">&gt; 	fi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # The usual &quot;clean&quot; target
</span><br>
<span class="quotelev1">&gt; @@ -120,13 +127,11 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hello_shmem: hello_shmem_c.c
</span><br>
<span class="quotelev1">&gt; 	$(SHMEMCC) $(CFLAGS) $^ -o $@
</span><br>
<span class="quotelev1">&gt; -hello_shmemfh: hello_shmemfh.f
</span><br>
<span class="quotelev1">&gt; +hello_shmemfh: hello_shmemfh.f90
</span><br>
<span class="quotelev1">&gt; 	$(SHMEMFC) $(FCFLAGS) $^ -o $@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ring_shmem: ring_shmem_c.c
</span><br>
<span class="quotelev1">&gt; 	$(SHMEMCC) $(CFLAGS) $^ -o $@
</span><br>
<span class="quotelev1">&gt; -ring_shmemfh: ring_shmemfh.f
</span><br>
<span class="quotelev1">&gt; -	$(SHMEMFC) $(FCFLAGS) $^ -o $@
</span><br>
<span class="quotelev1">&gt; -ring_shmemf90: ring_shmem.f90
</span><br>
<span class="quotelev1">&gt; +ring_shmemfh: ring_shmemfh.f90
</span><br>
<span class="quotelev1">&gt; 	$(SHMEMFC) $(FCFLAGS) $^ -o $@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/examples/Makefile.include
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/examples/Makefile.include	Sat Nov  9 23:12:14 2013	(r29650)
</span><br>
<span class="quotelev1">&gt; +++ trunk/examples/Makefile.include	2013-11-11 09:26:25 EST (Mon, 11 Nov 2013)	(r29651)
</span><br>
<span class="quotelev1">&gt; @@ -39,15 +39,14 @@
</span><br>
<span class="quotelev1">&gt;         examples/hello_usempi.f90 \
</span><br>
<span class="quotelev1">&gt;         examples/hello_usempif08.f90 \
</span><br>
<span class="quotelev1">&gt;         examples/hello_shmem_c.c \
</span><br>
<span class="quotelev1">&gt; -        examples/hello_shmemfh.f \
</span><br>
<span class="quotelev1">&gt; +        examples/hello_shmemfh.f90 \
</span><br>
<span class="quotelev1">&gt;         examples/ring_c.c \
</span><br>
<span class="quotelev1">&gt;         examples/ring_cxx.cc \
</span><br>
<span class="quotelev1">&gt;         examples/ring_mpifh.f \
</span><br>
<span class="quotelev1">&gt;         examples/ring_usempi.f90 \
</span><br>
<span class="quotelev1">&gt;         examples/ring_usempif08.f90 \
</span><br>
<span class="quotelev1">&gt;         examples/ring_shmem_c.c \
</span><br>
<span class="quotelev1">&gt; -        examples/ring_shmemfh.f \
</span><br>
<span class="quotelev1">&gt; -        examples/ring_shmem.f90 \
</span><br>
<span class="quotelev1">&gt; +        examples/ring_shmemfh.f90 \
</span><br>
<span class="quotelev1">&gt;         examples/connectivity_c.c \
</span><br>
<span class="quotelev1">&gt; 	examples/Hello.java \
</span><br>
<span class="quotelev1">&gt; 	examples/Ring.java
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/examples/README
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/examples/README	Sat Nov  9 23:12:14 2013	(r29650)
</span><br>
<span class="quotelev1">&gt; +++ trunk/examples/README	2013-11-11 09:26:25 EST (Mon, 11 Nov 2013)	(r29651)
</span><br>
<span class="quotelev1">&gt; @@ -31,7 +31,7 @@
</span><br>
<span class="quotelev1">&gt;   Fortran use mpi_f08: hello_usempif08.f90
</span><br>
<span class="quotelev1">&gt;   Java:                Hello.java
</span><br>
<span class="quotelev1">&gt;   C shmem.h:           hello_shmem_c.c
</span><br>
<span class="quotelev1">&gt; -  Fortran shmemfh.f:   hello_shmemfh.f
</span><br>
<span class="quotelev1">&gt; +  Fortran shmem.fh:    hello_shmemfh.f90
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Send a trivial message around in a ring
</span><br>
<span class="quotelev1">&gt;   C:                   ring_c.c
</span><br>
<span class="quotelev1">&gt; @@ -41,8 +41,7 @@
</span><br>
<span class="quotelev1">&gt;   Fortran use mpi_f08: ring_usempif08.f90
</span><br>
<span class="quotelev1">&gt;   Java:                Ring.java
</span><br>
<span class="quotelev1">&gt;   C shmem.h:           ring_shmem_c.c
</span><br>
<span class="quotelev1">&gt; -  Fortran shmemfh.f:   ring_shmemfh.f
</span><br>
<span class="quotelev1">&gt; -  F90 shmemfh.f:       ring_shmem.f90
</span><br>
<span class="quotelev1">&gt; +  Fortran shmem.fh:    ring_shmemfh.f90
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Additionally, there's one further example application, but this one
</span><br>
<span class="quotelev1">&gt; only uses the MPI C bindings:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Deleted: trunk/examples/hello_shmemfh.f
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/examples/hello_shmemfh.f	2013-11-11 09:26:25 EST (Mon, 11 Nov 2013)	(r29650)
</span><br>
<span class="quotelev1">&gt; +++ /dev/null	00:00:00 1970	(deleted)
</span><br>
<span class="quotelev1">&gt; @@ -1,19 +0,0 @@
</span><br>
<span class="quotelev1">&gt; -C *
</span><br>
<span class="quotelev1">&gt; -C * Copyright (c) 2013      Mellanox Technologies, Inc.
</span><br>
<span class="quotelev1">&gt; -C *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; -C * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt; -C * 
</span><br>
<span class="quotelev1">&gt; -C * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; -C * 
</span><br>
<span class="quotelev1">&gt; -C * $HEADER$
</span><br>
<span class="quotelev1">&gt; -C *
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -        program main
</span><br>
<span class="quotelev1">&gt; -        integer proc, nproc
</span><br>
<span class="quotelev1">&gt; -        call START_PES(0)
</span><br>
<span class="quotelev1">&gt; -        proc = MY_PE()
</span><br>
<span class="quotelev1">&gt; -        nproc = NUM_PES()
</span><br>
<span class="quotelev1">&gt; -        
</span><br>
<span class="quotelev1">&gt; -        write(*, '(&quot;Hello, world, I am &quot;, i2, &quot; of &quot;, i2)')
</span><br>
<span class="quotelev1">&gt; -     &amp;        proc, nproc
</span><br>
<span class="quotelev1">&gt; -        end 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Added: trunk/examples/hello_shmemfh.f90
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- /dev/null	00:00:00 1970	(empty, because file is newly added)
</span><br>
<span class="quotelev1">&gt; +++ trunk/examples/hello_shmemfh.f90	2013-11-11 09:26:25 EST (Mon, 11 Nov 2013)	(r29651)
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,22 @@
</span><br>
<span class="quotelev1">&gt; +!
</span><br>
<span class="quotelev1">&gt; +! Copyright (c) 2013      Mellanox Technologies, Inc.
</span><br>
<span class="quotelev1">&gt; +!                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; +! $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt; +!
</span><br>
<span class="quotelev1">&gt; +! Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; +!
</span><br>
<span class="quotelev1">&gt; +! $HEADER$
</span><br>
<span class="quotelev1">&gt; +!
</span><br>
<span class="quotelev1">&gt; +program hello_shmem
</span><br>
<span class="quotelev1">&gt; +    implicit none
</span><br>
<span class="quotelev1">&gt; +    include 'shmem.fh'
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    integer proc, nproc
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    call START_PES(0)
</span><br>
<span class="quotelev1">&gt; +    proc = MY_PE()
</span><br>
<span class="quotelev1">&gt; +    nproc = NUM_PES()
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    write(*, '(&quot;Hello, world, I am &quot;, i2, &quot; of &quot;, i2)') proc, nproc
</span><br>
<span class="quotelev1">&gt; +end program hello_shmem
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Deleted: trunk/examples/ring_shmem.f90
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/examples/ring_shmem.f90	2013-11-11 09:26:25 EST (Mon, 11 Nov 2013)	(r29650)
</span><br>
<span class="quotelev1">&gt; +++ /dev/null	00:00:00 1970	(deleted)
</span><br>
<span class="quotelev1">&gt; @@ -1,64 +0,0 @@
</span><br>
<span class="quotelev1">&gt; -!
</span><br>
<span class="quotelev1">&gt; -! Copyright (c) 2013      Mellanox Technologies, Inc.
</span><br>
<span class="quotelev1">&gt; -!                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; -! $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt; -!
</span><br>
<span class="quotelev1">&gt; -! Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; -!
</span><br>
<span class="quotelev1">&gt; -! $HEADER$
</span><br>
<span class="quotelev1">&gt; -!
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -program ring_shmem_f90
</span><br>
<span class="quotelev1">&gt; -	implicit none
</span><br>
<span class="quotelev1">&gt; -	include 'shmem.fh'
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -	integer*8, save :: rbuf
</span><br>
<span class="quotelev1">&gt; -	integer*8 		:: message
</span><br>
<span class="quotelev1">&gt; -	integer 		:: proc, nproc, next
</span><br>
<span class="quotelev1">&gt; -!	func definitions
</span><br>
<span class="quotelev1">&gt; -	integer 		:: my_pe, num_pes
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -	rbuf = -1
</span><br>
<span class="quotelev1">&gt; -	message = 10
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -	call start_pes(0)
</span><br>
<span class="quotelev1">&gt; -	proc = my_pe()
</span><br>
<span class="quotelev1">&gt; -	nproc = num_pes()
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -!   Calculate the PE number of the next process in the ring.  Use the
</span><br>
<span class="quotelev1">&gt; -!   modulus operator so that the last process &quot;wraps around&quot; to PE 0.
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -	next = mod((proc + 1), nproc)
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -	if (proc == 0) then
</span><br>
<span class="quotelev1">&gt; -	    write(*, '(&quot;Process 0 sending &quot;, i2, &quot; to&quot;, i2, &quot; (&quot;, i2, &quot; processes in ring)&quot;)') message, next, nproc
</span><br>
<span class="quotelev1">&gt; -	    call shmem_put8(rbuf, message, 1, next)
</span><br>
<span class="quotelev1">&gt; -	    write(*, '(&quot;Process 0 sent to &quot;, i2)') next
</span><br>
<span class="quotelev1">&gt; -	end if
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -!   Pass the message around the ring.  The exit mechanism works as
</span><br>
<span class="quotelev1">&gt; -!   follows: the message (a positive integer) is passed around the
</span><br>
<span class="quotelev1">&gt; -!   ring.  Each time it passes PE 0, it is decremented.  When each
</span><br>
<span class="quotelev1">&gt; -!   processes receives a message containing a 0 value, it passes the
</span><br>
<span class="quotelev1">&gt; -!   message on to the next process and then quits.  By passing the 0
</span><br>
<span class="quotelev1">&gt; -!   message first, every process gets the 0 message and can quit
</span><br>
<span class="quotelev1">&gt; -!   normally.
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -	do while(message &gt; 0)
</span><br>
<span class="quotelev1">&gt; -	    call shmem_int8_wait_until(rbuf, SHMEM_CMP_EQ, message)
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -	    if (proc == 0) then
</span><br>
<span class="quotelev1">&gt; -	        message = message - 1
</span><br>
<span class="quotelev1">&gt; -	        write(*, '(&quot;Process 0 decremented value:&quot;, i2)') message
</span><br>
<span class="quotelev1">&gt; -	    else
</span><br>
<span class="quotelev1">&gt; -	        message = rbuf
</span><br>
<span class="quotelev1">&gt; -	    end if
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -	    call shmem_put8(rbuf, message, 1, next)
</span><br>
<span class="quotelev1">&gt; -	end do
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -! 	All done
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -	write(*, '(&quot;Process&quot;, i2,&quot; exiting.&quot;)') proc
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -end program
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Deleted: trunk/examples/ring_shmemfh.f
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/examples/ring_shmemfh.f	2013-11-11 09:26:25 EST (Mon, 11 Nov 2013)	(r29650)
</span><br>
<span class="quotelev1">&gt; +++ /dev/null	00:00:00 1970	(deleted)
</span><br>
<span class="quotelev1">&gt; @@ -1,71 +0,0 @@
</span><br>
<span class="quotelev1">&gt; -C
</span><br>
<span class="quotelev1">&gt; -C Copyright (c) 2013      Mellanox Technologies, Inc.
</span><br>
<span class="quotelev1">&gt; -C                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; -C $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt; -C
</span><br>
<span class="quotelev1">&gt; -C Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; -C
</span><br>
<span class="quotelev1">&gt; -C $HEADER$
</span><br>
<span class="quotelev1">&gt; -C
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -      program ring_shmem_f77
</span><br>
<span class="quotelev1">&gt; -      implicit none
</span><br>
<span class="quotelev1">&gt; -      include 'shmem.fh'
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -      integer*8 rbuf
</span><br>
<span class="quotelev1">&gt; -      save rbuf
</span><br>
<span class="quotelev1">&gt; -      integer*8 message
</span><br>
<span class="quotelev1">&gt; -      integer proc, nproc, next
</span><br>
<span class="quotelev1">&gt; -C       func definitions
</span><br>
<span class="quotelev1">&gt; -      integer my_pe, num_pes
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -      rbuf = -1
</span><br>
<span class="quotelev1">&gt; -      message = 10
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -      call start_pes(0)
</span><br>
<span class="quotelev1">&gt; -      proc = my_pe()
</span><br>
<span class="quotelev1">&gt; -      nproc = num_pes()
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -C   Calculate the PE number of the next process in the ring.  Use the
</span><br>
<span class="quotelev1">&gt; -C   modulus operator so that the last process &quot;wraps around&quot; to PE 0.
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -      next = mod((proc + 1), nproc)
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -      if (proc .eq. 0) then
</span><br>
<span class="quotelev1">&gt; -          write(*, '(&quot;Process 0 sending &quot;, i2, &quot; to &quot;, i2,
</span><br>
<span class="quotelev1">&gt; -     &amp;        &quot; (&quot;, i2, &quot; processes in ring)&quot;)')
</span><br>
<span class="quotelev1">&gt; -     &amp;        message, next, nproc
</span><br>
<span class="quotelev1">&gt; -         call shmem_put8(rbuf, message, 1, next)
</span><br>
<span class="quotelev1">&gt; -      write(*, '(&quot;Process 0 sent to &quot;, i2)') next
</span><br>
<span class="quotelev1">&gt; -      end if
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -C   Pass the message around the ring.  The exit mechanism works as
</span><br>
<span class="quotelev1">&gt; -C   follows: the message (a positive integer) is passed around the
</span><br>
<span class="quotelev1">&gt; -C   ring.  Each time it passes PE 0, it is decremented.  When each
</span><br>
<span class="quotelev1">&gt; -C   processes receives a message containing a 0 value, it passes the
</span><br>
<span class="quotelev1">&gt; -C   message on to the next process and then quits.  By passing the 0
</span><br>
<span class="quotelev1">&gt; -C   message first, every process gets the 0 message and can quit
</span><br>
<span class="quotelev1">&gt; -C   normally.
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; - 10   call shmem_int8_wait_until(rbuf, SHMEM_CMP_EQ, message)
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -      if (proc .eq. 0) then
</span><br>
<span class="quotelev1">&gt; -         message = message - 1
</span><br>
<span class="quotelev1">&gt; -	        write(*, '(&quot;Process 0 decremented value:&quot;, i2)') message
</span><br>
<span class="quotelev1">&gt; -      else
</span><br>
<span class="quotelev1">&gt; -         message = rbuf
</span><br>
<span class="quotelev1">&gt; -      end if
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -      call shmem_put8(rbuf, message, 1, next)
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -      if (message .gt. 0) then
</span><br>
<span class="quotelev1">&gt; -         goto 10
</span><br>
<span class="quotelev1">&gt; -      else
</span><br>
<span class="quotelev1">&gt; -         goto 20
</span><br>
<span class="quotelev1">&gt; -      end if
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -C 	All done
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; - 20   write(*, '(&quot;Process&quot;, i2,&quot; exiting.&quot;)') proc
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -      end
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Added: trunk/examples/ring_shmemfh.f90
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- /dev/null	00:00:00 1970	(empty, because file is newly added)
</span><br>
<span class="quotelev1">&gt; +++ trunk/examples/ring_shmemfh.f90	2013-11-11 09:26:25 EST (Mon, 11 Nov 2013)	(r29651)
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,62 @@
</span><br>
<span class="quotelev1">&gt; +!
</span><br>
<span class="quotelev1">&gt; +! Copyright (c) 2013      Mellanox Technologies, Inc.
</span><br>
<span class="quotelev1">&gt; +!                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; +! $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt; +!
</span><br>
<span class="quotelev1">&gt; +! Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; +!
</span><br>
<span class="quotelev1">&gt; +! $HEADER$
</span><br>
<span class="quotelev1">&gt; +!
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +program ring_shmem
</span><br>
<span class="quotelev1">&gt; +    implicit none
</span><br>
<span class="quotelev1">&gt; +    include 'shmem.fh'
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    integer*8, save   :: rbuf
</span><br>
<span class="quotelev1">&gt; +    integer*8         :: message
</span><br>
<span class="quotelev1">&gt; +    integer           :: proc, nproc, next
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    rbuf = -1
</span><br>
<span class="quotelev1">&gt; +    message = 10
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    call start_pes(0)
</span><br>
<span class="quotelev1">&gt; +    proc = my_pe()
</span><br>
<span class="quotelev1">&gt; +    nproc = num_pes()
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +!   Calculate the PE number of the next process in the ring.  Use the
</span><br>
<span class="quotelev1">&gt; +!   modulus operator so that the last process &quot;wraps around&quot; to PE 0.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    next = mod((proc + 1), nproc)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if (proc == 0) then
</span><br>
<span class="quotelev1">&gt; +        write(*, '(&quot;Process 0 sending &quot;, i2, &quot; to&quot;, i2, &quot; (&quot;, i2, &quot; processes in ring)&quot;)') message, next, nproc
</span><br>
<span class="quotelev1">&gt; +        call shmem_put8(rbuf, message, 1, next)
</span><br>
<span class="quotelev1">&gt; +        write(*, '(&quot;Process 0 sent to &quot;, i2)') next
</span><br>
<span class="quotelev1">&gt; +    end if
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +!   Pass the message around the ring.  The exit mechanism works as
</span><br>
<span class="quotelev1">&gt; +!   follows: the message (a positive integer) is passed around the
</span><br>
<span class="quotelev1">&gt; +!   ring.  Each time it passes PE 0, it is decremented.  When each
</span><br>
<span class="quotelev1">&gt; +!   processes receives a message containing a 0 value, it passes the
</span><br>
<span class="quotelev1">&gt; +!   message on to the next process and then quits.  By passing the 0
</span><br>
<span class="quotelev1">&gt; +!   message first, every process gets the 0 message and can quit
</span><br>
<span class="quotelev1">&gt; +!   normally.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    do while(message &gt; 0)
</span><br>
<span class="quotelev1">&gt; +        call shmem_int8_wait_until(rbuf, SHMEM_CMP_EQ, message)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        if (proc == 0) then
</span><br>
<span class="quotelev1">&gt; +            message = message - 1
</span><br>
<span class="quotelev1">&gt; +            write(*, '(&quot;Process 0 decremented value:&quot;, i2)') message
</span><br>
<span class="quotelev1">&gt; +        else
</span><br>
<span class="quotelev1">&gt; +            message = rbuf
</span><br>
<span class="quotelev1">&gt; +        end if
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        call shmem_put8(rbuf, message, 1, next)
</span><br>
<span class="quotelev1">&gt; +    end do
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +!     All done
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    write(*, '(&quot;Process&quot;, i2,&quot; exiting.&quot;)') proc
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +end program
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/oshmem/include/shmem.fh
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/oshmem/include/shmem.fh	Sat Nov  9 23:12:14 2013	(r29650)
</span><br>
<span class="quotelev1">&gt; +++ trunk/oshmem/include/shmem.fh	2013-11-11 09:26:25 EST (Mon, 11 Nov 2013)	(r29651)
</span><br>
<span class="quotelev1">&gt; @@ -48,6 +48,8 @@
</span><br>
<span class="quotelev1">&gt;       integer SHMEM_CMP_GE
</span><br>
<span class="quotelev1">&gt;       parameter ( SHMEM_CMP_GE = 5 )
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +      integer my_pe
</span><br>
<span class="quotelev1">&gt; +      integer num_pes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       logical shmem_pe_accessible
</span><br>
<span class="quotelev1">&gt;       logical shmem_addr_accessible
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/oshmem/tools/oshmem_info/Makefile.am
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/oshmem/tools/oshmem_info/Makefile.am	Sat Nov  9 23:12:14 2013	(r29650)
</span><br>
<span class="quotelev1">&gt; +++ trunk/oshmem/tools/oshmem_info/Makefile.am	2013-11-11 09:26:25 EST (Mon, 11 Nov 2013)	(r29651)
</span><br>
<span class="quotelev1">&gt; @@ -25,6 +25,17 @@
</span><br>
<span class="quotelev1">&gt;             -DOMPI_BUILD_LIBS=&quot;\&quot;@LIBS@\&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;             -DOPAL_CC_ABSOLUTE=&quot;\&quot;@OPAL_CC_ABSOLUTE@\&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;             -DOMPI_CXX_ABSOLUTE=&quot;\&quot;@OMPI_CXX_ABSOLUTE@\&quot;&quot;
</span><br>
<span class="quotelev1">&gt; +if OSHMEM_PROFILING
</span><br>
<span class="quotelev1">&gt; +    AM_CFLAGS += -DOSHMEM_PROFILING=1
</span><br>
<span class="quotelev1">&gt; +else
</span><br>
<span class="quotelev1">&gt; +    AM_CFLAGS += -DOSHMEM_PROFILING=0
</span><br>
<span class="quotelev1">&gt; +endif
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +if OSHMEM_WANT_FORTRAN_BINDINGS
</span><br>
<span class="quotelev1">&gt; +    AM_CFLAGS += -DOSHMEM_WANT_FORTRAN_BINDINGS=1
</span><br>
<span class="quotelev1">&gt; +else
</span><br>
<span class="quotelev1">&gt; +    AM_CFLAGS += -DOSHMEM_WANT_FORTRAN_BINDINGS=0
</span><br>
<span class="quotelev1">&gt; +endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; include $(top_srcdir)/Makefile.man-page-rules
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/oshmem/tools/oshmem_info/param.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/oshmem/tools/oshmem_info/param.c	Sat Nov  9 23:12:14 2013	(r29650)
</span><br>
<span class="quotelev1">&gt; +++ trunk/oshmem/tools/oshmem_info/param.c	2013-11-11 09:26:25 EST (Mon, 11 Nov 2013)	(r29651)
</span><br>
<span class="quotelev1">&gt; @@ -116,7 +116,7 @@
</span><br>
<span class="quotelev1">&gt;     char *crdebug_support;
</span><br>
<span class="quotelev1">&gt;     char *topology_support;
</span><br>
<span class="quotelev1">&gt;     char *vt_support;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +    
</span><br>
<span class="quotelev1">&gt;     /* Do a little preprocessor trickery here to figure opal_info_out the
</span><br>
<span class="quotelev1">&gt;      * tri-state of MPI_PARAM_CHECK (which will be either 0, 1, or
</span><br>
<span class="quotelev1">&gt;      * ompi_mpi_param_check).  The preprocessor will only allow
</span><br>
<span class="quotelev1">&gt; @@ -602,5 +602,19 @@
</span><br>
<span class="quotelev1">&gt;     opal_info_out(&quot;MPI_MAX_DATAREP_STRING&quot;, &quot;options:mpi-max-datarep-string&quot;,
</span><br>
<span class="quotelev1">&gt;                   &quot;IO interface not provided&quot;);
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +    
</span><br>
<span class="quotelev1">&gt; +    /* This block displays all the options with which the current
</span><br>
<span class="quotelev1">&gt; +     * installation of oshmem was configured. */
</span><br>
<span class="quotelev1">&gt; +    {
</span><br>
<span class="quotelev1">&gt; +        char *oshmem_fortran = OSHMEM_WANT_FORTRAN_BINDINGS ? &quot;yes&quot; : &quot;no&quot;;
</span><br>
<span class="quotelev1">&gt; +        char *oshmem_compat = OSHMEM_SPEC_COMPAT ? &quot;yes&quot; : &quot;no&quot;;
</span><br>
<span class="quotelev1">&gt; +        char *oshmem_param_check = OSHMEM_PARAM_CHECK ? &quot;yes&quot; : &quot;no&quot;;
</span><br>
<span class="quotelev1">&gt; +        char *oshmem_profiling = OSHMEM_PROFILING ? &quot;yes&quot; : &quot;no&quot;;
</span><br>
<span class="quotelev1">&gt; +        
</span><br>
<span class="quotelev1">&gt; +        opal_info_out(&quot;OSHMEM C bindings&quot;, &quot;oshmem:bindings:c&quot;, &quot;yes&quot;);
</span><br>
<span class="quotelev1">&gt; +        opal_info_out(&quot;OSHMEM Fort shmem.fh&quot;, &quot;oshmem:bindings:fort&quot;, oshmem_fortran);
</span><br>
<span class="quotelev1">&gt; +        opal_info_out(&quot;OSHMEM SGI/Quadrix compatibility mode&quot;, &quot;oshmem:options:spec_compat&quot;, oshmem_compat);
</span><br>
<span class="quotelev1">&gt; +        opal_info_out(&quot;OSHMEM API functions parameter checking&quot;, &quot;oshmem:options:param_check&quot;, oshmem_param_check);
</span><br>
<span class="quotelev1">&gt; +        opal_info_out(&quot;OSHMEM profiling support&quot;, &quot;oshmem:options:profiling&quot;, oshmem_profiling);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
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
<li><strong>Next message:</strong> <a href="13233.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29651 - in trunk:	config examples	oshmem/include oshmem/tools/oshmem_info"</a>
<li><strong>Previous message:</strong> <a href="13231.php">Joshua Ladd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29644 -	trunk/orte/mca/rmaps/mindist"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13233.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29651 - in trunk:	config examples	oshmem/include oshmem/tools/oshmem_info"</a>
<li><strong>Reply:</strong> <a href="13233.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29651 - in trunk:	config examples	oshmem/include oshmem/tools/oshmem_info"</a>
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
