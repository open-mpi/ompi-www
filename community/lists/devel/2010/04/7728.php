<?
$subject_val = "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 11 21:32:36 2010" -->
<!-- isoreceived="20100412013236" -->
<!-- sent="Mon, 12 Apr 2010 11:32:29 +1000" -->
<!-- isosent="20100412013229" -->
<!-- name="Chris Samuel" -->
<!-- email="chris_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times" -->
<!-- id="4BC2782D.4000100_at_csamuel.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BBF9536.9020600_at_docawk.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times<br>
<strong>From:</strong> Chris Samuel (<em>chris_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-11 21:32:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7729.php">Nadia Derbey: "Re: [OMPI devel] problem when binding to socket on a single socket	node"</a>
<li><strong>Previous message:</strong> <a href="7727.php">Chris Samuel: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>In reply to:</strong> <a href="7722.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7789.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/04/10 06:59, Oliver Geisler wrote:
<br>
<p><span class="quotelev1">&gt; This is the results of skampi pt2pt, first with shared memory allowed,
</span><br>
<span class="quotelev1">&gt; second shared memory excluded.
</span><br>
<p>For what it's worth I can't replicate those results on an AMD Shanghai
<br>
cluster running a 2.6.32 kernel and Open-MPI 1.4.1.
<br>
<p>Here is what I see (run under Torque, selecting 2 cores on the same
<br>
node, so no need to specify -np):
<br>
<p>$ mpirun --mca btl self,sm,tcp  ./skampi -i ski/skampi_pt2pt.ski
<br>
<p># begin result &quot;Pingpong_Send_Recv&quot;
<br>
count= 1        4       2.0       0.0       16       2.0       1.8
<br>
count= 2        8       2.1       0.0       16       2.1       1.8
<br>
count= 3       12       2.1       0.1        8       2.0       2.0
<br>
count= 4       16       2.1       0.1        8       2.0       2.0
<br>
count= 6       24       2.0       0.0       16       2.0       1.8
<br>
count= 8       32       2.9       0.0       16       2.7       2.4
<br>
count= 11       44       2.3       0.1       16       2.2       2.0
<br>
count= 16       64       2.2       0.1       16       2.1       2.0
<br>
count= 23       92       2.7       0.2       16       2.6       2.1
<br>
count= 32      128       2.5       0.1       16       2.5       2.1
<br>
count= 45      180       3.0       0.0       16       2.8       2.6
<br>
count= 64      256       3.1       0.0        8       3.0       2.5
<br>
count= 91      364       3.1       0.0        8       3.0       3.0
<br>
count= 128      512       3.4       0.2       16       3.3       3.0
<br>
count= 181      724       4.1       0.0       16       4.0       4.1
<br>
count= 256     1024       5.0       0.0        8       4.5       4.5
<br>
count= 362     1448       6.0       0.0       16       5.8       5.7
<br>
count= 512     2048       7.7       0.1       16       7.3       7.6
<br>
count= 724     2896      10.0       0.0        8      10.0       9.8
<br>
count= 1024     4096      12.3       0.1       16      12.1      12.0
<br>
count= 1448     5792      13.8       0.2        8      13.5      13.4
<br>
count= 2048     8192      18.1       0.0       16      17.9      18.1
<br>
count= 2896    11584      25.0       0.0       16      24.9      25.0
<br>
count= 4096    16384      34.2       0.1       16      34.0      34.2
<br>
# end result &quot;Pingpong_Send_Recv&quot;
<br>
# duration = 0.00 sec
<br>
<p>mpirun --mca btl tcp,self  ./skampi -i ski/skampi_pt2pt.ski
<br>
<p># begin result &quot;Pingpong_Send_Recv&quot;
<br>
count= 1        4      21.2       1.0       16      20.1      17.8
<br>
count= 2        8      20.8       1.0       16      20.6      16.7
<br>
count= 3       12      20.2       0.9       16      19.0      17.1
<br>
count= 4       16      19.9       1.0       16      19.0      17.0
<br>
count= 6       24      21.1       1.1       16      20.6      17.0
<br>
count= 8       32      20.0       1.0       16      18.8      17.1
<br>
count= 11       44      20.9       0.8       16      20.0      17.1
<br>
count= 16       64      21.7       1.1       16      20.5      17.6
<br>
count= 23       92      21.7       1.0       16      20.0      18.5
<br>
count= 32      128      21.6       1.0       16      20.5      18.5
<br>
count= 45      180      22.0       1.0       16      20.9      19.0
<br>
count= 64      256      21.8       0.7       16      20.5      20.2
<br>
count= 91      364      20.5       0.3       16      19.8      19.1
<br>
count= 128      512      18.5       0.3        8      17.5      18.1
<br>
count= 181      724      19.3       0.2        8      19.1      19.0
<br>
count= 256     1024      20.3       0.3       16      19.7      20.0
<br>
count= 362     1448      22.1       0.3       16      21.2      21.4
<br>
count= 512     2048      24.2       0.3       16      23.7      23.2
<br>
count= 724     2896      24.8       0.5        8      24.0      24.0
<br>
count= 1024     4096      26.8       0.2       16      26.1      26.3
<br>
count= 1448     5792      31.6       0.3       16      30.4      31.5
<br>
count= 2048     8192      38.0       0.6       16      37.3      37.1
<br>
count= 2896    11584      52.1       1.4       16      49.1      50.8
<br>
count= 4096    16384      93.8       1.1       16      81.1      91.5
<br>
# end result &quot;Pingpong_Send_Recv&quot;
<br>
# duration = 0.02 sec
<br>
<p>cheers,
<br>
Chris
<br>
<pre>
-- 
  Chris Samuel  :  <a href="http://www.csamuel.org/">http://www.csamuel.org/</a>  :  Melbourne, VIC
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7729.php">Nadia Derbey: "Re: [OMPI devel] problem when binding to socket on a single socket	node"</a>
<li><strong>Previous message:</strong> <a href="7727.php">Chris Samuel: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>In reply to:</strong> <a href="7722.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7789.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
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
