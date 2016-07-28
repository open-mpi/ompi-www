<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  2 04:20:24 2006" -->
<!-- isoreceived="20060202092024" -->
<!-- sent="Thu, 02 Feb 2006 01:20:12 -0800" -->
<!-- isosent="20060202092012" -->
<!-- name="Glenn Morris" -->
<!-- email="gmorris_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem" -->
<!-- id="3cvevyw20j.fsf_at_iris01.slac.stanford.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="117CD9D3-8006-4D4A-B164-F1E2F8D872DC_at_open-mpi.org" -->
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
<strong>From:</strong> Glenn Morris (<em>gmorris_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-02 04:20:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0558.php">Glen Kaukola: "[O-MPI users] A few benchmarks"</a>
<li><strong>Previous message:</strong> <a href="0556.php">Jeff Squyres: "Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
<li><strong>In reply to:</strong> <a href="0556.php">Jeff Squyres: "Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Excellent point.  Hardly elegant, but definitely no portability  
</span><br>
<span class="quotelev1">&gt; issues there -- so I like it better.
</span><br>
<p>Last word on this trivial issue I promise - if you don't want two
<br>
copies added to L_L_P, you could use a temporary variable, e.g.:
<br>
<p>tcsh -c 'if ( &quot;$?LD_LIBRARY_PATH&quot; == 1 ) set foo ;
<br>
&nbsp;&nbsp;if ( &quot;$?LD_LIBRARY_PATH&quot; == 0 ) setenv LD_LIBRARY_PATH blah ;
<br>
&nbsp;&nbsp;if ( &quot;$?foo&quot; == 1 ) setenv LD_LIBRARY_PATH blah:$LD_LIBRARY_PATH ;
<br>
&nbsp;&nbsp;unset foo'
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0558.php">Glen Kaukola: "[O-MPI users] A few benchmarks"</a>
<li><strong>Previous message:</strong> <a href="0556.php">Jeff Squyres: "Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
<li><strong>In reply to:</strong> <a href="0556.php">Jeff Squyres: "Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
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
