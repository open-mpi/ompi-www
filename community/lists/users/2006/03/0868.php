<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar 15 22:27:12 2006" -->
<!-- isoreceived="20060316032712" -->
<!-- sent="Wed, 15 Mar 2006 22:27:10 -0500" -->
<!-- isosent="20060316032710" -->
<!-- name="Allan Menezes" -->
<!-- email="amenezes007_at_[hidden]" -->
<!-- subject="[OMPI users] Two Gigabit NiCs" -->
<!-- id="4418DB0E.4030301_at_sympatico.ca" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Allan Menezes (<em>amenezes007_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-15 22:27:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0869.php">George Bosilca: "Re: [OMPI users] Two Gigabit NiCs"</a>
<li><strong>Previous message:</strong> <a href="0867.php">Davide Bergamasco: "Re: [OMPI users] Memory allocation issue with OpenIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0869.php">George Bosilca: "Re: [OMPI users] Two Gigabit NiCs"</a>
<li><strong>Reply:</strong> <a href="0869.php">George Bosilca: "Re: [OMPI users] Two Gigabit NiCs"</a>
<li><strong>Maybe reply:</strong> <a href="0882.php">Jayabrata Chakrabarty: "Re: [OMPI users] Two Gigabit NiCs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Message: 2
<br>
Date: Mon, 13 Mar 2006 08:42:59 -0500
<br>
From: Brian Barrett &lt;brbarret_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Using Multiple Gigabit Ethernet Interface
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Message-ID: &lt;8F91AC34-6393-4173-84EF-5E2AC59BE6A9_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=US-ASCII; delsp=yes; format=flowed
<br>
<p>On Mar 11, 2006, at 1:00 PM, Jayabrata Chakrabarty wrote:
<br>
<p><p><span class="quotelev2">&gt;&gt; Hi I have been looking for information on how to use multiple  
</span><br>
<span class="quotelev2">&gt;&gt; Gigabit Ethernet Interface for MPI communication.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So far what i have found out is i have to use mca_btl_tcp.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But what i wish to know, is what IP Address to assign to each  
</span><br>
<span class="quotelev2">&gt;&gt; Network Interface. I also wish to know if there will be any change  
</span><br>
<span class="quotelev2">&gt;&gt; in the format of &quot;hostfile&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have two Gigabit Ethernet Interface on a cluster of 5 nodes at  
</span><br>
<span class="quotelev2">&gt;&gt; present.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Open MPI will use all available (and active) ethernet devices for MPI  
<br>
communication by default.  It does a relatively simplistic netmask  
<br>
comparison to prefer connections in the same subnet (so if host A has  
<br>
addresses 192.168.1.1/24 and 192.168.2.1/24 and host B has addresses  
<br>
192.168.1.2/24 and 192.168.2.2/24, OMPI will make a connection  
<br>
between the two 192.168.1 addresses and another between the two  
<br>
192.168.2 addresses).  If you have two separate switches for your two  
<br>
networks (which I would think would give best performance), make sure  
<br>
that the two have IP address ranges that are in different subnet mask  
<br>
ranges.  Other than that, Open MPI will do the rest.
<br>
<p>In Open MPI, the hostfile is completely independent of the MPI  
<br>
communication network names, so no change is needed there.
<br>
<p>I believe (but I could be wrong) that there was an issue with  
<br>
multiple TCP networks in 1.0.1.  I believe this might have been  
<br>
resolved in our upcoming 1.0.2 release.  You may want to try one of  
<br>
the 1.0.2 pre-releases if you run into trouble with the 1.0.1 release.
<br>
<p>Hope this helps,
<br>
<p>Brian
<br>
<p><p>-- Brian Barrett Open MPI developer <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a> 
<br>
------------------------------ Dear Brian, I have the same setup as Mr. 
<br>
Chakrbarty with 16 nodes, Oscar 4.2.1 beta 4 and two Gigabit ethernet 
<br>
cards with two 16 and 24 port switches one smart and the other managed. 
<br>
I use dhcp to get the IP addresses for one eth card(The Ip addresses of 
<br>
these range from 192.168.1.1 ... 16) and use static IP addresses for the 
<br>
other NIC of 192.168.5.1 ... 16. The MTU of the first is 9000 for both 
<br>
the nICs and switch. For the second the MTU is 1500 for both the switch 
<br>
and the NIC cards as the switch cannot go beyond an MTU of beyond 1500. 
<br>
Using the -mca btl tcp switch with the 192.168.1.1 .. 16 NICs included 
<br>
and the 192.168.5.1 ... 16 excluded by switches -mca btl_tcp_if_include 
<br>
eth1(MTU=9000) and -mca btl_tcp_if_exclude eth0 (MTU=1500) I get with 
<br>
HPL a performance of approx 28.3GigaFlops with both Open Mpi and Mpich2. 
<br>
But since as you say above if you include both gigabit cards with the 
<br>
switch -mca btl_tcp_if_include eth0,eth1 using Open Mpi 1.1 (beta) or 
<br>
1.01 teh performance should increase for the same N and NB in HPL I get 
<br>
aslight performance decrease instead of increase of about 0.5 to 1 
<br>
gigaflop less. The hostfile is simply a1, a2 ... a16 using Oscar's DNS 
<br>
to resolve the domain name. Why is there a performance decrease? 
<br>
Regards, Allan Menezes
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0868/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0869.php">George Bosilca: "Re: [OMPI users] Two Gigabit NiCs"</a>
<li><strong>Previous message:</strong> <a href="0867.php">Davide Bergamasco: "Re: [OMPI users] Memory allocation issue with OpenIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0869.php">George Bosilca: "Re: [OMPI users] Two Gigabit NiCs"</a>
<li><strong>Reply:</strong> <a href="0869.php">George Bosilca: "Re: [OMPI users] Two Gigabit NiCs"</a>
<li><strong>Maybe reply:</strong> <a href="0882.php">Jayabrata Chakrabarty: "Re: [OMPI users] Two Gigabit NiCs"</a>
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
