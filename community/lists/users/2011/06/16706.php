<?
$subject_val = "Re: [OMPI users] Deadlock with barrier und RMA";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 11 10:39:26 2011" -->
<!-- isoreceived="20110611143926" -->
<!-- sent="Sat, 11 Jun 2011 16:39:21 +0200" -->
<!-- isosent="20110611143921" -->
<!-- name="Constantinos Makassikis" -->
<!-- email="cmakassikis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Deadlock with barrier und RMA" -->
<!-- id="BANLkTinLmyW9Ze6-UW-Tc_0QnPSKcOe+bw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20110611151705.GC3672_at_telvanni.starfleet" -->
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
<strong>Subject:</strong> Re: [OMPI users] Deadlock with barrier und RMA<br>
<strong>From:</strong> Constantinos Makassikis (<em>cmakassikis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-11 10:39:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16707.php">Shiqing Fan: "Re: [OMPI users] mpi.h:: OMPI_HAVE_FORTRAN_LOGICAL / INTEGER / REAL are	set to 0 (zero)"</a>
<li><strong>Previous message:</strong> <a href="16705.php">Ole Kliemann: "Re: [OMPI users] Deadlock with barrier und RMA"</a>
<li><strong>In reply to:</strong> <a href="16705.php">Ole Kliemann: "Re: [OMPI users] Deadlock with barrier und RMA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16712.php">Jeff Squyres: "Re: [OMPI users] Deadlock with barrier und RMA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, Jun 11, 2011 at 5:17 PM, Ole Kliemann &lt;
<br>
ole-ompi-2011_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Sat, Jun 11, 2011 at 07:24:24AM -0600, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Oh my - that is such an old version! Any reason for using it instead of
</span><br>
<span class="quotelev1">&gt; something more recent?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using the cluster of the university where I work und I'm not the
</span><br>
<span class="quotelev1">&gt; admin. So I'm going with what is installed there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Provided your account is available over all the nodes of the cluster
<br>
(commonly through a shared filesystem (e.g. NFS)),
<br>
you can easily install and use a more recent version of OpenMPI.
<br>
<p>mkdir -p ${HOME}/ompi-1.5.3 &amp;&amp; ./configure --prefix=${HOME}/ompi-1.5.3
<br>
make
<br>
make install
<br>
<p>You should not forget to modify your &quot;PATH&quot; and &quot;LD_LIBRARY_PATH&quot;
<br>
environment variables in your &quot;.bash_profile&quot;.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's the first time I'm using MPI. Before I complain to the admins about
</span><br>
<span class="quotelev1">&gt; old versions or anything else, I'd like to check whether my code
</span><br>
<span class="quotelev1">&gt; actually should be okay in regard to MPI specifications.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jun 11, 2011, at 8:43 AM, Ole Kliemann wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi everyone!
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I'm trying to use MPI on a cluster running OpenMPI 1.2.4 and starting
</span><br>
<span class="quotelev3">&gt; &gt; &gt; processes through PBSPro_11.0.2.110766. I've been running into a couple
</span><br>
<span class="quotelev3">&gt; &gt; &gt; of performance and deadlock problems and like to check whether I'm
</span><br>
<span class="quotelev3">&gt; &gt; &gt; making a mistake.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; One of the deadlocks I managed to boil down to the attached example. I
</span><br>
<span class="quotelev3">&gt; &gt; &gt; run it on 8 cores. It usually deadlocks with all except one process
</span><br>
<span class="quotelev3">&gt; &gt; &gt; showing
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     start barrier
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; as last output.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The one process out of order shows:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     start getting local
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; My question at this point is simply whether this is expected behaviour
</span><br>
<span class="quotelev3">&gt; &gt; &gt; of OpenMPI.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks in advance!
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Ole
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &lt;mpi_barrier.cc&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16706/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16707.php">Shiqing Fan: "Re: [OMPI users] mpi.h:: OMPI_HAVE_FORTRAN_LOGICAL / INTEGER / REAL are	set to 0 (zero)"</a>
<li><strong>Previous message:</strong> <a href="16705.php">Ole Kliemann: "Re: [OMPI users] Deadlock with barrier und RMA"</a>
<li><strong>In reply to:</strong> <a href="16705.php">Ole Kliemann: "Re: [OMPI users] Deadlock with barrier und RMA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16712.php">Jeff Squyres: "Re: [OMPI users] Deadlock with barrier und RMA"</a>
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
