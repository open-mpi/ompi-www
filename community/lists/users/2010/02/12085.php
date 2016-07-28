<?
$subject_val = "[OMPI users] Bad Infiniband latency with subounce";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 15 20:51:35 2010" -->
<!-- isoreceived="20100216015135" -->
<!-- sent="Mon, 15 Feb 2010 19:51:31 -0600" -->
<!-- isosent="20100216015131" -->
<!-- name="Repsher, Stephen J" -->
<!-- email="stephen.j.repsher_at_[hidden]" -->
<!-- subject="[OMPI users] Bad Infiniband latency with subounce" -->
<!-- id="293EA46E-5790-4C48-9EA2-B60611C85F54_at_mimectl" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Bad Infiniband latency with subounce<br>
<strong>From:</strong> Repsher, Stephen J (<em>stephen.j.repsher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-15 20:51:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12086.php">Ralph Castain: "Re: [OMPI users] Bad Infiniband latency with subounce"</a>
<li><strong>Previous message:</strong> <a href="12084.php">Ralph Castain: "Re: [OMPI users] Seg fault with PBS Pro 10.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12086.php">Ralph Castain: "Re: [OMPI users] Bad Infiniband latency with subounce"</a>
<li><strong>Reply:</strong> <a href="12086.php">Ralph Castain: "Re: [OMPI users] Bad Infiniband latency with subounce"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello again,
<br>
<p>Hopefully this is an easier question....
<br>
<p>My cluster uses Infiniband interconnects (Mellanox Infinihost III and some ConnectX).  I'm seeing terrible and sporadic latency (order ~1000 microseconds)  as measured by the subounce code (<a href="http://sourceforge.net/projects/subounce/">http://sourceforge.net/projects/subounce/</a>), but the bandwidth is as expected.  I'm used to seeing only 1-2 microseconds with MVAPICH and wondering why OpenMPI either isn't performing as well or doesn't play well with how bounce is measuring latency (by timing 0 byte messages).  I've tried to play with a few parameters with no success.  Here's how the build is configured:
<br>
<p>myflags=&quot;-O3 -xSSE2&quot;
<br>
./configure --prefix=/part0/apps/MPI/intel/openmpi-1.4.1 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--disable-dlopen --with-wrapper-ldflags=&quot;-shared-intel&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-orterun-prefix-by-default \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-openib --enable-openib-connectx-xrc --enable-openib-rdmacm \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CC=icc CXX=icpc F77=ifort FC=ifort \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CFLAGS=&quot;$myflags&quot; FFLAGS=&quot;$myflags&quot; CXXFLAGS=&quot;$myflags&quot; FCFLAGS=&quot;$myflags&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJC=gcc OBJCFLAGS=&quot;-O3&quot;
<br>
Any ideas?
<br>
<p>Thanks,
<br>
Steve
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12086.php">Ralph Castain: "Re: [OMPI users] Bad Infiniband latency with subounce"</a>
<li><strong>Previous message:</strong> <a href="12084.php">Ralph Castain: "Re: [OMPI users] Seg fault with PBS Pro 10.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12086.php">Ralph Castain: "Re: [OMPI users] Bad Infiniband latency with subounce"</a>
<li><strong>Reply:</strong> <a href="12086.php">Ralph Castain: "Re: [OMPI users] Bad Infiniband latency with subounce"</a>
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
