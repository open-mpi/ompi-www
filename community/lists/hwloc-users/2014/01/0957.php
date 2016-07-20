<?
$subject_val = "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 28 02:10:20 2014" -->
<!-- isoreceived="20140128071020" -->
<!-- sent="Tue, 28 Jan 2014 08:10:13 +0100" -->
<!-- isosent="20140128071013" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64" -->
<!-- id="52E757D5.7000002_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AFFF0A93-036D-4B43-9C19-83EF7CFB8B24_at_uberware.net" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-28 02:10:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0958.php">Brice Goglin: "[hwloc-users] CPU info on ARM"</a>
<li><strong>Previous message:</strong> <a href="0956.php">Robin Scher: "[hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>In reply to:</strong> <a href="0956.php">Robin Scher: "[hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0959.php">Robin Scher: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>Reply:</strong> <a href="0959.php">Robin Scher: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>The CPUModel attribute should be only in Socket or machine/root objects.
<br>
At least, that's what I documented and what I seem to see in the code.
<br>
Did you actually see any other place?
<br>
<p>So it may just mean that the CPUModel is not available on your machine?
<br>
Or maybe the code below is buggy somehow? Does lstopo -v on Windows show
<br>
a CPUModel attribute? It does in a 32bits binary running on my Win7
<br>
64bits, but doesn't seem to find anything when running the 64bits
<br>
binary. I don't remember well if there was a specific Windows 64bits
<br>
issue in the cpuid code in the x86 backend.
<br>
<p>Brice
<br>
<p><p><p>Le 28/01/2014 01:59, Robin Scher a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to use hwloc 1.8 on Windows, Linux and Mac to get the CPU model string (e.g., &quot;Intel(R) Core(TM) i7-3520M CPU @ 2.90GHz&quot;). Since hwloc on different platforms seem to stash this in different objects, I'm using code like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; String name;
</span><br>
<span class="quotelev1">&gt; hwloc_obj_type_t objs[] = { 
</span><br>
<span class="quotelev1">&gt;     HWLOC_OBJ_MACHINE, 
</span><br>
<span class="quotelev1">&gt;     HWLOC_OBJ_SOCKET, 
</span><br>
<span class="quotelev1">&gt;     HWLOC_OBJ_CORE, 
</span><br>
<span class="quotelev1">&gt;     HWLOC_OBJ_PU, };
</span><br>
<span class="quotelev1">&gt; for( size_t index = 0; index &lt; (sizeof( objs ) / sizeof( hwloc_obj_type_t )) &amp;&amp; name.Empty(); ++index )
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     hwloc_obj_t obj = hwloc_get_obj_by_type( topology, objs[ index ], 0 );
</span><br>
<span class="quotelev1">&gt;     if( !obj ) continue;
</span><br>
<span class="quotelev1">&gt;     const char *str = hwloc_obj_get_info_by_name( obj, &quot;CPUModel&quot; );
</span><br>
<span class="quotelev1">&gt;     if( str ) name = String( str ).Trim();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mac, it works (found string at HWLOC_OBJ_MACHINE), and on Linux it works (found string at HWLOC_OBJ_SOCKET), but on Windows x64, none of these find the string. They all return a NULL pointer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am I missing something? I tried a few other of the object types, but didn't find it with them either (I actually tried looping through all integer values between 0 and HWLOC_OBJ_TYPE_MAX and it didn't appear in any of them).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for any help you can provide.
</span><br>
<span class="quotelev1">&gt; -robin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Robin Scher
</span><br>
<span class="quotelev1">&gt; robin_at_[hidden]
</span><br>
<span class="quotelev1">&gt; +1 (213) 448-0443
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0957/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0958.php">Brice Goglin: "[hwloc-users] CPU info on ARM"</a>
<li><strong>Previous message:</strong> <a href="0956.php">Robin Scher: "[hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>In reply to:</strong> <a href="0956.php">Robin Scher: "[hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0959.php">Robin Scher: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>Reply:</strong> <a href="0959.php">Robin Scher: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
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
