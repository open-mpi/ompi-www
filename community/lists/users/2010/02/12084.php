<?
$subject_val = "Re: [OMPI users] Seg fault with PBS Pro 10.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 15 14:30:22 2010" -->
<!-- isoreceived="20100215193022" -->
<!-- sent="Mon, 15 Feb 2010 12:30:08 -0700" -->
<!-- isosent="20100215193008" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Seg fault with PBS Pro 10.2" -->
<!-- id="A769A16E-01DA-4E56-928F-9BE6AFF61EA8_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A936DB57-6301-4912-A43A-5F8E170D6746_at_penguincomputing.com" -->
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
<strong>Date:</strong> 2010-02-15 14:30:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12085.php">Repsher, Stephen J: "[OMPI users] Bad Infiniband latency with subounce"</a>
<li><strong>Previous message:</strong> <a href="12083.php">Joshua Bernstein: "Re: [OMPI users] Seg fault with PBS Pro 10.2"</a>
<li><strong>In reply to:</strong> <a href="12083.php">Joshua Bernstein: "Re: [OMPI users] Seg fault with PBS Pro 10.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Could you please ask them about this:
<br>
<p>OMPI makes the following call to connect to the mother superior:
<br>
<p>struct tm_roots tm_root;
<br>
ret = tm_init(NULL, &amp;tm_root);
<br>
<p>Could they tell us why this segfaults in PBS Pro? It works correctly with all releases of Torque.
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On Feb 15, 2010, at 12:06 PM, Joshua Bernstein wrote:
<br>
<p><span class="quotelev1">&gt; Well,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	We all wish the Altair guys would at least try to maintain backwards compatibility with the community, but they have a big habit of breaking things. This isn't the first time they've broken a more customer facing function like tm_spawn. (The also like breaking pbs_statjob too!).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	I have access to PBS Pro and I can raise the issue with Altair if it would help. Just let me know how I can be helpful.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Joshua Bernstein
</span><br>
<span class="quotelev1">&gt; Senior Software Engineer
</span><br>
<span class="quotelev1">&gt; Penguin Computing
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 15, 2010, at 8:23 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Bummer!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If it helps, could you put us in touch with the PBS Pro people?  We usually only have access to Torque when developing the TM-launching stuff (PBS Pro and Torque supposedly share the same TM interface, but we don't have access to PBS Pro, so we don't know if it has diverged over time).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 15, 2010, at 8:13 AM, Repsher, Stephen J wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is my first build of OpenMPI so I haven't had this working before.  I'm pretty confident that PATH and LD_LIBRARY_PATH issues are not the cause, otherwise launches outside of PBS would fail too.  Also, I tried compiling everything statically with the same result.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Some additional info...  (1) I did a diff on tm.h for PBS 10.2 and from version 8.0 that we had - they are identical, and (2) I've tried this with both the Intel 11.1 and GCC compilers and gotten the exact same run-time errors.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For now, I've got a a work-around setup that launches over ssh and still attaches the processes to PBS.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for your help.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Steve
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Friday, February 12, 2010 8:29 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] Seg fault with PBS Pro 10.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Afraid compilers don't help when the param is a void*...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like this is consistent, but I've never tried it under that particular environment. Did prior versions of OMPI work, or are you trying this for the first time?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; One thing you might check is that you have the correct PATH and LD_LIBRARY_PATH set to point to this version of OMPI and the corresponding PBS Pro libs you used to build it. Most Linux distros come with OMPI installed, and that can cause surprises.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We run under Torque at major installations every day, so it -should- work...unless PBS Pro has done something unusual.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 12, 2010, at 1:41 PM, Repsher, Stephen J wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yes, the failure seems to be in mpirun, it never even gets to my application.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The proto for tm_init looks like this:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int tm_init(void *info, struct tm_roots *roots);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; where the struct has 6 elements: 2 x tm_task_id + 3 x int + 1 x tm_task_id
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If the API was different, wouldn't the compiler most likely generate an error at compile-time?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Steve
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sent: Friday, February 12, 2010 3:21 PM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] Seg fault with PBS Pro 10.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm a tad confused - this trace would appear to indicate that mpirun is failing, yes? Not your application?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The reason it works for local procs is that tm_init isn't called for that case - mpirun just fork/exec's the procs directly. When remote nodes are required, mpirun must connect to Torque. This is done with a call to:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       ret = tm_init(NULL, &amp;tm_root);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My guess is that something changed in PBS Pro 10.2 to that API. Can you check the tm header file and see? I have no access to PBS    any more, so I'll have to rely on your eyes to see a diff.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Feb 12, 2010, at 8:50 AM, Repsher, Stephen J wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm having problems running Open MPI jobs under PBS Pro 10.2.  I've configured and built OpenMPI 1.4.1 with the Intel 11.1 compiler on Linux and with --with-tm support and the build runs fine.  I've also built with static libraries per the FAQ suggestion since libpbs is static.  However, my test application keep failing with a segmentation fault, but ONLY when trying to select more than 1 node.  Running on a single node withing PBS works fine.  Also, running outside of PBS vis ssh runs fine as well, even across multiple nodes.  OpenIB support is also enabled, but that doesn't seem to affect the error because I've also tried running with the --mca btl tcp,self flag and it still doesn't work.  Here is the error I'm getting:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [n34:26892] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [n34:26892] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [n34:26892] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [n34:26892] Failing at address: 0x3f
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [n34:26892] [ 0] /lib64/libpthread.so.0 [0x7fc0309d6a90]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [n34:26892] [ 1] /part0/apps/MPI/intel/openmpi-1.4.1/bin/pbs_mpirun(discui_+0x84) [0x476a50]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [n34:26892] [ 2] /part0/apps/MPI/intel/openmpi-1.4.1/bin/pbs_mpirun(diswsi+0xc3) [0x474063]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [n34:26892] [ 3] /part0/apps/MPI/intel/openmpi-1.4.1/bin/pbs_mpirun [0x471d0c]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [n34:26892] [ 4] /part0/apps/MPI/intel/openmpi-1.4.1/bin/pbs_mpirun(tm_init+0x1fe) [0x471ff8]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [n34:26892] [ 5] /part0/apps/MPI/intel/openmpi-1.4.1/bin/pbs_mpirun [0x43f580]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [n34:26892] [ 6] /part0/apps/MPI/intel/openmpi-1.4.1/bin/pbs_mpirun [0x413921]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [n34:26892] [ 7] /part0/apps/MPI/intel/openmpi-1.4.1/bin/pbs_mpirun [0x412b78]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [n34:26892] [ 8] /lib64/libc.so.6(__libc_start_main+0xe6) [0x7fc03068d586]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [n34:26892] [ 9] /part0/apps/MPI/intel/openmpi-1.4.1/bin/pbs_mpirun [0x412ac9]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [n34:26892] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (NOTE: pbs_mpirun = orterun, mpirun, etc.)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Has anyone else seen errors like this within PBS?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ============================================
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Steve Repsher
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Boeing Defense, Space, &amp; Security - Rotorcraft
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Aerodynamics/CFD
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Phone: (610) 591-1510
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Fax: (610) 591-6263
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; stephen.j.repsher_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12084/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12085.php">Repsher, Stephen J: "[OMPI users] Bad Infiniband latency with subounce"</a>
<li><strong>Previous message:</strong> <a href="12083.php">Joshua Bernstein: "Re: [OMPI users] Seg fault with PBS Pro 10.2"</a>
<li><strong>In reply to:</strong> <a href="12083.php">Joshua Bernstein: "Re: [OMPI users] Seg fault with PBS Pro 10.2"</a>
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
