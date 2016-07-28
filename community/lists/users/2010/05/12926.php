<?
$subject_val = "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  6 12:46:42 2010" -->
<!-- isoreceived="20100506164642" -->
<!-- sent="Thu, 06 May 2010 12:46:33 -0400" -->
<!-- isosent="20100506164633" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?" -->
<!-- id="4BE2F269.1090508_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BE2D427.4090708_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-06 12:46:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12927.php">Douglas Guptill: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12925.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12923.php">Eugene Loh: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12928.php">Eugene Loh: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12928.php">Eugene Loh: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Eugene
<br>
<p>Thank you for answering one of my original questions.
<br>
<p>However, there seems to be a problem with the syntax.
<br>
Is it really &quot;-mca btl btl_sm_num_fifos=some_number&quot;?
<br>
(FYI, I am using Open MPI 4.1.2, a tarball from two days ago.)
<br>
<p>When I grep any component starting with btl_sm I get nothing:
<br>
<p>ompi_info --all | grep btl_sm
<br>
(No output)
<br>
<p><p>When I try to run with it, it fails telling me it cannot
<br>
find the btl_sm_num_fifos component:
<br>
<p><p>mpiexec -mca btl sm,self -mca btl btl_sm_num_fifos=4 -np 4 ./a.out
<br>
--------------------------------------------------------------------------
<br>
A requested component was not found, or was unable to be opened.  This
<br>
means that this component is either not installed or is unable to be
<br>
used on your system (e.g., sometimes this means that shared libraries
<br>
that the component requires are unable to be found/loaded).  Note that
<br>
Open MPI stopped checking at the first component that it did not find.
<br>
<p>Host:      spinoza.ldeo.columbia.edu
<br>
Framework: btl
<br>
Component: btl_sm_num_fifos=4
<br>
--------------------------------------------------------------------------
<br>
<p>Thank you,
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p><p>Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yo Gus
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just saw a ticket go by reminding us about continuing hang problems on 
</span><br>
<span class="quotelev2">&gt;&gt; shared memory when building with gcc 4.4.x - any  chance you are in 
</span><br>
<span class="quotelev2">&gt;&gt; that category? You might have said something earlier in this thread....
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Going back to the original e-mail in this thread:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Use -mca btl -mca btl_sm_num_fifos=some_number ? (Which number?) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another experiment to try would be to keep sm on, but try changing 
</span><br>
<span class="quotelev1">&gt; btl_sm_num_fifos as above.  The number to use would be the number of 
</span><br>
<span class="quotelev1">&gt; processes on the node.  E.g., if all processes are running on the same 
</span><br>
<span class="quotelev1">&gt; box, just use the same number as processes in the job.  The results 
</span><br>
<span class="quotelev1">&gt; might help narrow down the possibilities here.
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
<li><strong>Next message:</strong> <a href="12927.php">Douglas Guptill: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12925.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12923.php">Eugene Loh: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12928.php">Eugene Loh: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12928.php">Eugene Loh: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
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
