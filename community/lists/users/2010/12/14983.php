<?
$subject_val = "Re: [OMPI users] Scalability issue";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  2 20:44:52 2010" -->
<!-- isoreceived="20101203014452" -->
<!-- sent="Thu, 2 Dec 2010 17:44:47 -0800" -->
<!-- isosent="20101203014447" -->
<!-- name="Martin Siegert" -->
<!-- email="siegert_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Scalability issue" -->
<!-- id="20101203014447.GG14328_at_stikine.sfu.ca" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4CF82075.1000500_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Martin Siegert (<em>siegert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-02 20:44:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14984.php">Mathieu Gontier: "[OMPI users] difference between single and double precision"</a>
<li><strong>Previous message:</strong> <a href="14982.php">Gus Correa: "Re: [OMPI users] Scalability issue"</a>
<li><strong>In reply to:</strong> <a href="14982.php">Gus Correa: "Re: [OMPI users] Scalability issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14995.php">Benjamin Toueg: "Re: [OMPI users] Scalability issue"</a>
<li><strong>Reply:</strong> <a href="14995.php">Benjamin Toueg: "Re: [OMPI users] Scalability issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>just to expand on this guess ...
<br>
<p>On Thu, Dec 02, 2010 at 05:40:53PM -0500, Gus Correa wrote:
<br>
<span class="quotelev1">&gt; Hi All
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I wonder if configuring OpenMPI while
</span><br>
<span class="quotelev1">&gt; forcing the default types to non-default values
</span><br>
<span class="quotelev1">&gt; (-fdefault-integer-8 -fdefault-real-8) might have
</span><br>
<span class="quotelev1">&gt; something to do with the segmentation fault.
</span><br>
<span class="quotelev1">&gt; Would this be effective, i.e., actually make the
</span><br>
<span class="quotelev1">&gt; the sizes of MPI_INTEGER/MPI_INT and MPI_REAL/MPI_FLOAT bigger,
</span><br>
<span class="quotelev1">&gt; or just elusive?
</span><br>
<p>I believe what happens is that this mostly affects the fortran
<br>
wrapper routines and the way Fortran variables are mapped to C:
<br>
<p>MPI_INTEGER -&gt; MPI_LONG
<br>
MPI_FLOAT   -&gt; MPI_DOUBLE
<br>
MPI_DOUBLE_PRECISION -&gt; MPI_DOUBLE
<br>
<p>In that respect I believe that the -fdefault-real-8 option is harmless,
<br>
i.e., it does the expected thing.
<br>
But the -fdefault-integer-8 options ought to be highly dangerous:
<br>
It works for integer variables that are used as &quot;buffer&quot; arguments
<br>
in MPI statements, but I would assume that this does not work for
<br>
&quot;count&quot; and similar arguments.
<br>
Example:
<br>
<p>integer, allocatable :: buf(*,*)
<br>
integer i, count, dest, tag, mpierr
<br>
<p>i = 32768
<br>
i2 = 2*i
<br>
allocate(buf(i,i2))
<br>
count = i*i2
<br>
buf = 1
<br>
call MPI_Send(buf, count, MPI_INTEGER, dest, tag, MPI_COMM_WORLD, mpierr)
<br>
<p>Now count is 2^31 which overflows a 32bit integer.
<br>
The MPI standard requires that count is a 32bit integer, correct?
<br>
Thus while buf gets the type MPI_LONG, count remains an int.
<br>
Is this interpretation correct? If it is, then you are calling
<br>
MPI_Send with a count argument of -2147483648.
<br>
Which could result in a segmentation fault.
<br>
<p>Cheers,
<br>
Martin
<br>
<p><pre>
-- 
Martin Siegert
Head, Research Computing
WestGrid/ComputeCanada Site Lead
IT Services                                phone: 778 782-4691
Simon Fraser University                    fax:   778 782-4242
Burnaby, British Columbia                  email: siegert_at_[hidden]
Canada  V5A 1S6
&gt; There were some recent discussions here about MPI
&gt; limiting counts to MPI_INTEGER.
&gt; Since Benjamin said he &quot;had to raise the number of data structures&quot;,
&gt; which eventually led to the the error,
&gt; I wonder if he is inadvertently flipping to negative integer
&gt; side of the 32-bit universe (i.e. &gt;= 2**31), as was reported here by
&gt; other list subscribers a few times.
&gt; 
&gt; Anyway, segmentation fault can come from many different places,
&gt; this is just a guess.
&gt; 
&gt; Gus Correa
&gt; 
&gt; Jeff Squyres wrote:
&gt; &gt;Do you get a corefile?
&gt; &gt;
&gt; &gt;It looks like you're calling MPI_RECV in Fortran and then it segv's.  This is *likely* because you're either passing a bad parameter or your buffer isn't big enough.  Can you double check all your parameters?
&gt; &gt;
&gt; &gt;Unfortunately, there's no line numbers printed in the stack trace, so it's not possible to tell exactly where in the ob1 PML it's dying (i.e., so we can't see exactly what it's doing to cause the segv).
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt;On Dec 2, 2010, at 9:36 AM, Benjamin Toueg wrote:
&gt; &gt;
&gt; &gt;&gt;Hi,
&gt; &gt;&gt;
&gt; &gt;&gt;I am using DRAGON, a neutronic simulation code in FORTRAN77 that has its own datastructures. I added a module to send these data structures thanks to MPI_SEND / MPI_RECEIVE, and everything worked perfectly for a while.
&gt; &gt;&gt;
&gt; &gt;&gt;Then I had to raise the number of data structures to be sent up to a point where my cluster has this bug :
&gt; &gt;&gt;*** Process received signal ***
&gt; &gt;&gt;Signal: Segmentation fault (11)
&gt; &gt;&gt;Signal code: Address not mapped (1)
&gt; &gt;&gt;Failing at address: 0x2c2579fc0
&gt; &gt;&gt;[ 0] /lib/libpthread.so.0 [0x7f52d2930410]
&gt; &gt;&gt;[ 1] /home/toueg/openmpi/lib/openmpi/mca_pml_ob1.so [0x7f52d153fe03]
&gt; &gt;&gt;[ 2] /home/toueg/openmpi/lib/libmpi.so.0(PMPI_Recv+0x2d2) [0x7f52d3504a1e]
&gt; &gt;&gt;[ 3] /home/toueg/openmpi/lib/libmpi_f77.so.0(pmpi_recv_+0x10e) [0x7f52d36cf9c6]
&gt; &gt;&gt;
&gt; &gt;&gt;How can I make this error more explicit ?
&gt; &gt;&gt;
&gt; &gt;&gt;I use the following configuration of openmpi-1.4.3 :
&gt; &gt;&gt;./configure --enable-debug --prefix=/home/toueg/openmpi CXX=g++ CC=gcc F77=gfortran FC=gfortran FLAGS=&quot;-m64 -fdefault-integer-8 -fdefault-real-8 -fdefault-double-8&quot; FCFLAGS=&quot;-m64 -fdefault-integer-8 -fdefault-real-8 -fdefault-double-8&quot; --disable-mpi-f90
&gt; &gt;&gt;
&gt; &gt;&gt;Here is the output of mpif77 -v :
&gt; &gt;&gt;mpif77 for 1.2.7 (release) of : 2005/11/04 11:54:51
&gt; &gt;&gt;Driving: f77 -L/usr/lib/mpich-mpd/lib -v -lmpich-p4mpd -lpthread -lrt -lfrtbegin -lg2c -lm -shared-libgcc
&gt; &gt;&gt;Lecture des sp&#195;&#169;cification &#195;&#160; partir de /usr/lib/gcc/x86_64-linux-gnu/3.4.6/specs
&gt; &gt;&gt;Configur&#195;&#169; avec: ../src/configure -v --enable-languages=c,c++,f77,pascal --prefix=/usr --libexecdir=/usr/lib --with-gxx-include-dir=/usr/include/c++/3.4 --enable-shared --with-system-zlib --enable-nls --without-included-gettext --program-suffix=-3.4 --enable-__cxa_atexit --enable-clocale=gnu --enable-libstdcxx-debug x86_64-linux-gnu
&gt; &gt;&gt;Mod&#195;&#168;le de thread: posix
&gt; &gt;&gt;version gcc 3.4.6 (Debian 3.4.6-5)
&gt; &gt;&gt; /usr/lib/gcc/x86_64-linux-gnu/3.4.6/collect2 --eh-frame-hdr -m elf_x86_64 -dynamic-linker /lib64/ld-linux-x86-64.so.2 /usr/lib/gcc/x86_64-linux-gnu/3.4.6/../../../../lib/crt1.o /usr/lib/gcc/x86_64-linux-gnu/3.4.6/../../../../lib/crti.o /usr/lib/gcc/x86_64-linux-gnu/3.4.6/crtbegin.o -L/usr/lib/mpich-mpd/lib -L/usr/lib/gcc/x86_64-linux-gnu/3.4.6 -L/usr/lib/gcc/x86_64-linux-gnu/3.4.6 -L/usr/lib/gcc/x86_64-linux-gnu/3.4.6/../../../../lib -L/usr/lib/gcc/x86_64-linux-gnu/3.4.6/../../.. -L/lib/../lib -L/usr/lib/../lib -lmpich-p4mpd -lpthread -lrt -lfrtbegin -lg2c -lm -lgcc_s -lgcc -lc -lgcc_s -lgcc /usr/lib/gcc/x86_64-linux-gnu/3.4.6/crtend.o /usr/lib/gcc/x86_64-linux-gnu/3.4.6/../../../../lib/crtn.o
&gt; &gt;&gt;/usr/lib/gcc/x86_64-linux-gnu/3.4.6/../../../../lib/libfrtbegin.a(frtbegin.o): dans la fonction &#226;&#150;&#146; main &#226;&#150;&#146;:
&gt; &gt;&gt;(.text+0x1e): r&#195;&#169;f&#195;&#169;rence ind&#195;&#169;finie vers &#226;&#150;&#146; MAIN__ &#226;&#150;&#146;
&gt; &gt;&gt;collect2: ld a retourn&#195;&#169; 1 code d'&#195;&#169;tat d'ex&#195;&#169;cution
&gt; &gt;&gt;
&gt; &gt;&gt;Thanks,
&gt; &gt;&gt;Benjamin
&gt; &gt;&gt;
&gt; &gt;&gt;_______________________________________________
&gt; &gt;&gt;users mailing list
&gt; &gt;&gt;users_at_[hidden]
&gt; &gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;
&gt; &gt;
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14984.php">Mathieu Gontier: "[OMPI users] difference between single and double precision"</a>
<li><strong>Previous message:</strong> <a href="14982.php">Gus Correa: "Re: [OMPI users] Scalability issue"</a>
<li><strong>In reply to:</strong> <a href="14982.php">Gus Correa: "Re: [OMPI users] Scalability issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14995.php">Benjamin Toueg: "Re: [OMPI users] Scalability issue"</a>
<li><strong>Reply:</strong> <a href="14995.php">Benjamin Toueg: "Re: [OMPI users] Scalability issue"</a>
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
