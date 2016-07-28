<?
$subject_val = "Re: [OMPI users] Open MPI on Cray XT4";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 16 18:19:15 2008" -->
<!-- isoreceived="20080716221915" -->
<!-- sent="Wed, 16 Jul 2008 18:19:08 -0400 (EDT)" -->
<!-- isosent="20080716221908" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI on Cray XT4" -->
<!-- id="Pine.LNX.4.64.0807161810210.23051_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="487E6405.9090201_at_cray.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI on Cray XT4<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-16 18:19:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6089.php">Robert Kubrick: "[OMPI users] MPI/RT"</a>
<li><strong>Previous message:</strong> <a href="6087.php">Adam Jundt: "[OMPI users] Open MPI on Cray XT4"</a>
<li><strong>In reply to:</strong> <a href="6087.php">Adam Jundt: "[OMPI users] Open MPI on Cray XT4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 16 Jul 2008, Adam Jundt wrote:
<br>
<p><span class="quotelev1">&gt; I have been working on getting a nightly tarball of Open MPI to build on
</span><br>
<span class="quotelev1">&gt; a Cray XT4 system running CNL. I found the following post on the forum:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2007/09/4059.php">http://www.open-mpi.org/community/lists/users/2007/09/4059.php</a>. I had to
</span><br>
<span class="quotelev1">&gt; modify the configure options a little (added another include directory
</span><br>
<span class="quotelev1">&gt; to CFLAGS, and inserted the '--disable-mpi-f77' flag) to get it to build
</span><br>
<span class="quotelev1">&gt; for me, here is what I used:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure CC=/opt/xt-pe/default/bin/snos64/linux-pgcc
</span><br>
<span class="quotelev1">&gt; CXX=/opt/xt-pe/default/bin/snos64/linux-pgCC
</span><br>
<span class="quotelev1">&gt; F77=/opt/xt-pe/default/bin/snos64/linux-pgftn
</span><br>
<span class="quotelev1">&gt; FC=/opt/xt-pe/default/bin/snos64/linux-pgf90
</span><br>
<span class="quotelev1">&gt; CFLAGS=&quot;-I/opt/xt-pe/default/include/
</span><br>
<span class="quotelev1">&gt; -I/opt/xt-catamount/default/catamount/linux/include/&quot;
</span><br>
<span class="quotelev1">&gt; CPPFLAGS=-I/opt/xt-pe/default/include/
</span><br>
<span class="quotelev1">&gt; FCFLAGS=-I/opt/xt-pe/default/include/
</span><br>
<span class="quotelev1">&gt; FFLAGS=-I/opt/xt-pe/default/include/
</span><br>
<span class="quotelev1">&gt; LDFLAGS=-L/opt/xt-mpt/default/lib/snos64/ LIBS=&quot;-lpct -lalpslli
</span><br>
<span class="quotelev1">&gt; -lalpsutil&quot; --build=x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt; --host=x86_64-cray-linux-gnu
</span><br>
<span class="quotelev1">&gt; --with-platform=/lus/nid00008/jundt/openmpi-1.3a1r18788/contrib/platform/cray_xt3_romio
</span><br>
<span class="quotelev1">&gt; --with-io-romio-flags=--disable-aio build_alias=x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt; host_alias=x86_64-cray-linux-gnu --enable-ltdl-convenience
</span><br>
<span class="quotelev1">&gt; --no-recursion --disable-mpi-f77 --prefix=~/OpenMPI
</span><br>
<p>I don't think it's a huge deal, but I think things will be a bit more sane 
<br>
if you change the --with-platform argument to cray_xt_cnl_romio instead of 
<br>
cray_xt3_romio (which is really targeting Catamount instead of CNL).  One 
<br>
of the ORNL guys can probably be more helpful than I can here, as I'm only 
<br>
familiar with building on Red Storm / Catamount.
<br>
<p><span class="quotelev1">&gt; ~/OpenMPI/lib/libopen-pal.a(timer_catamount_component.o): In function
</span><br>
<span class="quotelev1">&gt; `opal_timer_catamount_open':
</span><br>
<span class="quotelev1">&gt; timer_catamount_component.c:(.text+0x6): undefined reference to `__cpu_mhz'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looking into timer_catamount_component.c, __cpu_mhz is defined within
</span><br>
<span class="quotelev1">&gt; the &lt;catamount/dclock.h&gt; file (which it should have already pulled in).
</span><br>
<span class="quotelev1">&gt; I realize that this is a very specified question, but I was curious if
</span><br>
<span class="quotelev1">&gt; anyone else had successfully gotten Open MPI to work on a similar
</span><br>
<span class="quotelev1">&gt; system, and if so, what configure options were used? If not, is anyone
</span><br>
<span class="quotelev1">&gt; aware of how to circumvent the problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By the way, I did try modifying the file timer_catamount_component.c to
</span><br>
<span class="quotelev1">&gt; not reference __cpu_mhz to see the result, and the program is able to
</span><br>
<span class="quotelev1">&gt; successfully compile, but hangs upon execution, i.e.:
</span><br>
<p>That's a weird result.  The configure test for the timer catamount 
<br>
component checks to see if __cpu_mhz is defined when linking.  Can you 
<br>
send me (off list is probably best) the config.log generated by configure? 
<br>
That component was added just to the trunk/v1.3 branch in the last month, 
<br>
which is probably why no one on CNL noticed yet (obviously it works great 
<br>
on Catamount).  I'm not really familiar with CNL -- does 
<br>
catamount/dclock.h exist on a standard CNL setup?
<br>
<p><span class="quotelev2">&gt;&gt; ~/OpenMPI/bin/mpicc test.c
</span><br>
<span class="quotelev1">&gt; ~/OpenMPI/lib/libopen-rte.a(session_dir.o): In function
</span><br>
<span class="quotelev1">&gt; `orte_session_dir_get_name':
</span><br>
<span class="quotelev1">&gt; session_dir.c:(.text+0x7e): warning: Using 'getpwuid' in statically
</span><br>
<span class="quotelev1">&gt; linked applications requires at runtime the shared libraries from the
</span><br>
<span class="quotelev1">&gt; glibc version used for linking
</span><br>
<span class="quotelev1">&gt; ~/OpenMPI/lib/libmpi.a(btl_tcp_component.o): In function
</span><br>
<span class="quotelev1">&gt; `mca_btl_tcp_component_create_listen':
</span><br>
<span class="quotelev1">&gt; btl_tcp_component.c:(.text+0x11c0): warning: Using 'getaddrinfo' in
</span><br>
<span class="quotelev1">&gt; statically linked applications requires at runtime the shared libraries
</span><br>
<span class="quotelev1">&gt; from the glibc version used for linking
</span><br>
<span class="quotelev2">&gt;&gt; aprun -n 2 ./a.out
</span><br>
<span class="quotelev1">&gt; ... program hangs...
</span><br>
<p>I'm afraid I can't help a whole lot here.  HOwever, there are some 
<br>
differences between how Open MPI initializes Portals between CNL and 
<br>
Catamount.  Since you configured for Catamount, it's possible that's the 
<br>
cause of the hang.  Again, the ORNL people would probably know better than 
<br>
I would.
<br>
<p><p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6089.php">Robert Kubrick: "[OMPI users] MPI/RT"</a>
<li><strong>Previous message:</strong> <a href="6087.php">Adam Jundt: "[OMPI users] Open MPI on Cray XT4"</a>
<li><strong>In reply to:</strong> <a href="6087.php">Adam Jundt: "[OMPI users] Open MPI on Cray XT4"</a>
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
