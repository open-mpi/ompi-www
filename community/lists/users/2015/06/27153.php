<?
$subject_val = "Re: [OMPI users] Memory usage for MPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 17 18:55:32 2015" -->
<!-- isoreceived="20150617225532" -->
<!-- sent="Wed, 17 Jun 2015 15:55:26 -0700" -->
<!-- isosent="20150617225526" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Memory usage for MPI program" -->
<!-- id="1ADEECE6-B255-4592-AE0E-D7779E4E32DE_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAJfsQWTJkcCPCVJgDtrjg2iScVzY_zhPWa1v_S-FBXuBoKgAzA_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-17 18:55:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27154.php">Daniel Letai: "[OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Previous message:</strong> <a href="27152.php">Fei Mao: "Re: [OMPI users] CUDA-aware MPI_Reduce problem in Openmpi 1.8.5"</a>
<li><strong>In reply to:</strong> <a href="27145.php">Manoj Vaghela: "Re: [OMPI users] Memory usage for MPI program"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How is the file read? From stdin? Or do they open it directly?
<br>
<p>If the latter, then it sure sounds like a CGNS issue to me - looks like they are slurping in the entire file, and then forget to free the memory when they close it. I can&#226;&#128;&#153;t think of any solution short of getting them to look at the problem.
<br>
<p><p><p><p><span class="quotelev1">&gt; On Jun 17, 2015, at 5:28 AM, Manoj Vaghela &lt;manoj.vaghela_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; While checking for memory issues related with CGNS 2.5.5, on a test machine, the following output is display when just opening and closing CGNS file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can anybody please help me on this?
</span><br>
<span class="quotelev1">&gt; This machine is Centos 7 (minimal installation) with GCC 4.8.3 and CentOS 7. The gcc compiler is used. The CGNS library is statically compiled locally with default configuration option.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ===================
</span><br>
<span class="quotelev1">&gt; before open:files 0/0: memory 0/0
</span><br>
<span class="quotelev1">&gt; after  open:files 1/1: memory 969250618/969250618
</span><br>
<span class="quotelev1">&gt; no CGNS error reported
</span><br>
<span class="quotelev1">&gt; no CGNS error reported
</span><br>
<span class="quotelev1">&gt; before close:files 1/1: memory 969250618/969250618
</span><br>
<span class="quotelev1">&gt; after  close:files 0/0: memory 969250618/969250618
</span><br>
<span class="quotelev1">&gt; no CGNS error reported
</span><br>
<span class="quotelev1">&gt; ===================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am still not able to conclude on whether it is a OS/machine/CGNSLib problem? Should I compile with dynamic option?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I use MPI and open CGNS file only for reading, should it occupy whole memory on each processor? Ideally it should free memory after cg_close(), but it is not freeing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, in major cases, the CGNS file would be of size of more than 2GB. Do I need to compile with any specific flags? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please help.
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; regards,
</span><br>
<span class="quotelev1">&gt; Manoj
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Jun 2, 2015 at 2:19 AM, Manoj Vaghela &lt;manoj.vaghela_at_[hidden] &lt;mailto:manoj.vaghela_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Dear Nathan,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After some initial debugging procedure, I found that the problem is with the CGNS (v 2.5) file which I am reading by each processor. The CGNS file which has 3-levels of userdefined data of descriptors/arrays is just read by each processor only for getting some texts, which in turn takes 1% of memory (totally to 5GB). I have no idea of why it is happening. I have asked this memory related issue to the CGNS forum for help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am checking memory of each processor (process) using &quot;top&quot; command. Each process shows its % memory usage, so in my case for 16 processors, it is 16 * 1% = 16% (5GB) of total memory (=32GB) which is very huge for just extracting only text data from the file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any comments are welcome.
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; regards,
</span><br>
<span class="quotelev1">&gt; Manoj B Vaghela
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Jun 1, 2015 at 3:14 PM, Nathan Hjelm &lt;hjelmn_at_[hidden] &lt;mailto:hjelmn_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just to be sure. How are you measuring the memory usage? If you are
</span><br>
<span class="quotelev1">&gt; using /proc/meminfo are you subracting out the Cached memory usage?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Jun 01, 2015 at 04:54:45AM -0400, Manoj Vaghela wrote:
</span><br>
<span class="quotelev2">&gt; &gt;    Hi OpenMPI users,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    I have been using OpenMPI for quite a few years now. Recently I figured
</span><br>
<span class="quotelev2">&gt; &gt;    out some memory related issues which are quite bothering me.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    I have OpenMPI 1.8.3 version installed on different machines. All machines
</span><br>
<span class="quotelev2">&gt; &gt;    are SMPs and linux x86_64. The Machine one and one-1 are installed with
</span><br>
<span class="quotelev2">&gt; &gt;    Red Hat Enterprise Linux Server release 5.4 and others are CentOS 7.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    I am using 16 cores on each machine. If I see memory consumption for a
</span><br>
<span class="quotelev2">&gt; &gt;    finite volume problem of 3 million cells, it should take nearly 3GB of
</span><br>
<span class="quotelev2">&gt; &gt;    memory on each machine for 16 cores usage. The following are some of the
</span><br>
<span class="quotelev2">&gt; &gt;    values of memory consumption which I got.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    machine       mem used(GB)       total memory(GB)           per
</span><br>
<span class="quotelev2">&gt; &gt;    core
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    memory usage(%)
</span><br>
<span class="quotelev2">&gt; &gt;    ==========================================================
</span><br>
<span class="quotelev2">&gt; &gt;    one            2.114413568                  66.075424
</span><br>
<span class="quotelev2">&gt; &gt;    0.2
</span><br>
<span class="quotelev2">&gt; &gt;    one-1         2.368967808                 24.676748
</span><br>
<span class="quotelev2">&gt; &gt;    0.6
</span><br>
<span class="quotelev2">&gt; &gt;    two             7.362867456                 32.869944
</span><br>
<span class="quotelev2">&gt; &gt;    1.4
</span><br>
<span class="quotelev2">&gt; &gt;    three          7.333295872                 16.368964
</span><br>
<span class="quotelev2">&gt; &gt;    2.8
</span><br>
<span class="quotelev2">&gt; &gt;    four            7.356667136                 32.842264
</span><br>
<span class="quotelev2">&gt; &gt;    1.4
</span><br>
<span class="quotelev2">&gt; &gt;    five             7.350758912
</span><br>
<span class="quotelev2">&gt; &gt;    32.815888                      1.4
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    I am wondering why machines two to five are taking high memory against the
</span><br>
<span class="quotelev2">&gt; &gt;    machines one and one-1 for the same setup files for this problem.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    I have compiled OpenMPI with its default options on all machines.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    It will help if somebody has any idea on this problem. Is there anything
</span><br>
<span class="quotelev2">&gt; &gt;    to be set while building OpenMPI ? or it is OS problem?
</span><br>
<span class="quotelev2">&gt; &gt;    Thanks.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Manoj
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Searchable archives: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27006.php">http://www.open-mpi.org/community/lists/users/2015/06/27006.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/06/27006.php">http://www.open-mpi.org/community/lists/users/2015/06/27006.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27015.php">http://www.open-mpi.org/community/lists/users/2015/06/27015.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/06/27015.php">http://www.open-mpi.org/community/lists/users/2015/06/27015.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27145.php">http://www.open-mpi.org/community/lists/users/2015/06/27145.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/06/27145.php">http://www.open-mpi.org/community/lists/users/2015/06/27145.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27153/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27154.php">Daniel Letai: "[OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Previous message:</strong> <a href="27152.php">Fei Mao: "Re: [OMPI users] CUDA-aware MPI_Reduce problem in Openmpi 1.8.5"</a>
<li><strong>In reply to:</strong> <a href="27145.php">Manoj Vaghela: "Re: [OMPI users] Memory usage for MPI program"</a>
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
