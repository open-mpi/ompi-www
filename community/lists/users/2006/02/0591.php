<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb  7 08:57:24 2006" -->
<!-- isoreceived="20060207135724" -->
<!-- sent="Tue, 07 Feb 2006 08:57:16 -0500" -->
<!-- isosent="20060207135716" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] mpirun with make" -->
<!-- id="43E8A73C.4030101_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="43E897BD.7060304_at_ecofinance.com" -->
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
<strong>From:</strong> Andrew Friedley (<em>afriedle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-07 08:57:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0592.php">Brian Barrett: "Re: [O-MPI users] OpenMPI and Xgrid"</a>
<li><strong>Previous message:</strong> <a href="0590.php">Andreas Fladischer: "[O-MPI users] mpirun with make"</a>
<li><strong>In reply to:</strong> <a href="0590.php">Andreas Fladischer: "[O-MPI users] mpirun with make"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0600.php">Andreas Fladischer: "Re: [O-MPI users] mpirun with make"</a>
<li><strong>Reply:</strong> <a href="0600.php">Andreas Fladischer: "Re: [O-MPI users] mpirun with make"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Can you give us more details on the problem?  The exact error message, 
<br>
as well as the contents of your hostfile will help.  You should check 
<br>
out our FAQ as well, as it likely will help you solve your problem:
<br>
<p><a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>
<br>
<p>Particularly the sections 'Running MPI jobs' and 'Running jobs under 
<br>
rsh/ssh'.
<br>
<p>Make is not a very good program to test with - try something simpler 
<br>
instead:
<br>
<p>mpirun -np 2 --hostfile /mnt/wolf/lamhosts hostname
<br>
<p>The hostname of both nodes should be printed.
<br>
<p>Another note - are you just trying to run a parallel make?  If so, 
<br>
distcc and ccache are a better solution.
<br>
<p>Andrew
<br>
<p><p>Andreas Fladischer wrote:
<br>
<span class="quotelev1">&gt; hi_at_all!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i have a question to the parallel mpirun!i have a small cluster (for 
</span><br>
<span class="quotelev1">&gt; testing purpose one headnode and one node) which running fedora core 3! 
</span><br>
<span class="quotelev1">&gt; i installed openmpi on both nodes and created a user with the same uid 
</span><br>
<span class="quotelev1">&gt; on both nodes; now i try to build the glibc tools from the headnode but 
</span><br>
<span class="quotelev1">&gt; there couldn't be a connection to the second node;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; time mpirun -np 2 --hostfile /mnt/wolf/lamhosts make
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i'm a newbee on the mpi tools and so i have no plan what i do wrong; in 
</span><br>
<span class="quotelev1">&gt; additional i couldn't find a good documentation exluding the faq's on 
</span><br>
<span class="quotelev1">&gt; the homepage; are there some howto's available?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks in advance?
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0592.php">Brian Barrett: "Re: [O-MPI users] OpenMPI and Xgrid"</a>
<li><strong>Previous message:</strong> <a href="0590.php">Andreas Fladischer: "[O-MPI users] mpirun with make"</a>
<li><strong>In reply to:</strong> <a href="0590.php">Andreas Fladischer: "[O-MPI users] mpirun with make"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0600.php">Andreas Fladischer: "Re: [O-MPI users] mpirun with make"</a>
<li><strong>Reply:</strong> <a href="0600.php">Andreas Fladischer: "Re: [O-MPI users] mpirun with make"</a>
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
