<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul  5 12:21:02 2007" -->
<!-- isoreceived="20070705162102" -->
<!-- sent="Thu, 5 Jul 2007 17:19:20 +0100 (WEST)" -->
<!-- isosent="20070705161920" -->
<!-- name="Ricardo Reis" -->
<!-- email="rreis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)" -->
<!-- id="alpine.DEB.0.99.0707051711520.2384_at_localhost" -->
<!-- charset="iso-8859-15" -->
<!-- inreplyto="15B2DD29-8D6E-413F-A9E6-C107507C1C9F_at_cisco.com" -->
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
<strong>From:</strong> Ricardo Reis (<em>rreis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-05 12:19:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3578.php">George Bosilca: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Previous message:</strong> <a href="3576.php">Biagio Cosenza: "[OMPI users] TCP Nagle algorithm and latency"</a>
<li><strong>In reply to:</strong> <a href="3574.php">Jeff Squyres: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3578.php">George Bosilca: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Reply:</strong> <a href="3578.php">George Bosilca: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 5 Jul 2007, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Yoinks -- that's not good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suspect that our included memory manager is borking things up
</span><br>
<span class="quotelev1">&gt; (Brian: can you comment?).  Can you try configuring OMPI --without-
</span><br>
<span class="quotelev1">&gt; memory-manager?
</span><br>
<p>Yes. It compiles and links OK (execution of mpif90).
<br>
<p>Trying to run (mpirun -np &lt;p&gt; &lt;exec&gt;) gives segmentation fault.
<br>
<p>Ompi_info gives output and then segfaults. ompi_info --all segfaults 
<br>
immediatly.
<br>
<p>Added ompi_info log (without --all)
<br>
Added strace ompi_info --all log
<br>
Added strace mpirun log
<br>
<p>&nbsp;&nbsp;greets,
<br>
<p>&nbsp;&nbsp;Ricardo Reis
<br>
<p>&nbsp;&nbsp;'Non Serviam'
<br>
<p>&nbsp;&nbsp;PhD student @ Lasef
<br>
&nbsp;&nbsp;Computational Fluid Dynamics, High Performance Computing, Turbulence
<br>
&nbsp;&nbsp;&lt;<a href="http://www.lasef.ist.utl.pt">http://www.lasef.ist.utl.pt</a>&gt;
<br>
<p>&nbsp;&nbsp;&amp;
<br>
<p>&nbsp;&nbsp;Cultural Instigator @ R&#225;dio Zero
<br>
&nbsp;&nbsp;<a href="http://radio.ist.utl.pt">http://radio.ist.utl.pt</a>
<br>



<br><hr>
<ul>
<li>APPLICATION/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3577/mpirun.log.bz2">mpirun.log.bz2</a>
</ul>
<!-- attachment="mpirun.log.bz2" -->
<hr>
<ul>
<li>APPLICATION/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3577/ompi_info.log.bz2">ompi_info.log.bz2</a>
</ul>
<!-- attachment="ompi_info.log.bz2" -->
<hr>
<ul>
<li>APPLICATION/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3577/ompi_info_all.log.bz2">ompi_info_all.log.bz2</a>
</ul>
<!-- attachment="ompi_info_all.log.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3578.php">George Bosilca: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Previous message:</strong> <a href="3576.php">Biagio Cosenza: "[OMPI users] TCP Nagle algorithm and latency"</a>
<li><strong>In reply to:</strong> <a href="3574.php">Jeff Squyres: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3578.php">George Bosilca: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Reply:</strong> <a href="3578.php">George Bosilca: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
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
