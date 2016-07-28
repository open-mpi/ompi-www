<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Apr 16 14:14:59 2006" -->
<!-- isoreceived="20060416181459" -->
<!-- sent="Sun, 16 Apr 2006 14:14:58 -0400" -->
<!-- isosent="20060416181458" -->
<!-- name="Sang Chul Choi" -->
<!-- email="goshng_at_[hidden]" -->
<!-- subject="Re: [OMPI users] General Installation Question" -->
<!-- id="33f36270604161114n7745bc53u5eb85c9ecdc9e0_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F1E5F654-F5B5-49D9-B1FC-550424F0FD2F_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-04-16 14:14:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1076.php">Brian Barrett: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<li><strong>Previous message:</strong> <a href="1074.php">Brian Barrett: "Re: [OMPI users] General Installation Question"</a>
<li><strong>In reply to:</strong> <a href="1074.php">Brian Barrett: "Re: [OMPI users] General Installation Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1077.php">Sang Chul Choi: "Re: [OMPI users] General Installation Question"</a>
<li><strong>Reply:</strong> <a href="1077.php">Sang Chul Choi: "Re: [OMPI users] General Installation Question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you, Brian:
<br>
<p>It worked.
<br>
<p>Thank you, again.
<br>
<p>On 4/16/06, Brian Barrett &lt;brbarret_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 16, 2006, at 8:18 AM, Sang Chul Choi wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. I could not find any document except FAQ and mailing list
</span><br>
<span class="quotelev2">&gt; &gt; for Open MPI. Is there any user manual or something like that?
</span><br>
<span class="quotelev2">&gt; &gt; Or, the LAM MPI's manual can be used instead?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, at this time, the only documentation available for
</span><br>
<span class="quotelev1">&gt; Open MPI is the FAQ and the mailing list.  There are some fairly
</span><br>
<span class="quotelev1">&gt; significant differences between Open MPI and LAM/MPI, so while the
</span><br>
<span class="quotelev1">&gt; LAM/MPI manuals could be a start, there are some fairly significant
</span><br>
<span class="quotelev1">&gt; differences.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2. Another question is about installation.
</span><br>
<span class="quotelev2">&gt; &gt; If I want to use rsh/ssh for Open MPI, do I have to install
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI on all master and slave nodes? Or, should I use
</span><br>
<span class="quotelev2">&gt; &gt; something like NSF file system so that even though I installed
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI on only master node, all the other salve nodes could
</span><br>
<span class="quotelev2">&gt; &gt; see Open MPI installation in the master node?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Like LAM/MPI, Open MPI doesn't really care on this point.  This is
</span><br>
<span class="quotelev1">&gt; also somewhat of a religious point -- people seem to have strong
</span><br>
<span class="quotelev1">&gt; opinions either way.  The advantage of the NFS approach is that it
</span><br>
<span class="quotelev1">&gt; makes it trivial to keep the software installs in sync on all the
</span><br>
<span class="quotelev1">&gt; nodes.  The advantage of the installation on local disk approach is
</span><br>
<span class="quotelev1">&gt; that there is significantly less strain on the NFS server during
</span><br>
<span class="quotelev1">&gt; process startup.    For development, I tend to go with the NFS
</span><br>
<span class="quotelev1">&gt; approach, since I'm constantly updating my installation.  For large
</span><br>
<span class="quotelev1">&gt; cluster production installs, I prefer the installation on each node
</span><br>
<span class="quotelev1">&gt; approach.  But unless your cluster is really large (or your NFS
</span><br>
<span class="quotelev1">&gt; server is really slow) either approach should work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; The error I have is from I wanted to run a program on two slave
</span><br>
<span class="quotelev2">&gt; &gt; nodes but shell complained that there is no orted. It is true
</span><br>
<span class="quotelev2">&gt; &gt; that there is no installation of Open MPI on each slave node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, that is the expected error if you try to run on a node without
</span><br>
<span class="quotelev1">&gt; an Open MPI installation.  If you ensure that a copy of Open MPI is
</span><br>
<span class="quotelev1">&gt; installed (and in your path) on each node, your problem should go away.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this helps,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;    Brian Barrett
</span><br>
<span class="quotelev1">&gt;    Open MPI developer
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1075/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1076.php">Brian Barrett: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<li><strong>Previous message:</strong> <a href="1074.php">Brian Barrett: "Re: [OMPI users] General Installation Question"</a>
<li><strong>In reply to:</strong> <a href="1074.php">Brian Barrett: "Re: [OMPI users] General Installation Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1077.php">Sang Chul Choi: "Re: [OMPI users] General Installation Question"</a>
<li><strong>Reply:</strong> <a href="1077.php">Sang Chul Choi: "Re: [OMPI users] General Installation Question"</a>
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
