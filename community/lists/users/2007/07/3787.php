<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jul 28 08:34:39 2007" -->
<!-- isoreceived="20070728123439" -->
<!-- sent="Sat, 28 Jul 2007 08:34:23 -0400" -->
<!-- isosent="20070728123423" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to use multi TCP network" -->
<!-- id="7DC80631-8EED-41B9-A43B-36A53EC2450C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.64.0706261533010.7682_at_cappuccino.ucs.ed.ac.uk" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-28 08:34:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3788.php">Jeff Squyres: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Previous message:</strong> <a href="3786.php">Jeff Squyres: "Re: [OMPI users] TCP Nagle algorithm and latency"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/06/3549.php">Yuan Wan: "[OMPI users] How to use multi TCP network"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Somehow I missed this e-mail, sorry...  Can you send all the  
<br>
information listed on this web page:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p>On Jun 26, 2007, at 10:34 AM, Yuan Wan wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm benchmarking our new cluster with HPL. I pick OpenMPI as parallel
</span><br>
<span class="quotelev1">&gt; environment as I found OpenMPi is able to benefit from two giga- 
</span><br>
<span class="quotelev1">&gt; ethernet
</span><br>
<span class="quotelev1">&gt; tcp
</span><br>
<span class="quotelev1">&gt; networks on our cluster during low-level benchmark.
</span><br>
<span class="quotelev1">&gt; (bandwidth could be upto 250MB/s)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The HPL code is well built and run well for small problem size.
</span><br>
<span class="quotelev1">&gt; However, when I turned to run the code on 32-node (128-way), the  
</span><br>
<span class="quotelev1">&gt; code will
</span><br>
<span class="quotelev1">&gt; crash in the half way with the following error message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------
</span><br>
<span class="quotelev1">&gt; [node074:09973] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev1">&gt; [node074:09973] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev1">&gt; [node073:10234] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev1">&gt; [node073:10234] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev1">&gt; [node089:29190] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev1">&gt; [node090:27881] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev1">&gt; [node072:02729] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev1">&gt; [node071:03029] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev1">&gt; .....
</span><br>
<span class="quotelev1">&gt; [node084:06044] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev1">&gt; [node086:01346] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev1">&gt; [node069:16372] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev1">&gt; [node100:23294] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev1">&gt; [node069:16372] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev1">&gt; [node085:04347] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev1">&gt; [node087:31391] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; According to the following faq instruction, I explicitly tell the
</span><br>
<span class="quotelev1">&gt; interface name of tow tcp networks, but the code still break.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl_tcp_if_include eth0,eth1 -np 128 -bynode -machinefile
</span><br>
<span class="quotelev1">&gt; hostfile ./xhpl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://icl.cs.utk.edu/open-mpi/faq/?category=tcp#tcp-selection">http://icl.cs.utk.edu/open-mpi/faq/?category=tcp#tcp-selection</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I include only one tcp network, the code won't break, but the
</span><br>
<span class="quotelev1">&gt; performance is not desirble/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyone know how to fix it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --Yuan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yuan Wan
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Unix Section
</span><br>
<span class="quotelev1">&gt; Information Services Infrastructure Division
</span><br>
<span class="quotelev1">&gt; University of Edinburgh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tel: 0131 650 4985
</span><br>
<span class="quotelev1">&gt; email: ywan_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2032 Computing Services, JCMB
</span><br>
<span class="quotelev1">&gt; The King's Buildings,
</span><br>
<span class="quotelev1">&gt; Edinburgh, EH9 3JZ
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3788.php">Jeff Squyres: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Previous message:</strong> <a href="3786.php">Jeff Squyres: "Re: [OMPI users] TCP Nagle algorithm and latency"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/06/3549.php">Yuan Wan: "[OMPI users] How to use multi TCP network"</a>
<!-- nextthread="start" -->
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
