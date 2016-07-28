<?
$subject_val = "[OMPI users] problem with groups and communicators in openmpi-1.9 in Java and C";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 15 16:35:50 2013" -->
<!-- isoreceived="20130115213550" -->
<!-- sent="Tue, 15 Jan 2013 22:28:58 +0100 (CET)" -->
<!-- isosent="20130115212858" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] problem with groups and communicators in openmpi-1.9 in Java and C" -->
<!-- id="201301152129.r0FLSwNn025199_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] problem with groups and communicators in openmpi-1.9 in Java and C<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-15 16:28:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21126.php">Gus Correa: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<li><strong>Previous message:</strong> <a href="21124.php">Karos Lotfifar: "[OMPI users] help"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I have a problem with groups and communicators in openmpi-1.9a1r27787
<br>
with Java. I want to multiply two matrices with any number of
<br>
processes. I build a new group, if I start more than n processes
<br>
and I use all processes, if I start at most n processes.
<br>
<p>My program contains the following code.
<br>
<p>...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Create group &quot;groupWorker&quot;                                     */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;groupWorker = groupCommWorld.Incl (group_w_mem);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* there are at most as many processes as rows in matrix &quot;a&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* i.e., we can use the &quot;basic group&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;groupWorker = groupCommWorld;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* Create group &quot;groupOther&quot; which demonstrates only how to use
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* another group operation and which has nothing to do in this
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* program.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;groupOther = Group.Difference (groupCommWorld, groupWorker);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (groupOther == MPI.GROUP_EMPTY)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println (&quot;groupOther is empty.&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println (&quot;groupOther is not empty.&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;groupCommWorld.finalize ();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* Create communicators for both groups. The communicator is only
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* defined for all processes of the group and it is undefined
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* (MPI.COMM_NULL) for all other processes.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;COMM_WORKER = MPI.COMM_WORLD.Creat (groupWorker);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;COMM_OTHER  = MPI.COMM_WORLD.Creat (groupOther);
<br>
...
<br>
<p><p>Shouldn't &quot;MPI.COMM_WORLD.Creat&quot; be &quot;MPI.COMM_WORLD.Create&quot;?
<br>
&quot;groupOther&quot; should be empty, if I use &quot;-np 4&quot;. Unfortunately it isn't.
<br>
<p>tyr java 112 ompi_info | grep &quot;Open MPI:&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.9a1r27787
<br>
tyr java 113 mpijavac MatMultWithAnyProc2DarrayIn1DarrayMain.java
<br>
tyr java 114 mpiexec -np 4 java MatMultWithAnyProc2DarrayIn1DarrayMain
<br>
groupOther is not empty.
<br>
[tyr:25128] *** An error occurred in MPI_Comm_create
<br>
[tyr:25128] *** reported by process [3288334337,0]
<br>
[tyr:25128] *** on communicator MPI_COMM_WORLD
<br>
[tyr:25128] *** MPI_ERR_GROUP: invalid group
<br>
[tyr:25128] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now 
<br>
abort,
<br>
[tyr:25128] ***    and potentially your MPI job)
<br>
...
<br>
<p><p>Everything works fine, if I use &quot;-np 6&quot;. I have removed some lines,
<br>
so that the output is more readable.
<br>
<p>tyr java 115 mpiexec -np 6 java MatMultWithAnyProc2DarrayIn1DarrayMain
<br>
groupOther is not empty.
<br>
<p>(4,6)-matrix a:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.00      2.00      3.00      4.00      5.00      6.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7.00      8.00      9.00     10.00     11.00     12.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;13.00     14.00     15.00     16.00     17.00     18.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;19.00     20.00     21.00     22.00     23.00     24.00
<br>
<p>(6,8)-matrix b:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;48.00     47.00     46.00     45.00     44.00     43.00     42.00     41.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;40.00     39.00     38.00     37.00     36.00     35.00     34.00     33.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32.00     31.00     30.00     29.00     28.00     27.00     26.00     25.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;24.00     23.00     22.00     21.00     20.00     19.00     18.00     17.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16.00     15.00     14.00     13.00     12.00     11.00     10.00      9.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8.00      7.00      6.00      5.00      4.00      3.00      2.00      1.00
<br>
<p>(4,8)-result-matrix c = a * b:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;448.00    427.00    406.00    385.00    364.00    343.00    322.00    301.00
<br>
&nbsp;&nbsp;&nbsp;1456.00   1399.00   1342.00   1285.00   1228.00   1171.00   1114.00   1057.00
<br>
&nbsp;&nbsp;&nbsp;2464.00   2371.00   2278.00   2185.00   2092.00   1999.00   1906.00   1813.00
<br>
&nbsp;&nbsp;&nbsp;3472.00   3343.00   3214.00   3085.00   2956.00   2827.00   2698.00   2569.00
<br>
<p><p><p>It seems that I'm not allowed to do
<br>
<p>groupWorker = groupCommWorld;
<br>
...
<br>
groupOther = Group.Difference (groupCommWorld, groupWorker);
<br>
<p>or that Group.Difference doesn't return MPI.GROUP_EMPTY.
<br>
<p><p><p>I have a similar program in C which also doesn't work with Open MPI
<br>
(I get the same error for openmpi-1.6.4 and 1.9).
<br>
<p>tyr strided_vector 109 ompi_info | grep &quot;Open MPI:&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.6.4a1r27643
<br>
<p>tyr strided_vector 108 ompi_info | grep &quot;Open MPI:&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.9a1r27787
<br>
<p><p>tyr strided_vector 108 mpiexec -np 4 data_type_4
<br>
Process 0 of 4 running on tyr.informatik.hs-fulda.de
<br>
Process 1 of 4 running on tyr.informatik.hs-fulda.de
<br>
Process 2 of 4 running on tyr.informatik.hs-fulda.de
<br>
Process 3 of 4 running on tyr.informatik.hs-fulda.de
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
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1     4     9     8    10    12    49    64    18    20
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
)-&gt;obj_magic_id, file ../../openmpi-1.6.4a1r27643/ompi/communicator/comm_init.c,
<br>
&nbsp;line 412
<br>
[tyr:24415] *** Process received signal ***
<br>
Assertion failed: OPAL_OBJ_MAGIC_ID == ((opal_object_t *) (comm-&gt;c_remote_group)
<br>
)-&gt;obj_magic_id, file ../../openmpi-1.6.4a1r27643/ompi/communicator/comm_init.c,
<br>
&nbsp;line 412
<br>
[tyr:24415] Signal: Abort (6)
<br>
[tyr:24415] Signal code:  (-1)
<br>
...
<br>
<p><p><p>The program works as expected, if I use LAM-MPI.
<br>
<p>tyr strided_vector 115 lamboot
<br>
<p>LAM 6.5.9/MPI 2 C++ - Indiana University
<br>
<p>tyr strided_vector 116 mpirun -np 4 data_type_4
<br>
Process 0 of 4 running on tyr.informatik.hs-fulda.de
<br>
Process 1 of 4 running on tyr.informatik.hs-fulda.de
<br>
Process 2 of 4 running on tyr.informatik.hs-fulda.de
<br>
Process 3 of 4 running on tyr.informatik.hs-fulda.de
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
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1     4     9     8    10    12    49    64    18    20
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
<p>tyr strided_vector 117 lamhalt
<br>
<p>LAM 6.5.9/MPI 2 C++ - Indiana University
<br>
<p><p>I would be grateful, if somebody can fix the problems in Open MPI.
<br>
Thank you very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21126.php">Gus Correa: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<li><strong>Previous message:</strong> <a href="21124.php">Karos Lotfifar: "[OMPI users] help"</a>
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
