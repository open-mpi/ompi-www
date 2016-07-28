<?
$subject_val = "[OMPI devel] Missing Symbol";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  5 11:55:53 2010" -->
<!-- isoreceived="20100305165553" -->
<!-- sent="Fri, 5 Mar 2010 17:55:45 +0100" -->
<!-- isosent="20100305165545" -->
<!-- name="Leonardo Fialho" -->
<!-- email="leonardofialho_at_[hidden]" -->
<!-- subject="[OMPI devel] Missing Symbol" -->
<!-- id="4BE73F60-22EC-464E-8865-A539FA8BE193_at_gmail.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Missing Symbol<br>
<strong>From:</strong> Leonardo Fialho (<em>leonardofialho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-05 11:55:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7533.php">Terry Dontje: "Re: [OMPI devel] Missing Symbol"</a>
<li><strong>Previous message:</strong> <a href="7531.php">Terry Dontje: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7533.php">Terry Dontje: "Re: [OMPI devel] Missing Symbol"</a>
<li><strong>Reply:</strong> <a href="7533.php">Terry Dontje: "Re: [OMPI devel] Missing Symbol"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I know that libtool does not help us to find the source of this error, but, what can generate the following error?
<br>
<p>[aoclsb-clus.uab.es:11724] mca: base: component_find: unable to open /home/lfialho/lib/openmpi/mca_vprotocol_receiver: perhaps a missing symbol, or compiled for a different version of Open MPI? (ignored)
<br>
<p>1) yes, the file exists
<br>
2) yes, it has been compiled among all other components
<br>
3) yes, it is the same Open MPI version
<br>
4) this component is a copy of the pessimist component implemented by Aurelien
<br>
5) Aurelien's component presents the same error
<br>
<p>The question is: what mistake should generate an error during module loading?
<br>
<p>Thanks in advance,
<br>
Leonardo
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7533.php">Terry Dontje: "Re: [OMPI devel] Missing Symbol"</a>
<li><strong>Previous message:</strong> <a href="7531.php">Terry Dontje: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7533.php">Terry Dontje: "Re: [OMPI devel] Missing Symbol"</a>
<li><strong>Reply:</strong> <a href="7533.php">Terry Dontje: "Re: [OMPI devel] Missing Symbol"</a>
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
