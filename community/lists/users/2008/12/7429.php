<?
$subject_val = "Re: [OMPI users] Deadlock on large numbers of processors";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  5 16:24:38 2008" -->
<!-- isoreceived="20081205212438" -->
<!-- sent="Fri, 05 Dec 2008 14:24:23 -0700" -->
<!-- isosent="20081205212423" -->
<!-- name="Justin" -->
<!-- email="luitjens_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Deadlock on large numbers of processors" -->
<!-- id="49399C07.9030709_at_cs.utah.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="76220CEA-6FD8-4FCB-888E-F8EA1EBB8CE4_at_umich.edu" -->
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
<strong>Date:</strong> 2008-12-05 16:24:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7430.php">George Bosilca: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Previous message:</strong> <a href="7428.php">Brock Palen: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>In reply to:</strong> <a href="7428.php">Brock Palen: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7474.php">Lenny Verkhovsky: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>Reply:</strong> <a href="7474.php">Lenny Verkhovsky: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The reason i'd like to disable these eager buffers is to help detect the 
<br>
deadlock better.  I would not run with this for a normal run but it 
<br>
would be useful for debugging.  If the deadlock is indeed due to our 
<br>
code then disabling any shared buffers or eager sends would make that 
<br>
deadlock reproduceable.    In addition we might be able to lower the 
<br>
number of processors down.  Right now determining which processor is 
<br>
deadlocks when we are using 8K cores and each processor has hundreds of 
<br>
messages sent out would be quite difficult.
<br>
<p>Thanks for your suggestions,
<br>
Justin
<br>
Brock Palen wrote:
<br>
<span class="quotelev1">&gt; OpenMPI has differnt eager limits for all the network types, on your 
</span><br>
<span class="quotelev1">&gt; system run:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_info --param btl all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and look for the eager_limits
</span><br>
<span class="quotelev1">&gt; You can set these values to 0 using the syntax I showed you before. 
</span><br>
<span class="quotelev1">&gt; That would disable eager messages.
</span><br>
<span class="quotelev1">&gt; There might be a better way to disable eager messages.
</span><br>
<span class="quotelev1">&gt; Not sure why you would want to disable them, they are there for 
</span><br>
<span class="quotelev1">&gt; performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe you would still see a deadlock if every message was below the 
</span><br>
<span class="quotelev1">&gt; threshold. I think there is a limit of the number of eager messages a 
</span><br>
<span class="quotelev1">&gt; receving cpus will accept. Not sure about that though.  I still kind 
</span><br>
<span class="quotelev1">&gt; of doubt it though.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Try tweaking your buffer sizes,  make the openib  btl eager limit the 
</span><br>
<span class="quotelev1">&gt; same as shared memory. and see if you get locks up between hosts and 
</span><br>
<span class="quotelev1">&gt; not just shared memory.
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
<span class="quotelev1">&gt; On Dec 5, 2008, at 2:10 PM, Justin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for this info.  I should add that our code tends to post a 
</span><br>
<span class="quotelev2">&gt;&gt; lot of sends prior to the other side posting receives.  This causes a 
</span><br>
<span class="quotelev2">&gt;&gt; lot of unexpected messages to exist.  Our code explicitly matches up 
</span><br>
<span class="quotelev2">&gt;&gt; all tags and processors (that is we do not use MPI wild cards).  If 
</span><br>
<span class="quotelev2">&gt;&gt; we had a dead lock I would think we would see it regardless of 
</span><br>
<span class="quotelev2">&gt;&gt; weather or not we cross the roundevous threshold.  I guess one way to 
</span><br>
<span class="quotelev2">&gt;&gt; test this would be to to set this threshold to 0.  If it then dead 
</span><br>
<span class="quotelev2">&gt;&gt; locks we would likely be able to track down the deadlock.  Are there 
</span><br>
<span class="quotelev2">&gt;&gt; any other parameters we can send mpi that will turn off buffering?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Justin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When ever this happens we found the code to have a deadlock.  users 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; never saw it until they cross the eager-&gt;roundevous threshold.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes you can disable shared memory with:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --mca btl ^sm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Or you can try increasing the eager limit.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_info --param btl sm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MCA btl: parameter &quot;btl_sm_eager_limit&quot; (current value:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                           &quot;4096&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can modify this limit at run time,  I think (can't test it right 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; now) it is just:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --mca btl_sm_eager_limit 40960
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think you can also in tweaking these values use env Vars in place 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of putting it all in the mpirun line:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export OMPI_MCA_btl_sm_eager_limit=40960
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; See:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=tuning">http://www.open-mpi.org/faq/?category=tuning</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brock Palen
</span><br>
<span class="quotelev3">&gt;&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Center for Advanced Computing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 5, 2008, at 12:22 PM, Justin wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We are currently using OpenMPI 1.3 on Ranger for large processor 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jobs (8K+).  Our code appears to be occasionally deadlocking at 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; random within point to point communication (see stacktrace below).  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This code has been tested on many different MPI versions and as far 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; as we know it does not contain a deadlock.  However, in the past we 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have ran into problems with shared memory optimizations within MPI 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; causing deadlocks.  We can usually avoid these by setting a few 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; environment variables to either increase the size of shared memory 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; buffers or disable shared memory optimizations all together.   Does 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OpenMPI have any known deadlocks that might be causing our 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; deadlocks?  If are there any work arounds?  Also how do we disable 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shared memory within OpenMPI?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here is an example of where processors are hanging:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #0  0x00002b2df3522683 in mca_btl_sm_component_progress () from 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /opt/apps/intel10_1/openmpi/1.3/lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #1  0x00002b2df2cb46bf in mca_bml_r2_progress () from 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /opt/apps/intel10_1/openmpi/1.3/lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #2  0x00002b2df0032ea4 in opal_progress () from 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /opt/apps/intel10_1/openmpi/1.3/lib/libopen-pal.so.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #3  0x00002b2ded0d7622 in ompi_request_default_wait_some () from 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /opt/apps/intel10_1/openmpi/1.3//lib/libmpi.so.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #4  0x00002b2ded109e34 in PMPI_Waitsome () from 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /opt/apps/intel10_1/openmpi/1.3//lib/libmpi.so.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Justin
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="7430.php">George Bosilca: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Previous message:</strong> <a href="7428.php">Brock Palen: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>In reply to:</strong> <a href="7428.php">Brock Palen: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7474.php">Lenny Verkhovsky: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>Reply:</strong> <a href="7474.php">Lenny Verkhovsky: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
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
