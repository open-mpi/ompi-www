<?
$subject_val = "Re: [OMPI devel] Compilation error: 'OMPI_MPIHANDLES_DLL_PREFIX'	undeclared";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 10 10:30:53 2014" -->
<!-- isoreceived="20140210153053" -->
<!-- sent="Mon, 10 Feb 2014 15:30:51 +0000" -->
<!-- isosent="20140210153051" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compilation error: 'OMPI_MPIHANDLES_DLL_PREFIX'	undeclared" -->
<!-- id="BF7872F8-CD3E-4C6E-BDA0-EBD87A844BB4_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="CAPgw+iMuNYxd873Td3asq64ZHLcBuaH=TxaMkMULKLSdyDKbWw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Compilation error: 'OMPI_MPIHANDLES_DLL_PREFIX'	undeclared<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-10 10:30:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14070.php">Rolf vandeVaart: "Re: [OMPI devel] 1.7.5 fails on simple test"</a>
<li><strong>Previous message:</strong> <a href="14068.php">George Bosilca: "Re: [OMPI devel] Compilation error: 'OMPI_MPIHANDLES_DLL_PREFIX' undeclared"</a>
<li><strong>In reply to:</strong> <a href="14066.php">Irvanda Kurniadi: "[OMPI devel] Compilation error: 'OMPI_MPIHANDLES_DLL_PREFIX' undeclared"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Note that we have removed all CMake support from Open MPI starting with v1.7.
<br>
<p>Is there a reason you're using the CMake support instead of the Autotools support?  We only had the CMake support there for MS Windows support, which has been removed (which is why the CMake support was removed).
<br>
<p><p>On Feb 9, 2014, at 9:36 PM, Irvanda Kurniadi &lt;irvanda.k_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm porting OpenMPI to L4/fiasco. I found this error message while compiling OpenMPI:
</span><br>
<span class="quotelev1">&gt; error: &#145;OMPI_MPIHANDLES_DLL_PREFIX&#146; undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; error: &#145;OMPI_MSGQ_DLL_PREFIX&#146; undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I found the OMPI_MPIHANDLES_DLL_PREFIX in CMakelist.txt like below:
</span><br>
<span class="quotelev1">&gt; SET_TARGET_PROPERTIES(libmpi PROPERTIES COMPILE_FLAGS                       &quot;${OMPI_C_DEF_PRE}OMPI_MPIHANDLES_DLL_PREFIX=libompi_dbg_mpihandles
</span><br>
<span class="quotelev1">&gt;  ${OMPI_C_DEF_PRE}OMPI_MSGQ_DLL_PREFIX=libompi_dbg_msgq&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know how to use this CMakelist.txt in L4/fiasco. Or maybe this problem can be fixed without CMakelist.txt. Anybody knows how to overcome this problem?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; regards,
</span><br>
<span class="quotelev1">&gt; Irvanda
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="14070.php">Rolf vandeVaart: "Re: [OMPI devel] 1.7.5 fails on simple test"</a>
<li><strong>Previous message:</strong> <a href="14068.php">George Bosilca: "Re: [OMPI devel] Compilation error: 'OMPI_MPIHANDLES_DLL_PREFIX' undeclared"</a>
<li><strong>In reply to:</strong> <a href="14066.php">Irvanda Kurniadi: "[OMPI devel] Compilation error: 'OMPI_MPIHANDLES_DLL_PREFIX' undeclared"</a>
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
