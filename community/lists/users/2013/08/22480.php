<?
$subject_val = "[OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 12 14:57:57 2013" -->
<!-- isoreceived="20130812185757" -->
<!-- sent="Mon, 12 Aug 2013 14:57:56 -0400" -->
<!-- isosent="20130812185756" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="[OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled" -->
<!-- id="52093034.20602_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-12 14:57:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22481.php">Ralph Castain: "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled"</a>
<li><strong>Previous message:</strong> <a href="22479.php">George Bosilca: "Re: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22481.php">Ralph Castain: "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled"</a>
<li><strong>Reply:</strong> <a href="22481.php">Ralph Castain: "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open MPI pros
<br>
<p>On one of the clusters here, that has Infinband,
<br>
I am getting this type of errors from
<br>
OpenMPI 1.4.3 (OK, I know it is old ...):
<br>
<p>*********************************************************
<br>
Tcl_InitNotifier: unable to start notifier thread
<br>
Abort: Command not found.
<br>
Tcl_InitNotifier: unable to start notifier thread
<br>
Abort: Command not found.
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
<p>&nbsp;&nbsp;&nbsp;Process 1 ([[907,1],68]) is on host: node11.cluster
<br>
&nbsp;&nbsp;&nbsp;Process 2 ([[907,1],0]) is on host: node15
<br>
&nbsp;&nbsp;&nbsp;BTLs attempted: self sm
<br>
<p>Your MPI job is now going to abort; sorry.
<br>
--------------------------------------------------------------------------
<br>
*********************************************************
<br>
<p>Awkward, because I have &quot;btl = ^tcp&quot; in openmpi-mca-params.conf.
<br>
The same error also happens if I force --mca btl openib,sm,self
<br>
in mpiexec.
<br>
<p>** Why is it attempting only the self and sm BTLs, but not openib? **
<br>
<p>I don't understand either the initial errors
<br>
&quot;Tcl_InitNotifier: unable to start notifier thread&quot;.
<br>
Are they coming from Torque perhaps?
<br>
<p>As I said, the cluster has Infiniband,
<br>
which is what we've been using forever, until
<br>
these errors started today.
<br>
<p>When I divert the traffic to tcp
<br>
(--mca btl tcp,sm,self), the jobs run normally.
<br>
<p>I am using the examples/connectivity_c.c program
<br>
to troubleshoot this problem.
<br>
<p>***
<br>
I checked a few things on the IB side.
<br>
<p>The output of ibstat on all nodes seems OK (links up, etc),
<br>
and so are the output of ibhosts and ibchecknet.
<br>
<p>Only two connected ports had errors, as reported by ibcheckerrors,
<br>
and I cleared them with iblclearerrors.
<br>
<p>The IB subnet manager is running on the head node.
<br>
I restarted the daemon, but nothing changed, the job continue to
<br>
fail with the same errors.
<br>
<p>**
<br>
<p>Any hints of what is going on, how to diagnose it, and how to fix it?
<br>
Any gentler way than reboot everything and power cycling
<br>
the IB switch? (And would this brute force method work, at least?)
<br>
<p>Thank you,
<br>
Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22481.php">Ralph Castain: "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled"</a>
<li><strong>Previous message:</strong> <a href="22479.php">George Bosilca: "Re: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22481.php">Ralph Castain: "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled"</a>
<li><strong>Reply:</strong> <a href="22481.php">Ralph Castain: "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled"</a>
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
