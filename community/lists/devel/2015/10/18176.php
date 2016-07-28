<?
$subject_val = "Re: [OMPI devel] [OMPI users] fatal error:	openmpi-v2.x-dev-415-g5c9b192 andopenmpi-dev-2696-gd579a07";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 15 06:44:37 2015" -->
<!-- isoreceived="20151015104437" -->
<!-- sent="Thu, 15 Oct 2015 10:44:18 +0000" -->
<!-- isosent="20151015104418" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] fatal error:	openmpi-v2.x-dev-415-g5c9b192 andopenmpi-dev-2696-gd579a07" -->
<!-- id="CBE7C1BD-4312-4E63-B9D0-6DF4642B3A4D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5tS-r-swxGWoydPgJ_W=NrQjjZPNpC_dm5=4auabakBVA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI users] fatal error:	openmpi-v2.x-dev-415-g5c9b192 andopenmpi-dev-2696-gd579a07<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-15 06:44:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18177.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Previous message:</strong> <a href="18175.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>In reply to:</strong> <a href="18159.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] fatal error: openmpi-v2.x-dev-415-g5c9b192 andopenmpi-dev-2696-gd579a07"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Followup on <a href="https://github.com/open-mpi/ompi/pull/1028">https://github.com/open-mpi/ompi/pull/1028</a>.
<br>
<p><p><span class="quotelev1">&gt; On Oct 14, 2015, at 2:37 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i was able to reproduce the issue by adding CPPFLAGS=-I/tmp to my
</span><br>
<span class="quotelev1">&gt; configure command line.
</span><br>
<span class="quotelev1">&gt; here is what happens :
</span><br>
<span class="quotelev1">&gt; opal/mca/pmix/pmix1xx/configure.m4 set the CPPFLAGS environment
</span><br>
<span class="quotelev1">&gt; variable with -I/tmp and include paths for hwloc and libevent
</span><br>
<span class="quotelev1">&gt; then opal/mca/pmix/pmix1xx/pmix/configure is invoked with
</span><br>
<span class="quotelev1">&gt; CPPFLAGS=-I/tmp on the command line
</span><br>
<span class="quotelev1">&gt; the CPPFLAGS environment variable is simply ignored, and only -I/tmp
</span><br>
<span class="quotelev1">&gt; is used, which causes the compilation failure reported by Siegmar.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; at this stage, i do not know the best way to solve this issue :
</span><br>
<span class="quotelev1">&gt; one option is not to pass CPPFLAGS=-I/tmp to the sub configure
</span><br>
<span class="quotelev1">&gt; an other option is not to set the CPPFLAGS environment variable but
</span><br>
<span class="quotelev1">&gt; invoke the sub configure with &quot;CPPFLAGS=$CPPFLAGS&quot;
</span><br>
<span class="quotelev1">&gt; note this issue might not be limited to CPPFLAGS handling
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; could you please advise on how to move forward ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Oct 7, 2015 at 4:42 PM, Siegmar Gross
</span><br>
<span class="quotelev1">&gt; &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I tried to build openmpi-v2.x-dev-415-g5c9b192 and
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-dev-2696-gd579a07 on my machines (Solaris 10 Sparc, Solaris 10
</span><br>
<span class="quotelev2">&gt;&gt; x86_64, and openSUSE Linux 12.1 x86_64) with gcc-5.1.0 and Sun C 5.13.
</span><br>
<span class="quotelev2">&gt;&gt; I got the following error on all platforms with gcc and with Sun C only
</span><br>
<span class="quotelev2">&gt;&gt; on my Linux machine. I've already reported the problem September 8th
</span><br>
<span class="quotelev2">&gt;&gt; for the master trunk (at that time I didn't have the problem for the
</span><br>
<span class="quotelev2">&gt;&gt; v2.x trunk. I use the following configure command.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ../openmpi-dev-2696-gd579a07/configure \
</span><br>
<span class="quotelev2">&gt;&gt;  --prefix=/usr/local/openmpi-master_64_gcc \
</span><br>
<span class="quotelev2">&gt;&gt;  --libdir=/usr/local/openmpi-master_64_gcc/lib64 \
</span><br>
<span class="quotelev2">&gt;&gt;  --with-jdk-bindir=/usr/local/jdk1.8.0/bin \
</span><br>
<span class="quotelev2">&gt;&gt;  --with-jdk-headers=/usr/local/jdk1.8.0/include \
</span><br>
<span class="quotelev2">&gt;&gt;  JAVA_HOME=/usr/local/jdk1.8.0 \
</span><br>
<span class="quotelev2">&gt;&gt;  LDFLAGS=&quot;-m64&quot; CC=&quot;gcc&quot; CXX=&quot;g++&quot; FC=&quot;gfortran&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;  CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;  CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;  CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;  --enable-mpi-cxx \
</span><br>
<span class="quotelev2">&gt;&gt;  --enable-cxx-exceptions \
</span><br>
<span class="quotelev2">&gt;&gt;  --enable-mpi-java \
</span><br>
<span class="quotelev2">&gt;&gt;  --enable-heterogeneous \
</span><br>
<span class="quotelev2">&gt;&gt;  --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev2">&gt;&gt;  --with-hwloc=internal \
</span><br>
<span class="quotelev2">&gt;&gt;  --without-verbs \
</span><br>
<span class="quotelev2">&gt;&gt;  --with-wrapper-cflags=&quot;-std=c11 -m64&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;  --with-wrapper-cxxflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;  --with-wrapper-fcflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;  --enable-debug \
</span><br>
<span class="quotelev2">&gt;&gt;  |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-v2.x-dev-415-g5c9b192:
</span><br>
<span class="quotelev2">&gt;&gt; ==============================
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; linpc1 openmpi-v2.x-dev-415-g5c9b192-Linux.x86_64.64_gcc 135 tail -15
</span><br>
<span class="quotelev2">&gt;&gt; log.make.Linux.x86_64.64_gcc
</span><br>
<span class="quotelev2">&gt;&gt;  CC       src/class/pmix_pointer_array.lo
</span><br>
<span class="quotelev2">&gt;&gt;  CC       src/class/pmix_hash_table.lo
</span><br>
<span class="quotelev2">&gt;&gt;  CC       src/include/pmix_globals.lo
</span><br>
<span class="quotelev2">&gt;&gt; In file included from
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../../openmpi-v2.x-dev-415-g5c9b192/opal/mca/pmix/pmix1xx/pmix/src/include/pmix_globals.c:19:0:
</span><br>
<span class="quotelev2">&gt;&gt; /export2/src/openmpi-2.0.0/openmpi-v2.x-dev-415-g5c9b192/opal/mca/pmix/pmix1xx/pmix/include/private/types.h:43:27:
</span><br>
<span class="quotelev2">&gt;&gt; fatal error: opal/mca/event/libevent2022/libevent2022.h: No such file or
</span><br>
<span class="quotelev2">&gt;&gt; directory
</span><br>
<span class="quotelev2">&gt;&gt; compilation terminated.
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: *** [src/include/pmix_globals.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-415-g5c9b192-Linux.x86_64.64_gcc/opal/mca/pmix/pmix1xx/pmix'
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-415-g5c9b192-Linux.x86_64.64_gcc/opal/mca/pmix/pmix1xx/pmix'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-415-g5c9b192-Linux.x86_64.64_gcc/opal/mca/pmix/pmix1xx'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-415-g5c9b192-Linux.x86_64.64_gcc/opal'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; linpc1 openmpi-v2.x-dev-415-g5c9b192-Linux.x86_64.64_gcc 135
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-dev-2696-gd579a07:
</span><br>
<span class="quotelev2">&gt;&gt; ==========================
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; linpc1 openmpi-dev-2696-gd579a07-Linux.x86_64.64_gcc 158 tail -15
</span><br>
<span class="quotelev2">&gt;&gt; log.make.Linux.x86_64.64_gcc
</span><br>
<span class="quotelev2">&gt;&gt;  CC       src/class/pmix_pointer_array.lo
</span><br>
<span class="quotelev2">&gt;&gt;  CC       src/class/pmix_hash_table.lo
</span><br>
<span class="quotelev2">&gt;&gt;  CC       src/include/pmix_globals.lo
</span><br>
<span class="quotelev2">&gt;&gt; In file included from
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../../openmpi-dev-2696-gd579a07/opal/mca/pmix/pmix1xx/pmix/src/include/pmix_globals.c:19:0:
</span><br>
<span class="quotelev2">&gt;&gt; /export2/src/openmpi-master/openmpi-dev-2696-gd579a07/opal/mca/pmix/pmix1xx/pmix/include/private/types.h:43:27:
</span><br>
<span class="quotelev2">&gt;&gt; fatal error: opal/mca/event/libevent2022/libevent2022.h: No such file or
</span><br>
<span class="quotelev2">&gt;&gt; directory
</span><br>
<span class="quotelev2">&gt;&gt; compilation terminated.
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: *** [src/include/pmix_globals.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/export2/src/openmpi-master/openmpi-dev-2696-gd579a07-Linux.x86_64.64_gcc/opal/mca/pmix/pmix1xx/pmix'
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/export2/src/openmpi-master/openmpi-dev-2696-gd579a07-Linux.x86_64.64_gcc/opal/mca/pmix/pmix1xx/pmix'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/export2/src/openmpi-master/openmpi-dev-2696-gd579a07-Linux.x86_64.64_gcc/opal/mca/pmix/pmix1xx'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/export2/src/openmpi-master/openmpi-dev-2696-gd579a07-Linux.x86_64.64_gcc/opal'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; linpc1 openmpi-dev-2696-gd579a07-Linux.x86_64.64_gcc 159
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I would be grateful if somebody can fix the problem. Thank you very much
</span><br>
<span class="quotelev2">&gt;&gt; for any help in advance.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Kind regards
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Siegmar
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27826.php">http://www.open-mpi.org/community/lists/users/2015/10/27826.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18159.php">http://www.open-mpi.org/community/lists/devel/2015/10/18159.php</a>
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
<li><strong>Next message:</strong> <a href="18177.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Previous message:</strong> <a href="18175.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>In reply to:</strong> <a href="18159.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] fatal error: openmpi-v2.x-dev-415-g5c9b192 andopenmpi-dev-2696-gd579a07"</a>
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
