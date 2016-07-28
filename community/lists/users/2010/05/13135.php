<?
$subject_val = "Re: [OMPI users] Program does not finish after MPI_Finalize()";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 24 02:35:27 2010" -->
<!-- isoreceived="20100524063527" -->
<!-- sent="Mon, 24 May 2010 00:35:17 -0600" -->
<!-- isosent="20100524063517" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Program does not finish after MPI_Finalize()" -->
<!-- id="1A73923D-9F5D-49FC-BB2A-A884BF5E675F_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="201005240816.00014.yves.caniou_at_ens-lyon.fr" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-24 02:35:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13136.php">Yves Caniou: "Re: [OMPI users] Program does not finish after MPI_Finalize()"</a>
<li><strong>Previous message:</strong> <a href="13134.php">Yves Caniou: "[OMPI users] Program does not finish after MPI_Finalize()"</a>
<li><strong>In reply to:</strong> <a href="13134.php">Yves Caniou: "[OMPI users] Program does not finish after MPI_Finalize()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13136.php">Yves Caniou: "Re: [OMPI users] Program does not finish after MPI_Finalize()"</a>
<li><strong>Reply:</strong> <a href="13136.php">Yves Caniou: "Re: [OMPI users] Program does not finish after MPI_Finalize()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks to me like you are getting version confusion - your path and ld_library_path aren't pointing to the place where you installed 1.4.1 and you are either getting someone else's mpiexec or getting 1.2.x instead. Could also be that mpicc isn't the one from 1.4.1 either.
<br>
<p>Check to ensure that the mpiexec and mpicc you are using are from 1.4.1, and that your environment is pointing to the right place.
<br>
<p>On May 24, 2010, at 12:15 AM, Yves Caniou wrote:
<br>
<p><span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt; (follows a previous mail)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't understand the strange behavior of this small code: sometimes it ends, sometimes not.
</span><br>
<span class="quotelev1">&gt; The output of MPI_Finalized is 1 (for each processes if n&gt;1), but the code doesn't end. I am forced to use Ctrl-C.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I compiled it with the command line:
</span><br>
<span class="quotelev1">&gt; &quot;mpicc --std=c99&quot;  /  gcc is 4.5, on a Quad-Core AMD Opteron(tm) Processor 8356
</span><br>
<span class="quotelev1">&gt; &quot;mpiexec -n 1 a.out&quot; or &quot;mpiexec -n 2 a.out&quot; to run the code.
</span><br>
<span class="quotelev1">&gt; &quot;ps aux&quot; returns that the program is in Sl+ state.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sometimes, I can see also a line like this:
</span><br>
<span class="quotelev1">&gt; p10015    6892  0.1  0.0  43376  1828 ?        Ssl  14:50   0:00 orted --hnp --set-sid --report-uri 8 --singleton-died-pipe 9
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this a bug? Do I do something wrong?
</span><br>
<span class="quotelev1">&gt; If you have any tips...
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---------
</span><br>
<span class="quotelev1">&gt; #include &quot;stdio.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int
</span><br>
<span class="quotelev1">&gt; main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  int my_num, mpi_size ;
</span><br>
<span class="quotelev1">&gt;  int flag ;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MPI_Init(&amp;argc, &amp;argv) ;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;my_num);
</span><br>
<span class="quotelev1">&gt;  printf(&quot;%d calls MPI_Finalize()\n\n\n&quot;, my_num) ;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize() ;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MPI_Finalized(&amp;flag) ;
</span><br>
<span class="quotelev1">&gt;  printf(&quot;MPI finalized: %d\n&quot;, flag) ;
</span><br>
<span class="quotelev1">&gt;  return 0 ;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; -------
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
<span class="quotelev1">&gt;  * in Information Technology Center, The University of Tokyo,
</span><br>
<span class="quotelev1">&gt;    2-11-16 Yayoi, Bunkyo-ku, Tokyo 113-8658, Japan
</span><br>
<span class="quotelev1">&gt;    tel: +81-3-5841-0540
</span><br>
<span class="quotelev1">&gt;  * in National Institute of Informatics
</span><br>
<span class="quotelev1">&gt;    2-1-2 Hitotsubashi, Chiyoda-ku, Tokyo 101-8430, Japan
</span><br>
<span class="quotelev1">&gt;    tel: +81-3-4212-2412 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13136.php">Yves Caniou: "Re: [OMPI users] Program does not finish after MPI_Finalize()"</a>
<li><strong>Previous message:</strong> <a href="13134.php">Yves Caniou: "[OMPI users] Program does not finish after MPI_Finalize()"</a>
<li><strong>In reply to:</strong> <a href="13134.php">Yves Caniou: "[OMPI users] Program does not finish after MPI_Finalize()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13136.php">Yves Caniou: "Re: [OMPI users] Program does not finish after MPI_Finalize()"</a>
<li><strong>Reply:</strong> <a href="13136.php">Yves Caniou: "Re: [OMPI users] Program does not finish after MPI_Finalize()"</a>
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
