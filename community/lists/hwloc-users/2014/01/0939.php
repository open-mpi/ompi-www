<?
$subject_val = "Re: [hwloc-users] [windows] build from source using visual studio";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  7 03:49:38 2014" -->
<!-- isoreceived="20140107084938" -->
<!-- sent="Tue, 7 Jan 2014 08:49:31 +0000" -->
<!-- isosent="20140107084931" -->
<!-- name="Eloi Gaudry" -->
<!-- email="Eloi.Gaudry_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [windows] build from source using visual studio" -->
<!-- id="c252c9ee3d0a45efa1dfea23e464fabe_at_DM2PR08MB512.namprd08.prod.outlook.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="52CB0D97.7090208_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] [windows] build from source using visual studio<br>
<strong>From:</strong> Eloi Gaudry (<em>Eloi.Gaudry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-07 03:49:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0940.php">Eloi Gaudry: "Re: [hwloc-users] [windows] build from source using visual studio"</a>
<li><strong>Previous message:</strong> <a href="0938.php">Brice Goglin: "Re: [hwloc-users] [windows] build from source using visual studio"</a>
<li><strong>In reply to:</strong> <a href="0938.php">Brice Goglin: "Re: [hwloc-users] [windows] build from source using visual studio"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0940.php">Eloi Gaudry: "Re: [hwloc-users] [windows] build from source using visual studio"</a>
<li><strong>Reply:</strong> <a href="0940.php">Eloi Gaudry: "Re: [hwloc-users] [windows] build from source using visual studio"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
Sorry, I shouldn't speak of missing symbols here.
<br>
You'll find below the cause of the issue (division by zero  in libhwloc-5.dll).
<br>
Regards,
<br>
Eloi
<br>
<p><p>00:00:00.609: GetProcAddress(0x0000000078D40000 [c:\windows\system32\KERNEL32.DLL], &quot;GetLogicalProcessorInformation&quot;) called from &quot;XXX\bin\LIBHWLOC-5.DLL&quot; at address 0x0000000069E9348D and returned 0x0000000078DBA120 by thread 1.
<br>
00:00:00.609: GetProcAddress(0x0000000078D40000 [c:\windows\system32\KERNEL32.DLL], &quot;GetNumaAvailableMemoryNode&quot;) called from &quot; XXX \bin\LIBHWLOC-5.DLL&quot; at address 0x0000000069E9349C and returned 0x0000000078DB4B00 by thread 1.
<br>
00:00:00.609: GetProcAddress(0x0000000078D40000 [c:\windows\system32\KERNEL32.DLL], &quot;GetNumaAvailableMemoryNodeEx&quot;) called from &quot; XXX \bin\LIBHWLOC-5.DLL&quot; at address 0x0000000069E934AD and returned NULL by thread 1. Error: The specified procedure could not be found (127).
<br>
00:00:00.625: GetProcAddress(0x0000000078D40000 [c:\windows\system32\KERNEL32.DLL], &quot;GetLogicalProcessorInformationEx&quot;) called from &quot; XXX \bin\LIBHWLOC-5.DLL&quot; at address 0x0000000069E934BE and returned NULL by thread 1. Error: The specified procedure could not be found (127).
<br>
00:00:00.625: LoadLibraryA(&quot;kernel32.dll&quot;) called from &quot; XXX \bin\LIBHWLOC-5.DLL&quot; at address 0x0000000069E940CD by thread 1.
<br>
00:00:00.625: LoadLibraryA(&quot;kernel32.dll&quot;) returned 0x0000000078D40000 by thread 1.
<br>
00:00:00.625: GetProcAddress(0x0000000078D40000 [c:\windows\system32\KERNEL32.DLL], &quot;VirtualAllocExNuma&quot;) called from &quot; XXX\bin\LIBHWLOC-5.DLL&quot; at address 0x0000000069E940ED and returned NULL by thread 1. Error: The specified procedure could not be found (127).
<br>
00:00:00.625: GetProcAddress(0x0000000078D40000 [c:\windows\system32\KERNEL32.DLL], &quot;VirtualFreeEx&quot;) called from &quot; XXX \bin\LIBHWLOC-5.DLL&quot; at address 0x0000000069E940FD and returned 0x0000000078D92CB0 by thread 1.
<br>
00:00:00.625: LoadLibraryA(&quot;kernel32.dll&quot;) called from &quot; XXX\bin\LIBHWLOC-5.DLL&quot; at address 0x0000000069E94130 by thread 1.
<br>
00:00:00.625: LoadLibraryA(&quot;kernel32.dll&quot;) returned 0x0000000078D40000 by thread 1.
<br>
00:00:00.625: GetProcAddress(0x0000000078D40000 [c:\windows\system32\KERNEL32.DLL], &quot;K32QueryWorkingSetEx&quot;) called from &quot; XXX\bin\LIBHWLOC-5.DLL&quot; at address 0x0000000069E94145 and returned NULL by thread 1. Error: The specified procedure could not be found (127).
<br>
00:00:00.625: LoadLibraryA(&quot;psapi.dll&quot;) called from &quot; XXX\bin\LIBHWLOC-5.DLL&quot; at address 0x0000000069E94189 by thread 1.
<br>
00:00:00.625: LoadLibraryA(&quot;psapi.dll&quot;) returned 0x000007FF7E1B0000 by thread 1.
<br>
00:00:00.625: GetProcAddress(0x000007FF7E1B0000 [c:\windows\system32\PSAPI.DLL], &quot;QueryWorkingSetEx&quot;) called from &quot; XXX\bin\LIBHWLOC-5.DLL&quot; at address 0x0000000069E9419E and returned 0x000007FF7E1B2E60 by thread 1.
<br>
00:00:00.625: First chance exception 0xC0000094 (Integer Divide by Zero) occurred in &quot; XXX\bin\XXX.EXE&quot; at address 0x0000000141CBF18D by thread 1.
<br>
00:00:00.640: Second chance exception 0xC0000094 (Integer Divide by Zero) occurred in &quot; XXX\bin\XXX.EXE&quot; at address 0x0000000141CBF18D by thread 1.
<br>
00:00:00.640: Exited &quot; XXX\bin\XXX.EXE&quot; (process 0x404) with code 128 (0x80) by thread 1.
<br>
<p><p><p>From: hwloc-users [mailto:hwloc-users-bounces_at_[hidden]] On Behalf Of Brice Goglin
<br>
Sent: lundi 6 janvier 2014 21:10
<br>
To: Hardware locality user list
<br>
Subject: Re: [hwloc-users] [windows] build from source using visual studio
<br>
<p>I've been working on adding msvc/cmake support last year (pushed some msvc-related fixes that are at least in v1.7 and later) but I stopped at some point because there was not much interest for it, and because it's not easy to do some automatic testing.
<br>
<p>I am not sure what you mean with windows 6.x and x64, but last time I checked things seemed to work fine on Windows 7 64bits at least. What symbols are we using that are not not available anymore? When did they disappear?
<br>
<p>Brice
<br>
<p><p><p>Le 06/01/2014 20:59, Eloi Gaudry a &#233;crit :
<br>
Hi,
<br>
<p>I was wondering if you could add Visual Studio support to build hwloc from source.
<br>
Some open source projects (libpng for instance) for instance distribute a &quot;contrib&quot; folder in the sources where every exotic platforms get their makefiles-like available.
<br>
I begun to write vcxproj (for Visual Studio 2010 and 2012) a file ago, but I failed at creating the right autogenerated file used for configure.
<br>
<p>I'm very much interested in building hwloc from source to tune what hwloc relies on to work. For instance, version-1.7.2 has a strong dependency on some symbols available on Windows 6.x only. This means that Windows x64 is not supported.
<br>
<p>Regards,
<br>
Eloi
<br>
<p><p><p><p>_______________________________________________
<br>
<p>hwloc-users mailing list
<br>
<p>hwloc-users_at_[hidden]&lt;mailto:hwloc-users_at_[hidden]&gt;
<br>
<p><a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0939/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0940.php">Eloi Gaudry: "Re: [hwloc-users] [windows] build from source using visual studio"</a>
<li><strong>Previous message:</strong> <a href="0938.php">Brice Goglin: "Re: [hwloc-users] [windows] build from source using visual studio"</a>
<li><strong>In reply to:</strong> <a href="0938.php">Brice Goglin: "Re: [hwloc-users] [windows] build from source using visual studio"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0940.php">Eloi Gaudry: "Re: [hwloc-users] [windows] build from source using visual studio"</a>
<li><strong>Reply:</strong> <a href="0940.php">Eloi Gaudry: "Re: [hwloc-users] [windows] build from source using visual studio"</a>
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
