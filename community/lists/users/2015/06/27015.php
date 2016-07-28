<?
$subject_val = "Re: [OMPI users] Memory usage for MPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  1 15:14:28 2015" -->
<!-- isoreceived="20150601191428" -->
<!-- sent="Mon, 1 Jun 2015 13:14:35 -0600" -->
<!-- isosent="20150601191435" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Memory usage for MPI program" -->
<!-- id="20150601191435.GA42459_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAJfsQWSmK92c4VCek4CG3Wnz0gmVPc7nUXUn475L3H4H5mdoEw_at_mail.gmail.com" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-01 15:14:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27016.php">Nathan Hjelm: "Re: [OMPI users] gcc: Error building openmpi-v1.10-dev-41-g57faa88"</a>
<li><strong>Previous message:</strong> <a href="27014.php">Ralph Castain: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<li><strong>In reply to:</strong> <a href="27006.php">Manoj Vaghela: "[OMPI users] Memory usage for MPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27028.php">Manoj Vaghela: "Re: [OMPI users] Memory usage for MPI program"</a>
<li><strong>Reply:</strong> <a href="27028.php">Manoj Vaghela: "Re: [OMPI users] Memory usage for MPI program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just to be sure. How are you measuring the memory usage? If you are
<br>
using /proc/meminfo are you subracting out the Cached memory usage?
<br>
<p>-Nathan
<br>
<p>On Mon, Jun 01, 2015 at 04:54:45AM -0400, Manoj Vaghela wrote:
<br>
<span class="quotelev1">&gt;    Hi OpenMPI users,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    I have been using OpenMPI for quite a few years now. Recently I figured
</span><br>
<span class="quotelev1">&gt;    out some memory related issues which are quite bothering me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    I have OpenMPI 1.8.3 version installed on different machines. All machines
</span><br>
<span class="quotelev1">&gt;    are SMPs and linux x86_64. The Machine one and one-1 are installed with
</span><br>
<span class="quotelev1">&gt;    Red Hat Enterprise Linux Server release 5.4 and others are CentOS 7.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    I am using 16 cores on each machine. If I see memory consumption for a
</span><br>
<span class="quotelev1">&gt;    finite volume problem of 3 million cells, it should take nearly 3GB of
</span><br>
<span class="quotelev1">&gt;    memory on each machine for 16 cores usage. The following are some of the
</span><br>
<span class="quotelev1">&gt;    values of memory consumption which I got.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    machine       mem used(GB)       total memory(GB)           per
</span><br>
<span class="quotelev1">&gt;    core       
</span><br>
<span class="quotelev1">&gt;                                                                                        
</span><br>
<span class="quotelev1">&gt;    memory usage(%)   
</span><br>
<span class="quotelev1">&gt;    ==========================================================
</span><br>
<span class="quotelev1">&gt;    one            2.114413568                  66.075424                     
</span><br>
<span class="quotelev1">&gt;    0.2               
</span><br>
<span class="quotelev1">&gt;    one-1         2.368967808                 24.676748                     
</span><br>
<span class="quotelev1">&gt;    0.6              
</span><br>
<span class="quotelev1">&gt;    two             7.362867456                 32.869944                     
</span><br>
<span class="quotelev1">&gt;    1.4           
</span><br>
<span class="quotelev1">&gt;    three          7.333295872                 16.368964                     
</span><br>
<span class="quotelev1">&gt;    2.8           
</span><br>
<span class="quotelev1">&gt;    four            7.356667136                 32.842264                     
</span><br>
<span class="quotelev1">&gt;    1.4           
</span><br>
<span class="quotelev1">&gt;    five             7.350758912                
</span><br>
<span class="quotelev1">&gt;    32.815888                      1.4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    I am wondering why machines two to five are taking high memory against the
</span><br>
<span class="quotelev1">&gt;    machines one and one-1 for the same setup files for this problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    I have compiled OpenMPI with its default options on all machines.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    It will help if somebody has any idea on this problem. Is there anything
</span><br>
<span class="quotelev1">&gt;    to be set while building OpenMPI ? or it is OS problem?
</span><br>
<span class="quotelev1">&gt;    Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Manoj
</span><br>
<span class="quotelev1">&gt;               
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Searchable archives: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27006.php">http://www.open-mpi.org/community/lists/users/2015/06/27006.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27015/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27016.php">Nathan Hjelm: "Re: [OMPI users] gcc: Error building openmpi-v1.10-dev-41-g57faa88"</a>
<li><strong>Previous message:</strong> <a href="27014.php">Ralph Castain: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<li><strong>In reply to:</strong> <a href="27006.php">Manoj Vaghela: "[OMPI users] Memory usage for MPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27028.php">Manoj Vaghela: "Re: [OMPI users] Memory usage for MPI program"</a>
<li><strong>Reply:</strong> <a href="27028.php">Manoj Vaghela: "Re: [OMPI users] Memory usage for MPI program"</a>
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
