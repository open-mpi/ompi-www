<?
$subject_val = "Re: [OMPI users] &quot;Value out of bounds in file&quot; error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 12 03:40:38 2011" -->
<!-- isoreceived="20110412074038" -->
<!-- sent="Tue, 12 Apr 2011 13:10:33 +0530" -->
<!-- isosent="20110412074033" -->
<!-- name="hi" -->
<!-- email="hiralsmaillist_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;Value out of bounds in file&amp;quot; error" -->
<!-- id="BANLkTi=5eyzz5ARq_0X2wFRBHJX67VaP5g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> hi (<em>hiralsmaillist_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-12 03:40:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16198.php">Jason Palmer: "Re: [OMPI users] SGE and openmpi"</a>
<li><strong>Previous message:</strong> <a href="16196.php">Ralph Castain: "Re: [OMPI users] SGE and openmpi"</a>
<li><strong>In reply to:</strong> <a href="16192.php">hi: "[OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16199.php">Jeff Squyres: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Any idea on this ???
<br>
<p>Thank you.
<br>
-Hiral
<br>
On Mon, Apr 11, 2011 at 6:34 PM, hi &lt;hiralsmaillist_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the attached test program (reference:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.netlib.org/blacs/BLACS/Examples.html#HELLO">http://www.netlib.org/blacs/BLACS/Examples.html#HELLO</a>), I am observing
</span><br>
<span class="quotelev1">&gt; following message and binary halts...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [&lt;machine_name&gt;:03864] [[16991,0],0] ORTE_ERROR_LOG: Value out of bounds in
</span><br>
<span class="quotelev1">&gt; file ..\..\orte\mca\oob\tcp\oob_tcp.c at line 1193
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Command used to compile is as follow:
</span><br>
<span class="quotelev1">&gt; 1) ifort blacs_ex01.f -c -I&quot;C:\Program Files
</span><br>
<span class="quotelev1">&gt; (x86)\Intel\Compiler\11.1\065\mkl/include&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) link /SUBSYSTEM:CONSOLE -NODEFAULTLIB /INCREMENTAL:NO /MAP
</span><br>
<span class="quotelev1">&gt; /MAPINFO:EXPORTS /DEBUG -opt:ref,icf /out:blacs_ex01.exe blacs_ex01.obj
</span><br>
<span class="quotelev1">&gt; /LIBPATH:&quot;C:/Program Files (x86)/Intel/Compiler/11.1/065\\Lib\ia32&quot;
</span><br>
<span class="quotelev1">&gt; libirc.lib libifcorert.lib /LIBPATH:&quot;C:\Program Files
</span><br>
<span class="quotelev1">&gt; (x86)\Intel\Compiler\11.1\065\lib\ia32&quot; ifqwin.lib /LIBPATH:&quot;C:\Program
</span><br>
<span class="quotelev1">&gt; Files (x86)\Intel\Compiler\11.1\065\mkl/ia32/lib&quot; mkl_blacs_intelmpi.lib
</span><br>
<span class="quotelev1">&gt; mkl_core.lib mkl_core_dll.lib /LIBPATH:&quot;C:/Program Files
</span><br>
<span class="quotelev1">&gt; (x86)/Intel/Compiler/11.1/065/mkl\\ia32\\lib&quot; mkl_lapack95.lib
</span><br>
<span class="quotelev1">&gt; mkl_core_dll.lib mkl_intel_c_dll.lib mkl_intel_thread_dll.lib
</span><br>
<span class="quotelev1">&gt; /LIBPATH:&quot;C:/Program Files (x86)/Intel/Compiler/11.1/065/mkl/ia32/lib/&quot;
</span><br>
<span class="quotelev1">&gt; mkl_scalapack_core.lib mkl_blacs_dll.lib
</span><br>
<span class="quotelev1">&gt; /LIBPATH:&quot;C:\openmpi-1.5.2\installed_vs2008\lib&quot; libmpi_f77d.lib libmpid.lib
</span><br>
<span class="quotelev1">&gt; libopen-pald.lib libopen-rted.lib /LIBPATH:&quot;C:\Program Files\Microsoft
</span><br>
<span class="quotelev1">&gt; SDKs\Windows\v6.1\\\Lib&quot; /LIBPATH:&quot;C:/Program Files (x86)/Microsoft Visual
</span><br>
<span class="quotelev1">&gt; Studio 9.0/VC\\Lib&quot; msvcrt.lib msvcprt.lib kernel32.lib
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
<span class="quotelev1">&gt; Is it the case that I am combining mkl_intelmpi with locally built openmpi
</span><br>
<span class="quotelev1">&gt; and hence this problem???
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you in advance.
</span><br>
<span class="quotelev1">&gt; -Hiral
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16197/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16198.php">Jason Palmer: "Re: [OMPI users] SGE and openmpi"</a>
<li><strong>Previous message:</strong> <a href="16196.php">Ralph Castain: "Re: [OMPI users] SGE and openmpi"</a>
<li><strong>In reply to:</strong> <a href="16192.php">hi: "[OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16199.php">Jeff Squyres: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
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
