<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 13 08:43:01 2006" -->
<!-- isoreceived="20060313134301" -->
<!-- sent="Mon, 13 Mar 2006 08:42:59 -0500" -->
<!-- isosent="20060313134259" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using Multiple Gigabit Ethernet Interface" -->
<!-- id="8F91AC34-6393-4173-84EF-5E2AC59BE6A9_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BAY107-F2415445F223E564C6A576AEEE20_at_phx.gbl" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-13 08:42:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0837.php">Brian Barrett: "Re: [OMPI users] Using Multiple Gigabit Ethernet Interface"</a>
<li><strong>Previous message:</strong> <a href="0835.php">Michael Kluskens: "Re: [OMPI users] Using Multiple Gigabit Ethernet Interface"</a>
<li><strong>In reply to:</strong> <a href="0828.php">Jayabrata Chakrabarty: "[OMPI users] Using Multiple Gigabit Ethernet Interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0875.php">Jayabrata Chakrabarty: "Re: [OMPI users] Using Multiple Gigabit Ethernet Interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 11, 2006, at 1:00 PM, Jayabrata Chakrabarty wrote:
<br>
<p><span class="quotelev1">&gt; Hi I have been looking for information on how to use multiple  
</span><br>
<span class="quotelev1">&gt; Gigabit Ethernet Interface for MPI communication.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So far what i have found out is i have to use mca_btl_tcp.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But what i wish to know, is what IP Address to assign to each  
</span><br>
<span class="quotelev1">&gt; Network Interface. I also wish to know if there will be any change  
</span><br>
<span class="quotelev1">&gt; in the format of &quot;hostfile&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have two Gigabit Ethernet Interface on a cluster of 5 nodes at  
</span><br>
<span class="quotelev1">&gt; present.
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
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0837.php">Brian Barrett: "Re: [OMPI users] Using Multiple Gigabit Ethernet Interface"</a>
<li><strong>Previous message:</strong> <a href="0835.php">Michael Kluskens: "Re: [OMPI users] Using Multiple Gigabit Ethernet Interface"</a>
<li><strong>In reply to:</strong> <a href="0828.php">Jayabrata Chakrabarty: "[OMPI users] Using Multiple Gigabit Ethernet Interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0875.php">Jayabrata Chakrabarty: "Re: [OMPI users] Using Multiple Gigabit Ethernet Interface"</a>
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
