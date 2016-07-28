<?
$subject_val = "Re: [OMPI devel] [OMPI users] flex.exe";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 22 08:31:40 2010" -->
<!-- isoreceived="20100122133140" -->
<!-- sent="Fri, 22 Jan 2010 14:30:39 +0100" -->
<!-- isosent="20100122133039" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] flex.exe" -->
<!-- id="4B59A87F.3040301_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="161D7BD3-E090-4AC1-876B-5EA2A99326CC_at_open-mpi.org" -->
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
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-22 08:30:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7335.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] flex.exe"</a>
<li><strong>Previous message:</strong> <a href="7333.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] flex.exe"</a>
<li><strong>In reply to:</strong> <a href="7333.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] flex.exe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7335.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] flex.exe"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>In the User's list, Jeff mentioned generating the windows flex code 
<br>
during make dist time, I didn't think about it before, it should work if 
<br>
flex is newer than 2.5.4 (the latest version is 2.5.35).
<br>
<p>In the created tarball, the flex generated c source won't compile under 
<br>
Windows, that's because using an old version of flex, the generated file 
<br>
include unistd.h but there is no way to exclude it. The newer flex 
<br>
generate output file with following code piece:
<br>
<p>#ifndef YY_NO_UNISTD_H
<br>
/* Special case for &quot;unistd.h&quot;, since it is non-ANSI. We include it way
<br>
&nbsp;* down here because we want the user's section 1 to have been scanned 
<br>
first.
<br>
&nbsp;* The user has a chance to override it with an option.
<br>
&nbsp;*/
<br>
#include &lt;unistd.h&gt;
<br>
#endif
<br>
<p>So that on the platforms that don't have unistd.h, just define 
<br>
'YY_NO_UNISTD_H' to get rid of it.
<br>
<p>Updating the flex that used for make dist, will be the best solution to 
<br>
remove flex.exe from the tarball. But this windows flex.exe should be 
<br>
better remain in svn repository for svn checkout build.
<br>
<p><p>Thanks,
<br>
Shiqing
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Let's shift this to the devel mailing list and add it to the Tues telecon.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for clarifying. Sounds to me like the suggestions made below are right - we shouldn't be distributing binary in the main tarball for export reasons. Seems like we have four options:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. A separate Windows-tool tarball
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. remove flex from the 3-4 places it is used in the code base and replace it with something that doesn't have this requirement. We don't use that much text processing - it may not take that much effort to write our own utility for this purpose.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. not use the features that are missing from the windows version.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4. even though it changes sometimes, generate the flex-code output and ship it like we used to do
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regardless, shipping binary in a source tarball seems like a really bad idea in this age of viral concerns.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 22, 2010, at 3:09 AM, Shiqing Fan wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; flex.exe is not generated at compile time, but flex.exe has to be used to generate those *flex*.c files during compilation, like show_help_lex.c (a.k.a the flex-generated code).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The windows binary of flex on sourceforge doesn't fit the requirement of Open MPI, it has some missing features. That's why we have to compile a new flex.exe for Windows, and put it in the source tree.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Shiqing
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Maybe I'm misunderstanding, but if it is generated at -compile- time, then how did it get in the 1.4.1 tarball?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 22, 2010, at 1:56 AM, Shiqing Fan wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; No, that's not true, we did ship the flex-generated code a time ago, but as that part of code changes sometimes, we decided to generate it during compilation time, and the flex.exe came with the first support of Windows (CMake).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Shiqing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Don't we ship the flex-generated code in the tarball anyway?  If so, why do we ship flex.exe?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jan 21, 2010, at 12:14 PM, Barrett, Brian W wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I have to agree with the two requests here. Having either a windows tarball or a windows build tools tarball doesn't seem too burdensom, and could even be done automatically at make dist time.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ----- Original Message -----
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; From: users-bounces_at_[hidden] &lt;users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; To: users_at_[hidden] &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Sent: Thu Jan 21 10:05:03 2010
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] flex.exe
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Am Donnerstag, den 21.01.2010, 11:52 -0500 schrieb Michael Di Domenico:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; openmpi-1.4.1/contrib/platform/win32/bin/flex.exe
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I understand this file might be required for building on windows,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; since I'm not I can just delete the file without issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; However, for those of us under import restrictions, where binaries are
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; not allowed in, this file causes me to open the tarball and delete the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; file (not a big deal, i know, i know).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; But, can I put up a vote for a pure source only tree?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;               
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;               
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I'm very much in favor of that since we can't ship this binary in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Debian. We'd have to delete it from the tarball and repack it with every
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; release which is quite cumbersome. If these tools could be shipped in a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; separate tarball that would be great!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Best regards
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Manuel
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; High Performance Computing           Tel.: +49 711 685 87234
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Address:Allmandring 30               email: fan_at_[hidden]    70569 Stuttgart
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
</span><br>
<span class="quotelev2">&gt;&gt; High Performance Computing           Tel.: +49 711 685 87234
</span><br>
<span class="quotelev2">&gt;&gt; Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
</span><br>
<span class="quotelev2">&gt;&gt; Address:Allmandring 30               email: fan_at_[hidden]    70569 Stuttgart
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p><pre>
-- 
--------------------------------------------------------------
Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
High Performance Computing           Tel.: +49 711 685 87234
  Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
Address:Allmandring 30               email: fan_at_[hidden]    
70569 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7335.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] flex.exe"</a>
<li><strong>Previous message:</strong> <a href="7333.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] flex.exe"</a>
<li><strong>In reply to:</strong> <a href="7333.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] flex.exe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7335.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] flex.exe"</a>
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
