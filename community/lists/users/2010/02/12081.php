<?
$subject_val = "Re: [OMPI users] Seg fault with PBS Pro 10.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 15 08:14:06 2010" -->
<!-- isoreceived="20100215131406" -->
<!-- sent="Mon, 15 Feb 2010 07:13:59 -0600" -->
<!-- isosent="20100215131359" -->
<!-- name="Repsher, Stephen J" -->
<!-- email="stephen.j.repsher_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Seg fault with PBS Pro 10.2" -->
<!-- id="F44D206478A0FF4A9FE422C463171D66267ADCD6_at_XCH-MW-09V.mw.nos.boeing.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="53F74EE7-5278-4053-BF2C-BC8AEF721B20_at_open-mpi.org" -->
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
<strong>From:</strong> Repsher, Stephen J (<em>stephen.j.repsher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-15 08:13:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12082.php">Jeff Squyres: "Re: [OMPI users] Seg fault with PBS Pro 10.2"</a>
<li><strong>Previous message:</strong> <a href="12080.php">Ralph Castain: "Re: [OMPI users] Seg fault with PBS Pro 10.2"</a>
<li><strong>In reply to:</strong> <a href="12080.php">Ralph Castain: "Re: [OMPI users] Seg fault with PBS Pro 10.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12082.php">Jeff Squyres: "Re: [OMPI users] Seg fault with PBS Pro 10.2"</a>
<li><strong>Reply:</strong> <a href="12082.php">Jeff Squyres: "Re: [OMPI users] Seg fault with PBS Pro 10.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>This is my first build of OpenMPI so I haven't had this working before.  I'm pretty confident that PATH and LD_LIBRARY_PATH issues are not the cause, otherwise launches outside of PBS would fail too.  Also, I tried compiling everything statically with the same result.
<br>
<p>Some additional info...  (1) I did a diff on tm.h for PBS 10.2 and from version 8.0 that we had - they are identical, and (2) I've tried this with both the Intel 11.1 and GCC compilers and gotten the exact same run-time errors.
<br>
<p>For now, I've got a a work-around setup that launches over ssh and still attaches the processes to PBS.
<br>
<p>Thanks for your help.
<br>
<p>Steve
<br>
<p><p>________________________________
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Friday, February 12, 2010 8:29 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Seg fault with PBS Pro 10.2
<br>
<p>Afraid compilers don't help when the param is a void*...
<br>
<p>It looks like this is consistent, but I've never tried it under that particular environment. Did prior versions of OMPI work, or are you trying this for the first time?
<br>
<p>One thing you might check is that you have the correct PATH and LD_LIBRARY_PATH set to point to this version of OMPI and the corresponding PBS Pro libs you used to build it. Most Linux distros come with OMPI installed, and that can cause surprises.
<br>
<p>We run under Torque at major installations every day, so it -should- work...unless PBS Pro has done something unusual.
<br>
<p><p>On Feb 12, 2010, at 1:41 PM, Repsher, Stephen J wrote:
<br>
<p>Yes, the failure seems to be in mpirun, it never even gets to my application.
<br>
<p>The proto for tm_init looks like this:
<br>
int tm_init(void *info, struct tm_roots *roots);
<br>
<p>where the struct has 6 elements: 2 x tm_task_id + 3 x int + 1 x tm_task_id
<br>
<p>If the API was different, wouldn't the compiler most likely generate an error at compile-time?
<br>
<p>Thanks!
<br>
<p>Steve
<br>
<p><p>________________________________
<br>
From: users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Friday, February 12, 2010 3:21 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Seg fault with PBS Pro 10.2
<br>
<p>I'm a tad confused - this trace would appear to indicate that mpirun is failing, yes? Not your application?
<br>
<p>The reason it works for local procs is that tm_init isn't called for that case - mpirun just fork/exec's the procs directly. When remote nodes are required, mpirun must connect to Torque. This is done with a call to:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = tm_init(NULL, &amp;tm_root);
<br>
<p>My guess is that something changed in PBS Pro 10.2 to that API. Can you check the tm header file and see? I have no access to PBS any more, so I'll have to rely on your eyes to see a diff.
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On Feb 12, 2010, at 8:50 AM, Repsher, Stephen J wrote:
<br>
<p>Hello,
<br>
<p>I'm having problems running Open MPI jobs under PBS Pro 10.2.  I've configured and built OpenMPI 1.4.1 with the Intel 11.1 compiler on Linux and with --with-tm support and the build runs fine.  I've also built with static libraries per the FAQ suggestion since libpbs is static.  However, my test application keep failing with a segmentation fault, but ONLY when trying to select more than 1 node.  Running on a single node withing PBS works fine.  Also, running outside of PBS vis ssh runs fine as well, even across multiple nodes.  OpenIB support is also enabled, but that doesn't seem to affect the error because I've also tried running with the --mca btl tcp,self flag and it still doesn't work.  Here is the error I'm getting:
<br>
<p>[n34:26892] *** Process received signal ***
<br>
[n34:26892] Signal: Segmentation fault (11)
<br>
[n34:26892] Signal code: Address not mapped (1)
<br>
[n34:26892] Failing at address: 0x3f
<br>
[n34:26892] [ 0] /lib64/libpthread.so.0 [0x7fc0309d6a90]
<br>
[n34:26892] [ 1] /part0/apps/MPI/intel/openmpi-1.4.1/bin/pbs_mpirun(discui_+0x84) [0x476a50]
<br>
[n34:26892] [ 2] /part0/apps/MPI/intel/openmpi-1.4.1/bin/pbs_mpirun(diswsi+0xc3) [0x474063]
<br>
[n34:26892] [ 3] /part0/apps/MPI/intel/openmpi-1.4.1/bin/pbs_mpirun [0x471d0c]
<br>
[n34:26892] [ 4] /part0/apps/MPI/intel/openmpi-1.4.1/bin/pbs_mpirun(tm_init+0x1fe) [0x471ff8]
<br>
[n34:26892] [ 5] /part0/apps/MPI/intel/openmpi-1.4.1/bin/pbs_mpirun [0x43f580]
<br>
[n34:26892] [ 6] /part0/apps/MPI/intel/openmpi-1.4.1/bin/pbs_mpirun [0x413921]
<br>
[n34:26892] [ 7] /part0/apps/MPI/intel/openmpi-1.4.1/bin/pbs_mpirun [0x412b78]
<br>
[n34:26892] [ 8] /lib64/libc.so.6(__libc_start_main+0xe6) [0x7fc03068d586]
<br>
[n34:26892] [ 9] /part0/apps/MPI/intel/openmpi-1.4.1/bin/pbs_mpirun [0x412ac9]
<br>
[n34:26892] *** End of error message ***
<br>
Segmentation fault
<br>
<p>(NOTE: pbs_mpirun = orterun, mpirun, etc.)
<br>
<p>Has anyone else seen errors like this within PBS?
<br>
<p>============================================
<br>
Steve Repsher
<br>
Boeing Defense, Space, &amp; Security - Rotorcraft
<br>
Aerodynamics/CFD
<br>
Phone: (610) 591-1510
<br>
Fax: (610) 591-6263
<br>
stephen.j.repsher_at_[hidden]&lt;mailto:stephen.j.repsher_at_[hidden]&gt;
<br>
<p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12081/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12082.php">Jeff Squyres: "Re: [OMPI users] Seg fault with PBS Pro 10.2"</a>
<li><strong>Previous message:</strong> <a href="12080.php">Ralph Castain: "Re: [OMPI users] Seg fault with PBS Pro 10.2"</a>
<li><strong>In reply to:</strong> <a href="12080.php">Ralph Castain: "Re: [OMPI users] Seg fault with PBS Pro 10.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12082.php">Jeff Squyres: "Re: [OMPI users] Seg fault with PBS Pro 10.2"</a>
<li><strong>Reply:</strong> <a href="12082.php">Jeff Squyres: "Re: [OMPI users] Seg fault with PBS Pro 10.2"</a>
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
