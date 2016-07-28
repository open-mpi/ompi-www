<?
$subject_val = "[OMPI users] Cross compiling for 32 bit from a 64 bit machine";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 25 13:56:41 2010" -->
<!-- isoreceived="20101025175641" -->
<!-- sent="Mon, 25 Oct 2010 17:56:36 +0000" -->
<!-- isosent="20101025175636" -->
<!-- name="saahil.in_at_[hidden]" -->
<!-- email="saahil.in_at_[hidden]" -->
<!-- subject="[OMPI users] Cross compiling for 32 bit from a 64 bit machine" -->
<!-- id="000e0cd152d4a43e1d049374b628_at_google.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Cross compiling for 32 bit from a 64 bit machine<br>
<strong>From:</strong> <a href="mailto:saahil.in_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Cross%20compiling%20for%2032%20bit%20from%20a%2064%20bit%20machine"><em>saahil.in_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-10-25 13:56:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14603.php">saahil.in_at_[hidden]: "[OMPI users] Fwd: Cross compiling for 32 bit from a 64 bit machine"</a>
<li><strong>Previous message:</strong> <a href="14601.php">Jeff Squyres: "Re: [OMPI users] Open MPI program cannot complete"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14603.php">saahil.in_at_[hidden]: "[OMPI users] Fwd: Cross compiling for 32 bit from a 64 bit machine"</a>
<li><strong>Reply:</strong> <a href="14603.php">saahil.in_at_[hidden]: "[OMPI users] Fwd: Cross compiling for 32 bit from a 64 bit machine"</a>
<li><strong>Reply:</strong> <a href="14606.php">Jeff Squyres: "Re: [OMPI users] Cross compiling for 32 bit from a 64 bit machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
I am a beginner using Open MPI to set up a simple Beowulf cluster of PCs  
<br>
for my Distributed Systems lab. My head node is my x86_64 architecture  
<br>
Fedora 12 machine. The rest of my nodes are i386 Fedora 13 machines. I  
<br>
understand that I need to compile Open MPI with CFLAGS=-m32 so that I can  
<br>
use -m32 flag to create a 32 bit compatible binary. I could not do this  
<br>
using yum install. So I am using the tarball for Open MPI 1.5.
<br>
my configure command is as follows -
<br>
<p>./configure --prefix=/home/wolf/openmpi/ CFLAGS=-m32 CXXFLAGS=-m32  
<br>
FFLAGS=-m32 FCFLAGS=-m32
<br>
<p>This works fine. However, while doing make I get the following errors -
<br>
<p>/usr/bin/ld: i386:x86-64 architecture of input file  
<br>
`../opal/libltdl/.libs/libltdlc.a(libltdlc_la-preopen.o)' is incompatible  
<br>
with i386 output
<br>
/usr/bin/ld: i386:x86-64 architecture of input file  
<br>
`../opal/libltdl/.libs/libltdlc.a(libltdlc_la-lt__alloc.o)' is incompatible  
<br>
with i386 output
<br>
/usr/bin/ld: i386:x86-64 architecture of input file  
<br>
`../opal/libltdl/.libs/libltdlc.a(libltdlc_la-lt_dlloader.o)' is  
<br>
incompatible with i386 output
<br>
/usr/bin/ld: i386:x86-64 architecture of input file  
<br>
`../opal/libltdl/.libs/libltdlc.a(libltdlc_la-lt_error.o)' is incompatible  
<br>
with i386 output
<br>
/usr/bin/ld: i386:x86-64 architecture of input file  
<br>
`../opal/libltdl/.libs/libltdlc.a(libltdlc_la-ltdl.o)' is incompatible with  
<br>
i386 output
<br>
/usr/bin/ld: i386:x86-64 architecture of input file  
<br>
`../opal/libltdl/.libs/libltdlc.a(libltdlc_la-slist.o)' is incompatible  
<br>
with i386 output
<br>
/usr/bin/ld: i386:x86-64 architecture of input file  
<br>
`../opal/libltdl/.libs/libltdlc.a(lt__strl.o)' is incompatible with i386  
<br>
output
<br>
/usr/bin/ld: i386:x86-64 architecture of input file  
<br>
`../opal/libltdl/.libs/libltdlc.a(libltdlcS.o)' is incompatible with i386  
<br>
output
<br>
/usr/bin/ld: i386:x86-64 architecture of input file  
<br>
`../opal/libltdl/.libs/libltdlc.a(dlopen.o)' is incompatible with i386  
<br>
output
<br>
/usr/bin/ld: i386:x86-64 architecture of input file  
<br>
`asm/.libs/libasm.a(atomic-asm.o)' is incompatible with i386 output
<br>
/usr/bin/ld: i386:x86-64 architecture of input file  
<br>
`event/.libs/libevent.a(signal.o)' is incompatible with i386 output
<br>
/usr/bin/ld: i386:x86-64 architecture of input file  
<br>
`event/.libs/libevent.a(epoll.o)' is incompatible with i386 output
<br>
/usr/bin/ld: i386:x86-64 architecture of input file  
<br>
`event/.libs/libevent.a(poll.o)' is incompatible with i386 output
<br>
/usr/bin/ld: i386:x86-64 architecture of input file  
<br>
`event/.libs/libevent.a(select.o)' is incompatible with i386 output
<br>
/usr/bin/ld: final link failed: Invalid operation
<br>
collect2: ld returned 1 exit status
<br>
make[2]: *** [libopen-pal.la] Error 1
<br>
make[2]: Leaving directory `/home/wolf/Downloads/openmpi-1.5/opal'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/home/wolf/Downloads/openmpi-1.5/opal'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>Any idea as to how to go around fixing this? Any help would be greatly  
<br>
regarded, since I'm supposed to meet a deadline, and half of my semester  
<br>
has been spent trying to get either LAM-MPI or Open MPI (which I was  
<br>
suggested I shift to) to work.
<br>
Thank you very much.
<br>
<p>Regards,
<br>
Saahil
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14602/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14603.php">saahil.in_at_[hidden]: "[OMPI users] Fwd: Cross compiling for 32 bit from a 64 bit machine"</a>
<li><strong>Previous message:</strong> <a href="14601.php">Jeff Squyres: "Re: [OMPI users] Open MPI program cannot complete"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14603.php">saahil.in_at_[hidden]: "[OMPI users] Fwd: Cross compiling for 32 bit from a 64 bit machine"</a>
<li><strong>Reply:</strong> <a href="14603.php">saahil.in_at_[hidden]: "[OMPI users] Fwd: Cross compiling for 32 bit from a 64 bit machine"</a>
<li><strong>Reply:</strong> <a href="14606.php">Jeff Squyres: "Re: [OMPI users] Cross compiling for 32 bit from a 64 bit machine"</a>
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
