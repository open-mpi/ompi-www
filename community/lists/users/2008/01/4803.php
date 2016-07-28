<?
$subject_val = "Re: [OMPI users] Open MPI v1.2.5 released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 10 08:18:12 2008" -->
<!-- isoreceived="20080110131812" -->
<!-- sent="Thu, 10 Jan 2008 08:17:41 -0500" -->
<!-- isosent="20080110131741" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI v1.2.5 released" -->
<!-- id="1493F318-F768-48E7-B1F8-86124E2E3C61_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C524E178-912C-461B-A864-19454C31EBC3_at_apple.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI v1.2.5 released<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-10 08:17:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4804.php">Gleb Natapov: "Re: [OMPI users] Ideal MTU in Infiniband"</a>
<li><strong>Previous message:</strong> <a href="4802.php">Parag Kalra: "Re: [OMPI users] Ideal MTU in Infiniband"</a>
<li><strong>In reply to:</strong> <a href="4800.php">Warner Yuen: "Re: [OMPI users] Open MPI v1.2.5 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4808.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] Open MPI v1.2.5 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 9, 2008, at 3:50 PM, Warner Yuen wrote:
<br>
<p><span class="quotelev1">&gt; Thanks to Brian Barrett, I was able to get through some ugly Intel  
</span><br>
<span class="quotelev1">&gt; compiler bugs during the configure script. I now have OMPI v1.2.5  
</span><br>
<span class="quotelev1">&gt; running nicely under Mac OSX v10.5 Leopard!
</span><br>
<p>Excellent!
<br>
<p><span class="quotelev1">&gt; However, I have a question about hostfiles. I would like to manually  
</span><br>
<span class="quotelev1">&gt; launch MPI jobs from my headnode, but I don't want the jobs to run  
</span><br>
<span class="quotelev1">&gt; on the head node. In LAM/MPI I could add a &quot;hostname schedule=no&quot; to  
</span><br>
<span class="quotelev1">&gt; the hostfile, is there an equivalent in OpenMPI? I'm sure this has  
</span><br>
<span class="quotelev1">&gt; come up before, but I couldn't find an answer in the archives.
</span><br>
<p>Actually, we tried to learn how *not* do to it from LAM :-) and did it  
<br>
a bit better in Open MPI (at least, we think so ;-) ).
<br>
<p>In Open MPI, you can simply not list the head node in the hostfile.   
<br>
More specifically: in LAM, you *have* to list the node where you  
<br>
invoke mpirun from in the hostfile (hence the need for the schedule=no  
<br>
attribute).  In Open MPI, there is no such requirement, so you can  
<br>
just lead the head node's hostname out of the hostfile.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4804.php">Gleb Natapov: "Re: [OMPI users] Ideal MTU in Infiniband"</a>
<li><strong>Previous message:</strong> <a href="4802.php">Parag Kalra: "Re: [OMPI users] Ideal MTU in Infiniband"</a>
<li><strong>In reply to:</strong> <a href="4800.php">Warner Yuen: "Re: [OMPI users] Open MPI v1.2.5 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4808.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] Open MPI v1.2.5 released"</a>
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
