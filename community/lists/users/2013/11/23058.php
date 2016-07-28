<?
$subject_val = "Re: [OMPI users] (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 25 15:11:30 2013" -->
<!-- isoreceived="20131125201130" -->
<!-- sent="Mon, 25 Nov 2013 13:11:29 -0700" -->
<!-- isosent="20131125201129" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?" -->
<!-- id="20131125201129.GE399_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CEB66885.45D32%knteran_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-25 15:11:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23059.php">Nathan Hjelm: "Re: [OMPI users] (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>Previous message:</strong> <a href="23057.php">David Whitaker: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>In reply to:</strong> <a href="23036.php">Teranishi, Keita: "[OMPI users] (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23059.php">Nathan Hjelm: "Re: [OMPI users] (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>Reply:</strong> <a href="23059.php">Nathan Hjelm: "Re: [OMPI users] (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm, this seems like either a bug in qsub (torque is full of serious bugs) or a bug
<br>
in alps. I got an allocation using that command and alps only sees 1 node:
<br>
<p>[ct-login1.localdomain:06010] ras:alps:allocate: Trying ALPS configuration file: &quot;/etc/sysconfig/alps&quot;
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: parser_ini
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: Trying ALPS configuration file: &quot;/etc/alps.conf&quot;
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: parser_separated_columns
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: Located ALPS scheduler file: &quot;/ufs/alps_shared/appinfo&quot;
<br>
[ct-login1.localdomain:06010] ras:alps:orte_ras_alps_get_appinfo_attempts: 10
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: begin processing appinfo file
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: file /ufs/alps_shared/appinfo read
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: 47 entries in file
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3492 - myId 3668
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3492 - myId 3668
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3541 - myId 3668
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3541 - myId 3668
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3560 - myId 3668
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3560 - myId 3668
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3561 - myId 3668
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3561 - myId 3668
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3566 - myId 3668
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3566 - myId 3668
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3573 - myId 3668
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3573 - myId 3668
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3588 - myId 3668
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3588 - myId 3668
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3598 - myId 3668
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3598 - myId 3668
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3599 - myId 3668
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3599 - myId 3668
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3622 - myId 3668
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3622 - myId 3668
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3635 - myId 3668
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3635 - myId 3668
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3640 - myId 3668
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3640 - myId 3668
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3641 - myId 3668
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3641 - myId 3668
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3642 - myId 3668
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3642 - myId 3668
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3647 - myId 3668
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3647 - myId 3668
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3651 - myId 3668
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3651 - myId 3668
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3653 - myId 3668
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3653 - myId 3668
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3659 - myId 3668
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3659 - myId 3668
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3662 - myId 3668
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3662 - myId 3668
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3665 - myId 3668
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3665 - myId 3668
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3668 - myId 3668
<br>
[ct-login1.localdomain:06010] ras:alps:read_appinfo(modern): processing NID 29 with 16 slots
<br>
[ct-login1.localdomain:06010] ras:alps:allocate: success
<br>
[ct-login1.localdomain:06010] [[15798,0],0] ras:base:node_insert inserting 1 nodes
<br>
[ct-login1.localdomain:06010] [[15798,0],0] ras:base:node_insert node 29
<br>
<p>======================   ALLOCATED NODES   ======================
<br>
<p>&nbsp;Data for node: 29	Num slots: 16	Max slots: 0
<br>
<p>=================================================================
<br>
<p><p>Torque also shows only one node with 16 PPN:
<br>
<p>$ env | grep PBS
<br>
...
<br>
PBS_NUM_PPN=16
<br>
<p><p>$ cat /var/spool/torque/aux//915289.sdb
<br>
login1
<br>
<p>Which is wrong! I will have to ask Cray what is going on here. I recommend you switch to
<br>
msub to get an allocation. Moab has fewer bugs. I can't even get aprun to work:
<br>
<p>$ aprun -n 2 -N 1 hostname
<br>
apsched: claim exceeds reservation's node-count
<br>
<p>$ aprun -n 32 hostname
<br>
apsched: claim exceeds reservation's node-count
<br>
<p><p>To get an interactive session 2 nodes with 16 ppn on each run:
<br>
<p>msub -I -lnodes=2:ppn=16
<br>
<p>Open MPI should then work correctly.
<br>
<p>-Nathan Hjelm
<br>
HPC-5, LANL
<br>
<p>On Sat, Nov 23, 2013 at 10:13:26PM +0000, Teranishi, Keita wrote:
<br>
<span class="quotelev1">&gt;    Hi,
</span><br>
<span class="quotelev1">&gt;    I installed OpenMPI on our small XE6 using the configure options under
</span><br>
<span class="quotelev1">&gt;    /contrib directory.  It appears it is working fine, but it ignores MCA
</span><br>
<span class="quotelev1">&gt;    parameters (set in env var).  So I switched to mpirun (in OpenMPI) and it
</span><br>
<span class="quotelev1">&gt;    can handle MCA parameters somehow.  However,  mpirun fails to allocate
</span><br>
<span class="quotelev1">&gt;    process by cores.  For example, I allocated 32 cores (on 2 nodes) by &quot;qsub
</span><br>
<span class="quotelev1">&gt;    -lmppwidth=32 -lmppnppn=16&quot;, mpirun recognizes it as 2 slots.    Is it
</span><br>
<span class="quotelev1">&gt;    possible to mpirun to handle mluticore nodes of XE6 properly or is there
</span><br>
<span class="quotelev1">&gt;    any options to handle MCA parameters for aprun?
</span><br>
<span class="quotelev1">&gt;    Regards,
</span><br>
<span class="quotelev1">&gt;    -----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;    Keita Teranishi
</span><br>
<span class="quotelev1">&gt;    Principal Member of Technical Staff
</span><br>
<span class="quotelev1">&gt;    Scalable Modeling and Analysis Systems
</span><br>
<span class="quotelev1">&gt;    Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt;    Livermore, CA 94551
</span><br>
<span class="quotelev1">&gt;    +1 (925) 294-3738
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23058/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23059.php">Nathan Hjelm: "Re: [OMPI users] (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>Previous message:</strong> <a href="23057.php">David Whitaker: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>In reply to:</strong> <a href="23036.php">Teranishi, Keita: "[OMPI users] (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23059.php">Nathan Hjelm: "Re: [OMPI users] (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>Reply:</strong> <a href="23059.php">Nathan Hjelm: "Re: [OMPI users] (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
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
