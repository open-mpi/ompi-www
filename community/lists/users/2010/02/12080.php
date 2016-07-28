<?
$subject_val = "Re: [OMPI users] Seg fault with PBS Pro 10.2";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 12 20:29:18 2010" -->
<!-- isoreceived="20100213012918" -->
<!-- sent="Fri, 12 Feb 2010 18:29:07 -0700" -->
<!-- isosent="20100213012907" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Seg fault with PBS Pro 10.2" -->
<!-- id="53F74EE7-5278-4053-BF2C-BC8AEF721B20_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F44D206478A0FF4A9FE422C463171D6626759B61_at_XCH-MW-09V.mw.nos.boeing.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Seg fault with PBS Pro 10.2<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-12 20:29:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12081.php">Repsher, Stephen J: "Re: [OMPI users] Seg fault with PBS Pro 10.2"</a>
<li><strong>Previous message:</strong> <a href="12079.php">Repsher, Stephen J: "Re: [OMPI users] Seg fault with PBS Pro 10.2"</a>
<li><strong>In reply to:</strong> <a href="12079.php">Repsher, Stephen J: "Re: [OMPI users] Seg fault with PBS Pro 10.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12081.php">Repsher, Stephen J: "Re: [OMPI users] Seg fault with PBS Pro 10.2"</a>
<li><strong>Reply:</strong> <a href="12081.php">Repsher, Stephen J: "Re: [OMPI users] Seg fault with PBS Pro 10.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Afraid compilers don't help when the param is a void*...
<br>
<p>It looks like this is consistent, but I've never tried it under that particular environment. Did prior versions of OMPI work, or are you trying this for the first time?
<br>
<p>One thing you might check is that you have the correct PATH and LD_LIBRARY_PATH set to point to this version of OMPI and the corresponding PBS Pro libs you used to build it. Most Linux distros come with OMPI installed, and that can cause surprises.
<br>
<p>We run under Torque at major installations every day, so it -should- work...unless PBS Pro has done something unusual.
<br>
<p><p>On Feb 12, 2010, at 1:41 PM, Repsher, Stephen J wrote:
<br>
<p><span class="quotelev1">&gt; Yes, the failure seems to be in mpirun, it never even gets to my application.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The proto for tm_init looks like this:
</span><br>
<span class="quotelev1">&gt; int tm_init(void *info, struct tm_roots *roots);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; where the struct has 6 elements: 2 x tm_task_id + 3 x int + 1 x tm_task_id
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; If the API was different, wouldn't the compiler most likely generate an error at compile-time?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Steve
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Friday, February 12, 2010 3:21 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Seg fault with PBS Pro 10.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm a tad confused - this trace would appear to indicate that mpirun is failing, yes? Not your application?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The reason it works for local procs is that tm_init isn't called for that case - mpirun just fork/exec's the procs directly. When remote nodes are required, mpirun must connect to Torque. This is done with a call to:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         ret = tm_init(NULL, &amp;tm_root);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My guess is that something changed in PBS Pro 10.2 to that API. Can you check the tm header file and see? I have no access to PBS any more, so I'll have to rely on your eyes to see a diff.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 12, 2010, at 8:50 AM, Repsher, Stephen J wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm having problems running Open MPI jobs under PBS Pro 10.2.  I've configured and built OpenMPI 1.4.1 with the Intel 11.1 compiler on Linux and with --with-tm support and the build runs fine.  I've also built with static libraries per the FAQ suggestion since libpbs is static.  However, my test application keep failing with a segmentation fault, but ONLY when trying to select more than 1 node.  Running on a single node withing PBS works fine.  Also, running outside of PBS vis ssh runs fine as well, even across multiple nodes.  OpenIB support is also enabled, but that doesn't seem to affect the error because I've also tried running with the --mca btl tcp,self flag and it still doesn't work.  Here is the error I'm getting:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [n34:26892] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [n34:26892] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [n34:26892] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [n34:26892] Failing at address: 0x3f
</span><br>
<span class="quotelev2">&gt;&gt; [n34:26892] [ 0] /lib64/libpthread.so.0 [0x7fc0309d6a90]
</span><br>
<span class="quotelev2">&gt;&gt; [n34:26892] [ 1] /part0/apps/MPI/intel/openmpi-1.4.1/bin/pbs_mpirun(discui_+0x84) [0x476a50]
</span><br>
<span class="quotelev2">&gt;&gt; [n34:26892] [ 2] /part0/apps/MPI/intel/openmpi-1.4.1/bin/pbs_mpirun(diswsi+0xc3) [0x474063]
</span><br>
<span class="quotelev2">&gt;&gt; [n34:26892] [ 3] /part0/apps/MPI/intel/openmpi-1.4.1/bin/pbs_mpirun [0x471d0c]
</span><br>
<span class="quotelev2">&gt;&gt; [n34:26892] [ 4] /part0/apps/MPI/intel/openmpi-1.4.1/bin/pbs_mpirun(tm_init+0x1fe) [0x471ff8]
</span><br>
<span class="quotelev2">&gt;&gt; [n34:26892] [ 5] /part0/apps/MPI/intel/openmpi-1.4.1/bin/pbs_mpirun [0x43f580]
</span><br>
<span class="quotelev2">&gt;&gt; [n34:26892] [ 6] /part0/apps/MPI/intel/openmpi-1.4.1/bin/pbs_mpirun [0x413921]
</span><br>
<span class="quotelev2">&gt;&gt; [n34:26892] [ 7] /part0/apps/MPI/intel/openmpi-1.4.1/bin/pbs_mpirun [0x412b78]
</span><br>
<span class="quotelev2">&gt;&gt; [n34:26892] [ 8] /lib64/libc.so.6(__libc_start_main+0xe6) [0x7fc03068d586]
</span><br>
<span class="quotelev2">&gt;&gt; [n34:26892] [ 9] /part0/apps/MPI/intel/openmpi-1.4.1/bin/pbs_mpirun [0x412ac9]
</span><br>
<span class="quotelev2">&gt;&gt; [n34:26892] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; Segmentation fault
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (NOTE: pbs_mpirun = orterun, mpirun, etc.)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Has anyone else seen errors like this within PBS?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ============================================
</span><br>
<span class="quotelev2">&gt;&gt; Steve Repsher
</span><br>
<span class="quotelev2">&gt;&gt; Boeing Defense, Space, &amp; Security - Rotorcraft
</span><br>
<span class="quotelev2">&gt;&gt; Aerodynamics/CFD
</span><br>
<span class="quotelev2">&gt;&gt; Phone: (610) 591-1510
</span><br>
<span class="quotelev2">&gt;&gt; Fax: (610) 591-6263
</span><br>
<span class="quotelev2">&gt;&gt; stephen.j.repsher_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12080/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12081.php">Repsher, Stephen J: "Re: [OMPI users] Seg fault with PBS Pro 10.2"</a>
<li><strong>Previous message:</strong> <a href="12079.php">Repsher, Stephen J: "Re: [OMPI users] Seg fault with PBS Pro 10.2"</a>
<li><strong>In reply to:</strong> <a href="12079.php">Repsher, Stephen J: "Re: [OMPI users] Seg fault with PBS Pro 10.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12081.php">Repsher, Stephen J: "Re: [OMPI users] Seg fault with PBS Pro 10.2"</a>
<li><strong>Reply:</strong> <a href="12081.php">Repsher, Stephen J: "Re: [OMPI users] Seg fault with PBS Pro 10.2"</a>
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
