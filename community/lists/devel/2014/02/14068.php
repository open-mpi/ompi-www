<?
$subject_val = "Re: [OMPI devel] Compilation error: 'OMPI_MPIHANDLES_DLL_PREFIX' undeclared";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 10 09:59:38 2014" -->
<!-- isoreceived="20140210145938" -->
<!-- sent="Mon, 10 Feb 2014 15:59:45 +0100" -->
<!-- isosent="20140210145945" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compilation error: 'OMPI_MPIHANDLES_DLL_PREFIX' undeclared" -->
<!-- id="7BBFC38E-521C-4301-B93A-6A185940AB5D_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Compilation error: 'OMPI_MPIHANDLES_DLL_PREFIX' undeclared<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-10 09:59:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14069.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Compilation error: 'OMPI_MPIHANDLES_DLL_PREFIX'	undeclared"</a>
<li><strong>Previous message:</strong> <a href="14067.php">Mike Dubman: "[OMPI devel] 1.7.5 fails on simple test"</a>
<li><strong>In reply to:</strong> <a href="14066.php">Irvanda Kurniadi: "[OMPI devel] Compilation error: 'OMPI_MPIHANDLES_DLL_PREFIX' undeclared"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14069.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Compilation error: 'OMPI_MPIHANDLES_DLL_PREFIX'	undeclared"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It is a compilation flag passes through the Makefile (when automake is used). I guess you will have to modify the CMake to pass it as well. You need to for the compilation of the ompi/debuggers/ompi_debuggers.c and should point to the location of the installed libraries.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Feb 10, 2014, at 03:36 , Irvanda Kurniadi &lt;irvanda.k_at_[hidden]&gt; wrote:
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14069.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Compilation error: 'OMPI_MPIHANDLES_DLL_PREFIX'	undeclared"</a>
<li><strong>Previous message:</strong> <a href="14067.php">Mike Dubman: "[OMPI devel] 1.7.5 fails on simple test"</a>
<li><strong>In reply to:</strong> <a href="14066.php">Irvanda Kurniadi: "[OMPI devel] Compilation error: 'OMPI_MPIHANDLES_DLL_PREFIX' undeclared"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14069.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Compilation error: 'OMPI_MPIHANDLES_DLL_PREFIX'	undeclared"</a>
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
