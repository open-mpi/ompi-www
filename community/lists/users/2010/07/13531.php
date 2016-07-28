<?
$subject_val = "Re: [OMPI users] Processes always rank 0";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  8 06:54:02 2010" -->
<!-- isoreceived="20100708105402" -->
<!-- sent="Thu, 8 Jul 2010 06:54:15 -0400" -->
<!-- isosent="20100708105415" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Processes always rank 0" -->
<!-- id="9E9CE0D8-442A-465B-96CF-9837DBDD4750_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C35A1DC.7050205_at_fu-berlin.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Processes always rank 0<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-08 06:54:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13532.php">Oliver Stolpe: "Re: [OMPI users] Processes always rank 0"</a>
<li><strong>Previous message:</strong> <a href="13530.php">Oliver Stolpe: "[OMPI users] Processes always rank 0"</a>
<li><strong>In reply to:</strong> <a href="13530.php">Oliver Stolpe: "[OMPI users] Processes always rank 0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13532.php">Oliver Stolpe: "Re: [OMPI users] Processes always rank 0"</a>
<li><strong>Reply:</strong> <a href="13532.php">Oliver Stolpe: "Re: [OMPI users] Processes always rank 0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you're just starting with MPI, is there any chance you can upgrade to Open MPI instead of LAM/MPI?  All of the LAM/MPI developers moved to Open MPI years ago.
<br>
<p><p>On Jul 8, 2010, at 6:01 AM, Oliver Stolpe wrote:
<br>
<p><span class="quotelev1">&gt; Hello there,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a problem setting up MPI/LAM. Here we go:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I start lam with the lamboot command successfully:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ lamboot -v hostnames
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; LAM 7.1.2/MPI 2 C++/ROMIO - Indiana University
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; n-1&lt;11960&gt; ssi:boot:base:linear: booting n0 (frost)
</span><br>
<span class="quotelev1">&gt; n-1&lt;11960&gt; ssi:boot:base:linear: booting n1 (hurricane)
</span><br>
<span class="quotelev1">&gt; n-1&lt;11960&gt; ssi:boot:base:linear: booting n2 (hail)
</span><br>
<span class="quotelev1">&gt; n-1&lt;11960&gt; ssi:boot:base:linear: booting n3 (fog)
</span><br>
<span class="quotelev1">&gt; n-1&lt;11960&gt; ssi:boot:base:linear: booting n4 (rain)
</span><br>
<span class="quotelev1">&gt; n-1&lt;11960&gt; ssi:boot:base:linear: booting n5 (thunder)
</span><br>
<span class="quotelev1">&gt; n-1&lt;11960&gt; ssi:boot:base:linear: finished
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok, all is fine. I test a command (hostname in this case):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -v --hostfile hostnames hostname
</span><br>
<span class="quotelev1">&gt; thunder
</span><br>
<span class="quotelev1">&gt; rain
</span><br>
<span class="quotelev1">&gt; frost
</span><br>
<span class="quotelev1">&gt; fog
</span><br>
<span class="quotelev1">&gt; hurricane
</span><br>
<span class="quotelev1">&gt; hail
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Works. I write a hello world program for testing:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char** argv) {
</span><br>
<span class="quotelev1">&gt;     unsigned int rank;
</span><br>
<span class="quotelev1">&gt;     unsigned int size;
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     printf(&quot;Hello, World. I am %u of %u\n&quot;, rank, size);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I compile and run it:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpicc -o mpitest mpitest.c &amp;&amp; mpirun -v --hostfile hostnames ./mpitest
</span><br>
<span class="quotelev1">&gt; Hello, World. I am 0 of 1
</span><br>
<span class="quotelev1">&gt; Hello, World. I am 0 of 1
</span><br>
<span class="quotelev1">&gt; Hello, World. I am 0 of 1
</span><br>
<span class="quotelev1">&gt; Hello, World. I am 0 of 1
</span><br>
<span class="quotelev1">&gt; Hello, World. I am 0 of 1
</span><br>
<span class="quotelev1">&gt; Hello, World. I am 0 of 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And I don't get it why everyone has the rank 0 and the size is only 1. I
</span><br>
<span class="quotelev1">&gt; followed many tutorials and i proved it right many times. Does anyone
</span><br>
<span class="quotelev1">&gt; has an idea?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Oliver
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some infos:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ lamboot -v
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; LAM 7.1.2/MPI 2 C++/ROMIO - Indiana University
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; n-1&lt;12088&gt; ssi:boot:base:linear: booting n0 (localhost)
</span><br>
<span class="quotelev1">&gt; n-1&lt;12088&gt; ssi:boot:base:linear: finished
</span><br>
<span class="quotelev1">&gt; ocs_at_frost:~$ lamboot -V
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; LAM 7.1.2/MPI 2 C++/ROMIO - Indiana University
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Arch:        x86_64-pc-linux-gnu
</span><br>
<span class="quotelev1">&gt;     Prefix:        /usr/lib/lam
</span><br>
<span class="quotelev1">&gt;     Configured by:    buildd
</span><br>
<span class="quotelev1">&gt;     Configured on:    Sun Apr  6 01:43:15 UTC 2008
</span><br>
<span class="quotelev1">&gt;     Configure host:    excelsior
</span><br>
<span class="quotelev1">&gt;     SSI rpi:    crtcp lamd sysv tcp usysv
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -V
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.2.7rc2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpicc -v
</span><br>
<span class="quotelev1">&gt; Using built-in specs.
</span><br>
<span class="quotelev1">&gt; Target: x86_64-linux-gnu
</span><br>
<span class="quotelev1">&gt; Configured with: ../src/configure -v --with-pkgversion='Debian
</span><br>
<span class="quotelev1">&gt; 4.3.2-1.1' --with-bugurl=file:///usr/share/doc/gcc-4.3/README.Bugs
</span><br>
<span class="quotelev1">&gt; --enable-languages=c,c++,fortran,objc,obj-c++ --prefix=/usr
</span><br>
<span class="quotelev1">&gt; --enable-shared --with-system-zlib --libexecdir=/usr/lib
</span><br>
<span class="quotelev1">&gt; --without-included-gettext --enable-threads=posix --enable-nls
</span><br>
<span class="quotelev1">&gt; --with-gxx-include-dir=/usr/include/c++/4.3 --program-suffix=-4.3
</span><br>
<span class="quotelev1">&gt; --enable-clocale=gnu --enable-libstdcxx-debug --enable-objc-gc
</span><br>
<span class="quotelev1">&gt; --enable-mpfr --enable-cld --enable-checking=release
</span><br>
<span class="quotelev1">&gt; --build=x86_64-linux-gnu --host=x86_64-linux-gnu --target=x86_64-linux-gnu
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; gcc version 4.3.2 (Debian 4.3.2-1.1)
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="13532.php">Oliver Stolpe: "Re: [OMPI users] Processes always rank 0"</a>
<li><strong>Previous message:</strong> <a href="13530.php">Oliver Stolpe: "[OMPI users] Processes always rank 0"</a>
<li><strong>In reply to:</strong> <a href="13530.php">Oliver Stolpe: "[OMPI users] Processes always rank 0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13532.php">Oliver Stolpe: "Re: [OMPI users] Processes always rank 0"</a>
<li><strong>Reply:</strong> <a href="13532.php">Oliver Stolpe: "Re: [OMPI users] Processes always rank 0"</a>
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
