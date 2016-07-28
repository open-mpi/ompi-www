<?
$subject_val = "Re: [OMPI users] Mimicking timeout for MPI_Wait";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  8 05:14:14 2009" -->
<!-- isoreceived="20091208101414" -->
<!-- sent="Tue, 08 Dec 2009 10:14:09 +0000" -->
<!-- isosent="20091208101409" -->
<!-- name="Number Cruncher" -->
<!-- email="number.cruncher_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mimicking timeout for MPI_Wait" -->
<!-- id="4B1E26F1.9060602_at_ntlworld.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3936FCDD-F909-471C-A3C1-5D5D8EDD6B49_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mimicking timeout for MPI_Wait<br>
<strong>From:</strong> Number Cruncher (<em>number.cruncher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-08 05:14:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11454.php">Matthew MacManes: "[OMPI users] mpirun only works when -np &lt;4"</a>
<li><strong>Previous message:</strong> <a href="11452.php">Jeff Squyres: "Re: [OMPI users] OFED-1.5rc1 with OpenMPI and IB"</a>
<li><strong>In reply to:</strong> <a href="11451.php">George Bosilca: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11497.php">Ashley Pittman: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<li><strong>Reply:</strong> <a href="11497.php">Ashley Pittman: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Whilst MPI has traditionally been run on dedicated hardware, the rise of 
<br>
cheap multicore CPUs makes it very attractive for ISVs such as ourselves 
<br>
(<a href="http://www.cambridgeflowsolutions.com/">http://www.cambridgeflowsolutions.com/</a>) to build a *single* executable 
<br>
that can be run in batch mode on a dedicated cluster *or* interactively 
<br>
on a user's workstation.
<br>
<p>Once you've taken the pain of writing a distributed-memory app (rather 
<br>
than shared-memory/multithreaded), MPI provides a transparent API to 
<br>
cover both use cases above. *However*, at the moment, the lack of 
<br>
select()-like behaviour (instead of polling) means we have to write 
<br>
custom code to avoid hogging a workstation. A runtime-selectable 
<br>
mechanism would be perfect!
<br>
<p>Is there any formal mechanism for garnering whether there is a wider 
<br>
appetite for such functionality amongst Open MPI users?
<br>
<p>George Bosilca wrote:
<br>
<span class="quotelev1">&gt; There are many papers published at this subject. Google scholar with a search for &quot;system noise&quot; will give you a starting point.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 7, 2009, at 10:13 , Douglas Guptill wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In most MPI applications if even one task is sharing its CPU with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; other processes, like users doing compiles, the whole job slows down
</span><br>
<span class="quotelev3">&gt;&gt;&gt; too much.
</span><br>
<span class="quotelev2">&gt;&gt; I have not found that to be the case.
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
<li><strong>Next message:</strong> <a href="11454.php">Matthew MacManes: "[OMPI users] mpirun only works when -np &lt;4"</a>
<li><strong>Previous message:</strong> <a href="11452.php">Jeff Squyres: "Re: [OMPI users] OFED-1.5rc1 with OpenMPI and IB"</a>
<li><strong>In reply to:</strong> <a href="11451.php">George Bosilca: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11497.php">Ashley Pittman: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<li><strong>Reply:</strong> <a href="11497.php">Ashley Pittman: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
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
