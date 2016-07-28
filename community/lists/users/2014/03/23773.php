<?
$subject_val = "Re: [OMPI users] bind-to core warning even with numactl";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  4 13:55:06 2014" -->
<!-- isoreceived="20140304185506" -->
<!-- sent="Tue, 4 Mar 2014 12:49:13 -0500" -->
<!-- isosent="20140304174913" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bind-to core warning even with numactl" -->
<!-- id="CA+ssbKUOZYKG5pb3GUE_a6EhncnbY2ipyUA=3L2OfsNHjyzrxA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="53161166.1040603_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] bind-to core warning even with numactl<br>
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-04 12:49:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23774.php">Gus Correa: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="23772.php">Gus Correa: "Re: [OMPI users] bind-to core warning even with numactl"</a>
<li><strong>In reply to:</strong> <a href="23772.php">Gus Correa: "Re: [OMPI users] bind-to core warning even with numactl"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you Gus, I'll double check with them and get back to you.
<br>
<p>Saliya
<br>
<p><p>On Tue, Mar 4, 2014 at 12:46 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Saliya
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Check with your sys admin if numactl and numactl-devel
</span><br>
<span class="quotelev1">&gt; were installed on *ALL* cluster nodes, and in particular on
</span><br>
<span class="quotelev1">&gt; Node:  192.168.0.19
</span><br>
<span class="quotelev1">&gt; where the problem happened in your most recent job.
</span><br>
<span class="quotelev1">&gt; Sometimes a node is down during a massive package install,
</span><br>
<span class="quotelev1">&gt; is forgotten, and never gets updated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 03/04/2014 12:15 PM, Saliya Ekanayake wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I actually did a rebuild and install. Is there a quick test to see if
</span><br>
<span class="quotelev2">&gt;&gt; these were picked up correctly. I checked OMPI_INFO and can see numaif.h
</span><br>
<span class="quotelev2">&gt;&gt; has been founded. Is this the correct indication?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'll check the link and send details by tomorrow as our clusters are on
</span><br>
<span class="quotelev2">&gt;&gt; maintenance today.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; Saliya
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Mar 4, 2014 at 10:03 AM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev2">&gt;&gt; &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Did you rebuild / re-install Open MPI after these packages were
</span><br>
<span class="quotelev2">&gt;&gt;     installed?  I believe that the assumption is that Open MPI didn't
</span><br>
<span class="quotelev2">&gt;&gt;     find the headers / libraries it needed to do the binding when it was
</span><br>
<span class="quotelev2">&gt;&gt;     built.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     If that still didn't solve your issue, please send all the
</span><br>
<span class="quotelev2">&gt;&gt;     information listed here:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Mar 4, 2014, at 6:57 AM, Saliya Ekanayake &lt;esaliya_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;mailto:esaliya_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt; In an earlier thread I mentioned getting the following error when
</span><br>
<span class="quotelev2">&gt;&gt;     trying --bind-to core option with mpirun. I was told that numactl
</span><br>
<span class="quotelev2">&gt;&gt;     and numactl-devel need to be installed. The sys admins have
</span><br>
<span class="quotelev2">&gt;&gt;     installed these in our cluster and I've rebuilt OpenMPI, but I still
</span><br>
<span class="quotelev2">&gt;&gt;     get the same warning. I wonder if there's anything more I need to do.
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt; WARNING: a request was made to bind a process. While the system
</span><br>
<span class="quotelev3">&gt;&gt;      &gt; supports binding the process itself, at least one node does NOT
</span><br>
<span class="quotelev3">&gt;&gt;      &gt; support binding memory to the process location.
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;   Node:  192.168.0.19
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt; This is a warning only; your job will continue, though
</span><br>
<span class="quotelev2">&gt;&gt;     performance may
</span><br>
<span class="quotelev3">&gt;&gt;      &gt; be degraded.
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt; Thank you,
</span><br>
<span class="quotelev3">&gt;&gt;      &gt; Saliya
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt; --
</span><br>
<span class="quotelev3">&gt;&gt;      &gt; Saliya Ekanayake esaliya_at_[hidden] &lt;mailto:esaliya_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt; Cell 812-391-4914 &lt;tel:812-391-4914&gt; Home 812-961-6383
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;tel:812-961-6383&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev3">&gt;&gt;      &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;      &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;      &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     --
</span><br>
<span class="quotelev2">&gt;&gt;     Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;     jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Saliya Ekanayake esaliya_at_[hidden] &lt;mailto:esaliya_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cell 812-391-4914 Home 812-961-6383
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
Saliya Ekanayake esaliya_at_[hidden]
Cell 812-391-4914 Home 812-961-6383
<a href="http://saliya.org">http://saliya.org</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23773/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23774.php">Gus Correa: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="23772.php">Gus Correa: "Re: [OMPI users] bind-to core warning even with numactl"</a>
<li><strong>In reply to:</strong> <a href="23772.php">Gus Correa: "Re: [OMPI users] bind-to core warning even with numactl"</a>
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
