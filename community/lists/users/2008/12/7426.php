<?
$subject_val = "Re: [OMPI users] Deadlock on large numbers of processors";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  5 14:10:40 2008" -->
<!-- isoreceived="20081205191040" -->
<!-- sent="Fri, 05 Dec 2008 12:10:22 -0700" -->
<!-- isosent="20081205191022" -->
<!-- name="Justin" -->
<!-- email="luitjens_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Deadlock on large numbers of processors" -->
<!-- id="49397C9E.2060903_at_cs.utah.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C093249C-BD58-49FF-8C5C-3C748D0671ED_at_umich.edu" -->
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
<strong>From:</strong> Justin (<em>luitjens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-05 14:10:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7427.php">George Bosilca: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Previous message:</strong> <a href="7425.php">Brock Palen: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>In reply to:</strong> <a href="7425.php">Brock Palen: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7428.php">Brock Palen: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>Reply:</strong> <a href="7428.php">Brock Palen: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you for this info.  I should add that our code tends to post a lot 
<br>
of sends prior to the other side posting receives.  This causes a lot of 
<br>
unexpected messages to exist.  Our code explicitly matches up all tags 
<br>
and processors (that is we do not use MPI wild cards).  If we had a dead 
<br>
lock I would think we would see it regardless of weather or not we cross 
<br>
the roundevous threshold.  I guess one way to test this would be to to 
<br>
set this threshold to 0.  If it then dead locks we would likely be able 
<br>
to track down the deadlock.  Are there any other parameters we can send 
<br>
mpi that will turn off buffering?
<br>
<p>Thanks,
<br>
Justin
<br>
<p>Brock Palen wrote:
<br>
<span class="quotelev1">&gt; When ever this happens we found the code to have a deadlock.  users 
</span><br>
<span class="quotelev1">&gt; never saw it until they cross the eager-&gt;roundevous threshold.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes you can disable shared memory with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl ^sm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or you can try increasing the eager limit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_info --param btl sm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl_sm_eager_limit&quot; (current value:
</span><br>
<span class="quotelev1">&gt;                           &quot;4096&quot;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can modify this limit at run time,  I think (can't test it right 
</span><br>
<span class="quotelev1">&gt; now) it is just:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl_sm_eager_limit 40960
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think you can also in tweaking these values use env Vars in place of 
</span><br>
<span class="quotelev1">&gt; putting it all in the mpirun line:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export OMPI_MCA_btl_sm_eager_limit=40960
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=tuning">http://www.open-mpi.org/faq/?category=tuning</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 5, 2008, at 12:22 PM, Justin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We are currently using OpenMPI 1.3 on Ranger for large processor jobs 
</span><br>
<span class="quotelev2">&gt;&gt; (8K+).  Our code appears to be occasionally deadlocking at random 
</span><br>
<span class="quotelev2">&gt;&gt; within point to point communication (see stacktrace below).  This 
</span><br>
<span class="quotelev2">&gt;&gt; code has been tested on many different MPI versions and as far as we 
</span><br>
<span class="quotelev2">&gt;&gt; know it does not contain a deadlock.  However, in the past we have 
</span><br>
<span class="quotelev2">&gt;&gt; ran into problems with shared memory optimizations within MPI causing 
</span><br>
<span class="quotelev2">&gt;&gt; deadlocks.  We can usually avoid these by setting a few environment 
</span><br>
<span class="quotelev2">&gt;&gt; variables to either increase the size of shared memory buffers or 
</span><br>
<span class="quotelev2">&gt;&gt; disable shared memory optimizations all together.   Does OpenMPI have 
</span><br>
<span class="quotelev2">&gt;&gt; any known deadlocks that might be causing our deadlocks?  If are 
</span><br>
<span class="quotelev2">&gt;&gt; there any work arounds?  Also how do we disable shared memory within 
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is an example of where processors are hanging:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x00002b2df3522683 in mca_btl_sm_component_progress () from 
</span><br>
<span class="quotelev2">&gt;&gt; /opt/apps/intel10_1/openmpi/1.3/lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x00002b2df2cb46bf in mca_bml_r2_progress () from 
</span><br>
<span class="quotelev2">&gt;&gt; /opt/apps/intel10_1/openmpi/1.3/lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x00002b2df0032ea4 in opal_progress () from 
</span><br>
<span class="quotelev2">&gt;&gt; /opt/apps/intel10_1/openmpi/1.3/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x00002b2ded0d7622 in ompi_request_default_wait_some () from 
</span><br>
<span class="quotelev2">&gt;&gt; /opt/apps/intel10_1/openmpi/1.3//lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x00002b2ded109e34 in PMPI_Waitsome () from 
</span><br>
<span class="quotelev2">&gt;&gt; /opt/apps/intel10_1/openmpi/1.3//lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Justin
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="7427.php">George Bosilca: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Previous message:</strong> <a href="7425.php">Brock Palen: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>In reply to:</strong> <a href="7425.php">Brock Palen: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7428.php">Brock Palen: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>Reply:</strong> <a href="7428.php">Brock Palen: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
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
