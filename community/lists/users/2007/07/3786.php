<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jul 28 08:32:21 2007" -->
<!-- isoreceived="20070728123221" -->
<!-- sent="Sat, 28 Jul 2007 08:31:59 -0400" -->
<!-- isosent="20070728123159" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] TCP Nagle algorithm and latency" -->
<!-- id="EC982366-1D0A-47D0-B198-91663B7866C4_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="f8841bfe0707050526s4a5cebcdk12dabc9b56ce345_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-07-28 08:31:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3787.php">Jeff Squyres: "Re: [OMPI users] How to use multi TCP network"</a>
<li><strong>Previous message:</strong> <a href="3785.php">Jeff Squyres: "Re: [OMPI users] torque and openmpi"</a>
<li><strong>In reply to:</strong> <a href="3576.php">Biagio Cosenza: "[OMPI users] TCP Nagle algorithm and latency"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry I previously missed this mail.
<br>
<p>I just recently added an MCA parameter to OMPI that allows enabling  
<br>
or disabling Nagle's algorithm on the TCP BTL (OMPI's lowest layer  
<br>
for MPI point-to-point communications for TCP).  However, I'll tell  
<br>
you that some of the OMPI developers thought that this was a useless  
<br>
MCA parameter and that all users should leave Nagle's algorithm  
<br>
disabled because MPI performance is usually concerned about the  
<br>
latency -- and when it's not about latency, the extra bandwidth you  
<br>
get from Nagle is so small that it won't matter.
<br>
<p>This new MCA parameter is btl_tcp_use_nagle, and it accepts values of  
<br>
0 or 1.  It will show up in Open MPI v1.3 (or you can get a nightly  
<br>
trunk tarball and try it out there).
<br>
<p>We do not have a fine-grained mechanism to select to use Nagle for  
<br>
some sockets and not for other sockets, sorry...
<br>
<p><p>On Jul 5, 2007, at 8:26 AM, Biagio Cosenza wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I'm using Open MPI in a real time rendering system and I need an  
</span><br>
<span class="quotelev1">&gt; accurate latency control.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; consider the 'Nagle' optimization implemented in the TCP/IP  
</span><br>
<span class="quotelev1">&gt; protocol, which delays small packets for a short time period to  
</span><br>
<span class="quotelev1">&gt; possibly combine them with successive packets generating network  
</span><br>
<span class="quotelev1">&gt; friendly packet sizes.
</span><br>
<span class="quotelev1">&gt; This optimization can result in a better throughput when lots of  
</span><br>
<span class="quotelev1">&gt; small packets are sent, but can also lead to considerable  
</span><br>
<span class="quotelev1">&gt; latencies, if  packets get delayed several times.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For example, I want to turn the Nagle optimization on for sockets  
</span><br>
<span class="quotelev1">&gt; in which updated scene data is streamed to the clients, as  
</span><br>
<span class="quotelev1">&gt; throughput is the main issue here.
</span><br>
<span class="quotelev1">&gt; On the other hand, I want turn it off for e.g. sockets used to send  
</span><br>
<span class="quotelev1">&gt; tiles to the clients, as this has to be done with an absolute  
</span><br>
<span class="quotelev1">&gt; minimum of latency.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can I do it with OpenMPI?
</span><br>
<span class="quotelev1">&gt; Am I using the the wrong tool?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Biagio Cosenza
</span><br>
<span class="quotelev1">&gt; an italian MSc student
</span><br>
<span class="quotelev1">&gt; Universit&#224; di Salerno
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
<li><strong>Next message:</strong> <a href="3787.php">Jeff Squyres: "Re: [OMPI users] How to use multi TCP network"</a>
<li><strong>Previous message:</strong> <a href="3785.php">Jeff Squyres: "Re: [OMPI users] torque and openmpi"</a>
<li><strong>In reply to:</strong> <a href="3576.php">Biagio Cosenza: "[OMPI users] TCP Nagle algorithm and latency"</a>
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
