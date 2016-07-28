<?
$subject_val = "Re: [OMPI users] mpi problems/many cpus per node";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 14 17:50:04 2012" -->
<!-- isoreceived="20121214225004" -->
<!-- sent="Fri, 14 Dec 2012 16:49:47 -0600" -->
<!-- isosent="20121214224947" -->
<!-- name="Daniel Davidson" -->
<!-- email="danield_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi problems/many cpus per node" -->
<!-- id="50CBAD0B.2090300_at_igb.uiuc.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E41AB6B6-8F9A-4745-9C9A-5B03098AB86C_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi problems/many cpus per node<br>
<strong>From:</strong> Daniel Davidson (<em>danield_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-14 17:49:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20960.php">Ralph Castain: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<li><strong>Previous message:</strong> <a href="20958.php">Ralph Castain: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<li><strong>In reply to:</strong> <a href="20958.php">Ralph Castain: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20960.php">Ralph Castain: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<li><strong>Reply:</strong> <a href="20960.php">Ralph Castain: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you for the help so far.  Here is the information that the 
<br>
debugging gives me.  Looks like the daemon on on the non-local node 
<br>
never makes contact.  If I step NP back two though, it does.
<br>
<p>Dan
<br>
<p>[root_at_compute-2-1 etc]# /home/apps/openmpi-1.6.3/bin/mpirun -host 
<br>
compute-2-0,compute-2-1 -v  -np 34 --leave-session-attached -mca 
<br>
odls_base_verbose 5 hostname
<br>
[compute-2-1.local:44855] mca:base:select:( odls) Querying component 
<br>
[default]
<br>
[compute-2-1.local:44855] mca:base:select:( odls) Query of component 
<br>
[default] set priority to 1
<br>
[compute-2-1.local:44855] mca:base:select:( odls) Selected component 
<br>
[default]
<br>
[compute-2-0.local:29282] mca:base:select:( odls) Querying component 
<br>
[default]
<br>
[compute-2-0.local:29282] mca:base:select:( odls) Query of component 
<br>
[default] set priority to 1
<br>
[compute-2-0.local:29282] mca:base:select:( odls) Selected component 
<br>
[default]
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:update:daemon:info updating 
<br>
nidmap
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:construct_child_list 
<br>
unpacking data to launch job [49524,1]
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:construct_child_list adding 
<br>
new jobdat for job [49524,1]
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:construct_child_list 
<br>
unpacking 1 app_contexts
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
checking proc [[49524,1],0] on daemon 1
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
checking proc [[49524,1],1] on daemon 0
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
found proc [[49524,1],1] for me!
<br>
[compute-2-1.local:44855] adding proc [[49524,1],1] (1) to my local list
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
checking proc [[49524,1],2] on daemon 1
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
checking proc [[49524,1],3] on daemon 0
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
found proc [[49524,1],3] for me!
<br>
[compute-2-1.local:44855] adding proc [[49524,1],3] (3) to my local list
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
checking proc [[49524,1],4] on daemon 1
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
checking proc [[49524,1],5] on daemon 0
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
found proc [[49524,1],5] for me!
<br>
[compute-2-1.local:44855] adding proc [[49524,1],5] (5) to my local list
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
checking proc [[49524,1],6] on daemon 1
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
checking proc [[49524,1],7] on daemon 0
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
found proc [[49524,1],7] for me!
<br>
[compute-2-1.local:44855] adding proc [[49524,1],7] (7) to my local list
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
checking proc [[49524,1],8] on daemon 1
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
checking proc [[49524,1],9] on daemon 0
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
found proc [[49524,1],9] for me!
<br>
[compute-2-1.local:44855] adding proc [[49524,1],9] (9) to my local list
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
checking proc [[49524,1],10] on daemon 1
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
checking proc [[49524,1],11] on daemon 0
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
found proc [[49524,1],11] for me!
<br>
[compute-2-1.local:44855] adding proc [[49524,1],11] (11) to my local list
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
checking proc [[49524,1],12] on daemon 1
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
checking proc [[49524,1],13] on daemon 0
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
found proc [[49524,1],13] for me!
<br>
[compute-2-1.local:44855] adding proc [[49524,1],13] (13) to my local list
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
checking proc [[49524,1],14] on daemon 1
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
checking proc [[49524,1],15] on daemon 0
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
found proc [[49524,1],15] for me!
<br>
[compute-2-1.local:44855] adding proc [[49524,1],15] (15) to my local list
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
checking proc [[49524,1],16] on daemon 1
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
checking proc [[49524,1],17] on daemon 0
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
found proc [[49524,1],17] for me!
<br>
[compute-2-1.local:44855] adding proc [[49524,1],17] (17) to my local list
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
checking proc [[49524,1],18] on daemon 1
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
checking proc [[49524,1],19] on daemon 0
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
found proc [[49524,1],19] for me!
<br>
[compute-2-1.local:44855] adding proc [[49524,1],19] (19) to my local list
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
checking proc [[49524,1],20] on daemon 1
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
checking proc [[49524,1],21] on daemon 0
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
found proc [[49524,1],21] for me!
<br>
[compute-2-1.local:44855] adding proc [[49524,1],21] (21) to my local list
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
checking proc [[49524,1],22] on daemon 1
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
checking proc [[49524,1],23] on daemon 0
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
found proc [[49524,1],23] for me!
<br>
[compute-2-1.local:44855] adding proc [[49524,1],23] (23) to my local list
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
checking proc [[49524,1],24] on daemon 1
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
checking proc [[49524,1],25] on daemon 0
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
found proc [[49524,1],25] for me!
<br>
[compute-2-1.local:44855] adding proc [[49524,1],25] (25) to my local list
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
checking proc [[49524,1],26] on daemon 1
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
checking proc [[49524,1],27] on daemon 0
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
found proc [[49524,1],27] for me!
<br>
[compute-2-1.local:44855] adding proc [[49524,1],27] (27) to my local list
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
checking proc [[49524,1],28] on daemon 1
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
checking proc [[49524,1],29] on daemon 0
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
found proc [[49524,1],29] for me!
<br>
[compute-2-1.local:44855] adding proc [[49524,1],29] (29) to my local list
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
checking proc [[49524,1],30] on daemon 1
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
checking proc [[49524,1],31] on daemon 0
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
found proc [[49524,1],31] for me!
<br>
[compute-2-1.local:44855] adding proc [[49524,1],31] (31) to my local list
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
checking proc [[49524,1],32] on daemon 1
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
checking proc [[49524,1],33] on daemon 0
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:constructing child list - 
<br>
found proc [[49524,1],33] for me!
<br>
[compute-2-1.local:44855] adding proc [[49524,1],33] (33) to my local list
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:launch found 384 processors 
<br>
for 17 children and locally set oversubscribed to false
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:launch working child 
<br>
[[49524,1],1]
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:launch working child 
<br>
[[49524,1],3]
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:launch working child 
<br>
[[49524,1],5]
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:launch working child 
<br>
[[49524,1],7]
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:launch working child 
<br>
[[49524,1],9]
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:launch working child 
<br>
[[49524,1],11]
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:launch working child 
<br>
[[49524,1],13]
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:launch working child 
<br>
[[49524,1],15]
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:launch working child 
<br>
[[49524,1],17]
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:launch working child 
<br>
[[49524,1],19]
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:launch working child 
<br>
[[49524,1],21]
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:launch working child 
<br>
[[49524,1],23]
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:launch working child 
<br>
[[49524,1],25]
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:launch working child 
<br>
[[49524,1],27]
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:launch working child 
<br>
[[49524,1],29]
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:launch working child 
<br>
[[49524,1],31]
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:launch working child 
<br>
[[49524,1],33]
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:launch reporting job 
<br>
[49524,1] launch status
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:launch flagging launch 
<br>
report to myself
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:launch setting waitpids
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc child 
<br>
process 44857 terminated
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc child 
<br>
process 44858 terminated
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc child 
<br>
process 44859 terminated
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc child 
<br>
process 44860 terminated
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc child 
<br>
process 44861 terminated
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc child 
<br>
process 44862 terminated
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc child 
<br>
process 44863 terminated
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc child 
<br>
process 44865 terminated
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc child 
<br>
process 44866 terminated
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc child 
<br>
process 44867 terminated
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc child 
<br>
process 44869 terminated
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc child 
<br>
process 44870 terminated
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc child 
<br>
process 44871 terminated
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc child 
<br>
process 44872 terminated
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc child 
<br>
process 44873 terminated
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc child 
<br>
process 44874 terminated
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc child 
<br>
process 44875 terminated
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired checking 
<br>
abort file 
<br>
/tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/33/abort
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired child process 
<br>
[[49524,1],33] terminated normally
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired checking 
<br>
abort file 
<br>
/tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/31/abort
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired child process 
<br>
[[49524,1],31] terminated normally
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired checking 
<br>
abort file 
<br>
/tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/29/abort
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired child process 
<br>
[[49524,1],29] terminated normally
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired checking 
<br>
abort file 
<br>
/tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/27/abort
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired child process 
<br>
[[49524,1],27] terminated normally
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired checking 
<br>
abort file 
<br>
/tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/25/abort
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired child process 
<br>
[[49524,1],25] terminated normally
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired checking 
<br>
abort file 
<br>
/tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/23/abort
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired child process 
<br>
[[49524,1],23] terminated normally
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired checking 
<br>
abort file 
<br>
/tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/21/abort
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired child process 
<br>
[[49524,1],21] terminated normally
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired checking 
<br>
abort file 
<br>
/tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/19/abort
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired child process 
<br>
[[49524,1],19] terminated normally
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired checking 
<br>
abort file 
<br>
/tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/17/abort
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired child process 
<br>
[[49524,1],17] terminated normally
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired checking 
<br>
abort file 
<br>
/tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/15/abort
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired child process 
<br>
[[49524,1],15] terminated normally
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired checking 
<br>
abort file 
<br>
/tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/13/abort
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired child process 
<br>
[[49524,1],13] terminated normally
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired checking 
<br>
abort file 
<br>
/tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/11/abort
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired child process 
<br>
[[49524,1],11] terminated normally
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired checking 
<br>
abort file /tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/9/abort
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired child process 
<br>
[[49524,1],9] terminated normally
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired checking 
<br>
abort file /tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/7/abort
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired child process 
<br>
[[49524,1],7] terminated normally
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired checking 
<br>
abort file /tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/5/abort
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired child process 
<br>
[[49524,1],5] terminated normally
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired checking 
<br>
abort file /tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/3/abort
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired child process 
<br>
[[49524,1],3] terminated normally
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired checking 
<br>
abort file /tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/1/abort
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired child process 
<br>
[[49524,1],1] terminated normally
<br>
compute-2-1.local
<br>
compute-2-1.local
<br>
compute-2-1.local
<br>
compute-2-1.local
<br>
compute-2-1.local
<br>
compute-2-1.local
<br>
compute-2-1.local
<br>
compute-2-1.local
<br>
compute-2-1.local
<br>
compute-2-1.local
<br>
compute-2-1.local
<br>
compute-2-1.local
<br>
compute-2-1.local
<br>
compute-2-1.local
<br>
compute-2-1.local
<br>
compute-2-1.local
<br>
compute-2-1.local
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:notify_iof_complete for 
<br>
child [[49524,1],25]
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:notify_iof_complete for 
<br>
child [[49524,1],15]
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:notify_iof_complete for 
<br>
child [[49524,1],11]
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:notify_iof_complete for 
<br>
child [[49524,1],13]
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:notify_iof_complete for 
<br>
child [[49524,1],19]
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:notify_iof_complete for 
<br>
child [[49524,1],9]
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:notify_iof_complete for 
<br>
child [[49524,1],17]
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:notify_iof_complete for 
<br>
child [[49524,1],31]
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:notify_iof_complete for 
<br>
child [[49524,1],7]
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:notify_iof_complete for 
<br>
child [[49524,1],21]
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:notify_iof_complete for 
<br>
child [[49524,1],5]
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:notify_iof_complete for 
<br>
child [[49524,1],33]
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:notify_iof_complete for 
<br>
child [[49524,1],23]
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:notify_iof_complete for 
<br>
child [[49524,1],3]
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:notify_iof_complete for 
<br>
child [[49524,1],29]
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:notify_iof_complete for 
<br>
child [[49524,1],27]
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:notify_iof_complete for 
<br>
child [[49524,1],1]
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:proc_complete reporting all 
<br>
procs in [49524,1] terminated
<br>
^Cmpirun: killing job...
<br>
<p>Killed by signal 2.
<br>
[compute-2-1.local:44855] [[49524,0],0] odls:kill_local_proc working on 
<br>
WILDCARD
<br>
<p><p>On 12/14/2012 04:11 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Sorry - I forgot that you built from a tarball, and so debug isn't enabled by default. You need to configure --enable-debug.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 14, 2012, at 1:52 PM, Daniel Davidson &lt;danield_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Oddly enough, adding this debugging info, lowered the number of processes that can be used down to 42 from 46.  When I run the MPI, it fails giving only the information that follows:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_compute-2-1 ssh]# /home/apps/openmpi-1.6.3/bin/mpirun -host compute-2-0,compute-2-1 -v  -np 44 --leave-session-attached -mca odls_base_verbose 5 hostname
</span><br>
<span class="quotelev2">&gt;&gt; [compute-2-1.local:44374] mca:base:select:( odls) Querying component [default]
</span><br>
<span class="quotelev2">&gt;&gt; [compute-2-1.local:44374] mca:base:select:( odls) Query of component [default] set priority to 1
</span><br>
<span class="quotelev2">&gt;&gt; [compute-2-1.local:44374] mca:base:select:( odls) Selected component [default]
</span><br>
<span class="quotelev2">&gt;&gt; [compute-2-0.local:28950] mca:base:select:( odls) Querying component [default]
</span><br>
<span class="quotelev2">&gt;&gt; [compute-2-0.local:28950] mca:base:select:( odls) Query of component [default] set priority to 1
</span><br>
<span class="quotelev2">&gt;&gt; [compute-2-0.local:28950] mca:base:select:( odls) Selected component [default]
</span><br>
<span class="quotelev2">&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev2">&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev2">&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev2">&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev2">&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev2">&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev2">&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev2">&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev2">&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev2">&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev2">&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev2">&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev2">&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev2">&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev2">&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev2">&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev2">&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev2">&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev2">&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev2">&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev2">&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev2">&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 12/14/2012 03:18 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It wouldn't be ssh - in both cases, only one ssh is being done to each node (to start the local daemon). The only difference is the number of fork/exec's being done on each node, and the number of file descriptors being opened to support those fork/exec's.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It certainly looks like your limits are high enough. When you say it &quot;fails&quot;, what do you mean - what error does it report? Try adding:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --leave-session-attached -mca odls_base_verbose 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to your cmd line - this will report all the local proc launch debug and hopefully show you a more detailed error report.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 14, 2012, at 12:29 PM, Daniel Davidson &lt;danield_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have had to cobble together two machines in our rocks cluster without using the standard installation, they have efi only bios on them and rocks doesnt like that, so it is the only workaround.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Everything works great now, except for one thing.  MPI jobs (openmpi or mpich) fail when started from one of these nodes (via qsub or by logging in and running the command) if 24 or more processors are needed on another system.  However if the originator of the MPI job is the headnode or any of the preexisting compute nodes, it works fine.  Right now I am guessing ssh client or ulimit problems, but I cannot find any difference.  Any help would be greatly appreciated.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; compute-2-1 and compute-2-0 are the new nodes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Examples:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This works, prints 23 hostnames from each machine:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [root_at_compute-2-1 ~]# /home/apps/openmpi-1.6.3/bin/mpirun -host compute-2-0,compute-2-1 -np 46 hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This does not work, prints 24 hostnames for compute-2-1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [root_at_compute-2-1 ~]# /home/apps/openmpi-1.6.3/bin/mpirun -host compute-2-0,compute-2-1 -np 48 hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; These both work, print 64 hostnames from each node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [root_at_biocluster ~]# /home/apps/openmpi-1.6.3/bin/mpirun -host compute-2-0,compute-2-1 -np 128 hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [root_at_compute-0-2 ~]# /home/apps/openmpi-1.6.3/bin/mpirun -host compute-2-0,compute-2-1 -np 128 hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [root_at_compute-2-1 ~]# ulimit -a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; core file size          (blocks, -c) 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; data seg size           (kbytes, -d) unlimited
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; scheduling priority             (-e) 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; file size               (blocks, -f) unlimited
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pending signals                 (-i) 16410016
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; max locked memory       (kbytes, -l) unlimited
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; max memory size         (kbytes, -m) unlimited
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; open files                      (-n) 4096
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pipe size            (512 bytes, -p) 8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; POSIX message queues     (bytes, -q) 819200
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; real-time priority              (-r) 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; stack size              (kbytes, -s) unlimited
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cpu time               (seconds, -t) unlimited
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; max user processes              (-u) 1024
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; virtual memory          (kbytes, -v) unlimited
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; file locks                      (-x) unlimited
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [root_at_compute-2-1 ~]# more /etc/ssh/ssh_config
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Host *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         CheckHostIP             no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         ForwardX11              yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         ForwardAgent            yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         StrictHostKeyChecking   no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         UsePrivilegedPort       no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Protocol                2,1
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
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20960.php">Ralph Castain: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<li><strong>Previous message:</strong> <a href="20958.php">Ralph Castain: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<li><strong>In reply to:</strong> <a href="20958.php">Ralph Castain: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20960.php">Ralph Castain: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<li><strong>Reply:</strong> <a href="20960.php">Ralph Castain: "Re: [OMPI users] mpi problems/many cpus per node"</a>
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
