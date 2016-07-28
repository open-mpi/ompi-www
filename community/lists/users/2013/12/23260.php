<?
$subject_val = "Re: [OMPI users] Error: Unable to create the sub-directory (/tmp/openmpi etc...)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 19 15:59:26 2013" -->
<!-- isoreceived="20131219205926" -->
<!-- sent="Thu, 19 Dec 2013 12:59:06 -0800" -->
<!-- isosent="20131219205906" -->
<!-- name="Brandon Turner" -->
<!-- email="brandon.turner_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error: Unable to create the sub-directory (/tmp/openmpi etc...)" -->
<!-- id="CAL3dkLGYuFC5K642KuyZ0t1KneDXJJ+qHid0-2DMnTGLBBQecg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="89DA3A9F-5AB7-47FF-8026-71CC375F5C04_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error: Unable to create the sub-directory (/tmp/openmpi etc...)<br>
<strong>From:</strong> Brandon Turner (<em>brandon.turner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-19 15:59:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23261.php">Ralph Castain: "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="23259.php">tom fogal: "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="23220.php">Reuti: "Re: [OMPI users] Error: Unable to create the sub-directory (/tmp/openmpi etc...)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks a lot! Indeed, it was an issue of permissions. I did not realize the
<br>
difference in the /tmp directories, and it seems that the /tmp directory
<br>
for the node in question was &quot;read-only&quot;. This has since been switched, and
<br>
presumably everything else will run smoothly now. My fingers are crossed.
<br>
<p>-Brandon
<br>
<p><p>On Tue, Dec 17, 2013 at 2:26 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 17.12.2013 um 22:32 schrieb Brandon Turner:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've been struggling with this problem for a few days now and am out of
</span><br>
<span class="quotelev1">&gt; ideas. I am submitting a job using TORQUE on a beowulf cluster. One step
</span><br>
<span class="quotelev1">&gt; involves running mpiexec, and that is where this error occurs. I've found
</span><br>
<span class="quotelev1">&gt; some similar other queries in the past:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/att-11378/attachment">http://www.open-mpi.org/community/lists/users/att-11378/attachment</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2013/09/22608.php">http://www.open-mpi.org/community/lists/users/2013/09/22608.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2009/11/11129.php">http://www.open-mpi.org/community/lists/users/2009/11/11129.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm new to using open-mpi so much of this is very new to me. However, it
</span><br>
<span class="quotelev1">&gt; does not seem that my /tmp folder is full as far as I can tell. I've tried
</span><br>
<span class="quotelev1">&gt; reassigning the temporary directory using the MCA attribute (i.e. mpiexec
</span><br>
<span class="quotelev1">&gt; --mca orte_tmpdir_base /home/pathA/pathB process argument1 argument2
</span><br>
<span class="quotelev1">&gt; argument3), but that was unsuccessful as well. Similarly, if thousands of
</span><br>
<span class="quotelev1">&gt; sub-directories are being created, I have no idea where those would be if
</span><br>
<span class="quotelev1">&gt; this is some ext3 violation issue. It's worth noting that when I submit
</span><br>
<span class="quotelev1">&gt; this job--it works on some occassions and not on others. I suspect it has
</span><br>
<span class="quotelev1">&gt; something to do with the nodes that I am assigned and some property of
</span><br>
<span class="quotelev1">&gt; certain nodes that is an issue.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It never used to have this problem until a few days ago, and now I
</span><br>
<span class="quotelev1">&gt; mostly can't get it to work except on a few occasions, which makes me think
</span><br>
<span class="quotelev1">&gt; that perhaps it is a node-specific issue. Any thoughts or suggestions would
</span><br>
<span class="quotelev1">&gt; be much appreciated!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a) As it's not your personal /tmp, but a machine wide, it might be full on
</span><br>
<span class="quotelev1">&gt; this particular node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; b) Or the admin changed the permissions on /tmp so that only Torque can
</span><br>
<span class="quotelev1">&gt; generate any temporary directory therein, and any additional one created by
</span><br>
<span class="quotelev1">&gt; a batch job should go to $TMPDIR which is created and removed by Torque for
</span><br>
<span class="quotelev1">&gt; your particular job. It might be that Open MPI is not tightly integrated
</span><br>
<span class="quotelev1">&gt; into your Torque installation. Did you ever have the chance to peek on a
</span><br>
<span class="quotelev1">&gt; node whether your MPI processes are kids of pbs_mom and not of any ssh
</span><br>
<span class="quotelev1">&gt; connection?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Brandon
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; PS I've copied the full error output below:
</span><br>
<span class="quotelev2">&gt; &gt; [bc11bl08.deac.wfu.edu:31532] opal_os_dirpath_create: Error: Unable to
</span><br>
<span class="quotelev1">&gt; create the sub-directory
</span><br>
<span class="quotelev1">&gt; (/tmp/openmpi-sessions-turnbe8_at_[hidden]_0) of
</span><br>
<span class="quotelev1">&gt; (/tmp/openmpi-sessions-turnbe8_at_[hidden]_0/2243/0/7), mkdir
</span><br>
<span class="quotelev1">&gt; failed [1]
</span><br>
<span class="quotelev2">&gt; &gt; [bc11bl08.deac.wfu.edu:31532] [[2243,0],7] ORTE_ERROR_LOG: Error in
</span><br>
<span class="quotelev1">&gt; file ../../orte/util/session_dir.c at line 106
</span><br>
<span class="quotelev2">&gt; &gt; [bc11bl08.deac.wfu.edu:31532] [[2243,0],7] ORTE_ERROR_LOG: Error in
</span><br>
<span class="quotelev1">&gt; file ../../orte/util/session_dir.c at line 399
</span><br>
<span class="quotelev2">&gt; &gt; [bc11bl08.deac.wfu.edu:31532] [[2243,0],7] ORTE_ERROR_LOG: Error in
</span><br>
<span class="quotelev1">&gt; file ../../../../orte/mca/ess/base/ess_base_std_orted.c at line 283
</span><br>
<span class="quotelev2">&gt; &gt; [bc11bl08.deac.wfu.edu:31532] [[2243,0],7] ORTE_ERROR_LOG: A message is
</span><br>
<span class="quotelev1">&gt; attempting to be sent to a process whose contact information is unknown in
</span><br>
<span class="quotelev1">&gt; file ../../../../../orte/mca/rml/oob/rml_oob_send.c at line 104
</span><br>
<span class="quotelev2">&gt; &gt; [bc11bl08.deac.wfu.edu:31532] [[2243,0],7] could not get route to
</span><br>
<span class="quotelev1">&gt; [[INVALID],INVALID]
</span><br>
<span class="quotelev2">&gt; &gt; [bc11bl08.deac.wfu.edu:31532] [[2243,0],7] ORTE_ERROR_LOG: A message is
</span><br>
<span class="quotelev1">&gt; attempting to be sent to a process whose contact information is unknown in
</span><br>
<span class="quotelev1">&gt; file ../../orte/util/show_help.c at line 627
</span><br>
<span class="quotelev2">&gt; &gt; [bc11bl08.deac.wfu.edu:31532] [[2243,0],7] ORTE_ERROR_LOG: Error in
</span><br>
<span class="quotelev1">&gt; file ../../../../../orte/mca/ess/tm/ess_tm_module.c at line 112
</span><br>
<span class="quotelev2">&gt; &gt; [bc11bl08.deac.wfu.edu:31532] [[2243,0],7] ORTE_ERROR_LOG: A message is
</span><br>
<span class="quotelev1">&gt; attempting to be sent to a process whose contact information is unknown in
</span><br>
<span class="quotelev1">&gt; file ../../../../../orte/mca/rml/oob/rml_oob_send.c at line 104
</span><br>
<span class="quotelev2">&gt; &gt; [bc11bl08.deac.wfu.edu:31532] [[2243,0],7] could not get route to
</span><br>
<span class="quotelev1">&gt; [[INVALID],INVALID]
</span><br>
<span class="quotelev2">&gt; &gt; [bc11bl08.deac.wfu.edu:31532] [[2243,0],7] ORTE_ERROR_LOG: A message is
</span><br>
<span class="quotelev1">&gt; attempting to be sent to a process whose contact information is unknown in
</span><br>
<span class="quotelev1">&gt; file ../../orte/util/show_help.c at line 627
</span><br>
<span class="quotelev2">&gt; &gt; [bc11bl08.deac.wfu.edu:31532] [[2243,0],7] ORTE_ERROR_LOG: Error in
</span><br>
<span class="quotelev1">&gt; file ../../orte/runtime/orte_init.c at line 128
</span><br>
<span class="quotelev2">&gt; &gt; [bc11bl08.deac.wfu.edu:31532] [[2243,0],7] ORTE_ERROR_LOG: A message is
</span><br>
<span class="quotelev1">&gt; attempting to be sent to a process whose contact information is unknown in
</span><br>
<span class="quotelev1">&gt; file ../../../../../orte/mca/rml/oob/rml_oob_send.c at line 104
</span><br>
<span class="quotelev2">&gt; &gt; [bc11bl08.deac.wfu.edu:31532] [[2243,0],7] could not get route to
</span><br>
<span class="quotelev1">&gt; [[INVALID],INVALID]
</span><br>
<span class="quotelev2">&gt; &gt; [bc11bl08.deac.wfu.edu:31532] [[2243,0],7] ORTE_ERROR_LOG: A message is
</span><br>
<span class="quotelev1">&gt; attempting to be sent to a process whose contact information is unknown in
</span><br>
<span class="quotelev1">&gt; file ../../orte/util/show_help.c at line 627
</span><br>
<span class="quotelev2">&gt; &gt; [bc11bl08.deac.wfu.edu:31532] [[2243,0],7] ORTE_ERROR_LOG: Error in
</span><br>
<span class="quotelev1">&gt; file ../../orte/orted/orted_main.c at line 357
</span><br>
<span class="quotelev2">&gt; &gt; =&gt;&gt; PBS: job killed: walltime 3626 exceeded limit 3600
</span><br>
<span class="quotelev2">&gt; &gt; Terminated
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec: killing job...
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23260/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23261.php">Ralph Castain: "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="23259.php">tom fogal: "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="23220.php">Reuti: "Re: [OMPI users] Error: Unable to create the sub-directory (/tmp/openmpi etc...)"</a>
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
