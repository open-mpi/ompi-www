<?
$subject_val = "Re: [OMPI devel] inquiry about mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  6 05:27:40 2010" -->
<!-- isoreceived="20100406092740" -->
<!-- sent="06 Apr 2010 10:27:35 +0100" -->
<!-- isosent="20100406092735" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] inquiry about mpirun" -->
<!-- id="Prayer.1.3.2.1004061027350.29691_at_hermes-2.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="813018.3828.qm_at_web15307.mail.cnb.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] inquiry about mpirun<br>
<strong>From:</strong> N.M. Maclaren (<em>nmm1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-06 05:27:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7697.php">Terry Dontje: "Re: [OMPI devel] inquiry about mpirun"</a>
<li><strong>Previous message:</strong> <a href="7695.php">Matthias Jurenz: "Re: [OMPI devel] compile openmpi error on debian"</a>
<li><strong>In reply to:</strong> <a href="7694.php">luyang dong: "[OMPI devel] inquiry about mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7697.php">Terry Dontje: "Re: [OMPI devel] inquiry about mpirun"</a>
<li><strong>Reply:</strong> <a href="7697.php">Terry Dontje: "Re: [OMPI devel] inquiry about mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 6 2010, luyang dong wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regardless of  any mpi implementation , there 
</span><br>
<span class="quotelev1">&gt; is always a command named mpirun. And correspondingly there is a source 
</span><br>
<span class="quotelev1">&gt; file called mpirun.c.(at least in lam/mpi),but i can not find this file 
</span><br>
<span class="quotelev1">&gt; in openmpi. can you tell me how to  produce this command in openmpi. 
</span><br>
<p>Er, no.  There are some that I have used that do not have such a
<br>
command at all, and some where it is a script in some shell language,
<br>
Python or Perl.  I believe that OpenMPI usually makes it a symbolic link
<br>
to some other command (orterun or mpiexec), and so do some others.
<br>
<p>It's trivial to write a simple wrapper for mpiexec for your own use and
<br>
call it mpirun.  Or just create a symbolic link.
<br>
<p>Someone else has indicated that OpenMPI intends to set up such a command,
<br>
but I am not commenting on that aspect.
<br>
<p><p>Regards,
<br>
Nick Maclaren.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7697.php">Terry Dontje: "Re: [OMPI devel] inquiry about mpirun"</a>
<li><strong>Previous message:</strong> <a href="7695.php">Matthias Jurenz: "Re: [OMPI devel] compile openmpi error on debian"</a>
<li><strong>In reply to:</strong> <a href="7694.php">luyang dong: "[OMPI devel] inquiry about mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7697.php">Terry Dontje: "Re: [OMPI devel] inquiry about mpirun"</a>
<li><strong>Reply:</strong> <a href="7697.php">Terry Dontje: "Re: [OMPI devel] inquiry about mpirun"</a>
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
