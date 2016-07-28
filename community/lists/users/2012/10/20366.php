<?
$subject_val = "Re: [OMPI users] Linking failure on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  1 22:55:08 2012" -->
<!-- isoreceived="20121002025508" -->
<!-- sent="Mon, 01 Oct 2012 20:55:01 -0600" -->
<!-- isosent="20121002025501" -->
<!-- name="Damien Hocking" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Linking failure on Windows" -->
<!-- id="506A5785.7030606_at_khubla.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="506A499E.7090000_at_auckland.ac.nz" -->
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
<strong>Subject:</strong> Re: [OMPI users] Linking failure on Windows<br>
<strong>From:</strong> Damien Hocking (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-01 22:55:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20367.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>Previous message:</strong> <a href="20365.php">Gib Bogle: "[OMPI users] Linking failure on Windows"</a>
<li><strong>In reply to:</strong> <a href="20365.php">Gib Bogle: "[OMPI users] Linking failure on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20367.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>Reply:</strong> <a href="20367.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>Reply:</strong> <a href="20369.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gib,
<br>
<p>If you have OMPI_IMPORTS set that usually removes those symbol errors.  
<br>
Are you absolutely sure you have everything set to 32-bit in Visual Studio?
<br>
<p>Damien
<br>
<p>On 01/10/2012 7:55 PM, Gib Bogle wrote:
<br>
<span class="quotelev1">&gt; I am building the Sundials examples, with MS Visual Studio 2005 
</span><br>
<span class="quotelev1">&gt; version 8 (i.e. 32-bit) on Windows 7 64-bit.  The OpenMPI version is 
</span><br>
<span class="quotelev1">&gt; OpenMPI_1.6.2-win32.
</span><br>
<span class="quotelev1">&gt; All the parallel examples fail with the same linker errors.  I have 
</span><br>
<span class="quotelev1">&gt; added the preprocessor definitions OMPI_IMPORTS, OPAL_IMPORTS and 
</span><br>
<span class="quotelev1">&gt; ORTE_IMPORTS.  The libraries that are being linked are: libmpi.lib, 
</span><br>
<span class="quotelev1">&gt; libmpi_cxx.lib, libopen-pal.lib, libopen-rte.lib.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here are the errors:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1&gt;Linking...
</span><br>
<span class="quotelev1">&gt; 1&gt;sundials_nvecparallel.lib(nvector_parallel.obj) : error LNK2019: 
</span><br>
<span class="quotelev1">&gt; unresolved external symbol _ompi_mpi_op_sum referenced in function 
</span><br>
<span class="quotelev1">&gt; _VAllReduce_Parallel
</span><br>
<span class="quotelev1">&gt; 1&gt;sundials_nvecparallel.lib(nvector_parallel.obj) : error LNK2019: 
</span><br>
<span class="quotelev1">&gt; unresolved external symbol _ompi_mpi_op_max referenced in function 
</span><br>
<span class="quotelev1">&gt; _VAllReduce_Parallel
</span><br>
<span class="quotelev1">&gt; 1&gt;sundials_nvecparallel.lib(nvector_parallel.obj) : error LNK2019: 
</span><br>
<span class="quotelev1">&gt; unresolved external symbol _ompi_mpi_double referenced in function 
</span><br>
<span class="quotelev1">&gt; _VAllReduce_Parallel
</span><br>
<span class="quotelev1">&gt; 1&gt;sundials_nvecparallel.lib(nvector_parallel.obj) : error LNK2019: 
</span><br>
<span class="quotelev1">&gt; unresolved external symbol _ompi_mpi_op_min referenced in function 
</span><br>
<span class="quotelev1">&gt; _VAllReduce_Parallel
</span><br>
<span class="quotelev1">&gt; 1&gt;sundials_nvecparallel.lib(nvector_parallel.obj) : error LNK2019: 
</span><br>
<span class="quotelev1">&gt; unresolved external symbol _ompi_mpi_long referenced in function 
</span><br>
<span class="quotelev1">&gt; _N_VNewEmpty_Parallel
</span><br>
<span class="quotelev1">&gt; 1&gt;E:\Sundials-Win32\examples\cvode\parallel\Release\cvDiurnal_kry_bbd_p.exe 
</span><br>
<span class="quotelev1">&gt; : fatal error LNK1120: 5 unresolved externals
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What am I missing?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Gib
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20367.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>Previous message:</strong> <a href="20365.php">Gib Bogle: "[OMPI users] Linking failure on Windows"</a>
<li><strong>In reply to:</strong> <a href="20365.php">Gib Bogle: "[OMPI users] Linking failure on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20367.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>Reply:</strong> <a href="20367.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>Reply:</strong> <a href="20369.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
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
