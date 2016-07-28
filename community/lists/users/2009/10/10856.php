<?
$subject_val = "Re: [OMPI users] openmpi 1.4 and barrier";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  1 13:59:35 2009" -->
<!-- isoreceived="20091001175935" -->
<!-- sent="Thu, 1 Oct 2009 13:59:30 -0400" -->
<!-- isosent="20091001175930" -->
<!-- name="Michael Di Domenico" -->
<!-- email="mdidomenico4_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.4 and barrier" -->
<!-- id="e75d22a90910011059h1033f647s20615e3c549d5d54_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="171BA579-0AAE-4B47-BB5F-B07361EDF236_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.4 and barrier<br>
<strong>From:</strong> Michael Di Domenico (<em>mdidomenico4_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-01 13:59:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10857.php">Samuel K. Gutierrez: "Re: [OMPI users] memalign usage in OpenMPI and it's consequencesfor TotalVIew"</a>
<li><strong>Previous message:</strong> <a href="10855.php">Jeff Squyres: "Re: [OMPI users] memalign usage in OpenMPI and it's consequencesfor TotalVIew"</a>
<li><strong>In reply to:</strong> <a href="10854.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.4 and barrier"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm, i don't recall seeing that...
<br>
<p>On Thu, Oct 1, 2009 at 1:51 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; FWIW, I saw this bug to have race-condition-like behavior.  I could run a
</span><br>
<span class="quotelev1">&gt; few times and then it would work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 1, 2009, at 1:42 PM, Michael Di Domenico wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Oct 1, 2009 at 1:37 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Oct 1, 2009, at 1:24 PM, Michael Di Domenico wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I just upgraded to the devel snapshot of 1.4a1r22031
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; when i run a simple hello world with a barrier i get
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; btl_tcp_endpoint.c:484:mca_btl_tcp_endpoint_recv_connect_ack] received
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; unexpected process identifier
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I have seen this failure over the last day or three myself.  I'll file a
</span><br>
<span class="quotelev3">&gt;&gt; &gt; trac ticket about it.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; (all's fair in love, war, and trunk development snapshots!)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Okay, thanks...  Unfortunately i need the dev snap for slurm
</span><br>
<span class="quotelev2">&gt;&gt; intergration... :(
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10857.php">Samuel K. Gutierrez: "Re: [OMPI users] memalign usage in OpenMPI and it's consequencesfor TotalVIew"</a>
<li><strong>Previous message:</strong> <a href="10855.php">Jeff Squyres: "Re: [OMPI users] memalign usage in OpenMPI and it's consequencesfor TotalVIew"</a>
<li><strong>In reply to:</strong> <a href="10854.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.4 and barrier"</a>
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
