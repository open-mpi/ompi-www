<?
$subject_val = "[OMPI devel] 1.7 rc4 compilation error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 26 14:33:01 2012" -->
<!-- isoreceived="20121026183301" -->
<!-- sent="Fri, 26 Oct 2012 13:33:02 -0500" -->
<!-- isosent="20121026183302" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7 rc4 compilation error" -->
<!-- id="508AD75E.1090601_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7 rc4 compilation error<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-26 14:33:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11658.php">Shamis, Pavel: "Re: [OMPI devel] 1.7 rc4 compilation error"</a>
<li><strong>Previous message:</strong> <a href="11656.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11658.php">Shamis, Pavel: "Re: [OMPI devel] 1.7 rc4 compilation error"</a>
<li><strong>Reply:</strong> <a href="11658.php">Shamis, Pavel: "Re: [OMPI devel] 1.7 rc4 compilation error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
we have trouble compiling the 1.7 series on a machine in Dresden.
<br>
Specifically, we receive an error message when compiling the
<br>
bcol/iboffload component (other infiniband components compile fine).
<br>
<p>Any idea/suggestions what we might be doing wrong or what to look for?
<br>
<p>make[2]: Entering directory
<br>
`/home/h2/gabriel/openmpi-1.7rc4/ompi/mca/bcol/iboffload'
<br>
&nbsp;&nbsp;CC       bcol_iboffload_module.lo
<br>
&nbsp;&nbsp;CC       bcol_iboffload_mca.lo
<br>
&nbsp;&nbsp;CC       bcol_iboffload_endpoint.lo
<br>
&nbsp;&nbsp;CC       bcol_iboffload_frag.lo
<br>
In file included from bcol_iboffload_frag.c:16:0:
<br>
bcol_iboffload.h:46:36: fatal error: bcol_iboffload_qp_info.h: No such
<br>
file or directory
<br>
compilation terminated.
<br>
make[2]: *** [bcol_iboffload_frag.lo] Error 1
<br>
make[2]: *** Waiting for unfinished jobs....
<br>
In file included from bcol_iboffload_mca.c:18:0:
<br>
bcol_iboffload.h:46:36: fatal error: bcol_iboffload_qp_info.h: No such
<br>
file or directory
<br>
compilation terminated.
<br>
make[2]: *** [bcol_iboffload_mca.lo] Error 1
<br>
In file included from bcol_iboffload_endpoint.c:23:0:
<br>
bcol_iboffload.h:46:36: fatal error: bcol_iboffload_qp_info.h: No such
<br>
file or directory
<br>
compilation terminated.
<br>
make[2]: *** [bcol_iboffload_endpoint.lo] Error 1
<br>
In file included from bcol_iboffload_module.c:39:0:
<br>
bcol_iboffload.h:46:36: fatal error: bcol_iboffload_qp_info.h: No such
<br>
file or directory
<br>
compilation terminated.
<br>
make[2]: *** [bcol_iboffload_module.lo] Error 1
<br>
make[2]: Leaving directory
<br>
`/home/h2/gabriel/openmpi-1.7rc4/ompi/mca/bcol/iboffload'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/home/h2/gabriel/openmpi-1.7rc4/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p>Thanks
<br>
Edgar
<br>
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
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11657/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11658.php">Shamis, Pavel: "Re: [OMPI devel] 1.7 rc4 compilation error"</a>
<li><strong>Previous message:</strong> <a href="11656.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11658.php">Shamis, Pavel: "Re: [OMPI devel] 1.7 rc4 compilation error"</a>
<li><strong>Reply:</strong> <a href="11658.php">Shamis, Pavel: "Re: [OMPI devel] 1.7 rc4 compilation error"</a>
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
