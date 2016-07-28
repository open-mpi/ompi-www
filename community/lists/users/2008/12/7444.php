<?
$subject_val = "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  8 02:11:40 2008" -->
<!-- isoreceived="20081208071140" -->
<!-- sent="Sun, 07 Dec 2008 23:15:21 -0800" -->
<!-- isosent="20081208071521" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1" -->
<!-- id="493CC989.90500_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20081207003821.GA15049_at_DOME" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-08 02:15:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7445.php">Barry Rountree: "[OMPI users] How to force eager behavior during Isend?"</a>
<li><strong>Previous message:</strong> <a href="7443.php">David Singleton: "Re: [OMPI users] pgi and gcc runtime compatability"</a>
<li><strong>In reply to:</strong> <a href="7438.php">Douglas Guptill: "[OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7447.php">Jens: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Reply:</strong> <a href="7447.php">Jens: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Reply:</strong> <a href="7464.php">douglas.guptill_at_[hidden]: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Douglas Guptill wrote:
<br>
<p><span class="quotelev1">&gt;Hi:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I am using openmpi-1.2.8 to run a 2 processor job on an Intel
</span><br>
<span class="quotelev1">&gt;Quad-core cpu.  Opsys is Debian etch.  I am reaonably sure that, most
</span><br>
<span class="quotelev1">&gt;of the time, one process is waiting for results from the other.  The
</span><br>
<span class="quotelev1">&gt;code is fortran 90, and uses mpi_send and mpi_recv.  Yet
</span><br>
<span class="quotelev1">&gt;&quot;gnome-system-monitor&quot; shows 2 cpus at 100%.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;So I read, and re-read, the FAQs, and found the mpi_yield_when_idle
</span><br>
<span class="quotelev1">&gt;flag, and tried it:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --host localhost,localhost,localhost,localhost --mca btl sm,self --mca mpi_yield_when_idle 1 --byslot -np 2 /home/dguptill/software/sopale_nested_2008-10-24/bin/sopale_nested_openmpi-intel-noopt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;And still get, for each run, two cpus are at 100%.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;My goal is to get the system to a minimum usage state, where only one
</span><br>
<span class="quotelev1">&gt;cpu is being used, if one process is waiting for results from the
</span><br>
<span class="quotelev1">&gt;other.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Can anyone suggest if this is possible, and if so, how?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
I'm no expert on this, but I've played with the same problem.  I think I 
<br>
did this on Solaris, but perhaps the behavior is the same on other OSes.
<br>
<p>One issue is that &quot;yield&quot; might mean &quot;yield if there is someone else 
<br>
ready to run&quot;.  Like a traffic sign:  if someone else is there, you 
<br>
yield.  If no one else is there, there's no way to tell that someone is 
<br>
yielding.
<br>
<p>Next, even if someone else is trying to run, &quot;yield&quot; doesn't give give 
<br>
up the CPU 100%.  It's still rather pesky.
<br>
<p>So, one question is whether you really want to have an idle CPU.  Do 
<br>
you, or do you simply want another process, if there is one, to be able 
<br>
to run?
<br>
<p>Not a real answer to your question, but hopefully this helps.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7445.php">Barry Rountree: "[OMPI users] How to force eager behavior during Isend?"</a>
<li><strong>Previous message:</strong> <a href="7443.php">David Singleton: "Re: [OMPI users] pgi and gcc runtime compatability"</a>
<li><strong>In reply to:</strong> <a href="7438.php">Douglas Guptill: "[OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7447.php">Jens: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Reply:</strong> <a href="7447.php">Jens: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Reply:</strong> <a href="7464.php">douglas.guptill_at_[hidden]: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
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
