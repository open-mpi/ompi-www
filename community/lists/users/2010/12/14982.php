<?
$subject_val = "Re: [OMPI users] Scalability issue";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  2 17:41:02 2010" -->
<!-- isoreceived="20101202224102" -->
<!-- sent="Thu, 02 Dec 2010 17:40:53 -0500" -->
<!-- isosent="20101202224053" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Scalability issue" -->
<!-- id="4CF82075.1000500_at_ldeo.columbia.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="C807CBDE-708C-4189-92BF-FFF7596ECE9A_at_cisco.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-02 17:40:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14983.php">Martin Siegert: "Re: [OMPI users] Scalability issue"</a>
<li><strong>Previous message:</strong> <a href="14981.php">David Singleton: "Re: [OMPI users] Open MPI vs IBM MPI performance help"</a>
<li><strong>In reply to:</strong> <a href="14980.php">Jeff Squyres: "Re: [OMPI users] Scalability issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14983.php">Martin Siegert: "Re: [OMPI users] Scalability issue"</a>
<li><strong>Reply:</strong> <a href="14983.php">Martin Siegert: "Re: [OMPI users] Scalability issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All
<br>
<p>I wonder if configuring OpenMPI while
<br>
forcing the default types to non-default values
<br>
(-fdefault-integer-8 -fdefault-real-8) might have
<br>
something to do with the segmentation fault.
<br>
Would this be effective, i.e., actually make the
<br>
the sizes of MPI_INTEGER/MPI_INT and MPI_REAL/MPI_FLOAT bigger,
<br>
or just elusive?
<br>
<p>There were some recent discussions here about MPI
<br>
limiting counts to MPI_INTEGER.
<br>
Since Benjamin said he &quot;had to raise the number of data structures&quot;,
<br>
which eventually led to the the error,
<br>
I wonder if he is inadvertently flipping to negative integer
<br>
side of the 32-bit universe (i.e. &gt;= 2**31), as was reported here by 
<br>
other list subscribers a few times.
<br>
<p>Anyway, segmentation fault can come from many different places,
<br>
this is just a guess.
<br>
<p>Gus Correa
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Do you get a corefile?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It looks like you're calling MPI_RECV in Fortran and then it segv's.  This is *likely* because you're either passing a bad parameter or your buffer isn't big enough.  Can you double check all your parameters?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately, there's no line numbers printed in the stack trace, so it's not possible to tell exactly where in the ob1 PML it's dying (i.e., so we can't see exactly what it's doing to cause the segv).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 2, 2010, at 9:36 AM, Benjamin Toueg wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am using DRAGON, a neutronic simulation code in FORTRAN77 that has its own datastructures. I added a module to send these data structures thanks to MPI_SEND / MPI_RECEIVE, and everything worked perfectly for a while.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Then I had to raise the number of data structures to be sent up to a point where my cluster has this bug :
</span><br>
<span class="quotelev2">&gt;&gt; *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; Failing at address: 0x2c2579fc0
</span><br>
<span class="quotelev2">&gt;&gt; [ 0] /lib/libpthread.so.0 [0x7f52d2930410]
</span><br>
<span class="quotelev2">&gt;&gt; [ 1] /home/toueg/openmpi/lib/openmpi/mca_pml_ob1.so [0x7f52d153fe03]
</span><br>
<span class="quotelev2">&gt;&gt; [ 2] /home/toueg/openmpi/lib/libmpi.so.0(PMPI_Recv+0x2d2) [0x7f52d3504a1e]
</span><br>
<span class="quotelev2">&gt;&gt; [ 3] /home/toueg/openmpi/lib/libmpi_f77.so.0(pmpi_recv_+0x10e) [0x7f52d36cf9c6]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How can I make this error more explicit ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I use the following configuration of openmpi-1.4.3 :
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --enable-debug --prefix=/home/toueg/openmpi CXX=g++ CC=gcc F77=gfortran FC=gfortran FLAGS=&quot;-m64 -fdefault-integer-8 -fdefault-real-8 -fdefault-double-8&quot; FCFLAGS=&quot;-m64 -fdefault-integer-8 -fdefault-real-8 -fdefault-double-8&quot; --disable-mpi-f90
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is the output of mpif77 -v :
</span><br>
<span class="quotelev2">&gt;&gt; mpif77 for 1.2.7 (release) of : 2005/11/04 11:54:51
</span><br>
<span class="quotelev2">&gt;&gt; Driving: f77 -L/usr/lib/mpich-mpd/lib -v -lmpich-p4mpd -lpthread -lrt -lfrtbegin -lg2c -lm -shared-libgcc
</span><br>
<span class="quotelev2">&gt;&gt; Lecture des sp&#195;&#169;cification &#195;&#160; partir de /usr/lib/gcc/x86_64-linux-gnu/3.4.6/specs
</span><br>
<span class="quotelev2">&gt;&gt; Configur&#195;&#169; avec: ../src/configure -v --enable-languages=c,c++,f77,pascal --prefix=/usr --libexecdir=/usr/lib --with-gxx-include-dir=/usr/include/c++/3.4 --enable-shared --with-system-zlib --enable-nls --without-included-gettext --program-suffix=-3.4 --enable-__cxa_atexit --enable-clocale=gnu --enable-libstdcxx-debug x86_64-linux-gnu
</span><br>
<span class="quotelev2">&gt;&gt; Mod&#195;&#168;le de thread: posix
</span><br>
<span class="quotelev2">&gt;&gt; version gcc 3.4.6 (Debian 3.4.6-5)
</span><br>
<span class="quotelev2">&gt;&gt;  /usr/lib/gcc/x86_64-linux-gnu/3.4.6/collect2 --eh-frame-hdr -m elf_x86_64 -dynamic-linker /lib64/ld-linux-x86-64.so.2 /usr/lib/gcc/x86_64-linux-gnu/3.4.6/../../../../lib/crt1.o /usr/lib/gcc/x86_64-linux-gnu/3.4.6/../../../../lib/crti.o /usr/lib/gcc/x86_64-linux-gnu/3.4.6/crtbegin.o -L/usr/lib/mpich-mpd/lib -L/usr/lib/gcc/x86_64-linux-gnu/3.4.6 -L/usr/lib/gcc/x86_64-linux-gnu/3.4.6 -L/usr/lib/gcc/x86_64-linux-gnu/3.4.6/../../../../lib -L/usr/lib/gcc/x86_64-linux-gnu/3.4.6/../../.. -L/lib/../lib -L/usr/lib/../lib -lmpich-p4mpd -lpthread -lrt -lfrtbegin -lg2c -lm -lgcc_s -lgcc -lc -lgcc_s -lgcc /usr/lib/gcc/x86_64-linux-gnu/3.4.6/crtend.o /usr/lib/gcc/x86_64-linux-gnu/3.4.6/../../../../lib/crtn.o
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/x86_64-linux-gnu/3.4.6/../../../../lib/libfrtbegin.a(frtbegin.o): dans la fonction &#226;&#150;&#146; main &#226;&#150;&#146;:
</span><br>
<span class="quotelev2">&gt;&gt; (.text+0x1e): r&#195;&#169;f&#195;&#169;rence ind&#195;&#169;finie vers &#226;&#150;&#146; MAIN__ &#226;&#150;&#146;
</span><br>
<span class="quotelev2">&gt;&gt; collect2: ld a retourn&#195;&#169; 1 code d'&#195;&#169;tat d'ex&#195;&#169;cution
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Benjamin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14983.php">Martin Siegert: "Re: [OMPI users] Scalability issue"</a>
<li><strong>Previous message:</strong> <a href="14981.php">David Singleton: "Re: [OMPI users] Open MPI vs IBM MPI performance help"</a>
<li><strong>In reply to:</strong> <a href="14980.php">Jeff Squyres: "Re: [OMPI users] Scalability issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14983.php">Martin Siegert: "Re: [OMPI users] Scalability issue"</a>
<li><strong>Reply:</strong> <a href="14983.php">Martin Siegert: "Re: [OMPI users] Scalability issue"</a>
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
