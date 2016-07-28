<?
$subject_val = "Re: [OMPI users] problem calling mpirun from script invoked with mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 28 21:06:11 2009" -->
<!-- isoreceived="20091029010611" -->
<!-- sent="Wed, 28 Oct 2009 19:06:05 -0600" -->
<!-- isosent="20091029010605" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem calling mpirun from script invoked with mpirun" -->
<!-- id="71d2d8cc0910281806o68555a0bh1dc82a6ac1011774_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="b74576e70910281336q1ab8aae8lc465acda9744a1b6_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem calling mpirun from script invoked with mpirun<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-28 21:06:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10995.php">Luke Shulenburger: "Re: [OMPI users] problem calling mpirun from script invoked with mpirun"</a>
<li><strong>Previous message:</strong> <a href="10993.php">Jeff Squyres: "Re: [OMPI users] compiling openmpi with mixed CISCOinfiniband.cardand Mellanox infiniband cards."</a>
<li><strong>In reply to:</strong> <a href="10991.php">Luke Shulenburger: "Re: [OMPI users] problem calling mpirun from script invoked with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10995.php">Luke Shulenburger: "Re: [OMPI users] problem calling mpirun from script invoked with mpirun"</a>
<li><strong>Reply:</strong> <a href="10995.php">Luke Shulenburger: "Re: [OMPI users] problem calling mpirun from script invoked with mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see. No, we don't copy your envars and ship them to remote nodes. Simple
<br>
reason is that we don't know which ones we can safely move, and which would
<br>
cause problems.
<br>
<p>However, we do provide a mechanism for you to tell us which envars to move.
<br>
Just add:
<br>
<p>-x LD_LIBRARY_PATH
<br>
<p>to your mpirun cmd line and we will pickup that value and move it. You can
<br>
use that option any number of times.
<br>
<p>I know it's a tad tedious if you have to move many of them, but it's the
<br>
only safe mechanism we could devise.
<br>
<p>HTH
<br>
Ralph
<br>
<p><p>On Wed, Oct 28, 2009 at 2:36 PM, Luke Shulenburger
<br>
&lt;lshulenburger_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; My apologies for not being clear.  These variables are set in my
</span><br>
<span class="quotelev1">&gt; environment, they just are not published to the other nodes in the
</span><br>
<span class="quotelev1">&gt; cluster when the jobs are run through the scheduler.  At the moment,
</span><br>
<span class="quotelev1">&gt; even though I can use mpirun to run jobs locally on the head node
</span><br>
<span class="quotelev1">&gt; without touching my environment, if I use the scheduler I am forced to
</span><br>
<span class="quotelev1">&gt; do something like source my bashrc in the jub submission script to get
</span><br>
<span class="quotelev1">&gt; them set.  I had always assumed that mpirun just copied my current
</span><br>
<span class="quotelev1">&gt; environment variables to the nodes, but this does not seem to be
</span><br>
<span class="quotelev1">&gt; happening in this case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Luke
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Oct 28, 2009 at 4:30 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Normally, one does simply set the ld_library_path in your environment to
</span><br>
<span class="quotelev2">&gt; &gt; point to the right thing. Alternatively, you could configure OMPI with
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This tells OMPI to automatically add the prefix you configured the system
</span><br>
<span class="quotelev2">&gt; &gt; with to your ld_library_path and path envars. It should solve your
</span><br>
<span class="quotelev1">&gt; problem,
</span><br>
<span class="quotelev2">&gt; &gt; if you don't want to simply set those values in your environment anyway.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ralph
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Oct 28, 2009 at 2:10 PM, Luke Shulenburger &lt;
</span><br>
<span class="quotelev1">&gt; lshulenburger_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks for the quick reply.  This leads me to another issue I have
</span><br>
<span class="quotelev3">&gt; &gt;&gt; been having with openmpi as it relates to sge.  The &quot;tight
</span><br>
<span class="quotelev3">&gt; &gt;&gt; integration&quot; works where I do not have to give mpirun a hostfile when
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I use the scheduler, but it does not seem to be passing on my
</span><br>
<span class="quotelev3">&gt; &gt;&gt; environment variables.  Specifically because I used intel compilers to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; compile openmpi, I have to be sure to set the LD_LIBRARY_PATH
</span><br>
<span class="quotelev3">&gt; &gt;&gt; correctly in my job submission script or openmpi will not run (giving
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the error discussed in the FAQ).  Where I am a little lost is whether
</span><br>
<span class="quotelev3">&gt; &gt;&gt; this is a problem with the way I built openmpi or whether it is a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; configuration problem with sge.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This may be unrelated to my previous problem, but the similarities
</span><br>
<span class="quotelev3">&gt; &gt;&gt; with the environment variables made me think of it.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks for your consideration,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Luke Shulenburger
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Geophysical Laboratory
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Carnegie Institution of Washington
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Wed, Oct 28, 2009 at 3:48 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; I'm afraid we have never really supported this kind of nested
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; invocations of
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; mpirun. If it works with any version of OMPI, it is totally a fluke -
</span><br>
<span class="quotelev1">&gt; it
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; might work one time, and then fail the next.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; The problem is that we pass envars to the launched processes to
</span><br>
<span class="quotelev1">&gt; control
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; their behavior, and these conflict with what mpirun needs. We have
</span><br>
<span class="quotelev1">&gt; tried
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; various scrubbing mechanisms (i.e., having mpirun start out by
</span><br>
<span class="quotelev1">&gt; scrubbing
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; the
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; environment of envars that would have come from the initial mpirun,
</span><br>
<span class="quotelev1">&gt; but
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; they
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; all have the unfortunate possibility of removing parameters provided
</span><br>
<span class="quotelev1">&gt; by
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; the
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; user - and that can cause its own problems.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; I don't know if we will ever support nested operations - occasionally,
</span><br>
<span class="quotelev1">&gt; I
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; do
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; give it some thought, but have yet to find a foolproof solution.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Ralph
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; On Wed, Oct 28, 2009 at 1:11 PM, Luke Shulenburger
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; &lt;lshulenburger_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Hello,
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; I am having trouble with a script that calls mpi.  Basically my
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; problem distills to wanting to call a script with:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; mpirun -np # ./script.sh
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; where script.sh looks like:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; mpirun -np 2 ./mpiprogram
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Whenever I invoke script.sh normally (as ./script.sh for instance) it
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; works fine, but if I do mpirun -np 2 ./script.sh I get the following
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; error:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; [ppv.stanford.edu:08814] [[27860,1],0] ORTE_ERROR_LOG: A message is
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; attempting to be sent to a process whose contact information is
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; unknown in file rml_oob_send.c at line 105
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; [ppv.stanford.edu:08814] [[27860,1],0] could not get route to
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; [[INVALID],INVALID]
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; [ppv.stanford.edu:08814] [[27860,1],0] ORTE_ERROR_LOG: A message is
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; attempting to be sent to a process whose contact information is
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; unknown in file base/plm_base_proxy.c at line 86
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; I have also tried running with mpirun -d to get some debugging info
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; and it appears that the proctable is not being created for the second
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; mpirun.  The command hangs like so:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; [ppv.stanford.edu:08823] procdir:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; /tmp/openmpi-sessions-sluke_at_[hidden]_0/27855/0/0
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; [ppv.stanford.edu:08823] jobdir:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; /tmp/openmpi-sessions-sluke_at_[hidden]_0/27855/0
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; [ppv.stanford.edu:08823] top:
</span><br>
<span class="quotelev1">&gt; openmpi-sessions-sluke_at_[hidden]_0
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; [ppv.stanford.edu:08823] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; [ppv.stanford.edu:08823] [[27855,0],0] node[0].name ppv daemon 0
</span><br>
<span class="quotelev1">&gt; arch
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; ffc91200
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; [ppv.stanford.edu:08823] Info: Setting up debugger process table for
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; applications
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;  MPIR_being_debugged = 0
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;  MPIR_debug_state = 1
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;  MPIR_partial_attach_ok = 1
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;  MPIR_i_am_starter = 0
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;  MPIR_proctable_size = 1
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;  MPIR_proctable:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;    (i, host, exe, pid) = (0, ppv.stanford.edu,
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; /home/sluke/maintenance/openmpi-1.3.3/examples/./shell.sh, 8824)
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; [ppv.stanford.edu:08825] procdir:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; /tmp/openmpi-sessions-sluke_at_[hidden]_0/27855/1/0
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; [ppv.stanford.edu:08825] jobdir:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; /tmp/openmpi-sessions-sluke_at_[hidden]_0/27855/1
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; [ppv.stanford.edu:08825] top:
</span><br>
<span class="quotelev1">&gt; openmpi-sessions-sluke_at_[hidden]_0
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; [ppv.stanford.edu:08825] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; [ppv.stanford.edu:08825] [[27855,1],0] ORTE_ERROR_LOG: A message is
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; attempting to be sent to a process whose contact information is
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; unknown in file rml_oob_send.c at line 105
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; [ppv.stanford.edu:08825] [[27855,1],0] could not get route to
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; [[INVALID],INVALID]
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; [ppv.stanford.edu:08825] [[27855,1],0] ORTE_ERROR_LOG: A message is
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; attempting to be sent to a process whose contact information is
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; unknown in file base/plm_base_proxy.c at line 86
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; [ppv.stanford.edu:08825] Info: Setting up debugger process table for
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; applications
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;  MPIR_being_debugged = 0
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;  MPIR_debug_state = 1
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;  MPIR_partial_attach_ok = 1
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;  MPIR_i_am_starter = 0
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;  MPIR_proctable_size = 0
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;  MPIR_proctable:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; In this case, it does not matter what the ultimate mpiprogram I try
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; run is, the shell script fails in the same way regardless (I've tried
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; the hello_f90 executable from the openmpi examples directory).  Here
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; are some details of my setup:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; I have built openmpi 1.3.3 with the intel fortran in c compilers
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; (version 11.1).  The machine uses rocks with the SGE scheduler, so I
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; have run autoconf with ./configure --prefix=/home/sluke --with-sge,
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; however this problem persists even if I am running on the head node
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; outside of the scheduler.  I am attaching the resulting config.log to
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; this email as well as output to ompi_info --all and ifconfig.  I hope
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; this gives the experts on the list enough to go from, but I will be
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; happy to provide any more information that might be helpful.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Luke Shulenburger
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Geophysical Laboratory
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Carnegie Institution of Washington
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; PS I have tried this on a machine with openmpi-1.2.6 and cannot
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; reproduce the error, however on a second machine with openmpi-1.3.2 I
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; have the same problem.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10994/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10995.php">Luke Shulenburger: "Re: [OMPI users] problem calling mpirun from script invoked with mpirun"</a>
<li><strong>Previous message:</strong> <a href="10993.php">Jeff Squyres: "Re: [OMPI users] compiling openmpi with mixed CISCOinfiniband.cardand Mellanox infiniband cards."</a>
<li><strong>In reply to:</strong> <a href="10991.php">Luke Shulenburger: "Re: [OMPI users] problem calling mpirun from script invoked with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10995.php">Luke Shulenburger: "Re: [OMPI users] problem calling mpirun from script invoked with mpirun"</a>
<li><strong>Reply:</strong> <a href="10995.php">Luke Shulenburger: "Re: [OMPI users] problem calling mpirun from script invoked with mpirun"</a>
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
