<?
$subject_val = "Re: [OMPI users] MPIIO and OrangeFS";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 25 09:54:28 2015" -->
<!-- isoreceived="20150225145428" -->
<!-- sent="Wed, 25 Feb 2015 08:54:24 -0600" -->
<!-- isosent="20150225145424" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPIIO and OrangeFS" -->
<!-- id="54EDE220.2000905_at_cs.uh.edu" -->
<!-- charset="utf-8" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-25 09:54:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26398.php">Rob Latham: "Re: [OMPI users] MPIIO and OrangeFS"</a>
<li><strong>Previous message:</strong> <a href="26396.php">Javier Mas Sol&#233;: "Re: [OMPI users] openmpi-1.8.4 on OSX, mpirun execution error."</a>
<li><strong>In reply to:</strong> <a href="26393.php">vithanousek: "Re: [OMPI users] MPIIO and OrangeFS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26401.php">vithanousek: "Re: [OMPI users] MPIIO and OrangeFS"</a>
<li><strong>Reply:</strong> <a href="26401.php">vithanousek: "Re: [OMPI users] MPIIO and OrangeFS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Two separate comments.
<br>
<p>1. I do not know the precise status of the PVFS2 support in 1.8 series 
<br>
of Open MPI for ROMIO, I haven't tested it in a while. On master, I know 
<br>
that there is a compilation problem with PVFS2 and ROMIO on Open MPI and 
<br>
I am about to submit a report/question to ROMIO about that.
<br>
<p>2. for OMPIO, we use PVFS2 as our main development platform. However, we 
<br>
have honestly not tried to use PVFS2 without the file system being 
<br>
mounted (i.e. we do rely on the kernel component to some extent).  Yes, 
<br>
internally we use the library interfaces of PVFS2, but we use the file 
<br>
system information to determine the type of the file system, and my 
<br>
guess is that if that information is not available, the pvfs2 fs (and 
<br>
fbtl for that matter) components disable themselves, and that's the 
<br>
error that you see. I can look into how to make that scenario work in 
<br>
OMPIO, but its definitely not in the 1.8 series.
<br>
<p>Thanks
<br>
Edgar
<br>
<p>On 2/25/2015 2:01 AM, vithanousek wrote:
<br>
<span class="quotelev1">&gt; Thanks for your repaly!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I checked my configuration parametrs and it seem, that everything is correct:
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/modules/openmpi-1.8.4 --with-sge --with-psm --with-pvfs2=/opt/orangefs --with-io-romio-flags='--with-file-system=pvfs2+ufs+nfs --with-pvfs2=/opt/orangefs'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have added error chceking code to my app, and I was getting multiple errors, like en MPI_ERR_AMODE, MPI_ERR_UNKNOWN, MPI_ERR_NO_SUCH_FILE,MPI_ERR_IO. (depend on permisions of mount point of pvfs2, and --mca io romio/ompio --mca fs pvfs2)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But it seems that error is in sourcecode of my application, because I cant find any more complex documentation about using ROMIO and OMPIO.
</span><br>
<span class="quotelev1">&gt; I found here <a href="https://surfsara.nl/systems/lisa/software/pvfs2">https://surfsara.nl/systems/lisa/software/pvfs2</a>, that I should use as filename &quot;pvfs2:/pvfs_mount_point/name_of_file&quot; instead of &quot;/pvfs_mount_point/name_of_file&quot;. This is working with ROMIO.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you know how to use OMPIO without mounting pvfs2? if I tryed the same filename format as in ROMIO I got &quot;MPI_ERR_FILE: invalid file&quot;.
</span><br>
<span class="quotelev1">&gt; If I use normal filename format (&quot;/mountpoint/filename&quot;) and force use of pvfs2 by using  --mca io ompio --mca fs pvfs2, then my app fails with
</span><br>
<span class="quotelev1">&gt; mca_fs_base_file_select() failed (and backtrace).
</span><br>
<span class="quotelev1">&gt;
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
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26398.php">Rob Latham: "Re: [OMPI users] MPIIO and OrangeFS"</a>
<li><strong>Previous message:</strong> <a href="26396.php">Javier Mas Sol&#233;: "Re: [OMPI users] openmpi-1.8.4 on OSX, mpirun execution error."</a>
<li><strong>In reply to:</strong> <a href="26393.php">vithanousek: "Re: [OMPI users] MPIIO and OrangeFS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26401.php">vithanousek: "Re: [OMPI users] MPIIO and OrangeFS"</a>
<li><strong>Reply:</strong> <a href="26401.php">vithanousek: "Re: [OMPI users] MPIIO and OrangeFS"</a>
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
