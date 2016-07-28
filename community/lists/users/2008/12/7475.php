<?
$subject_val = "Re: [OMPI users] Deadlock on large numbers of processors";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  9 08:05:24 2008" -->
<!-- isoreceived="20081209130524" -->
<!-- sent="Tue, 9 Dec 2008 15:05:19 +0200" -->
<!-- isosent="20081209130519" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Deadlock on large numbers of processors" -->
<!-- id="453d39990812090505q1e18e57p9fbca616e52d59ef_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="453d39990812090503m470fedd7v79acd57bb78a36fc_at_mail.gmail.com" -->
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
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-09 08:05:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7476.php">Chong Su: "[OMPI users] Only the root can run mpirun? other users how to do ?"</a>
<li><strong>Previous message:</strong> <a href="7474.php">Lenny Verkhovsky: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>In reply to:</strong> <a href="7474.php">Lenny Verkhovsky: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7480.php">Rolf Vandevaart: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>Reply:</strong> <a href="7480.php">Rolf Vandevaart: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
also see <a href="https://svn.open-mpi.org/trac/ompi/ticket/1449">https://svn.open-mpi.org/trac/ompi/ticket/1449</a>
<br>
<p><p><p>On 12/9/08, Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; maybe it's related to <a href="https://svn.open-mpi.org/trac/ompi/ticket/1378">https://svn.open-mpi.org/trac/ompi/ticket/1378</a>  ??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 12/5/08, Justin &lt;luitjens_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The reason i'd like to disable these eager buffers is to help detect the
</span><br>
<span class="quotelev2">&gt;&gt; deadlock better.  I would not run with this for a normal run but it would be
</span><br>
<span class="quotelev2">&gt;&gt; useful for debugging.  If the deadlock is indeed due to our code then
</span><br>
<span class="quotelev2">&gt;&gt; disabling any shared buffers or eager sends would make that deadlock
</span><br>
<span class="quotelev2">&gt;&gt; reproduceable.    In addition we might be able to lower the number of
</span><br>
<span class="quotelev2">&gt;&gt; processors down.  Right now determining which processor is deadlocks when we
</span><br>
<span class="quotelev2">&gt;&gt; are using 8K cores and each processor has hundreds of messages sent out
</span><br>
<span class="quotelev2">&gt;&gt; would be quite difficult.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your suggestions,
</span><br>
<span class="quotelev2">&gt;&gt; Justin
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI has differnt eager limits for all the network types, on your
</span><br>
<span class="quotelev3">&gt;&gt;&gt; system run:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_info --param btl all
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and look for the eager_limits
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can set these values to 0 using the syntax I showed you before. That
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would disable eager messages.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There might be a better way to disable eager messages.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Not sure why you would want to disable them, they are there for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; performance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Maybe you would still see a deadlock if every message was below the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; threshold. I think there is a limit of the number of eager messages a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; receving cpus will accept. Not sure about that though.  I still kind of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doubt it though.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Try tweaking your buffer sizes,  make the openib  btl eager limit the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; same as shared memory. and see if you get locks up between hosts and not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; just shared memory.
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
<span class="quotelev3">&gt;&gt;&gt; On Dec 5, 2008, at 2:10 PM, Justin wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Thank you for this info.  I should add that our code tends to post a lot
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of sends prior to the other side posting receives.  This causes a lot of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; unexpected messages to exist.  Our code explicitly matches up all tags and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processors (that is we do not use MPI wild cards).  If we had a dead lock I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; would think we would see it regardless of weather or not we cross the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; roundevous threshold.  I guess one way to test this would be to to set this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; threshold to 0.  If it then dead locks we would likely be able to track down
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the deadlock.  Are there any other parameters we can send mpi that will turn
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; off buffering?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Justin
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brock Palen wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; When ever this happens we found the code to have a deadlock.  users
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; never saw it until they cross the eager-&gt;roundevous threshold.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Yes you can disable shared memory with:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun --mca btl ^sm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Or you can try increasing the eager limit.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ompi_info --param btl sm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MCA btl: parameter &quot;btl_sm_eager_limit&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                          &quot;4096&quot;)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; You can modify this limit at run time,  I think (can't test it right
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; now) it is just:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun --mca btl_sm_eager_limit 40960
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I think you can also in tweaking these values use env Vars in place of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; putting it all in the mpirun line:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; export OMPI_MCA_btl_sm_eager_limit=40960
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; See:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=tuning">http://www.open-mpi.org/faq/?category=tuning</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Dec 5, 2008, at 12:22 PM, Justin wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Hi,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; We are currently using OpenMPI 1.3 on Ranger for large processor jobs
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (8K+).  Our code appears to be occasionally deadlocking at random within
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; point to point communication (see stacktrace below).  This code has been
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tested on many different MPI versions and as far as we know it does not
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; contain a deadlock.  However, in the past we have ran into problems with
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; shared memory optimizations within MPI causing deadlocks.  We can usually
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; avoid these by setting a few environment variables to either increase the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; size of shared memory buffers or disable shared memory optimizations all
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; together.   Does OpenMPI have any known deadlocks that might be causing our
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; deadlocks?  If are there any work arounds?  Also how do we disable shared
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; memory within OpenMPI?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Here is an example of where processors are hanging:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #0  0x00002b2df3522683 in mca_btl_sm_component_progress () from
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /opt/apps/intel10_1/openmpi/1.3/lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #1  0x00002b2df2cb46bf in mca_bml_r2_progress () from
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /opt/apps/intel10_1/openmpi/1.3/lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #2  0x00002b2df0032ea4 in opal_progress () from
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /opt/apps/intel10_1/openmpi/1.3/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #3  0x00002b2ded0d7622 in ompi_request_default_wait_some () from
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /opt/apps/intel10_1/openmpi/1.3//lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #4  0x00002b2ded109e34 in PMPI_Waitsome () from
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /opt/apps/intel10_1/openmpi/1.3//lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Justin
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7475/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7476.php">Chong Su: "[OMPI users] Only the root can run mpirun? other users how to do ?"</a>
<li><strong>Previous message:</strong> <a href="7474.php">Lenny Verkhovsky: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>In reply to:</strong> <a href="7474.php">Lenny Verkhovsky: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7480.php">Rolf Vandevaart: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>Reply:</strong> <a href="7480.php">Rolf Vandevaart: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
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
