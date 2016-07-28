<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Dec 20 19:04:44 2006" -->
<!-- isoreceived="20061221000444" -->
<!-- sent="Wed, 20 Dec 2006 19:04:27 -0500" -->
<!-- isosent="20061221000427" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Infiniband - Any suggestions on &amp;quot;How can you prove to me that OpenMPI is using it?&amp;quot;" -->
<!-- id="D65BB4F4-2278-4812-8FA2-1BB619003F35_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1783B976DF8DCD49B4463FB606CADB222E054B_at_UABEXMB2.ad.uab.edu" -->
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
<strong>Date:</strong> 2006-12-20 19:04:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2393.php">Jeff Squyres: "Re: [OMPI users] How do I compile OpenMPI with PGI compilers andF90 support?"</a>
<li><strong>Previous message:</strong> <a href="2391.php">Michael John Hanby: "[OMPI users] Infiniband - Any suggestions on &quot;How can you prove to me that OpenMPI is using it?&quot;"</a>
<li><strong>In reply to:</strong> <a href="2391.php">Michael John Hanby: "[OMPI users] Infiniband - Any suggestions on &quot;How can you prove to me that OpenMPI is using it?&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2394.php">Andrew J Caird: "Re: [OMPI users] Infiniband - Any suggestions on &quot;How can you proveto me that OpenMPI is using it?&quot;"</a>
<li><strong>Reply:</strong> <a href="2394.php">Andrew J Caird: "Re: [OMPI users] Infiniband - Any suggestions on &quot;How can you proveto me that OpenMPI is using it?&quot;"</a>
<li><strong>Reply:</strong> <a href="2395.php">Jeff Squyres: "Re: [OMPI users] Infiniband - Any suggestions on &quot;How can you prove to me that OpenMPI is using it?&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 20, 2006, at 6:28 PM, Michael John Hanby wrote:
<br>
<p><span class="quotelev1">&gt; Howdy, I'm new to cluster administration, MPI and high speed networks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've compiled my OpenMPI using these settings:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure CC='icc' CXX='icpc' FC='ifort' F77='ifort'
</span><br>
<span class="quotelev1">&gt; --with-mvapi=/usr/local/topspin
</span><br>
<span class="quotelev1">&gt; --with-mvapi-libdir=/usr/local/topspin/lib64 --enable-static
</span><br>
<span class="quotelev1">&gt; --prefix=/share/apps/openmpi/1.1.2
</span><br>
<p>Looks good.
<br>
<p><span class="quotelev1">&gt; I'm running a Gromacs -np 16 job that I submitting using Sun Grid  
</span><br>
<span class="quotelev1">&gt; Engine
</span><br>
<span class="quotelev1">&gt; and OpenMPI that's going to run for several hours.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The job was submitted with:
</span><br>
<span class="quotelev1">&gt; mpirun -np 16 -machinefile machines mdrun ......
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've been asked by the owner of the cluster &quot;How can you prove to me
</span><br>
<span class="quotelev1">&gt; that this openmpi job is using the Infiniband network?&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At first I thought a simple netstat -an on the compute nodes might  
</span><br>
<span class="quotelev1">&gt; tell
</span><br>
<span class="quotelev1">&gt; me, however I don't see the Infiniband IP's in the list so I'm  
</span><br>
<span class="quotelev1">&gt; thinking
</span><br>
<span class="quotelev1">&gt; maybe I need to be looking elsewhere.
</span><br>
<p>That's correct.
<br>
<p><span class="quotelev1">&gt; Ompi_info reports:
</span><br>
<span class="quotelev1">&gt;   MCA mpool: mvapi (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;   MCA btl: mvapi (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<p>Good -- this shows that OMPI was properly compiled with MVAPI support  
<br>
(have you considered moving to the OpenFabrics/OFED IB stack,  
<br>
perchance?  See this web page for more details: <a href="http://www.open">http://www.open</a>- 
<br>
mpi.org/faq/?category=openfabrics, in particular, <a href="http://www.open">http://www.open</a>- 
<br>
mpi.org/faq/?category=openfabrics#vapi-support).
<br>
<p>The usual answer is that you should be able to tell via performance  
<br>
that OMPI is using IB.  You can do some small runs with an MPI  
<br>
network benchmark  application (e.g., NetPIPE) to verify this.  Runs  
<br>
over the IB network will exhibit much better performance than over  
<br>
the TCP network.
<br>
<p>In general, Open MPI checks out what networks are available at run  
<br>
time and chooses the &quot;best&quot; one(s) to use for MPI traffic.  So if it  
<br>
sees an IB network, it should automatically use it.  Additionally, if  
<br>
OMPI has support for the IB network compiled in (e.g., the mvapi  
<br>
components) and it *doesn't* find a valid IB network to use at run  
<br>
time, the mvapi component will complain and tell you that you're  
<br>
likely to get less performance than you expect and then fail over to  
<br>
tcp.
<br>
<p>So -- no news is good news.  :-)
<br>
<p>Admittedly, some users advocate that an option to mpirun showing  
<br>
which networks are being used would be nicer, such as:
<br>
<p>&nbsp;&nbsp;&nbsp;shell$ mpirun --show-me-which-network-i'm-using ...
<br>
<p>But we haven't gotten around to implementing that because the users  
<br>
that we [informally] polled said &quot;if you tell me that I'm *not* using  
<br>
the high speed network, that's good enough.&quot;  So that's what we  
<br>
implemented first and never got a round tuit to implement the notices  
<br>
viewed from the other way around (so to speak).  It's on the to-do  
<br>
list; it's just low priority.  Patches would be gratefully  
<br>
accepted.  ;-)
<br>
<p>All that being said, you can *force* using the IB network with the  
<br>
following (also see <a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>? 
<br>
category=openfabrics#ib-btl):
<br>
<p>&nbsp;&nbsp;&nbsp;shell$ mpirun --mca btl mvapi,self,sm ...
<br>
<p>This tells Open MPI to use the &quot;BTL&quot; (read: MPI point-to-point  
<br>
network) using the mvapi, sm (shared memory), and self components  
<br>
(&quot;self&quot; is what is used when an MPI application sends to itself).   
<br>
Similarly, you can force using TCP with:
<br>
<p>&nbsp;&nbsp;&nbsp;shell$ mpirun --mca btl tcp,self,sm ...
<br>
<p>If you specify the &quot;btl&quot; MCA parameter, OMPI will only use the  
<br>
components that you tell it to use.  Or, you can tell OMPI which  
<br>
components *not* to use, such as:
<br>
<p>&nbsp;&nbsp;&nbsp;shell$ mpirun --mca btl ^tcp ...
<br>
<p>Which tells OMPI that it can use any btl component *except* tcp  
<br>
(i.e., mvapi, sm, self, ...etc.).
<br>
<p>Hope this helps!
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2393.php">Jeff Squyres: "Re: [OMPI users] How do I compile OpenMPI with PGI compilers andF90 support?"</a>
<li><strong>Previous message:</strong> <a href="2391.php">Michael John Hanby: "[OMPI users] Infiniband - Any suggestions on &quot;How can you prove to me that OpenMPI is using it?&quot;"</a>
<li><strong>In reply to:</strong> <a href="2391.php">Michael John Hanby: "[OMPI users] Infiniband - Any suggestions on &quot;How can you prove to me that OpenMPI is using it?&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2394.php">Andrew J Caird: "Re: [OMPI users] Infiniband - Any suggestions on &quot;How can you proveto me that OpenMPI is using it?&quot;"</a>
<li><strong>Reply:</strong> <a href="2394.php">Andrew J Caird: "Re: [OMPI users] Infiniband - Any suggestions on &quot;How can you proveto me that OpenMPI is using it?&quot;"</a>
<li><strong>Reply:</strong> <a href="2395.php">Jeff Squyres: "Re: [OMPI users] Infiniband - Any suggestions on &quot;How can you prove to me that OpenMPI is using it?&quot;"</a>
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
