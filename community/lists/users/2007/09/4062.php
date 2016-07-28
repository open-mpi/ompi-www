<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 25 21:18:33 2007" -->
<!-- isoreceived="20070926011833" -->
<!-- sent="Tue, 25 Sep 2007 19:18:25 -0600" -->
<!-- isosent="20070926011825" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] readv failed with errno=104" -->
<!-- id="C2ABBA65-D993-4B89-ACA5-9777AB49876F_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="697161.42427.qm_at_web32211.mail.mud.yahoo.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-25 21:18:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4063.php">Tim Mattox: "[OMPI users] Open MPI v1.2.4 released"</a>
<li><strong>Previous message:</strong> <a href="4061.php">Brian Barrett: "Re: [OMPI users] OpenMPI on Cray XT4 CNL"</a>
<li><strong>In reply to:</strong> <a href="4057.php">Rayne: "[OMPI users] readv failed with errno=104"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 25, 2007, at 4:25 AM, Rayne wrote:
<br>
<p><span class="quotelev1">&gt; Hi all, I'm using the SGE system on my school network,
</span><br>
<span class="quotelev1">&gt; and would like to know if the errors I received below
</span><br>
<span class="quotelev1">&gt; means there's something wrong with my MPI_Recv
</span><br>
<span class="quotelev1">&gt; function.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [0,1,3][btl_tcp_frag.c:202:mca_btl_tcp_frag_recv]
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp_frag_recv: readv failed with errno=104
</span><br>
<span class="quotelev1">&gt; [0,1,2][btl_tcp_frag.c:202:mca_btl_tcp_frag_recv]
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp_frag_recv: readv failed with errno=104
</span><br>
<p>Generally, these indicate that the remote process has died.   
<br>
Generally, that means an abnormal termination due to segmentation  
<br>
faults or the like.  You might want to run the code under a debugger  
<br>
to see if it shows anything useful.  If your cluster doesn't have a  
<br>
parallel debugger like TotalView or DDT available, you can (for small  
<br>
numbers of processes) get away with using xterm and gdb, something like:
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun -np X -d xterm -e gdb &lt;application&gt;
<br>
<p>It'll open X xterms, each with a gdb running one instance of the  
<br>
application.
<br>
<p><p>Good luck,
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4063.php">Tim Mattox: "[OMPI users] Open MPI v1.2.4 released"</a>
<li><strong>Previous message:</strong> <a href="4061.php">Brian Barrett: "Re: [OMPI users] OpenMPI on Cray XT4 CNL"</a>
<li><strong>In reply to:</strong> <a href="4057.php">Rayne: "[OMPI users] readv failed with errno=104"</a>
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
