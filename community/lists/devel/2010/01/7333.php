<?
$subject_val = "Re: [OMPI devel] [OMPI users] flex.exe";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 22 05:24:10 2010" -->
<!-- isoreceived="20100122102410" -->
<!-- sent="Fri, 22 Jan 2010 03:24:02 -0700" -->
<!-- isosent="20100122102402" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] flex.exe" -->
<!-- id="161D7BD3-E090-4AC1-876B-5EA2A99326CC_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B59795F.2030608_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI users] flex.exe<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-22 05:24:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7334.php">Shiqing Fan: "Re: [OMPI devel] [OMPI users] flex.exe"</a>
<li><strong>Previous message:</strong> <a href="7332.php">yaohui: "[OMPI devel] how to implement and control a specific network device in openMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7334.php">Shiqing Fan: "Re: [OMPI devel] [OMPI users] flex.exe"</a>
<li><strong>Reply:</strong> <a href="7334.php">Shiqing Fan: "Re: [OMPI devel] [OMPI users] flex.exe"</a>
<li><strong>Maybe reply:</strong> <a href="7335.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] flex.exe"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Let's shift this to the devel mailing list and add it to the Tues telecon.
<br>
<p>Thanks for clarifying. Sounds to me like the suggestions made below are right - we shouldn't be distributing binary in the main tarball for export reasons. Seems like we have four options:
<br>
<p>1. A separate Windows-tool tarball
<br>
<p>2. remove flex from the 3-4 places it is used in the code base and replace it with something that doesn't have this requirement. We don't use that much text processing - it may not take that much effort to write our own utility for this purpose.
<br>
<p>3. not use the features that are missing from the windows version.
<br>
<p>4. even though it changes sometimes, generate the flex-code output and ship it like we used to do
<br>
<p>Regardless, shipping binary in a source tarball seems like a really bad idea in this age of viral concerns.
<br>
<p><p>On Jan 22, 2010, at 3:09 AM, Shiqing Fan wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; flex.exe is not generated at compile time, but flex.exe has to be used to generate those *flex*.c files during compilation, like show_help_lex.c (a.k.a the flex-generated code).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The windows binary of flex on sourceforge doesn't fit the requirement of Open MPI, it has some missing features. That's why we have to compile a new flex.exe for Windows, and put it in the source tree.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Shiqing
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Maybe I'm misunderstanding, but if it is generated at -compile- time, then how did it get in the 1.4.1 tarball?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 22, 2010, at 1:56 AM, Shiqing Fan wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No, that's not true, we did ship the flex-generated code a time ago, but as that part of code changes sometimes, we decided to generate it during compilation time, and the flex.exe came with the first support of Windows (CMake).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Shiqing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Don't we ship the flex-generated code in the tarball anyway?  If so, why do we ship flex.exe?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jan 21, 2010, at 12:14 PM, Barrett, Brian W wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have to agree with the two requests here. Having either a windows tarball or a windows build tools tarball doesn't seem too burdensom, and could even be done automatically at make dist time.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ----- Original Message -----
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; From: users-bounces_at_[hidden] &lt;users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; To: users_at_[hidden] &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sent: Thu Jan 21 10:05:03 2010
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] flex.exe
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Am Donnerstag, den 21.01.2010, 11:52 -0500 schrieb Michael Di Domenico:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; openmpi-1.4.1/contrib/platform/win32/bin/flex.exe
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I understand this file might be required for building on windows,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; since I'm not I can just delete the file without issue.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; However, for those of us under import restrictions, where binaries are
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; not allowed in, this file causes me to open the tarball and delete the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; file (not a big deal, i know, i know).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; But, can I put up a vote for a pure source only tree?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;               
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm very much in favor of that since we can't ship this binary in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Debian. We'd have to delete it from the tarball and repack it with every
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; release which is quite cumbersome. If these tools could be shipped in a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; separate tarball that would be great!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Best regards
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Manuel
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; High Performance Computing           Tel.: +49 711 685 87234
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Address:Allmandring 30               email: fan_at_[hidden]    70569 Stuttgart
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
</span><br>
<span class="quotelev1">&gt; High Performance Computing           Tel.: +49 711 685 87234
</span><br>
<span class="quotelev1">&gt; Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
</span><br>
<span class="quotelev1">&gt; Address:Allmandring 30               email: fan_at_[hidden]    70569 Stuttgart
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7334.php">Shiqing Fan: "Re: [OMPI devel] [OMPI users] flex.exe"</a>
<li><strong>Previous message:</strong> <a href="7332.php">yaohui: "[OMPI devel] how to implement and control a specific network device in openMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7334.php">Shiqing Fan: "Re: [OMPI devel] [OMPI users] flex.exe"</a>
<li><strong>Reply:</strong> <a href="7334.php">Shiqing Fan: "Re: [OMPI devel] [OMPI users] flex.exe"</a>
<li><strong>Maybe reply:</strong> <a href="7335.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] flex.exe"</a>
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
