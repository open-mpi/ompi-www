<?
$subject_val = "Re: [OMPI users] OMPI Collectives";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  1 10:27:26 2006" -->
<!-- isoreceived="20061101152726" -->
<!-- sent="Wed, 1 Nov 2006 10:27:03 -0500" -->
<!-- isosent="20061101152703" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI Collectives" -->
<!-- id="3D27CA4A-4DF5-4DAA-A582-E33B85F0073A_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="03a801c6fae3$ad69f380$ca79e30a_at_ladd02" -->
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
<strong>Date:</strong> 2006-11-01 10:27:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2099.php">George Bosilca: "Re: [OMPI users] about the openmpi problem"</a>
<li><strong>Previous message:</strong> <a href="2097.php">calin pal: "[OMPI users] about the openmpi problem"</a>
<li><strong>In reply to:</strong> <a href="../../2006/10/2077.php">Tony Ladd: "[OMPI users] OMPI Collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2101.php">Michael Kluskens: "Re: [OMPI users] OMPI Collectives"</a>
<li><strong>Reply:</strong> <a href="2101.php">Michael Kluskens: "Re: [OMPI users] OMPI Collectives"</a>
<li><strong>Reply:</strong> <a href="2111.php">Pierre Valiron: "Re: [OMPI users] OMPI Collectives"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 28, 2006, at 6:51 PM, Tony Ladd wrote:
<br>
<p><span class="quotelev1">&gt; George
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the references. However, I was not able to figure out if  
</span><br>
<span class="quotelev1">&gt; it what
</span><br>
<span class="quotelev1">&gt; I am asking is so trivial it is simply passed over or so subtle  
</span><br>
<span class="quotelev1">&gt; that its
</span><br>
<span class="quotelev1">&gt; been overlooked (I suspect the former).
</span><br>
<p>No. The answer to your question was in the articles. We have more  
<br>
than just the Rabenseifner reduce and all-reduce algorithms. Some of  
<br>
the most common collective communication calls have up to 15  
<br>
different implementations in Open MPI. Of course, each of these  
<br>
implementations give the best performance under some particular  
<br>
conditions. Unfortunately, there is no unique algorithms that give  
<br>
the best performance in all cases. As we have to deal with multiple  
<br>
algorithms for each collective, we have to figure out which one is  
<br>
better and where. This usually depend on the number of nodes in the  
<br>
communicator, the message size as well as the network properties. In  
<br>
few words, it's difficult to choose the best one without having prior  
<br>
knowledge about the networks you're trying to use. This is something  
<br>
we're working on right now on Open MPI. Until then ... It might  
<br>
happens that for some particular points the performance of he  
<br>
collective communications will not show the best possible  
<br>
performance. However, to have a slow-down of a factor of 10 is quite  
<br>
unbelievable. There might be something else going on there...
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>PS: BTW which version of Open MPI are you using ? The one who deliver  
<br>
the best performance or the collective communications (at least on  
<br>
high performance networks) is the nightly release of he 1.2 branch.
<br>
<p><span class="quotelev1">&gt; The binary tree algorithm in
</span><br>
<span class="quotelev1">&gt; MPI_Allreduce takes a tiume proportional to 2*N*log_2M where N is  
</span><br>
<span class="quotelev1">&gt; the vector
</span><br>
<span class="quotelev1">&gt; length and M is the number of processes. There is a divide and conquer
</span><br>
<span class="quotelev1">&gt; strategy
</span><br>
<span class="quotelev1">&gt; (<a href="http://www.hlrs.de/organization/par/services/models/mpi/">http://www.hlrs.de/organization/par/services/models/mpi/</a> 
</span><br>
<span class="quotelev1">&gt; myreduce.html) that
</span><br>
<span class="quotelev1">&gt; mpich uses to do a MPI_Reduce in a time proportional to N. Is this  
</span><br>
<span class="quotelev1">&gt; algorithm
</span><br>
<span class="quotelev1">&gt; or something equivalent in OpenMPI at present? If so how do I turn  
</span><br>
<span class="quotelev1">&gt; it on?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also found that OpenMPI is sometimes very slow on MPI_Allreduce  
</span><br>
<span class="quotelev1">&gt; using TCP.
</span><br>
<span class="quotelev1">&gt; Things are OK up to 16 processes but at 24 the rates (Message  
</span><br>
<span class="quotelev1">&gt; length divided
</span><br>
<span class="quotelev1">&gt; by time) are as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message size (Kbytes)  		   Throughput (Mbytes/sec)
</span><br>
<span class="quotelev1">&gt; 					M=24		M=32		M=48
</span><br>
<span class="quotelev1">&gt; 	1				1.38		1.30		1.09
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	2				2.28		1.94		1.50
</span><br>
<span class="quotelev1">&gt; 	4				2.92		2.35		1.73
</span><br>
<span class="quotelev1">&gt; 	8				3.56		2.81		1.99
</span><br>
<span class="quotelev1">&gt; 	16				3.97		1.94		0.12
</span><br>
<span class="quotelev1">&gt; 	32				0.34		0.24		0.13
</span><br>
<span class="quotelev1">&gt; 	64				3.07		2.33		1.57
</span><br>
<span class="quotelev1">&gt; 	128				3.70		2.80		1.89
</span><br>
<span class="quotelev1">&gt; 	256				4.10		3.10		2.08
</span><br>
<span class="quotelev1">&gt; 	512				4.19		3.28		2.08
</span><br>
<span class="quotelev1">&gt; 	1024				4.36		3.36		2.17
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Around 16-32KBytes there is a pronouced slowdown-roughly a factor  
</span><br>
<span class="quotelev1">&gt; of 10,
</span><br>
<span class="quotelev1">&gt; which seems too much. Any idea whats going on?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tony
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------
</span><br>
<span class="quotelev1">&gt; Tony Ladd
</span><br>
<span class="quotelev1">&gt; Chemical Engineering
</span><br>
<span class="quotelev1">&gt; University of Florida
</span><br>
<span class="quotelev1">&gt; PO Box 116005
</span><br>
<span class="quotelev1">&gt; Gainesville, FL 32611-6005
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tel: 352-392-6509
</span><br>
<span class="quotelev1">&gt; FAX: 352-392-9513
</span><br>
<span class="quotelev1">&gt; Email: tladd_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Web: <a href="http://ladd.che.ufl.edu">http://ladd.che.ufl.edu</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2099.php">George Bosilca: "Re: [OMPI users] about the openmpi problem"</a>
<li><strong>Previous message:</strong> <a href="2097.php">calin pal: "[OMPI users] about the openmpi problem"</a>
<li><strong>In reply to:</strong> <a href="../../2006/10/2077.php">Tony Ladd: "[OMPI users] OMPI Collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2101.php">Michael Kluskens: "Re: [OMPI users] OMPI Collectives"</a>
<li><strong>Reply:</strong> <a href="2101.php">Michael Kluskens: "Re: [OMPI users] OMPI Collectives"</a>
<li><strong>Reply:</strong> <a href="2111.php">Pierre Valiron: "Re: [OMPI users] OMPI Collectives"</a>
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
