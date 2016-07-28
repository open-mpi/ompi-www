<?
$subject_val = "Re: [OMPI users] UDAPL 2.0 support";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  6 07:59:50 2010" -->
<!-- isoreceived="20100706115950" -->
<!-- sent="Tue, 6 Jul 2010 08:00:00 -0400" -->
<!-- isosent="20100706120000" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] UDAPL 2.0 support" -->
<!-- id="4CD7C8F8-1A36-4F87-99DE-58A8BE158A7D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTils34R-GyNlcqjzfPxworKOWQ12LPZozeCjjf6__at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] UDAPL 2.0 support<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-06 08:00:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13477.php">Grzegorz Maj: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>Previous message:</strong> <a href="13475.php">jody: "Re: [OMPI users] Open MPI, cannot get the results from workers"</a>
<li><strong>In reply to:</strong> <a href="13471.php">Gabriele Fatigati: "[OMPI users] UDAPL 2.0 support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13478.php">Don Kerr: "Re: [OMPI users] UDAPL 2.0 support"</a>
<li><strong>Reply:</strong> <a href="13478.php">Don Kerr: "Re: [OMPI users] UDAPL 2.0 support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We don't recommend using the udapl support in Linux; it is much better to use the native &quot;openib&quot; BTL that uses the verbs interface.  We do not do any udapl testing on Linux, as far as I know -- the udapl BTL exists mainly for Solaris.
<br>
<p><p>On Jul 5, 2010, at 5:43 AM, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; Dear OpenMPI users,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is UDAPL 2.0 supported by OpenMPI 1.4.2? Because in /etc/dat.conf file:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OpenIB-cma u1.2 nonthreadsafe default libdaplcma.so.1 dapl.1.2 &quot;ib0 0&quot; &quot;&quot;
</span><br>
<span class="quotelev1">&gt; OpenIB-cma-1 u1.2 nonthreadsafe default libdaplcma.so.1 dapl.1.2 &quot;ib1 0&quot; &quot;&quot;
</span><br>
<span class="quotelev1">&gt; OpenIB-mthca0-1 u1.2 nonthreadsafe default libdaplscm.so.1 dapl.1.2 &quot;mthca0 1&quot; &quot;&quot;
</span><br>
<span class="quotelev1">&gt; OpenIB-mthca0-2 u1.2 nonthreadsafe default libdaplscm.so.1 dapl.1.2 &quot;mthca0 2&quot; &quot;&quot;
</span><br>
<span class="quotelev1">&gt; OpenIB-mlx4_0-1 u1.2 nonthreadsafe default libdaplscm.so.1 dapl.1.2 &quot;mlx4_0 1&quot; &quot;&quot;
</span><br>
<span class="quotelev1">&gt; OpenIB-mlx4_0-2 u1.2 nonthreadsafe default libdaplscm.so.1 dapl.1.2 &quot;mlx4_0 2&quot; &quot;&quot;
</span><br>
<span class="quotelev1">&gt; OpenIB-ipath0-1 u1.2 nonthreadsafe default libdaplscm.so.1 dapl.1.2 &quot;ipath0 1&quot; &quot;&quot;
</span><br>
<span class="quotelev1">&gt; OpenIB-ipath0-2 u1.2 nonthreadsafe default libdaplscm.so.1 dapl.1.2 &quot;ipath0 2&quot; &quot;&quot;
</span><br>
<span class="quotelev1">&gt; OpenIB-ehca0-1 u1.2 nonthreadsafe default libdaplscm.so.1 dapl.1.2 &quot;ehca0 1&quot; &quot;&quot;
</span><br>
<span class="quotelev1">&gt; OpenIB-iwarp u1.2 nonthreadsafe default libdaplcma.so.1 dapl.1.2 &quot;eth2 0&quot; &quot;&quot;
</span><br>
<span class="quotelev1">&gt; ofa-v2-ib0 u2.0 nonthreadsafe default libdaplofa.so.2 dapl.2.0 &quot;ib0 0&quot; &quot;&quot;
</span><br>
<span class="quotelev1">&gt; ofa-v2-ib1 u2.0 nonthreadsafe default libdaplofa.so.2 dapl.2.0 &quot;ib1 0&quot; &quot;&quot;
</span><br>
<span class="quotelev1">&gt; ofa-v2-mthca0-1 u2.0 nonthreadsafe default libdaploscm.so.2 dapl.2.0 &quot;mthca0 1&quot; &quot;&quot;
</span><br>
<span class="quotelev1">&gt; ofa-v2-mthca0-2 u2.0 nonthreadsafe default libdaploscm.so.2 dapl.2.0 &quot;mthca0 2&quot; &quot;&quot;
</span><br>
<span class="quotelev1">&gt; ofa-v2-mlx4_0-1 u2.0 nonthreadsafe default libdaploscm.so.2 dapl.2.0 &quot;mlx4_0 1&quot; &quot;&quot;
</span><br>
<span class="quotelev1">&gt; ofa-v2-mlx4_0-2 u2.0 nonthreadsafe default libdaploscm.so.2 dapl.2.0 &quot;mlx4_0 2&quot; &quot;&quot;
</span><br>
<span class="quotelev1">&gt; ofa-v2-ipath0-1 u2.0 nonthreadsafe default libdaploscm.so.2 dapl.2.0 &quot;ipath0 1&quot; &quot;&quot;
</span><br>
<span class="quotelev1">&gt; ofa-v2-ipath0-2 u2.0 nonthreadsafe default libdaploscm.so.2 dapl.2.0 &quot;ipath0 2&quot; &quot;&quot;
</span><br>
<span class="quotelev1">&gt; ofa-v2-ehca0-1 u2.0 nonthreadsafe default libdaploscm.so.2 dapl.2.0 &quot;ehca0 1&quot; &quot;&quot;
</span><br>
<span class="quotelev1">&gt; ofa-v2-iwarp u2.0 nonthreadsafe default libdaplofa.so.2 dapl.2.0 &quot;eth2 0&quot; &quot;&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; it works only if i use 1.2 interface, not with 2.0 version. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Parallel programmer
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Supercomputing Group
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; g.fatigati [AT] cineca.it           
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13477.php">Grzegorz Maj: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>Previous message:</strong> <a href="13475.php">jody: "Re: [OMPI users] Open MPI, cannot get the results from workers"</a>
<li><strong>In reply to:</strong> <a href="13471.php">Gabriele Fatigati: "[OMPI users] UDAPL 2.0 support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13478.php">Don Kerr: "Re: [OMPI users] UDAPL 2.0 support"</a>
<li><strong>Reply:</strong> <a href="13478.php">Don Kerr: "Re: [OMPI users] UDAPL 2.0 support"</a>
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
