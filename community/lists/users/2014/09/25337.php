<?
$subject_val = "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 17 18:46:50 2014" -->
<!-- isoreceived="20140917224650" -->
<!-- sent="Wed, 17 Sep 2014 16:46:57 -0600" -->
<!-- isosent="20140917224657" -->
<!-- name="Beichuan Yan" -->
<!-- email="beichuan.yan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4" -->
<!-- id="D67303F39678724DA65819E042CB36989649A73D09_at_EXC2.ad.colorado.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="534C43C3.6040601_at_mcs.anl.gov" -->
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
<strong>From:</strong> Beichuan Yan (<em>beichuan.yan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-17 18:46:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25338.php">Nico Schlömer: "[OMPI users] --prefix, segfaulting"</a>
<li><strong>Previous message:</strong> <a href="25336.php">Siegmar Gross: "[OMPI users] still SIGSEGV with Java in openmpi-1.9a1r32738 on Solaris"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/04/24189.php">Rob Latham: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25356.php">Rob Latham: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<li><strong>Reply:</strong> <a href="25356.php">Rob Latham: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Rob,
<br>
<p>As you pointed out in April that there are many cases that could arouse ADIOI_Set_lock error. My code writes to a file at a location specified by a shared file pointer (it is a blocking and collective call): MPI_File_write_ordered(contactFile, const_cast&lt;char*&gt; (inf.str().c_str()), length, MPI_CHAR, &amp;status);
<br>
<p>That is why disabling data-sieving does not work for me, even if I tested it with latest openmpi-1.8.2 and gcc-4.9.1.
<br>
<p>Can I ask a question? Except that Lustre is mounted with &quot;flock&quot; option, is there other workaround to avoid this ADIOI_Set_lock error in MPI-2 parallel IO?
<br>
<p>Thanks,
<br>
Beichuan
<br>
<p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Rob Latham
<br>
Sent: Monday, April 14, 2014 14:24
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4
<br>
<p><p><p>On 04/08/2014 05:49 PM, Daniel Milroy wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The file system in question is indeed Lustre, and mounting with flock 
</span><br>
<span class="quotelev1">&gt; isn't possible in our environment.  I recommended the following 
</span><br>
<span class="quotelev1">&gt; changes to the users' code:
</span><br>
<p>Hi.  I'm the ROMIO guy, though I do rely on the community to help me keep the lustre driver up to snuff.
<br>
<p><span class="quotelev1">&gt; MPI_Info_set(info, &quot;collective_buffering&quot;, &quot;true&quot;); MPI_Info_set(info, 
</span><br>
<span class="quotelev1">&gt; &quot;romio_lustre_ds_in_coll&quot;, &quot;disable&quot;); MPI_Info_set(info, 
</span><br>
<span class="quotelev1">&gt; &quot;romio_ds_read&quot;, &quot;disable&quot;); MPI_Info_set(info, &quot;romio_ds_write&quot;, 
</span><br>
<span class="quotelev1">&gt; &quot;disable&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which results in the same error as before.  Are there any other MPI 
</span><br>
<span class="quotelev1">&gt; options I can set?
</span><br>
<p>I'd like to hear more about the workload generating these lock messages, but I can tell you the situations in which ADIOI_SetLock gets called:
<br>
- everywhere in NFS.  If you have a Lustre file system exported to some clients as NFS, you'll get NFS (er, that might not be true unless you pick up a recent patch)
<br>
- when writing a non-contiguous region in file, unless you disable data sieving, as you did above.
<br>
- note: you don't need to disable data sieving for reads, though you might want to if the data sieving algorithm is wasting a lot of data.
<br>
- if atomic mode was set on the file (i.e. you called
<br>
MPI_File_set_atomicity)
<br>
- if you use any of the shared file pointer operations
<br>
- if you use any of the ordered mode collective operations
<br>
<p>you've turned off data sieving writes, which is what I would have first guessed would trigger this lock message.  So I guess you are hitting one of the other cases.
<br>
<p>==rob
<br>
<p><pre>
--
Rob Latham
Mathematics and Computer Science Division Argonne National Lab, IL USA _______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25338.php">Nico Schlömer: "[OMPI users] --prefix, segfaulting"</a>
<li><strong>Previous message:</strong> <a href="25336.php">Siegmar Gross: "[OMPI users] still SIGSEGV with Java in openmpi-1.9a1r32738 on Solaris"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/04/24189.php">Rob Latham: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25356.php">Rob Latham: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<li><strong>Reply:</strong> <a href="25356.php">Rob Latham: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
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
