<?
$subject_val = "[OMPI devel] Adding a BTL module implementing poll()";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct 31 04:54:20 2010" -->
<!-- isoreceived="20101031085420" -->
<!-- sent="Sun, 31 Oct 2010 10:54:14 +0200" -->
<!-- isosent="20101031085414" -->
<!-- name="Alex Margolin" -->
<!-- email="alex.margolin_at_[hidden]" -->
<!-- subject="[OMPI devel] Adding a BTL module implementing poll()" -->
<!-- id="AANLkTinB1T8JFDH4GLCnoJJuMVa+yO+2RRL78KFt1Bb3_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Adding a BTL module implementing poll()<br>
<strong>From:</strong> Alex Margolin (<em>alex.margolin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-31 04:54:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/11/8648.php">Jeff Squyres: "Re: [OMPI devel] Adding a BTL module implementing poll()"</a>
<li><strong>Previous message:</strong> <a href="8646.php">N.M. Maclaren: "Re: [OMPI devel] Restore sanity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/11/8648.php">Jeff Squyres: "Re: [OMPI devel] Adding a BTL module implementing poll()"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/11/8648.php">Jeff Squyres: "Re: [OMPI devel] Adding a BTL module implementing poll()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I'm developing a new module under for BTL component to utilize an
<br>
existing distributed computing software in our lab.
<br>
I decided to write a TCP-like interface (implementing socket(),
<br>
connect(), accept(), send(), recv(), etc.) and then copy and modify
<br>
the existing BTL TCP module to create my own. I've also given
<br>
consideration to using LD_PRELOAD, but haven't gotten to it yet.
<br>
<p>Currently, i'm having trouble with the the poll() syscall. Since the
<br>
I'm using other, &quot;non-linux&quot; sockets (no valid FD) with my own poll
<br>
implementation on them, I tried to replace the poll() in
<br>
opal/event/poll.c with a call to my poll in ompi/mca/btl/... and
<br>
failed to build open-mpi.
<br>
Since my poll needs to use the internal data structures of my module,
<br>
I did the following steps:
<br>
1. Create a sym-link to my .h file in opal/event/
<br>
2. in poll.c include my .h file and change the poll() syscall to call
<br>
my implementation (same interface).
<br>
3. in Makefile.am added my .h file under EXTRA_DIST, my .lo file under
<br>
libevent_la_DEPENDENCIES and my module path under ompidir.
<br>
4. tried to compile (x64): ./autogen.sh ; ./configure CFLAGS=-m64
<br>
CXXFLAGS=-m64 FFLAGS=-m64 FCFLAGS=-m64 --prefix /home/alex/huji/mpi/ ;
<br>
make ; make install
<br>
5. failed miserably:
<br>
<p>Making install in tools/wrappers
<br>
make[2]: Entering directory `/home/alex/huji/openmpi-1.4.1/opal/tools/wrappers'
<br>
/bin/sh ../../../libtool --tag=CC   --mode=link gcc  -O3 -DNDEBUG -m64
<br>
-finline-functions -fno-strict-aliasing -pthread -fvisibility=hidden
<br>
-export-dynamic   -o opal_wrapper opal_wrapper.o
<br>
../../../opal/libopen-pal.la -lnsl -lutil  -lm
<br>
libtool: link: gcc -O3 -DNDEBUG -m64 -finline-functions
<br>
-fno-strict-aliasing -pthread -fvisibility=hidden -o
<br>
.libs/opal_wrapper opal_wrapper.o -Wl,--export-dynamic
<br>
../../../opal/.libs/libopen-pal.so -ldl -lnsl -lutil -lm -pthread
<br>
-Wl,-rpath -Wl,/home/alex/huji/mpi/lib
<br>
../../../opal/.libs/libopen-pal.so: undefined reference to `mos_poll'
<br>
collect2: ld returned 1 exit status
<br>
make[2]: *** [opal_wrapper] Error 1
<br>
make[2]: Leaving directory `/home/alex/huji/openmpi-1.4.1/opal/tools/wrappers'
<br>
make[1]: *** [install-recursive] Error 1
<br>
make[1]: Leaving directory `/home/alex/huji/openmpi-1.4.1/opal'
<br>
make: *** [install-recursive] Error 1
<br>
<p>Can you please help me build open-mpi with my module, or suggest a
<br>
better way to do this?
<br>
Thanks,
<br>
Alex
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/11/8648.php">Jeff Squyres: "Re: [OMPI devel] Adding a BTL module implementing poll()"</a>
<li><strong>Previous message:</strong> <a href="8646.php">N.M. Maclaren: "Re: [OMPI devel] Restore sanity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/11/8648.php">Jeff Squyres: "Re: [OMPI devel] Adding a BTL module implementing poll()"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/11/8648.php">Jeff Squyres: "Re: [OMPI devel] Adding a BTL module implementing poll()"</a>
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
