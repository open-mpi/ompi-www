<?
$subject_val = "Re: [OMPI users] Scalability issue";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  2 14:50:52 2010" -->
<!-- isoreceived="20101202195052" -->
<!-- sent="Thu, 2 Dec 2010 14:50:47 -0500" -->
<!-- isosent="20101202195047" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Scalability issue" -->
<!-- id="C807CBDE-708C-4189-92BF-FFF7596ECE9A_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="AANLkTikd3eRSQ2Ftxbeo-eWVb8EO4KP2qCnfdv2BBoHE_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Scalability issue<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-02 14:50:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14981.php">David Singleton: "Re: [OMPI users] Open MPI vs IBM MPI performance help"</a>
<li><strong>Previous message:</strong> <a href="14979.php">Price, Brian M (N-KCI): "Re: [OMPI users] Open MPI vs IBM MPI performance help"</a>
<li><strong>In reply to:</strong> <a href="14976.php">Benjamin Toueg: "[OMPI users] Scalability issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14982.php">Gus Correa: "Re: [OMPI users] Scalability issue"</a>
<li><strong>Reply:</strong> <a href="14982.php">Gus Correa: "Re: [OMPI users] Scalability issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Do you get a corefile?
<br>
<p>It looks like you're calling MPI_RECV in Fortran and then it segv's.  This is *likely* because you're either passing a bad parameter or your buffer isn't big enough.  Can you double check all your parameters?
<br>
<p>Unfortunately, there's no line numbers printed in the stack trace, so it's not possible to tell exactly where in the ob1 PML it's dying (i.e., so we can't see exactly what it's doing to cause the segv).
<br>
<p><p><p>On Dec 2, 2010, at 9:36 AM, Benjamin Toueg wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using DRAGON, a neutronic simulation code in FORTRAN77 that has its own datastructures. I added a module to send these data structures thanks to MPI_SEND / MPI_RECEIVE, and everything worked perfectly for a while.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then I had to raise the number of data structures to be sent up to a point where my cluster has this bug :
</span><br>
<span class="quotelev1">&gt; *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; Failing at address: 0x2c2579fc0
</span><br>
<span class="quotelev1">&gt; [ 0] /lib/libpthread.so.0 [0x7f52d2930410]
</span><br>
<span class="quotelev1">&gt; [ 1] /home/toueg/openmpi/lib/openmpi/mca_pml_ob1.so [0x7f52d153fe03]
</span><br>
<span class="quotelev1">&gt; [ 2] /home/toueg/openmpi/lib/libmpi.so.0(PMPI_Recv+0x2d2) [0x7f52d3504a1e]
</span><br>
<span class="quotelev1">&gt; [ 3] /home/toueg/openmpi/lib/libmpi_f77.so.0(pmpi_recv_+0x10e) [0x7f52d36cf9c6]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How can I make this error more explicit ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I use the following configuration of openmpi-1.4.3 :
</span><br>
<span class="quotelev1">&gt; ./configure --enable-debug --prefix=/home/toueg/openmpi CXX=g++ CC=gcc F77=gfortran FC=gfortran FLAGS=&quot;-m64 -fdefault-integer-8 -fdefault-real-8 -fdefault-double-8&quot; FCFLAGS=&quot;-m64 -fdefault-integer-8 -fdefault-real-8 -fdefault-double-8&quot; --disable-mpi-f90
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the output of mpif77 -v :
</span><br>
<span class="quotelev1">&gt; mpif77 for 1.2.7 (release) of : 2005/11/04 11:54:51
</span><br>
<span class="quotelev1">&gt; Driving: f77 -L/usr/lib/mpich-mpd/lib -v -lmpich-p4mpd -lpthread -lrt -lfrtbegin -lg2c -lm -shared-libgcc
</span><br>
<span class="quotelev1">&gt; Lecture des sp&#195;&#169;cification &#195;&#160; partir de /usr/lib/gcc/x86_64-linux-gnu/3.4.6/specs
</span><br>
<span class="quotelev1">&gt; Configur&#195;&#169; avec: ../src/configure -v --enable-languages=c,c++,f77,pascal --prefix=/usr --libexecdir=/usr/lib --with-gxx-include-dir=/usr/include/c++/3.4 --enable-shared --with-system-zlib --enable-nls --without-included-gettext --program-suffix=-3.4 --enable-__cxa_atexit --enable-clocale=gnu --enable-libstdcxx-debug x86_64-linux-gnu
</span><br>
<span class="quotelev1">&gt; Mod&#195;&#168;le de thread: posix
</span><br>
<span class="quotelev1">&gt; version gcc 3.4.6 (Debian 3.4.6-5)
</span><br>
<span class="quotelev1">&gt;  /usr/lib/gcc/x86_64-linux-gnu/3.4.6/collect2 --eh-frame-hdr -m elf_x86_64 -dynamic-linker /lib64/ld-linux-x86-64.so.2 /usr/lib/gcc/x86_64-linux-gnu/3.4.6/../../../../lib/crt1.o /usr/lib/gcc/x86_64-linux-gnu/3.4.6/../../../../lib/crti.o /usr/lib/gcc/x86_64-linux-gnu/3.4.6/crtbegin.o -L/usr/lib/mpich-mpd/lib -L/usr/lib/gcc/x86_64-linux-gnu/3.4.6 -L/usr/lib/gcc/x86_64-linux-gnu/3.4.6 -L/usr/lib/gcc/x86_64-linux-gnu/3.4.6/../../../../lib -L/usr/lib/gcc/x86_64-linux-gnu/3.4.6/../../.. -L/lib/../lib -L/usr/lib/../lib -lmpich-p4mpd -lpthread -lrt -lfrtbegin -lg2c -lm -lgcc_s -lgcc -lc -lgcc_s -lgcc /usr/lib/gcc/x86_64-linux-gnu/3.4.6/crtend.o /usr/lib/gcc/x86_64-linux-gnu/3.4.6/../../../../lib/crtn.o
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-linux-gnu/3.4.6/../../../../lib/libfrtbegin.a(frtbegin.o): dans la fonction &#226;&#150;&#146; main &#226;&#150;&#146;:
</span><br>
<span class="quotelev1">&gt; (.text+0x1e): r&#195;&#169;f&#195;&#169;rence ind&#195;&#169;finie vers &#226;&#150;&#146; MAIN__ &#226;&#150;&#146;
</span><br>
<span class="quotelev1">&gt; collect2: ld a retourn&#195;&#169; 1 code d'&#195;&#169;tat d'ex&#195;&#169;cution
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Benjamin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="14981.php">David Singleton: "Re: [OMPI users] Open MPI vs IBM MPI performance help"</a>
<li><strong>Previous message:</strong> <a href="14979.php">Price, Brian M (N-KCI): "Re: [OMPI users] Open MPI vs IBM MPI performance help"</a>
<li><strong>In reply to:</strong> <a href="14976.php">Benjamin Toueg: "[OMPI users] Scalability issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14982.php">Gus Correa: "Re: [OMPI users] Scalability issue"</a>
<li><strong>Reply:</strong> <a href="14982.php">Gus Correa: "Re: [OMPI users] Scalability issue"</a>
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
