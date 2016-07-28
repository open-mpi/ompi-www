<?
$subject_val = "Re: [OMPI users] Deadlock on large numbers of processors";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  5 15:51:27 2008" -->
<!-- isoreceived="20081205205127" -->
<!-- sent="Fri, 5 Dec 2008 15:50:29 -0500" -->
<!-- isosent="20081205205029" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Deadlock on large numbers of processors" -->
<!-- id="76220CEA-6FD8-4FCB-888E-F8EA1EBB8CE4_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49397C9E.2060903_at_cs.utah.edu" -->
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
<strong>Date:</strong> 2008-12-05 15:50:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7429.php">Justin: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>Previous message:</strong> <a href="7427.php">George Bosilca: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>In reply to:</strong> <a href="7426.php">Justin: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7429.php">Justin: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>Reply:</strong> <a href="7429.php">Justin: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OpenMPI has differnt eager limits for all the network types, on your  
<br>
system run:
<br>
<p>ompi_info --param btl all
<br>
<p>and look for the eager_limits
<br>
You can set these values to 0 using the syntax I showed you before.  
<br>
That would disable eager messages.
<br>
There might be a better way to disable eager messages.
<br>
Not sure why you would want to disable them, they are there for  
<br>
performance.
<br>
<p>Maybe you would still see a deadlock if every message was below the  
<br>
threshold. I think there is a limit of the number of eager messages a  
<br>
receving cpus will accept. Not sure about that though.  I still kind  
<br>
of doubt it though.
<br>
<p>Try tweaking your buffer sizes,  make the openib  btl eager limit the  
<br>
same as shared memory. and see if you get locks up between hosts and  
<br>
not just shared memory.
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Dec 5, 2008, at 2:10 PM, Justin wrote:
<br>
<p><span class="quotelev1">&gt; Thank you for this info.  I should add that our code tends to post  
</span><br>
<span class="quotelev1">&gt; a lot of sends prior to the other side posting receives.  This  
</span><br>
<span class="quotelev1">&gt; causes a lot of unexpected messages to exist.  Our code explicitly  
</span><br>
<span class="quotelev1">&gt; matches up all tags and processors (that is we do not use MPI wild  
</span><br>
<span class="quotelev1">&gt; cards).  If we had a dead lock I would think we would see it  
</span><br>
<span class="quotelev1">&gt; regardless of weather or not we cross the roundevous threshold.  I  
</span><br>
<span class="quotelev1">&gt; guess one way to test this would be to to set this threshold to 0.   
</span><br>
<span class="quotelev1">&gt; If it then dead locks we would likely be able to track down the  
</span><br>
<span class="quotelev1">&gt; deadlock.  Are there any other parameters we can send mpi that will  
</span><br>
<span class="quotelev1">&gt; turn off buffering?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Justin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen wrote:
</span><br>
<span class="quotelev2">&gt;&gt; When ever this happens we found the code to have a deadlock.   
</span><br>
<span class="quotelev2">&gt;&gt; users never saw it until they cross the eager-&gt;roundevous threshold.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes you can disable shared memory with:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca btl ^sm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Or you can try increasing the eager limit.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info --param btl sm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MCA btl: parameter &quot;btl_sm_eager_limit&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt;                           &quot;4096&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can modify this limit at run time,  I think (can't test it  
</span><br>
<span class="quotelev2">&gt;&gt; right now) it is just:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca btl_sm_eager_limit 40960
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think you can also in tweaking these values use env Vars in  
</span><br>
<span class="quotelev2">&gt;&gt; place of putting it all in the mpirun line:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; export OMPI_MCA_btl_sm_eager_limit=40960
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; See:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=tuning">http://www.open-mpi.org/faq/?category=tuning</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen
</span><br>
<span class="quotelev2">&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev2">&gt;&gt; Center for Advanced Computing
</span><br>
<span class="quotelev2">&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 5, 2008, at 12:22 PM, Justin wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We are currently using OpenMPI 1.3 on Ranger for large processor  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jobs (8K+).  Our code appears to be occasionally deadlocking at  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; random within point to point communication (see stacktrace  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; below).  This code has been tested on many different MPI versions  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and as far as we know it does not contain a deadlock.  However,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the past we have ran into problems with shared memory  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; optimizations within MPI causing deadlocks.  We can usually avoid  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; these by setting a few environment variables to either increase  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the size of shared memory buffers or disable shared memory  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; optimizations all together.   Does OpenMPI have any known  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; deadlocks that might be causing our deadlocks?  If are there any  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; work arounds?  Also how do we disable shared memory within OpenMPI?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is an example of where processors are hanging:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #0  0x00002b2df3522683 in mca_btl_sm_component_progress () from / 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opt/apps/intel10_1/openmpi/1.3/lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #1  0x00002b2df2cb46bf in mca_bml_r2_progress () from /opt/apps/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intel10_1/openmpi/1.3/lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #2  0x00002b2df0032ea4 in opal_progress () from /opt/apps/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intel10_1/openmpi/1.3/lib/libopen-pal.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #3  0x00002b2ded0d7622 in ompi_request_default_wait_some () from / 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opt/apps/intel10_1/openmpi/1.3//lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #4  0x00002b2ded109e34 in PMPI_Waitsome () from /opt/apps/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intel10_1/openmpi/1.3//lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Justin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7429.php">Justin: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>Previous message:</strong> <a href="7427.php">George Bosilca: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>In reply to:</strong> <a href="7426.php">Justin: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7429.php">Justin: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>Reply:</strong> <a href="7429.php">Justin: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
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
