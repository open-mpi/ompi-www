<?
$subject_val = "Re: [OMPI users] Problem with getting started [solved]";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 12 12:23:13 2008" -->
<!-- isoreceived="20080612162313" -->
<!-- sent="Thu, 12 Jun 2008 18:23:00 +0200" -->
<!-- isosent="20080612162300" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with getting started [solved]" -->
<!-- id="200806121823.00488.keller_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="200806121403.13999.manuel.freiberger_at_tugraz.at" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with getting started [solved]<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-12 12:23:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5869.php">Tim Mattox: "[OMPI users] Brief mail services outage today"</a>
<li><strong>Previous message:</strong> <a href="5867.php">Arturas Ziemys: "[OMPI users] parallel AMBER &amp; PBS issue"</a>
<li><strong>In reply to:</strong> <a href="5866.php">Manuel Freiberger: "Re: [OMPI users] Problem with getting started [solved]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5871.php">Manuel Freiberger: "Re: [OMPI users] Problem with getting started [solved]"</a>
<li><strong>Reply:</strong> <a href="5871.php">Manuel Freiberger: "Re: [OMPI users] Problem with getting started [solved]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
are You sure it was not a Firewall issue on the Suse 10.2?
<br>
If there are any connections from the Gentoo machine trying to access the 
<br>
orted on the Suse, check in /var/log/firewall.
<br>
<p>For the time being, try stopping the firewall by (as root) with
<br>
/etc/init.d/SuSEfirewall2_setup stop
<br>
and test whether it works ,-]
<br>
<p>With best regards,
<br>
Rainer
<br>
<p><p>On Donnerstag, 12. Juni 2008, Manuel Freiberger wrote:
<br>
<span class="quotelev1">&gt; Hi!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok, I found the problem. I reinstallen OMPI on both PCs but this time only
</span><br>
<span class="quotelev1">&gt; locally in the users home directory. Now, the sample code works perfectly.
</span><br>
<span class="quotelev1">&gt; I'm not sure where the error really was located. It could be that it was a
</span><br>
<span class="quotelev1">&gt; problem with the Gentoo installation because OMPI is still marked unstable
</span><br>
<span class="quotelev1">&gt; in portage (~x86 keyword).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Manuel
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wednesday 11 June 2008 18:52, Manuel Freiberger wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello everybody!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; First of all I wanted to point out that I'm beginner regarding openMPI
</span><br>
<span class="quotelev2">&gt; &gt; and all I try to achieve is to get a simple program working on two PCs.
</span><br>
<span class="quotelev2">&gt; &gt; So far I've installed openMPI 1.2.6 on two PCs (one running OpenSUSE
</span><br>
<span class="quotelev2">&gt; &gt; 10.2, the other one Gentoo).
</span><br>
<span class="quotelev2">&gt; &gt; I set up two identical users on both systems and made sure that I can
</span><br>
<span class="quotelev2">&gt; &gt; make an SSH connection between them using private/public key
</span><br>
<span class="quotelev2">&gt; &gt; authentication.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Next I ran the command
</span><br>
<span class="quotelev2">&gt; &gt;   mpirun -np 2 --hostfile myhosts uptime
</span><br>
<span class="quotelev2">&gt; &gt; which gave the result
</span><br>
<span class="quotelev2">&gt; &gt;   6:41pm  up 1 day  5:16,  4 users,  load average: 0.00, 0.07, 0.17
</span><br>
<span class="quotelev2">&gt; &gt;  18:43:45 up  7:36,  6 users,  load average: 0.00, 0.02, 0.05
</span><br>
<span class="quotelev2">&gt; &gt; so I concluded that MPI should work in principle.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Next I tried the following code which I copied from Boost.MPI:
</span><br>
<span class="quotelev2">&gt; &gt; ---- snip
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt; &gt;   int rank;
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt; &gt;   if (rank == 0)
</span><br>
<span class="quotelev2">&gt; &gt;   {
</span><br>
<span class="quotelev2">&gt; &gt;     std::cout &lt;&lt; &quot;Rank 0 is going to send&quot; &lt;&lt; std::endl;
</span><br>
<span class="quotelev2">&gt; &gt;     int value = 17;
</span><br>
<span class="quotelev2">&gt; &gt;     int result = MPI_Send(&amp;value, 1, MPI_INT, 1, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;     if (result == MPI_SUCCESS)
</span><br>
<span class="quotelev2">&gt; &gt;       std::cout &lt;&lt; &quot;Rank 0 OK!&quot; &lt;&lt; std::endl;
</span><br>
<span class="quotelev2">&gt; &gt;   }
</span><br>
<span class="quotelev2">&gt; &gt;   else if (rank == 1)
</span><br>
<span class="quotelev2">&gt; &gt;   {
</span><br>
<span class="quotelev2">&gt; &gt;     std::cout &lt;&lt; &quot;Rank 1 is waiting for answer&quot; &lt;&lt; std::endl;
</span><br>
<span class="quotelev2">&gt; &gt;     int value;
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Status status;
</span><br>
<span class="quotelev2">&gt; &gt;     int result = MPI_Recv(&amp;value, 1, MPI_INT, 0, 0, MPI_COMM_WORLD,
</span><br>
<span class="quotelev2">&gt; &gt; 			  &amp;status);
</span><br>
<span class="quotelev2">&gt; &gt;     if (result == MPI_SUCCESS &amp;&amp; value == 17)
</span><br>
<span class="quotelev2">&gt; &gt;       std::cout &lt;&lt; &quot;Rank 1 OK!&quot; &lt;&lt; std::endl;
</span><br>
<span class="quotelev2">&gt; &gt;   }
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt;   return 0;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; ---- snap
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Starting a parallel job using
</span><br>
<span class="quotelev2">&gt; &gt;   mpirun -np 2 --hostfile myhosts mpi-test
</span><br>
<span class="quotelev2">&gt; &gt; I get the answer
</span><br>
<span class="quotelev2">&gt; &gt;   Rank 0 is going to send
</span><br>
<span class="quotelev2">&gt; &gt;   Rank 1 is waiting for answer
</span><br>
<span class="quotelev2">&gt; &gt;   Rank 0 OK!
</span><br>
<span class="quotelev2">&gt; &gt; and than the program locks. So the strange thing is that obviously the
</span><br>
<span class="quotelev2">&gt; &gt; recv()-command is blocking, which is what I do not understand.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Could anybody provide some hints, where I should start looking for the
</span><br>
<span class="quotelev2">&gt; &gt; mistake? Any help is welcome!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best regards,
</span><br>
<span class="quotelev2">&gt; &gt; Manuel
</span><br>
<p><p><p><pre>
-- 
----------------------------------------------------------------
Dipl.-Inf. Rainer Keller   <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
 HLRS                          Tel: ++49 (0)711-685 6 5858
 Nobelstrasse 19                  Fax: ++49 (0)711-685 6 5832
 70550 Stuttgart                    email: keller_at_[hidden]     
 Germany                             AIM/Skype:rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5869.php">Tim Mattox: "[OMPI users] Brief mail services outage today"</a>
<li><strong>Previous message:</strong> <a href="5867.php">Arturas Ziemys: "[OMPI users] parallel AMBER &amp; PBS issue"</a>
<li><strong>In reply to:</strong> <a href="5866.php">Manuel Freiberger: "Re: [OMPI users] Problem with getting started [solved]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5871.php">Manuel Freiberger: "Re: [OMPI users] Problem with getting started [solved]"</a>
<li><strong>Reply:</strong> <a href="5871.php">Manuel Freiberger: "Re: [OMPI users] Problem with getting started [solved]"</a>
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
