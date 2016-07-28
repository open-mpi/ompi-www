<?
$subject_val = "Re: [OMPI users] Buffer size limit and memory consumption problem on heterogeneous (32 bit / 64 bit) machines";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 20 06:32:06 2010" -->
<!-- isoreceived="20100520103206" -->
<!-- sent="Thu, 20 May 2010 06:30:29 -0400" -->
<!-- isosent="20100520103029" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Buffer size limit and memory consumption problem on heterogeneous (32 bit / 64 bit) machines" -->
<!-- id="4BF50F45.8090508_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTinJhsYq_hbttkimG3E_m5oHQpNr07QgMKqVWK56_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Buffer size limit and memory consumption problem on heterogeneous (32 bit / 64 bit) machines<br>
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-20 06:30:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13099.php">Nysal Jan: "Re: [OMPI users] Buffer size limit and memory consumption problem on heterogeneous (32 bit / 64 bit) machines"</a>
<li><strong>Previous message:</strong> <a href="13097.php">Olivier Riff: "[OMPI users] General question on the implementation of a &quot;scheduler&quot; on client side..."</a>
<li><strong>In reply to:</strong> <a href="13096.php">Olivier Riff: "[OMPI users] Buffer size limit and memory consumption problem on heterogeneous (32 bit / 64 bit) machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13100.php">Olivier Riff: "Re: [OMPI users] Buffer size limit and memory consumption problem on heterogeneous (32 bit / 64 bit) machines"</a>
<li><strong>Reply:</strong> <a href="13100.php">Olivier Riff: "Re: [OMPI users] Buffer size limit and memory consumption problem on heterogeneous (32 bit / 64 bit) machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Olivier Riff wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I assume this question has been already discussed many times, but I 
</span><br>
<span class="quotelev1">&gt; can not find on Internet a solution to my problem.
</span><br>
<span class="quotelev1">&gt; It is about buffer size limit of MPI_Send and MPI_Recv with 
</span><br>
<span class="quotelev1">&gt; heterogeneous system (32 bit laptop / 64 bit cluster).
</span><br>
<span class="quotelev1">&gt; My configuration is :
</span><br>
<span class="quotelev1">&gt; open mpi 1.4, configured with: --without-openib --enable-heterogeneous 
</span><br>
<span class="quotelev1">&gt; --enable-mpi-threads
</span><br>
<span class="quotelev1">&gt; Program is launched a laptop (32 bit Mandriva 2008) which distributes 
</span><br>
<span class="quotelev1">&gt; tasks to do to a cluster of 70 processors  (64 bit RedHat Entreprise 
</span><br>
<span class="quotelev1">&gt; distribution):
</span><br>
<span class="quotelev1">&gt; I have to send various buffer size from few bytes till 30Mo.
</span><br>
<span class="quotelev1">&gt;
</span><br>
You really want to get your program running without the tcp_eager_limit 
<br>
set if you want a better usage of memory.  I believe the crash has 
<br>
something to do with the rendezvous protocol in OMPI.  Have you narrowed 
<br>
this failure down to a simple MPI program?  Also I noticed that you're 
<br>
configuring with --enable-mpi-threads, have you tried configuring 
<br>
without that option?
<br>
<span class="quotelev1">&gt; I tested following commands:
</span><br>
<span class="quotelev1">&gt; 1) mpirun -v -machinefile machinefile.txt MyMPIProgram
</span><br>
<span class="quotelev1">&gt; -&gt; crash on client side ( 64 bit RedHat Entreprise ) when sent buffer 
</span><br>
<span class="quotelev1">&gt; size &gt; 65536.
</span><br>
<span class="quotelev1">&gt; 2) mpirun --mca btl_tcp_eager_limit 30000000 -v -machinefile 
</span><br>
<span class="quotelev1">&gt; machinefile.txt MyMPIProgram
</span><br>
<span class="quotelev1">&gt; -&gt; works but has the effect of generating gigantic memory consumption 
</span><br>
<span class="quotelev1">&gt; on 32 bit machine side after MPI_Recv. Memory consumption goes from 
</span><br>
<span class="quotelev1">&gt; 800Mo to 2,1Go after receiving about 20ko from each 70 clients ( a 
</span><br>
<span class="quotelev1">&gt; total of about 1.4 Mo ).  This makes my program crash later because I 
</span><br>
<span class="quotelev1">&gt; have no more memory to allocate new structures. I read in a openmpi 
</span><br>
<span class="quotelev1">&gt; forum thread that setting btl_tcp_eager_limit to a huge value explains 
</span><br>
<span class="quotelev1">&gt; this huge memory consumption when a message sent does not have a 
</span><br>
<span class="quotelev1">&gt; preposted ready recv. Also after all messages have been received and 
</span><br>
<span class="quotelev1">&gt; there is no more traffic activity : the memory consumed remains at 
</span><br>
<span class="quotelev1">&gt; 2.1go... and I do not understand why.
</span><br>
Are the 70 clients all on different nodes?  I am curious if the 2.1GB is 
<br>
due to the SM BTL or possibly a leak in the TCP BTL.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is the best way to do in order to have a working program which 
</span><br>
<span class="quotelev1">&gt; also has a small memory consumption (the speed performance can be lower) ?
</span><br>
<span class="quotelev1">&gt; I tried to play with mca paramters btl_tcp_sndbuf and mca 
</span><br>
<span class="quotelev1">&gt; btl_tcp_rcvbuf, but without success.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance for you help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Olivier
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<p><p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.650.633.7054
Oracle * - Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13098/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-13098/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13099.php">Nysal Jan: "Re: [OMPI users] Buffer size limit and memory consumption problem on heterogeneous (32 bit / 64 bit) machines"</a>
<li><strong>Previous message:</strong> <a href="13097.php">Olivier Riff: "[OMPI users] General question on the implementation of a &quot;scheduler&quot; on client side..."</a>
<li><strong>In reply to:</strong> <a href="13096.php">Olivier Riff: "[OMPI users] Buffer size limit and memory consumption problem on heterogeneous (32 bit / 64 bit) machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13100.php">Olivier Riff: "Re: [OMPI users] Buffer size limit and memory consumption problem on heterogeneous (32 bit / 64 bit) machines"</a>
<li><strong>Reply:</strong> <a href="13100.php">Olivier Riff: "Re: [OMPI users] Buffer size limit and memory consumption problem on heterogeneous (32 bit / 64 bit) machines"</a>
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
