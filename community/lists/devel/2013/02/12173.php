<?
$subject_val = "Re: [OMPI devel] 1.7rc8 is posted";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 27 19:36:44 2013" -->
<!-- isoreceived="20130228003644" -->
<!-- sent="Thu, 28 Feb 2013 04:36:40 +0400" -->
<!-- isosent="20130228003640" -->
<!-- name="Pavel Mezentsev" -->
<!-- email="pavel.mezentsev_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7rc8 is posted" -->
<!-- id="CAFamD4U5TrYJd_AJf62zM1Rb1=2cGkxT5508wBC1VcAXbyQAZw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC43F60FE7_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7rc8 is posted<br>
<strong>From:</strong> Pavel Mezentsev (<em>pavel.mezentsev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-27 19:36:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12174.php">marco atzeri: "Re: [OMPI devel] 1.7rc8 is posted"</a>
<li><strong>Previous message:</strong> <a href="12172.php">Nathan Hjelm: "[OMPI devel] RFC: Remove pml/csum"</a>
<li><strong>In reply to:</strong> <a href="12171.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.7rc8 is posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12176.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7rc8 is posted"</a>
<li><strong>Reply:</strong> <a href="12176.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7rc8 is posted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've tried the new rc. Here is what I got:
<br>
<p>1) I've successfully built it with intel-13.1 and gcc-4.7.2. But I've
<br>
failed while using open64-4.5.2 and ekopath-5.0.0 (pathscale). The problems
<br>
are in the fortran part. In each case I've used the following configuration
<br>
line:
<br>
CC=$CC CXX=$CXX F77=$F77 FC=$FC ./configure --prefix=$prefix
<br>
--with-knem=$knem_path
<br>
Open64 failed during configuration with the following:
<br>
*** Fortran compiler
<br>
checking whether we are using the GNU Fortran compiler... yes
<br>
checking whether openf95 accepts -g... yes
<br>
configure: WARNING: Open MPI now ignores the F77 and FFLAGS environment
<br>
variables; only the FC and FCFLAGS environment variables are used.
<br>
checking whether ln -s works... yes
<br>
checking if Fortran compiler works... yes
<br>
checking for extra arguments to build a shared library... none needed
<br>
checking for Fortran flag to compile .f files... none
<br>
checking for Fortran flag to compile .f90 files... none
<br>
checking to see if Fortran compilers need additional linker flags... none
<br>
checking  external symbol convention... double underscore
<br>
checking if C and Fortran are link compatible... yes
<br>
checking to see if Fortran compiler likes the C++ exception flags...
<br>
skipped (no C++ exceptions flags)
<br>
checking to see if mpifort compiler needs additional linker flags... none
<br>
checking if Fortran compiler supports CHARACTER... yes
<br>
checking size of Fortran CHARACTER... 1
<br>
checking for C type corresponding to CHARACTER... char
<br>
checking alignment of Fortran CHARACTER... 1
<br>
checking for corresponding KIND value of CHARACTER... C_SIGNED_CHAR
<br>
checking KIND value of Fortran C_SIGNED_CHAR... no ISO_C_BINDING -- fallback
<br>
checking Fortran value of selected_int_kind(4)... no
<br>
configure: WARNING: Could not determine KIND value of C_SIGNED_CHAR
<br>
configure: WARNING: See config.log for more details
<br>
configure: error: Cannot continue
<br>
<p>Ekopath failed during make with the following error:
<br>
&nbsp;PPFC     mpi-f08-sizeof.lo
<br>
&nbsp;&nbsp;PPFC     mpi-f08.lo
<br>
In file included from mpi-f08.F90:37:
<br>
mpi-f-interfaces-bind.h:1908: warning: extra tokens at end of #endif
<br>
directive
<br>
mpi-f-interfaces-bind.h:2957: warning: extra tokens at end of #endif
<br>
directive
<br>
In file included from mpi-f08.F90:38:
<br>
pmpi-f-interfaces-bind.h:1911: warning: extra tokens at end of #endif
<br>
directive
<br>
pmpi-f-interfaces-bind.h:2963: warning: extra tokens at end of #endif
<br>
directive
<br>
pathf95-1044 pathf95: INTERNAL OMPI_OP_CREATE_F, File =
<br>
mpi-f-interfaces-bind.h, Line = 955, Column = 29
<br>
&nbsp;&nbsp;Internal : Unexpected ATP_PGM_UNIT in check_interoperable_pgm_unit()
<br>
make[2]: *** [mpi-f08.lo] Error 1
<br>
make[2]: Leaving directory
<br>
`/tmp/mpi_install_tmp1400/openmpi-1.7rc8/ompi/mpi/fortran/use-mpi-f08'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/tmp/mpi_install_tmp1400/openmpi-1.7rc8/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p>It seems to be different from the error I got last time with rc7. And again
<br>
I'm not a fortran guy to understand this error. I've used the following
<br>
version of the compiler:
<br>
<a href="http://c591116.r16.cf2.rackcdn.com/ekopath/nightly/Linux/ekopath-2013-02-26-installer.run">http://c591116.r16.cf2.rackcdn.com/ekopath/nightly/Linux/ekopath-2013-02-26-installer.run</a>
<br>
<p>2) I've ran a couple of tests (IMB) with the new version. I ran this on a
<br>
system consisting of 10 nodes with Intel SB processor and fdr ConnectX3
<br>
infiniband adapters.
<br>
First I've tried the following parameters:
<br>
mpirun -np $NP -hostfile hosts --mca btl
<br>
openib,sm,self --bind-to-core -npernode 16 --mca mpi_leave_pinned
<br>
1 ./IMB-MPI1 -npmin $NP -mem 4G $COLL
<br>
This combination complained about mca_leave_pinned. The same line works for
<br>
1.6.3. Is something different in the new release and I've missed it?
<br>
--------------------------------------------------------------------------
<br>
A process attempted to use the &quot;leave pinned&quot; MPI feature, but no
<br>
memory registration hooks were found on the system at run time.  This
<br>
may be the result of running on a system that does not support memory
<br>
hooks or having some other software subvert Open MPI's use of the
<br>
memory hooks.  You can disable Open MPI's use of memory hooks by
<br>
setting both the mpi_leave_pinned and mpi_leave_pinned_pipeline MCA
<br>
parameters to 0.
<br>
<p>Open MPI will disable any transports that are attempting to use the
<br>
leave pinned functionality; your job may still run, but may fall back
<br>
to a slower network transport (such as TCP).
<br>
<p>&nbsp;&nbsp;Mpool name: grdma
<br>
&nbsp;&nbsp;Process:    [[13305,1],1]
<br>
&nbsp;&nbsp;Local host: b23
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
WARNING: There is at least one OpenFabrics device found but there are
<br>
no active ports detected (or Open MPI was unable to use them).  This
<br>
is most certainly not what you wanted.  Check your cables, subnet
<br>
manager configuration, etc.  The openib BTL will be ignored for this
<br>
job.
<br>
<p>&nbsp;&nbsp;Local host: b23
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
At least one pair of MPI processes are unable to reach each other for
<br>
MPI communications.  This means that no Open MPI device has indicated
<br>
that it can be used to communicate between these processes.  This is
<br>
an error; Open MPI requires that all MPI processes be able to reach
<br>
each other.  This error can sometimes be the result of forgetting to
<br>
specify the &quot;self&quot; BTL.
<br>
<p>&nbsp;&nbsp;Process 1 ([[13305,1],0]) is on host: b22
<br>
&nbsp;&nbsp;Process 2 ([[13305,1],1]) is on host: b23
<br>
&nbsp;&nbsp;BTLs attempted: self sm
<br>
<p>Your MPI job is now going to abort; sorry.
<br>
...
<br>
<p>Then I ran a couple of P2P and collective tests. In general the performance
<br>
improved compared to 1.6.3. But there are several cases where it got worse.
<br>
Perhaps I need to use some tuning, could you please tell me what parameters
<br>
would suite me better then the default.
<br>
Here is what I got for PingPong and PingPing in 1.7rc8 (the above
<br>
parameters changed to have &quot;-npernode 1&quot;):
<br>
#---------------------------------------------------
<br>
# Benchmarking PingPong
<br>
# #processes = 2
<br>
#---------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#bytes #repetitions      t[usec]   Mbytes/sec
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0         1000         1.39         0.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1         1000         1.50         0.64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2         1000         1.10         1.73
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4         1000         1.10         3.46
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8         1000         1.12         6.80
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16         1000         1.12        13.62
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32         1000         1.14        26.75
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64         1000         1.18        51.92
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128         1000         1.73        70.42
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;256         1000         1.85       132.04
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;512         1000         1.98       247.16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1024         1000         2.26       431.52
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2048         1000         2.85       684.58
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4096         1000         3.49      1118.63
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8192         1000         4.48      1741.96
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16384         1000         9.58      1630.92
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32768         1000        14.27      2189.46
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;65536          640        23.03      2713.71
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;131072          320        35.55      3515.73
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;262144          160        57.65      4336.77
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;524288           80       101.42      4930.05
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1048576           40       188.00      5319.18
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2097152           20       521.70      3833.61
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4194304           10      1118.20      3577.19
<br>
<p>#---------------------------------------------------
<br>
# Benchmarking PingPing
<br>
# #processes = 2
<br>
#---------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#bytes #repetitions      t[usec]   Mbytes/sec
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0         1000         1.26         0.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1         1000         1.32         0.72
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2         1000         1.32         1.44
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4         1000         1.35         2.84
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8         1000         1.38         5.53
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16         1000         1.13        13.51
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32         1000         1.13        26.96
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64         1000         1.17        51.95
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128         1000         1.72        70.96
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;256         1000         1.80       135.63
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;512         1000         1.94       251.17
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1024         1000         2.23       437.51
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2048         1000         2.88       677.47
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4096         1000         3.49      1119.28
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8192         1000         4.75      1643.41
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16384         1000         9.90      1578.12
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32768         1000        14.54      2149.25
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;65536          640        24.04      2599.79
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;131072          320        37.00      3378.35
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;262144          160        60.25      4149.39
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;524288           80       105.74      4728.77
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1048576           40       196.73      5083.23
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2097152           20       785.79      2545.20
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4194304           10      1790.19      2234.40
<br>
<p>And 1.6.3 gave the following:
<br>
#---------------------------------------------------
<br>
# Benchmarking PingPong
<br>
# #processes = 2
<br>
#---------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#bytes #repetitions      t[usec]   Mbytes/sec
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0         1000         1.06         0.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1         1000         0.94         1.01
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2         1000         0.95         2.02
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4         1000         0.95         4.01
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8         1000         0.97         7.90
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16         1000         0.98        15.63
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32         1000         0.99        30.86
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64         1000         1.02        59.60
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128         1000         1.58        77.23
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;256         1000         1.71       142.73
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;512         1000         1.86       263.15
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1024         1000         2.13       459.35
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2048         1000         2.72       718.31
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4096         1000         3.27      1194.74
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8192         1000         4.33      1802.57
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16384         1000         6.20      2521.78
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32768         1000         8.84      3535.46
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;65536          640        14.28      4376.82
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;131072          320        24.97      5005.06
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;262144          160        44.94      5562.46
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;524288           80        86.76      5763.29
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1048576           40       168.73      5926.77
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2097152           20       333.65      5994.32
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4194304           10       666.09      6005.16
<br>
<p>#---------------------------------------------------
<br>
# Benchmarking PingPing
<br>
# #processes = 2
<br>
#---------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#bytes #repetitions      t[usec]   Mbytes/sec
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0         1000         0.93         0.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1         1000         0.97         0.98
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2         1000         0.97         1.97
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4         1000         0.97         3.94
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8         1000         0.99         7.70
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16         1000         0.99        15.34
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32         1000         1.01        30.21
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64         1000         1.05        58.13
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128         1000         1.61        75.82
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;256         1000         1.73       141.20
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;512         1000         1.88       259.87
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1024         1000         2.17       450.21
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2048         1000         2.83       691.13
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4096         1000         3.45      1131.26
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8192         1000         4.76      1639.88
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16384         1000         7.76      2014.01
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32768         1000        10.34      3021.35
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;65536          640        16.29      3836.55
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;131072          320        26.72      4678.40
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;262144          160        48.83      5120.31
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;524288           80        91.85      5443.61
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1048576           40       178.65      5597.63
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2097152           20       351.31      5692.98
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4194304           10       701.69      5700.53
<br>
<p>The sendrecv and exchange also got worse. I can send additional data if
<br>
needed.
<br>
<p>The performance on collectives generally has slightly improved comparing to
<br>
1.6.3 or remained the same. But in certain cases I got much better results
<br>
with tuned_collectives. In particular those suited my system better:
<br>
--mca coll_tuned_barrier_algorithm 6 (default and tuned):
<br>
#---------------------------------------------------
<br>
# Benchmarking Barrier
<br>
# #processes = 160
<br>
#---------------------------------------------------
<br>
&nbsp;#repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1000        49.75        49.77        49.76
<br>
#---------------------------------------------------
<br>
# Benchmarking Barrier
<br>
# #processes = 160
<br>
#---------------------------------------------------
<br>
&nbsp;#repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1000        12.74        12.74        12.74
<br>
<p>Bcast for small messages
<br>
--mca coll_tuned_bcast_algorithm 3 (default and tuned):
<br>
#----------------------------------------------------------------
<br>
# Benchmarking Bcast
<br>
# #processes = 160
<br>
#----------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0         1000         0.01         0.02         0.02
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1         1000         9.87         9.96         9.92
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2         1000        10.44        10.51        10.47
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4         1000        10.30        10.37        10.34
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8         1000        10.34        10.43        10.38
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16         1000        10.39        10.48        10.43
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32         1000        10.36        10.43        10.40
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64         1000        10.38        10.44        10.41
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128         1000        10.11        10.22        10.17
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;256         1000        11.37        11.54        11.48
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;512         1000        14.09        14.25        14.19
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1024         1000        18.77        19.03        18.94
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2048         1000        13.47        13.63        13.58
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4096         1000        25.39        25.60        25.55
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8192         1000        50.80        51.11        51.04
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16384         1000       102.64       103.53       103.38
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32768         1000       280.86       281.80       281.62
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;65536          640       387.10       391.90       391.26
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;131072          320       779.58       796.04       794.30
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;262144          160      1526.52      1597.39      1590.31
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;524288           80       355.67       379.06       375.27
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1048576           40       702.95       753.65       736.29
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2097152           20      1518.11      1580.85      1551.57
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4194304           10      3183.22      3931.81      3676.94
<br>
<p>#----------------------------------------------------------------
<br>
# Benchmarking Bcast
<br>
# #processes = 160
<br>
#----------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0         1000         0.01         0.02         0.02
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1         1000         4.54         5.13         4.85
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2         1000         4.50         5.11         4.81
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4         1000         4.50         5.09         4.80
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8         1000         4.48         5.09         4.79
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16         1000         4.49         5.09         4.79
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32         1000         4.55         5.15         4.86
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64         1000         4.52         5.14         4.83
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128         1000         4.66         5.28         4.98
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;256         1000         4.78         5.40         5.09
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;512         1000         4.89         5.52         5.21
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1024         1000         5.15         5.81         5.48
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2048         1000         5.60         6.30         5.94
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4096         1000         8.25         8.67         8.46
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8192         1000        10.49        11.01        10.76
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16384         1000        20.05        20.87        20.50
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32768         1000        30.11        31.41        30.80
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;65536          640        46.08        48.94        47.54
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;131072          320        75.53        84.98        80.26
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;262144          160       134.26       169.44       151.92
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;524288           80       240.34       372.76       307.80
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1048576           40       427.00       951.02       699.41
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2097152           20       933.41      3170.45      2076.21
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4194304           10      2682.40     16020.39      9718.86
<br>
<p>and AllGatherv:
<br>
--mca coll_tuned_allgatherv_algorithm 5 (default and tuned):
<br>
#----------------------------------------------------------------
<br>
# Benchmarking Allgatherv
<br>
# #processes = 160
<br>
#----------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0         1000         0.06         0.07         0.06
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1         1000        54.11        54.15        54.13
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2         1000        52.74        52.78        52.76
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4         1000        55.09        55.13        55.11
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8         1000        58.48        58.52        58.50
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16         1000        61.99        62.03        62.01
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32         1000        69.31        69.35        69.32
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64         1000        88.13        88.18        88.16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128         1000       126.62       126.71       126.68
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;256         1000       215.26       215.34       215.31
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;512         1000       832.54       833.01       832.57
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1024         1000       928.81       929.31       928.86
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2048         1000      1072.77      1073.35      1072.85
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4096         1000      1222.82      1223.42      1222.90
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8192         1000      1713.46      1714.13      1713.87
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16384         1000      2596.87      2598.31      2597.40
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32768         1000      4153.70      4154.09      4153.92
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;65536          640      6795.04      6796.32      6795.83
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;131072          320     12076.74     12083.04     12080.28
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;262144          160     23120.98     23153.76     23138.10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;524288           80     49077.99     49204.79     49142.48
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1048576           40    132120.25    132675.60    132400.38
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2097152           20    240537.20    241821.05    241138.53
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4194304           10    457125.71    459065.10    458035.03
<br>
<p>#----------------------------------------------------------------
<br>
# Benchmarking Allgatherv
<br>
# #processes = 160
<br>
#----------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0         1000         0.06         0.07         0.06
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1         1000         0.47         0.56         0.52
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2         1000         0.47         0.57         0.51
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4         1000         0.48         0.56         0.52
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8         1000         0.46         0.56         0.51
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16         1000         0.47         0.57         0.52
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32         1000         0.47         0.56         0.52
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64         1000         0.47         0.57         0.52
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128         1000         0.50         0.62         0.57
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;256         1000         0.58         0.68         0.63
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;512         1000         0.62         0.81         0.70
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1024         1000         0.71         0.97         0.80
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2048         1000         0.89         1.24         1.05
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4096         1000         2.21         2.58         2.40
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8192         1000         3.08         3.55         3.30
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16384         1000         4.77         5.56         5.11
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32768         1000         7.99         9.75         8.90
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;65536          640        15.81        19.35        17.69
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;131072          320        34.18        39.74        36.95
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;262144          160        71.72        80.37        76.06
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;524288           80       143.64       161.81       152.36
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1048576           40       781.10       868.80       825.57
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2097152           20      2594.30      2795.45      2672.58
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4194304           10      5185.79      5451.20      5298.98
<br>
<p>This time I only ran the test on 160 processes but before I've done more
<br>
testing with 1.6 on different number of processes (from 16 to 320) and
<br>
those tuned parameters helped almost each time. I don't know what are
<br>
default parameters tuned for but perhaps it may be a good idea to change
<br>
the defaults for the kind of system I use.
<br>
<p><p><p>I can perform some additional tests if necessary or give more information
<br>
on the problems that I've came across.
<br>
<p>Regards, Pavel Mezentsev.
<br>
<p><p>2013/2/27 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; The goal is to release 1.7 (final) by the end of this week.  New rc posted
</span><br>
<span class="quotelev1">&gt; with fairly small changes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/software/ompi/v1.7/">http://www.open-mpi.org/software/ompi/v1.7/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Fix wrong header file / compilation error in bcol
</span><br>
<span class="quotelev1">&gt; - Support MXM STREAM for isend and irecv
</span><br>
<span class="quotelev1">&gt; - Make sure &quot;mpirun &lt;dirname&gt;&quot; fails with $status!=0
</span><br>
<span class="quotelev1">&gt; - Bunches of cygwin minor fixes
</span><br>
<span class="quotelev1">&gt; - Make sure the fortran compiler supports BIND(C) with LOGICAL for the F08
</span><br>
<span class="quotelev1">&gt; bindings
</span><br>
<span class="quotelev1">&gt; - Fix --disable-mpi-io with the F08 bindings
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12173/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12174.php">marco atzeri: "Re: [OMPI devel] 1.7rc8 is posted"</a>
<li><strong>Previous message:</strong> <a href="12172.php">Nathan Hjelm: "[OMPI devel] RFC: Remove pml/csum"</a>
<li><strong>In reply to:</strong> <a href="12171.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.7rc8 is posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12176.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7rc8 is posted"</a>
<li><strong>Reply:</strong> <a href="12176.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7rc8 is posted"</a>
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
