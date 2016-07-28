<?
$subject_val = "Re: [OMPI users] mpi problems,";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  6 13:40:37 2011" -->
<!-- isoreceived="20110406174037" -->
<!-- sent="Wed, 06 Apr 2011 13:42:34 -0400" -->
<!-- isosent="20110406174234" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi problems," -->
<!-- id="4D9CA60A.6080502_at_oracle.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="BANLkTim1nvNdJh+xtTTM7BWmR7-o=R8Njg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi problems,<br>
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-06 13:42:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16162.php">Ralph Castain: "Re: [OMPI users] problems with the -xterm option"</a>
<li><strong>Previous message:</strong> <a href="16160.php">Eugene Loh: "Re: [OMPI users] mpi problems,"</a>
<li><strong>In reply to:</strong> <a href="16159.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16167.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Reply:</strong> <a href="16167.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Something looks fishy about your numbers.  The first two sets of numbers 
<br>
look the same and the last set do look better for the most part.  Your 
<br>
mpirun command line looks weird to me with the &quot;-mca 
<br>
orte_base_help_aggregate btl,openib,self,&quot; did something get chopped off 
<br>
with the text copy?  You should have had a &quot;-mca btl openib,self&quot;.  Can 
<br>
you do a run with &quot;-mca btl tcp,self&quot;, it should be slower.
<br>
<p>I really wouldn't have expected another compiler over IB to be that 
<br>
dramatically lower performing.
<br>
<p>--td
<br>
<p><p>On 04/06/2011 12:40 PM, Nehemiah Dacres wrote:
<br>
<span class="quotelev1">&gt; also, I'm not sure if I'm reading the results right. According to the 
</span><br>
<span class="quotelev1">&gt; last run, did using the sun compilers (update 1 )  result in higher 
</span><br>
<span class="quotelev1">&gt; performance with sunct?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Apr 6, 2011 at 11:38 AM, Nehemiah Dacres &lt;dacresni_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:dacresni_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     some tests I did. I hope this isn't an abuse of the list. please
</span><br>
<span class="quotelev1">&gt;     tell me if it is but thanks to all those who helped me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     this  goes to say that the sun MPI works with programs not
</span><br>
<span class="quotelev1">&gt;     compiled with sun&#146;s compilers.
</span><br>
<span class="quotelev1">&gt;     this first test was run as a base case to see if MPI works., the
</span><br>
<span class="quotelev1">&gt;     sedcond run is to see the speed up using OpenIB provides
</span><br>
<span class="quotelev1">&gt;     jian_at_therock ~]$ mpirun -machinefile list
</span><br>
<span class="quotelev1">&gt;     /opt/iba/src/mpi_apps/mpi_stress/mpi_stress
</span><br>
<span class="quotelev1">&gt;     Start mpi_stress at Wed Apr  6 10:56:29 2011
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Size (bytes)         TxMessages      TxMillionBytes/s      
</span><br>
<span class="quotelev1">&gt;     TxMessages/s
</span><br>
<span class="quotelev1">&gt;                 32              10000                  2.77          
</span><br>
<span class="quotelev1">&gt;     86485.67
</span><br>
<span class="quotelev1">&gt;                 64              10000                  5.76          
</span><br>
<span class="quotelev1">&gt;     90049.42
</span><br>
<span class="quotelev1">&gt;                128              10000                 11.00          
</span><br>
<span class="quotelev1">&gt;     85923.85
</span><br>
<span class="quotelev1">&gt;                256              10000                 18.78          
</span><br>
<span class="quotelev1">&gt;     73344.43
</span><br>
<span class="quotelev1">&gt;                512              10000                 34.47          
</span><br>
<span class="quotelev1">&gt;     67331.98
</span><br>
<span class="quotelev1">&gt;               1024              10000                 34.81          
</span><br>
<span class="quotelev1">&gt;     33998.09
</span><br>
<span class="quotelev1">&gt;               2048              10000                 17.31           
</span><br>
<span class="quotelev1">&gt;     8454.27
</span><br>
<span class="quotelev1">&gt;               4096              10000                 18.34           
</span><br>
<span class="quotelev1">&gt;     4476.61
</span><br>
<span class="quotelev1">&gt;               8192              10000                 25.43           
</span><br>
<span class="quotelev1">&gt;     3104.28
</span><br>
<span class="quotelev1">&gt;              16384              10000                 15.56
</span><br>
<span class="quotelev1">&gt;                 949.50
</span><br>
<span class="quotelev1">&gt;              32768              10000                 13.95
</span><br>
<span class="quotelev1">&gt;                 425.74
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              65536              10000                  9.88
</span><br>
<span class="quotelev1">&gt;                 150.79
</span><br>
<span class="quotelev1">&gt;             131072               8192                 11.05
</span><br>
<span class="quotelev1">&gt;                  84.31
</span><br>
<span class="quotelev1">&gt;             262144               4096                 13.12
</span><br>
<span class="quotelev1">&gt;                  50.04
</span><br>
<span class="quotelev1">&gt;             524288               2048                 16.54
</span><br>
<span class="quotelev1">&gt;                  31.55
</span><br>
<span class="quotelev1">&gt;            1048576               1024                 19.92
</span><br>
<span class="quotelev1">&gt;                  18.99
</span><br>
<span class="quotelev1">&gt;            2097152                512                 22.54
</span><br>
<span class="quotelev1">&gt;                  10.75
</span><br>
<span class="quotelev1">&gt;            4194304                256                 25.46
</span><br>
<span class="quotelev1">&gt;                   6.07
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Iteration 0 : errors = 0, total = 0 (495 secs, Wed Apr  6 11:04:44
</span><br>
<span class="quotelev1">&gt;     2011)
</span><br>
<span class="quotelev1">&gt;     After 1 iteration(s), 8 mins and 15 secs, total errors = 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     here is the infiniband run
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [jian_at_therock ~]$ mpirun -mca orte_base_help_aggregate
</span><br>
<span class="quotelev1">&gt;     btl,openib,self, -machinefile list
</span><br>
<span class="quotelev1">&gt;     /opt/iba/src/mpi_apps/mpi_stress/mpi_stress
</span><br>
<span class="quotelev1">&gt;     Start mpi_stress at Wed Apr  6 11:07:06 2011
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Size (bytes)         TxMessages      TxMillionBytes/s      
</span><br>
<span class="quotelev1">&gt;     TxMessages/s
</span><br>
<span class="quotelev1">&gt;             32              10000                  2.72           84907.69
</span><br>
<span class="quotelev1">&gt;             64              10000                  5.83           91097.94
</span><br>
<span class="quotelev1">&gt;            128              10000                 10.75           83959.63
</span><br>
<span class="quotelev1">&gt;            256              10000                 18.53           72384.48
</span><br>
<span class="quotelev1">&gt;            512              10000                 34.96           68285.00
</span><br>
<span class="quotelev1">&gt;           1024              10000                 11.40           11133.10
</span><br>
<span class="quotelev1">&gt;           2048              10000                 20.88           10196.34
</span><br>
<span class="quotelev1">&gt;           4096              10000                 10.13            2472.13
</span><br>
<span class="quotelev1">&gt;           8192              10000                 19.32            2358.25
</span><br>
<span class="quotelev1">&gt;          16384              10000                 14.58             890.10
</span><br>
<span class="quotelev1">&gt;          32768              10000                 15.85             483.61
</span><br>
<span class="quotelev1">&gt;          65536              10000                  9.04             137.95
</span><br>
<span class="quotelev1">&gt;          131072        8192                 10.90              83.12
</span><br>
<span class="quotelev1">&gt;         262144                   4096                 13.57
</span><br>
<span class="quotelev1">&gt;                  51.76
</span><br>
<span class="quotelev1">&gt;         524288                  2048                 16.82
</span><br>
<span class="quotelev1">&gt;                  32.08
</span><br>
<span class="quotelev1">&gt;        1048576        1024                 19.10              18.21
</span><br>
<span class="quotelev1">&gt;        2097152                512                 22.13              10.55
</span><br>
<span class="quotelev1">&gt;        4194304                256                 21.66               5.16
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Iteration 0 : errors = 0, total = 0 (511 secs, Wed Apr  6 11:15:37
</span><br>
<span class="quotelev1">&gt;     2011)
</span><br>
<span class="quotelev1">&gt;     After 1 iteration(s), 8 mins and 31 secs, total errors = 0
</span><br>
<span class="quotelev1">&gt;     compiled with the sun compilers i think
</span><br>
<span class="quotelev1">&gt;     [jian_at_therock ~]$ mpirun -mca orte_base_help_aggregate
</span><br>
<span class="quotelev1">&gt;     btl,openib,self, -machinefile list sunMpiStress
</span><br>
<span class="quotelev1">&gt;     Start mpi_stress at Wed Apr  6 11:23:18 2011
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Size (bytes)         TxMessages      TxMillionBytes/s      
</span><br>
<span class="quotelev1">&gt;     TxMessages/s
</span><br>
<span class="quotelev1">&gt;                 32              10000                  2.60          
</span><br>
<span class="quotelev1">&gt;     81159.60
</span><br>
<span class="quotelev1">&gt;                 64              10000                  5.19          
</span><br>
<span class="quotelev1">&gt;     81016.95
</span><br>
<span class="quotelev1">&gt;                128              10000                 10.23          
</span><br>
<span class="quotelev1">&gt;     79953.34
</span><br>
<span class="quotelev1">&gt;                256              10000                 16.74          
</span><br>
<span class="quotelev1">&gt;     65406.52
</span><br>
<span class="quotelev1">&gt;                512              10000                 23.71          
</span><br>
<span class="quotelev1">&gt;     46304.92
</span><br>
<span class="quotelev1">&gt;               1024              10000                 54.62          
</span><br>
<span class="quotelev1">&gt;     53340.73
</span><br>
<span class="quotelev1">&gt;               2048              10000                 45.75          
</span><br>
<span class="quotelev1">&gt;     22340.58
</span><br>
<span class="quotelev1">&gt;               4096              10000                 29.32           
</span><br>
<span class="quotelev1">&gt;     7158.87
</span><br>
<span class="quotelev1">&gt;               8192              10000                 28.61           
</span><br>
<span class="quotelev1">&gt;     3492.77
</span><br>
<span class="quotelev1">&gt;              16384              10000                184.03          
</span><br>
<span class="quotelev1">&gt;     11232.26
</span><br>
<span class="quotelev1">&gt;              32768              10000                215.69           
</span><br>
<span class="quotelev1">&gt;     6582.21
</span><br>
<span class="quotelev1">&gt;              65536              10000                229.88           
</span><br>
<span class="quotelev1">&gt;     3507.64
</span><br>
<span class="quotelev1">&gt;             131072               8192                231.64           
</span><br>
<span class="quotelev1">&gt;     1767.25
</span><br>
<span class="quotelev1">&gt;             262144               4096                220.73
</span><br>
<span class="quotelev1">&gt;                 842.00
</span><br>
<span class="quotelev1">&gt;             524288               2048                121.61
</span><br>
<span class="quotelev1">&gt;                 231.95
</span><br>
<span class="quotelev1">&gt;            1048576               1024                 66.54
</span><br>
<span class="quotelev1">&gt;                  63.46
</span><br>
<span class="quotelev1">&gt;            2097152                512                 44.20
</span><br>
<span class="quotelev1">&gt;                  21.08
</span><br>
<span class="quotelev1">&gt;            4194304                256                 45.17
</span><br>
<span class="quotelev1">&gt;                  10.77
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Iteration 0 : errors = 0, total = 0 (93 secs, Wed Apr  6 11:24:52
</span><br>
<span class="quotelev1">&gt;     2011)
</span><br>
<span class="quotelev1">&gt;     After 1 iteration(s), 1 mins and 33 secs, total errors = 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     sanity check: was sunMpiStress compiled using the sun compilers or
</span><br>
<span class="quotelev1">&gt;     oracle compilerrs ?
</span><br>
<span class="quotelev1">&gt;     [jian_at_therock ~]$ which mpirun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /opt/SUNWhpc/HPC8.2.1c/sun/bin/mpirun
</span><br>
<span class="quotelev1">&gt;     [jian_at_therock ~]$ ldd sunMpiStress
</span><br>
<span class="quotelev1">&gt;        libmpi.so.0 =&gt; /opt/SUNWhpc/HPC8.2.1c/sun/lib/lib64/libmpi.so.0
</span><br>
<span class="quotelev1">&gt;     (0x00002b5d2c6c3000)
</span><br>
<span class="quotelev1">&gt;        libopen-rte.so.0 =&gt;
</span><br>
<span class="quotelev1">&gt;     /opt/SUNWhpc/HPC8.2.1c/sun/lib/lib64/libopen-rte.so.0
</span><br>
<span class="quotelev1">&gt;     (0x00002b5d2c8c1000)
</span><br>
<span class="quotelev1">&gt;        libopen-pal.so.0 =&gt;
</span><br>
<span class="quotelev1">&gt;     /opt/SUNWhpc/HPC8.2.1c/sun/lib/lib64/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt;     (0x00002b5d2ca19000)
</span><br>
<span class="quotelev1">&gt;        libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x0000003361400000)
</span><br>
<span class="quotelev1">&gt;        librt.so.1 =&gt; /lib64/librt.so.1 (0x000000335f400000)
</span><br>
<span class="quotelev1">&gt;        libm.so.6 =&gt; /lib64/libm.so.6 (0x000000335e400000)
</span><br>
<span class="quotelev1">&gt;        libdl.so.2 =&gt; /lib64/libdl.so.2 (0x000000335e800000)
</span><br>
<span class="quotelev1">&gt;        libutil.so.1 =&gt; /lib64/libutil.so.1 (0x000000336ba00000)
</span><br>
<span class="quotelev1">&gt;        libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x000000335ec00000)
</span><br>
<span class="quotelev1">&gt;        libc.so.6 =&gt; /lib64/libc.so.6 (0x000000335e000000)
</span><br>
<span class="quotelev1">&gt;        /lib64/ld-linux-x86-64.so.2 (0x000000335dc00000)
</span><br>
<span class="quotelev1">&gt;     [jian_at_therock ~]$ which mpicc
</span><br>
<span class="quotelev1">&gt;     /opt/SUNWhpc/HPC8.2.1c/sun/bin/mpicc
</span><br>
<span class="quotelev1">&gt;     [jian_at_therock ~]$ mpicc
</span><br>
<span class="quotelev1">&gt;     /opt/iba/src/mpi_apps/mpi_stress/mpi_stress.c -o sunMpiStress --showme
</span><br>
<span class="quotelev1">&gt;     cc/opt/iba/src/mpi_apps/mpi_stress/mpi_stress.c -o sunMpiStress
</span><br>
<span class="quotelev1">&gt;     -I/opt/SUNWhpc/HPC8.2.1c/sun/include/64
</span><br>
<span class="quotelev1">&gt;     -I/opt/SUNWhpc/HPC8.2.1c/sun/include/64/openmpi
</span><br>
<span class="quotelev1">&gt;     -R/opt/mx/lib/lib64 -R/opt/SUNWhpc/HPC8.2.1c/sun/lib/lib64
</span><br>
<span class="quotelev1">&gt;     -L/opt/SUNWhpc/HPC8.2.1c/sun/lib/lib64 -lmpi -lopen-rte -lopen-pal
</span><br>
<span class="quotelev1">&gt;     -lnsl -lrt -lm -ldl -lutil -lpthread
</span><br>
<span class="quotelev1">&gt;     [jian_at_therock ~]$ which cc
</span><br>
<span class="quotelev1">&gt;     /opt/sun/sunstudio12.1/bin/cc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     looks like it!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Nehemiah I. Dacres
</span><br>
<span class="quotelev1">&gt; System Administrator
</span><br>
<span class="quotelev1">&gt; Advanced Technology Group Saint Louis University
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16161/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-16161/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16162.php">Ralph Castain: "Re: [OMPI users] problems with the -xterm option"</a>
<li><strong>Previous message:</strong> <a href="16160.php">Eugene Loh: "Re: [OMPI users] mpi problems,"</a>
<li><strong>In reply to:</strong> <a href="16159.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16167.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Reply:</strong> <a href="16167.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
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
