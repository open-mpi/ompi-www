<?
$subject_val = "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 10 18:54:46 2009" -->
<!-- isoreceived="20091210235446" -->
<!-- sent="Thu, 10 Dec 2009 18:54:41 -0500" -->
<!-- isosent="20091210235441" -->
<!-- name="Mark Bolstad" -->
<!-- email="the.render.dude_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun only works when -np &amp;lt;4 (Gus Correa)" -->
<!-- id="82dde0912101554l436d8040i35b09685a3a04ad1_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3902A721-94D6-491C-9D8A-F91CCE56A2BB_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)<br>
<strong>From:</strong> Mark Bolstad (<em>the.render.dude_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-10 18:54:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11517.php">Terry Dontje: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Previous message:</strong> <a href="11515.php">Eugene Loh: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>In reply to:</strong> <a href="11510.php">Jeff Squyres: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11515.php">Eugene Loh: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Some additional data:
<br>
<p>Without threads it still hangs, similar behavior as before.
<br>
<p>All of the tests were run on a system running FC11 with X5550 processors.
<br>
<p>I just reran on a node of a RHEL 5.3 cluster with E5530 processors (dual
<br>
Nehalam):
<br>
&nbsp;- openmpi 1.3.4 and gcc 4.1.2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- No issues: connectivity_c works through np = 128
<br>
<p>&nbsp;- openmpi 1.3.4 and gcc 4.4.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Hangs as before
<br>
<p>Anything else you want me to try;-)?
<br>
<p>Mark
<br>
<p>On Thu, Dec 10, 2009 at 5:20 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Dec 10, 2009, at 5:01 PM, Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Just a quick interjection, I also have a dual-quad Nehalem system, HT
</span><br>
<span class="quotelev3">&gt; &gt; &gt; on, 24GB ram, hand compiled 1.3.4 with options: --enable-mpi-threads
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --enable-mpi-f77=no --with-openib=no
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; With v1.3.4 I see roughly the same behavior, hello, ring work,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; connectivity fails randomly with np &gt;= 8. Turning on -v increased the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; success, but still hangs. np = 16 fails more often, and the hang is
</span><br>
<span class="quotelev3">&gt; &gt; &gt; random in which pair of processes are communicating.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; However, it seems to be related to the shared memory layer problem.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Running with -mca btl ^sm works consistently through np = 128.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note, too, that --enable-mpi-threads &quot;works&quot; but I would not say that it is
</span><br>
<span class="quotelev1">&gt; production-quality hardened yet.  IBM is looking into thread safety issues
</span><br>
<span class="quotelev1">&gt; to harden up this code.  If the same hangs can be observed without
</span><br>
<span class="quotelev1">&gt; --enable-mpi-threads, that would be a good data point.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11516/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11517.php">Terry Dontje: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Previous message:</strong> <a href="11515.php">Eugene Loh: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>In reply to:</strong> <a href="11510.php">Jeff Squyres: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11515.php">Eugene Loh: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
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
