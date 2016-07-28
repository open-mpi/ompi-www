<?
$subject_val = "[OMPI users] problem with groups and communicators in openmpi-1.6.4rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 19 04:34:41 2013" -->
<!-- isoreceived="20130119093441" -->
<!-- sent="Sat, 19 Jan 2013 10:27:30 +0100 (CET)" -->
<!-- isosent="20130119092730" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] problem with groups and communicators in openmpi-1.6.4rc2" -->
<!-- id="201301190927.r0J9RUVQ023145_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] problem with groups and communicators in openmpi-1.6.4rc2<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-19 04:27:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21157.php">Siegmar Gross: "[OMPI users] problem with rankfile in openmpi-1.6.4rc2"</a>
<li><strong>Previous message:</strong> <a href="21155.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with mpirun for java codes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21159.php">Ralph Castain: "Re: [OMPI users] problem with groups and communicators in openmpi-1.6.4rc2"</a>
<li><strong>Reply:</strong> <a href="21159.php">Ralph Castain: "Re: [OMPI users] problem with groups and communicators in openmpi-1.6.4rc2"</a>
<li><strong>Maybe reply:</strong> <a href="21170.php">Siegmar Gross: "Re: [OMPI users] problem with groups and communicators in openmpi-1.6.4rc2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I have installed openmpi-1.6.4rc2 and have the following problem.
<br>
<p>tyr strided_vector 110 ompi_info | grep &quot;Open MPI:&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.6.4rc2r27861
<br>
tyr strided_vector 111 mpicc -showme
<br>
gcc -I/usr/local/openmpi-1.6.4_64_gcc/include -fexceptions -pthread -m64 
<br>
-L/usr/local/openmpi-1.6.4_64_gcc/lib64 -lmpi -lm -lkstat -llgrp -lsocket -lnsl 
<br>
-lrt -lm
<br>
<p><p>tyr strided_vector 112 mpiexec -np 4 data_type_4
<br>
Process 2 of 4 running on tyr.informatik.hs-fulda.de
<br>
Process 0 of 4 running on tyr.informatik.hs-fulda.de
<br>
Process 3 of 4 running on tyr.informatik.hs-fulda.de
<br>
Process 1 of 4 running on tyr.informatik.hs-fulda.de
<br>
<p>original matrix:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1     2     3     4     5     6     7     8     9    10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;11    12    13    14    15    16    17    18    19    20
<br>
&nbsp;&nbsp;&nbsp;&nbsp;21    22    23    24    25    26    27    28    29    30
<br>
&nbsp;&nbsp;&nbsp;&nbsp;31    32    33    34    35    36    37    38    39    40
<br>
&nbsp;&nbsp;&nbsp;&nbsp;41    42    43    44    45    46    47    48    49    50
<br>
&nbsp;&nbsp;&nbsp;&nbsp;51    52    53    54    55    56    57    58    59    60
<br>
<p>result matrix:
<br>
&nbsp;&nbsp;elements are sqared in columns:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0   1   2   6   7
<br>
&nbsp;&nbsp;elements are multiplied with 2 in columns:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3   4   5   8   9
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1     4     9     8    10    12    49    64    18    20
<br>
&nbsp;&nbsp;&nbsp;121   144   169    28    30    32   289   324    38    40
<br>
&nbsp;&nbsp;&nbsp;441   484   529    48    50    52   729   784    58    60
<br>
&nbsp;&nbsp;&nbsp;961  1024  1089    68    70    72  1369  1444    78    80
<br>
&nbsp;&nbsp;1681  1764  1849    88    90    92  2209  2304    98   100
<br>
&nbsp;&nbsp;2601  2704  2809   108   110   112  3249  3364   118   120
<br>
<p>Assertion failed: OPAL_OBJ_MAGIC_ID == ((opal_object_t *) (comm-&gt;c_remote_group)
<br>
)-&gt;obj_magic_id, file ../../openmpi-1.6.4rc2r27861/ompi/communicator/comm_init.c
<br>
, line 412
<br>
[tyr:18578] *** Process received signal ***
<br>
[tyr:18578] Signal: Abort (6)
<br>
[tyr:18578] Signal code:  (-1)
<br>
Assertion failed: OPAL_OBJ_MAGIC_ID == ((opal_object_t *) (comm-&gt;c_remote_group)
<br>
)-&gt;obj_magic_id, file ../../openmpi-1.6.4rc2r27861/ompi/communicator/comm_init.c
<br>
, line 412
<br>
/export2/prog/SunOS_sparc/openmpi-1.6.4_64_gcc/lib64/libmpi.so.1.0.7:opal_backtr
<br>
ace_print+0x20
<br>
[tyr:18580] *** Process received signal ***
<br>
/export2/prog/SunOS_sparc/openmpi-1.6.4_64_gcc/lib64/libmpi.so.1.0.7:0x2c1bc4
<br>
[tyr:18580] Signal: Abort (6)
<br>
[tyr:18580] Signal code:  (-1)
<br>
/lib/sparcv9/libc.so.1:0xd88a4
<br>
/lib/sparcv9/libc.so.1:0xcc418
<br>
/lib/sparcv9/libc.so.1:0xcc624
<br>
/lib/sparcv9/libc.so.1:__lwp_kill+0x8 [ Signal 6 (ABRT)]
<br>
/lib/sparcv9/libc.so.1:abort+0xd0
<br>
/lib/sparcv9/libc.so.1:_assert+0x74
<br>
/export2/prog/SunOS_sparc/openmpi-1.6.4_64_gcc/lib64/libmpi.so.1.0.7:0xa4c58
<br>
/export2/prog/SunOS_sparc/openmpi-1.6.4_64_gcc/lib64/libmpi.so.1.0.7:0xa2430
<br>
/export2/prog/SunOS_sparc/openmpi-1.6.4_64_gcc/lib64/libmpi.so.1.0.7:ompi_comm_f
<br>
inalize+0x168
<br>
/export2/prog/SunOS_sparc/openmpi-1.6.4_64_gcc/lib64/libmpi.so.1.0.7:ompi_mpi_fi
<br>
nalize+0xa60
<br>
/export2/prog/SunOS_sparc/openmpi-1.6.4_64_gcc/lib64/libmpi.so.1.0.7:MPI_Finaliz
<br>
e+0x90
<br>
/home/fd1026/SunOS/sparc/bin/data_type_4:main+0x588
<br>
/home/fd1026/SunOS/sparc/bin/data_type_4:_start+0x7c
<br>
[tyr:18578] *** End of error message ***
<br>
...
<br>
<p><p><p>Everything works fine with LAM-MPI (even in a heterogeneous environment
<br>
with little-endian and big-endian machines) so that it is probably an
<br>
error in Open MPI (but you never know).
<br>
<p><p>tyr strided_vector 125 mpicc -showme
<br>
gcc -I/usr/local/lam-6.5.9_64_gcc/include -L/usr/local/lam-6.5.9_64_gcc/lib 
<br>
-llamf77mpi -lmpi -llam -lsocket -lnsl 
<br>
tyr strided_vector 126 lamboot -v hosts.lam-mpi
<br>
<p>LAM 6.5.9/MPI 2 C++ - Indiana University
<br>
<p>Executing hboot on n0 (tyr.informatik.hs-fulda.de - 2 CPUs)...
<br>
Executing hboot on n1 (sunpc1.informatik.hs-fulda.de - 4 CPUs)...
<br>
topology done      
<br>
<p>tyr strided_vector 127 mpirun -v app_data_type_4.lam-mpi
<br>
22894 data_type_4 running on local
<br>
22895 data_type_4 running on n0 (o)
<br>
21998 data_type_4 running on n1
<br>
22896 data_type_4 running on n0 (o)
<br>
Process 1 of 4 running on tyr.informatik.hs-fulda.de
<br>
Process 3 of 4 running on tyr.informatik.hs-fulda.de
<br>
Process 2 of 4 running on sunpc1
<br>
Process 0 of 4 running on tyr.informatik.hs-fulda.de
<br>
<p>original matrix:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1     2     3     4     5     6     7     8     9    10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;11    12    13    14    15    16    17    18    19    20
<br>
&nbsp;&nbsp;&nbsp;&nbsp;21    22    23    24    25    26    27    28    29    30
<br>
&nbsp;&nbsp;&nbsp;&nbsp;31    32    33    34    35    36    37    38    39    40
<br>
&nbsp;&nbsp;&nbsp;&nbsp;41    42    43    44    45    46    47    48    49    50
<br>
&nbsp;&nbsp;&nbsp;&nbsp;51    52    53    54    55    56    57    58    59    60
<br>
<p>result matrix:
<br>
&nbsp;&nbsp;elements are sqared in columns:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0   1   2   6   7
<br>
&nbsp;&nbsp;elements are multiplied with 2 in columns:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3   4   5   8   9
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1     4     9     8    10    12    49    64    18    20
<br>
&nbsp;&nbsp;&nbsp;121   144   169    28    30    32   289   324    38    40
<br>
&nbsp;&nbsp;&nbsp;441   484   529    48    50    52   729   784    58    60
<br>
&nbsp;&nbsp;&nbsp;961  1024  1089    68    70    72  1369  1444    78    80
<br>
&nbsp;&nbsp;1681  1764  1849    88    90    92  2209  2304    98   100
<br>
&nbsp;&nbsp;2601  2704  2809   108   110   112  3249  3364   118   120
<br>
<p>tyr strided_vector 128 lamhalt
<br>
<p>LAM 6.5.9/MPI 2 C++ - Indiana University
<br>
<p><p><p>I would be grateful, if somebody could fix the problem. Thank you
<br>
very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p>
<br><hr>
<ul>
<li>TEXT/x-sun-c-file attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21156/data_type_4.c">data_type_4.c</a>
</ul>
<!-- attachment="data_type_4.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21157.php">Siegmar Gross: "[OMPI users] problem with rankfile in openmpi-1.6.4rc2"</a>
<li><strong>Previous message:</strong> <a href="21155.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with mpirun for java codes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21159.php">Ralph Castain: "Re: [OMPI users] problem with groups and communicators in openmpi-1.6.4rc2"</a>
<li><strong>Reply:</strong> <a href="21159.php">Ralph Castain: "Re: [OMPI users] problem with groups and communicators in openmpi-1.6.4rc2"</a>
<li><strong>Maybe reply:</strong> <a href="21170.php">Siegmar Gross: "Re: [OMPI users] problem with groups and communicators in openmpi-1.6.4rc2"</a>
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
