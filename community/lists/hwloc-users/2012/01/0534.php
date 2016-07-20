<?
$subject_val = "[hwloc-users] build issue with CFLAGS='-mcmodel=medium'";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 30 12:58:36 2012" -->
<!-- isoreceived="20120130175836" -->
<!-- sent="Mon, 30 Jan 2012 12:58:27 -0500" -->
<!-- isosent="20120130175827" -->
<!-- name="Devendar Bureddy" -->
<!-- email="bureddy_at_[hidden]" -->
<!-- subject="[hwloc-users] build issue with CFLAGS='-mcmodel=medium'" -->
<!-- id="CABB+w0SqSbvy80T4p7WpRxrxVqx1EV2uptR5sQEywEJhk7JfVA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [hwloc-users] build issue with CFLAGS='-mcmodel=medium'<br>
<strong>From:</strong> Devendar Bureddy (<em>bureddy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-30 12:58:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0535.php">Samuel Thibault: "Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'"</a>
<li><strong>Previous message:</strong> <a href="0533.php">Albert Solernou: "Re: [hwloc-users] [EXTERNAL] creation and destruction of bound threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0535.php">Samuel Thibault: "Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'"</a>
<li><strong>Maybe reply:</strong> <a href="0535.php">Samuel Thibault: "Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'"</a>
<li><strong>Maybe reply:</strong> <a href="0541.php">Samuel Thibault: "Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to configure hwloc-1.4 with CFLAGS='-mcmodel=medium' and
<br>
seeing following build error.
<br>
<p>configure:
<br>
--------------
<br>
./configure --prefix=/home/bureddy/hwloc-1.4/install
<br>
CFLAGS='-mcmodel=medium'   LDFLAGS='-mcmodel=medium'
<br>
<p>$make
<br>
....
<br>
&nbsp;&nbsp;CC     topology-linux.lo
<br>
&nbsp;&nbsp;CC     topology-x86.lo
<br>
/home/bureddy/hwloc-1.4/include/private/cpuid.h: In function 'hwloc_cpuid':
<br>
/home/bureddy/hwloc-1.4/include/private/cpuid.h:54: error: can't find
<br>
a register in class 'BREG' while reloading 'asm'
<br>
make[1]: *** [topology-x86.lo] Error 1
<br>
make[1]: Leaving directory `/home/bureddy/hwloc-1.4/src'
<br>
<p><p>It looks like similar issue with CFLAGS='-m32' has discussed earlier :
<br>
<a href="https://svn.open-mpi.org/trac/hwloc/ticket/35">https://svn.open-mpi.org/trac/hwloc/ticket/35</a>
<br>
<p><p>&nbsp;- Devendar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0535.php">Samuel Thibault: "Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'"</a>
<li><strong>Previous message:</strong> <a href="0533.php">Albert Solernou: "Re: [hwloc-users] [EXTERNAL] creation and destruction of bound threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0535.php">Samuel Thibault: "Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'"</a>
<li><strong>Maybe reply:</strong> <a href="0535.php">Samuel Thibault: "Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'"</a>
<li><strong>Maybe reply:</strong> <a href="0541.php">Samuel Thibault: "Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'"</a>
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
