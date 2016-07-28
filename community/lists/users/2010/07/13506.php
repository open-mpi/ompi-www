<?
$subject_val = "Re: [OMPI users] perhaps an openmpi bug, how best to identify?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  7 12:50:40 2010" -->
<!-- isoreceived="20100707165040" -->
<!-- sent="Wed, 07 Jul 2010 18:50:33 +0200" -->
<!-- isosent="20100707165033" -->
<!-- name="Olivier Marsden" -->
<!-- email="Olivier.Marsden_at_[hidden]" -->
<!-- subject="Re: [OMPI users] perhaps an openmpi bug, how best to identify?" -->
<!-- id="4C34B059.802_at_ec-lyon.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="21A32A45-0039-4847-A456-ADA388B6E110_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] perhaps an openmpi bug, how best to identify?<br>
<strong>From:</strong> Olivier Marsden (<em>Olivier.Marsden_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-07 12:50:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13507.php">Jeff Squyres: "Re: [OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<li><strong>Previous message:</strong> <a href="13505.php">Nguyen Toan: "[OMPI users] Question on checkpoint overhead in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="13500.php">Jeff Squyres: "Re: [OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13507.php">Jeff Squyres: "Re: [OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<li><strong>Reply:</strong> <a href="13507.php">Jeff Squyres: "Re: [OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff, thanks for the response.
<br>
As soon as I can afford to reboot my workstation,
<br>
like tomorrow, I will test as you suggest whether the computer
<br>
actually hangs or just slows down. For exhaustive kernel logging,
<br>
I replaced the following line
<br>
kern.*               -/var/log/kern.log
<br>
with
<br>
kern.*                /var/log/kern.log
<br>
in my /etc/rsyslog.d/50-default.conf file, does that look about right?
<br>
<p>Regards,
<br>
<p>Olivier Marsden
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jul 7, 2010, at 10:20 AM, Olivier Marsden wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; The (7 process) code runs correctly on my workstation using mpich2 (latest
</span><br>
<span class="quotelev2">&gt;&gt; stable version) &amp; ifort 11.1, using intel-mpi &amp; ifort 11.1, but 
</span><br>
<span class="quotelev2">&gt;&gt; randomly hangs the
</span><br>
<span class="quotelev2">&gt;&gt; computer (vanilla ubuntu 9.10 kernel v. 2.6.31 ) to the point where only
</span><br>
<span class="quotelev2">&gt;&gt; a magic
</span><br>
<span class="quotelev2">&gt;&gt; sysrq combination can &quot;save&quot; me (i.e. reboot), when using
</span><br>
<span class="quotelev2">&gt;&gt; - openmpi 1.4.2 compiled from source with gcc, ifort for mpif90
</span><br>
<span class="quotelev2">&gt;&gt; - clustertools v. 8.2.1c distribution from sun/oracle, also based on
</span><br>
<span class="quotelev2">&gt;&gt; openmpi 1.4.2, using sun f90
</span><br>
<span class="quotelev2">&gt;&gt;   for mpif90
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yowza.  Open MPI is user space code, so it should never be able to hang the entire computer.  Open MPI and MPICH2 do implement things in very different ways, so it's quite possible that we trip entirely different code paths in the same linux kernel.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Never say &quot;never&quot; -- it could well be an Open MPI bug.  But it smells like a kernel bug...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I am prepared to do some testing if that can help, but don't know the
</span><br>
<span class="quotelev2">&gt;&gt; best way to identify what's going on.
</span><br>
<span class="quotelev2">&gt;&gt; I have found no useful information in the syslog files.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is the machine totally hung?  Or is it just running really, really slowly?  Try leaving some kind of slowly-monitoring process running in the background and see if it keeps running (perhaps even more slowly than before) when the machine hangs.  E.g., something like a shell script that loops over sleeping for a second and then appending the output of &quot;date&quot; to a file.  Or something like that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My point: see if Open MPI went into some hyper-aggressive mode where it's (literally) stealing every available cycle and making the machine look hung.  You might even want to try running the OMPI procs at a low priority to see if it can help alleviate the &quot;steal all cycles&quot; mode (if that is, indeed, what is happening).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the machine is truly hung, then something else might be going on.  Do any kernel logs report anything?  Can you crank up your syslog to report *all* events, for example?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13507.php">Jeff Squyres: "Re: [OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<li><strong>Previous message:</strong> <a href="13505.php">Nguyen Toan: "[OMPI users] Question on checkpoint overhead in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="13500.php">Jeff Squyres: "Re: [OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13507.php">Jeff Squyres: "Re: [OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<li><strong>Reply:</strong> <a href="13507.php">Jeff Squyres: "Re: [OMPI users] perhaps an openmpi bug, how best to identify?"</a>
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
