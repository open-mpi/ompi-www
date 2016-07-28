<?
$subject_val = "[OMPI users] Running Open MPI on Ethernet";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  8 08:11:20 2008" -->
<!-- isoreceived="20080808121120" -->
<!-- sent="Fri, 8 Aug 2008 20:11:16 +0800 (SGT)" -->
<!-- isosent="20080808121116" -->
<!-- name="Rayne" -->
<!-- email="lancer6238_at_[hidden]" -->
<!-- subject="[OMPI users] Running Open MPI on Ethernet" -->
<!-- id="786841.45531.qm_at_web76806.mail.sg1.yahoo.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Running Open MPI on Ethernet<br>
<strong>From:</strong> Rayne (<em>lancer6238_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-08 08:11:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6296.php">Ralph Castain: "Re: [OMPI users] Running Open MPI on Ethernet"</a>
<li><strong>Previous message:</strong> <a href="6294.php">Adam C Powell IV: "Re: [OMPI users] cluster LiveCD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6296.php">Ralph Castain: "Re: [OMPI users] Running Open MPI on Ethernet"</a>
<li><strong>Reply:</strong> <a href="6296.php">Ralph Castain: "Re: [OMPI users] Running Open MPI on Ethernet"</a>
<li><strong>Reply:</strong> <a href="6297.php">John Hearns: "Re: [OMPI users] Running Open MPI on Ethernet"</a>
<li><strong>Reply:</strong> <a href="6299.php">Gus Correa: "Re: [OMPI users] Running Open MPI on Ethernet"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
I'm running openmpi-1.2.6, and my computer is connected to a Ethernet network. I have no experience in setting up a network that supports parallel computing using MPI before, nor do I know much about networking. So please excuse me if my questions seem too simple or silly.
<br>
<p>What I simply did was install the Open MPI package on my computer, and executed the following simple code to test if I can successfully run MPI programs:
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char** argv)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int rank, size, i = 1, j, total = 1, total2;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Hello... %d of %d processors\n&quot;, rank, size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (rank != 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(&amp;i, 1, MPI_INT, 0, 1, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (j = 1 ; j &lt; size ; j++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;i, 1, MPI_INT, j, 1, MPI_COMM_WORLD, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;total += i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%d Calculated total: %d\n&quot;, rank, total);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Reduce(&amp;i, &amp;total2, 1, MPI_INT, MPI_SUM, 0, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (!rank)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%d Reduced total: %d\n&quot;, rank, total2);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>I got the correct output, i.e.
<br>
<p>Hello... 0 of 3 processors
<br>
Hello... 1 of 3 processors
<br>
Hello... 2 of 3 processors
<br>
0 Calculated total: 3
<br>
0 Reduced total: 3
<br>
<p>together with the warning message about OpenIB and UDAPL, which after some Googling, I was able to resolve using &quot;-mca btl ^openib,udapl&quot;.
<br>
<p>I was trying to see if my MPI program is really running on the Ethernet network, so I deactivated the network, but the program still works. Then I unplugged the network cable and still the program works. Then I ran Wireshark, which is a kind of packet sniffer program, and ran the MPI program again to see if the Send/Receive functions work right, as I thought if the program is sending/receiving the variable i, something should show up in Wireshark. However, no packets are captured by Wireshark.
<br>
<p>Can someone help me understand what is going on here, as it seems like the program is working when it shouldn't?
<br>
<p>Thank you.
<br>
<p>Regards,
<br>
Rayne
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;New Email addresses available on Yahoo!
<br>
Get the Email name you&amp;#39;ve always wanted on the new @ymail and @rocketmail. 
<br>
Hurry before someone else does!
<br>
<a href="http://mail.promotions.yahoo.com/newdomains/sg/">http://mail.promotions.yahoo.com/newdomains/sg/</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6296.php">Ralph Castain: "Re: [OMPI users] Running Open MPI on Ethernet"</a>
<li><strong>Previous message:</strong> <a href="6294.php">Adam C Powell IV: "Re: [OMPI users] cluster LiveCD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6296.php">Ralph Castain: "Re: [OMPI users] Running Open MPI on Ethernet"</a>
<li><strong>Reply:</strong> <a href="6296.php">Ralph Castain: "Re: [OMPI users] Running Open MPI on Ethernet"</a>
<li><strong>Reply:</strong> <a href="6297.php">John Hearns: "Re: [OMPI users] Running Open MPI on Ethernet"</a>
<li><strong>Reply:</strong> <a href="6299.php">Gus Correa: "Re: [OMPI users] Running Open MPI on Ethernet"</a>
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
