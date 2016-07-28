<?
$subject_val = "Re: [OMPI users] openmpi-dev-2453-g1989999: missing file";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  8 11:33:18 2015" -->
<!-- isoreceived="20150908153318" -->
<!-- sent="Tue, 8 Sep 2015 17:32:15 +0200" -->
<!-- isosent="20150908153215" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-dev-2453-g1989999: missing file" -->
<!-- id="55EEFF7F.6070107_at_informatik.hs-fulda.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1F07F6E1-340C-49DB-8B4A-751699D0229E_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-dev-2453-g1989999: missing file<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-08 11:32:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27551.php">Siegmar Gross: "Re: [OMPI users] openmpi-v1.10.0-5-ge0b85ea: problem with Java"</a>
<li><strong>Previous message:</strong> <a href="27549.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-v1.10.0-5-ge0b85ea: problem with Java"</a>
<li><strong>In reply to:</strong> <a href="27548.php">Ralph Castain: "Re: [OMPI users] openmpi-dev-2453-g1989999: missing file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27552.php">Ralph Castain: "Re: [OMPI users] openmpi-dev-2453-g1989999: missing file"</a>
<li><strong>Reply:</strong> <a href="27552.php">Ralph Castain: "Re: [OMPI users] openmpi-dev-2453-g1989999: missing file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>I used the following commands to configure Open MPI.
<br>
They are more or less the same for all versions of
<br>
Open MPI and I use them for some time now.
<br>
<p>../openmpi-dev-2453-g1989999/configure \
<br>
&nbsp;&nbsp;&nbsp;--prefix=/usr/local/openmpi-master_64_gcc \
<br>
&nbsp;&nbsp;&nbsp;--libdir=/usr/local/openmpi-master_64_gcc/lib64 \
<br>
&nbsp;&nbsp;&nbsp;--with-jdk-bindir=/usr/local/jdk1.8.0/bin \
<br>
&nbsp;&nbsp;&nbsp;--with-jdk-headers=/usr/local/jdk1.8.0/include \
<br>
&nbsp;&nbsp;&nbsp;JAVA_HOME=/usr/local/jdk1.8.0 \
<br>
&nbsp;&nbsp;&nbsp;LDFLAGS=&quot;-m64&quot; CC=&quot;gcc&quot; CXX=&quot;g++&quot; FC=&quot;gfortran&quot; \
<br>
&nbsp;&nbsp;&nbsp;CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;&nbsp;CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
<br>
&nbsp;&nbsp;&nbsp;CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
<br>
&nbsp;&nbsp;&nbsp;--enable-mpi-cxx \
<br>
&nbsp;&nbsp;&nbsp;--enable-cxx-exceptions \
<br>
&nbsp;&nbsp;&nbsp;--enable-mpi-java \
<br>
&nbsp;&nbsp;&nbsp;--enable-heterogeneous \
<br>
&nbsp;&nbsp;&nbsp;--enable-mpi-thread-multiple \
<br>
&nbsp;&nbsp;&nbsp;--with-hwloc=internal \
<br>
&nbsp;&nbsp;&nbsp;--without-verbs \
<br>
&nbsp;&nbsp;&nbsp;--with-wrapper-cflags=&quot;-std=c11 -m64&quot; \
<br>
&nbsp;&nbsp;&nbsp;--with-wrapper-cxxflags=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;&nbsp;--with-wrapper-fcflags=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;&nbsp;--enable-debug \
<br>
&nbsp;&nbsp;&nbsp;|&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
<br>
<p><p>../openmpi-dev-2453-g1989999/configure \
<br>
&nbsp;&nbsp;&nbsp;--prefix=/usr/local/openmpi-master_64_cc \
<br>
&nbsp;&nbsp;&nbsp;--libdir=/usr/local/openmpi-master_64_cc/lib64 \
<br>
&nbsp;&nbsp;&nbsp;--with-jdk-bindir=/usr/local/jdk1.8.0/bin \
<br>
&nbsp;&nbsp;&nbsp;--with-jdk-headers=/usr/local/jdk1.8.0/include \
<br>
&nbsp;&nbsp;&nbsp;JAVA_HOME=/usr/local/jdk1.8.0 \
<br>
&nbsp;&nbsp;&nbsp;LDFLAGS=&quot;-m64 -mt&quot; \
<br>
&nbsp;&nbsp;&nbsp;CC=&quot;cc&quot; CXX=&quot;CC&quot; FC=&quot;f95&quot; \
<br>
&nbsp;&nbsp;&nbsp;CFLAGS=&quot;-m64 -mt&quot; CXXFLAGS=&quot;-m64 -library=stlport4&quot; FCFLAGS=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;&nbsp;CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
<br>
&nbsp;&nbsp;&nbsp;CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
<br>
&nbsp;&nbsp;&nbsp;--enable-mpi-cxx \
<br>
&nbsp;&nbsp;&nbsp;--enable-cxx-exceptions \
<br>
&nbsp;&nbsp;&nbsp;--enable-mpi-java \
<br>
&nbsp;&nbsp;&nbsp;--enable-heterogeneous \
<br>
&nbsp;&nbsp;&nbsp;--enable-mpi-thread-multiple \
<br>
&nbsp;&nbsp;&nbsp;--with-hwloc=internal \
<br>
&nbsp;&nbsp;&nbsp;--without-verbs \
<br>
&nbsp;&nbsp;&nbsp;--with-wrapper-cflags=&quot;-m64 -mt&quot; \
<br>
&nbsp;&nbsp;&nbsp;--with-wrapper-cxxflags=&quot;-m64 -library=stlport4&quot; \
<br>
&nbsp;&nbsp;&nbsp;--with-wrapper-fcflags=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;&nbsp;--with-wrapper-ldflags=&quot;-mt&quot; \
<br>
&nbsp;&nbsp;&nbsp;--enable-debug \
<br>
&nbsp;&nbsp;&nbsp;|&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_cc
<br>
<p>I've attached the config files for Linux and gcc. Please let
<br>
me know if you need any other files from the build process.
<br>
Thank you very much for your help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p>Am 08.09.2015 um 15:37 schrieb Ralph Castain:
<br>
<span class="quotelev1">&gt; Hmmm&#226;&#128;&#166;best send us the configure stuff, Siegmar. Looks like you are missing a CPPFLAG
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 8, 2015, at 1:05 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; yesterday I tried to build openmpi-dev-2453-g1989999 on my
</span><br>
<span class="quotelev2">&gt;&gt; machines (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE
</span><br>
<span class="quotelev2">&gt;&gt; Linux 12.1 x86_64) with gcc-5.1.0 and Sun C 5.13. I got the
</span><br>
<span class="quotelev2">&gt;&gt; following error on all machines with the GNU compiler and
</span><br>
<span class="quotelev2">&gt;&gt; on my Linux box also with the Sun compiler.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: Entering directory `/export2/src/openmpi-master/openmpi-dev-2453-g1989999-SunOS.sparc.64_gcc/opal/mca/pmix/pmix1xx/pmix'
</span><br>
<span class="quotelev2">&gt;&gt;   CC       src/class/pmix_object.lo
</span><br>
<span class="quotelev2">&gt;&gt;   CC       src/class/pmix_list.lo
</span><br>
<span class="quotelev2">&gt;&gt;   CC       src/class/pmix_pointer_array.lo
</span><br>
<span class="quotelev2">&gt;&gt;   CC       src/class/pmix_hash_table.lo
</span><br>
<span class="quotelev2">&gt;&gt;   CC       src/include/pmix_globals.lo
</span><br>
<span class="quotelev2">&gt;&gt; In file included from ../../../../../../openmpi-dev-2453-g1989999/opal/mca/pmix/pmix1xx/pmix/src/include/pmix_globals.c:19:0:
</span><br>
<span class="quotelev2">&gt;&gt; /export2/src/openmpi-master/openmpi-dev-2453-g1989999/opal/mca/pmix/pmix1xx/pmix/include/private/types.h:43:27: fatal error: opal/mca/event/libevent2022/libevent2022.h: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; compilation terminated.
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: *** [src/include/pmix_globals.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: Leaving directory `/export2/src/openmpi-master/openmpi-dev-2453-g1989999-SunOS.sparc.64_gcc/opal/mca/pmix/pmix1xx/pmix'
</span><br>
<span class="quotelev2">&gt;&gt; ...
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27544.php">http://www.open-mpi.org/community/lists/users/2015/09/27544.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27548.php">http://www.open-mpi.org/community/lists/users/2015/09/27548.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
########################################################################
#                                                                      #
# Hochschule Fulda          University of Applied Sciences             #
# FB Angewandte Informatik  Department of Applied Computer Science     #
#                                                                      #
# Prof. Dr. Siegmar Gross   Tel.: +49 (0)661 9640 - 333                #
#                           Fax:  +49 (0)661 9640 - 349                #
# Leipziger Str. 123        WWW:  <a href="http://www.hs-fulda.de/~gross">http://www.hs-fulda.de/~gross</a>        #
# D-36037 Fulda             Mail: Siegmar.Gross_at_[hidden] #
#                                                                      #
#                                                                      #
# IT-Sicherheit: <a href="http://www.hs-fulda.de/it-sicherheit">http://www.hs-fulda.de/it-sicherheit</a>                  #
#                                                                      #
########################################################################

</pre>
<p>
<p>
<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27550/config.tar.gz">config.tar.gz</a>
</ul>
<!-- attachment="config.tar.gz" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27550/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27551.php">Siegmar Gross: "Re: [OMPI users] openmpi-v1.10.0-5-ge0b85ea: problem with Java"</a>
<li><strong>Previous message:</strong> <a href="27549.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-v1.10.0-5-ge0b85ea: problem with Java"</a>
<li><strong>In reply to:</strong> <a href="27548.php">Ralph Castain: "Re: [OMPI users] openmpi-dev-2453-g1989999: missing file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27552.php">Ralph Castain: "Re: [OMPI users] openmpi-dev-2453-g1989999: missing file"</a>
<li><strong>Reply:</strong> <a href="27552.php">Ralph Castain: "Re: [OMPI users] openmpi-dev-2453-g1989999: missing file"</a>
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
