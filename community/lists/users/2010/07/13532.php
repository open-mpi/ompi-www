<?
$subject_val = "Re: [OMPI users] Processes always rank 0";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  8 07:13:48 2010" -->
<!-- isoreceived="20100708111348" -->
<!-- sent="Thu, 08 Jul 2010 13:13:43 +0200" -->
<!-- isosent="20100708111343" -->
<!-- name="Oliver Stolpe" -->
<!-- email="oliver.stolpe_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Processes always rank 0" -->
<!-- id="4C35B2E7.3080807_at_fu-berlin.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9E9CE0D8-442A-465B-96CF-9837DBDD4750_at_cisco.com" -->
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
<strong>From:</strong> Oliver Stolpe (<em>oliver.stolpe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-08 07:13:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13533.php">McCalla, Mac: "Re: [OMPI users] Processes always rank 0"</a>
<li><strong>Previous message:</strong> <a href="13531.php">Jeff Squyres: "Re: [OMPI users] Processes always rank 0"</a>
<li><strong>In reply to:</strong> <a href="13531.php">Jeff Squyres: "Re: [OMPI users] Processes always rank 0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13534.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Processes always rank 0"</a>
<li><strong>Reply:</strong> <a href="13534.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Processes always rank 0"</a>
<li><strong>Reply:</strong> <a href="13536.php">Reuti: "Re: [OMPI users] Processes always rank 0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I thought this is OpenMPI what I was using. I do not have permission to 
<br>
install something, only in my home directory. All tutorials I found 
<br>
started the environment with the lamboot command. Whats the difference 
<br>
using only OpenMPI?
<br>
<p>$ whereis openmpi
<br>
openmpi: /etc/openmpi /usr/lib/openmpi /usr/lib64/openmpi /usr/share/openmpi
<br>
<p>$ echo $LD_LIBRARY_PATH
<br>
:/usr/lib/openmpi/lib:/usr/lib64/openmpi/lib:
<br>
<p>$ whereis mpirun
<br>
mpirun: /usr/bin/mpirun.mpich /usr/bin/mpirun /usr/bin/mpirun.lam 
<br>
/usr/bin/mpirun.openmpi
<br>
<p>$ ll /usr/bin/mpirun
<br>
lrwxrwxrwx 1 root root 24 14. Aug 2008  /usr/bin/mpirun -&gt; /usr/bin/orterun
<br>
<p>$ ll /usr/bin/orterun
<br>
-rwxr-xr-x 1 root root 39280 25. Aug 2008  /usr/bin/orterun
<br>
<p>$ ll /usr/bin/mpirun.openmpi
<br>
lrwxrwxrwx 1 root root 7  5. Sep 2008  /usr/bin/mpirun.openmpi -&gt; orterun
<br>
<p>When I run mpirun without starting the environment by using lamboot, it 
<br>
says:
<br>
<p>ocs_at_frost:~$ mpicc -o mpitest mpitest.c &amp;&amp; mpirun -np 1 -machinefile 
<br>
machines ./mpitest
<br>
-----------------------------------------------------------------------------
<br>
<p>It seems that there is no lamd running on the host frost.
<br>
<p>This indicates that the LAM/MPI runtime environment is not operating.
<br>
The LAM/MPI runtime environment is necessary for MPI programs to run
<br>
(the MPI program tired to invoke the &quot;MPI_Init&quot; function).
<br>
<p>Please run the &quot;lamboot&quot; command the start the LAM/MPI runtime
<br>
environment.  See the LAM/MPI documentation for how to invoke
<br>
&quot;lamboot&quot; across multiple machines.
<br>
-----------------------------------------------------------------------------
<br>
<p>Thanks in advance,
<br>
Oliver
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; If you're just starting with MPI, is there any chance you can upgrade to Open MPI instead of LAM/MPI?  All of the LAM/MPI developers moved to Open MPI years ago.
</span><br>
<span class="quotelev1">&gt; ann/lib:/home/bude/ocs/fann
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 8, 2010, at 6:01 AM, Oliver Stolpe wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Hello there,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a problem setting up MPI/LAM. Here we go:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I start lam with the lamboot command successfully:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ lamboot -v hostnames
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; LAM 7.1.2/MPI 2 C++/ROMIO - Indiana University
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; n-1&lt;11960&gt; ssi:boot:base:linear: booting n0 (frost)
</span><br>
<span class="quotelev2">&gt;&gt; n-1&lt;11960&gt; ssi:boot:base:linear: booting n1 (hurricane)
</span><br>
<span class="quotelev2">&gt;&gt; n-1&lt;11960&gt; ssi:boot:base:linear: booting n2 (hail)
</span><br>
<span class="quotelev2">&gt;&gt; n-1&lt;11960&gt; ssi:boot:base:linear: booting n3 (fog)
</span><br>
<span class="quotelev2">&gt;&gt; n-1&lt;11960&gt; ssi:boot:base:linear: booting n4 (rain)
</span><br>
<span class="quotelev2">&gt;&gt; n-1&lt;11960&gt; ssi:boot:base:linear: booting n5 (thunder)
</span><br>
<span class="quotelev2">&gt;&gt; n-1&lt;11960&gt; ssi:boot:base:linear: finished
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ok, all is fine. I test a command (hostname in this case):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -v --hostfile hostnames hostname
</span><br>
<span class="quotelev2">&gt;&gt; thunder
</span><br>
<span class="quotelev2">&gt;&gt; rain
</span><br>
<span class="quotelev2">&gt;&gt; frost
</span><br>
<span class="quotelev2">&gt;&gt; fog
</span><br>
<span class="quotelev2">&gt;&gt; hurricane
</span><br>
<span class="quotelev2">&gt;&gt; hail
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Works. I write a hello world program for testing:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char** argv) {
</span><br>
<span class="quotelev2">&gt;&gt;     unsigned int rank;
</span><br>
<span class="quotelev2">&gt;&gt;     unsigned int size;
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     printf(&quot;Hello, World. I am %u of %u\n&quot;, rank, size);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;     return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I compile and run it:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpicc -o mpitest mpitest.c &amp;&amp; mpirun -v --hostfile hostnames ./mpitest
</span><br>
<span class="quotelev2">&gt;&gt; Hello, World. I am 0 of 1
</span><br>
<span class="quotelev2">&gt;&gt; Hello, World. I am 0 of 1
</span><br>
<span class="quotelev2">&gt;&gt; Hello, World. I am 0 of 1
</span><br>
<span class="quotelev2">&gt;&gt; Hello, World. I am 0 of 1
</span><br>
<span class="quotelev2">&gt;&gt; Hello, World. I am 0 of 1
</span><br>
<span class="quotelev2">&gt;&gt; Hello, World. I am 0 of 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And I don't get it why everyone has the rank 0 and the size is only 1. I
</span><br>
<span class="quotelev2">&gt;&gt; followed many tutorials and i proved it right many times. Does anyone
</span><br>
<span class="quotelev2">&gt;&gt; has an idea?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Oliver
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Some infos:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ lamboot -v
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; LAM 7.1.2/MPI 2 C++/ROMIO - Indiana University
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; n-1&lt;12088&gt; ssi:boot:base:linear: booting n0 (localhost)
</span><br>
<span class="quotelev2">&gt;&gt; n-1&lt;12088&gt; ssi:boot:base:linear: finished
</span><br>
<span class="quotelev2">&gt;&gt; ocs_at_frost:~$ lamboot -V
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; LAM 7.1.2/MPI 2 C++/ROMIO - Indiana University
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Arch:        x86_64-pc-linux-gnu
</span><br>
<span class="quotelev2">&gt;&gt;     Prefix:        /usr/lib/lam
</span><br>
<span class="quotelev2">&gt;&gt;     Configured by:    buildd
</span><br>
<span class="quotelev2">&gt;&gt;     Configured on:    Sun Apr  6 01:43:15 UTC 2008
</span><br>
<span class="quotelev2">&gt;&gt;     Configure host:    excelsior
</span><br>
<span class="quotelev2">&gt;&gt;     SSI rpi:    crtcp lamd sysv tcp usysv
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -V
</span><br>
<span class="quotelev2">&gt;&gt; mpirun (Open MPI) 1.2.7rc2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpicc -v
</span><br>
<span class="quotelev2">&gt;&gt; Using built-in specs.
</span><br>
<span class="quotelev2">&gt;&gt; Target: x86_64-linux-gnu
</span><br>
<span class="quotelev2">&gt;&gt; Configured with: ../src/configure -v --with-pkgversion='Debian
</span><br>
<span class="quotelev2">&gt;&gt; 4.3.2-1.1' --with-bugurl=file:///usr/share/doc/gcc-4.3/README.Bugs
</span><br>
<span class="quotelev2">&gt;&gt; --enable-languages=c,c++,fortran,objc,obj-c++ --prefix=/usr
</span><br>
<span class="quotelev2">&gt;&gt; --enable-shared --with-system-zlib --libexecdir=/usr/lib
</span><br>
<span class="quotelev2">&gt;&gt; --without-included-gettext --enable-threads=posix --enable-nls
</span><br>
<span class="quotelev2">&gt;&gt; --with-gxx-include-dir=/usr/include/c++/4.3 --program-suffix=-4.3
</span><br>
<span class="quotelev2">&gt;&gt; --enable-clocale=gnu --enable-libstdcxx-debug --enable-objc-gc
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mpfr --enable-cld --enable-checking=release
</span><br>
<span class="quotelev2">&gt;&gt; --build=x86_64-linux-gnu --host=x86_64-linux-gnu --target=x86_64-linux-gnu
</span><br>
<span class="quotelev2">&gt;&gt; Thread model: posix
</span><br>
<span class="quotelev2">&gt;&gt; gcc version 4.3.2 (Debian 4.3.2-1.1)
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13533.php">McCalla, Mac: "Re: [OMPI users] Processes always rank 0"</a>
<li><strong>Previous message:</strong> <a href="13531.php">Jeff Squyres: "Re: [OMPI users] Processes always rank 0"</a>
<li><strong>In reply to:</strong> <a href="13531.php">Jeff Squyres: "Re: [OMPI users] Processes always rank 0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13534.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Processes always rank 0"</a>
<li><strong>Reply:</strong> <a href="13534.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Processes always rank 0"</a>
<li><strong>Reply:</strong> <a href="13536.php">Reuti: "Re: [OMPI users] Processes always rank 0"</a>
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
