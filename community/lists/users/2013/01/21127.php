<?
$subject_val = "Re: [OMPI users] Error compiling openmpi-1.6.4a1r27766 on Solaris 10";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 16 03:30:13 2013" -->
<!-- isoreceived="20130116083013" -->
<!-- sent="Wed, 16 Jan 2013 09:30:11 +0100" -->
<!-- isosent="20130116083011" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error compiling openmpi-1.6.4a1r27766 on Solaris 10" -->
<!-- id="1863605.ja0BrVoPfP_at_rico" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Error compiling openmpi-1.6.4a1r27766 on Solaris 10" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error compiling openmpi-1.6.4a1r27766 on Solaris 10<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-16 03:30:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21128.php">borja mf: "[OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor"</a>
<li><strong>Previous message:</strong> <a href="21126.php">Gus Correa: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<li><strong>Maybe in reply to:</strong> <a href="21101.php">Siegmar Gross: "[OMPI users] Error compiling openmpi-1.6.4a1r27766 on Solaris 10"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Siegmar,
<br>
this problem is already fixed in the OMPI trunk (r27770), but currently not 
<br>
moved to the v1.6 branch.
<br>
To make it working for the v1.6 branch, just copy the following files from the 
<br>
trunk to your v1.6 checkout and re-run autogen.sh:
<br>
ompi/contrib/vt/vt/config/m4/acinclude.execwrap.m4
<br>
ompi/contrib/vt/vt/vtlib/vt_execwrap.c
<br>
<p>Regards,
<br>
Matthias Jurenz
<br>
<p><span class="quotelev1">&gt; Hi 
</span><br>
<p><span class="quotelev1">&gt; I tried to build openmpi-1.6.4a1r27766 on Solaris 10 Sparc and 
</span><br>
x86_64 with Sun C 5.12 and gcc-4.7.1 and got the following error 
<br>
for all combinations. 
<br>
<p><span class="quotelev1">&gt; ... 
</span><br>
&nbsp;&nbsp;CC vt_execwrap.lo 
<br>
&quot;../../../../../../openmpi-1.6.4a1r27766/ompi/contrib/vt/vt/vtlib/vt_execwrap.c&quot;, 
<br>
&nbsp;&nbsp;line 187: warning: implicit function declaration: 
<br>
VTTHRD_MALLOC_TRACING_ENABLED 
<br>
&quot;../../../../../../openmpi-1.6.4a1r27766/ompi/contrib/vt/vt/vtlib/vt_execwrap.c&quot;, 
<br>
&nbsp;&nbsp;line 358: undefined symbol: environ 
<br>
&quot;../../../../../../openmpi-1.6.4a1r27766/ompi/contrib/vt/vt/vtlib/vt_execwrap.c&quot;, 
<br>
&nbsp;&nbsp;line 358: warning: improper pointer/integer combination: op &quot;=&quot; 
<br>
&quot;../../../../../../openmpi-1.6.4a1r27766/ompi/contrib/vt/vt/vtlib/vt_execwrap.c&quot;, 
<br>
&nbsp;&nbsp;line 410: undefined symbol: environ 
<br>
&quot;../../../../../../openmpi-1.6.4a1r27766/ompi/contrib/vt/vt/vtlib/vt_execwrap.c&quot;, 
<br>
&nbsp;&nbsp;line 410: warning: improper pointer/integer combination: op &quot;=&quot; 
<br>
cc: acomp failed for 
<br>
.../openmpi-1.6.4a1r27766/ompi/contrib/vt/vt/vtlib/vt_execwrap.c 
<br>
make[5]: *** [vt_execwrap.lo] Error 1 
<br>
make[5]: Leaving directory `.../ompi/contrib/vt/vt/vtlib' 
<br>
make[4]: *** [all-recursive] Error 1 
<br>
... 
<br>
<p><span class="quotelev1">&gt; I would be grateful if you could solve the problem. Thank you 
</span><br>
very much for your help in advance. 
<br>
<p><span class="quotelev1">&gt; Kind regards 
</span><br>
<p><span class="quotelev1">&gt; Siegmar 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21128.php">borja mf: "[OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor"</a>
<li><strong>Previous message:</strong> <a href="21126.php">Gus Correa: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<li><strong>Maybe in reply to:</strong> <a href="21101.php">Siegmar Gross: "[OMPI users] Error compiling openmpi-1.6.4a1r27766 on Solaris 10"</a>
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
