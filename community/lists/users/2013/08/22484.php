<?
$subject_val = "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 12 17:20:06 2013" -->
<!-- isoreceived="20130812212006" -->
<!-- sent="Mon, 12 Aug 2013 17:20:06 -0400" -->
<!-- isosent="20130812212006" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled" -->
<!-- id="52095186.9010003_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="52093853.3050200_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-12 17:20:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22485.php">Ralph Castain: "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled"</a>
<li><strong>Previous message:</strong> <a href="22483.php">Gus Correa: "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled"</a>
<li><strong>In reply to:</strong> <a href="22483.php">Gus Correa: "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22485.php">Ralph Castain: "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled"</a>
<li><strong>Reply:</strong> <a href="22485.php">Ralph Castain: "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph, all
<br>
<p>I include more information below,
<br>
after turning on btl_openib_verbose 30.
<br>
As you can see, OMPI tries, and fails, to load openib.
<br>
<p>Last week I reduced the memlock limit from unlimited
<br>
to ~12GB, as part of a general attempt to reign on memory
<br>
use/abuse by jobs sharing a node.
<br>
No parallel job ran until today, when the problem showed up.
<br>
Could the memlock limit be the root of the problem?
<br>
<p>The OMPI FAQ says the memlock limit
<br>
should be a &quot;large number (or better yet, unlimited)&quot;:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
<br>
<p>The next two FAQ kind of indicate that
<br>
it should be set to &quot;unlimited&quot;, but don't say it clearly:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages-user">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages-user</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages-more">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages-more</a>
<br>
<p>QUESTION:
<br>
Is &quot;unlimited&quot; a must, or is there any (magic) &quot;large number&quot;
<br>
that would be OK for openib?
<br>
<p>I thought a 12GB memlock limit would be OK, but maybe it is not.
<br>
The nodes have 64GB RAM.
<br>
<p>Thank you,
<br>
Gus Correa
<br>
<p>*************************************************\
<br>
[node15.cluster][[8097,1],0][../../../../../ompi/mca/btl/openib/btl_openib_component.c:562:start_async_event_thread] 
<br>
Failed to create async event thread
<br>
[node15.cluster][[8097,1],1][../../../../../ompi/mca/btl/openib/btl_openib_component.c:562:start_async_event_thread] 
<br>
Failed to create async event thread
<br>
[node15.cluster][[8097,1],4][../../../../../ompi/mca/btl/openib/btl_openib_component.c:562:start_async_event_thread] 
<br>
Failed to create async event thread
<br>
[node15.cluster][[8097,1],3][../../../../../ompi/mca/btl/openib/btl_openib_component.c:562:start_async_event_thread] 
<br>
Failed to create async event thread
<br>
[node15.cluster][[8097,1],2][../../../../../ompi/mca/btl/openib/btl_openib_component.c:562:start_async_event_thread] 
<br>
Failed to create async event thread
<br>
--------------------------------------------------------------------------
<br>
WARNING: There was an error initializing an OpenFabrics device.
<br>
<p>&nbsp;&nbsp;&nbsp;Local host:   node15.cluster
<br>
&nbsp;&nbsp;&nbsp;Local device: mlx4_0
<br>
--------------------------------------------------------------------------
<br>
[node15.cluster][[8097,1],10][../../../../../ompi/mca/btl/openib/btl_openib_component.c:562:start_async_event_thread] 
<br>
Failed to create async event thread
<br>
[node15.cluster][[8097,1],12][../../../../../ompi/mca/btl/openib/btl_openib_component.c:562:start_async_event_thread] 
<br>
Failed to create async event thread
<br>
[node15.cluster][[8097,1],13][../../../../../ompi/mca/btl/openib/btl_openib_component.c:562:start_async_event_thread] 
<br>
Failed to create async event thread
<br>
[node14.cluster][[8097,1],17][../../../../../ompi/mca/btl/openib/btl_openib_component.c:562:start_async_event_thread] 
<br>
Failed to create async event thread
<br>
[node14.cluster][[8097,1],23][../../../../../ompi/mca/btl/openib/btl_openib_component.c:562:start_async_event_thread] 
<br>
Failed to create async event thread
<br>
[node14.cluster][[8097,1],24][../../../../../ompi/mca/btl/openib/btl_openib_component.c:562:start_async_event_thread] 
<br>
Failed to create async event thread
<br>
[node14.cluster][[8097,1],26][../../../../../ompi/mca/btl/openib/btl_openib_component.c:562:start_async_event_thread] 
<br>
Failed to create async event thread
<br>
[node14.cluster][[8097,1],28][../../../../../ompi/mca/btl/openib/btl_openib_component.c:562:start_async_event_thread] 
<br>
Failed to create async event thread
<br>
[node14.cluster][[8097,1],31][../../../../../ompi/mca/btl/openib/btl_openib_component.c:562:start_async_event_thread] 
<br>
Failed to create async event thread
<br>
--------------------------------------------------------------------------
<br>
At least one pair of MPI processes are unable to reach each other for
<br>
MPI communications.  This means that no Open MPI device has indicated
<br>
that it can be used to communicate between these processes.  This is
<br>
an error; Open MPI requires that all MPI processes be able to reach
<br>
each other.  This error can sometimes be the result of forgetting to
<br>
specify the &quot;self&quot; BTL.
<br>
<p>&nbsp;&nbsp;&nbsp;Process 1 ([[8097,1],4]) is on host: node15.cluster
<br>
&nbsp;&nbsp;&nbsp;Process 2 ([[8097,1],16]) is on host: node14
<br>
&nbsp;&nbsp;&nbsp;BTLs attempted: self sm
<br>
<p>Your MPI job is now going to abort; sorry.
<br>
--------------------------------------------------------------------------
<br>
<p>*************************************************
<br>
<p>On 08/12/2013 03:32 PM, Gus Correa wrote:
<br>
<span class="quotelev1">&gt; Thank you for the prompt help, Ralph!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, it is OMPI 1.4.3 built with openib support:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ompi_info | grep openib
</span><br>
<span class="quotelev1">&gt; MCA btl: openib (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are three libraries in prefix/lib/openmpi,
</span><br>
<span class="quotelev1">&gt; no mca_btl_openib library.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ls $PREFIX/lib/openmpi/
</span><br>
<span class="quotelev1">&gt; libompi_dbg_msgq.a libompi_dbg_msgq.la libompi_dbg_msgq.so
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, this may be just because it is an older OMPI version in
</span><br>
<span class="quotelev1">&gt; the 1.4 series.
</span><br>
<span class="quotelev1">&gt; Because those are exactly what I have in another cluster with IB,
</span><br>
<span class="quotelev1">&gt; and OMPI 1.4.3, where there isn't a problem.
</span><br>
<span class="quotelev1">&gt; The libraries' organization may have changed from
</span><br>
<span class="quotelev1">&gt; the 1.4 to the 1.6 series, right?
</span><br>
<span class="quotelev1">&gt; I only have mca_btl_openib libraries in the 1.6 series, but it
</span><br>
<span class="quotelev1">&gt; will be a hardship to migrate this program to OMPI 1.6.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (OK, I have newer OMPI, but I need old also for some
</span><br>
<span class="quotelev1">&gt; programs).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why the heck it is not detecting the Infinband hardware?
</span><br>
<span class="quotelev1">&gt; [It used to detect it! :( ]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 08/12/2013 03:01 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Check ompi_info - was it built with openib support?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Then check that the mca_btl_openib library is present in the
</span><br>
<span class="quotelev2">&gt;&gt; prefix/lib/openmpi directory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sounds like it isn't finding the openib plugin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 12, 2013, at 11:57 AM, Gus Correa&lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear Open MPI pros
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On one of the clusters here, that has Infinband,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am getting this type of errors from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI 1.4.3 (OK, I know it is old ...):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *********************************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tcl_InitNotifier: unable to start notifier thread
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Abort: Command not found.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tcl_InitNotifier: unable to start notifier thread
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Abort: Command not found.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI communications. This means that no Open MPI device has indicated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that it can be used to communicate between these processes. This is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev3">&gt;&gt;&gt; each other. This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 1 ([[907,1],68]) is on host: node11.cluster
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 2 ([[907,1],0]) is on host: node15
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BTLs attempted: self sm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *********************************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Awkward, because I have &quot;btl = ^tcp&quot; in openmpi-mca-params.conf.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The same error also happens if I force --mca btl openib,sm,self
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in mpiexec.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ** Why is it attempting only the self and sm BTLs, but not openib? **
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't understand either the initial errors
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;Tcl_InitNotifier: unable to start notifier thread&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Are they coming from Torque perhaps?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As I said, the cluster has Infiniband,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which is what we've been using forever, until
</span><br>
<span class="quotelev3">&gt;&gt;&gt; these errors started today.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I divert the traffic to tcp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (--mca btl tcp,sm,self), the jobs run normally.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am using the examples/connectivity_c.c program
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to troubleshoot this problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I checked a few things on the IB side.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The output of ibstat on all nodes seems OK (links up, etc),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and so are the output of ibhosts and ibchecknet.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Only two connected ports had errors, as reported by ibcheckerrors,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and I cleared them with iblclearerrors.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The IB subnet manager is running on the head node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I restarted the daemon, but nothing changed, the job continue to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fail with the same errors.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any hints of what is going on, how to diagnose it, and how to fix it?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any gentler way than reboot everything and power cycling
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the IB switch? (And would this brute force method work, at least?)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gus Correa
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22485.php">Ralph Castain: "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled"</a>
<li><strong>Previous message:</strong> <a href="22483.php">Gus Correa: "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled"</a>
<li><strong>In reply to:</strong> <a href="22483.php">Gus Correa: "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22485.php">Ralph Castain: "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled"</a>
<li><strong>Reply:</strong> <a href="22485.php">Ralph Castain: "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled"</a>
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
