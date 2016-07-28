<?
$subject_val = "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  8 13:54:31 2008" -->
<!-- isoreceived="20081208185431" -->
<!-- sent="Mon, 8 Dec 2008 14:49:37 -0400" -->
<!-- isosent="20081208184937" -->
<!-- name="douglas.guptill_at_[hidden]" -->
<!-- email="douglas.guptill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1" -->
<!-- id="20081208184937.GA22639_at_DOME" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="493CC989.90500_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1<br>
<strong>From:</strong> <a href="mailto:douglas.guptill_at_[hidden]?Subject=Re:%20[OMPI%20users]%20trouble%20using%20--mca%20mpi_yield_when_idle%201"><em>douglas.guptill_at_[hidden]</em></a><br>
<strong>Date:</strong> 2008-12-08 13:49:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7465.php">Douglas Guptill: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Previous message:</strong> <a href="7463.php">Tim Mattox: "Re: [OMPI users] undefined symbol: MPI_Send"</a>
<li><strong>In reply to:</strong> <a href="7444.php">Eugene Loh: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7467.php">Eugene Loh: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Reply:</strong> <a href="7467.php">Eugene Loh: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Eugene:
<br>
<p>On Sun, Dec 07, 2008 at 11:15:21PM -0800, Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; Douglas Guptill wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;Hi:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;I am using openmpi-1.2.8 to run a 2 processor job on an Intel
</span><br>
<span class="quotelev2">&gt; &gt;Quad-core cpu.  Opsys is Debian etch.  I am reaonably sure that, most
</span><br>
<span class="quotelev2">&gt; &gt;of the time, one process is waiting for results from the other.  The
</span><br>
<span class="quotelev2">&gt; &gt;code is fortran 90, and uses mpi_send and mpi_recv.  Yet
</span><br>
<span class="quotelev2">&gt; &gt;&quot;gnome-system-monitor&quot; shows 2 cpus at 100%.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;So I read, and re-read, the FAQs, and found the mpi_yield_when_idle
</span><br>
<span class="quotelev2">&gt; &gt;flag, and tried it:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;mpirun --host localhost,localhost,localhost,localhost --mca btl sm,self 
</span><br>
<span class="quotelev2">&gt; &gt;--mca mpi_yield_when_idle 1 --byslot -np 2 
</span><br>
<span class="quotelev2">&gt; &gt;/home/dguptill/software/sopale_nested_2008-10-24/bin/sopale_nested_openmpi-intel-noopt
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;And still get, for each run, two cpus are at 100%.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;My goal is to get the system to a minimum usage state, where only one
</span><br>
<span class="quotelev2">&gt; &gt;cpu is being used, if one process is waiting for results from the
</span><br>
<span class="quotelev2">&gt; &gt;other.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Can anyone suggest if this is possible, and if so, how?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; I'm no expert on this, but I've played with the same problem.  I think I 
</span><br>
<span class="quotelev1">&gt; did this on Solaris, but perhaps the behavior is the same on other OSes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One issue is that &quot;yield&quot; might mean &quot;yield if there is someone else 
</span><br>
<span class="quotelev1">&gt; ready to run&quot;.  Like a traffic sign:  if someone else is there, you 
</span><br>
<span class="quotelev1">&gt; yield.  If no one else is there, there's no way to tell that someone is 
</span><br>
<span class="quotelev1">&gt; yielding.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Next, even if someone else is trying to run, &quot;yield&quot; doesn't give give 
</span><br>
<span class="quotelev1">&gt; up the CPU 100%.  It's still rather pesky.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, one question is whether you really want to have an idle CPU.  Do 
</span><br>
<span class="quotelev1">&gt; you, or do you simply want another process, if there is one, to be able 
</span><br>
<span class="quotelev1">&gt; to run?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not a real answer to your question, but hopefully this helps.
</span><br>
<p>It does.  I think you have raised an excellent question: yield to who?
<br>
<p>I can think of 3 classes of process:
<br>
&nbsp;&nbsp;1. other processes created by the same &quot;mpirun&quot;
<br>
&nbsp;&nbsp;2. other processes created by a different &quot;mpirun&quot;
<br>
&nbsp;&nbsp;3. other processes.
<br>
<p>Classes 2 and 3 seem to be out of the range of possibility under the
<br>
circumstances, so we are left with class 1.  In my case, there are
<br>
only two processes:
<br>
&nbsp;&nbsp;one is computing, 
<br>
&nbsp;&nbsp;the other is in &quot;mpi_recv&quot;.
<br>
<p>Proceeding from that, it seems that &quot;mpi_recv&quot; is implemented as 
<br>
&nbsp;&nbsp;&quot;poll forever until the message comes&quot;
<br>
and NOT as 
<br>
&nbsp;&nbsp;&nbsp;&quot;sleep until the message comes&quot; 
<br>
<p>I had assumed, until now, that mpi_recv would be implemented as the
<br>
second.
<br>
<p>If &quot;mpi_recv&quot; is implemented as &quot;poll forever&quot;, openmpi (or any MPI
<br>
with the same implementation) would seem to be unsuitable for my
<br>
application, since the application is using two cpus, but only getting
<br>
real work out of one.
<br>
<p>Regards,
<br>
Douglas.
<br>
<pre>
-- 
  Douglas Guptill                       
  Research Assistant, LSC 4640          email: douglas.guptill_at_[hidden]
  Oceanography Department               fax:   902-494-3877
  Dalhousie University
  Halifax, NS, B3H 4J1, Canada
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7465.php">Douglas Guptill: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Previous message:</strong> <a href="7463.php">Tim Mattox: "Re: [OMPI users] undefined symbol: MPI_Send"</a>
<li><strong>In reply to:</strong> <a href="7444.php">Eugene Loh: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7467.php">Eugene Loh: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Reply:</strong> <a href="7467.php">Eugene Loh: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
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
