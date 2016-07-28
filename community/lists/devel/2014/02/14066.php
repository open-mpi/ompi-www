<?
$subject_val = "[OMPI devel] Compilation error: 'OMPI_MPIHANDLES_DLL_PREFIX' undeclared";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  9 21:36:08 2014" -->
<!-- isoreceived="20140210023608" -->
<!-- sent="Mon, 10 Feb 2014 11:36:07 +0900" -->
<!-- isosent="20140210023607" -->
<!-- name="Irvanda Kurniadi" -->
<!-- email="irvanda.k_at_[hidden]" -->
<!-- subject="[OMPI devel] Compilation error: 'OMPI_MPIHANDLES_DLL_PREFIX' undeclared" -->
<!-- id="CAPgw+iMuNYxd873Td3asq64ZHLcBuaH=TxaMkMULKLSdyDKbWw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Compilation error: 'OMPI_MPIHANDLES_DLL_PREFIX' undeclared<br>
<strong>From:</strong> Irvanda Kurniadi (<em>irvanda.k_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-09 21:36:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14067.php">Mike Dubman: "[OMPI devel] 1.7.5 fails on simple test"</a>
<li><strong>Previous message:</strong> <a href="14065.php">Paul Hargrove: "[OMPI devel] [PATCH] Re: Still having issues w/ opal_path_nfs and EPERM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14068.php">George Bosilca: "Re: [OMPI devel] Compilation error: 'OMPI_MPIHANDLES_DLL_PREFIX' undeclared"</a>
<li><strong>Reply:</strong> <a href="14068.php">George Bosilca: "Re: [OMPI devel] Compilation error: 'OMPI_MPIHANDLES_DLL_PREFIX' undeclared"</a>
<li><strong>Reply:</strong> <a href="14069.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Compilation error: 'OMPI_MPIHANDLES_DLL_PREFIX'	undeclared"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm porting OpenMPI to L4/fiasco. I found this error message while
<br>
compiling OpenMPI:
<br>
error: 'OMPI_MPIHANDLES_DLL_PREFIX' undeclared (first use in this function)
<br>
error: 'OMPI_MSGQ_DLL_PREFIX' undeclared (first use in this function)
<br>
<p>I found the OMPI_MPIHANDLES_DLL_PREFIX in CMakelist.txt like below:
<br>
SET_TARGET_PROPERTIES(libmpi PROPERTIES COMPILE_FLAGS
<br>
&quot;${OMPI_C_DEF_PRE}OMPI_MPIHANDLES_DLL_PREFIX=libompi_dbg_mpihandles
<br>
&nbsp;${OMPI_C_DEF_PRE}OMPI_MSGQ_DLL_PREFIX=libompi_dbg_msgq&quot;)
<br>
<p>I don't know how to use this CMakelist.txt in L4/fiasco. Or maybe this
<br>
problem can be fixed without CMakelist.txt. Anybody knows how to overcome
<br>
this problem?
<br>
<p>regards,
<br>
Irvanda
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14066/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14067.php">Mike Dubman: "[OMPI devel] 1.7.5 fails on simple test"</a>
<li><strong>Previous message:</strong> <a href="14065.php">Paul Hargrove: "[OMPI devel] [PATCH] Re: Still having issues w/ opal_path_nfs and EPERM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14068.php">George Bosilca: "Re: [OMPI devel] Compilation error: 'OMPI_MPIHANDLES_DLL_PREFIX' undeclared"</a>
<li><strong>Reply:</strong> <a href="14068.php">George Bosilca: "Re: [OMPI devel] Compilation error: 'OMPI_MPIHANDLES_DLL_PREFIX' undeclared"</a>
<li><strong>Reply:</strong> <a href="14069.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Compilation error: 'OMPI_MPIHANDLES_DLL_PREFIX'	undeclared"</a>
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
