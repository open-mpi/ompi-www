<?
$subject_val = "Re: [OMPI users] Implementation of TCP v/s OpenIB (Eager and	Rendezvous) protocols";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  1 08:51:20 2014" -->
<!-- isoreceived="20140201135120" -->
<!-- sent="Sat, 1 Feb 2014 13:51:19 +0000" -->
<!-- isosent="20140201135119" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Implementation of TCP v/s OpenIB (Eager and	Rendezvous) protocols" -->
<!-- id="513C1F2A-8FED-4626-B75F-F0FEC2325053_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAPkf6e0iQ0grNw=xG_GrnsReQnCL_MesbDL2RvXcxx8vJ0+4xw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Implementation of TCP v/s OpenIB (Eager and	Rendezvous) protocols<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-01 08:51:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23524.php">Victor: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<li><strong>Previous message:</strong> <a href="23522.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI hangs when application compiled with -O3, runs fine with -O0"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/01/23513.php">Siddhartha Jana: "Re: [OMPI users] Implementation of TCP v/s OpenIB (Eager and Rendezvous) protocols"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23527.php">Siddhartha Jana: "Re: [OMPI users] Implementation of TCP v/s OpenIB (Eager and Rendezvous) protocols"</a>
<li><strong>Reply:</strong> <a href="23527.php">Siddhartha Jana: "Re: [OMPI users] Implementation of TCP v/s OpenIB (Eager and Rendezvous) protocols"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 31, 2014, at 2:49 AM, Siddhartha Jana &lt;siddharthajana24_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Sorry for the typo:
</span><br>
<span class="quotelev1">&gt; **  I was hoping to understand the impact of OpenMPI's implementation of these protocols using traditional TCP.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is the paper I was referring to:
</span><br>
<span class="quotelev1">&gt; Woodall, et al., &quot;High Performance RDMA Protocols in HPC&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 31 January 2014 00:43, Siddhartha Jana &lt;siddharthajana24_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Good evening
</span><br>
<span class="quotelev1">&gt; Is there any documentation describing the difference in MPI-level implementation of the eager and rendezvous protocols in OpenIB BTL versus TCP BTL ?
</span><br>
<p>Unfortunately, there is not, sorry.  Just the code.  :-\
<br>
<p><span class="quotelev1">&gt; I am only aware of the following paper. While this presents an excellent overview of how RDMA capabilities of modern interconnects can be leveraged for implementing these protocols, I was hoping to understand how OpenMPI implications of handling these protocols using traditional TCP.
</span><br>
<p>The easiest way to think about it is that the TCP BTL could well be implemented with just the &quot;send&quot; method (and no &quot;get&quot; or &quot;put&quot; methods).  
<br>
<p>That being said, the TCP BTL does emulate the &quot;put&quot; method (meaning: there's obviously no hardware support for a direct data placement using a general socket in TCP like there is with OpenFabrics-style RDMA) simply because it allows us to be slightly more efficient on the receiver (IIRC; it's been a loooong time since I've looked at that code).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23524.php">Victor: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<li><strong>Previous message:</strong> <a href="23522.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI hangs when application compiled with -O3, runs fine with -O0"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/01/23513.php">Siddhartha Jana: "Re: [OMPI users] Implementation of TCP v/s OpenIB (Eager and Rendezvous) protocols"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23527.php">Siddhartha Jana: "Re: [OMPI users] Implementation of TCP v/s OpenIB (Eager and Rendezvous) protocols"</a>
<li><strong>Reply:</strong> <a href="23527.php">Siddhartha Jana: "Re: [OMPI users] Implementation of TCP v/s OpenIB (Eager and Rendezvous) protocols"</a>
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
