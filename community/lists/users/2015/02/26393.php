<?
$subject_val = "Re: [OMPI users] MPIIO and OrangeFS";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 25 03:01:55 2015" -->
<!-- isoreceived="20150225080155" -->
<!-- sent="Wed, 25 Feb 2015 09:01:53 +0100 (CET)" -->
<!-- isosent="20150225080153" -->
<!-- name="vithanousek" -->
<!-- email="vithanousek_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPIIO and OrangeFS" -->
<!-- id="6We.F031.2r6KLm8DWI0.1KxO5n_at_seznam.cz" -->
<!-- charset="utf-8" -->
<!-- inreplyto="54ECE75B.6040705_at_mcs.anl.gov" -->
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
<strong>Date:</strong> 2015-02-25 03:01:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26394.php">Javier Mas Solé: "[OMPI users] openmpi-1.8.4 on OSX, mpirun execution error."</a>
<li><strong>Previous message:</strong> <a href="26392.php">Ralph Castain: "Re: [OMPI users] machinefile binding error"</a>
<li><strong>In reply to:</strong> <a href="26386.php">Rob Latham: "Re: [OMPI users] MPIIO and OrangeFS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26397.php">Edgar Gabriel: "Re: [OMPI users] MPIIO and OrangeFS"</a>
<li><strong>Reply:</strong> <a href="26397.php">Edgar Gabriel: "Re: [OMPI users] MPIIO and OrangeFS"</a>
<li><strong>Reply:</strong> <a href="26398.php">Rob Latham: "Re: [OMPI users] MPIIO and OrangeFS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your repaly!

I checked my configuration parametrs and it seem, that everything is correct:
./configure --prefix=/opt/modules/openmpi-1.8.4 --with-sge --with-psm --with-pvfs2=/opt/orangefs --with-io-romio-flags='--with-file-system=pvfs2+ufs+nfs --with-pvfs2=/opt/orangefs'

I have added error chceking code to my app, and I was getting multiple errors, like en MPI_ERR_AMODE, MPI_ERR_UNKNOWN, MPI_ERR_NO_SUCH_FILE,MPI_ERR_IO. (depend on permisions of mount point of pvfs2, and --mca io romio/ompio --mca fs pvfs2)

But it seems that error is in sourcecode of my application, because I cant find any more complex documentation about using ROMIO and OMPIO. 
I found here <a href="https://surfsara.nl/systems/lisa/software/pvfs2">https://surfsara.nl/systems/lisa/software/pvfs2</a>, that I should use as filename &quot;pvfs2:/pvfs_mount_point/name_of_file&quot; instead of &quot;/pvfs_mount_point/name_of_file&quot;. This is working with ROMIO.

Do you know how to use OMPIO without mounting pvfs2? if I tryed the same filename format as in ROMIO I got &quot;MPI_ERR_FILE: invalid file&quot;.
If I use normal filename format (&quot;/mountpoint/filename&quot;) and force use of pvfs2 by using  --mca io ompio --mca fs pvfs2, then my app fails with 
mca_fs_base_file_select() failed (and backtrace).

At OrangeFS documentation (<a href="http://docs.orangefs.com/v_2_8_8/index.htm">http://docs.orangefs.com/v_2_8_8/index.htm</a>) is chapter about using ROMIO, and it says, that i shoud compile apps with -lpvfs2. I have tryed it, but nothing change (ROMIO works with special filename format, OMPIO doesnt work)

Thanks for your help. If you point me to some usefull documentation, I will be happy.
Hanousek V&#195;&#173;t


---------- P&#197;&#175;vodn&#195;&#173; zpr&#195;&#161;va ----------
Od: Rob Latham 
Komu: users_at_[hidden], vithanousek_at_[hidden]
Datum: 24. 2. 2015 22:10:08
P&#197;&#153;edm&#196;&#155;t: Re: [OMPI users] MPIIO and OrangeFS

On 02/24/2015 02:00 PM, vithanousek wrote:
&gt; Hello,
&gt;
&gt; Im not sure if I have my OrangeFS (2.8.8) and OpenMPI (1.8.4) set up corectly. One short questin?
&gt;
&gt; Is it needed to have OrangeFS  mounted  through kernel module, if I want use MPIIO?

nope!

&gt; My simple MPIIO hello world program doesnt work, If i havent mounted OrangeFS. When I mount OrangeFS, it works. So I'm not sure if OMPIO (or ROMIO) is using pvfs2 servers directly or if it is using kernel module.
&gt;
&gt; Sorry for stupid question, but I didnt find any documentation about it.

<a href="http://www.pvfs.org/cvs/pvfs-2-8-branch-docs/doc/pvfs2-quickstart/pvfs2-quickstart.php#sec:romio">http://www.pvfs.org/cvs/pvfs-2-8-branch-docs/doc/pvfs2-quickstart/pvfs2-quickstart.php#sec:romio</a>

It sounds like you have not configured your MPI implementation with 
PVFS2 support (OrangeFS is a re-branding of PVFS2, but as far as MPI-IO 
is concerned, they are the same).

OpenMPI passes flags to romio like this at configure time:

  --with-io-romio-flags=&quot;--with-file-system=pvfs2+ufs+nfs&quot;

I'm not sure how OMPIO takes flags.

If pvfs2-ping and pvfs2-cp and pvfs2-ls work, then you can bypass the 
kernel.

also, please check return codes:

<a href="http://stackoverflow.com/questions/22859269/what-do-mpi-io-error-codes-mean/26373193#26373193">http://stackoverflow.com/questions/22859269/what-do-mpi-io-error-codes-mean/26373193#26373193</a>

==rob


&gt; Thanks for replays
&gt; Hanousek V&#195;&#173;t
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26382.php">http://www.open-mpi.org/community/lists/users/2015/02/26382.php</a>
&gt;

-- 
Rob Latham
Mathematics and Computer Science Division
Argonne National Lab, IL USA<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26394.php">Javier Mas Solé: "[OMPI users] openmpi-1.8.4 on OSX, mpirun execution error."</a>
<li><strong>Previous message:</strong> <a href="26392.php">Ralph Castain: "Re: [OMPI users] machinefile binding error"</a>
<li><strong>In reply to:</strong> <a href="26386.php">Rob Latham: "Re: [OMPI users] MPIIO and OrangeFS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26397.php">Edgar Gabriel: "Re: [OMPI users] MPIIO and OrangeFS"</a>
<li><strong>Reply:</strong> <a href="26397.php">Edgar Gabriel: "Re: [OMPI users] MPIIO and OrangeFS"</a>
<li><strong>Reply:</strong> <a href="26398.php">Rob Latham: "Re: [OMPI users] MPIIO and OrangeFS"</a>
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
