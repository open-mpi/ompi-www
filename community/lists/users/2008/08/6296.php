<?
$subject_val = "Re: [OMPI users] Running Open MPI on Ethernet";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  8 08:37:19 2008" -->
<!-- isoreceived="20080808123719" -->
<!-- sent="Fri, 8 Aug 2008 06:37:12 -0600" -->
<!-- isosent="20080808123712" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running Open MPI on Ethernet" -->
<!-- id="C8413667-5F00-4708-B954-78CF5A96F753_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-08 08:37:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6297.php">John Hearns: "Re: [OMPI users] Running Open MPI on Ethernet"</a>
<li><strong>Previous message:</strong> <a href="6295.php">Rayne: "[OMPI users] Running Open MPI on Ethernet"</a>
<li><strong>In reply to:</strong> <a href="6295.php">Rayne: "[OMPI users] Running Open MPI on Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6297.php">John Hearns: "Re: [OMPI users] Running Open MPI on Ethernet"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Best guess, without seeing the mpirun cmd line, is that all the procs  
<br>
are executing on one computer. In that scenario, we default to using  
<br>
shared memory, so there would be no traffic going across the network.
<br>
<p><p>On Aug 8, 2008, at 6:11 AM, Rayne wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; I'm running openmpi-1.2.6, and my computer is connected to a  
</span><br>
<span class="quotelev1">&gt; Ethernet network. I have no experience in setting up a network that  
</span><br>
<span class="quotelev1">&gt; supports parallel computing using MPI before, nor do I know much  
</span><br>
<span class="quotelev1">&gt; about networking. So please excuse me if my questions seem too  
</span><br>
<span class="quotelev1">&gt; simple or silly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I simply did was install the Open MPI package on my computer,  
</span><br>
<span class="quotelev1">&gt; and executed the following simple code to test if I can successfully  
</span><br>
<span class="quotelev1">&gt; run MPI programs:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char** argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    int rank, size, i = 1, j, total = 1, total2;
</span><br>
<span class="quotelev1">&gt;    MPI_Status status;
</span><br>
<span class="quotelev1">&gt;    MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;    printf(&quot;Hello... %d of %d processors\n&quot;, rank, size);
</span><br>
<span class="quotelev1">&gt;    if (rank != 0)
</span><br>
<span class="quotelev1">&gt;        MPI_Send(&amp;i, 1, MPI_INT, 0, 1, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;    else
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;        for (j = 1 ; j &lt; size ; j++)
</span><br>
<span class="quotelev1">&gt;        {
</span><br>
<span class="quotelev1">&gt;            MPI_Recv(&amp;i, 1, MPI_INT, j, 1, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt;            total += i;
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;        printf(&quot;%d Calculated total: %d\n&quot;, rank, total);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    MPI_Reduce(&amp;i, &amp;total2, 1, MPI_INT, MPI_SUM, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;    if (!rank)
</span><br>
<span class="quotelev1">&gt;        printf(&quot;%d Reduced total: %d\n&quot;, rank, total2);
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;    return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I got the correct output, i.e.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello... 0 of 3 processors
</span><br>
<span class="quotelev1">&gt; Hello... 1 of 3 processors
</span><br>
<span class="quotelev1">&gt; Hello... 2 of 3 processors
</span><br>
<span class="quotelev1">&gt; 0 Calculated total: 3
</span><br>
<span class="quotelev1">&gt; 0 Reduced total: 3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; together with the warning message about OpenIB and UDAPL, which  
</span><br>
<span class="quotelev1">&gt; after some Googling, I was able to resolve using &quot;-mca btl  
</span><br>
<span class="quotelev1">&gt; ^openib,udapl&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was trying to see if my MPI program is really running on the  
</span><br>
<span class="quotelev1">&gt; Ethernet network, so I deactivated the network, but the program  
</span><br>
<span class="quotelev1">&gt; still works. Then I unplugged the network cable and still the  
</span><br>
<span class="quotelev1">&gt; program works. Then I ran Wireshark, which is a kind of packet  
</span><br>
<span class="quotelev1">&gt; sniffer program, and ran the MPI program again to see if the Send/ 
</span><br>
<span class="quotelev1">&gt; Receive functions work right, as I thought if the program is sending/ 
</span><br>
<span class="quotelev1">&gt; receiving the variable i, something should show up in Wireshark.  
</span><br>
<span class="quotelev1">&gt; However, no packets are captured by Wireshark.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can someone help me understand what is going on here, as it seems  
</span><br>
<span class="quotelev1">&gt; like the program is working when it shouldn't?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Rayne
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      New Email addresses available on Yahoo!
</span><br>
<span class="quotelev1">&gt; Get the Email name you&amp;#39;ve always wanted on the new @ymail and  
</span><br>
<span class="quotelev1">&gt; @rocketmail.
</span><br>
<span class="quotelev1">&gt; Hurry before someone else does!
</span><br>
<span class="quotelev1">&gt; <a href="http://mail.promotions.yahoo.com/newdomains/sg/">http://mail.promotions.yahoo.com/newdomains/sg/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6297.php">John Hearns: "Re: [OMPI users] Running Open MPI on Ethernet"</a>
<li><strong>Previous message:</strong> <a href="6295.php">Rayne: "[OMPI users] Running Open MPI on Ethernet"</a>
<li><strong>In reply to:</strong> <a href="6295.php">Rayne: "[OMPI users] Running Open MPI on Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6297.php">John Hearns: "Re: [OMPI users] Running Open MPI on Ethernet"</a>
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
