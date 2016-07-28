<?
$subject_val = "[OMPI users] problem building openmpi-1.9a1r27751 on Solaris 10";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  7 03:01:16 2013" -->
<!-- isoreceived="20130107080116" -->
<!-- sent="Mon, 7 Jan 2013 08:54:26 +0100 (CET)" -->
<!-- isosent="20130107075426" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] problem building openmpi-1.9a1r27751 on Solaris 10" -->
<!-- id="201301070754.r077sQZ0002385_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] problem building openmpi-1.9a1r27751 on Solaris 10<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-07 02:54:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21082.php">Yoshiki SATO: "[OMPI users] Backward Compatibility of MPI Java Binding"</a>
<li><strong>Previous message:</strong> <a href="21080.php">Ralph Castain: "Re: [OMPI users] [SPAM:## 71%] checkpoint --term core dump"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21088.php">Matthias Jurenz: "Re: [OMPI users] problem building openmpi-1.9a1r27751 on Solaris 10"</a>
<li><strong>Maybe reply:</strong> <a href="21088.php">Matthias Jurenz: "Re: [OMPI users] problem building openmpi-1.9a1r27751 on Solaris 10"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>today I tried to build openmpi-1.9a1r27751 on &quot;Solaris 10 Sparc&quot;
<br>
and &quot;Solaris 10 x86_64&quot; with &quot;Sun C 5.12&quot; and got the following
<br>
errors on both platforms.
<br>
<p>...
<br>
Making all in vtlib
<br>
make[5]: Entering directory `.../ompi/contrib/vt/vt/vtlib'
<br>
&nbsp;&nbsp;CC       vt_comp_phat.lo
<br>
&nbsp;&nbsp;CC       vt_execwrap.lo
<br>
&quot;.../openmpi-1.9a1r27751/ompi/contrib/vt/vt/vtlib/vt_execwrap.c&quot;,
<br>
&nbsp;&nbsp;line 187: warning: implicit function declaration:
<br>
&nbsp;&nbsp;VTTHRD_MALLOC_TRACING_ENABLED
<br>
&quot;.../openmpi-1.9a1r27751/ompi/contrib/vt/vt/vtlib/vt_execwrap.c&quot;,
<br>
&nbsp;&nbsp;line 358: undefined symbol: environ
<br>
&quot;.../openmpi-1.9a1r27751/ompi/contrib/vt/vt/vtlib/vt_execwrap.c&quot;,
<br>
&nbsp;&nbsp;line 358: warning: improper pointer/integer combination: op &quot;=&quot;
<br>
&quot;.../openmpi-1.9a1r27751/ompi/contrib/vt/vt/vtlib/vt_execwrap.c&quot;,
<br>
&nbsp;&nbsp;line 410: undefined symbol: environ
<br>
&quot;.../openmpi-1.9a1r27751/ompi/contrib/vt/vt/vtlib/vt_execwrap.c&quot;,
<br>
&nbsp;&nbsp;line 410: warning: improper pointer/integer combination: op &quot;=&quot;
<br>
cc: acomp failed for
<br>
&nbsp;&nbsp;.../openmpi-1.9a1r27751/ompi/contrib/vt/vt/vtlib/vt_execwrap.c
<br>
make[5]: *** [vt_execwrap.lo] Error 1
<br>
...
<br>
<p><p>I would be grateful if you could solve the problem. Thank you
<br>
very much for your help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21082.php">Yoshiki SATO: "[OMPI users] Backward Compatibility of MPI Java Binding"</a>
<li><strong>Previous message:</strong> <a href="21080.php">Ralph Castain: "Re: [OMPI users] [SPAM:## 71%] checkpoint --term core dump"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21088.php">Matthias Jurenz: "Re: [OMPI users] problem building openmpi-1.9a1r27751 on Solaris 10"</a>
<li><strong>Maybe reply:</strong> <a href="21088.php">Matthias Jurenz: "Re: [OMPI users] problem building openmpi-1.9a1r27751 on Solaris 10"</a>
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
