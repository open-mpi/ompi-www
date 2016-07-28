<?
$subject_val = "[OMPI devel] 1.10.*, intel 16.0.0, fortran, symbol lookup error reference to mpi_fortran_argvs_null__";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 29 03:50:15 2015" -->
<!-- isoreceived="20151029075015" -->
<!-- sent="Thu, 29 Oct 2015 08:49:52 +0100" -->
<!-- isosent="20151029074952" -->
<!-- name="Nick Papior" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.10.*, intel 16.0.0, fortran, symbol lookup error reference to mpi_fortran_argvs_null__" -->
<!-- id="CAAbhqc4QDbmE5Ms=cXK23NnjGxy1bbH5OpPU3ickmK6HVqTQtw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] 1.10.*, intel 16.0.0, fortran, symbol lookup error reference to mpi_fortran_argvs_null__<br>
<strong>From:</strong> Nick Papior (<em>nickpapior_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-29 03:49:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18312.php">Nick Papior: "Re: [OMPI devel] 1.10.*, intel 16.0.0, fortran, symbol lookup error reference to mpi_fortran_argvs_null__"</a>
<li><strong>Previous message:</strong> <a href="18310.php">Ralph Castain: "[OMPI devel] Please test: v1.10.1rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18312.php">Nick Papior: "Re: [OMPI devel] 1.10.*, intel 16.0.0, fortran, symbol lookup error reference to mpi_fortran_argvs_null__"</a>
<li><strong>Reply:</strong> <a href="18312.php">Nick Papior: "Re: [OMPI devel] 1.10.*, intel 16.0.0, fortran, symbol lookup error reference to mpi_fortran_argvs_null__"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I am not really sure whether this is an intel or ompi bug?
<br>
<p>I have now tried with all 1.10.* versions (including 1.10.1rc[23]) to test
<br>
whether this could be circumvented.
<br>
<p>I use the intel 2016.1.0.423501 compiler.
<br>
<p>I can successfully compile OpenMPI and use the C-compiler. But as soon as I
<br>
compile the most simple fortran (ping-pong) program with mpif90 (no compile
<br>
flags) I get symbol lookup errors.
<br>
<p>$&gt; mpirun -np &lt;&gt; &lt;exec&gt;
<br>
intel: symbol lookup error:
<br>
*/XeonX5550/openmpi/1.10.1/intel-16.0.0/lib/libmpi_mpifh.so.12: undefined
<br>
symbol: mpi_fortran_argvs_null__
<br>
<p>So I thought that it was really a missing symbol, hence I grepped for the
<br>
routine in the libraries:
<br>
for m in *.a *.so
<br>
do
<br>
&nbsp;&nbsp;echo $m
<br>
&nbsp;&nbsp;nm $m | grep mpi_fortran_argv
<br>
done
<br>
<p>And came up with:
<br>
<p>libopen-trace-format.a
<br>
libotfaux.a
<br>
libvt.a
<br>
libvt-hyb.a
<br>
libvt-mpi.a
<br>
libvt-mpi-unify.a
<br>
libvt-mt.a
<br>
libvt-pomp.a
<br>
libmca_common_sm.so
<br>
libmca_common_verbs.so
<br>
libmpi_cxx.so
<br>
libmpi_mpifh.so
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U mpi_fortran_argv_null
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U mpi_fortran_argv_null_
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U mpi_fortran_argv_null__
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U mpi_fortran_argvs_null
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U mpi_fortran_argvs_null_
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U mpi_fortran_argvs_null__
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U ompi_fortran_argv_f2c
<br>
libmpi.so
<br>
00000000002fb160 B mpi_fortran_argv_null
<br>
00000000002fb080 B mpi_fortran_argv_null_
<br>
00000000002fb028 B mpi_fortran_argv_null__
<br>
00000000002fb1d8 B mpi_fortran_argvs_null
<br>
00000000002fb220 B mpi_fortran_argvs_null_
<br>
00000000002fb060 B mpi_fortran_argvs_null__
<br>
0000000000086d60 T ompi_fortran_argv_f2c
<br>
libmpi_usempif08.so
<br>
00000000002ce2c0 B mpi_fortran_argv_null
<br>
00000000002ce2a0 B mpi_fortran_argvs_null
<br>
libmpi_usempi_ignore_tkr.so
<br>
00000000002a8500 B mpi_fortran_argv_null_
<br>
00000000002a8560 B mpi_fortran_argvs_null_
<br>
libompitrace.so
<br>
libopen-pal.so
<br>
libopen-rte.so
<br>
libopen-trace-format.so
<br>
liboshmem.so
<br>
0000000000356e60 B mpi_fortran_argv_null
<br>
0000000000356d00 B mpi_fortran_argv_null_
<br>
0000000000356bc0 B mpi_fortran_argv_null__
<br>
0000000000356f00 B mpi_fortran_argvs_null
<br>
0000000000356f20 B mpi_fortran_argvs_null_
<br>
0000000000356ca0 B mpi_fortran_argvs_null__
<br>
libotfaux.so
<br>
libvt-hyb.so
<br>
libvt-mpi.so
<br>
libvt-mpi-unify.so
<br>
libvt-mt.so
<br>
libvt.so
<br>
<p>So they are uninitialized in the common section of mpi.so, but undefined in
<br>
mpi_mpifh.so.
<br>
<p>Note:
<br>
I have also tried with intel 15 and ompi 1.8.X and the symbol tables are
<br>
identical yet the program executes fine.
<br>
<p>Note:
<br>
I then tried with gcc (5.2.0) and found the exact same nm listings, i.e.
<br>
the mpi_fortran_argvs_null routine are all B/U defined in the libraries.
<br>
Yet, the program runs fine.
<br>
<p>I have tried manually setting the -l order to
<br>
-lmpi_mpifh -lmpi
<br>
to no avail.
<br>
<p>Should this be reported to intel? Or?
<br>
<p><pre>
-- 
Kind regards Nick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18311/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18312.php">Nick Papior: "Re: [OMPI devel] 1.10.*, intel 16.0.0, fortran, symbol lookup error reference to mpi_fortran_argvs_null__"</a>
<li><strong>Previous message:</strong> <a href="18310.php">Ralph Castain: "[OMPI devel] Please test: v1.10.1rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18312.php">Nick Papior: "Re: [OMPI devel] 1.10.*, intel 16.0.0, fortran, symbol lookup error reference to mpi_fortran_argvs_null__"</a>
<li><strong>Reply:</strong> <a href="18312.php">Nick Papior: "Re: [OMPI devel] 1.10.*, intel 16.0.0, fortran, symbol lookup error reference to mpi_fortran_argvs_null__"</a>
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
