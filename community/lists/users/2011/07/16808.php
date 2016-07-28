<?
$subject_val = "Re: [OMPI users] Windows: msv*.dll files presence in Release build";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  4 07:58:04 2011" -->
<!-- isoreceived="20110704115804" -->
<!-- sent="Mon, 04 Jul 2011 13:57:59 +0200" -->
<!-- isosent="20110704115759" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Windows: msv*.dll files presence in Release build" -->
<!-- id="4E11AAC7.7060102_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAfbs8v_cmphbL53Qo9YpJSWfy95AsTH27vjSQtcadrym3_oQQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Windows: msv*.dll files presence in Release build<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-04 07:57:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16809.php">hi: "Re: [OMPI users] Windows: msv*.dll files presence in Release build"</a>
<li><strong>Previous message:</strong> <a href="16807.php">hi: "[OMPI users] Windows: msv*.dll files presence in Release build"</a>
<li><strong>In reply to:</strong> <a href="16807.php">hi: "[OMPI users] Windows: msv*.dll files presence in Release build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16809.php">hi: "Re: [OMPI users] Windows: msv*.dll files presence in Release build"</a>
<li><strong>Reply:</strong> <a href="16809.php">hi: "Re: [OMPI users] Windows: msv*.dll files presence in Release build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><span class="quotelev1">&gt; In this regard I have following two questions...
</span><br>
<span class="quotelev1">&gt; 1) For Release build using VS2008, why it generates *msv*.dll* files?
</span><br>
They are dependent libraries for OMPI libraries. It's the default 
<br>
behavior using CMake.
<br>
<p><span class="quotelev1">&gt; 2) For Release build using VS2008, why it generates **d.dll* files 
</span><br>
<span class="quotelev1">&gt; (i.e. debug libraries)?
</span><br>
The postfix d means it's a debug version library. You can build release 
<br>
libraries which do not have this postfix.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p><pre>
-- 
---------------------------------------------------------------
Shiqing Fan
High Performance Computing Center Stuttgart (HLRS)
Tel: ++49(0)711-685-87234      Nobelstrasse 19
Fax: ++49(0)711-685-65832      70569 Stuttgart
<a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
email: fan_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16808/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16809.php">hi: "Re: [OMPI users] Windows: msv*.dll files presence in Release build"</a>
<li><strong>Previous message:</strong> <a href="16807.php">hi: "[OMPI users] Windows: msv*.dll files presence in Release build"</a>
<li><strong>In reply to:</strong> <a href="16807.php">hi: "[OMPI users] Windows: msv*.dll files presence in Release build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16809.php">hi: "Re: [OMPI users] Windows: msv*.dll files presence in Release build"</a>
<li><strong>Reply:</strong> <a href="16809.php">hi: "Re: [OMPI users] Windows: msv*.dll files presence in Release build"</a>
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
