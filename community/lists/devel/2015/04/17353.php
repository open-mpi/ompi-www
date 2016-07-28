<?
$subject_val = "[OMPI devel] 1.8.5rc3 preliminary testing report";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 23 22:29:31 2015" -->
<!-- isoreceived="20150424022931" -->
<!-- sent="Thu, 23 Apr 2015 19:29:10 -0700" -->
<!-- isosent="20150424022910" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.8.5rc3 preliminary testing report" -->
<!-- id="CAAvDA17CPJ4-zVE04p6KcyKWZmeZo63_8vz=zH+YeEH0XhA0Cg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.8.5rc3 preliminary testing report<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-23 22:29:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17354.php">Paul Hargrove: "[OMPI devel] Unsolicited code review of new distscript.sh"</a>
<li><strong>Previous message:</strong> <a href="17352.php">Paul Hargrove: "Re: [OMPI devel] &quot;maybe&quot; issue in 1.8.5rc[23]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry my ARMv6, ARMv8 and PowerPC64LE systems were dedicated to other
<br>
purposes today.
<br>
So, I was only able to test 1.8.5rc3 against 71 distinct configurations.
<br>
&nbsp;;-)
<br>
<p>There was 1 known-failure (xlc-11.1 LP64) that scared me by changing
<br>
failure modes between rc1 and rc2.
<br>
Several slow tests (Linux on MIPS and ARM, with multiple ABIs/ISAs, all
<br>
emulated w/ QEMU) are still running and will likely be ready by Fri noon
<br>
PDT.
<br>
Besides those I have only clean PASS results.
<br>
<p>In the unlikely event the ARM or MIPS testers fail, I will of course report
<br>
it.
<br>
However, I doubt anything has regressed since they passed rc2.
<br>
<p>Current summary:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3  Unavailable
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1  Known bad[*] configuration
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6  Still pending (QEMU)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;64  PASS
<br>
<p>-Paul
<br>
<p>[*] Albert Einstein is said to have defined Insanity as &quot;doing the same
<br>
thing over and over again and expecting different results&quot;
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17353/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17354.php">Paul Hargrove: "[OMPI devel] Unsolicited code review of new distscript.sh"</a>
<li><strong>Previous message:</strong> <a href="17352.php">Paul Hargrove: "Re: [OMPI devel] &quot;maybe&quot; issue in 1.8.5rc[23]"</a>
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
