<?
$subject_val = "Re: [OMPI users] ompi-restart failed";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  7 11:07:38 2010" -->
<!-- isoreceived="20100607150738" -->
<!-- sent="Tue, 8 Jun 2010 00:07:33 +0900" -->
<!-- isosent="20100607150733" -->
<!-- name="Nguyen Toan" -->
<!-- email="nguyentoan1508_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi-restart failed" -->
<!-- id="AANLkTilKHa9fpBiNDtaL_tpBWtShsf5soVvHWzisSIgD_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTim9RGFfS_rCFDYKHVz0vSnLt86upHVMqg3reU7N_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ompi-restart failed<br>
<strong>From:</strong> Nguyen Toan (<em>nguyentoan1508_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-07 11:07:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13241.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault in	MPI_Finalize	with	IB	hardware and memory manager."</a>
<li><strong>Previous message:</strong> <a href="13239.php">Nguyen Toan: "[OMPI users] ompi-restart failed"</a>
<li><strong>In reply to:</strong> <a href="13239.php">Nguyen Toan: "[OMPI users] ompi-restart failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13319.php">Nguyen Toan: "Re: [OMPI users] ompi-restart failed"</a>
<li><strong>Reply:</strong> <a href="13319.php">Nguyen Toan: "Re: [OMPI users] ompi-restart failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, I just want to add 2 more things:
<br>
+ I tried configure with and without --enable-ft-thread but nothing changed
<br>
+ I also applied this patch for OpenMPI here and reinstalled but I got the
<br>
same error
<br>
<a href="https://svn.open-mpi.org/trac/ompi/raw-attachment/ticket/2139/v1.4-preload-part1.diff">https://svn.open-mpi.org/trac/ompi/raw-attachment/ticket/2139/v1.4-preload-part1.diff</a>
<br>
<p>Somebody helps? Thank you very much.
<br>
<p>Nguyen Toan
<br>
<p>On Mon, Jun 7, 2010 at 11:51 PM, Nguyen Toan &lt;nguyentoan1508_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hello everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using OpenMPI 1.4.2 with BLCR 0.8.2 to test checkpointing on 2 nodes
</span><br>
<span class="quotelev1">&gt; but it failed to restart (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; Here are the details concerning my problem:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; + OS: Centos 5.4
</span><br>
<span class="quotelev1">&gt; + OpenMPI configure:
</span><br>
<span class="quotelev1">&gt; ./configure --with-ft=cr --enable-ft-thread --enable-mpi-threads \
</span><br>
<span class="quotelev1">&gt; --with-blcr=/home/nguyen/opt/blcr
</span><br>
<span class="quotelev1">&gt; --with-blcr-libdir=/home/nguyen/opt/blcr/lib \
</span><br>
<span class="quotelev1">&gt; --prefix=/home/nguyen/opt/openmpi \
</span><br>
<span class="quotelev1">&gt; --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev1">&gt; + mpirun -am ft-enable-cr -machinefile host ./test
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I checkpointed the test program using &quot;ompi-checkpoint -v -s PID&quot; and the
</span><br>
<span class="quotelev1">&gt; checkpoint file was created successfully. However it failed to restart using
</span><br>
<span class="quotelev1">&gt; ompi-restart:
</span><br>
<span class="quotelev1">&gt; *&quot;mpirun noticed that process rank 0 with PID 21242 on node rc014.local
</span><br>
<span class="quotelev1">&gt; exited on signal 11 (Segmentation fault)&quot;
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; Did I miss something in the installation of OpenMPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Nguyen Toan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13240/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13241.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault in	MPI_Finalize	with	IB	hardware and memory manager."</a>
<li><strong>Previous message:</strong> <a href="13239.php">Nguyen Toan: "[OMPI users] ompi-restart failed"</a>
<li><strong>In reply to:</strong> <a href="13239.php">Nguyen Toan: "[OMPI users] ompi-restart failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13319.php">Nguyen Toan: "Re: [OMPI users] ompi-restart failed"</a>
<li><strong>Reply:</strong> <a href="13319.php">Nguyen Toan: "Re: [OMPI users] ompi-restart failed"</a>
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
