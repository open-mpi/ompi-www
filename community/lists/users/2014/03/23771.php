<?
$subject_val = "Re: [OMPI users] bind-to core warning even with numactl";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  4 12:39:30 2014" -->
<!-- isoreceived="20140304173930" -->
<!-- sent="Tue, 4 Mar 2014 12:15:31 -0500" -->
<!-- isosent="20140304171531" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bind-to core warning even with numactl" -->
<!-- id="CA+ssbKXLo39nMBO=+xmYWS4XvKNdsqGOf76G-pN=6=xbaqm+nQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A72AFEA1-5E1C-444F-BF58-88C81027408F_at_cisco.com" -->
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
<strong>Date:</strong> 2014-03-04 12:15:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23772.php">Gus Correa: "Re: [OMPI users] bind-to core warning even with numactl"</a>
<li><strong>Previous message:</strong> <a href="23770.php">Gus Correa: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>In reply to:</strong> <a href="23769.php">Jeff Squyres (jsquyres): "Re: [OMPI users] bind-to core warning even with numactl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23772.php">Gus Correa: "Re: [OMPI users] bind-to core warning even with numactl"</a>
<li><strong>Reply:</strong> <a href="23772.php">Gus Correa: "Re: [OMPI users] bind-to core warning even with numactl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I actually did a rebuild and install. Is there a quick test to see if these
<br>
were picked up correctly. I checked OMPI_INFO and can see numaif.h has been
<br>
founded. Is this the correct indication?
<br>
<p>I'll check the link and send details by tomorrow as our clusters are on
<br>
maintenance today.
<br>
<p>Thank you,
<br>
Saliya
<br>
<p><p>On Tue, Mar 4, 2014 at 10:03 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Did you rebuild / re-install Open MPI after these packages were installed?
</span><br>
<span class="quotelev1">&gt;  I believe that the assumption is that Open MPI didn't find the headers /
</span><br>
<span class="quotelev1">&gt; libraries it needed to do the binding when it was built.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If that still didn't solve your issue, please send all the information
</span><br>
<span class="quotelev1">&gt; listed here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 4, 2014, at 6:57 AM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In an earlier thread I mentioned getting the following error when trying
</span><br>
<span class="quotelev1">&gt; --bind-to core option with mpirun. I was told that numactl and
</span><br>
<span class="quotelev1">&gt; numactl-devel need to be installed. The sys admins have installed these in
</span><br>
<span class="quotelev1">&gt; our cluster and I've rebuilt OpenMPI, but I still get the same warning. I
</span><br>
<span class="quotelev1">&gt; wonder if there's anything more I need to do.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; WARNING: a request was made to bind a process. While the system
</span><br>
<span class="quotelev2">&gt; &gt; supports binding the process itself, at least one node does NOT
</span><br>
<span class="quotelev2">&gt; &gt; support binding memory to the process location.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Node:  192.168.0.19
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is a warning only; your job will continue, though performance may
</span><br>
<span class="quotelev2">&gt; &gt; be degraded.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you,
</span><br>
<span class="quotelev2">&gt; &gt; Saliya
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Saliya Ekanayake esaliya_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Cell 812-391-4914 Home 812-961-6383
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23771/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23772.php">Gus Correa: "Re: [OMPI users] bind-to core warning even with numactl"</a>
<li><strong>Previous message:</strong> <a href="23770.php">Gus Correa: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>In reply to:</strong> <a href="23769.php">Jeff Squyres (jsquyres): "Re: [OMPI users] bind-to core warning even with numactl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23772.php">Gus Correa: "Re: [OMPI users] bind-to core warning even with numactl"</a>
<li><strong>Reply:</strong> <a href="23772.php">Gus Correa: "Re: [OMPI users] bind-to core warning even with numactl"</a>
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
