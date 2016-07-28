<?
$subject_val = "Re: [OMPI users] Basic Scatter Operation";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  9 19:28:21 2008" -->
<!-- isoreceived="20081210002821" -->
<!-- sent="Tue, 9 Dec 2008 17:28:15 -0700" -->
<!-- isosent="20081210002815" -->
<!-- name="Matt Hughes" -->
<!-- email="matt.c.hughes+ompi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Basic Scatter Operation" -->
<!-- id="d105ee120812091628m18f42d8euf65f274d5720e443_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="BAY141-W1AEC27C57EC09CA4EAF7FD7FB0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Basic Scatter Operation<br>
<strong>From:</strong> Matt Hughes (<em>matt.c.hughes+ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-09 19:28:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7486.php">Brock Palen: "[OMPI users] Multicast?"</a>
<li><strong>Previous message:</strong> <a href="7484.php">Brock Palen: "Re: [OMPI users] Basic Scatter Operation"</a>
<li><strong>In reply to:</strong> <a href="7483.php">Kevin Anthony Joy: "[OMPI users] Basic Scatter Operation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7506.php">Kevin Anthony Joy: "Re: [OMPI users] Basic Scatter Operation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2008/12/9 Kevin Anthony Joy &lt;kjoy96_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt;     if (rank==0) {  /// REMOVE THIS IF
</span><br>
<span class="quotelev1">&gt;     MPI::COMM_WORLD.Scatter(
</span><br>
<span class="quotelev1">&gt;         stat,
</span><br>
<span class="quotelev1">&gt;         1,
</span><br>
<span class="quotelev1">&gt;         MPI::DOUBLE,
</span><br>
<span class="quotelev1">&gt;         &amp;test3,
</span><br>
<span class="quotelev1">&gt;         1,
</span><br>
<span class="quotelev1">&gt;         MPI::DOUBLE,
</span><br>
<span class="quotelev1">&gt;         0);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<p>Hi Kevin.  I see you are mixing C and C++ calls.  It is probably best
<br>
to stick with one or the other.  Anyway, the source of your problem is
<br>
that the peers that are supposed to be receiving data from the scatter
<br>
don't call MPI_Scatter!  MPI_Scatter is a collective operation,
<br>
meaning that all processes in the communicator have to call it.
<br>
Remove the if block around the scatter call, and you should get the
<br>
results you expect.
<br>
<p>mch
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7486.php">Brock Palen: "[OMPI users] Multicast?"</a>
<li><strong>Previous message:</strong> <a href="7484.php">Brock Palen: "Re: [OMPI users] Basic Scatter Operation"</a>
<li><strong>In reply to:</strong> <a href="7483.php">Kevin Anthony Joy: "[OMPI users] Basic Scatter Operation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7506.php">Kevin Anthony Joy: "Re: [OMPI users] Basic Scatter Operation"</a>
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
