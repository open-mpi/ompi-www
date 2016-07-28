<?
$subject_val = "Re: [OMPI users] Program does not finish after MPI_Finalize()";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 24 09:20:10 2010" -->
<!-- isoreceived="20100524132010" -->
<!-- sent="Mon, 24 May 2010 15:19:28 +0200" -->
<!-- isosent="20100524131928" -->
<!-- name="Yves Caniou" -->
<!-- email="yves.caniou_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Program does not finish after MPI_Finalize()" -->
<!-- id="201005241519.28502.yves.caniou_at_ens-lyon.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="8223EE36-6986-4669-8C18-03EDDC218BD4_at_cisco.com" -->
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
<strong>Date:</strong> 2010-05-24 09:19:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13142.php">Rajnesh Jindel: "[OMPI users] Process doesn't exit on remote machine when using hostfile"</a>
<li><strong>Previous message:</strong> <a href="13140.php">Jeff Squyres: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<li><strong>In reply to:</strong> <a href="13138.php">Jeff Squyres: "Re: [OMPI users] Program does not finish after MPI_Finalize()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Indeed, it's right.
<br>
I work on a bigger program, but executions hanged most of the time. So I cut 
<br>
and cut and cut to finally obtain this. And it still hangs 2 times on 3 at 
<br>
least, and I don't know why.
<br>
<p>Le Monday 24 May 2010 14:48:43 Jeff Squyres, vous avez &#233;crit&#160;:
<br>
<span class="quotelev1">&gt; Just to make sure I understand -- you're running the hello world app you
</span><br>
<span class="quotelev1">&gt; pasted in an earlier email with just 1 MPI process on the local machine,
</span><br>
<span class="quotelev1">&gt; and you're seeing hangs.  Is that right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (there was a reference in a prior email to 2 different architectures --
</span><br>
<span class="quotelev1">&gt; that's why I'm clarifying)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 24, 2010, at 2:53 AM, Yves Caniou wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I rechecked, but didn't see anything wrong.
</span><br>
<span class="quotelev2">&gt; &gt; Here is how I set my environment. Tkx.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $&gt;mpicc --v
</span><br>
<span class="quotelev2">&gt; &gt; Using built-in specs.
</span><br>
<span class="quotelev2">&gt; &gt; COLLECT_GCC=//home/p10015/gcc/bin/x86_64-unknown-linux-gnu-gcc-4.5.0
</span><br>
<span class="quotelev2">&gt; &gt; COLLECT_LTO_WRAPPER=/hsfs/home4/p10015/gcc/bin/../libexec/gcc/x86_64-unkn
</span><br>
<span class="quotelev2">&gt; &gt;own-linux-gnu/4.5.0/lto-wrapper Target: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev2">&gt; &gt; Configured
</span><br>
<span class="quotelev2">&gt; &gt; with: ../gcc-4.5.0/configure --prefix=/home/p10015/gcc
</span><br>
<span class="quotelev2">&gt; &gt; --with-gmp=/home/p10015/gmp --with-mpfr=/home/p10015/mpfr
</span><br>
<span class="quotelev2">&gt; &gt; --with-mpc=/home/p10015/mpc --enable-lto --with-ppl=/home/p10015/ppl
</span><br>
<span class="quotelev2">&gt; &gt; --with-libelf=/home/p10015/libelf --with-cloog=/home/p10015/cloog-ppl
</span><br>
<span class="quotelev2">&gt; &gt; --enable-languages=c,c++,lto --disable-libada
</span><br>
<span class="quotelev2">&gt; &gt; --enable-stage1-languages=c,c++,lto Thread model: posix
</span><br>
<span class="quotelev2">&gt; &gt; gcc version 4.5.0 (GCC)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $&gt;mpiexec
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec (OpenRTE) 1.4.2
</span><br>
<span class="quotelev2">&gt; &gt; [cut]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $&gt;echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt; &gt; /home/p10015/gcc/lib64/:/home/p10015/openmpi/lib/:/home/p10015/omniORB/li
</span><br>
<span class="quotelev2">&gt; &gt;b/:/home/p10015/omniORB/lib64/:/home/p10015/lib/:/home/p10015/lib64/::/usr
</span><br>
<span class="quotelev2">&gt; &gt;/lib/:/usr/lib/xen/:/lib/:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $&gt;echo $PATH
</span><br>
<span class="quotelev2">&gt; &gt; .:/home/p10015/gcc/bin/:/home/p10015/openmpi/bin/:/home/p10015/omniORB/bi
</span><br>
<span class="quotelev2">&gt; &gt;n/:/home/p10015/git/bin/:/home/p10015/Bin/:/home/p10015/bin/:..:/usr/local
</span><br>
<span class="quotelev2">&gt; &gt;/bin/:/opt/ofort90/bin:/opt/optc/bin:/opt/optscxx/bin:/opt/hitachi/nqs/bin
</span><br>
<span class="quotelev2">&gt; &gt;:/opt/torque/bin:/opt/mpich-mx/bin:/usr/java/default/bin:/bin:/usr/bin:/sb
</span><br>
<span class="quotelev2">&gt; &gt;in/:/usr/sbin/
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $&gt;echo $CPLUS_INCLUDE_PATH
</span><br>
<span class="quotelev2">&gt; &gt; /home/p10015/gcc/include/c++/4.5.0/:/home/p10015/openmpi/include/:/home/p
</span><br>
<span class="quotelev2">&gt; &gt;10015/omniORB/include/:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $&gt;echo $C_INCLUDE_PATH
</span><br>
<span class="quotelev2">&gt; &gt; /home/p10015/gcc/lib/gcc/x86_64-unknown-linux-gnu/4.5.0/include-fixed/:/h
</span><br>
<span class="quotelev2">&gt; &gt;ome/p10015/gcc/lib/gcc/x86_64-unknown-linux-gnu/4.5.0/include/:/home/p1001
</span><br>
<span class="quotelev2">&gt; &gt;5/openmpi/include/:/home/p10015/omniORB/include/:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Le Monday 24 May 2010 08:35:17 Ralph Castain, vous avez &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt; &gt; It looks to me like you are getting version confusion - your path and
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ld_library_path aren't pointing to the place where you installed 1.4.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; and you are either getting someone else's mpiexec or getting 1.2.x
</span><br>
<span class="quotelev3">&gt; &gt; &gt; instead. Could also be that mpicc isn't the one from 1.4.1 either.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Check to ensure that the mpiexec and mpicc you are using are from
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 1.4.1, and that your environment is pointing to the right place.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On May 24, 2010, at 12:15 AM, Yves Caniou wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Dear All,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (follows a previous mail)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I don't understand the strange behavior of this small code: sometimes
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; it ends, sometimes not. The output of MPI_Finalized is 1 (for each
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; processes if n&gt;1), but the code doesn't end. I am forced to use
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Ctrl-C.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I compiled it with the command line:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &quot;mpicc --std=c99&quot;  /  gcc is 4.5, on a Quad-Core AMD Opteron(tm)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Processor 8356 &quot;mpiexec -n 1 a.out&quot; or &quot;mpiexec -n 2 a.out&quot; to run
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; the code.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &quot;ps aux&quot; returns that the program is in Sl+ state.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Sometimes, I can see also a line like this:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; p10015    6892  0.1  0.0  43376  1828 ?        Ssl  14:50   0:00
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; orted --hnp --set-sid --report-uri 8 --singleton-died-pipe 9
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Is this a bug? Do I do something wrong?
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; If you have any tips...
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Thank you.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ---------
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #include &quot;stdio.h&quot;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; int
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; main(int argc, char *argv[])
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  int my_num, mpi_size ;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  int flag ;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  MPI_Init(&amp;argc, &amp;argv) ;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;my_num);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  printf(&quot;%d calls MPI_Finalize()\n\n\n&quot;, my_num) ;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  MPI_Finalize() ;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  MPI_Finalized(&amp;flag) ;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  printf(&quot;MPI finalized: %d\n&quot;, flag) ;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  return 0 ;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; -------
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; --
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Yves Caniou
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Associate Professor at Universit&#233; Lyon 1,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Member of the team project INRIA GRAAL in the LIP ENS-Lyon,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; D&#233;l&#233;gation CNRS in Japan French Laboratory of Informatics (JFLI),
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  * in Information Technology Center, The University of Tokyo,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    2-11-16 Yayoi, Bunkyo-ku, Tokyo 113-8658, Japan
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    tel: +81-3-5841-0540
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  * in National Institute of Informatics
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    2-1-2 Hitotsubashi, Chiyoda-ku, Tokyo 101-8430, Japan
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    tel: +81-3-4212-2412
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://graal.ens-lyon.fr/~ycaniou/">http://graal.ens-lyon.fr/~ycaniou/</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt; &gt;   * in Information Technology Center, The University of Tokyo,
</span><br>
<span class="quotelev2">&gt; &gt;     2-11-16 Yayoi, Bunkyo-ku, Tokyo 113-8658, Japan
</span><br>
<span class="quotelev2">&gt; &gt;     tel: +81-3-5841-0540
</span><br>
<span class="quotelev2">&gt; &gt;   * in National Institute of Informatics
</span><br>
<span class="quotelev2">&gt; &gt;     2-1-2 Hitotsubashi, Chiyoda-ku, Tokyo 101-8430, Japan
</span><br>
<span class="quotelev2">&gt; &gt;     tel: +81-3-4212-2412
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
<li><strong>Next message:</strong> <a href="13142.php">Rajnesh Jindel: "[OMPI users] Process doesn't exit on remote machine when using hostfile"</a>
<li><strong>Previous message:</strong> <a href="13140.php">Jeff Squyres: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<li><strong>In reply to:</strong> <a href="13138.php">Jeff Squyres: "Re: [OMPI users] Program does not finish after MPI_Finalize()"</a>
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
