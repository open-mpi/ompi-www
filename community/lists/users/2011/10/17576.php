<?
$subject_val = "Re: [OMPI users] Application in a cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 19 12:30:30 2011" -->
<!-- isoreceived="20111019163030" -->
<!-- sent="Wed, 19 Oct 2011 18:30:19 +0200" -->
<!-- isosent="20111019163019" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Application in a cluster" -->
<!-- id="7B52DD90-4752-40CB-AC44-39DE12819665_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CACcUr4e-Gw1AXg-CJaZOrjCBx6X8-6koJJF1FWbM8GngCE4N0A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Application in a cluster<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-19 12:30:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17577.php">ramu: "[OMPI users] running osu mpi benchmark tests on Infiniband setup"</a>
<li><strong>Previous message:</strong> <a href="17575.php">Eugene Loh: "Re: [OMPI users] Application in a cluster"</a>
<li><strong>In reply to:</strong> <a href="17574.php">Jorge Jaramillo: "[OMPI users] Application in a cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17579.php">Gus Correa: "Re: [OMPI users] Application in a cluster"</a>
<li><strong>Reply:</strong> <a href="17579.php">Gus Correa: "Re: [OMPI users] Application in a cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 19.10.2011 um 17:57 schrieb Jorge Jaramillo:
<br>
<p><span class="quotelev1">&gt; Hello everyone, I have a doubt about how to execute a parallel application on a cluster. I used the 'mpirun' to execute some applications and they worked, but I guess this command only is useful with MPI applications.
</span><br>
<p>correct.
<br>
<p><p><span class="quotelev1">&gt; My question is, How do I execute a program that has no MPI statements on the cluster?
</span><br>
<p>&quot;In the cluster&quot; could also mean &quot;How to submit a job to a cluster, which would then in turn runs local on a granted machine&quot;. But I think you mean this in the context, that you have just a bunch of machines with just MPI installed.
<br>
<p><p><span class="quotelev1">&gt; If it is not possible, how do I change the structure of the program so it can be executed as a parallel application?
</span><br>
<p>This depends on the application: sometimes you could just parallelize some loops, in some cases you have to change the used algorithm to replace it with one which can easily be parallelized, maybe the data structure needs to be changed and you have to think about how to distribute data to the nodes,...
<br>
<p>It might also be, that using Open MP (which works only on one and the same machine) will give you a parallel version faster. <a href="http://openmp.org/wp/">http://openmp.org/wp/</a> Nowadays many compilers support it. Nevertheless you have to touch your application by hand and modify the source.
<br>
<p>-- Reuti
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17577.php">ramu: "[OMPI users] running osu mpi benchmark tests on Infiniband setup"</a>
<li><strong>Previous message:</strong> <a href="17575.php">Eugene Loh: "Re: [OMPI users] Application in a cluster"</a>
<li><strong>In reply to:</strong> <a href="17574.php">Jorge Jaramillo: "[OMPI users] Application in a cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17579.php">Gus Correa: "Re: [OMPI users] Application in a cluster"</a>
<li><strong>Reply:</strong> <a href="17579.php">Gus Correa: "Re: [OMPI users] Application in a cluster"</a>
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
