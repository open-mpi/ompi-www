<?
$subject_val = "Re: [OMPI users] (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 25 15:28:24 2013" -->
<!-- isoreceived="20131125202824" -->
<!-- sent="Mon, 25 Nov 2013 13:28:23 -0700" -->
<!-- isosent="20131125202823" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?" -->
<!-- id="20131125202823.GF399_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20131125201129.GE399_at_pn1246003.lanl.gov" -->
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
<strong>Date:</strong> 2013-11-25 15:28:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23060.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>Previous message:</strong> <a href="23058.php">Nathan Hjelm: "Re: [OMPI users] (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>In reply to:</strong> <a href="23058.php">Nathan Hjelm: "Re: [OMPI users] (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23060.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>Reply:</strong> <a href="23060.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just talked with our local Cray rep. Sounds like that torque syntax is broken. You can continue
<br>
to use qsub (though qsub use is strongly discouraged) if you use the msub options.
<br>
<p>Ex:
<br>
<p>qsub -lnodes=2:ppn=16
<br>
<p>Works.
<br>
<p>-Nathan
<br>
<p>On Mon, Nov 25, 2013 at 01:11:29PM -0700, Nathan Hjelm wrote:
<br>
<span class="quotelev1">&gt; Hmm, this seems like either a bug in qsub (torque is full of serious bugs) or a bug
</span><br>
<span class="quotelev1">&gt; in alps. I got an allocation using that command and alps only sees 1 node:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: Trying ALPS configuration file: &quot;/etc/sysconfig/alps&quot;
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: parser_ini
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: Trying ALPS configuration file: &quot;/etc/alps.conf&quot;
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: parser_separated_columns
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: Located ALPS scheduler file: &quot;/ufs/alps_shared/appinfo&quot;
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:orte_ras_alps_get_appinfo_attempts: 10
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: begin processing appinfo file
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: file /ufs/alps_shared/appinfo read
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: 47 entries in file
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3492 - myId 3668
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3492 - myId 3668
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3541 - myId 3668
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3541 - myId 3668
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3560 - myId 3668
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3560 - myId 3668
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3561 - myId 3668
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3561 - myId 3668
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3566 - myId 3668
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3566 - myId 3668
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3573 - myId 3668
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3573 - myId 3668
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3588 - myId 3668
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3588 - myId 3668
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3598 - myId 3668
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3598 - myId 3668
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3599 - myId 3668
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3599 - myId 3668
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3622 - myId 3668
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3622 - myId 3668
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3635 - myId 3668
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3635 - myId 3668
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3640 - myId 3668
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3640 - myId 3668
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3641 - myId 3668
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3641 - myId 3668
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3642 - myId 3668
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3642 - myId 3668
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3647 - myId 3668
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3647 - myId 3668
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3651 - myId 3668
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3651 - myId 3668
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3653 - myId 3668
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3653 - myId 3668
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3659 - myId 3668
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3659 - myId 3668
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3662 - myId 3668
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3662 - myId 3668
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3665 - myId 3668
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3665 - myId 3668
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId 3668 - myId 3668
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:read_appinfo(modern): processing NID 29 with 16 slots
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] ras:alps:allocate: success
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] [[15798,0],0] ras:base:node_insert inserting 1 nodes
</span><br>
<span class="quotelev1">&gt; [ct-login1.localdomain:06010] [[15798,0],0] ras:base:node_insert node 29
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Data for node: 29	Num slots: 16	Max slots: 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Torque also shows only one node with 16 PPN:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ env | grep PBS
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; PBS_NUM_PPN=16
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ cat /var/spool/torque/aux//915289.sdb
</span><br>
<span class="quotelev1">&gt; login1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Which is wrong! I will have to ask Cray what is going on here. I recommend you switch to
</span><br>
<span class="quotelev1">&gt; msub to get an allocation. Moab has fewer bugs. I can't even get aprun to work:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ aprun -n 2 -N 1 hostname
</span><br>
<span class="quotelev1">&gt; apsched: claim exceeds reservation's node-count
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ aprun -n 32 hostname
</span><br>
<span class="quotelev1">&gt; apsched: claim exceeds reservation's node-count
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To get an interactive session 2 nodes with 16 ppn on each run:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; msub -I -lnodes=2:ppn=16
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI should then work correctly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan Hjelm
</span><br>
<span class="quotelev1">&gt; HPC-5, LANL
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, Nov 23, 2013 at 10:13:26PM +0000, Teranishi, Keita wrote:
</span><br>
<span class="quotelev2">&gt; &gt;    Hi,
</span><br>
<span class="quotelev2">&gt; &gt;    I installed OpenMPI on our small XE6 using the configure options under
</span><br>
<span class="quotelev2">&gt; &gt;    /contrib directory.  It appears it is working fine, but it ignores MCA
</span><br>
<span class="quotelev2">&gt; &gt;    parameters (set in env var).  So I switched to mpirun (in OpenMPI) and it
</span><br>
<span class="quotelev2">&gt; &gt;    can handle MCA parameters somehow.  However,  mpirun fails to allocate
</span><br>
<span class="quotelev2">&gt; &gt;    process by cores.  For example, I allocated 32 cores (on 2 nodes) by &quot;qsub
</span><br>
<span class="quotelev2">&gt; &gt;    -lmppwidth=32 -lmppnppn=16&quot;, mpirun recognizes it as 2 slots.    Is it
</span><br>
<span class="quotelev2">&gt; &gt;    possible to mpirun to handle mluticore nodes of XE6 properly or is there
</span><br>
<span class="quotelev2">&gt; &gt;    any options to handle MCA parameters for aprun?
</span><br>
<span class="quotelev2">&gt; &gt;    Regards,
</span><br>
<span class="quotelev2">&gt; &gt;    -----------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;    Keita Teranishi
</span><br>
<span class="quotelev2">&gt; &gt;    Principal Member of Technical Staff
</span><br>
<span class="quotelev2">&gt; &gt;    Scalable Modeling and Analysis Systems
</span><br>
<span class="quotelev2">&gt; &gt;    Sandia National Laboratories
</span><br>
<span class="quotelev2">&gt; &gt;    Livermore, CA 94551
</span><br>
<span class="quotelev2">&gt; &gt;    +1 (925) 294-3738
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><p><span class="quotelev1">&gt; _______________________________________________
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
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23059/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23060.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>Previous message:</strong> <a href="23058.php">Nathan Hjelm: "Re: [OMPI users] (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>In reply to:</strong> <a href="23058.php">Nathan Hjelm: "Re: [OMPI users] (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23060.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>Reply:</strong> <a href="23060.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
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
