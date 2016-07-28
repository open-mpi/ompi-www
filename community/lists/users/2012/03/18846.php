<?
$subject_val = "Re: [OMPI users] How to check that open MPI installed and work correctly";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 26 11:28:15 2012" -->
<!-- isoreceived="20120326152815" -->
<!-- sent="Mon, 26 Mar 2012 11:28:07 -0400" -->
<!-- isosent="20120326152807" -->
<!-- name="Tom Bryan" -->
<!-- email="tombry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to check that open MPI installed and work correctly" -->
<!-- id="CB960347.13D14%tombry_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="COL105-W55F47496F764049314A01A9D440_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to check that open MPI installed and work correctly<br>
<strong>From:</strong> Tom Bryan (<em>tombry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-26 11:28:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18847.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>Previous message:</strong> <a href="18845.php">giggzounet: "Re: [OMPI users] mpirun is in the PATH, but &quot;orted: command not found&quot;"</a>
<li><strong>In reply to:</strong> <a href="18841.php">Hameed Alzahrani: "[OMPI users] How to check that open MPI installed and work correctly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18876.php">Amit Ghadge: "Re: [OMPI users] How to check that open MPI installed and work correctly"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 3/25/12 5:22 PM, &quot;Hameed Alzahrani&quot; &lt;ibn_aibaan_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I installed open MPI on Linux cluster which consist of three machines. I want
</span><br>
<span class="quotelev1">&gt; to ask how can I check that open MPI work correctly and is there a special
</span><br>
<span class="quotelev1">&gt; configurations that I need to set to make the machines connect to each other
</span><br>
<span class="quotelev1">&gt; because I just installed open MPI without making extra configurations.
</span><br>
<p>Here's what we normally run:
<br>
<p>1) mpirun [options] hostname
<br>
2) mpirun [options] hello_c
<br>
3) mpirun [options] ring_c
<br>
<p>You'll need to figure out whether you need to specify any options in your
<br>
configuration.  For simple cases, the options would just be
<br>
-np 4
<br>
or however many processes you decide to run.
<br>
<p>Running hostname uses MPI to run a non-MPI program, and it will show you
<br>
where MPI ran the processes.
<br>
<p>Both hello_c and ring_c are included with Open MPI in the examples folder.
<br>
While they're both MPI programs, hello_c does no message passing, and ring_c
<br>
does some message passing.
<br>
<p>If something is fatally broken in your MPI configuration, then hostname
<br>
won't run.  If the MPI installation is correct, but your runtime environment
<br>
isn't set up right, hello_c will probably fail.  If all of that works, but
<br>
ring_c fails, then there's a problem with your MPI or systems configuration.
<br>
<p>Good luck!
<br>
---Tom
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18847.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>Previous message:</strong> <a href="18845.php">giggzounet: "Re: [OMPI users] mpirun is in the PATH, but &quot;orted: command not found&quot;"</a>
<li><strong>In reply to:</strong> <a href="18841.php">Hameed Alzahrani: "[OMPI users] How to check that open MPI installed and work correctly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18876.php">Amit Ghadge: "Re: [OMPI users] How to check that open MPI installed and work correctly"</a>
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
