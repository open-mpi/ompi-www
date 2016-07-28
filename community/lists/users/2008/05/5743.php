<?
$subject_val = "Re: [OMPI users] OpenMPI+PGI errors";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 28 08:19:13 2008" -->
<!-- isoreceived="20080528121913" -->
<!-- sent="Wed, 28 May 2008 08:19:03 -0400" -->
<!-- isosent="20080528121903" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI+PGI errors" -->
<!-- id="C330CC56-2462-4689-9EC8-EC93D45BE45D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="df8c8a6d0805270847s73efcf10m6af5767953522af0_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI+PGI errors<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-28 08:19:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5744.php">Jeff Squyres: "Re: [OMPI users] [torqueusers] Job dies randomly, but only through torque"</a>
<li><strong>Previous message:</strong> <a href="5742.php">Jeff Squyres: "Re: [OMPI users] Open MPI instructional videos"</a>
<li><strong>In reply to:</strong> <a href="5735.php">Jim Kusznir: "Re: [OMPI users] OpenMPI+PGI errors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 27, 2008, at 11:47 AM, Jim Kusznir wrote:
<br>
<p><span class="quotelev1">&gt; I have updated to OpenMPI 1.2.6 and had the user rerun his jobs.  He's
</span><br>
<span class="quotelev1">&gt; getting similar output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_aeolus logs]# more 2047.aeolus.OU
</span><br>
<span class="quotelev1">&gt; Warning: no access to tty (Bad file descriptor).
</span><br>
<span class="quotelev1">&gt; Thus no job control in this shell.
</span><br>
<span class="quotelev1">&gt; data directory is  /mnt/pvfs2/patton/data/chem/aa1
</span><br>
<span class="quotelev1">&gt; exec directory is  /mnt/pvfs2/patton/exec/chem/aa1
</span><br>
<span class="quotelev1">&gt; arch directory is  /mnt/pvfs2/patton/data/chem/aa1
</span><br>
<span class="quotelev1">&gt; mpirun: killing job...
</span><br>
<p>FWIW: this message (&quot;mpirun: killing job...&quot;) *only* displays if  
<br>
mpirun catches a SIGINT or SIGTERM.
<br>
<p>This seems quite fishy; I seem to recall that torque sends a TERM at  
<br>
T-30 seconds before the job's wallclock time runs out.  Can you do a  
<br>
stupid test?  Replace the &quot;mpirun...&quot; with some other command --  
<br>
perhaps a short C program that outputs a line every N seconds or  
<br>
something, just so that you can see continued progress.  See if it  
<br>
dies (or catches a SIGINT or SIGTERM) in about the same amount of time  
<br>
that mpirun typically dies.
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
<li><strong>Next message:</strong> <a href="5744.php">Jeff Squyres: "Re: [OMPI users] [torqueusers] Job dies randomly, but only through torque"</a>
<li><strong>Previous message:</strong> <a href="5742.php">Jeff Squyres: "Re: [OMPI users] Open MPI instructional videos"</a>
<li><strong>In reply to:</strong> <a href="5735.php">Jim Kusznir: "Re: [OMPI users] OpenMPI+PGI errors"</a>
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
