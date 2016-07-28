<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 19 17:14:34 2007" -->
<!-- isoreceived="20070719211434" -->
<!-- sent="Thu, 19 Jul 2007 17:14:13 -0400" -->
<!-- isosent="20070719211413" -->
<!-- name="Adam C Powell IV" -->
<!-- email="hazelsct_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orte_pls_base_select fails" -->
<!-- id="1184879653.31587.27.camel_at_doorstop.home.net" -->
<!-- inreplyto="200707181722.52932.tprins_at_open-mpi.org" -->
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
<strong>From:</strong> Adam C Powell IV (<em>hazelsct_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-19 17:14:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3728.php">Moreland, Kenneth: "[OMPI users] MPI_File_set_view rejecting subarray views."</a>
<li><strong>Previous message:</strong> <a href="3726.php">Ralph H Castain: "Re: [OMPI users] OpenMPI start up problems"</a>
<li><strong>In reply to:</strong> <a href="3719.php">Tim Prins: "Re: [OMPI users] orte_pls_base_select fails"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>On Wed, 2007-07-18 at 17:22 -0400, Tim Prins wrote:
<br>
<span class="quotelev2">&gt; &gt; The one missing detail is that I can't seem to get the stdout/stderr
</span><br>
<span class="quotelev2">&gt; &gt; output.  For example:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ orterun -np 1 uptime
</span><br>
<span class="quotelev2">&gt; &gt; $ uptime
</span><br>
<span class="quotelev2">&gt; &gt; 18:24:27 up 13 days,  3:03,  0 users,  load average: 0.00, 0.03, 0.00
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The man page indicates that stdout/stderr is supposed to come back to
</span><br>
<span class="quotelev2">&gt; &gt; the stdout/stderr of the orterun process.  Any ideas on why this isn't
</span><br>
<span class="quotelev2">&gt; &gt; working?
</span><br>
<span class="quotelev1">&gt; It should work. However, we currently have some I/O forwarding problems which 
</span><br>
<span class="quotelev1">&gt; show up in some environments that will (hopefully) be fixed in the next 
</span><br>
<span class="quotelev1">&gt; release. As far as I know, the problem seems to happen mostly with non-mpi 
</span><br>
<span class="quotelev1">&gt; applications.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Try running a simple mpi application, such as:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     int rank, size;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;     printf(&quot;Hello, world, I am %d of %d\n&quot;, rank, size);
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If that works fine, then it is probably our problem, and not a problem with 
</span><br>
<span class="quotelev1">&gt; your setup.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry I don't have a better answer :(
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<p>Even that is not working for me :-(
<br>
<p>$ mpicc test.c -o test
<br>
$ ./test
<br>
Hello, world, I am 0 of 1
<br>
$ orterun -np 1 ./test
<br>
$
<br>
<p>It sounds like this is not a problem with the Debian package, nor with
<br>
OpenMPI, but something peculiar to my chroot environment.  Output is
<br>
only needed for testing purposes in my case, so it's not urgent, but it
<br>
would be helpful to track this down at some point.  If that means
<br>
waiting for the next OpenMPI (pre-)release, that's fine with me.
<br>
<p>Thanks again,
<br>
-Adam
<br>
<pre>
-- 
GPG fingerprint: D54D 1AEE B11C CE9B A02B  C5DD 526F 01E8 564E E4B6
Welcome to the best software in the world today cafe!
<a href="http://www.take6.com/albums/greatesthits.html">http://www.take6.com/albums/greatesthits.html</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3728.php">Moreland, Kenneth: "[OMPI users] MPI_File_set_view rejecting subarray views."</a>
<li><strong>Previous message:</strong> <a href="3726.php">Ralph H Castain: "Re: [OMPI users] OpenMPI start up problems"</a>
<li><strong>In reply to:</strong> <a href="3719.php">Tim Prins: "Re: [OMPI users] orte_pls_base_select fails"</a>
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
