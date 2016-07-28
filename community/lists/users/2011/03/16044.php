<?
$subject_val = "[OMPI users] printf and scanf problem of C code compiled with Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 29 13:29:08 2011" -->
<!-- isoreceived="20110329172908" -->
<!-- sent="Wed, 30 Mar 2011 01:29:03 +0800" -->
<!-- isosent="20110329172903" -->
<!-- name="Meilin Bai" -->
<!-- email="meilin.bai_at_[hidden]" -->
<!-- subject="[OMPI users] printf and scanf problem of C code compiled with Open MPI" -->
<!-- id="AANLkTimJd85+DfBPuSS+k2DS3JJUg4Hf7u2qhY9jdEMg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] printf and scanf problem of C code compiled with Open MPI<br>
<strong>From:</strong> Meilin Bai (<em>meilin.bai_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-29 13:29:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16045.php">Prentice Bisbal: "Re: [OMPI users] printf and scanf problem of C code compiled with Open	MPI"</a>
<li><strong>Previous message:</strong> <a href="16043.php">Federico Golfr&#232; Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16045.php">Prentice Bisbal: "Re: [OMPI users] printf and scanf problem of C code compiled with Open	MPI"</a>
<li><strong>Reply:</strong> <a href="16045.php">Prentice Bisbal: "Re: [OMPI users] printf and scanf problem of C code compiled with Open	MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear open-mpi users:
<br>
<p>I come across a little problem when running a MPI C program compiled with
<br>
Open MPI 1.4.3. A part of codes as follows:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;numprocs);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;myid);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Get_processor_name(processor_name, &amp;namelen);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (myid == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Please give N= &quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;scanf(&quot;%d&quot;, &amp;n);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;startwtime = MPI_Wtime();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>If comment out the sentence of &quot;fflush(stdout);&quot;, it doesn't print out the
<br>
message till I input an integer n. And if I add the fflush function between
<br>
them, it works as expected, though comsumming time obviously.
<br>
<p>However, when I compiled it with Mpich2-1.3.2p1, without fflush function in
<br>
the code, it works correctly.
<br>
<p>Can anyone know what the matter is.
<br>
<p>Thanks!
<br>
<p><pre>
-- 
Meilin Bai
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16044/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16045.php">Prentice Bisbal: "Re: [OMPI users] printf and scanf problem of C code compiled with Open	MPI"</a>
<li><strong>Previous message:</strong> <a href="16043.php">Federico Golfr&#232; Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16045.php">Prentice Bisbal: "Re: [OMPI users] printf and scanf problem of C code compiled with Open	MPI"</a>
<li><strong>Reply:</strong> <a href="16045.php">Prentice Bisbal: "Re: [OMPI users] printf and scanf problem of C code compiled with Open	MPI"</a>
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
