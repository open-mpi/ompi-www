<?
$subject_val = "Re: [OMPI users] OpenMPI on a LAN (Raymond Wan)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  1 10:27:45 2008" -->
<!-- isoreceived="20081201152745" -->
<!-- sent="Mon, 1 Dec 2008 08:27:23 -0700" -->
<!-- isosent="20081201152723" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI on a LAN (Raymond Wan)" -->
<!-- id="73EB5907-F4C0-44F9-ACE3-E484F410782C_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="27329b10811290640n4a0bfd48u5f71fbca7bf48054_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-01 10:27:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7376.php">Heitor Florido: "Re: [OMPI users] OpenMPI on a LAN"</a>
<li><strong>Previous message:</strong> <a href="../../2008/11/7374.php">Raymond Wan: "Re: [OMPI users] OpenMPI on a LAN"</a>
<li><strong>In reply to:</strong> <a href="../../2008/11/7373.php">Heitor Florido: "Re: [OMPI users] OpenMPI on a LAN (Raymond Wan)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Heitor
<br>
<p>You may have trouble making this work with OMPI 1.2 depending upon how  
<br>
you actually execute things. The Publish_name and Lookup_name  
<br>
functions in that release series are somewhat constrained in their  
<br>
operation. You may find 1.3 to be a better fit.
<br>
<p>That said, you -can- make it work in OMPI 1.2. The key is that both  
<br>
client and server must be started from the same node - i.e., the  
<br>
mpirun must be executed on the same node (the proc itself can be  
<br>
elsewhere). Here is roughly what you have to do for OMPI 1.2:
<br>
<p>1. start a persistent orted that will serve as the host for the data:
<br>
<p>$&gt; orted --seed --persistent --universe foo
<br>
<p>2. start your server off - for this example, I will have it run on a  
<br>
specified node:
<br>
<p>$&gt; mpirun -np 1 -host server-host --universe foo ./my_server &amp;
<br>
<p>3. start your client off:
<br>
<p>$&gt; mpirun -np 1 -host client-host --universe foo ./my_client &amp;
<br>
<p>This will put both client and server in the same &quot;universe&quot;, which is  
<br>
equivalent to being in the same &quot;namespace&quot; - thus, the client should  
<br>
be able to find the server's published info.
<br>
<p>Note that you will have to &quot;kill&quot; the orted when you are done - 1.2  
<br>
doesn't include a polite way to terminate it, unfortunately.
<br>
<p>Of course, you'll still need to solve any ssh issues.
<br>
<p>Hope that helps
<br>
Ralph
<br>
<p><p>On Nov 29, 2008, at 7:40 AM, Heitor Florido wrote:
<br>
<p><span class="quotelev1">&gt; Hi raymond,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have installed OpenMPI on both computers and my application works  
</span><br>
<span class="quotelev1">&gt; on on both of them, but when I try to communicate between them, the  
</span><br>
<span class="quotelev1">&gt; method MPI_Lookup_name can't resolve the name published by the other  
</span><br>
<span class="quotelev1">&gt; machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've tried to run the example from mpi-forum that uses MPI_Open_port  
</span><br>
<span class="quotelev1">&gt; too, but it didn't work either.
</span><br>
<span class="quotelev1">&gt; After reading about it on some FAQs e some other threads from the  
</span><br>
<span class="quotelev1">&gt; forum, I believe that I need to config my ssh options.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Heitor
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="7376.php">Heitor Florido: "Re: [OMPI users] OpenMPI on a LAN"</a>
<li><strong>Previous message:</strong> <a href="../../2008/11/7374.php">Raymond Wan: "Re: [OMPI users] OpenMPI on a LAN"</a>
<li><strong>In reply to:</strong> <a href="../../2008/11/7373.php">Heitor Florido: "Re: [OMPI users] OpenMPI on a LAN (Raymond Wan)"</a>
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
