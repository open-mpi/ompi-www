<?
$subject_val = "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  6 22:17:20 2010" -->
<!-- isoreceived="20100507021720" -->
<!-- sent="Thu, 6 May 2010 22:17:15 -0400" -->
<!-- isosent="20100507021715" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?" -->
<!-- id="4C0B5488-BE87-411A-B80A-2504B7D27F91_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BE36080.8000500_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-06 22:17:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12950.php">David Logan: "[OMPI users] openmpi 1.4.1"</a>
<li><strong>Previous message:</strong> <a href="12948.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12948.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12955.php">John Hearns: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12955.php">John Hearns: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 6, 2010, at 8:36 PM, Gus Correa wrote:
<br>
<p><span class="quotelev2">&gt; &gt; BUT: a user can always override the &quot;btl&quot; MCA param and see them again.  For example, you could also have done this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    echo &quot;btl =&quot; &gt; ~/.openmpi/mca-params.conf
</span><br>
<span class="quotelev2">&gt; &gt;    ompi_info --all | grep btl_sm_num_fifos
</span><br>
<span class="quotelev2">&gt; &gt;    # ...will show the sm params...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Aha!
</span><br>
<span class="quotelev1">&gt; Can they override my settings?!
</span><br>
<span class="quotelev1">&gt; Can't anymore.
</span><br>
<span class="quotelev1">&gt; I'm gonna write a BOFH cron script to run every 10 minutes,
</span><br>
<span class="quotelev1">&gt; check for and delete any ~/.openmpi directory,
</span><br>
<span class="quotelev1">&gt; shutdown the recalcitrant account, make a tarball of its ~ ,
</span><br>
<span class="quotelev1">&gt; and send it to the mass store.  Quarantined. :)
</span><br>
<p>That's the spirit!  I'll add this recipie to the FAQ.
<br>
<p>;-)
<br>
<p><span class="quotelev1">&gt; I don't think the problem is with Open MPI.
</span><br>
<span class="quotelev1">&gt; So, it may not be easy to find a logical link between the kernel
</span><br>
<span class="quotelev1">&gt; messages and the MPI hello_c that was running.
</span><br>
<p>FWIW, we have found that the xlinpack_xeon64 benchmark binary that comes with the Intel compiler is very good at tracking down bad ram, etc.  Run really large runs (as big as your memory can handle) for hours at a time.
<br>
<p><span class="quotelev1">&gt; So, chances are that hyperthreading may give us a little edge,
</span><br>
<span class="quotelev1">&gt; harnessing the code imperfections.
</span><br>
<span class="quotelev1">&gt; Not a big one, maybe 10-20%, I would guess.
</span><br>
<span class="quotelev1">&gt; I experienced that type of speedup with SMT/HT on an IBM machine
</span><br>
<span class="quotelev1">&gt; with one of these big codes.
</span><br>
<p>Indeed.  I have seen some people have HT enabled in the bios just so that they can have the software option of turning them off via linux -- then you can run with HT and without it and see what it does to your specific codes.
<br>
<p><span class="quotelev1">&gt; I've got hello_c to run correctly with heavy oversubscription on
</span><br>
<span class="quotelev1">&gt; our cluster nodes (up to 1024 on a 8-core node IIRR).
</span><br>
<p>Good.
<br>
<p><span class="quotelev1">&gt; Heavier programs don't go this far, but still run with light
</span><br>
<span class="quotelev1">&gt; oversubscription.
</span><br>
<p>They probably are still running (even with heavy oversubscription), but probably running at an absolutely glacial rate -- because all of them are aggressively competing for cycles.  When running with any level of oversubscription, try using --mca mpi_yield_when_idle 1, which makes OMPI sched_yield() inside of its progression loops.  If you have MPI-heavy apps, it can make oversubscribed situations run faster than glacial.
<br>
<p><span class="quotelev1">&gt; But on that Nehalem + Fedora 12 machine it doesn't work.
</span><br>
<span class="quotelev1">&gt; So, the evidence is clear.
</span><br>
<span class="quotelev1">&gt; The problem is not with Open MPI.
</span><br>
<p>I'm glad it's not us, but I don't envy you trying to track down what the problem is.  :-(
<br>
<p><span class="quotelev3">&gt; &gt;&gt; Message from syslogd_at_spinoza at May  6 13:38:13 ...
</span><br>
<span class="quotelev3">&gt; &gt;&gt; kernel:Code: 48 89 45 a0 4c 89 ff e8 e0 dd 2b 00 41 8b b6 58 03 00 00 4c 89 e7 ff c6 e8 b5 bc ff ff 41 8b 96 5c 03 00 00 48 98 48 39 d0 73 04 &lt;0f&gt; 0b eb fe 48 29 d0 48 89 45 a8 66 41 ff 07 49 8b 94 24 00 01
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think the last one is hexa for Dante Alighieri's Inferno:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;Lasciate ogni speranza voi ch'entrate&quot;
</span><br>
<p>Well done!  I love it.  :-)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12950.php">David Logan: "[OMPI users] openmpi 1.4.1"</a>
<li><strong>Previous message:</strong> <a href="12948.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12948.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12955.php">John Hearns: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12955.php">John Hearns: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
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
