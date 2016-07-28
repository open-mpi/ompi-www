<?
$subject_val = "Re: [OMPI users] grpcomm component hier gone...";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  3 10:14:23 2013" -->
<!-- isoreceived="20130103151423" -->
<!-- sent="Thu, 3 Jan 2013 07:14:16 -0800" -->
<!-- isosent="20130103151416" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] grpcomm component hier gone..." -->
<!-- id="5CE0F8DF-00B4-41D0-808B-6B9098AAB5CE_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1357225651.3355.30.camel_at_lurvas.hpc2n.umu.se" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-03 10:14:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21064.php">Chuck Mosher: "Re: [OMPI users] mpirun - All Nodes Filled"</a>
<li><strong>Previous message:</strong> <a href="21062.php">Ake Sandgren: "Re: [OMPI users] grpcomm component hier gone..."</a>
<li><strong>In reply to:</strong> <a href="21062.php">Ake Sandgren: "Re: [OMPI users] grpcomm component hier gone..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21065.php">Ake Sandgren: "Re: [OMPI users] grpcomm component hier gone..."</a>
<li><strong>Reply:</strong> <a href="21065.php">Ake Sandgren: "Re: [OMPI users] grpcomm component hier gone..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 3, 2013, at 7:07 AM, Ake Sandgren &lt;ake.sandgren_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, 2013-01-03 at 07:00 -0800, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 3, 2013, at 6:52 AM, Ake Sandgren &lt;ake.sandgren_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, 2013-01-03 at 06:18 -0800, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jan 3, 2013, at 3:01 AM, Ake Sandgren &lt;ake.sandgren_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Thu, 2013-01-03 at 11:54 +0100, Ake Sandgren wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Thu, 2013-01-03 at 11:15 +0100, Ake Sandgren wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; The grpcomm component hier seems to have vanished between 1.6.1 and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1.6.3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Why?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; It seems that the version of slurm we are using (not the latest at the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; moment) is using it for startup.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It should be using PMI if you are directly launching processes via srun, and should not be using hier any more.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Shouldn't the grpcomm pmi component be turned on by default then, if it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is needed?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It should be
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, it isn't :-)
</span><br>
<span class="quotelev1">&gt; configure says:
</span><br>
<span class="quotelev1">&gt; --- MCA component grpcomm:pmi (m4 configuration macro)
</span><br>
<span class="quotelev1">&gt; checking for MCA component grpcomm:pmi compile mode... dso
</span><br>
<span class="quotelev1">&gt; checking if user requested PMI support... no
</span><br>
<span class="quotelev1">&gt; checking if MCA component grpcomm:pmi can compile... no
</span><br>
<p>Ah - that is the problem. You need to configure --with-pmi=&lt;wherever-slurms-pmi.h-is-located&gt;
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So what is the real problem here?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Do you have PMI installed and running on your system? I think that is the source of the trouble - if PMI isn't running, then this will fail.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not sure what you mean here. slurm's pmi module is available (and Intel
</span><br>
<span class="quotelev1">&gt; MPI can use it if i point it to it).
</span><br>
<p>Yeah, we need to be pointed to it just like Intel.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyway, I think that if there is code that tries to use the hier
</span><br>
<span class="quotelev1">&gt; component it shouldn't have been removed.
</span><br>
<p>Agreed - it looks like something picked up an unintended change. Just trying to help you work with it as I don't know when a 1.6.4 will occur.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21064.php">Chuck Mosher: "Re: [OMPI users] mpirun - All Nodes Filled"</a>
<li><strong>Previous message:</strong> <a href="21062.php">Ake Sandgren: "Re: [OMPI users] grpcomm component hier gone..."</a>
<li><strong>In reply to:</strong> <a href="21062.php">Ake Sandgren: "Re: [OMPI users] grpcomm component hier gone..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21065.php">Ake Sandgren: "Re: [OMPI users] grpcomm component hier gone..."</a>
<li><strong>Reply:</strong> <a href="21065.php">Ake Sandgren: "Re: [OMPI users] grpcomm component hier gone..."</a>
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
