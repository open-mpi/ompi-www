<?
$subject_val = "Re: [OMPI users] MPI_Spawn and process allocation policy";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  1 13:45:15 2012" -->
<!-- isoreceived="20121001174515" -->
<!-- sent="Mon, 1 Oct 2012 10:45:11 -0700" -->
<!-- isosent="20121001174511" -->
<!-- name="Brian Budge" -->
<!-- email="brian.budge_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Spawn and process allocation policy" -->
<!-- id="CANjXV6-Xq_R6vfzTVOc+nFOPq8973sg966sBzJtfMAEsxXEjZA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E6F78427-1DD2-4D62-91A5-5618632B3927_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Spawn and process allocation policy<br>
<strong>From:</strong> Brian Budge (<em>brian.budge_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-01 13:45:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20364.php">Jeff Squyres: "Re: [OMPI users] problems with mpiJava in openmpi-1.9a1r27362"</a>
<li><strong>Previous message:</strong> <a href="20362.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>In reply to:</strong> <a href="20362.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Oct 1, 2012 at 10:33 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Yes, that is the expected behavior as you describe it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you want to run on hosts that are not already provided (via hostfile in the environment or on the command line), then you need to use the &quot;add-host&quot; or &quot;add-hostfile&quot; MPI_Info key. See &quot;man MPI_Comm_spawn&quot; for details.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Neat.  It works.  Thanks, I just didn't quite grasp the difference.
<br>
<p>&nbsp;&nbsp;Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20364.php">Jeff Squyres: "Re: [OMPI users] problems with mpiJava in openmpi-1.9a1r27362"</a>
<li><strong>Previous message:</strong> <a href="20362.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>In reply to:</strong> <a href="20362.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
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
