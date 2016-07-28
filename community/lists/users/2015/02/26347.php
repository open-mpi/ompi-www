<?
$subject_val = "Re: [OMPI users] error building openmpi-dev-1031-g008755a with Sun C	5.13";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 08:44:24 2015" -->
<!-- isoreceived="20150219134424" -->
<!-- sent="Thu, 19 Feb 2015 13:44:23 +0000" -->
<!-- isosent="20150219134423" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error building openmpi-dev-1031-g008755a with Sun C	5.13" -->
<!-- id="A79CD6B6-B931-4431-95D8-45CB01B65F07_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201502191303.t1JD3BOZ003198_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] error building openmpi-dev-1031-g008755a with Sun C	5.13<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-19 08:44:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26348.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-dev-1031-g008755a with Sun C	5.13"</a>
<li><strong>Previous message:</strong> <a href="26346.php">Siegmar Gross: "[OMPI users] error building openmpi-dev-1031-g008755a with Sun C 5.13"</a>
<li><strong>In reply to:</strong> <a href="26346.php">Siegmar Gross: "[OMPI users] error building openmpi-dev-1031-g008755a with Sun C 5.13"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Siegmar --
<br>
<p>This file (opal/mca/rcache/base/static-components.h) is generated during configure.
<br>
<p>I just downloaded the dev-1031 tarball from last night and ran configure on it, and the opal/mca/rcache/base/static-components.h file is there for me.
<br>
<p>Did something go wrong during your configure?
<br>
<p><p><p><span class="quotelev1">&gt; On Feb 19, 2015, at 8:03 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; today I tried to build openmpi-dev-1031-g008755a on my machines
</span><br>
<span class="quotelev1">&gt; (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1
</span><br>
<span class="quotelev1">&gt; x86_64) with gcc-4.9.2 and Sun C 5.13 and got errors on all three
</span><br>
<span class="quotelev1">&gt; platforms for both compilers. I used the following configure
</span><br>
<span class="quotelev1">&gt; command for all platforms.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../openmpi-dev-1031-g008755a/configure --prefix=/usr/local/openmpi-1.9.0_64_cc \
</span><br>
<span class="quotelev1">&gt;  --libdir=/usr/local/openmpi-1.9.0_64_cc/lib64 \
</span><br>
<span class="quotelev1">&gt;  --with-jdk-bindir=/usr/local/jdk1.8.0/bin \
</span><br>
<span class="quotelev1">&gt;  --with-jdk-headers=/usr/local/jdk1.8.0/include \
</span><br>
<span class="quotelev1">&gt;  JAVA_HOME=/usr/local/jdk1.8.0 \
</span><br>
<span class="quotelev1">&gt;  LDFLAGS=&quot;-m64 -mt&quot; \
</span><br>
<span class="quotelev1">&gt;  CC=&quot;cc&quot; CXX=&quot;CC&quot; FC=&quot;f95&quot; \
</span><br>
<span class="quotelev1">&gt;  CFLAGS=&quot;-m64 -mt&quot; CXXFLAGS=&quot;-m64 -library=stlport4&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;  CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev1">&gt;  CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;  --enable-mpi-cxx \
</span><br>
<span class="quotelev1">&gt;  --enable-cxx-exceptions \
</span><br>
<span class="quotelev1">&gt;  --enable-mpi-java \
</span><br>
<span class="quotelev1">&gt;  --enable-heterogeneous \
</span><br>
<span class="quotelev1">&gt;  --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev1">&gt;  --with-hwloc=internal \
</span><br>
<span class="quotelev1">&gt;  --without-verbs \
</span><br>
<span class="quotelev1">&gt;  --with-wrapper-cflags=&quot;-m64 -mt&quot; \
</span><br>
<span class="quotelev1">&gt;  --with-wrapper-cxxflags=&quot;-m64 -library=stlport4&quot; \
</span><br>
<span class="quotelev1">&gt;  --with-wrapper-fcflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;  --with-wrapper-ldflags=&quot;-mt&quot; \
</span><br>
<span class="quotelev1">&gt;  --enable-debug \
</span><br>
<span class="quotelev1">&gt;  |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_cc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I got the following error on my Solaris x86_64 machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;  CC       base/rcache_base_frame.lo
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-dev-1031-g008755a/opal/include/opal/sys/amd64/atomic.h&quot;, line 164: warning: parameter i
</span><br>
<span class="quotelev1">&gt; n inline asm statement unused: %3
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-dev-1031-g008755a/opal/include/opal/sys/amd64/atomic.h&quot;, line 210: warning: parameter i
</span><br>
<span class="quotelev1">&gt; n inline asm statement unused: %2
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-dev-1031-g008755a/opal/include/opal/sys/amd64/atomic.h&quot;, line 231: warning: parameter i
</span><br>
<span class="quotelev1">&gt; n inline asm statement unused: %2
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-dev-1031-g008755a/opal/include/opal/sys/amd64/atomic.h&quot;, line 252: warning: parameter i
</span><br>
<span class="quotelev1">&gt; n inline asm statement unused: %2
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-dev-1031-g008755a/opal/include/opal/sys/amd64/atomic.h&quot;, line 273: warning: parameter i
</span><br>
<span class="quotelev1">&gt; n inline asm statement unused: %2
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-dev-1031-g008755a/opal/mca/rcache/base/rcache_base_frame.c&quot;, line 37: cannot find inclu
</span><br>
<span class="quotelev1">&gt; de file: &quot;opal/mca/rcache/base/static-components.h&quot;
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-dev-1031-g008755a/opal/mca/rcache/base/rcache_base_frame.c&quot;, line 90: undefined symbol:
</span><br>
<span class="quotelev1">&gt; mca_rcache_base_static_components
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-dev-1031-g008755a/opal/mca/rcache/base/rcache_base_frame.c&quot;, line 90: warning: improper
</span><br>
<span class="quotelev1">&gt; pointer/integer combination: op &quot;=&quot;
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-dev-1031-g008755a/opal/mca/rcache/base/rcache_base_frame.c&quot;, line 90: non-constant init
</span><br>
<span class="quotelev1">&gt; ializer involving a cast
</span><br>
<span class="quotelev1">&gt; cc: acomp failed for ../../../../openmpi-dev-1031-g008755a/opal/mca/rcache/base/rcache_base_frame.c
</span><br>
<span class="quotelev1">&gt; make[2]: *** [base/rcache_base_frame.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/export2/src/openmpi-1.9/openmpi-dev-1031-g008755a-SunOS.x86_64.64_cc/opal/mca/r
</span><br>
<span class="quotelev1">&gt; cache'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/export2/src/openmpi-1.9/openmpi-dev-1031-g008755a-SunOS.x86_64.64_cc/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would be grateful, if somebody could fix the problem. Thank
</span><br>
<span class="quotelev1">&gt; you very much for any help in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26346.php">http://www.open-mpi.org/community/lists/users/2015/02/26346.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26348.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-dev-1031-g008755a with Sun C	5.13"</a>
<li><strong>Previous message:</strong> <a href="26346.php">Siegmar Gross: "[OMPI users] error building openmpi-dev-1031-g008755a with Sun C 5.13"</a>
<li><strong>In reply to:</strong> <a href="26346.php">Siegmar Gross: "[OMPI users] error building openmpi-dev-1031-g008755a with Sun C 5.13"</a>
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
