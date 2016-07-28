<?
$subject_val = "Re: [OMPI users] Detecting Node Failure";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 20 20:46:08 2013" -->
<!-- isoreceived="20130621004608" -->
<!-- sent="Thu, 20 Jun 2013 18:46:03 -0600" -->
<!-- isosent="20130621004603" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Detecting Node Failure" -->
<!-- id="CAMD57odLX6MzBukzb+8qwaLwj93UNq9tr-A+NPA-EvChDFH5vQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F6956E0_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Detecting Node Failure<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-20 20:46:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22170.php">thomas.forde_at_[hidden]: "[OMPI users] New Cluster Centos 6.4 with Openmpi 1.6.4"</a>
<li><strong>Previous message:</strong> <a href="22168.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Detecting Node Failure"</a>
<li><strong>In reply to:</strong> <a href="22168.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Detecting Node Failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22191.php">Andreas Schäfer: "Re: [OMPI users] Detecting Node Failure"</a>
<li><strong>Reply:</strong> <a href="22191.php">Andreas Schäfer: "Re: [OMPI users] Detecting Node Failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We will also be supporting that in the developer's trunk fairly soon, and
<br>
that will appear later on in the 1.9 series.
<br>
<p><p><p>On Thu, Jun 20, 2013 at 4:18 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Not at present, no.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But you might want to look at a fork of the OMPI code base that was
</span><br>
<span class="quotelev1">&gt; exploring fault resilience issues:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://fault-tolerance.org/">http://fault-tolerance.org/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 20, 2013, at 5:57 PM, Andreas Sch&#228;fer &lt;gentryx_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;  wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 14:59 Thu 20 Jun     , Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It should detect and abort - what version are you using?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Would it be possible to call MPI_Comm_disconnect() in the case the
</span><br>
<span class="quotelev2">&gt; &gt; communicator in question is an intercom -- without having OMPI abort?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm asking because if we had a possibility to dynamically
</span><br>
<span class="quotelev2">&gt; &gt; connect/disconnect nodes in a robust way, then we could build
</span><br>
<span class="quotelev2">&gt; &gt; fault-resilient apps on top of that.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best
</span><br>
<span class="quotelev2">&gt; &gt; -Andreas
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; ==========================================================
</span><br>
<span class="quotelev2">&gt; &gt; Andreas Sch&#228;fer
</span><br>
<span class="quotelev2">&gt; &gt; HPC and Grid Computing
</span><br>
<span class="quotelev2">&gt; &gt; Chair of Computer Science 3
</span><br>
<span class="quotelev2">&gt; &gt; Friedrich-Alexander-Universit&#228;t Erlangen-N&#252;rnberg, Germany
</span><br>
<span class="quotelev2">&gt; &gt; +49 9131 85-27910
</span><br>
<span class="quotelev2">&gt; &gt; PGP/GPG key via keyserver
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.libgeodecomp.org">http://www.libgeodecomp.org</a>
</span><br>
<span class="quotelev2">&gt; &gt; ==========================================================
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (\___/)
</span><br>
<span class="quotelev2">&gt; &gt; (+'.'+)
</span><br>
<span class="quotelev2">&gt; &gt; (&quot;)_(&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; This is Bunny. Copy and paste Bunny into your
</span><br>
<span class="quotelev2">&gt; &gt; signature to help him gain world domination!
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22169/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22170.php">thomas.forde_at_[hidden]: "[OMPI users] New Cluster Centos 6.4 with Openmpi 1.6.4"</a>
<li><strong>Previous message:</strong> <a href="22168.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Detecting Node Failure"</a>
<li><strong>In reply to:</strong> <a href="22168.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Detecting Node Failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22191.php">Andreas Schäfer: "Re: [OMPI users] Detecting Node Failure"</a>
<li><strong>Reply:</strong> <a href="22191.php">Andreas Schäfer: "Re: [OMPI users] Detecting Node Failure"</a>
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
