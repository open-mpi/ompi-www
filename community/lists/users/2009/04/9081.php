<?
$subject_val = "Re: [OMPI users] few Problems";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 23 15:59:25 2009" -->
<!-- isoreceived="20090423195925" -->
<!-- sent="Thu, 23 Apr 2009 15:59:16 -0400" -->
<!-- isosent="20090423195916" -->
<!-- name="Luis Vitorio Cargnini" -->
<!-- email="lvcargnini_at_[hidden]" -->
<!-- subject="Re: [OMPI users] few Problems" -->
<!-- id="66B5EA7C-773E-4314-8CB2-3DEDB846325E_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49EF86F1.70209_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] few Problems<br>
<strong>From:</strong> Luis Vitorio Cargnini (<em>lvcargnini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-23 15:59:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9082.php">shan axida: "Re: [OMPI users] MPI_Bcast from OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="9080.php">Jeff Squyres: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<li><strong>In reply to:</strong> <a href="9036.php">Gus Correa: "Re: [OMPI users] few Problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9090.php">Jeff Squyres: "Re: [OMPI users] few Problems"</a>
<li><strong>Reply:</strong> <a href="9090.php">Jeff Squyres: "Re: [OMPI users] few Problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
I tried as described in the documentation (I have did this before) so  
<br>
the problem now is:
<br>
<p>I'm using NFS, my home dir is the same in all nodes the problem is  
<br>
when generating the key it is been generated for a specific machine  
<br>
end of the key is the user_at_host, the system is consulting id_dsa in  
<br>
each machine.
<br>
<p>so to fix the problem since my applications are launch from node srv0  
<br>
I just create the keys in node 0 and that is it start to work in to  
<br>
connect in the others node, the problem is the reverse path I can't  
<br>
access from srv1 srv0 for example.
<br>
<p>But this is not really a problem now.
<br>
The point is working from node0, the connections trough ssh. Now the  
<br>
execution it start but do not stop, like keep running ad infinitum,  
<br>
any ideas ?
<br>
<p><p><p>mpirun  -d -v -hostfile chosts -np 35 ~/mpi/hello
<br>
[cluster-srv0:29466] procdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv0_0/44411/0/0
<br>
[cluster-srv0:29466] jobdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv0_0/44411/0
<br>
[cluster-srv0:29466] top: openmpi-sessions-lvcargnini_at_cluster-srv0_0
<br>
[cluster-srv0:29466] tmp: /tmp
<br>
[cluster-srv0:29466] mpirun: reset PATH: /export/cluster/appl/x86_64/ 
<br>
llvm/bin:/bin:/sbin:/export/cluster/appl/x86_64/llvm/bin:/usr/local/ 
<br>
llvm/bin:/usr/local/bin:/usr/bin:/usr/sbin:/home/GTI420/lvcargnini/oe/ 
<br>
bitbake/bin
<br>
[cluster-srv0:29466] mpirun: reset LD_LIBRARY_PATH: /export/cluster/ 
<br>
appl/x86_64/llvm/lib:/lib64:/lib:/export/cluster/appl/x86_64/llvm/lib:/ 
<br>
usr/lib64:/usr/lib:/usr/local/lib64:/usr/local/lib
<br>
[cluster-srv1:13531] procdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv1_0/44411/0/1
<br>
[cluster-srv3:20272] procdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv3_0/44411/0/3
<br>
[cluster-srv3:20272] jobdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv3_0/44411/0
<br>
[cluster-srv3:20272] top: openmpi-sessions-lvcargnini_at_cluster-srv3_0
<br>
[cluster-srv3:20272] tmp: /tmp
<br>
[cluster-srv2:23273] procdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv2_0/44411/0/2
<br>
[cluster-srv4:09057] procdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv4_0/44411/0/4
<br>
[cluster-srv0:29466] [[44411,0],0] node[0].name cluster-srv0 daemon 0  
<br>
arch ffc91200
<br>
[cluster-srv0:29466] [[44411,0],0] node[1].name cluster-srv1 daemon 1  
<br>
arch ffc91200
<br>
[cluster-srv0:29466] [[44411,0],0] node[2].name cluster-srv2 daemon 2  
<br>
arch ffc91200
<br>
[cluster-srv0:29466] [[44411,0],0] node[3].name cluster-srv3 daemon 3  
<br>
arch ffc91200
<br>
[cluster-srv0:29466] [[44411,0],0] node[4].name cluster-srv4 daemon 4  
<br>
arch ffc91200
<br>
[cluster-srv1:13531] jobdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv1_0/44411/0
<br>
[cluster-srv1:13531] top: openmpi-sessions-lvcargnini_at_cluster-srv1_0
<br>
[cluster-srv1:13531] tmp: /tmp
<br>
[cluster-srv1:13531] [[44411,0],1] node[0].name cluster-srv0 daemon 0  
<br>
arch ffc91200
<br>
[cluster-srv1:13531] [[44411,0],1] node[1].name cluster-srv1 daemon 1  
<br>
arch ffc91200
<br>
[cluster-srv1:13531] [[44411,0],1] node[2].name cluster-srv2 daemon 2  
<br>
arch ffc91200
<br>
[cluster-srv1:13531] [[44411,0],1] node[3].name cluster-srv3 daemon 3  
<br>
arch ffc91200
<br>
[cluster-srv1:13531] [[44411,0],1] node[4].name cluster-srv4 daemon 4  
<br>
arch ffc91200
<br>
[cluster-srv2:23273] jobdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv2_0/44411/0
<br>
[cluster-srv2:23273] top: openmpi-sessions-lvcargnini_at_cluster-srv2_0
<br>
[cluster-srv2:23273] tmp: /tmp
<br>
[cluster-srv2:23273] [[44411,0],2] node[0].name cluster-srv0 daemon 0  
<br>
arch ffc91200
<br>
[cluster-srv2:23273] [[44411,0],2] node[1].name cluster-srv1 daemon 1  
<br>
arch ffc91200
<br>
[cluster-srv2:23273] [[44411,0],2] node[2].name cluster-srv2 daemon 2  
<br>
arch ffc91200
<br>
[cluster-srv2:23273] [[44411,0],2] node[3].name cluster-srv3 daemon 3  
<br>
arch ffc91200
<br>
[cluster-srv2:23273] [[44411,0],2] node[4].name cluster-srv4 daemon 4  
<br>
arch ffc91200
<br>
[cluster-srv4:09057] jobdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv4_0/44411/0
<br>
[cluster-srv4:09057] top: openmpi-sessions-lvcargnini_at_cluster-srv4_0
<br>
[cluster-srv4:09057] tmp: /tmp
<br>
[cluster-srv4:09057] [[44411,0],4] node[0].name cluster-srv0 daemon 0  
<br>
arch ffc91200
<br>
[cluster-srv4:09057] [[44411,0],4] node[1].name cluster-srv1 daemon 1  
<br>
arch ffc91200
<br>
[cluster-srv4:09057] [[44411,0],4] node[2].name cluster-srv2 daemon 2  
<br>
arch ffc91200
<br>
[cluster-srv4:09057] [[44411,0],4] node[3].name cluster-srv3 daemon 3  
<br>
arch ffc91200
<br>
[cluster-srv4:09057] [[44411,0],4] node[4].name cluster-srv4 daemon 4  
<br>
arch ffc91200
<br>
[cluster-srv0:29472] procdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv0_0/44411/1/0
<br>
[cluster-srv0:29472] jobdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv0_0/44411/1
<br>
[cluster-srv0:29472] top: openmpi-sessions-lvcargnini_at_cluster-srv0_0
<br>
[cluster-srv0:29472] tmp: /tmp
<br>
[cluster-srv0:29474] procdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv0_0/44411/1/2
<br>
[cluster-srv0:29474] jobdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv0_0/44411/1
<br>
[cluster-srv0:29474] top: openmpi-sessions-lvcargnini_at_cluster-srv0_0
<br>
[cluster-srv0:29474] tmp: /tmp
<br>
[cluster-srv0:29475] procdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv0_0/44411/1/3
<br>
[cluster-srv0:29475] jobdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv0_0/44411/1
<br>
[cluster-srv0:29475] top: openmpi-sessions-lvcargnini_at_cluster-srv0_0
<br>
[cluster-srv0:29475] tmp: /tmp
<br>
[cluster-srv0:29473] procdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv0_0/44411/1/1
<br>
[cluster-srv0:29473] jobdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv0_0/44411/1
<br>
[cluster-srv0:29473] top: openmpi-sessions-lvcargnini_at_cluster-srv0_0
<br>
[cluster-srv0:29473] tmp: /tmp
<br>
[cluster-srv4:09059] procdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv4_0/44411/1/32
<br>
[cluster-srv4:09059] jobdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv4_0/44411/1
<br>
[cluster-srv4:09059] top: openmpi-sessions-lvcargnini_at_cluster-srv4_0
<br>
[cluster-srv4:09059] tmp: /tmp
<br>
[cluster-srv1:13534] procdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv1_0/44411/1/9
<br>
[cluster-srv1:13534] jobdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv1_0/44411/1
<br>
[cluster-srv1:13534] top: openmpi-sessions-lvcargnini_at_cluster-srv1_0
<br>
[cluster-srv1:13534] tmp: /tmp
<br>
[cluster-srv3:20272] [[44411,0],3] node[0].name cluster-srv0 daemon 0  
<br>
arch ffc91200
<br>
[cluster-srv3:20272] [[44411,0],3] node[1].name cluster-srv1 daemon 1  
<br>
arch ffc91200
<br>
[cluster-srv3:20272] [[44411,0],3] node[2].name cluster-srv2 daemon 2  
<br>
arch ffc91200
<br>
[cluster-srv3:20272] [[44411,0],3] node[3].name cluster-srv3 daemon 3  
<br>
arch ffc91200
<br>
[cluster-srv3:20272] [[44411,0],3] node[4].name cluster-srv4 daemon 4  
<br>
arch ffc91200
<br>
[cluster-srv0:29477] procdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv0_0/44411/1/5
<br>
[cluster-srv0:29477] jobdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv0_0/44411/1
<br>
[cluster-srv0:29477] top: openmpi-sessions-lvcargnini_at_cluster-srv0_0
<br>
[cluster-srv0:29477] tmp: /tmp
<br>
[cluster-srv1:13533] procdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv1_0/44411/1/8
<br>
[cluster-srv1:13533] jobdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv1_0/44411/1
<br>
[cluster-srv1:13533] top: openmpi-sessions-lvcargnini_at_cluster-srv1_0
<br>
[cluster-srv1:13533] tmp: /tmp
<br>
[cluster-srv0:29476] procdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv0_0/44411/1/4
<br>
[cluster-srv0:29476] jobdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv0_0/44411/1
<br>
[cluster-srv0:29476] top: openmpi-sessions-lvcargnini_at_cluster-srv0_0
<br>
[cluster-srv0:29476] tmp: /tmp
<br>
[cluster-srv1:13536] procdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv1_0/44411/1/11
<br>
[cluster-srv1:13536] jobdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv1_0/44411/1
<br>
[cluster-srv1:13536] top: openmpi-sessions-lvcargnini_at_cluster-srv1_0
<br>
[cluster-srv1:13536] tmp: /tmp
<br>
[cluster-srv0:29479] procdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv0_0/44411/1/7
<br>
[cluster-srv0:29479] jobdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv0_0/44411/1
<br>
[cluster-srv0:29479] top: openmpi-sessions-lvcargnini_at_cluster-srv0_0
<br>
[cluster-srv0:29479] tmp: /tmp
<br>
[cluster-srv0:29478] procdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv0_0/44411/1/6
<br>
[cluster-srv0:29478] jobdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv0_0/44411/1
<br>
[cluster-srv0:29478] top: openmpi-sessions-lvcargnini_at_cluster-srv0_0
<br>
[cluster-srv0:29478] tmp: /tmp
<br>
[cluster-srv4:09060] procdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv4_0/44411/1/33
<br>
[cluster-srv4:09060] jobdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv4_0/44411/1
<br>
[cluster-srv4:09060] top: openmpi-sessions-lvcargnini_at_cluster-srv4_0
<br>
[cluster-srv4:09060] tmp: /tmp
<br>
[cluster-srv4:09061] procdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv4_0/44411/1/34
<br>
[cluster-srv4:09061] jobdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv4_0/44411/1
<br>
[cluster-srv4:09061] top: openmpi-sessions-lvcargnini_at_cluster-srv4_0
<br>
[cluster-srv4:09061] tmp: /tmp
<br>
[cluster-srv1:13537] procdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv1_0/44411/1/12
<br>
[cluster-srv1:13537] jobdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv1_0/44411/1
<br>
[cluster-srv1:13537] top: openmpi-sessions-lvcargnini_at_cluster-srv1_0
<br>
[cluster-srv1:13537] tmp: /tmp
<br>
[cluster-srv1:13535] procdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv1_0/44411/1/10
<br>
[cluster-srv1:13535] jobdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv1_0/44411/1
<br>
[cluster-srv1:13535] top: openmpi-sessions-lvcargnini_at_cluster-srv1_0
<br>
[cluster-srv1:13535] tmp: /tmp
<br>
[cluster-srv0:29466] Info: Setting up debugger process table for  
<br>
applications
<br>
&nbsp;&nbsp;&nbsp;MPIR_being_debugged = 0
<br>
&nbsp;&nbsp;&nbsp;MPIR_debug_state = 1
<br>
&nbsp;&nbsp;&nbsp;MPIR_partial_attach_ok = 1
<br>
&nbsp;&nbsp;&nbsp;MPIR_i_am_starter = 0
<br>
&nbsp;&nbsp;&nbsp;MPIR_proctable_size = 35
<br>
&nbsp;&nbsp;&nbsp;MPIR_proctable:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (0, cluster-srv0, /export/cluster/home/ 
<br>
lvcargnini/mpi/hello, 29472)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (1, cluster-srv0, /export/cluster/home/ 
<br>
lvcargnini/mpi/hello, 29473)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (2, cluster-srv0, /export/cluster/home/ 
<br>
lvcargnini/mpi/hello, 29474)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (3, cluster-srv0, /export/cluster/home/ 
<br>
lvcargnini/mpi/hello, 29475)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (4, cluster-srv0, /export/cluster/home/ 
<br>
lvcargnini/mpi/hello, 29476)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (5, cluster-srv0, /export/cluster/home/ 
<br>
lvcargnini/mpi/hello, 29477)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (6, cluster-srv0, /export/cluster/home/ 
<br>
lvcargnini/mpi/hello, 29478)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (7, cluster-srv0, /export/cluster/home/ 
<br>
lvcargnini/mpi/hello, 29479)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (8, cluster-srv1, /export/cluster/home/ 
<br>
lvcargnini/mpi/hello, 13533)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (9, cluster-srv1, /export/cluster/home/ 
<br>
lvcargnini/mpi/hello, 13534)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (10, cluster-srv1, /export/cluster/home/ 
<br>
lvcargnini/mpi/hello, 13535)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (11, cluster-srv1, /export/cluster/home/ 
<br>
lvcargnini/mpi/hello, 13536)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (12, cluster-srv1, /export/cluster/home/ 
<br>
lvcargnini/mpi/hello, 13537)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (13, cluster-srv1, /export/cluster/home/ 
<br>
lvcargnini/mpi/hello, 13538)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (14, cluster-srv1, /export/cluster/home/ 
<br>
lvcargnini/mpi/hello, 13539)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (15, cluster-srv1, /export/cluster/home/ 
<br>
lvcargnini/mpi/hello, 13540)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (16, cluster-srv2, /export/cluster/home/ 
<br>
lvcargnini/mpi/hello, 23277)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (17, cluster-srv2, /export/cluster/home/ 
<br>
lvcargnini/mpi/hello, 23278)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (18, cluster-srv2, /export/cluster/home/ 
<br>
lvcargnini/mpi/hello, 23279)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (19, cluster-srv2, /export/cluster/home/ 
<br>
lvcargnini/mpi/hello, 23280)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (20, cluster-srv2, /export/cluster/home/ 
<br>
lvcargnini/mpi/hello, 23281)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (21, cluster-srv2, /export/cluster/home/ 
<br>
lvcargnini/mpi/hello, 23282)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (22, cluster-srv2, /export/cluster/home/ 
<br>
lvcargnini/mpi/hello, 23283)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (23, cluster-srv2, /export/cluster/home/ 
<br>
lvcargnini/mpi/hello, 23284)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (24, cluster-srv3, /export/cluster/home/ 
<br>
lvcargnini/mpi/hello, 20274)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (25, cluster-srv3, /export/cluster/home/ 
<br>
lvcargnini/mpi/hello, 20275)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (26, cluster-srv3, /export/cluster/home/ 
<br>
lvcargnini/mpi/hello, 20276)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (27, cluster-srv3, /export/cluster/home/ 
<br>
lvcargnini/mpi/hello, 20277)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (28, cluster-srv3, /export/cluster/home/ 
<br>
lvcargnini/mpi/hello, 20278)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (29, cluster-srv3, /export/cluster/home/ 
<br>
lvcargnini/mpi/hello, 20279)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (30, cluster-srv3, /export/cluster/home/ 
<br>
lvcargnini/mpi/hello, 20280)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (31, cluster-srv3, /export/cluster/home/ 
<br>
lvcargnini/mpi/hello, 20281)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (32, cluster-srv4, /export/cluster/home/ 
<br>
lvcargnini/mpi/hello, 9059)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (33, cluster-srv4, /export/cluster/home/ 
<br>
lvcargnini/mpi/hello, 9060)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (34, cluster-srv4, /export/cluster/home/ 
<br>
lvcargnini/mpi/hello, 9061)
<br>
[cluster-srv1:13538] procdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv1_0/44411/1/13
<br>
[cluster-srv1:13538] jobdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv1_0/44411/1
<br>
[cluster-srv1:13538] top: openmpi-sessions-lvcargnini_at_cluster-srv1_0
<br>
[cluster-srv1:13538] tmp: /tmp
<br>
[cluster-srv2:23277] procdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv2_0/44411/1/16
<br>
[cluster-srv2:23277] jobdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv2_0/44411/1
<br>
[cluster-srv2:23277] top: openmpi-sessions-lvcargnini_at_cluster-srv2_0
<br>
[cluster-srv2:23277] tmp: /tmp
<br>
[cluster-srv1:13539] procdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv1_0/44411/1/14
<br>
[cluster-srv1:13539] jobdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv1_0/44411/1
<br>
[cluster-srv1:13539] top: openmpi-sessions-lvcargnini_at_cluster-srv1_0
<br>
[cluster-srv1:13539] tmp: /tmp
<br>
[cluster-srv1:13540] procdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv1_0/44411/1/15
<br>
[cluster-srv1:13540] jobdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv1_0/44411/1
<br>
[cluster-srv1:13540] top: openmpi-sessions-lvcargnini_at_cluster-srv1_0
<br>
[cluster-srv1:13540] tmp: /tmp
<br>
[cluster-srv2:23279] procdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv2_0/44411/1/18
<br>
[cluster-srv2:23279] jobdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv2_0/44411/1
<br>
[cluster-srv2:23279] top: openmpi-sessions-lvcargnini_at_cluster-srv2_0
<br>
[cluster-srv2:23279] tmp: /tmp
<br>
[cluster-srv2:23278] procdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv2_0/44411/1/17
<br>
[cluster-srv2:23278] jobdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv2_0/44411/1
<br>
[cluster-srv2:23278] top: openmpi-sessions-lvcargnini_at_cluster-srv2_0
<br>
[cluster-srv2:23278] tmp: /tmp
<br>
[cluster-srv2:23280] procdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv2_0/44411/1/19
<br>
[cluster-srv2:23280] jobdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv2_0/44411/1
<br>
[cluster-srv2:23280] top: openmpi-sessions-lvcargnini_at_cluster-srv2_0
<br>
[cluster-srv2:23280] tmp: /tmp
<br>
[cluster-srv2:23282] procdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv2_0/44411/1/21
<br>
[cluster-srv2:23282] jobdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv2_0/44411/1
<br>
[cluster-srv2:23282] top: openmpi-sessions-lvcargnini_at_cluster-srv2_0
<br>
[cluster-srv2:23282] tmp: /tmp
<br>
[cluster-srv2:23281] procdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv2_0/44411/1/20
<br>
[cluster-srv2:23281] jobdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv2_0/44411/1
<br>
[cluster-srv2:23281] top: openmpi-sessions-lvcargnini_at_cluster-srv2_0
<br>
[cluster-srv2:23281] tmp: /tmp
<br>
[cluster-srv2:23284] procdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv2_0/44411/1/23
<br>
[cluster-srv2:23284] jobdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv2_0/44411/1
<br>
[cluster-srv2:23284] top: openmpi-sessions-lvcargnini_at_cluster-srv2_0
<br>
[cluster-srv2:23284] tmp: /tmp
<br>
[cluster-srv2:23283] procdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv2_0/44411/1/22
<br>
[cluster-srv2:23283] jobdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv2_0/44411/1
<br>
[cluster-srv2:23283] top: openmpi-sessions-lvcargnini_at_cluster-srv2_0
<br>
[cluster-srv2:23283] tmp: /tmp
<br>
[cluster-srv3:20276] procdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv3_0/44411/1/26
<br>
[cluster-srv3:20276] jobdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv3_0/44411/1
<br>
[cluster-srv3:20276] top: openmpi-sessions-lvcargnini_at_cluster-srv3_0
<br>
[cluster-srv3:20276] tmp: /tmp
<br>
[cluster-srv3:20274] procdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv3_0/44411/1/24
<br>
[cluster-srv3:20274] jobdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv3_0/44411/1
<br>
[cluster-srv3:20274] top: openmpi-sessions-lvcargnini_at_cluster-srv3_0
<br>
[cluster-srv3:20274] tmp: /tmp
<br>
[cluster-srv3:20277] procdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv3_0/44411/1/27
<br>
[cluster-srv3:20277] jobdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv3_0/44411/1
<br>
[cluster-srv3:20277] top: openmpi-sessions-lvcargnini_at_cluster-srv3_0
<br>
[cluster-srv3:20277] tmp: /tmp
<br>
[cluster-srv3:20280] procdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv3_0/44411/1/30
<br>
[cluster-srv3:20280] jobdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv3_0/44411/1
<br>
[cluster-srv3:20280] top: openmpi-sessions-lvcargnini_at_cluster-srv3_0
<br>
[cluster-srv3:20280] tmp: /tmp
<br>
[cluster-srv3:20275] procdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv3_0/44411/1/25
<br>
[cluster-srv3:20275] jobdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv3_0/44411/1
<br>
[cluster-srv3:20275] top: openmpi-sessions-lvcargnini_at_cluster-srv3_0
<br>
[cluster-srv3:20275] tmp: /tmp
<br>
[cluster-srv3:20279] procdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv3_0/44411/1/29
<br>
[cluster-srv3:20279] jobdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv3_0/44411/1
<br>
[cluster-srv3:20279] top: openmpi-sessions-lvcargnini_at_cluster-srv3_0
<br>
[cluster-srv3:20279] tmp: /tmp
<br>
[cluster-srv3:20278] procdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv3_0/44411/1/28
<br>
[cluster-srv3:20278] jobdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv3_0/44411/1
<br>
[cluster-srv3:20278] top: openmpi-sessions-lvcargnini_at_cluster-srv3_0
<br>
[cluster-srv3:20278] tmp: /tmp
<br>
[cluster-srv3:20281] procdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv3_0/44411/1/31
<br>
[cluster-srv3:20281] jobdir: /tmp/openmpi-sessions-lvcargnini_at_cluster- 
<br>
srv3_0/44411/1
<br>
[cluster-srv3:20281] top: openmpi-sessions-lvcargnini_at_cluster-srv3_0
<br>
[cluster-srv3:20281] tmp: /tmp
<br>
[cluster-srv4:09059] [[44411,1],32] node[0].name cluster-srv0 daemon 0  
<br>
arch ffc91200
<br>
[cluster-srv4:09059] [[44411,1],32] node[1].name cluster-srv1 daemon 1  
<br>
arch ffc91200
<br>
[cluster-srv4:09059] [[44411,1],32] node[2].name cluster-srv2 daemon 2  
<br>
arch ffc91200
<br>
[cluster-srv4:09059] [[44411,1],32] node[3].name cluster-srv3 daemon 3  
<br>
arch ffc91200
<br>
[cluster-srv4:09059] [[44411,1],32] node[4].name cluster-srv4 daemon 4  
<br>
arch ffc91200
<br>
<p><p>Le 09-04-22 &#224; 17:06, Gus Correa a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Hi Luis, list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To complement Jeff's recommendation,
</span><br>
<span class="quotelev1">&gt; see if this recipe to setup passwordless ssh connections helps.
</span><br>
<span class="quotelev1">&gt; If you use RSA keys instead of DSA, replace all &quot;dsa&quot; by &quot;rsa&quot;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.sshkeychain.org/mirrors/SSH-with-Keys-HOWTO/SSH-with-Keys-HOWTO-4.html#ss4.3">http://www.sshkeychain.org/mirrors/SSH-with-Keys-HOWTO/SSH-with-Keys-HOWTO-4.html#ss4.3</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Gustavo Correa
</span><br>
<span class="quotelev1">&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; It looks like you need to fix your password-less ssh problems first:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Permission denied, please try again.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;lvcargnini_at_cluster-srv2's password:
</span><br>
<span class="quotelev2">&gt;&gt; As I mentioned earlier, you need to be able to be able to run
</span><br>
<span class="quotelev2">&gt;&gt;    ssh cluster-srv2 uptime
</span><br>
<span class="quotelev2">&gt;&gt; without being prompted for a password before Open MPI will work  
</span><br>
<span class="quotelev2">&gt;&gt; properly.
</span><br>
<span class="quotelev2">&gt;&gt; If you're still having problems after fixing this, please send all  
</span><br>
<span class="quotelev2">&gt;&gt; the information from the &quot;help&quot; URL I sent earlier.
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 22, 2009, at 3:24 PM, Luis Vitorio Cargnini wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ok this is the debug information debug running on 5 nodes (trying at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; least), the process is locked until now:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; each node is composed by two quad-core microprocessors.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (don't finish), one node yet asked me the password. I have the home
</span><br>
<span class="quotelev3">&gt;&gt;&gt; partition mounted (the same) in all nodes. so login in cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv[0-4] is the same thing, I generated the
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; key in each node, in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different files and added all to the authorized_keys, it should be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; working.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That is it, all help is welcome.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this is the code been executed:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int main (int argc, char *argv[])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   int rank, size;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_Init (&amp;argc, &amp;argv);     /* starts MPI */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_Comm_rank (MPI_COMM_WORLD, &amp;rank);       /* get current  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process id */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_Comm_size (MPI_COMM_WORLD, &amp;size);       /* get number of  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   printf( &quot;Hello world from process %d of %d\n&quot;, rank, size );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; debug:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -bash-3.2$ mpirun -v -d -hostfile chosts -np 32 /export/cluster/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; home/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini/mpi/hello
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21606] procdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv0_0/35335/0/0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21606] jobdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv0_0/35335/0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21606] top: openmpi-sessions-lvcargnini_at_cluster-srv0_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21606] tmp: /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21606] mpirun: reset PATH: /export/cluster/appl/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; x86_64/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; llvm/bin:/bin:/sbin:/export/cluster/appl/x86_64/llvm/bin:/usr/local/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; llvm/bin:/usr/local/bin:/usr/bin:/usr/sbin:/home/GTI420/lvcargnini/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; oe/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bitbake/bin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21606] mpirun: reset LD_LIBRARY_PATH: /export/cluster/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; appl/x86_64/llvm/lib:/lib64:/lib:/export/cluster/appl/x86_64/llvm/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lib:/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; usr/lib64:/usr/lib:/usr/local/lib64:/usr/local/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-srv1's password:lvcargnini_at_cluster-srv2's  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; password:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-srv3's password:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07406] procdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv1_0/35335/0/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07406] jobdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv1_0/35335/0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07406] top: openmpi-sessions-lvcargnini_at_cluster-srv1_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07406] tmp: /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Permission denied, please try again.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-srv2's password:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14230] procdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv3_0/35335/0/3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14230] jobdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv3_0/35335/0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14230] top: openmpi-sessions-lvcargnini_at_cluster-srv3_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14230] tmp: /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Permission denied, please try again.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-srv2's password:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17092] procdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv2_0/35335/0/2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17092] jobdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv2_0/35335/0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17092] top: openmpi-sessions-lvcargnini_at_cluster-srv2_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17092] tmp: /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21606] [[35335,0],0] node[0].name cluster-srv0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21606] [[35335,0],0] node[1].name cluster-srv1  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21606] [[35335,0],0] node[2].name cluster-srv2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21606] [[35335,0],0] node[3].name cluster-srv3  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21606] [[35335,0],0] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07406] [[35335,0],1] node[0].name cluster-srv0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07406] [[35335,0],1] node[1].name cluster-srv1  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07406] [[35335,0],1] node[2].name cluster-srv2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07406] [[35335,0],1] node[3].name cluster-srv3  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07406] [[35335,0],1] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17092] [[35335,0],2] node[0].name cluster-srv0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17092] [[35335,0],2] node[1].name cluster-srv1  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17092] [[35335,0],2] node[2].name cluster-srv2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17092] [[35335,0],2] node[3].name cluster-srv3  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17092] [[35335,0],2] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21611] procdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv0_0/35335/1/0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21611] jobdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv0_0/35335/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21611] top: openmpi-sessions-lvcargnini_at_cluster-srv0_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21611] tmp: /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21613] procdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv0_0/35335/1/2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21613] jobdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv0_0/35335/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21613] top: openmpi-sessions-lvcargnini_at_cluster-srv0_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21613] tmp: /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21612] procdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv0_0/35335/1/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21612] jobdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv0_0/35335/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21612] top: openmpi-sessions-lvcargnini_at_cluster-srv0_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21612] tmp: /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21614] procdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv0_0/35335/1/3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21614] jobdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv0_0/35335/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21614] top: openmpi-sessions-lvcargnini_at_cluster-srv0_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21614] tmp: /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21615] procdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv0_0/35335/1/4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21615] jobdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv0_0/35335/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21615] top: openmpi-sessions-lvcargnini_at_cluster-srv0_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21615] tmp: /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21616] procdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv0_0/35335/1/5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21616] jobdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv0_0/35335/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21616] top: openmpi-sessions-lvcargnini_at_cluster-srv0_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21616] tmp: /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21617] procdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv0_0/35335/1/6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21617] jobdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv0_0/35335/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21617] top: openmpi-sessions-lvcargnini_at_cluster-srv0_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21617] tmp: /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21618] procdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv0_0/35335/1/7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21618] jobdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv0_0/35335/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21618] top: openmpi-sessions-lvcargnini_at_cluster-srv0_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21618] tmp: /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07408] procdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv1_0/35335/1/8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07408] jobdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv1_0/35335/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07408] top: openmpi-sessions-lvcargnini_at_cluster-srv1_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07408] tmp: /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14230] [[35335,0],3] node[0].name cluster-srv0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14230] [[35335,0],3] node[1].name cluster-srv1  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14230] [[35335,0],3] node[2].name cluster-srv2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14230] [[35335,0],3] node[3].name cluster-srv3  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14230] [[35335,0],3] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07409] procdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv1_0/35335/1/9
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07409] jobdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv1_0/35335/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07409] top: openmpi-sessions-lvcargnini_at_cluster-srv1_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07409] tmp: /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07410] procdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv1_0/35335/1/10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07410] jobdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv1_0/35335/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07410] top: openmpi-sessions-lvcargnini_at_cluster-srv1_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07410] tmp: /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21606] Info: Setting up debugger process table for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; applications
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPIR_being_debugged = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPIR_debug_state = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPIR_partial_attach_ok = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPIR_i_am_starter = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPIR_proctable_size = 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPIR_proctable:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (i, host, exe, pid) = (0, cluster-srv0, /export/cluster/home/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini/mpi/hello, 21611)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (i, host, exe, pid) = (1, cluster-srv0, /export/cluster/home/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini/mpi/hello, 21612)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (i, host, exe, pid) = (2, cluster-srv0, /export/cluster/home/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini/mpi/hello, 21613)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (i, host, exe, pid) = (3, cluster-srv0, /export/cluster/home/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini/mpi/hello, 21614)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (i, host, exe, pid) = (4, cluster-srv0, /export/cluster/home/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini/mpi/hello, 21615)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (i, host, exe, pid) = (5, cluster-srv0, /export/cluster/home/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini/mpi/hello, 21616)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (i, host, exe, pid) = (6, cluster-srv0, /export/cluster/home/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini/mpi/hello, 21617)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (i, host, exe, pid) = (7, cluster-srv0, /export/cluster/home/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini/mpi/hello, 21618)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (i, host, exe, pid) = (8, cluster-srv1, /export/cluster/home/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini/mpi/hello, 7408)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (i, host, exe, pid) = (9, cluster-srv1, /export/cluster/home/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini/mpi/hello, 7409)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (i, host, exe, pid) = (10, cluster-srv1, /export/cluster/home/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini/mpi/hello, 7410)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (i, host, exe, pid) = (11, cluster-srv1, /export/cluster/home/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini/mpi/hello, 7411)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (i, host, exe, pid) = (12, cluster-srv1, /export/cluster/home/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini/mpi/hello, 7412)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (i, host, exe, pid) = (13, cluster-srv1, /export/cluster/home/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini/mpi/hello, 7413)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (i, host, exe, pid) = (14, cluster-srv1, /export/cluster/home/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini/mpi/hello, 7414)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (i, host, exe, pid) = (15, cluster-srv1, /export/cluster/home/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini/mpi/hello, 7415)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (i, host, exe, pid) = (16, cluster-srv2, /export/cluster/home/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini/mpi/hello, 17096)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (i, host, exe, pid) = (17, cluster-srv2, /export/cluster/home/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini/mpi/hello, 17097)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (i, host, exe, pid) = (18, cluster-srv2, /export/cluster/home/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini/mpi/hello, 17098)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (i, host, exe, pid) = (19, cluster-srv2, /export/cluster/home/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini/mpi/hello, 17099)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (i, host, exe, pid) = (20, cluster-srv2, /export/cluster/home/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini/mpi/hello, 17100)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (i, host, exe, pid) = (21, cluster-srv2, /export/cluster/home/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini/mpi/hello, 17101)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (i, host, exe, pid) = (22, cluster-srv2, /export/cluster/home/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini/mpi/hello, 17102)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (i, host, exe, pid) = (23, cluster-srv2, /export/cluster/home/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini/mpi/hello, 17103)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (i, host, exe, pid) = (24, cluster-srv3, /export/cluster/home/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini/mpi/hello, 14232)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (i, host, exe, pid) = (25, cluster-srv3, /export/cluster/home/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini/mpi/hello, 14233)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (i, host, exe, pid) = (26, cluster-srv3, /export/cluster/home/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini/mpi/hello, 14234)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (i, host, exe, pid) = (27, cluster-srv3, /export/cluster/home/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini/mpi/hello, 14235)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (i, host, exe, pid) = (28, cluster-srv3, /export/cluster/home/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini/mpi/hello, 14236)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (i, host, exe, pid) = (29, cluster-srv3, /export/cluster/home/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini/mpi/hello, 14237)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (i, host, exe, pid) = (30, cluster-srv3, /export/cluster/home/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini/mpi/hello, 14238)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (i, host, exe, pid) = (31, cluster-srv3, /export/cluster/home/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini/mpi/hello, 14239)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07412] procdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv1_0/35335/1/12
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07412] jobdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv1_0/35335/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07412] top: openmpi-sessions-lvcargnini_at_cluster-srv1_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07412] tmp: /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07411] procdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv1_0/35335/1/11
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07411] jobdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv1_0/35335/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07411] top: openmpi-sessions-lvcargnini_at_cluster-srv1_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07411] tmp: /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07414] procdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv1_0/35335/1/14
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07414] jobdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv1_0/35335/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07414] top: openmpi-sessions-lvcargnini_at_cluster-srv1_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07414] tmp: /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07415] procdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv1_0/35335/1/15
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07415] jobdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv1_0/35335/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07415] top: openmpi-sessions-lvcargnini_at_cluster-srv1_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07415] tmp: /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07413] procdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv1_0/35335/1/13
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07413] jobdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv1_0/35335/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07413] top: openmpi-sessions-lvcargnini_at_cluster-srv1_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07413] tmp: /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17096] procdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv2_0/35335/1/16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17096] jobdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv2_0/35335/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17096] top: openmpi-sessions-lvcargnini_at_cluster-srv2_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17096] tmp: /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17097] procdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv2_0/35335/1/17
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17097] jobdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv2_0/35335/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17097] top: openmpi-sessions-lvcargnini_at_cluster-srv2_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17097] tmp: /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17099] procdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv2_0/35335/1/19
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17099] jobdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv2_0/35335/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17099] top: openmpi-sessions-lvcargnini_at_cluster-srv2_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17099] tmp: /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17098] procdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv2_0/35335/1/18
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17098] jobdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv2_0/35335/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17098] top: openmpi-sessions-lvcargnini_at_cluster-srv2_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17098] tmp: /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17100] procdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv2_0/35335/1/20
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17100] jobdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv2_0/35335/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17100] top: openmpi-sessions-lvcargnini_at_cluster-srv2_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17100] tmp: /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17102] procdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv2_0/35335/1/22
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17102] jobdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv2_0/35335/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17102] top: openmpi-sessions-lvcargnini_at_cluster-srv2_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17102] tmp: /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17103] procdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv2_0/35335/1/23
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17103] jobdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv2_0/35335/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17103] top: openmpi-sessions-lvcargnini_at_cluster-srv2_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17103] tmp: /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17101] procdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv2_0/35335/1/21
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17101] jobdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv2_0/35335/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17101] top: openmpi-sessions-lvcargnini_at_cluster-srv2_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17101] tmp: /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14232] procdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv3_0/35335/1/24
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14232] jobdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv3_0/35335/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14232] top: openmpi-sessions-lvcargnini_at_cluster-srv3_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14232] tmp: /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14235] procdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv3_0/35335/1/27
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14235] jobdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv3_0/35335/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14235] top: openmpi-sessions-lvcargnini_at_cluster-srv3_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14235] tmp: /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14233] procdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv3_0/35335/1/25
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14233] jobdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv3_0/35335/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14233] top: openmpi-sessions-lvcargnini_at_cluster-srv3_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14233] tmp: /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14234] procdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv3_0/35335/1/26
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14234] jobdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv3_0/35335/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14234] top: openmpi-sessions-lvcargnini_at_cluster-srv3_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14234] tmp: /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14236] procdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv3_0/35335/1/28
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14236] jobdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv3_0/35335/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14236] top: openmpi-sessions-lvcargnini_at_cluster-srv3_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14236] tmp: /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14237] procdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv3_0/35335/1/29
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14237] jobdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv3_0/35335/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14237] top: openmpi-sessions-lvcargnini_at_cluster-srv3_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14237] tmp: /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14238] procdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv3_0/35335/1/30
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14238] jobdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv3_0/35335/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14238] top: openmpi-sessions-lvcargnini_at_cluster-srv3_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14238] tmp: /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14239] procdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv3_0/35335/1/31
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14239] jobdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srv3_0/35335/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14239] top: openmpi-sessions-lvcargnini_at_cluster-srv3_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14239] tmp: /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21611] [[35335,1],0] node[0].name cluster-srv0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21611] [[35335,1],0] node[1].name cluster-srv1  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21611] [[35335,1],0] node[2].name cluster-srv2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21611] [[35335,1],0] node[3].name cluster-srv3  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21611] [[35335,1],0] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21613] [[35335,1],2] node[0].name cluster-srv0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21613] [[35335,1],2] node[1].name cluster-srv1  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21613] [[35335,1],2] node[2].name cluster-srv2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21613] [[35335,1],2] node[3].name cluster-srv3  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21613] [[35335,1],2] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21614] [[35335,1],3] node[0].name cluster-srv0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21614] [[35335,1],3] node[1].name cluster-srv1  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21614] [[35335,1],3] node[2].name cluster-srv2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21614] [[35335,1],3] node[3].name cluster-srv3  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21614] [[35335,1],3] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21612] [[35335,1],1] node[0].name cluster-srv0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21612] [[35335,1],1] node[1].name cluster-srv1  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21612] [[35335,1],1] node[2].name cluster-srv2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21612] [[35335,1],1] node[3].name cluster-srv3  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21612] [[35335,1],1] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21615] [[35335,1],4] node[0].name cluster-srv0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21615] [[35335,1],4] node[1].name cluster-srv1  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21615] [[35335,1],4] node[2].name cluster-srv2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21615] [[35335,1],4] node[3].name cluster-srv3  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21615] [[35335,1],4] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07408] [[35335,1],8] node[0].name cluster-srv0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07408] [[35335,1],8] node[1].name cluster-srv1  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07408] [[35335,1],8] node[2].name cluster-srv2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07408] [[35335,1],8] node[3].name cluster-srv3  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07408] [[35335,1],8] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07409] [[35335,1],9] node[0].name cluster-srv0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07409] [[35335,1],9] node[1].name cluster-srv1  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07409] [[35335,1],9] node[2].name cluster-srv2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07409] [[35335,1],9] node[3].name cluster-srv3  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07409] [[35335,1],9] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07410] [[35335,1],10] node[0].name cluster-srv0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07410] [[35335,1],10] node[1].name cluster-srv1  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07410] [[35335,1],10] node[2].name cluster-srv2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07410] [[35335,1],10] node[3].name cluster-srv3  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07410] [[35335,1],10] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17096] [[35335,1],16] node[0].name cluster-srv0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17096] [[35335,1],16] node[1].name cluster-srv1  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17096] [[35335,1],16] node[2].name cluster-srv2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17096] [[35335,1],16] node[3].name cluster-srv3  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17096] [[35335,1],16] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17097] [[35335,1],17] node[0].name cluster-srv0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17097] [[35335,1],17] node[1].name cluster-srv1  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17097] [[35335,1],17] node[2].name cluster-srv2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17097] [[35335,1],17] node[3].name cluster-srv3  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17097] [[35335,1],17] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21617] [[35335,1],6] node[0].name cluster-srv0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21617] [[35335,1],6] node[1].name cluster-srv1  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21617] [[35335,1],6] node[2].name cluster-srv2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21617] [[35335,1],6] node[3].name cluster-srv3  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21617] [[35335,1],6] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21616] [[35335,1],5] node[0].name cluster-srv0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21616] [[35335,1],5] node[1].name cluster-srv1  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21616] [[35335,1],5] node[2].name cluster-srv2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21616] [[35335,1],5] node[3].name cluster-srv3  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21616] [[35335,1],5] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07411] [[35335,1],11] node[0].name cluster-srv0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07411] [[35335,1],11] node[1].name cluster-srv1  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07411] [[35335,1],11] node[2].name cluster-srv2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07411] [[35335,1],11] node[3].name cluster-srv3  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07411] [[35335,1],11] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17099] [[35335,1],19] node[0].name cluster-srv0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17099] [[35335,1],19] node[1].name cluster-srv1  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17099] [[35335,1],19] node[2].name cluster-srv2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17099] [[35335,1],19] node[3].name cluster-srv3  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17099] [[35335,1],19] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21618] [[35335,1],7] node[0].name cluster-srv0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21618] [[35335,1],7] node[1].name cluster-srv1  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21618] [[35335,1],7] node[2].name cluster-srv2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21618] [[35335,1],7] node[3].name cluster-srv3  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21618] [[35335,1],7] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17098] [[35335,1],18] node[0].name cluster-srv0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17098] [[35335,1],18] node[1].name cluster-srv1  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17098] [[35335,1],18] node[2].name cluster-srv2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17098] [[35335,1],18] node[3].name cluster-srv3  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17098] [[35335,1],18] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07412] [[35335,1],12] node[0].name cluster-srv0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07412] [[35335,1],12] node[1].name cluster-srv1  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07412] [[35335,1],12] node[2].name cluster-srv2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07412] [[35335,1],12] node[3].name cluster-srv3  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07412] [[35335,1],12] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17102] [[35335,1],22] node[0].name cluster-srv0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17102] [[35335,1],22] node[1].name cluster-srv1  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17102] [[35335,1],22] node[2].name cluster-srv2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17102] [[35335,1],22] node[3].name cluster-srv3  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17102] [[35335,1],22] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17100] [[35335,1],20] node[0].name cluster-srv0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17100] [[35335,1],20] node[1].name cluster-srv1  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17100] [[35335,1],20] node[2].name cluster-srv2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17100] [[35335,1],20] node[3].name cluster-srv3  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17100] [[35335,1],20] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07415] [[35335,1],15] node[0].name cluster-srv0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07415] [[35335,1],15] node[1].name cluster-srv1  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07415] [[35335,1],15] node[2].name cluster-srv2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07415] [[35335,1],15] node[3].name cluster-srv3  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07415] [[35335,1],15] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07414] [[35335,1],14] node[0].name cluster-srv0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07414] [[35335,1],14] node[1].name cluster-srv1  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07414] [[35335,1],14] node[2].name cluster-srv2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07414] [[35335,1],14] node[3].name cluster-srv3  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07414] [[35335,1],14] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17101] [[35335,1],21] node[0].name cluster-srv0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17101] [[35335,1],21] node[1].name cluster-srv1  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17101] [[35335,1],21] node[2].name cluster-srv2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17101] [[35335,1],21] node[3].name cluster-srv3  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17101] [[35335,1],21] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17103] [[35335,1],23] node[0].name cluster-srv0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17103] [[35335,1],23] node[1].name cluster-srv1  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17103] [[35335,1],23] node[2].name cluster-srv2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17103] [[35335,1],23] node[3].name cluster-srv3  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17103] [[35335,1],23] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07413] [[35335,1],13] node[0].name cluster-srv0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07413] [[35335,1],13] node[1].name cluster-srv1  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07413] [[35335,1],13] node[2].name cluster-srv2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07413] [[35335,1],13] node[3].name cluster-srv3  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07413] [[35335,1],13] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14232] [[35335,1],24] node[0].name cluster-srv0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14232] [[35335,1],24] node[1].name cluster-srv1  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14232] [[35335,1],24] node[2].name cluster-srv2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14232] [[35335,1],24] node[3].name cluster-srv3  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14232] [[35335,1],24] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14235] [[35335,1],27] node[0].name cluster-srv0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14235] [[35335,1],27] node[1].name cluster-srv1  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14235] [[35335,1],27] node[2].name cluster-srv2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14235] [[35335,1],27] node[3].name cluster-srv3  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14235] [[35335,1],27] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14233] [[35335,1],25] node[0].name cluster-srv0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14233] [[35335,1],25] node[1].name cluster-srv1  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14233] [[35335,1],25] node[2].name cluster-srv2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14233] [[35335,1],25] node[3].name cluster-srv3  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14233] [[35335,1],25] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14234] [[35335,1],26] node[0].name cluster-srv0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14234] [[35335,1],26] node[1].name cluster-srv1  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14234] [[35335,1],26] node[2].name cluster-srv2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14234] [[35335,1],26] node[3].name cluster-srv3  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14234] [[35335,1],26] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14236] [[35335,1],28] node[0].name cluster-srv0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14236] [[35335,1],28] node[1].name cluster-srv1  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14236] [[35335,1],28] node[2].name cluster-srv2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14236] [[35335,1],28] node[3].name cluster-srv3  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14236] [[35335,1],28] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14237] [[35335,1],29] node[0].name cluster-srv0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14237] [[35335,1],29] node[1].name cluster-srv1  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14237] [[35335,1],29] node[2].name cluster-srv2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14237] [[35335,1],29] node[3].name cluster-srv3  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14237] [[35335,1],29] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14239] [[35335,1],31] node[0].name cluster-srv0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14239] [[35335,1],31] node[1].name cluster-srv1  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14239] [[35335,1],31] node[2].name cluster-srv2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14239] [[35335,1],31] node[3].name cluster-srv3  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14239] [[35335,1],31] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14238] [[35335,1],30] node[0].name cluster-srv0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14238] [[35335,1],30] node[1].name cluster-srv1  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14238] [[35335,1],30] node[2].name cluster-srv2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14238] [[35335,1],30] node[3].name cluster-srv3  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14238] [[35335,1],30] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world from process 0 of 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world from process 4 of 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world from process 1 of 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world from process 7 of 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world from process 6 of 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world from process 24 of 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world from process 5 of 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world from process 27 of 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world from process 25 of 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world from process 21 of 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world from process 20 of 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world from process 18 of 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world from process 10 of 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world from process 16 of 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world from process 8 of 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world from process 12 of 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world from process 22 of 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world from process 13 of 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world from process 11 of 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world from process 14 of 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world from process 31 of 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world from process 19 of 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world from process 17 of 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world from process 26 of 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world from process 29 of 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world from process 9 of 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world from process 30 of 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world from process 2 of 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world from process 23 of 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world from process 3 of 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world from process 15 of 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world from process 28 of 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21615] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07409] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17099] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21606] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14233] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17098] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17092] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14230] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17092] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17097] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17092] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17096] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17092] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21617] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07415] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07414] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21606] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07406] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07406] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07413] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14237] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07406] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07406] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21613] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14230] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17101] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17102] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17100] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21606] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14234] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14235] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14230] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17092] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14230] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17103] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17092] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17092] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv2:17092] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07412] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07408] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07411] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14238] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21616] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21614] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14236] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07406] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07406] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14239] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21606] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21606] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14232] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14230] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07406] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14230] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14230] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07410] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv3:14230] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21612] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv1:07406] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21611] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21606] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster-srv0:21606] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 09-04-22 &#224; 14:10, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; This isn't really enough information for us to help you.  Can you
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; send all the information here:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Thanks.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; On Apr 21, 2009, at 10:34 AM, Luis Vitorio Cargnini wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Please someone can answer me which can be this problem ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;  daemon INVALID arch ffc91200
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; the debug output:
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; [[41704,1],14] node[4].name cluster-srv4 daemon INVALID arch  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ffc91200
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; [cluster-srv3:09684] [[41704,1],13] node[0].name cluster-srv0
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; daemon 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; [cluster-srv3:09684] [[41704,1],13] node[1].name cluster-srv1
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; daemon 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; [cluster-srv3:09684] [[41704,1],13] node[2].name cluster-srv2
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; daemon 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; [cluster-srv3:09684] [[41704,1],13] node[3].name cluster-srv3
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; daemon 3
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; [cluster-srv3:09684] [[41704,1],13] node[4].name cluster-srv4  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; ORTE_ERROR_LOG: A message is attempting to be sent to a process  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; whose
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; contact information is unknown in file rml_oob_send.c at line 105
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; &lt;PGP.sig&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Cisco Systems
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;PGP.sig&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p>
<br><p>
<p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9081/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9081/PGP.sig">Ceci est une signature &#233;lectronique PGP</a>
</ul>
<!-- attachment="PGP.sig" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9082.php">shan axida: "Re: [OMPI users] MPI_Bcast from OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="9080.php">Jeff Squyres: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<li><strong>In reply to:</strong> <a href="9036.php">Gus Correa: "Re: [OMPI users] few Problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9090.php">Jeff Squyres: "Re: [OMPI users] few Problems"</a>
<li><strong>Reply:</strong> <a href="9090.php">Jeff Squyres: "Re: [OMPI users] few Problems"</a>
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
