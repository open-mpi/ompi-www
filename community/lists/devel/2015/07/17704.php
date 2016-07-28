<?
$subject_val = "[OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 25 02:10:06 2015" -->
<!-- isoreceived="20150725061006" -->
<!-- sent="Fri, 24 Jul 2015 23:09:58 -0700" -->
<!-- isosent="20150725060958" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12" -->
<!-- id="CAAvDA178gET+aJaXuq332FLPjhyz_C8thobGJnXqPy3fg-rKew_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-25 02:09:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17705.php">Gilles Gouaillardet: "Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12"</a>
<li><strong>Previous message:</strong> <a href="17703.php">Ralph Castain: "[OMPI devel] 1.8.7 and 1.10 problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17705.php">Gilles Gouaillardet: "Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12"</a>
<li><strong>Reply:</strong> <a href="17705.php">Gilles Gouaillardet: "Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12"</a>
<li><strong>Reply:</strong> <a href="17708.php">Gilles Gouaillardet: "Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I know Gilles and I went to a fair amount of effort to get configure
<br>
detection of &quot;older&quot; XRC working again for 1.8.7 (having been broken in
<br>
1.8.5 and 1.8.6).
<br>
However, I had tested on configuring and building the XRC support, but had
<br>
not *run* it (because my test scripts execute on the login node with no IB
<br>
interfaces).
<br>
<p>What I saw today when 1.10.0rc2 (and confirmed in 1.8.7) on the actual
<br>
compute nodes is the following:
<br>
<p>mpirun -np 2 examples/ring_c'
<br>
[c0869][[27518,1],1][/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.7-linux-x86_64-icc-11.1/openmpi-1.8.7/ompi/mca/btl/openib/btl_openib_proc.c:155:mca_btl_openib_proc_create]
<br>
[/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.7-linux-x86_64-icc-11.1/openmpi-1.8.7/ompi/mca/btl/openib/btl_openib_proc.c:155]
<br>
ompi_modex_recv failed for peer [[27518,1],0]
<br>
Process 0 sending 10 to 1, tag 201 (2 processes in ring)
<br>
Process 0 sent to 1
<br>
Process 0 decremented value: 9
<br>
Process 0 decremented value: 8
<br>
Process 0 decremented value: 7
<br>
Process 0 decremented value: 6
<br>
Process 0 decremented value: 5
<br>
Process 0 decremented value: 4
<br>
Process 0 decremented value: 3
<br>
Process 0 decremented value: 2
<br>
Process 0 decremented value: 1
<br>
Process 0 decremented value: 0
<br>
Process 0 exiting
<br>
Process 1 exiting
<br>
[c0869][[27518,1],1][/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.7-linux-x86_64-icc-11.1/openmpi-1.8.7/ompi/mca/btl/openib/btl_openib_xrc.c:57:mca_btl_openib_xrc_check_api]
<br>
XRC error: bad XRC API (require XRC from OFED pre 3.12).
<br>
<p><p>There are TWO things in there:
<br>
+ the modex failure
<br>
+ the &quot;bad XRC API&quot; error
<br>
<p>I don't know what the source of the modex failure may be, but the &quot;bad XRC
<br>
API&quot; message is from the following:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (NULL != dlsym(lib, &quot;ibv_create_xrc_rcv_qp&quot;)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BTL_ERROR((&quot;XRC error: bad XRC API (require XRC from OFED pre
<br>
3.12).&quot;));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return false;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>Yet, the symbol *is* in /usr/lib64/libibverbs.so:
<br>
<p>$ objdump -T /usr/lib64/libibverbs.so | grep ibv_create_xrc_rcv_qp
<br>
0000000000009bd0 g    DF .text  0000000000000033  IBVERBS_1.1
<br>
ibv_create_xrc_rcv_qp
<br>
<p><p>HOWEVER, there are other OFED installs on this system which are NOT in
<br>
LD_LIBRARY_PATH.
<br>
None of those contain ibv_create_xrc_rcv_qp.
<br>
<p>I am hoping this is some weird environment problem, but don't know how to
<br>
test that theory.
<br>
If I can determine that /usr/lib64/libibverbs.so is *not* the library being
<br>
loaded, then at least I know this is not an Open MPI problem.
<br>
So, how can I actually determine which libibverbs is getting loaded at
<br>
runtime?
<br>
Is there some mca parameter that would help?
<br>
<p>-Paul
<br>
<p><p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17704/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17705.php">Gilles Gouaillardet: "Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12"</a>
<li><strong>Previous message:</strong> <a href="17703.php">Ralph Castain: "[OMPI devel] 1.8.7 and 1.10 problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17705.php">Gilles Gouaillardet: "Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12"</a>
<li><strong>Reply:</strong> <a href="17705.php">Gilles Gouaillardet: "Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12"</a>
<li><strong>Reply:</strong> <a href="17708.php">Gilles Gouaillardet: "Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12"</a>
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
