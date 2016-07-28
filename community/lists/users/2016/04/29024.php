<?
$subject_val = "Re: [OMPI users] MPI_Bcast implementations in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 25 11:33:45 2016" -->
<!-- isoreceived="20160425153345" -->
<!-- sent="Mon, 25 Apr 2016 16:33:40 +0100" -->
<!-- isosent="20160425153340" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Bcast implementations in OpenMPI" -->
<!-- id="871t5tn1nv.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="D2E0981E-3FAF-41A3-8DC2-64CB78026842_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Bcast implementations in OpenMPI<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-25 11:33:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29025.php">Dave Love: "Re: [OMPI users] Porting MPI-3 C-program to Fortran"</a>
<li><strong>Previous message:</strong> <a href="29023.php">Gilles Gouaillardet: "Re: [OMPI users] Cannot run a simple MPI program"</a>
<li><strong>In reply to:</strong> <a href="28998.php">George Bosilca: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29028.php">George Bosilca: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="29028.php">George Bosilca: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca &lt;bosilca_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Dave,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You are absolutely right, the parameters are now 6-7 years old,
</span><br>
<span class="quotelev1">&gt; gathered on interconnects long gone. Moreover, several discussions in
</span><br>
<span class="quotelev1">&gt; this mailing list indicated that they do not match current network
</span><br>
<span class="quotelev1">&gt; capabilities.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have recently reshuffled the tuned module to move all the algorithms
</span><br>
<span class="quotelev1">&gt; in the base and therefore make them available to other collective
</span><br>
<span class="quotelev1">&gt; modules (the code is available in master and 1.10 and the future
</span><br>
<span class="quotelev1">&gt; 2.0). This move has the potential for allowing different decision
</span><br>
<span class="quotelev1">&gt; schemes to coexists, and be dynamically selected at runtime based on
</span><br>
<span class="quotelev1">&gt; network properties, network topology, or even applications needs. I
</span><br>
<span class="quotelev1">&gt; continue to have hopes that network vendors will eventually get
</span><br>
<span class="quotelev1">&gt; interested in tailoring the collective selection to match their
</span><br>
<span class="quotelev1">&gt; network capabilities, and provide their users with a performance boost
</span><br>
<span class="quotelev1">&gt; by allowing for network specific algorithm selection.
</span><br>
<p>That sounds useful, assuming the speed is generally dominated by the
<br>
basic fabric.  What's involved in making the relevant measurements and
<br>
plugging them in?  I did look at using OTPO(?) to check this sort of
<br>
thing once.  I couldn't make it work in the time I had, but Periscope
<br>
might be a good alternative now.
<br>
<p>If it's fairly mechanical -- maybe even if not -- it seems like
<br>
something that should just be done regardless of vendors.  I'm sure
<br>
plenty of people could measure QDR fat tree, for a start (at least where
<br>
measurement isn't frowned upon).
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29025.php">Dave Love: "Re: [OMPI users] Porting MPI-3 C-program to Fortran"</a>
<li><strong>Previous message:</strong> <a href="29023.php">Gilles Gouaillardet: "Re: [OMPI users] Cannot run a simple MPI program"</a>
<li><strong>In reply to:</strong> <a href="28998.php">George Bosilca: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29028.php">George Bosilca: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="29028.php">George Bosilca: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
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
