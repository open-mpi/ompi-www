<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Sep  8 03:20:30 2007" -->
<!-- isoreceived="20070908072030" -->
<!-- sent="Sat, 8 Sep 2007 09:20:25 +0200" -->
<!-- isosent="20070908072025" -->
<!-- name="Paul Cochrane" -->
<!-- email="paultcochrane_at_[hidden]" -->
<!-- subject="Re: [OMPI users] parallel processing on two quad core macs...help please!" -->
<!-- id="8e8ee0d40709080020q55729b8i7b0d92ca71771a9b_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="d4c979af0709072053h5503b217odeb51d3c0314f452_at_mail.gmail.com" -->
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
<strong>From:</strong> Paul Cochrane (<em>paultcochrane_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-08 03:20:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3985.php">Foster, John T: "[OMPI users] Configure Error Mac OS X with Intel Compilers"</a>
<li><strong>Previous message:</strong> <a href="3983.php">Ashley Dowling: "[OMPI users] parallel processing on two quad core macs...help please!"</a>
<li><strong>In reply to:</strong> <a href="3983.php">Ashley Dowling: "[OMPI users] parallel processing on two quad core macs...help please!"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 08/09/07, Ashley Dowling &lt;ashley.dowling_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am very much a novice at all this so please forgive my ignorance. I am
</span><br>
<span class="quotelev1">&gt; trying to set up a piece of analytical software for parallel processing of
</span><br>
<span class="quotelev1">&gt; my datasets on two quad core Mac Pros. I have managed to install OpenMPI on
</span><br>
<span class="quotelev1">&gt; the Macs, compile the software, and get it to run in parallel across the
</span><br>
<span class="quotelev1">&gt; four nodes within each Mac. My sticking point now is how to get it to run on
</span><br>
<span class="quotelev1">&gt; all eight nodes (two Macs) in parallel. The instructions on the webpage for
</span><br>
<span class="quotelev1">&gt; the software use Lam and are as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Running MrBayes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First we have to start the 'lam' by creating a text file called lamhost. If
</span><br>
<span class="quotelev1">&gt; you are using one quad G5 machine, you need only one line &quot;localhost cpu=4&quot;,
</span><br>
<span class="quotelev1">&gt; e.g. by typing in the terminal window
</span><br>
<span class="quotelev1">&gt;   echo &quot;localhost cpu=4&quot; &gt; lamhosts
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When you have multiple machines, you need a line for every machine in the
</span><br>
<span class="quotelev1">&gt; lamhost file and the full machine name instead of localhost. The file might
</span><br>
<span class="quotelev1">&gt; look like
</span><br>
<span class="quotelev1">&gt;   $ cat lamhosts
</span><br>
<span class="quotelev1">&gt;  mac01 cpu=4
</span><br>
<span class="quotelev1">&gt;  mac02 cpu=4
</span><br>
<span class="quotelev1">&gt;  mac03 cpu=4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To start the lam you can type
</span><br>
<span class="quotelev1">&gt;   lamboot lamhosts
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; from a terminal window.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To run mrbayes on N processors, you use
</span><br>
<span class="quotelev1">&gt;   mpirun -np N ./mb
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; N is typically four times the number of machines you are using.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To stop the lam type
</span><br>
<span class="quotelev1">&gt;   wipe lamhosts
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in a terminal window.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Retrieved from &quot;
</span><br>
<span class="quotelev1">&gt; <a href="http://mrbayes.csit.fsu.edu/wiki/index.php/FAQ_3.2">http://mrbayes.csit.fsu.edu/wiki/index.php/FAQ_3.2</a>&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Obviously this doesn't work on MPI since there is no lamboot. Is there an
</span><br>
<span class="quotelev1">&gt; equivalent command to use? Or better yet, how do I go about getting these
</span><br>
<span class="quotelev1">&gt; two machines to communicate in parallel? I have scoured the web looking for
</span><br>
<span class="quotelev1">&gt; advice on this, but as I mentioned, I am new at this and I think some of the
</span><br>
<span class="quotelev1">&gt; things I have found are just way over my head right now and have hit the
</span><br>
<span class="quotelev1">&gt; point where I am giving up and asking for help. Any info/instructions/advice
</span><br>
<span class="quotelev1">&gt; (written in terms I can understand) would be greatly appreciated.
</span><br>
<p>Ashley,
<br>
<p>Did you try the OpenMPI web page?  (<a href="http://www.openmpi.org">http://www.openmpi.org</a>).  There's
<br>
lots of info there, and help for running MPI jobs can be found in the
<br>
FAQ:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=running">http://www.open-mpi.org/faq/?category=running</a>
<br>
<p>HTH
<br>
<p>Paul
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3985.php">Foster, John T: "[OMPI users] Configure Error Mac OS X with Intel Compilers"</a>
<li><strong>Previous message:</strong> <a href="3983.php">Ashley Dowling: "[OMPI users] parallel processing on two quad core macs...help please!"</a>
<li><strong>In reply to:</strong> <a href="3983.php">Ashley Dowling: "[OMPI users] parallel processing on two quad core macs...help please!"</a>
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
