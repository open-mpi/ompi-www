<?
$subject_val = "Re: [OMPI devel] open mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  3 09:10:28 2015" -->
<!-- isoreceived="20150203141028" -->
<!-- sent="Tue, 3 Feb 2015 06:10:26 -0800" -->
<!-- isosent="20150203141026" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] open mpi" -->
<!-- id="CAMD57ofHJ5ptkFuMX+UWTFk+Gys-xZTtESU05WdEZtu5UZPkCw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CALQyCD=REfT0oz4uqKiJZdNMbWKaomN52_Rdw88wjo=ctN+3mQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] open mpi<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-03 09:10:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16919.php">Cyrille DIBAMOU MBEUYO: "Re: [OMPI devel] HELP in OpenMPI - for PH.D research"</a>
<li><strong>Previous message:</strong> <a href="16917.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] HELP in OpenMPI - for PH.D research"</a>
<li><strong>In reply to:</strong> <a href="16909.php">khushi popat: "[OMPI devel] open mpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Let's see if I understand you correctly. You are running &quot;mpirun&quot; on the
<br>
master node, with your applications running on other nodes in the cluster.
<br>
In that situation, mpirun is using TCP sockets to communicate with the OMPI
<br>
daemons on the remote nodes, and you would like to know which Ethernet
<br>
interface on the master node is being used for that purpose.
<br>
<p>Correct? If so, then add &quot;-mca oob_base_verbose 30&quot; to your cmd line.
<br>
You'll get a bunch of output as it will report everything about the
<br>
messaging system, but you'll early on see which interface is being used. I
<br>
would suggest just running it with one non-master node and doing a
<br>
&quot;hostname&quot; command to limit the noise.
<br>
<p>The selection of interface is done the same way every time, so it will wind
<br>
up picking the same interface unless the backend nodes change their
<br>
connectivity.
<br>
<p><p><p>On Mon, Feb 2, 2015 at 10:52 PM, khushi popat &lt;popat.khushi_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; can anyone tell how to get idea about which interface of master node is
</span><br>
<span class="quotelev1">&gt; being used while i m running open mpi program on cluster from master node ??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanking you
</span><br>
<span class="quotelev1">&gt; khushi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16909.php">http://www.open-mpi.org/community/lists/devel/2015/02/16909.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16918/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16919.php">Cyrille DIBAMOU MBEUYO: "Re: [OMPI devel] HELP in OpenMPI - for PH.D research"</a>
<li><strong>Previous message:</strong> <a href="16917.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] HELP in OpenMPI - for PH.D research"</a>
<li><strong>In reply to:</strong> <a href="16909.php">khushi popat: "[OMPI devel] open mpi"</a>
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
