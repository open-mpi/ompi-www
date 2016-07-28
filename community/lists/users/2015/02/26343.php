<?
$subject_val = "[OMPI users] error building openmpi-dev-1031-g008755a with Sun C 5.13";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 07:51:09 2015" -->
<!-- isoreceived="20150219125109" -->
<!-- sent="Thu, 19 Feb 2015 13:50:37 +0100 (CET)" -->
<!-- isosent="20150219125037" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] error building openmpi-dev-1031-g008755a with Sun C 5.13" -->
<!-- id="201502191250.t1JCob6M003181_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] error building openmpi-dev-1031-g008755a with Sun C 5.13<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-19 07:50:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26344.php">Siegmar Gross: "[OMPI users] error building openmpi-dev-1031-g008755a with gcc-4.9.2"</a>
<li><strong>Previous message:</strong> <a href="26342.php">&#201;ric Chamberland: "Re: [OMPI users] Help on getting CMA works"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26348.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-dev-1031-g008755a with Sun C	5.13"</a>
<li><strong>Reply:</strong> <a href="26348.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-dev-1031-g008755a with Sun C	5.13"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>today I tried to build openmpi-dev-1031-g008755a on my machines
<br>
(Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1
<br>
x86_64) with gcc-4.9.2 and Sun C 5.13 and got errors on all three
<br>
platforms for both compilers. I used the following configure
<br>
command for all platforms.
<br>
<p>../openmpi-dev-1031-g008755a/configure --prefix=/usr/local/openmpi-1.9.0_64_cc \
<br>
&nbsp;&nbsp;--libdir=/usr/local/openmpi-1.9.0_64_cc/lib64 \
<br>
&nbsp;&nbsp;--with-jdk-bindir=/usr/local/jdk1.8.0/bin \
<br>
&nbsp;&nbsp;--with-jdk-headers=/usr/local/jdk1.8.0/include \
<br>
&nbsp;&nbsp;JAVA_HOME=/usr/local/jdk1.8.0 \
<br>
&nbsp;&nbsp;LDFLAGS=&quot;-m64 -mt&quot; \
<br>
&nbsp;&nbsp;CC=&quot;cc&quot; CXX=&quot;CC&quot; FC=&quot;f95&quot; \
<br>
&nbsp;&nbsp;CFLAGS=&quot;-m64 -mt&quot; CXXFLAGS=&quot;-m64 -library=stlport4&quot; FCFLAGS=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
<br>
&nbsp;&nbsp;CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
<br>
&nbsp;&nbsp;--enable-mpi-cxx \
<br>
&nbsp;&nbsp;--enable-cxx-exceptions \
<br>
&nbsp;&nbsp;--enable-mpi-java \
<br>
&nbsp;&nbsp;--enable-heterogeneous \
<br>
&nbsp;&nbsp;--enable-mpi-thread-multiple \
<br>
&nbsp;&nbsp;--with-hwloc=internal \
<br>
&nbsp;&nbsp;--without-verbs \
<br>
&nbsp;&nbsp;--with-wrapper-cflags=&quot;-m64 -mt&quot; \
<br>
&nbsp;&nbsp;--with-wrapper-cxxflags=&quot;-m64 -library=stlport4&quot; \
<br>
&nbsp;&nbsp;--with-wrapper-fcflags=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;--with-wrapper-ldflags=&quot;-mt&quot; \
<br>
&nbsp;&nbsp;--enable-debug \
<br>
&nbsp;&nbsp;|&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_cc
<br>
<p>I got the following error on my Linux machine.
<br>
<p>...
<br>
&nbsp;&nbsp;CC       reachable_netlink_utils_common.lo
<br>
&quot;../../../../../openmpi-dev-1031-g008755a/opal/include/opal/sys/amd64/atomic.h&quot;, line 164: warning: paramete
<br>
r in inline asm statement unused: %3
<br>
&quot;../../../../../openmpi-dev-1031-g008755a/opal/include/opal/sys/amd64/atomic.h&quot;, line 210: warning: paramete
<br>
r in inline asm statement unused: %2
<br>
&quot;../../../../../openmpi-dev-1031-g008755a/opal/include/opal/sys/amd64/atomic.h&quot;, line 231: warning: paramete
<br>
r in inline asm statement unused: %2
<br>
&quot;../../../../../openmpi-dev-1031-g008755a/opal/include/opal/sys/amd64/atomic.h&quot;, line 252: warning: paramete
<br>
r in inline asm statement unused: %2
<br>
&quot;../../../../../openmpi-dev-1031-g008755a/opal/include/opal/sys/amd64/atomic.h&quot;, line 273: warning: paramete
<br>
r in inline asm statement unused: %2
<br>
&quot;../../../../../openmpi-dev-1031-g008755a/opal/mca/reachable/netlink/reachable_netlink_utils_common.c&quot;, line
<br>
&nbsp;322: warning: extern inline function &quot;nl_object_priv&quot; not defined in translation unit
<br>
cc: Fatal error in /opt/sun/solarisstudio12.4/lib/compilers/acomp : Signal number = 11
<br>
make[2]: *** [reachable_netlink_utils_common.lo] Error 1
<br>
make[2]: Leaving directory `/export2/src/openmpi-1.9/openmpi-dev-1031-g008755a-Linux.x86_64.64_cc/opal/mca/r
<br>
eachable/netlink'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/export2/src/openmpi-1.9/openmpi-dev-1031-g008755a-Linux.x86_64.64_cc/opal'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>I would be grateful, if somebody could fix the problem. Thank
<br>
you very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26344.php">Siegmar Gross: "[OMPI users] error building openmpi-dev-1031-g008755a with gcc-4.9.2"</a>
<li><strong>Previous message:</strong> <a href="26342.php">&#201;ric Chamberland: "Re: [OMPI users] Help on getting CMA works"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26348.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-dev-1031-g008755a with Sun C	5.13"</a>
<li><strong>Reply:</strong> <a href="26348.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-dev-1031-g008755a with Sun C	5.13"</a>
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
