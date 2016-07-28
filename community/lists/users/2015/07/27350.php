<?
$subject_val = "Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 28 12:06:35 2015" -->
<!-- isoreceived="20150728160635" -->
<!-- sent="Tue, 28 Jul 2015 17:06:33 +0100" -->
<!-- isosent="20150728160633" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6" -->
<!-- id="87wpxkjmgm.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="utf-8" -->
<!-- inreplyto="438851B5-76BA-4F62-AD6A-6A23E4127A2F_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-28 12:06:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27351.php">Dave Love: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>Previous message:</strong> <a href="27349.php">Syed Ahsan Ali: "Re: [OMPI users] Fatal Error: Cannot read module file 'mpi.mod' opened at (1), because it was created by a different version of GNU Fortran"</a>
<li><strong>In reply to:</strong> <a href="27318.php">Ralph Castain: "Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27316.php">Dave Love: "Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain &lt;rhc_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; I believe qrsh will execute a simple env command across the allocated nodes - have you looked into that?
</span><br>
<p>qrsh -inherit will run something on any node in the allocation that has
<br>
a free slot from a tightly integrated parallel environment, but I'm not
<br>
sure for various reasons that you could rely on it showing the problem
<br>
directly.
<br>
<p><span class="quotelev1">&gt; The bottom line is that you simply are not getting the right orted on the remote nodes - you are getting the old one, which doesn&#226;&#128;&#153;t recognize the new command line option that mpirun is giving.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27351.php">Dave Love: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>Previous message:</strong> <a href="27349.php">Syed Ahsan Ali: "Re: [OMPI users] Fatal Error: Cannot read module file 'mpi.mod' opened at (1), because it was created by a different version of GNU Fortran"</a>
<li><strong>In reply to:</strong> <a href="27318.php">Ralph Castain: "Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27316.php">Dave Love: "Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6"</a>
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
