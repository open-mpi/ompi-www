<?
$subject_val = "Re: [OMPI users] feature requests: mpic++ to report both release and debug flags";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 17 10:05:33 2012" -->
<!-- isoreceived="20120117150533" -->
<!-- sent="Tue, 17 Jan 2012 16:05:31 +0100" -->
<!-- isosent="20120117150531" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] feature requests: mpic++ to report both release and debug flags" -->
<!-- id="4F158E3B.2000505_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="003f01ccd45e$5e507fd0$1af17f70$_at_com" -->
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
<strong>Subject:</strong> Re: [OMPI users] feature requests: mpic++ to report both release and debug flags<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-17 10:05:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18189.php">Andrew Senin: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<li><strong>Previous message:</strong> <a href="18187.php">MM: "Re: [OMPI users] localhost only"</a>
<li><strong>In reply to:</strong> <a href="18169.php">MM: "[OMPI users] feature requests: mpic++ to report both release and debug flags"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18190.php">MM: "Re: [OMPI users] feature requests: mpic++ to report both release and debug flags"</a>
<li><strong>Reply:</strong> <a href="18190.php">MM: "Re: [OMPI users] feature requests: mpic++ to report both release and debug flags"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi MM,
<br>
<p>Actually option 3 has already been implemented for Windows build, and it 
<br>
seems adequate. But it was not targeting for the windows binary, as only 
<br>
quite a few users require this feature.
<br>
<p>When enabling WANT_EXE_DEBUG_POSTFIX option in CMake GUI, the build 
<br>
system will generate mpic++.exe (release) and mpic++d.exe (debug), and 
<br>
also their wrapper data files. So it is possible so just use mpic++ 
<br>
-showsome for release options and mpic++d -showsome for debug options.
<br>
<p>Is this what you are looking for? If it is really necessary, I don't see 
<br>
any problem to include it in the windows binary releases.
<br>
<p>I don't know how this is done on Linux system, can anyone comment?
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p><p>On 2012-01-16 3:51 PM, MM wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would be useful for the end user to use mpic++ to obtain the 
</span><br>
<span class="quotelev1">&gt; compile and link flags for both release and debug builds.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is a number of possible solutions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1.add the showme flags of mpic++ and any other similar binary to 
</span><br>
<span class="quotelev1">&gt; something like -showme:compile_debug -showme:compile_release 
</span><br>
<span class="quotelev1">&gt; -showme:link_release -showme:link_debug
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2.add a -showme_debug flag to tune the -showme:compile -showme:link
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3.have 2 versions of the binary mpic++(release) and mpic++(debug)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4.have 1 version of the mpic++ but 2 versions of the of 
</span><br>
<span class="quotelev1">&gt; wrapper-data.txt file
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 5.have 1 version of mpic++ and 1 version of the wrapper-data file, and 
</span><br>
<span class="quotelev1">&gt; 2 sections in the wrapper-data file
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would be great to have this delivered in the win binaries package 
</span><br>
<span class="quotelev1">&gt; (include both release and debug libs, that's already the case), and 
</span><br>
<span class="quotelev1">&gt; advise 3rd party packagers on unix/linux/mac distributions to do 
</span><br>
<span class="quotelev1">&gt; similarily
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would be also useful to publish the cmake flags used by default to 
</span><br>
<span class="quotelev1">&gt; produce the win binaries
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am available to test the packages if possible, also is there a wiki 
</span><br>
<span class="quotelev1">&gt; for requests or a similar system where I should file the above.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:*Shiqing Fan [mailto:fan_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; *Sent:* 19 November 2011 04:44
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Cc:* MM
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] mpic++-wrapper-data.txt msvc10 
</span><br>
<span class="quotelev1">&gt; Release/Debug 1.5.4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is no easy solution. But you can try to use 
</span><br>
<span class="quotelev1">&gt; WANT_EXE_DEBUG_POSTFIX option in CMake GUI. Enabling this option will 
</span><br>
<span class="quotelev1">&gt; generate different executable.library names for debug and release 
</span><br>
<span class="quotelev1">&gt; build. For example, mpic++d.exe for debug and mpic++.exe for release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For you case, just build both debug and release version of Open MPI 
</span><br>
<span class="quotelev1">&gt; 1.5.4, and install them into the same path, you will get two sets of 
</span><br>
<span class="quotelev1">&gt; executables/libraries (with &quot;d&quot; postfix for debug version) and mpic++ 
</span><br>
<span class="quotelev1">&gt; config files (mpic++d-wrapper-data.txt for debug version). Then just 
</span><br>
<span class="quotelev1">&gt; append your own debug/release compile options in the config files, and 
</span><br>
<span class="quotelev1">&gt; build with boost mpi as you need.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Shiqing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2011-11-18 9:44 PM, MM wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Compiling boost mpi library uses mpic++ to get the compile flags to 
</span><br>
<span class="quotelev1">&gt; pass to cl.exe and link libs to pass to the linker.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my case:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mpic++ -showme:compile
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /I&quot;C:\Program Files\openmpi\bin/../include&quot; /TP /EHsc */MD*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mpic++ -showme:link
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /link /LIBPATH:&quot;C:\Program Files\openmpi\bin/../lib&quot; *libmpi_cxx.lib 
</span><br>
<span class="quotelev1">&gt; libmpi.lib libopen-pal.lib libopen-rte.lib advapi32.lib Ws2_32.lib 
</span><br>
<span class="quotelev1">&gt; shlwapi.lib*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To choose Release build or Debug build, is it possible to use 
</span><br>
<span class="quotelev1">&gt; mpic++-wrapper-data.txt to specify both options?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Release
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; */MD*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *libmpi_cxx.lib libmpi.lib libopen-pal.lib libopen-rte.lib 
</span><br>
<span class="quotelev1">&gt; advapi32.lib Ws2_32.lib shlwapi.lib*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Debug
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; */MDd*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *libmpi_cxxd.lib libmpid.lib libopen-pald.lib libopen-rted.lib 
</span><br>
<span class="quotelev1">&gt; advapi32.lib Ws2_32.lib shlwapi.lib*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; is there a debug version of &quot;*advapi32.lib Ws2_32.lib shlwapi.lib&quot;*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For now, I will just override that file for Release, build boost mpi, 
</span><br>
<span class="quotelev1">&gt; override for Debug, build for Debug.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Shiqing Fan
</span><br>
<span class="quotelev1">&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev1">&gt; Tel: ++49(0)711-685-87234      Nobelstrasse 19
</span><br>
<span class="quotelev1">&gt; Fax: ++49(0)711-685-65832      70569 Stuttgart
</span><br>
<span class="quotelev1">&gt; <a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
</span><br>
<span class="quotelev1">&gt; email:fan_at_[hidden]  &lt;mailto:fan_at_[hidden]&gt;
</span><br>
<p><p><pre>
-- 
---------------------------------------------------------------
Shiqing Fan
High Performance Computing Center Stuttgart (HLRS)
Tel: ++49(0)711-685-87234      Nobelstrasse 19
Fax: ++49(0)711-685-65832      70569 Stuttgart
<a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
email: fan_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18188/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18189.php">Andrew Senin: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<li><strong>Previous message:</strong> <a href="18187.php">MM: "Re: [OMPI users] localhost only"</a>
<li><strong>In reply to:</strong> <a href="18169.php">MM: "[OMPI users] feature requests: mpic++ to report both release and debug flags"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18190.php">MM: "Re: [OMPI users] feature requests: mpic++ to report both release and debug flags"</a>
<li><strong>Reply:</strong> <a href="18190.php">MM: "Re: [OMPI users] feature requests: mpic++ to report both release and debug flags"</a>
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
