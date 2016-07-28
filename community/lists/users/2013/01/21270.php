<?
$subject_val = "Re: [OMPI users] problem building 32-bit openmpi-1.9a1r27979 with Sun C";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 13:42:48 2013" -->
<!-- isoreceived="20130130184248" -->
<!-- sent="Wed, 30 Jan 2013 18:42:43 +0000" -->
<!-- isosent="20130130184243" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem building 32-bit openmpi-1.9a1r27979 with Sun C" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC42CBE17E_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201301301827.r0UIRAcj017788_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem building 32-bit openmpi-1.9a1r27979 with Sun C<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-30 13:42:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21271.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: problem building 32-bit openmpi-1.9a1r27979 with Sun C"</a>
<li><strong>Previous message:</strong> <a href="21269.php">Siegmar Gross: "[OMPI users] problem building 32-bit openmpi-1.9a1r27979 with Sun C"</a>
<li><strong>In reply to:</strong> <a href="21269.php">Siegmar Gross: "[OMPI users] problem building 32-bit openmpi-1.9a1r27979 with Sun C"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21271.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: problem building 32-bit openmpi-1.9a1r27979 with Sun C"</a>
<li><strong>Reply:</strong> <a href="21271.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: problem building 32-bit openmpi-1.9a1r27979 with Sun C"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Weird.  This particular code hasn't changed in a *long* time.
<br>
<p>Do you have successful oSUSE 12.1 and Sol x86_64 builds on this platform?
<br>
<p><p>On Jan 30, 2013, at 1:27 PM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; today I tried to install openmpi-1.9a1r2797 on SunOS 10 Sparc,
</span><br>
<span class="quotelev1">&gt; SunOS 10 x86_64, and Linux x86_64 with Sun C 5.12. I succeeded
</span><br>
<span class="quotelev1">&gt; with all 64-bit systems and the 32-bit system on Solaris Sparc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Linux (openSUSE 12.1) and Solaris x86_64 I got the following
</span><br>
<span class="quotelev1">&gt; errors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.9 245 tail 
</span><br>
<span class="quotelev1">&gt; openmpi-1.9-SunOS.x86_64.32_cc/log.make.SunOS.x86_64.32_cc&quot;../../../../openmpi-1
</span><br>
<span class="quotelev1">&gt; .9a1r27979/ompi/mpi/cxx/file.cc&quot;, line 197: Warning (Anachronism): Formal 
</span><br>
<span class="quotelev1">&gt; argument read_conversion_fn of type extern &quot;C&quot; 
</span><br>
<span class="quotelev1">&gt; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*) in call to 
</span><br>
<span class="quotelev1">&gt; MPI_Register_datarep(char*, extern &quot;C&quot; 
</span><br>
<span class="quotelev1">&gt; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; 
</span><br>
<span class="quotelev1">&gt; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; 
</span><br>
<span class="quotelev1">&gt; int(*)(ompi_datatype_t*,int*,void*), void*) is being passed 
</span><br>
<span class="quotelev1">&gt; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*).
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.9a1r27979/ompi/mpi/cxx/file.cc&quot;, line 199: Warning 
</span><br>
<span class="quotelev1">&gt; (Anachronism): Formal argument dtype_file_extent_fn of type extern &quot;C&quot; 
</span><br>
<span class="quotelev1">&gt; int(*)(ompi_datatype_t*,int*,void*) in call to MPI_Register_datarep(char*, 
</span><br>
<span class="quotelev1">&gt; extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; 
</span><br>
<span class="quotelev1">&gt; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; 
</span><br>
<span class="quotelev1">&gt; int(*)(ompi_datatype_t*,int*,void*), void*) is being passed 
</span><br>
<span class="quotelev1">&gt; int(*)(ompi_datatype_t*,int*,void*).
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.9a1r27979/ompi/mpi/cxx/file.cc&quot;, line 224: Warning 
</span><br>
<span class="quotelev1">&gt; (Anachronism): Formal argument dtype_file_extent_fn of type extern &quot;C&quot; 
</span><br>
<span class="quotelev1">&gt; int(*)(ompi_datatype_t*,int*,void*) in call to MPI_Register_datarep(char*, 
</span><br>
<span class="quotelev1">&gt; extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; 
</span><br>
<span class="quotelev1">&gt; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; 
</span><br>
<span class="quotelev1">&gt; int(*)(ompi_datatype_t*,int*,void*), void*) is being passed 
</span><br>
<span class="quotelev1">&gt; int(*)(ompi_datatype_t*,int*,void*).
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.9a1r27979/ompi/mpi/cxx/file.cc&quot;, Error: The function 
</span><br>
<span class="quotelev1">&gt; opal_atomic_add_32(volatile int*, int) has not had a body defined.
</span><br>
<span class="quotelev1">&gt; 1 Error(s) and 8 Warning(s) detected.
</span><br>
<span class="quotelev1">&gt; make[2]: *** [file.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory 
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-1.9/openmpi-1.9-SunOS.x86_64.32_cc/ompi/mpi/cxx'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory 
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-1.9/openmpi-1.9-SunOS.x86_64.32_cc/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.9 246 tail 
</span><br>
<span class="quotelev1">&gt; openmpi-1.9-Linux.x86_64.32_cc/log.make.Linux.x86_64.32_cc&quot;../../../../openmpi-1
</span><br>
<span class="quotelev1">&gt; .9a1r27979/ompi/mpi/cxx/file.cc&quot;, line 197: Warning (Anachronism): Formal 
</span><br>
<span class="quotelev1">&gt; argument read_conversion_fn of type extern &quot;C&quot; 
</span><br>
<span class="quotelev1">&gt; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*) in call to 
</span><br>
<span class="quotelev1">&gt; MPI_Register_datarep(char*, extern &quot;C&quot; 
</span><br>
<span class="quotelev1">&gt; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; 
</span><br>
<span class="quotelev1">&gt; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; 
</span><br>
<span class="quotelev1">&gt; int(*)(ompi_datatype_t*,int*,void*), void*) is being passed 
</span><br>
<span class="quotelev1">&gt; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*).
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.9a1r27979/ompi/mpi/cxx/file.cc&quot;, line 199: Warning 
</span><br>
<span class="quotelev1">&gt; (Anachronism): Formal argument dtype_file_extent_fn of type extern &quot;C&quot; 
</span><br>
<span class="quotelev1">&gt; int(*)(ompi_datatype_t*,int*,void*) in call to MPI_Register_datarep(char*, 
</span><br>
<span class="quotelev1">&gt; extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; 
</span><br>
<span class="quotelev1">&gt; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; 
</span><br>
<span class="quotelev1">&gt; int(*)(ompi_datatype_t*,int*,void*), void*) is being passed 
</span><br>
<span class="quotelev1">&gt; int(*)(ompi_datatype_t*,int*,void*).
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.9a1r27979/ompi/mpi/cxx/file.cc&quot;, line 224: Warning 
</span><br>
<span class="quotelev1">&gt; (Anachronism): Formal argument dtype_file_extent_fn of type extern &quot;C&quot; 
</span><br>
<span class="quotelev1">&gt; int(*)(ompi_datatype_t*,int*,void*) in call to MPI_Register_datarep(char*, 
</span><br>
<span class="quotelev1">&gt; extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; 
</span><br>
<span class="quotelev1">&gt; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; 
</span><br>
<span class="quotelev1">&gt; int(*)(ompi_datatype_t*,int*,void*), void*) is being passed 
</span><br>
<span class="quotelev1">&gt; int(*)(ompi_datatype_t*,int*,void*).
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.9a1r27979/ompi/mpi/cxx/file.cc&quot;, Error: The function 
</span><br>
<span class="quotelev1">&gt; opal_atomic_add_32(volatile int*, int) has not had a body defined.
</span><br>
<span class="quotelev1">&gt; 1 Error(s) and 8 Warning(s) detected.
</span><br>
<span class="quotelev1">&gt; make[2]: *** [file.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory 
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-1.9/openmpi-1.9-Linux.x86_64.32_cc/ompi/mpi/cxx'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory 
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-1.9/openmpi-1.9-Linux.x86_64.32_cc/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.9 247 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Perhaps somebody can fix the problem. Thank you very much for your
</span><br>
<span class="quotelev1">&gt; help in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21271.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: problem building 32-bit openmpi-1.9a1r27979 with Sun C"</a>
<li><strong>Previous message:</strong> <a href="21269.php">Siegmar Gross: "[OMPI users] problem building 32-bit openmpi-1.9a1r27979 with Sun C"</a>
<li><strong>In reply to:</strong> <a href="21269.php">Siegmar Gross: "[OMPI users] problem building 32-bit openmpi-1.9a1r27979 with Sun C"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21271.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: problem building 32-bit openmpi-1.9a1r27979 with Sun C"</a>
<li><strong>Reply:</strong> <a href="21271.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: problem building 32-bit openmpi-1.9a1r27979 with Sun C"</a>
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
