<?
$subject_val = "Re: [hwloc-users] creation and destruction of bound threads";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 30 06:42:26 2012" -->
<!-- isoreceived="20120130114226" -->
<!-- sent="Mon, 30 Jan 2012 12:42:01 +0100" -->
<!-- isosent="20120130114201" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] creation and destruction of bound threads" -->
<!-- id="20120130114201.GA26066_at_type.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="999362520.587588.1327923451234.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] creation and destruction of bound threads<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-30 06:42:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0532.php">Wheeler, Kyle Bruce: "Re: [hwloc-users] [EXTERNAL] creation and destruction of bound threads"</a>
<li><strong>Previous message:</strong> <a href="0530.php">Albert Solernou: "[hwloc-users] creation and destruction of bound threads"</a>
<li><strong>Maybe in reply to:</strong> <a href="0530.php">Albert Solernou: "[hwloc-users] creation and destruction of bound threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0532.php">Wheeler, Kyle Bruce: "Re: [hwloc-users] [EXTERNAL] creation and destruction of bound threads"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Albert Solernou, le Mon 30 Jan 2012 12:37:31 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; I am working on a threaded code, and want to bind threads to cores. However,
</span><br>
<span class="quotelev1">&gt; the process creates and destroys the threads, so here is the question:
</span><br>
<span class="quotelev1">&gt;   What happens if I enter on a threaded part of the code, bind &quot;thread X&quot; to
</span><br>
<span class="quotelev1">&gt; a core, return to a serial part and then thread again? Can I expect to find
</span><br>
<span class="quotelev1">&gt; thread X bound to the core I bound it previously?
</span><br>
<p>It depends on what actually creates the threads. For instance, most
<br>
implementations of OpenMP reuse the same kernel threads, without
<br>
actually destroying them. But nothing in the standard asserts that, so
<br>
you'd probably prefer to re-bind just to be sure.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0532.php">Wheeler, Kyle Bruce: "Re: [hwloc-users] [EXTERNAL] creation and destruction of bound threads"</a>
<li><strong>Previous message:</strong> <a href="0530.php">Albert Solernou: "[hwloc-users] creation and destruction of bound threads"</a>
<li><strong>Maybe in reply to:</strong> <a href="0530.php">Albert Solernou: "[hwloc-users] creation and destruction of bound threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0532.php">Wheeler, Kyle Bruce: "Re: [hwloc-users] [EXTERNAL] creation and destruction of bound threads"</a>
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
