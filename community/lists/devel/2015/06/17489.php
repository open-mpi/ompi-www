<?
$subject_val = "Re: [OMPI devel] master seg fault in CM PML";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  9 14:53:12 2015" -->
<!-- isoreceived="20150609185312" -->
<!-- sent="Tue, 9 Jun 2015 18:53:05 +0000" -->
<!-- isosent="20150609185305" -->
<!-- name="Jose, Jithin" -->
<!-- email="jithin.jose_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] master seg fault in CM PML" -->
<!-- id="D19C838E.4913%jithin.jose_at_intel.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="42C1F321-4924-4D2C-92A8-BD2765387D1B_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] master seg fault in CM PML<br>
<strong>From:</strong> Jose, Jithin (<em>jithin.jose_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-09 14:53:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17490.php">Jose, Jithin: "Re: [OMPI devel] master seg fault in CM PML"</a>
<li><strong>Previous message:</strong> <a href="17488.php">Ralph Castain: "Re: [OMPI devel] master seg fault in CM PML"</a>
<li><strong>In reply to:</strong> <a href="17488.php">Ralph Castain: "Re: [OMPI devel] master seg fault in CM PML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17490.php">Jose, Jithin: "Re: [OMPI devel] master seg fault in CM PML"</a>
<li><strong>Reply:</strong> <a href="17490.php">Jose, Jithin: "Re: [OMPI devel] master seg fault in CM PML"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm, possible; it could be a corner-case.
<br>
Let me take a look at this.
<br>
<p>- Jithin
<br>
<p><p>-----Original Message-----
<br>
From: Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
Reply-To: Open MPI Developers &lt;devel_at_[hidden]&gt;
<br>
Date: Tuesday, June 9, 2015 at 9:35 AM
<br>
To: Open MPI Developers &lt;devel_at_[hidden]&gt;
<br>
Subject: Re: [OMPI devel] master seg fault in CM PML
<br>
<p><span class="quotelev1">&gt;Jithin recently committed some CM optimizations - could they have
</span><br>
<span class="quotelev1">&gt;triggered it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 9, 2015, at 9:08 AM, Friedley, Andrew
</span><br>
<span class="quotelev2">&gt;&gt;&lt;andrew.friedley_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm seeing an issue running various tests from the Intel MPI test
</span><br>
<span class="quotelev2">&gt;&gt;suite.  Has anyone else seen this?  Any ideas?  RHEL7, master git hash
</span><br>
<span class="quotelev2">&gt;&gt;090922887b92c9764cc5, no CFLAGS set,  no special configure options.  The
</span><br>
<span class="quotelev2">&gt;&gt;mpirun command and output are included below.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Failure happens with '-mca pml cm -mca mtl psm', but '-mca pml ob1 -mca
</span><br>
<span class="quotelev2">&gt;&gt;btl tcp,sm,self' works.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Andrew
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 6 -H sperf-05,sperf-06 -mca pml cm -mca mtl psm --
</span><br>
<span class="quotelev2">&gt;&gt;`pwd`/src/MPI_Allreduce_loc_c
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Allreduce_loc_c:127662 terminated with signal 11 at PC=7fde548b7b45
</span><br>
<span class="quotelev2">&gt;&gt;SP=7fff344f8180.  Backtrace:
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Allreduce_loc_c: opal_convertor.c:566:
</span><br>
<span class="quotelev2">&gt;&gt;opal_convertor_prepare_for_recv: Assertion `convertor-&gt;pStack ==
</span><br>
<span class="quotelev2">&gt;&gt;convertor-&gt;static_stack' failed.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Allreduce_loc_c:127663 terminated with signal 6 at PC=7f492a3b35c9
</span><br>
<span class="quotelev2">&gt;&gt;SP=7fffc7374438.  Backtrace:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Allreduce_loc_c:127664 terminated with signal 11 at PC=7f3eabe88b45
</span><br>
<span class="quotelev2">&gt;&gt;SP=7fff9e686f70.  Backtrace:
</span><br>
<span class="quotelev2">&gt;&gt; MPITEST info  (0): Starting MPI_Allreduce_loc() test
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Allreduce_loc_c: opal_convertor.c:566:
</span><br>
<span class="quotelev2">&gt;&gt;opal_convertor_prepare_for_recv: Assertion `convertor-&gt;pStack ==
</span><br>
<span class="quotelev2">&gt;&gt;convertor-&gt;static_stack' failed.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Allreduce_loc_c:8148 terminated with signal 6 at PC=7f5bcafa75c9
</span><br>
<span class="quotelev2">&gt;&gt;SP=7fff65830328.  Backtrace:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;/nfs/site/home/afriedle/local/ompi-afriedle/lib/libopen-pal.so.0(+0x4db45
</span><br>
<span class="quotelev2">&gt;&gt;)[0x7f3eabe88b45]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;/nfs/site/home/afriedle/local/ompi-afriedle/lib/libopen-pal.so.0(opal_con
</span><br>
<span class="quotelev2">&gt;&gt;vertor_prepare_for_send+0x2ec)[0x7f3eabe89352]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;/nfs/site/home/afriedle/local/ompi-afriedle/lib/openmpi/mca_pml_cm.so(+0x
</span><br>
<span class="quotelev2">&gt;&gt;2467)[0x7f3ea6dbd467]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;/nfs/site/home/afriedle/local/ompi-afriedle/lib/openmpi/mca_pml_cm.so(+0x
</span><br>
<span class="quotelev2">&gt;&gt;442e)[0x7f3ea6dbf42e]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;/nfs/site/home/afriedle/local/ompi-afriedle/lib/libopen-pal.so.0(+0x4db45
</span><br>
<span class="quotelev2">&gt;&gt;)[0x7fde548b7b45]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;/nfs/site/home/afriedle/local/ompi-afriedle/lib/libopen-pal.so.0(opal_con
</span><br>
<span class="quotelev2">&gt;&gt;vertor_prepare_for_send+0x2ec)[0x7fde548b8352]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;/nfs/site/home/afriedle/local/ompi-afriedle/lib/openmpi/mca_pml_cm.so(+0x
</span><br>
<span class="quotelev2">&gt;&gt;2467)[0x7fde4f7be467]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;/nfs/site/home/afriedle/local/ompi-afriedle/lib/openmpi/mca_pml_cm.so(+0x
</span><br>
<span class="quotelev2">&gt;&gt;442e)[0x7fde4f7c042e]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;/nfs/site/home/afriedle/local/ompi-afriedle/lib/libmpi.so.0(ompi_coll_bas
</span><br>
<span class="quotelev2">&gt;&gt;e_allreduce_intra_recursivedoubling+0x2ac)[0x7fde5553b4fb]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;/nfs/site/home/afriedle/local/ompi-afriedle/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev2">&gt;&gt;(ompi_coll_tuned_allreduce_intra_dec_fixed+0xa8)[0x7fde4e4fecd1]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;/nfs/site/home/afriedle/local/ompi-afriedle/lib/libmpi.so.0(ompi_coll_bas
</span><br>
<span class="quotelev2">&gt;&gt;e_allreduce_intra_recursivedoubling+0x2ac)[0x7f3eacb0c4fb]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;/nfs/site/home/afriedle/local/ompi-afriedle/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev2">&gt;&gt;(ompi_coll_tuned_allreduce_intra_dec_fixed+0xa8)[0x7f3ea5afdcd1]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;/nfs/site/home/afriedle/local/ompi-afriedle/lib/libmpi.so.0(PMPI_Allreduc
</span><br>
<span class="quotelev2">&gt;&gt;e+0x3ae)[0x7f3eacaa55e8]
</span><br>
<span class="quotelev2">&gt;&gt; /lib64/libc.so.6(gsignal+0x39)[0x7f492a3b35c9]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;/nfs/site/home/afriedle/local/ompi-afriedle/lib/libmpi.so.0(PMPI_Allreduc
</span><br>
<span class="quotelev2">&gt;&gt;e+0x3ae)[0x7fde554d45e8]
</span><br>
<span class="quotelev2">&gt;&gt; /nfs/site/home/afriedle/apps/intel/src/MPI_Allreduce_loc_c[0x4029a5]
</span><br>
<span class="quotelev2">&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xf5)[0x7fde54eafaf5]
</span><br>
<span class="quotelev2">&gt;&gt; /nfs/site/home/afriedle/apps/intel/src/MPI_Allreduce_loc_c[0x4019a9]
</span><br>
<span class="quotelev2">&gt;&gt; /nfs/site/home/afriedle/apps/intel/src/MPI_Allreduce_loc_c[0x4029a5]
</span><br>
<span class="quotelev2">&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xf5)[0x7f3eac480af5]
</span><br>
<span class="quotelev2">&gt;&gt; /nfs/site/home/afriedle/apps/intel/src/MPI_Allreduce_loc_c[0x4019a9]
</span><br>
<span class="quotelev2">&gt;&gt; /lib64/libc.so.6(abort+0x148)[0x7f492a3b4cd8]
</span><br>
<span class="quotelev2">&gt;&gt; /lib64/libc.so.6(+0x2e536)[0x7f492a3ac536]
</span><br>
<span class="quotelev2">&gt;&gt; /lib64/libc.so.6(+0x2e5e2)[0x7f492a3ac5e2]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;/nfs/site/home/afriedle/local/ompi-afriedle/lib/libopen-pal.so.0(opal_con
</span><br>
<span class="quotelev2">&gt;&gt;vertor_prepare_for_recv+0x297)[0x7f4929da7f8c]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;/nfs/site/home/afriedle/local/ompi-afriedle/lib/openmpi/mca_pml_cm.so(+0x
</span><br>
<span class="quotelev2">&gt;&gt;24d0)[0x7f4924cbd4d0]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;/nfs/site/home/afriedle/local/ompi-afriedle/lib/openmpi/mca_pml_cm.so(+0x
</span><br>
<span class="quotelev2">&gt;&gt;2bd5)[0x7f4924cbdbd5]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;/nfs/site/home/afriedle/local/ompi-afriedle/lib/libmpi.so.0(ompi_coll_bas
</span><br>
<span class="quotelev2">&gt;&gt;e_allreduce_intra_recursivedoubling+0x30c)[0x7f492aa2b55b]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;/nfs/site/home/afriedle/local/ompi-afriedle/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev2">&gt;&gt;(ompi_coll_tuned_allreduce_intra_dec_fixed+0xa8)[0x7f49239fdcd1]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;/nfs/site/home/afriedle/local/ompi-afriedle/lib/libmpi.so.0(PMPI_Allreduc
</span><br>
<span class="quotelev2">&gt;&gt;e+0x3ae)[0x7f492a9c45e8]
</span><br>
<span class="quotelev2">&gt;&gt; /nfs/site/home/afriedle/apps/intel/src/MPI_Allreduce_loc_c[0x4029a5]
</span><br>
<span class="quotelev2">&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xf5)[0x7f492a39faf5]
</span><br>
<span class="quotelev2">&gt;&gt; /nfs/site/home/afriedle/apps/intel/src/MPI_Allreduce_loc_c[0x4019a9]
</span><br>
<span class="quotelev2">&gt;&gt; /lib64/libc.so.6(gsignal+0x39)[0x7f5bcafa75c9]
</span><br>
<span class="quotelev2">&gt;&gt; /lib64/libc.so.6(abort+0x148)[0x7f5bcafa8cd8]
</span><br>
<span class="quotelev2">&gt;&gt; /lib64/libc.so.6(+0x2e536)[0x7f5bcafa0536]
</span><br>
<span class="quotelev2">&gt;&gt; /lib64/libc.so.6(+0x2e5e2)[0x7f5bcafa05e2]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;/nfs/site/home/afriedle/local/ompi-afriedle/lib/libopen-pal.so.0(opal_con
</span><br>
<span class="quotelev2">&gt;&gt;vertor_prepare_for_recv+0x297)[0x7f5bca99bf8c]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;/nfs/site/home/afriedle/local/ompi-afriedle/lib/openmpi/mca_pml_cm.so(+0x
</span><br>
<span class="quotelev2">&gt;&gt;24d0)[0x7f5bc58be4d0]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;/nfs/site/home/afriedle/local/ompi-afriedle/lib/openmpi/mca_pml_cm.so(+0x
</span><br>
<span class="quotelev2">&gt;&gt;2bd5)[0x7f5bc58bebd5]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;/nfs/site/home/afriedle/local/ompi-afriedle/lib/libmpi.so.0(ompi_coll_bas
</span><br>
<span class="quotelev2">&gt;&gt;e_allreduce_intra_recursivedoubling+0x30c)[0x7f5bcb61f55b]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;/nfs/site/home/afriedle/local/ompi-afriedle/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev2">&gt;&gt;(ompi_coll_tuned_allreduce_intra_dec_fixed+0xa8)[0x7f5bc45fecd1]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;/nfs/site/home/afriedle/local/ompi-afriedle/lib/libmpi.so.0(PMPI_Allreduc
</span><br>
<span class="quotelev2">&gt;&gt;e+0x3ae)[0x7f5bcb5b85e8]
</span><br>
<span class="quotelev2">&gt;&gt; /nfs/site/home/afriedle/apps/intel/src/MPI_Allreduce_loc_c[0x4029a5]
</span><br>
<span class="quotelev2">&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xf5)[0x7f5bcaf93af5]
</span><br>
<span class="quotelev2">&gt;&gt; /nfs/site/home/afriedle/apps/intel/src/MPI_Allreduce_loc_c[0x4019a9]
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev2">&gt;&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/community/lists/devel/2015/06/17486.php">http://www.open-mpi.org/community/lists/devel/2015/06/17486.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;Link to this post:
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/community/lists/devel/2015/06/17488.php">http://www.open-mpi.org/community/lists/devel/2015/06/17488.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17490.php">Jose, Jithin: "Re: [OMPI devel] master seg fault in CM PML"</a>
<li><strong>Previous message:</strong> <a href="17488.php">Ralph Castain: "Re: [OMPI devel] master seg fault in CM PML"</a>
<li><strong>In reply to:</strong> <a href="17488.php">Ralph Castain: "Re: [OMPI devel] master seg fault in CM PML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17490.php">Jose, Jithin: "Re: [OMPI devel] master seg fault in CM PML"</a>
<li><strong>Reply:</strong> <a href="17490.php">Jose, Jithin: "Re: [OMPI devel] master seg fault in CM PML"</a>
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
