<?
$subject_val = "Re: [OMPI devel] 1.7 rc4 compilation error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 26 18:31:08 2012" -->
<!-- isoreceived="20121026223108" -->
<!-- sent="Fri, 26 Oct 2012 15:31:01 -0700" -->
<!-- isosent="20121026223101" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7 rc4 compilation error" -->
<!-- id="29469B65-2031-4865-A6C1-7FB87F49E8AA_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2BB8052E-B093-433E-B1B9-62A73903E40C_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7 rc4 compilation error<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-26 18:31:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11660.php">Ralph Castain: "[OMPI devel] Warnings in trunk: libnbc and coll-nbc"</a>
<li><strong>Previous message:</strong> <a href="11658.php">Shamis, Pavel: "Re: [OMPI devel] 1.7 rc4 compilation error"</a>
<li><strong>In reply to:</strong> <a href="11658.php">Shamis, Pavel: "Re: [OMPI devel] 1.7 rc4 compilation error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11663.php">Edgar Gabriel: "Re: [OMPI devel] 1.7 rc4 compilation error"</a>
<li><strong>Reply:</strong> <a href="11663.php">Edgar Gabriel: "Re: [OMPI devel] 1.7 rc4 compilation error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, I'll fix for tonights tarball.
<br>
<p>Thanks!
<br>
<p>On Oct 26, 2012, at 3:28 PM, &quot;Shamis, Pavel&quot; &lt;shamisp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; There is a bug in makefile. The file existing in svn, but it is not listed in the Makefile.am. As a result, it wasn't pulled to the tarball.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pavel (Pasha) Shamis
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Computer Science Research Group
</span><br>
<span class="quotelev1">&gt; Computer Science and Math Division
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 26, 2012, at 2:33 PM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; we have trouble compiling the 1.7 series on a machine in Dresden.
</span><br>
<span class="quotelev1">&gt; Specifically, we receive an error message when compiling the
</span><br>
<span class="quotelev1">&gt; bcol/iboffload component (other infiniband components compile fine).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any idea/suggestions what we might be doing wrong or what to look for?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/home/h2/gabriel/openmpi-1.7rc4/ompi/mca/bcol/iboffload'
</span><br>
<span class="quotelev1">&gt; CC       bcol_iboffload_module.lo
</span><br>
<span class="quotelev1">&gt; CC       bcol_iboffload_mca.lo
</span><br>
<span class="quotelev1">&gt; CC       bcol_iboffload_endpoint.lo
</span><br>
<span class="quotelev1">&gt; CC       bcol_iboffload_frag.lo
</span><br>
<span class="quotelev1">&gt; In file included from bcol_iboffload_frag.c:16:0:
</span><br>
<span class="quotelev1">&gt; bcol_iboffload.h:46:36: fatal error: bcol_iboffload_qp_info.h: No such
</span><br>
<span class="quotelev1">&gt; file or directory
</span><br>
<span class="quotelev1">&gt; compilation terminated.
</span><br>
<span class="quotelev1">&gt; make[2]: *** [bcol_iboffload_frag.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev1">&gt; In file included from bcol_iboffload_mca.c:18:0:
</span><br>
<span class="quotelev1">&gt; bcol_iboffload.h:46:36: fatal error: bcol_iboffload_qp_info.h: No such
</span><br>
<span class="quotelev1">&gt; file or directory
</span><br>
<span class="quotelev1">&gt; compilation terminated.
</span><br>
<span class="quotelev1">&gt; make[2]: *** [bcol_iboffload_mca.lo] Error 1
</span><br>
<span class="quotelev1">&gt; In file included from bcol_iboffload_endpoint.c:23:0:
</span><br>
<span class="quotelev1">&gt; bcol_iboffload.h:46:36: fatal error: bcol_iboffload_qp_info.h: No such
</span><br>
<span class="quotelev1">&gt; file or directory
</span><br>
<span class="quotelev1">&gt; compilation terminated.
</span><br>
<span class="quotelev1">&gt; make[2]: *** [bcol_iboffload_endpoint.lo] Error 1
</span><br>
<span class="quotelev1">&gt; In file included from bcol_iboffload_module.c:39:0:
</span><br>
<span class="quotelev1">&gt; bcol_iboffload.h:46:36: fatal error: bcol_iboffload_qp_info.h: No such
</span><br>
<span class="quotelev1">&gt; file or directory
</span><br>
<span class="quotelev1">&gt; compilation terminated.
</span><br>
<span class="quotelev1">&gt; make[2]: *** [bcol_iboffload_module.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/h2/gabriel/openmpi-1.7rc4/ompi/mca/bcol/iboffload'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/h2/gabriel/openmpi-1.7rc4/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Edgar Gabriel
</span><br>
<span class="quotelev1">&gt; Associate Professor
</span><br>
<span class="quotelev1">&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev1">&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev1">&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev1">&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;signature.asc&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="11660.php">Ralph Castain: "[OMPI devel] Warnings in trunk: libnbc and coll-nbc"</a>
<li><strong>Previous message:</strong> <a href="11658.php">Shamis, Pavel: "Re: [OMPI devel] 1.7 rc4 compilation error"</a>
<li><strong>In reply to:</strong> <a href="11658.php">Shamis, Pavel: "Re: [OMPI devel] 1.7 rc4 compilation error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11663.php">Edgar Gabriel: "Re: [OMPI devel] 1.7 rc4 compilation error"</a>
<li><strong>Reply:</strong> <a href="11663.php">Edgar Gabriel: "Re: [OMPI devel] 1.7 rc4 compilation error"</a>
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
