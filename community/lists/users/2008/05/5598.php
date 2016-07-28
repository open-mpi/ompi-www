<?
$subject_val = "Re: [OMPI users] Optimal distribution of low and high CPU processes on a heterogeneous cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  5 09:28:40 2008" -->
<!-- isoreceived="20080505132840" -->
<!-- sent="Mon, 5 May 2008 09:28:25 -0400" -->
<!-- isosent="20080505132825" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Optimal distribution of low and high CPU processes on a heterogeneous cluster" -->
<!-- id="02883D77-BBE5-4BD0-843E-0DCDC0A32046_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C8E9EFD3-C247-47B9-8A3D-85AB9B9F7DA3_at_usno.navy.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] Optimal distribution of low and high CPU processes on a heterogeneous cluster<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-05 09:28:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5599.php">jean-christophe.mignot_at_[hidden]: "Re: [OMPI users] setting the btl_tcp_eager_limit"</a>
<li><strong>Previous message:</strong> <a href="5597.php">Jeff Squyres: "Re: [OMPI users] Client/Server test"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/04/5526.php">Roopesh Ojha: "[OMPI users] Optimal distribution of low and high CPU processes on a heterogeneous cluster"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 25, 2008, at 2:27 PM, Roopesh Ojha wrote:
<br>
<p><span class="quotelev1">&gt; For our application, some processes (manager and the datastreams)  
</span><br>
<span class="quotelev1">&gt; won't
</span><br>
<span class="quotelev1">&gt; take much CPU power while others will. Our application first assigns  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; non-compute bound processes and then the high CPU power ones.  
</span><br>
<span class="quotelev1">&gt; Clearly we
</span><br>
<span class="quotelev1">&gt; would like to be able to assign the former processes to our two slower
</span><br>
<span class="quotelev1">&gt; machines. How can we get MPI to achieve this?
</span><br>
<p>Sorry for the delay in replying.
<br>
<p>I'm not entirely clear on exactly what you want to do.  I think you're  
<br>
saying that you have 4 nodes:
<br>
<p>fastnode1
<br>
fastnode2
<br>
slownode1
<br>
slownode2
<br>
<p>And you want to schedule some slow procs and fast procs.  I think you  
<br>
should be able to do something like:
<br>
<p>mpirun -np 2 --host slownode1,slownode2 slowproc : \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-np 2 --host fastnode1,fastnode2 fastproc
<br>
<p><span class="quotelev1">&gt; What is the best way to
</span><br>
<span class="quotelev1">&gt; use
</span><br>
<span class="quotelev1">&gt; slot and max-slot commands in the hostfile to optimize performance?
</span><br>
<p>These options are not really about performance; they're used for  
<br>
distributing processes across nodes.  In your case, those are tightly  
<br>
integrated, but note that they're really different things.
<br>
<p>*Never* tell OMPI that there are more slots than are actually  
<br>
available on a host.
<br>
<p><span class="quotelev1">&gt; How
</span><br>
<span class="quotelev1">&gt; does max-slot behave when some node is listed more than once in the
</span><br>
<span class="quotelev1">&gt; hostfile?
</span><br>
<p>IIRC, it's additive.
<br>
<p><span class="quotelev1">&gt; Is there any way to control where processes are deployed apart from  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; basic bynode or byslot round robin schedule?
</span><br>
<p><p>In the v1.2 series, no.  In the v1.3 series, some new patterns were  
<br>
just implemented within the last week or three -- docs have not been  
<br>
written up yet, but Ralph Castain described some of them on the devel  
<br>
list.  Have a look through those archives on the web for more detail  
<br>
(I'd get the details wrong if I tried to explain them).
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
<li><strong>Next message:</strong> <a href="5599.php">jean-christophe.mignot_at_[hidden]: "Re: [OMPI users] setting the btl_tcp_eager_limit"</a>
<li><strong>Previous message:</strong> <a href="5597.php">Jeff Squyres: "Re: [OMPI users] Client/Server test"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/04/5526.php">Roopesh Ojha: "[OMPI users] Optimal distribution of low and high CPU processes on a heterogeneous cluster"</a>
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
