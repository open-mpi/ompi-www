<?
$subject_val = "Re: [OMPI users] Linking failure on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  1 23:58:00 2012" -->
<!-- isoreceived="20121002035800" -->
<!-- sent="Tue, 02 Oct 2012 16:57:54 +1300" -->
<!-- isosent="20121002035754" -->
<!-- name="Gib Bogle" -->
<!-- email="g.bogle_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Linking failure on Windows" -->
<!-- id="506A6642.1020906_at_auckland.ac.nz" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="506A5785.7030606_at_khubla.com" -->
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
<strong>From:</strong> Gib Bogle (<em>g.bogle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-01 23:57:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20368.php">Damien Hocking: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>Previous message:</strong> <a href="20366.php">Damien Hocking: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>In reply to:</strong> <a href="20366.php">Damien Hocking: "Re: [OMPI users] Linking failure on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20368.php">Damien Hocking: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>Reply:</strong> <a href="20368.php">Damien Hocking: "Re: [OMPI users] Linking failure on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Damien,
<br>
<p>I've checked and double-checked, and I can't see anything not 32-bit.  In fact 
<br>
my VS2005 only knows about 32-bit.
<br>
<p>I just tested copying the source code with appropriate include directories to 
<br>
another directory and built the executable successfully with mpicc.  But I can't 
<br>
see that there is anything in the mpicc link (with --showme:link) that is not in 
<br>
VS.  The command line in VS has a lot more stuff in it, to be sure.
<br>
<p>Gib
<br>
<p>On 2/10/2012 3:55 p.m., Damien Hocking wrote:
<br>
<span class="quotelev1">&gt; Gib,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you have OMPI_IMPORTS set that usually removes those symbol errors.  Are 
</span><br>
<span class="quotelev1">&gt; you absolutely sure you have everything set to 32-bit in Visual Studio?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Damien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 01/10/2012 7:55 PM, Gib Bogle wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I am building the Sundials examples, with MS Visual Studio 2005 version 8 
</span><br>
<span class="quotelev2">&gt;&gt; (i.e. 32-bit) on Windows 7 64-bit.  The OpenMPI version is OpenMPI_1.6.2-win32.
</span><br>
<span class="quotelev2">&gt;&gt; All the parallel examples fail with the same linker errors.  I have added the 
</span><br>
<span class="quotelev2">&gt;&gt; preprocessor definitions OMPI_IMPORTS, OPAL_IMPORTS and ORTE_IMPORTS.  The 
</span><br>
<span class="quotelev2">&gt;&gt; libraries that are being linked are: libmpi.lib, libmpi_cxx.lib, 
</span><br>
<span class="quotelev2">&gt;&gt; libopen-pal.lib, libopen-rte.lib.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here are the errors:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1&gt;Linking...
</span><br>
<span class="quotelev2">&gt;&gt; 1&gt;sundials_nvecparallel.lib(nvector_parallel.obj) : error LNK2019: unresolved 
</span><br>
<span class="quotelev2">&gt;&gt; external symbol _ompi_mpi_op_sum referenced in function _VAllReduce_Parallel
</span><br>
<span class="quotelev2">&gt;&gt; 1&gt;sundials_nvecparallel.lib(nvector_parallel.obj) : error LNK2019: unresolved 
</span><br>
<span class="quotelev2">&gt;&gt; external symbol _ompi_mpi_op_max referenced in function _VAllReduce_Parallel
</span><br>
<span class="quotelev2">&gt;&gt; 1&gt;sundials_nvecparallel.lib(nvector_parallel.obj) : error LNK2019: unresolved 
</span><br>
<span class="quotelev2">&gt;&gt; external symbol _ompi_mpi_double referenced in function _VAllReduce_Parallel
</span><br>
<span class="quotelev2">&gt;&gt; 1&gt;sundials_nvecparallel.lib(nvector_parallel.obj) : error LNK2019: unresolved 
</span><br>
<span class="quotelev2">&gt;&gt; external symbol _ompi_mpi_op_min referenced in function _VAllReduce_Parallel
</span><br>
<span class="quotelev2">&gt;&gt; 1&gt;sundials_nvecparallel.lib(nvector_parallel.obj) : error LNK2019: unresolved 
</span><br>
<span class="quotelev2">&gt;&gt; external symbol _ompi_mpi_long referenced in function _N_VNewEmpty_Parallel
</span><br>
<span class="quotelev2">&gt;&gt; 1&gt;E:\Sundials-Win32\examples\cvode\parallel\Release\cvDiurnal_kry_bbd_p.exe : 
</span><br>
<span class="quotelev2">&gt;&gt; fatal error LNK1120: 5 unresolved externals
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What am I missing?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Gib
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Dr. Gib Bogle
Senior Research Fellow
Auckland Bioengineering Institute
University of Auckland
New Zealand
<a href="http://www.bioeng.auckland.ac.nz">http://www.bioeng.auckland.ac.nz</a>
g.bogle_at_[hidden]
(64-9) 373-7599 Ext. 87030
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20368.php">Damien Hocking: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>Previous message:</strong> <a href="20366.php">Damien Hocking: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>In reply to:</strong> <a href="20366.php">Damien Hocking: "Re: [OMPI users] Linking failure on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20368.php">Damien Hocking: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>Reply:</strong> <a href="20368.php">Damien Hocking: "Re: [OMPI users] Linking failure on Windows"</a>
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
