<?
$subject_val = "Re: [OMPI users] getc in openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 12 15:01:45 2010" -->
<!-- isoreceived="20100512190145" -->
<!-- sent="Wed, 12 May 2010 16:01:36 -0300" -->
<!-- isosent="20100512190136" -->
<!-- name="Fernando Lemos" -->
<!-- email="fernandotcl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] getc in openmpi" -->
<!-- id="AANLkTinah2N5etk46z1_YLjln3nObGZ8l-aP0485gFq6_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8FCBF366-6824-4699-8675-F18D230A50A9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] getc in openmpi<br>
<strong>From:</strong> Fernando Lemos (<em>fernandotcl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-12 15:01:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13035.php">Jeff Squyres: "Re: [OMPI users] getc in openmpi"</a>
<li><strong>Previous message:</strong> <a href="13033.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<li><strong>In reply to:</strong> <a href="13030.php">Jeff Squyres: "Re: [OMPI users] getc in openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13035.php">Jeff Squyres: "Re: [OMPI users] getc in openmpi"</a>
<li><strong>Reply:</strong> <a href="13035.php">Jeff Squyres: "Re: [OMPI users] getc in openmpi"</a>
<li><strong>Reply:</strong> <a href="13053.php">Ralph Castain: "Re: [OMPI users] getc in openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, May 12, 2010 at 2:51 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On May 12, 2010, at 1:48 PM, Hanjun Kim wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am working on parallelizing my sequential program using OpenMPI.
</span><br>
<span class="quotelev2">&gt;&gt; Although I got performance speedup using many threads, there was
</span><br>
<span class="quotelev2">&gt;&gt; slowdown on a small number of threads like 4 threads.
</span><br>
<span class="quotelev2">&gt;&gt; I found that it is because getc worked much slower than sequential
</span><br>
<span class="quotelev2">&gt;&gt; version. Does OpenMPI override or wrap getc function?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No.
</span><br>
<p>Please correct me if I'm wrong, but I believe OpenMPI sends
<br>
stdin/stdout from the other ranks back to rank 0 so that the output is
<br>
displayed as the stdin of mpirun and the other way around with
<br>
stdout/stderr. Otherwise it wouldn't be possible to even see the
<br>
output from the other ranks. I guess that could make things slower.
<br>
<p>MPICH-2  had a command line option that told mpiexec who would receive
<br>
stdin (all processes or only some of them) so that you could do things
<br>
like mpiexec &lt;bigfile and not worry (too much) about the overhead of
<br>
distributing the contents of bigfile across the network.
<br>
<p>Regards,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13035.php">Jeff Squyres: "Re: [OMPI users] getc in openmpi"</a>
<li><strong>Previous message:</strong> <a href="13033.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<li><strong>In reply to:</strong> <a href="13030.php">Jeff Squyres: "Re: [OMPI users] getc in openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13035.php">Jeff Squyres: "Re: [OMPI users] getc in openmpi"</a>
<li><strong>Reply:</strong> <a href="13035.php">Jeff Squyres: "Re: [OMPI users] getc in openmpi"</a>
<li><strong>Reply:</strong> <a href="13053.php">Ralph Castain: "Re: [OMPI users] getc in openmpi"</a>
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
