<?
$subject_val = "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  6 13:11:44 2010" -->
<!-- isoreceived="20100506171144" -->
<!-- sent="Thu, 06 May 2010 13:11:35 -0400" -->
<!-- isosent="20100506171135" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?" -->
<!-- id="4BE2F847.9030900_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100506165118.GA8943_at_sopalepc" -->
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
<strong>Subject:</strong> Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-06 13:11:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12930.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12928.php">Eugene Loh: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12927.php">Douglas Guptill: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12930.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12930.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Douglas
<br>
<p>Just for the record, I am using:
<br>
Open MPI 1.4.2 (released 2 days ago), gcc 4.4.3  (g++, gfortran).
<br>
All on Fedora Core 12, kernel 2.6.32.11-99.fc12.x86_64 #1 SMP.
<br>
The machine is a white box with two-way
<br>
quad-core Intel Xeon (Nehalem) E5540  @ 2.53GHz, 48GB RAM.
<br>
Hyperthreading is currently turned on.
<br>
<p>But please, don't spend more time on this.
<br>
You already gave a lot of help.
<br>
<p>I guess this would be fixed if I could reinstall the OS
<br>
using a more stable Linux distribution, not Fedora.
<br>
You and Jeff reported that your
<br>
Nehalems get along with Open MPI.
<br>
I would guess other people have functional Open MPI + Nehalem systems.
<br>
All I can think of is that some mess with the OS/gcc is causing
<br>
the trouble here.
<br>
<p>(Yes, to avoid trouble I always compile MPI
<br>
and applications with the same compiler set.
<br>
And keep a bunch of Open MPI builds to match our needs.)
<br>
<p>Cheers,
<br>
Gus Correa
<br>
<p><p>Douglas Guptill wrote:
<br>
<span class="quotelev1">&gt; Hello Gus:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, May 06, 2010 at 11:26:57AM -0400, Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Douglas:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Would you know which gcc you used to build your Open MPI?
</span><br>
<span class="quotelev2">&gt;&gt; Or did you use Intel icc instead?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Intel ifort and icc.  I build OpenMPI with the same compiler, and same
</span><br>
<span class="quotelev1">&gt; options, that I build my application with.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have been tempted to try and duplicate your problem.  Would that be a
</span><br>
<span class="quotelev1">&gt; helpful experiment?  gcc, OpenMPI 1.4.1, IIRC ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Douglas.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12930.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12928.php">Eugene Loh: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12927.php">Douglas Guptill: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12930.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12930.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
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
