<?
$subject_val = "Re: [OMPI users] Buffer size limit and memory consumption problem on heterogeneous (32 bit / 64 bit) machines";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 20 07:26:08 2010" -->
<!-- isoreceived="20100520112608" -->
<!-- sent="Thu, 20 May 2010 13:26:03 +0200" -->
<!-- isosent="20100520112603" -->
<!-- name="Olivier Riff" -->
<!-- email="oliriff_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Buffer size limit and memory consumption problem on heterogeneous (32 bit / 64 bit) machines" -->
<!-- id="AANLkTikYjcGxBjg6UfwkD2MmzXgb1fdwQXoxxW1Kdpmc_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BF50F45.8090508_at_oracle.com" -->
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
<strong>From:</strong> Olivier Riff (<em>oliriff_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-20 07:26:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13101.php">Olivier Riff: "Re: [OMPI users] Buffer size limit and memory consumption problem on heterogeneous (32 bit / 64 bit) machines"</a>
<li><strong>Previous message:</strong> <a href="13099.php">Nysal Jan: "Re: [OMPI users] Buffer size limit and memory consumption problem on heterogeneous (32 bit / 64 bit) machines"</a>
<li><strong>In reply to:</strong> <a href="13098.php">Terry Dontje: "Re: [OMPI users] Buffer size limit and memory consumption problem on heterogeneous (32 bit / 64 bit) machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13099.php">Nysal Jan: "Re: [OMPI users] Buffer size limit and memory consumption problem on heterogeneous (32 bit / 64 bit) machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Terry,
<br>
<p>Thanks for your answer.
<br>
<p>2010/5/20 Terry Dontje &lt;terry.dontje_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt;  Olivier Riff wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I assume this question has been already discussed many times, but I can not
</span><br>
<span class="quotelev1">&gt; find on Internet a solution to my problem.
</span><br>
<span class="quotelev1">&gt; It is about buffer size limit of MPI_Send and MPI_Recv with heterogeneous
</span><br>
<span class="quotelev1">&gt; system (32 bit laptop / 64 bit cluster).
</span><br>
<span class="quotelev1">&gt; My configuration is :
</span><br>
<span class="quotelev1">&gt; open mpi 1.4, configured with: --without-openib --enable-heterogeneous
</span><br>
<span class="quotelev1">&gt; --enable-mpi-threads
</span><br>
<span class="quotelev1">&gt; Program is launched a laptop (32 bit Mandriva 2008) which distributes tasks
</span><br>
<span class="quotelev1">&gt; to do to a cluster of 70 processors  (64 bit RedHat Entreprise
</span><br>
<span class="quotelev1">&gt; distribution):
</span><br>
<span class="quotelev1">&gt; I have to send various buffer size from few bytes till 30Mo.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  You really want to get your program running without the tcp_eager_limit
</span><br>
<span class="quotelev1">&gt; set if you want a better usage of memory.  I believe the crash has something
</span><br>
<span class="quotelev1">&gt; to do with the rendezvous protocol in OMPI.  Have you narrowed this failure
</span><br>
<span class="quotelev1">&gt; down to a simple MPI program?  Also I noticed that you're configuring with
</span><br>
<span class="quotelev1">&gt; --enable-mpi-threads, have you tried configuring without that option?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
-&gt; No, unfortunately I did not narrowed this behaviour to a simple MPI
<br>
program. I think I will have to do it if I do not find a solution in the
<br>
next days.
<br>
I will also make the test without the --enable-mpi-threads configuration.
<br>
<p><p><span class="quotelev1">&gt; I tested following commands:
</span><br>
<span class="quotelev1">&gt; 1) mpirun -v -machinefile machinefile.txt MyMPIProgram
</span><br>
<span class="quotelev1">&gt; -&gt; crash on client side ( 64 bit RedHat Entreprise ) when sent buffer size
</span><br>
<span class="quotelev2">&gt; &gt; 65536.
</span><br>
<span class="quotelev1">&gt; 2) mpirun --mca btl_tcp_eager_limit 30000000 -v -machinefile
</span><br>
<span class="quotelev1">&gt; machinefile.txt MyMPIProgram
</span><br>
<span class="quotelev1">&gt; -&gt; works but has the effect of generating gigantic memory consumption on 32
</span><br>
<span class="quotelev1">&gt; bit machine side after MPI_Recv. Memory consumption goes from 800Mo to 2,1Go
</span><br>
<span class="quotelev1">&gt; after receiving about 20ko from each 70 clients ( a total of about 1.4 Mo
</span><br>
<span class="quotelev1">&gt; ).  This makes my program crash later because I have no more memory to
</span><br>
<span class="quotelev1">&gt; allocate new structures. I read in a openmpi forum thread that setting
</span><br>
<span class="quotelev1">&gt; btl_tcp_eager_limit to a huge value explains this huge memory consumption
</span><br>
<span class="quotelev1">&gt; when a message sent does not have a preposted ready recv. Also after all
</span><br>
<span class="quotelev1">&gt; messages have been received and there is no more traffic activity : the
</span><br>
<span class="quotelev1">&gt; memory consumed remains at 2.1go... and I do not understand why.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are the 70 clients all on different nodes?  I am curious if the 2.1GB is
</span><br>
<span class="quotelev1">&gt; due to the SM BTL or possibly a leak in the TCP BTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>No, 70 clients are only on 9 nodes. In fact it is 72 clients: they are nine
<br>
8-processor machines.
<br>
The 2.1Gb memory consumption appears when I sequentially try to read the
<br>
result on each 72 clients (for loop from 1 to 72 calling MPI_Recv). I assume
<br>
that many clients have already sent the result whereas the server has not
<br>
called the MPI_Rec for the corresponding rank yet.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is the best way to do in order to have a working program which also
</span><br>
<span class="quotelev1">&gt; has a small memory consumption (the speed performance can be lower) ?
</span><br>
<span class="quotelev1">&gt; I tried to play with mca paramters btl_tcp_sndbuf and mca btl_tcp_rcvbuf,
</span><br>
<span class="quotelev1">&gt; but without success.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; [image: Oracle]
</span><br>
<span class="quotelev1">&gt;   Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.650.633.7054
</span><br>
<span class="quotelev1">&gt;  Oracle * - Performance Technologies*
</span><br>
<span class="quotelev1">&gt;  95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13100/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13101.php">Olivier Riff: "Re: [OMPI users] Buffer size limit and memory consumption problem on heterogeneous (32 bit / 64 bit) machines"</a>
<li><strong>Previous message:</strong> <a href="13099.php">Nysal Jan: "Re: [OMPI users] Buffer size limit and memory consumption problem on heterogeneous (32 bit / 64 bit) machines"</a>
<li><strong>In reply to:</strong> <a href="13098.php">Terry Dontje: "Re: [OMPI users] Buffer size limit and memory consumption problem on heterogeneous (32 bit / 64 bit) machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13099.php">Nysal Jan: "Re: [OMPI users] Buffer size limit and memory consumption problem on heterogeneous (32 bit / 64 bit) machines"</a>
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
