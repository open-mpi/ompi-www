<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb 23 13:59:47 2006" -->
<!-- isoreceived="20060223185947" -->
<!-- sent="Thu, 23 Feb 2006 10:59:32 -0800 (PST)" -->
<!-- isosent="20060223185932" -->
<!-- name="Konstantin Kudin" -->
<!-- email="konstantin_kudin_at_[hidden]" -->
<!-- subject="[OMPI users] fresh benchmarks for &amp;quot;alltoall&amp;quot;" -->
<!-- id="20060223185932.54657.qmail_at_web52006.mail.yahoo.com" -->
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
<strong>From:</strong> Konstantin Kudin (<em>konstantin_kudin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-23 13:59:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0689.php">Graham E Fagg: "Re: [OMPI users] fresh benchmarks for &quot;alltoall&quot;"</a>
<li><strong>Previous message:</strong> <a href="0687.php">Emanuel Ziegler: "[OMPI users] mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0689.php">Graham E Fagg: "Re: [OMPI users] fresh benchmarks for &quot;alltoall&quot;"</a>
<li><strong>Reply:</strong> <a href="0689.php">Graham E Fagg: "Re: [OMPI users] fresh benchmarks for &quot;alltoall&quot;"</a>
<li><strong>Reply:</strong> <a href="0714.php">Jeff Squyres: "Re: [OMPI users] fresh benchmarks for &quot;alltoall&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;Hi all,
<br>
<p>&nbsp;I retested the very recent trunk with the skampi 4.1. The &quot;alltoall&quot;
<br>
works quite nicely up to 7 dual Opterons, whereas bunch of
<br>
isend+irecv's choke. There appear to be some &quot;special&quot; effects related
<br>
to the 1Gbit setup we are using (problems with broadcom adapters?), and
<br>
unless there is a clever &quot;alltoall&quot; scheme, things fall apart for large
<br>
packets. Anyway, if &quot;alltoall&quot; gets pushed even further, that'd be very
<br>
useful.
<br>
<p>&nbsp;What is the approximate time frame for officially releasing version
<br>
1.1 ? High performance &quot;alltoall&quot; will be of great use for a whole
<br>
bunch of packages where the most challenging parallel part is
<br>
distributed FFTs, which usually rely on &quot;alltoall&quot;.
<br>
<p>&nbsp;Konstantin
<br>
<p>%%%%%
<br>
openmpi-1.1a1r9108
<br>
<p>&nbsp;Columns: ncpu, average latency, std. deviation, ...
<br>
&nbsp;
<br>
&nbsp;message size: 16x4=64kbyte
<br>
<p>#/*@insyncol_MPI_Alltoall-nodes-long-SM.ski*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2     275.1      1.6      8     275.1      1.6      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3    1890.2     31.3      8    1890.2     31.3      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4    3467.1     85.0      8    3467.1     85.0      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5    5843.9     66.3      8    5843.9     66.3      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6    8720.9    110.6      8    8720.9    110.6      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7    9598.8     99.6      7    9598.8     99.6      7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8   11757.9    256.4      6   11757.9    256.4      6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9   13428.2    166.4      8   13428.2    166.4      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10   14623.4    176.2      8   14623.4    176.2      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;11   16689.4    171.9      4   16689.4    171.9      4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12   18941.4    502.9      5   18941.4    502.9      5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;13   20105.2     99.0      8   20105.2     99.0      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;14   22731.1    155.0      2   22731.1    155.0      2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;15  123939.7  49248.4      8  123939.7  49248.4      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16  142048.0  43888.8      8  142048.0  43888.8      8
<br>
<p>#/*@insyncol_MPI_Alltoall_Isend_Irecv-nodes-long-SM.ski*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2     247.4      0.8      8     247.4      0.8      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3    1861.8     10.1      8    1861.8     10.1      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4    3158.4     24.5      8    3158.4     24.5      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5    4270.0     75.0      2    4270.0     75.0      2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6  225351.5  12504.5      2  225351.5  12504.5      2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7  228399.5  14770.5      2  228399.5  14770.5      2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8  247087.5  14448.4      2  247087.5  14448.4      2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9  243806.7   3878.9      8  243806.7   3878.9      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10  248353.0   6640.9      2  248353.0   6640.9      2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;11  267541.5   5210.1      8  267541.5   5210.1      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12  286600.1   1665.1      2  286600.1   1665.1      2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;13  277546.5   4208.1      8  277546.5   4208.1      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;14  364208.9  98276.9      2  364208.9  98276.9      2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;15  392139.0 101163.9      2  392139.0 101163.9      2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16  367182.1  97711.0      2  367182.1  97711.0      2
<br>
<p>#/*@insyncol_MPI_Alltoallv-nodes-long-SM.ski*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2     279.8      1.0      8     279.8      1.0      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3    1633.5     19.9      8    1633.5     19.9      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4    2834.1     12.5      8    2834.1     12.5      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5    4530.1    173.2      8    4530.1    173.2      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6  147548.2  41749.4      8  147548.2  41749.4      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7  248700.8   7621.9      8  248700.8   7621.9      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8  261050.8   5618.6      8  261050.8   5618.6      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9  256836.4   4441.5      8  256836.4   4441.5      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10  274444.8   4019.0      8  274444.8   4019.0      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;11  275536.6   6338.7      8  275536.6   6338.7      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12  282339.6   8411.8      8  282339.6   8411.8      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;13  303240.3  23093.0      8  303240.3  23093.0      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;14  399687.1  49633.4      8  399687.1  49633.4      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;15  359080.9  33852.4      8  359080.9  33852.4      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16  337081.5  30155.5      8  337081.5  30155.5      8
<br>
<p><p>__________________________________________________
<br>
Do You Yahoo!?
<br>
Tired of spam?  Yahoo! Mail has the best spam protection around 
<br>
<a href="http://mail.yahoo.com">http://mail.yahoo.com</a> 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0689.php">Graham E Fagg: "Re: [OMPI users] fresh benchmarks for &quot;alltoall&quot;"</a>
<li><strong>Previous message:</strong> <a href="0687.php">Emanuel Ziegler: "[OMPI users] mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0689.php">Graham E Fagg: "Re: [OMPI users] fresh benchmarks for &quot;alltoall&quot;"</a>
<li><strong>Reply:</strong> <a href="0689.php">Graham E Fagg: "Re: [OMPI users] fresh benchmarks for &quot;alltoall&quot;"</a>
<li><strong>Reply:</strong> <a href="0714.php">Jeff Squyres: "Re: [OMPI users] fresh benchmarks for &quot;alltoall&quot;"</a>
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
