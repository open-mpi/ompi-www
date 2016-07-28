<?
$subject_val = "Re: [OMPI devel] 1.7 rc4 compilation error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 26 18:28:50 2012" -->
<!-- isoreceived="20121026222850" -->
<!-- sent="Fri, 26 Oct 2012 18:28:45 -0400" -->
<!-- isosent="20121026222845" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7 rc4 compilation error" -->
<!-- id="2BB8052E-B093-433E-B1B9-62A73903E40C_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="508AD75E.1090601_at_cs.uh.edu" -->
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
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-26 18:28:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11659.php">Ralph Castain: "Re: [OMPI devel] 1.7 rc4 compilation error"</a>
<li><strong>Previous message:</strong> <a href="11657.php">Edgar Gabriel: "[OMPI devel] 1.7 rc4 compilation error"</a>
<li><strong>In reply to:</strong> <a href="11657.php">Edgar Gabriel: "[OMPI devel] 1.7 rc4 compilation error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11659.php">Ralph Castain: "Re: [OMPI devel] 1.7 rc4 compilation error"</a>
<li><strong>Reply:</strong> <a href="11659.php">Ralph Castain: "Re: [OMPI devel] 1.7 rc4 compilation error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is a bug in makefile. The file existing in svn, but it is not listed in the Makefile.am. As a result, it wasn't pulled to the tarball.
<br>
<p>Pavel (Pasha) Shamis
<br>
<pre>
---
Computer Science Research Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Oct 26, 2012, at 2:33 PM, Edgar Gabriel wrote:
we have trouble compiling the 1.7 series on a machine in Dresden.
Specifically, we receive an error message when compiling the
bcol/iboffload component (other infiniband components compile fine).
Any idea/suggestions what we might be doing wrong or what to look for?
make[2]: Entering directory
`/home/h2/gabriel/openmpi-1.7rc4/ompi/mca/bcol/iboffload'
 CC       bcol_iboffload_module.lo
 CC       bcol_iboffload_mca.lo
 CC       bcol_iboffload_endpoint.lo
 CC       bcol_iboffload_frag.lo
In file included from bcol_iboffload_frag.c:16:0:
bcol_iboffload.h:46:36: fatal error: bcol_iboffload_qp_info.h: No such
file or directory
compilation terminated.
make[2]: *** [bcol_iboffload_frag.lo] Error 1
make[2]: *** Waiting for unfinished jobs....
In file included from bcol_iboffload_mca.c:18:0:
bcol_iboffload.h:46:36: fatal error: bcol_iboffload_qp_info.h: No such
file or directory
compilation terminated.
make[2]: *** [bcol_iboffload_mca.lo] Error 1
In file included from bcol_iboffload_endpoint.c:23:0:
bcol_iboffload.h:46:36: fatal error: bcol_iboffload_qp_info.h: No such
file or directory
compilation terminated.
make[2]: *** [bcol_iboffload_endpoint.lo] Error 1
In file included from bcol_iboffload_module.c:39:0:
bcol_iboffload.h:46:36: fatal error: bcol_iboffload_qp_info.h: No such
file or directory
compilation terminated.
make[2]: *** [bcol_iboffload_module.lo] Error 1
make[2]: Leaving directory
`/home/h2/gabriel/openmpi-1.7rc4/ompi/mca/bcol/iboffload'
make[1]: *** [all-recursive] Error 1
make[1]: Leaving directory `/home/h2/gabriel/openmpi-1.7rc4/ompi'
make: *** [all-recursive] Error 1
Thanks
Edgar
--
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
&lt;signature.asc&gt;_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11659.php">Ralph Castain: "Re: [OMPI devel] 1.7 rc4 compilation error"</a>
<li><strong>Previous message:</strong> <a href="11657.php">Edgar Gabriel: "[OMPI devel] 1.7 rc4 compilation error"</a>
<li><strong>In reply to:</strong> <a href="11657.php">Edgar Gabriel: "[OMPI devel] 1.7 rc4 compilation error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11659.php">Ralph Castain: "Re: [OMPI devel] 1.7 rc4 compilation error"</a>
<li><strong>Reply:</strong> <a href="11659.php">Ralph Castain: "Re: [OMPI devel] 1.7 rc4 compilation error"</a>
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
