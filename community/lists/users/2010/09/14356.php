<?
$subject_val = "Re: [OMPI users] a question about [MPI]IO on systems without network filesystem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 29 14:29:39 2010" -->
<!-- isoreceived="20100929182939" -->
<!-- sent="Wed, 29 Sep 2010 20:29:34 +0200" -->
<!-- isosent="20100929182934" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] a question about [MPI]IO on systems without network filesystem" -->
<!-- id="AANLkTik9AJgRyDBh7HB0MH_7--dGmU8U3GNLgv1ZkqZN_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CA30839.2050805_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] a question about [MPI]IO on systems without network filesystem<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-29 14:29:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14357.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="14355.php">Shamis, Pavel: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>In reply to:</strong> <a href="14352.php">Paul Kapinos: "[OMPI users] a question about [MPI]IO on systems without network filesystem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14360.php">Terry Frankcombe: "Re: [OMPI users] a question about [MPI]IO on systems without	network filesystem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Paul
<br>
<p><span class="quotelev1">&gt; Is it possible to configure/run OpenMPI in a such way, that only _one_
</span><br>
<span class="quotelev1">&gt; process (e.g. master) performs real disk I/O, and other processes sends the
</span><br>
<span class="quotelev1">&gt; data to the master which works as an agent?
</span><br>
<p>It is possible to run OpenMPI this way, but it is not a matter of configuration,
<br>
but of implementation alone.
<br>
<p><span class="quotelev1">&gt; Of course this would impacts the performance, because all data must be send
</span><br>
<span class="quotelev1">&gt; over network, and the master may became a bottleneck. But is such scenario -
</span><br>
<span class="quotelev1">&gt; IO of all processes bundled to one &#160;process - practicable at all?
</span><br>
<p>I think this question can only be answered by trying, because it
<br>
depends strongly
<br>
on the volume of your messages and the quality of your hardware
<br>
(network and disk speed)
<br>
<p>Jody
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14357.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="14355.php">Shamis, Pavel: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>In reply to:</strong> <a href="14352.php">Paul Kapinos: "[OMPI users] a question about [MPI]IO on systems without network filesystem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14360.php">Terry Frankcombe: "Re: [OMPI users] a question about [MPI]IO on systems without	network filesystem"</a>
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
