<?
$subject_val = "[OMPI users] question about checkpoint on cluster, mpirun doesn't work on cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 23 17:42:57 2010" -->
<!-- isoreceived="20100323214257" -->
<!-- sent="Tue, 23 Mar 2010 16:42:52 -0500" -->
<!-- isosent="20100323214252" -->
<!-- name="fengguang tian" -->
<!-- email="fernyabc_at_[hidden]" -->
<!-- subject="[OMPI users] question about checkpoint on cluster, mpirun doesn't work on cluster" -->
<!-- id="958403f51003231442o4f6b4ccai1e3a84574208b08f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] question about checkpoint on cluster, mpirun doesn't work on cluster<br>
<strong>From:</strong> fengguang tian (<em>fernyabc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-23 17:42:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12415.php">Fernando Lemos: "Re: [OMPI users] ompi-checkpoint hangs when using in multiple clusters"</a>
<li><strong>Previous message:</strong> <a href="12413.php">Rolf vandeVaarrt: "Re: [OMPI users] problem with opal_net_private_ipv4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12454.php">Josh Hursey: "Re: [OMPI users] question about checkpoint on cluster, mpirun doesn't work on cluster"</a>
<li><strong>Reply:</strong> <a href="12454.php">Josh Hursey: "Re: [OMPI users] question about checkpoint on cluster, mpirun doesn't work on cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I met the same problem with this link:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2009/12/11374.php">http://www.open-mpi.org/community/lists/users/2009/12/11374.php</a>
<br>
<p>in the link, they give a solution that use v1.4 open mpi instead of v1.3
<br>
open mpi. but, I am using v1.7a1r22794 open mpi, and met the same problem.
<br>
here is what I have done:
<br>
my cluster composed of two machines:nimbus(master) and nimbus1(slave), when
<br>
I run mpirun -np 40 -am ft-enable-cr --hostfile .mpihostfile myapplication
<br>
on the nimbus, and it doesn't work, it shows:
<br>
<p>[nimbus1:21387] opal_os_dirpath_create: Error: Unable to create the
<br>
sub-directory (/tmp/openmpi-sessions-mpiu_at_nimbus1_0/59759) of
<br>
(/tmp/openmpi-sessions-mpiu_at_nimbus1_0/59759/0/1), mkdir failed [1]
<br>
[nimbus1:21387] [[59759,0],1] ORTE_ERROR_LOG: Error in file
<br>
util/session_dir.c at line 106
<br>
[nimbus1:21387] [[59759,0],1] ORTE_ERROR_LOG: Error in file
<br>
util/session_dir.c at line 399
<br>
[nimbus1:21387] [[59759,0],1] ORTE_ERROR_LOG: Error in file
<br>
base/ess_base_std_orted.c at line 301
<br>
[nimbus1:21387] [[59759,0],1] ORTE_ERROR_LOG: A message is attempting to be
<br>
sent to a process whose contact information is unknown in file
<br>
rml_oob_send.c at line 104
<br>
[nimbus1:21387] [[59759,0],1] could not get route to [[INVALID],INVALID]
<br>
[nimbus1:21387] [[59759,0],1] ORTE_ERROR_LOG: A message is attempting to be
<br>
sent to a process whose contact information is unknown in file
<br>
util/show_help.c at line 602
<br>
[nimbus1:21387] [[59759,0],1] ORTE_ERROR_LOG: Error in file ess_env_module.c
<br>
at line 143
<br>
[nimbus1:21387] [[59759,0],1] ORTE_ERROR_LOG: A message is attempting to be
<br>
sent to a process whose contact information is unknown in file
<br>
rml_oob_send.c at line 104
<br>
[nimbus1:21387] [[59759,0],1] could not get route to [[INVALID],INVALID]
<br>
[nimbus1:21387] [[59759,0],1] ORTE_ERROR_LOG: A message is attempting to be
<br>
sent to a process whose contact information is unknown in file
<br>
util/show_help.c at line 602
<br>
[nimbus1:21387] [[59759,0],1] ORTE_ERROR_LOG: Error in file
<br>
runtime/orte_init.c at line 129
<br>
[nimbus1:21387] [[59759,0],1] ORTE_ERROR_LOG: A message is attempting to be
<br>
sent to a process whose contact information is unknown in file
<br>
rml_oob_send.c at line 104
<br>
[nimbus1:21387] [[59759,0],1] could not get route to [[INVALID],INVALID]
<br>
[nimbus1:21387] [[59759,0],1] ORTE_ERROR_LOG: A message is attempting to be
<br>
sent to a process whose contact information is unknown in file
<br>
util/show_help.c at line 602
<br>
[nimbus1:21387] [[59759,0],1] ORTE_ERROR_LOG: Error in file
<br>
orted/orted_main.c at line 355
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 10737) died unexpectedly with status 255 while attempting
<br>
to launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
<p><p>cheers
<br>
fengguang
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12414/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12415.php">Fernando Lemos: "Re: [OMPI users] ompi-checkpoint hangs when using in multiple clusters"</a>
<li><strong>Previous message:</strong> <a href="12413.php">Rolf vandeVaarrt: "Re: [OMPI users] problem with opal_net_private_ipv4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12454.php">Josh Hursey: "Re: [OMPI users] question about checkpoint on cluster, mpirun doesn't work on cluster"</a>
<li><strong>Reply:</strong> <a href="12454.php">Josh Hursey: "Re: [OMPI users] question about checkpoint on cluster, mpirun doesn't work on cluster"</a>
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
