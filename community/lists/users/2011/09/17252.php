<?
$subject_val = "Re: [OMPI users] #cpus/socket";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 13 07:35:36 2011" -->
<!-- isoreceived="20110913113536" -->
<!-- sent="Tue, 13 Sep 2011 13:35:31 +0200" -->
<!-- isosent="20110913113531" -->
<!-- name="nn3003" -->
<!-- email="nn3003_at_[hidden]" -->
<!-- subject="Re: [OMPI users] #cpus/socket" -->
<!-- id="20110913133531.BE05D76F_at_pobox.sk" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4E6F3DEB.9090202_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] #cpus/socket<br>
<strong>From:</strong> nn3003 (<em>nn3003_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-13 07:35:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17253.php">Jeff Squyres: "Re: [OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions"</a>
<li><strong>Previous message:</strong> <a href="17251.php">Jeff Squyres: "Re: [OMPI users] btl_openib_ipaddr_include broken in 1.4.4rc2?"</a>
<li><strong>In reply to:</strong> <a href="17250.php">Brice Goglin: "Re: [OMPI users] #cpus/socket"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for info. I was thinking it could be some wrong interpretation of per cpu core count.
<br>
I will try newer library.
<br>
&#194;&#160;
<br>
&#194;&#160;
<br>
&#194;&#160;
<br>
______________________________________________________________
<br>
<span class="quotelev1">&gt; Od: &quot;Brice Goglin&quot; 
</span><br>
<span class="quotelev1">&gt; Komu: Open MPI Users 
</span><br>
<span class="quotelev1">&gt; D&#195;&#161;tum: 13.09.2011 13:28
</span><br>
<span class="quotelev1">&gt; Predmet: Re: [OMPI users] #cpus/socket
</span><br>
<span class="quotelev1">&gt;
</span><br>
Le 13/09/2011 18:59, Peter Kjellstr&#195;&#182;m a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; On Tuesday, September 13, 2011 09:07:32 AM nn3003 wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello !
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev2">&gt;&gt; I am running wrf model on 4x AMD 6172 which is 12 core CPU. I use OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; 1.4.3 and libgomp 4.3.4. I have binaries compiled for shared-memory and
</span><br>
<span class="quotelev2">&gt;&gt; distributed-memory (OpenMP and OpenMPI) I use following command
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 4 --cpus-per-proc 6 --report-bindings --bysocket wrf.exe
</span><br>
<span class="quotelev2">&gt;&gt; It works ok and in top i see there are 4 wrf.exe and each has 6 threads on
</span><br>
<span class="quotelev2">&gt;&gt; cpu0-5 12-17 24-29 36-41 However, if I want to run 8 or more e.g.
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 4 --cpus-per-proc 12 --report-bindings --bysocket wrf.exe
</span><br>
<span class="quotelev2">&gt;&gt; I get error
</span><br>
<span class="quotelev2">&gt;&gt; Your job has requested more cpus per process(rank) than there
</span><br>
<span class="quotelev2">&gt;&gt; are cpus in a socket:
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; Cpus/rank: 8
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; #cpus/socket: 6
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev2">&gt;&gt; Why is that ? There are 12 cores per socket in AMD 6172.
</span><br>
<span class="quotelev1">&gt; In reality a 12 core Magnycours is two 6 core dies on a socket. I'm guessing 
</span><br>
<span class="quotelev1">&gt; that the topology code sees your 4x 12 core as a 8x 6 core.
</span><br>
<p>plpa-info reports 4*6cores:
<br>
&nbsp;&#194;&#160;Number of processor sockets: 4
<br>
&nbsp;&#194;&#160;Number of processors online: 48
<br>
&nbsp;&#194;&#160;Number of processors offline: 0 (no topology information available)
<br>
&nbsp;&#194;&#160;Socket 0 (ID 0): 6 cores (max core ID: 5)
<br>
&nbsp;&#194;&#160;Socket 1 (ID 1): 6 cores (max core ID: 5)
<br>
&nbsp;&#194;&#160;Socket 2 (ID 2): 6 cores (max core ID: 5)
<br>
&nbsp;&#194;&#160;Socket 3 (ID 3): 6 cores (max core ID: 5)
<br>
<p>This should be fixed with Open MPI 1.5.2+ with hwloc.
<br>
<p>Brice
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<p><p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17252/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17253.php">Jeff Squyres: "Re: [OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions"</a>
<li><strong>Previous message:</strong> <a href="17251.php">Jeff Squyres: "Re: [OMPI users] btl_openib_ipaddr_include broken in 1.4.4rc2?"</a>
<li><strong>In reply to:</strong> <a href="17250.php">Brice Goglin: "Re: [OMPI users] #cpus/socket"</a>
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
