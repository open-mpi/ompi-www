<?
$subject_val = "Re: [OMPI users] Cross compiling for 32 bit from a 64 bit machine";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 25 14:11:23 2010" -->
<!-- isoreceived="20101025181123" -->
<!-- sent="Mon, 25 Oct 2010 14:11:18 -0400" -->
<!-- isosent="20101025181118" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cross compiling for 32 bit from a 64 bit machine" -->
<!-- id="A07A84F9-8E5E-419D-B4A5-C2536DE48FC1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="000e0cd152d4a43e1d049374b628_at_google.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Cross compiling for 32 bit from a 64 bit machine<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-25 14:11:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14607.php">saahil.in_at_[hidden]: "Re: [OMPI users] Fwd: Cross compiling for 32 bit from a 64 bit machine"</a>
<li><strong>Previous message:</strong> <a href="14605.php">Gus Correa: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>In reply to:</strong> <a href="14602.php">saahil.in_at_[hidden]: "[OMPI users] Cross compiling for 32 bit from a 64 bit machine"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You might also need LDFLAGS=-m32 ...?
<br>
<p>On Oct 25, 2010, at 1:56 PM, saahil.in_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Hello, 
</span><br>
<span class="quotelev1">&gt; I am a beginner using Open MPI to set up a simple Beowulf cluster of PCs for my Distributed Systems lab. My head node is my x86_64 architecture Fedora 12 machine. The rest of my nodes are i386 Fedora 13 machines. I understand that I need to compile Open MPI with CFLAGS=-m32 so that I can use -m32 flag to create a 32 bit compatible binary. I could not do this using yum install. So I am using the tarball for Open MPI 1.5. 
</span><br>
<span class="quotelev1">&gt; my configure command is as follows - 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/home/wolf/openmpi/ CFLAGS=-m32 CXXFLAGS=-m32 FFLAGS=-m32 FCFLAGS=-m32
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This works fine. However, while doing make I get the following errors - 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: i386:x86-64 architecture of input file `../opal/libltdl/.libs/libltdlc.a(libltdlc_la-preopen.o)' is incompatible with i386 output
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: i386:x86-64 architecture of input file `../opal/libltdl/.libs/libltdlc.a(libltdlc_la-lt__alloc.o)' is incompatible with i386 output
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: i386:x86-64 architecture of input file `../opal/libltdl/.libs/libltdlc.a(libltdlc_la-lt_dlloader.o)' is incompatible with i386 output
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: i386:x86-64 architecture of input file `../opal/libltdl/.libs/libltdlc.a(libltdlc_la-lt_error.o)' is incompatible with i386 output
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: i386:x86-64 architecture of input file `../opal/libltdl/.libs/libltdlc.a(libltdlc_la-ltdl.o)' is incompatible with i386 output
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: i386:x86-64 architecture of input file `../opal/libltdl/.libs/libltdlc.a(libltdlc_la-slist.o)' is incompatible with i386 output
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: i386:x86-64 architecture of input file `../opal/libltdl/.libs/libltdlc.a(lt__strl.o)' is incompatible with i386 output
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: i386:x86-64 architecture of input file `../opal/libltdl/.libs/libltdlc.a(libltdlcS.o)' is incompatible with i386 output
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: i386:x86-64 architecture of input file `../opal/libltdl/.libs/libltdlc.a(dlopen.o)' is incompatible with i386 output
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: i386:x86-64 architecture of input file `asm/.libs/libasm.a(atomic-asm.o)' is incompatible with i386 output
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: i386:x86-64 architecture of input file `event/.libs/libevent.a(signal.o)' is incompatible with i386 output
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: i386:x86-64 architecture of input file `event/.libs/libevent.a(epoll.o)' is incompatible with i386 output
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: i386:x86-64 architecture of input file `event/.libs/libevent.a(poll.o)' is incompatible with i386 output
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: i386:x86-64 architecture of input file `event/.libs/libevent.a(select.o)' is incompatible with i386 output
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: final link failed: Invalid operation
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[2]: *** [libopen-pal.la] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/wolf/Downloads/openmpi-1.5/opal'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/wolf/Downloads/openmpi-1.5/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any idea as to how to go around fixing this? Any help would be greatly regarded, since I'm supposed to meet a deadline, and half of my semester has been spent trying to get either LAM-MPI or Open MPI (which I was suggested I shift to) to work.
</span><br>
<span class="quotelev1">&gt; Thank you very much. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards, 
</span><br>
<span class="quotelev1">&gt; Saahil_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14607.php">saahil.in_at_[hidden]: "Re: [OMPI users] Fwd: Cross compiling for 32 bit from a 64 bit machine"</a>
<li><strong>Previous message:</strong> <a href="14605.php">Gus Correa: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>In reply to:</strong> <a href="14602.php">saahil.in_at_[hidden]: "[OMPI users] Cross compiling for 32 bit from a 64 bit machine"</a>
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
