<?
$subject_val = "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 17 13:22:35 2013" -->
<!-- isoreceived="20130117182235" -->
<!-- sent="Thu, 17 Jan 2013 19:22:29 +0100" -->
<!-- isosent="20130117182229" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler" -->
<!-- id="50F84165.90505_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CADKQjjcUsmefsw5GKyLcxba5RNwoFNKPHS+2dE4GTzoJs46s1A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-17 13:22:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0815.php">Jeff Hammond: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
<li><strong>Previous message:</strong> <a href="0813.php">Erik Schnetter: "[hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
<li><strong>In reply to:</strong> <a href="0813.php">Erik Schnetter: "[hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0816.php">Erik Schnetter: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
<li><strong>Reply:</strong> <a href="0816.php">Erik Schnetter: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
<li><strong>Reply:</strong> <a href="0817.php">Erik Schnetter: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did this work in the past? I don't think we changed this code recently.
<br>
Can you run &quot;make check&quot; to make sure this change doesn't break anything?
<br>
Thanks
<br>
Brice
<br>
<p><p>Le 17/01/2013 19:19, Erik Schnetter a &#233;crit :
<br>
<span class="quotelev1">&gt; hwloc-1.6.1rc2 fails to build with the Cray compiler
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cray C : Version 8.1.2  Thu Jan 17, 2013  12:18:54
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error message is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   CC       bitmap.lo
</span><br>
<span class="quotelev1">&gt; CC-147 craycc: ERROR 
</span><br>
<span class="quotelev1">&gt;   Declaration is incompatible with &quot;int ffsl(long)&quot; (declared at line
</span><br>
<span class="quotelev1">&gt; 526 of
</span><br>
<span class="quotelev1">&gt;           &quot;/opt/cray/xe-sysroot/4.1.20/usr/include/string.h&quot;).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (Yes, there is no line number with the error message.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This seems to be caused by the fact that the Cray compiler
</span><br>
<span class="quotelev1">&gt; sets __GNUC__, but is not quite compatible. A work-around is to change
</span><br>
<span class="quotelev1">&gt; line 56 of include/private/misc.h from
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #elif defined(__GNUC__)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #elif defined(__GNUC__) &amp;&amp; !defined(_CRAYC)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -erik
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Erik Schnetter &lt;schnetter_at_[hidden] &lt;mailto:schnetter_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</span><br>
<span class="quotelev1">&gt;
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0814/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0815.php">Jeff Hammond: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
<li><strong>Previous message:</strong> <a href="0813.php">Erik Schnetter: "[hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
<li><strong>In reply to:</strong> <a href="0813.php">Erik Schnetter: "[hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0816.php">Erik Schnetter: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
<li><strong>Reply:</strong> <a href="0816.php">Erik Schnetter: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
<li><strong>Reply:</strong> <a href="0817.php">Erik Schnetter: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
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
