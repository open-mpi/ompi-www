<?
$subject_val = "Re: [OMPI users] openmpi-1.7.3 still not accept cpus-per-proc";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 31 19:05:48 2013" -->
<!-- isoreceived="20131031230548" -->
<!-- sent="Fri, 1 Nov 2013 08:05:36 +0900" -->
<!-- isosent="20131031230536" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.7.3 still not accept cpus-per-proc" -->
<!-- id="OF1C2C11A2.B6C81493-ON49257C15.007EA3ED-49257C15.007EE088_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20131031142419.GE86366_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-1.7.3 still not accept cpus-per-proc<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20openmpi-1.7.3%20still%20not%20accept%20cpus-per-proc"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2013-10-31 19:05:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/11/22893.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<li><strong>Previous message:</strong> <a href="22891.php">Jeff Hammond: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>In reply to:</strong> <a href="22885.php">Nathan Hjelm: "Re: [OMPI users] openmpi-1.7.3 still not accept cpus-per-proc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/11/22925.php">tmishima_at_[hidden]: "[OMPI users] LAMA of openmpi-1.7.3 is unstable"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/11/22925.php">tmishima_at_[hidden]: "[OMPI users] LAMA of openmpi-1.7.3 is unstable"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you, Nathan.
<br>
<p>I'll wait until 1.7.4 release.
<br>
<p>Regards,
<br>
Tetsuya Mishima
<br>
<p><p><span class="quotelev1">&gt; Looks like it is fixed in the development trunk but not 1.7.3. We can fix
</span><br>
<span class="quotelev1">&gt; this in 1.7.4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan Hjelm
</span><br>
<span class="quotelev1">&gt; HPC-3, LANL
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Oct 31, 2013 at 04:17:30PM +0900, tmishima_at_[hidden]
</span><br>
wrote:
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hollo, I asked Ralph to re-enable cpus-per-proc of openmpi-1.7.x one
</span><br>
year
<br>
<span class="quotelev2">&gt; &gt; ago.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; According to Ticket #3350, it shows &quot;(closed defect: fixed)&quot;.
</span><br>
<span class="quotelev2">&gt; &gt; So I tried latest openmpi-1.7.3, but I find that -cpus-per-proc is
</span><br>
still
<br>
<span class="quotelev2">&gt; &gt; not accepted like bellow.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 4 -x OMP_NUM_THREADS=2 -cpus-per-proc 2 -report-bindings
</span><br>
MyProg
<br>
<span class="quotelev2">&gt; &gt; mpirun: Error: unknown option &quot;-p&quot;
</span><br>
<span class="quotelev2">&gt; &gt; Type 'mpirun --help' for usage.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Do you really fix it?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Tetsuya Mishima
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/11/22893.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<li><strong>Previous message:</strong> <a href="22891.php">Jeff Hammond: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>In reply to:</strong> <a href="22885.php">Nathan Hjelm: "Re: [OMPI users] openmpi-1.7.3 still not accept cpus-per-proc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/11/22925.php">tmishima_at_[hidden]: "[OMPI users] LAMA of openmpi-1.7.3 is unstable"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/11/22925.php">tmishima_at_[hidden]: "[OMPI users] LAMA of openmpi-1.7.3 is unstable"</a>
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
