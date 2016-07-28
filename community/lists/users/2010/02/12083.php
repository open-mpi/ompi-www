<?
$subject_val = "Re: [OMPI users] Seg fault with PBS Pro 10.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 15 14:06:27 2010" -->
<!-- isoreceived="20100215190627" -->
<!-- sent="Mon, 15 Feb 2010 11:06:20 -0800" -->
<!-- isosent="20100215190620" -->
<!-- name="Joshua Bernstein" -->
<!-- email="jbernstein_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Seg fault with PBS Pro 10.2" -->
<!-- id="A936DB57-6301-4912-A43A-5F8E170D6746_at_penguincomputing.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="501A9D16-F010-400B-9544-C8AB1D624BEE_at_cisco.com" -->
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
<strong>From:</strong> Joshua Bernstein (<em>jbernstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-15 14:06:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12084.php">Ralph Castain: "Re: [OMPI users] Seg fault with PBS Pro 10.2"</a>
<li><strong>Previous message:</strong> <a href="12082.php">Jeff Squyres: "Re: [OMPI users] Seg fault with PBS Pro 10.2"</a>
<li><strong>In reply to:</strong> <a href="12082.php">Jeff Squyres: "Re: [OMPI users] Seg fault with PBS Pro 10.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12084.php">Ralph Castain: "Re: [OMPI users] Seg fault with PBS Pro 10.2"</a>
<li><strong>Reply:</strong> <a href="12084.php">Ralph Castain: "Re: [OMPI users] Seg fault with PBS Pro 10.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We all wish the Altair guys would at least try to maintain backwards  
<br>
compatibility with the community, but they have a big habit of  
<br>
breaking things. This isn't the first time they've broken a more  
<br>
customer facing function like tm_spawn. (The also like breaking  
<br>
pbs_statjob too!).
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I have access to PBS Pro and I can raise the issue with Altair if it  
<br>
would help. Just let me know how I can be helpful.
<br>
<p>-Joshua Bernstein
<br>
Senior Software Engineer
<br>
Penguin Computing
<br>
<p>On Feb 15, 2010, at 8:23 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Bummer!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If it helps, could you put us in touch with the PBS Pro people?  We  
</span><br>
<span class="quotelev1">&gt; usually only have access to Torque when developing the TM-launching  
</span><br>
<span class="quotelev1">&gt; stuff (PBS Pro and Torque supposedly share the same TM interface,  
</span><br>
<span class="quotelev1">&gt; but we don't have access to PBS Pro, so we don't know if it has  
</span><br>
<span class="quotelev1">&gt; diverged over time).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 15, 2010, at 8:13 AM, Repsher, Stephen J wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is my first build of OpenMPI so I haven't had this working  
</span><br>
<span class="quotelev2">&gt;&gt; before.  I'm pretty confident that PATH and LD_LIBRARY_PATH issues  
</span><br>
<span class="quotelev2">&gt;&gt; are not the cause, otherwise launches outside of PBS would fail  
</span><br>
<span class="quotelev2">&gt;&gt; too.  Also, I tried compiling everything statically with the same  
</span><br>
<span class="quotelev2">&gt;&gt; result.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Some additional info...  (1) I did a diff on tm.h for PBS 10.2 and  
</span><br>
<span class="quotelev2">&gt;&gt; from version 8.0 that we had - they are identical, and (2) I've  
</span><br>
<span class="quotelev2">&gt;&gt; tried this with both the Intel 11.1 and GCC compilers and gotten  
</span><br>
<span class="quotelev2">&gt;&gt; the exact same run-time errors.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For now, I've got a a work-around setup that launches over ssh and  
</span><br>
<span class="quotelev2">&gt;&gt; still attaches the processes to PBS.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Steve
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_open- 
</span><br>
<span class="quotelev2">&gt;&gt; mpi.org] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Friday, February 12, 2010 8:29 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Seg fault with PBS Pro 10.2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Afraid compilers don't help when the param is a void*...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like this is consistent, but I've never tried it under  
</span><br>
<span class="quotelev2">&gt;&gt; that particular environment. Did prior versions of OMPI work, or  
</span><br>
<span class="quotelev2">&gt;&gt; are you trying this for the first time?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; One thing you might check is that you have the correct PATH and  
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH set to point to this version of OMPI and the  
</span><br>
<span class="quotelev2">&gt;&gt; corresponding PBS Pro libs you used to build it. Most Linux distros  
</span><br>
<span class="quotelev2">&gt;&gt; come with OMPI installed, and that can cause surprises.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We run under Torque at major installations every day, so it - 
</span><br>
<span class="quotelev2">&gt;&gt; should- work...unless PBS Pro has done something unusual.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 12, 2010, at 1:41 PM, Repsher, Stephen J wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, the failure seems to be in mpirun, it never even gets to my  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; application.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The proto for tm_init looks like this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int tm_init(void *info, struct tm_roots *roots);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where the struct has 6 elements: 2 x tm_task_id + 3 x int + 1 x  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tm_task_id
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If the API was different, wouldn't the compiler most likely  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; generate an error at compile-time?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Steve
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_open- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi.org] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Friday, February 12, 2010 3:21 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] Seg fault with PBS Pro 10.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm a tad confused - this trace would appear to indicate that  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun is failing, yes? Not your application?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The reason it works for local procs is that tm_init isn't called  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for that case - mpirun just fork/exec's the procs directly. When  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; remote nodes are required, mpirun must connect to Torque. This is  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; done with a call to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        ret = tm_init(NULL, &amp;tm_root);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My guess is that something changed in PBS Pro 10.2 to that API.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you check the tm header file and see? I have no access to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PBS    any more, so I'll have to rely on your eyes to see a diff.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 12, 2010, at 8:50 AM, Repsher, Stephen J wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm having problems running Open MPI jobs under PBS Pro 10.2.   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I've configured and built OpenMPI 1.4.1 with the Intel 11.1  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; compiler on Linux and with --with-tm support and the build runs  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fine.  I've also built with static libraries per the FAQ  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; suggestion since libpbs is static.  However, my test application  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; keep failing with a segmentation fault, but ONLY when trying to  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; select more than 1 node.  Running on a single node withing PBS  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; works fine.  Also, running outside of PBS vis ssh runs fine as  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; well, even across multiple nodes.  OpenIB support is also  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; enabled, but that doesn't seem to affect the error because I've  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; also tried running with the --mca btl tcp,self flag and it still  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; doesn't work.  Here is the error I'm getting:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [n34:26892] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [n34:26892] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [n34:26892] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [n34:26892] Failing at address: 0x3f
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [n34:26892] [ 0] /lib64/libpthread.so.0 [0x7fc0309d6a90]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [n34:26892] [ 1] /part0/apps/MPI/intel/openmpi-1.4.1/bin/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pbs_mpirun(discui_+0x84) [0x476a50]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [n34:26892] [ 2] /part0/apps/MPI/intel/openmpi-1.4.1/bin/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pbs_mpirun(diswsi+0xc3) [0x474063]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [n34:26892] [ 3] /part0/apps/MPI/intel/openmpi-1.4.1/bin/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pbs_mpirun [0x471d0c]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [n34:26892] [ 4] /part0/apps/MPI/intel/openmpi-1.4.1/bin/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pbs_mpirun(tm_init+0x1fe) [0x471ff8]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [n34:26892] [ 5] /part0/apps/MPI/intel/openmpi-1.4.1/bin/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pbs_mpirun [0x43f580]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [n34:26892] [ 6] /part0/apps/MPI/intel/openmpi-1.4.1/bin/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pbs_mpirun [0x413921]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [n34:26892] [ 7] /part0/apps/MPI/intel/openmpi-1.4.1/bin/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pbs_mpirun [0x412b78]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [n34:26892] [ 8] /lib64/libc.so.6(__libc_start_main+0xe6)  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x7fc03068d586]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [n34:26892] [ 9] /part0/apps/MPI/intel/openmpi-1.4.1/bin/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pbs_mpirun [0x412ac9]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [n34:26892] *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Segmentation fault
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (NOTE: pbs_mpirun = orterun, mpirun, etc.)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Has anyone else seen errors like this within PBS?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ============================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Steve Repsher
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Boeing Defense, Space, &amp; Security - Rotorcraft
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Aerodynamics/CFD
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Phone: (610) 591-1510
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fax: (610) 591-6263
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; stephen.j.repsher_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12084.php">Ralph Castain: "Re: [OMPI users] Seg fault with PBS Pro 10.2"</a>
<li><strong>Previous message:</strong> <a href="12082.php">Jeff Squyres: "Re: [OMPI users] Seg fault with PBS Pro 10.2"</a>
<li><strong>In reply to:</strong> <a href="12082.php">Jeff Squyres: "Re: [OMPI users] Seg fault with PBS Pro 10.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12084.php">Ralph Castain: "Re: [OMPI users] Seg fault with PBS Pro 10.2"</a>
<li><strong>Reply:</strong> <a href="12084.php">Ralph Castain: "Re: [OMPI users] Seg fault with PBS Pro 10.2"</a>
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
