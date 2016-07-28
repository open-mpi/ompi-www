<?
$subject_val = "Re: [OMPI users] open shmem optimization";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 29 10:50:40 2014" -->
<!-- isoreceived="20140829145040" -->
<!-- sent="Fri, 29 Aug 2014 14:50:37 +0000" -->
<!-- isosent="20140829145037" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open shmem optimization" -->
<!-- id="FF754D77-0ACF-43F1-933F-0E58B3FA016F_at_ornl.gov" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="1409304412.961347414_at_f351.i.mail.ru" -->
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
<strong>Subject:</strong> Re: [OMPI users] open shmem optimization<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-29 10:50:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25189.php">Maxime Boissonneault: "[OMPI users] Weird error with OMPI 1.6.3"</a>
<li><strong>Previous message:</strong> <a href="25187.php">Matt Thompson: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>In reply to:</strong> <a href="25185.php">Timur Ismagilov: "[OMPI users] open shmem optimization"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Timur,
<br>
<p>I don't think this is apples-to-apples comparison.
<br>
<p>In OpenSHMEM world &quot;MPI_waitall&quot; would be mapped to shmem_quiet().  
<br>
Even with this mapping,  shmem_quiet() has a *stronger* completion semantics if you compare it to MPI_waitall.
<br>
Quiet guarantees that the data was delivered to a remote memory, while MPI_waitall does not provide such guarantee for isend operations.
<br>
<p>shmem_barrier_all is a collective operation with embedded shmem_quiet therefore it will not scale the same as MPI_waitall.
<br>
<p>For more details please see:
<br>
<p>Please see <a href="http://bongo.cs.uh.edu/site/sites/default/site_files/openshmem-specification-1.1.pdf">http://bongo.cs.uh.edu/site/sites/default/site_files/openshmem-specification-1.1.pdf</a>
<br>
section 8.7.3
<br>
<p>I hope it helps.
<br>
<p>Pavel (Pasha) Shamis
<br>
<pre>
---
Computer Science Research Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Aug 29, 2014, at 5:26 AM, Timur Ismagilov &lt;tismagilov_at_[hidden]&gt; wrote:
&gt; Hello!
&gt; 
&gt; What param can i tune to increase perfomance(scalability) for my app (all to all pattern with message size = constant/nnodes)?
&gt; I can read this faq for mpi, but is it correct for shmem?
&gt; 
&gt; I have 2 programm doing the same thing(with same input) each node send messages(message size = constant/nnodes) to random set of nodes (but the same set in prg1 and prg2):
&gt; 
&gt; 	&#149; with mpi_isend, mpi_irecv and mpi_waitall
&gt; 	&#149; with shmem_put and shmem_barrier_all
&gt; on 1 2 4 8 16 32 nodes thay have same perfomance(scalabilyty)
&gt; on 64 128 256 nodes shmem programm stop scaling but over 512 nodes shmem programm gets much better perfomance than mpi
&gt;            1prg           2prg
&gt;            perf unit     perf unit      
&gt; 1         30              30
&gt; 2         50              53
&gt; 4         75              85
&gt; 8         110            130
&gt; 16       180            200
&gt; 32       310            350
&gt; 64       500            400 (strange)
&gt; 128     830            400 (strange)
&gt; 256     1350           600 (strange)
&gt; 512     1770           2350 (wow!)
&gt; 
&gt; In scalabel shmem(ompi 1.6.5?) I get the same scalability in this programms.
&gt; 
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25185.php">http://www.open-mpi.org/community/lists/users/2014/08/25185.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25189.php">Maxime Boissonneault: "[OMPI users] Weird error with OMPI 1.6.3"</a>
<li><strong>Previous message:</strong> <a href="25187.php">Matt Thompson: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>In reply to:</strong> <a href="25185.php">Timur Ismagilov: "[OMPI users] open shmem optimization"</a>
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
