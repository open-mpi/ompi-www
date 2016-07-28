<?
$subject_val = "Re: [OMPI users] MPIIO and OrangeFS";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 25 13:05:27 2015" -->
<!-- isoreceived="20150225180527" -->
<!-- sent="Wed, 25 Feb 2015 19:05:24 +0100 (CET)" -->
<!-- isosent="20150225180524" -->
<!-- name="vithanousek" -->
<!-- email="vithanousek_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPIIO and OrangeFS" -->
<!-- id="8fF.F03L.7BYiD5ZTR3u.1KxWxa_at_seznam.cz" -->
<!-- charset="utf-8" -->
<!-- inreplyto="54EDE220.2000905_at_cs.uh.edu" -->
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
<strong>Date:</strong> 2015-02-25 13:05:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26402.php">vithanousek: "Re: [OMPI users] MPIIO and OrangeFS"</a>
<li><strong>Previous message:</strong> <a href="26400.php">Ralph Castain: "Re: [OMPI users] machinefile binding error"</a>
<li><strong>In reply to:</strong> <a href="26397.php">Edgar Gabriel: "Re: [OMPI users] MPIIO and OrangeFS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26398.php">Rob Latham: "Re: [OMPI users] MPIIO and OrangeFS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks very much for your replay, which clear all my problems.

For your Information, I have OpenMPI 1.8.4 with OrangeFS 2.8.8 support, through both OMPIO and ROMIO.
Now Im sure it works corectly. But I havent made any deep tests.

I'm not sure if it is usefull to use pvfs2 without mounting, but it could be useful if OMPIO supports same filesystem prefix as ROMIO, specialy for compatibility of modules.
The second thing is, that the prefixes and filename format should be documented somewhere (as it is mentioned in standard). I didnt find it. I excepted, that it will be in MPI_File_open funcion documentation. 

But these things is only details. Once more thank for your replay
Hanousek V&#195;&#173;t

---------- P&#197;&#175;vodn&#195;&#173; zpr&#195;&#161;va ----------
Od: Edgar Gabriel 
Komu: users_at_[hidden]
Datum: 25. 2. 2015 16:02:22
P&#197;&#153;edm&#196;&#155;t: Re: [OMPI users] MPIIO and OrangeFS

Two separate comments.

1. I do not know the precise status of the PVFS2 support in 1.8 series 
of Open MPI for ROMIO, I haven't tested it in a while. On master, I know 
that there is a compilation problem with PVFS2 and ROMIO on Open MPI and 
I am about to submit a report/question to ROMIO about that.

2. for OMPIO, we use PVFS2 as our main development platform. However, we 
have honestly not tried to use PVFS2 without the file system being 
mounted (i.e. we do rely on the kernel component to some extent).  Yes, 
internally we use the library interfaces of PVFS2, but we use the file 
system information to determine the type of the file system, and my 
guess is that if that information is not available, the pvfs2 fs (and 
fbtl for that matter) components disable themselves, and that's the 
error that you see. I can look into how to make that scenario work in 
OMPIO, but its definitely not in the 1.8 series.

Thanks
Edgar

On 2/25/2015 2:01 AM, vithanousek wrote:
&gt; Thanks for your repaly!
&gt;
&gt; I checked my configuration parametrs and it seem, that everything is correct:
&gt; ./configure --prefix=/opt/modules/openmpi-1.8.4 --with-sge --with-psm --with-pvfs2=/opt/orangefs --with-io-romio-flags='--with-file-system=pvfs2+ufs+nfs --with-pvfs2=/opt/orangefs'
&gt;
&gt; I have added error chceking code to my app, and I was getting multiple errors, like en MPI_ERR_AMODE, MPI_ERR_UNKNOWN, MPI_ERR_NO_SUCH_FILE,MPI_ERR_IO. (depend on permisions of mount point of pvfs2, and --mca io romio/ompio --mca fs pvfs2)
&gt;
&gt; But it seems that error is in sourcecode of my application, because I cant find any more complex documentation about using ROMIO and OMPIO.
&gt; I found here <a href="https://surfsara.nl/systems/lisa/software/pvfs2">https://surfsara.nl/systems/lisa/software/pvfs2</a>, that I should use as filename &quot;pvfs2:/pvfs_mount_point/name_of_file&quot; instead of &quot;/pvfs_mount_point/name_of_file&quot;. This is working with ROMIO.
&gt;
&gt; Do you know how to use OMPIO without mounting pvfs2? if I tryed the same filename format as in ROMIO I got &quot;MPI_ERR_FILE: invalid file&quot;.
&gt; If I use normal filename format (&quot;/mountpoint/filename&quot;) and force use of pvfs2 by using  --mca io ompio --mca fs pvfs2, then my app fails with
&gt; mca_fs_base_file_select() failed (and backtrace).
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
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
_______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26397.php">http://www.open-mpi.org/community/lists/users/2015/02/26397.php</a><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26402.php">vithanousek: "Re: [OMPI users] MPIIO and OrangeFS"</a>
<li><strong>Previous message:</strong> <a href="26400.php">Ralph Castain: "Re: [OMPI users] machinefile binding error"</a>
<li><strong>In reply to:</strong> <a href="26397.php">Edgar Gabriel: "Re: [OMPI users] MPIIO and OrangeFS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26398.php">Rob Latham: "Re: [OMPI users] MPIIO and OrangeFS"</a>
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
