<?
$subject_val = "[OMPI users] Error: Unable to create the sub-directory (/tmp/openmpi etc...)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 17 16:32:45 2013" -->
<!-- isoreceived="20131217213245" -->
<!-- sent="Tue, 17 Dec 2013 13:32:24 -0800" -->
<!-- isosent="20131217213224" -->
<!-- name="Brandon Turner" -->
<!-- email="brandon.turner_at_[hidden]" -->
<!-- subject="[OMPI users] Error: Unable to create the sub-directory (/tmp/openmpi etc...)" -->
<!-- id="CAL3dkLGrU2Mdb1oKCP36ar8K-e-npvWk=mGMnA-1=_LO3NjgXg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Error: Unable to create the sub-directory (/tmp/openmpi etc...)<br>
<strong>From:</strong> Brandon Turner (<em>brandon.turner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-17 16:32:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23220.php">Reuti: "Re: [OMPI users] Error: Unable to create the sub-directory (/tmp/openmpi etc...)"</a>
<li><strong>Previous message:</strong> <a href="23218.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Basic question on compiling fortran with windows	computer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23220.php">Reuti: "Re: [OMPI users] Error: Unable to create the sub-directory (/tmp/openmpi etc...)"</a>
<li><strong>Reply:</strong> <a href="23220.php">Reuti: "Re: [OMPI users] Error: Unable to create the sub-directory (/tmp/openmpi etc...)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear List,
<br>
<p>I've been struggling with this problem for a few days now and am out of
<br>
ideas. I am submitting a job using TORQUE on a beowulf cluster. One step
<br>
involves running mpiexec, and that is where this error occurs. I've found
<br>
some similar other queries in the past:
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/att-11378/attachment">http://www.open-mpi.org/community/lists/users/att-11378/attachment</a>
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2013/09/22608.php">http://www.open-mpi.org/community/lists/users/2013/09/22608.php</a>
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2009/11/11129.php">http://www.open-mpi.org/community/lists/users/2009/11/11129.php</a>
<br>
<p>I'm new to using open-mpi so much of this is very new to me. However, it
<br>
does not seem that my /tmp folder is full as far as I can tell. I've tried
<br>
reassigning &lt;<a href="http://www.open-mpi.org/faq/?category=sm#where-sm-file">http://www.open-mpi.org/faq/?category=sm#where-sm-file</a>&gt; the
<br>
temporary directory using the MCA
<br>
attribute&lt;<a href="http://www.open-mpi.org/faq/?category=tuning#mca-def">http://www.open-mpi.org/faq/?category=tuning#mca-def</a>&gt;(i.e.
<br>
mpiexec --mca orte_tmpdir_base /home/pathA/pathB process argument1
<br>
argument2 argument3), but that was unsuccessful as well. Similarly, if
<br>
thousands of sub-directories are being created, I have no idea where those
<br>
would be if this is some ext3 violation issue. It's worth noting that when
<br>
I submit this job--it works on some occassions and not on others. I suspect
<br>
it has something to do with the nodes that I am assigned and some property
<br>
of certain nodes that is an issue.
<br>
<p>It never used to have this problem until a few days ago, and now I mostly
<br>
can't get it to work except on a few occasions, which makes me think that
<br>
perhaps it is a node-specific issue. Any thoughts or suggestions would be
<br>
much appreciated!
<br>
<p>Thanks,
<br>
<p>Brandon
<br>
<p>PS I've copied the full error output below:
<br>
[bc11bl08.deac.wfu.edu:31532] opal_os_dirpath_create: Error: Unable to
<br>
create the sub-directory
<br>
(/tmp/openmpi-sessions-turnbe8_at_[hidden]_0) of
<br>
(/tmp/openmpi-sessions-turnbe8_at_[hidden]_0/2243/0/7), mkdir
<br>
failed [1]
<br>
[bc11bl08.deac.wfu.edu:31532] [[2243,0],7] ORTE_ERROR_LOG: Error in file
<br>
../../orte/util/session_dir.c at line 106
<br>
[bc11bl08.deac.wfu.edu:31532] [[2243,0],7] ORTE_ERROR_LOG: Error in file
<br>
../../orte/util/session_dir.c at line 399
<br>
[bc11bl08.deac.wfu.edu:31532] [[2243,0],7] ORTE_ERROR_LOG: Error in file
<br>
../../../../orte/mca/ess/base/ess_base_std_orted.c at line 283
<br>
[bc11bl08.deac.wfu.edu:31532] [[2243,0],7] ORTE_ERROR_LOG: A message is
<br>
attempting to be sent to a process whose contact information is unknown in
<br>
file ../../../../../orte/mca/rml/oob/rml_oob_send.c at line 104
<br>
[bc11bl08.deac.wfu.edu:31532] [[2243,0],7] could not get route to
<br>
[[INVALID],INVALID]
<br>
[bc11bl08.deac.wfu.edu:31532] [[2243,0],7] ORTE_ERROR_LOG: A message is
<br>
attempting to be sent to a process whose contact information is unknown in
<br>
file ../../orte/util/show_help.c at line 627
<br>
[bc11bl08.deac.wfu.edu:31532] [[2243,0],7] ORTE_ERROR_LOG: Error in file
<br>
../../../../../orte/mca/ess/tm/ess_tm_module.c at line 112
<br>
[bc11bl08.deac.wfu.edu:31532] [[2243,0],7] ORTE_ERROR_LOG: A message is
<br>
attempting to be sent to a process whose contact information is unknown in
<br>
file ../../../../../orte/mca/rml/oob/rml_oob_send.c at line 104
<br>
[bc11bl08.deac.wfu.edu:31532] [[2243,0],7] could not get route to
<br>
[[INVALID],INVALID]
<br>
[bc11bl08.deac.wfu.edu:31532] [[2243,0],7] ORTE_ERROR_LOG: A message is
<br>
attempting to be sent to a process whose contact information is unknown in
<br>
file ../../orte/util/show_help.c at line 627
<br>
[bc11bl08.deac.wfu.edu:31532] [[2243,0],7] ORTE_ERROR_LOG: Error in file
<br>
../../orte/runtime/orte_init.c at line 128
<br>
[bc11bl08.deac.wfu.edu:31532] [[2243,0],7] ORTE_ERROR_LOG: A message is
<br>
attempting to be sent to a process whose contact information is unknown in
<br>
file ../../../../../orte/mca/rml/oob/rml_oob_send.c at line 104
<br>
[bc11bl08.deac.wfu.edu:31532] [[2243,0],7] could not get route to
<br>
[[INVALID],INVALID]
<br>
[bc11bl08.deac.wfu.edu:31532] [[2243,0],7] ORTE_ERROR_LOG: A message is
<br>
attempting to be sent to a process whose contact information is unknown in
<br>
file ../../orte/util/show_help.c at line 627
<br>
[bc11bl08.deac.wfu.edu:31532] [[2243,0],7] ORTE_ERROR_LOG: Error in file
<br>
../../orte/orted/orted_main.c at line 357
<br>
=&gt;&gt; PBS: job killed: walltime 3626 exceeded limit 3600
<br>
Terminated
<br>
mpiexec: killing job...
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23219/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23220.php">Reuti: "Re: [OMPI users] Error: Unable to create the sub-directory (/tmp/openmpi etc...)"</a>
<li><strong>Previous message:</strong> <a href="23218.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Basic question on compiling fortran with windows	computer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23220.php">Reuti: "Re: [OMPI users] Error: Unable to create the sub-directory (/tmp/openmpi etc...)"</a>
<li><strong>Reply:</strong> <a href="23220.php">Reuti: "Re: [OMPI users] Error: Unable to create the sub-directory (/tmp/openmpi etc...)"</a>
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
