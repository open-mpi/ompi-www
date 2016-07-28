<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar 21 14:40:01 2007" -->
<!-- isoreceived="20070321184001" -->
<!-- sent="Wed, 21 Mar 2007 14:39:47 -0400" -->
<!-- isosent="20070321183947" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fault Tolerance" -->
<!-- id="BA29EA15-8D34-403C-B12F-86E278961330_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="460166BF.2030406_at_kelman.com" -->
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
<strong>Date:</strong> 2007-03-21 14:39:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2863.php">Heywood, Todd: "[OMPI users] MPI processes  swapping out"</a>
<li><strong>Previous message:</strong> <a href="2861.php">Thomas Spraggins: "Re: [OMPI users] Fault Tolerance"</a>
<li><strong>In reply to:</strong> <a href="2860.php">Mohammad Huwaidi: "[OMPI users] Fault Tolerance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2863.php">Heywood, Todd: "[OMPI users] MPI processes  swapping out"</a>
<li><strong>Reply:</strong> <a href="2863.php">Heywood, Todd: "[OMPI users] MPI processes  swapping out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What you're looking for is called PVM. Moreover, your requirements  
<br>
are a mixed bags of FT features that comes from completely different  
<br>
worlds.
<br>
<p>1) Recover any software/hardware crashes ? What kind of recovery  
<br>
you're looking for ? What is your definition of recovering ? If what  
<br>
you want is to be able to continue to send or receive messages once  
<br>
the fault was detected then FT-MPI is the only MPI implementation  
<br>
which allow you to consistently continue your execution. To be more  
<br>
precise the MPI standard do not define the behavior of MPI library  
<br>
once you get back from the error handler which get called once a  
<br>
fault has been detected. As far as I know, the behavior is dependent  
<br>
on the MPI library, and with the exception of FT-MPI no other library  
<br>
have a consistent state after returning from the error handler.
<br>
<p>2) Dynamically shrink and grow ? Based on what ? Look like MPI-2  
<br>
dynamic processes except you still have the original MPI_COMM_WORLD  
<br>
who cannot be shrinked. If what you want is to be able to shrink your  
<br>
MPI_COMM_WORLD when a fault occur, then again the only solution is FT- 
<br>
MPI.
<br>
<p>3) Migrate processes among machines ? What processes ? When and how ?  
<br>
LAM allow you to checkpoint/restart the entire job, and it should be  
<br>
done before the fault occur. MPICH-V allow transparent non- 
<br>
coordinated checkpointing (i.e. you don't get any notification that a  
<br>
fault was detected), but you will pay the cost of message logging. FT- 
<br>
MPI modifies the runtime environment when a fault occurs, but does  
<br>
not do migration (if migration means moving the application image  
<br>
with all the data into another machine).
<br>
<p>Unfortunately, there is no miracle MPI which is able to do all the  
<br>
stuff you're looking for. You need multi-threading and fault  
<br>
tolerance ? I would use FT-MPI with a lock around all MPI functions,  
<br>
something close to the serialized thread mode as defined by the MPI  
<br>
standard.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 21, 2007, at 1:09 PM, Mohammad Huwaidi wrote:
<br>
<p><span class="quotelev1">&gt; Hello folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to write some fault-tolerance systems with the  
</span><br>
<span class="quotelev1">&gt; following criteria:
</span><br>
<span class="quotelev1">&gt; 1) Recover any software/hardware crashes
</span><br>
<span class="quotelev1">&gt; 2) Dynamically Shrink and grow.
</span><br>
<span class="quotelev1">&gt; 3) Migrate processes among machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone has examples of code? What MPI platform is recommended  
</span><br>
<span class="quotelev1">&gt; to accomplish such requirements?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using three MPI platforms and each has it own issues:
</span><br>
<span class="quotelev1">&gt; 1) MPICH2 - good multi-threading support, but bad fault-tolerance  
</span><br>
<span class="quotelev1">&gt; mechanisms.
</span><br>
<span class="quotelev1">&gt; 2) OpenMPI - Does not support multi-threading properly and cannot  
</span><br>
<span class="quotelev1">&gt; have it trap exceptions yet.
</span><br>
<span class="quotelev1">&gt; 3) FT-MPI - Old and does not support multi-threading at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestions?
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Mohammad Huwaidi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We can't resolve problems by using the same kind of thinking we used
</span><br>
<span class="quotelev1">&gt; when we created them.
</span><br>
<span class="quotelev1">&gt;                                                 --Albert Einstein
</span><br>
<span class="quotelev1">&gt; &lt;mohammad.vcf&gt;
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
<li><strong>Next message:</strong> <a href="2863.php">Heywood, Todd: "[OMPI users] MPI processes  swapping out"</a>
<li><strong>Previous message:</strong> <a href="2861.php">Thomas Spraggins: "Re: [OMPI users] Fault Tolerance"</a>
<li><strong>In reply to:</strong> <a href="2860.php">Mohammad Huwaidi: "[OMPI users] Fault Tolerance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2863.php">Heywood, Todd: "[OMPI users] MPI processes  swapping out"</a>
<li><strong>Reply:</strong> <a href="2863.php">Heywood, Todd: "[OMPI users] MPI processes  swapping out"</a>
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
