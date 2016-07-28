<?
$subject_val = "Re: [OMPI users] OpenMPI MPMD Support";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 29 14:16:32 2016" -->
<!-- isoreceived="20160429181632" -->
<!-- sent="Fri, 29 Apr 2016 15:16:25 -0300" -->
<!-- isosent="20160429181625" -->
<!-- name="Fabricio Cannini" -->
<!-- email="fcannini_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI MPMD Support" -->
<!-- id="5723A4F9.5060002_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="190C59C272C796498BD7424037D878718FCC341D_at_P-EXMB6-DC21.corp.sgi.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI MPMD Support<br>
<strong>From:</strong> Fabricio Cannini (<em>fcannini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-29 14:16:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29057.php">Ralph Castain: "Re: [OMPI users] OpenMPI MPMD Support"</a>
<li><strong>Previous message:</strong> <a href="29055.php">Scott Shaw: "Re: [OMPI users] OpenMPI MPMD Support"</a>
<li><strong>In reply to:</strong> <a href="29055.php">Scott Shaw: "Re: [OMPI users] OpenMPI MPMD Support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29057.php">Ralph Castain: "Re: [OMPI users] OpenMPI MPMD Support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 29-04-2016 14:59, Scott Shaw wrote:
<br>
<span class="quotelev1">&gt; I am using a &#150;app file to run a serial application on N number of
</span><br>
<span class="quotelev1">&gt; compute nodes and each compute node has 24 cores available. If I only
</span><br>
<span class="quotelev1">&gt; want to use one core to execute the serial app I get a &#147;not enough slots
</span><br>
<span class="quotelev1">&gt; available&#148; error when running OMPI.  How do you define the slots
</span><br>
<span class="quotelev1">&gt; parameter to inform OMPI that a total of 24 cores are available per node
</span><br>
<span class="quotelev1">&gt; when using a app file. I need to contain all parameters in the &#150;app file
</span><br>
<span class="quotelev1">&gt; since any additional options passed on the mpirun command line are ignored.
</span><br>
<p>Hello Scott
<br>
<p>You may want to take a look at gnu parallel:
<br>
<a href="https://www.gnu.org/software/parallel/">https://www.gnu.org/software/parallel/</a>
<br>
<p>[ ]'s
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29057.php">Ralph Castain: "Re: [OMPI users] OpenMPI MPMD Support"</a>
<li><strong>Previous message:</strong> <a href="29055.php">Scott Shaw: "Re: [OMPI users] OpenMPI MPMD Support"</a>
<li><strong>In reply to:</strong> <a href="29055.php">Scott Shaw: "Re: [OMPI users] OpenMPI MPMD Support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29057.php">Ralph Castain: "Re: [OMPI users] OpenMPI MPMD Support"</a>
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
