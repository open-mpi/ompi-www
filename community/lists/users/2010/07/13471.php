<?
$subject_val = "[OMPI users] UDAPL 2.0 support";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  5 05:43:31 2010" -->
<!-- isoreceived="20100705094331" -->
<!-- sent="Mon, 5 Jul 2010 11:43:22 +0200" -->
<!-- isosent="20100705094322" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="[OMPI users] UDAPL 2.0 support" -->
<!-- id="AANLkTils34R-GyNlcqjzfPxworKOWQ12LPZozeCjjf6__at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] UDAPL 2.0 support<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-05 05:43:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13472.php">David Zhang: "Re: [OMPI users] Open MPI, cannot get the results from workers"</a>
<li><strong>Previous message:</strong> <a href="13470.php">Jack Bryan: "[OMPI users] Open MPI, cannot get the results from workers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13476.php">Jeff Squyres: "Re: [OMPI users] UDAPL 2.0 support"</a>
<li><strong>Reply:</strong> <a href="13476.php">Jeff Squyres: "Re: [OMPI users] UDAPL 2.0 support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI users,
<br>
<p>is UDAPL 2.0 supported by OpenMPI 1.4.2? Because in /etc/dat.conf file:
<br>
<p><p>OpenIB-cma u1.2 nonthreadsafe default libdaplcma.so.1 dapl.1.2 &quot;ib0 0&quot; &quot;&quot;
<br>
OpenIB-cma-1 u1.2 nonthreadsafe default libdaplcma.so.1 dapl.1.2 &quot;ib1 0&quot; &quot;&quot;
<br>
OpenIB-mthca0-1 u1.2 nonthreadsafe default libdaplscm.so.1 dapl.1.2 &quot;mthca0
<br>
1&quot; &quot;&quot;
<br>
OpenIB-mthca0-2 u1.2 nonthreadsafe default libdaplscm.so.1 dapl.1.2 &quot;mthca0
<br>
2&quot; &quot;&quot;
<br>
OpenIB-mlx4_0-1 u1.2 nonthreadsafe default libdaplscm.so.1 dapl.1.2 &quot;mlx4_0
<br>
1&quot; &quot;&quot;
<br>
OpenIB-mlx4_0-2 u1.2 nonthreadsafe default libdaplscm.so.1 dapl.1.2 &quot;mlx4_0
<br>
2&quot; &quot;&quot;
<br>
OpenIB-ipath0-1 u1.2 nonthreadsafe default libdaplscm.so.1 dapl.1.2 &quot;ipath0
<br>
1&quot; &quot;&quot;
<br>
OpenIB-ipath0-2 u1.2 nonthreadsafe default libdaplscm.so.1 dapl.1.2 &quot;ipath0
<br>
2&quot; &quot;&quot;
<br>
OpenIB-ehca0-1 u1.2 nonthreadsafe default libdaplscm.so.1 dapl.1.2 &quot;ehca0 1&quot;
<br>
&quot;&quot;
<br>
OpenIB-iwarp u1.2 nonthreadsafe default libdaplcma.so.1 dapl.1.2 &quot;eth2 0&quot; &quot;&quot;
<br>
ofa-v2-ib0 u2.0 nonthreadsafe default libdaplofa.so.2 dapl.2.0 &quot;ib0 0&quot; &quot;&quot;
<br>
ofa-v2-ib1 u2.0 nonthreadsafe default libdaplofa.so.2 dapl.2.0 &quot;ib1 0&quot; &quot;&quot;
<br>
ofa-v2-mthca0-1 u2.0 nonthreadsafe default libdaploscm.so.2 dapl.2.0 &quot;mthca0
<br>
1&quot; &quot;&quot;
<br>
ofa-v2-mthca0-2 u2.0 nonthreadsafe default libdaploscm.so.2 dapl.2.0 &quot;mthca0
<br>
2&quot; &quot;&quot;
<br>
ofa-v2-mlx4_0-1 u2.0 nonthreadsafe default libdaploscm.so.2 dapl.2.0 &quot;mlx4_0
<br>
1&quot; &quot;&quot;
<br>
ofa-v2-mlx4_0-2 u2.0 nonthreadsafe default libdaploscm.so.2 dapl.2.0 &quot;mlx4_0
<br>
2&quot; &quot;&quot;
<br>
ofa-v2-ipath0-1 u2.0 nonthreadsafe default libdaploscm.so.2 dapl.2.0 &quot;ipath0
<br>
1&quot; &quot;&quot;
<br>
ofa-v2-ipath0-2 u2.0 nonthreadsafe default libdaploscm.so.2 dapl.2.0 &quot;ipath0
<br>
2&quot; &quot;&quot;
<br>
ofa-v2-ehca0-1 u2.0 nonthreadsafe default libdaploscm.so.2 dapl.2.0 &quot;ehca0
<br>
1&quot; &quot;&quot;
<br>
ofa-v2-iwarp u2.0 nonthreadsafe default libdaplofa.so.2 dapl.2.0 &quot;eth2 0&quot; &quot;&quot;
<br>
<p><p>it works only if i use 1.2 interface, not with 2.0 version.
<br>
<p>Thanks in advance.
<br>
<p><p><pre>
-- 
Ing. Gabriele Fatigati
Parallel programmer
CINECA Systems &amp; Tecnologies Department
Supercomputing Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13471/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13472.php">David Zhang: "Re: [OMPI users] Open MPI, cannot get the results from workers"</a>
<li><strong>Previous message:</strong> <a href="13470.php">Jack Bryan: "[OMPI users] Open MPI, cannot get the results from workers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13476.php">Jeff Squyres: "Re: [OMPI users] UDAPL 2.0 support"</a>
<li><strong>Reply:</strong> <a href="13476.php">Jeff Squyres: "Re: [OMPI users] UDAPL 2.0 support"</a>
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
