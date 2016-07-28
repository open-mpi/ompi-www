<?
$subject_val = "Re: [OMPI users] 1.3 hangs running 2 exes with different names (Ralph Castain)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 23 02:57:52 2009" -->
<!-- isoreceived="20090123075752" -->
<!-- sent="Fri, 23 Jan 2009 08:57:46 +0100" -->
<!-- isosent="20090123075746" -->
<!-- name="Geoffroy Pignot" -->
<!-- email="geopignot_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.3 hangs running 2 exes with different names (Ralph Castain)" -->
<!-- id="b4f9bf870901222357p637c66cv3ea806f280908df5_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] 1.3 hangs running 2 exes with different names (Ralph Castain)" -->
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
<strong>Subject:</strong> Re: [OMPI users] 1.3 hangs running 2 exes with different names (Ralph Castain)<br>
<strong>From:</strong> Geoffroy Pignot (<em>geopignot_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-23 02:57:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7772.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>Previous message:</strong> <a href="7770.php">Sangamesh B: "[OMPI users] Cluster with IB hosts and Ethernet hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7801.php">Ralph Castain: "Re: [OMPI users] 1.3 hangs running 2 exes with different names (Ralph Castain)"</a>
<li><strong>Reply:</strong> <a href="7801.php">Ralph Castain: "Re: [OMPI users] 1.3 hangs running 2 exes with different names (Ralph Castain)"</a>
<li><strong>Maybe reply:</strong> <a href="7803.php">Geoffroy Pignot: "Re: [OMPI users] 1.3 hangs running 2 exes with different names (Ralph Castain)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>I redid few tests with my hello world , here are my results.
<br>
<p>First of all my config :
<br>
configure --prefix=/tmp/openmpi-1.3 --libdir=/tmp/openmpi-1.3/lib64
<br>
--enable-heterogeneous . you will find attached my ompi_info -param all all
<br>
compil02 and compil03 are identical Rh43 64 bits nodes.
<br>
<p>*Test 1 : *
<br>
compil02% ls /tmp
<br>
a.out  openmpi-1.3
<br>
<p>compil03% ls /tmp
<br>
a.out  openmpi-1.3
<br>
<p>/tmp/openmpi-1.3/bin/mpirun -d -n 1 -host compil03 /tmp/a.out : -n 1 -host
<br>
compil02 /tmp/a.out
<br>
WORKS
<br>
<p>*Test 2 :*
<br>
compil02% mv a.out a.out_64 ; ls /tmp
<br>
a.out_64  openmpi-1.3
<br>
<p>compil03% ls /tmp
<br>
a.out  openmpi-1.3
<br>
<p>compil03% /tmp/openmpi-1.3/bin/mpirun -d -n 1 -host compil03 /tmp/a.out : -n
<br>
1 -host compil02 /tmp/a.out_64
<br>
[compil03:03774] procdir: /tmp/openmpi-sessions-gpignot_at_compil03_0/20717/0/0
<br>
[compil03:03774] jobdir: /tmp/openmpi-sessions-gpignot_at_compil03_0/20717/0
<br>
[compil03:03774] top: openmpi-sessions-gpignot_at_compil03_0
<br>
[compil03:03774] tmp: /tmp
<br>
[compil03:03774] mpirun: reset PATH:
<br>
/tmp/openmpi-1.3/bin:/u/gpignot/jobmgr/bin:.:/cgg/lv5000/jobmgr/bin:/cgg/lv5000/jobmgr/exec/Linux2.6-x86_64/PIV:/cgg/jobmgr/bin:/cgg/jobmgr/exec/Linux2.6-x86_64/PIV:/cgg/lv5000/bin:/cgg/lv5000/exec/Linux2.6-x86_64/PIV:/cgg/util:/bin:/usr/bin:/usr/sbin:/etc:/usr/etc:/usr/local/bin:/usr/bin/X11:/nfs/softs/TOOLS/bin:/nfs/netapp1/DEVTOOLS/bin:/nfs/netapp1/DEVTOOLS/free/Linux2.6-x86_64/bin:/cgg/localdev:/cgg/Applis/bin
<br>
[compil03:03774] mpirun: reset LD_LIBRARY_PATH:
<br>
/tmp/openmpi-1.3/lib64:/tmp/openmpi-1.3/lib64
<br>
[compil02:10684] procdir: /tmp/openmpi-sessions-gpignot_at_compil02_0/20717/0/1
<br>
[compil02:10684] jobdir: /tmp/openmpi-sessions-gpignot_at_compil02_0/20717/0
<br>
[compil02:10684] top: openmpi-sessions-gpignot_at_compil02_0
<br>
[compil02:10684] tmp: /tmp
<br>
[compil03:03774] [[20717,0],0] node[0].name compil03 daemon 0 arch ffc91200
<br>
[compil03:03774] [[20717,0],0] node[1].name compil02 daemon 1 arch ffc91200
<br>
[compil02:10684] [[20717,0],1] node[0].name compil03 daemon 0 arch ffc91200
<br>
[compil02:10684] [[20717,0],1] node[1].name compil02 daemon 1 arch ffc91200
<br>
[compil03:03774] Info: Setting up debugger process table for applications
<br>
&nbsp;&nbsp;MPIR_being_debugged = 0
<br>
&nbsp;&nbsp;MPIR_debug_state = 1
<br>
&nbsp;&nbsp;MPIR_partial_attach_ok = 1
<br>
&nbsp;&nbsp;MPIR_i_am_starter = 0
<br>
&nbsp;&nbsp;MPIR_proctable_size = 2
<br>
&nbsp;&nbsp;MPIR_proctable:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (0, compil03, /tmp/a.out, 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (1, compil02, /tmp/a.out_64, 0)
<br>
<p>HANGS : both exe have pid 0
<br>
*
<br>
Test 3 :*
<br>
<p>compil02% cp a.out_64 a.out ; ls /tmp
<br>
a.out_64  a.out  openmpi-1.3
<br>
<p>compil03% ls /tmp
<br>
a.out  openmpi-1.3
<br>
<p>[compil03:03777] procdir: /tmp/openmpi-sessions-gpignot_at_compil03_0/20626/0/0
<br>
[compil03:03777] jobdir: /tmp/openmpi-sessions-gpignot_at_compil03_0/20626/0
<br>
[compil03:03777] top: openmpi-sessions-gpignot_at_compil03_0
<br>
[compil03:03777] tmp: /tmp
<br>
[compil03:03777] mpirun: reset PATH:
<br>
/tmp/openmpi-1.3/bin:/u/gpignot/jobmgr/bin:.:/cgg/lv5000/jobmgr/bin:/cgg/lv5000/jobmgr/exec/Linux2.6-x86_64/PIV:/cgg/jobmgr/bin:/cgg/jobmgr/exec/Linux2.6-x86_64/PIV:/cgg/lv5000/bin:/cgg/lv5000/exec/Linux2.6-x86_64/PIV:/cgg/util:/bin:/usr/bin:/usr/sbin:/etc:/usr/etc:/usr/local/bin:/usr/bin/X11:/nfs/softs/TOOLS/bin:/nfs/netapp1/DEVTOOLS/bin:/nfs/netapp1/DEVTOOLS/free/Linux2.6-x86_64/bin:/cgg/localdev:/cgg/Applis/bin
<br>
[compil03:03777] mpirun: reset LD_LIBRARY_PATH:
<br>
/tmp/openmpi-1.3/lib64:/tmp/openmpi-1.3/lib64
<br>
[compil02:10786] procdir: /tmp/openmpi-sessions-gpignot_at_compil02_0/20626/0/1
<br>
[compil02:10786] jobdir: /tmp/openmpi-sessions-gpignot_at_compil02_0/20626/0
<br>
[compil02:10786] top: openmpi-sessions-gpignot_at_compil02_0
<br>
[compil02:10786] tmp: /tmp
<br>
[compil03:03777] [[20626,0],0] node[0].name compil03 daemon 0 arch ffc91200
<br>
[compil03:03777] [[20626,0],0] node[1].name compil02 daemon 1 arch ffc91200
<br>
[compil02:10786] [[20626,0],1] node[0].name compil03 daemon 0 arch ffc91200
<br>
[compil02:10786] [[20626,0],1] node[1].name compil02 daemon 1 arch ffc91200
<br>
[compil03:03777] Info: Setting up debugger process table for applications
<br>
&nbsp;&nbsp;MPIR_being_debugged = 0
<br>
&nbsp;&nbsp;MPIR_debug_state = 1
<br>
&nbsp;&nbsp;MPIR_partial_attach_ok = 1
<br>
&nbsp;&nbsp;MPIR_i_am_starter = 0
<br>
&nbsp;&nbsp;MPIR_proctable_size = 2
<br>
&nbsp;&nbsp;MPIR_proctable:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (0, compil03, /tmp/a.out, 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (1, compil02, /tmp/a.out_64, 10787)
<br>
[compil02:10787] procdir: /tmp/openmpi-sessions-gpignot_at_compil02_0/20626/1/1
<br>
[compil02:10787] jobdir: /tmp/openmpi-sessions-gpignot_at_compil02_0/20626/1
<br>
[compil02:10787] top: openmpi-sessions-gpignot_at_compil02_0
<br>
[compil02:10787] tmp: /tmp
<br>
[compil02:10787] [[20626,1],1] node[0].name compil03 daemon 0 arch ffc91200
<br>
[compil02:10787] [[20626,1],1] node[1].name compil02 daemon 1 arch ffc91200
<br>
<p>HANGS : go a little bit further but still one pid = 0
<br>
<p>*Test4:*
<br>
<p>compil02% ls /tmp
<br>
a.out_64  a.out  openmpi-1.3
<br>
<p>compil03% cp a.out a.out_64 ; ls /tmp
<br>
a.out_64  a.out  openmpi-1.3
<br>
<p>compil03% /tmp/openmpi-1.3/bin/mpirun -d -n 1 -host compil03 /tmp/a.out : -n
<br>
1 -host compil02 /tmp/a.out_64
<br>
[compil03:03789] procdir: /tmp/openmpi-sessions-gpignot_at_compil03_0/20638/0/0
<br>
[compil03:03789] jobdir: /tmp/openmpi-sessions-gpignot_at_compil03_0/20638/0
<br>
[compil03:03789] top: openmpi-sessions-gpignot_at_compil03_0
<br>
[compil03:03789] tmp: /tmp
<br>
[compil03:03789] mpirun: reset PATH:
<br>
/tmp/openmpi-1.3/bin:/u/gpignot/jobmgr/bin:.:/cgg/lv5000/jobmgr/bin:/cgg/lv5000/jobmgr/exec/Linux2.6-x86_64/PIV:/cgg/jobmgr/bin:/cgg/jobmgr/exec/Linux2.6-x86_64/PIV:/cgg/lv5000/bin:/cgg/lv5000/exec/Linux2.6-x86_64/PIV:/cgg/util:/bin:/usr/bin:/usr/sbin:/etc:/usr/etc:/usr/local/bin:/usr/bin/X11:/nfs/softs/TOOLS/bin:/nfs/netapp1/DEVTOOLS/bin:/nfs/netapp1/DEVTOOLS/free/Linux2.6-x86_64/bin:/cgg/localdev:/cgg/Applis/bin
<br>
[compil03:03789] mpirun: reset LD_LIBRARY_PATH:
<br>
/tmp/openmpi-1.3/lib64:/tmp/openmpi-1.3/lib64
<br>
[compil02:10937] procdir: /tmp/openmpi-sessions-gpignot_at_compil02_0/20638/0/1
<br>
[compil02:10937] jobdir: /tmp/openmpi-sessions-gpignot_at_compil02_0/20638/0
<br>
[compil02:10937] top: openmpi-sessions-gpignot_at_compil02_0
<br>
[compil02:10937] tmp: /tmp
<br>
[compil03:03789] [[20638,0],0] node[0].name compil03 daemon 0 arch ffc91200
<br>
[compil03:03789] [[20638,0],0] node[1].name compil02 daemon 1 arch ffc91200
<br>
[compil02:10937] [[20638,0],1] node[0].name compil03 daemon 0 arch ffc91200
<br>
[compil02:10937] [[20638,0],1] node[1].name compil02 daemon 1 arch ffc91200
<br>
[compil03:03789] Info: Setting up debugger process table for applications
<br>
&nbsp;&nbsp;MPIR_being_debugged = 0
<br>
&nbsp;&nbsp;MPIR_debug_state = 1
<br>
&nbsp;&nbsp;MPIR_partial_attach_ok = 1
<br>
&nbsp;&nbsp;MPIR_i_am_starter = 0
<br>
&nbsp;&nbsp;MPIR_proctable_size = 2
<br>
&nbsp;&nbsp;MPIR_proctable:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (0, compil03, /tmp/a.out, 3792)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (1, compil02, /tmp/a.out_64, 10938)
<br>
[compil03:03792] procdir: /tmp/openmpi-sessions-gpignot_at_compil03_0/20638/1/0
<br>
[compil03:03792] jobdir: /tmp/openmpi-sessions-gpignot_at_compil03_0/20638/1
<br>
[compil03:03792] top: openmpi-sessions-gpignot_at_compil03_0
<br>
[compil03:03792] tmp: /tmp
<br>
[compil03:03792] [[20638,1],0] node[0].name compil03 daemon 0 arch ffc91200
<br>
[compil03:03792] [[20638,1],0] node[1].name compil02 daemon 1 arch ffc91200
<br>
[compil02:10938] procdir: /tmp/openmpi-sessions-gpignot_at_compil02_0/20638/1/1
<br>
[compil02:10938] jobdir: /tmp/openmpi-sessions-gpignot_at_compil02_0/20638/1
<br>
[compil02:10938] top: openmpi-sessions-gpignot_at_compil02_0
<br>
[compil02:10938] tmp: /tmp
<br>
[compil02:10938] [[20638,1],1] node[0].name compil03 daemon 0 arch ffc91200
<br>
[compil02:10938] [[20638,1],1] node[1].name compil02 daemon 1 arch ffc91200
<br>
Hello world from process 0 of 2
<br>
Hello world from process 1 of 2
<br>
[compil03:03792] sess_dir_finalize: proc session dir not empty - leaving
<br>
[compil02:10938] sess_dir_finalize: proc session dir not empty - leaving
<br>
[compil03:03789] sess_dir_finalize: proc session dir not empty - leaving
<br>
[compil02:10937] sess_dir_finalize: proc session dir not empty - leaving
<br>
[compil03:03789] sess_dir_finalize: job session dir not empty - leaving
<br>
[compil02:10937] sess_dir_finalize: job session dir not empty - leaving
<br>
[compil03:03789] sess_dir_finalize: proc session dir not empty - leaving
<br>
orterun: exiting with status 0
<br>
<p>WORKS PERFECTLY
<br>
<p><p>I dont understand exactly what is going on , but I am not sure that this
<br>
behavoiur is considered as normal
<br>
<p>Thanks in advance for your comments
<br>
<p>Geoffroy
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7771/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7771/geoffroy_ompi_info">geoffroy_ompi_info</a>
</ul>
<!-- attachment="geoffroy_ompi_info" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7772.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>Previous message:</strong> <a href="7770.php">Sangamesh B: "[OMPI users] Cluster with IB hosts and Ethernet hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7801.php">Ralph Castain: "Re: [OMPI users] 1.3 hangs running 2 exes with different names (Ralph Castain)"</a>
<li><strong>Reply:</strong> <a href="7801.php">Ralph Castain: "Re: [OMPI users] 1.3 hangs running 2 exes with different names (Ralph Castain)"</a>
<li><strong>Maybe reply:</strong> <a href="7803.php">Geoffroy Pignot: "Re: [OMPI users] 1.3 hangs running 2 exes with different names (Ralph Castain)"</a>
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
