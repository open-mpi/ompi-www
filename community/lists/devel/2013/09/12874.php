<?
$subject_val = "[OMPI devel] (no subject)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  6 06:22:23 2013" -->
<!-- isoreceived="20130906102223" -->
<!-- sent="Fri, 6 Sep 2013 13:22:22 +0300" -->
<!-- isosent="20130906102222" -->
<!-- name="Alex Margolin" -->
<!-- email="alex.margolin_at_[hidden]" -->
<!-- subject="[OMPI devel] (no subject)" -->
<!-- id="CAAoBEvmduChiw_uU+3CT0btas9e3cvYXL4Qy1adiHZhPnaOvtw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] (no subject)<br>
<strong>From:</strong> Alex Margolin (<em>alex.margolin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-06 06:22:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12875.php">Alex Margolin: "Re: [OMPI devel] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="12873.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12875.php">Alex Margolin: "Re: [OMPI devel] (no subject)"</a>
<li><strong>Reply:</strong> <a href="12875.php">Alex Margolin: "Re: [OMPI devel] (no subject)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm building ompi r29104 with the following command:
<br>
<p>make distclean &amp;&amp; ./autogen.sh &amp;&amp; ./configure
<br>
--prefix=/cs/mosna/alexam02/ompi CFLAGS=-m64 CXXFLAGS=-m64 --without-hwloc
<br>
--disable-mpi-threads --disable-progress-threads
<br>
--enable-mca-no-build=maffinity,paffinity
<br>
--enable-contrib-no-build=libnbc,vt &amp;&amp; make &amp;&amp; make install
<br>
<p>When I build and run any MPI app, I'm getting the following error (and the
<br>
app fails):
<br>
<p>mpirun: Symbol `orte_process_info' has different size in shared object,
<br>
consider re-linking
<br>
mpirun: Symbol `orte_plm' has different size in shared object, consider
<br>
re-linking
<br>
mpirun: symbol lookup error: mpirun: undefined symbol:
<br>
orte_trigger_event_t_class
<br>
<p>Anybody ever stumbled on this or something similar in the past?
<br>
<p>Thanks,
<br>
Alex
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12874/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12875.php">Alex Margolin: "Re: [OMPI devel] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="12873.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12875.php">Alex Margolin: "Re: [OMPI devel] (no subject)"</a>
<li><strong>Reply:</strong> <a href="12875.php">Alex Margolin: "Re: [OMPI devel] (no subject)"</a>
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
