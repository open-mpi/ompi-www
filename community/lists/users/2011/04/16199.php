<?
$subject_val = "Re: [OMPI users] &quot;Value out of bounds in file&quot; error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 12 06:06:59 2011" -->
<!-- isoreceived="20110412100659" -->
<!-- sent="Tue, 12 Apr 2011 06:06:52 -0400" -->
<!-- isosent="20110412100652" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;Value out of bounds in file&amp;quot; error" -->
<!-- id="01508599-4D21-46E7-8C22-0A0DFBA613EF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTikXyv3ZRyPafAVC4sTzDPi8uErAKg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-04-12 06:06:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16200.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<li><strong>Previous message:</strong> <a href="16198.php">Jason Palmer: "Re: [OMPI users] SGE and openmpi"</a>
<li><strong>In reply to:</strong> <a href="16192.php">hi: "[OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16201.php">hi: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<li><strong>Reply:</strong> <a href="16201.php">hi: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you provide more information?
<br>
<p>Where / when exactly does this error occur?  E.g., does it happen during MPI_INIT, or is it later in the application?
<br>
<p>Are you able to run any MPI codes at all, such as the example &quot;hello world&quot; or &quot;ring&quot; programs?  Are you able to run non-MPI applications at all, such as &quot;hostname&quot; (or whatever the equivalent is in Windows)?
<br>
<p>Please send all the information listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p>On Apr 11, 2011, at 9:04 AM, hi wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; For the attached test program (reference: <a href="http://www.netlib.org/blacs/BLACS/Examples.html#HELLO">http://www.netlib.org/blacs/BLACS/Examples.html#HELLO</a>), I am observing following message and binary halts...
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; [&lt;machine_name&gt;:03864] [[16991,0],0] ORTE_ERROR_LOG: Value out of bounds in file ..\..\orte\mca\oob\tcp\oob_tcp.c at line 1193
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *Command used to compile is as follow:
</span><br>
<span class="quotelev1">&gt; 1) ifort blacs_ex01.f -c -I&quot;C:\Program Files (x86)\Intel\Compiler\11.1\065\mkl/include&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) link /SUBSYSTEM:CONSOLE -NODEFAULTLIB /INCREMENTAL:NO /MAP /MAPINFO:EXPORTS /DEBUG -opt:ref,icf /out:blacs_ex01.exe blacs_ex01.obj /LIBPATH:&quot;C:/Program Files (x86)/Intel/Compiler/11.1/065\\Lib\ia32&quot; libirc.lib libifcorert.lib /LIBPATH:&quot;C:\Program Files (x86)\Intel\Compiler\11.1\065\lib\ia32&quot; ifqwin.lib /LIBPATH:&quot;C:\Program Files (x86)\Intel\Compiler\11.1\065\mkl/ia32/lib&quot; mkl_blacs_intelmpi.lib mkl_core.lib mkl_core_dll.lib /LIBPATH:&quot;C:/Program Files (x86)/Intel/Compiler/11.1/065/mkl\\ia32\\lib&quot; mkl_lapack95.lib mkl_core_dll.lib mkl_intel_c_dll.lib mkl_intel_thread_dll.lib /LIBPATH:&quot;C:/Program Files (x86)/Intel/Compiler/11.1/065/mkl/ia32/lib/&quot; mkl_scalapack_core.lib mkl_blacs_dll.lib /LIBPATH:&quot;C:\openmpi-1.5.2\installed_vs2008\lib&quot; libmpi_f77d.lib libmpid.lib libopen-pald.lib libopen-rted.lib /LIBPATH:&quot;C:\Program Files\Microsoft SDKs\Windows\v6.1\\\Lib&quot; /LIBPATH:&quot;C:/Program Files (x86)/Microsoft Visual Studio 9.0/VC\\Lib&quot; msvcrt.lib msvcprt.lib kernel32.lib
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; * Environment:
</span><br>
<span class="quotelev1">&gt; OS: Windows 7 (64-bit)
</span><br>
<span class="quotelev1">&gt; Compiler: cl.exe (32-bit) and ifort (32-bit)
</span><br>
<span class="quotelev1">&gt; MPI: openmpi-1.5.2 (local build)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Is it the case that I am combining mkl_intelmpi with locally built openmpi and hence this problem???
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thank you in advance.
</span><br>
<span class="quotelev1">&gt; -Hiral
</span><br>
<span class="quotelev1">&gt; &lt;blacs_ex01.f&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="16200.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<li><strong>Previous message:</strong> <a href="16198.php">Jason Palmer: "Re: [OMPI users] SGE and openmpi"</a>
<li><strong>In reply to:</strong> <a href="16192.php">hi: "[OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16201.php">hi: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<li><strong>Reply:</strong> <a href="16201.php">hi: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
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
