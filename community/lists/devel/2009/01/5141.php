<?
$subject_val = "Re: [OMPI devel] size of shared-memory backing file + maffinity";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 13 14:25:59 2009" -->
<!-- isoreceived="20090113192559" -->
<!-- sent="Tue, 13 Jan 2009 11:29:50 -0800" -->
<!-- isosent="20090113192950" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] size of shared-memory backing file + maffinity" -->
<!-- id="496CEBAE.3060600_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="453d39990901122355n6231af0ar8d6aae465fc58c95_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] size of shared-memory backing file + maffinity<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-13 14:29:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5142.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI question"</a>
<li><strong>Previous message:</strong> <a href="5140.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<li><strong>In reply to:</strong> <a href="5121.php">Lenny Verkhovsky: "Re: [OMPI devel] size of shared-memory backing file + maffinity"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Lenny Verkhovsky wrote:
<br>
<p><span class="quotelev1">&gt;Actually the size is suppose to be the same,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Yes, I would think that that is how it is supposed to work.
<br>
<p><span class="quotelev1">&gt;It just suppose to bind process to it's closer memory node, instead of
</span><br>
<span class="quotelev1">&gt;leaving it to OS.
</span><br>
<span class="quotelev1">&gt;mpool_sm_module.c:82: opal_maffinity_base_bind(&amp;mseg, 1, mpool_sm-&gt;mem_node);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
But this is not the code I'm concerned about.  Sorry I was not clearer.  
<br>
I'm not concerned about how much memory is being allocated within the 
<br>
shared area.  I'm concerned about how big the shared area is... how big 
<br>
the files are that are sitting in /tmp and are being mmapped into the 
<br>
processes' address spaces.
<br>
<p>If I look in sm_btl_first_time_init(), I find a loop from i=0 to 
<br>
i&lt;num_mem_nodes.  In each iteration, I call 
<br>
mca_mpool_base_module_create(), which in turn calls 
<br>
mca_mpool_sm_init().  This function appears to create a file of size 
<br>
num_local_procs*per_peer_size and mmaps it into each process.
<br>
<p>E.g., let's say we have 4 on-node processes and per_peer_size has the 
<br>
default 32 MB value.  So, presumably my shared file in /tmp that I map 
<br>
into each process is 128 MB.  But, if there are multiple memory nodes, 
<br>
then I will have such a file for each memory node... possibly 4 of them 
<br>
for a grand total of 512 MB of shared space.
<br>
<p>Does that explain my concern any better?
<br>
<p><span class="quotelev1">&gt;On Mon, Jan 12, 2009 at 10:02 PM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I'm trying to understand how much shared memory is allocated when maffinity
</span><br>
<span class="quotelev2">&gt;&gt;is on.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;The sm BTL sets up a file that is mmapped into each local process's address
</span><br>
<span class="quotelev2">&gt;&gt;space so that the processes on a node can communicate via shared memory.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Actually, when maffinity indicates that there are multiple &quot;memory nodes&quot; on
</span><br>
<span class="quotelev2">&gt;&gt;the node, then a separate file is set up and mmapped for each &quot;memory node&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;There is an MCA parameter named &quot;[mpool_sm_per_]peer_size&quot;, which by default
</span><br>
<span class="quotelev2">&gt;&gt;is 32 Mbytes.  The idea is that there are n processes on the node, then the
</span><br>
<span class="quotelev2">&gt;&gt;size of the file to be mmapped in is n*32M.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;But, if there are multiple &quot;memory nodes&quot;, will there be that much more
</span><br>
<span class="quotelev2">&gt;&gt;shared memory?  That is, is the total amount of shared memory that's mmapped
</span><br>
<span class="quotelev2">&gt;&gt;into all the processes:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mem_nodes * num_local_procs * peer_size
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Or, should the file for a memory node be created with size proportional to
</span><br>
<span class="quotelev2">&gt;&gt;the number of processes that correspond to that memory node?
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5142.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI question"</a>
<li><strong>Previous message:</strong> <a href="5140.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<li><strong>In reply to:</strong> <a href="5121.php">Lenny Verkhovsky: "Re: [OMPI devel] size of shared-memory backing file + maffinity"</a>
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
