<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 14 17:45:40 2007" -->
<!-- isoreceived="20070814214540" -->
<!-- sent="Tue, 14 Aug 2007 17:45:29 -0400" -->
<!-- isosent="20070814214529" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_AllReduce design for shared-memory." -->
<!-- id="4A1EEA56-8A3F-4E99-9A69-6A856AA0E265_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1187123967.46c212ffc6a89_at_webmail.ksu.edu" -->
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
<strong>Date:</strong> 2007-08-14 17:45:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3860.php">Isaac Huang: "[OMPI users] locations of processes spawned by MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="3858.php">smairal_at_[hidden]: "Re: [OMPI users] MPI_AllReduce design for shared-memory."</a>
<li><strong>In reply to:</strong> <a href="3857.php">smairal_at_[hidden]: "Re: [OMPI users] MPI_AllReduce design for shared-memory."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3858.php">smairal_at_[hidden]: "Re: [OMPI users] MPI_AllReduce design for shared-memory."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The primary person you need to talk to is turning in her dissertation  
<br>
within the next few days.  So I think she's kinda busy at the  
<br>
moment...  :-)
<br>
<p>Sorry for the delay -- I'll take a shot at answers below...
<br>
<p><p>On Aug 14, 2007, at 4:39 PM, smairal_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Can anyone help on this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Thanks,
</span><br>
<span class="quotelev1">&gt; Sarang.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Quoting smairal_at_[hidden]:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; I am doing a research on parallel techniques for shared-memory
</span><br>
<span class="quotelev2">&gt;&gt; systems(NUMA). I understand that OpenMPI is intelligent to utilize
</span><br>
<span class="quotelev2">&gt;&gt; shared-memory system and it uses processor-affinity.
</span><br>
<p>Open MPI has coarse-grained processor-affinity control, see:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=tuning#using-paffinity">http://www.open-mpi.org/faq/?category=tuning#using-paffinity</a>
<br>
<p>Expect to see more functionality / flexibility here in the future...
<br>
<p><span class="quotelev2">&gt;&gt; Is the OpenMPI design of MPI_AllReduce &quot;same&quot; for shared-memory  
</span><br>
<span class="quotelev2">&gt;&gt; (NUMA) as well as distributed system? Can someone please tell me   
</span><br>
<span class="quotelev2">&gt;&gt; MPI_AllReduce design, in brief, in terms of processes and their  
</span><br>
<span class="quotelev2">&gt;&gt; interaction on shared-memory?
</span><br>
<p>Open MPI is fundamentally based on plugins.  We have plugins in for  
<br>
various flavors of collective algorithms (see the code base: ompi/mca/ 
<br>
coll/), one of which is &quot;sm&quot; (shared memory).  The shared memory  
<br>
collectives are currently quite limited but are being expanded and  
<br>
improved by Indiana University (e.g., IIRC, allreduce uses the shared  
<br>
memory reduce followed by a shared memory bcast).
<br>
<p>The &quot;tuned&quot; collective plugin has its own implementation(s) of  
<br>
Allreduce -- Jelena or George will have to comment here.  They do not  
<br>
assume shared memory; they use well-known algorithms for allreduce.   
<br>
The &quot;tuned&quot; component basically implements a wide variety of  
<br>
algorithms for each MPI collective and attempts to choose which one  
<br>
will be best to use at run-time.  U. Tennessee has done a lot of work  
<br>
in this area and I think they have several published papers on it.
<br>
<p>The &quot;basic&quot; plugin is the dirt-simple correct-but-not-optimized  
<br>
component that does simple linear and logarithmic algorithms for all  
<br>
the MPI collectives.  If we don't have a usable algorithm anywhere  
<br>
else, we fall back to the basic plugin (e.g., allreduce is a reduce  
<br>
followed by a bcast).
<br>
<p><span class="quotelev2">&gt;&gt; Else please suggest me a good reference for this.
</span><br>
<p>Our basic philosophy / infrastructure for MPI collectives is based on  
<br>
this paper:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/papers/ics-2004/">http://www.open-mpi.org/papers/ics-2004/</a>
<br>
<p>Although work that happened literally last week is just about to hit  
<br>
the development trunk (within a week or so -- still doing some  
<br>
debugging) that brings Goodness to allowing a first-level of mixing-n- 
<br>
matching between collective components that do not provide all the  
<br>
MPI algorithms.  I can explain more if you care.
<br>
<p>Hope this helps...
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
<li><strong>Next message:</strong> <a href="3860.php">Isaac Huang: "[OMPI users] locations of processes spawned by MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="3858.php">smairal_at_[hidden]: "Re: [OMPI users] MPI_AllReduce design for shared-memory."</a>
<li><strong>In reply to:</strong> <a href="3857.php">smairal_at_[hidden]: "Re: [OMPI users] MPI_AllReduce design for shared-memory."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3858.php">smairal_at_[hidden]: "Re: [OMPI users] MPI_AllReduce design for shared-memory."</a>
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
