<?
$subject_val = "[hwloc-users] creation and destruction of bound threads";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 30 06:36:50 2012" -->
<!-- isoreceived="20120130113650" -->
<!-- sent="Mon, 30 Jan 2012 11:36:44 +0000" -->
<!-- isosent="20120130113644" -->
<!-- name="Albert Solernou" -->
<!-- email="albert.solernou_at_[hidden]" -->
<!-- subject="[hwloc-users] creation and destruction of bound threads" -->
<!-- id="4F2680CC.5070107_at_oerc.ox.ac.uk" -->
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
<strong>Subject:</strong> [hwloc-users] creation and destruction of bound threads<br>
<strong>From:</strong> Albert Solernou (<em>albert.solernou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-30 06:36:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0531.php">Samuel Thibault: "Re: [hwloc-users] creation and destruction of bound threads"</a>
<li><strong>Previous message:</strong> <a href="0529.php">Brice Goglin: "[hwloc-users] hwloc and HTX device ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0531.php">Samuel Thibault: "Re: [hwloc-users] creation and destruction of bound threads"</a>
<li><strong>Maybe reply:</strong> <a href="0531.php">Samuel Thibault: "Re: [hwloc-users] creation and destruction of bound threads"</a>
<li><strong>Reply:</strong> <a href="0532.php">Wheeler, Kyle Bruce: "Re: [hwloc-users] [EXTERNAL] creation and destruction of bound threads"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I am working on a threaded code, and want to bind threads to cores. 
<br>
However, the process creates and destroys the threads, so here is the 
<br>
question:
<br>
&nbsp;&nbsp;&nbsp;What happens if I enter on a threaded part of the code, bind &quot;thread 
<br>
X&quot; to a core, return to a serial part and then thread again? Can I 
<br>
expect to find thread X bound to the core I bound it previously?
<br>
<p>I guessed that the answer is &quot;no&quot;, but I couldn't prove it using a 
<br>
simple program.
<br>
<p>Thank you,
<br>
Albert
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0531.php">Samuel Thibault: "Re: [hwloc-users] creation and destruction of bound threads"</a>
<li><strong>Previous message:</strong> <a href="0529.php">Brice Goglin: "[hwloc-users] hwloc and HTX device ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0531.php">Samuel Thibault: "Re: [hwloc-users] creation and destruction of bound threads"</a>
<li><strong>Maybe reply:</strong> <a href="0531.php">Samuel Thibault: "Re: [hwloc-users] creation and destruction of bound threads"</a>
<li><strong>Reply:</strong> <a href="0532.php">Wheeler, Kyle Bruce: "Re: [hwloc-users] [EXTERNAL] creation and destruction of bound threads"</a>
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
