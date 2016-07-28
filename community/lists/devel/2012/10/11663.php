<?
$subject_val = "Re: [OMPI devel] 1.7 rc4 compilation error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 29 14:55:53 2012" -->
<!-- isoreceived="20121029185553" -->
<!-- sent="Mon, 29 Oct 2012 13:55:52 -0500" -->
<!-- isosent="20121029185552" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7 rc4 compilation error" -->
<!-- id="508ED138.40909_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="29469B65-2031-4865-A6C1-7FB87F49E8AA_at_open-mpi.org" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-29 14:55:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11664.php">Ralph Castain: "Re: [OMPI devel] 1.7 rc4 compilation error"</a>
<li><strong>Previous message:</strong> <a href="11662.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="11659.php">Ralph Castain: "Re: [OMPI devel] 1.7 rc4 compilation error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11664.php">Ralph Castain: "Re: [OMPI devel] 1.7 rc4 compilation error"</a>
<li><strong>Reply:</strong> <a href="11664.php">Ralph Castain: "Re: [OMPI devel] 1.7 rc4 compilation error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm sorry to add one more thing to the list, but beyond this file, it
<br>
looks like also the entire ompi/mca/common/verbs/ directory is also
<br>
missing in the 1.7 branch, but is required to compile the bcoll
<br>
framework.  It is there in the trunk, but missing in the 1.7 branch...
<br>
<p>Thanks
<br>
Edgar
<br>
<p><p>On 10/26/2012 5:31 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Okay, I'll fix for tonights tarball.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 26, 2012, at 3:28 PM, &quot;Shamis, Pavel&quot; &lt;shamisp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There is a bug in makefile. The file existing in svn, but it is not listed in the Makefile.am. As a result, it wasn't pulled to the tarball.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Pavel (Pasha) Shamis
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science Research Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science and Math Division
</span><br>
<span class="quotelev2">&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 26, 2012, at 2:33 PM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; we have trouble compiling the 1.7 series on a machine in Dresden.
</span><br>
<span class="quotelev2">&gt;&gt; Specifically, we receive an error message when compiling the
</span><br>
<span class="quotelev2">&gt;&gt; bcol/iboffload component (other infiniband components compile fine).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any idea/suggestions what we might be doing wrong or what to look for?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt; `/home/h2/gabriel/openmpi-1.7rc4/ompi/mca/bcol/iboffload'
</span><br>
<span class="quotelev2">&gt;&gt; CC       bcol_iboffload_module.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       bcol_iboffload_mca.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       bcol_iboffload_endpoint.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       bcol_iboffload_frag.lo
</span><br>
<span class="quotelev2">&gt;&gt; In file included from bcol_iboffload_frag.c:16:0:
</span><br>
<span class="quotelev2">&gt;&gt; bcol_iboffload.h:46:36: fatal error: bcol_iboffload_qp_info.h: No such
</span><br>
<span class="quotelev2">&gt;&gt; file or directory
</span><br>
<span class="quotelev2">&gt;&gt; compilation terminated.
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [bcol_iboffload_frag.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev2">&gt;&gt; In file included from bcol_iboffload_mca.c:18:0:
</span><br>
<span class="quotelev2">&gt;&gt; bcol_iboffload.h:46:36: fatal error: bcol_iboffload_qp_info.h: No such
</span><br>
<span class="quotelev2">&gt;&gt; file or directory
</span><br>
<span class="quotelev2">&gt;&gt; compilation terminated.
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [bcol_iboffload_mca.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; In file included from bcol_iboffload_endpoint.c:23:0:
</span><br>
<span class="quotelev2">&gt;&gt; bcol_iboffload.h:46:36: fatal error: bcol_iboffload_qp_info.h: No such
</span><br>
<span class="quotelev2">&gt;&gt; file or directory
</span><br>
<span class="quotelev2">&gt;&gt; compilation terminated.
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [bcol_iboffload_endpoint.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; In file included from bcol_iboffload_module.c:39:0:
</span><br>
<span class="quotelev2">&gt;&gt; bcol_iboffload.h:46:36: fatal error: bcol_iboffload_qp_info.h: No such
</span><br>
<span class="quotelev2">&gt;&gt; file or directory
</span><br>
<span class="quotelev2">&gt;&gt; compilation terminated.
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [bcol_iboffload_module.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/home/h2/gabriel/openmpi-1.7rc4/ompi/mca/bcol/iboffload'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/home/h2/gabriel/openmpi-1.7rc4/ompi'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Edgar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Edgar Gabriel
</span><br>
<span class="quotelev2">&gt;&gt; Associate Professor
</span><br>
<span class="quotelev2">&gt;&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev2">&gt;&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev2">&gt;&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev2">&gt;&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;signature.asc&gt;_______________________________________________
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
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11663/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11664.php">Ralph Castain: "Re: [OMPI devel] 1.7 rc4 compilation error"</a>
<li><strong>Previous message:</strong> <a href="11662.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="11659.php">Ralph Castain: "Re: [OMPI devel] 1.7 rc4 compilation error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11664.php">Ralph Castain: "Re: [OMPI devel] 1.7 rc4 compilation error"</a>
<li><strong>Reply:</strong> <a href="11664.php">Ralph Castain: "Re: [OMPI devel] 1.7 rc4 compilation error"</a>
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
