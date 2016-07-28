<?
$subject_val = "Re: [OMPI users] error on missing libtorque.so.2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  4 17:14:31 2016" -->
<!-- isoreceived="20160204221431" -->
<!-- sent="Fri, 5 Feb 2016 07:14:30 +0900" -->
<!-- isosent="20160204221430" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error on missing libtorque.so.2" -->
<!-- id="CAAkFZ5tPAnRSjmqCjwy90=3mTqTRS0Hf19Ga--J4j+_-dcCT6g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAPpcpnFvE308pdsVqF1DxyuB5LMAzUECO_qcH9Y6oYxMxMkhw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] error on missing libtorque.so.2<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-04 17:14:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28453.php">Brian Taylor: "Re: [OMPI users] Fortran vs C reductions"</a>
<li><strong>Previous message:</strong> <a href="28451.php">Xiangdong: "[OMPI users] error on missing libtorque.so.2"</a>
<li><strong>In reply to:</strong> <a href="28451.php">Xiangdong: "[OMPI users] error on missing libtorque.so.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I guess torque libs and headers are installed on the node you used to
<br>
compile openmpi,
<br>
or mca_plm_tm.so is an old file from a previous install.
<br>
<p>the easiest way to fix that is to remove your install dir, configure
<br>
--without-tm ... and make install
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Friday, February 5, 2016, Xiangdong &lt;epscodes_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a question on installing open-mpi 1.10.2. I followed the standard
</span><br>
<span class="quotelev1">&gt; ./configure make make install to install the openmpi. However, when I run
</span><br>
<span class="quotelev1">&gt; the mpirun, it complains &quot;unable to open lib/openmpi/mca_plm_tm:
</span><br>
<span class="quotelev1">&gt; libtorque.so.2 cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; (ignored)&quot;. There is no pbs installed on my system. Why does it need pbs?
</span><br>
<span class="quotelev1">&gt; How can I fix this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The configure Iine is: ./configure --prefix=$INSTALL_DIR
</span><br>
<span class="quotelev1">&gt; --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Xiangdong
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28452/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28453.php">Brian Taylor: "Re: [OMPI users] Fortran vs C reductions"</a>
<li><strong>Previous message:</strong> <a href="28451.php">Xiangdong: "[OMPI users] error on missing libtorque.so.2"</a>
<li><strong>In reply to:</strong> <a href="28451.php">Xiangdong: "[OMPI users] error on missing libtorque.so.2"</a>
<!-- nextthread="start" -->
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
