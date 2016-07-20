<?
$subject_val = "Re: [hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 20 01:42:12 2014" -->
<!-- isoreceived="20141120064212" -->
<!-- sent="Thu, 20 Nov 2014 07:42:09 +0100" -->
<!-- isosent="20141120064209" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc - &amp;quot;symbol already defined&amp;quot; error building with optimizations (-O3) on 32bit ubuntu" -->
<!-- id="546D8D41.5070403_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAM=OmMtMDouHAkV7NWg_ySXgqG2stnTU-2d10do28Y524Wc1iA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-20 01:42:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1119.php">Thomas Van Doren: "Re: [hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu"</a>
<li><strong>Previous message:</strong> <a href="1117.php">Thomas Van Doren: "[hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu"</a>
<li><strong>In reply to:</strong> <a href="1117.php">Thomas Van Doren: "[hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1119.php">Thomas Van Doren: "Re: [hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu"</a>
<li><strong>Reply:</strong> <a href="1119.php">Thomas Van Doren: "Re: [hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
Thanks, I can reproduce the problem on Debian with -O3 -m32.
<br>
The issue is that -O3 makes gcc inline more. We have function A call B
<br>
multiple times, and B calls C which contains asm with a label. So in the
<br>
end A contains the asm label from C multiple times.
<br>
Google says we should use local labels to fix the confusion between
<br>
duplicates.
<br>
This patch should help.
<br>
Brice
<br>
<p><p>--- a/include/private/cpuid-x86.h
<br>
+++ b/include/private/cpuid-x86.h
<br>
@@ -32,14 +32,14 @@ static __hwloc_inline int hwloc_have_x86_cpuid(void)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;pushfl   \n\t&quot;                                           \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;pop %1   \n\t&quot;                                           \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;cmp %1,%2\n\t&quot;   /* Compare with expected value */       \
<br>
-      &quot;jnz Lhwloc1\n\t&quot;   /* Unexpected, failure */               \
<br>
+      &quot;jnz 0f\n\t&quot;   /* Unexpected, failure */               \
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TRY_TOGGLE        /* Try to set/clear */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TRY_TOGGLE        /* Try to clear/set */
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;mov $1,%0\n\t&quot;   /* Passed the test! */
<br>
&nbsp;
<br>
-      &quot;Lhwloc1: \n\t&quot;
<br>
+      &quot;0: \n\t&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;popfl    \n\t&quot;   /* Restore flags */
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &quot;=r&quot; (ret), &quot;=&amp;r&quot; (tmp), &quot;=&amp;r&quot; (tmp2));
<br>
<p><p><p><p>Le 20/11/2014 03:04, Thomas Van Doren a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am getting the following error when building hwloc on 32bit ubuntu
</span><br>
<span class="quotelev1">&gt; 14.10 (utopic) with optimizations (CFLAGS='-O3'):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ... snip ...
</span><br>
<span class="quotelev1">&gt;   CC       topology-x86.lo
</span><br>
<span class="quotelev1">&gt; /home/vagrant/src/hwloc/include/private/cpuid-x86.h: Assembler messages:
</span><br>
<span class="quotelev1">&gt; /home/vagrant/src/hwloc/include/private/cpuid-x86.h:40: Error: symbol
</span><br>
<span class="quotelev1">&gt; `Lhwloc1' is already defined
</span><br>
<span class="quotelev1">&gt; Makefile:878: recipe for target 'topology-x86.lo' failed
</span><br>
<span class="quotelev1">&gt; make[1]: *** [topology-x86.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory '/home/vagrant/src/hwloc/hwloc'
</span><br>
<span class="quotelev1">&gt; Makefile:615: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I used these steps to verify that the build works without
</span><br>
<span class="quotelev1">&gt; optimizations and reproduce the error above with optimizations:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; git clone <a href="https://github.com/open-mpi/hwloc">https://github.com/open-mpi/hwloc</a>
</span><br>
<span class="quotelev1">&gt; cd hwloc/
</span><br>
<span class="quotelev1">&gt; ./autogen.sh 
</span><br>
<span class="quotelev1">&gt; ./configure 
</span><br>
<span class="quotelev1">&gt; make
</span><br>
<span class="quotelev1">&gt; # This works, but no optimizations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # This fails with the error above...
</span><br>
<span class="quotelev1">&gt; git clean -dxf
</span><br>
<span class="quotelev1">&gt; ./autogen.sh 
</span><br>
<span class="quotelev1">&gt; ./configure CFLAGS='-O3' CXXFLAGS='-O3'
</span><br>
<span class="quotelev1">&gt; make
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this expected to work? Do you have recommendations for fixing? I
</span><br>
<span class="quotelev1">&gt; first saw this on hwloc 1.9.1 and verified it also happens on 1.10.0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I attached the configure and make V=1 output, as well as the
</span><br>
<span class="quotelev1">&gt; config.log for the build against master (sha: 77fbe8f) that fails.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using the utopic32 vagrant box from Ubuntu:
</span><br>
<span class="quotelev1">&gt; <a href="http://cloud-images.ubuntu.com/vagrant/utopic/current/">http://cloud-images.ubuntu.com/vagrant/utopic/current/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please let me know if you need any other information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thomas Van Doren
</span><br>
<span class="quotelev1">&gt; thomas.vandoren_at_[hidden] &lt;mailto:thomas.vandoren_at_[hidden]&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/11/1117.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/11/1117.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1118/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1119.php">Thomas Van Doren: "Re: [hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu"</a>
<li><strong>Previous message:</strong> <a href="1117.php">Thomas Van Doren: "[hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu"</a>
<li><strong>In reply to:</strong> <a href="1117.php">Thomas Van Doren: "[hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1119.php">Thomas Van Doren: "Re: [hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu"</a>
<li><strong>Reply:</strong> <a href="1119.php">Thomas Van Doren: "Re: [hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu"</a>
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
