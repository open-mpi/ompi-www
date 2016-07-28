<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 12 15:36:01 2005" -->
<!-- isoreceived="20051012203601" -->
<!-- sent="Wed, 12 Oct 2005 13:35:50 -0700" -->
<!-- isosent="20051012203550" -->
<!-- name="Greg Lindahl" -->
<!-- email="lindahl_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] [Beowulf] MorphMPI based on fortran itf (was: MPI ABI)" -->
<!-- id="20051012203549.GA1701_at_greglaptop.eld.abq.wayport.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1129140414.5342.24.camel_at_localhost.localdomain" -->
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
<strong>From:</strong> Greg Lindahl (<em>lindahl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-12 15:35:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0190.php">Ken Mighell: "[O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<li><strong>Previous message:</strong> <a href="0188.php">Toon Knapen: "Re: [O-MPI users] Fwd: Fwd: [Beowulf] MorphMPI based on fortran itf"</a>
<li><strong>Maybe in reply to:</strong> <a href="0187.php">Greg Lindahl: "Re: [O-MPI users] [Beowulf] MorphMPI based on fortran itf (was: MPI ABI)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Oct 12, 2005 at 07:06:54PM +0100, Ashley Pittman wrote:
<br>
<p><span class="quotelev1">&gt; As it turns out I'm in a position to measure this fairly easily, our MPI
</span><br>
<span class="quotelev1">&gt; sits on top of a library called libelan, this does all the tag matching
</span><br>
<span class="quotelev1">&gt; at a very low level, all MPI does is convert the communicator into a bit
</span><br>
<span class="quotelev1">&gt; pattern, calculate the length from the type and count and convert from
</span><br>
<span class="quotelev1">&gt; lrank to grank, passing the call on.
</span><br>
<p>As you point out later, that's a lot more than what needs to be
<br>
measured.
<br>
<p><span class="quotelev1">&gt; Regardless of the numbers this is a *high performance* industry and
</span><br>
<span class="quotelev1">&gt; doing this would be a step in the wrong direction.
</span><br>
<p>If the hit is tiny and the benefit is large, the high performance
<br>
industry will gladly adopt it. I have yet to see, for example, anyone
<br>
rewrite their MPI code from f77 into C in order to avoid the current
<br>
overhead for the f77 MPI interface. In an ideal world, an MPI ABI will
<br>
have the same f77 overhead as today, and C overhead similar to f77.
<br>
<p>In any case, accurately measuring this overhead and then discussing it
<br>
is better than discussing it without accurately measuring.
<br>
<p>-- greg
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0190.php">Ken Mighell: "[O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<li><strong>Previous message:</strong> <a href="0188.php">Toon Knapen: "Re: [O-MPI users] Fwd: Fwd: [Beowulf] MorphMPI based on fortran itf"</a>
<li><strong>Maybe in reply to:</strong> <a href="0187.php">Greg Lindahl: "Re: [O-MPI users] [Beowulf] MorphMPI based on fortran itf (was: MPI ABI)"</a>
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
