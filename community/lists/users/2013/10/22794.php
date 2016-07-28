<?
$subject_val = "Re: [OMPI users] knem/openmpi performance?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 15 10:24:19 2013" -->
<!-- isoreceived="20131015142419" -->
<!-- sent="Tue, 15 Oct 2013 15:24:18 +0100" -->
<!-- isosent="20131015142418" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] knem/openmpi performance?" -->
<!-- id="87txgi4not.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.GSO.2.00.1307120946280.7293_at_sunserv3" -->
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
<strong>Subject:</strong> Re: [OMPI users] knem/openmpi performance?<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-15 10:24:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22795.php">Kevin M. Hildebrand: "Re: [OMPI users] Need help running jobs across different IB vendors"</a>
<li><strong>Previous message:</strong> <a href="22793.php">Dave Love: "Re: [OMPI users] Need help running jobs across different IB vendors"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/07/22317.php">Mark Dixon: "[OMPI users] knem/openmpi performance?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
[Meanwhile, much later...]
<br>
<p>Mark Dixon &lt;m.c.dixon_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm taking a look at knem, to see if it improves the performance of
</span><br>
<span class="quotelev1">&gt; any applications on our QDR InfiniBand cluster, so I'm eager to hear
</span><br>
<span class="quotelev1">&gt; about other people's experiences. This doesn't appear to have been
</span><br>
<span class="quotelev1">&gt; discussed on this list before.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I appreciate that any affect that knem will have is entirely dependent
</span><br>
<span class="quotelev1">&gt; on the application, scale and input data, but:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Does anyone know of any examples of popular software packages that
</span><br>
<span class="quotelev1">&gt; benefit particularly from the knem support in openmpi?
</span><br>
<p>I unearthed an example for something that's relevant here and probably
<br>
there, assuming the code hasn't changed significantly in the meantime
<br>
and the calculation is representative:
<br>
<a href="http://www.hpcadvisorycouncil.com/pdf/CP2K_Analysis_and_Profiling_Intel.pdf">http://www.hpcadvisorycouncil.com/pdf/CP2K_Analysis_and_Profiling_Intel.pdf</a>
<br>
but I haven't had the opportunity to test it yet, and the test case I
<br>
had showed a different communication profile.
<br>
<p>Did I the promised followup from someone with less positive results ever
<br>
appear?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22795.php">Kevin M. Hildebrand: "Re: [OMPI users] Need help running jobs across different IB vendors"</a>
<li><strong>Previous message:</strong> <a href="22793.php">Dave Love: "Re: [OMPI users] Need help running jobs across different IB vendors"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/07/22317.php">Mark Dixon: "[OMPI users] knem/openmpi performance?"</a>
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
