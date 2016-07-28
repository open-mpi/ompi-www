<?
$subject_val = "[OMPI users] &quot;Value out of bounds in file&quot; error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 11 09:04:24 2011" -->
<!-- isoreceived="20110411130424" -->
<!-- sent="Mon, 11 Apr 2011 18:34:19 +0530" -->
<!-- isosent="20110411130419" -->
<!-- name="hi" -->
<!-- email="hiralsmaillist_at_[hidden]" -->
<!-- subject="[OMPI users] &amp;quot;Value out of bounds in file&amp;quot; error" -->
<!-- id="BANLkTikXyv3ZRyPafAVC4sTzDPi8uErAKg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] &quot;Value out of bounds in file&quot; error<br>
<strong>From:</strong> hi (<em>hiralsmaillist_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-11 09:04:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16193.php">Stergiou, Jonathan C CIV NSWCCD West Bethesda, 6640: "[OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<li><strong>Previous message:</strong> <a href="16191.php">Terry Dontje: "Re: [OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16197.php">hi: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<li><strong>Reply:</strong> <a href="16197.php">hi: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<li><strong>Reply:</strong> <a href="16199.php">Jeff Squyres: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<li><strong>Reply:</strong> <a href="16207.php">Rainer Keller: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>For the attached test program (reference:
<br>
<a href="http://www.netlib.org/blacs/BLACS/Examples.html#HELLO">http://www.netlib.org/blacs/BLACS/Examples.html#HELLO</a>), I am observing
<br>
following message and binary halts...
<br>
<p>[&lt;machine_name&gt;:03864] [[16991,0],0] ORTE_ERROR_LOG: Value out of bounds in
<br>
file ..\..\orte\mca\oob\tcp\oob_tcp.c at line 1193
<br>
<p><p>*Command used to compile is as follow:
<br>
1) ifort blacs_ex01.f -c -I&quot;C:\Program Files
<br>
(x86)\Intel\Compiler\11.1\065\mkl/include&quot;
<br>
<p>2) link /SUBSYSTEM:CONSOLE -NODEFAULTLIB /INCREMENTAL:NO /MAP
<br>
/MAPINFO:EXPORTS /DEBUG -opt:ref,icf /out:blacs_ex01.exe blacs_ex01.obj
<br>
/LIBPATH:&quot;C:/Program Files (x86)/Intel/Compiler/11.1/065\\Lib\ia32&quot;
<br>
libirc.lib libifcorert.lib /LIBPATH:&quot;C:\Program Files
<br>
(x86)\Intel\Compiler\11.1\065\lib\ia32&quot; ifqwin.lib /LIBPATH:&quot;C:\Program
<br>
Files (x86)\Intel\Compiler\11.1\065\mkl/ia32/lib&quot; mkl_blacs_intelmpi.lib
<br>
mkl_core.lib mkl_core_dll.lib /LIBPATH:&quot;C:/Program Files
<br>
(x86)/Intel/Compiler/11.1/065/mkl\\ia32\\lib&quot; mkl_lapack95.lib
<br>
mkl_core_dll.lib mkl_intel_c_dll.lib mkl_intel_thread_dll.lib
<br>
/LIBPATH:&quot;C:/Program Files (x86)/Intel/Compiler/11.1/065/mkl/ia32/lib/&quot;
<br>
mkl_scalapack_core.lib mkl_blacs_dll.lib
<br>
/LIBPATH:&quot;C:\openmpi-1.5.2\installed_vs2008\lib&quot; libmpi_f77d.lib libmpid.lib
<br>
libopen-pald.lib libopen-rted.lib /LIBPATH:&quot;C:\Program Files\Microsoft
<br>
SDKs\Windows\v6.1\\\Lib&quot; /LIBPATH:&quot;C:/Program Files (x86)/Microsoft Visual
<br>
Studio 9.0/VC\\Lib&quot; msvcrt.lib msvcprt.lib kernel32.lib
<br>
<p>* Environment:
<br>
OS: Windows 7 (64-bit)
<br>
Compiler: cl.exe (32-bit) and ifort (32-bit)
<br>
MPI: openmpi-1.5.2 (local build)
<br>
<p>Is it the case that I am combining mkl_intelmpi with locally built openmpi
<br>
and hence this problem???
<br>
<p>Thank you in advance.
<br>
-Hiral
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16192/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16192/blacs_ex01.f">blacs_ex01.f</a>
</ul>
<!-- attachment="blacs_ex01.f" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16193.php">Stergiou, Jonathan C CIV NSWCCD West Bethesda, 6640: "[OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<li><strong>Previous message:</strong> <a href="16191.php">Terry Dontje: "Re: [OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16197.php">hi: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<li><strong>Reply:</strong> <a href="16197.php">hi: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<li><strong>Reply:</strong> <a href="16199.php">Jeff Squyres: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<li><strong>Reply:</strong> <a href="16207.php">Rainer Keller: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
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
