<?
$subject_val = "Re: [OMPI users] SM btl slows down bandwidth?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 12 18:15:15 2008" -->
<!-- isoreceived="20080812221515" -->
<!-- sent="Wed, 13 Aug 2008 00:14:57 +0200" -->
<!-- isosent="20080812221457" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SM btl slows down bandwidth?" -->
<!-- id="D6C9675D-F4A6-4B80-B378-F065B4DF66AB_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.LNX.4.63.0808122348290.26939_at_druifje.clustervision.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] SM btl slows down bandwidth?<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-12 18:14:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6323.php">Daniël Mantione: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>Previous message:</strong> <a href="6321.php">Dani&#235;l Mantione: "[OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>In reply to:</strong> <a href="6321.php">Dani&#235;l Mantione: "[OMPI users] SM btl slows down bandwidth?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6323.php">Daniël Mantione: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>Reply:</strong> <a href="6323.php">Daniël Mantione: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Daniel,
<br>
<p>Open IB is one of the few devices that allow local communications  
<br>
(instead of using shared memory). As the latency looks OK, I supposed  
<br>
that small messages always use shared memory, while large ones get  
<br>
stripped over sm and openib. Can you run a test without openib to  
<br>
confirm this ?
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Aug 12, 2008, at 11:57 PM, Dani&#235;l Mantione wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm troubleshooting a weird benchmark situation that having the sm btl
</span><br>
<span class="quotelev1">&gt; enabled gives me worse results than disabling it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For example, this on a single compute node with 2*Xeon5420, 8 GB RAM  
</span><br>
<span class="quotelev1">&gt; and a
</span><br>
<span class="quotelev1">&gt; ConnectX gen2 IB card, with OFED 1.3 and OpenMPI 1.2.6 as software  
</span><br>
<span class="quotelev1">&gt; setup:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [cvsupport_at_extern src]$ mpirun -np 8 --mca btl self,sm,openib - 
</span><br>
<span class="quotelev1">&gt; hostfile \
</span><br>
<span class="quotelev1">&gt; hostfile ./IMB-MPI1.openmpi -npmin 8 PingPong
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # Benchmarking PingPong
</span><br>
<span class="quotelev1">&gt; # #processes = 2
</span><br>
<span class="quotelev1">&gt; # ( 6 additional processes waiting in MPI_Barrier)
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt;       #bytes #repetitions      t[usec]   Mbytes/sec
</span><br>
<span class="quotelev1">&gt;            0         1000         0.87         0.00
</span><br>
<span class="quotelev1">&gt;            1         1000         0.98         0.97
</span><br>
<span class="quotelev1">&gt;            2         1000         0.97         1.96
</span><br>
<span class="quotelev1">&gt;            4         1000         0.99         3.87
</span><br>
<span class="quotelev1">&gt;            8         1000         0.98         7.78
</span><br>
<span class="quotelev1">&gt;           16         1000         1.15        13.33
</span><br>
<span class="quotelev1">&gt;           32         1000         1.13        26.93
</span><br>
<span class="quotelev1">&gt;           64         1000         1.12        54.42
</span><br>
<span class="quotelev1">&gt;          128         1000         1.27        96.31
</span><br>
<span class="quotelev1">&gt;          256         1000         1.55       157.01
</span><br>
<span class="quotelev1">&gt;          512         1000         2.04       239.00
</span><br>
<span class="quotelev1">&gt;         1024         1000         2.75       355.62
</span><br>
<span class="quotelev1">&gt;         2048         1000         4.58       426.40
</span><br>
<span class="quotelev1">&gt;         4096         1000         7.12       548.93
</span><br>
<span class="quotelev1">&gt;         8192         1000        11.29       692.14
</span><br>
<span class="quotelev1">&gt;        16384         1000        18.83       829.75
</span><br>
<span class="quotelev1">&gt;        32768         1000        34.57       904.08
</span><br>
<span class="quotelev1">&gt;        65536          640        60.73      1029.22
</span><br>
<span class="quotelev1">&gt;       131072          320       112.06      1115.43
</span><br>
<span class="quotelev1">&gt;       262144          160       215.48      1160.21
</span><br>
<span class="quotelev1">&gt;       524288           80       423.34      1181.09
</span><br>
<span class="quotelev1">&gt;      1048576           40       858.18      1165.26
</span><br>
<span class="quotelev1">&gt;      2097152           20      1744.15      1146.69
</span><br>
<span class="quotelev1">&gt;      4194304           10      4055.60       986.29
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, when disabling the sm btl, the score is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # Benchmarking PingPong
</span><br>
<span class="quotelev1">&gt; # #processes = 2
</span><br>
<span class="quotelev1">&gt; # ( 6 additional processes waiting in MPI_Barrier)
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt;       #bytes #repetitions      t[usec]   Mbytes/sec
</span><br>
<span class="quotelev1">&gt;            0         1000         1.08         0.00
</span><br>
<span class="quotelev1">&gt;            1         1000         1.42         0.67
</span><br>
<span class="quotelev1">&gt;            2         1000         1.19         1.60
</span><br>
<span class="quotelev1">&gt;            4         1000         1.21         3.14
</span><br>
<span class="quotelev1">&gt;            8         1000         1.61         4.75
</span><br>
<span class="quotelev1">&gt;           16         1000         1.30        11.70
</span><br>
<span class="quotelev1">&gt;           32         1000         1.32        23.13
</span><br>
<span class="quotelev1">&gt;           64         1000         1.61        37.97
</span><br>
<span class="quotelev1">&gt;          128         1000         2.80        43.53
</span><br>
<span class="quotelev1">&gt;          256         1000         3.21        76.05
</span><br>
<span class="quotelev1">&gt;          512         1000         4.06       120.15
</span><br>
<span class="quotelev1">&gt;         1024         1000         5.03       194.21
</span><br>
<span class="quotelev1">&gt;         2048         1000         7.15       273.05
</span><br>
<span class="quotelev1">&gt;         4096         1000        10.05       388.55
</span><br>
<span class="quotelev1">&gt;         8192         1000        16.02       487.76
</span><br>
<span class="quotelev1">&gt;        16384         1000        29.63       527.41
</span><br>
<span class="quotelev1">&gt;        32768         1000        51.23       610.03
</span><br>
<span class="quotelev1">&gt;        65536          640        92.26       677.43
</span><br>
<span class="quotelev1">&gt;       131072          320       141.03       886.36
</span><br>
<span class="quotelev1">&gt;       262144          160       233.62      1070.14
</span><br>
<span class="quotelev1">&gt;       524288           80       434.56      1150.60
</span><br>
<span class="quotelev1">&gt;      1048576           40       818.84      1221.24
</span><br>
<span class="quotelev1">&gt;      2097152           20      1403.75      1424.76
</span><br>
<span class="quotelev1">&gt;      4194304           10      2523.40      1585.16
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, I do have fast Infiniband, but I can't believe that the openib  
</span><br>
<span class="quotelev1">&gt; btl is
</span><br>
<span class="quotelev1">&gt; supposed to be faster than the sm btl. Does anyone know wether
</span><br>
<span class="quotelev1">&gt; something can be tuned here?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dani&#235;l Mantione_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6322/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6323.php">Daniël Mantione: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>Previous message:</strong> <a href="6321.php">Dani&#235;l Mantione: "[OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>In reply to:</strong> <a href="6321.php">Dani&#235;l Mantione: "[OMPI users] SM btl slows down bandwidth?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6323.php">Daniël Mantione: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>Reply:</strong> <a href="6323.php">Daniël Mantione: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
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
