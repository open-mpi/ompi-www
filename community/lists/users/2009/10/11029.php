<?
$subject_val = "Re: [OMPI users] Runtime error while running mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 30 13:35:58 2009" -->
<!-- isoreceived="20091030173558" -->
<!-- sent="Fri, 30 Oct 2009 13:34:44 -0400" -->
<!-- isosent="20091030173444" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Runtime error while running mpirun" -->
<!-- id="4AEB23B4.7020206_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="[OMPI users] Runtime error while running mpirun" -->
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
<strong>Subject:</strong> Re: [OMPI users] Runtime error while running mpirun<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-30 13:34:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11030.php">George Bosilca: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<li><strong>Previous message:</strong> <a href="11028.php">Gus Correa: "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe in reply to:</strong> <a href="11023.php">basant.lakhotiya_at_[hidden]: "[OMPI users] Runtime error while running mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11038.php">basant.lakhotiya_at_[hidden]: "Re: [OMPI users] Runtime error while running mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Basant,
<br>
<p>I am not familiar with Windows builds of Open MPI.  However, can you see 
<br>
if you Open MPI build actually created a mca_paffinity_window's dll?  I 
<br>
could imagine the issue might be that the dll is not finding a needed 
<br>
dependency.  Under Windows is there a command similar to Unix's ldd 
<br>
command you can run on the dll (if it exists)?
<br>
<p>--td
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Subject:* [OMPI users] Runtime error while running mpirun
</span><br>
<span class="quotelev1">&gt; *From:* /basant.lakhotiya_at_[hidden]/ 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:basant.lakhotiya_at_%5Bhidden%5D?Subject=Re:%20%5BOMPI%20users%5D%20Runtime%20error%20while%20running%20mpirun&gt;
</span><br>
<span class="quotelev1">&gt; *Date:* 2009-10-30 10:09:20
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I compiled OpenMPI in windows server 2003 through Cygwin and also 
</span><br>
<span class="quotelev1">&gt; through CMake and Visual Studio. In both the method I successfully 
</span><br>
<span class="quotelev1">&gt; complied
</span><br>
<span class="quotelev1">&gt; in cygwin I configured with following command
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ./configure 
</span><br>
<span class="quotelev1">&gt; --enable-mca-no-build=timer-windows,memory_mallopt,maffinity,paffinity
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; without these flags I was getting error.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I got same error while running mpirun.exe/orterun.exe.
</span><br>
<span class="quotelev1">&gt; Can anyone help me to rectify these errors.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; C:\openmpi_sln\debug&gt;orterun.exe -np 2 ipconfig
</span><br>
<span class="quotelev1">&gt; [8puq2akbo:07476] mca: base: component_find: &quot;mca_paffinity_windows&quot; does
</span><br>
<span class="quotelev1">&gt; not appear to be a valid paffinity MCA dynamic component (ignored): 
</span><br>
<span class="quotelev1">&gt; The specifie
</span><br>
<span class="quotelev1">&gt; d module could not be found.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems. This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   opal_paffinity_base_select failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value -13 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [8puq2akbo:07476] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in 
</span><br>
<span class="quotelev1">&gt; file ..
</span><br>
<span class="quotelev1">&gt; \..\Linpack\Source\orte\runtime\orte_init.c at line 79
</span><br>
<span class="quotelev1">&gt; [8puq2akbo:07476] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in 
</span><br>
<span class="quotelev1">&gt; file ..
</span><br>
<span class="quotelev1">&gt; \..\..\..\Linpack\Source\orte\tools\orterun\orterun.c at line 570
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Basant 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11030.php">George Bosilca: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<li><strong>Previous message:</strong> <a href="11028.php">Gus Correa: "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe in reply to:</strong> <a href="11023.php">basant.lakhotiya_at_[hidden]: "[OMPI users] Runtime error while running mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11038.php">basant.lakhotiya_at_[hidden]: "Re: [OMPI users] Runtime error while running mpirun"</a>
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
