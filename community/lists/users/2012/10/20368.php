<?
$subject_val = "Re: [OMPI users] Linking failure on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  2 00:06:58 2012" -->
<!-- isoreceived="20121002040658" -->
<!-- sent="Mon, 01 Oct 2012 22:06:50 -0600" -->
<!-- isosent="20121002040650" -->
<!-- name="Damien Hocking" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Linking failure on Windows" -->
<!-- id="506A685A.8070602_at_khubla.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="506A6642.1020906_at_auckland.ac.nz" -->
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
<strong>Date:</strong> 2012-10-02 00:06:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20369.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>Previous message:</strong> <a href="20367.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>In reply to:</strong> <a href="20367.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20370.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>Reply:</strong> <a href="20370.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So mpicc builds it completely?  The only thing I can think of is look 
<br>
closely at both the compile and link command lines and see what's 
<br>
different.  It might be going sideways at the compile from something in 
<br>
an include with a preprocessor def.
<br>
<p>Damien
<br>
<p>On 01/10/2012 9:57 PM, Gib Bogle wrote:
<br>
<span class="quotelev1">&gt; Hi Damien,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've checked and double-checked, and I can't see anything not 32-bit.  
</span><br>
<span class="quotelev1">&gt; In fact my VS2005 only knows about 32-bit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just tested copying the source code with appropriate include 
</span><br>
<span class="quotelev1">&gt; directories to another directory and built the executable successfully 
</span><br>
<span class="quotelev1">&gt; with mpicc.  But I can't see that there is anything in the mpicc link 
</span><br>
<span class="quotelev1">&gt; (with --showme:link) that is not in VS.  The command line in VS has a 
</span><br>
<span class="quotelev1">&gt; lot more stuff in it, to be sure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/10/2012 3:55 p.m., Damien Hocking wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Gib,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you have OMPI_IMPORTS set that usually removes those symbol 
</span><br>
<span class="quotelev2">&gt;&gt; errors.  Are you absolutely sure you have everything set to 32-bit in 
</span><br>
<span class="quotelev2">&gt;&gt; Visual Studio?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Damien
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 01/10/2012 7:55 PM, Gib Bogle wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am building the Sundials examples, with MS Visual Studio 2005 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; version 8 (i.e. 32-bit) on Windows 7 64-bit.  The OpenMPI version is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI_1.6.2-win32.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All the parallel examples fail with the same linker errors.  I have 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; added the preprocessor definitions OMPI_IMPORTS, OPAL_IMPORTS and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ORTE_IMPORTS.  The libraries that are being linked are: libmpi.lib, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libmpi_cxx.lib, libopen-pal.lib, libopen-rte.lib.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here are the errors:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1&gt;Linking...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1&gt;sundials_nvecparallel.lib(nvector_parallel.obj) : error LNK2019: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unresolved external symbol _ompi_mpi_op_sum referenced in function 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _VAllReduce_Parallel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1&gt;sundials_nvecparallel.lib(nvector_parallel.obj) : error LNK2019: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unresolved external symbol _ompi_mpi_op_max referenced in function 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _VAllReduce_Parallel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1&gt;sundials_nvecparallel.lib(nvector_parallel.obj) : error LNK2019: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unresolved external symbol _ompi_mpi_double referenced in function 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _VAllReduce_Parallel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1&gt;sundials_nvecparallel.lib(nvector_parallel.obj) : error LNK2019: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unresolved external symbol _ompi_mpi_op_min referenced in function 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _VAllReduce_Parallel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1&gt;sundials_nvecparallel.lib(nvector_parallel.obj) : error LNK2019: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unresolved external symbol _ompi_mpi_long referenced in function 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _N_VNewEmpty_Parallel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1&gt;E:\Sundials-Win32\examples\cvode\parallel\Release\cvDiurnal_kry_bbd_p.exe 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; : fatal error LNK1120: 5 unresolved externals
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What am I missing?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20369.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>Previous message:</strong> <a href="20367.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>In reply to:</strong> <a href="20367.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20370.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>Reply:</strong> <a href="20370.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
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
