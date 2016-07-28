<?
$subject_val = "Re: [OMPI users] UDAPL 2.0 support";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  6 13:15:02 2010" -->
<!-- isoreceived="20100706171502" -->
<!-- sent="Tue, 06 Jul 2010 13:11:50 -0400" -->
<!-- isosent="20100706171150" -->
<!-- name="Don Kerr" -->
<!-- email="don.kerr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] UDAPL 2.0 support" -->
<!-- id="4C3363D6.2060908_at_oracle.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CD7C8F8-1A36-4F87-99DE-58A8BE158A7D_at_cisco.com" -->
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
<strong>From:</strong> Don Kerr (<em>don.kerr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-06 13:11:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13479.php">David Roundy: "[OMPI users] trouble using openmpi under slurm"</a>
<li><strong>Previous message:</strong> <a href="13477.php">Grzegorz Maj: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>In reply to:</strong> <a href="13476.php">Jeff Squyres: "Re: [OMPI users] UDAPL 2.0 support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
And Solaris has only implemented uDAPL 1.2.
<br>
<p>-DON
<br>
<p>On 07/06/10 08:00, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; We don't recommend using the udapl support in Linux; it is much better to use the native &quot;openib&quot; BTL that uses the verbs interface.  We do not do any udapl testing on Linux, as far as I know -- the udapl BTL exists mainly for Solaris.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 5, 2010, at 5:43 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear OpenMPI users,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; is UDAPL 2.0 supported by OpenMPI 1.4.2? Because in /etc/dat.conf file:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenIB-cma u1.2 nonthreadsafe default libdaplcma.so.1 dapl.1.2 &quot;ib0 0&quot; &quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; OpenIB-cma-1 u1.2 nonthreadsafe default libdaplcma.so.1 dapl.1.2 &quot;ib1 0&quot; &quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; OpenIB-mthca0-1 u1.2 nonthreadsafe default libdaplscm.so.1 dapl.1.2 &quot;mthca0 1&quot; &quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; OpenIB-mthca0-2 u1.2 nonthreadsafe default libdaplscm.so.1 dapl.1.2 &quot;mthca0 2&quot; &quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; OpenIB-mlx4_0-1 u1.2 nonthreadsafe default libdaplscm.so.1 dapl.1.2 &quot;mlx4_0 1&quot; &quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; OpenIB-mlx4_0-2 u1.2 nonthreadsafe default libdaplscm.so.1 dapl.1.2 &quot;mlx4_0 2&quot; &quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; OpenIB-ipath0-1 u1.2 nonthreadsafe default libdaplscm.so.1 dapl.1.2 &quot;ipath0 1&quot; &quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; OpenIB-ipath0-2 u1.2 nonthreadsafe default libdaplscm.so.1 dapl.1.2 &quot;ipath0 2&quot; &quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; OpenIB-ehca0-1 u1.2 nonthreadsafe default libdaplscm.so.1 dapl.1.2 &quot;ehca0 1&quot; &quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; OpenIB-iwarp u1.2 nonthreadsafe default libdaplcma.so.1 dapl.1.2 &quot;eth2 0&quot; &quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; ofa-v2-ib0 u2.0 nonthreadsafe default libdaplofa.so.2 dapl.2.0 &quot;ib0 0&quot; &quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; ofa-v2-ib1 u2.0 nonthreadsafe default libdaplofa.so.2 dapl.2.0 &quot;ib1 0&quot; &quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; ofa-v2-mthca0-1 u2.0 nonthreadsafe default libdaploscm.so.2 dapl.2.0 &quot;mthca0 1&quot; &quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; ofa-v2-mthca0-2 u2.0 nonthreadsafe default libdaploscm.so.2 dapl.2.0 &quot;mthca0 2&quot; &quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; ofa-v2-mlx4_0-1 u2.0 nonthreadsafe default libdaploscm.so.2 dapl.2.0 &quot;mlx4_0 1&quot; &quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; ofa-v2-mlx4_0-2 u2.0 nonthreadsafe default libdaploscm.so.2 dapl.2.0 &quot;mlx4_0 2&quot; &quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; ofa-v2-ipath0-1 u2.0 nonthreadsafe default libdaploscm.so.2 dapl.2.0 &quot;ipath0 1&quot; &quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; ofa-v2-ipath0-2 u2.0 nonthreadsafe default libdaploscm.so.2 dapl.2.0 &quot;ipath0 2&quot; &quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; ofa-v2-ehca0-1 u2.0 nonthreadsafe default libdaploscm.so.2 dapl.2.0 &quot;ehca0 1&quot; &quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; ofa-v2-iwarp u2.0 nonthreadsafe default libdaplofa.so.2 dapl.2.0 &quot;eth2 0&quot; &quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; it works only if i use 1.2 interface, not with 2.0 version. 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Parallel programmer
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Supercomputing Group
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; g.fatigati [AT] cineca.it           
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13479.php">David Roundy: "[OMPI users] trouble using openmpi under slurm"</a>
<li><strong>Previous message:</strong> <a href="13477.php">Grzegorz Maj: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>In reply to:</strong> <a href="13476.php">Jeff Squyres: "Re: [OMPI users] UDAPL 2.0 support"</a>
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
