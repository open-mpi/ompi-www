<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 13 13:50:26 2006" -->
<!-- isoreceived="20060913175026" -->
<!-- sent="Wed, 13 Sep 2006 19:50:14 +0200" -->
<!-- isosent="20060913175014" -->
<!-- name="Christian Kauhaus" -->
<!-- email="ckauhaus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI + NAT" -->
<!-- id="20060913175014.GC11466_at_cluster.inf-ra.uni-jena.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="c8c0af0609130641y3a2e33daxc6609b63d055356_at_mail.gmail.com" -->
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
<strong>From:</strong> Christian Kauhaus (<em>ckauhaus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-13 13:50:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1863.php">Wael Sinno: "[OMPI users] Error initializing application linked with UnixODBC"</a>
<li><strong>Previous message:</strong> <a href="1861.php">Prakash Velayutham: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>In reply to:</strong> <a href="1856.php">Gunnar Johansson: "[OMPI users] OpenMPI + NAT"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gunnar Johansson &lt;info_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt;Note also that this is not a crucial problem, we could also make all
</span><br>
<span class="quotelev1">&gt;nodes &quot;external&quot;, but a solution with NAT would be quite practical.
</span><br>
<p>Trying to launch MPI processes using port forwarding is currenly a call
<br>
for trouble, since IP address and port information is usually embedded
<br>
into the Open MPI startup protocol. 
<br>
<p>It would probably a better solution to use a job manager like SGE which
<br>
accepts jobs on a head node (which has a public IP address) and
<br>
distributes the jobs on the cluster nodes.
<br>
<p>Christian
<br>
<p><pre>
-- 
Dipl.-Inf. Christian Kauhaus                               &lt;&gt;&lt;
Lehrstuhl fuer Rechnerarchitektur und -kommunikation 
Institut fuer Informatik * Ernst-Abbe-Platz 1-2 * D-07743 Jena
Tel: +49 3641 9 46376  *  Fax: +49 3641 9 46372   *  Raum 3217
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1863.php">Wael Sinno: "[OMPI users] Error initializing application linked with UnixODBC"</a>
<li><strong>Previous message:</strong> <a href="1861.php">Prakash Velayutham: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>In reply to:</strong> <a href="1856.php">Gunnar Johansson: "[OMPI users] OpenMPI + NAT"</a>
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
