<?
$subject_val = "[OMPI devel] Fwd: [CRIU]  Open MPI and CRIU stdout/stderr";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 19 09:35:47 2014" -->
<!-- isoreceived="20140319133547" -->
<!-- sent="Wed, 19 Mar 2014 13:35:45 +0000" -->
<!-- isosent="20140319133545" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: [CRIU]  Open MPI and CRIU stdout/stderr" -->
<!-- id="4879D0F3-7BF8-4B5E-864F-B8F385FBF9B4_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="53299C50.9060409_at_parallels.com" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: [CRIU]  Open MPI and CRIU stdout/stderr<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-19 09:35:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14373.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.5 and trunk failures"</a>
<li><strong>Previous message:</strong> <a href="14371.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI and CRIU stdout/stderr"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Forwarding because Pavel wasn't subscribed to the devel list, and it was rejected.
<br>
<p><p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: Pavel Emelyanov &lt;xemul_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [CRIU] [OMPI devel] Open MPI and CRIU stdout/stderr
</span><br>
<span class="quotelev1">&gt; Date: March 19, 2014 9:32:00 AM EDT
</span><br>
<span class="quotelev1">&gt; To: Adrian Reber &lt;adrian_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Cc: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;, Open MPI Developers &lt;devel_at_[hidden]&gt;, &quot;&lt;criu_at_[hidden]&gt;&quot; &lt;criu_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 03/19/2014 05:25 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 19, 2014, at 9:13 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What does Open MPI do with the file descriptors for stdout/stderr?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We admittedly do funny things with stdin, stdout, and stderr...  The short version is that OMPI intercepts all the stdin, stdout, and stderr from each MPI process and relays it back up to mpirun through our IOF subsystem (IOF = I/O forwarding).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Consider: users launch N processes (potentially on multiple different servers) via
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   mpirun --hostfile hosts -np N my_mpi_executable
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; They also expect to be able to use standard shell redirection via the mpirun command.  For example:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   mpirun --hostfile hosts -np N my_mpi_executable |&amp; tee out.txt
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; To explain what happens, we have to explain a little of how OMPI launches processes. Let's take the ssh case, for simplicity (there are other mechanisms it can use to launch on remote servers, but for the purposes of this discussion, they're basically variants of what happens with ssh).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. mpirun parses the hosts hostfile and extracts the list of servers on which to launch.
</span><br>
<span class="quotelev2">&gt;&gt; 2. mpirun fork/execs an ssh command to each remote node, and launches the Open MPI helper daemon &quot;orted&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 3. The orted launches on the remote server, does some housekeeping, and eventually receives the launch command from mpirun
</span><br>
<span class="quotelev2">&gt;&gt; 4. The launch command contains the executable and argv to fork/exec, and how many of them.  
</span><br>
<span class="quotelev2">&gt;&gt; 5. For example: mpirun --hostfile hosts -np 4 my_mpi_executable.  If the &quot;hosts&quot; file contains serverA and serverB, then mpirun would launch 2 ssh's -- one each to serverA and serverB.  After some startup negotiation, mpirun would send a launch command telling the orted on each of serverA and serverB to launch 2 copies of my_mpi_executable.
</span><br>
<span class="quotelev2">&gt;&gt; 6. For each child that the orted will create, it:
</span><br>
<span class="quotelev2">&gt;&gt;   - creates (up to) 3 pipes, for: stdin, stdout, stderr
</span><br>
<span class="quotelev2">&gt;&gt;   - forks
</span><br>
<span class="quotelev2">&gt;&gt;   - closes stdin, stdout, stderr
</span><br>
<span class="quotelev2">&gt;&gt;   - dups the pipes into 0, 1, 2
</span><br>
<span class="quotelev2">&gt;&gt;   - (by default, we actually close stdin on all processes except the first one)
</span><br>
<span class="quotelev2">&gt;&gt;   - execs my_mpi_application
</span><br>
<span class="quotelev2">&gt;&gt; 7. In this way, the orted can intercept the stdout/stderr from the process and send it back to mpirun, which can then write it on its own stdout/stderr.  And therefore shell redirection from mpirun works as expected.
</span><br>
<span class="quotelev2">&gt;&gt; 8. Similarly, the stdin from mpirun can be sent to any process where we kept stdin open (as mentioned above, by default, this is only the first process).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In short: the orted acts as a proxy for the stdout and stderr (and potentially stdin) for all launched processes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Would it make sense to close stdout/stderr of each checkpointed process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; before checkpointing it?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Maybe...?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But my gut reaction is that you don't want to because of the &quot;continue&quot; case.  I.e., having the orted go through all the IOF setup again could be a bit tricky...  We didn't need to do this for other checkpointing systems.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Adrian,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you show how the process tree looks like, what subtree you dump (and restore) and
</span><br>
<span class="quotelev1">&gt; where the mentioned pipes sit, so that we could decide how to dump them and how to
</span><br>
<span class="quotelev1">&gt; recreate them on restore.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I had an impression, that you dump the fork()-ed process, and it should have pipes in
</span><br>
<span class="quotelev1">&gt; its stdios, right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Pavel
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14373.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.5 and trunk failures"</a>
<li><strong>Previous message:</strong> <a href="14371.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI and CRIU stdout/stderr"</a>
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
