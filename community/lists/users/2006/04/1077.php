<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Apr 16 14:32:54 2006" -->
<!-- isoreceived="20060416183254" -->
<!-- sent="Sun, 16 Apr 2006 14:32:51 -0400" -->
<!-- isosent="20060416183251" -->
<!-- name="Sang Chul Choi" -->
<!-- email="goshng_at_[hidden]" -->
<!-- subject="Re: [OMPI users] General Installation Question" -->
<!-- id="33f36270604161132v10c4659cm5c0d93540ac93c9e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="33f36270604161114n7745bc53u5eb85c9ecdc9e0_at_mail.gmail.com" -->
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
<strong>From:</strong> Sang Chul Choi (<em>goshng_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-16 14:32:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1078.php">Brian Barrett: "Re: [OMPI users] General Installation Question"</a>
<li><strong>Previous message:</strong> <a href="1076.php">Brian Barrett: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<li><strong>In reply to:</strong> <a href="1075.php">Sang Chul Choi: "Re: [OMPI users] General Installation Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1078.php">Brian Barrett: "Re: [OMPI users] General Installation Question"</a>
<li><strong>Reply:</strong> <a href="1078.php">Brian Barrett: "Re: [OMPI users] General Installation Question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As an another similar question about installation,
<br>
I think that installation of Open MPI should be done on the
<br>
master and all slave nodes. A program which use MPI feature
<br>
also seems to have to be installed on the master and all slave nodes
<br>
unless I use NFS. My question is that:
<br>
if I used OpenPBS software rather than rsh/ssh,
<br>
is this installation problem of Open MPI and/or a MPI featured program
<br>
solved? Or, even though I used OpenPBS, need I have
<br>
each copy of my MPI-featured program installed on the master and
<br>
all the slave nodes?
<br>
My question can be about the difference between using rsh/ssh
<br>
and using OpenPBS.
<br>
<p>Thank you,
<br>
<p>Sang Chul
<br>
<p>On 4/16/06, Sang Chul Choi &lt;goshng_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you, Brian:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It worked.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you, again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 4/16/06, Brian Barrett &lt;brbarret_at_[hidden] &gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 16, 2006, at 8:18 AM, Sang Chul Choi wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 1. I could not find any document except FAQ and mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; for Open MPI. Is there any user manual or something like that?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Or, the LAM MPI's manual can be used instead?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Unfortunately, at this time, the only documentation available for
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI is the FAQ and the mailing list.  There are some fairly
</span><br>
<span class="quotelev2">&gt; &gt; significant differences between Open MPI and LAM/MPI, so while the
</span><br>
<span class="quotelev2">&gt; &gt; LAM/MPI manuals could be a start, there are some fairly significant
</span><br>
<span class="quotelev2">&gt; &gt; differences.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 2. Another question is about installation.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If I want to use rsh/ssh for Open MPI, do I have to install
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Open MPI on all master and slave nodes? Or, should I use
</span><br>
<span class="quotelev3">&gt; &gt; &gt; something like NSF file system so that even though I installed
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Open MPI on only master node, all the other salve nodes could
</span><br>
<span class="quotelev3">&gt; &gt; &gt; see Open MPI installation in the master node?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Like LAM/MPI, Open MPI doesn't really care on this point.  This is
</span><br>
<span class="quotelev2">&gt; &gt; also somewhat of a religious point -- people seem to have strong
</span><br>
<span class="quotelev2">&gt; &gt; opinions either way.  The advantage of the NFS approach is that it
</span><br>
<span class="quotelev2">&gt; &gt; makes it trivial to keep the software installs in sync on all the
</span><br>
<span class="quotelev2">&gt; &gt; nodes.  The advantage of the installation on local disk approach is
</span><br>
<span class="quotelev2">&gt; &gt; that there is significantly less strain on the NFS server during
</span><br>
<span class="quotelev2">&gt; &gt; process startup.    For development, I tend to go with the NFS
</span><br>
<span class="quotelev2">&gt; &gt; approach, since I'm constantly updating my installation.  For large
</span><br>
<span class="quotelev2">&gt; &gt; cluster production installs, I prefer the installation on each node
</span><br>
<span class="quotelev2">&gt; &gt; approach.  But unless your cluster is really large (or your NFS
</span><br>
<span class="quotelev2">&gt; &gt; server is really slow) either approach should work.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The error I have is from I wanted to run a program on two slave
</span><br>
<span class="quotelev3">&gt; &gt; &gt; nodes but shell complained that there is no orted. It is true
</span><br>
<span class="quotelev3">&gt; &gt; &gt; that there is no installation of Open MPI on each slave node.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yes, that is the expected error if you try to run on a node without
</span><br>
<span class="quotelev2">&gt; &gt; an Open MPI installation.  If you ensure that a copy of Open MPI is
</span><br>
<span class="quotelev2">&gt; &gt; installed (and in your path) on each node, your problem should go away.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hope this helps,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Brian
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt;    Brian Barrett
</span><br>
<span class="quotelev2">&gt; &gt;    Open MPI developer
</span><br>
<span class="quotelev2">&gt; &gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ===============================
</span><br>
<span class="quotelev1">&gt; Live, Learn, and Love!
</span><br>
<span class="quotelev1">&gt; E-mail : goshng at empal dot com
</span><br>
<span class="quotelev1">&gt;             goshng at gmail dot com
</span><br>
<span class="quotelev1">&gt; Home : +1-919-468-2578
</span><br>
<span class="quotelev1">&gt; Address : 1528 Macalpine Circle
</span><br>
<span class="quotelev1">&gt;                Morrisville, NC 27560
</span><br>
<span class="quotelev1">&gt; ===============================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
--
===============================
Live, Learn, and Love!
E-mail : goshng at empal dot com
            goshng at gmail dot com
Home : +1-919-468-2578
Address : 1528 Macalpine Circle
               Morrisville, NC 27560
===============================
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1077/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1078.php">Brian Barrett: "Re: [OMPI users] General Installation Question"</a>
<li><strong>Previous message:</strong> <a href="1076.php">Brian Barrett: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<li><strong>In reply to:</strong> <a href="1075.php">Sang Chul Choi: "Re: [OMPI users] General Installation Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1078.php">Brian Barrett: "Re: [OMPI users] General Installation Question"</a>
<li><strong>Reply:</strong> <a href="1078.php">Brian Barrett: "Re: [OMPI users] General Installation Question"</a>
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
