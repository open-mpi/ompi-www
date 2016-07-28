<?
$subject_val = "[OMPI users] Low Open MPI performance on InfiniBand and shared memory?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  9 04:49:44 2010" -->
<!-- isoreceived="20100709084944" -->
<!-- sent="Fri, 9 Jul 2010 10:50:03 +0200" -->
<!-- isosent="20100709085003" -->
<!-- name="Andreas Sch&#228;fer" -->
<!-- email="gentryx_at_[hidden]" -->
<!-- subject="[OMPI users] Low Open MPI performance on InfiniBand and shared memory?" -->
<!-- id="20100709085003.GA23064_at_rei.informatik.uni-erlangen.de" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Low Open MPI performance on InfiniBand and shared memory?<br>
<strong>From:</strong> Andreas Sch&#228;fer (<em>gentryx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-09 04:50:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13552.php">Andreas Schäfer: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<li><strong>Previous message:</strong> <a href="13550.php">Harichand M V: "[OMPI users] mpirun hang up randomly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13552.php">Andreas Schäfer: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<li><strong>Reply:</strong> <a href="13552.php">Andreas Schäfer: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<li><strong>Reply:</strong> <a href="13556.php">Peter Kjellstrom: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm evaluating Open MPI 1.4.2 on one of our BladeCenters and I'm
<br>
getting via InfiniBand about 1550 MB/s and via shared memory about
<br>
1770 for the PingPong benchmark in Intel's MPI benchmark. (That
<br>
benchmark is just an example, I'm seeing similar numbers for my own
<br>
codes.)
<br>
<p>Each node has two AMD hex-cores and two 40 Gbps InfiniBand ports, so I
<br>
wonder if I shouldn't be getting a significantly higher throughput on
<br>
InfiniBand. Considering the CPUs' memory bandwidth, I believe that
<br>
shared memory throughput should be much higher as well.
<br>
<p>Are those numbers what is to be expected? If not: any ideas how to
<br>
debug this or tune Open MPI?
<br>
<p>Thanks in advance
<br>
-Andreas
<br>
<p>ps: if it's any help, this is what iblinkinfo is telling me 
<br>
(tests were run on faui36[bc])
<br>
<p>faui36a ~ # iblinkinfo -P 1
<br>
Switch 0x0008f10500380136 IBM HSSM:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4    1[  ] ==( 4X 5.0 Gbps Active/  LinkUp)==&gt;       1    1[  ] &quot;faui36a HCA-1&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4    2[  ] ==( 4X 2.5 Gbps Active/  LinkUp)==&gt;       9    1[  ] &quot;MT25204 InfiniHostLx Mellanox Technologies&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4    3[  ] ==( 4X 2.5 Gbps   Down/Disabled)==&gt;             [  ] &quot;&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4    4[  ] ==( 4X 2.5 Gbps   Down/Disabled)==&gt;             [  ] &quot;&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4    5[  ] ==( 4X 2.5 Gbps   Down/Disabled)==&gt;             [  ] &quot;&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4    6[  ] ==( 4X 2.5 Gbps   Down/Disabled)==&gt;             [  ] &quot;&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4    7[  ] ==( 4X 2.5 Gbps   Down/Disabled)==&gt;             [  ] &quot;&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4    8[  ] ==( 4X 2.5 Gbps   Down/Disabled)==&gt;             [  ] &quot;&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4    9[  ] ==( 4X 2.5 Gbps   Down/Disabled)==&gt;             [  ] &quot;&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4   10[  ] ==( 4X 2.5 Gbps   Down/Disabled)==&gt;             [  ] &quot;&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4   11[  ] ==( 4X 2.5 Gbps   Down/Disabled)==&gt;             [  ] &quot;&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4   12[  ] ==( 4X 2.5 Gbps   Down/Disabled)==&gt;             [  ] &quot;&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4   13[  ] ==( 4X 2.5 Gbps   Down/Disabled)==&gt;             [  ] &quot;&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4   14[  ] ==( 4X 2.5 Gbps   Down/Disabled)==&gt;             [  ] &quot;&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4   15[  ] ==( 4X 2.5 Gbps   Down/Disabled)==&gt;             [  ] &quot;&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4   16[  ] ==( 4X 2.5 Gbps   Down/Disabled)==&gt;             [  ] &quot;&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4   17[  ] ==( 4X 10.0 Gbps Active/  LinkUp)==&gt;       6    1[  ] &quot;faui36b HCA-1&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4   18[  ] ==( 4X 10.0 Gbps Active/  LinkUp)==&gt;       8    1[  ] &quot;faui36c HCA-1&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4   19[  ] ==( 4X 5.0 Gbps Active/  LinkUp)==&gt;       3    1[  ] &quot;faui36d HCA-1&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4   20[  ] ==( 4X 5.0 Gbps Active/  LinkUp)==&gt;       2    1[  ] &quot;faui36e HCA-1&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4   21[  ] ==( 4X 5.0 Gbps Active/  LinkUp)==&gt;       7    1[  ] &quot;faui36f HCA-1&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4   22[  ] ==( 4X 2.5 Gbps   Down/ Polling)==&gt;             [  ] &quot;&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4   23[  ] ==( 4X 2.5 Gbps   Down/ Polling)==&gt;             [  ] &quot;&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4   24[  ] ==( 4X 2.5 Gbps   Down/ Polling)==&gt;             [  ] &quot;&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4   25[  ] ==( 4X 2.5 Gbps   Down/ Polling)==&gt;             [  ] &quot;&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4   26[  ] ==( 4X 2.5 Gbps   Down/ Polling)==&gt;             [  ] &quot;&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4   27[  ] ==( 4X 2.5 Gbps   Down/ Polling)==&gt;             [  ] &quot;&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4   28[  ] ==( 4X 2.5 Gbps   Down/ Polling)==&gt;             [  ] &quot;&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4   29[  ] ==( 4X 2.5 Gbps   Down/ Polling)==&gt;             [  ] &quot;&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4   30[  ] ==( 4X 2.5 Gbps   Down/ Polling)==&gt;             [  ] &quot;&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4   31[  ] ==( 4X 2.5 Gbps   Down/ Polling)==&gt;             [  ] &quot;&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4   32[  ] ==( 4X 2.5 Gbps   Down/ Polling)==&gt;             [  ] &quot;&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4   33[  ] ==( 4X 2.5 Gbps   Down/Disabled)==&gt;             [  ] &quot;&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4   34[  ] ==( 4X 2.5 Gbps   Down/Disabled)==&gt;             [  ] &quot;&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4   35[  ] ==( 4X 2.5 Gbps   Down/Disabled)==&gt;             [  ] &quot;&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4   36[  ] ==( 4X 2.5 Gbps   Down/Disabled)==&gt;             [  ] &quot;&quot; ( )
<br>
faui36a ~ # iblinkinfo -P 2
<br>
Switch 0x0005ad0000080ba2 Topspin Switch:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10    1[  ] ==( 4X 2.5 Gbps Active/  LinkUp)==&gt;      13    2[  ] &quot;faui36b HCA-1&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10    2[  ] ==( 4X 2.5 Gbps Active/  LinkUp)==&gt;      15    2[  ] &quot;faui36c HCA-1&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10    3[  ] ==( 4X 2.5 Gbps Active/  LinkUp)==&gt;      12    2[  ] &quot;faui36d HCA-1&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10    4[  ] ==( 4X 2.5 Gbps Active/  LinkUp)==&gt;      11    2[  ] &quot;faui36e HCA-1&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10    5[  ] ==( 4X 2.5 Gbps Active/  LinkUp)==&gt;      14    2[  ] &quot;faui36f HCA-1&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10    6[  ] ==( 4X 2.5 Gbps   Down/ Polling)==&gt;             [  ] &quot;&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10    7[  ] ==( 4X 2.5 Gbps   Down/ Polling)==&gt;             [  ] &quot;&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10    8[  ] ==( 4X 2.5 Gbps   Down/ Polling)==&gt;             [  ] &quot;&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10    9[  ] ==( 4X 2.5 Gbps   Down/ Polling)==&gt;             [  ] &quot;&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10   10[  ] ==( 4X 2.5 Gbps   Down/ Polling)==&gt;             [  ] &quot;&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10   11[  ] ==( 4X 2.5 Gbps   Down/ Polling)==&gt;             [  ] &quot;&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10   12[  ] ==( 4X 2.5 Gbps   Down/ Polling)==&gt;             [  ] &quot;&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10   13[  ] ==( 4X 2.5 Gbps   Down/ Polling)==&gt;             [  ] &quot;&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10   14[  ] ==( 4X 2.5 Gbps   Down/ Polling)==&gt;             [  ] &quot;&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10   15[  ] ==( 4X 2.5 Gbps   Down/ Polling)==&gt;             [  ] &quot;&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10   16[  ] ==( 4X 2.5 Gbps   Down/ Polling)==&gt;             [  ] &quot;&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10   17[  ] ==( 4X 2.5 Gbps Active/  LinkUp)==&gt;       5    2[  ] &quot;faui36a HCA-1&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10   18[  ] ==( 4X 2.5 Gbps   Down/ Polling)==&gt;             [  ] &quot;&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10   19[  ] ==( 4X 2.5 Gbps   Down/ Polling)==&gt;             [  ] &quot;&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10   20[  ] ==( 4X 2.5 Gbps   Down/ Polling)==&gt;             [  ] &quot;&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10   21[  ] ==( 4X 2.5 Gbps   Down/ Polling)==&gt;             [  ] &quot;&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10   22[  ] ==( 4X 2.5 Gbps   Down/ Polling)==&gt;             [  ] &quot;&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10   23[  ] ==( 4X 2.5 Gbps   Down/ Polling)==&gt;             [  ] &quot;&quot; ( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10   24[  ] ==( 4X 2.5 Gbps   Down/ Polling)==&gt;             [  ] &quot;&quot; ( )
<br>
<p><p><pre>
-- 
==========================================================
Andreas Sch&#228;fer
HPC and Grid Computing
Chair of Computer Science 3
Friedrich-Alexander-Universit&#228;t Erlangen-N&#252;rnberg, Germany
+49 9131 85-27910
PGP/GPG key via keyserver
I'm a bright... <a href="http://www.the-brights.net">http://www.the-brights.net</a>
==========================================================
(\___/)
(+'.'+)
(&quot;)_(&quot;)
This is Bunny. Copy and paste Bunny into your 
signature to help him gain world domination!

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13551/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13552.php">Andreas Schäfer: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<li><strong>Previous message:</strong> <a href="13550.php">Harichand M V: "[OMPI users] mpirun hang up randomly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13552.php">Andreas Schäfer: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<li><strong>Reply:</strong> <a href="13552.php">Andreas Schäfer: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<li><strong>Reply:</strong> <a href="13556.php">Peter Kjellstrom: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
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
