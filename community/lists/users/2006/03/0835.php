<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 13 08:38:56 2006" -->
<!-- isoreceived="20060313133856" -->
<!-- sent="Mon, 13 Mar 2006 08:38:40 -0500" -->
<!-- isosent="20060313133840" -->
<!-- name="Michael Kluskens" -->
<!-- email="mkluskens_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using Multiple Gigabit Ethernet Interface" -->
<!-- id="F5191E5E-57C2-47B4-84C1-ADA6A3C36BFC_at_ieee.org" -->
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
<strong>From:</strong> Michael Kluskens (<em>mkluskens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-13 08:38:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0836.php">Brian Barrett: "Re: [OMPI users] Using Multiple Gigabit Ethernet Interface"</a>
<li><strong>Previous message:</strong> <a href="0834.php">Ravi Manumachu: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<li><strong>In reply to:</strong> <a href="0828.php">Jayabrata Chakrabarty: "[OMPI users] Using Multiple Gigabit Ethernet Interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0837.php">Brian Barrett: "Re: [OMPI users] Using Multiple Gigabit Ethernet Interface"</a>
<li><strong>Reply:</strong> <a href="0837.php">Brian Barrett: "Re: [OMPI users] Using Multiple Gigabit Ethernet Interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 11, 2006, at 1:00 PM, Jayabrata Chakrabarty wrote:
<br>
<span class="quotelev1">&gt; Hi I have been looking for information on how to use multiple  
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
It seems to me that an easier approach would be to bond the ethernet  
<br>
interfaces together at the Unix/Linux level and then you have only  
<br>
one ethernet interface to worry about in MPI.  Our Operton-based  
<br>
cluster shipped with that setup in SUSE Linux.  When I rebuilt it  
<br>
with Debian Linux I configured the ethernet interface bonding myself  
<br>
using references I found via google.  My master node has three  
<br>
physical interfaces and two ip addresses, all the rest have two  
<br>
physical interfaces and one ip address.
<br>
<p>I have not tested throughput to see if I choose the best type of  
<br>
bonding, but the choices were clear enough.
<br>
<p>michael.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0836.php">Brian Barrett: "Re: [OMPI users] Using Multiple Gigabit Ethernet Interface"</a>
<li><strong>Previous message:</strong> <a href="0834.php">Ravi Manumachu: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<li><strong>In reply to:</strong> <a href="0828.php">Jayabrata Chakrabarty: "[OMPI users] Using Multiple Gigabit Ethernet Interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0837.php">Brian Barrett: "Re: [OMPI users] Using Multiple Gigabit Ethernet Interface"</a>
<li><strong>Reply:</strong> <a href="0837.php">Brian Barrett: "Re: [OMPI users] Using Multiple Gigabit Ethernet Interface"</a>
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
