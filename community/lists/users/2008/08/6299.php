<?
$subject_val = "Re: [OMPI users] Running Open MPI on Ethernet";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  8 11:25:46 2008" -->
<!-- isoreceived="20080808152546" -->
<!-- sent="Fri, 08 Aug 2008 11:25:35 -0400" -->
<!-- isosent="20080808152535" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running Open MPI on Ethernet" -->
<!-- id="489C656F.40303_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="786841.45531.qm_at_web76806.mail.sg1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running Open MPI on Ethernet<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-08 11:25:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6300.php">Rayne: "Re: [OMPI users] Running Open MPI on Ethernet"</a>
<li><strong>Previous message:</strong> <a href="6298.php">Abhishek K: "Re: [OMPI users] cluster LiveCD"</a>
<li><strong>In reply to:</strong> <a href="6295.php">Rayne: "[OMPI users] Running Open MPI on Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6300.php">Rayne: "Re: [OMPI users] Running Open MPI on Ethernet"</a>
<li><strong>Reply:</strong> <a href="6300.php">Rayne: "Re: [OMPI users] Running Open MPI on Ethernet"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Rayne Lancer and list
<br>
<p>Rayne, if you tell the command you use to launch the job, you may get a 
<br>
faster answer from the list.
<br>
<p>I agree with others who guessed that your program may running on your 
<br>
local machine only,
<br>
i.e. wherever you launch the job (through mpirun or similar).
<br>
It can run in the local machine, even if the number of CPUs/cores
<br>
is less than the number of processes you launched (4 it looks like).
<br>
<p>You may need to take a look the runtime setup and requirements,
<br>
(mpiexec, hostfile/machinefile, etc).
<br>
A good place to start is the OpenMPI FAQ on the subject:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=running">http://www.open-mpi.org/faq/?category=running</a>
<br>
<p>The information there worked for me.
<br>
<p>I hope it helps,
<br>
Gus Correa
<br>
<p><pre>
-- 
---------------------------------------------------------------------
Gustavo J. Ponce Correa, PhD - Email: gus_at_[hidden]
Lamont-Doherty Earth Observatory - Columbia University
P.O. Box 1000 [61 Route 9W] - Palisades, NY, 10964-8000 - USA
--------------------------------------------------------------------
Rayne wrote:
&gt;Hi all,
&gt;I'm running openmpi-1.2.6, and my computer is connected to a Ethernet network. I have no experience in setting up a network that supports parallel computing using MPI before, nor do I know much about networking. So please excuse me if my questions seem too simple or silly.
&gt;
&gt;What I simply did was install the Open MPI package on my computer, and executed the following simple code to test if I can successfully run MPI programs:
&gt;
&gt;#include &lt;stdio.h&gt;
&gt;#include &lt;mpi.h&gt;
&gt;
&gt;int main(int argc, char** argv)
&gt;{
&gt;    int rank, size, i = 1, j, total = 1, total2;
&gt;    MPI_Status status;
&gt;    MPI_Init(&amp;argc, &amp;argv);
&gt;    MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
&gt;    MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
&gt;    printf(&quot;Hello... %d of %d processors\n&quot;, rank, size);
&gt;    if (rank != 0)
&gt;        MPI_Send(&amp;i, 1, MPI_INT, 0, 1, MPI_COMM_WORLD);
&gt;    else
&gt;    {
&gt;        for (j = 1 ; j &lt; size ; j++)
&gt;        {
&gt;            MPI_Recv(&amp;i, 1, MPI_INT, j, 1, MPI_COMM_WORLD, &amp;status);
&gt;            total += i;
&gt;        }
&gt;        printf(&quot;%d Calculated total: %d\n&quot;, rank, total);
&gt;    }
&gt;    MPI_Reduce(&amp;i, &amp;total2, 1, MPI_INT, MPI_SUM, 0, MPI_COMM_WORLD);
&gt;    if (!rank)
&gt;        printf(&quot;%d Reduced total: %d\n&quot;, rank, total2);
&gt;    MPI_Finalize();
&gt;    return 0;
&gt;}
&gt;
&gt;I got the correct output, i.e.
&gt;
&gt;Hello... 0 of 3 processors
&gt;Hello... 1 of 3 processors
&gt;Hello... 2 of 3 processors
&gt;0 Calculated total: 3
&gt;0 Reduced total: 3
&gt;
&gt;together with the warning message about OpenIB and UDAPL, which after some Googling, I was able to resolve using &quot;-mca btl ^openib,udapl&quot;.
&gt;
&gt;I was trying to see if my MPI program is really running on the Ethernet network, so I deactivated the network, but the program still works. Then I unplugged the network cable and still the program works. Then I ran Wireshark, which is a kind of packet sniffer program, and ran the MPI program again to see if the Send/Receive functions work right, as I thought if the program is sending/receiving the variable i, something should show up in Wireshark. However, no packets are captured by Wireshark.
&gt;
&gt;Can someone help me understand what is going on here, as it seems like the program is working when it shouldn't?
&gt;
&gt;Thank you.
&gt;
&gt;Regards,
&gt;Rayne
&gt;
&gt;
&gt;      New Email addresses available on Yahoo!
&gt;Get the Email name you&amp;#39;ve always wanted on the new @ymail and @rocketmail. 
&gt;Hurry before someone else does!
&gt;<a href="http://mail.promotions.yahoo.com/newdomains/sg/">http://mail.promotions.yahoo.com/newdomains/sg/</a>
&gt;
&gt;_______________________________________________
&gt;users mailing list
&gt;users_at_[hidden]
&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;  
&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6300.php">Rayne: "Re: [OMPI users] Running Open MPI on Ethernet"</a>
<li><strong>Previous message:</strong> <a href="6298.php">Abhishek K: "Re: [OMPI users] cluster LiveCD"</a>
<li><strong>In reply to:</strong> <a href="6295.php">Rayne: "[OMPI users] Running Open MPI on Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6300.php">Rayne: "Re: [OMPI users] Running Open MPI on Ethernet"</a>
<li><strong>Reply:</strong> <a href="6300.php">Rayne: "Re: [OMPI users] Running Open MPI on Ethernet"</a>
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
