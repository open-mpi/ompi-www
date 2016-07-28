<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  8 22:25:36 2007" -->
<!-- isoreceived="20071009022536" -->
<!-- sent="Mon, 8 Oct 2007 19:25:27 -0700" -->
<!-- isosent="20071009022527" -->
<!-- name="Michael Clover" -->
<!-- email="mclover_at_[hidden]" -->
<!-- subject="[OMPI users] ompi-1.2.4 fails to make on iMac (10.4.10)" -->
<!-- id="E8AC8984-8CE7-4EB2-BFC8-31F2CC81F236_at_san.rr.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.23.1191859224.4001.users_at_open-mpi.org" -->
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
<strong>From:</strong> Michael Clover (<em>mclover_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-08 22:25:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4172.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4170.php">Amit Kumar Saha: "Re: [OMPI users] [OT] Newbie seeks clarification about Parallel Computing Terminologies"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Reuti,
<br>
<p>My gcc is also in /usr/bin as gcc:
<br>
<p>cloverm:~:[5]&gt;which gcc
<br>
/usr/bin/gcc
<br>
cloverm:~:[6]&gt;gcc -v
<br>
Using built-in specs.
<br>
Target: i686-apple-darwin8
<br>
Configured with: /private/var/tmp/gcc/gcc-5367.obj~1/src/configure -- 
<br>
disable-checking -enable-werror --prefix=/usr --mandir=/share/man -- 
<br>
enable-languages=c,objc,c++,obj-c++ --program-transform-name=/^[cg] 
<br>
[^.-]*$/s/$/-4.0/ --with-gxx-include-dir=/include/c++/4.0.0 --with- 
<br>
slibdir=/usr/lib --build=powerpc-apple-darwin8 --with-arch=nocona -- 
<br>
with-tune=generic --program-prefix= --host=i686-apple-darwin8 -- 
<br>
target=i686-apple-darwin8
<br>
Thread model: posix
<br>
gcc version 4.0.1 (Apple Computer, Inc. build 5367)
<br>
<p>I thought the &quot; DISPLAY known&quot; might have been some result of  
<br>
my .tcshrc file, so I started up sh in a terminal window before  
<br>
running configure and make, but I still get the same error
<br>
<p>Michael Clover
<br>
mclover_at_[hidden]
<br>
<p><p><p>On Oct 8, 2007, at 9:00 , users-request_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; Date: Mon, 8 Oct 2007 17:19:57 +0200
</span><br>
<span class="quotelev1">&gt; From: Reuti &lt;reuti_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] ompi-1.2.4 fails to make on iMac (10.4.10)
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt; 	&lt;897B6169-808D-4581-A19B-4CB8DA2E3F8B_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=US-ASCII; delsp=yes; format=flowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 07.10.2007 um 01:16 schrieb Michael Clover:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was just trying to install openmpi-1.2.4 on a brand new iMac (2.4
</span><br>
<span class="quotelev2">&gt;&gt; GHZ Intel Core 2 Duo, 1GB RAM, OSX 10.4.10), having just loaded the
</span><br>
<span class="quotelev2">&gt;&gt; xtools environnment.  I am able to successfully run the configure,
</span><br>
<span class="quotelev2">&gt;&gt; but make dies instantly:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; configure -prefix=/usr/local/openmpi --disable-mpi-cxx --disable-
</span><br>
<span class="quotelev2">&gt;&gt; mpi-f90 --without-xgrid FC=gfortran | tee config.out
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; config.status: executing depfiles commands
</span><br>
<span class="quotelev2">&gt;&gt; config.status: executing libtool commands
</span><br>
<span class="quotelev2">&gt;&gt; cloverm:~/bin/openmpi-1.2.4:[22]&gt;make -j 4 |&amp; tee make.out
</span><br>
<span class="quotelev2">&gt;&gt; Makefile:602: *** missing separator.  Stop.
</span><br>
<span class="quotelev2">&gt;&gt; cloverm:~/bin/openmpi-1.2.4:[23]&gt;ls *.out
</span><br>
<span class="quotelev2">&gt;&gt; config.out      make.out
</span><br>
<span class="quotelev2">&gt;&gt; cloverm:~/bin/openmpi-1.2.4:[24]&gt;tar -zcvf ompi-output.tar.gz *.log
</span><br>
<span class="quotelev2">&gt;&gt; *.out
</span><br>
<span class="quotelev2">&gt;&gt; config.log
</span><br>
<span class="quotelev2">&gt;&gt; config.out
</span><br>
<span class="quotelev2">&gt;&gt; make.out
</span><br>
<span class="quotelev2">&gt;&gt; cloverm:~/bin/openmpi-1.2.4:[25]&gt;ld -v
</span><br>
<span class="quotelev2">&gt;&gt; Apple Computer, Inc. version cctools-622.5.obj~13
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have copied lines 599-609 from Makefile, so you can see that Make
</span><br>
<span class="quotelev2">&gt;&gt; is trying to run gcc, in a way that doesn't look correct
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_AS_GLOBAL =
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_AS_LABEL_SUFFIX =
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_CC_ABSOLUTE =  DISPLAY known
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The &quot;DISPLAY known&quot; shouldn't be there. What is a plain:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which gcc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; giving? Just /usr/bin/gcc as for me or something more?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_CONFIGURE_DATE = Sat Oct  6 16:05:59 PDT 2007
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_CONFIGURE_HOST = michael-clovers-computer.local
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_CONFIGURE_USER = mrc
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_CXX_ABSOLUTE =  DISPLAY known
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/g++
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_F77_ABSOLUTE = none
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_F90_ABSOLUTE = none
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4172.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4170.php">Amit Kumar Saha: "Re: [OMPI users] [OT] Newbie seeks clarification about Parallel Computing Terminologies"</a>
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
