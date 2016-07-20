<?
$subject_val = "Re: [hwloc-users] Trying to get last cpu location";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  5 12:25:54 2013" -->
<!-- isoreceived="20130305172554" -->
<!-- sent="Tue, 05 Mar 2013 18:25:47 +0100" -->
<!-- isosent="20130305172547" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Trying to get last cpu location" -->
<!-- id="51362A9B.5020506_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="513624EB.1020908_at_di.unito.it" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Trying to get last cpu location<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-05 12:25:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0884.php">Simon Hammond: "[hwloc-users] Many queries creating slow performance"</a>
<li><strong>Previous message:</strong> <a href="0882.php">Fabio Tordini: "[hwloc-users] Trying to get last cpu location"</a>
<li><strong>In reply to:</strong> <a href="0882.php">Fabio Tordini: "[hwloc-users] Trying to get last cpu location"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0887.php">Fabio Tordini: "Re: [hwloc-users] Trying to get last cpu location"</a>
<li><strong>Reply:</strong> <a href="0887.php">Fabio Tordini: "Re: [hwloc-users] Trying to get last cpu location"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Fabio,
<br>
Which hwloc release are you using ? get_last_cpu_location() was only
<br>
added in hwloc v1.2. It has always been available since then, even on
<br>
when not supported (it will return -1 with errno=ENOSYS in this case).
<br>
If this doesn't help, can you send your test program?
<br>
Brice
<br>
<p><p><p>Le 05/03/2013 18:01, Fabio Tordini a &#233;crit :
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm experiencing a problem using the function
</span><br>
<span class="quotelev1">&gt; 'hwloc_get_last_cpu_location(...)': when compiling i first get a
</span><br>
<span class="quotelev1">&gt; warning about an implicit declaration of the function, and then it
</span><br>
<span class="quotelev1">&gt; gives an &quot;undefined reference&quot; error.
</span><br>
<span class="quotelev1">&gt; Everything else works just fine and I was thinking whether I have to
</span><br>
<span class="quotelev1">&gt; link some other libraries or perform some other actions in order to be
</span><br>
<span class="quotelev1">&gt; able to use the function.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The tests I'm executing are run on a x86_64 GNU/Linux machine, and as
</span><br>
<span class="quotelev1">&gt; far as I know that function should be totally supported on Linux systems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt; Fabio
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0884.php">Simon Hammond: "[hwloc-users] Many queries creating slow performance"</a>
<li><strong>Previous message:</strong> <a href="0882.php">Fabio Tordini: "[hwloc-users] Trying to get last cpu location"</a>
<li><strong>In reply to:</strong> <a href="0882.php">Fabio Tordini: "[hwloc-users] Trying to get last cpu location"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0887.php">Fabio Tordini: "Re: [hwloc-users] Trying to get last cpu location"</a>
<li><strong>Reply:</strong> <a href="0887.php">Fabio Tordini: "Re: [hwloc-users] Trying to get last cpu location"</a>
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
