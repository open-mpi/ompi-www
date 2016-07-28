<?
$subject_val = "Re: [OMPI users] openmpi-dev-2453-g1989999: missing file";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  9 10:55:54 2015" -->
<!-- isoreceived="20150909145554" -->
<!-- sent="Wed, 9 Sep 2015 07:55:51 -0700" -->
<!-- isosent="20150909145551" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-dev-2453-g1989999: missing file" -->
<!-- id="B43E8AF1-BFB0-4114-B31B-6DA0F20B064F_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="55EEFF7F.6070107_at_informatik.hs-fulda.de" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-09 10:55:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27553.php">Siegmar Gross: "Re: [OMPI users] openmpi-dev-2453-g1989999: missing file"</a>
<li><strong>Previous message:</strong> <a href="27551.php">Siegmar Gross: "Re: [OMPI users] openmpi-v1.10.0-5-ge0b85ea: problem with Java"</a>
<li><strong>In reply to:</strong> <a href="27550.php">Siegmar Gross: "Re: [OMPI users] openmpi-dev-2453-g1989999: missing file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27553.php">Siegmar Gross: "Re: [OMPI users] openmpi-dev-2453-g1989999: missing file"</a>
<li><strong>Reply:</strong> <a href="27553.php">Siegmar Gross: "Re: [OMPI users] openmpi-dev-2453-g1989999: missing file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have fixed a few configure things in the last day - can you please give the master another try?
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p><span class="quotelev1">&gt; On Sep 8, 2015, at 8:32 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I used the following commands to configure Open MPI.
</span><br>
<span class="quotelev1">&gt; They are more or less the same for all versions of
</span><br>
<span class="quotelev1">&gt; Open MPI and I use them for some time now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../openmpi-dev-2453-g1989999/configure \
</span><br>
<span class="quotelev1">&gt;  --prefix=/usr/local/openmpi-master_64_gcc \
</span><br>
<span class="quotelev1">&gt;  --libdir=/usr/local/openmpi-master_64_gcc/lib64 \
</span><br>
<span class="quotelev1">&gt;  --with-jdk-bindir=/usr/local/jdk1.8.0/bin \
</span><br>
<span class="quotelev1">&gt;  --with-jdk-headers=/usr/local/jdk1.8.0/include \
</span><br>
<span class="quotelev1">&gt;  JAVA_HOME=/usr/local/jdk1.8.0 \
</span><br>
<span class="quotelev1">&gt;  LDFLAGS=&quot;-m64&quot; CC=&quot;gcc&quot; CXX=&quot;g++&quot; FC=&quot;gfortran&quot; \
</span><br>
<span class="quotelev1">&gt;  CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
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
<span class="quotelev1">&gt;  --with-wrapper-cflags=&quot;-std=c11 -m64&quot; \
</span><br>
<span class="quotelev1">&gt;  --with-wrapper-cxxflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;  --with-wrapper-fcflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;  --enable-debug \
</span><br>
<span class="quotelev1">&gt;  |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../openmpi-dev-2453-g1989999/configure \
</span><br>
<span class="quotelev1">&gt;  --prefix=/usr/local/openmpi-master_64_cc \
</span><br>
<span class="quotelev1">&gt;  --libdir=/usr/local/openmpi-master_64_cc/lib64 \
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
<span class="quotelev1">&gt; I've attached the config files for Linux and gcc. Please let
</span><br>
<span class="quotelev1">&gt; me know if you need any other files from the build process.
</span><br>
<span class="quotelev1">&gt; Thank you very much for your help in advance.
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 08.09.2015 um 15:37 schrieb Ralph Castain:
</span><br>
<span class="quotelev2">&gt;&gt; Hmmm&#226;&#128;&#166;best send us the configure stuff, Siegmar. Looks like you are missing a CPPFLAG
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 8, 2015, at 1:05 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; yesterday I tried to build openmpi-dev-2453-g1989999 on my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machines (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Linux 12.1 x86_64) with gcc-5.1.0 and Sun C 5.13. I got the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; following error on all machines with the GNU compiler and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on my Linux box also with the Sun compiler.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[4]: Entering directory `/export2/src/openmpi-master/openmpi-dev-2453-g1989999-SunOS.sparc.64_gcc/opal/mca/pmix/pmix1xx/pmix'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  CC       src/class/pmix_object.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  CC       src/class/pmix_list.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  CC       src/class/pmix_pointer_array.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  CC       src/class/pmix_hash_table.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  CC       src/include/pmix_globals.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In file included from ../../../../../../openmpi-dev-2453-g1989999/opal/mca/pmix/pmix1xx/pmix/src/include/pmix_globals.c:19:0:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/src/openmpi-master/openmpi-dev-2453-g1989999/opal/mca/pmix/pmix1xx/pmix/include/private/types.h:43:27: fatal error: opal/mca/event/libevent2022/libevent2022.h: No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compilation terminated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[4]: *** [src/include/pmix_globals.lo] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[4]: Leaving directory `/export2/src/openmpi-master/openmpi-dev-2453-g1989999-SunOS.sparc.64_gcc/opal/mca/pmix/pmix1xx/pmix'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27544.php">http://www.open-mpi.org/community/lists/users/2015/09/27544.php</a>
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27548.php">http://www.open-mpi.org/community/lists/users/2015/09/27548.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ########################################################################
</span><br>
<span class="quotelev1">&gt; #                                                                      #
</span><br>
<span class="quotelev1">&gt; # Hochschule Fulda          University of Applied Sciences             #
</span><br>
<span class="quotelev1">&gt; # FB Angewandte Informatik  Department of Applied Computer Science     #
</span><br>
<span class="quotelev1">&gt; #                                                                      #
</span><br>
<span class="quotelev1">&gt; # Prof. Dr. Siegmar Gross   Tel.: +49 (0)661 9640 - 333                #
</span><br>
<span class="quotelev1">&gt; #                           Fax:  +49 (0)661 9640 - 349                #
</span><br>
<span class="quotelev1">&gt; # Leipziger Str. 123        WWW:  <a href="http://www.hs-fulda.de/~gross">http://www.hs-fulda.de/~gross</a>        #
</span><br>
<span class="quotelev1">&gt; # D-36037 Fulda             Mail: Siegmar.Gross_at_[hidden] #
</span><br>
<span class="quotelev1">&gt; #                                                                      #
</span><br>
<span class="quotelev1">&gt; #                                                                      #
</span><br>
<span class="quotelev1">&gt; # IT-Sicherheit: <a href="http://www.hs-fulda.de/it-sicherheit">http://www.hs-fulda.de/it-sicherheit</a>                  #
</span><br>
<span class="quotelev1">&gt; #                                                                      #
</span><br>
<span class="quotelev1">&gt; ########################################################################
</span><br>
<span class="quotelev1">&gt; &lt;config.tar.gz&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27550.php">http://www.open-mpi.org/community/lists/users/2015/09/27550.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27553.php">Siegmar Gross: "Re: [OMPI users] openmpi-dev-2453-g1989999: missing file"</a>
<li><strong>Previous message:</strong> <a href="27551.php">Siegmar Gross: "Re: [OMPI users] openmpi-v1.10.0-5-ge0b85ea: problem with Java"</a>
<li><strong>In reply to:</strong> <a href="27550.php">Siegmar Gross: "Re: [OMPI users] openmpi-dev-2453-g1989999: missing file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27553.php">Siegmar Gross: "Re: [OMPI users] openmpi-dev-2453-g1989999: missing file"</a>
<li><strong>Reply:</strong> <a href="27553.php">Siegmar Gross: "Re: [OMPI users] openmpi-dev-2453-g1989999: missing file"</a>
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
