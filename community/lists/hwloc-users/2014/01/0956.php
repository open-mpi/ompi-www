<?
$subject_val = "[hwloc-users] Having trouble getting CPU Model string on Windows 7 x64";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 27 19:59:27 2014" -->
<!-- isoreceived="20140128005927" -->
<!-- sent="Mon, 27 Jan 2014 16:59:23 -0800" -->
<!-- isosent="20140128005923" -->
<!-- name="Robin Scher" -->
<!-- email="robin_at_[hidden]" -->
<!-- subject="[hwloc-users] Having trouble getting CPU Model string on Windows 7 x64" -->
<!-- id="AFFF0A93-036D-4B43-9C19-83EF7CFB8B24_at_uberware.net" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64<br>
<strong>From:</strong> Robin Scher (<em>robin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-27 19:59:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0957.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>Previous message:</strong> <a href="0955.php">Brice Goglin: "Re: [hwloc-users] How to build hwloc static to link into a shared lib on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0957.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>Reply:</strong> <a href="0957.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>Maybe reply:</strong> <a href="0972.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi again.
<br>
<p>I&#146;m trying to use hwloc 1.8 on Windows, Linux and Mac to get the CPU model string (e.g., &#147;Intel(R) Core(TM) i7-3520M CPU @ 2.90GHz&#148;). Since hwloc on different platforms seem to stash this in different objects, I&#146;m using code like this:
<br>
<p>String name;
<br>
hwloc_obj_type_t objs[] = { 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_OBJ_MACHINE, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_OBJ_SOCKET, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_OBJ_CORE, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_OBJ_PU, };
<br>
for( size_t index = 0; index &lt; (sizeof( objs ) / sizeof( hwloc_obj_type_t )) &amp;&amp; name.Empty(); ++index )
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_obj_t obj = hwloc_get_obj_by_type( topology, objs[ index ], 0 );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if( !obj ) continue;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;const char *str = hwloc_obj_get_info_by_name( obj, &quot;CPUModel&quot; );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if( str ) name = String( str ).Trim();
<br>
}
<br>
<p>On Mac, it works (found string at HWLOC_OBJ_MACHINE), and on Linux it works (found string at HWLOC_OBJ_SOCKET), but on Windows x64, none of these find the string. They all return a NULL pointer.
<br>
<p>Am I missing something? I tried a few other of the object types, but didn&#146;t find it with them either (I actually tried looping through all integer values between 0 and HWLOC_OBJ_TYPE_MAX and it didn&#146;t appear in any of them).
<br>
<p>Thank you for any help you can provide.
<br>
-robin
<br>
<p>Robin Scher
<br>
robin_at_[hidden]
<br>
+1 (213) 448-0443
<br>
<p><p><p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0956/signature.asc">Message signed with OpenPGP using GPGMail</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0957.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>Previous message:</strong> <a href="0955.php">Brice Goglin: "Re: [hwloc-users] How to build hwloc static to link into a shared lib on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0957.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>Reply:</strong> <a href="0957.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>Maybe reply:</strong> <a href="0972.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
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
