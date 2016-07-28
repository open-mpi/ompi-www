<?
$subject_val = "Re: [OMPI users] Running Open MPI on Ethernet";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  8 08:47:40 2008" -->
<!-- isoreceived="20080808124740" -->
<!-- sent="Fri, 08 Aug 2008 13:25:20 +0100" -->
<!-- isosent="20080808122520" -->
<!-- name="John Hearns" -->
<!-- email="john.hearns_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running Open MPI on Ethernet" -->
<!-- id="1218198330.5006.40.camel_at_Vigor13" -->
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
<strong>From:</strong> John Hearns (<em>john.hearns_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-08 08:25:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6298.php">Abhishek K: "Re: [OMPI users] cluster LiveCD"</a>
<li><strong>Previous message:</strong> <a href="6296.php">Ralph Castain: "Re: [OMPI users] Running Open MPI on Ethernet"</a>
<li><strong>In reply to:</strong> <a href="6295.php">Rayne: "[OMPI users] Running Open MPI on Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6299.php">Gus Correa: "Re: [OMPI users] Running Open MPI on Ethernet"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 2008-08-08 at 20:11 +0800, Rayne wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; I'm running openmpi-1.2.6, and my computer is connected to a Ethernet network. I have no experience in setting up a network that supports parallel computing using MPI before, nor do I know much about networking. So please excuse me if my questions seem too simple or silly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; Hello... 0 of 3 processors
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
<span class="quotelev1">&gt; together with the warning message about OpenIB and UDAPL, which after some Googling, I was able to resolve using &quot;-mca btl ^openib,udapl&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was trying to see if my MPI program is really running on the Ethernet network, so I deactivated the network, but the program still works. Then I unplugged the network cable and still the program works. Then I ran Wireshark, which is a kind of packet sniffer program, and ran the MPI program again to see if the Send/Receive functions work right, as I thought if the program is sending/receiving the variable i, something should show up in Wireshark. However, no packets are captured by Wireshark.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can someone help me understand what is going on here, as it seems like the program is working when it shouldn't?
</span><br>
<p>Your code is probably running just on your local machine.
<br>
Run 'top' on your machine in another window, and set your code to loop
<br>
several times and you will see what I mean.
<br>
<p>If you have other machines on the network, you have to configure them
<br>
such that you can start remote processes on them.
<br>
When you use &quot;mpirun&quot; to launch your MPI code you need to give the names
<br>
of those machines as a parameter to mpirun - it is known as a &quot;machines
<br>
file&quot;.
<br>
<p>John Hearns
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6298.php">Abhishek K: "Re: [OMPI users] cluster LiveCD"</a>
<li><strong>Previous message:</strong> <a href="6296.php">Ralph Castain: "Re: [OMPI users] Running Open MPI on Ethernet"</a>
<li><strong>In reply to:</strong> <a href="6295.php">Rayne: "[OMPI users] Running Open MPI on Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6299.php">Gus Correa: "Re: [OMPI users] Running Open MPI on Ethernet"</a>
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
