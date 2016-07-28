<?
$subject_val = "Re: [MTT users] Splitting build and run phases";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  1 07:46:18 2009" -->
<!-- isoreceived="20090501114618" -->
<!-- sent="Fri, 1 May 2009 07:46:10 -0400" -->
<!-- isosent="20090501114610" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Splitting build and run phases" -->
<!-- id="A73B30E5-4A03-4274-84A9-E1D2CCA6DCE3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C61F716C.4AB5%bwbarre_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [MTT users] Splitting build and run phases<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-01 07:46:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0685.php">Matney Sr, Kenneth D.: "Re: [MTT users] Splitting build and run phases"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2009/04/0683.php">Barrett, Brian W: "[MTT users] Splitting build and run phases"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2009/04/0683.php">Barrett, Brian W: "[MTT users] Splitting build and run phases"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0685.php">Matney Sr, Kenneth D.: "Re: [MTT users] Splitting build and run phases"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 30, 2009, at 5:17 PM, Barrett, Brian W wrote:
<br>
<p><span class="quotelev1">&gt; I have what's probably a stupid question, but I couldn't find the  
</span><br>
<span class="quotelev1">&gt; answer on
</span><br>
<span class="quotelev1">&gt; the wiki.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>The wiki has a lot of info, but it is probably incomplete.  :-\
<br>
<p><span class="quotelev1">&gt; I've currently been building OMPI and the tests then running the  
</span><br>
<span class="quotelev1">&gt; tests all
</span><br>
<span class="quotelev1">&gt; in the same MTT run, all in a batch job.  The problem is, that means  
</span><br>
<span class="quotelev1">&gt; I've
</span><br>
<span class="quotelev1">&gt; got a bunch of nodes reserved while building OMPI, which I can't  
</span><br>
<span class="quotelev1">&gt; actually
</span><br>
<span class="quotelev1">&gt; use.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there any way to split the two phases (build and run) so that I  
</span><br>
<span class="quotelev1">&gt; can build
</span><br>
<span class="quotelev1">&gt; outside of the batch job, get the reservation, and run the tests?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Yes.  I actually have quite a sophisticated (if I do say so  
<br>
myself ;-) ) system at Cisco -- I split all my gets/installs/builds  
<br>
into separate slurm jobs from the corresponding test runs, for  
<br>
example.  In that way, I can submit a whole pile of 1-node SLURM jobs  
<br>
to do all the gets/installs/builds, and then N-node SLURM jobs for the  
<br>
test runs.  Even better, I make the N-node SLURM jobs depend on the 1- 
<br>
node SLURM get/install/build jobs.  That way, if the 1-node job fails  
<br>
(e.g., someone commits a build error to the tree and the MPI install  
<br>
phase fails), then SLURM will automatically dequeue any dependent jobs  
<br>
without even running them.  MTT would recognize this and simply not  
<br>
run the test run phases, but it's nice that SLURM just kills them  
<br>
without even running them.  :-)
<br>
<p>Anyhoo...  The client is quite flexible; you can limit what you run by  
<br>
phase and/or section.  Check out the output of &quot;./client/mtt --help&quot;.   
<br>
This part in particular:
<br>
<p>--[no-]mpi-get                  Do the &quot;MPI get&quot; phase
<br>
--[no-]mpi-install              Do the &quot;MPI install&quot; phase
<br>
--[no-]mpi-phases               Alias for --mpi-get --mpi-install
<br>
--[no-]test-get                 Do the &quot;Test get&quot; phase
<br>
--[no-]test-build               Do the &quot;Test build&quot; phase
<br>
--[no-]test-run                 Do the &quot;Test run&quot; phase
<br>
--[no-]test-phases              Alias for --test-get --test-build -- 
<br>
test-run
<br>
--[no-]section                  Do a specific section(s)
<br>
<p>By default, the client runs everything in finds in the ini file.  But  
<br>
you can tell it exactly what phases to run (or not to run).  For  
<br>
example, say I had 2 MPI get phases:
<br>
<p>[MPI get: ompi-nightly-trunk]
<br>
[MPI get: ompi-nightly-v1.3]
<br>
<p>You can tell the client to run just the MPI Get phases:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;./client/mtt --file ... --scratch ... --mpi-get
<br>
<p>Or you can tell the client to run just the &quot;trunk&quot; MPI Get phase:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;./client/mtt --file ... --scratch ... --mpi-get --section trunk
<br>
<p>--section matching is case-insensitive.
<br>
<p>BEWARE: the --section matching applies to *all* sections.   
<br>
Specifically, if you're running a reportable phase (MPI Install, Test  
<br>
Build, Test Install), you must *also* be able to match your reporter  
<br>
section or that section won't be included.  For example:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;./client/mtt --file ... --scratch ... --mpi-install --section gnu- 
<br>
standard --section reporter
<br>
<p>In my cisco-ompi-core-testing.ini file (see ompi-tests/trunk/cisco/ 
<br>
mtt), this will run the following sections:
<br>
<p>[MPI install: GNU-standard]
<br>
[Reporter: IU database]
<br>
<p>I have a &quot;nightly.pl&quot; script (same SVN dir, see above) that launches a  
<br>
set of very specific SLURM jobs to do Cisco's runs.  It reads the  
<br>
sections from the Cisco INI file and launches a whole series of 1-node  
<br>
SLURM jobs, each with a unique scratch tree, each doing a single MPI  
<br>
install section corresponding to a single MPI get section, and then  
<br>
doing all corresponding Test Builds.  It essentially runs &quot;run-mtt- 
<br>
compile.pl &lt;get_section&gt; &lt;install_section&gt;&quot;.  This script essentially  
<br>
does the following:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;# Run a single MPI Get phase
<br>
&nbsp;&nbsp;&nbsp;&nbsp;./client/mtt -p --file ... --scratch &lt;foo&gt; --mpi-get --section  
<br>
reporter --section &lt;get_section&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# if ^^ succeeds, run a single MPI install phase
<br>
&nbsp;&nbsp;&nbsp;&nbsp;./client/mtt -p --file ... --scratch &lt;foo&gt; --mpi-install --section  
<br>
reporter --section &lt;install_section&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# if ^^ succeeds, run all corresponding Test Get and Test Build  
<br>
phases
<br>
&nbsp;&nbsp;&nbsp;&nbsp;./client/mtt -p --file ... --scratch &lt;foo&gt; --test-get --test-build
<br>
<p>I also sbatch a whole pile of corresponding N-node Test Run SLURM jobs  
<br>
that are dependent upon the above SLURM job that essentially run the  
<br>
following:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;./client/mtt -p --file ... --scratch &lt;foo&gt; --test-run --section  
<br>
reporter --section &lt;run_section&gt;
<br>
<p>Hope that helps.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0685.php">Matney Sr, Kenneth D.: "Re: [MTT users] Splitting build and run phases"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2009/04/0683.php">Barrett, Brian W: "[MTT users] Splitting build and run phases"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2009/04/0683.php">Barrett, Brian W: "[MTT users] Splitting build and run phases"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0685.php">Matney Sr, Kenneth D.: "Re: [MTT users] Splitting build and run phases"</a>
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
