<?
$subject_val = "[OMPI users] Fwd: Cross compiling for 32 bit from a 64 bit machine";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 25 14:01:06 2010" -->
<!-- isoreceived="20101025180106" -->
<!-- sent="Mon, 25 Oct 2010 18:01:01 +0000" -->
<!-- isosent="20101025180101" -->
<!-- name="saahil.in_at_[hidden]" -->
<!-- email="saahil.in_at_[hidden]" -->
<!-- subject="[OMPI users] Fwd: Cross compiling for 32 bit from a 64 bit machine" -->
<!-- id="001636e0b5ad72d82a049374c6b7_at_google.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Fwd: Cross compiling for 32 bit from a 64 bit machine<br>
<strong>From:</strong> <a href="mailto:saahil.in_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Fwd:%20Cross%20compiling%20for%2032%20bit%20from%20a%2064%20bit%20machine"><em>saahil.in_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-10-25 14:01:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14604.php">Ralph Castain: "Re: [OMPI users] Fwd: Cross compiling for 32 bit from a 64 bit machine"</a>
<li><strong>Previous message:</strong> <a href="14602.php">saahil.in_at_[hidden]: "[OMPI users] Cross compiling for 32 bit from a 64 bit machine"</a>
<li><strong>In reply to:</strong> <a href="14602.php">saahil.in_at_[hidden]: "[OMPI users] Cross compiling for 32 bit from a 64 bit machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14604.php">Ralph Castain: "Re: [OMPI users] Fwd: Cross compiling for 32 bit from a 64 bit machine"</a>
<li><strong>Reply:</strong> <a href="14604.php">Ralph Castain: "Re: [OMPI users] Fwd: Cross compiling for 32 bit from a 64 bit machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
---------- Forwarded message ----------
<br>
From: saahil.in_at_[hidden]
<br>
Date: Oct 25, 2010 11:26pm
<br>
Subject: Cross compiling for 32 bit from a 64 bit machine
<br>
To: users_at_[hidden]
<br>
CC:
<br>
<p><p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; I am a beginner using Open MPI to set up a simple Beowulf cluster of PCs  
</span><br>
<span class="quotelev1">&gt; for my Distributed Systems lab. My head node is my x86_64 architecture  
</span><br>
<span class="quotelev1">&gt; Fedora 12 machine. The rest of my nodes are i386 Fedora 13 machines. I  
</span><br>
<span class="quotelev1">&gt; understand that I need to compile Open MPI with CFLAGS=-m32 so that I can  
</span><br>
<span class="quotelev1">&gt; use -m32 flag to create a 32 bit compatible binary. I could not do this  
</span><br>
<span class="quotelev1">&gt; using yum install. So I am using the tarball for Open MPI 1.5.
</span><br>
<span class="quotelev1">&gt; my configure command is as follows -
</span><br>
<p><span class="quotelev1">&gt; ./configure --prefix=/home/wolf/openmpi/ CFLAGS=-m32 CXXFLAGS=-m32  
</span><br>
<span class="quotelev1">&gt; FFLAGS=-m32 FCFLAGS=-m32
</span><br>
<p><span class="quotelev1">&gt; This works fine. However, while doing make I get the following errors -
</span><br>
<p><span class="quotelev1">&gt; /usr/bin/ld: i386:x86-64 architecture of input file  
</span><br>
<span class="quotelev1">&gt; `../opal/libltdl/.libs/libltdlc.a(libltdlc_la-preopen.o)' is incompatible  
</span><br>
<span class="quotelev1">&gt; with i386 output
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: i386:x86-64 architecture of input file  
</span><br>
<span class="quotelev1">&gt; `../opal/libltdl/.libs/libltdlc.a(libltdlc_la-lt__alloc.o)' is  
</span><br>
<span class="quotelev1">&gt; incompatible with i386 output
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: i386:x86-64 architecture of input file  
</span><br>
<span class="quotelev1">&gt; `../opal/libltdl/.libs/libltdlc.a(libltdlc_la-lt_dlloader.o)' is  
</span><br>
<span class="quotelev1">&gt; incompatible with i386 output
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: i386:x86-64 architecture of input file  
</span><br>
<span class="quotelev1">&gt; `../opal/libltdl/.libs/libltdlc.a(libltdlc_la-lt_error.o)' is  
</span><br>
<span class="quotelev1">&gt; incompatible with i386 output
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: i386:x86-64 architecture of input file  
</span><br>
<span class="quotelev1">&gt; `../opal/libltdl/.libs/libltdlc.a(libltdlc_la-ltdl.o)' is incompatible  
</span><br>
<span class="quotelev1">&gt; with i386 output
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: i386:x86-64 architecture of input file  
</span><br>
<span class="quotelev1">&gt; `../opal/libltdl/.libs/libltdlc.a(libltdlc_la-slist.o)' is incompatible  
</span><br>
<span class="quotelev1">&gt; with i386 output
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: i386:x86-64 architecture of input file  
</span><br>
<span class="quotelev1">&gt; `../opal/libltdl/.libs/libltdlc.a(lt__strl.o)' is incompatible with i386  
</span><br>
<span class="quotelev1">&gt; output
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: i386:x86-64 architecture of input file  
</span><br>
<span class="quotelev1">&gt; `../opal/libltdl/.libs/libltdlc.a(libltdlcS.o)' is incompatible with i386  
</span><br>
<span class="quotelev1">&gt; output
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: i386:x86-64 architecture of input file  
</span><br>
<span class="quotelev1">&gt; `../opal/libltdl/.libs/libltdlc.a(dlopen.o)' is incompatible with i386  
</span><br>
<span class="quotelev1">&gt; output
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: i386:x86-64 architecture of input file  
</span><br>
<span class="quotelev1">&gt; `asm/.libs/libasm.a(atomic-asm.o)' is incompatible with i386 output
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: i386:x86-64 architecture of input file  
</span><br>
<span class="quotelev1">&gt; `event/.libs/libevent.a(signal.o)' is incompatible with i386 output
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: i386:x86-64 architecture of input file  
</span><br>
<span class="quotelev1">&gt; `event/.libs/libevent.a(epoll.o)' is incompatible with i386 output
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: i386:x86-64 architecture of input file  
</span><br>
<span class="quotelev1">&gt; `event/.libs/libevent.a(poll.o)' is incompatible with i386 output
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: i386:x86-64 architecture of input file  
</span><br>
<span class="quotelev1">&gt; `event/.libs/libevent.a(select.o)' is incompatible with i386 output
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
<p><p><span class="quotelev1">&gt; Any idea as to how to go around fixing this? Any help would be greatly  
</span><br>
<span class="quotelev1">&gt; regarded, since I'm supposed to meet a deadline, and half of my semester  
</span><br>
<span class="quotelev1">&gt; has been spent trying to get either LAM-MPI or Open MPI (which I was  
</span><br>
<span class="quotelev1">&gt; suggested I shift to) to work.
</span><br>
<span class="quotelev1">&gt; Thank you very much.
</span><br>
<p><span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Saahil
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14603/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14604.php">Ralph Castain: "Re: [OMPI users] Fwd: Cross compiling for 32 bit from a 64 bit machine"</a>
<li><strong>Previous message:</strong> <a href="14602.php">saahil.in_at_[hidden]: "[OMPI users] Cross compiling for 32 bit from a 64 bit machine"</a>
<li><strong>In reply to:</strong> <a href="14602.php">saahil.in_at_[hidden]: "[OMPI users] Cross compiling for 32 bit from a 64 bit machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14604.php">Ralph Castain: "Re: [OMPI users] Fwd: Cross compiling for 32 bit from a 64 bit machine"</a>
<li><strong>Reply:</strong> <a href="14604.php">Ralph Castain: "Re: [OMPI users] Fwd: Cross compiling for 32 bit from a 64 bit machine"</a>
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
