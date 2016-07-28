<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 11 15:31:54 2006" -->
<!-- isoreceived="20060411193154" -->
<!-- sent="Tue, 11 Apr 2006 13:31:51 -0600" -->
<!-- isosent="20060411193151" -->
<!-- name="Tim S. Woodall" -->
<!-- email="twoodall_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform" -->
<!-- id="443C0427.2010301_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="443C0259.1020602_at_lanl.gov" -->
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
<strong>From:</strong> Tim S. Woodall (<em>twoodall_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-11 15:31:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1022.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>Previous message:</strong> <a href="1020.php">Ralph Castain: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>In reply to:</strong> <a href="1020.php">Ralph Castain: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1022.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph/all,
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Unfortunately, that's all that is available at the moment. Future 
</span><br>
<span class="quotelev1">&gt; releases (post 1.1) may get around this problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The issue is that the bproc launcher actually does a binary memory image 
</span><br>
<span class="quotelev1">&gt; of the process, then replicates that across all the nodes. This is how 
</span><br>
<span class="quotelev1">&gt; we were told to implement it originally by the BProc folks. However, 
</span><br>
<span class="quotelev1">&gt; that means that shared libraries have problems, for obvious reasons.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have to reimplement the bproc launcher using a different approach - 
</span><br>
<span class="quotelev1">&gt; will take a little time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>The current launcher does work w/ shared libraries, if they are available
<br>
on the backend nodes. So, it's more convienent if they are linked statically,
<br>
but not a requirement.
<br>
<p>Tim
<br>
<p><p><span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; David Gunter wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;Unfortunately static-only will create binaries that will overwhelm  
</span><br>
<span class="quotelev2">&gt;&gt;our machines.  This is not a realistic option.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;-david
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;On Apr 11, 2006, at 1:04 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Also, remember that you must configure for static operation for  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;bproc - use the configuration options &quot;--enable-static --disable- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;shared&quot;. Our current bproc launcher *really* dislikes shared  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;libraries.... ;-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="1022.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>Previous message:</strong> <a href="1020.php">Ralph Castain: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>In reply to:</strong> <a href="1020.php">Ralph Castain: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1022.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
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
