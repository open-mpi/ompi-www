<?
$subject_val = "Re: [OMPI devel] 1.5rc5 has been posted";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 30 19:48:06 2010" -->
<!-- isoreceived="20100830234806" -->
<!-- sent="Mon, 30 Aug 2010 16:48:01 -0700" -->
<!-- isosent="20100830234801" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5rc5 has been posted" -->
<!-- id="4D238267-AC00-4D6F-A567-2235C82BA206_at_usgs.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E90B71C7-2B75-4613-9F41-E6D0F2939F61_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.5rc5 has been posted<br>
<strong>From:</strong> Larry Baker (<em>baker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-30 19:48:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8419.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<li><strong>Previous message:</strong> <a href="8417.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<li><strong>In reply to:</strong> <a href="8284.php">Jeff Squyres: "[OMPI devel] 1.5rc5 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8420.php">Larry Baker: "[OMPI devel] Fwd:  1.5rc5 has been posted"</a>
<li><strong>Reply:</strong> <a href="8420.php">Larry Baker: "[OMPI devel] Fwd:  1.5rc5 has been posted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To follow up on <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8417.php">http://www.open-mpi.org/community/lists/devel/2010/08/8417.php</a> 
<br>
: OpenMPI 1.5rc5 fails in opal/tools/wrappers for PGI 10.3.
<br>
<p>The problem appears to be a missing -lpthread in the definition of  
<br>
most of the *LIBS variables in OpenMPI 1.5rc5 opal/tools/wrappers/ 
<br>
Makefile:
<br>
<p><span class="quotelev1">&gt; [root_at_hydra src]# diff openmpi-{1.4.2,1.5rc5}/opal/tools/wrappers/ 
</span><br>
<span class="quotelev1">&gt; Makefile | grep lutil
</span><br>
<span class="quotelev1">&gt; &lt; LIBS = -lnsl -lutil  -lpthread
</span><br>
<span class="quotelev2">&gt; &gt; LIBS = -lnsl  -lutil
</span><br>
<span class="quotelev1">&gt; &lt; OMPI_WRAPPER_EXTRA_LIBS =   -ldl   -Wl,--export-dynamic -lnsl - 
</span><br>
<span class="quotelev1">&gt; lutil -lpthread -ldl
</span><br>
<span class="quotelev2">&gt; &gt; OMPI_WRAPPER_EXTRA_LIBS =   -ldl   -Wl,--export-dynamic -lnsl - 
</span><br>
<span class="quotelev1">&gt; lutil -ldl
</span><br>
<span class="quotelev1">&gt; &lt; OPAL_WRAPPER_EXTRA_LIBS = -ldl   -Wl,--export-dynamic -lnsl -lutil  
</span><br>
<span class="quotelev1">&gt; -lpthread -ldl
</span><br>
<span class="quotelev2">&gt; &gt; OPAL_WRAPPER_EXTRA_LIBS = -ldl   -Wl,--export-dynamic -lnsl -lutil  
</span><br>
<span class="quotelev1">&gt; -ldl
</span><br>
<span class="quotelev1">&gt; &lt; ORTE_WRAPPER_EXTRA_LIBS =  -ldl   -Wl,--export-dynamic -lnsl - 
</span><br>
<span class="quotelev1">&gt; lutil -lpthread -ldl
</span><br>
<span class="quotelev2">&gt; &gt; ORTE_WRAPPER_EXTRA_LIBS =  -ldl   -Wl,--export-dynamic -lnsl - 
</span><br>
<span class="quotelev1">&gt; lutil -ldl
</span><br>
<span class="quotelev1">&gt; &lt; WRAPPER_EXTRA_LIBS =   -ldl   -Wl,--export-dynamic -lnsl -lutil - 
</span><br>
<span class="quotelev1">&gt; lpthread -ldl
</span><br>
<span class="quotelev2">&gt; &gt; WRAPPER_EXTRA_LIBS = -ldl   -Wl,--export-dynamic -lnsl -lutil -ldl
</span><br>
<span class="quotelev1">&gt; &lt; crs_blcr_LIBS = -lnsl -lutil  -lpthread
</span><br>
<span class="quotelev2">&gt; &gt; crs_blcr_LIBS = -lnsl  -lutil -lpthread
</span><br>
<p><span class="quotelev1">&gt; [root_at_hydra src]# diff openmpi-{1.4.2,1.5rc5}/opal/tools/wrappers/ 
</span><br>
<span class="quotelev1">&gt; Makefile | grep LINK
</span><br>
<span class="quotelev1">&gt; &lt; LINK = $(LIBTOOL) --tag=CC $(AM_LIBTOOLFLAGS) $(LIBTOOLFLAGS) \
</span><br>
<span class="quotelev2">&gt; &gt; LINK = $(LIBTOOL) $(AM_V_lt) --tag=CC $(AM_LIBTOOLFLAGS) \
</span><br>
<span class="quotelev1">&gt; &lt; 	$(LINK) $(opal_wrapper_OBJECTS) $(opal_wrapper_LDADD) $(LIBS)
</span><br>
<span class="quotelev2">&gt; &gt; 	$(AM_V_CCLD)$(LINK) $(opal_wrapper_OBJECTS) $(opal_wrapper_LDADD)  
</span><br>
<span class="quotelev1">&gt; $(LIBS)
</span><br>
<p>I don't know anything about automake, so I don't know what code to  
<br>
look at that changed between 1.4.2 and 1.5rc5 that defines the *LIBS  
<br>
Makefile variables.
<br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p>On Aug 17, 2010, at 2:18 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; We still have one known possible regression:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="https://svn.open-mpi.org/trac/ompi/ticket/2530">https://svn.open-mpi.org/trac/ompi/ticket/2530</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But we posted rc5 anyway (there's a bunch of stuff that has been  
</span><br>
<span class="quotelev1">&gt; pending for a while that is now in).  Please test!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/software/ompi/v1.5/">http://www.open-mpi.org/software/ompi/v1.5/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="8419.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<li><strong>Previous message:</strong> <a href="8417.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<li><strong>In reply to:</strong> <a href="8284.php">Jeff Squyres: "[OMPI devel] 1.5rc5 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8420.php">Larry Baker: "[OMPI devel] Fwd:  1.5rc5 has been posted"</a>
<li><strong>Reply:</strong> <a href="8420.php">Larry Baker: "[OMPI devel] Fwd:  1.5rc5 has been posted"</a>
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
