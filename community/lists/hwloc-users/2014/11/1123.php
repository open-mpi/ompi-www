<?
$subject_val = "Re: [hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 21 17:37:40 2014" -->
<!-- isoreceived="20141121223740" -->
<!-- sent="Fri, 21 Nov 2014 14:37:19 -0800" -->
<!-- isosent="20141121223719" -->
<!-- name="Thomas Van Doren" -->
<!-- email="thomas.vandoren_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc - &amp;quot;symbol already defined&amp;quot; error building with optimizations (-O3) on 32bit ubuntu" -->
<!-- id="CAM=OmMtk=5A6HcV+=_f2jmR=4d-fDQihN1zLTD_6-t7+uhMBuQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="546EE6B4.9030900_at_inria.fr" -->
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
<strong>Date:</strong> 2014-11-21 17:37:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1124.php">Brice Goglin: "Re: [hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu"</a>
<li><strong>Previous message:</strong> <a href="1122.php">Brice Goglin: "Re: [hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu"</a>
<li><strong>In reply to:</strong> <a href="1122.php">Brice Goglin: "Re: [hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1124.php">Brice Goglin: "Re: [hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Attached is the tarball generated with
<br>
&quot;./tests/hwloc/linux/hwloc-gather-topology utopic32-topo&quot;. Thanks!
<br>
<p>Thomas Van Doren
<br>
thomas.vandoren_at_[hidden]
<br>
<p>On Thu, Nov 20, 2014 at 11:16 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt;  Can you run &quot;hwloc-gather-topology foo&quot; and send the resulting
</span><br>
<span class="quotelev1">&gt; foo.tar.bz2 ?
</span><br>
<span class="quotelev1">&gt; If it's too big, send it to me in a private mail.
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 21/11/2014 07:19, Thomas Van Doren a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks for the release info! Here is the make check output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ... snip ...
</span><br>
<span class="quotelev1">&gt;  make  check-TESTS
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory '/home/vagrant/src/hwloc/utils/lstopo'
</span><br>
<span class="quotelev1">&gt; make[4]: Entering directory '/home/vagrant/src/hwloc/utils/lstopo'
</span><br>
<span class="quotelev1">&gt; FAIL: test-hwloc-ls.sh
</span><br>
<span class="quotelev1">&gt; make[5]: Entering directory '/home/vagrant/src/hwloc/utils/lstopo'
</span><br>
<span class="quotelev1">&gt; make[5]: Nothing to be done for 'all'.
</span><br>
<span class="quotelev1">&gt; make[5]: Leaving directory '/home/vagrant/src/hwloc/utils/lstopo'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ============================================================================
</span><br>
<span class="quotelev1">&gt; Testsuite summary for hwloc gitclone
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ============================================================================
</span><br>
<span class="quotelev1">&gt; # TOTAL: 1
</span><br>
<span class="quotelev1">&gt; # PASS:  0
</span><br>
<span class="quotelev1">&gt; # SKIP:  0
</span><br>
<span class="quotelev1">&gt; # XFAIL: 0
</span><br>
<span class="quotelev1">&gt; # FAIL:  1
</span><br>
<span class="quotelev1">&gt; # XPASS: 0
</span><br>
<span class="quotelev1">&gt; # ERROR: 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ============================================================================
</span><br>
<span class="quotelev1">&gt; See utils/lstopo/test-suite.log
</span><br>
<span class="quotelev1">&gt; Please report to <a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ============================================================================
</span><br>
<span class="quotelev1">&gt; Makefile:1294: recipe for target 'test-suite.log' failed
</span><br>
<span class="quotelev1">&gt; make[4]: *** [test-suite.log] Error 1
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory '/home/vagrant/src/hwloc/utils/lstopo'
</span><br>
<span class="quotelev1">&gt; Makefile:1400: recipe for target 'check-TESTS' failed
</span><br>
<span class="quotelev1">&gt; make[3]: *** [check-TESTS] Error 2
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory '/home/vagrant/src/hwloc/utils/lstopo'
</span><br>
<span class="quotelev1">&gt; Makefile:1473: recipe for target 'check-am' failed
</span><br>
<span class="quotelev1">&gt; make[2]: *** [check-am] Error 2
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory '/home/vagrant/src/hwloc/utils/lstopo'
</span><br>
<span class="quotelev1">&gt; Makefile:447: recipe for target 'check-recursive' failed
</span><br>
<span class="quotelev1">&gt; make[1]: *** [check-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory '/home/vagrant/src/hwloc/utils'
</span><br>
<span class="quotelev1">&gt; Makefile:615: recipe for target 'check-recursive' failed
</span><br>
<span class="quotelev1">&gt; make: *** [check-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I attached the output of all of the steps and the logs. Let me know if
</span><br>
<span class="quotelev1">&gt; you need something else.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Thomas Van Doren
</span><br>
<span class="quotelev1">&gt; thomas.vandoren_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Nov 20, 2014 at 10:01 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  This fix will be released in 1.10.1 in one week or two. 1.10.1 was
</span><br>
<span class="quotelev2">&gt;&gt; supposed to happen one month ago but I am waiting for some other patches.
</span><br>
<span class="quotelev2">&gt;&gt; If those are still delayed, I'll release 1.10.1 without them.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you tell me which test fails during make check on 32bit? My only
</span><br>
<span class="quotelev2">&gt;&gt; failure here is in linux-libnuma but it's a i386/amd64 multiarch problem
</span><br>
<span class="quotelev2">&gt;&gt; that's not worth fixing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 21/11/2014 01:57, Thomas Van Doren a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Thank you for the quick response! That patch fixes the build issue and
</span><br>
<span class="quotelev2">&gt;&gt; hwloc works as expected (make check has 1 failure on 32bit, but that also
</span><br>
<span class="quotelev2">&gt;&gt; happens on master so I didn't worry about it).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Will this fix be in the next hwloc release? If so, do you know
</span><br>
<span class="quotelev2">&gt;&gt; (approximately) when the next release will happen?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Thank you!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Thomas Van Doren
</span><br>
<span class="quotelev2">&gt;&gt; thomas.vandoren_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Nov 19, 2014 at 10:42 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks, I can reproduce the problem on Debian with -O3 -m32.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The issue is that -O3 makes gcc inline more. We have function A call B
</span><br>
<span class="quotelev3">&gt;&gt;&gt; multiple times, and B calls C which contains asm with a label. So in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; end A contains the asm label from C multiple times.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Google says we should use local labels to fix the confusion between
</span><br>
<span class="quotelev3">&gt;&gt;&gt; duplicates.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This patch should help.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- a/include/private/cpuid-x86.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ b/include/private/cpuid-x86.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -32,14 +32,14 @@ static __hwloc_inline int hwloc_have_x86_cpuid(void)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        &quot;pushfl   \n\t&quot;                                           \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        &quot;pop %1   \n\t&quot;                                           \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        &quot;cmp %1,%2\n\t&quot;   /* Compare with expected value */       \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -      &quot;jnz Lhwloc1\n\t&quot;   /* Unexpected, failure */               \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +      &quot;jnz 0f\n\t&quot;   /* Unexpected, failure */               \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        TRY_TOGGLE        /* Try to set/clear */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        TRY_TOGGLE        /* Try to clear/set */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        &quot;mov $1,%0\n\t&quot;   /* Passed the test! */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -      &quot;Lhwloc1: \n\t&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +      &quot;0: \n\t&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        &quot;popfl    \n\t&quot;   /* Restore flags */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        : &quot;=r&quot; (ret), &quot;=&amp;r&quot; (tmp), &quot;=&amp;r&quot; (tmp2));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 20/11/2014 03:04, Thomas Van Doren a &#195;&#169;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Hi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I am getting the following error when building hwloc on 32bit ubuntu
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 14.10 (utopic) with optimizations (CFLAGS='-O3'):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ... snip ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    CC       topology-x86.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/vagrant/src/hwloc/include/private/cpuid-x86.h: Assembler messages:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/vagrant/src/hwloc/include/private/cpuid-x86.h:40: Error: symbol
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `Lhwloc1' is already defined
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Makefile:878: recipe for target 'topology-x86.lo' failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: *** [topology-x86.lo] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Leaving directory '/home/vagrant/src/hwloc/hwloc'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Makefile:615: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I used these steps to verify that the build works without
</span><br>
<span class="quotelev3">&gt;&gt;&gt; optimizations and reproduce the error above with optimizations:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  git clone <a href="https://github.com/open-mpi/hwloc">https://github.com/open-mpi/hwloc</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cd hwloc/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./autogen.sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # This works, but no optimizations.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  # This fails with the error above...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; git clean -dxf
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./autogen.sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure CFLAGS='-O3' CXXFLAGS='-O3'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Is this expected to work? Do you have recommendations for fixing? I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; first saw this on hwloc 1.9.1 and verified it also happens on 1.10.0.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I attached the configure and make V=1 output, as well as the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; config.log for the build against master (sha: 77fbe8f) that fails.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I am using the utopic32 vagrant box from Ubuntu:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://cloud-images.ubuntu.com/vagrant/utopic/current/">http://cloud-images.ubuntu.com/vagrant/utopic/current/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Please let me know if you need any other information.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Thomas Van Doren
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thomas.vandoren_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-users mailing listhwloc-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/11/1117.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/11/1117.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/11/1119.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/11/1119.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users mailing listhwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/11/1119.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/11/1119.php</a>
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/11/1120.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/11/1120.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/11/1122.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/11/1122.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/11/1123.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/11/1123.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1123/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1123/utopic32-topo.tar.bz2">utopic32-topo.tar.bz2</a>
</ul>
<!-- attachment="utopic32-topo.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1124.php">Brice Goglin: "Re: [hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu"</a>
<li><strong>Previous message:</strong> <a href="1122.php">Brice Goglin: "Re: [hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu"</a>
<li><strong>In reply to:</strong> <a href="1122.php">Brice Goglin: "Re: [hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1124.php">Brice Goglin: "Re: [hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu"</a>
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
