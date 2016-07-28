<?
$subject_val = "Re: [OMPI users] Dynamically changing machine file data";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  4 11:42:51 2008" -->
<!-- isoreceived="20080204164251" -->
<!-- sent="Mon, 4 Feb 2008 08:42:47 -0800" -->
<!-- isosent="20080204164247" -->
<!-- name="Christian Bell" -->
<!-- email="christian.bell_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Dynamically changing machine file data" -->
<!-- id="20080204164247.GV9818_at_mv.qlogic.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20080201185214.GC30522_at_doberman.l.localdomain" -->
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
<strong>Subject:</strong> Re: [OMPI users] Dynamically changing machine file data<br>
<strong>From:</strong> Christian Bell (<em>christian.bell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-04 11:42:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4956.php">Christian Bell: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4954.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4946.php">Keith Hellman: "[OMPI users] Dynamically changing machine file data"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 01 Feb 2008, Keith Hellman wrote:
<br>
<p><span class="quotelev1">&gt; I'm working on a rather eccentric application of openmpi.  Is there
</span><br>
<span class="quotelev1">&gt; any way to dynamically change the information obtained from the 
</span><br>
<span class="quotelev1">&gt; machine or hosts file provided on the command line to mpirun?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Perhaps something like:
</span><br>
<span class="quotelev1">&gt;   MPI_Reread_Hosts( const char* hfilepath );
</span><br>
<p>No. Hostfiles and execution environments are the types of
<br>
site-specific things that the MPI specification stays away from.
<br>
<p>However, you can use MPI_Group_incl on MPI_COMM_WORLD's group and
<br>
reorder the ranks to create a new world communicator.  This will
<br>
allow you to use a new communicator with your reordering but requires
<br>
recompilation (and potentially some C macro trickery).
<br>
<p>If you can only change the meaning of MPI_COMM_WORLD at runtime, then
<br>
it's significantly more complicated but is feasible using the MPI
<br>
profiling interface.  Follow-up with more specific information if
<br>
this is the type of thing you want to do.
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;. . christian
<br>
<p><pre>
-- 
christian.bell_at_[hidden]
(QLogic Host Solutions Group, formerly Pathscale)
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4956.php">Christian Bell: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4954.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4946.php">Keith Hellman: "[OMPI users] Dynamically changing machine file data"</a>
<!-- nextthread="start" -->
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
