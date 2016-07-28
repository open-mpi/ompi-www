<?
$subject_val = "Re: [hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 20 19:58:16 2014" -->
<!-- isoreceived="20141121005816" -->
<!-- sent="Thu, 20 Nov 2014 16:57:55 -0800" -->
<!-- isosent="20141121005755" -->
<!-- name="Thomas Van Doren" -->
<!-- email="thomas.vandoren_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc - &amp;quot;symbol already defined&amp;quot; error building with optimizations (-O3) on 32bit ubuntu" -->
<!-- id="CAM=OmMu4VcPETy5F4TNUYFd47yp=66fxV7hTF-zwkyOOEmV1fQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="546D8D41.5070403_at_inria.fr" -->
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
<strong>From:</strong> Thomas Van Doren (<em>thomas.vandoren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-20 19:57:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1120.php">Brice Goglin: "Re: [hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu"</a>
<li><strong>Previous message:</strong> <a href="1118.php">Brice Goglin: "Re: [hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu"</a>
<li><strong>In reply to:</strong> <a href="1118.php">Brice Goglin: "Re: [hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1120.php">Brice Goglin: "Re: [hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu"</a>
<li><strong>Reply:</strong> <a href="1120.php">Brice Goglin: "Re: [hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu"</a>
<li><strong>Reply:</strong> <a href="1124.php">Brice Goglin: "Re: [hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice
<br>
<p>Thank you for the quick response! That patch fixes the build issue and
<br>
hwloc works as expected (make check has 1 failure on 32bit, but that also
<br>
happens on master so I didn't worry about it).
<br>
<p>Will this fix be in the next hwloc release? If so, do you know
<br>
(approximately) when the next release will happen?
<br>
<p>Thank you!
<br>
<p>Thomas Van Doren
<br>
thomas.vandoren_at_[hidden]
<br>
<p><p>On Wed, Nov 19, 2014 at 10:42 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt;  Hello,
</span><br>
<span class="quotelev1">&gt; Thanks, I can reproduce the problem on Debian with -O3 -m32.
</span><br>
<span class="quotelev1">&gt; The issue is that -O3 makes gcc inline more. We have function A call B
</span><br>
<span class="quotelev1">&gt; multiple times, and B calls C which contains asm with a label. So in the
</span><br>
<span class="quotelev1">&gt; end A contains the asm label from C multiple times.
</span><br>
<span class="quotelev1">&gt; Google says we should use local labels to fix the confusion between
</span><br>
<span class="quotelev1">&gt; duplicates.
</span><br>
<span class="quotelev1">&gt; This patch should help.
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- a/include/private/cpuid-x86.h
</span><br>
<span class="quotelev1">&gt; +++ b/include/private/cpuid-x86.h
</span><br>
<span class="quotelev1">&gt; @@ -32,14 +32,14 @@ static __hwloc_inline int hwloc_have_x86_cpuid(void)
</span><br>
<span class="quotelev1">&gt;        &quot;pushfl   \n\t&quot;                                           \
</span><br>
<span class="quotelev1">&gt;        &quot;pop %1   \n\t&quot;                                           \
</span><br>
<span class="quotelev1">&gt;        &quot;cmp %1,%2\n\t&quot;   /* Compare with expected value */       \
</span><br>
<span class="quotelev1">&gt; -      &quot;jnz Lhwloc1\n\t&quot;   /* Unexpected, failure */               \
</span><br>
<span class="quotelev1">&gt; +      &quot;jnz 0f\n\t&quot;   /* Unexpected, failure */               \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        TRY_TOGGLE        /* Try to set/clear */
</span><br>
<span class="quotelev1">&gt;        TRY_TOGGLE        /* Try to clear/set */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        &quot;mov $1,%0\n\t&quot;   /* Passed the test! */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -      &quot;Lhwloc1: \n\t&quot;
</span><br>
<span class="quotelev1">&gt; +      &quot;0: \n\t&quot;
</span><br>
<span class="quotelev1">&gt;        &quot;popfl    \n\t&quot;   /* Restore flags */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        : &quot;=r&quot; (ret), &quot;=&amp;r&quot; (tmp), &quot;=&amp;r&quot; (tmp2));
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
<span class="quotelev1">&gt; Le 20/11/2014 03:04, Thomas Van Doren a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I am getting the following error when building hwloc on 32bit ubuntu
</span><br>
<span class="quotelev1">&gt; 14.10 (utopic) with optimizations (CFLAGS='-O3'):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ... snip ...
</span><br>
<span class="quotelev1">&gt;    CC       topology-x86.lo
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
<span class="quotelev1">&gt;  I used these steps to verify that the build works without optimizations
</span><br>
<span class="quotelev1">&gt; and reproduce the error above with optimizations:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  git clone <a href="https://github.com/open-mpi/hwloc">https://github.com/open-mpi/hwloc</a>
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
<span class="quotelev1">&gt;  # This fails with the error above...
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
<span class="quotelev1">&gt;  Is this expected to work? Do you have recommendations for fixing? I
</span><br>
<span class="quotelev1">&gt; first saw this on hwloc 1.9.1 and verified it also happens on 1.10.0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I attached the configure and make V=1 output, as well as the config.log
</span><br>
<span class="quotelev1">&gt; for the build against master (sha: 77fbe8f) that fails.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I am using the utopic32 vagrant box from Ubuntu:
</span><br>
<span class="quotelev1">&gt; <a href="http://cloud-images.ubuntu.com/vagrant/utopic/current/">http://cloud-images.ubuntu.com/vagrant/utopic/current/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Please let me know if you need any other information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thomas Van Doren
</span><br>
<span class="quotelev1">&gt; thomas.vandoren_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing listhwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/11/1117.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/11/1117.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/11/1119.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/11/1119.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1119/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1120.php">Brice Goglin: "Re: [hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu"</a>
<li><strong>Previous message:</strong> <a href="1118.php">Brice Goglin: "Re: [hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu"</a>
<li><strong>In reply to:</strong> <a href="1118.php">Brice Goglin: "Re: [hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1120.php">Brice Goglin: "Re: [hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu"</a>
<li><strong>Reply:</strong> <a href="1120.php">Brice Goglin: "Re: [hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu"</a>
<li><strong>Reply:</strong> <a href="1124.php">Brice Goglin: "Re: [hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu"</a>
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
