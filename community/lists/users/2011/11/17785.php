<?
$subject_val = "Re: [OMPI users] mpic++-wrapper-data.txt msvc10 Release/Debug 1.5.4";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 18 23:43:56 2011" -->
<!-- isoreceived="20111119044356" -->
<!-- sent="Sat, 19 Nov 2011 05:43:45 +0100" -->
<!-- isosent="20111119044345" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpic++-wrapper-data.txt msvc10 Release/Debug 1.5.4" -->
<!-- id="4EC73401.7040005_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="000001cca632$e77ac4a0$b6704de0$_at_com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpic++-wrapper-data.txt msvc10 Release/Debug 1.5.4<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-18 23:43:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17786.php">Shiqing Fan: "Re: [OMPI users] vs2010: MPI_Address() unresolved"</a>
<li><strong>Previous message:</strong> <a href="17784.php">MM: "[OMPI users] vs2010: MPI_Address() unresolved"</a>
<li><strong>In reply to:</strong> <a href="17783.php">MM: "[OMPI users] mpic++-wrapper-data.txt msvc10 Release/Debug 1.5.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/01/18169.php">MM: "[OMPI users] feature requests: mpic++ to report both release and debug flags"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/01/18169.php">MM: "[OMPI users] feature requests: mpic++ to report both release and debug flags"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>There is no easy solution. But you can try to use WANT_EXE_DEBUG_POSTFIX 
<br>
option in CMake GUI. Enabling this option will generate different 
<br>
executable.library names for debug and release build. For example, 
<br>
mpic++d.exe for debug and mpic++.exe for release.
<br>
<p>For you case, just build both debug and release version of Open MPI 
<br>
1.5.4, and install them into the same path, you will get two sets of 
<br>
executables/libraries (with &quot;d&quot; postfix for debug version) and mpic++ 
<br>
config files (mpic++d-wrapper-data.txt for debug version). Then just 
<br>
append your own debug/release compile options in the config files, and 
<br>
build with boost mpi as you need.
<br>
<p>Hope this helps.
<br>
<p>Regards,
<br>
Shiqing
<br>
<p>On 2011-11-18 9:44 PM, MM wrote:
<br>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17785/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17786.php">Shiqing Fan: "Re: [OMPI users] vs2010: MPI_Address() unresolved"</a>
<li><strong>Previous message:</strong> <a href="17784.php">MM: "[OMPI users] vs2010: MPI_Address() unresolved"</a>
<li><strong>In reply to:</strong> <a href="17783.php">MM: "[OMPI users] mpic++-wrapper-data.txt msvc10 Release/Debug 1.5.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/01/18169.php">MM: "[OMPI users] feature requests: mpic++ to report both release and debug flags"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/01/18169.php">MM: "[OMPI users] feature requests: mpic++ to report both release and debug flags"</a>
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
