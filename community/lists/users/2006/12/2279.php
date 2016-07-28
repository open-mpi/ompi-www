<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Dec  2 13:21:49 2006" -->
<!-- isoreceived="20061202182149" -->
<!-- sent="Sat, 02 Dec 2006 13:21:42 -0500" -->
<!-- isosent="20061202182142" -->
<!-- name="Patrick Geoffray" -->
<!-- email="patrick_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to set paffinity on a multi-cpu node?" -->
<!-- id="4571C436.80705_at_myri.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.23.1165078815.26880.users_at_open-mpi.org" -->
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
<strong>From:</strong> Patrick Geoffray (<em>patrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-02 13:21:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2280.php">Brock Palen: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Previous message:</strong> <a href="2278.php">Jeff Squyres: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/11/2225.php">shaposh_at_[hidden]: "[OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I *believe* that this has to do with physical setup within the  
</span><br>
<span class="quotelev1">&gt; machine (i.e., the NIC/HCA bus is physically &quot;closer&quot; to some  
</span><br>
<span class="quotelev1">&gt; sockets), but I'm not much of a hardware guy to know that for sure.   
</span><br>
<span class="quotelev1">&gt; Someone with more specific knowledge should chime in here...
</span><br>
<p>On NUMA architectures, most common being Opteron, the South Bridge is 
<br>
connected through an HT link to one CPU on one socket. Which socket 
<br>
depends on the motherboard, but it should be described in the 
<br>
motherboard documentation (it's not always socket 0). If a process on 
<br>
the other socket needs to write something to a NIC on a PCIE bus behind 
<br>
the South Bridge, it needs to first hop through the first socket. This 
<br>
hop cost usually something like 100ns, ie 0.1 us. If the socket is 
<br>
further away, like in a 4 or 8-socket configuration, there would 
<br>
potentially be more hops.
<br>
<p>However, having the processes getting bumped from one socket to another 
<br>
is more expensive in terms of cache locality (with all of the cache 
<br>
coherency overhead that comes with the lack of it) than it terms of HT 
<br>
routing.
<br>
<p>Non-NUMA architectures like Intel Woodcrest have a flat access time to 
<br>
the South Bridge, but cache locality is still important so CPU affinity 
<br>
is always a good thing to do.
<br>
<p>Patrick
<br>
<pre>
-- 
Patrick Geoffray
Myricom, Inc.
<a href="http://www.myri.com">http://www.myri.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2280.php">Brock Palen: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Previous message:</strong> <a href="2278.php">Jeff Squyres: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/11/2225.php">shaposh_at_[hidden]: "[OMPI users] How to set paffinity on a multi-cpu node?"</a>
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
