<?
$subject_val = "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 17 16:30:18 2013" -->
<!-- isoreceived="20130117213018" -->
<!-- sent="Thu, 17 Jan 2013 22:30:13 +0100" -->
<!-- isosent="20130117213013" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler." -->
<!-- id="50F86D65.6020003_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CADKQjjfXhtxQ6ZUmgDApYdMtx9ix9EjbRoseDN4Ui6ae_4u5Ng_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler.<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-17 16:30:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0827.php">Brice Goglin: "[hwloc-users] hwloc tutorial material"</a>
<li><strong>Previous message:</strong> <a href="0825.php">Erik Schnetter: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
<li><strong>In reply to:</strong> <a href="0823.php">Erik Schnetter: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 17/01/2013 21:00, Erik Schnetter a &#233;crit :
<br>
<span class="quotelev1">&gt; Given that the Cray compiler aborts on this code with an incorrect
</span><br>
<span class="quotelev1">&gt; error message, I would actually call it a compiler bug. The compiler
</span><br>
<span class="quotelev1">&gt; may possibly want to complain that it doesn't know __builtin_ffsl, but
</span><br>
<span class="quotelev1">&gt; its error message (Declaration is incompatible with &quot;int ffsl(long)&quot;)
</span><br>
<span class="quotelev1">&gt; indicates that there is some other problem. Note that hwloc never
</span><br>
<span class="quotelev1">&gt; declares ffsl; it only calls __builtin_ffsl.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, I have a work-around, and leave it up to you to report this
</span><br>
<span class="quotelev1">&gt; or not.
</span><br>
<p>Ok thanks for the debugging, Erik and Jeff.
<br>
I am going to release 1.6.1 without any such change. If we ever get
<br>
similar reports in the future, we'll reconsider and may add a
<br>
configure-workaround.
<br>
<p>Brice
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0826/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0827.php">Brice Goglin: "[hwloc-users] hwloc tutorial material"</a>
<li><strong>Previous message:</strong> <a href="0825.php">Erik Schnetter: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
<li><strong>In reply to:</strong> <a href="0823.php">Erik Schnetter: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
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
