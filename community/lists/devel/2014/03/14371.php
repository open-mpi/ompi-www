<?
$subject_val = "Re: [OMPI devel] Open MPI and CRIU stdout/stderr";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 19 09:25:15 2014" -->
<!-- isoreceived="20140319132515" -->
<!-- sent="Wed, 19 Mar 2014 13:25:13 +0000" -->
<!-- isosent="20140319132513" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI and CRIU stdout/stderr" -->
<!-- id="AC2DA28D-6C46-4C37-8EF9-ABD33370799C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140319131305.GH13207_at_lisas.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI and CRIU stdout/stderr<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-19 09:25:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14372.php">Jeff Squyres (jsquyres): "[OMPI devel] Fwd: [CRIU]  Open MPI and CRIU stdout/stderr"</a>
<li><strong>Previous message:</strong> <a href="14370.php">Adrian Reber: "[OMPI devel] Open MPI and CRIU stdout/stderr"</a>
<li><strong>In reply to:</strong> <a href="14370.php">Adrian Reber: "[OMPI devel] Open MPI and CRIU stdout/stderr"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 19, 2014, at 9:13 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; What does Open MPI do with the file descriptors for stdout/stderr?
</span><br>
<p>We admittedly do funny things with stdin, stdout, and stderr...  The short version is that OMPI intercepts all the stdin, stdout, and stderr from each MPI process and relays it back up to mpirun through our IOF subsystem (IOF = I/O forwarding).
<br>
<p>Consider: users launch N processes (potentially on multiple different servers) via
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun --hostfile hosts -np N my_mpi_executable
<br>
<p>They also expect to be able to use standard shell redirection via the mpirun command.  For example:
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun --hostfile hosts -np N my_mpi_executable |&amp; tee out.txt
<br>
<p>To explain what happens, we have to explain a little of how OMPI launches processes. Let's take the ssh case, for simplicity (there are other mechanisms it can use to launch on remote servers, but for the purposes of this discussion, they're basically variants of what happens with ssh).
<br>
<p>1. mpirun parses the hosts hostfile and extracts the list of servers on which to launch.
<br>
2. mpirun fork/execs an ssh command to each remote node, and launches the Open MPI helper daemon &quot;orted&quot;
<br>
3. The orted launches on the remote server, does some housekeeping, and eventually receives the launch command from mpirun
<br>
4. The launch command contains the executable and argv to fork/exec, and how many of them.  
<br>
5. For example: mpirun --hostfile hosts -np 4 my_mpi_executable.  If the &quot;hosts&quot; file contains serverA and serverB, then mpirun would launch 2 ssh's -- one each to serverA and serverB.  After some startup negotiation, mpirun would send a launch command telling the orted on each of serverA and serverB to launch 2 copies of my_mpi_executable.
<br>
6. For each child that the orted will create, it:
<br>
&nbsp;&nbsp;&nbsp;- creates (up to) 3 pipes, for: stdin, stdout, stderr
<br>
&nbsp;&nbsp;&nbsp;- forks
<br>
&nbsp;&nbsp;&nbsp;- closes stdin, stdout, stderr
<br>
&nbsp;&nbsp;&nbsp;- dups the pipes into 0, 1, 2
<br>
&nbsp;&nbsp;&nbsp;- (by default, we actually close stdin on all processes except the first one)
<br>
&nbsp;&nbsp;&nbsp;- execs my_mpi_application
<br>
7. In this way, the orted can intercept the stdout/stderr from the process and send it back to mpirun, which can then write it on its own stdout/stderr.  And therefore shell redirection from mpirun works as expected.
<br>
8. Similarly, the stdin from mpirun can be sent to any process where we kept stdin open (as mentioned above, by default, this is only the first process).
<br>
<p>In short: the orted acts as a proxy for the stdout and stderr (and potentially stdin) for all launched processes.
<br>
<p><span class="quotelev1">&gt; Would it make sense to close stdout/stderr of each checkpointed process
</span><br>
<span class="quotelev1">&gt; before checkpointing it?
</span><br>
<p>Maybe...?
<br>
<p>But my gut reaction is that you don't want to because of the &quot;continue&quot; case.  I.e., having the orted go through all the IOF setup again could be a bit tricky...  We didn't need to do this for other checkpointing systems.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14372.php">Jeff Squyres (jsquyres): "[OMPI devel] Fwd: [CRIU]  Open MPI and CRIU stdout/stderr"</a>
<li><strong>Previous message:</strong> <a href="14370.php">Adrian Reber: "[OMPI devel] Open MPI and CRIU stdout/stderr"</a>
<li><strong>In reply to:</strong> <a href="14370.php">Adrian Reber: "[OMPI devel] Open MPI and CRIU stdout/stderr"</a>
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
