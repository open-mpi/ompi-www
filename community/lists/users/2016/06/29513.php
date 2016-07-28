<?
$subject_val = "Re: [OMPI users] Docker Cluster Queue Manager";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 22 11:10:12 2016" -->
<!-- isoreceived="20160622151012" -->
<!-- sent="Wed, 22 Jun 2016 09:09:30 -0600" -->
<!-- isosent="20160622150930" -->
<!-- name="Rob Nagler" -->
<!-- email="openmpi-wooxi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Docker Cluster Queue Manager" -->
<!-- id="CAJB=V01Jg=m4ggnSp12f70o6y=EWguHZK7n=p8LwYppA-ooZ8A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="8760t1nwa9.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Docker Cluster Queue Manager<br>
<strong>From:</strong> Rob Nagler (<em>openmpi-wooxi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-22 11:09:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29514.php">Rob Latham: "Re: [OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?"</a>
<li><strong>Previous message:</strong> <a href="29512.php">Dave Love: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>In reply to:</strong> <a href="29512.php">Dave Love: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good morning, Dave,
<br>
<p>Amongst reasons for not running Docker, a major one that I didn't notice
<br>
<span class="quotelev1">&gt; raised is that containers are not started by the resource manager, but
</span><br>
<span class="quotelev1">&gt; by a privileged daemon, so the resource manager can't directly control
</span><br>
<span class="quotelev1">&gt; or monitor them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>There's an endless debate &lt;<a href="https://lwn.net/Articles/676831/">https://lwn.net/Articles/676831/</a>&gt; about this
<br>
between the docker and systemd folks. It is possible to get at the underlying
<br>
process &lt;<a href="https://github.com/docker/docker/issues/6791">https://github.com/docker/docker/issues/6791</a>&gt; if a resource
<br>
manager wanted to.
<br>
<p><p><span class="quotelev1">&gt; From a brief look at Jupyter when it came up a while ago, I wouldn't
</span><br>
<span class="quotelev1">&gt; want to run it, and I wasn't alone.  (I've been lectured about the lack
</span><br>
<span class="quotelev1">&gt; of problems with such things by people on whose clusters I could
</span><br>
<span class="quotelev1">&gt; trivially run jobs as any normal user and sometimes as root.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Well some people disagree, e.g. ipython.nersc.gov.  Our users like Jupyter.
<br>
It's my job to help them use it.
<br>
<p>+1 for what Ralph said about singularity in particular.  While there's
<br>
<span class="quotelev1">&gt; work to be done, you could even convert docker images on the fly in a
</span><br>
<span class="quotelev1">&gt; resource manager prolog.  I'm awaiting enlightenment on the on-topic
</span><br>
<span class="quotelev1">&gt; issue of running MPI jobs with it, though.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
I don't see how Singularity addresses the problem of starting MPI inside
<br>
Docker.
<br>
<p>In any event, our current plan is to bypass resource managers completely
<br>
and start an AWS fleet per user request. The code is much simpler for
<br>
everybody.
<br>
<p>Rob
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29513/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29514.php">Rob Latham: "Re: [OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?"</a>
<li><strong>Previous message:</strong> <a href="29512.php">Dave Love: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>In reply to:</strong> <a href="29512.php">Dave Love: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
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
