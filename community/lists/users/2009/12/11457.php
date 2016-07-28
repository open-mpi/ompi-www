<?
$subject_val = "Re: [OMPI users] OMPI as a batch system";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  8 14:22:03 2009" -->
<!-- isoreceived="20091208192203" -->
<!-- sent="Tue, 8 Dec 2009 12:21:56 -0700" -->
<!-- isosent="20091208192156" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI as a batch system" -->
<!-- id="71d2d8cc0912081121w3fb3e39ft7713aaa549578867_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1260298872.30000.74.camel_at_corn.betterworld.us" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI as a batch system<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-08 14:21:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11458.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4"</a>
<li><strong>Previous message:</strong> <a href="11456.php">Ross Boylan: "[OMPI users] OMPI as a batch system"</a>
<li><strong>In reply to:</strong> <a href="11456.php">Ross Boylan: "[OMPI users] OMPI as a batch system"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Dec 8, 2009 at 12:01 PM, Ross Boylan &lt;ross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; What is the difference between running a set of programs with
</span><br>
<span class="quotelev1">&gt; independent invocations of mpirun vs specifying --app?  The programs do
</span><br>
<span class="quotelev1">&gt; not need to talk to each other.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think that if one job fails it will take the others down if I use
</span><br>
<span class="quotelev1">&gt; --app.  Is that correct?  This is the main reason I'm considering
</span><br>
<span class="quotelev1">&gt; alternatives.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yes - the job is terminated in that situation.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the other hand, if my app file is something like
</span><br>
<span class="quotelev1">&gt; -np 1 prog1
</span><br>
<span class="quotelev1">&gt; -np 1 prog2
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; I believe I will avoid oversubcription.  But, if I do
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 prog1
</span><br>
<span class="quotelev1">&gt; miprun -np 1 prog2
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt; do I end up oversubscribing the first node?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
Yes - each invocation of mpirun has no idea what the other one is doing. So
<br>
they will both load their procs beginning with the first available node.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would also be nice if OMPI automatically picked the least loaded node
</span><br>
<span class="quotelev1">&gt; (the load might come from other programs), but it does not appear it
</span><br>
<span class="quotelev1">&gt; takes this into account.  Is that right?  The FAQ mentions load leveler,
</span><br>
<span class="quotelev1">&gt; but we don't seem to have it installed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
Can you update to 1.3.4? If so, you can level the loading by using
<br>
--loadbalance on the cmd line and OMPI will map your procs accordingly.
<br>
<p><p><p><span class="quotelev1">&gt; Context: we have a cluster without a batch system or scheduler, and want
</span><br>
<span class="quotelev1">&gt; to run multiple independent jobs at once.  The cluster is running Debian
</span><br>
<span class="quotelev1">&gt; Lenny -&gt; OMPI 1.2.7rc2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>We have a subproject called Open Resilient Cluster Manager that will allow
<br>
the job to continue when individual procs die. Not released yet, but you can
<br>
see the project at
<br>
<p><a href="http://www.open-mpi.org/projects/orcm/">http://www.open-mpi.org/projects/orcm/</a>
<br>
<p>I have used those techniques to modify mpirun to support process
<br>
continuation (to be committed to the devel trunk soon, for release later),
<br>
but the MPI connection restoration is still being worked. So it works fine
<br>
for non-MPI applications, but won't help for MPI apps right now.
<br>
<p>I will probably modify mpirun at the same time to allow independent jobs to
<br>
continue running if one job fails. This will require a flag to mpirun,
<br>
though, as otherwise it would be very hard for me to know that the jobs are
<br>
in fact independent - the runtime layer doesn't know what MPI connections
<br>
are being made.
<br>
<p>HTH
<br>
Ralph
<br>
<p><p><span class="quotelev1">&gt; Thanks for any help you can offer.
</span><br>
<span class="quotelev1">&gt; Ross Boylan
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11457/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11458.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4"</a>
<li><strong>Previous message:</strong> <a href="11456.php">Ross Boylan: "[OMPI users] OMPI as a batch system"</a>
<li><strong>In reply to:</strong> <a href="11456.php">Ross Boylan: "[OMPI users] OMPI as a batch system"</a>
<!-- nextthread="start" -->
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
