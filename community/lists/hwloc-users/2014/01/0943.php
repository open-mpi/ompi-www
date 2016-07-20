<?
$subject_val = "Re: [hwloc-users] [windows] build from source using visual studio";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  8 06:06:40 2014" -->
<!-- isoreceived="20140108110640" -->
<!-- sent="Wed, 08 Jan 2014 12:06:37 +0100" -->
<!-- isosent="20140108110637" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [windows] build from source using visual studio" -->
<!-- id="52CD313D.70305_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3544d88d57b744be9374fee3becd135f_at_DM2PR08MB512.namprd08.prod.outlook.com" -->
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
<strong>Date:</strong> 2014-01-08 06:06:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0944.php">Jeff Squyres (jsquyres): "[hwloc-users] hwloc problem on SGI machine"</a>
<li><strong>Previous message:</strong> <a href="0942.php">Eloi Gaudry: "Re: [hwloc-users] [windows] build from source using visual studio"</a>
<li><strong>In reply to:</strong> <a href="0942.php">Eloi Gaudry: "Re: [hwloc-users] [windows] build from source using visual studio"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 08/01/2014 12:02, Eloi Gaudry a &#233;crit :
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
<span class="quotelev1">&gt; Yes, I was making the wrong assumption on the value returned by hwloc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually, I wasn't aware of the fact that this OS would not support
</span><br>
<span class="quotelev1">&gt; counting socket and I wasn't checking for the returned value neither
</span><br>
<span class="quotelev1">&gt; (I'm not too proud of that).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I corrected my code, thanks for your support, I appreciate.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Back to the main topic, would you consider delivering vcxproj again ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>If that's just a separate file or directory under contrib, sure.
<br>
<p>Brice
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
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
<span class="quotelev1">&gt; Behalf Of *Brice Goglin
</span><br>
<span class="quotelev1">&gt; *Sent:* mercredi 8 janvier 2014 11:49
</span><br>
<span class="quotelev1">&gt; *To:* hwloc-users_at_[hidden]
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
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Having 0 socket isn't an issue. There are normal cases where we find 0
</span><br>
<span class="quotelev1">&gt; socket: when there is no OS support for counting sockets. I agree that
</span><br>
<span class="quotelev1">&gt; the windows code is supposed to find the number of sockets, but I want
</span><br>
<span class="quotelev1">&gt; to make sure you are not making wrong assumptions on the hwloc output.
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
<span class="quotelev1">&gt; Le 07/01/2014 15:40, Eloi Gaudry a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The issue is related to detecting the number of sockets on the
</span><br>
<span class="quotelev1">&gt;     node running Windows x64 (Windows XP 64-bit).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The return value from hwloc_get_nbobjs_by_type( htop,
</span><br>
<span class="quotelev1">&gt;     HWLOC_OBJ_SOCKET ) is 0 (on a single socket node, where htop is
</span><br>
<span class="quotelev1">&gt;     the successfully loaded topology, with a right number of cores
</span><br>
<span class="quotelev1">&gt;     detected).
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
<span class="quotelev1">&gt;     *From:*hwloc-users [mailto:hwloc-users-bounces_at_[hidden]] *On
</span><br>
<span class="quotelev1">&gt;     Behalf Of *Eloi Gaudry
</span><br>
<span class="quotelev1">&gt;     *Sent:* mardi 7 janvier 2014 09:50
</span><br>
<span class="quotelev1">&gt;     *To:* Hardware locality user list
</span><br>
<span class="quotelev1">&gt;     *Subject:* Re: [hwloc-users] [windows] build from source using
</span><br>
<span class="quotelev1">&gt;     visual studio
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Sorry, I shouldn't speak of missing symbols here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     You'll find below the cause of the issue (division by zero  in
</span><br>
<span class="quotelev1">&gt;     libhwloc-5.dll).
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
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     00:00:00.609: GetProcAddress(0x0000000078D40000
</span><br>
<span class="quotelev1">&gt;     [c:\windows\system32\KERNEL32.DLL],
</span><br>
<span class="quotelev1">&gt;     &quot;GetLogicalProcessorInformation&quot;) called from
</span><br>
<span class="quotelev1">&gt;     &quot;XXX\bin\LIBHWLOC-5.DLL&quot; at address 0x0000000069E9348D and
</span><br>
<span class="quotelev1">&gt;     returned 0x0000000078DBA120 by thread 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     00:00:00.609: GetProcAddress(0x0000000078D40000
</span><br>
<span class="quotelev1">&gt;     [c:\windows\system32\KERNEL32.DLL], &quot;GetNumaAvailableMemoryNode&quot;)
</span><br>
<span class="quotelev1">&gt;     called from &quot; XXX \bin\LIBHWLOC-5.DLL&quot; at address
</span><br>
<span class="quotelev1">&gt;     0x0000000069E9349C and returned 0x0000000078DB4B00 by thread 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     00:00:00.609: GetProcAddress(0x0000000078D40000
</span><br>
<span class="quotelev1">&gt;     [c:\windows\system32\KERNEL32.DLL],
</span><br>
<span class="quotelev1">&gt;     &quot;GetNumaAvailableMemoryNodeEx&quot;) called from &quot; XXX
</span><br>
<span class="quotelev1">&gt;     \bin\LIBHWLOC-5.DLL&quot; at address 0x0000000069E934AD and returned
</span><br>
<span class="quotelev1">&gt;     NULL by thread 1. Error: The specified procedure could not be
</span><br>
<span class="quotelev1">&gt;     found (127).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     00:00:00.625: GetProcAddress(0x0000000078D40000
</span><br>
<span class="quotelev1">&gt;     [c:\windows\system32\KERNEL32.DLL],
</span><br>
<span class="quotelev1">&gt;     &quot;GetLogicalProcessorInformationEx&quot;) called from &quot; XXX
</span><br>
<span class="quotelev1">&gt;     \bin\LIBHWLOC-5.DLL&quot; at address 0x0000000069E934BE and returned
</span><br>
<span class="quotelev1">&gt;     NULL by thread 1. Error: The specified procedure could not be
</span><br>
<span class="quotelev1">&gt;     found (127).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     00:00:00.625: LoadLibraryA(&quot;kernel32.dll&quot;) called from &quot; XXX
</span><br>
<span class="quotelev1">&gt;     \bin\LIBHWLOC-5.DLL&quot; at address 0x0000000069E940CD by thread 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     00:00:00.625: LoadLibraryA(&quot;kernel32.dll&quot;) returned
</span><br>
<span class="quotelev1">&gt;     0x0000000078D40000 by thread 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     00:00:00.625: GetProcAddress(0x0000000078D40000
</span><br>
<span class="quotelev1">&gt;     [c:\windows\system32\KERNEL32.DLL], &quot;VirtualAllocExNuma&quot;) called
</span><br>
<span class="quotelev1">&gt;     from &quot; XXX\bin\LIBHWLOC-5.DLL&quot; at address 0x0000000069E940ED and
</span><br>
<span class="quotelev1">&gt;     returned NULL by thread 1. Error: The specified procedure could
</span><br>
<span class="quotelev1">&gt;     not be found (127).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     00:00:00.625: GetProcAddress(0x0000000078D40000
</span><br>
<span class="quotelev1">&gt;     [c:\windows\system32\KERNEL32.DLL], &quot;VirtualFreeEx&quot;) called from &quot;
</span><br>
<span class="quotelev1">&gt;     XXX \bin\LIBHWLOC-5.DLL&quot; at address 0x0000000069E940FD and
</span><br>
<span class="quotelev1">&gt;     returned 0x0000000078D92CB0 by thread 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     00:00:00.625: LoadLibraryA(&quot;kernel32.dll&quot;) called from &quot;
</span><br>
<span class="quotelev1">&gt;     XXX\bin\LIBHWLOC-5.DLL&quot; at address 0x0000000069E94130 by thread 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     00:00:00.625: LoadLibraryA(&quot;kernel32.dll&quot;) returned
</span><br>
<span class="quotelev1">&gt;     0x0000000078D40000 by thread 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     00:00:00.625: GetProcAddress(0x0000000078D40000
</span><br>
<span class="quotelev1">&gt;     [c:\windows\system32\KERNEL32.DLL], &quot;K32QueryWorkingSetEx&quot;) called
</span><br>
<span class="quotelev1">&gt;     from &quot; XXX\bin\LIBHWLOC-5.DLL&quot; at address 0x0000000069E94145 and
</span><br>
<span class="quotelev1">&gt;     returned NULL by thread 1. Error: The specified procedure could
</span><br>
<span class="quotelev1">&gt;     not be found (127).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     00:00:00.625: LoadLibraryA(&quot;psapi.dll&quot;) called from &quot;
</span><br>
<span class="quotelev1">&gt;     XXX\bin\LIBHWLOC-5.DLL&quot; at address 0x0000000069E94189 by thread 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     00:00:00.625: LoadLibraryA(&quot;psapi.dll&quot;) returned
</span><br>
<span class="quotelev1">&gt;     0x000007FF7E1B0000 by thread 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     00:00:00.625: GetProcAddress(0x000007FF7E1B0000
</span><br>
<span class="quotelev1">&gt;     [c:\windows\system32\PSAPI.DLL], &quot;QueryWorkingSetEx&quot;) called from
</span><br>
<span class="quotelev1">&gt;     &quot; XXX\bin\LIBHWLOC-5.DLL&quot; at address 0x0000000069E9419E and
</span><br>
<span class="quotelev1">&gt;     returned 0x000007FF7E1B2E60 by thread 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     00:00:00.625: First chance exception 0xC0000094 (Integer Divide by
</span><br>
<span class="quotelev1">&gt;     Zero) occurred in &quot; XXX\bin\XXX.EXE&quot; at address 0x0000000141CBF18D
</span><br>
<span class="quotelev1">&gt;     by thread 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     00:00:00.640: Second chance exception 0xC0000094 (Integer Divide
</span><br>
<span class="quotelev1">&gt;     by Zero) occurred in &quot; XXX\bin\XXX.EXE&quot; at address
</span><br>
<span class="quotelev1">&gt;     0x0000000141CBF18D by thread 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     00:00:00.640: Exited &quot; XXX\bin\XXX.EXE&quot; (process 0x404) with code
</span><br>
<span class="quotelev1">&gt;     128 (0x80) by thread 1.
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
<span class="quotelev1">&gt;     *From:*hwloc-users [mailto:hwloc-users-bounces_at_[hidden]] *On
</span><br>
<span class="quotelev1">&gt;     Behalf Of *Brice Goglin
</span><br>
<span class="quotelev1">&gt;     *Sent:* lundi 6 janvier 2014 21:10
</span><br>
<span class="quotelev1">&gt;     *To:* Hardware locality user list
</span><br>
<span class="quotelev1">&gt;     *Subject:* Re: [hwloc-users] [windows] build from source using
</span><br>
<span class="quotelev1">&gt;     visual studio
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I've been working on adding msvc/cmake support last year (pushed
</span><br>
<span class="quotelev1">&gt;     some msvc-related fixes that are at least in v1.7 and later) but I
</span><br>
<span class="quotelev1">&gt;     stopped at some point because there was not much interest for it,
</span><br>
<span class="quotelev1">&gt;     and because it's not easy to do some automatic testing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I am not sure what you mean with windows 6.x and x64, but last
</span><br>
<span class="quotelev1">&gt;     time I checked things seemed to work fine on Windows 7 64bits at
</span><br>
<span class="quotelev1">&gt;     least. What symbols are we using that are not not available
</span><br>
<span class="quotelev1">&gt;     anymore? When did they disappear?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Le 06/01/2014 20:59, Eloi Gaudry a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I was wondering if you could add Visual Studio support to
</span><br>
<span class="quotelev1">&gt;         build hwloc from source.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Some open source projects (libpng for instance) for instance
</span><br>
<span class="quotelev1">&gt;         distribute a &quot;contrib&quot; folder in the sources where every
</span><br>
<span class="quotelev1">&gt;         exotic platforms get their makefiles-like available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I begun to write vcxproj (for Visual Studio 2010 and 2012) a
</span><br>
<span class="quotelev1">&gt;         file ago, but I failed at creating the right autogenerated
</span><br>
<span class="quotelev1">&gt;         file used for configure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I'm very much interested in building hwloc from source to tune
</span><br>
<span class="quotelev1">&gt;         what hwloc relies on to work. For instance, version-1.7.2 has
</span><br>
<span class="quotelev1">&gt;         a strong dependency on some symbols available on Windows 6.x
</span><br>
<span class="quotelev1">&gt;         only. This means that Windows x64 is not supported.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Eloi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         hwloc-users_at_[hidden] &lt;mailto:hwloc-users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0943/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0944.php">Jeff Squyres (jsquyres): "[hwloc-users] hwloc problem on SGI machine"</a>
<li><strong>Previous message:</strong> <a href="0942.php">Eloi Gaudry: "Re: [hwloc-users] [windows] build from source using visual studio"</a>
<li><strong>In reply to:</strong> <a href="0942.php">Eloi Gaudry: "Re: [hwloc-users] [windows] build from source using visual studio"</a>
<!-- nextthread="start" -->
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
