<?
$subject_val = "Re: [OMPI users] Performance: MPICH2 vs OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  8 17:24:39 2008" -->
<!-- isoreceived="20081008212439" -->
<!-- sent="Wed, 8 Oct 2008 17:24:30 -0400" -->
<!-- isosent="20081008212430" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance: MPICH2 vs OpenMPI" -->
<!-- id="4CFF232D-5CCA-43C7-BD02-34E8F8B1355C_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="cb60cbc40810080610u329c2466r7fae4b0572a30df1_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Performance: MPICH2 vs OpenMPI<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-08 17:24:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6912.php">Aurélien Bouteiller: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6910.php">Brian Dobbins: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6891.php">Sangamesh B: "[OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6924.php">Anthony Chan: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One thing to look for is the process distribution. Based on the  
<br>
application communication pattern, the process distribution can have a  
<br>
tremendous impact on the execution time. Imagine that the application  
<br>
split the processes in two equal groups based on the rank and only  
<br>
communicate in each group. If such a group end-up on the same node,  
<br>
then it will use sm for communications. On the opposite, if they end- 
<br>
up spread across the nodes they will use TCP (which obviously has a  
<br>
bigger latency and a smaller bandwidth) and the overall performance  
<br>
will be greatly impacted.
<br>
<p>By default, Open MPI use the following strategy to distribute  
<br>
processes: if a node has several processors, then consecutive ranks  
<br>
will be started on the same node. As an example in your case (2 nodes  
<br>
with 4 processors each), the ranks 0-3 will be started on the first  
<br>
host, while the ranks 4-7 on the second one. I don't know what is the  
<br>
default distribution for MPICH2 ...
<br>
<p>Anyway, there is a easy way to check if the process distribution is  
<br>
the root of your problem. Please execute your application twice, once  
<br>
providing to mpirun the --bynode argument, and once with the --byslot.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 8, 2008, at 9:10 AM, Sangamesh B wrote:
<br>
<p><span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        I wanted to switch from mpich2/mvapich2 to OpenMPI, as  
</span><br>
<span class="quotelev1">&gt; OpenMPI supports both ethernet and infiniband. Before doing that I  
</span><br>
<span class="quotelev1">&gt; tested an application 'GROMACS' to compare the performance of MPICH2  
</span><br>
<span class="quotelev1">&gt; &amp; OpenMPI. Both have been compiled with GNU compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After this benchmark, I came to know that OpenMPI is slower than  
</span><br>
<span class="quotelev1">&gt; MPICH2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This benchmark is run on a AMD dual core, dual opteron processor.  
</span><br>
<span class="quotelev1">&gt; Both have compiled with default configurations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The job is run on 2 nodes - 8 cores.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI - 25 m 39 s.
</span><br>
<span class="quotelev1">&gt; MPICH2  -  15 m 53 s.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any comments ..?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Sangamesh
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
<li><strong>Next message:</strong> <a href="6912.php">Aurélien Bouteiller: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6910.php">Brian Dobbins: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6891.php">Sangamesh B: "[OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6924.php">Anthony Chan: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
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
