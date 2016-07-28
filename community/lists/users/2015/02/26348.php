<?
$subject_val = "Re: [OMPI users] error building openmpi-dev-1031-g008755a with Sun C	5.13";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 08:46:17 2015" -->
<!-- isoreceived="20150219134617" -->
<!-- sent="Thu, 19 Feb 2015 13:46:15 +0000" -->
<!-- isosent="20150219134615" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error building openmpi-dev-1031-g008755a with Sun C	5.13" -->
<!-- id="84483E28-C65F-423A-809E-3B7186C7F846_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201502191250.t1JCob6M003181_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Date:</strong> 2015-02-19 08:46:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26349.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-dev-1031-g008755a with gcc-4.9.2"</a>
<li><strong>Previous message:</strong> <a href="26347.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-dev-1031-g008755a with Sun C	5.13"</a>
<li><strong>In reply to:</strong> <a href="26343.php">Siegmar Gross: "[OMPI users] error building openmpi-dev-1031-g008755a with Sun C 5.13"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Siegmar --
<br>
<p>This one looks like a seg fault in your compiler.  I don't know if there's much we can do about that.
<br>
<p><p><p><span class="quotelev1">&gt; On Feb 19, 2015, at 7:50 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
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
<span class="quotelev1">&gt; I got the following error on my Linux machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;  CC       reachable_netlink_utils_common.lo
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-dev-1031-g008755a/opal/include/opal/sys/amd64/atomic.h&quot;, line 164: warning: paramete
</span><br>
<span class="quotelev1">&gt; r in inline asm statement unused: %3
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-dev-1031-g008755a/opal/include/opal/sys/amd64/atomic.h&quot;, line 210: warning: paramete
</span><br>
<span class="quotelev1">&gt; r in inline asm statement unused: %2
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-dev-1031-g008755a/opal/include/opal/sys/amd64/atomic.h&quot;, line 231: warning: paramete
</span><br>
<span class="quotelev1">&gt; r in inline asm statement unused: %2
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-dev-1031-g008755a/opal/include/opal/sys/amd64/atomic.h&quot;, line 252: warning: paramete
</span><br>
<span class="quotelev1">&gt; r in inline asm statement unused: %2
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-dev-1031-g008755a/opal/include/opal/sys/amd64/atomic.h&quot;, line 273: warning: paramete
</span><br>
<span class="quotelev1">&gt; r in inline asm statement unused: %2
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-dev-1031-g008755a/opal/mca/reachable/netlink/reachable_netlink_utils_common.c&quot;, line
</span><br>
<span class="quotelev1">&gt; 322: warning: extern inline function &quot;nl_object_priv&quot; not defined in translation unit
</span><br>
<span class="quotelev1">&gt; cc: Fatal error in /opt/sun/solarisstudio12.4/lib/compilers/acomp : Signal number = 11
</span><br>
<span class="quotelev1">&gt; make[2]: *** [reachable_netlink_utils_common.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/export2/src/openmpi-1.9/openmpi-dev-1031-g008755a-Linux.x86_64.64_cc/opal/mca/r
</span><br>
<span class="quotelev1">&gt; eachable/netlink'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/export2/src/openmpi-1.9/openmpi-dev-1031-g008755a-Linux.x86_64.64_cc/opal'
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26343.php">http://www.open-mpi.org/community/lists/users/2015/02/26343.php</a>
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
<li><strong>Next message:</strong> <a href="26349.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-dev-1031-g008755a with gcc-4.9.2"</a>
<li><strong>Previous message:</strong> <a href="26347.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-dev-1031-g008755a with Sun C	5.13"</a>
<li><strong>In reply to:</strong> <a href="26343.php">Siegmar Gross: "[OMPI users] error building openmpi-dev-1031-g008755a with Sun C 5.13"</a>
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
