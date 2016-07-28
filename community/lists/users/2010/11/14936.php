<?
$subject_val = "Re: [OMPI users] Question about collective messages implementation";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 29 17:30:45 2010" -->
<!-- isoreceived="20101129223045" -->
<!-- sent="Mon, 29 Nov 2010 17:30:39 -0500" -->
<!-- isosent="20101129223039" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about collective messages implementation" -->
<!-- id="6BD3A6B4-F06A-46CE-B2E3-0B41CDD30073_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1ACCC1AC-61E6-474B-9D95-EBD4B1C87392_at_pittman.co.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about collective messages implementation<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-29 17:30:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14937.php">Nehemiah Dacres: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
<li><strong>Previous message:</strong> <a href="14935.php">George Bosilca: "Re: [OMPI users] Solaris10/SPARC: atomic_cmpset_64 broken"</a>
<li><strong>In reply to:</strong> <a href="14678.php">Ashley Pittman: "Re: [OMPI users] Question about collective messages implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14681.php">Jeff Squyres: "Re: [OMPI users] Question about collective messages implementation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With the increasing gap between network bandwidth and processor computing power, the current trend in linear algebra is toward communication avoiding algorithms (aka. replacing communications with redundant computations). You're taking the exact opposite path, I wonder if you can get any benefit ...
<br>
<p>Moreover, your proposed approach only makes sense if you expect the LAPACK operation to be faster if the other cores are silent (in order to use them for the computation itself). This is very tricky to do for a single LAPACK call, as usually OMP_NUM_THREADS &amp; co. are affecting the entire application. I remember reading somewhere that MKL provide a function to change the number of threads at runtime, maybe you should look in that direction.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><p>On Nov 2, 2010, at 06:33 , Ashley Pittman wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2 Nov 2010, at 10:21, Jerome Reybert wrote:
</span><br>
<span class="quotelev2">&gt;&gt; - in my implementation, is MPI_Bcast aware that it should use shared memory
</span><br>
<span class="quotelev2">&gt;&gt; memory communication? Is data go through the network? It seems it is the case,
</span><br>
<span class="quotelev2">&gt;&gt; considering the first results.
</span><br>
<span class="quotelev2">&gt;&gt; - is there any other methods to group task by machine, OpenMPI being aware
</span><br>
<span class="quotelev2">&gt;&gt; that it is grouping task by shared memory?
</span><br>
<span class="quotelev2">&gt;&gt; - is it possible to assign a policy (in this case, a shared memory policy) to
</span><br>
<span class="quotelev2">&gt;&gt; a Bcast or a Barrier call?
</span><br>
<span class="quotelev2">&gt;&gt; - do you have any better idea for this problem? :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Interesting stuff, two points quickly spring to mind from the above:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Comm_split() is an expensive operation, sure the manual says it's low cost but it shouldn't be used inside any critical loops so be sure you are doing the Comm_Split() at startup and then re-using it as and when needed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any blocking call into OpenMPI will poll consuming CPU cycles until the call is complete, you can mitigate against this by telling OpenMPI to aggressively call yield whilst polling which would mean that your parallel Lapack function could get the CPU resources it required.  Have a look at this FAQ entry for details of the option and what you can expect it to do.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#force-aggressive-degraded">http://www.open-mpi.org/faq/?category=running#force-aggressive-degraded</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley Pittman, Bath, UK.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Padb - A parallel job inspection tool for cluster computing
</span><br>
<span class="quotelev1">&gt; <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
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
<li><strong>Next message:</strong> <a href="14937.php">Nehemiah Dacres: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
<li><strong>Previous message:</strong> <a href="14935.php">George Bosilca: "Re: [OMPI users] Solaris10/SPARC: atomic_cmpset_64 broken"</a>
<li><strong>In reply to:</strong> <a href="14678.php">Ashley Pittman: "Re: [OMPI users] Question about collective messages implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14681.php">Jeff Squyres: "Re: [OMPI users] Question about collective messages implementation"</a>
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
