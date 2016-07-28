<?
$subject_val = "Re: [OMPI users] Fwd: Cross compiling for 32 bit from a 64 bit machine";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 25 14:29:11 2010" -->
<!-- isoreceived="20101025182911" -->
<!-- sent="Mon, 25 Oct 2010 18:29:06 +0000" -->
<!-- isosent="20101025182906" -->
<!-- name="saahil.in_at_[hidden]" -->
<!-- email="saahil.in_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: Cross compiling for 32 bit from a 64 bit machine" -->
<!-- id="001636e0b5addef83c0493752ad4_at_google.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="651CFACE-961E-4E32-8F1F-0C7560487166_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fwd: Cross compiling for 32 bit from a 64 bit machine<br>
<strong>From:</strong> <a href="mailto:saahil.in_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Fwd:%20Cross%20compiling%20for%2032%20bit%20from%20a%2064%20bit%20machine"><em>saahil.in_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-10-25 14:29:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14608.php">saahil.in_at_[hidden]: "Re: [OMPI users] Fwd: Cross compiling for 32 bit from a 64 bit machine"</a>
<li><strong>Previous message:</strong> <a href="14606.php">Jeff Squyres: "Re: [OMPI users] Cross compiling for 32 bit from a 64 bit machine"</a>
<li><strong>In reply to:</strong> <a href="14604.php">Ralph Castain: "Re: [OMPI users] Fwd: Cross compiling for 32 bit from a 64 bit machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14608.php">saahil.in_at_[hidden]: "Re: [OMPI users] Fwd: Cross compiling for 32 bit from a 64 bit machine"</a>
<li><strong>Reply:</strong> <a href="14608.php">saahil.in_at_[hidden]: "Re: [OMPI users] Fwd: Cross compiling for 32 bit from a 64 bit machine"</a>
<li><strong>Reply:</strong> <a href="14609.php">Ralph Castain: "Re: [OMPI users] Fwd: Cross compiling for 32 bit from a 64 bit machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
As you suggested, I configured with the following options -
<br>
<p>./configure --prefix=/home/wolf/openmpi/ CFLAGS=-m32 CXXFLAGS=-m32  
<br>
FFLAGS=-m32 FCFLAGS=-m32 --build=i686-pc-linux-gnu LDFLAGS=-m32
<br>
<p>I'm afraid I am still getting the same error messages while making as I did  
<br>
last time. Did I fail to understand what you said? Am I doing something  
<br>
wrong here?
<br>
<p>Regards,
<br>
Saahil
<br>
<p>On Oct 25, 2010 11:35pm, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Do ./configure --help and you'll see options for specifying the host and  
</span><br>
<span class="quotelev1">&gt; build target. You need to do that when cross-compiling.
</span><br>
<p><p><p><p><p><span class="quotelev1">&gt; On Oct 25, 2010, at 12:01 PM, saahil.in_at_[hidden] wrote:
</span><br>
<p><p><p><span class="quotelev2">&gt; &gt; ---------- Forwarded message ----------
</span><br>
<p><span class="quotelev2">&gt; &gt; From: saahil.in_at_[hidden]
</span><br>
<p><span class="quotelev2">&gt; &gt; Date: Oct 25, 2010 11:26pm
</span><br>
<p><span class="quotelev2">&gt; &gt; Subject: Cross compiling for 32 bit from a 64 bit machine
</span><br>
<p><span class="quotelev2">&gt; &gt; To: users_at_[hidden]
</span><br>
<p><span class="quotelev2">&gt; &gt; CC:
</span><br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; Hello,
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; I am a beginner using Open MPI to set up a simple Beowulf cluster of  
</span><br>
<span class="quotelev1">&gt; PCs for my Distributed Systems lab. My head node is my x86_64  
</span><br>
<span class="quotelev1">&gt; architecture Fedora 12 machine. The rest of my nodes are i386 Fedora 13  
</span><br>
<span class="quotelev1">&gt; machines. I understand that I need to compile Open MPI with CFLAGS=-m32  
</span><br>
<span class="quotelev1">&gt; so that I can use -m32 flag to create a 32 bit compatible binary. I could  
</span><br>
<span class="quotelev1">&gt; not do this using yum install. So I am using the tarball for Open MPI 1.5.
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; my configure command is as follows -
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt;
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; ./configure --prefix=/home/wolf/openmpi/ CFLAGS=-m32 CXXFLAGS=-m32  
</span><br>
<span class="quotelev1">&gt; FFLAGS=-m32 FCFLAGS=-m32
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt;
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; This works fine. However, while doing make I get the following errors  
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt;
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; /usr/bin/ld: i386:x86-64 architecture of input file  
</span><br>
<span class="quotelev1">&gt; `../opal/libltdl/.libs/libltdlc.a(libltdlc_la-preopen.o)' is incompatible  
</span><br>
<span class="quotelev1">&gt; with i386 output
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; /usr/bin/ld: i386:x86-64 architecture of input file  
</span><br>
<span class="quotelev1">&gt; `../opal/libltdl/.libs/libltdlc.a(libltdlc_la-lt__alloc.o)' is  
</span><br>
<span class="quotelev1">&gt; incompatible with i386 output
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; /usr/bin/ld: i386:x86-64 architecture of input file  
</span><br>
<span class="quotelev1">&gt; `../opal/libltdl/.libs/libltdlc.a(libltdlc_la-lt_dlloader.o)' is  
</span><br>
<span class="quotelev1">&gt; incompatible with i386 output
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; /usr/bin/ld: i386:x86-64 architecture of input file  
</span><br>
<span class="quotelev1">&gt; `../opal/libltdl/.libs/libltdlc.a(libltdlc_la-lt_error.o)' is  
</span><br>
<span class="quotelev1">&gt; incompatible with i386 output
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; /usr/bin/ld: i386:x86-64 architecture of input file  
</span><br>
<span class="quotelev1">&gt; `../opal/libltdl/.libs/libltdlc.a(libltdlc_la-ltdl.o)' is incompatible  
</span><br>
<span class="quotelev1">&gt; with i386 output
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; /usr/bin/ld: i386:x86-64 architecture of input file  
</span><br>
<span class="quotelev1">&gt; `../opal/libltdl/.libs/libltdlc.a(libltdlc_la-slist.o)' is incompatible  
</span><br>
<span class="quotelev1">&gt; with i386 output
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; /usr/bin/ld: i386:x86-64 architecture of input file  
</span><br>
<span class="quotelev1">&gt; `../opal/libltdl/.libs/libltdlc.a(lt__strl.o)' is incompatible with i386  
</span><br>
<span class="quotelev1">&gt; output
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; /usr/bin/ld: i386:x86-64 architecture of input file  
</span><br>
<span class="quotelev1">&gt; `../opal/libltdl/.libs/libltdlc.a(libltdlcS.o)' is incompatible with i386  
</span><br>
<span class="quotelev1">&gt; output
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; /usr/bin/ld: i386:x86-64 architecture of input file  
</span><br>
<span class="quotelev1">&gt; `../opal/libltdl/.libs/libltdlc.a(dlopen.o)' is incompatible with i386  
</span><br>
<span class="quotelev1">&gt; output
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; /usr/bin/ld: i386:x86-64 architecture of input file  
</span><br>
<span class="quotelev1">&gt; `asm/.libs/libasm.a(atomic-asm.o)' is incompatible with i386 output
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; /usr/bin/ld: i386:x86-64 architecture of input file  
</span><br>
<span class="quotelev1">&gt; `event/.libs/libevent.a(signal.o)' is incompatible with i386 output
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; /usr/bin/ld: i386:x86-64 architecture of input file  
</span><br>
<span class="quotelev1">&gt; `event/.libs/libevent.a(epoll.o)' is incompatible with i386 output
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; /usr/bin/ld: i386:x86-64 architecture of input file  
</span><br>
<span class="quotelev1">&gt; `event/.libs/libevent.a(poll.o)' is incompatible with i386 output
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; /usr/bin/ld: i386:x86-64 architecture of input file  
</span><br>
<span class="quotelev1">&gt; `event/.libs/libevent.a(select.o)' is incompatible with i386 output
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; /usr/bin/ld: final link failed: Invalid operation
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; collect2: ld returned 1 exit status
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; make[2]: *** [libopen-pal.la] Error 1
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; make[2]: Leaving directory `/home/wolf/Downloads/openmpi-1.5/opal'
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; make[1]: *** [all-recursive] Error 1
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; make[1]: Leaving directory `/home/wolf/Downloads/openmpi-1.5/opal'
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; make: *** [all-recursive] Error 1
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt;
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt;
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; Any idea as to how to go around fixing this? Any help would be  
</span><br>
<span class="quotelev1">&gt; greatly regarded, since I'm supposed to meet a deadline, and half of my  
</span><br>
<span class="quotelev1">&gt; semester has been spent trying to get either LAM-MPI or Open MPI (which I  
</span><br>
<span class="quotelev1">&gt; was suggested I shift to) to work.
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; Thank you very much.
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt;
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; Regards,
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; Saahil_______________________________________________
</span><br>
<p><span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<p><span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<p><span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><p><p><p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<p><span class="quotelev1">&gt; users mailing list
</span><br>
<p><span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<p><span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14607/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14608.php">saahil.in_at_[hidden]: "Re: [OMPI users] Fwd: Cross compiling for 32 bit from a 64 bit machine"</a>
<li><strong>Previous message:</strong> <a href="14606.php">Jeff Squyres: "Re: [OMPI users] Cross compiling for 32 bit from a 64 bit machine"</a>
<li><strong>In reply to:</strong> <a href="14604.php">Ralph Castain: "Re: [OMPI users] Fwd: Cross compiling for 32 bit from a 64 bit machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14608.php">saahil.in_at_[hidden]: "Re: [OMPI users] Fwd: Cross compiling for 32 bit from a 64 bit machine"</a>
<li><strong>Reply:</strong> <a href="14608.php">saahil.in_at_[hidden]: "Re: [OMPI users] Fwd: Cross compiling for 32 bit from a 64 bit machine"</a>
<li><strong>Reply:</strong> <a href="14609.php">Ralph Castain: "Re: [OMPI users] Fwd: Cross compiling for 32 bit from a 64 bit machine"</a>
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
