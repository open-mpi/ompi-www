<?
$subject_val = "[OMPI users] Program does not finish after MPI_Finalize()";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 24 02:16:12 2010" -->
<!-- isoreceived="20100524061612" -->
<!-- sent="Mon, 24 May 2010 08:15:59 +0200" -->
<!-- isosent="20100524061559" -->
<!-- name="Yves Caniou" -->
<!-- email="yves.caniou_at_[hidden]" -->
<!-- subject="[OMPI users] Program does not finish after MPI_Finalize()" -->
<!-- id="201005240816.00014.yves.caniou_at_ens-lyon.fr" -->
<!-- charset="iso-8859-15" -->
<!-- inreplyto="201005191750.08444.yves.caniou_at_ens-lyon.fr" -->
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
<strong>Subject:</strong> [OMPI users] Program does not finish after MPI_Finalize()<br>
<strong>From:</strong> Yves Caniou (<em>yves.caniou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-24 02:15:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13135.php">Ralph Castain: "Re: [OMPI users] Program does not finish after MPI_Finalize()"</a>
<li><strong>Previous message:</strong> <a href="13133.php">Doug Reeder: "Re: [OMPI users] Building 1.4.x on mac snow leopard with intel compilers"</a>
<li><strong>In reply to:</strong> <a href="13089.php">Yves Caniou: "[OMPI users] Execution don't go back to shell after MPI_Finalize()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13135.php">Ralph Castain: "Re: [OMPI users] Program does not finish after MPI_Finalize()"</a>
<li><strong>Reply:</strong> <a href="13135.php">Ralph Castain: "Re: [OMPI users] Program does not finish after MPI_Finalize()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
(follows a previous mail)
<br>
<p>I don't understand the strange behavior of this small code: sometimes it ends, sometimes not.
<br>
The output of MPI_Finalized is 1 (for each processes if n&gt;1), but the code doesn't end. I am forced to use Ctrl-C.
<br>
<p>I compiled it with the command line:
<br>
&quot;mpicc --std=c99&quot;  /  gcc is 4.5, on a Quad-Core AMD Opteron(tm) Processor 8356
<br>
&quot;mpiexec -n 1 a.out&quot; or &quot;mpiexec -n 2 a.out&quot; to run the code.
<br>
&quot;ps aux&quot; returns that the program is in Sl+ state.
<br>
<p>Sometimes, I can see also a line like this:
<br>
p10015    6892  0.1  0.0  43376  1828 ?        Ssl  14:50   0:00 orted --hnp --set-sid --report-uri 8 --singleton-died-pipe 9
<br>
<p>Is this a bug? Do I do something wrong?
<br>
If you have any tips...
<br>
Thank you.
<br>
<p>---------
<br>
#include &quot;stdio.h&quot;
<br>
#include &quot;mpi.h&quot;
<br>
<p>int
<br>
main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;int my_num, mpi_size ;
<br>
&nbsp;&nbsp;int flag ;
<br>
<p>&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv) ;
<br>
<p>&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;my_num);
<br>
&nbsp;&nbsp;printf(&quot;%d calls MPI_Finalize()\n\n\n&quot;, my_num) ;
<br>
<p>&nbsp;&nbsp;MPI_Finalize() ;
<br>
<p>&nbsp;&nbsp;MPI_Finalized(&amp;flag) ;
<br>
&nbsp;&nbsp;printf(&quot;MPI finalized: %d\n&quot;, flag) ;
<br>
&nbsp;&nbsp;return 0 ;
<br>
}
<br>
-------
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="13135.php">Ralph Castain: "Re: [OMPI users] Program does not finish after MPI_Finalize()"</a>
<li><strong>Previous message:</strong> <a href="13133.php">Doug Reeder: "Re: [OMPI users] Building 1.4.x on mac snow leopard with intel compilers"</a>
<li><strong>In reply to:</strong> <a href="13089.php">Yves Caniou: "[OMPI users] Execution don't go back to shell after MPI_Finalize()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13135.php">Ralph Castain: "Re: [OMPI users] Program does not finish after MPI_Finalize()"</a>
<li><strong>Reply:</strong> <a href="13135.php">Ralph Castain: "Re: [OMPI users] Program does not finish after MPI_Finalize()"</a>
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
