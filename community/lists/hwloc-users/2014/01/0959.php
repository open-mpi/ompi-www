<?
$subject_val = "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 28 03:46:31 2014" -->
<!-- isoreceived="20140128084631" -->
<!-- sent="Tue, 28 Jan 2014 00:46:27 -0800" -->
<!-- isosent="20140128084627" -->
<!-- name="Robin Scher" -->
<!-- email="robin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64" -->
<!-- id="AF1F7E95-D336-44BF-8580-BE10D8EC033E_at_uberware.net" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="52E757D5.7000002_at_inria.fr" -->
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
<strong>From:</strong> Robin Scher (<em>robin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-28 03:46:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0960.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>Previous message:</strong> <a href="0958.php">Brice Goglin: "[hwloc-users] CPU info on ARM"</a>
<li><strong>In reply to:</strong> <a href="0957.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0960.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>Reply:</strong> <a href="0960.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, thanks for responding. 
<br>
<p>The CPUModel is definitely available on this machine. A 32 bit process on the same machine correctly finds the model name using code that calls the cpuid inline assembly to get it, and the machine itself is a VM running on a Mac, and I get the same model name from the code on Mac and on a Linux VM running on the same machine as well. It seems to be an issue with the Windows port of hwloc, and possibly only with the 64 bit version (I haven&#146;t tried the 32 bit version yet). 
<br>
<p>I am using the prebuilt binary on Windows. I haven&#146;t tried (and I&#146;m not sure I want to try) building hwloc from source on Windows x64 using MSVC, but I have found out so far today that Microsoft makes available a compiler intrinsic to get access to cpuid as a C function, and that&#146;s supposed to allow you to do the same kind of cpuid call work done previously as inline assembly. Perhaps someone out there is more familiar with this specific functionality in hwloc and can fix this for the 64 bit Windows build? I can take a stab at it, but like I said, the biggest hwloc development I&#146;ve done is setting a flag in the configure script when I build on Unix.
<br>
<p>As a last question, where is the &#147;CPUModel&#148; documented about where it would appear? I was looking for that but couldn&#146;t find it.
<br>
<p>Thank you for any further advice.
<br>
-robin
<br>
<p>Robin Scher
<br>
robin_at_[hidden]
<br>
+1 (213) 448-0443
<br>
<p><p><p>On Jan 27, 2014, at 11:10 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The CPUModel attribute should be only in Socket or machine/root objects. At least, that's what I documented and what I seem to see in the code. Did you actually see any other place?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So it may just mean that the CPUModel is not available on your machine? Or maybe the code below is buggy somehow? Does lstopo -v on Windows show a CPUModel attribute? It does in a 32bits binary running on my Win7 64bits, but doesn't seem to find anything when running the 64bits binary. I don't remember well if there was a specific Windows 64bits issue in the cpuid code in the x86 backend.
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
<span class="quotelev1">&gt; Le 28/01/2014 01:59, Robin Scher a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Hi again.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I&#146;m trying to use hwloc 1.8 on Windows, Linux and Mac to get the CPU model string (e.g., &#147;Intel(R) Core(TM) i7-3520M CPU @ 2.90GHz&#148;). Since hwloc on different platforms seem to stash this in different objects, I&#146;m using code like this:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; String name;
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_obj_type_t objs[] = { 
</span><br>
<span class="quotelev2">&gt;&gt;     HWLOC_OBJ_MACHINE, 
</span><br>
<span class="quotelev2">&gt;&gt;     HWLOC_OBJ_SOCKET, 
</span><br>
<span class="quotelev2">&gt;&gt;     HWLOC_OBJ_CORE, 
</span><br>
<span class="quotelev2">&gt;&gt;     HWLOC_OBJ_PU, };
</span><br>
<span class="quotelev2">&gt;&gt; for( size_t index = 0; index &lt; (sizeof( objs ) / sizeof( hwloc_obj_type_t )) &amp;&amp; name.Empty(); ++index )
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;     hwloc_obj_t obj = hwloc_get_obj_by_type( topology, objs[ index ], 0 );
</span><br>
<span class="quotelev2">&gt;&gt;     if( !obj ) continue;
</span><br>
<span class="quotelev2">&gt;&gt;     const char *str = hwloc_obj_get_info_by_name( obj, &quot;CPUModel&quot; );
</span><br>
<span class="quotelev2">&gt;&gt;     if( str ) name = String( str ).Trim();
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mac, it works (found string at HWLOC_OBJ_MACHINE), and on Linux it works (found string at HWLOC_OBJ_SOCKET), but on Windows x64, none of these find the string. They all return a NULL pointer.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Am I missing something? I tried a few other of the object types, but didn&#146;t find it with them either (I actually tried looping through all integer values between 0 and HWLOC_OBJ_TYPE_MAX and it didn&#146;t appear in any of them).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for any help you can provide.
</span><br>
<span class="quotelev2">&gt;&gt; -robin
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Robin Scher
</span><br>
<span class="quotelev2">&gt;&gt; robin_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; +1 (213) 448-0443
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
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
<p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0959/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0959/signature.asc">Message signed with OpenPGP using GPGMail</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0960.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>Previous message:</strong> <a href="0958.php">Brice Goglin: "[hwloc-users] CPU info on ARM"</a>
<li><strong>In reply to:</strong> <a href="0957.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0960.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>Reply:</strong> <a href="0960.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
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
