<?
$subject_val = "Re: [OMPI users] Memory usage for MPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 17 08:28:49 2015" -->
<!-- isoreceived="20150617122849" -->
<!-- sent="Wed, 17 Jun 2015 08:28:27 -0400" -->
<!-- isosent="20150617122827" -->
<!-- name="Manoj Vaghela" -->
<!-- email="manoj.vaghela_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Memory usage for MPI program" -->
<!-- id="CAJfsQWTJkcCPCVJgDtrjg2iScVzY_zhPWa1v_S-FBXuBoKgAzA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAJfsQWTzVtSZQHRSZm0X38kbuiOYrRVsNk5Ty6CppwzM+YuRYw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Memory usage for MPI program<br>
<strong>From:</strong> Manoj Vaghela (<em>manoj.vaghela_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-17 08:28:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27146.php">Fei Mao: "[OMPI users] CUDA-aware MPI_Reduce problem in Openmpi 1.8.5"</a>
<li><strong>Previous message:</strong> <a href="27144.php">Jeff Squyres (jsquyres): "Re: [OMPI users] IB to some nodes but TCP for others"</a>
<li><strong>In reply to:</strong> <a href="27028.php">Manoj Vaghela: "Re: [OMPI users] Memory usage for MPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27153.php">Ralph Castain: "Re: [OMPI users] Memory usage for MPI program"</a>
<li><strong>Reply:</strong> <a href="27153.php">Ralph Castain: "Re: [OMPI users] Memory usage for MPI program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>While checking for memory issues related with CGNS 2.5.5, on a test
<br>
machine, the following output is display when just opening and closing CGNS
<br>
file.
<br>
<p>Can anybody please help me on this?
<br>
This machine is Centos 7 (minimal installation) with GCC 4.8.3 and CentOS
<br>
7. The gcc compiler is used. The CGNS library is statically compiled
<br>
locally with default configuration option.
<br>
<p>===================
<br>
before open:files 0/0: memory 0/0
<br>
after  open:files 1/1: memory 969250618/969250618
<br>
no CGNS error reported
<br>
no CGNS error reported
<br>
before close:files 1/1: memory 969250618/969250618
<br>
after  close:files 0/0: memory 969250618/969250618
<br>
no CGNS error reported
<br>
===================
<br>
<p>I am still not able to conclude on whether it is a OS/machine/CGNSLib
<br>
problem? Should I compile with dynamic option?
<br>
<p>If I use MPI and open CGNS file only for reading, should it occupy whole
<br>
memory on each processor? Ideally it should free memory after cg_close(),
<br>
but it is not freeing.
<br>
<p>Also, in major cases, the CGNS file would be of size of more than 2GB. Do I
<br>
need to compile with any specific flags?
<br>
<p>Please help.
<br>
Thanks.
<br>
<p><pre>
--
regards,
Manoj
On Tue, Jun 2, 2015 at 2:19 AM, Manoj Vaghela &lt;manoj.vaghela_at_[hidden]&gt;
wrote:
&gt; Dear Nathan,
&gt;
&gt; After some initial debugging procedure, I found that the problem is with
&gt; the CGNS (v 2.5) file which I am reading by each processor. The CGNS file
&gt; which has 3-levels of userdefined data of descriptors/arrays is just read
&gt; by each processor only for getting some texts, which in turn takes 1% of
&gt; memory (totally to 5GB). I have no idea of why it is happening. I have
&gt; asked this memory related issue to the CGNS forum for help.
&gt;
&gt; I am checking memory of each processor (process) using &quot;top&quot; command. Each
&gt; process shows its % memory usage, so in my case for 16 processors, it is 16
&gt; * 1% = 16% (5GB) of total memory (=32GB) which is very huge for just
&gt; extracting only text data from the file.
&gt;
&gt; Any comments are welcome.
&gt; Thanks.
&gt;
&gt; --
&gt; regards,
&gt; Manoj B Vaghela
&gt;
&gt; On Mon, Jun 1, 2015 at 3:14 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
&gt;
&gt;&gt;
&gt;&gt; Just to be sure. How are you measuring the memory usage? If you are
&gt;&gt; using /proc/meminfo are you subracting out the Cached memory usage?
&gt;&gt;
&gt;&gt; -Nathan
&gt;&gt;
&gt;&gt; On Mon, Jun 01, 2015 at 04:54:45AM -0400, Manoj Vaghela wrote:
&gt;&gt; &gt;    Hi OpenMPI users,
&gt;&gt; &gt;
&gt;&gt; &gt;    I have been using OpenMPI for quite a few years now. Recently I
&gt;&gt; figured
&gt;&gt; &gt;    out some memory related issues which are quite bothering me.
&gt;&gt; &gt;
&gt;&gt; &gt;    I have OpenMPI 1.8.3 version installed on different machines. All
&gt;&gt; machines
&gt;&gt; &gt;    are SMPs and linux x86_64. The Machine one and one-1 are installed
&gt;&gt; with
&gt;&gt; &gt;    Red Hat Enterprise Linux Server release 5.4 and others are CentOS 7.
&gt;&gt; &gt;
&gt;&gt; &gt;    I am using 16 cores on each machine. If I see memory consumption for
&gt;&gt; a
&gt;&gt; &gt;    finite volume problem of 3 million cells, it should take nearly 3GB
&gt;&gt; of
&gt;&gt; &gt;    memory on each machine for 16 cores usage. The following are some of
&gt;&gt; the
&gt;&gt; &gt;    values of memory consumption which I got.
&gt;&gt; &gt;
&gt;&gt; &gt;    machine       mem used(GB)       total memory(GB)           per
&gt;&gt; &gt;    core
&gt;&gt; &gt;
&gt;&gt; &gt;    memory usage(%)
&gt;&gt; &gt;    ==========================================================
&gt;&gt; &gt;    one            2.114413568                  66.075424
&gt;&gt; &gt;    0.2
&gt;&gt; &gt;    one-1         2.368967808                 24.676748
&gt;&gt; &gt;    0.6
&gt;&gt; &gt;    two             7.362867456                 32.869944
&gt;&gt; &gt;    1.4
&gt;&gt; &gt;    three          7.333295872                 16.368964
&gt;&gt; &gt;    2.8
&gt;&gt; &gt;    four            7.356667136                 32.842264
&gt;&gt; &gt;    1.4
&gt;&gt; &gt;    five             7.350758912
&gt;&gt; &gt;    32.815888                      1.4
&gt;&gt; &gt;
&gt;&gt; &gt;    I am wondering why machines two to five are taking high memory
&gt;&gt; against the
&gt;&gt; &gt;    machines one and one-1 for the same setup files for this problem.
&gt;&gt; &gt;
&gt;&gt; &gt;    I have compiled OpenMPI with its default options on all machines.
&gt;&gt; &gt;
&gt;&gt; &gt;    It will help if somebody has any idea on this problem. Is there
&gt;&gt; anything
&gt;&gt; &gt;    to be set while building OpenMPI ? or it is OS problem?
&gt;&gt; &gt;    Thanks.
&gt;&gt; &gt;
&gt;&gt; &gt;    Manoj
&gt;&gt; &gt;
&gt;&gt;
&gt;&gt; &gt; _______________________________________________
&gt;&gt; &gt; users mailing list
&gt;&gt; &gt; users_at_[hidden]
&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; &gt; Searchable archives:
&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27006.php">http://www.open-mpi.org/community/lists/users/2015/06/27006.php</a>
&gt;&gt;
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; Link to this post:
&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27015.php">http://www.open-mpi.org/community/lists/users/2015/06/27015.php</a>
&gt;&gt;
&gt;
&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27145/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27146.php">Fei Mao: "[OMPI users] CUDA-aware MPI_Reduce problem in Openmpi 1.8.5"</a>
<li><strong>Previous message:</strong> <a href="27144.php">Jeff Squyres (jsquyres): "Re: [OMPI users] IB to some nodes but TCP for others"</a>
<li><strong>In reply to:</strong> <a href="27028.php">Manoj Vaghela: "Re: [OMPI users] Memory usage for MPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27153.php">Ralph Castain: "Re: [OMPI users] Memory usage for MPI program"</a>
<li><strong>Reply:</strong> <a href="27153.php">Ralph Castain: "Re: [OMPI users] Memory usage for MPI program"</a>
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
