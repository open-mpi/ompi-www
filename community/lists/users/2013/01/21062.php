<?
$subject_val = "Re: [OMPI users] grpcomm component hier gone...";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  3 10:07:40 2013" -->
<!-- isoreceived="20130103150740" -->
<!-- sent="Thu, 03 Jan 2013 16:07:31 +0100" -->
<!-- isosent="20130103150731" -->
<!-- name="Ake Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] grpcomm component hier gone..." -->
<!-- id="1357225651.3355.30.camel_at_lurvas.hpc2n.umu.se" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="EB1725D9-D74D-4346-906C-28EECC401334_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] grpcomm component hier gone...<br>
<strong>From:</strong> Ake Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-03 10:07:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21063.php">Ralph Castain: "Re: [OMPI users] grpcomm component hier gone..."</a>
<li><strong>Previous message:</strong> <a href="21061.php">Ralph Castain: "Re: [OMPI users] mpirun - All Nodes Filled"</a>
<li><strong>In reply to:</strong> <a href="21060.php">Ralph Castain: "Re: [OMPI users] grpcomm component hier gone..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21063.php">Ralph Castain: "Re: [OMPI users] grpcomm component hier gone..."</a>
<li><strong>Reply:</strong> <a href="21063.php">Ralph Castain: "Re: [OMPI users] grpcomm component hier gone..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2013-01-03 at 07:00 -0800, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; On Jan 3, 2013, at 6:52 AM, Ake Sandgren &lt;ake.sandgren_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, 2013-01-03 at 06:18 -0800, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jan 3, 2013, at 3:01 AM, Ake Sandgren &lt;ake.sandgren_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Thu, 2013-01-03 at 11:54 +0100, Ake Sandgren wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Thu, 2013-01-03 at 11:15 +0100, Ake Sandgren wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Hi!
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; The grpcomm component hier seems to have vanished between 1.6.1 and
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 1.6.3.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Why?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; It seems that the version of slurm we are using (not the latest at the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; moment) is using it for startup.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It should be using PMI if you are directly launching processes via srun, and should not be using hier any more.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Shouldn't the grpcomm pmi component be turned on by default then, if it
</span><br>
<span class="quotelev2">&gt; &gt; is needed?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It should be
</span><br>
<p>Well, it isn't :-)
<br>
configure says:
<br>
--- MCA component grpcomm:pmi (m4 configuration macro)
<br>
checking for MCA component grpcomm:pmi compile mode... dso
<br>
checking if user requested PMI support... no
<br>
checking if MCA component grpcomm:pmi can compile... no
<br>
<p><span class="quotelev2">&gt; &gt; So what is the real problem here?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you have PMI installed and running on your system? I think that is the source of the trouble - if PMI isn't running, then this will fail.
</span><br>
<p>Not sure what you mean here. slurm's pmi module is available (and Intel
<br>
MPI can use it if i point it to it).
<br>
<p>Anyway, I think that if there is code that tries to use the hier
<br>
component it shouldn't have been removed.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21063.php">Ralph Castain: "Re: [OMPI users] grpcomm component hier gone..."</a>
<li><strong>Previous message:</strong> <a href="21061.php">Ralph Castain: "Re: [OMPI users] mpirun - All Nodes Filled"</a>
<li><strong>In reply to:</strong> <a href="21060.php">Ralph Castain: "Re: [OMPI users] grpcomm component hier gone..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21063.php">Ralph Castain: "Re: [OMPI users] grpcomm component hier gone..."</a>
<li><strong>Reply:</strong> <a href="21063.php">Ralph Castain: "Re: [OMPI users] grpcomm component hier gone..."</a>
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
