<?
$subject_val = "Re: [OMPI users] OpenMPI and SLURM";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 13 02:31:17 2013" -->
<!-- isoreceived="20130113073117" -->
<!-- sent="Sun, 13 Jan 2013 08:29:56 +0100" -->
<!-- isosent="20130113072956" -->
<!-- name="Beat Rubischon" -->
<!-- email="beat_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI and SLURM" -->
<!-- id="50F26274.80805_at_0x1b.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5985022A-393A-4C61-B3CE-7B9FE1101393_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI and SLURM<br>
<strong>From:</strong> Beat Rubischon (<em>beat_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-13 02:29:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21116.php">Jerry Mersel: "[OMPI users] restarting checkpointed applications"</a>
<li><strong>Previous message:</strong> <a href="21114.php">Ralph Castain: "Re: [OMPI users] OpenMPI and SLURM"</a>
<li><strong>In reply to:</strong> <a href="21114.php">Ralph Castain: "Re: [OMPI users] OpenMPI and SLURM"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph!
<br>
<p>On 12.01.13 17:29, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Sadly, we incorrectly removed the required grpcomm component to make that work.
</span><br>
<span class="quotelev1">&gt; Meantime, you can use the PMI support in its place.
</span><br>
<p>Success. I used the following options, --with-pmi won't accept a path:
<br>
<p>./configure ... --with-pmi CFLAGS=&quot;-I/usr/include/slurm&quot;
<br>
<p>Thanks for your help, you made my day!
<br>
Beat
<br>
<p><pre>
-- 
     \|/                           Beat Rubischon &lt;beat_at_[hidden]&gt;
   ( 0-0 )                             <a href="http://www.0x1b.ch/~beat/">http://www.0x1b.ch/~beat/</a>
oOO--(_)--OOo---------------------------------------------------
Meine Erlebnisse, Gedanken und Traeume: <a href="http://www.0x1b.ch/blog/">http://www.0x1b.ch/blog/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21116.php">Jerry Mersel: "[OMPI users] restarting checkpointed applications"</a>
<li><strong>Previous message:</strong> <a href="21114.php">Ralph Castain: "Re: [OMPI users] OpenMPI and SLURM"</a>
<li><strong>In reply to:</strong> <a href="21114.php">Ralph Castain: "Re: [OMPI users] OpenMPI and SLURM"</a>
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
