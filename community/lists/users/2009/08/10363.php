<?
$subject_val = "Re: [OMPI users] strange IMB runs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 14 11:18:31 2009" -->
<!-- isoreceived="20090814151831" -->
<!-- sent="Fri, 14 Aug 2009 11:18:26 -0400" -->
<!-- isosent="20090814151826" -->
<!-- name="Michael Di Domenico" -->
<!-- email="mdidomenico4_at_[hidden]" -->
<!-- subject="Re: [OMPI users] strange IMB runs" -->
<!-- id="e75d22a90908140818k9a4eaa1yf1d045f3a54fff76_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A83A9E5.6010501_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] strange IMB runs<br>
<strong>From:</strong> Michael Di Domenico (<em>mdidomenico4_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-14 11:18:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10364.php">Rolf Vandevaart: "Re: [OMPI users] an MPI process using about 12 file descriptors per neighbour processes - isn't it a bit too much?"</a>
<li><strong>Previous message:</strong> <a href="10362.php">Michael Di Domenico: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>In reply to:</strong> <a href="10345.php">Eugene Loh: "Re: [OMPI users] strange IMB runs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; One of the differences among MPI implementations is the default placement of
</span><br>
<span class="quotelev1">&gt; processes within the node.  E.g., should processes by default be collocated
</span><br>
<span class="quotelev1">&gt; on cores of the same socket or on cores of different sockets?  I don't know
</span><br>
<span class="quotelev1">&gt; if that issue is applicable here (that is, HP MPI vs Open MPI or on
</span><br>
<span class="quotelev1">&gt; Superdome architecture), but it's potentially an issue to look at.  With HP
</span><br>
<span class="quotelev1">&gt; MPI, mpirun has a -cpu_bind switch for controlling placement.  With Open
</span><br>
<span class="quotelev1">&gt; MPI, mpirun controls placement with -rankfile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; E.g., what happens if you try
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % cat rf1
</span><br>
<span class="quotelev1">&gt; rank 0=XX  slot=0
</span><br>
<span class="quotelev1">&gt; rank 1=XX  slot=1
</span><br>
<span class="quotelev1">&gt; % cat rf2
</span><br>
<span class="quotelev1">&gt; rank 0=XX  slot=0
</span><br>
<span class="quotelev1">&gt; rank 1=XX  slot=2
</span><br>
<span class="quotelev1">&gt; % cat rf3
</span><br>
<span class="quotelev1">&gt; rank 0=XX  slot=0
</span><br>
<span class="quotelev1">&gt; rank 1=XX  slot=3
</span><br>
<span class="quotelev1">&gt; [...etc...]
</span><br>
<span class="quotelev1">&gt; % mpirun -np 2 --mca btl self,sm --host XX,XX -rf rf1 $PWD/IMB-MPI1 pingpong
</span><br>
<span class="quotelev1">&gt; % mpirun -np 2 --mca btl self,sm --host XX,XX -rf rf2 $PWD/IMB-MPI1 pingpong
</span><br>
<span class="quotelev1">&gt; % mpirun -np 2 --mca btl self,sm --host XX,XX -rf rf3 $PWD/IMB-MPI1 pingpong
</span><br>
<span class="quotelev1">&gt; [...etc...]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where XX is the name of your node and you march through all the cores on
</span><br>
<span class="quotelev1">&gt; your Superdome node?
</span><br>
<p>I tried this, but it didn't seem to make a difference either
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10364.php">Rolf Vandevaart: "Re: [OMPI users] an MPI process using about 12 file descriptors per neighbour processes - isn't it a bit too much?"</a>
<li><strong>Previous message:</strong> <a href="10362.php">Michael Di Domenico: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>In reply to:</strong> <a href="10345.php">Eugene Loh: "Re: [OMPI users] strange IMB runs"</a>
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
