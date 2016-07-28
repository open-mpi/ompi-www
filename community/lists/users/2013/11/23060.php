<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 25 15:48:21 2013" -->
<!-- isoreceived="20131125204821" -->
<!-- sent="Mon, 25 Nov 2013 20:48:09 +0000" -->
<!-- isosent="20131125204809" -->
<!-- name="Teranishi, Keita" -->
<!-- email="knteran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?" -->
<!-- id="CEB8F52C.460FB%knteran_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20131125202823.GF399_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?<br>
<strong>From:</strong> Teranishi, Keita (<em>knteran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-25 15:48:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23061.php">Nathan Hjelm: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>Previous message:</strong> <a href="23059.php">Nathan Hjelm: "Re: [OMPI users] (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>In reply to:</strong> <a href="23059.php">Nathan Hjelm: "Re: [OMPI users] (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23061.php">Nathan Hjelm: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>Reply:</strong> <a href="23061.php">Nathan Hjelm: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Natan,
<br>
<p>I tried qsub option you
<br>
<p>mpirun -np 4  --mca plm_base_strip_prefix_from_node_names= 0 ./cpi
<br>
--------------------------------------------------------------------------
<br>
There are not enough slots available in the system to satisfy the 4 slots
<br>
that were requested by the application:
<br>
&nbsp;&nbsp;./cpi
<br>
<p>Either request fewer slots for your application, or make more slots
<br>
available
<br>
for use.
<br>
--------------------------------------------------------------------------
<br>
<p><p>Here is I got from aprun
<br>
aprun  -n 32 ./cpi
<br>
Process 8 of 32 is on nid00011
<br>
Process 5 of 32 is on nid00011
<br>
Process 12 of 32 is on nid00011
<br>
Process 9 of 32 is on nid00011
<br>
Process 11 of 32 is on nid00011
<br>
Process 13 of 32 is on nid00011
<br>
Process 0 of 32 is on nid00011
<br>
Process 6 of 32 is on nid00011
<br>
Process 3 of 32 is on nid00011
<br>
:
<br>
<p>:
<br>
<p>Also, I found a strange error in the end of the program (MPI_Finalize?)
<br>
Can you tell me what is wrong with that?
<br>
[nid00010:23511] [ 0] /lib64/libpthread.so.0(+0xf7c0) [0x2aaaacbbb7c0]
<br>
[nid00010:23511] [ 1]
<br>
/home/knteran/openmpi/lib/libmpi.so.0(opal_memory_ptmalloc2_int_free+0x57)
<br>
[0x2aaaaaf38ec7]
<br>
[nid00010:23511] [ 2]
<br>
/home/knteran/openmpi/lib/libmpi.so.0(opal_memory_ptmalloc2_free+0xc3)
<br>
[0x2aaaaaf3b6c3]
<br>
[nid00010:23511] [ 3]
<br>
/home/knteran/openmpi/lib/libmpi.so.0(mca_pml_base_close+0xb2)
<br>
[0x2aaaaae717b2]
<br>
[nid00010:23511] [ 4]
<br>
/home/knteran/openmpi/lib/libmpi.so.0(ompi_mpi_finalize+0x333)
<br>
[0x2aaaaad7be23]
<br>
[nid00010:23511] [ 5] ./cpi() [0x400e23]
<br>
[nid00010:23511] [ 6] /lib64/libc.so.6(__libc_start_main+0xe6)
<br>
[0x2aaaacde7c36]
<br>
[nid00010:23511] [ 7] ./cpi() [0x400b09]
<br>
<p><p><p>Thanks,
<br>
<p>---------------------------------------------------------------------------
<br>
<pre>
--
Keita Teranishi
Principal Member of Technical Staff
Scalable Modeling and Analysis Systems
Sandia National Laboratories
Livermore, CA 94551
+1 (925) 294-3738
On 11/25/13 12:28 PM, &quot;Nathan Hjelm&quot; &lt;hjelmn_at_[hidden]&gt; wrote:
&gt;Just talked with our local Cray rep. Sounds like that torque syntax is
&gt;broken. You can continue
&gt;to use qsub (though qsub use is strongly discouraged) if you use the msub
&gt;options.
&gt;
&gt;Ex:
&gt;
&gt;qsub -lnodes=2:ppn=16
&gt;
&gt;Works.
&gt;
&gt;-Nathan
&gt;
&gt;On Mon, Nov 25, 2013 at 01:11:29PM -0700, Nathan Hjelm wrote:
&gt;&gt; Hmm, this seems like either a bug in qsub (torque is full of serious
&gt;&gt;bugs) or a bug
&gt;&gt; in alps. I got an allocation using that command and alps only sees 1
&gt;&gt;node:
&gt;&gt; 
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: Trying ALPS
&gt;&gt;configuration file: &quot;/etc/sysconfig/alps&quot;
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: parser_ini
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: Trying ALPS
&gt;&gt;configuration file: &quot;/etc/alps.conf&quot;
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt;parser_separated_columns
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: Located ALPS scheduler
&gt;&gt;file: &quot;/ufs/alps_shared/appinfo&quot;
&gt;&gt; [ct-login1.localdomain:06010]
&gt;&gt;ras:alps:orte_ras_alps_get_appinfo_attempts: 10
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: begin processing
&gt;&gt;appinfo file
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: file
&gt;&gt;/ufs/alps_shared/appinfo read
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: 47 entries in file
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId
&gt;&gt;3492 - myId 3668
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId
&gt;&gt;3492 - myId 3668
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId
&gt;&gt;3541 - myId 3668
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId
&gt;&gt;3541 - myId 3668
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId
&gt;&gt;3560 - myId 3668
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId
&gt;&gt;3560 - myId 3668
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId
&gt;&gt;3561 - myId 3668
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId
&gt;&gt;3561 - myId 3668
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId
&gt;&gt;3566 - myId 3668
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId
&gt;&gt;3566 - myId 3668
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId
&gt;&gt;3573 - myId 3668
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId
&gt;&gt;3573 - myId 3668
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId
&gt;&gt;3588 - myId 3668
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId
&gt;&gt;3588 - myId 3668
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId
&gt;&gt;3598 - myId 3668
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId
&gt;&gt;3598 - myId 3668
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId
&gt;&gt;3599 - myId 3668
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId
&gt;&gt;3599 - myId 3668
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId
&gt;&gt;3622 - myId 3668
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId
&gt;&gt;3622 - myId 3668
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId
&gt;&gt;3635 - myId 3668
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId
&gt;&gt;3635 - myId 3668
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId
&gt;&gt;3640 - myId 3668
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId
&gt;&gt;3640 - myId 3668
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId
&gt;&gt;3641 - myId 3668
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId
&gt;&gt;3641 - myId 3668
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId
&gt;&gt;3642 - myId 3668
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId
&gt;&gt;3642 - myId 3668
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId
&gt;&gt;3647 - myId 3668
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId
&gt;&gt;3647 - myId 3668
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId
&gt;&gt;3651 - myId 3668
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId
&gt;&gt;3651 - myId 3668
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId
&gt;&gt;3653 - myId 3668
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId
&gt;&gt;3653 - myId 3668
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId
&gt;&gt;3659 - myId 3668
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId
&gt;&gt;3659 - myId 3668
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId
&gt;&gt;3662 - myId 3668
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId
&gt;&gt;3662 - myId 3668
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId
&gt;&gt;3665 - myId 3668
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId
&gt;&gt;3665 - myId 3668
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for resId
&gt;&gt;3668 - myId 3668
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:read_appinfo(modern): processing
&gt;&gt;NID 29 with 16 slots
&gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: success
&gt;&gt; [ct-login1.localdomain:06010] [[15798,0],0] ras:base:node_insert
&gt;&gt;inserting 1 nodes
&gt;&gt; [ct-login1.localdomain:06010] [[15798,0],0] ras:base:node_insert node 29
&gt;&gt; 
&gt;&gt; ======================   ALLOCATED NODES   ======================
&gt;&gt; 
&gt;&gt;  Data for node: 29	Num slots: 16	Max slots: 0
&gt;&gt; 
&gt;&gt; =================================================================
&gt;&gt; 
&gt;&gt; 
&gt;&gt; Torque also shows only one node with 16 PPN:
&gt;&gt; 
&gt;&gt; $ env | grep PBS
&gt;&gt; ...
&gt;&gt; PBS_NUM_PPN=16
&gt;&gt; 
&gt;&gt; 
&gt;&gt; $ cat /var/spool/torque/aux//915289.sdb
&gt;&gt; login1
&gt;&gt; 
&gt;&gt; Which is wrong! I will have to ask Cray what is going on here. I
&gt;&gt;recommend you switch to
&gt;&gt; msub to get an allocation. Moab has fewer bugs. I can't even get aprun
&gt;&gt;to work:
&gt;&gt; 
&gt;&gt; $ aprun -n 2 -N 1 hostname
&gt;&gt; apsched: claim exceeds reservation's node-count
&gt;&gt; 
&gt;&gt; $ aprun -n 32 hostname
&gt;&gt; apsched: claim exceeds reservation's node-count
&gt;&gt; 
&gt;&gt; 
&gt;&gt; To get an interactive session 2 nodes with 16 ppn on each run:
&gt;&gt; 
&gt;&gt; msub -I -lnodes=2:ppn=16
&gt;&gt; 
&gt;&gt; Open MPI should then work correctly.
&gt;&gt; 
&gt;&gt; -Nathan Hjelm
&gt;&gt; HPC-5, LANL
&gt;&gt; 
&gt;&gt; On Sat, Nov 23, 2013 at 10:13:26PM +0000, Teranishi, Keita wrote:
&gt;&gt; &gt;    Hi,
&gt;&gt; &gt;    I installed OpenMPI on our small XE6 using the configure options
&gt;&gt;under
&gt;&gt; &gt;    /contrib directory.  It appears it is working fine, but it ignores
&gt;&gt;MCA
&gt;&gt; &gt;    parameters (set in env var).  So I switched to mpirun (in OpenMPI)
&gt;&gt;and it
&gt;&gt; &gt;    can handle MCA parameters somehow.  However,  mpirun fails to
&gt;&gt;allocate
&gt;&gt; &gt;    process by cores.  For example, I allocated 32 cores (on 2 nodes)
&gt;&gt;by &quot;qsub
&gt;&gt; &gt;    -lmppwidth=32 -lmppnppn=16&quot;, mpirun recognizes it as 2 slots.
&gt;&gt;Is it
&gt;&gt; &gt;    possible to mpirun to handle mluticore nodes of XE6 properly or is
&gt;&gt;there
&gt;&gt; &gt;    any options to handle MCA parameters for aprun?
&gt;&gt; &gt;    Regards,
&gt;&gt; &gt;    
&gt;&gt;-------------------------------------------------------------------------
&gt;&gt;----
&gt;&gt; &gt;    Keita Teranishi
&gt;&gt; &gt;    Principal Member of Technical Staff
&gt;&gt; &gt;    Scalable Modeling and Analysis Systems
&gt;&gt; &gt;    Sandia National Laboratories
&gt;&gt; &gt;    Livermore, CA 94551
&gt;&gt; &gt;    +1 (925) 294-3738
&gt;&gt; 
&gt;&gt; &gt; _______________________________________________
&gt;&gt; &gt; users mailing list
&gt;&gt; &gt; users_at_[hidden]
&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; 
&gt;
&gt;
&gt;
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23061.php">Nathan Hjelm: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>Previous message:</strong> <a href="23059.php">Nathan Hjelm: "Re: [OMPI users] (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>In reply to:</strong> <a href="23059.php">Nathan Hjelm: "Re: [OMPI users] (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23061.php">Nathan Hjelm: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>Reply:</strong> <a href="23061.php">Nathan Hjelm: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
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
