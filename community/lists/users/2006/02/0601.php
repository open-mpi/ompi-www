<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb  8 11:19:48 2006" -->
<!-- isoreceived="20060208161948" -->
<!-- sent="Wed, 8 Feb 2006 11:19:45 -0500" -->
<!-- isosent="20060208161945" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] mpirun sets umask to 0" -->
<!-- id="32B8EC02-3A22-4768-9F93-F854C49C051F_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="onek2g2tan.fsf_at_iris01.slac.stanford.edu" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-08 11:19:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0602.php">Brian Barrett: "Re: [O-MPI users] problem running Migrate with open-MPI"</a>
<li><strong>Previous message:</strong> <a href="0600.php">Andreas Fladischer: "Re: [O-MPI users] mpirun with make"</a>
<li><strong>In reply to:</strong> <a href="0586.php">Glenn Morris: "[O-MPI users] mpirun sets umask to 0"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 6, 2006, at 2:14 PM, Glenn Morris wrote:
<br>
<p><span class="quotelev1">&gt; mpirun (v1.0.1) sets the umask to 0, and hence creates world-writable
</span><br>
<span class="quotelev1">&gt; output files. Interestingly, adding the -d option to mpirun makes this
</span><br>
<span class="quotelev1">&gt; problem go away. To reproduce:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 --hostfile ./hostfile --mca pls_rsh_agent ssh ./a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where a.out is compiled from:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;sys/types.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;sys/stat.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; int main ()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     printf(&quot;%.4o\n&quot;, umask( 022 ) );
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<p>Wow, we definitely shouldn't be doing that.  I've just committed a  
<br>
fix for this problem on the development branch of our subversion  
<br>
repository.  The fix should be in the nightly builds in the next  
<br>
couple of days, and will be part of the upcoming 1.0.2 release.
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0602.php">Brian Barrett: "Re: [O-MPI users] problem running Migrate with open-MPI"</a>
<li><strong>Previous message:</strong> <a href="0600.php">Andreas Fladischer: "Re: [O-MPI users] mpirun with make"</a>
<li><strong>In reply to:</strong> <a href="0586.php">Glenn Morris: "[O-MPI users] mpirun sets umask to 0"</a>
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
