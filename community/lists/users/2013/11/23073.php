<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 26 16:18:30 2013" -->
<!-- isoreceived="20131126211830" -->
<!-- sent="Tue, 26 Nov 2013 21:18:14 +0000" -->
<!-- isosent="20131126211814" -->
<!-- name="Teranishi, Keita" -->
<!-- email="knteran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?" -->
<!-- id="CEBA4F18.46190%knteran_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20131126205221.GB55796_at_pn1246003.lanl.gov" -->
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
<strong>Date:</strong> 2013-11-26 16:18:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23074.php">Nathan Hjelm: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>Previous message:</strong> <a href="23072.php">Nathan Hjelm: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>In reply to:</strong> <a href="23072.php">Nathan Hjelm: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23074.php">Nathan Hjelm: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>Reply:</strong> <a href="23074.php">Nathan Hjelm: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan,
<br>
<p>Now I remove strip_prefix stuff, which was applied to the other versions
<br>
of OpenMPI.  
<br>
I still have the same problem with msubrun command.
<br>
<p>knteran_at_mzlogin01:~&gt; msub -lnodes=2:ppn=16 -I
<br>
qsub: waiting for job 7754058.sdb to start
<br>
qsub: job 7754058.sdb ready
<br>
<p>knteran_at_mzlogin01:~&gt; cd test-openmpi/
<br>
knteran_at_mzlogin01:~/test-openmpi&gt; !mp
<br>
mpicc cpi.c -o cpi
<br>
knteran_at_mzlogin01:~/test-openmpi&gt; mpirun -np 4 ./cpi
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
<p>I set PATH and LD_LIBRARY_PATH to match with my own OpenMPI installation.
<br>
knteran_at_mzlogin01:~/test-openmpi&gt; which mpirun
<br>
/home/knteran/openmpi/bin/mpirun
<br>
<p><p><p><p>Thanks,
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
On 11/26/13 12:52 PM, &quot;Nathan Hjelm&quot; &lt;hjelmn_at_[hidden]&gt; wrote:
&gt;Weird. That is the same configuration we have deployed on Cielito and
&gt;Cielo. Does
&gt;it work under an msub allocation?
&gt;
&gt;BTW, with that configuration you should not set
&gt;plm_base_strip_prefix_from_node_names
&gt;to 0. That will confuse orte since the node hostname will not match what
&gt;was
&gt;supplied by alps.
&gt;
&gt;-Nathan
&gt;
&gt;On Tue, Nov 26, 2013 at 08:38:51PM +0000, Teranishi, Keita wrote:
&gt;&gt; Nathan,
&gt;&gt; 
&gt;&gt; (Please forget about the segfault. It was my mistake).
&gt;&gt; I use OpenMPI-1.7.2 (build with gcc-4.7.2) to run the program.  I used
&gt;&gt; contrib/platform/lanl/cray_xe6/optimized_lustre and
&gt;&gt; --enable-mpirun-prefix-by-default for configuration.  As I said, it
&gt;&gt;works
&gt;&gt; fine with aprun, but fails with mpirun/mpiexec.
&gt;&gt; 
&gt;&gt; 
&gt;&gt; knteran_at_mzlogin01:~/test-openmpi&gt; ~/openmpi/bin/mpirun -np 4 ./a.out
&gt;&gt; 
&gt;&gt;-------------------------------------------------------------------------
&gt;&gt;-
&gt;&gt; There are not enough slots available in the system to satisfy the 4
&gt;&gt;slots
&gt;&gt; that were requested by the application:
&gt;&gt;   ./a.out
&gt;&gt; 
&gt;&gt; Either request fewer slots for your application, or make more slots
&gt;&gt; available
&gt;&gt; for use.
&gt;&gt; 
&gt;&gt; 
&gt;&gt;-------------------------------------------------------------------------
&gt;&gt;--
&gt;&gt; -
&gt;&gt; 
&gt;&gt; Thanks,
&gt;&gt; 
&gt;&gt; 
&gt;&gt;-------------------------------------------------------------------------
&gt;&gt;--
&gt;&gt; --
&gt;&gt; Keita Teranishi
&gt;&gt; Principal Member of Technical Staff
&gt;&gt; Scalable Modeling and Analysis Systems
&gt;&gt; Sandia National Laboratories
&gt;&gt; Livermore, CA 94551
&gt;&gt; +1 (925) 294-3738
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; On 11/25/13 12:55 PM, &quot;Nathan Hjelm&quot; &lt;hjelmn_at_[hidden]&gt; wrote:
&gt;&gt; 
&gt;&gt; &gt;Ok, that should have worked. I just double-checked it to me sure.
&gt;&gt; &gt;
&gt;&gt; &gt;ct-login1:/lscratch1/hjelmn/ibm/collective hjelmn$ mpirun -np 32
&gt;&gt;./bcast
&gt;&gt; &gt;App launch reported: 17 (out of 3) daemons - 0 (out of 32) procs
&gt;&gt; &gt;ct-login1:/lscratch1/hjelmn/ibm/collective hjelmn$
&gt;&gt; &gt;
&gt;&gt; &gt;
&gt;&gt; &gt;How did you configure Open MPI and what version are you using?
&gt;&gt; &gt;
&gt;&gt; &gt;-Nathan
&gt;&gt; &gt;
&gt;&gt; &gt;On Mon, Nov 25, 2013 at 08:48:09PM +0000, Teranishi, Keita wrote:
&gt;&gt; &gt;&gt; Hi Natan,
&gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; I tried qsub option you
&gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; mpirun -np 4  --mca plm_base_strip_prefix_from_node_names= 0 ./cpi
&gt;&gt; &gt;&gt; 
&gt;&gt; 
&gt;&gt;&gt;&gt;-----------------------------------------------------------------------
&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt;-
&gt;&gt; &gt;&gt; There are not enough slots available in the system to satisfy the 4
&gt;&gt; &gt;&gt;slots
&gt;&gt; &gt;&gt; that were requested by the application:
&gt;&gt; &gt;&gt;   ./cpi
&gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; Either request fewer slots for your application, or make more slots
&gt;&gt; &gt;&gt; available
&gt;&gt; &gt;&gt; for use.
&gt;&gt; &gt;&gt; 
&gt;&gt; 
&gt;&gt;&gt;&gt;-----------------------------------------------------------------------
&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt;-
&gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; Here is I got from aprun
&gt;&gt; &gt;&gt; aprun  -n 32 ./cpi
&gt;&gt; &gt;&gt; Process 8 of 32 is on nid00011
&gt;&gt; &gt;&gt; Process 5 of 32 is on nid00011
&gt;&gt; &gt;&gt; Process 12 of 32 is on nid00011
&gt;&gt; &gt;&gt; Process 9 of 32 is on nid00011
&gt;&gt; &gt;&gt; Process 11 of 32 is on nid00011
&gt;&gt; &gt;&gt; Process 13 of 32 is on nid00011
&gt;&gt; &gt;&gt; Process 0 of 32 is on nid00011
&gt;&gt; &gt;&gt; Process 6 of 32 is on nid00011
&gt;&gt; &gt;&gt; Process 3 of 32 is on nid00011
&gt;&gt; &gt;&gt; :
&gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; :
&gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; Also, I found a strange error in the end of the program
&gt;&gt;(MPI_Finalize?)
&gt;&gt; &gt;&gt; Can you tell me what is wrong with that?
&gt;&gt; &gt;&gt; [nid00010:23511] [ 0] /lib64/libpthread.so.0(+0xf7c0)
&gt;&gt;[0x2aaaacbbb7c0]
&gt;&gt; &gt;&gt; [nid00010:23511] [ 1]
&gt;&gt; &gt;&gt; 
&gt;&gt; 
&gt;&gt;&gt;&gt;/home/knteran/openmpi/lib/libmpi.so.0(opal_memory_ptmalloc2_int_free+0x
&gt;&gt;&gt;&gt;57
&gt;&gt; &gt;&gt;)
&gt;&gt; &gt;&gt; [0x2aaaaaf38ec7]
&gt;&gt; &gt;&gt; [nid00010:23511] [ 2]
&gt;&gt; &gt;&gt; 
&gt;&gt;/home/knteran/openmpi/lib/libmpi.so.0(opal_memory_ptmalloc2_free+0xc3)
&gt;&gt; &gt;&gt; [0x2aaaaaf3b6c3]
&gt;&gt; &gt;&gt; [nid00010:23511] [ 3]
&gt;&gt; &gt;&gt; /home/knteran/openmpi/lib/libmpi.so.0(mca_pml_base_close+0xb2)
&gt;&gt; &gt;&gt; [0x2aaaaae717b2]
&gt;&gt; &gt;&gt; [nid00010:23511] [ 4]
&gt;&gt; &gt;&gt; /home/knteran/openmpi/lib/libmpi.so.0(ompi_mpi_finalize+0x333)
&gt;&gt; &gt;&gt; [0x2aaaaad7be23]
&gt;&gt; &gt;&gt; [nid00010:23511] [ 5] ./cpi() [0x400e23]
&gt;&gt; &gt;&gt; [nid00010:23511] [ 6] /lib64/libc.so.6(__libc_start_main+0xe6)
&gt;&gt; &gt;&gt; [0x2aaaacde7c36]
&gt;&gt; &gt;&gt; [nid00010:23511] [ 7] ./cpi() [0x400b09]
&gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; Thanks,
&gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; 
&gt;&gt; 
&gt;&gt;&gt;&gt;-----------------------------------------------------------------------
&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt;--
&gt;&gt; &gt;&gt; --
&gt;&gt; &gt;&gt; Keita Teranishi
&gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; Principal Member of Technical Staff
&gt;&gt; &gt;&gt; Scalable Modeling and Analysis Systems
&gt;&gt; &gt;&gt; Sandia National Laboratories
&gt;&gt; &gt;&gt; Livermore, CA 94551
&gt;&gt; &gt;&gt; +1 (925) 294-3738
&gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; On 11/25/13 12:28 PM, &quot;Nathan Hjelm&quot; &lt;hjelmn_at_[hidden]&gt; wrote:
&gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;Just talked with our local Cray rep. Sounds like that torque syntax
&gt;&gt;is
&gt;&gt; &gt;&gt; &gt;broken. You can continue
&gt;&gt; &gt;&gt; &gt;to use qsub (though qsub use is strongly discouraged) if you use the
&gt;&gt; &gt;&gt;msub
&gt;&gt; &gt;&gt; &gt;options.
&gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt; &gt;Ex:
&gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt; &gt;qsub -lnodes=2:ppn=16
&gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt; &gt;Works.
&gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt; &gt;-Nathan
&gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt; &gt;On Mon, Nov 25, 2013 at 01:11:29PM -0700, Nathan Hjelm wrote:
&gt;&gt; &gt;&gt; &gt;&gt; Hmm, this seems like either a bug in qsub (torque is full of
&gt;&gt;serious
&gt;&gt; &gt;&gt; &gt;&gt;bugs) or a bug
&gt;&gt; &gt;&gt; &gt;&gt; in alps. I got an allocation using that command and alps only
&gt;&gt;sees 1
&gt;&gt; &gt;&gt; &gt;&gt;node:
&gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: Trying ALPS
&gt;&gt; &gt;&gt; &gt;&gt;configuration file: &quot;/etc/sysconfig/alps&quot;
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: parser_ini
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: Trying ALPS
&gt;&gt; &gt;&gt; &gt;&gt;configuration file: &quot;/etc/alps.conf&quot;
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt; &gt;&gt;parser_separated_columns
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: Located ALPS
&gt;&gt; &gt;&gt;scheduler
&gt;&gt; &gt;&gt; &gt;&gt;file: &quot;/ufs/alps_shared/appinfo&quot;
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010]
&gt;&gt; &gt;&gt; &gt;&gt;ras:alps:orte_ras_alps_get_appinfo_attempts: 10
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: begin processing
&gt;&gt; &gt;&gt; &gt;&gt;appinfo file
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: file
&gt;&gt; &gt;&gt; &gt;&gt;/ufs/alps_shared/appinfo read
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: 47 entries in
&gt;&gt;file
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for
&gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt;3492 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for
&gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt;3492 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for
&gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt;3541 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for
&gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt;3541 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for
&gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt;3560 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for
&gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt;3560 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for
&gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt;3561 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for
&gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt;3561 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for
&gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt;3566 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for
&gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt;3566 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for
&gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt;3573 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for
&gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt;3573 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for
&gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt;3588 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for
&gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt;3588 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for
&gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt;3598 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for
&gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt;3598 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for
&gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt;3599 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for
&gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt;3599 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for
&gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt;3622 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for
&gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt;3622 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for
&gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt;3635 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for
&gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt;3635 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for
&gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt;3640 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for
&gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt;3640 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for
&gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt;3641 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for
&gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt;3641 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for
&gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt;3642 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for
&gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt;3642 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for
&gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt;3647 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for
&gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt;3647 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for
&gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt;3651 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for
&gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt;3651 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for
&gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt;3653 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for
&gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt;3653 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for
&gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt;3659 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for
&gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt;3659 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for
&gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt;3662 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for
&gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt;3662 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for
&gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt;3665 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for
&gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt;3665 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data for
&gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt;3668 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:read_appinfo(modern):
&gt;&gt; &gt;&gt;processing
&gt;&gt; &gt;&gt; &gt;&gt;NID 29 with 16 slots
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: success
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] [[15798,0],0] ras:base:node_insert
&gt;&gt; &gt;&gt; &gt;&gt;inserting 1 nodes
&gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] [[15798,0],0] ras:base:node_insert
&gt;&gt; &gt;&gt;node 29
&gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; ======================   ALLOCATED NODES   ======================
&gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt;  Data for node: 29	Num slots: 16	Max slots: 0
&gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; =================================================================
&gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; Torque also shows only one node with 16 PPN:
&gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; $ env | grep PBS
&gt;&gt; &gt;&gt; &gt;&gt; ...
&gt;&gt; &gt;&gt; &gt;&gt; PBS_NUM_PPN=16
&gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; $ cat /var/spool/torque/aux//915289.sdb
&gt;&gt; &gt;&gt; &gt;&gt; login1
&gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; Which is wrong! I will have to ask Cray what is going on here. I
&gt;&gt; &gt;&gt; &gt;&gt;recommend you switch to
&gt;&gt; &gt;&gt; &gt;&gt; msub to get an allocation. Moab has fewer bugs. I can't even get
&gt;&gt; &gt;&gt;aprun
&gt;&gt; &gt;&gt; &gt;&gt;to work:
&gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; $ aprun -n 2 -N 1 hostname
&gt;&gt; &gt;&gt; &gt;&gt; apsched: claim exceeds reservation's node-count
&gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; $ aprun -n 32 hostname
&gt;&gt; &gt;&gt; &gt;&gt; apsched: claim exceeds reservation's node-count
&gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; To get an interactive session 2 nodes with 16 ppn on each run:
&gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; msub -I -lnodes=2:ppn=16
&gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; Open MPI should then work correctly.
&gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; -Nathan Hjelm
&gt;&gt; &gt;&gt; &gt;&gt; HPC-5, LANL
&gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; On Sat, Nov 23, 2013 at 10:13:26PM +0000, Teranishi, Keita wrote:
&gt;&gt; &gt;&gt; &gt;&gt; &gt;    Hi,
&gt;&gt; &gt;&gt; &gt;&gt; &gt;    I installed OpenMPI on our small XE6 using the configure
&gt;&gt;options
&gt;&gt; &gt;&gt; &gt;&gt;under
&gt;&gt; &gt;&gt; &gt;&gt; &gt;    /contrib directory.  It appears it is working fine, but it
&gt;&gt; &gt;&gt;ignores
&gt;&gt; &gt;&gt; &gt;&gt;MCA
&gt;&gt; &gt;&gt; &gt;&gt; &gt;    parameters (set in env var).  So I switched to mpirun (in
&gt;&gt; &gt;&gt;OpenMPI)
&gt;&gt; &gt;&gt; &gt;&gt;and it
&gt;&gt; &gt;&gt; &gt;&gt; &gt;    can handle MCA parameters somehow.  However,  mpirun fails to
&gt;&gt; &gt;&gt; &gt;&gt;allocate
&gt;&gt; &gt;&gt; &gt;&gt; &gt;    process by cores.  For example, I allocated 32 cores (on 2
&gt;&gt; &gt;&gt;nodes)
&gt;&gt; &gt;&gt; &gt;&gt;by &quot;qsub
&gt;&gt; &gt;&gt; &gt;&gt; &gt;    -lmppwidth=32 -lmppnppn=16&quot;, mpirun recognizes it as 2 slots.
&gt;&gt; &gt;&gt; &gt;&gt;Is it
&gt;&gt; &gt;&gt; &gt;&gt; &gt;    possible to mpirun to handle mluticore nodes of XE6 properly
&gt;&gt;or
&gt;&gt; &gt;&gt;is
&gt;&gt; &gt;&gt; &gt;&gt;there
&gt;&gt; &gt;&gt; &gt;&gt; &gt;    any options to handle MCA parameters for aprun?
&gt;&gt; &gt;&gt; &gt;&gt; &gt;    Regards,
&gt;&gt; &gt;&gt; &gt;&gt; &gt;    
&gt;&gt; &gt;&gt; 
&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;---------------------------------------------------------------------
&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt;----
&gt;&gt; &gt;&gt; &gt;&gt; &gt;    Keita Teranishi
&gt;&gt; &gt;&gt; &gt;&gt; &gt;    Principal Member of Technical Staff
&gt;&gt; &gt;&gt; &gt;&gt; &gt;    Scalable Modeling and Analysis Systems
&gt;&gt; &gt;&gt; &gt;&gt; &gt;    Sandia National Laboratories
&gt;&gt; &gt;&gt; &gt;&gt; &gt;    Livermore, CA 94551
&gt;&gt; &gt;&gt; &gt;&gt; &gt;    +1 (925) 294-3738
&gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt; _______________________________________________
&gt;&gt; &gt;&gt; &gt;&gt; &gt; users mailing list
&gt;&gt; &gt;&gt; &gt;&gt; &gt; users_at_[hidden]
&gt;&gt; &gt;&gt; &gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt; &gt;&gt; _______________________________________________
&gt;&gt; &gt;&gt; &gt;&gt; users mailing list
&gt;&gt; &gt;&gt; &gt;&gt; users_at_[hidden]
&gt;&gt; &gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; _______________________________________________
&gt;&gt; &gt;&gt; users mailing list
&gt;&gt; &gt;&gt; users_at_[hidden]
&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; 
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23074.php">Nathan Hjelm: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>Previous message:</strong> <a href="23072.php">Nathan Hjelm: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>In reply to:</strong> <a href="23072.php">Nathan Hjelm: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23074.php">Nathan Hjelm: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>Reply:</strong> <a href="23074.php">Nathan Hjelm: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
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
