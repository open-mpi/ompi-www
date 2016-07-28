<?
$subject_val = "[OMPI users] Buffer size limit and memory consumption problem on heterogeneous (32 bit / 64 bit) machines";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 20 04:32:29 2010" -->
<!-- isoreceived="20100520083229" -->
<!-- sent="Thu, 20 May 2010 10:32:23 +0200" -->
<!-- isosent="20100520083223" -->
<!-- name="Olivier Riff" -->
<!-- email="oliriff_at_[hidden]" -->
<!-- subject="[OMPI users] Buffer size limit and memory consumption problem on heterogeneous (32 bit / 64 bit) machines" -->
<!-- id="AANLkTinJhsYq_hbttkimG3E_m5oHQpNr07QgMKqVWK56_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Buffer size limit and memory consumption problem on heterogeneous (32 bit / 64 bit) machines<br>
<strong>From:</strong> Olivier Riff (<em>oliriff_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-20 04:32:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13097.php">Olivier Riff: "[OMPI users] General question on the implementation of a &quot;scheduler&quot; on client side..."</a>
<li><strong>Previous message:</strong> <a href="13095.php">jody: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13098.php">Terry Dontje: "Re: [OMPI users] Buffer size limit and memory consumption problem on heterogeneous (32 bit / 64 bit) machines"</a>
<li><strong>Reply:</strong> <a href="13098.php">Terry Dontje: "Re: [OMPI users] Buffer size limit and memory consumption problem on heterogeneous (32 bit / 64 bit) machines"</a>
<li><strong>Reply:</strong> <a href="13099.php">Nysal Jan: "Re: [OMPI users] Buffer size limit and memory consumption problem on heterogeneous (32 bit / 64 bit) machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I assume this question has been already discussed many times, but I can not
<br>
find on Internet a solution to my problem.
<br>
It is about buffer size limit of MPI_Send and MPI_Recv with heterogeneous
<br>
system (32 bit laptop / 64 bit cluster).
<br>
My configuration is :
<br>
open mpi 1.4, configured with: --without-openib --enable-heterogeneous
<br>
--enable-mpi-threads
<br>
Program is launched a laptop (32 bit Mandriva 2008) which distributes tasks
<br>
to do to a cluster of 70 processors  (64 bit RedHat Entreprise
<br>
distribution):
<br>
I have to send various buffer size from few bytes till 30Mo.
<br>
<p>I tested following commands:
<br>
1) mpirun -v -machinefile machinefile.txt MyMPIProgram
<br>
-&gt; crash on client side ( 64 bit RedHat Entreprise ) when sent buffer size &gt;
<br>
65536.
<br>
2) mpirun --mca btl_tcp_eager_limit 30000000 -v -machinefile machinefile.txt
<br>
MyMPIProgram
<br>
-&gt; works but has the effect of generating gigantic memory consumption on 32
<br>
bit machine side after MPI_Recv. Memory consumption goes from 800Mo to 2,1Go
<br>
after receiving about 20ko from each 70 clients ( a total of about 1.4 Mo
<br>
).  This makes my program crash later because I have no more memory to
<br>
allocate new structures. I read in a openmpi forum thread that setting
<br>
btl_tcp_eager_limit to a huge value explains this huge memory consumption
<br>
when a message sent does not have a preposted ready recv. Also after all
<br>
messages have been received and there is no more traffic activity : the
<br>
memory consumed remains at 2.1go... and I do not understand why.
<br>
<p>What is the best way to do in order to have a working program which also has
<br>
a small memory consumption (the speed performance can be lower) ?
<br>
I tried to play with mca paramters btl_tcp_sndbuf and mca btl_tcp_rcvbuf,
<br>
but without success.
<br>
<p>Thanks in advance for you help.
<br>
<p>Best regards,
<br>
<p>Olivier
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13096/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13097.php">Olivier Riff: "[OMPI users] General question on the implementation of a &quot;scheduler&quot; on client side..."</a>
<li><strong>Previous message:</strong> <a href="13095.php">jody: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13098.php">Terry Dontje: "Re: [OMPI users] Buffer size limit and memory consumption problem on heterogeneous (32 bit / 64 bit) machines"</a>
<li><strong>Reply:</strong> <a href="13098.php">Terry Dontje: "Re: [OMPI users] Buffer size limit and memory consumption problem on heterogeneous (32 bit / 64 bit) machines"</a>
<li><strong>Reply:</strong> <a href="13099.php">Nysal Jan: "Re: [OMPI users] Buffer size limit and memory consumption problem on heterogeneous (32 bit / 64 bit) machines"</a>
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
