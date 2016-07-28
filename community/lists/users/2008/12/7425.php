<?
$subject_val = "Re: [OMPI users] Deadlock on large numbers of processors";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  5 13:37:57 2008" -->
<!-- isoreceived="20081205183757" -->
<!-- sent="Fri, 5 Dec 2008 13:36:59 -0500" -->
<!-- isosent="20081205183659" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Deadlock on large numbers of processors" -->
<!-- id="C093249C-BD58-49FF-8C5C-3C748D0671ED_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49396355.9010906_at_cs.utah.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Deadlock on large numbers of processors<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-05 13:36:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7426.php">Justin: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>Previous message:</strong> <a href="7424.php">Scott Atchley: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>In reply to:</strong> <a href="7415.php">Justin: "[OMPI users] Deadlock on large numbers of processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7426.php">Justin: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>Reply:</strong> <a href="7426.php">Justin: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When ever this happens we found the code to have a deadlock.  users  
<br>
never saw it until they cross the eager-&gt;roundevous threshold.
<br>
<p>Yes you can disable shared memory with:
<br>
<p>mpirun --mca btl ^sm
<br>
<p>Or you can try increasing the eager limit.
<br>
<p>ompi_info --param btl sm
<br>
<p>MCA btl: parameter &quot;btl_sm_eager_limit&quot; (current value:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;4096&quot;)
<br>
<p>You can modify this limit at run time,  I think (can't test it right  
<br>
now) it is just:
<br>
<p>mpirun --mca btl_sm_eager_limit 40960
<br>
<p>I think you can also in tweaking these values use env Vars in place  
<br>
of putting it all in the mpirun line:
<br>
<p>export OMPI_MCA_btl_sm_eager_limit=40960
<br>
<p>See:
<br>
<a href="http://www.open-mpi.org/faq/?category=tuning">http://www.open-mpi.org/faq/?category=tuning</a>
<br>
<p><p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Dec 5, 2008, at 12:22 PM, Justin wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are currently using OpenMPI 1.3 on Ranger for large processor  
</span><br>
<span class="quotelev1">&gt; jobs (8K+).  Our code appears to be occasionally deadlocking at  
</span><br>
<span class="quotelev1">&gt; random within point to point communication (see stacktrace below).   
</span><br>
<span class="quotelev1">&gt; This code has been tested on many different MPI versions and as far  
</span><br>
<span class="quotelev1">&gt; as we know it does not contain a deadlock.  However, in the past we  
</span><br>
<span class="quotelev1">&gt; have ran into problems with shared memory optimizations within MPI  
</span><br>
<span class="quotelev1">&gt; causing deadlocks.  We can usually avoid these by setting a few  
</span><br>
<span class="quotelev1">&gt; environment variables to either increase the size of shared memory  
</span><br>
<span class="quotelev1">&gt; buffers or disable shared memory optimizations all together.   Does  
</span><br>
<span class="quotelev1">&gt; OpenMPI have any known deadlocks that might be causing our  
</span><br>
<span class="quotelev1">&gt; deadlocks?  If are there any work arounds?  Also how do we disable  
</span><br>
<span class="quotelev1">&gt; shared memory within OpenMPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is an example of where processors are hanging:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #0  0x00002b2df3522683 in mca_btl_sm_component_progress () from / 
</span><br>
<span class="quotelev1">&gt; opt/apps/intel10_1/openmpi/1.3/lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev1">&gt; #1  0x00002b2df2cb46bf in mca_bml_r2_progress () from /opt/apps/ 
</span><br>
<span class="quotelev1">&gt; intel10_1/openmpi/1.3/lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev1">&gt; #2  0x00002b2df0032ea4 in opal_progress () from /opt/apps/intel10_1/ 
</span><br>
<span class="quotelev1">&gt; openmpi/1.3/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #3  0x00002b2ded0d7622 in ompi_request_default_wait_some () from / 
</span><br>
<span class="quotelev1">&gt; opt/apps/intel10_1/openmpi/1.3//lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #4  0x00002b2ded109e34 in PMPI_Waitsome () from /opt/apps/intel10_1/ 
</span><br>
<span class="quotelev1">&gt; openmpi/1.3//lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Justin
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7426.php">Justin: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>Previous message:</strong> <a href="7424.php">Scott Atchley: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>In reply to:</strong> <a href="7415.php">Justin: "[OMPI users] Deadlock on large numbers of processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7426.php">Justin: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>Reply:</strong> <a href="7426.php">Justin: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
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
