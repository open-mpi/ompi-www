<?
$subject_val = "Re: [OMPI users] Program does not finish after MPI_Finalize()";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 24 02:54:55 2010" -->
<!-- isoreceived="20100524065455" -->
<!-- sent="Mon, 24 May 2010 08:53:39 +0200" -->
<!-- isosent="20100524065339" -->
<!-- name="Yves Caniou" -->
<!-- email="yves.caniou_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Program does not finish after MPI_Finalize()" -->
<!-- id="201005240853.40054.yves.caniou_at_ens-lyon.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1A73923D-9F5D-49FC-BB2A-A884BF5E675F_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Program does not finish after MPI_Finalize()<br>
<strong>From:</strong> Yves Caniou (<em>yves.caniou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-24 02:53:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13137.php">Nguyen Toan: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<li><strong>Previous message:</strong> <a href="13135.php">Ralph Castain: "Re: [OMPI users] Program does not finish after MPI_Finalize()"</a>
<li><strong>In reply to:</strong> <a href="13135.php">Ralph Castain: "Re: [OMPI users] Program does not finish after MPI_Finalize()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13138.php">Jeff Squyres: "Re: [OMPI users] Program does not finish after MPI_Finalize()"</a>
<li><strong>Reply:</strong> <a href="13138.php">Jeff Squyres: "Re: [OMPI users] Program does not finish after MPI_Finalize()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I rechecked, but didn't see anything wrong.
<br>
Here is how I set my environment. Tkx.
<br>
<p>$&gt;mpicc --v
<br>
Using built-in specs.
<br>
COLLECT_GCC=//home/p10015/gcc/bin/x86_64-unknown-linux-gnu-gcc-4.5.0
<br>
COLLECT_LTO_WRAPPER=/hsfs/home4/p10015/gcc/bin/../libexec/gcc/x86_64-unknown-linux-gnu/4.5.0/lto-wrapper
<br>
Target: x86_64-unknown-linux-gnu
<br>
Configured 
<br>
with: ../gcc-4.5.0/configure --prefix=/home/p10015/gcc --with-gmp=/home/p10015/gmp --with-mpfr=/home/p10015/mpfr --with-mpc=/home/p10015/mpc --enable-lto --with-ppl=/home/p10015/ppl --with-libelf=/home/p10015/libelf --with-cloog=/home/p10015/cloog-ppl --enable-languages=c,c++,lto --disable-libada --enable-stage1-languages=c,c++,lto
<br>
Thread model: posix
<br>
gcc version 4.5.0 (GCC)
<br>
<p>$&gt;mpiexec
<br>
mpiexec (OpenRTE) 1.4.2
<br>
[cut]
<br>
<p>$&gt;echo $LD_LIBRARY_PATH
<br>
/home/p10015/gcc/lib64/:/home/p10015/openmpi/lib/:/home/p10015/omniORB/lib/:/home/p10015/omniORB/lib64/:/home/p10015/lib/:/home/p10015/lib64/::/usr/lib/:/usr/lib/xen/:/lib/:
<br>
<p>$&gt;echo $PATH
<br>
.:/home/p10015/gcc/bin/:/home/p10015/openmpi/bin/:/home/p10015/omniORB/bin/:/home/p10015/git/bin/:/home/p10015/Bin/:/home/p10015/bin/:..:/usr/local/bin/:/opt/ofort90/bin:/opt/optc/bin:/opt/optscxx/bin:/opt/hitachi/nqs/bin:/opt/torque/bin:/opt/mpich-mx/bin:/usr/java/default/bin:/bin:/usr/bin:/sbin/:/usr/sbin/
<br>
<p>$&gt;echo $CPLUS_INCLUDE_PATH
<br>
/home/p10015/gcc/include/c++/4.5.0/:/home/p10015/openmpi/include/:/home/p10015/omniORB/include/:
<br>
<p>$&gt;echo $C_INCLUDE_PATH
<br>
/home/p10015/gcc/lib/gcc/x86_64-unknown-linux-gnu/4.5.0/include-fixed/:/home/p10015/gcc/lib/gcc/x86_64-unknown-linux-gnu/4.5.0/include/:/home/p10015/openmpi/include/:/home/p10015/omniORB/include/:
<br>
<p><p>Le Monday 24 May 2010 08:35:17 Ralph Castain, vous avez &#233;crit&#160;:
<br>
<span class="quotelev1">&gt; It looks to me like you are getting version confusion - your path and
</span><br>
<span class="quotelev1">&gt; ld_library_path aren't pointing to the place where you installed 1.4.1 and
</span><br>
<span class="quotelev1">&gt; you are either getting someone else's mpiexec or getting 1.2.x instead.
</span><br>
<span class="quotelev1">&gt; Could also be that mpicc isn't the one from 1.4.1 either.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Check to ensure that the mpiexec and mpicc you are using are from 1.4.1,
</span><br>
<span class="quotelev1">&gt; and that your environment is pointing to the right place.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 24, 2010, at 12:15 AM, Yves Caniou wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Dear All,
</span><br>
<span class="quotelev2">&gt; &gt; (follows a previous mail)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I don't understand the strange behavior of this small code: sometimes it
</span><br>
<span class="quotelev2">&gt; &gt; ends, sometimes not. The output of MPI_Finalized is 1 (for each processes
</span><br>
<span class="quotelev2">&gt; &gt; if n&gt;1), but the code doesn't end. I am forced to use Ctrl-C.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I compiled it with the command line:
</span><br>
<span class="quotelev2">&gt; &gt; &quot;mpicc --std=c99&quot;  /  gcc is 4.5, on a Quad-Core AMD Opteron(tm)
</span><br>
<span class="quotelev2">&gt; &gt; Processor 8356 &quot;mpiexec -n 1 a.out&quot; or &quot;mpiexec -n 2 a.out&quot; to run the
</span><br>
<span class="quotelev2">&gt; &gt; code.
</span><br>
<span class="quotelev2">&gt; &gt; &quot;ps aux&quot; returns that the program is in Sl+ state.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sometimes, I can see also a line like this:
</span><br>
<span class="quotelev2">&gt; &gt; p10015    6892  0.1  0.0  43376  1828 ?        Ssl  14:50   0:00 orted
</span><br>
<span class="quotelev2">&gt; &gt; --hnp --set-sid --report-uri 8 --singleton-died-pipe 9
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is this a bug? Do I do something wrong?
</span><br>
<span class="quotelev2">&gt; &gt; If you have any tips...
</span><br>
<span class="quotelev2">&gt; &gt; Thank you.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ---------
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;stdio.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int
</span><br>
<span class="quotelev2">&gt; &gt; main(int argc, char *argv[])
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;  int my_num, mpi_size ;
</span><br>
<span class="quotelev2">&gt; &gt;  int flag ;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  MPI_Init(&amp;argc, &amp;argv) ;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;my_num);
</span><br>
<span class="quotelev2">&gt; &gt;  printf(&quot;%d calls MPI_Finalize()\n\n\n&quot;, my_num) ;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  MPI_Finalize() ;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  MPI_Finalized(&amp;flag) ;
</span><br>
<span class="quotelev2">&gt; &gt;  printf(&quot;MPI finalized: %d\n&quot;, flag) ;
</span><br>
<span class="quotelev2">&gt; &gt;  return 0 ;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; -------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Yves Caniou
</span><br>
<span class="quotelev2">&gt; &gt; Associate Professor at Universit&#233; Lyon 1,
</span><br>
<span class="quotelev2">&gt; &gt; Member of the team project INRIA GRAAL in the LIP ENS-Lyon,
</span><br>
<span class="quotelev2">&gt; &gt; D&#233;l&#233;gation CNRS in Japan French Laboratory of Informatics (JFLI),
</span><br>
<span class="quotelev2">&gt; &gt;  * in Information Technology Center, The University of Tokyo,
</span><br>
<span class="quotelev2">&gt; &gt;    2-11-16 Yayoi, Bunkyo-ku, Tokyo 113-8658, Japan
</span><br>
<span class="quotelev2">&gt; &gt;    tel: +81-3-5841-0540
</span><br>
<span class="quotelev2">&gt; &gt;  * in National Institute of Informatics
</span><br>
<span class="quotelev2">&gt; &gt;    2-1-2 Hitotsubashi, Chiyoda-ku, Tokyo 101-8430, Japan
</span><br>
<span class="quotelev2">&gt; &gt;    tel: +81-3-4212-2412
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://graal.ens-lyon.fr/~ycaniou/">http://graal.ens-lyon.fr/~ycaniou/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><p><pre>
-- 
Yves Caniou
Associate Professor at Universit&#233; Lyon 1,
Member of the team project INRIA GRAAL in the LIP ENS-Lyon,
D&#233;l&#233;gation CNRS in Japan French Laboratory of Informatics (JFLI),
  * in Information Technology Center, The University of Tokyo,
    2-11-16 Yayoi, Bunkyo-ku, Tokyo 113-8658, Japan
    tel: +81-3-5841-0540
  * in National Institute of Informatics
    2-1-2 Hitotsubashi, Chiyoda-ku, Tokyo 101-8430, Japan
    tel: +81-3-4212-2412 
<a href="http://graal.ens-lyon.fr/~ycaniou/">http://graal.ens-lyon.fr/~ycaniou/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13137.php">Nguyen Toan: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<li><strong>Previous message:</strong> <a href="13135.php">Ralph Castain: "Re: [OMPI users] Program does not finish after MPI_Finalize()"</a>
<li><strong>In reply to:</strong> <a href="13135.php">Ralph Castain: "Re: [OMPI users] Program does not finish after MPI_Finalize()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13138.php">Jeff Squyres: "Re: [OMPI users] Program does not finish after MPI_Finalize()"</a>
<li><strong>Reply:</strong> <a href="13138.php">Jeff Squyres: "Re: [OMPI users] Program does not finish after MPI_Finalize()"</a>
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
