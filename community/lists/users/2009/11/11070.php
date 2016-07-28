<?
$subject_val = "Re: [OMPI users] Help: Firewall problems";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  5 13:39:52 2009" -->
<!-- isoreceived="20091105183952" -->
<!-- sent="Thu, 5 Nov 2009 13:39:47 -0500" -->
<!-- isosent="20091105183947" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help: Firewall problems" -->
<!-- id="AEFC00B4-98CE-4B84-81FD-F633EAC45969_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="289665360911050828s1fa56fbcq8a66effa3dbcb595_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help: Firewall problems<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-05 13:39:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11071.php">Yogesh Aher: "[OMPI users] Openmpi on Heterogeneous environment"</a>
<li><strong>Previous message:</strong> <a href="11069.php">Terry Dontje: "Re: [OMPI users] Help: Firewall problems"</a>
<li><strong>In reply to:</strong> <a href="11066.php">Lee Amy: "[OMPI users] Help: Firewall problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11082.php">Lee Amy: "Re: [OMPI users] Help: Firewall problems"</a>
<li><strong>Reply:</strong> <a href="11082.php">Lee Amy: "Re: [OMPI users] Help: Firewall problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 5, 2009, at 11:28 AM, Lee Amy wrote:
<br>
<p><span class="quotelev1">&gt; I remembered MPI does not count on TCP/IP but why default iptables
</span><br>
<span class="quotelev1">&gt; will prevent the MPI programs from running? After I stop iptables then
</span><br>
<span class="quotelev1">&gt; programs run well. I use Ethernet as connection.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Note that Open MPI *can* use TCP as an interface for MPI messaging.   
<br>
It definitely uses TCP for administrative control of MPI jobs, even if  
<br>
TCP is not used for MPI messaging.  Open MPI therefore basically  
<br>
requires the ability to open sockets between all nodes in the job on  
<br>
random TCP ports.
<br>
<p>Your could probably configure iptables to &quot;trust&quot; all the machines in  
<br>
your cluster (i.e., allow TCP sockets to/from random ports) but  
<br>
disallow most (all?) TCP connections from outside your cluster, if you  
<br>
wanted to...?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11071.php">Yogesh Aher: "[OMPI users] Openmpi on Heterogeneous environment"</a>
<li><strong>Previous message:</strong> <a href="11069.php">Terry Dontje: "Re: [OMPI users] Help: Firewall problems"</a>
<li><strong>In reply to:</strong> <a href="11066.php">Lee Amy: "[OMPI users] Help: Firewall problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11082.php">Lee Amy: "Re: [OMPI users] Help: Firewall problems"</a>
<li><strong>Reply:</strong> <a href="11082.php">Lee Amy: "Re: [OMPI users] Help: Firewall problems"</a>
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
