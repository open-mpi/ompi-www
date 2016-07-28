<?
$subject_val = "Re: [OMPI users] Problem with getting started [solved]";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 13 02:15:40 2008" -->
<!-- isoreceived="20080613061540" -->
<!-- sent="Fri, 13 Jun 2008 08:12:32 +0200" -->
<!-- isosent="20080613061232" -->
<!-- name="Manuel Freiberger" -->
<!-- email="manuel.freiberger_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with getting started [solved]" -->
<!-- id="200806130812.32771.manuel.freiberger_at_tugraz.at" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="200806121823.00488.keller_at_hlrs.de" -->
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
<strong>From:</strong> Manuel Freiberger (<em>manuel.freiberger_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-13 02:12:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5872.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI bug?"</a>
<li><strong>Previous message:</strong> <a href="5870.php">zach: "[OMPI users] weird problem with passing data between nodes"</a>
<li><strong>In reply to:</strong> <a href="5868.php">Rainer Keller: "Re: [OMPI users] Problem with getting started [solved]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5956.php">Jeff Squyres: "Re: [OMPI users] Problem with getting started [solved]"</a>
<li><strong>Reply:</strong> <a href="5956.php">Jeff Squyres: "Re: [OMPI users] Problem with getting started [solved]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Well, actually I'm quite sure that it was not the firewall because I had to 
<br>
turn it off as otherwise no connection could be established. So my
<br>
&nbsp;&nbsp;iptables --list
<br>
returns
<br>
<p>Chain INPUT (policy ACCEPT)
<br>
target     prot opt source               destination
<br>
<p>Chain FORWARD (policy ACCEPT)
<br>
target     prot opt source               destination
<br>
<p>Chain OUTPUT (policy ACCEPT)
<br>
target     prot opt source               destination
<br>
<p>on both machines. After reinstalling OMPI, I did not make any changes to the 
<br>
firewall but now it works without problems. Probably installing the library 
<br>
with exactly the same configuration (same --prefix and so on) did the trick.
<br>
<p>But nonetheless, thank you very much for your hint! :-)
<br>
<p>Best regards,
<br>
Manuel
<br>
<p>On Thursday 12 June 2008 18:23, Rainer Keller wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; are You sure it was not a Firewall issue on the Suse 10.2?
</span><br>
<span class="quotelev1">&gt; If there are any connections from the Gentoo machine trying to access the
</span><br>
<span class="quotelev1">&gt; orted on the Suse, check in /var/log/firewall.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the time being, try stopping the firewall by (as root) with
</span><br>
<span class="quotelev1">&gt; /etc/init.d/SuSEfirewall2_setup stop
</span><br>
<span class="quotelev1">&gt; and test whether it works ,-]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With best regards,
</span><br>
<span class="quotelev1">&gt; Rainer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Donnerstag, 12. Juni 2008, Manuel Freiberger wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ok, I found the problem. I reinstallen OMPI on both PCs but this time
</span><br>
<span class="quotelev2">&gt; &gt; only locally in the users home directory. Now, the sample code works
</span><br>
<span class="quotelev2">&gt; &gt; perfectly. I'm not sure where the error really was located. It could be
</span><br>
<span class="quotelev2">&gt; &gt; that it was a problem with the Gentoo installation because OMPI is still
</span><br>
<span class="quotelev2">&gt; &gt; marked unstable in portage (~x86 keyword).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best regards,
</span><br>
<span class="quotelev2">&gt; &gt; Manuel
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wednesday 11 June 2008 18:52, Manuel Freiberger wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hello everybody!
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; First of all I wanted to point out that I'm beginner regarding openMPI
</span><br>
<span class="quotelev3">&gt; &gt; &gt; and all I try to achieve is to get a simple program working on two PCs.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; So far I've installed openMPI 1.2.6 on two PCs (one running OpenSUSE
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 10.2, the other one Gentoo).
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I set up two identical users on both systems and made sure that I can
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make an SSH connection between them using private/public key
</span><br>
<span class="quotelev3">&gt; &gt; &gt; authentication.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Next I ran the command
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   mpirun -np 2 --hostfile myhosts uptime
</span><br>
<span class="quotelev3">&gt; &gt; &gt; which gave the result
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   6:41pm  up 1 day  5:16,  4 users,  load average: 0.00, 0.07, 0.17
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  18:43:45 up  7:36,  6 users,  load average: 0.00, 0.02, 0.05
</span><br>
<span class="quotelev3">&gt; &gt; &gt; so I concluded that MPI should work in principle.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Next I tried the following code which I copied from Boost.MPI:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ---- snip
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev3">&gt; &gt; &gt; {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   int rank;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   if (rank == 0)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     std::cout &lt;&lt; &quot;Rank 0 is going to send&quot; &lt;&lt; std::endl;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     int value = 17;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     int result = MPI_Send(&amp;value, 1, MPI_INT, 1, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     if (result == MPI_SUCCESS)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       std::cout &lt;&lt; &quot;Rank 0 OK!&quot; &lt;&lt; std::endl;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   }
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   else if (rank == 1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     std::cout &lt;&lt; &quot;Rank 1 is waiting for answer&quot; &lt;&lt; std::endl;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     int value;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     MPI_Status status;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     int result = MPI_Recv(&amp;value, 1, MPI_INT, 0, 0, MPI_COMM_WORLD,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 			  &amp;status);
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     if (result == MPI_SUCCESS &amp;&amp; value == 17)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       std::cout &lt;&lt; &quot;Rank 1 OK!&quot; &lt;&lt; std::endl;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   }
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   MPI_Finalize();
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   return 0;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; }
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ---- snap
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Starting a parallel job using
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   mpirun -np 2 --hostfile myhosts mpi-test
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I get the answer
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   Rank 0 is going to send
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   Rank 1 is waiting for answer
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   Rank 0 OK!
</span><br>
<span class="quotelev3">&gt; &gt; &gt; and than the program locks. So the strange thing is that obviously the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; recv()-command is blocking, which is what I do not understand.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Could anybody provide some hints, where I should start looking for the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mistake? Any help is welcome!
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Best regards,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Manuel
</span><br>
<p><pre>
-- 
Manuel Freiberger
Institute of Medical Engineering
Graz University of Technology
manuel.freiberger_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5872.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI bug?"</a>
<li><strong>Previous message:</strong> <a href="5870.php">zach: "[OMPI users] weird problem with passing data between nodes"</a>
<li><strong>In reply to:</strong> <a href="5868.php">Rainer Keller: "Re: [OMPI users] Problem with getting started [solved]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5956.php">Jeff Squyres: "Re: [OMPI users] Problem with getting started [solved]"</a>
<li><strong>Reply:</strong> <a href="5956.php">Jeff Squyres: "Re: [OMPI users] Problem with getting started [solved]"</a>
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
