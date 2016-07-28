<?
$subject_val = "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance problem on SM";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 23 10:13:58 2008" -->
<!-- isoreceived="20080723141358" -->
<!-- sent="Wed, 23 Jul 2008 10:13:44 -0400" -->
<!-- isosent="20080723141344" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance problem on SM" -->
<!-- id="F946FBB4-59A1-4DC5-A053-5289C71A6C9D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2BBCCC72-28D1-4B6D-97AE-5E0D59A46278_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance problem on SM<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-23 10:13:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4406.php">Jeff Squyres: "Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;"</a>
<li><strong>Previous message:</strong> <a href="4404.php">Ralf Wildenhues: "Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed	-Wl, --no-undefined&quot;"</a>
<li><strong>In reply to:</strong> <a href="4403.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance problem on SM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4407.php">Terry Dontje: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance	problem on SM"</a>
<li><strong>Reply:</strong> <a href="4407.php">Terry Dontje: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance	problem on SM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Doh!  I guess we still don't have that calculating right yet; I  
<br>
thought we had fixed that...
<br>
<p>[7:12] svbu-mpi052:~/svn/ompi-tests/NetPIPE-3.7.1 % mpirun --mca  
<br>
mpi_paffinity_alone 1 -np 2 --mca btl sm,self --mca  
<br>
mpi_yield_when_idle 0 NPmpi
<br>
0: svbu-mpi052
<br>
1: svbu-mpi052
<br>
Now starting the main loop
<br>
&nbsp;&nbsp;&nbsp;0:       1 bytes 131689 times --&gt;     11.22 Mbps in       0.68 usec
<br>
&nbsp;&nbsp;&nbsp;1:       2 bytes 147026 times --&gt;     22.54 Mbps in       0.68 usec
<br>
&nbsp;&nbsp;&nbsp;2:       3 bytes 147741 times --&gt;     33.65 Mbps in       0.68 usec
<br>
...
<br>
<p>[7:12] svbu-mpi052:~/svn/ompi-tests/osu % mpirun --mca  
<br>
mpi_paffinity_alone 1 -np 2 --mca btl sm,self --mca  
<br>
mpi_yield_when_idle 0 osu_latency
<br>
# OSU MPI Latency Test (Version 2.1)
<br>
# Size		Latency (us)
<br>
0		0.64
<br>
1		0.67
<br>
2		0.67
<br>
4		0.74
<br>
...
<br>
<p>I'll check with Ralph.
<br>
<p><p><p>On Jul 23, 2008, at 10:01 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Can you try the HEAD with the mpi_yield_when_idle set to 0 please.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks,
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 23, 2008, at 3:39 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Short version: I'm seeing a large performance drop between r18850  
</span><br>
<span class="quotelev2">&gt;&gt; and the SVN HEAD.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Longer version:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FWIW, I ran the tests on 3 versions on a woodcrest-class x86_64  
</span><br>
<span class="quotelev2">&gt;&gt; machine running RHEL4U4:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * Trunk HEAD (r18997)
</span><br>
<span class="quotelev2">&gt;&gt; * r18973 --&gt; had to patch the cpu64* thingy in openib btl to get it  
</span><br>
<span class="quotelev2">&gt;&gt; to compile
</span><br>
<span class="quotelev2">&gt;&gt; * r18850
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I ran both osu_latency and NetPIPE 3.7.1.  In the r18997 and  
</span><br>
<span class="quotelev2">&gt;&gt; r18973, the latency for short sends over sm is *significantly*  
</span><br>
<span class="quotelev2">&gt;&gt; higher than that of r18850.  Detailed results below.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ================================================================
</span><br>
<span class="quotelev2">&gt;&gt; r18997
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [6:27] svbu-mpi052:~/svn/ompi-tests/NetPIPE-3.7.1 % mpirun --mca  
</span><br>
<span class="quotelev2">&gt;&gt; mpi_paffinity_alone 1 -np 2 --mca btl sm,self NPmpi
</span><br>
<span class="quotelev2">&gt;&gt; 0: svbu-mpi052
</span><br>
<span class="quotelev2">&gt;&gt; 1: svbu-mpi052
</span><br>
<span class="quotelev2">&gt;&gt; Now starting the main loop
</span><br>
<span class="quotelev2">&gt;&gt; 0:       1 bytes  85423 times --&gt;      8.23 Mbps in       0.93 usec
</span><br>
<span class="quotelev2">&gt;&gt; 1:       2 bytes 107852 times --&gt;     16.46 Mbps in       0.93 usec
</span><br>
<span class="quotelev2">&gt;&gt; 2:       3 bytes 107874 times --&gt;     24.65 Mbps in       0.93 usec
</span><br>
<span class="quotelev2">&gt;&gt; 3:       4 bytes  71801 times --&gt;     30.36 Mbps in       1.01 usec
</span><br>
<span class="quotelev2">&gt;&gt; 4:       6 bytes  74610 times --&gt;     45.27 Mbps in       1.01 usec
</span><br>
<span class="quotelev2">&gt;&gt; 5:       8 bytes  49448 times --&gt;     60.59 Mbps in       1.01 usec
</span><br>
<span class="quotelev2">&gt;&gt; 6:      12 bytes  62044 times --&gt;     90.72 Mbps in       1.01 usec
</span><br>
<span class="quotelev2">&gt;&gt; 7:      13 bytes  41287 times --&gt;     98.58 Mbps in       1.01 usec
</span><br>
<span class="quotelev2">&gt;&gt; 8:      16 bytes  45872 times --&gt;    120.81 Mbps in       1.01 usec
</span><br>
<span class="quotelev2">&gt;&gt; 9:      19 bytes  55670 times --&gt;    143.78 Mbps in       1.01 usec
</span><br>
<span class="quotelev2">&gt;&gt; 10:      21 bytes  62644 times --&gt;    156.63 Mbps in       1.02 usec
</span><br>
<span class="quotelev2">&gt;&gt; 11:      24 bytes  65172 times --&gt;    177.63 Mbps in       1.03 usec
</span><br>
<span class="quotelev2">&gt;&gt; 12:      27 bytes  68714 times --&gt;    187.21 Mbps in       1.10 usec
</span><br>
<span class="quotelev2">&gt;&gt; 13:      29 bytes  40392 times --&gt;    201.05 Mbps in       1.10 usec
</span><br>
<span class="quotelev2">&gt;&gt; 14:      32 bytes  43868 times --&gt;    220.92 Mbps in       1.11 usec
</span><br>
<span class="quotelev2">&gt;&gt; 15:      35 bytes  48072 times --&gt;    255.73 Mbps in       1.04 usec
</span><br>
<span class="quotelev2">&gt;&gt; 16:      45 bytes  54725 times --&gt;    308.90 Mbps in       1.11 usec
</span><br>
<span class="quotelev2">&gt;&gt; 17:      48 bytes  59983 times --&gt;    329.04 Mbps in       1.11 usec
</span><br>
<span class="quotelev2">&gt;&gt; 18:      51 bytes  61772 times --&gt;    348.53 Mbps in       1.12 usec
</span><br>
<span class="quotelev2">&gt;&gt; 19:      61 bytes  35126 times --&gt;    408.86 Mbps in       1.14 usec
</span><br>
<span class="quotelev2">&gt;&gt; 20:      64 bytes  43206 times --&gt;    453.67 Mbps in       1.08 usec
</span><br>
<span class="quotelev2">&gt;&gt; 21:      67 bytes  47907 times --&gt;    487.77 Mbps in       1.05 usec
</span><br>
<span class="quotelev2">&gt;&gt; 22:      93 bytes  51271 times --&gt;    561.32 Mbps in       1.26 usec
</span><br>
<span class="quotelev2">&gt;&gt; 23:      96 bytes  52741 times --&gt;    595.08 Mbps in       1.23 usec
</span><br>
<span class="quotelev2">&gt;&gt; 24:      99 bytes  55012 times --&gt;    617.64 Mbps in       1.22 usec
</span><br>
<span class="quotelev2">&gt;&gt; 25:     125 bytes  29735 times --&gt;    736.44 Mbps in       1.29 usec
</span><br>
<span class="quotelev2">&gt;&gt; 26:     128 bytes  38301 times --&gt;    779.33 Mbps in       1.25 usec
</span><br>
<span class="quotelev2">&gt;&gt; 27:     131 bytes  40525 times --&gt;    818.32 Mbps in       1.22 usec
</span><br>
<span class="quotelev2">&gt;&gt; 28:     189 bytes  42501 times --&gt;   1007.67 Mbps in       1.43 usec
</span><br>
<span class="quotelev2">&gt;&gt; 29:     192 bytes  46588 times --&gt;   1084.13 Mbps in       1.35 usec
</span><br>
<span class="quotelev2">&gt;&gt; 30:     195 bytes  49725 times --&gt;   1128.97 Mbps in       1.32 usec
</span><br>
<span class="quotelev2">&gt;&gt; 31:     253 bytes  26462 times --&gt;   1257.97 Mbps in       1.53 usec
</span><br>
<span class="quotelev2">&gt;&gt; 32:     256 bytes  32457 times --&gt;   1304.17 Mbps in       1.50 usec
</span><br>
<span class="quotelev2">&gt;&gt; 33:     259 bytes  33647 times --&gt;   1354.14 Mbps in       1.46 usec
</span><br>
<span class="quotelev2">&gt;&gt; 34:     381 bytes  34925 times --&gt;   1616.43 Mbps in       1.80 usec
</span><br>
<span class="quotelev2">&gt;&gt; 35:     384 bytes  37072 times --&gt;   1676.92 Mbps in       1.75 usec
</span><br>
<span class="quotelev2">&gt;&gt; 36:     387 bytes  38308 times --&gt;   1724.50 Mbps in       1.71 usec
</span><br>
<span class="quotelev2">&gt;&gt; 37:     509 bytes  19921 times --&gt;   1908.30 Mbps in       2.03 usec
</span><br>
<span class="quotelev2">&gt;&gt; 38:     512 bytes  24521 times --&gt;   2013.16 Mbps in       1.94 usec
</span><br>
<span class="quotelev2">&gt;&gt; 39:     515 bytes  25869 times --&gt;   2038.18 Mbps in       1.93 usec
</span><br>
<span class="quotelev2">&gt;&gt; 40:     765 bytes  26188 times --&gt;   2474.81 Mbps in       2.36 usec
</span><br>
<span class="quotelev2">&gt;&gt; 41:     768 bytes  28268 times --&gt;   2513.00 Mbps in       2.33 usec
</span><br>
<span class="quotelev2">&gt;&gt; 42:     771 bytes  28648 times --&gt;   2531.45 Mbps in       2.32 usec
</span><br>
<span class="quotelev2">&gt;&gt; 43:    1021 bytes  14512 times --&gt;   2831.70 Mbps in       2.75 usec
</span><br>
<span class="quotelev2">&gt;&gt; 44:    1024 bytes  18158 times --&gt;   2853.94 Mbps in       2.74 usec
</span><br>
<span class="quotelev2">&gt;&gt; 45:    1027 bytes  18300 times --&gt;   2872.58 Mbps in       2.73 usec
</span><br>
<span class="quotelev2">&gt;&gt; 46:    1533 bytes  18420 times --&gt;   3298.65 Mbps in       3.55 usec
</span><br>
<span class="quotelev2">&gt;&gt; 47:    1536 bytes  18802 times --&gt;   3320.86 Mbps in       3.53 usec
</span><br>
<span class="quotelev2">&gt;&gt; 48:    1539 bytes  18910 times --&gt;   3351.99 Mbps in       3.50 usec
</span><br>
<span class="quotelev2">&gt;&gt; 49:    2045 bytes   9571 times --&gt;   3599.21 Mbps in       4.33 usec
</span><br>
<span class="quotelev2">&gt;&gt; 50:    2048 bytes  11528 times --&gt;   3640.91 Mbps in       4.29 usec
</span><br>
<span class="quotelev2">&gt;&gt; 51:    2051 bytes  11662 times --&gt;   3638.62 Mbps in       4.30 usec
</span><br>
<span class="quotelev2">&gt;&gt; 52:    3069 bytes  11654 times --&gt;   3905.17 Mbps in       6.00 usec
</span><br>
<span class="quotelev2">&gt;&gt; 53:    3072 bytes  11118 times --&gt;   3917.67 Mbps in       5.98 usec
</span><br>
<span class="quotelev2">&gt;&gt; 54:    3075 bytes  11149 times --&gt;   3973.53 Mbps in       5.90 usec
</span><br>
<span class="quotelev2">&gt;&gt; 55:    4093 bytes   5662 times --&gt;   4450.80 Mbps in       7.02 usec
</span><br>
<span class="quotelev2">&gt;&gt; 56:    4096 bytes   7124 times --&gt;   4445.17 Mbps in       7.03 usec
</span><br>
<span class="quotelev2">&gt;&gt; 57:    4099 bytes   7115 times --&gt;   4412.88 Mbps in       7.09 usec
</span><br>
<span class="quotelev2">&gt;&gt; 58:    6141 bytes   7064 times --&gt;   4962.74 Mbps in       9.44 usec
</span><br>
<span class="quotelev2">&gt;&gt; 59:    6144 bytes   7061 times --&gt;   4941.94 Mbps in       9.49 usec
</span><br>
<span class="quotelev2">&gt;&gt; 60:    6147 bytes   7030 times --&gt;   4938.46 Mbps in       9.50 usec
</span><br>
<span class="quotelev2">&gt;&gt; 61:    8189 bytes   3515 times --&gt;   5263.65 Mbps in      11.87 usec
</span><br>
<span class="quotelev2">&gt;&gt; 62:    8192 bytes   4211 times --&gt;   5249.31 Mbps in      11.91 usec
</span><br>
<span class="quotelev2">&gt;&gt; 63:    8195 bytes   4200 times --&gt;   5202.08 Mbps in      12.02 usec
</span><br>
<span class="quotelev2">&gt;&gt; 64:   12285 bytes   4162 times --&gt;   6380.89 Mbps in      14.69 usec
</span><br>
<span class="quotelev2">&gt;&gt; 65:   12288 bytes   4538 times --&gt;   6385.27 Mbps in      14.68 usec
</span><br>
<span class="quotelev2">&gt;&gt; 66:   12291 bytes   4541 times --&gt;   6335.05 Mbps in      14.80 usec
</span><br>
<span class="quotelev2">&gt;&gt; 67:   16381 bytes   2253 times --&gt;   6535.76 Mbps in      19.12 usec
</span><br>
<span class="quotelev2">&gt;&gt; 68:   16384 bytes   2614 times --&gt;   6537.24 Mbps in      19.12 usec
</span><br>
<span class="quotelev2">&gt;&gt; 69:   16387 bytes   2615 times --&gt;   6514.52 Mbps in      19.19 usec
</span><br>
<span class="quotelev2">&gt;&gt; 70:   24573 bytes   2606 times --&gt;   6870.51 Mbps in      27.29 usec
</span><br>
<span class="quotelev2">&gt;&gt; 71:   24576 bytes   2443 times --&gt;   6866.57 Mbps in      27.31 usec
</span><br>
<span class="quotelev2">&gt;&gt; 72:   24579 bytes   2441 times --&gt;   6864.32 Mbps in      27.32 usec
</span><br>
<span class="quotelev2">&gt;&gt; 73:   32765 bytes   1220 times --&gt;   7124.85 Mbps in      35.09 usec
</span><br>
<span class="quotelev2">&gt;&gt; 74:   32768 bytes   1425 times --&gt;   7120.30 Mbps in      35.11 usec
</span><br>
<span class="quotelev2">&gt;&gt; 75:   32771 bytes   1424 times --&gt;   7127.15 Mbps in      35.08 usec
</span><br>
<span class="quotelev2">&gt;&gt; 76:   49149 bytes   1425 times --&gt;   8313.31 Mbps in      45.11 usec
</span><br>
<span class="quotelev2">&gt;&gt; 77:   49152 bytes   1478 times --&gt;   8312.58 Mbps in      45.11 usec
</span><br>
<span class="quotelev2">&gt;&gt; 78:   49155 bytes   1477 times --&gt;   8309.34 Mbps in      45.13 usec
</span><br>
<span class="quotelev2">&gt;&gt; 79:   65533 bytes    738 times --&gt;   8219.82 Mbps in      60.83 usec
</span><br>
<span class="quotelev2">&gt;&gt; 80:   65536 bytes    822 times --&gt;   8209.24 Mbps in      60.91 usec
</span><br>
<span class="quotelev2">&gt;&gt; 81:   65539 bytes    820 times --&gt;   8216.00 Mbps in      60.86 usec
</span><br>
<span class="quotelev2">&gt;&gt; 82:   98301 bytes    821 times --&gt;   8698.24 Mbps in      86.22 usec
</span><br>
<span class="quotelev2">&gt;&gt; 83:   98304 bytes    773 times --&gt;   8695.03 Mbps in      86.26 usec
</span><br>
<span class="quotelev2">&gt;&gt; 84:   98307 bytes    772 times --&gt;   8696.95 Mbps in      86.24 usec
</span><br>
<span class="quotelev2">&gt;&gt; 85:  131069 bytes    386 times --&gt;   8916.50 Mbps in     112.15 usec
</span><br>
<span class="quotelev2">&gt;&gt; 86:  131072 bytes    445 times --&gt;   8917.29 Mbps in     112.14 usec
</span><br>
<span class="quotelev2">&gt;&gt; 87:  131075 bytes    445 times --&gt;   8916.62 Mbps in     112.15 usec
</span><br>
<span class="quotelev2">&gt;&gt; 88:  196605 bytes    445 times --&gt;   9205.17 Mbps in     162.95 usec
</span><br>
<span class="quotelev2">&gt;&gt; 89:  196608 bytes    409 times --&gt;   9195.75 Mbps in     163.12 usec
</span><br>
<span class="quotelev2">&gt;&gt; 90:  196611 bytes    408 times --&gt;   9203.02 Mbps in     162.99 usec
</span><br>
<span class="quotelev2">&gt;&gt; 91:  262141 bytes    204 times --&gt;   9338.32 Mbps in     214.17 usec
</span><br>
<span class="quotelev2">&gt;&gt; 92:  262144 bytes    233 times --&gt;   9350.57 Mbps in     213.89 usec
</span><br>
<span class="quotelev2">&gt;&gt; 93:  262147 bytes    233 times --&gt;   9336.72 Mbps in     214.21 usec
</span><br>
<span class="quotelev2">&gt;&gt; 94:  393213 bytes    233 times --&gt;   9480.21 Mbps in     316.45 usec
</span><br>
<span class="quotelev2">&gt;&gt; 95:  393216 bytes    210 times --&gt;   9476.10 Mbps in     316.59 usec
</span><br>
<span class="quotelev2">&gt;&gt; 96:  393219 bytes    210 times --&gt;   9471.25 Mbps in     316.75 usec
</span><br>
<span class="quotelev2">&gt;&gt; 97:  524285 bytes    105 times --&gt;   9523.20 Mbps in     420.02 usec
</span><br>
<span class="quotelev2">&gt;&gt; 98:  524288 bytes    119 times --&gt;   9519.53 Mbps in     420.19 usec
</span><br>
<span class="quotelev2">&gt;&gt; 99:  524291 bytes    118 times --&gt;   9523.09 Mbps in     420.03 usec
</span><br>
<span class="quotelev2">&gt;&gt; 100:  786429 bytes    119 times --&gt;   9555.83 Mbps in     627.89 usec
</span><br>
<span class="quotelev2">&gt;&gt; 101:  786432 bytes    106 times --&gt;   9542.67 Mbps in     628.75 usec
</span><br>
<span class="quotelev2">&gt;&gt; 102:  786435 bytes    106 times --&gt;   9554.47 Mbps in     627.98 usec
</span><br>
<span class="quotelev2">&gt;&gt; 103: 1048573 bytes     53 times --&gt;   9527.96 Mbps in     839.63 usec
</span><br>
<span class="quotelev2">&gt;&gt; 104: 1048576 bytes     59 times --&gt;   9530.63 Mbps in     839.40 usec
</span><br>
<span class="quotelev2">&gt;&gt; 105: 1048579 bytes     59 times --&gt;   9500.65 Mbps in     842.05 usec
</span><br>
<span class="quotelev2">&gt;&gt; 106: 1572861 bytes     59 times --&gt;   9389.53 Mbps in    1278.02 usec
</span><br>
<span class="quotelev2">&gt;&gt; 107: 1572864 bytes     52 times --&gt;   9396.87 Mbps in    1277.02 usec
</span><br>
<span class="quotelev2">&gt;&gt; 108: 1572867 bytes     52 times --&gt;   9375.01 Mbps in    1280.00 usec
</span><br>
<span class="quotelev2">&gt;&gt; 109: 2097149 bytes     26 times --&gt;   9271.33 Mbps in    1725.75 usec
</span><br>
<span class="quotelev2">&gt;&gt; 110: 2097152 bytes     28 times --&gt;   9273.64 Mbps in    1725.32 usec
</span><br>
<span class="quotelev2">&gt;&gt; 111: 2097155 bytes     28 times --&gt;   9281.42 Mbps in    1723.88 usec
</span><br>
<span class="quotelev2">&gt;&gt; 112: 3145725 bytes     29 times --&gt;   9109.93 Mbps in    2634.48 usec
</span><br>
<span class="quotelev2">&gt;&gt; 113: 3145728 bytes     25 times --&gt;   9128.80 Mbps in    2629.04 usec
</span><br>
<span class="quotelev2">&gt;&gt; 114: 3145731 bytes     25 times --&gt;   9099.66 Mbps in    2637.46 usec
</span><br>
<span class="quotelev2">&gt;&gt; 115: 4194301 bytes     12 times --&gt;   8840.19 Mbps in    3619.83 usec
</span><br>
<span class="quotelev2">&gt;&gt; 116: 4194304 bytes     13 times --&gt;   8847.10 Mbps in    3617.00 usec
</span><br>
<span class="quotelev2">&gt;&gt; 117: 4194307 bytes     13 times --&gt;   8827.22 Mbps in    3625.15 usec
</span><br>
<span class="quotelev2">&gt;&gt; 118: 6291453 bytes     13 times --&gt;   8351.40 Mbps in    5747.54 usec
</span><br>
<span class="quotelev2">&gt;&gt; 119: 6291456 bytes     11 times --&gt;   8345.46 Mbps in    5751.63 usec
</span><br>
<span class="quotelev2">&gt;&gt; 120: 6291459 bytes     11 times --&gt;   8343.42 Mbps in    5753.04 usec
</span><br>
<span class="quotelev2">&gt;&gt; 121: 8388605 bytes      5 times --&gt;   8166.28 Mbps in    7837.10 usec
</span><br>
<span class="quotelev2">&gt;&gt; 122: 8388608 bytes      6 times --&gt;   8166.91 Mbps in    7836.50 usec
</span><br>
<span class="quotelev2">&gt;&gt; 123: 8388611 bytes      6 times --&gt;   8162.67 Mbps in    7840.57 usec
</span><br>
<span class="quotelev2">&gt;&gt; [6:29] svbu-mpi052:~/svn/ompi-tests/NetPIPE-3.7.1 % cd ../osu/
</span><br>
<span class="quotelev2">&gt;&gt; [6:29] svbu-mpi052:~/svn/ompi-tests/osu % mpirun --mca  
</span><br>
<span class="quotelev2">&gt;&gt; mpi_paffinity_alone 1 -np 2 --mca btl sm,self osu_latency
</span><br>
<span class="quotelev2">&gt;&gt; # OSU MPI Latency Test (Version 2.1)
</span><br>
<span class="quotelev2">&gt;&gt; # Size		Latency (us)
</span><br>
<span class="quotelev2">&gt;&gt; 0		0.85
</span><br>
<span class="quotelev2">&gt;&gt; 1		0.91
</span><br>
<span class="quotelev2">&gt;&gt; 2		0.91
</span><br>
<span class="quotelev2">&gt;&gt; 4		0.99
</span><br>
<span class="quotelev2">&gt;&gt; 8		0.99
</span><br>
<span class="quotelev2">&gt;&gt; 16		0.99
</span><br>
<span class="quotelev2">&gt;&gt; 32		1.08
</span><br>
<span class="quotelev2">&gt;&gt; 64		1.08
</span><br>
<span class="quotelev2">&gt;&gt; 128		1.25
</span><br>
<span class="quotelev2">&gt;&gt; 256		1.49
</span><br>
<span class="quotelev2">&gt;&gt; 512		1.92
</span><br>
<span class="quotelev2">&gt;&gt; 1024		2.71
</span><br>
<span class="quotelev2">&gt;&gt; 2048		4.40
</span><br>
<span class="quotelev2">&gt;&gt; 4096		6.85
</span><br>
<span class="quotelev2">&gt;&gt; 8192		11.48
</span><br>
<span class="quotelev2">&gt;&gt; 16384		19.25
</span><br>
<span class="quotelev2">&gt;&gt; 32768		35.25
</span><br>
<span class="quotelev2">&gt;&gt; 65536		61.03
</span><br>
<span class="quotelev2">&gt;&gt; 131072		113.15
</span><br>
<span class="quotelev2">&gt;&gt; 262144		215.54
</span><br>
<span class="quotelev2">&gt;&gt; 524288		428.19
</span><br>
<span class="quotelev2">&gt;&gt; 1048576		880.72
</span><br>
<span class="quotelev2">&gt;&gt; 2097152		1839.12
</span><br>
<span class="quotelev2">&gt;&gt; 4194304		3934.90
</span><br>
<span class="quotelev2">&gt;&gt; [6:29] svbu-mpi052:~/svn/ompi-tests/osu %
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ================================================================
</span><br>
<span class="quotelev2">&gt;&gt; r18973
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [6:36] svbu-mpi052:~/svn/ompi-tests/NetPIPE-3.7.1 % mpirun --mca  
</span><br>
<span class="quotelev2">&gt;&gt; mpi_paffinity_alone 1 -np 2 --mca btl sm,self NPmpi
</span><br>
<span class="quotelev2">&gt;&gt; 1: svbu-mpi052
</span><br>
<span class="quotelev2">&gt;&gt; 0: svbu-mpi052
</span><br>
<span class="quotelev2">&gt;&gt; Now starting the main loop
</span><br>
<span class="quotelev2">&gt;&gt; 0:       1 bytes  84392 times --&gt;      8.29 Mbps in       0.92 usec
</span><br>
<span class="quotelev2">&gt;&gt; 1:       2 bytes 108626 times --&gt;     16.58 Mbps in       0.92 usec
</span><br>
<span class="quotelev2">&gt;&gt; 2:       3 bytes 108657 times --&gt;     24.91 Mbps in       0.92 usec
</span><br>
<span class="quotelev2">&gt;&gt; 3:       4 bytes  72561 times --&gt;     30.33 Mbps in       1.01 usec
</span><br>
<span class="quotelev2">&gt;&gt; 4:       6 bytes  74529 times --&gt;     45.51 Mbps in       1.01 usec
</span><br>
<span class="quotelev2">&gt;&gt; 5:       8 bytes  49709 times --&gt;     60.76 Mbps in       1.00 usec
</span><br>
<span class="quotelev2">&gt;&gt; 6:      12 bytes  62222 times --&gt;     90.84 Mbps in       1.01 usec
</span><br>
<span class="quotelev2">&gt;&gt; 7:      13 bytes  41344 times --&gt;     98.58 Mbps in       1.01 usec
</span><br>
<span class="quotelev2">&gt;&gt; 8:      16 bytes  45875 times --&gt;    121.19 Mbps in       1.01 usec
</span><br>
<span class="quotelev2">&gt;&gt; 9:      19 bytes  55845 times --&gt;    143.43 Mbps in       1.01 usec
</span><br>
<span class="quotelev2">&gt;&gt; 10:      21 bytes  62491 times --&gt;    156.66 Mbps in       1.02 usec
</span><br>
<span class="quotelev2">&gt;&gt; 11:      24 bytes  65185 times --&gt;    177.87 Mbps in       1.03 usec
</span><br>
<span class="quotelev2">&gt;&gt; 12:      27 bytes  68806 times --&gt;    187.63 Mbps in       1.10 usec
</span><br>
<span class="quotelev2">&gt;&gt; 13:      29 bytes  40482 times --&gt;    202.10 Mbps in       1.09 usec
</span><br>
<span class="quotelev2">&gt;&gt; 14:      32 bytes  44096 times --&gt;    222.11 Mbps in       1.10 usec
</span><br>
<span class="quotelev2">&gt;&gt; 15:      35 bytes  48331 times --&gt;    255.12 Mbps in       1.05 usec
</span><br>
<span class="quotelev2">&gt;&gt; 16:      45 bytes  54593 times --&gt;    308.42 Mbps in       1.11 usec
</span><br>
<span class="quotelev2">&gt;&gt; 17:      48 bytes  59888 times --&gt;    330.10 Mbps in       1.11 usec
</span><br>
<span class="quotelev2">&gt;&gt; 18:      51 bytes  61970 times --&gt;    348.31 Mbps in       1.12 usec
</span><br>
<span class="quotelev2">&gt;&gt; 19:      61 bytes  35104 times --&gt;    409.39 Mbps in       1.14 usec
</span><br>
<span class="quotelev2">&gt;&gt; 20:      64 bytes  43261 times --&gt;    451.69 Mbps in       1.08 usec
</span><br>
<span class="quotelev2">&gt;&gt; 21:      67 bytes  47698 times --&gt;    489.98 Mbps in       1.04 usec
</span><br>
<span class="quotelev2">&gt;&gt; 22:      93 bytes  51504 times --&gt;    565.69 Mbps in       1.25 usec
</span><br>
<span class="quotelev2">&gt;&gt; 23:      96 bytes  53150 times --&gt;    598.55 Mbps in       1.22 usec
</span><br>
<span class="quotelev2">&gt;&gt; 24:      99 bytes  55333 times --&gt;    623.24 Mbps in       1.21 usec
</span><br>
<span class="quotelev2">&gt;&gt; 25:     125 bytes  30005 times --&gt;    735.91 Mbps in       1.30 usec
</span><br>
<span class="quotelev2">&gt;&gt; 26:     128 bytes  38274 times --&gt;    781.32 Mbps in       1.25 usec
</span><br>
<span class="quotelev2">&gt;&gt; 27:     131 bytes  40628 times --&gt;    828.90 Mbps in       1.21 usec
</span><br>
<span class="quotelev2">&gt;&gt; 28:     189 bytes  43050 times --&gt;   1018.02 Mbps in       1.42 usec
</span><br>
<span class="quotelev2">&gt;&gt; 29:     192 bytes  47066 times --&gt;   1069.01 Mbps in       1.37 usec
</span><br>
<span class="quotelev2">&gt;&gt; 30:     195 bytes  49032 times --&gt;   1122.18 Mbps in       1.33 usec
</span><br>
<span class="quotelev2">&gt;&gt; 31:     253 bytes  26303 times --&gt;   1259.95 Mbps in       1.53 usec
</span><br>
<span class="quotelev2">&gt;&gt; 32:     256 bytes  32508 times --&gt;   1307.53 Mbps in       1.49 usec
</span><br>
<span class="quotelev2">&gt;&gt; 33:     259 bytes  33734 times --&gt;   1357.47 Mbps in       1.46 usec
</span><br>
<span class="quotelev2">&gt;&gt; 34:     381 bytes  35011 times --&gt;   1617.08 Mbps in       1.80 usec
</span><br>
<span class="quotelev2">&gt;&gt; 35:     384 bytes  37087 times --&gt;   1675.72 Mbps in       1.75 usec
</span><br>
<span class="quotelev2">&gt;&gt; 36:     387 bytes  38280 times --&gt;   1722.27 Mbps in       1.71 usec
</span><br>
<span class="quotelev2">&gt;&gt; 37:     509 bytes  19895 times --&gt;   1913.58 Mbps in       2.03 usec
</span><br>
<span class="quotelev2">&gt;&gt; 38:     512 bytes  24589 times --&gt;   1967.08 Mbps in       1.99 usec
</span><br>
<span class="quotelev2">&gt;&gt; 39:     515 bytes  25276 times --&gt;   2041.10 Mbps in       1.93 usec
</span><br>
<span class="quotelev2">&gt;&gt; 40:     765 bytes  26226 times --&gt;   2448.96 Mbps in       2.38 usec
</span><br>
<span class="quotelev2">&gt;&gt; 41:     768 bytes  27973 times --&gt;   2503.60 Mbps in       2.34 usec
</span><br>
<span class="quotelev2">&gt;&gt; 42:     771 bytes  28541 times --&gt;   2541.12 Mbps in       2.31 usec
</span><br>
<span class="quotelev2">&gt;&gt; 43:    1021 bytes  14567 times --&gt;   2845.46 Mbps in       2.74 usec
</span><br>
<span class="quotelev2">&gt;&gt; 44:    1024 bytes  18246 times --&gt;   2854.45 Mbps in       2.74 usec
</span><br>
<span class="quotelev2">&gt;&gt; 45:    1027 bytes  18304 times --&gt;   2939.64 Mbps in       2.67 usec
</span><br>
<span class="quotelev2">&gt;&gt; 46:    1533 bytes  18850 times --&gt;   3291.70 Mbps in       3.55 usec
</span><br>
<span class="quotelev2">&gt;&gt; 47:    1536 bytes  18762 times --&gt;   3310.45 Mbps in       3.54 usec
</span><br>
<span class="quotelev2">&gt;&gt; 48:    1539 bytes  18851 times --&gt;   3386.68 Mbps in       3.47 usec
</span><br>
<span class="quotelev2">&gt;&gt; 49:    2045 bytes   9670 times --&gt;   3635.22 Mbps in       4.29 usec
</span><br>
<span class="quotelev2">&gt;&gt; 50:    2048 bytes  11644 times --&gt;   3646.70 Mbps in       4.28 usec
</span><br>
<span class="quotelev2">&gt;&gt; 51:    2051 bytes  11680 times --&gt;   3640.09 Mbps in       4.30 usec
</span><br>
<span class="quotelev2">&gt;&gt; 52:    3069 bytes  11659 times --&gt;   3926.68 Mbps in       5.96 usec
</span><br>
<span class="quotelev2">&gt;&gt; 53:    3072 bytes  11180 times --&gt;   3962.33 Mbps in       5.92 usec
</span><br>
<span class="quotelev2">&gt;&gt; 54:    3075 bytes  11276 times --&gt;   3978.54 Mbps in       5.90 usec
</span><br>
<span class="quotelev2">&gt;&gt; 55:    4093 bytes   5669 times --&gt;   4398.66 Mbps in       7.10 usec
</span><br>
<span class="quotelev2">&gt;&gt; 56:    4096 bytes   7041 times --&gt;   4429.95 Mbps in       7.05 usec
</span><br>
<span class="quotelev2">&gt;&gt; 57:    4099 bytes   7091 times --&gt;   4378.99 Mbps in       7.14 usec
</span><br>
<span class="quotelev2">&gt;&gt; 58:    6141 bytes   7009 times --&gt;   5001.17 Mbps in       9.37 usec
</span><br>
<span class="quotelev2">&gt;&gt; 59:    6144 bytes   7116 times --&gt;   4984.01 Mbps in       9.41 usec
</span><br>
<span class="quotelev2">&gt;&gt; 60:    6147 bytes   7090 times --&gt;   5015.48 Mbps in       9.35 usec
</span><br>
<span class="quotelev2">&gt;&gt; 61:    8189 bytes   3570 times --&gt;   5286.90 Mbps in      11.82 usec
</span><br>
<span class="quotelev2">&gt;&gt; 62:    8192 bytes   4230 times --&gt;   5222.58 Mbps in      11.97 usec
</span><br>
<span class="quotelev2">&gt;&gt; 63:    8195 bytes   4179 times --&gt;   5261.91 Mbps in      11.88 usec
</span><br>
<span class="quotelev2">&gt;&gt; 64:   12285 bytes   4210 times --&gt;   6370.90 Mbps in      14.71 usec
</span><br>
<span class="quotelev2">&gt;&gt; 65:   12288 bytes   4531 times --&gt;   6376.57 Mbps in      14.70 usec
</span><br>
<span class="quotelev2">&gt;&gt; 66:   12291 bytes   4535 times --&gt;   6349.10 Mbps in      14.77 usec
</span><br>
<span class="quotelev2">&gt;&gt; 67:   16381 bytes   2258 times --&gt;   6521.57 Mbps in      19.16 usec
</span><br>
<span class="quotelev2">&gt;&gt; 68:   16384 bytes   2608 times --&gt;   6520.25 Mbps in      19.17 usec
</span><br>
<span class="quotelev2">&gt;&gt; 69:   16387 bytes   2608 times --&gt;   6504.81 Mbps in      19.22 usec
</span><br>
<span class="quotelev2">&gt;&gt; 70:   24573 bytes   2602 times --&gt;   6867.93 Mbps in      27.30 usec
</span><br>
<span class="quotelev2">&gt;&gt; 71:   24576 bytes   2442 times --&gt;   6869.27 Mbps in      27.30 usec
</span><br>
<span class="quotelev2">&gt;&gt; 72:   24579 bytes   2442 times --&gt;   6864.04 Mbps in      27.32 usec
</span><br>
<span class="quotelev2">&gt;&gt; 73:   32765 bytes   1220 times --&gt;   7118.03 Mbps in      35.12 usec
</span><br>
<span class="quotelev2">&gt;&gt; 74:   32768 bytes   1423 times --&gt;   7117.77 Mbps in      35.12 usec
</span><br>
<span class="quotelev2">&gt;&gt; 75:   32771 bytes   1423 times --&gt;   7120.85 Mbps in      35.11 usec
</span><br>
<span class="quotelev2">&gt;&gt; 76:   49149 bytes   1424 times --&gt;   8324.26 Mbps in      45.05 usec
</span><br>
<span class="quotelev2">&gt;&gt; 77:   49152 bytes   1479 times --&gt;   8328.77 Mbps in      45.02 usec
</span><br>
<span class="quotelev2">&gt;&gt; 78:   49155 bytes   1480 times --&gt;   8320.47 Mbps in      45.07 usec
</span><br>
<span class="quotelev2">&gt;&gt; 79:   65533 bytes    739 times --&gt;   8214.38 Mbps in      60.87 usec
</span><br>
<span class="quotelev2">&gt;&gt; 80:   65536 bytes    821 times --&gt;   8219.87 Mbps in      60.83 usec
</span><br>
<span class="quotelev2">&gt;&gt; 81:   65539 bytes    822 times --&gt;   8232.40 Mbps in      60.74 usec
</span><br>
<span class="quotelev2">&gt;&gt; 82:   98301 bytes    823 times --&gt;   8717.21 Mbps in      86.03 usec
</span><br>
<span class="quotelev2">&gt;&gt; 83:   98304 bytes    774 times --&gt;   8716.08 Mbps in      86.05 usec
</span><br>
<span class="quotelev2">&gt;&gt; 84:   98307 bytes    774 times --&gt;   8714.26 Mbps in      86.07 usec
</span><br>
<span class="quotelev2">&gt;&gt; 85:  131069 bytes    387 times --&gt;   8921.59 Mbps in     112.09 usec
</span><br>
<span class="quotelev2">&gt;&gt; 86:  131072 bytes    446 times --&gt;   8935.37 Mbps in     111.91 usec
</span><br>
<span class="quotelev2">&gt;&gt; 87:  131075 bytes    446 times --&gt;   8925.47 Mbps in     112.04 usec
</span><br>
<span class="quotelev2">&gt;&gt; 88:  196605 bytes    446 times --&gt;   9195.80 Mbps in     163.12 usec
</span><br>
<span class="quotelev2">&gt;&gt; 89:  196608 bytes    408 times --&gt;   9197.41 Mbps in     163.09 usec
</span><br>
<span class="quotelev2">&gt;&gt; 90:  196611 bytes    408 times --&gt;   9204.33 Mbps in     162.97 usec
</span><br>
<span class="quotelev2">&gt;&gt; 91:  262141 bytes    204 times --&gt;   9344.95 Mbps in     214.02 usec
</span><br>
<span class="quotelev2">&gt;&gt; 92:  262144 bytes    233 times --&gt;   9347.58 Mbps in     213.96 usec
</span><br>
<span class="quotelev2">&gt;&gt; 93:  262147 bytes    233 times --&gt;   9340.56 Mbps in     214.12 usec
</span><br>
<span class="quotelev2">&gt;&gt; 94:  393213 bytes    233 times --&gt;   9473.27 Mbps in     316.68 usec
</span><br>
<span class="quotelev2">&gt;&gt; 95:  393216 bytes    210 times --&gt;   9486.24 Mbps in     316.25 usec
</span><br>
<span class="quotelev2">&gt;&gt; 96:  393219 bytes    210 times --&gt;   9500.26 Mbps in     315.78 usec
</span><br>
<span class="quotelev2">&gt;&gt; 97:  524285 bytes    105 times --&gt;   9538.88 Mbps in     419.33 usec
</span><br>
<span class="quotelev2">&gt;&gt; 98:  524288 bytes    119 times --&gt;   9543.40 Mbps in     419.14 usec
</span><br>
<span class="quotelev2">&gt;&gt; 99:  524291 bytes    119 times --&gt;   9534.73 Mbps in     419.52 usec
</span><br>
<span class="quotelev2">&gt;&gt; 100:  786429 bytes    119 times --&gt;   9574.15 Mbps in     626.69 usec
</span><br>
<span class="quotelev2">&gt;&gt; 101:  786432 bytes    106 times --&gt;   9565.70 Mbps in     627.24 usec
</span><br>
<span class="quotelev2">&gt;&gt; 102:  786435 bytes    106 times --&gt;   9544.50 Mbps in     628.64 usec
</span><br>
<span class="quotelev2">&gt;&gt; 103: 1048573 bytes     53 times --&gt;   9530.85 Mbps in     839.38 usec
</span><br>
<span class="quotelev2">&gt;&gt; 104: 1048576 bytes     59 times --&gt;   9525.24 Mbps in     839.87 usec
</span><br>
<span class="quotelev2">&gt;&gt; 105: 1048579 bytes     59 times --&gt;   9511.86 Mbps in     841.06 usec
</span><br>
<span class="quotelev2">&gt;&gt; 106: 1572861 bytes     59 times --&gt;   9391.40 Mbps in    1277.76 usec
</span><br>
<span class="quotelev2">&gt;&gt; 107: 1572864 bytes     52 times --&gt;   9395.54 Mbps in    1277.20 usec
</span><br>
<span class="quotelev2">&gt;&gt; 108: 1572867 bytes     52 times --&gt;   9386.02 Mbps in    1278.50 usec
</span><br>
<span class="quotelev2">&gt;&gt; 109: 2097149 bytes     26 times --&gt;   9298.48 Mbps in    1720.71 usec
</span><br>
<span class="quotelev2">&gt;&gt; 110: 2097152 bytes     29 times --&gt;   9313.43 Mbps in    1717.95 usec
</span><br>
<span class="quotelev2">&gt;&gt; 111: 2097155 bytes     29 times --&gt;   9293.49 Mbps in    1721.64 usec
</span><br>
<span class="quotelev2">&gt;&gt; 112: 3145725 bytes     29 times --&gt;   9126.67 Mbps in    2629.65 usec
</span><br>
<span class="quotelev2">&gt;&gt; 113: 3145728 bytes     25 times --&gt;   9113.76 Mbps in    2633.38 usec
</span><br>
<span class="quotelev2">&gt;&gt; 114: 3145731 bytes     25 times --&gt;   9079.90 Mbps in    2643.20 usec
</span><br>
<span class="quotelev2">&gt;&gt; 115: 4194301 bytes     12 times --&gt;   8810.57 Mbps in    3632.00 usec
</span><br>
<span class="quotelev2">&gt;&gt; 116: 4194304 bytes     13 times --&gt;   8821.99 Mbps in    3627.30 usec
</span><br>
<span class="quotelev2">&gt;&gt; 117: 4194307 bytes     13 times --&gt;   8801.17 Mbps in    3635.88 usec
</span><br>
<span class="quotelev2">&gt;&gt; 118: 6291453 bytes     13 times --&gt;   8337.50 Mbps in    5757.12 usec
</span><br>
<span class="quotelev2">&gt;&gt; 119: 6291456 bytes     11 times --&gt;   8332.94 Mbps in    5760.27 usec
</span><br>
<span class="quotelev2">&gt;&gt; 120: 6291459 bytes     11 times --&gt;   8346.25 Mbps in    5751.09 usec
</span><br>
<span class="quotelev2">&gt;&gt; 121: 8388605 bytes      5 times --&gt;   8159.20 Mbps in    7843.90 usec
</span><br>
<span class="quotelev2">&gt;&gt; 122: 8388608 bytes      6 times --&gt;   8166.83 Mbps in    7836.58 usec
</span><br>
<span class="quotelev2">&gt;&gt; 123: 8388611 bytes      6 times --&gt;   8161.26 Mbps in    7841.92 usec
</span><br>
<span class="quotelev2">&gt;&gt; [6:37] svbu-mpi052:~/svn/ompi-tests/NetPIPE-3.7.1 % cd ../osu/
</span><br>
<span class="quotelev2">&gt;&gt; [6:37] svbu-mpi052:~/svn/ompi-tests/osu % mpirun --mca  
</span><br>
<span class="quotelev2">&gt;&gt; mpi_paffinity_alone 1 -np 2 --mca btl sm,self osu_latency
</span><br>
<span class="quotelev2">&gt;&gt; # OSU MPI Latency Test (Version 2.1)
</span><br>
<span class="quotelev2">&gt;&gt; # Size		Latency (us)
</span><br>
<span class="quotelev2">&gt;&gt; 0		0.85
</span><br>
<span class="quotelev2">&gt;&gt; 1		0.91
</span><br>
<span class="quotelev2">&gt;&gt; 2		0.91
</span><br>
<span class="quotelev2">&gt;&gt; 4		0.99
</span><br>
<span class="quotelev2">&gt;&gt; 8		0.99
</span><br>
<span class="quotelev2">&gt;&gt; 16		0.99
</span><br>
<span class="quotelev2">&gt;&gt; 32		1.09
</span><br>
<span class="quotelev2">&gt;&gt; 64		1.07
</span><br>
<span class="quotelev2">&gt;&gt; 128		1.25
</span><br>
<span class="quotelev2">&gt;&gt; 256		1.49
</span><br>
<span class="quotelev2">&gt;&gt; 512		1.97
</span><br>
<span class="quotelev2">&gt;&gt; 1024		2.69
</span><br>
<span class="quotelev2">&gt;&gt; 2048		4.29
</span><br>
<span class="quotelev2">&gt;&gt; 4096		6.83
</span><br>
<span class="quotelev2">&gt;&gt; 8192		11.41
</span><br>
<span class="quotelev2">&gt;&gt; 16384		19.69
</span><br>
<span class="quotelev2">&gt;&gt; 32768		35.27
</span><br>
<span class="quotelev2">&gt;&gt; 65536		61.06
</span><br>
<span class="quotelev2">&gt;&gt; 131072		112.51
</span><br>
<span class="quotelev2">&gt;&gt; 262144		215.47
</span><br>
<span class="quotelev2">&gt;&gt; 524288		429.60
</span><br>
<span class="quotelev2">&gt;&gt; 1048576		882.89
</span><br>
<span class="quotelev2">&gt;&gt; 2097152		1836.45
</span><br>
<span class="quotelev2">&gt;&gt; 4194304		3943.47
</span><br>
<span class="quotelev2">&gt;&gt; [6:37] svbu-mpi052:~/svn/ompi-tests/osu %
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ================================================================
</span><br>
<span class="quotelev2">&gt;&gt; r18850
</span><br>
<span class="quotelev2">&gt;&gt; [6:31] svbu-mpi052:~/svn/ompi-tests/NetPIPE-3.7.1 % mpirun --mca  
</span><br>
<span class="quotelev2">&gt;&gt; mpi_paffinity_alone 1 -np 2 --mca btl sm,self NPmpi
</span><br>
<span class="quotelev2">&gt;&gt; 0: svbu-mpi052
</span><br>
<span class="quotelev2">&gt;&gt; 1: svbu-mpi052
</span><br>
<span class="quotelev2">&gt;&gt; Now starting the main loop
</span><br>
<span class="quotelev2">&gt;&gt; 0:       1 bytes 116185 times --&gt;     11.32 Mbps in       0.67 usec
</span><br>
<span class="quotelev2">&gt;&gt; 1:       2 bytes 148348 times --&gt;     22.58 Mbps in       0.68 usec
</span><br>
<span class="quotelev2">&gt;&gt; 2:       3 bytes 147969 times --&gt;     33.88 Mbps in       0.68 usec
</span><br>
<span class="quotelev2">&gt;&gt; 3:       4 bytes  98695 times --&gt;     40.58 Mbps in       0.75 usec
</span><br>
<span class="quotelev2">&gt;&gt; 4:       6 bytes  99737 times --&gt;     60.85 Mbps in       0.75 usec
</span><br>
<span class="quotelev2">&gt;&gt; 5:       8 bytes  66464 times --&gt;     81.13 Mbps in       0.75 usec
</span><br>
<span class="quotelev2">&gt;&gt; 6:      12 bytes  83076 times --&gt;    121.58 Mbps in       0.75 usec
</span><br>
<span class="quotelev2">&gt;&gt; 7:      13 bytes  55334 times --&gt;    131.83 Mbps in       0.75 usec
</span><br>
<span class="quotelev2">&gt;&gt; 8:      16 bytes  61344 times --&gt;    161.81 Mbps in       0.75 usec
</span><br>
<span class="quotelev2">&gt;&gt; 9:      19 bytes  74561 times --&gt;    190.93 Mbps in       0.76 usec
</span><br>
<span class="quotelev2">&gt;&gt; 10:      21 bytes  83186 times --&gt;    207.97 Mbps in       0.77 usec
</span><br>
<span class="quotelev2">&gt;&gt; 11:      24 bytes  86535 times --&gt;    235.30 Mbps in       0.78 usec
</span><br>
<span class="quotelev2">&gt;&gt; 12:      27 bytes  91024 times --&gt;    241.36 Mbps in       0.85 usec
</span><br>
<span class="quotelev2">&gt;&gt; 13:      29 bytes  52074 times --&gt;    260.24 Mbps in       0.85 usec
</span><br>
<span class="quotelev2">&gt;&gt; 14:      32 bytes  56782 times --&gt;    286.57 Mbps in       0.85 usec
</span><br>
<span class="quotelev2">&gt;&gt; 15:      35 bytes  62357 times --&gt;    341.55 Mbps in       0.78 usec
</span><br>
<span class="quotelev2">&gt;&gt; 16:      45 bytes  73090 times --&gt;    400.53 Mbps in       0.86 usec
</span><br>
<span class="quotelev2">&gt;&gt; 17:      48 bytes  77776 times --&gt;    425.94 Mbps in       0.86 usec
</span><br>
<span class="quotelev2">&gt;&gt; 18:      51 bytes  79963 times --&gt;    449.27 Mbps in       0.87 usec
</span><br>
<span class="quotelev2">&gt;&gt; 19:      61 bytes  45280 times --&gt;    520.58 Mbps in       0.89 usec
</span><br>
<span class="quotelev2">&gt;&gt; 20:      64 bytes  55011 times --&gt;    589.77 Mbps in       0.83 usec
</span><br>
<span class="quotelev2">&gt;&gt; 21:      67 bytes  62279 times --&gt;    651.96 Mbps in       0.78 usec
</span><br>
<span class="quotelev2">&gt;&gt; 22:      93 bytes  68530 times --&gt;    706.75 Mbps in       1.00 usec
</span><br>
<span class="quotelev2">&gt;&gt; 23:      96 bytes  66405 times --&gt;    756.56 Mbps in       0.97 usec
</span><br>
<span class="quotelev2">&gt;&gt; 24:      99 bytes  69940 times --&gt;    786.11 Mbps in       0.96 usec
</span><br>
<span class="quotelev2">&gt;&gt; 25:     125 bytes  37846 times --&gt;    917.31 Mbps in       1.04 usec
</span><br>
<span class="quotelev2">&gt;&gt; 26:     128 bytes  47708 times --&gt;    991.21 Mbps in       0.99 usec
</span><br>
<span class="quotelev2">&gt;&gt; 27:     131 bytes  51542 times --&gt;   1030.40 Mbps in       0.97 usec
</span><br>
<span class="quotelev2">&gt;&gt; 28:     189 bytes  53515 times --&gt;   1228.14 Mbps in       1.17 usec
</span><br>
<span class="quotelev2">&gt;&gt; 29:     192 bytes  56781 times --&gt;   1317.94 Mbps in       1.11 usec
</span><br>
<span class="quotelev2">&gt;&gt; 30:     195 bytes  60449 times --&gt;   1372.28 Mbps in       1.08 usec
</span><br>
<span class="quotelev2">&gt;&gt; 31:     253 bytes  32165 times --&gt;   1506.60 Mbps in       1.28 usec
</span><br>
<span class="quotelev2">&gt;&gt; 32:     256 bytes  38871 times --&gt;   1590.08 Mbps in       1.23 usec
</span><br>
<span class="quotelev2">&gt;&gt; 33:     259 bytes  41024 times --&gt;   1657.90 Mbps in       1.19 usec
</span><br>
<span class="quotelev2">&gt;&gt; 34:     381 bytes  42760 times --&gt;   1894.98 Mbps in       1.53 usec
</span><br>
<span class="quotelev2">&gt;&gt; 35:     384 bytes  43460 times --&gt;   1958.92 Mbps in       1.50 usec
</span><br>
<span class="quotelev2">&gt;&gt; 36:     387 bytes  44750 times --&gt;   2029.44 Mbps in       1.45 usec
</span><br>
<span class="quotelev2">&gt;&gt; 37:     509 bytes  23444 times --&gt;   2176.96 Mbps in       1.78 usec
</span><br>
<span class="quotelev2">&gt;&gt; 38:     512 bytes  27974 times --&gt;   2268.97 Mbps in       1.72 usec
</span><br>
<span class="quotelev2">&gt;&gt; 39:     515 bytes  29156 times --&gt;   2340.62 Mbps in       1.68 usec
</span><br>
<span class="quotelev2">&gt;&gt; 40:     765 bytes  30074 times --&gt;   2698.17 Mbps in       2.16 usec
</span><br>
<span class="quotelev2">&gt;&gt; 41:     768 bytes  30819 times --&gt;   2778.48 Mbps in       2.11 usec
</span><br>
<span class="quotelev2">&gt;&gt; 42:     771 bytes  31674 times --&gt;   2847.11 Mbps in       2.07 usec
</span><br>
<span class="quotelev2">&gt;&gt; 43:    1021 bytes  16322 times --&gt;   3039.90 Mbps in       2.56 usec
</span><br>
<span class="quotelev2">&gt;&gt; 44:    1024 bytes  19493 times --&gt;   3161.06 Mbps in       2.47 usec
</span><br>
<span class="quotelev2">&gt;&gt; 45:    1027 bytes  20270 times --&gt;   3221.90 Mbps in       2.43 usec
</span><br>
<span class="quotelev2">&gt;&gt; 46:    1533 bytes  20660 times --&gt;   3455.95 Mbps in       3.38 usec
</span><br>
<span class="quotelev2">&gt;&gt; 47:    1536 bytes  19698 times --&gt;   3580.63 Mbps in       3.27 usec
</span><br>
<span class="quotelev2">&gt;&gt; 48:    1539 bytes  20389 times --&gt;   3623.40 Mbps in       3.24 usec
</span><br>
<span class="quotelev2">&gt;&gt; 49:    2045 bytes  10346 times --&gt;   3751.80 Mbps in       4.16 usec
</span><br>
<span class="quotelev2">&gt;&gt; 50:    2048 bytes  12017 times --&gt;   3833.40 Mbps in       4.08 usec
</span><br>
<span class="quotelev2">&gt;&gt; 51:    2051 bytes  12278 times --&gt;   3813.67 Mbps in       4.10 usec
</span><br>
<span class="quotelev2">&gt;&gt; 52:    3069 bytes  12215 times --&gt;   3997.25 Mbps in       5.86 usec
</span><br>
<span class="quotelev2">&gt;&gt; 53:    3072 bytes  11381 times --&gt;   4058.18 Mbps in       5.78 usec
</span><br>
<span class="quotelev2">&gt;&gt; 54:    3075 bytes  11548 times --&gt;   4102.09 Mbps in       5.72 usec
</span><br>
<span class="quotelev2">&gt;&gt; 55:    4093 bytes   5845 times --&gt;   4726.24 Mbps in       6.61 usec
</span><br>
<span class="quotelev2">&gt;&gt; 56:    4096 bytes   7565 times --&gt;   4679.74 Mbps in       6.68 usec
</span><br>
<span class="quotelev2">&gt;&gt; 57:    4099 bytes   7491 times --&gt;   4649.50 Mbps in       6.73 usec
</span><br>
<span class="quotelev2">&gt;&gt; 58:    6141 bytes   7442 times --&gt;   5072.39 Mbps in       9.24 usec
</span><br>
<span class="quotelev2">&gt;&gt; 59:    6144 bytes   7217 times --&gt;   5064.70 Mbps in       9.26 usec
</span><br>
<span class="quotelev2">&gt;&gt; 60:    6147 bytes   7204 times --&gt;   5067.07 Mbps in       9.26 usec
</span><br>
<span class="quotelev2">&gt;&gt; 61:    8189 bytes   3606 times --&gt;   5387.85 Mbps in      11.60 usec
</span><br>
<span class="quotelev2">&gt;&gt; 62:    8192 bytes   4311 times --&gt;   5393.87 Mbps in      11.59 usec
</span><br>
<span class="quotelev2">&gt;&gt; 63:    8195 bytes   4316 times --&gt;   5301.81 Mbps in      11.79 usec
</span><br>
<span class="quotelev2">&gt;&gt; 64:   12285 bytes   4242 times --&gt;   6568.81 Mbps in      14.27 usec
</span><br>
<span class="quotelev2">&gt;&gt; 65:   12288 bytes   4672 times --&gt;   6561.90 Mbps in      14.29 usec
</span><br>
<span class="quotelev2">&gt;&gt; 66:   12291 bytes   4666 times --&gt;   6548.01 Mbps in      14.32 usec
</span><br>
<span class="quotelev2">&gt;&gt; 67:   16381 bytes   2329 times --&gt;   6662.43 Mbps in      18.76 usec
</span><br>
<span class="quotelev2">&gt;&gt; 68:   16384 bytes   2665 times --&gt;   6655.18 Mbps in      18.78 usec
</span><br>
<span class="quotelev2">&gt;&gt; 69:   16387 bytes   2662 times --&gt;   6634.79 Mbps in      18.84 usec
</span><br>
<span class="quotelev2">&gt;&gt; 70:   24573 bytes   2654 times --&gt;   6937.26 Mbps in      27.02 usec
</span><br>
<span class="quotelev2">&gt;&gt; 71:   24576 bytes   2466 times --&gt;   6937.41 Mbps in      27.03 usec
</span><br>
<span class="quotelev2">&gt;&gt; 72:   24579 bytes   2466 times --&gt;   6931.40 Mbps in      27.05 usec
</span><br>
<span class="quotelev2">&gt;&gt; 73:   32765 bytes   1232 times --&gt;   7218.55 Mbps in      34.63 usec
</span><br>
<span class="quotelev2">&gt;&gt; 74:   32768 bytes   1443 times --&gt;   7213.85 Mbps in      34.66 usec
</span><br>
<span class="quotelev2">&gt;&gt; 75:   32771 bytes   1442 times --&gt;   7218.89 Mbps in      34.63 usec
</span><br>
<span class="quotelev2">&gt;&gt; 76:   49149 bytes   1443 times --&gt;   8387.79 Mbps in      44.71 usec
</span><br>
<span class="quotelev2">&gt;&gt; 77:   49152 bytes   1491 times --&gt;   8385.50 Mbps in      44.72 usec
</span><br>
<span class="quotelev2">&gt;&gt; 78:   49155 bytes   1490 times --&gt;   8390.79 Mbps in      44.69 usec
</span><br>
<span class="quotelev2">&gt;&gt; 79:   65533 bytes    745 times --&gt;   8261.32 Mbps in      60.52 usec
</span><br>
<span class="quotelev2">&gt;&gt; 80:   65536 bytes    826 times --&gt;   8260.34 Mbps in      60.53 usec
</span><br>
<span class="quotelev2">&gt;&gt; 81:   65539 bytes    826 times --&gt;   8265.33 Mbps in      60.50 usec
</span><br>
<span class="quotelev2">&gt;&gt; 82:   98301 bytes    826 times --&gt;   8747.13 Mbps in      85.74 usec
</span><br>
<span class="quotelev2">&gt;&gt; 83:   98304 bytes    777 times --&gt;   8746.72 Mbps in      85.75 usec
</span><br>
<span class="quotelev2">&gt;&gt; 84:   98307 bytes    777 times --&gt;   8733.81 Mbps in      85.88 usec
</span><br>
<span class="quotelev2">&gt;&gt; 85:  131069 bytes    388 times --&gt;   8956.71 Mbps in     111.65 usec
</span><br>
<span class="quotelev2">&gt;&gt; 86:  131072 bytes    447 times --&gt;   8967.16 Mbps in     111.52 usec
</span><br>
<span class="quotelev2">&gt;&gt; 87:  131075 bytes    448 times --&gt;   8960.56 Mbps in     111.60 usec
</span><br>
<span class="quotelev2">&gt;&gt; 88:  196605 bytes    448 times --&gt;   9247.58 Mbps in     162.20 usec
</span><br>
<span class="quotelev2">&gt;&gt; 89:  196608 bytes    411 times --&gt;   9234.30 Mbps in     162.44 usec
</span><br>
<span class="quotelev2">&gt;&gt; 90:  196611 bytes    410 times --&gt;   9231.32 Mbps in     162.49 usec
</span><br>
<span class="quotelev2">&gt;&gt; 91:  262141 bytes    205 times --&gt;   9365.98 Mbps in     213.54 usec
</span><br>
<span class="quotelev2">&gt;&gt; 92:  262144 bytes    234 times --&gt;   9368.25 Mbps in     213.49 usec
</span><br>
<span class="quotelev2">&gt;&gt; 93:  262147 bytes    234 times --&gt;   9363.09 Mbps in     213.61 usec
</span><br>
<span class="quotelev2">&gt;&gt; 94:  393213 bytes    234 times --&gt;   9512.63 Mbps in     315.37 usec
</span><br>
<span class="quotelev2">&gt;&gt; 95:  393216 bytes    211 times --&gt;   9497.01 Mbps in     315.89 usec
</span><br>
<span class="quotelev2">&gt;&gt; 96:  393219 bytes    211 times --&gt;   9510.80 Mbps in     315.43 usec
</span><br>
<span class="quotelev2">&gt;&gt; 97:  524285 bytes    105 times --&gt;   9553.55 Mbps in     418.69 usec
</span><br>
<span class="quotelev2">&gt;&gt; 98:  524288 bytes    119 times --&gt;   9561.59 Mbps in     418.34 usec
</span><br>
<span class="quotelev2">&gt;&gt; 99:  524291 bytes    119 times --&gt;   9551.86 Mbps in     418.77 usec
</span><br>
<span class="quotelev2">&gt;&gt; 100:  786429 bytes    119 times --&gt;   9582.63 Mbps in     626.13 usec
</span><br>
<span class="quotelev2">&gt;&gt; 101:  786432 bytes    106 times --&gt;   9576.72 Mbps in     626.52 usec
</span><br>
<span class="quotelev2">&gt;&gt; 102:  786435 bytes    106 times --&gt;   9584.78 Mbps in     625.99 usec
</span><br>
<span class="quotelev2">&gt;&gt; 103: 1048573 bytes     53 times --&gt;   9545.32 Mbps in     838.10 usec
</span><br>
<span class="quotelev2">&gt;&gt; 104: 1048576 bytes     59 times --&gt;   9532.37 Mbps in     839.25 usec
</span><br>
<span class="quotelev2">&gt;&gt; 105: 1048579 bytes     59 times --&gt;   9542.90 Mbps in     838.32 usec
</span><br>
<span class="quotelev2">&gt;&gt; 106: 1572861 bytes     59 times --&gt;   9434.44 Mbps in    1271.93 usec
</span><br>
<span class="quotelev2">&gt;&gt; 107: 1572864 bytes     52 times --&gt;   9400.64 Mbps in    1276.51 usec
</span><br>
<span class="quotelev2">&gt;&gt; 108: 1572867 bytes     52 times --&gt;   9409.24 Mbps in    1275.34 usec
</span><br>
<span class="quotelev2">&gt;&gt; 109: 2097149 bytes     26 times --&gt;   9305.75 Mbps in    1719.36 usec
</span><br>
<span class="quotelev2">&gt;&gt; 110: 2097152 bytes     29 times --&gt;   9314.56 Mbps in    1717.74 usec
</span><br>
<span class="quotelev2">&gt;&gt; 111: 2097155 bytes     29 times --&gt;   9278.43 Mbps in    1724.43 usec
</span><br>
<span class="quotelev2">&gt;&gt; 112: 3145725 bytes     28 times --&gt;   9065.15 Mbps in    2647.50 usec
</span><br>
<span class="quotelev2">&gt;&gt; 113: 3145728 bytes     25 times --&gt;   9095.10 Mbps in    2638.78 usec
</span><br>
<span class="quotelev2">&gt;&gt; 114: 3145731 bytes     25 times --&gt;   9073.88 Mbps in    2644.96 usec
</span><br>
<span class="quotelev2">&gt;&gt; 115: 4194301 bytes     12 times --&gt;   8772.63 Mbps in    3647.70 usec
</span><br>
<span class="quotelev2">&gt;&gt; 116: 4194304 bytes     13 times --&gt;   8768.32 Mbps in    3649.50 usec
</span><br>
<span class="quotelev2">&gt;&gt; 117: 4194307 bytes     13 times --&gt;   8771.37 Mbps in    3648.24 usec
</span><br>
<span class="quotelev2">&gt;&gt; 118: 6291453 bytes     13 times --&gt;   8321.22 Mbps in    5768.38 usec
</span><br>
<span class="quotelev2">&gt;&gt; 119: 6291456 bytes     11 times --&gt;   8320.00 Mbps in    5769.23 usec
</span><br>
<span class="quotelev2">&gt;&gt; 120: 6291459 bytes     11 times --&gt;   8335.25 Mbps in    5758.68 usec
</span><br>
<span class="quotelev2">&gt;&gt; 121: 8388605 bytes      5 times --&gt;   8167.02 Mbps in    7836.39 usec
</span><br>
<span class="quotelev2">&gt;&gt; 122: 8388608 bytes      6 times --&gt;   8165.44 Mbps in    7837.91 usec
</span><br>
<span class="quotelev2">&gt;&gt; 123: 8388611 bytes      6 times --&gt;   8162.24 Mbps in    7840.99 usec
</span><br>
<span class="quotelev2">&gt;&gt; [6:32] svbu-mpi052:~/svn/ompi-tests/NetPIPE-3.7.1 % cd ../osu/
</span><br>
<span class="quotelev2">&gt;&gt; [6:32] svbu-mpi052:~/svn/ompi-tests/osu % mpirun --mca  
</span><br>
<span class="quotelev2">&gt;&gt; mpi_paffinity_alone 1 -np 2 --mca btl sm,self osu_latency
</span><br>
<span class="quotelev2">&gt;&gt; # OSU MPI Latency Test (Version 2.1)
</span><br>
<span class="quotelev2">&gt;&gt; # Size		Latency (us)
</span><br>
<span class="quotelev2">&gt;&gt; 0		0.65
</span><br>
<span class="quotelev2">&gt;&gt; 1		0.69
</span><br>
<span class="quotelev2">&gt;&gt; 2		0.69
</span><br>
<span class="quotelev2">&gt;&gt; 4		0.76
</span><br>
<span class="quotelev2">&gt;&gt; 8		0.76
</span><br>
<span class="quotelev2">&gt;&gt; 16		0.76
</span><br>
<span class="quotelev2">&gt;&gt; 32		0.85
</span><br>
<span class="quotelev2">&gt;&gt; 64		0.83
</span><br>
<span class="quotelev2">&gt;&gt; 128		1.03
</span><br>
<span class="quotelev2">&gt;&gt; 256		1.25
</span><br>
<span class="quotelev2">&gt;&gt; 512		1.73
</span><br>
<span class="quotelev2">&gt;&gt; 1024		2.47
</span><br>
<span class="quotelev2">&gt;&gt; 2048		4.18
</span><br>
<span class="quotelev2">&gt;&gt; 4096		6.53
</span><br>
<span class="quotelev2">&gt;&gt; 8192		11.23
</span><br>
<span class="quotelev2">&gt;&gt; 16384		18.91
</span><br>
<span class="quotelev2">&gt;&gt; 32768		34.97
</span><br>
<span class="quotelev2">&gt;&gt; 65536		60.80
</span><br>
<span class="quotelev2">&gt;&gt; 131072		112.09
</span><br>
<span class="quotelev2">&gt;&gt; 262144		215.15
</span><br>
<span class="quotelev2">&gt;&gt; 524288		427.97
</span><br>
<span class="quotelev2">&gt;&gt; 1048576		880.90
</span><br>
<span class="quotelev2">&gt;&gt; 2097152		1840.40
</span><br>
<span class="quotelev2">&gt;&gt; 4194304		3945.23
</span><br>
<span class="quotelev2">&gt;&gt; [6:33] svbu-mpi052:~/svn/ompi-tests/osu %
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 23, 2008, at 7:24 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry Terry, :).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------- Forwarded message ----------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Jul 23, 2008 2:22 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI devel] [OMPI bugs] [Open MPI] #1250:  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Performance problem on SM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Lenny Berkhovsky &lt;lenny.verkhovsky_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 7/23/08, Terry Dontje &lt;Terry.Dontje_at_[hidden]&gt; wrote: I didn't  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; see any attached results on the email.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --td
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I rechecked in on the same node, still no degradation,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; see results attached.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 7/22/08, *Open MPI* &lt;bugs_at_[hidden] &lt;mailto:bugs_at_open- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi.org&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #1250: Performance problem on SM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  -------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +-------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Reporter:  bosilca  |        Owner:  bosilca
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Type:  defect   |       Status:  assigned
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Priority:  blocker  |    Milestone:  Open MPI 1.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Version:           |   Resolution:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Keywords:           |
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  -------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +-------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Comment(by tdd):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Hmmm, Lennyve isn't your mpirun above going across nodes and not
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    same node?  I am running netpipe on a single node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Ticket URL:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  &lt;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1250#comment:20">https://svn.open-mpi.org/trac/ompi/ticket/1250#comment:20</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Open MPI &lt;<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  bugs mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  bugs_at_[hidden] &lt;mailto:bugs_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/bugs">http://www.open-mpi.org/mailman/listinfo.cgi/bugs</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;NPmpi.log&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4406.php">Jeff Squyres: "Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;"</a>
<li><strong>Previous message:</strong> <a href="4404.php">Ralf Wildenhues: "Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed	-Wl, --no-undefined&quot;"</a>
<li><strong>In reply to:</strong> <a href="4403.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance problem on SM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4407.php">Terry Dontje: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance	problem on SM"</a>
<li><strong>Reply:</strong> <a href="4407.php">Terry Dontje: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance	problem on SM"</a>
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
