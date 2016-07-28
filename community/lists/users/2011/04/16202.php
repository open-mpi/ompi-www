<?
$subject_val = "Re: [OMPI users] &quot;Value out of bounds in file&quot; error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 12 08:32:45 2011" -->
<!-- isoreceived="20110412123245" -->
<!-- sent="Tue, 12 Apr 2011 08:32:38 -0400" -->
<!-- isosent="20110412123238" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;Value out of bounds in file&amp;quot; error" -->
<!-- id="80DDFBE5-DA17-47AC-9624-809B12689D00_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTim1MARdFfxsDAgWcX79Twy3PynY5A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] &quot;Value out of bounds in file&quot; error<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-12 08:32:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16203.php">Stergiou, Jonathan C CIV NSWCCD West Bethesda, 6640: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<li><strong>Previous message:</strong> <a href="16201.php">hi: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<li><strong>In reply to:</strong> <a href="16201.php">hi: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16207.php">Rainer Keller: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you provide the other information?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p>On Apr 12, 2011, at 6:28 AM, hi wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I tried &quot;hello_f77&quot;,  &quot;hello_c&quot;, &quot;hello_cxx&quot; examples and all are halting at call to &quot;MPI_INIT()&quot; with below message on console...
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; &quot;&quot;&quot;
</span><br>
<span class="quotelev1">&gt; [mymachine:10108] [[27195,0],0] ORTE_ERROR_LOG: Value out of bounds in file ..\..\orte\mca\oob\tcp\oob_tcp.c at line 1193
</span><br>
<span class="quotelev1">&gt; &quot;&quot;&quot;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Do you have any idea???
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt; -Hiral
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 12, 2011 at 3:36 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Can you provide more information?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Where / when exactly does this error occur?  E.g., does it happen during MPI_INIT, or is it later in the application?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you able to run any MPI codes at all, such as the example &quot;hello world&quot; or &quot;ring&quot; programs?  Are you able to run non-MPI applications at all, such as &quot;hostname&quot; (or whatever the equivalent is in Windows)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please send all the information listed here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 11, 2011, at 9:04 AM, hi wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; For the attached test program (reference: <a href="http://www.netlib.org/blacs/BLACS/Examples.html#HELLO">http://www.netlib.org/blacs/BLACS/Examples.html#HELLO</a>), I am observing following message and binary halts...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [&lt;machine_name&gt;:03864] [[16991,0],0] ORTE_ERROR_LOG: Value out of bounds in file ..\..\orte\mca\oob\tcp\oob_tcp.c at line 1193
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; *Command used to compile is as follow:
</span><br>
<span class="quotelev2">&gt; &gt; 1) ifort blacs_ex01.f -c -I&quot;C:\Program Files (x86)\Intel\Compiler\11.1\065\mkl/include&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2) link /SUBSYSTEM:CONSOLE -NODEFAULTLIB /INCREMENTAL:NO /MAP /MAPINFO:EXPORTS /DEBUG -opt:ref,icf /out:blacs_ex01.exe blacs_ex01.obj /LIBPATH:&quot;C:/Program Files (x86)/Intel/Compiler/11.1/065\\Lib\ia32&quot; libirc.lib libifcorert.lib /LIBPATH:&quot;C:\Program Files (x86)\Intel\Compiler\11.1\065\lib\ia32&quot; ifqwin.lib /LIBPATH:&quot;C:\Program Files (x86)\Intel\Compiler\11.1\065\mkl/ia32/lib&quot; mkl_blacs_intelmpi.lib mkl_core.lib mkl_core_dll.lib /LIBPATH:&quot;C:/Program Files (x86)/Intel/Compiler/11.1/065/mkl\\ia32\\lib&quot; mkl_lapack95.lib mkl_core_dll.lib mkl_intel_c_dll.lib mkl_intel_thread_dll.lib /LIBPATH:&quot;C:/Program Files (x86)/Intel/Compiler/11.1/065/mkl/ia32/lib/&quot; mkl_scalapack_core.lib mkl_blacs_dll.lib /LIBPATH:&quot;C:\openmpi-1.5.2\installed_vs2008\lib&quot; libmpi_f77d.lib libmpid.lib libopen-pald.lib libopen-rted.lib /LIBPATH:&quot;C:\Program Files\Microsoft SDKs\Windows\v6.1\\\Lib&quot; /LIBPATH:&quot;C:/Program Files (x86)/Microsoft Visual Studio 9.0/VC\\Lib&quot; msvcrt.lib msvcprt.lib kernel32.lib
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; * Environment:
</span><br>
<span class="quotelev2">&gt; &gt; OS: Windows 7 (64-bit)
</span><br>
<span class="quotelev2">&gt; &gt; Compiler: cl.exe (32-bit) and ifort (32-bit)
</span><br>
<span class="quotelev2">&gt; &gt; MPI: openmpi-1.5.2 (local build)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is it the case that I am combining mkl_intelmpi with locally built openmpi and hence this problem???
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you in advance.
</span><br>
<span class="quotelev2">&gt; &gt; -Hiral
</span><br>
<span class="quotelev2">&gt; &gt; &lt;blacs_ex01.f&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
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
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16203.php">Stergiou, Jonathan C CIV NSWCCD West Bethesda, 6640: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<li><strong>Previous message:</strong> <a href="16201.php">hi: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<li><strong>In reply to:</strong> <a href="16201.php">hi: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16207.php">Rainer Keller: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
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
