<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 27 14:18:00 2007" -->
<!-- isoreceived="20070327181800" -->
<!-- sent="Tue, 27 Mar 2007 14:15:06 -0400" -->
<!-- isosent="20070327181506" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open-MPI 1.2 and GM" -->
<!-- id="56DB3488-54E9-42B6-A46B-F812FB4D8F6C_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070327161808.GC12441_at_serac.cold-front.ath.cx" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-27 14:15:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2934.php">Justin Bronder: "Re: [OMPI users] Open-MPI 1.2 and GM"</a>
<li><strong>Previous message:</strong> <a href="2932.php">Mike Houston: "Re: [OMPI users] Issues with Get/Put and IRecv"</a>
<li><strong>In reply to:</strong> <a href="2930.php">Justin Bronder: "[OMPI users] Open-MPI 1.2 and GM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2934.php">Justin Bronder: "Re: [OMPI users] Open-MPI 1.2 and GM"</a>
<li><strong>Reply:</strong> <a href="2934.php">Justin Bronder: "Re: [OMPI users] Open-MPI 1.2 and GM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Justin,
<br>
<p>There is no GM MTL. Therefore, the first mpirun allow the use of  
<br>
every available BTL, while the second one don't allow intra-node  
<br>
communications or self. The correct mpirun command line should be:
<br>
<p>mpirun -np 4 --mca btl gm,self ...
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 27, 2007, at 12:18 PM, Justin Bronder wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Having a user who requires some of the features of gfortran in  
</span><br>
<span class="quotelev1">&gt; 4.1.2, I
</span><br>
<span class="quotelev1">&gt; recently began building a new image.  The issue is that &quot;-mca btl  
</span><br>
<span class="quotelev1">&gt; gm&quot; fails
</span><br>
<span class="quotelev1">&gt; while &quot;-mca mtl gm&quot; works.  I have not yet done any benchmarking,  
</span><br>
<span class="quotelev1">&gt; as I was
</span><br>
<span class="quotelev1">&gt; wondering if the move to mtl is part of the upgrade.  Below are the  
</span><br>
<span class="quotelev1">&gt; packages
</span><br>
<span class="quotelev1">&gt; I rebuilt.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kernel 2.6.16.27 -&gt; 2.6.20.1
</span><br>
<span class="quotelev1">&gt; Gcc 4.1.1 -&gt; 4.1.2
</span><br>
<span class="quotelev1">&gt; GM Drivers 2.0.26 -&gt; 2.0.26 (with patches for newer kernels)
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.1.4 -&gt; 1.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The following works as expected:
</span><br>
<span class="quotelev1">&gt; /usr/local/ompi-gnu/bin/mpirun -np 4 -mca mtl gm --host  
</span><br>
<span class="quotelev1">&gt; node84,node83 ./xhpl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The following fails:
</span><br>
<span class="quotelev1">&gt; /usr/local/ompi-gnu/bin/mpirun -np 4 -mca btl gm --host  
</span><br>
<span class="quotelev1">&gt; node84,node83 ./xhpl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've attached gziped files as suggested on the &quot;Getting Help&quot;  
</span><br>
<span class="quotelev1">&gt; section of the
</span><br>
<span class="quotelev1">&gt; website and the output from the failed mpirun.  Both nodes are  
</span><br>
<span class="quotelev1">&gt; known good
</span><br>
<span class="quotelev1">&gt; Myrinet nodes, using FMA to map.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Justin Bronder
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Advanced Computing Research Lab
</span><br>
<span class="quotelev1">&gt; University of Maine, Orono
</span><br>
<span class="quotelev1">&gt; 20 Godfrey Dr
</span><br>
<span class="quotelev1">&gt; Orono, ME 04473
</span><br>
<span class="quotelev1">&gt; www.clusters.umaine.edu
</span><br>
<span class="quotelev1">&gt; &lt;config.log.gz&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ompi_info.gz&gt;
</span><br>
<span class="quotelev1">&gt; &lt;error_output&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>&quot;Half of what I say is meaningless; but I say it so that the other  
<br>
half may reach you&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kahlil Gibran
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2934.php">Justin Bronder: "Re: [OMPI users] Open-MPI 1.2 and GM"</a>
<li><strong>Previous message:</strong> <a href="2932.php">Mike Houston: "Re: [OMPI users] Issues with Get/Put and IRecv"</a>
<li><strong>In reply to:</strong> <a href="2930.php">Justin Bronder: "[OMPI users] Open-MPI 1.2 and GM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2934.php">Justin Bronder: "Re: [OMPI users] Open-MPI 1.2 and GM"</a>
<li><strong>Reply:</strong> <a href="2934.php">Justin Bronder: "Re: [OMPI users] Open-MPI 1.2 and GM"</a>
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
