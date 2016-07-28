<?
$subject_val = "Re: [OMPI users] openMP  and mpi problem";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul  5 08:40:58 2014" -->
<!-- isoreceived="20140705124058" -->
<!-- sent="Sat, 05 Jul 2014 08:40:54 -0400" -->
<!-- isosent="20140705124054" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMP  and mpi problem" -->
<!-- id="53B7F256.4060902_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1404487341.153071190_at_f395.i.mail.ru" -->
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
<strong>Subject:</strong> Re: [OMPI users] openMP  and mpi problem<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-05 08:40:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24753.php">Alexander Frolov: "[OMPI users] All MPI processes have rank 0"</a>
<li><strong>Previous message:</strong> <a href="24751.php">Ralph Castain: "Re: [OMPI users] openMP  and mpi problem"</a>
<li><strong>In reply to:</strong> <a href="24750.php">Timur Ismagilov: "Re: [OMPI users] openMP  and mpi problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24751.php">Ralph Castain: "Re: [OMPI users] openMP  and mpi problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/4/2014 11:22 AM, Timur Ismagilov wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Intell mpi is located here: /opt/intel/impi/4.1.0/intel64/lib. I 
</span><br>
<span class="quotelev1">&gt; have added OMPI path at the start and got the same output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
If you can't read your own thread due to your scrambling order of posts, 
<br>
I'll simply reiterate what was mentioned before:
<br>
ifort has its own mpiexec in the compiler install path to support 
<br>
co-array (not true MPI), so your MPI path entries must precede the ifort 
<br>
ones.  Thus, it remains important to try checks such as 'which mpiexec' 
<br>
and assure that you are running the intended components. ifort co-arrays 
<br>
will not cooperate with presence of OpenMPI.
<br>
<p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24753.php">Alexander Frolov: "[OMPI users] All MPI processes have rank 0"</a>
<li><strong>Previous message:</strong> <a href="24751.php">Ralph Castain: "Re: [OMPI users] openMP  and mpi problem"</a>
<li><strong>In reply to:</strong> <a href="24750.php">Timur Ismagilov: "Re: [OMPI users] openMP  and mpi problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24751.php">Ralph Castain: "Re: [OMPI users] openMP  and mpi problem"</a>
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
