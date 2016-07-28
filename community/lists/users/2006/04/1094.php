<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 19 14:02:05 2006" -->
<!-- isoreceived="20060419180205" -->
<!-- sent="Wed, 19 Apr 2006 20:02:04 +0200" -->
<!-- isosent="20060419180204" -->
<!-- name="Javier Fernandez Baldomero" -->
<!-- email="javier_at_[hidden]" -->
<!-- subject="[OMPI users] how to diagnose mpirun problem" -->
<!-- id="44467B1C.7080305_at_atc.ugr.es" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Javier Fernandez Baldomero (<em>javier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-19 14:02:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1095.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open-MPI and TCP port range"</a>
<li><strong>Previous message:</strong> <a href="1093.php">Laurent.POREZ_at_[hidden]: "[OMPI users] Open-MPI and TCP port range"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Probably our cluster is misconfigured, but I'm not smart enough to detect which 
<br>
is the problem. I am starting to use OpenMPI, I have used LAM/MPI in the past. I 
<br>
realize this is a problem of my cluster, not of OpenMPI. I would be grateful for 
<br>
any suggestion you could offer.
<br>
<p>LAM/MPI works fine in this same cluster. And my problem only shows up when I try 
<br>
to use the headed cluster node _and_ another one with OpenMPI. No problem if I 
<br>
use just 1 node (headed or not), or if I use two headless nodes.
<br>
<p>My sys-admin would be willing to help me but I should tell him what to check. 
<br>
Since LAM/MPI is working fine and I could easily avoid using the headed node, I 
<br>
cannot really complaint, but I'd like to have OpenMPI working as nicely as LAM/MPI.
<br>
<p>I have been able to reduce my problem to this simple example, using the &quot;hello&quot; 
<br>
source code from the LAM distribution:
<br>
--------------------------------------
<br>
$ cat /etc/hosts
<br>
# Do not remove the following line, or various programs
<br>
# that require network functionality will fail.
<br>
127.0.0.1       localhost.localdomain   localhost
<br>
#The following was added by scance. Do not remove:
<br>
150.214.&lt;blah&gt;.&lt;blah&gt; clusteri
<br>
192.168.2.1 n0
<br>
192.168.2.2 n1
<br>
192.168.2.3 n2
<br>
192.168.2.4 n3
<br>
192.168.2.5 n4
<br>
192.168.2.6 n5
<br>
192.168.2.7 n6
<br>
192.168.2.8 n7
<br>
#End scance-section
<br>
<p>$ env
<br>
HOSTNAME=clusteri
<br>
...
<br>
LD_LIBRARY_PATH=/home/javier/openmpi-1.0.2/lib:
<br>
...
<br>
PATH=/home/javier/octave-2.1.73/bin:/home/javier/openmpi-1.0.2/bin:/opt/netbeans-4.1/bin:/usr/local/bin:/usr/bin:/usr/kerberos/bin:/usr/local/bin:/bin:/usr/bin:/usr/X11R6/bin:/opt/scali/bin:/opt/scali/sbin:/opt/scali/contrib/pbs/bin:/opt/scali/contrib/torque/bin:/home/javier/bin
<br>
...
<br>
<p>$ ls
<br>
cxxhello.cc  hello  hello.c  README
<br>
<p>$ which mpicc
<br>
~/openmpi-1.0.2/bin/mpicc
<br>
<p>$ mpicc -o hello hello.c
<br>
$ ldd hello
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi.so.0 =&gt; /home/javier/openmpi-1.0.2/lib/libmpi.so.0 (0x00849000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;liborte.so.0 =&gt; /home/javier/openmpi-1.0.2/lib/liborte.so.0 (0x00b07000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopal.so.0 =&gt; /home/javier/openmpi-1.0.2/lib/libopal.so.0 
<br>
(0x00d27000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib/libutil.so.1 (0x009f4000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib/libnsl.so.1 (0x00111000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib/libdl.so.2 (0x002b4000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib/tls/libm.so.6 (0x0028f000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib/tls/libpthread.so.0 (0x002ba000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib/tls/libc.so.6 (0x00164000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib/ld-linux.so.2 (0x00147000)
<br>
<p>$ which mpirun
<br>
~/openmpi-1.0.2/bin/mpirun
<br>
$ mpirun -c 2 -H n0 hello
<br>
Hello, world!  I am 0 of 2
<br>
Hello, world!  I am 1 of 2
<br>
$ mpirun -c 2 -H clusteri hello
<br>
Hello, world!  I am 0 of 2
<br>
Hello, world!  I am 1 of 2
<br>
$ mpirun -c 2 -H n1 hello
<br>
Hello, world!  I am 1 of 2
<br>
Hello, world!  I am 0 of 2
<br>
$ mpirun -c 2 -H n2 hello
<br>
Hello, world!  I am 0 of 2
<br>
Hello, world!  I am 1 of 2
<br>
$ mpirun -c 2 -H n1,n2 hello
<br>
Hello, world!  I am 0 of 2
<br>
Hello, world!  I am 1 of 2
<br>
<p>$ mpirun -c 2 -H n0,n2 hello
<br>
^C
<br>
mpirun: killing job...
<br>
$ mpirun -c 2 -H clusteri,n2 hello
<br>
^C
<br>
mpirun: killing job...
<br>
$ mpirun -c 2 -H clusteri,n1 hello
<br>
^C
<br>
mpirun: killing job...
<br>
$ mpirun -c 2 -H n0,n1 hello
<br>
^C
<br>
mpirun: killing job...
<br>
--------------------------------------
<br>
<p>I must press ^C since the mpirun command gets blocked.
<br>
I have compared the -debug outputs and seem rather similar until this point:
<br>
--------------------------------------
<br>
$ mpirun -d -c 2 -H n0,n1 hello
<br>
...
<br>
[clusteri:11701] connect_uni: contact info read
<br>
[clusteri:11701] connect_uni: connection not allowed
<br>
[clusteri:11701] [0,0,0] setting up session dir with
<br>
...
<br>
<p>[clusteri:11701] pls:rsh: final template argv:
<br>
[clusteri:11701] pls:rsh:     /usr/bin/ssh &lt;template&gt; orted --debug --bootproxy
<br>
1 --name &lt;template&gt; --num_procs 3 --vpid_start 0 --nodename &lt;template&gt; 
<br>
--universe javier_at_clusteri:default-universe-11701 --nsreplica 
<br>
&quot;0.0.0;tcp://150.214.&lt;&gt;.&lt;&gt;:52220;tcp://192.168.2.1:52220&quot; --gprreplica 
<br>
&quot;0.0.0;tcp://150.214.&lt;&gt;.&lt;&gt;:52220;tcp://192.168.2.1:52220&quot; --mpi-call-yield 0
<br>
[clusteri:11701] pls:rsh: launching on node n0
<br>
[clusteri:11701] pls:rsh: not oversubscribed -- setting mpi_yield_when_idle to 
<br>
0[clusteri:11701] pls:rsh: n0 is a LOCAL node
<br>
[clusteri:11701] pls:rsh: changing to directory /home/javier
<br>
[clusteri:11701] pls:rsh: executing: orted --debug --bootproxy 1 --name 0.0.1 
<br>
--num_procs 3 --vpid_start 0 --nodename n0 --universe 
<br>
javier_at_clusteri:default-universe-11701 --nsreplica 
<br>
&quot;0.0.0;tcp://150.214.&lt;&gt;.&lt;&gt;:52220;tcp://192.168.2.1:52220&quot; --gprreplica 
<br>
&quot;0.0.0;tcp://150.214.&lt;&gt;.&lt;&gt;:52220;tcp://192.168.2.1:52220&quot; --mpi-call-yield 0
<br>
<p>[clusteri:11703] [0,0,1] setting up session dir with
<br>
...
<br>
<p>[clusteri:11701] pls:rsh: launching on node n1
<br>
[clusteri:11701] pls:rsh: not oversubscribed -- setting mpi_yield_when_idle to 
<br>
0[clusteri:11701] pls:rsh: n1 is a REMOTE node
<br>
[clusteri:11701] pls:rsh: executing: /usr/bin/ssh n1 orted --debug --bootproxy 1 
<br>
--name 0.0.2 --num_procs 3 --vpid_start 0 --nodename n1 --universe 
<br>
javier_at_clusteri:default-universe-11701 --nsreplica 
<br>
&quot;0.0.0;tcp://150.214.&lt;&gt;.&lt;&gt;:52220;tcp://192.168.2.1:52220&quot; --gprreplica 
<br>
&quot;0.0.0;tcp://150.214.&lt;&gt;.&lt;&gt;:52220;tcp://192.168.2.1:52220&quot; --mpi-call-yield 0
<br>
<p>[n1:08763] [0,0,2] setting up session dir with
<br>
<p>...
<br>
[clusteri:11710] [0,1,0] setting up session dir with
<br>
...
<br>
[n1:08789] [0,1,1] setting up session dir with
<br>
...
<br>
[clusteri:11701] spawn: in job_state_callback(jobid = 1, state = 0x3)
<br>
[clusteri:11701] Info: Setting up debugger process table for applications
<br>
[clusteri:11703] orted: job_state_callback(jobid = 1, state = 158080832)
<br>
&nbsp;&nbsp;&nbsp;MPIR_being_debugged = 0
<br>
[n1:08763] orted: job_state_callback(jobid = 1, state = 144698272)
<br>
&nbsp;&nbsp;&nbsp;MPIR_debug_gate = 0
<br>
&nbsp;&nbsp;&nbsp;MPIR_debug_state = 1
<br>
&nbsp;&nbsp;&nbsp;MPIR_acquired_pre_main = 0
<br>
&nbsp;&nbsp;&nbsp;MPIR_i_am_starter = 0
<br>
&nbsp;&nbsp;&nbsp;MPIR_proctable_size = 2
<br>
&nbsp;&nbsp;&nbsp;MPIR_proctable:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (0, n1, hello, 8789)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (1, n0, hello, 11710)
<br>
&lt;blocked here&gt;
<br>
--------------------------------------
<br>
<p>I can login to n1 and it's all the same: blocked if I use the headed and one 
<br>
headless. Will I send the complete -debug output? For both the working and 
<br>
blocking cases? Is there a checklist I could follow to look for 
<br>
misconfigurations in our cluster?
<br>
<p>Thanks a lot for your help.
<br>
<p>-javier
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1095.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open-MPI and TCP port range"</a>
<li><strong>Previous message:</strong> <a href="1093.php">Laurent.POREZ_at_[hidden]: "[OMPI users] Open-MPI and TCP port range"</a>
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
