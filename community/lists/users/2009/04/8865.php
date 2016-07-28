<?
$subject_val = "Re: [OMPI users] mpirun: symbol lookup error:/usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 10 12:58:31 2009" -->
<!-- isoreceived="20090410165831" -->
<!-- sent="Fri, 10 Apr 2009 12:58:25 -0400" -->
<!-- isosent="20090410165825" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun: symbol lookup error:/usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init" -->
<!-- id="148DAD6C-E6BA-4F9C-8FBD-923C61294870_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="adbbb9af0904010900u6affe279w42e8971b10264836_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun: symbol lookup error:/usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-10 12:58:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8866.php">Jeff Squyres: "Re: [OMPI users] Problems configuring OpenMPI 1.3.1 with numa, torque, and openib"</a>
<li><strong>Previous message:</strong> <a href="8864.php">Gus Correa: "Re: [OMPI users] Fwd: shared libraries issue compiling 1.3.1/intel 10.1.022"</a>
<li><strong>In reply to:</strong> <a href="8717.php">Alessandro Surace: "[OMPI users] mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8878.php">Chris Walker: "Re: [OMPI users] mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 1, 2009, at 12:00 PM, Alessandro Surace wrote:
<br>
<p><span class="quotelev1">&gt; Hi guys, I try to repost my question...
</span><br>
<span class="quotelev1">&gt; I've a problem with the last stable build and the last nightly  
</span><br>
<span class="quotelev1">&gt; snapshot.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I run a job directly with mpirun no problem.
</span><br>
<span class="quotelev1">&gt; If I try to submit it with lsf:
</span><br>
<span class="quotelev1">&gt; bsub -a openmpi -m grid01 mpirun.lsf /mnt/ewd/mpi/fibonacci/ 
</span><br>
<span class="quotelev1">&gt; fibonacci_mpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get the follow error:
</span><br>
<span class="quotelev1">&gt; mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_plm_lsf.so:  
</span><br>
<span class="quotelev1">&gt; undefined symbol: lsb_init
</span><br>
<span class="quotelev1">&gt; Job  /opt/lsf/7.0/linux2.6-glibc2.3-x86/bin/openmpi_wrapper /mnt/ewd/ 
</span><br>
<span class="quotelev1">&gt; mpi/fibonacci/fibonacci_mpi
</span><br>
<p>Sorry for the delay in replying -- travel always gets me waaay behind  
<br>
on my INBOX...
<br>
<p>What is mpirun.lsh and the openmpi_wrapper executable?
<br>
<p><p><span class="quotelev1">&gt; I've verified that the lsb_init symbol is present in the library:
</span><br>
<span class="quotelev1">&gt; [root_at_grid01 lib]# strings libbat.* |grep lsb_init
</span><br>
<p>Can you try &quot;nm libbat.so | grep lsb_init&quot;?
<br>
<p><span class="quotelev1">&gt; No problem with version 1.2.9.
</span><br>
<p>FWIW, OMPI v1.2.9 did not have embedded LSF support.
<br>
<p>I wonder if you're somehow having two different versions of OMPI mixed  
<br>
up, or perhaps if two different elements are trying to use LSF support  
<br>
(e.g., this openmpi_wrapper thingy and Open MPI's mpirun itself...?).
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
<li><strong>Next message:</strong> <a href="8866.php">Jeff Squyres: "Re: [OMPI users] Problems configuring OpenMPI 1.3.1 with numa, torque, and openib"</a>
<li><strong>Previous message:</strong> <a href="8864.php">Gus Correa: "Re: [OMPI users] Fwd: shared libraries issue compiling 1.3.1/intel 10.1.022"</a>
<li><strong>In reply to:</strong> <a href="8717.php">Alessandro Surace: "[OMPI users] mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8878.php">Chris Walker: "Re: [OMPI users] mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
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
