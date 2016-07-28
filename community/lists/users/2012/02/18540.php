<?
$subject_val = "Re: [OMPI users] Using orterun to start jobs with numactl";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 20 17:43:29 2012" -->
<!-- isoreceived="20120220224329" -->
<!-- sent="Mon, 20 Feb 2012 15:43:21 -0700" -->
<!-- isosent="20120220224321" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using orterun to start jobs with numactl" -->
<!-- id="201DDA9A-EDD5-4454-9074-7D5E7634164F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F42A77B.2090509_at_att.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] Using orterun to start jobs with numactl<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-20 17:43:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18541.php">Jeffrey Squyres: "Re: [OMPI users] ROMIO Podcast"</a>
<li><strong>Previous message:</strong> <a href="18539.php">Rayson Ho: "Re: [OMPI users] ROMIO Podcast"</a>
<li><strong>In reply to:</strong> <a href="18532.php">Jeff Layton: "[OMPI users] Using orterun to start jobs with numactl"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You probably want to use the rank file mapper and/or the slot_list capability. See the following for more info:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=tuning#using-paffinity-v1.3">http://www.open-mpi.org/faq/?category=tuning#using-paffinity-v1.3</a>
<br>
<p><p>On Feb 20, 2012, at 1:05 PM, Jeff Layton wrote:
<br>
<p><span class="quotelev1">&gt; Good afternoon,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm working with some AMD Interlagos nodes (16-core, 4-socket),
</span><br>
<span class="quotelev1">&gt; and I want to bind processes to cores in specific layouts. These
</span><br>
<span class="quotelev1">&gt; may not be in logical order so I need to be able to my MPI app
</span><br>
<span class="quotelev1">&gt; and point it to specific cores on specific nodes (although the
</span><br>
<span class="quotelev1">&gt; core ordering is the same for all nodes).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm assuming I need to &quot;manually&quot; start the processes using
</span><br>
<span class="quotelev1">&gt; orted (or orterun) and numactl on the specific cores. Since I've
</span><br>
<span class="quotelev1">&gt; never used orted or orterun to start jobs and I'm struggling with
</span><br>
<span class="quotelev1">&gt; the man pages a bit - any suggestions?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18541.php">Jeffrey Squyres: "Re: [OMPI users] ROMIO Podcast"</a>
<li><strong>Previous message:</strong> <a href="18539.php">Rayson Ho: "Re: [OMPI users] ROMIO Podcast"</a>
<li><strong>In reply to:</strong> <a href="18532.php">Jeff Layton: "[OMPI users] Using orterun to start jobs with numactl"</a>
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
