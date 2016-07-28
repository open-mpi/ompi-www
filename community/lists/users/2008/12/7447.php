<?
$subject_val = "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  8 04:01:23 2008" -->
<!-- isoreceived="20081208090123" -->
<!-- sent="Mon, 08 Dec 2008 10:01:18 +0100" -->
<!-- isosent="20081208090118" -->
<!-- name="Jens" -->
<!-- email="jens-devel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1" -->
<!-- id="493CE25E.8050202_at_gmx.de" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Jens (<em>jens-devel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-08 04:01:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7448.php">Barry Rountree: "[OMPI users] How to force eager behavior during Isend?"</a>
<li><strong>Previous message:</strong> <a href="7446.php">Yasmine Yacoub: "[OMPI users] MCA parameter"</a>
<li><strong>In reply to:</strong> <a href="7444.php">Eugene Loh: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7449.php">Terry Frankcombe: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Reply:</strong> <a href="7449.php">Terry Frankcombe: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Douglas,
<br>
<p>this an answer to my question on the paraview-mailinglist.
<br>
<p>I have the same problem with paraview, that it simply waits for more to
<br>
do in client-server(MPI) mode, but is running on 100%.
<br>
<p>Different MPI-Implementations seem to behave different here. Using
<br>
MPICH2 for example does not result in 100% cpu-time for paraview while
<br>
waiting.
<br>
<p>I desperate to know if that is possible with open-mpi, too. These FAQs
<br>
where interesting, but did not help:
<br>
<a href="http://www.open-mpi.org/faq/?category=running#oversubscribing">http://www.open-mpi.org/faq/?category=running#oversubscribing</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=running#force-aggressive-degraded">http://www.open-mpi.org/faq/?category=running#force-aggressive-degraded</a>
<br>
<p>Greetings
<br>
Jens
<br>
<p>Eugene Loh schrieb:
<br>
<span class="quotelev1">&gt; Douglas Guptill wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am using openmpi-1.2.8 to run a 2 processor job on an Intel
</span><br>
<span class="quotelev2">&gt;&gt; Quad-core cpu.  Opsys is Debian etch.  I am reaonably sure that, most
</span><br>
<span class="quotelev2">&gt;&gt; of the time, one process is waiting for results from the other.  The
</span><br>
<span class="quotelev2">&gt;&gt; code is fortran 90, and uses mpi_send and mpi_recv.  Yet
</span><br>
<span class="quotelev2">&gt;&gt; &quot;gnome-system-monitor&quot; shows 2 cpus at 100%.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So I read, and re-read, the FAQs, and found the mpi_yield_when_idle
</span><br>
<span class="quotelev2">&gt;&gt; flag, and tried it:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --host localhost,localhost,localhost,localhost --mca btl
</span><br>
<span class="quotelev2">&gt;&gt; sm,self --mca mpi_yield_when_idle 1 --byslot -np 2
</span><br>
<span class="quotelev2">&gt;&gt; /home/dguptill/software/sopale_nested_2008-10-24/bin/sopale_nested_openmpi-intel-noopt
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And still get, for each run, two cpus are at 100%.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My goal is to get the system to a minimum usage state, where only one
</span><br>
<span class="quotelev2">&gt;&gt; cpu is being used, if one process is waiting for results from the
</span><br>
<span class="quotelev2">&gt;&gt; other.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can anyone suggest if this is possible, and if so, how?
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7448.php">Barry Rountree: "[OMPI users] How to force eager behavior during Isend?"</a>
<li><strong>Previous message:</strong> <a href="7446.php">Yasmine Yacoub: "[OMPI users] MCA parameter"</a>
<li><strong>In reply to:</strong> <a href="7444.php">Eugene Loh: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7449.php">Terry Frankcombe: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Reply:</strong> <a href="7449.php">Terry Frankcombe: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
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
