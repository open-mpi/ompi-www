<?
$subject_val = "Re: [OMPI users] SM btl slows down bandwidth?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 12 19:53:29 2008" -->
<!-- isoreceived="20080812235329" -->
<!-- sent="Tue, 12 Aug 2008 19:53:19 -0400" -->
<!-- isosent="20080812235319" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SM btl slows down bandwidth?" -->
<!-- id="48A2226F.3040603_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-12 19:53:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6325.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>Previous message:</strong> <a href="6323.php">Dani&#235;l Mantione: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>In reply to:</strong> <a href="6321.php">Dani&#235;l Mantione: "[OMPI users] SM btl slows down bandwidth?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6326.php">Daniël Mantione: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>Reply:</strong> <a href="6326.php">Daniël Mantione: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Daniel and list
<br>
<p>Could it be a problem with memory bandwidth / contention in multi-core?
<br>
It has been reported in many mailing lists (mpich, beowulf, etc).
<br>
Here it seems to happen in dual-processor dual-core with our memory 
<br>
intensive programs.
<br>
<p>Have you checked what happens to the shared memory runs as you
<br>
you increase the number of active cores/processes?
<br>
Would it help to set the processor affinity in the shared memory runs?
<br>
<p><a href="http://www.open-mpi.org/faq/?category=building#build-paffinity">http://www.open-mpi.org/faq/?category=building#build-paffinity</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=tuning#using-paffinity">http://www.open-mpi.org/faq/?category=tuning#using-paffinity</a>
<br>
<p>Gus Correa
<br>
<p><pre>
-- 
---------------------------------------------------------------------
Gustavo J. Ponce Correa, PhD - Email: gus_at_[hidden]
Lamont-Doherty Earth Observatory - Columbia University
P.O. Box 1000 [61 Route 9W] - Palisades, NY, 10964-8000 - USA
---------------------------------------------------------------------
Dani&#235;l Mantione wrote:
&gt;Hello,
&gt;
&gt;I'm troubleshooting a weird benchmark situation that having the sm btl 
&gt;enabled gives me worse results than disabling it.
&gt;
&gt;For example, this on a single compute node with 2*Xeon5420, 8 GB RAM and a 
&gt;ConnectX gen2 IB card, with OFED 1.3 and OpenMPI 1.2.6 as software setup:
&gt;
&gt;[cvsupport_at_extern src]$ mpirun -np 8 --mca btl self,sm,openib -hostfile \
&gt;hostfile ./IMB-MPI1.openmpi -npmin 8 PingPong
&gt;
&gt;#---------------------------------------------------
&gt;# Benchmarking PingPong
&gt;# #processes = 2
&gt;# ( 6 additional processes waiting in MPI_Barrier)
&gt;#---------------------------------------------------
&gt;       #bytes #repetitions      t[usec]   Mbytes/sec
&gt;            0         1000         0.87         0.00
&gt;            1         1000         0.98         0.97
&gt;            2         1000         0.97         1.96
&gt;            4         1000         0.99         3.87
&gt;            8         1000         0.98         7.78
&gt;           16         1000         1.15        13.33
&gt;           32         1000         1.13        26.93
&gt;           64         1000         1.12        54.42
&gt;          128         1000         1.27        96.31
&gt;          256         1000         1.55       157.01
&gt;          512         1000         2.04       239.00
&gt;         1024         1000         2.75       355.62
&gt;         2048         1000         4.58       426.40
&gt;         4096         1000         7.12       548.93
&gt;         8192         1000        11.29       692.14
&gt;        16384         1000        18.83       829.75
&gt;        32768         1000        34.57       904.08
&gt;        65536          640        60.73      1029.22
&gt;       131072          320       112.06      1115.43
&gt;       262144          160       215.48      1160.21
&gt;       524288           80       423.34      1181.09
&gt;      1048576           40       858.18      1165.26
&gt;      2097152           20      1744.15      1146.69
&gt;      4194304           10      4055.60       986.29
&gt;
&gt;Now, when disabling the sm btl, the score is:
&gt;
&gt;#---------------------------------------------------
&gt;# Benchmarking PingPong
&gt;# #processes = 2
&gt;# ( 6 additional processes waiting in MPI_Barrier)
&gt;#---------------------------------------------------
&gt;       #bytes #repetitions      t[usec]   Mbytes/sec
&gt;            0         1000         1.08         0.00
&gt;            1         1000         1.42         0.67
&gt;            2         1000         1.19         1.60
&gt;            4         1000         1.21         3.14
&gt;            8         1000         1.61         4.75
&gt;           16         1000         1.30        11.70
&gt;           32         1000         1.32        23.13
&gt;           64         1000         1.61        37.97
&gt;          128         1000         2.80        43.53
&gt;          256         1000         3.21        76.05
&gt;          512         1000         4.06       120.15
&gt;         1024         1000         5.03       194.21
&gt;         2048         1000         7.15       273.05
&gt;         4096         1000        10.05       388.55
&gt;         8192         1000        16.02       487.76
&gt;        16384         1000        29.63       527.41
&gt;        32768         1000        51.23       610.03
&gt;        65536          640        92.26       677.43
&gt;       131072          320       141.03       886.36
&gt;       262144          160       233.62      1070.14
&gt;       524288           80       434.56      1150.60
&gt;      1048576           40       818.84      1221.24
&gt;      2097152           20      1403.75      1424.76
&gt;      4194304           10      2523.40      1585.16
&gt;
&gt;
&gt;Now, I do have fast Infiniband, but I can't believe that the openib btl is 
&gt;supposed to be faster than the sm btl. Does anyone know wether 
&gt;something can be tuned here?
&gt;
&gt;Best regards,
&gt;
&gt;Dani&#235;l Mantione
&gt;
&gt;------------------------------------------------------------------------
&gt;
&gt;_______________________________________________
&gt;users mailing list
&gt;users_at_[hidden]
&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6325.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>Previous message:</strong> <a href="6323.php">Dani&#235;l Mantione: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>In reply to:</strong> <a href="6321.php">Dani&#235;l Mantione: "[OMPI users] SM btl slows down bandwidth?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6326.php">Daniël Mantione: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>Reply:</strong> <a href="6326.php">Daniël Mantione: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
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
