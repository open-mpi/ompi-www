<?
$subject_val = "[OMPI users] Strange behavior of OMPI 1.8.3";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  6 18:51:50 2014" -->
<!-- isoreceived="20141006225150" -->
<!-- sent="Mon, 6 Oct 2014 17:51:50 -0500" -->
<!-- isosent="20141006225150" -->
<!-- name="Michael Thomadakis" -->
<!-- email="drmichaelt7777_at_[hidden]" -->
<!-- subject="[OMPI users] Strange behavior of OMPI 1.8.3" -->
<!-- id="CA+OO3AXho=9-vywtwb0RL_nd1ba-bof6Se_zcOfO3Us5sDdLqw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Strange behavior of OMPI 1.8.3<br>
<strong>From:</strong> Michael Thomadakis (<em>drmichaelt7777_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-06 18:51:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25469.php">Joshua Ladd: "Re: [OMPI users] Update/patch to check/opal_check_pmi.m4"</a>
<li><strong>Previous message:</strong> <a href="25467.php">Timothy Brown: "[OMPI users] Update/patch to check/opal_check_pmi.m4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25472.php">Howard Pritchard: "Re: [OMPI users] Strange behavior of OMPI 1.8.3"</a>
<li><strong>Reply:</strong> <a href="25472.php">Howard Pritchard: "Re: [OMPI users] Strange behavior of OMPI 1.8.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I've configured OpenMPI1.8.3 with the following command line
<br>
<p><p><p>$ AXFLAGS=&quot;-xSSE4.2 -axAVX,CORE-AVX-I,CORE-AVX2&quot;
<br>
$ myFLAGS=&quot;-O2 ${AXFLAGS}&quot; ;
<br>
<p>$ ./configure --prefix=${proot} \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-lsf \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-cma \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--enable-peruse --enable-branch-probabilities \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--enable-mpi-fortran=all \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--enable-cxx-exceptions \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--enable-ipv6 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--enable-sparse-groups \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-threads=posix \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--enable-mpi-thread-multiple \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--enable-openib-connectx-xrc \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--enable-mtl-portals4-flow-control \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-hwloc=internal \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--enable-orterun-prefix-by-default \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-ident-string=&quot;MikeT_15.0&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CC=icc CFLAGS=&quot;$myFLAGS&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CXX=icpc CXXFLAGS=&quot;$myFLAGS&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;F77=ifort FFLAGS=&quot;$myFLAGS&quot; FC=ifort FCFLAGS=&quot;$myFLAGS&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;LIBS=&quot;-lnsl&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&amp;&amp; make -j 8 &amp;&amp; make install
<br>
<p>but when I run it with
<br>
<p>$ mpirun --bind-to core --map-by core -mca mpi_show_mca_params all --host
<br>
H1,H2 -np 2
<br>
~/performance/analysis/networks/Intel64_SandyBridge/HPCI/OMB_4.3.0/ompi_1.8.2/cpu/osu-micro-benchmarks-4.3/libexec/osu-micro-benchmarks/mpi/one-sided/osu_put_bibw
<br>
H H
<br>
<p>I am getting
<br>
&quot;
<br>
[H1:33580] [[41149,0],0] ORTE_ERROR_LOG: Address family not supported by
<br>
protocol in file oob_tcp_listener.c at line 120
<br>
[h2:33580] [[41149,0],0] ORTE_ERROR_LOG: Address family not supported by
<br>
protocol in file oob_tcp_component.c at line 584
<br>
<p>&quot;
<br>
<p>Any suggestions ?
<br>
<p><p>Thanks !
<br>
Michael
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25468/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25469.php">Joshua Ladd: "Re: [OMPI users] Update/patch to check/opal_check_pmi.m4"</a>
<li><strong>Previous message:</strong> <a href="25467.php">Timothy Brown: "[OMPI users] Update/patch to check/opal_check_pmi.m4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25472.php">Howard Pritchard: "Re: [OMPI users] Strange behavior of OMPI 1.8.3"</a>
<li><strong>Reply:</strong> <a href="25472.php">Howard Pritchard: "Re: [OMPI users] Strange behavior of OMPI 1.8.3"</a>
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
