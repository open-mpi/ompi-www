<?
$subject_val = "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 12 15:32:36 2013" -->
<!-- isoreceived="20130812193236" -->
<!-- sent="Mon, 12 Aug 2013 15:32:35 -0400" -->
<!-- isosent="20130812193235" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled" -->
<!-- id="52093853.3050200_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7BACAE91-CE6B-4885-8A4C-95802C271851_at_open-mpi.org" -->
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
<strong>Date:</strong> 2013-08-12 15:32:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22484.php">Gus Correa: "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled"</a>
<li><strong>Previous message:</strong> <a href="22482.php">Edson Tavares de Camargo: "Re: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="22481.php">Ralph Castain: "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22484.php">Gus Correa: "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled"</a>
<li><strong>Reply:</strong> <a href="22484.php">Gus Correa: "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you for the prompt help, Ralph!
<br>
<p>Yes, it is OMPI 1.4.3 built with openib support:
<br>
<p>$ ompi_info | grep openib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: openib (MCA v2.0, API v2.0, Component v1.4.3)
<br>
<p>There are three libraries in prefix/lib/openmpi,
<br>
no mca_btl_openib library.
<br>
<p>$ ls $PREFIX/lib/openmpi/
<br>
libompi_dbg_msgq.a  libompi_dbg_msgq.la  libompi_dbg_msgq.so
<br>
<p><p>However, this may be just because it is an older OMPI version in
<br>
the 1.4 series.
<br>
Because those are exactly what I have in another cluster with IB,
<br>
and OMPI 1.4.3, where there isn't a problem.
<br>
The libraries' organization may have changed from
<br>
the 1.4 to the 1.6 series, right?
<br>
I only have mca_btl_openib libraries in the 1.6 series, but it
<br>
will be a hardship to migrate this program to OMPI 1.6.
<br>
<p>(OK, I have newer OMPI, but I need old also for some
<br>
programs).
<br>
<p>Why the heck it is not detecting the Infinband hardware?
<br>
[It used to detect it! :( ]
<br>
<p>Thank you,
<br>
Gus Correa
<br>
<p><p>On 08/12/2013 03:01 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Check ompi_info - was it built with openib support?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then check that the mca_btl_openib library is present in the prefix/lib/openmpi directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sounds like it isn't finding the openib plugin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 12, 2013, at 11:57 AM, Gus Correa&lt;gus_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear Open MPI pros
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On one of the clusters here, that has Infinband,
</span><br>
<span class="quotelev2">&gt;&gt; I am getting this type of errors from
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI 1.4.3 (OK, I know it is old ...):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *********************************************************
</span><br>
<span class="quotelev2">&gt;&gt; Tcl_InitNotifier: unable to start notifier thread
</span><br>
<span class="quotelev2">&gt;&gt; Abort: Command not found.
</span><br>
<span class="quotelev2">&gt;&gt; Tcl_InitNotifier: unable to start notifier thread
</span><br>
<span class="quotelev2">&gt;&gt; Abort: Command not found.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev2">&gt;&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev2">&gt;&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev2">&gt;&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev2">&gt;&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev2">&gt;&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Process 1 ([[907,1],68]) is on host: node11.cluster
</span><br>
<span class="quotelev2">&gt;&gt;   Process 2 ([[907,1],0]) is on host: node15
</span><br>
<span class="quotelev2">&gt;&gt;   BTLs attempted: self sm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; *********************************************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Awkward, because I have &quot;btl = ^tcp&quot; in openmpi-mca-params.conf.
</span><br>
<span class="quotelev2">&gt;&gt; The same error also happens if I force --mca btl openib,sm,self
</span><br>
<span class="quotelev2">&gt;&gt; in mpiexec.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ** Why is it attempting only the self and sm BTLs, but not openib? **
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't understand either the initial errors
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Tcl_InitNotifier: unable to start notifier thread&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; Are they coming from Torque perhaps?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As I said, the cluster has Infiniband,
</span><br>
<span class="quotelev2">&gt;&gt; which is what we've been using forever, until
</span><br>
<span class="quotelev2">&gt;&gt; these errors started today.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I divert the traffic to tcp
</span><br>
<span class="quotelev2">&gt;&gt; (--mca btl tcp,sm,self), the jobs run normally.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am using the examples/connectivity_c.c program
</span><br>
<span class="quotelev2">&gt;&gt; to troubleshoot this problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ***
</span><br>
<span class="quotelev2">&gt;&gt; I checked a few things on the IB side.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The output of ibstat on all nodes seems OK (links up, etc),
</span><br>
<span class="quotelev2">&gt;&gt; and so are the output of ibhosts and ibchecknet.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Only two connected ports had errors, as reported by ibcheckerrors,
</span><br>
<span class="quotelev2">&gt;&gt; and I cleared them with iblclearerrors.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The IB subnet manager is running on the head node.
</span><br>
<span class="quotelev2">&gt;&gt; I restarted the daemon, but nothing changed, the job continue to
</span><br>
<span class="quotelev2">&gt;&gt; fail with the same errors.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any hints of what is going on, how to diagnose it, and how to fix it?
</span><br>
<span class="quotelev2">&gt;&gt; Any gentler way than reboot everything and power cycling
</span><br>
<span class="quotelev2">&gt;&gt; the IB switch? (And would this brute force method work, at least?)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22484.php">Gus Correa: "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled"</a>
<li><strong>Previous message:</strong> <a href="22482.php">Edson Tavares de Camargo: "Re: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="22481.php">Ralph Castain: "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22484.php">Gus Correa: "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled"</a>
<li><strong>Reply:</strong> <a href="22484.php">Gus Correa: "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled"</a>
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
