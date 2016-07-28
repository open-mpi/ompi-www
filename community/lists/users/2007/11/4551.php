<?
$subject_val = "Re: [OMPI users] Run a process double";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 28 22:28:10 2007" -->
<!-- isoreceived="20071129032810" -->
<!-- sent="Wed, 28 Nov 2007 22:27:41 -0500" -->
<!-- isosent="20071129032741" -->
<!-- name="Mark Potts" -->
<!-- email="potts_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Run a process double" -->
<!-- id="474E31AD.4010700_at_hpcapplications.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="474DF3A1.9020906_at_yahoo.com.ar" -->
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
<strong>Subject:</strong> Re: [OMPI users] Run a process double<br>
<strong>From:</strong> Mark Potts (<em>potts_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-28 22:27:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4552.php">Neeraj Chourasia: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Previous message:</strong> <a href="4550.php">Damien Hocking: "Re: [OMPI users] Run a process double"</a>
<li><strong>In reply to:</strong> <a href="4549.php">Henry Adolfo Lambis Miranda: "[OMPI users] Run a process double"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4557.php">Reuti: "Re: [OMPI users] Run a process double"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Henry,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Apologies ahead of time for any unintended insults, but...
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Your &quot;a.out&quot; sounds like it is not truly a parallel code.  If you
<br>
&nbsp;&nbsp;&nbsp;&nbsp;submit a hello_world program using OpenMPI's mpirun, you will simply
<br>
&nbsp;&nbsp;&nbsp;&nbsp;get two copies of &quot;Hello World&quot; printed to the screen.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;If you want the work shared, you must change your serial program
<br>
&nbsp;&nbsp;&nbsp;&nbsp;such that it executes different code pieces or operates on different
<br>
&nbsp;&nbsp;&nbsp;&nbsp;portions of your data, based on something like the &quot;rank&quot; of the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;process.  (Rank is the numerical ID assigned by MPI to each process
<br>
&nbsp;&nbsp;&nbsp;&nbsp;running from a single invocation of mpirun.)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;All MPI, or specifically OpenMPI, provides you is a vehicle to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;launch multiple copies of a program or programs and then to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;facilitate the communication of those separate processes with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;one another.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Perhaps a primer on parallel processing would be in order.  Or since
<br>
&nbsp;&nbsp;&nbsp;&nbsp;you have started with Message Passing, perhaps the old standard
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&quot;Using MPI Portable Parallel Programming with the Message-Passing
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Interface, MIT Press, by Gropp, Lusk, and Skjellum would give you
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the familiarization needed.  Other books in that series by some of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the same authors are also good starting points for MPI.  I'm sure
<br>
&nbsp;&nbsp;&nbsp;&nbsp;other readers can pipe in with a host of better references.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Good luck.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;regards,
<br>
<p>Henry Adolfo Lambis Miranda wrote:
<br>
<span class="quotelev1">&gt; Hi everybody out there.....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is my first post to the mail list.
</span><br>
<span class="quotelev1">&gt; I have installed openmp 1.2.4 over a x_64 AMD double processor with SuSE
</span><br>
<span class="quotelev1">&gt; linux.
</span><br>
<span class="quotelev1">&gt; In principal, the instalation was succefull, with ifort 10.X.
</span><br>
<span class="quotelev1">&gt; But when i run any code ( mpirun -np 2 a.out), instead of share the
</span><br>
<span class="quotelev1">&gt; calcules between the two
</span><br>
<span class="quotelev1">&gt; processor, the system duplicate the executable and send one to each
</span><br>
<span class="quotelev1">&gt; processor.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i don&#180;t know what the h$%&amp; is going on......
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; regards..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Henry
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
***********************************
 &gt;&gt; Mark J. Potts, PhD
 &gt;&gt;
 &gt;&gt; HPC Applications Inc.
 &gt;&gt; phone: 410-992-8360 Bus
 &gt;&gt;        410-313-9318 Home
 &gt;&gt;        443-418-4375 Cell
 &gt;&gt; email: potts_at_[hidden]
 &gt;&gt;        potts_at_[hidden]
***********************************
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4552.php">Neeraj Chourasia: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Previous message:</strong> <a href="4550.php">Damien Hocking: "Re: [OMPI users] Run a process double"</a>
<li><strong>In reply to:</strong> <a href="4549.php">Henry Adolfo Lambis Miranda: "[OMPI users] Run a process double"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4557.php">Reuti: "Re: [OMPI users] Run a process double"</a>
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
