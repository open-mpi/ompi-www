<?
$subject_val = "[OMPI users] feature requests: mpic++ to report both release and debug flags";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 16 09:53:45 2012" -->
<!-- isoreceived="20120116145345" -->
<!-- sent="Mon, 16 Jan 2012 14:51:43 -0000" -->
<!-- isosent="20120116145143" -->
<!-- name="MM" -->
<!-- email="finjulhich_at_[hidden]" -->
<!-- subject="[OMPI users] feature requests: mpic++ to report both release and debug flags" -->
<!-- id="003f01ccd45e$5e507fd0$1af17f70$_at_com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4EC73401.7040005_at_hlrs.de" -->
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
<strong>Subject:</strong> [OMPI users] feature requests: mpic++ to report both release and debug flags<br>
<strong>From:</strong> MM (<em>finjulhich_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-16 09:51:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18170.php">Andrew Senin: "[OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<li><strong>Previous message:</strong> <a href="18168.php">devendra rai: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/11/17785.php">Shiqing Fan: "Re: [OMPI users] mpic++-wrapper-data.txt msvc10 Release/Debug 1.5.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18188.php">Shiqing Fan: "Re: [OMPI users] feature requests: mpic++ to report both release and debug flags"</a>
<li><strong>Reply:</strong> <a href="18188.php">Shiqing Fan: "Re: [OMPI users] feature requests: mpic++ to report both release and debug flags"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>&nbsp;
<br>
<p>It would be useful for the end user to use mpic++ to obtain the compile and
<br>
link flags for both release and debug builds.
<br>
<p>&nbsp;
<br>
<p>There is a number of possible solutions:
<br>
<p>1.       add the showme flags of mpic++ and any other similar binary to
<br>
something like -showme:compile_debug -showme:compile_release
<br>
-showme:link_release -showme:link_debug
<br>
<p>2.       add a -showme_debug flag to tune the -showme:compile -showme:link
<br>
<p>3.       have 2 versions of the binary mpic++(release) and mpic++(debug)
<br>
<p>4.       have 1 version of the mpic++ but 2 versions of the of
<br>
wrapper-data.txt file
<br>
<p>5.       have 1 version of mpic++ and 1 version of the wrapper-data file,
<br>
and 2 sections in the wrapper-data file
<br>
<p>&nbsp;
<br>
<p>It would be great to have this delivered in the win binaries package
<br>
(include both release and debug libs, that's already the case), and advise
<br>
3rd party packagers on unix/linux/mac distributions to do similarily
<br>
<p>&nbsp;
<br>
<p>It would be also useful to publish the cmake flags used by default to
<br>
produce the win binaries
<br>
<p>&nbsp;
<br>
<p>I am available to test the packages if possible, also is there a wiki for
<br>
requests or a similar system where I should file the above.
<br>
<p>&nbsp;
<br>
<p>MM
<br>
<p>&nbsp;
<br>
<p>Regards,
<br>
<p>&nbsp;
<br>
<p>From: Shiqing Fan [mailto:fan_at_[hidden]] 
<br>
Sent: 19 November 2011 04:44
<br>
To: Open MPI Users
<br>
Cc: MM
<br>
Subject: Re: [OMPI users] mpic++-wrapper-data.txt msvc10 Release/Debug 1.5.4
<br>
<p>&nbsp;
<br>
<p>Hi,
<br>
<p>There is no easy solution. But you can try to use WANT_EXE_DEBUG_POSTFIX
<br>
option in CMake GUI. Enabling this option will generate different
<br>
executable.library names for debug and release build. For example,
<br>
mpic++d.exe for debug and mpic++.exe for release.
<br>
<p>For you case, just build both debug and release version of Open MPI 1.5.4,
<br>
and install them into the same path, you will get two sets of
<br>
executables/libraries (with &quot;d&quot; postfix for debug version) and mpic++ config
<br>
files (mpic++d-wrapper-data.txt for debug version). Then just append your
<br>
own debug/release compile options in the config files, and build with boost
<br>
mpi as you need.
<br>
<p>Hope this helps.
<br>
<p>Regards,
<br>
Shiqing
<br>
<p>On 2011-11-18 9:44 PM, MM wrote: 
<br>
<p>Hello,
<br>
<p>&nbsp;
<br>
<p>Compiling boost mpi library uses mpic++ to get the compile flags to pass to
<br>
cl.exe and link libs to pass to the linker.
<br>
<p>In my case:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; mpic++ -showme:compile
</span><br>
<p>/I&quot;C:\Program Files\openmpi\bin/../include&quot; /TP /EHsc /MD
<br>
<p><span class="quotelev3">&gt;&gt;&gt; mpic++ -showme:link
</span><br>
<p>/link /LIBPATH:&quot;C:\Program Files\openmpi\bin/../lib&quot; libmpi_cxx.lib
<br>
libmpi.lib libopen-pal.lib libopen-rte.lib advapi32.lib Ws2_32.lib
<br>
shlwapi.lib
<br>
<p>&nbsp;
<br>
<p>To choose Release build or Debug build, is it possible to use
<br>
mpic++-wrapper-data.txt to specify both options?
<br>
<p>&nbsp;
<br>
<p>Release
<br>
<p>/MD
<br>
<p>libmpi_cxx.lib libmpi.lib libopen-pal.lib libopen-rte.lib advapi32.lib
<br>
Ws2_32.lib shlwapi.lib
<br>
<p>&nbsp;
<br>
<p>Debug
<br>
<p>/MDd
<br>
<p>libmpi_cxxd.lib libmpid.lib libopen-pald.lib libopen-rted.lib advapi32.lib
<br>
Ws2_32.lib shlwapi.lib
<br>
<p>is there a debug version of &quot;advapi32.lib Ws2_32.lib shlwapi.lib&quot;
<br>
<p>&nbsp;
<br>
<p>For now, I will just override that file for Release, build boost mpi,
<br>
override for Debug, build for Debug.
<br>
<p>&nbsp;
<br>
<p>thanks,
<br>
<p>&nbsp;
<br>
<p>MM
<br>
<p><p><p><p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><p><p><p><pre>
-- 
---------------------------------------------------------------
Shiqing Fan
High Performance Computing Center Stuttgart (HLRS)
Tel: ++49(0)711-685-87234      Nobelstrasse 19
Fax: ++49(0)711-685-65832      70569 Stuttgart
<a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
email: fan_at_[hidden]
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18169/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18170.php">Andrew Senin: "[OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<li><strong>Previous message:</strong> <a href="18168.php">devendra rai: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/11/17785.php">Shiqing Fan: "Re: [OMPI users] mpic++-wrapper-data.txt msvc10 Release/Debug 1.5.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18188.php">Shiqing Fan: "Re: [OMPI users] feature requests: mpic++ to report both release and debug flags"</a>
<li><strong>Reply:</strong> <a href="18188.php">Shiqing Fan: "Re: [OMPI users] feature requests: mpic++ to report both release and debug flags"</a>
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
