<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 22 11:42:54 2007" -->
<!-- isoreceived="20070322154254" -->
<!-- sent="Thu, 22 Mar 2007 10:30:59 -0400" -->
<!-- isosent="20070322143059" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fault Tolerance" -->
<!-- id="9923C0ED-5941-4E9C-80A7-A505346BBAD9_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="114E4367-4D14-4332-BF38-AE6B79CDEF5E_at_virginia.edu" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-22 10:30:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2879.php">tim gunter: "Re: [OMPI users] deadlock on barrier"</a>
<li><strong>Previous message:</strong> <a href="2877.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>In reply to:</strong> <a href="2861.php">Thomas Spraggins: "Re: [OMPI users] Fault Tolerance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2862.php">George Bosilca: "Re: [OMPI users] Fault Tolerance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
LAM/MPI was able to checkpoint/restart an entire MPI job as you  
<br>
mention. Open MPI is now able to checkpoint/restart as well. In the  
<br>
past week I added to the Open MPI trunk a LAM/MPI-like checkpoint/ 
<br>
restart implementation. In Open MPI we revisited many of the design  
<br>
decisions from the LAM/MPI development and improved on them quite a  
<br>
bit. At the moment there is no documentation on how to use it (egg on  
<br>
my face actually). I'm working on developing the documentation, and I  
<br>
will send a note to the users list once it is available.
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On Mar 21, 2007, at 1:18 PM, Thomas Spraggins wrote:
<br>
<p><span class="quotelev1">&gt; To migrate processes, you need to be able to checkpoint them.  I
</span><br>
<span class="quotelev1">&gt; believe that LAM-MPI is the only MPI implementation that allows this,
</span><br>
<span class="quotelev1">&gt; although I have never used LAM-MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good luck.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tom Spraggins
</span><br>
<span class="quotelev1">&gt; tas_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 21, 2007, at 1:09 PM, Mohammad Huwaidi wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello folks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to write some fault-tolerance systems with the
</span><br>
<span class="quotelev2">&gt;&gt; following criteria:
</span><br>
<span class="quotelev2">&gt;&gt; 1) Recover any software/hardware crashes
</span><br>
<span class="quotelev2">&gt;&gt; 2) Dynamically Shrink and grow.
</span><br>
<span class="quotelev2">&gt;&gt; 3) Migrate processes among machines.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does anyone has examples of code? What MPI platform is recommended
</span><br>
<span class="quotelev2">&gt;&gt; to accomplish such requirements?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am using three MPI platforms and each has it own issues:
</span><br>
<span class="quotelev2">&gt;&gt; 1) MPICH2 - good multi-threading support, but bad fault-tolerance
</span><br>
<span class="quotelev2">&gt;&gt; mechanisms.
</span><br>
<span class="quotelev2">&gt;&gt; 2) OpenMPI - Does not support multi-threading properly and cannot
</span><br>
<span class="quotelev2">&gt;&gt; have it trap exceptions yet.
</span><br>
<span class="quotelev2">&gt;&gt; 3) FT-MPI - Old and does not support multi-threading at all.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any suggestions?
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Mohammad Huwaidi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We can't resolve problems by using the same kind of thinking we used
</span><br>
<span class="quotelev2">&gt;&gt; when we created them.
</span><br>
<span class="quotelev2">&gt;&gt;                                                 --Albert Einstein
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mohammad.vcf&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><pre>
----
Josh Hursey
jjhursey_at_[hidden]
<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2879.php">tim gunter: "Re: [OMPI users] deadlock on barrier"</a>
<li><strong>Previous message:</strong> <a href="2877.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>In reply to:</strong> <a href="2861.php">Thomas Spraggins: "Re: [OMPI users] Fault Tolerance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2862.php">George Bosilca: "Re: [OMPI users] Fault Tolerance"</a>
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
