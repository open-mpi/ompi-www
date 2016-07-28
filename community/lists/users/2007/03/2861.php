<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar 21 13:18:20 2007" -->
<!-- isoreceived="20070321171820" -->
<!-- sent="Wed, 21 Mar 2007 13:18:14 -0400" -->
<!-- isosent="20070321171814" -->
<!-- name="Thomas Spraggins" -->
<!-- email="tas_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fault Tolerance" -->
<!-- id="114E4367-4D14-4332-BF38-AE6B79CDEF5E_at_virginia.edu" -->
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
<strong>From:</strong> Thomas Spraggins (<em>tas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-21 13:18:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2862.php">George Bosilca: "Re: [OMPI users] Fault Tolerance"</a>
<li><strong>Previous message:</strong> <a href="2860.php">Mohammad Huwaidi: "[OMPI users] Fault Tolerance"</a>
<li><strong>In reply to:</strong> <a href="2860.php">Mohammad Huwaidi: "[OMPI users] Fault Tolerance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2878.php">Josh Hursey: "Re: [OMPI users] Fault Tolerance"</a>
<li><strong>Reply:</strong> <a href="2878.php">Josh Hursey: "Re: [OMPI users] Fault Tolerance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To migrate processes, you need to be able to checkpoint them.  I  
<br>
believe that LAM-MPI is the only MPI implementation that allows this,  
<br>
although I have never used LAM-MPI.
<br>
<p>Good luck.
<br>
<p>Tom Spraggins
<br>
tas_at_[hidden]
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
<li><strong>Next message:</strong> <a href="2862.php">George Bosilca: "Re: [OMPI users] Fault Tolerance"</a>
<li><strong>Previous message:</strong> <a href="2860.php">Mohammad Huwaidi: "[OMPI users] Fault Tolerance"</a>
<li><strong>In reply to:</strong> <a href="2860.php">Mohammad Huwaidi: "[OMPI users] Fault Tolerance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2878.php">Josh Hursey: "Re: [OMPI users] Fault Tolerance"</a>
<li><strong>Reply:</strong> <a href="2878.php">Josh Hursey: "Re: [OMPI users] Fault Tolerance"</a>
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
