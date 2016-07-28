<?
$subject_val = "Re: [OMPI users] Program does not finish after MPI_Finalize()";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 24 08:48:48 2010" -->
<!-- isoreceived="20100524124848" -->
<!-- sent="Mon, 24 May 2010 08:48:43 -0400" -->
<!-- isosent="20100524124843" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Program does not finish after MPI_Finalize()" -->
<!-- id="8223EE36-6986-4669-8C18-03EDDC218BD4_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="201005240853.40054.yves.caniou_at_ens-lyon.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-24 08:48:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13139.php">Jeff Squyres: "Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefined symbol:orte_xml_fp"</a>
<li><strong>Previous message:</strong> <a href="13137.php">Nguyen Toan: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<li><strong>In reply to:</strong> <a href="13136.php">Yves Caniou: "Re: [OMPI users] Program does not finish after MPI_Finalize()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13141.php">Yves Caniou: "Re: [OMPI users] Program does not finish after MPI_Finalize()"</a>
<li><strong>Reply:</strong> <a href="13141.php">Yves Caniou: "Re: [OMPI users] Program does not finish after MPI_Finalize()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just to make sure I understand -- you're running the hello world app you pasted in an earlier email with just 1 MPI process on the local machine, and you're seeing hangs.  Is that right?
<br>
<p>(there was a reference in a prior email to 2 different architectures -- that's why I'm clarifying)
<br>
<p><p>On May 24, 2010, at 2:53 AM, Yves Caniou wrote:
<br>
<p><span class="quotelev1">&gt; I rechecked, but didn't see anything wrong.
</span><br>
<span class="quotelev1">&gt; Here is how I set my environment. Tkx.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $&gt;mpicc --v
</span><br>
<span class="quotelev1">&gt; Using built-in specs.
</span><br>
<span class="quotelev1">&gt; COLLECT_GCC=//home/p10015/gcc/bin/x86_64-unknown-linux-gnu-gcc-4.5.0
</span><br>
<span class="quotelev1">&gt; COLLECT_LTO_WRAPPER=/hsfs/home4/p10015/gcc/bin/../libexec/gcc/x86_64-unknown-linux-gnu/4.5.0/lto-wrapper
</span><br>
<span class="quotelev1">&gt; Target: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt; Configured
</span><br>
<span class="quotelev1">&gt; with: ../gcc-4.5.0/configure --prefix=/home/p10015/gcc --with-gmp=/home/p10015/gmp --with-mpfr=/home/p10015/mpfr --with-mpc=/home/p10015/mpc --enable-lto --with-ppl=/home/p10015/ppl --with-libelf=/home/p10015/libelf --with-cloog=/home/p10015/cloog-ppl --enable-languages=c,c++,lto --disable-libada --enable-stage1-languages=c,c++,lto
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; gcc version 4.5.0 (GCC)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $&gt;mpiexec
</span><br>
<span class="quotelev1">&gt; mpiexec (OpenRTE) 1.4.2
</span><br>
<span class="quotelev1">&gt; [cut]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $&gt;echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; /home/p10015/gcc/lib64/:/home/p10015/openmpi/lib/:/home/p10015/omniORB/lib/:/home/p10015/omniORB/lib64/:/home/p10015/lib/:/home/p10015/lib64/::/usr/lib/:/usr/lib/xen/:/lib/:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $&gt;echo $PATH
</span><br>
<span class="quotelev1">&gt; .:/home/p10015/gcc/bin/:/home/p10015/openmpi/bin/:/home/p10015/omniORB/bin/:/home/p10015/git/bin/:/home/p10015/Bin/:/home/p10015/bin/:..:/usr/local/bin/:/opt/ofort90/bin:/opt/optc/bin:/opt/optscxx/bin:/opt/hitachi/nqs/bin:/opt/torque/bin:/opt/mpich-mx/bin:/usr/java/default/bin:/bin:/usr/bin:/sbin/:/usr/sbin/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $&gt;echo $CPLUS_INCLUDE_PATH
</span><br>
<span class="quotelev1">&gt; /home/p10015/gcc/include/c++/4.5.0/:/home/p10015/openmpi/include/:/home/p10015/omniORB/include/:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $&gt;echo $C_INCLUDE_PATH
</span><br>
<span class="quotelev1">&gt; /home/p10015/gcc/lib/gcc/x86_64-unknown-linux-gnu/4.5.0/include-fixed/:/home/p10015/gcc/lib/gcc/x86_64-unknown-linux-gnu/4.5.0/include/:/home/p10015/openmpi/include/:/home/p10015/omniORB/include/:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le Monday 24 May 2010 08:35:17 Ralph Castain, vous avez &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; It looks to me like you are getting version confusion - your path and
</span><br>
<span class="quotelev2">&gt; &gt; ld_library_path aren't pointing to the place where you installed 1.4.1 and
</span><br>
<span class="quotelev2">&gt; &gt; you are either getting someone else's mpiexec or getting 1.2.x instead.
</span><br>
<span class="quotelev2">&gt; &gt; Could also be that mpicc isn't the one from 1.4.1 either.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Check to ensure that the mpiexec and mpicc you are using are from 1.4.1,
</span><br>
<span class="quotelev2">&gt; &gt; and that your environment is pointing to the right place.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On May 24, 2010, at 12:15 AM, Yves Caniou wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Dear All,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (follows a previous mail)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I don't understand the strange behavior of this small code: sometimes it
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ends, sometimes not. The output of MPI_Finalized is 1 (for each processes
</span><br>
<span class="quotelev3">&gt; &gt; &gt; if n&gt;1), but the code doesn't end. I am forced to use Ctrl-C.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I compiled it with the command line:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &quot;mpicc --std=c99&quot;  /  gcc is 4.5, on a Quad-Core AMD Opteron(tm)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Processor 8356 &quot;mpiexec -n 1 a.out&quot; or &quot;mpiexec -n 2 a.out&quot; to run the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; code.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &quot;ps aux&quot; returns that the program is in Sl+ state.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Sometimes, I can see also a line like this:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; p10015    6892  0.1  0.0  43376  1828 ?        Ssl  14:50   0:00 orted
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --hnp --set-sid --report-uri 8 --singleton-died-pipe 9
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Is this a bug? Do I do something wrong?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If you have any tips...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thank you.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ---------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #include &quot;stdio.h&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; int
</span><br>
<span class="quotelev3">&gt; &gt; &gt; main(int argc, char *argv[])
</span><br>
<span class="quotelev3">&gt; &gt; &gt; {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  int my_num, mpi_size ;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  int flag ;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_Init(&amp;argc, &amp;argv) ;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;my_num);
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  printf(&quot;%d calls MPI_Finalize()\n\n\n&quot;, my_num) ;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_Finalize() ;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_Finalized(&amp;flag) ;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  printf(&quot;MPI finalized: %d\n&quot;, flag) ;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  return 0 ;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; }
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -------
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Yves Caniou
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Associate Professor at Universit&#233; Lyon 1,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Member of the team project INRIA GRAAL in the LIP ENS-Lyon,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; D&#233;l&#233;gation CNRS in Japan French Laboratory of Informatics (JFLI),
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  * in Information Technology Center, The University of Tokyo,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    2-11-16 Yayoi, Bunkyo-ku, Tokyo 113-8658, Japan
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    tel: +81-3-5841-0540
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  * in National Institute of Informatics
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    2-1-2 Hitotsubashi, Chiyoda-ku, Tokyo 101-8430, Japan
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    tel: +81-3-4212-2412
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://graal.ens-lyon.fr/~ycaniou/">http://graal.ens-lyon.fr/~ycaniou/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Yves Caniou
</span><br>
<span class="quotelev1">&gt; Associate Professor at Universit&#233; Lyon 1,
</span><br>
<span class="quotelev1">&gt; Member of the team project INRIA GRAAL in the LIP ENS-Lyon,
</span><br>
<span class="quotelev1">&gt; D&#233;l&#233;gation CNRS in Japan French Laboratory of Informatics (JFLI),
</span><br>
<span class="quotelev1">&gt;   * in Information Technology Center, The University of Tokyo,
</span><br>
<span class="quotelev1">&gt;     2-11-16 Yayoi, Bunkyo-ku, Tokyo 113-8658, Japan
</span><br>
<span class="quotelev1">&gt;     tel: +81-3-5841-0540
</span><br>
<span class="quotelev1">&gt;   * in National Institute of Informatics
</span><br>
<span class="quotelev1">&gt;     2-1-2 Hitotsubashi, Chiyoda-ku, Tokyo 101-8430, Japan
</span><br>
<span class="quotelev1">&gt;     tel: +81-3-4212-2412
</span><br>
<span class="quotelev1">&gt; <a href="http://graal.ens-lyon.fr/~ycaniou/">http://graal.ens-lyon.fr/~ycaniou/</a>
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
<li><strong>Next message:</strong> <a href="13139.php">Jeff Squyres: "Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefined symbol:orte_xml_fp"</a>
<li><strong>Previous message:</strong> <a href="13137.php">Nguyen Toan: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<li><strong>In reply to:</strong> <a href="13136.php">Yves Caniou: "Re: [OMPI users] Program does not finish after MPI_Finalize()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13141.php">Yves Caniou: "Re: [OMPI users] Program does not finish after MPI_Finalize()"</a>
<li><strong>Reply:</strong> <a href="13141.php">Yves Caniou: "Re: [OMPI users] Program does not finish after MPI_Finalize()"</a>
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
