<?
$subject_val = "Re: [OMPI users] ompi-restart failed";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 14 02:47:11 2010" -->
<!-- isoreceived="20100614064711" -->
<!-- sent="Mon, 14 Jun 2010 15:47:05 +0900" -->
<!-- isosent="20100614064705" -->
<!-- name="Nguyen Toan" -->
<!-- email="nguyentoan1508_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi-restart failed" -->
<!-- id="AANLkTilvhMAPGS6X7VIRhn1DGiTl_mpXikD1c9f-j3Ee_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTilKHa9fpBiNDtaL_tpBWtShsf5soVvHWzisSIgD_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-06-14 02:47:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13320.php">Nguyen Toan: "[OMPI users] How to checkpoint atomic function in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="13318.php">Nysal Jan: "Re: [OMPI users] Problem with compilation : statically linked applications"</a>
<li><strong>In reply to:</strong> <a href="13240.php">Nguyen Toan: "Re: [OMPI users] ompi-restart failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13674.php">Josh Hursey: "Re: [OMPI users] ompi-restart failed"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13674.php">Josh Hursey: "Re: [OMPI users] ompi-restart failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
I finally figured out the answer. I just put the parameter &quot;-machinefile
<br>
host&quot; in the &quot;ompi-restart&quot; command and it restarted correctly. So is it
<br>
unable to restart multi-threaded application on 1 node in OpenMPI?
<br>
<p>Nguyen Toan
<br>
<p>On Tue, Jun 8, 2010 at 12:07 AM, Nguyen Toan &lt;nguyentoan1508_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Sorry, I just want to add 2 more things:
</span><br>
<span class="quotelev1">&gt; + I tried configure with and without --enable-ft-thread but nothing changed
</span><br>
<span class="quotelev1">&gt; + I also applied this patch for OpenMPI here and reinstalled but I got the
</span><br>
<span class="quotelev1">&gt; same error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/raw-attachment/ticket/2139/v1.4-preload-part1.diff">https://svn.open-mpi.org/trac/ompi/raw-attachment/ticket/2139/v1.4-preload-part1.diff</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Somebody helps? Thank you very much.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nguyen Toan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jun 7, 2010 at 11:51 PM, Nguyen Toan &lt;nguyentoan1508_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello everyone,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using OpenMPI 1.4.2 with BLCR 0.8.2 to test checkpointing on 2 nodes
</span><br>
<span class="quotelev2">&gt;&gt; but it failed to restart (Segmentation fault).
</span><br>
<span class="quotelev2">&gt;&gt; Here are the details concerning my problem:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; + OS: Centos 5.4
</span><br>
<span class="quotelev2">&gt;&gt; + OpenMPI configure:
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --with-ft=cr --enable-ft-thread --enable-mpi-threads \
</span><br>
<span class="quotelev2">&gt;&gt; --with-blcr=/home/nguyen/opt/blcr
</span><br>
<span class="quotelev2">&gt;&gt; --with-blcr-libdir=/home/nguyen/opt/blcr/lib \
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/home/nguyen/opt/openmpi \
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev2">&gt;&gt; + mpirun -am ft-enable-cr -machinefile host ./test
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I checkpointed the test program using &quot;ompi-checkpoint -v -s PID&quot; and the
</span><br>
<span class="quotelev2">&gt;&gt; checkpoint file was created successfully. However it failed to restart using
</span><br>
<span class="quotelev2">&gt;&gt; ompi-restart:
</span><br>
<span class="quotelev2">&gt;&gt; *&quot;mpirun noticed that process rank 0 with PID 21242 on node rc014.local
</span><br>
<span class="quotelev2">&gt;&gt; exited on signal 11 (Segmentation fault)&quot;
</span><br>
<span class="quotelev2">&gt;&gt; *
</span><br>
<span class="quotelev2">&gt;&gt; Did I miss something in the installation of OpenMPI?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Nguyen Toan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13319/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13320.php">Nguyen Toan: "[OMPI users] How to checkpoint atomic function in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="13318.php">Nysal Jan: "Re: [OMPI users] Problem with compilation : statically linked applications"</a>
<li><strong>In reply to:</strong> <a href="13240.php">Nguyen Toan: "Re: [OMPI users] ompi-restart failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13674.php">Josh Hursey: "Re: [OMPI users] ompi-restart failed"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13674.php">Josh Hursey: "Re: [OMPI users] ompi-restart failed"</a>
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
