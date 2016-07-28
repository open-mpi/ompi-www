<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar  2 00:24:34 2006" -->
<!-- isoreceived="20060302052434" -->
<!-- sent="Thu, 2 Mar 2006 00:24:27 -0500" -->
<!-- isosent="20060302052427" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tcsh: orted: Not Found" -->
<!-- id="07F2FAB9-3CAA-4BC5-948E-7EAD937026AF_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C02B6D93.8E94%xyang_at_lanl.gov" -->
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
<strong>Date:</strong> 2006-03-02 00:24:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0749.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<li><strong>Previous message:</strong> <a href="0747.php">Brignone, Sergio: "[OMPI users] Spawn and Disconnect"</a>
<li><strong>In reply to:</strong> <a href="0745.php">Xiaoning (David) Yang: "[OMPI users] tcsh: orted: Not Found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0753.php">Xiaoning (David) Yang: "Re: [OMPI users] tcsh: orted: Not Found"</a>
<li><strong>Reply:</strong> <a href="0753.php">Xiaoning (David) Yang: "Re: [OMPI users] tcsh: orted: Not Found"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 1, 2006, at 5:26 PM, Xiaoning (David) Yang wrote:
<br>
<p><span class="quotelev1">&gt; I installed Open MPI 1.0.1 on two Mac G5s (one with two cpus and  
</span><br>
<span class="quotelev1">&gt; the other
</span><br>
<span class="quotelev1">&gt; with 4 cpus.). I set up ssh on both machines according to the FAQ.  
</span><br>
<span class="quotelev1">&gt; My mpi
</span><br>
<span class="quotelev1">&gt; jobs work fine if I run the jobs on only one computer. But when I  
</span><br>
<span class="quotelev1">&gt; ran a job
</span><br>
<span class="quotelev1">&gt; across the two Macs from the first Mac mac1, I got:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mac1: mpirun -np 6 --hostfiles /Users/me/my_hosts hello_world
</span><br>
<span class="quotelev1">&gt; tcsh: orted: Command not found.
</span><br>
<span class="quotelev1">&gt; [mac1:01019] ERROR: A daemon on node mac2 failed to start as expected.
</span><br>
<span class="quotelev1">&gt; [mac1:01019] ERROR: There may be more information available from
</span><br>
<span class="quotelev1">&gt; [mac1:01019] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev1">&gt; [mac1:01019] ERROR: The daemon exited unexpectedly with status 1.
</span><br>
<span class="quotelev1">&gt; 2 processes killed (possibly by Open MPI)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; File my_hosts looks like
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mac1 slots=2
</span><br>
<span class="quotelev1">&gt; mac2 slots=4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The orted is definitely on my path on both machines. Any idea? Help is
</span><br>
<span class="quotelev1">&gt; greatly appreciated!
</span><br>
<p>I'm guessing that the issue is with your shell configuration.  mpirun  
<br>
starts the orted on the remote node through rsh/ssh, which will start  
<br>
a non-login shell on the remote node.  Unfortunately, the set of  
<br>
dotfiles evaluated when a non-login shell is different than when  
<br>
starting a login shell.  The easiest way to tell if this is the issue  
<br>
is to check whether orted is in your path when started in a non-login  
<br>
shell with a command like:
<br>
<p>&nbsp;&nbsp;&nbsp;ssh remote_host which orted
<br>
<p>More information on how to configure your particular shell for use  
<br>
with Open MPI can be found in our FAQ at:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=running">http://www.open-mpi.org/faq/?category=running</a>
<br>
<p><p>Hope this helps,
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0749.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<li><strong>Previous message:</strong> <a href="0747.php">Brignone, Sergio: "[OMPI users] Spawn and Disconnect"</a>
<li><strong>In reply to:</strong> <a href="0745.php">Xiaoning (David) Yang: "[OMPI users] tcsh: orted: Not Found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0753.php">Xiaoning (David) Yang: "Re: [OMPI users] tcsh: orted: Not Found"</a>
<li><strong>Reply:</strong> <a href="0753.php">Xiaoning (David) Yang: "Re: [OMPI users] tcsh: orted: Not Found"</a>
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
