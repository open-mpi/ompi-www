<?
$subject_val = "Re: [OMPI users] MPI Derived datatype + Persistent communication";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 11 12:36:56 2009" -->
<!-- isoreceived="20091111173656" -->
<!-- sent="Wed, 11 Nov 2009 09:38:11 -0800" -->
<!-- isosent="20091111173811" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Derived datatype + Persistent communication" -->
<!-- id="4AFAF683.3080803_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="428810f20911110905n295a2c31v9a74034b7a7d0658_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI Derived datatype + Persistent communication<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-11 12:38:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11166.php">Martin Siegert: "Re: [OMPI users] How do you get static linkage for Intel compiler	libsfor the orterun executable?"</a>
<li><strong>Previous message:</strong> <a href="11164.php">Josh Hursey: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>In reply to:</strong> <a href="11163.php">amjad ali: "[OMPI users] MPI Derived datatype + Persistent communication"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
amjad ali wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I read that
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI Derived datatypes may provide efficient way to send data 
</span><br>
<span class="quotelev1">&gt; non-contiguous in the memory.
</span><br>
<span class="quotelev1">&gt; MPI Persistent communication may provide efficient way in case some 
</span><br>
<span class="quotelev1">&gt; specified/fix communication is performed in an iterative code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can we combine both together to get some enhanced benefit/efficiency?
</span><br>
<p>Yes.  Each one addresses a different situation.  If you have both 
<br>
situations, then using both can help you.  Benefit is not guaranteed, 
<br>
though.  It depends on what the MPI implementation is doing, and other 
<br>
variables as well.  Best is to try and see if you derive benefit from 
<br>
either feature... or both!
<br>
<p><span class="quotelev1">&gt; Better if any body can refer to some tutorial/example-code on this.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11166.php">Martin Siegert: "Re: [OMPI users] How do you get static linkage for Intel compiler	libsfor the orterun executable?"</a>
<li><strong>Previous message:</strong> <a href="11164.php">Josh Hursey: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>In reply to:</strong> <a href="11163.php">amjad ali: "[OMPI users] MPI Derived datatype + Persistent communication"</a>
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
