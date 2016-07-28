<?
$subject_val = "Re: [OMPI users] MPIIO and OrangeFS";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 25 13:21:32 2015" -->
<!-- isoreceived="20150225182132" -->
<!-- sent="Wed, 25 Feb 2015 19:21:31 +0100 (CET)" -->
<!-- isosent="20150225182131" -->
<!-- name="vithanousek" -->
<!-- email="vithanousek_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPIIO and OrangeFS" -->
<!-- id="8iu.F03l.6ri5f1jPwv2.1KxXAh_at_seznam.cz" -->
<!-- charset="utf-8" -->
<!-- inreplyto="54EDF067.1060105_at_mcs.anl.gov" -->
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
<strong>From:</strong> vithanousek (<em>vithanousek_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-25 13:21:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26403.php">Lev Givon: "[OMPI users] using MPI_Comm_spawn in OpenMPI 1.8.4 with SLURM"</a>
<li><strong>Previous message:</strong> <a href="26401.php">vithanousek: "Re: [OMPI users] MPIIO and OrangeFS"</a>
<li><strong>In reply to:</strong> <a href="26398.php">Rob Latham: "Re: [OMPI users] MPIIO and OrangeFS"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks you for your replay.

As conclusion I summarrised these things here, for another future users.

in OpenMPI 1.8.4 is MPIIO supported by both modules ROMIO and OMPIO and both modules support OrangeFS 2.8.8 (as PVFS2).
OpenMPI should be compilated with :
./configure --prefix=/opt/modules/openmpi-1.8.4 --with-sge --with-psm --with-pvfs2=/opt/orangefs --with-io-romio-flags='--with-file-system=pvfs2+ufs+nfs --with-pvfs2=/opt/orangefs'

When you are using ROMIO module (--mca io romio), then PVFS2 filesystem doesnt need to be mounted, but you need use prefix &quot;pvfs2:&quot; in filename(i.e. &quot;pvfs2:/path_to_data/filename&quot;). If PVFS2 is mounted, prefix is not needed.

When you are using OMPIO module (--mca io ompio), then PVFS2 filesystem must be mounted. OMPIO will use PVFS2 directly. Mounted PVFS2 is used for decision on what filesystem is the file placed. The prefix in filename is not supported.

Thanks
Hanousek V&#195;&#173;t

---------- P&#197;&#175;vodn&#195;&#173; zpr&#195;&#161;va ----------
Od: Rob Latham 
Komu: users_at_[hidden]
Datum: 25. 2. 2015 16:54:12
P&#197;&#153;edm&#196;&#155;t: Re: [OMPI users] MPIIO and OrangeFS

On 02/25/2015 02:01 AM, vithanousek wrote:

&gt; Do you know how to use OMPIO without mounting pvfs2? if I tryed the same filename format as in ROMIO I got &quot;MPI_ERR_FILE: invalid file&quot;.
&gt; If I use normal filename format (&quot;/mountpoint/filename&quot;) and force use of pvfs2 by using  --mca io ompio --mca fs pvfs2, then my app fails with
&gt; mca_fs_base_file_select() failed (and backtrace).

Sorry, I forgot to mention the importance (to ROMIO) of the file system 
prefix.  ROMIO can detect file systems two ways:
- either by using stat
- or by consulting a &quot;file system prefix&quot;

For PVFS2 or OrangeFS, prefixing the file name with 'pvfs2:' will tell 
ROMIO &quot;treat this file like a PVFS2 file&quot;, and ROMIO will use the 
&quot;system interface&quot; to PVFS2/OrangeFS.

This file system prefix is described in the MPI standard and has proven 
useful in many situations.

Edgar has drawn the build error of OMPI-master to my attention.  I'll 
get that fixed straightaway.
==rob

&gt;
&gt; At OrangeFS documentation (<a href="http://docs.orangefs.com/v_2_8_8/index.htm">http://docs.orangefs.com/v_2_8_8/index.htm</a>) is chapter about using ROMIO, and it says, that i shoud compile apps with -lpvfs2. I have tryed it, but nothing change (ROMIO works with special filename format, OMPIO doesnt work)
&gt;
&gt; Thanks for your help. If you point me to some usefull documentation, I will be happy.
&gt; Hanousek V&#195;&#173;t
&gt;
&gt;
&gt; ---------- P&#197;&#175;vodn&#195;&#173; zpr&#195;&#161;va ----------
&gt; Od: Rob Latham
&gt; Komu: users_at_[hidden], vithanousek_at_[hidden]
&gt; Datum: 24. 2. 2015 22:10:08
&gt; P&#197;&#153;edm&#196;&#155;t: Re: [OMPI users] MPIIO and OrangeFS
&gt;
&gt; On 02/24/2015 02:00 PM, vithanousek wrote:
&gt;&gt; Hello,
&gt;&gt;
&gt;&gt; Im not sure if I have my OrangeFS (2.8.8) and OpenMPI (1.8.4) set up corectly. One short questin?
&gt;&gt;
&gt;&gt; Is it needed to have OrangeFS  mounted  through kernel module, if I want use MPIIO?
&gt;
&gt; nope!
&gt;
&gt;&gt; My simple MPIIO hello world program doesnt work, If i havent mounted OrangeFS. When I mount OrangeFS, it works. So I'm not sure if OMPIO (or ROMIO) is using pvfs2 servers directly or if it is using kernel module.
&gt;&gt;
&gt;&gt; Sorry for stupid question, but I didnt find any documentation about it.
&gt;
&gt; <a href="http://www.pvfs.org/cvs/pvfs-2-8-branch-docs/doc/pvfs2-quickstart/pvfs2-quickstart.php#sec:romio">http://www.pvfs.org/cvs/pvfs-2-8-branch-docs/doc/pvfs2-quickstart/pvfs2-quickstart.php#sec:romio</a>
&gt;
&gt; It sounds like you have not configured your MPI implementation with
&gt; PVFS2 support (OrangeFS is a re-branding of PVFS2, but as far as MPI-IO
&gt; is concerned, they are the same).
&gt;
&gt; OpenMPI passes flags to romio like this at configure time:
&gt;
&gt;    --with-io-romio-flags=&quot;--with-file-system=pvfs2+ufs+nfs&quot;
&gt;
&gt; I'm not sure how OMPIO takes flags.
&gt;
&gt; If pvfs2-ping and pvfs2-cp and pvfs2-ls work, then you can bypass the
&gt; kernel.
&gt;
&gt; also, please check return codes:
&gt;
&gt; <a href="http://stackoverflow.com/questions/22859269/what-do-mpi-io-error-codes-mean/26373193#26373193">http://stackoverflow.com/questions/22859269/what-do-mpi-io-error-codes-mean/26373193#26373193</a>
&gt;
&gt; ==rob
&gt;
&gt;
&gt;&gt; Thanks for replays
&gt;&gt; Hanousek V&#195;&#173;t
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26382.php">http://www.open-mpi.org/community/lists/users/2015/02/26382.php</a>
&gt;&gt;
&gt;

-- 
Rob Latham
Mathematics and Computer Science Division
Argonne National Lab, IL USA
_______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26398.php">http://www.open-mpi.org/community/lists/users/2015/02/26398.php</a><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26403.php">Lev Givon: "[OMPI users] using MPI_Comm_spawn in OpenMPI 1.8.4 with SLURM"</a>
<li><strong>Previous message:</strong> <a href="26401.php">vithanousek: "Re: [OMPI users] MPIIO and OrangeFS"</a>
<li><strong>In reply to:</strong> <a href="26398.php">Rob Latham: "Re: [OMPI users] MPIIO and OrangeFS"</a>
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
