<?
$subject_val = "Re: [OMPI users] Deadlock on large numbers of processors";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  9 10:29:13 2008" -->
<!-- isoreceived="20081209152913" -->
<!-- sent="Tue, 09 Dec 2008 08:28:43 -0700" -->
<!-- isosent="20081209152843" -->
<!-- name="Justin" -->
<!-- email="luitjens_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Deadlock on large numbers of processors" -->
<!-- id="493E8EAB.4010600_at_cs.utah.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="493E870D.5080707_at_Sun.COM" -->
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
<strong>Date:</strong> 2008-12-09 10:28:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7482.php">Raymond Wan: "Re: [OMPI users] Only the root can run mpirun? other users how to do ?"</a>
<li><strong>Previous message:</strong> <a href="7480.php">Rolf Vandevaart: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>In reply to:</strong> <a href="7480.php">Rolf Vandevaart: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7508.php">Jeff Squyres: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>Reply:</strong> <a href="7508.php">Jeff Squyres: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have tried disabling the shared memory by running with the following 
<br>
parameters to mpirun
<br>
<p>--mca btl openib,self --mca btl_openib_ib_timeout 23 --mca 
<br>
btl_openib_use_srq 1 --mca btl_openib_use_rd_max 2048
<br>
<p>Unfortunately this did not get rid of any hangs and has seemed to make 
<br>
them more common.  I have now been able to reproduce the deadlock at 32 
<br>
processors.  I am now working with an mpi deadlock detection research 
<br>
code which will hopefully be able to tell me if there are any deadlocks 
<br>
in our code.  At the same time if any of you have any suggestions of 
<br>
parameters to openmpi that might alleviate these deadlocks I would be 
<br>
grateful.
<br>
<p><p>Thanks,
<br>
Justin
<br>
<p><p><p><p>Rolf Vandevaart wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The current version of Open MPI installed on ranger is 1.3a1r19685 
</span><br>
<span class="quotelev1">&gt; which is from early October.  This version has a fix for ticket 
</span><br>
<span class="quotelev1">&gt; #1378.  Ticket #1449 is not an issue is this case because each node 
</span><br>
<span class="quotelev1">&gt; has 16 processors and #1449 is for larger SMPs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, I am wondering if this is because of ticket 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/1468">https://svn.open-mpi.org/trac/ompi/ticket/1468</a> which was not yet fixed 
</span><br>
<span class="quotelev1">&gt; in the version running on ranger.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As was suggested earlier, running without the sm btl would be a clue 
</span><br>
<span class="quotelev1">&gt; if this is the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl ^sm a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another way to potentially work around the issue is to increase the 
</span><br>
<span class="quotelev1">&gt; size of the shared memory backing file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --mca 1073741824 -mca mpool_sm_max_size 1073741824 a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We will also work with TACC to get an upgraded version of Open MPI 1.3 
</span><br>
<span class="quotelev1">&gt; on there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let us know what you find.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 12/09/08 08:05, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev2">&gt;&gt; also see <a href="https://svn.open-mpi.org/trac/ompi/ticket/1449">https://svn.open-mpi.org/trac/ompi/ticket/1449</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 12/9/08, *Lenny Verkhovsky* &lt;lenny.verkhovsky_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:lenny.verkhovsky_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     maybe it's related to 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/1378">https://svn.open-mpi.org/trac/ompi/ticket/1378</a>  ??
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On 12/5/08, *Justin* &lt;luitjens_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;mailto:luitjens_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         The reason i'd like to disable these eager buffers is to help
</span><br>
<span class="quotelev2">&gt;&gt;         detect the deadlock better.  I would not run with this for a
</span><br>
<span class="quotelev2">&gt;&gt;         normal run but it would be useful for debugging.  If the
</span><br>
<span class="quotelev2">&gt;&gt;         deadlock is indeed due to our code then disabling any shared
</span><br>
<span class="quotelev2">&gt;&gt;         buffers or eager sends would make that deadlock 
</span><br>
<span class="quotelev2">&gt;&gt; reproduceable.           In addition we might be able to lower the 
</span><br>
<span class="quotelev2">&gt;&gt; number of processors
</span><br>
<span class="quotelev2">&gt;&gt;         down.  Right now determining which processor is deadlocks when
</span><br>
<span class="quotelev2">&gt;&gt;         we are using 8K cores and each processor has hundreds of
</span><br>
<span class="quotelev2">&gt;&gt;         messages sent out would be quite difficult.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Thanks for your suggestions,
</span><br>
<span class="quotelev2">&gt;&gt;         Justin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Brock Palen wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             OpenMPI has differnt eager limits for all the network types,
</span><br>
<span class="quotelev2">&gt;&gt;             on your system run:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             ompi_info --param btl all
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             and look for the eager_limits
</span><br>
<span class="quotelev2">&gt;&gt;             You can set these values to 0 using the syntax I showed you
</span><br>
<span class="quotelev2">&gt;&gt;             before. That would disable eager messages.
</span><br>
<span class="quotelev2">&gt;&gt;             There might be a better way to disable eager messages.
</span><br>
<span class="quotelev2">&gt;&gt;             Not sure why you would want to disable them, they are there
</span><br>
<span class="quotelev2">&gt;&gt;             for performance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Maybe you would still see a deadlock if every message was
</span><br>
<span class="quotelev2">&gt;&gt;             below the threshold. I think there is a limit of the number
</span><br>
<span class="quotelev2">&gt;&gt;             of eager messages a receving cpus will accept. Not sure
</span><br>
<span class="quotelev2">&gt;&gt;             about that though.  I still kind of doubt it though.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Try tweaking your buffer sizes,  make the openib  btl eager
</span><br>
<span class="quotelev2">&gt;&gt;             limit the same as shared memory. and see if you get locks up
</span><br>
<span class="quotelev2">&gt;&gt;             between hosts and not just shared memory.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Brock Palen
</span><br>
<span class="quotelev2">&gt;&gt;             www.umich.edu/~brockp &lt;<a href="http://www.umich.edu/~brockp">http://www.umich.edu/~brockp</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Center for Advanced Computing
</span><br>
<span class="quotelev2">&gt;&gt;             brockp_at_[hidden] &lt;mailto:brockp_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             (734)936-1985
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             On Dec 5, 2008, at 2:10 PM, Justin wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 Thank you for this info.  I should add that our code
</span><br>
<span class="quotelev2">&gt;&gt;                 tends to post a lot of sends prior to the other side
</span><br>
<span class="quotelev2">&gt;&gt;                 posting receives.  This causes a lot of unexpected
</span><br>
<span class="quotelev2">&gt;&gt;                 messages to exist.  Our code explicitly matches up all
</span><br>
<span class="quotelev2">&gt;&gt;                 tags and processors (that is we do not use MPI wild
</span><br>
<span class="quotelev2">&gt;&gt;                 cards).  If we had a dead lock I would think we would
</span><br>
<span class="quotelev2">&gt;&gt;                 see it regardless of weather or not we cross the
</span><br>
<span class="quotelev2">&gt;&gt;                 roundevous threshold.  I guess one way to test this
</span><br>
<span class="quotelev2">&gt;&gt;                 would be to to set this threshold to 0.  If it then dead
</span><br>
<span class="quotelev2">&gt;&gt;                 locks we would likely be able to track down the
</span><br>
<span class="quotelev2">&gt;&gt;                 deadlock.  Are there any other parameters we can send
</span><br>
<span class="quotelev2">&gt;&gt;                 mpi that will turn off buffering?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;                 Justin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 Brock Palen wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     When ever this happens we found the code to have a
</span><br>
<span class="quotelev2">&gt;&gt;                     deadlock.  users never saw it until they cross the
</span><br>
<span class="quotelev2">&gt;&gt;                     eager-&gt;roundevous threshold.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     Yes you can disable shared memory with:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     mpirun --mca btl ^sm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     Or you can try increasing the eager limit.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     ompi_info --param btl sm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     MCA btl: parameter &quot;btl_sm_eager_limit&quot; (current 
</span><br>
<span class="quotelev2">&gt;&gt; value:
</span><br>
<span class="quotelev2">&gt;&gt;                                              &quot;4096&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     You can modify this limit at run time,  I think
</span><br>
<span class="quotelev2">&gt;&gt;                     (can't test it right now) it is just:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     mpirun --mca btl_sm_eager_limit 40960
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     I think you can also in tweaking these values use
</span><br>
<span class="quotelev2">&gt;&gt;                     env Vars in place of putting it all in the mpirun 
</span><br>
<span class="quotelev2">&gt;&gt; line:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     export OMPI_MCA_btl_sm_eager_limit=40960
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     See:
</span><br>
<span class="quotelev2">&gt;&gt;                     <a href="http://www.open-mpi.org/faq/?category=tuning">http://www.open-mpi.org/faq/?category=tuning</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     Brock Palen
</span><br>
<span class="quotelev2">&gt;&gt;                     www.umich.edu/~brockp &lt;<a href="http://www.umich.edu/~brockp">http://www.umich.edu/~brockp</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     Center for Advanced Computing
</span><br>
<span class="quotelev2">&gt;&gt;                     brockp_at_[hidden] &lt;mailto:brockp_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     (734)936-1985
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     On Dec 5, 2008, at 12:22 PM, Justin wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         We are currently using OpenMPI 1.3 on Ranger for
</span><br>
<span class="quotelev2">&gt;&gt;                         large processor jobs (8K+).  Our code appears to
</span><br>
<span class="quotelev2">&gt;&gt;                         be occasionally deadlocking at random within
</span><br>
<span class="quotelev2">&gt;&gt;                         point to point communication (see stacktrace
</span><br>
<span class="quotelev2">&gt;&gt;                         below).  This code has been tested on many
</span><br>
<span class="quotelev2">&gt;&gt;                         different MPI versions and as far as we know it
</span><br>
<span class="quotelev2">&gt;&gt;                         does not contain a deadlock.  However, in the
</span><br>
<span class="quotelev2">&gt;&gt;                         past we have ran into problems with shared
</span><br>
<span class="quotelev2">&gt;&gt;                         memory optimizations within MPI causing
</span><br>
<span class="quotelev2">&gt;&gt;                         deadlocks.  We can usually avoid these by
</span><br>
<span class="quotelev2">&gt;&gt;                         setting a few environment variables to either
</span><br>
<span class="quotelev2">&gt;&gt;                         increase the size of shared memory buffers or
</span><br>
<span class="quotelev2">&gt;&gt;                         disable shared memory optimizations all
</span><br>
<span class="quotelev2">&gt;&gt;                         together.   Does OpenMPI have any known
</span><br>
<span class="quotelev2">&gt;&gt;                         deadlocks that might be causing our deadlocks?
</span><br>
<span class="quotelev2">&gt;&gt;                          If are there any work arounds?  Also how do we
</span><br>
<span class="quotelev2">&gt;&gt;                         disable shared memory within OpenMPI?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         Here is an example of where processors are 
</span><br>
<span class="quotelev2">&gt;&gt; hanging:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         #0  0x00002b2df3522683 in
</span><br>
<span class="quotelev2">&gt;&gt;                         mca_btl_sm_component_progress () from
</span><br>
<span class="quotelev2">&gt;&gt;                         
</span><br>
<span class="quotelev2">&gt;&gt; /opt/apps/intel10_1/openmpi/1.3/lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev2">&gt;&gt;                         #1  0x00002b2df2cb46bf in mca_bml_r2_progress ()
</span><br>
<span class="quotelev2">&gt;&gt;                         from
</span><br>
<span class="quotelev2">&gt;&gt;                         
</span><br>
<span class="quotelev2">&gt;&gt; /opt/apps/intel10_1/openmpi/1.3/lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev2">&gt;&gt;                         #2  0x00002b2df0032ea4 in opal_progress () from
</span><br>
<span class="quotelev2">&gt;&gt;                         
</span><br>
<span class="quotelev2">&gt;&gt; /opt/apps/intel10_1/openmpi/1.3/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt;                         #3  0x00002b2ded0d7622 in
</span><br>
<span class="quotelev2">&gt;&gt;                         ompi_request_default_wait_some () from
</span><br>
<span class="quotelev2">&gt;&gt;                         /opt/apps/intel10_1/openmpi/1.3//lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt;                         #4  0x00002b2ded109e34 in PMPI_Waitsome () from
</span><br>
<span class="quotelev2">&gt;&gt;                         /opt/apps/intel10_1/openmpi/1.3//lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;                         Justin
</span><br>
<span class="quotelev2">&gt;&gt;                         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;                         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;                         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;                     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;                     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;                 users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;                 users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;             users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;             users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7482.php">Raymond Wan: "Re: [OMPI users] Only the root can run mpirun? other users how to do ?"</a>
<li><strong>Previous message:</strong> <a href="7480.php">Rolf Vandevaart: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>In reply to:</strong> <a href="7480.php">Rolf Vandevaart: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7508.php">Jeff Squyres: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>Reply:</strong> <a href="7508.php">Jeff Squyres: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
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
