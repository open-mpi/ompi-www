<?
$subject_val = "[OMPI users] Open MPI on Cray XT4";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 16 17:11:42 2008" -->
<!-- isoreceived="20080716211142" -->
<!-- sent="Wed, 16 Jul 2008 16:11:33 -0500" -->
<!-- isosent="20080716211133" -->
<!-- name="Adam Jundt" -->
<!-- email="jundt_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI on Cray XT4" -->
<!-- id="487E6405.9090201_at_cray.com" -->
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
<strong>Subject:</strong> [OMPI users] Open MPI on Cray XT4<br>
<strong>From:</strong> Adam Jundt (<em>jundt_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-16 17:11:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6088.php">Brian W. Barrett: "Re: [OMPI users] Open MPI on Cray XT4"</a>
<li><strong>Previous message:</strong> <a href="6086.php">Daniel Felix Ferber: "[OMPI users] Getting default hostfile on Open MPI 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6088.php">Brian W. Barrett: "Re: [OMPI users] Open MPI on Cray XT4"</a>
<li><strong>Reply:</strong> <a href="6088.php">Brian W. Barrett: "Re: [OMPI users] Open MPI on Cray XT4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I have been working on getting a nightly tarball of Open MPI to build on
<br>
a Cray XT4 system running CNL. I found the following post on the forum:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2007/09/4059.php">http://www.open-mpi.org/community/lists/users/2007/09/4059.php</a>. I had to
<br>
modify the configure options a little (added another include directory
<br>
to CFLAGS, and inserted the '--disable-mpi-f77' flag) to get it to build
<br>
for me, here is what I used:
<br>
<p>./configure CC=/opt/xt-pe/default/bin/snos64/linux-pgcc
<br>
CXX=/opt/xt-pe/default/bin/snos64/linux-pgCC
<br>
F77=/opt/xt-pe/default/bin/snos64/linux-pgftn
<br>
FC=/opt/xt-pe/default/bin/snos64/linux-pgf90
<br>
CFLAGS=&quot;-I/opt/xt-pe/default/include/
<br>
-I/opt/xt-catamount/default/catamount/linux/include/&quot;
<br>
CPPFLAGS=-I/opt/xt-pe/default/include/
<br>
FCFLAGS=-I/opt/xt-pe/default/include/
<br>
FFLAGS=-I/opt/xt-pe/default/include/
<br>
LDFLAGS=-L/opt/xt-mpt/default/lib/snos64/ LIBS=&quot;-lpct -lalpslli
<br>
-lalpsutil&quot; --build=x86_64-unknown-linux-gnu
<br>
--host=x86_64-cray-linux-gnu
<br>
--with-platform=/lus/nid00008/jundt/openmpi-1.3a1r18788/contrib/platform/cray_xt3_romio
<br>
--with-io-romio-flags=--disable-aio build_alias=x86_64-unknown-linux-gnu
<br>
host_alias=x86_64-cray-linux-gnu --enable-ltdl-convenience
<br>
--no-recursion --disable-mpi-f77 --prefix=~/OpenMPI
<br>
<p>It builds without error (minus a warning that it doesn't recognize the
<br>
--enable-ltdl-convenience flag). The problem comes when trying to
<br>
compile a program and link with Open MPI. Here is what I get:
<br>
<p><span class="quotelev1">&gt; ~/OpenMPI/bin/mpicc test.c
</span><br>
~/OpenMPI/lib/libopen-rte.a(session_dir.o): In function
<br>
`orte_session_dir_get_name':
<br>
session_dir.c:(.text+0x7e): warning: Using 'getpwuid' in statically
<br>
linked applications requires at runtime the shared libraries from the
<br>
glibc version used for linking
<br>
~/OpenMPI/lib/libmpi.a(btl_tcp_component.o): In function
<br>
`mca_btl_tcp_component_create_listen':
<br>
btl_tcp_component.c:(.text+0x11c0): warning: Using 'getaddrinfo' in
<br>
statically linked applications requires at runtime the shared libraries
<br>
from the glibc version used for linking
<br>
~/OpenMPI/lib/libopen-pal.a(timer_catamount_component.o): In function
<br>
`opal_timer_catamount_open':
<br>
timer_catamount_component.c:(.text+0x6): undefined reference to `__cpu_mhz'
<br>
<p>Looking into timer_catamount_component.c, __cpu_mhz is defined within
<br>
the &lt;catamount/dclock.h&gt; file (which it should have already pulled in).
<br>
I realize that this is a very specified question, but I was curious if
<br>
anyone else had successfully gotten Open MPI to work on a similar
<br>
system, and if so, what configure options were used? If not, is anyone
<br>
aware of how to circumvent the problem?
<br>
<p>By the way, I did try modifying the file timer_catamount_component.c to
<br>
not reference __cpu_mhz to see the result, and the program is able to
<br>
successfully compile, but hangs upon execution, i.e.:
<br>
<p><span class="quotelev1">&gt; ~/OpenMPI/bin/mpicc test.c
</span><br>
~/OpenMPI/lib/libopen-rte.a(session_dir.o): In function
<br>
`orte_session_dir_get_name':
<br>
session_dir.c:(.text+0x7e): warning: Using 'getpwuid' in statically
<br>
linked applications requires at runtime the shared libraries from the
<br>
glibc version used for linking
<br>
~/OpenMPI/lib/libmpi.a(btl_tcp_component.o): In function
<br>
`mca_btl_tcp_component_create_listen':
<br>
btl_tcp_component.c:(.text+0x11c0): warning: Using 'getaddrinfo' in
<br>
statically linked applications requires at runtime the shared libraries
<br>
from the glibc version used for linking
<br>
<span class="quotelev1">&gt; aprun -n 2 ./a.out
</span><br>
... program hangs...
<br>
<p>Thanks!
<br>
Adam
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6088.php">Brian W. Barrett: "Re: [OMPI users] Open MPI on Cray XT4"</a>
<li><strong>Previous message:</strong> <a href="6086.php">Daniel Felix Ferber: "[OMPI users] Getting default hostfile on Open MPI 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6088.php">Brian W. Barrett: "Re: [OMPI users] Open MPI on Cray XT4"</a>
<li><strong>Reply:</strong> <a href="6088.php">Brian W. Barrett: "Re: [OMPI users] Open MPI on Cray XT4"</a>
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
