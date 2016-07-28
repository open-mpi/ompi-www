<?
$subject_val = "Re: [OMPI users] Memory usage for MPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  2 02:20:06 2015" -->
<!-- isoreceived="20150602062006" -->
<!-- sent="Tue, 2 Jun 2015 02:19:44 -0400" -->
<!-- isosent="20150602061944" -->
<!-- name="Manoj Vaghela" -->
<!-- email="manoj.vaghela_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Memory usage for MPI program" -->
<!-- id="CAJfsQWTzVtSZQHRSZm0X38kbuiOYrRVsNk5Ty6CppwzM+YuRYw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20150601191435.GA42459_at_pn1246003.lanl.gov" -->
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
<strong>Date:</strong> 2015-06-02 02:19:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27029.php">Timur Ismagilov: "Re: [OMPI users] Fwd[2]: OMPI yalla vs impi"</a>
<li><strong>Previous message:</strong> <a href="27027.php">Ralph Castain: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<li><strong>In reply to:</strong> <a href="27015.php">Nathan Hjelm: "Re: [OMPI users] Memory usage for MPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27145.php">Manoj Vaghela: "Re: [OMPI users] Memory usage for MPI program"</a>
<li><strong>Reply:</strong> <a href="27145.php">Manoj Vaghela: "Re: [OMPI users] Memory usage for MPI program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Nathan,
<br>
<p>After some initial debugging procedure, I found that the problem is with
<br>
the CGNS (v 2.5) file which I am reading by each processor. The CGNS file
<br>
which has 3-levels of userdefined data of descriptors/arrays is just read
<br>
by each processor only for getting some texts, which in turn takes 1% of
<br>
memory (totally to 5GB). I have no idea of why it is happening. I have
<br>
asked this memory related issue to the CGNS forum for help.
<br>
<p>I am checking memory of each processor (process) using &quot;top&quot; command. Each
<br>
process shows its % memory usage, so in my case for 16 processors, it is 16
<br>
* 1% = 16% (5GB) of total memory (=32GB) which is very huge for just
<br>
extracting only text data from the file.
<br>
<p>Any comments are welcome.
<br>
Thanks.
<br>
<p><pre>
--
regards,
Manoj B Vaghela
On Mon, Jun 1, 2015 at 3:14 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
&gt;
&gt; Just to be sure. How are you measuring the memory usage? If you are
&gt; using /proc/meminfo are you subracting out the Cached memory usage?
&gt;
&gt; -Nathan
&gt;
&gt; On Mon, Jun 01, 2015 at 04:54:45AM -0400, Manoj Vaghela wrote:
&gt; &gt;    Hi OpenMPI users,
&gt; &gt;
&gt; &gt;    I have been using OpenMPI for quite a few years now. Recently I
&gt; figured
&gt; &gt;    out some memory related issues which are quite bothering me.
&gt; &gt;
&gt; &gt;    I have OpenMPI 1.8.3 version installed on different machines. All
&gt; machines
&gt; &gt;    are SMPs and linux x86_64. The Machine one and one-1 are installed
&gt; with
&gt; &gt;    Red Hat Enterprise Linux Server release 5.4 and others are CentOS 7.
&gt; &gt;
&gt; &gt;    I am using 16 cores on each machine. If I see memory consumption for a
&gt; &gt;    finite volume problem of 3 million cells, it should take nearly 3GB of
&gt; &gt;    memory on each machine for 16 cores usage. The following are some of
&gt; the
&gt; &gt;    values of memory consumption which I got.
&gt; &gt;
&gt; &gt;    machine       mem used(GB)       total memory(GB)           per
&gt; &gt;    core
&gt; &gt;
&gt; &gt;    memory usage(%)
&gt; &gt;    ==========================================================
&gt; &gt;    one            2.114413568                  66.075424
&gt; &gt;    0.2
&gt; &gt;    one-1         2.368967808                 24.676748
&gt; &gt;    0.6
&gt; &gt;    two             7.362867456                 32.869944
&gt; &gt;    1.4
&gt; &gt;    three          7.333295872                 16.368964
&gt; &gt;    2.8
&gt; &gt;    four            7.356667136                 32.842264
&gt; &gt;    1.4
&gt; &gt;    five             7.350758912
&gt; &gt;    32.815888                      1.4
&gt; &gt;
&gt; &gt;    I am wondering why machines two to five are taking high memory
&gt; against the
&gt; &gt;    machines one and one-1 for the same setup files for this problem.
&gt; &gt;
&gt; &gt;    I have compiled OpenMPI with its default options on all machines.
&gt; &gt;
&gt; &gt;    It will help if somebody has any idea on this problem. Is there
&gt; anything
&gt; &gt;    to be set while building OpenMPI ? or it is OS problem?
&gt; &gt;    Thanks.
&gt; &gt;
&gt; &gt;    Manoj
&gt; &gt;
&gt;
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt; Searchable archives:
&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27006.php">http://www.open-mpi.org/community/lists/users/2015/06/27006.php</a>
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post:
&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27015.php">http://www.open-mpi.org/community/lists/users/2015/06/27015.php</a>
&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27028/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27029.php">Timur Ismagilov: "Re: [OMPI users] Fwd[2]: OMPI yalla vs impi"</a>
<li><strong>Previous message:</strong> <a href="27027.php">Ralph Castain: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<li><strong>In reply to:</strong> <a href="27015.php">Nathan Hjelm: "Re: [OMPI users] Memory usage for MPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27145.php">Manoj Vaghela: "Re: [OMPI users] Memory usage for MPI program"</a>
<li><strong>Reply:</strong> <a href="27145.php">Manoj Vaghela: "Re: [OMPI users] Memory usage for MPI program"</a>
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
