<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 13 08:49:06 2006" -->
<!-- isoreceived="20060313134906" -->
<!-- sent="Mon, 13 Mar 2006 08:49:04 -0500" -->
<!-- isosent="20060313134904" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using Multiple Gigabit Ethernet Interface" -->
<!-- id="BA9E4C56-D053-41EB-B950-026EDE328253_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F5191E5E-57C2-47B4-84C1-ADA6A3C36BFC_at_ieee.org" -->
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
<strong>Date:</strong> 2006-03-13 08:49:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0838.php">Brian Barrett: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<li><strong>Previous message:</strong> <a href="0836.php">Brian Barrett: "Re: [OMPI users] Using Multiple Gigabit Ethernet Interface"</a>
<li><strong>In reply to:</strong> <a href="0835.php">Michael Kluskens: "Re: [OMPI users] Using Multiple Gigabit Ethernet Interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0836.php">Brian Barrett: "Re: [OMPI users] Using Multiple Gigabit Ethernet Interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 13, 2006, at 8:38 AM, Michael Kluskens wrote:
<br>
<p><span class="quotelev1">&gt; On Mar 11, 2006, at 1:00 PM, Jayabrata Chakrabarty wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi I have been looking for information on how to use multiple
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
<span class="quotelev1">&gt; It seems to me that an easier approach would be to bond the ethernet
</span><br>
<span class="quotelev1">&gt; interfaces together at the Unix/Linux level and then you have only
</span><br>
<span class="quotelev1">&gt; one ethernet interface to worry about in MPI.  Our Operton-based
</span><br>
<span class="quotelev1">&gt; cluster shipped with that setup in SUSE Linux.  When I rebuilt it
</span><br>
<span class="quotelev1">&gt; with Debian Linux I configured the ethernet interface bonding myself
</span><br>
<span class="quotelev1">&gt; using references I found via google.  My master node has three
</span><br>
<span class="quotelev1">&gt; physical interfaces and two ip addresses, all the rest have two
</span><br>
<span class="quotelev1">&gt; physical interfaces and one ip address.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have not tested throughput to see if I choose the best type of
</span><br>
<span class="quotelev1">&gt; bonding, but the choices were clear enough.
</span><br>
<p>That is one option, yes.  However, Channel bonding can result in much  
<br>
lower performance than letting Open MPI do the stripping and  
<br>
fragmenting.  This is true for a couple of reasons.  Channel bonding  
<br>
requires that packet delivery be in order, so it can not round-robin  
<br>
short message delivery.  While we may have to queue a message  
<br>
temporarily, we can effectively use both NICs for short messages.   
<br>
Second, our effective bandwidth for large messages should be nearly N  
<br>
* effective bandwidth for one NIC.  This is rarely the case for  
<br>
channel bonding, again because of ordering issues.  We don't even  
<br>
have to queue long message fragments internally in the multi-nic  
<br>
case, as we can immediately write that part of the message into user  
<br>
space (even if it's after a fragment we haven't received yet).
<br>
<p>Of course, if you also need more bandwidth for NFS or MPI  
<br>
implementations that don't support multi-nic usage, you might not  
<br>
have an option outside of channel bonding.
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0838.php">Brian Barrett: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<li><strong>Previous message:</strong> <a href="0836.php">Brian Barrett: "Re: [OMPI users] Using Multiple Gigabit Ethernet Interface"</a>
<li><strong>In reply to:</strong> <a href="0835.php">Michael Kluskens: "Re: [OMPI users] Using Multiple Gigabit Ethernet Interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0836.php">Brian Barrett: "Re: [OMPI users] Using Multiple Gigabit Ethernet Interface"</a>
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
