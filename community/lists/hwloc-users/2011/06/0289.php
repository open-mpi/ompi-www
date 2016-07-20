<?
$subject_val = "Re: [hwloc-users] HWLOC problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  7 13:04:09 2011" -->
<!-- isoreceived="20110607170409" -->
<!-- sent="Tue, 7 Jun 2011 13:04:01 -0400" -->
<!-- isosent="20110607170401" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] HWLOC problem" -->
<!-- id="7AFE8544-0C89-42EF-B0EF-6306B5D89234_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTik9bfb7hjkkoGfCw_YYx=mTGxzSCQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] HWLOC problem<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-07 13:04:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0290.php">Josh Hursey: "[hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/04/0288.php">Samuel Thibault: "Re: [hwloc-users] Fwd: [OMPI devel] problem with absent L3 on AMD CPU"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(brought over from the OMPI user's list)
<br>
<p>This likely means you installed hwloc to a non-standard location (meaning that your system is not looking for shared libraries in $hwloc_prefix/lib by default).  
<br>
<p>If you prepend/append your LD_LIBRARY_PATH environment variable (or set it, if it's not already set) to include $hwloc_prefix/lib, it should find hwloc's shared library and lstopo -- and all of its friends -- should work fine.
<br>
<p><p>On Jun 7, 2011, at 12:51 PM, vaibhav dutt wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have installed HWLOC 1.2 on my cluster , each node has two Intel Xeon E5450 quad cores.
</span><br>
<span class="quotelev1">&gt; When I try to execute the command &quot;lstopo&quot; to determine the hardware topology of my system,
</span><br>
<span class="quotelev1">&gt; I get an error like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./lstopo: error while loading shared libraries: libhwloc.so.3: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can anyone please help me as to what is the reason for this error and where can I find this shared
</span><br>
<span class="quotelev1">&gt; library.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
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
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0290.php">Josh Hursey: "[hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/04/0288.php">Samuel Thibault: "Re: [hwloc-users] Fwd: [OMPI devel] problem with absent L3 on AMD CPU"</a>
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
