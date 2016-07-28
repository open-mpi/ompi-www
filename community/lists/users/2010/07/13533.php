<?
$subject_val = "Re: [OMPI users] Processes always rank 0";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  8 07:13:48 2010" -->
<!-- isoreceived="20100708111348" -->
<!-- sent="Thu, 8 Jul 2010 06:13:37 -0500" -->
<!-- isosent="20100708111337" -->
<!-- name="McCalla, Mac" -->
<!-- email="macmccalla_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Processes always rank 0" -->
<!-- id="C09ABC447029024096130425486E227901D351CA_at_HACSSEX005.ihess.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] Processes always rank 0" -->
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
<strong>From:</strong> McCalla, Mac (<em>macmccalla_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-08 07:13:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13534.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Processes always rank 0"</a>
<li><strong>Previous message:</strong> <a href="13532.php">Oliver Stolpe: "Re: [OMPI users] Processes always rank 0"</a>
<li><strong>Maybe in reply to:</strong> <a href="13530.php">Oliver Stolpe: "[OMPI users] Processes always rank 0"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Oliver,
<br>
<p>Looks like you are mixing LAM and OpenMPI.  Remove LAM from your environment (PATH, LD_LIBRARY_PATH or similar) and try again.
<br>
<p>HTH,
<br>
<p>Mac
<br>
<p><span class="quotelev1">&gt;From my PDA:  no type good....
</span><br>
<p>----- Original Message -----
<br>
From: users-bounces_at_[hidden] &lt;users-bounces_at_[hidden]&gt;
<br>
To: users_at_[hidden] &lt;users_at_[hidden]&gt;
<br>
Sent: Thu Jul 08 05:01:00 2010
<br>
Subject: [OMPI users] Processes always rank 0
<br>
<p>Hello there,
<br>
<p>I have a problem setting up MPI/LAM. Here we go:
<br>
<p>I start lam with the lamboot command successfully:
<br>
<p>$ lamboot -v hostnames
<br>
<p>LAM 7.1.2/MPI 2 C++/ROMIO - Indiana University
<br>
<p>n-1&lt;11960&gt; ssi:boot:base:linear: booting n0 (frost)
<br>
n-1&lt;11960&gt; ssi:boot:base:linear: booting n1 (hurricane)
<br>
n-1&lt;11960&gt; ssi:boot:base:linear: booting n2 (hail)
<br>
n-1&lt;11960&gt; ssi:boot:base:linear: booting n3 (fog)
<br>
n-1&lt;11960&gt; ssi:boot:base:linear: booting n4 (rain)
<br>
n-1&lt;11960&gt; ssi:boot:base:linear: booting n5 (thunder)
<br>
n-1&lt;11960&gt; ssi:boot:base:linear: finished
<br>
<p>Ok, all is fine. I test a command (hostname in this case):
<br>
<p>$ mpirun -v --hostfile hostnames hostname
<br>
thunder
<br>
rain
<br>
frost
<br>
fog
<br>
hurricane
<br>
hail
<br>
<p>Works. I write a hello world program for testing:
<br>
<p>#include &lt;mpi.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
<p>int main(int argc, char** argv) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;unsigned int rank;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;unsigned int size;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Hello, World. I am %u of %u\n&quot;, rank, size);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>I compile and run it:
<br>
<p>$ mpicc -o mpitest mpitest.c &amp;&amp; mpirun -v --hostfile hostnames ./mpitest
<br>
Hello, World. I am 0 of 1
<br>
Hello, World. I am 0 of 1
<br>
Hello, World. I am 0 of 1
<br>
Hello, World. I am 0 of 1
<br>
Hello, World. I am 0 of 1
<br>
Hello, World. I am 0 of 1
<br>
<p>And I don't get it why everyone has the rank 0 and the size is only 1. I 
<br>
followed many tutorials and i proved it right many times. Does anyone 
<br>
has an idea?
<br>
<p>Thanks in advance!
<br>
<p>Oliver
<br>
<p>Some infos:
<br>
<p>$ lamboot -v
<br>
<p>LAM 7.1.2/MPI 2 C++/ROMIO - Indiana University
<br>
<p>n-1&lt;12088&gt; ssi:boot:base:linear: booting n0 (localhost)
<br>
n-1&lt;12088&gt; ssi:boot:base:linear: finished
<br>
ocs_at_frost:~$ lamboot -V
<br>
<p>LAM 7.1.2/MPI 2 C++/ROMIO - Indiana University
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Arch:        x86_64-pc-linux-gnu
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Prefix:        /usr/lib/lam
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Configured by:    buildd
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Configured on:    Sun Apr  6 01:43:15 UTC 2008
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Configure host:    excelsior
<br>
&nbsp;&nbsp;&nbsp;&nbsp;SSI rpi:    crtcp lamd sysv tcp usysv
<br>
<p>$ mpirun -V
<br>
mpirun (Open MPI) 1.2.7rc2
<br>
<p>Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p>$ mpicc -v
<br>
Using built-in specs.
<br>
Target: x86_64-linux-gnu
<br>
Configured with: ../src/configure -v --with-pkgversion='Debian 
<br>
4.3.2-1.1' --with-bugurl=file:///usr/share/doc/gcc-4.3/README.Bugs 
<br>
--enable-languages=c,c++,fortran,objc,obj-c++ --prefix=/usr 
<br>
--enable-shared --with-system-zlib --libexecdir=/usr/lib 
<br>
--without-included-gettext --enable-threads=posix --enable-nls 
<br>
--with-gxx-include-dir=/usr/include/c++/4.3 --program-suffix=-4.3 
<br>
--enable-clocale=gnu --enable-libstdcxx-debug --enable-objc-gc 
<br>
--enable-mpfr --enable-cld --enable-checking=release 
<br>
--build=x86_64-linux-gnu --host=x86_64-linux-gnu --target=x86_64-linux-gnu
<br>
Thread model: posix
<br>
gcc version 4.3.2 (Debian 4.3.2-1.1)
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>This e-mail and any attachments are for the sole use of the intended recipient(s) and may contain information that is confidential.  If you are not the intended recipient(s) and have received this e-mail in error, please immediately notify the sender by return e-mail and delete this e-mail from your computer. Any distribution, disclosure or the taking of any other action by anyone other than the intended recipient(s) is strictly prohibited.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13534.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Processes always rank 0"</a>
<li><strong>Previous message:</strong> <a href="13532.php">Oliver Stolpe: "Re: [OMPI users] Processes always rank 0"</a>
<li><strong>Maybe in reply to:</strong> <a href="13530.php">Oliver Stolpe: "[OMPI users] Processes always rank 0"</a>
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
