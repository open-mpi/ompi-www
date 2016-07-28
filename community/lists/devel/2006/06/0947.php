<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 27 07:02:49 2006" -->
<!-- isoreceived="20060627110249" -->
<!-- sent="Tue, 27 Jun 2006 07:02:33 -0400" -->
<!-- isosent="20060627110233" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r10521" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFA9FBC3_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI devel] [OMPI svn-full] svn:open-mpi r10521" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-27 07:02:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0948.php">Josh Aune: "[OMPI devel] Best bw/lat performance for microbenchmark/debug utility"</a>
<li><strong>Previous message:</strong> <a href="0946.php">Sushant Sharma: "[OMPI devel] xcpu"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Blah.  After an unfortunate series of emacs commands, this commit got
<br>
the wrong message -- r10521 is actually the rollback of r10424 because
<br>
ticket #142 has been fixed.
<br>
<p>The message below is actually the message from r10424 (the commit that
<br>
was backed out), so the real log message should have been something
<br>
along the lines of &quot;Rollback of 10424 because ticket #142 has been
<br>
fixed.&quot; 
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: svn-full-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:svn-full-bounces_at_[hidden]] On Behalf Of 
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, June 27, 2006 6:43 AM
</span><br>
<span class="quotelev1">&gt; To: svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI svn-full] svn:open-mpi r10521
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Author: jsquyres
</span><br>
<span class="quotelev1">&gt; Date: 2006-06-27 06:43:03 EDT (Tue, 27 Jun 2006)
</span><br>
<span class="quotelev1">&gt; New Revision: 10521
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified:
</span><br>
<span class="quotelev1">&gt;    trunk/README
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/openib/btl_openib.h
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/openib/help-mpi-btl-openib.txt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Until a real fix for #142 is found, this workaround prohibits using
</span><br>
<span class="quotelev1">&gt; mpi_leave_pinned when multiple OpenIB HCA ports are found.
</span><br>
<span class="quotelev1">&gt; Specifically, if mpi_leave_pinned == 1 and ultiple HCA ports are
</span><br>
<span class="quotelev1">&gt; found, the MCA parameter btl_openib_max_btls is set to 1.  If the MCA
</span><br>
<span class="quotelev1">&gt; parameter btl_openib_warn_leave_pinned_multi_port is true, emit a
</span><br>
<span class="quotelev1">&gt; warning that this happened (having an MCA parameter to control the
</span><br>
<span class="quotelev1">&gt; warning allows users/sysadmins to turn it off instead of being nagged
</span><br>
<span class="quotelev1">&gt; for every run).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/README
</span><br>
<span class="quotelev1">&gt; ==============================================================
</span><br>
<span class="quotelev1">&gt; ================
</span><br>
<span class="quotelev1">&gt; --- trunk/README	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/README	2006-06-27 06:43:03 EDT (Tue, 27 Jun 2006)
</span><br>
<span class="quotelev1">&gt; @@ -40,7 +40,7 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ==============================================================
</span><br>
<span class="quotelev1">&gt; =============
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  The following abbreviated list of release notes applies to this code
</span><br>
<span class="quotelev1">&gt; -base as of this writing (19 Jun 2006):
</span><br>
<span class="quotelev1">&gt; +base as of this writing (17 Jun 2006):
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  - Open MPI includes support for a wide variety of supplemental
</span><br>
<span class="quotelev1">&gt;    hardware and software package.  When configuring Open MPI, you may
</span><br>
<span class="quotelev1">&gt; @@ -213,11 +213,6 @@
</span><br>
<span class="quotelev1">&gt;    MCA parameter btl_mx_max_send_size can be used to vary the maximum
</span><br>
<span class="quotelev1">&gt;    size of subsequent fragments.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -- Using multiple OpenIB HCA ports combined with setting the MCA
</span><br>
<span class="quotelev1">&gt; -  parameters mpi_leave_pinned to 1 is not supported in this release.
</span><br>
<span class="quotelev1">&gt; -  If mpi_leave_pinned is set to 1, the openib BTL component will
</span><br>
<span class="quotelev1">&gt; -  automatically limit itself to use 1 HCA port.
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;  - The current version of the Open MPI point-to-point engine does not
</span><br>
<span class="quotelev1">&gt;    yet support hardware-level MPI message matching.  As such, MPI
</span><br>
<span class="quotelev1">&gt;    message matching must be performed in software, artificially
</span><br>
<span class="quotelev1">&gt; @@ -288,38 +283,24 @@
</span><br>
<span class="quotelev1">&gt;    Install Open MPI into the base directory named &lt;directory&gt;.  Hence,
</span><br>
<span class="quotelev1">&gt;    Open MPI will place its executables in &lt;directory&gt;/bin, its header
</span><br>
<span class="quotelev1">&gt;    files in &lt;directory&gt;/include, its libraries in 
</span><br>
<span class="quotelev1">&gt; &lt;directory&gt;/lib, etc.
</span><br>
<span class="quotelev1">&gt; -  More fine-grained control over directory names is 
</span><br>
<span class="quotelev1">&gt; available; see the
</span><br>
<span class="quotelev1">&gt; -  output of &quot;./configure --help&quot; for more details.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  --with-gm=&lt;directory&gt;
</span><br>
<span class="quotelev1">&gt;    Specify the directory where the GM libraries and header files are
</span><br>
<span class="quotelev1">&gt;    located.  This enables GM support in Open MPI.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ---with-gm-libdir=&lt;directory&gt;
</span><br>
<span class="quotelev1">&gt; -  JMS
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;  --with-mx=&lt;directory&gt;
</span><br>
<span class="quotelev1">&gt;    Specify the directory where the MX libraries and header files are
</span><br>
<span class="quotelev1">&gt;    located.  This enables MX support in Open MPI.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ---with-mx-libdir=&lt;directory&gt;
</span><br>
<span class="quotelev1">&gt; -  JMS
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;  --with-mvapi=&lt;directory&gt;
</span><br>
<span class="quotelev1">&gt;    Specify the directory where the mVAPI libraries and header 
</span><br>
<span class="quotelev1">&gt; files are
</span><br>
<span class="quotelev1">&gt;    located.  This enables mVAPI support in Open MPI.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ---with-mvapi-libdir=&lt;directory&gt;
</span><br>
<span class="quotelev1">&gt; -  JMS
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;  --with-openib=&lt;directory&gt;
</span><br>
<span class="quotelev1">&gt;    Specify the directory where the Open Fabrics (previously known as
</span><br>
<span class="quotelev1">&gt;    OpenIB) libraries and header files are located.  This enables Open
</span><br>
<span class="quotelev1">&gt;    Fabrics support in Open MPI.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ---with-openib-libdir=&lt;directory&gt;
</span><br>
<span class="quotelev1">&gt; -  JMS
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;  --with-tm=&lt;directory&gt;
</span><br>
<span class="quotelev1">&gt;    Specify the directory where the TM libraries and header files are
</span><br>
<span class="quotelev1">&gt;    located.  This enables PBS / Torque support in Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/openib/btl_openib.h
</span><br>
<span class="quotelev1">&gt; ==============================================================
</span><br>
<span class="quotelev1">&gt; ================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/btl_openib.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/openib/btl_openib.h	2006-06-27 
</span><br>
<span class="quotelev1">&gt; 06:43:03 EDT (Tue, 27 Jun 2006)
</span><br>
<span class="quotelev1">&gt; @@ -120,9 +120,6 @@
</span><br>
<span class="quotelev1">&gt;      uint32_t eager_rdma_num;
</span><br>
<span class="quotelev1">&gt;      uint32_t max_eager_rdma;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -    /** Until ticket #142 is fixed; do we print a warning if
</span><br>
<span class="quotelev1">&gt; -        mpi_leave_pinned is true and multiple HCA ports are found? */
</span><br>
<span class="quotelev1">&gt; -    int warn_leave_pinned_multi_port;
</span><br>
<span class="quotelev1">&gt;  }; typedef struct mca_btl_openib_component_t 
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_component_t;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  extern mca_btl_openib_component_t mca_btl_openib_component;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev1">&gt; ==============================================================
</span><br>
<span class="quotelev1">&gt; ================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/btl_openib_component.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/openib/btl_openib_component.c	
</span><br>
<span class="quotelev1">&gt; 2006-06-27 06:43:03 EDT (Tue, 27 Jun 2006)
</span><br>
<span class="quotelev1">&gt; @@ -9,7 +9,6 @@
</span><br>
<span class="quotelev1">&gt;   *                         University of Stuttgart.  All 
</span><br>
<span class="quotelev1">&gt; rights reserved.
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2004-2005 The Regents of the University of 
</span><br>
<span class="quotelev1">&gt; California.
</span><br>
<span class="quotelev1">&gt;   *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2006      Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;   * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;   * 
</span><br>
<span class="quotelev1">&gt;   * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -231,11 +230,7 @@
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      mca_btl_openib_component.max_send_size = 
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_module.super.btl_max_send_size; 
</span><br>
<span class="quotelev1">&gt;      mca_btl_openib_component.eager_limit = 
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_module.super.btl_eager_limit; 
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* Until ticket #142 is fixed */
</span><br>
<span class="quotelev1">&gt; -    
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_param_register_int(&quot;warn_leave_pinned_multi_port&quot;, 
</span><br>
<span class="quotelev1">&gt; -                                      &quot;If set to a true 
</span><br>
<span class="quotelev1">&gt; value, emit a warning when the MCA parameter mpi_leave_pinned 
</span><br>
<span class="quotelev1">&gt; is set to a true value and multiple HCA ports are found.&quot;,
</span><br>
<span class="quotelev1">&gt; -                                      1, 
</span><br>
<span class="quotelev1">&gt; &amp;mca_btl_openib_component.warn_leave_pinned_multi_port);
</span><br>
<span class="quotelev1">&gt; +    
</span><br>
<span class="quotelev1">&gt;      return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; @@ -395,21 +390,7 @@
</span><br>
<span class="quotelev1">&gt;          mca_btl_openib_modex_send();
</span><br>
<span class="quotelev1">&gt;          return NULL; 
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* JMS: Workaround until ticket #142 is fixed.  If
</span><br>
<span class="quotelev1">&gt; -       mpi_leave_pinned == true, then override ib_max_btls and set it
</span><br>
<span class="quotelev1">&gt; -       to 1.  If btl_openib_warn_leave_pinned_multi_port is 
</span><br>
<span class="quotelev1">&gt; true, emit
</span><br>
<span class="quotelev1">&gt; -       a warning that we did this. */
</span><br>
<span class="quotelev1">&gt; -    i = mca_base_param_find(&quot;mpi&quot;, NULL, &quot;leave_pinned&quot;);
</span><br>
<span class="quotelev1">&gt; -    mca_base_param_lookup_int(i, &amp;j);
</span><br>
<span class="quotelev1">&gt; -    if (num_devs &gt; 1 &amp;&amp; 0 != j) {
</span><br>
<span class="quotelev1">&gt; -        mca_btl_openib_component.ib_max_btls = 1;
</span><br>
<span class="quotelev1">&gt; -        if (mca_btl_openib_component.warn_leave_pinned_multi_port) {
</span><br>
<span class="quotelev1">&gt; -            opal_show_help(&quot;help-mpi-btl-openib.txt&quot;, 
</span><br>
<span class="quotelev1">&gt; -                           
</span><br>
<span class="quotelev1">&gt; &quot;btl_openib:leave_pinned_multi_port&quot;, true);
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +       
</span><br>
<span class="quotelev1">&gt;  #if OMPI_MCA_BTL_OPENIB_HAVE_DEVICE_LIST == 0
</span><br>
<span class="quotelev1">&gt;      /* Allocate space for the ib devices */ 
</span><br>
<span class="quotelev1">&gt;      ib_devs = (struct ibv_device**) malloc(num_devs * 
</span><br>
<span class="quotelev1">&gt; sizeof(struct ibv_dev*));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/openib/help-mpi-btl-openib.txt
</span><br>
<span class="quotelev1">&gt; ==============================================================
</span><br>
<span class="quotelev1">&gt; ================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/help-mpi-btl-openib.txt	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/openib/help-mpi-btl-openib.txt	
</span><br>
<span class="quotelev1">&gt; 2006-06-27 06:43:03 EDT (Tue, 27 Jun 2006)
</span><br>
<span class="quotelev1">&gt; @@ -44,15 +44,3 @@
</span><br>
<span class="quotelev1">&gt;       4.096 microseconds * (2^btl_openib_ib_timeout)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;    See the InfiniBand spec 1.2 (section 12.7.34) for more details.
</span><br>
<span class="quotelev1">&gt; -[btl_openib:leave_pinned_multi_port]
</span><br>
<span class="quotelev1">&gt; -# Until ticket #142 is fixed
</span><br>
<span class="quotelev1">&gt; -This release of Open MPI does not support setting the
</span><br>
<span class="quotelev1">&gt; -&quot;mpi_leave_pinned&quot; parameter to a true value when using multiple HCA
</span><br>
<span class="quotelev1">&gt; -ports.  This warning is emitted when multiple HCA ports are detected
</span><br>
<span class="quotelev1">&gt; -and &quot;mpi_leave_pinned&quot; is set to a true value, and is to inform you
</span><br>
<span class="quotelev1">&gt; -that Open MPI is going to automatically disregard all HCA 
</span><br>
<span class="quotelev1">&gt; ports beyond
</span><br>
<span class="quotelev1">&gt; -the first one (i.e., the MCA parameter &quot;btl_openib_max_btls&quot; 
</span><br>
<span class="quotelev1">&gt; parameter
</span><br>
<span class="quotelev1">&gt; -has been overridden and set to 1).
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -You may silence this warning by setting the
</span><br>
<span class="quotelev1">&gt; -&quot;btl_openib_warn_leave_pinned_multi_port&quot; MCA parameter to 0.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0948.php">Josh Aune: "[OMPI devel] Best bw/lat performance for microbenchmark/debug utility"</a>
<li><strong>Previous message:</strong> <a href="0946.php">Sushant Sharma: "[OMPI devel] xcpu"</a>
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
