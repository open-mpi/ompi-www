<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb 23 15:03:44 2006" -->
<!-- isoreceived="20060223200344" -->
<!-- sent="Thu, 23 Feb 2006 15:03:40 -0500 (EST)" -->
<!-- isosent="20060223200340" -->
<!-- name="Graham E Fagg" -->
<!-- email="fagg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] fresh benchmarks for &amp;quot;alltoall&amp;quot;" -->
<!-- id="Pine.LNX.4.62.0602231500010.29257_at_reliant.cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060223185932.54657.qmail_at_web52006.mail.yahoo.com" -->
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
<strong>From:</strong> Graham E Fagg (<em>fagg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-23 15:03:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0690.php">Scott Weitzenkamp \(sweitzen\): "Re: [OMPI users] couple of subversion questions"</a>
<li><strong>Previous message:</strong> <a href="0688.php">Konstantin Kudin: "[OMPI users] fresh benchmarks for &quot;alltoall&quot;"</a>
<li><strong>In reply to:</strong> <a href="0688.php">Konstantin Kudin: "[OMPI users] fresh benchmarks for &quot;alltoall&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0714.php">Jeff Squyres: "Re: [OMPI users] fresh benchmarks for &quot;alltoall&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Konstantin,
<br>
&nbsp;&nbsp;we are in the process of adding 3 more alltoall variants plus two 
<br>
additional alltoallv methods by midweek next week, so hopefully we can 
<br>
find the method that works best for your network. (two of the new methods 
<br>
do slightly different request management and communication ordering to 
<br>
reduce 'stress' on interconnect switches.)
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;&nbsp;Graham.
<br>
-----------------------------------------------------------------------
<br>
Dr Graham E. Fagg       | Distributed, Parallel and Meta-Computing
<br>
Innovative Computing Lab. PVM3.4, HARNESS, FT-MPI &amp; Open MPI
<br>
Computer Science Dept   | Suite 203, 1122 Volunteer Blvd,
<br>
University of Tennessee | Knoxville, Tennessee, USA. TN 37996-3450
<br>
Email: fagg_at_[hidden]  | Phone:+1(865)974-5790 | Fax:+1(865)974-8296
<br>
Broken complex systems are always derived from working simple systems
<br>
-----------------------------------------------------------------------
<br>
<p>&nbsp;&nbsp;On Thu, 23 Feb 2006, Konstantin Kudin wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I retested the very recent trunk with the skampi 4.1. The &quot;alltoall&quot;
</span><br>
<span class="quotelev1">&gt; works quite nicely up to 7 dual Opterons, whereas bunch of
</span><br>
<span class="quotelev1">&gt; isend+irecv's choke. There appear to be some &quot;special&quot; effects related
</span><br>
<span class="quotelev1">&gt; to the 1Gbit setup we are using (problems with broadcom adapters?), and
</span><br>
<span class="quotelev1">&gt; unless there is a clever &quot;alltoall&quot; scheme, things fall apart for large
</span><br>
<span class="quotelev1">&gt; packets. Anyway, if &quot;alltoall&quot; gets pushed even further, that'd be very
</span><br>
<span class="quotelev1">&gt; useful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is the approximate time frame for officially releasing version
</span><br>
<span class="quotelev1">&gt; 1.1 ? High performance &quot;alltoall&quot; will be of great use for a whole
</span><br>
<span class="quotelev1">&gt; bunch of packages where the most challenging parallel part is
</span><br>
<span class="quotelev1">&gt; distributed FFTs, which usually rely on &quot;alltoall&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Konstantin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; %%%%%
</span><br>
<span class="quotelev1">&gt; openmpi-1.1a1r9108
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Columns: ncpu, average latency, std. deviation, ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; message size: 16x4=64kbyte
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #/*@insyncol_MPI_Alltoall-nodes-long-SM.ski*/
</span><br>
<span class="quotelev1">&gt;       2     275.1      1.6      8     275.1      1.6      8
</span><br>
<span class="quotelev1">&gt;       3    1890.2     31.3      8    1890.2     31.3      8
</span><br>
<span class="quotelev1">&gt;       4    3467.1     85.0      8    3467.1     85.0      8
</span><br>
<span class="quotelev1">&gt;       5    5843.9     66.3      8    5843.9     66.3      8
</span><br>
<span class="quotelev1">&gt;       6    8720.9    110.6      8    8720.9    110.6      8
</span><br>
<span class="quotelev1">&gt;       7    9598.8     99.6      7    9598.8     99.6      7
</span><br>
<span class="quotelev1">&gt;       8   11757.9    256.4      6   11757.9    256.4      6
</span><br>
<span class="quotelev1">&gt;       9   13428.2    166.4      8   13428.2    166.4      8
</span><br>
<span class="quotelev1">&gt;      10   14623.4    176.2      8   14623.4    176.2      8
</span><br>
<span class="quotelev1">&gt;      11   16689.4    171.9      4   16689.4    171.9      4
</span><br>
<span class="quotelev1">&gt;      12   18941.4    502.9      5   18941.4    502.9      5
</span><br>
<span class="quotelev1">&gt;      13   20105.2     99.0      8   20105.2     99.0      8
</span><br>
<span class="quotelev1">&gt;      14   22731.1    155.0      2   22731.1    155.0      2
</span><br>
<span class="quotelev1">&gt;      15  123939.7  49248.4      8  123939.7  49248.4      8
</span><br>
<span class="quotelev1">&gt;      16  142048.0  43888.8      8  142048.0  43888.8      8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #/*@insyncol_MPI_Alltoall_Isend_Irecv-nodes-long-SM.ski*/
</span><br>
<span class="quotelev1">&gt;      2     247.4      0.8      8     247.4      0.8      8
</span><br>
<span class="quotelev1">&gt;       3    1861.8     10.1      8    1861.8     10.1      8
</span><br>
<span class="quotelev1">&gt;       4    3158.4     24.5      8    3158.4     24.5      8
</span><br>
<span class="quotelev1">&gt;       5    4270.0     75.0      2    4270.0     75.0      2
</span><br>
<span class="quotelev1">&gt;       6  225351.5  12504.5      2  225351.5  12504.5      2
</span><br>
<span class="quotelev1">&gt;       7  228399.5  14770.5      2  228399.5  14770.5      2
</span><br>
<span class="quotelev1">&gt;       8  247087.5  14448.4      2  247087.5  14448.4      2
</span><br>
<span class="quotelev1">&gt;       9  243806.7   3878.9      8  243806.7   3878.9      8
</span><br>
<span class="quotelev1">&gt;      10  248353.0   6640.9      2  248353.0   6640.9      2
</span><br>
<span class="quotelev1">&gt;      11  267541.5   5210.1      8  267541.5   5210.1      8
</span><br>
<span class="quotelev1">&gt;      12  286600.1   1665.1      2  286600.1   1665.1      2
</span><br>
<span class="quotelev1">&gt;      13  277546.5   4208.1      8  277546.5   4208.1      8
</span><br>
<span class="quotelev1">&gt;      14  364208.9  98276.9      2  364208.9  98276.9      2
</span><br>
<span class="quotelev1">&gt;      15  392139.0 101163.9      2  392139.0 101163.9      2
</span><br>
<span class="quotelev1">&gt;      16  367182.1  97711.0      2  367182.1  97711.0      2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #/*@insyncol_MPI_Alltoallv-nodes-long-SM.ski*/
</span><br>
<span class="quotelev1">&gt;       2     279.8      1.0      8     279.8      1.0      8
</span><br>
<span class="quotelev1">&gt;       3    1633.5     19.9      8    1633.5     19.9      8
</span><br>
<span class="quotelev1">&gt;       4    2834.1     12.5      8    2834.1     12.5      8
</span><br>
<span class="quotelev1">&gt;       5    4530.1    173.2      8    4530.1    173.2      8
</span><br>
<span class="quotelev1">&gt;       6  147548.2  41749.4      8  147548.2  41749.4      8
</span><br>
<span class="quotelev1">&gt;       7  248700.8   7621.9      8  248700.8   7621.9      8
</span><br>
<span class="quotelev1">&gt;       8  261050.8   5618.6      8  261050.8   5618.6      8
</span><br>
<span class="quotelev1">&gt;       9  256836.4   4441.5      8  256836.4   4441.5      8
</span><br>
<span class="quotelev1">&gt;      10  274444.8   4019.0      8  274444.8   4019.0      8
</span><br>
<span class="quotelev1">&gt;      11  275536.6   6338.7      8  275536.6   6338.7      8
</span><br>
<span class="quotelev1">&gt;      12  282339.6   8411.8      8  282339.6   8411.8      8
</span><br>
<span class="quotelev1">&gt;      13  303240.3  23093.0      8  303240.3  23093.0      8
</span><br>
<span class="quotelev1">&gt;      14  399687.1  49633.4      8  399687.1  49633.4      8
</span><br>
<span class="quotelev1">&gt;      15  359080.9  33852.4      8  359080.9  33852.4      8
</span><br>
<span class="quotelev1">&gt;      16  337081.5  30155.5      8  337081.5  30155.5      8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; __________________________________________________
</span><br>
<span class="quotelev1">&gt; Do You Yahoo!?
</span><br>
<span class="quotelev1">&gt; Tired of spam?  Yahoo! Mail has the best spam protection around
</span><br>
<span class="quotelev1">&gt; <a href="http://mail.yahoo.com">http://mail.yahoo.com</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Graham.
<br>
----------------------------------------------------------------------
<br>
Dr Graham E. Fagg       | Distributed, Parallel and Meta-Computing
<br>
Innovative Computing Lab. PVM3.4, HARNESS, FT-MPI, SNIPE &amp; Open MPI
<br>
Computer Science Dept   | Suite 203, 1122 Volunteer Blvd,
<br>
University of Tennessee | Knoxville, Tennessee, USA. TN 37996-3450
<br>
Email: fagg_at_[hidden]  | Phone:+1(865)974-5790 | Fax:+1(865)974-8296
<br>
Broken complex systems are always derived from working simple systems
<br>
----------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0690.php">Scott Weitzenkamp \(sweitzen\): "Re: [OMPI users] couple of subversion questions"</a>
<li><strong>Previous message:</strong> <a href="0688.php">Konstantin Kudin: "[OMPI users] fresh benchmarks for &quot;alltoall&quot;"</a>
<li><strong>In reply to:</strong> <a href="0688.php">Konstantin Kudin: "[OMPI users] fresh benchmarks for &quot;alltoall&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0714.php">Jeff Squyres: "Re: [OMPI users] fresh benchmarks for &quot;alltoall&quot;"</a>
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
