<?
$subject_val = "Re: [OMPI users] SM btl slows down bandwidth?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 12 18:27:57 2008" -->
<!-- isoreceived="20080812222757" -->
<!-- sent="Wed, 13 Aug 2008 00:27:53 +0200 (CEST)" -->
<!-- isosent="20080812222753" -->
<!-- name="Dani&#235;l Mantione" -->
<!-- email="daniel.mantione_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SM btl slows down bandwidth?" -->
<!-- id="Pine.LNX.4.63.0808130024520.26939_at_druifje.clustervision.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D6C9675D-F4A6-4B80-B378-F065B4DF66AB_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] SM btl slows down bandwidth?<br>
<strong>From:</strong> Dani&#235;l Mantione (<em>daniel.mantione_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-12 18:27:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6324.php">Gus Correa: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>Previous message:</strong> <a href="6322.php">George Bosilca: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>In reply to:</strong> <a href="6322.php">George Bosilca: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6324.php">Gus Correa: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 13 Aug 2008, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Daniel,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open IB is one of the few devices that allow local communications (instead of
</span><br>
<span class="quotelev1">&gt; using shared memory). As the latency looks OK, I supposed that small messages
</span><br>
<span class="quotelev1">&gt; always use shared memory, while large ones get stripped over sm and openib.
</span><br>
<span class="quotelev1">&gt; Can you run a test without openib to confirm this ?
</span><br>
<p>This gives exactly the same scores as with OpenIB enabled. I.e. the openib 
<br>
btl is doesn't interfere with the sm btl in a negative way, it just seems 
<br>
that the sm btl is for some reason quite a bit slower than the OpenIB btl.
<br>
<p>Dani&#235;l
<br>
<p>[cvsupport_at_extern src]$ mpirun -np 8 --mca btl self,sm -hostfile hostfile \
<br>
./IMB-MPI1.openmpi -npmin 8 PingPong
<br>
<p>#---------------------------------------------------
<br>
# Benchmarking PingPong
<br>
# #processes = 2
<br>
# ( 6 additional processes waiting in MPI_Barrier)
<br>
#---------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#bytes #repetitions      t[usec]   Mbytes/sec
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0         1000         0.85         0.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1         1000         0.95         1.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2         1000         0.95         2.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4         1000         0.95         4.01
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8         1000         0.95         8.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16         1000         1.10        13.82
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32         1000         1.13        27.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64         1000         1.13        54.11
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128         1000         1.25        97.62
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;256         1000         1.56       156.65
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;512         1000         1.94       251.23
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1024         1000         2.94       332.16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2048         1000         4.48       435.81
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4096         1000         6.96       561.08
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8192         1000        11.18       698.98
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16384         1000        18.80       831.01
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32768         1000        34.60       903.31
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;65536          640        60.58      1031.71
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;131072          320       112.12      1114.91
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;262144          160       215.67      1159.17
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;524288           80       423.87      1179.61
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1048576           40       858.35      1165.03
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2097152           20      1765.20      1133.02
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4194304           10      4049.80       987.70
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6324.php">Gus Correa: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>Previous message:</strong> <a href="6322.php">George Bosilca: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>In reply to:</strong> <a href="6322.php">George Bosilca: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6324.php">Gus Correa: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
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
