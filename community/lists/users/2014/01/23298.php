<?
$subject_val = "[OMPI users] some problems with openmpi-1.9a1r30100";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  1 04:48:51 2014" -->
<!-- isoreceived="20140101094851" -->
<!-- sent="Wed, 1 Jan 2014 10:48:08 +0100 (CET)" -->
<!-- isosent="20140101094808" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] some problems with openmpi-1.9a1r30100" -->
<!-- id="201401010948.s019m734010487_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] some problems with openmpi-1.9a1r30100<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-01 04:48:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23299.php">Ralph Castain: "Re: [OMPI users] Solaris sigbus error in ompi_info"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/12/23297.php">Johanna Schauer: "Re: [OMPI users] Basic question on compiling fortran with windows computer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23299.php">Ralph Castain: "Re: [OMPI users] Solaris sigbus error in ompi_info"</a>
<li><strong>Reply:</strong> <a href="23299.php">Ralph Castain: "Re: [OMPI users] Solaris sigbus error in ompi_info"</a>
<li><strong>Reply:</strong> <a href="23300.php">Ralph Castain: "Re: [OMPI users] some problems with openmpi-1.9a1r30100"</a>
<li><strong>Reply:</strong> <a href="23301.php">Ralph Castain: "Re: [OMPI users] Hetero apps just hang"</a>
<li><strong>Reply:</strong> <a href="23302.php">Ralph Castain: "Re: [OMPI users] Problem on big endian machines"</a>
<li><strong>Reply:</strong> <a href="23303.php">Ralph Castain: "Re: [OMPI users] rankfile issues"</a>
<li><strong>Reply:</strong> <a href="23304.php">Ralph Castain: "Re: [OMPI users] some problems with openmpi-1.9a1r30100"</a>
<li><strong>Reply:</strong> <a href="23305.php">Ralph Castain: "Re: [OMPI users] some problems with openmpi-1.9a1r30100"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>yesterday I installed openmpi-1.9a1r30100 on &quot;Solaris 10 x86_64&quot;,
<br>
&quot;Solaris 10 Sparc&quot;, and &quot;openSUSE Linux 12.1 x86_64&quot; with Sun C
<br>
5.12. First of all the good news: &quot;configure&quot;, &quot;make&quot;, &quot;make
<br>
install&quot;, and &quot;make check&quot; completed without errors, i.e., &quot;make
<br>
check&quot; doesn't produce a &quot;SIGBUS Error&quot; on &quot;Solaris Sparc&quot; and
<br>
and doesn't block in or after &quot;opal_path_nfs&quot; on Linux any longer.
<br>
I reported both problems before. Thank you very much to everybody
<br>
who solved these problems.
<br>
<p>Unfortunately I still get a &quot;SIGBUS Error&quot; on &quot;Solaris Sparc&quot;
<br>
for &quot;ompi_info -a&quot;.
<br>
<p>tyr openmpi-1.9 99 ompi_info | grep MPI:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.9a1r30100
<br>
tyr openmpi-1.9 100 ompi_info -a |&amp; grep Signal
<br>
[tyr:09699] Signal: Bus Error (10)
<br>
[tyr:09699] Signal code: Invalid address alignment (1)
<br>
.../openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:0x1321b8
<br>
&nbsp;&nbsp;[ Signal 2099900312 (?)]
<br>
Bus error 
<br>
tyr openmpi-1.9 101 
<br>
<p><p>I can compile and run a small MPI program without &quot;SIGBUS Error&quot;.
<br>
Jeff, thank you very much for solving this problem.
<br>
<p>tyr small_prog 110 mpicc init_finalize.c 
<br>
tyr small_prog 111 mpiexec -np 1 a.out 
<br>
Hello!
<br>
tyr small_prog 112 
<br>
<p><p>&quot;make install&quot; didn't install the Javadoc documentation for the
<br>
new Java interface. Is it necessary to install it in a separate
<br>
step?
<br>
<p>tyr small_prog 118 ls -l /usr/local/openmpi-1.9_64_cc/share/
<br>
total 6
<br>
drwxr-xr-x 5 root root  512 Dec 31 12:03 man
<br>
drwxr-xr-x 3 root root 3584 Dec 31 12:05 openmpi
<br>
drwxr-xr-x 3 root root  512 Dec 31 12:04 vampirtrace
<br>
tyr small_prog 119 
<br>
<p><p>In the past I could run a small program in a real heterogeneous
<br>
system with little (sunpc1, linpc1) and big endian (rs0, tyr)
<br>
machines.
<br>
<p>tyr small_prog 101 ompi_info | grep MPI:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.6.6a1r29175
<br>
tyr small_prog 102 mpiexec -np 3 -host rs0,sunpc1,linpc1 rank_size
<br>
I'm process 1 of 3 available processes running on sunpc1.
<br>
MPI standard 2.1 is supported.
<br>
I'm process 0 of 3 available processes running on rs0.informatik.hs-fulda.de.
<br>
MPI standard 2.1 is supported.
<br>
I'm process 2 of 3 available processes running on linpc1.
<br>
MPI standard 2.1 is supported.
<br>
tyr small_prog 103 
<br>
<p><p>Now I get no output at all.
<br>
<p>tyr small_prog 130 ompi_info | grep MPI:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.9a1r30100
<br>
tyr small_prog 131 mpiexec -np 3 -host rs0,sunpc1,linpc1 rank_size
<br>
tyr small_prog 132 mpiexec -np 3 -host rs0,sunpc1,linpc1 \
<br>
&nbsp;&nbsp;--hetero-nodes --hetero-apps rank_size
<br>
tyr small_prog 133
<br>
<p><p>Perhaps this behaviour is intended, because Open MPI doesn't
<br>
support little and big endian machines in the same cluster or
<br>
virtual computer (I know only LAM-MPI which works in such an
<br>
environment). On the other side: Does it make sense to run
<br>
the command without any output, if it doesn't work (even if
<br>
&quot;mpiexec&quot; returns &quot;1&quot;)?
<br>
<p>Nevertheless I have another problem with my small program.
<br>
<p>tyr small_prog 158 uname -p
<br>
sparc
<br>
tyr small_prog 159 ssh rs0 uname -p
<br>
sparc
<br>
<p>tyr small_prog 160 mpiexec rank_size
<br>
I'm process 0 of 1 available processes running on tyr.informatik.hs-fulda.de.
<br>
MPI standard 2.2 is supported.
<br>
<p>tyr small_prog 161 ssh rs0 mpiexec rank_size
<br>
I'm process 0 of 1 available processes running on rs0.informatik.hs-fulda.de.
<br>
MPI standard 2.2 is supported.
<br>
<p>tyr small_prog 162 mpiexec -np 2 -host tyr,rs0 rank_size
<br>
tyr small_prog 163 echo $status
<br>
1
<br>
tyr small_prog 164 
<br>
<p><p>The command works as expected on little endian machines.
<br>
<p>linpc1 small_prog 93 mpiexec -np 2 -host linpc1,sunpc1 rank_size
<br>
I'm process 0 of 2 available processes running on linpc1.
<br>
MPI standard 2.2 is supported.
<br>
I'm process 1 of 2 available processes running on sunpc1.
<br>
MPI standard 2.2 is supported.
<br>
linpc1 small_prog 94 
<br>
<p><p>Next I tried process binding.
<br>
<p>rf_linpc:
<br>
---------
<br>
rank 0=linpc1 slot=0:0,1;1:0,1
<br>
<p><p>rf_linpc_linpc:
<br>
---------------
<br>
<p>rank 0=linpc0 slot=0:0-1;1:0-1
<br>
rank 1=linpc1 slot=0:0-1
<br>
rank 2=linpc1 slot=1:0
<br>
rank 3=linpc1 slot=1:1
<br>
<p><p>rf_linpc_linpc_comma:
<br>
---------------------
<br>
<p>rank 0=linpc0 slot=0:0,1;1:0,1
<br>
rank 1=linpc1 slot=0:0,1
<br>
rank 2=linpc1 slot=1:0
<br>
rank 3=linpc1 slot=1:1
<br>
<p><p><p>linpc1 openmpi_1.7.x_or_newer 103 mpiexec -report-bindings -np 1 \
<br>
&nbsp;&nbsp;-rf rf_linpc hostname
<br>
[linpc1:08461] MCW rank 0 bound to socket 0[core 0[hwt 0]],
<br>
&nbsp;&nbsp;socket 0[core 1[hwt 0]], socket 1[core 2[hwt 0]],
<br>
&nbsp;&nbsp;socket 1[core 3[hwt 0]]: [B/B][B/B]
<br>
linpc1
<br>
linpc1 openmpi_1.7.x_or_newer 104 
<br>
<p><p>That's the output which I expected, but I don't get the expected
<br>
output for the following commands.
<br>
<p><p>linpc1 openmpi_1.7.x_or_newer 105 mpiexec -report-bindings -np 4 \
<br>
&nbsp;&nbsp;-rf rf_linpc_linpc hostname
<br>
--------------------------------------------------------------------------
<br>
There are not enough slots available in the system to satisfy the 2 slots 
<br>
that were requested by the application:
<br>
&nbsp;&nbsp;hostname
<br>
<p>Either request fewer slots for your application, or make more slots available
<br>
for use.
<br>
--------------------------------------------------------------------------
<br>
linpc1 openmpi_1.7.x_or_newer 106 
<br>
<p><p>linpc1 openmpi_1.7.x_or_newer 110 mpiexec -report-bindings -np 4 \
<br>
&nbsp;&nbsp;-rf rf_linpc_linpc_comma hostname
<br>
--------------------------------------------------------------------------
<br>
There are not enough slots available in the system to satisfy the 2 slots 
<br>
that were requested by the application:
<br>
&nbsp;&nbsp;hostname
<br>
<p>Either request fewer slots for your application, or make more slots available
<br>
for use.
<br>
--------------------------------------------------------------------------
<br>
linpc1 openmpi_1.7.x_or_newer 111 
<br>
<p><p>It works well in Open MPI 1.6.x (similar rank file, but using &quot;,&quot; to
<br>
separate sockets due to a different syntax).
<br>
<p>linpc1 openmpi_1.6.x 109 mpiexec -report-bindings -np 4 \
<br>
&nbsp;&nbsp;-rf rf_linpc_linpc hostname
<br>
[linpc1:08675] MCW rank 1 bound to socket 0[core 0-1]:
<br>
&nbsp;&nbsp;[B B][. .] (slot list 0:0-1)
<br>
[linpc1:08675] MCW rank 2 bound to socket 1[core 0]:
<br>
&nbsp;&nbsp;[. .][B .] (slot list 1:0)
<br>
[linpc1:08675] MCW rank 3 bound to socket 1[core 1]:
<br>
&nbsp;&nbsp;[. .][. B] (slot list 1:1)
<br>
linpc1
<br>
linpc1
<br>
[linpc0:00677] MCW rank 0 bound to socket 0[core 0-1]
<br>
&nbsp;&nbsp;socket 1[core 0-1]: [B B][B B] (slot list 0:0-1,1:0-1)
<br>
linpc0
<br>
linpc1
<br>
linpc1 openmpi_1.6.x 110 
<br>
<p><p>Open MPI 1.6.x supports even little and big endian machines for
<br>
this simple command.
<br>
<p>linpc1 openmpi_1.6.x 112 ompi_info | grep MPI:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.6.6a1r29175
<br>
linpc1 openmpi_1.6.x 113 mpiexec -report-bindings -np 4 \
<br>
&nbsp;&nbsp;-rf rf_linpc_sunpc_tyr hostname
<br>
[linpc1:08697] MCW rank 1 bound to socket 0[core 0-1]:
<br>
&nbsp;&nbsp;[B B][. .] (slot list 0:0-1)
<br>
[linpc0:00758] MCW rank 0 bound to socket 0[core 0-1]
<br>
&nbsp;&nbsp;socket 1[core 0-1]: [B B][B B] (slot list 0:0-1,1:0-1)
<br>
linpc0
<br>
linpc1
<br>
tyr.informatik.hs-fulda.de
<br>
[tyr.informatik.hs-fulda.de:10286] MCW rank 3 bound to
<br>
&nbsp;&nbsp;socket 1[core 0]: [.][B] (slot list 1:0)
<br>
[sunpc1:21136] MCW rank 2 bound to socket 1[core 0]:
<br>
&nbsp;&nbsp;[. .][B .] (slot list 1:0)
<br>
sunpc1
<br>
linpc1 openmpi_1.6.x 114 
<br>
<p><p><p>Option &quot;-bycore&quot; isn't available any longer. Is this intended?
<br>
<p>linpc1 openmpi_1.7.x_or_newer 111 mpiexec -report-bindings -np 4 \
<br>
&nbsp;&nbsp;-host linpc0,linpc1,sunpc0,sunpc1 -cpus-per-proc 4 -bycore \
<br>
&nbsp;&nbsp;-bind-to-core hostname
<br>
mpiexec: Error: unknown option &quot;-bycore&quot;
<br>
Type 'mpiexec --help' for usage.
<br>
linpc1 openmpi_1.7.x_or_newer 112 
<br>
<p><p>linpc1 openmpi_1.7.x_or_newer 112 mpiexec -report-bindings \
<br>
&nbsp;&nbsp;-np 4 -host linpc0,linpc1,sunpc0,sunpc1 -cpus-per-proc 4 \
<br>
&nbsp;&nbsp;-bind-to-core hostname
<br>
--------------------------------------------------------------------------
<br>
A request was made to bind to that would result in binding more
<br>
processes than cpus on a resource:
<br>
<p>&nbsp;&nbsp;&nbsp;Bind to:         CORE
<br>
&nbsp;&nbsp;&nbsp;Node:            linpc0
<br>
&nbsp;&nbsp;&nbsp;#processes:  2
<br>
&nbsp;&nbsp;&nbsp;#cpus:          1
<br>
<p>You can override this protection by adding the &quot;overload-allowed&quot;
<br>
option to your binding directive.
<br>
--------------------------------------------------------------------------
<br>
linpc1 openmpi_1.7.x_or_newer 113 
<br>
<p><p><p>It worked with Open MPI 1.6.x.
<br>
<p>linpc1 openmpi_1.6.x 105 mpiexec -report-bindings -np 4 \
<br>
&nbsp;&nbsp;-host linpc0,linpc1,sunpc0,sunpc1 -cpus-per-proc 4 -bycore \
<br>
&nbsp;&nbsp;-bind-to-core hostname
<br>
[linpc1:09465] MCW rank 1 bound to socket 0[core 0-1] socket 1[core 0-1]:
<br>
&nbsp;&nbsp;[B B][B B]
<br>
linpc1
<br>
[linpc0:01036] MCW rank 0 bound to socket 0[core 0-1] socket 1[core 0-1]:
<br>
&nbsp;&nbsp;[B B][B B]
<br>
linpc0
<br>
[sunpc0:03796] MCW rank 2 bound to socket 0[core 0-1] socket 1[core 0-1]:
<br>
&nbsp;&nbsp;[B B][B B]
<br>
sunpc0
<br>
[sunpc1:21335] MCW rank 3 bound to socket 0[core 0-1] socket 1[core 0-1]:
<br>
&nbsp;&nbsp;[B B][B B]
<br>
sunpc1
<br>
linpc1 openmpi_1.6.x 106 
<br>
<p><p>Have you changed the syntax once more so that I can get the
<br>
expected bindings with different command line options or is it
<br>
a problem in Open MPI 1.9.x?
<br>
<p><p>I have similar problems with Java.
<br>
<p>tyr java 197 mpiexec -np 4 java BcastIntArrayMain
<br>
<p>Process 0 running on tyr.informatik.hs-fulda.de.
<br>
&nbsp;&nbsp;intValues[0]: 0  intValues[1]: 11  intValues[2]: 22  intValues[3]: 33
<br>
<p>Process 1 running on tyr.informatik.hs-fulda.de.
<br>
&nbsp;&nbsp;intValues[0]: 0  intValues[1]: 11  intValues[2]: 22  intValues[3]: 33
<br>
<p>Process 2 running on tyr.informatik.hs-fulda.de.
<br>
&nbsp;&nbsp;intValues[0]: 0  intValues[1]: 11  intValues[2]: 22  intValues[3]: 33
<br>
<p>Process 3 running on tyr.informatik.hs-fulda.de.
<br>
&nbsp;&nbsp;intValues[0]: 0  intValues[1]: 11  intValues[2]: 22  intValues[3]: 33
<br>
<p><p>tyr java 198 mpiexec -np 4 -host rs0,tyr java BcastIntArrayMain
<br>
tyr java 199 echo $status
<br>
1
<br>
tyr java 200 
<br>
<p><p>Why? Both machines are big endian machines. By the way, I have similar
<br>
problems with openmpi-1.7.x. Java isn't available at the moment as I
<br>
reported before.
<br>
<p>tyr small_prog 103 ompi_info | grep MPI:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.7.4rc2r30094
<br>
<p>tyr small_prog 104 ompi_info -a |&amp; grep Signal
<br>
[tyr:10441] Signal: Bus Error (10)
<br>
[tyr:10441] Signal code: Invalid address alignment (1)
<br>
.../openmpi-1.7.4_64_cc/lib64/libopen-pal.so.6.1.0:0x137af8
<br>
&nbsp;&nbsp;[ Signal 2099922960 (?)]
<br>
Bus error 
<br>
tyr small_prog 105 
<br>
<p><p>tyr small_prog 105 mpicc init_finalize.c 
<br>
tyr small_prog 106 mpiexec -np 1 a.out 
<br>
Hello!
<br>
tyr small_prog 107 
<br>
<p><p>tyr small_prog 107 mpiexec -np 3 -host rs0,sunpc1,linpc1 rank_size
<br>
tyr small_prog 108 mpiexec -np 3 -host rs0,sunpc1,linpc1 \
<br>
?   --hetero-nodes --hetero-apps rank_size
<br>
tyr small_prog 109 
<br>
<p>and so on
<br>
<p><p><p>I'm sorry that I still cause trouble, but on the other side I would
<br>
be very grateful, if somebody can solve all problems. Thank you very
<br>
much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23299.php">Ralph Castain: "Re: [OMPI users] Solaris sigbus error in ompi_info"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/12/23297.php">Johanna Schauer: "Re: [OMPI users] Basic question on compiling fortran with windows computer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23299.php">Ralph Castain: "Re: [OMPI users] Solaris sigbus error in ompi_info"</a>
<li><strong>Reply:</strong> <a href="23299.php">Ralph Castain: "Re: [OMPI users] Solaris sigbus error in ompi_info"</a>
<li><strong>Reply:</strong> <a href="23300.php">Ralph Castain: "Re: [OMPI users] some problems with openmpi-1.9a1r30100"</a>
<li><strong>Reply:</strong> <a href="23301.php">Ralph Castain: "Re: [OMPI users] Hetero apps just hang"</a>
<li><strong>Reply:</strong> <a href="23302.php">Ralph Castain: "Re: [OMPI users] Problem on big endian machines"</a>
<li><strong>Reply:</strong> <a href="23303.php">Ralph Castain: "Re: [OMPI users] rankfile issues"</a>
<li><strong>Reply:</strong> <a href="23304.php">Ralph Castain: "Re: [OMPI users] some problems with openmpi-1.9a1r30100"</a>
<li><strong>Reply:</strong> <a href="23305.php">Ralph Castain: "Re: [OMPI users] some problems with openmpi-1.9a1r30100"</a>
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
