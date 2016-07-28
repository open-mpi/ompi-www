<?
$subject_val = "Re: [OMPI users] CP2K mpi hang";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 19 12:27:27 2009" -->
<!-- isoreceived="20090519162727" -->
<!-- sent="Tue, 19 May 2009 12:27:23 -0400" -->
<!-- isosent="20090519162723" -->
<!-- name="Noam Bernstein" -->
<!-- email="noam.bernstein_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CP2K mpi hang" -->
<!-- id="F2C3FA71-5521-4581-BE7D-860A2BF7E1D9_at_nrl.navy.mil" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1242749582.26039.742.camel_at_localhost.localdomain" -->
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
<strong>Subject:</strong> Re: [OMPI users] CP2K mpi hang<br>
<strong>From:</strong> Noam Bernstein (<em>noam.bernstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-19 12:27:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9391.php">Joshua Bernstein: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<li><strong>Previous message:</strong> <a href="9389.php">Jeff Squyres: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>In reply to:</strong> <a href="9388.php">Ashley Pittman: "Re: [OMPI users] CP2K mpi hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9393.php">Noam Bernstein: "Re: [OMPI users] CP2K mpi hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 19, 2009, at 12:13 PM, Ashley Pittman wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, 2009-05-19 at 11:01 -0400, Noam Bernstein wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'd suspect the filesystem too, except that it's hung up in an MPI
</span><br>
<span class="quotelev2">&gt;&gt; call.  As I said
</span><br>
<span class="quotelev2">&gt;&gt; before, the whole thing is bizarre.  It doesn't matter where the
</span><br>
<span class="quotelev2">&gt;&gt; executable is,
</span><br>
<span class="quotelev2">&gt;&gt; just what CWD is (i.e. I can do mpirun /scratch/exec or mpirun /home/
</span><br>
<span class="quotelev2">&gt;&gt; bernstei/exec,
</span><br>
<span class="quotelev2">&gt;&gt; but if it's sitting in /scratch it'll hang).  And I've been running
</span><br>
<span class="quotelev2">&gt;&gt; other codes both from NFS and from scratch directories for months,
</span><br>
<span class="quotelev2">&gt;&gt; and never had a problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is indeed odd but it shouldn't be too hard to track down, how  
</span><br>
<span class="quotelev1">&gt; often
</span><br>
<span class="quotelev1">&gt; does the failure occur?  Presumably when you say you have three
</span><br>
<span class="quotelev1">&gt; invocations of the program they communicate via files, is the location
</span><br>
<span class="quotelev1">&gt; of these files changing?
</span><br>
<p>The hang is completely repeatable.  Every time I run in the  
<br>
configuration
<br>
that hangs, the third invokation hangs (i.e. running from the scratch  
<br>
directory).
<br>
The three invokations happen like this:
<br>
&nbsp;&nbsp;&nbsp;serial code creates subdirectory, write input files, call  
<br>
&quot;mpirun ...&quot;, reads output files
<br>
&nbsp;&nbsp;&nbsp;repeat, in a new subdirectory (except that the input files are  
<br>
configured to do a rather different calculation)
<br>
&nbsp;&nbsp;&nbsp;repeat again, in a new subdirectory (back to the first type of  
<br>
calculation).
<br>
<p>I can try to save the input and output files and recreate the process
<br>
by running mpirun myself, rather that via the serial code.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I assume you're certain it's actually hanging and not just failing to
</span><br>
<span class="quotelev1">&gt; converge?
</span><br>
<p>Yes - no output is generated for a very long time, and attaching
<br>
with gdb shows that it's stuck in basically one place.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Finally if you could run it with &quot;--mca btl ^ofed&quot; to rule out the  
</span><br>
<span class="quotelev1">&gt; ofed
</span><br>
<span class="quotelev1">&gt; stack causing the problem that would be useful.  You'd need to check  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; syntax here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I'll try that (or actually the corrected syntax in the next message.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This isn't so suspicious, if there is a problem with some processes  
</span><br>
<span class="quotelev1">&gt; it's
</span><br>
<span class="quotelev1">&gt; common for other processes to continue till the next collective call.
</span><br>
<p>Yeah, I guess so.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Noam
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9391.php">Joshua Bernstein: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<li><strong>Previous message:</strong> <a href="9389.php">Jeff Squyres: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>In reply to:</strong> <a href="9388.php">Ashley Pittman: "Re: [OMPI users] CP2K mpi hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9393.php">Noam Bernstein: "Re: [OMPI users] CP2K mpi hang"</a>
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
