<?
$subject_val = "Re: [OMPI users] heterogenous cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  2 11:47:38 2011" -->
<!-- isoreceived="20110202164738" -->
<!-- sent="Wed, 02 Feb 2011 08:47:34 -0800" -->
<!-- isosent="20110202164734" -->
<!-- name="David Mathog" -->
<!-- email="mathog_at_[hidden]" -->
<!-- subject="Re: [OMPI users] heterogenous cluster" -->
<!-- id="E1Pkfri-0000CA-H3_at_mendel.bio.caltech.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] heterogenous cluster" -->
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
<strong>Subject:</strong> Re: [OMPI users] heterogenous cluster<br>
<strong>From:</strong> David Mathog (<em>mathog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-02 11:47:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15487.php">Samuel K. Gutierrez: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>Previous message:</strong> <a href="15485.php">Prentice Bisbal: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<li><strong>Maybe in reply to:</strong> <a href="15464.php">jody: "[OMPI users] heterogenous cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15488.php">jody: "Re: [OMPI users] heterogenous cluster"</a>
<li><strong>Reply:</strong> <a href="15488.php">jody: "Re: [OMPI users] heterogenous cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
jody &lt;jody.xha_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; How can i force OpenMPI to be built as a 32Bit application on a 64Bit
</span><br>
machine?
<br>
<p>THe easiest way is not to - just copy over a build from a 32 bit
<br>
machine, it will run on your 64 bit machine if the proper 32 bit
<br>
libraries have been installed there.  Otherwise,  you need to put -m32
<br>
on the gcc commmand lines.  Generally one does that by something like:
<br>
<p>&nbsp;export CFLAGS=-m32
<br>
<p>before running configure to generate Makefiles.
<br>
<p>Regards,
<br>
<p><p>David Mathog
<br>
mathog_at_[hidden]
<br>
Manager, Sequence Analysis Facility, Biology Division, Caltech
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15487.php">Samuel K. Gutierrez: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>Previous message:</strong> <a href="15485.php">Prentice Bisbal: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<li><strong>Maybe in reply to:</strong> <a href="15464.php">jody: "[OMPI users] heterogenous cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15488.php">jody: "Re: [OMPI users] heterogenous cluster"</a>
<li><strong>Reply:</strong> <a href="15488.php">jody: "Re: [OMPI users] heterogenous cluster"</a>
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
