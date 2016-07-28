<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 29 14:08:42 2007" -->
<!-- isoreceived="20070329180842" -->
<!-- sent="Thu, 29 Mar 2007 11:08:37 -0700" -->
<!-- isosent="20070329180837" -->
<!-- name="Warner Yuen" -->
<!-- email="wyuen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Odd behavior with slots=4" -->
<!-- id="6F335B80-E187-4DA9-98C0-AFEB20468054_at_apple.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.25.1175184005.28350.users_at_open-mpi.org" -->
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
<strong>From:</strong> Warner Yuen (<em>wyuen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-29 14:08:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2946.php">pooja_at_[hidden]: "[OMPI users] Can anybody guide me how to make a openmpi file"</a>
<li><strong>Previous message:</strong> <a href="2944.php">Jens Klostermann: "Re: [OMPI users] Jeff Squyres: &quot;Re:  password orted problem&quot;"</a>
<li><strong>Maybe in reply to:</strong> <a href="2937.php">Warner Yuen: "[OMPI users] Odd behavior with slots=4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>Thanks for the tips. It looks like using &quot;-bynode&quot; as opposed to &quot;- 
<br>
byslot&quot; is the best way to distribute processes when running Amber9's  
<br>
Sander module. I confirmed that with MPICH-MX as well. I didn't  
<br>
realize that these settings were available. This really helps because  
<br>
I was getting bummed that I would just have to keep various hostfiles  
<br>
around some with slots=XX and some with nothing but the hostname.
<br>
<p>Just an FYI on the timings:
<br>
<p>-bynode:
<br>
real    0m35.035s
<br>
<p>-byslot:
<br>
real    0m44.856s
<br>
<p><p>Warner Yuen
<br>
Scientific Computing Consultant
<br>
<p>On Mar 29, 2007, at 9:00 AM, users-request_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Wed, 28 Mar 2007 12:19:15 -0400
</span><br>
<span class="quotelev1">&gt; From: George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Odd behavior with slots=4
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;2A58CF38-0FC4-4289-85E1-315376540F63_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=US-ASCII; delsp=yes; format=flowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are multiple answers possible here. One is related to the over-
</span><br>
<span class="quotelev1">&gt; subscription of your cluster, but I expect that there are at least 4
</span><br>
<span class="quotelev1">&gt; cores per node if you want to use the slots=4 option. The real
</span><br>
<span class="quotelev1">&gt; question is what is the communication pattern in this benchmark ? and
</span><br>
<span class="quotelev1">&gt; how this match the distribution of the processes you use ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As a matter of fact, if when you have XX processes per node, and all
</span><br>
<span class="quotelev1">&gt; of them will try to send a message to a remote process (here remote
</span><br>
<span class="quotelev1">&gt; means on another node), then they will have to share the physical
</span><br>
<span class="quotelev1">&gt; Myrinet link, which of course will lead to lower global performances
</span><br>
<span class="quotelev1">&gt; when XX increase (from 1, to 2 and then 4). And this is true without
</span><br>
<span class="quotelev1">&gt; regard on how you use the MX driver (via the Open MPI MTL or BTL).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI provide 2 options to allow you to distribute the processes
</span><br>
<span class="quotelev1">&gt; based on different criteria. Try to use -bynode and -byslot to see if
</span><br>
<span class="quotelev1">&gt; this affect the overall performances.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt;      george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 28, 2007, at 9:56 AM, Warner Yuen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Curious performance when using OpenMPI 1.2 to run Amber 9 on my
</span><br>
<span class="quotelev2">&gt;&gt; Xserve Xeon 5100 cluster. Each cluster node is a dual socket, dual-
</span><br>
<span class="quotelev2">&gt;&gt; core system. The cluster is also running with Myrinet 2000 with MX.
</span><br>
<span class="quotelev2">&gt;&gt; I'm just running some tests with one of Amber's benchmarks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems that my hostfiles effect the performance of the
</span><br>
<span class="quotelev2">&gt;&gt; application. I tried variations of the hostfile to see what would
</span><br>
<span class="quotelev2">&gt;&gt; happen. I did a straight mpirun with no mca options set using:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpirun -np 32&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; variation 1: hostname
</span><br>
<span class="quotelev2">&gt;&gt; real    0m35.391s
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; variation 2: hostname slots=4
</span><br>
<span class="quotelev2">&gt;&gt; real    0m45.698s
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; variation 3: hostname slots=2
</span><br>
<span class="quotelev2">&gt;&gt; real    0m38.761s
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems that the best performance I achieve is when I use
</span><br>
<span class="quotelev2">&gt;&gt; variation 1 with only the hostname and execute the command:
</span><br>
<span class="quotelev2">&gt;&gt;  &quot;mpirun --hostfile hostfile -np 32 &lt;my_application&gt;&quot; . Its
</span><br>
<span class="quotelev2">&gt;&gt; shockingly about 13% better performance than if I use the hostfile
</span><br>
<span class="quotelev2">&gt;&gt; with a syntax of &quot;hostname slots=4&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I also tried variations of in my mpirun command, here are the times:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; straight mpirun with not mca options
</span><br>
<span class="quotelev2">&gt;&gt; real    0m45.698s
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and....
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;-mca mpi_yield_when_idle 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt; real    0m44.912s
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and....
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  &quot;-mca mtl mx -mca pml cm&quot;
</span><br>
<span class="quotelev2">&gt;&gt; real    0m45.002s
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2945/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2946.php">pooja_at_[hidden]: "[OMPI users] Can anybody guide me how to make a openmpi file"</a>
<li><strong>Previous message:</strong> <a href="2944.php">Jens Klostermann: "Re: [OMPI users] Jeff Squyres: &quot;Re:  password orted problem&quot;"</a>
<li><strong>Maybe in reply to:</strong> <a href="2937.php">Warner Yuen: "[OMPI users] Odd behavior with slots=4"</a>
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
