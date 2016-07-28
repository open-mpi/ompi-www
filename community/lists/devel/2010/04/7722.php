<?
$subject_val = "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  9 17:00:19 2010" -->
<!-- isoreceived="20100409210019" -->
<!-- sent="Fri, 09 Apr 2010 15:59:34 -0500" -->
<!-- isosent="20100409205934" -->
<!-- name="Oliver Geisler" -->
<!-- email="openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times" -->
<!-- id="4BBF9536.9020600_at_docawk.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BBD1B9D.6030106_at_oracle.com" -->
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
<strong>From:</strong> Oliver Geisler (<em>openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-09 16:59:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7723.php">Eugene Loh: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="7721.php">Terry Dontje: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
<li><strong>In reply to:</strong> <a href="7711.php">Eugene Loh: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7723.php">Eugene Loh: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="7723.php">Eugene Loh: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="7728.php">Chris Samuel: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for replying late. Unfortunately I am not &quot;full time
<br>
administrator&quot;. And I am going to be a conference next week, so please
<br>
be patient with me replying.
<br>
<p>On 4/7/2010 6:56 PM, Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; Oliver Geisler wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Using netpipe and comparing tcp and mpi communication I get the
</span><br>
<span class="quotelev2">&gt;&gt; following results:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; TCP is much faster than MPI, approx. by factor 12
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Faster?  12x?  I don't understand the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; e.g a packet size of 4096 bytes deliveres in
</span><br>
<span class="quotelev2">&gt;&gt; 97.11 usec with NPtcp and
</span><br>
<span class="quotelev2">&gt;&gt; 15338.98 usec with NPmpi
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; This implies NPtcp is 160x faster than NPmpi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>The ratio function NPtcp/NPmpi has a mean value of factor 60 for small
<br>
packet sizes &lt;4kB, a maximum of 160 at 4kB (it was a bad value to pick
<br>
out in the first place), then dropping down to 40 for packet sizes of
<br>
about 16kB and further dropping below factor 20 for packets larger than
<br>
100kB.
<br>
<p><p><span class="quotelev2">&gt;&gt; or
</span><br>
<span class="quotelev2">&gt;&gt; packet size 262kb
</span><br>
<span class="quotelev2">&gt;&gt; 0.05268801 sec NPtcp
</span><br>
<span class="quotelev2">&gt;&gt; 0.00254560 sec NPmpi
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; This implies NPtcp is 20x slower than NPmpi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Sorry, my fault ... vice versa, should read:
<br>
packet size 262kb
<br>
0.00254560 sec NPtcp
<br>
0.05268801 sec NPmpi
<br>
<p><p><span class="quotelev2">&gt;&gt; Further our benchmark started with &quot;--mca btl tcp,self&quot; runs with short
</span><br>
<span class="quotelev2">&gt;&gt; communication times, even using kernel 2.6.33.1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a way to see what type of communication is actually selected?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can anybody imagine why shared memory leads to these problems?
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Okay, so it's a shared-memory performance problem since:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) You get better performance when you exclude sm explicitly with &quot;--mca
</span><br>
<span class="quotelev1">&gt; btl tcp,self&quot;.
</span><br>
<span class="quotelev1">&gt; 2) You get better performance when you exclude sm by distributing one
</span><br>
<span class="quotelev1">&gt; process per node (an observation you made relatively early in this thread).
</span><br>
<span class="quotelev1">&gt; 3) TCP is faster than MPI (which is presumably using sm).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you run a pingpong test as a function of message length for two
</span><br>
<span class="quotelev1">&gt; processes in a way that demonstrates the problem?  For example, if
</span><br>
<span class="quotelev1">&gt; you're comfortable with SKaMPI, just look at Pingpong_Send_Recv and
</span><br>
<span class="quotelev1">&gt; let's see what performance looks like as a function of message length. 
</span><br>
<span class="quotelev1">&gt; Maybe this is a short-message-latency problem.
</span><br>
<p>This is the results of skampi pt2pt, first with shared memory allowed,
<br>
second shared memory excluded.
<br>
It doesn't look to me as the long message times are related to short
<br>
messages.
<br>
Including hosts over ethernet results in higher communication times
<br>
which are equal to those when I ping the host (a hundred+ milliseconds).
<br>
<p>mpirun --mca btl self,sm,tcp -np 2 ./skampi -i ski/skampi_pt2pt.ski
<br>
<p># begin result &quot;Pingpong_Send_Recv&quot;
<br>
count= 1        4   12756.0     307.4       16   11555.3   11011.2
<br>
count= 2        8    9902.8     629.0       16    9615.4    8601.0
<br>
count= 3       12   12547.5     881.0       16   12233.1   11229.2
<br>
count= 4       16   12087.2     829.6       16   11610.6   10478.6
<br>
count= 6       24   13634.4     352.1       16   11247.8   12621.9
<br>
count= 8       32   13835.8     282.2       16   11091.7   12944.6
<br>
count= 11       44   13328.9     864.6       16   12095.6   11977.0
<br>
count= 16       64   13195.2     432.3       16   11460.4   10051.9
<br>
count= 23       92   13849.3     532.5       16   12476.9   12998.1
<br>
count= 32      128   14202.2     436.4       16   11923.8   12977.4
<br>
count= 45      180   14026.3     637.7       16   13042.5   12767.8
<br>
count= 64      256   13475.8     466.7       16   11720.4   12521.3
<br>
count= 91      364   14015.0     406.1       16   13300.4   12881.6
<br>
count= 128      512   13481.3     870.6       16   11187.7   12070.6
<br>
count= 181      724   10697.1      98.4       16   10697.1    9520.1
<br>
count= 256     1024   14120.8     602.1       16   13988.2   11349.9
<br>
count= 362     1448   15718.2     582.3       16   14468.2   12535.2
<br>
count= 512     2048   11214.9     749.1       16   11155.0    9928.5
<br>
count= 724     2896   15127.3     186.1       16   15127.3   10974.9
<br>
count= 1024     4096   34045.0     692.2       16   32963.6   31728.1
<br>
count= 1448     5792   29965.9     788.1       16   27997.8   27404.4
<br>
count= 2048     8192   30082.1     785.3       16   28023.9   29538.5
<br>
count= 2896    11584   32556.0     219.4       16   29312.2   32290.4
<br>
count= 4096    16384   24999.8     839.6       16   23422.0   23644.6
<br>
# end result &quot;Pingpong_Send_Recv&quot;
<br>
# duration = 10.15 sec
<br>
<p>mpirun --mca btl tcp,self -np 2 ./skampi -i ski/skampi_pt2pt.ski
<br>
<p># begin result &quot;Pingpong_Send_Recv&quot;
<br>
count= 1        4      14.5       0.3       16      13.5      13.2
<br>
count= 2        8      13.5       0.2        8      12.9      12.4
<br>
count= 3       12      13.1       0.4       16      12.7      11.3
<br>
count= 4       16      13.9       0.4       16      12.7      13.0
<br>
count= 6       24      13.8       0.4       16      12.5      12.8
<br>
count= 8       32      13.8       0.4       16      12.7      13.0
<br>
count= 11       44      14.0       0.3       16      12.8      13.0
<br>
count= 16       64      13.5       0.5       16      12.3      12.4
<br>
count= 23       92      13.9       0.4       16      13.1      12.7
<br>
count= 32      128      14.8       0.1       16      13.1      14.5
<br>
count= 45      180      14.2       0.4        8      13.1      12.9
<br>
count= 64      256      15.1       0.2       16      13.3      14.8
<br>
count= 91      364      16.5       0.3       16      14.1      16.1
<br>
count= 128      512      12.8       0.2        8      11.5      12.5
<br>
count= 181      724      13.4       0.3       16      11.5      13.3
<br>
count= 256     1024      14.0       0.3       16      11.7      14.0
<br>
count= 362     1448      13.2       0.3       16      12.2      12.5
<br>
count= 512     2048      15.4       0.2       16      12.5      15.4
<br>
count= 724     2896      15.7       0.2       16      13.1      15.7
<br>
count= 1024     4096      17.0       0.1        8      13.5      17.0
<br>
count= 1448     5792      18.5       0.2       16      15.5      18.5
<br>
count= 2048     8192      20.4       0.2       16      17.1      20.4
<br>
count= 2896    11584      24.1       0.1       16      21.0      24.0
<br>
count= 4096    16384      32.0       0.0       16      27.2      32.0
<br>
# end result &quot;Pingpong_Send_Recv&quot;
<br>
# duration = 0.01 sec
<br>
<p>&nbsp;mpirun --mca btl tcp,self -np 2 -host cluster-13,cluster-16 ./skampi -i
<br>
ski/skampi_pt2pt.ski
<br>
<p># begin result &quot;Pingpong_Send_Recv&quot;
<br>
count= 1        4     133.1       0.4       16     133.1      84.8
<br>
count= 2        8     132.7       0.1       16     132.7      85.0
<br>
count= 3       12     133.2       0.3        8     133.2      85.2
<br>
count= 4       16     133.8       0.2        8     133.8      85.5
<br>
count= 6       24     134.0       0.0        8     134.0      85.5
<br>
count= 8       32     134.2       0.2       16     134.2      86.8
<br>
count= 11       44     134.0       0.0        8     134.0      86.2
<br>
count= 16       64     135.2       0.2        8     135.2      87.0
<br>
count= 23       92     136.3       0.1       16     136.3      88.5
<br>
count= 32      128     137.6       0.2       16     137.6      90.3
<br>
count= 45      180     139.0       0.0        8     139.0      91.2
<br>
count= 64      256     138.8       2.2        8     130.0     104.6
<br>
count= 91      364     143.9       0.1       16     143.9      96.2
<br>
count= 128      512     148.5       0.3        8     148.5     101.8
<br>
count= 181      724     157.3       0.2       16     157.3     111.0
<br>
count= 256     1024     169.8       0.2        8     169.8     123.8
<br>
count= 362     1448     163.4       0.3        8     161.0     163.4
<br>
count= 512     2048     207.2       0.2        8     207.2     163.5
<br>
count= 724     2896     235.5       1.7        8     235.5     190.0
<br>
count= 1024     4096     233.0       0.6        8     230.7     233.0
<br>
count= 1448     5792     314.2       3.3       16     314.2     264.9
<br>
count= 2048     8192     343.0       3.9        8     343.0     295.0
<br>
count= 2896    11584     540.0      11.2       16     539.9     456.8
<br>
count= 4096    16384     636.3      13.2       16     636.3     473.1
<br>
# end result &quot;Pingpong_Send_Recv&quot;
<br>
# duration = 0.07 sec
<br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
This message has been scanned for viruses and
dangerous content by MailScanner, and is
believed to be clean.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7723.php">Eugene Loh: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="7721.php">Terry Dontje: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
<li><strong>In reply to:</strong> <a href="7711.php">Eugene Loh: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7723.php">Eugene Loh: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="7723.php">Eugene Loh: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="7728.php">Chris Samuel: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
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
