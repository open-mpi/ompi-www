<?
$subject_val = "Re: [OMPI users] MPIIO and OrangeFS";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 25 10:53:59 2015" -->
<!-- isoreceived="20150225155359" -->
<!-- sent="Wed, 25 Feb 2015 09:55:19 -0600" -->
<!-- isosent="20150225155519" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPIIO and OrangeFS" -->
<!-- id="54EDF067.1060105_at_mcs.anl.gov" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="6We.F031.2r6KLm8DWI0.1KxO5n_at_seznam.cz" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPIIO and OrangeFS<br>
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-25 10:55:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26399.php">Galloway, Jack D: "Re: [OMPI users] machinefile binding error"</a>
<li><strong>Previous message:</strong> <a href="26397.php">Edgar Gabriel: "Re: [OMPI users] MPIIO and OrangeFS"</a>
<li><strong>In reply to:</strong> <a href="26393.php">vithanousek: "Re: [OMPI users] MPIIO and OrangeFS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26402.php">vithanousek: "Re: [OMPI users] MPIIO and OrangeFS"</a>
<li><strong>Reply:</strong> <a href="26402.php">vithanousek: "Re: [OMPI users] MPIIO and OrangeFS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 02/25/2015 02:01 AM, vithanousek wrote:
<br>
<p><span class="quotelev1">&gt; Do you know how to use OMPIO without mounting pvfs2? if I tryed the same filename format as in ROMIO I got &quot;MPI_ERR_FILE: invalid file&quot;.
</span><br>
<span class="quotelev1">&gt; If I use normal filename format (&quot;/mountpoint/filename&quot;) and force use of pvfs2 by using  --mca io ompio --mca fs pvfs2, then my app fails with
</span><br>
<span class="quotelev1">&gt; mca_fs_base_file_select() failed (and backtrace).
</span><br>
<p>Sorry, I forgot to mention the importance (to ROMIO) of the file system 
<br>
prefix.  ROMIO can detect file systems two ways:
<br>
- either by using stat
<br>
- or by consulting a &quot;file system prefix&quot;
<br>
<p>For PVFS2 or OrangeFS, prefixing the file name with 'pvfs2:' will tell 
<br>
ROMIO &quot;treat this file like a PVFS2 file&quot;, and ROMIO will use the 
<br>
&quot;system interface&quot; to PVFS2/OrangeFS.
<br>
<p>This file system prefix is described in the MPI standard and has proven 
<br>
useful in many situations.
<br>
<p>Edgar has drawn the build error of OMPI-master to my attention.  I'll 
<br>
get that fixed straightaway.
<br>
==rob
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At OrangeFS documentation (<a href="http://docs.orangefs.com/v_2_8_8/index.htm">http://docs.orangefs.com/v_2_8_8/index.htm</a>) is chapter about using ROMIO, and it says, that i shoud compile apps with -lpvfs2. I have tryed it, but nothing change (ROMIO works with special filename format, OMPIO doesnt work)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your help. If you point me to some usefull documentation, I will be happy.
</span><br>
<span class="quotelev1">&gt; Hanousek V&#195;&#173;t
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------- P&#197;&#175;vodn&#195;&#173; zpr&#195;&#161;va ----------
</span><br>
<span class="quotelev1">&gt; Od: Rob Latham
</span><br>
<span class="quotelev1">&gt; Komu: users_at_[hidden], vithanousek_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Datum: 24. 2. 2015 22:10:08
</span><br>
<span class="quotelev1">&gt; P&#197;&#153;edm&#196;&#155;t: Re: [OMPI users] MPIIO and OrangeFS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 02/24/2015 02:00 PM, vithanousek wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Im not sure if I have my OrangeFS (2.8.8) and OpenMPI (1.8.4) set up corectly. One short questin?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is it needed to have OrangeFS  mounted  through kernel module, if I want use MPIIO?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; nope!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My simple MPIIO hello world program doesnt work, If i havent mounted OrangeFS. When I mount OrangeFS, it works. So I'm not sure if OMPIO (or ROMIO) is using pvfs2 servers directly or if it is using kernel module.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for stupid question, but I didnt find any documentation about it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.pvfs.org/cvs/pvfs-2-8-branch-docs/doc/pvfs2-quickstart/pvfs2-quickstart.php#sec:romio">http://www.pvfs.org/cvs/pvfs-2-8-branch-docs/doc/pvfs2-quickstart/pvfs2-quickstart.php#sec:romio</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It sounds like you have not configured your MPI implementation with
</span><br>
<span class="quotelev1">&gt; PVFS2 support (OrangeFS is a re-branding of PVFS2, but as far as MPI-IO
</span><br>
<span class="quotelev1">&gt; is concerned, they are the same).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI passes flags to romio like this at configure time:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    --with-io-romio-flags=&quot;--with-file-system=pvfs2+ufs+nfs&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure how OMPIO takes flags.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If pvfs2-ping and pvfs2-cp and pvfs2-ls work, then you can bypass the
</span><br>
<span class="quotelev1">&gt; kernel.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; also, please check return codes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://stackoverflow.com/questions/22859269/what-do-mpi-io-error-codes-mean/26373193#26373193">http://stackoverflow.com/questions/22859269/what-do-mpi-io-error-codes-mean/26373193#26373193</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==rob
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for replays
</span><br>
<span class="quotelev2">&gt;&gt; Hanousek V&#195;&#173;t
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26382.php">http://www.open-mpi.org/community/lists/users/2015/02/26382.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<li><strong>Next message:</strong> <a href="26399.php">Galloway, Jack D: "Re: [OMPI users] machinefile binding error"</a>
<li><strong>Previous message:</strong> <a href="26397.php">Edgar Gabriel: "Re: [OMPI users] MPIIO and OrangeFS"</a>
<li><strong>In reply to:</strong> <a href="26393.php">vithanousek: "Re: [OMPI users] MPIIO and OrangeFS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26402.php">vithanousek: "Re: [OMPI users] MPIIO and OrangeFS"</a>
<li><strong>Reply:</strong> <a href="26402.php">vithanousek: "Re: [OMPI users] MPIIO and OrangeFS"</a>
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
