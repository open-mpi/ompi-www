<?
$subject_val = "Re: [hwloc-users] [windows] build from source using visual studio";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  8 05:49:09 2014" -->
<!-- isoreceived="20140108104909" -->
<!-- sent="Wed, 08 Jan 2014 11:49:06 +0100" -->
<!-- isosent="20140108104906" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [windows] build from source using visual studio" -->
<!-- id="52CD2D22.2040207_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2a755b31eb3346cb84fe923ddf08ef9e_at_DM2PR08MB512.namprd08.prod.outlook.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-08 05:49:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0942.php">Eloi Gaudry: "Re: [hwloc-users] [windows] build from source using visual studio"</a>
<li><strong>Previous message:</strong> <a href="0940.php">Eloi Gaudry: "Re: [hwloc-users] [windows] build from source using visual studio"</a>
<li><strong>In reply to:</strong> <a href="0940.php">Eloi Gaudry: "Re: [hwloc-users] [windows] build from source using visual studio"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0942.php">Eloi Gaudry: "Re: [hwloc-users] [windows] build from source using visual studio"</a>
<li><strong>Reply:</strong> <a href="0942.php">Eloi Gaudry: "Re: [hwloc-users] [windows] build from source using visual studio"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Having 0 socket isn't an issue. There are normal cases where we find 0
<br>
socket: when there is no OS support for counting sockets. I agree that
<br>
the windows code is supposed to find the number of sockets, but I want
<br>
to make sure you are not making wrong assumptions on the hwloc output.
<br>
<p>Brice
<br>
<p><p><p>Le 07/01/2014 15:40, Eloi Gaudry a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The issue is related to detecting the number of sockets on the node
</span><br>
<span class="quotelev1">&gt; running Windows x64 (Windows XP 64-bit).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The return value from hwloc_get_nbobjs_by_type( htop, HWLOC_OBJ_SOCKET
</span><br>
<span class="quotelev1">&gt; ) is 0 (on a single socket node, where htop is the successfully loaded
</span><br>
<span class="quotelev1">&gt; topology, with a right number of cores detected).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eloi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:*hwloc-users [mailto:hwloc-users-bounces_at_[hidden]] *On
</span><br>
<span class="quotelev1">&gt; Behalf Of *Eloi Gaudry
</span><br>
<span class="quotelev1">&gt; *Sent:* mardi 7 janvier 2014 09:50
</span><br>
<span class="quotelev1">&gt; *To:* Hardware locality user list
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [hwloc-users] [windows] build from source using visual
</span><br>
<span class="quotelev1">&gt; studio
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry, I shouldn't speak of missing symbols here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You'll find below the cause of the issue (division by zero  in
</span><br>
<span class="quotelev1">&gt; libhwloc-5.dll).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eloi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 00:00:00.609: GetProcAddress(0x0000000078D40000
</span><br>
<span class="quotelev1">&gt; [c:\windows\system32\KERNEL32.DLL], &quot;GetLogicalProcessorInformation&quot;)
</span><br>
<span class="quotelev1">&gt; called from &quot;XXX\bin\LIBHWLOC-5.DLL&quot; at address 0x0000000069E9348D and
</span><br>
<span class="quotelev1">&gt; returned 0x0000000078DBA120 by thread 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 00:00:00.609: GetProcAddress(0x0000000078D40000
</span><br>
<span class="quotelev1">&gt; [c:\windows\system32\KERNEL32.DLL], &quot;GetNumaAvailableMemoryNode&quot;)
</span><br>
<span class="quotelev1">&gt; called from &quot; XXX \bin\LIBHWLOC-5.DLL&quot; at address 0x0000000069E9349C
</span><br>
<span class="quotelev1">&gt; and returned 0x0000000078DB4B00 by thread 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 00:00:00.609: GetProcAddress(0x0000000078D40000
</span><br>
<span class="quotelev1">&gt; [c:\windows\system32\KERNEL32.DLL], &quot;GetNumaAvailableMemoryNodeEx&quot;)
</span><br>
<span class="quotelev1">&gt; called from &quot; XXX \bin\LIBHWLOC-5.DLL&quot; at address 0x0000000069E934AD
</span><br>
<span class="quotelev1">&gt; and returned NULL by thread 1. Error: The specified procedure could
</span><br>
<span class="quotelev1">&gt; not be found (127).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 00:00:00.625: GetProcAddress(0x0000000078D40000
</span><br>
<span class="quotelev1">&gt; [c:\windows\system32\KERNEL32.DLL],
</span><br>
<span class="quotelev1">&gt; &quot;GetLogicalProcessorInformationEx&quot;) called from &quot; XXX
</span><br>
<span class="quotelev1">&gt; \bin\LIBHWLOC-5.DLL&quot; at address 0x0000000069E934BE and returned NULL
</span><br>
<span class="quotelev1">&gt; by thread 1. Error: The specified procedure could not be found (127).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 00:00:00.625: LoadLibraryA(&quot;kernel32.dll&quot;) called from &quot; XXX
</span><br>
<span class="quotelev1">&gt; \bin\LIBHWLOC-5.DLL&quot; at address 0x0000000069E940CD by thread 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 00:00:00.625: LoadLibraryA(&quot;kernel32.dll&quot;) returned 0x0000000078D40000
</span><br>
<span class="quotelev1">&gt; by thread 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 00:00:00.625: GetProcAddress(0x0000000078D40000
</span><br>
<span class="quotelev1">&gt; [c:\windows\system32\KERNEL32.DLL], &quot;VirtualAllocExNuma&quot;) called from
</span><br>
<span class="quotelev1">&gt; &quot; XXX\bin\LIBHWLOC-5.DLL&quot; at address 0x0000000069E940ED and returned
</span><br>
<span class="quotelev1">&gt; NULL by thread 1. Error: The specified procedure could not be found (127).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 00:00:00.625: GetProcAddress(0x0000000078D40000
</span><br>
<span class="quotelev1">&gt; [c:\windows\system32\KERNEL32.DLL], &quot;VirtualFreeEx&quot;) called from &quot; XXX
</span><br>
<span class="quotelev1">&gt; \bin\LIBHWLOC-5.DLL&quot; at address 0x0000000069E940FD and returned
</span><br>
<span class="quotelev1">&gt; 0x0000000078D92CB0 by thread 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 00:00:00.625: LoadLibraryA(&quot;kernel32.dll&quot;) called from &quot;
</span><br>
<span class="quotelev1">&gt; XXX\bin\LIBHWLOC-5.DLL&quot; at address 0x0000000069E94130 by thread 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 00:00:00.625: LoadLibraryA(&quot;kernel32.dll&quot;) returned 0x0000000078D40000
</span><br>
<span class="quotelev1">&gt; by thread 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 00:00:00.625: GetProcAddress(0x0000000078D40000
</span><br>
<span class="quotelev1">&gt; [c:\windows\system32\KERNEL32.DLL], &quot;K32QueryWorkingSetEx&quot;) called
</span><br>
<span class="quotelev1">&gt; from &quot; XXX\bin\LIBHWLOC-5.DLL&quot; at address 0x0000000069E94145 and
</span><br>
<span class="quotelev1">&gt; returned NULL by thread 1. Error: The specified procedure could not be
</span><br>
<span class="quotelev1">&gt; found (127).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 00:00:00.625: LoadLibraryA(&quot;psapi.dll&quot;) called from &quot;
</span><br>
<span class="quotelev1">&gt; XXX\bin\LIBHWLOC-5.DLL&quot; at address 0x0000000069E94189 by thread 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 00:00:00.625: LoadLibraryA(&quot;psapi.dll&quot;) returned 0x000007FF7E1B0000 by
</span><br>
<span class="quotelev1">&gt; thread 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 00:00:00.625: GetProcAddress(0x000007FF7E1B0000
</span><br>
<span class="quotelev1">&gt; [c:\windows\system32\PSAPI.DLL], &quot;QueryWorkingSetEx&quot;) called from &quot;
</span><br>
<span class="quotelev1">&gt; XXX\bin\LIBHWLOC-5.DLL&quot; at address 0x0000000069E9419E and returned
</span><br>
<span class="quotelev1">&gt; 0x000007FF7E1B2E60 by thread 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 00:00:00.625: First chance exception 0xC0000094 (Integer Divide by
</span><br>
<span class="quotelev1">&gt; Zero) occurred in &quot; XXX\bin\XXX.EXE&quot; at address 0x0000000141CBF18D by
</span><br>
<span class="quotelev1">&gt; thread 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 00:00:00.640: Second chance exception 0xC0000094 (Integer Divide by
</span><br>
<span class="quotelev1">&gt; Zero) occurred in &quot; XXX\bin\XXX.EXE&quot; at address 0x0000000141CBF18D by
</span><br>
<span class="quotelev1">&gt; thread 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 00:00:00.640: Exited &quot; XXX\bin\XXX.EXE&quot; (process 0x404) with code 128
</span><br>
<span class="quotelev1">&gt; (0x80) by thread 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:*hwloc-users [mailto:hwloc-users-bounces_at_[hidden]] *On
</span><br>
<span class="quotelev1">&gt; Behalf Of *Brice Goglin
</span><br>
<span class="quotelev1">&gt; *Sent:* lundi 6 janvier 2014 21:10
</span><br>
<span class="quotelev1">&gt; *To:* Hardware locality user list
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [hwloc-users] [windows] build from source using visual
</span><br>
<span class="quotelev1">&gt; studio
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've been working on adding msvc/cmake support last year (pushed some
</span><br>
<span class="quotelev1">&gt; msvc-related fixes that are at least in v1.7 and later) but I stopped
</span><br>
<span class="quotelev1">&gt; at some point because there was not much interest for it, and because
</span><br>
<span class="quotelev1">&gt; it's not easy to do some automatic testing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not sure what you mean with windows 6.x and x64, but last time I
</span><br>
<span class="quotelev1">&gt; checked things seemed to work fine on Windows 7 64bits at least. What
</span><br>
<span class="quotelev1">&gt; symbols are we using that are not not available anymore? When did they
</span><br>
<span class="quotelev1">&gt; disappear?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 06/01/2014 20:59, Eloi Gaudry a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I was wondering if you could add Visual Studio support to build
</span><br>
<span class="quotelev1">&gt;     hwloc from source.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Some open source projects (libpng for instance) for instance
</span><br>
<span class="quotelev1">&gt;     distribute a &quot;contrib&quot; folder in the sources where every exotic
</span><br>
<span class="quotelev1">&gt;     platforms get their makefiles-like available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I begun to write vcxproj (for Visual Studio 2010 and 2012) a file
</span><br>
<span class="quotelev1">&gt;     ago, but I failed at creating the right autogenerated file used
</span><br>
<span class="quotelev1">&gt;     for configure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I'm very much interested in building hwloc from source to tune
</span><br>
<span class="quotelev1">&gt;     what hwloc relies on to work. For instance, version-1.7.2 has a
</span><br>
<span class="quotelev1">&gt;     strong dependency on some symbols available on Windows 6.x only.
</span><br>
<span class="quotelev1">&gt;     This means that Windows x64 is not supported.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Eloi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     hwloc-users_at_[hidden] &lt;mailto:hwloc-users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0941/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0942.php">Eloi Gaudry: "Re: [hwloc-users] [windows] build from source using visual studio"</a>
<li><strong>Previous message:</strong> <a href="0940.php">Eloi Gaudry: "Re: [hwloc-users] [windows] build from source using visual studio"</a>
<li><strong>In reply to:</strong> <a href="0940.php">Eloi Gaudry: "Re: [hwloc-users] [windows] build from source using visual studio"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0942.php">Eloi Gaudry: "Re: [hwloc-users] [windows] build from source using visual studio"</a>
<li><strong>Reply:</strong> <a href="0942.php">Eloi Gaudry: "Re: [hwloc-users] [windows] build from source using visual studio"</a>
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
