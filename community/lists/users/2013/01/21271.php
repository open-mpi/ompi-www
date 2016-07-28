<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: problem building 32-bit openmpi-1.9a1r27979 with Sun C";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 14:01:48 2013" -->
<!-- isoreceived="20130130190148" -->
<!-- sent="Wed, 30 Jan 2013 19:01:18 +0000" -->
<!-- isosent="20130130190118" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: problem building 32-bit openmpi-1.9a1r27979 with Sun C" -->
<!-- id="69A29AB53D57F54D81061A9E4E45B8FD317DAD1B_at_EXMB01.srn.sandia.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC42CBE17E_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] Re: problem building 32-bit openmpi-1.9a1r27979 with Sun C<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-30 14:01:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21272.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: problem building 32-bit openmpi-1.9a1r27979 with Sun C"</a>
<li><strong>Previous message:</strong> <a href="21270.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem building 32-bit openmpi-1.9a1r27979 with Sun C"</a>
<li><strong>In reply to:</strong> <a href="21270.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem building 32-bit openmpi-1.9a1r27979 with Sun C"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21272.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: problem building 32-bit openmpi-1.9a1r27979 with Sun C"</a>
<li><strong>Maybe reply:</strong> <a href="21272.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: problem building 32-bit openmpi-1.9a1r27979 with Sun C"</a>
<li><strong>Reply:</strong> <a href="21273.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] Re: problem building 32-bit openmpi-1.9a1r27979 with Sun C"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, the errors are in code that has changed.  A couple weeks ago, we
<br>
removed the inline assembly support for C++, but I'm guessing not entirely
<br>
correctly.  That is, I believe something is wrong in the #defines such
<br>
that opal_atomic_add_32 is being declared inline, but no inline body will
<br>
be provided, so it all falls down.  Siegmar, can you send me your
<br>
opal/include/opal_config.h file when running with the Studio compilers?  I
<br>
don't have then available on x86 and it's probably faster for you to send
<br>
me the files than for me to try to setup a Linux box with the compilers
<br>
installed.
<br>
<p>As for the warnings about anachronisms, that I can't help on.
<br>
<p>Brian
<br>
<p>On 1/30/13 11:42 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;Weird.  This particular code hasn't changed in a *long* time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Do you have successful oSUSE 12.1 and Sol x86_64 builds on this platform?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Jan 30, 2013, at 1:27 PM, Siegmar Gross
</span><br>
<span class="quotelev1">&gt;&lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; today I tried to install openmpi-1.9a1r2797 on SunOS 10 Sparc,
</span><br>
<span class="quotelev2">&gt;&gt; SunOS 10 x86_64, and Linux x86_64 with Sun C 5.12. I succeeded
</span><br>
<span class="quotelev2">&gt;&gt; with all 64-bit systems and the 32-bit system on Solaris Sparc.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Linux (openSUSE 12.1) and Solaris x86_64 I got the following
</span><br>
<span class="quotelev2">&gt;&gt; errors.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; tyr openmpi-1.9 245 tail
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;openmpi-1.9-SunOS.x86_64.32_cc/log.make.SunOS.x86_64.32_cc&quot;../../../../op
</span><br>
<span class="quotelev2">&gt;&gt;enmpi-1
</span><br>
<span class="quotelev2">&gt;&gt; .9a1r27979/ompi/mpi/cxx/file.cc&quot;, line 197: Warning (Anachronism):
</span><br>
<span class="quotelev2">&gt;&gt;Formal 
</span><br>
<span class="quotelev2">&gt;&gt; argument read_conversion_fn of type extern &quot;C&quot;
</span><br>
<span class="quotelev2">&gt;&gt; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*) in call to
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Register_datarep(char*, extern &quot;C&quot;
</span><br>
<span class="quotelev2">&gt;&gt; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot;
</span><br>
<span class="quotelev2">&gt;&gt; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot;
</span><br>
<span class="quotelev2">&gt;&gt; int(*)(ompi_datatype_t*,int*,void*), void*) is being passed
</span><br>
<span class="quotelev2">&gt;&gt; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*).
</span><br>
<span class="quotelev2">&gt;&gt; &quot;../../../../openmpi-1.9a1r27979/ompi/mpi/cxx/file.cc&quot;, line 199:
</span><br>
<span class="quotelev2">&gt;&gt;Warning 
</span><br>
<span class="quotelev2">&gt;&gt; (Anachronism): Formal argument dtype_file_extent_fn of type extern &quot;C&quot;
</span><br>
<span class="quotelev2">&gt;&gt; int(*)(ompi_datatype_t*,int*,void*) in call to
</span><br>
<span class="quotelev2">&gt;&gt;MPI_Register_datarep(char*,
</span><br>
<span class="quotelev2">&gt;&gt; extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*),
</span><br>
<span class="quotelev2">&gt;&gt;extern &quot;C&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot;
</span><br>
<span class="quotelev2">&gt;&gt; int(*)(ompi_datatype_t*,int*,void*), void*) is being passed
</span><br>
<span class="quotelev2">&gt;&gt; int(*)(ompi_datatype_t*,int*,void*).
</span><br>
<span class="quotelev2">&gt;&gt; &quot;../../../../openmpi-1.9a1r27979/ompi/mpi/cxx/file.cc&quot;, line 224:
</span><br>
<span class="quotelev2">&gt;&gt;Warning 
</span><br>
<span class="quotelev2">&gt;&gt; (Anachronism): Formal argument dtype_file_extent_fn of type extern &quot;C&quot;
</span><br>
<span class="quotelev2">&gt;&gt; int(*)(ompi_datatype_t*,int*,void*) in call to
</span><br>
<span class="quotelev2">&gt;&gt;MPI_Register_datarep(char*,
</span><br>
<span class="quotelev2">&gt;&gt; extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*),
</span><br>
<span class="quotelev2">&gt;&gt;extern &quot;C&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot;
</span><br>
<span class="quotelev2">&gt;&gt; int(*)(ompi_datatype_t*,int*,void*), void*) is being passed
</span><br>
<span class="quotelev2">&gt;&gt; int(*)(ompi_datatype_t*,int*,void*).
</span><br>
<span class="quotelev2">&gt;&gt; &quot;../../../../openmpi-1.9a1r27979/ompi/mpi/cxx/file.cc&quot;, Error: The
</span><br>
<span class="quotelev2">&gt;&gt;function 
</span><br>
<span class="quotelev2">&gt;&gt; opal_atomic_add_32(volatile int*, int) has not had a body defined.
</span><br>
<span class="quotelev2">&gt;&gt; 1 Error(s) and 8 Warning(s) detected.
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [file.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/export2/src/openmpi-1.9/openmpi-1.9-SunOS.x86_64.32_cc/ompi/mpi/cxx'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/export2/src/openmpi-1.9/openmpi-1.9-SunOS.x86_64.32_cc/ompi'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; tyr openmpi-1.9 246 tail
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;openmpi-1.9-Linux.x86_64.32_cc/log.make.Linux.x86_64.32_cc&quot;../../../../op
</span><br>
<span class="quotelev2">&gt;&gt;enmpi-1
</span><br>
<span class="quotelev2">&gt;&gt; .9a1r27979/ompi/mpi/cxx/file.cc&quot;, line 197: Warning (Anachronism):
</span><br>
<span class="quotelev2">&gt;&gt;Formal 
</span><br>
<span class="quotelev2">&gt;&gt; argument read_conversion_fn of type extern &quot;C&quot;
</span><br>
<span class="quotelev2">&gt;&gt; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*) in call to
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Register_datarep(char*, extern &quot;C&quot;
</span><br>
<span class="quotelev2">&gt;&gt; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot;
</span><br>
<span class="quotelev2">&gt;&gt; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot;
</span><br>
<span class="quotelev2">&gt;&gt; int(*)(ompi_datatype_t*,int*,void*), void*) is being passed
</span><br>
<span class="quotelev2">&gt;&gt; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*).
</span><br>
<span class="quotelev2">&gt;&gt; &quot;../../../../openmpi-1.9a1r27979/ompi/mpi/cxx/file.cc&quot;, line 199:
</span><br>
<span class="quotelev2">&gt;&gt;Warning 
</span><br>
<span class="quotelev2">&gt;&gt; (Anachronism): Formal argument dtype_file_extent_fn of type extern &quot;C&quot;
</span><br>
<span class="quotelev2">&gt;&gt; int(*)(ompi_datatype_t*,int*,void*) in call to
</span><br>
<span class="quotelev2">&gt;&gt;MPI_Register_datarep(char*,
</span><br>
<span class="quotelev2">&gt;&gt; extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*),
</span><br>
<span class="quotelev2">&gt;&gt;extern &quot;C&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot;
</span><br>
<span class="quotelev2">&gt;&gt; int(*)(ompi_datatype_t*,int*,void*), void*) is being passed
</span><br>
<span class="quotelev2">&gt;&gt; int(*)(ompi_datatype_t*,int*,void*).
</span><br>
<span class="quotelev2">&gt;&gt; &quot;../../../../openmpi-1.9a1r27979/ompi/mpi/cxx/file.cc&quot;, line 224:
</span><br>
<span class="quotelev2">&gt;&gt;Warning 
</span><br>
<span class="quotelev2">&gt;&gt; (Anachronism): Formal argument dtype_file_extent_fn of type extern &quot;C&quot;
</span><br>
<span class="quotelev2">&gt;&gt; int(*)(ompi_datatype_t*,int*,void*) in call to
</span><br>
<span class="quotelev2">&gt;&gt;MPI_Register_datarep(char*,
</span><br>
<span class="quotelev2">&gt;&gt; extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*),
</span><br>
<span class="quotelev2">&gt;&gt;extern &quot;C&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot;
</span><br>
<span class="quotelev2">&gt;&gt; int(*)(ompi_datatype_t*,int*,void*), void*) is being passed
</span><br>
<span class="quotelev2">&gt;&gt; int(*)(ompi_datatype_t*,int*,void*).
</span><br>
<span class="quotelev2">&gt;&gt; &quot;../../../../openmpi-1.9a1r27979/ompi/mpi/cxx/file.cc&quot;, Error: The
</span><br>
<span class="quotelev2">&gt;&gt;function 
</span><br>
<span class="quotelev2">&gt;&gt; opal_atomic_add_32(volatile int*, int) has not had a body defined.
</span><br>
<span class="quotelev2">&gt;&gt; 1 Error(s) and 8 Warning(s) detected.
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [file.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/export2/src/openmpi-1.9/openmpi-1.9-Linux.x86_64.32_cc/ompi/mpi/cxx'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/export2/src/openmpi-1.9/openmpi-1.9-Linux.x86_64.32_cc/ompi'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; tyr openmpi-1.9 247
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Perhaps somebody can fix the problem. Thank you very much for your
</span><br>
<span class="quotelev2">&gt;&gt; help in advance.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Kind regards
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Siegmar
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
<span class="quotelev1">&gt;-- 
</span><br>
<span class="quotelev1">&gt;Jeff Squyres
</span><br>
<span class="quotelev1">&gt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories

</pre>
<p>
<p><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21271/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21272.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: problem building 32-bit openmpi-1.9a1r27979 with Sun C"</a>
<li><strong>Previous message:</strong> <a href="21270.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem building 32-bit openmpi-1.9a1r27979 with Sun C"</a>
<li><strong>In reply to:</strong> <a href="21270.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem building 32-bit openmpi-1.9a1r27979 with Sun C"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21272.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: problem building 32-bit openmpi-1.9a1r27979 with Sun C"</a>
<li><strong>Maybe reply:</strong> <a href="21272.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: problem building 32-bit openmpi-1.9a1r27979 with Sun C"</a>
<li><strong>Reply:</strong> <a href="21273.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] Re: problem building 32-bit openmpi-1.9a1r27979 with Sun C"</a>
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
