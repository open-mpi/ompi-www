<?
$subject_val = "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 14 16:23:38 2014" -->
<!-- isoreceived="20140414202338" -->
<!-- sent="Mon, 14 Apr 2014 15:23:31 -0500" -->
<!-- isosent="20140414202331" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4" -->
<!-- id="534C43C3.6040601_at_mcs.anl.gov" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="93B0BFDB4CD56A40BBAE7FB8D8984BF701211EEA13E2_at_EXC4.ad.colorado.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4<br>
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-14 16:23:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24190.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>Previous message:</strong> <a href="24188.php">Gus Correa: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>In reply to:</strong> <a href="24118.php">Daniel Milroy: "[OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24201.php">Daniel Milroy: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<li><strong>Reply:</strong> <a href="24201.php">Daniel Milroy: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/09/25337.php">Beichuan Yan: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 04/08/2014 05:49 PM, Daniel Milroy wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The file system in question is indeed Lustre, and mounting with flock
</span><br>
<span class="quotelev1">&gt; isn&#146;t possible in our environment.  I recommended the following changes
</span><br>
<span class="quotelev1">&gt; to the users&#146; code:
</span><br>
<p>Hi.  I'm the ROMIO guy, though I do rely on the community to help me 
<br>
keep the lustre driver up to snuff.
<br>
<p><span class="quotelev1">&gt; MPI_Info_set(info, &quot;collective_buffering&quot;, &quot;true&quot;);
</span><br>
<span class="quotelev1">&gt; MPI_Info_set(info, &quot;romio_lustre_ds_in_coll&quot;, &quot;disable&quot;);
</span><br>
<span class="quotelev1">&gt; MPI_Info_set(info, &quot;romio_ds_read&quot;, &quot;disable&quot;);
</span><br>
<span class="quotelev1">&gt; MPI_Info_set(info, &quot;romio_ds_write&quot;, &quot;disable&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which results in the same error as before.  Are there any other MPI
</span><br>
<span class="quotelev1">&gt; options I can set?
</span><br>
<p>I'd like to hear more about the workload generating these lock messages, 
<br>
but I can tell you the situations in which ADIOI_SetLock gets called:
<br>
- everywhere in NFS.  If you have a Lustre file system exported to some 
<br>
clients as NFS, you'll get NFS (er, that might not be true unless you 
<br>
pick up a recent patch)
<br>
- when writing a non-contiguous region in file, unless you disable data 
<br>
sieving, as you did above.
<br>
- note: you don't need to disable data sieving for reads, though you 
<br>
might want to if the data sieving algorithm is wasting a lot of data.
<br>
- if atomic mode was set on the file (i.e. you called 
<br>
MPI_File_set_atomicity)
<br>
- if you use any of the shared file pointer operations
<br>
- if you use any of the ordered mode collective operations
<br>
<p>you've turned off data sieving writes, which is what I would have first 
<br>
guessed would trigger this lock message.  So I guess you are hitting one 
<br>
of the other cases.
<br>
<p>==rob
<br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division
Argonne National Lab, IL USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24190.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>Previous message:</strong> <a href="24188.php">Gus Correa: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>In reply to:</strong> <a href="24118.php">Daniel Milroy: "[OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24201.php">Daniel Milroy: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<li><strong>Reply:</strong> <a href="24201.php">Daniel Milroy: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/09/25337.php">Beichuan Yan: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
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
