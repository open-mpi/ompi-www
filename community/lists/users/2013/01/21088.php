<?
$subject_val = "Re: [OMPI users] problem building openmpi-1.9a1r27751 on Solaris 10";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  8 09:46:45 2013" -->
<!-- isoreceived="20130108144645" -->
<!-- sent="Tue, 08 Jan 2013 15:46:39 +0100" -->
<!-- isosent="20130108144639" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem building openmpi-1.9a1r27751 on Solaris 10" -->
<!-- id="2967201.GtMiGyFH9R_at_rico" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] problem building openmpi-1.9a1r27751 on Solaris 10" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem building openmpi-1.9a1r27751 on Solaris 10<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-08 09:46:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21089.php">Siegmar Gross: "[OMPI users] some comments on derived datatypes in mpiJava"</a>
<li><strong>Previous message:</strong> <a href="21087.php">Yoshiki SATO: "Re: [OMPI users] Backward Compatibility of MPI Java Binding"</a>
<li><strong>Maybe in reply to:</strong> <a href="21081.php">Siegmar Gross: "[OMPI users] problem building openmpi-1.9a1r27751 on Solaris 10"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hallo Siegmar,
<br>
<p>thanks for your report! The build issue should be fixed in revision 27770, so 
<br>
just give it a try.
<br>
<p>With regards,
<br>
Matthias Jurenz
<br>
<p><span class="quotelev1">&gt; From: Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] problem building openmpi-1.9a1r27751 on Solaris 10
</span><br>
<span class="quotelev1">&gt; Date: January 6, 2013 11:54:26 PM PST
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Reply-To: Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt;, Open MPI 
</span><br>
Users &lt;users_at_[hidden]&gt;
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; today I tried to build openmpi-1.9a1r27751 on &quot;Solaris 10 Sparc&quot;
</span><br>
<span class="quotelev1">&gt; and &quot;Solaris 10 x86_64&quot; with &quot;Sun C 5.12&quot; and got the following
</span><br>
<span class="quotelev1">&gt; errors on both platforms.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; Making all in vtlib
</span><br>
<span class="quotelev1">&gt; make[5]: Entering directory `.../ompi/contrib/vt/vt/vtlib'
</span><br>
<span class="quotelev1">&gt;  CC       vt_comp_phat.lo
</span><br>
<span class="quotelev1">&gt;  CC       vt_execwrap.lo
</span><br>
<span class="quotelev1">&gt; &quot;.../openmpi-1.9a1r27751/ompi/contrib/vt/vt/vtlib/vt_execwrap.c&quot;,
</span><br>
<span class="quotelev1">&gt;  line 187: warning: implicit function declaration:
</span><br>
<span class="quotelev1">&gt;  VTTHRD_MALLOC_TRACING_ENABLED
</span><br>
<span class="quotelev1">&gt; &quot;.../openmpi-1.9a1r27751/ompi/contrib/vt/vt/vtlib/vt_execwrap.c&quot;,
</span><br>
<span class="quotelev1">&gt;  line 358: undefined symbol: environ
</span><br>
<span class="quotelev1">&gt; &quot;.../openmpi-1.9a1r27751/ompi/contrib/vt/vt/vtlib/vt_execwrap.c&quot;,
</span><br>
<span class="quotelev1">&gt;  line 358: warning: improper pointer/integer combination: op &quot;=&quot;
</span><br>
<span class="quotelev1">&gt; &quot;.../openmpi-1.9a1r27751/ompi/contrib/vt/vt/vtlib/vt_execwrap.c&quot;,
</span><br>
<span class="quotelev1">&gt;  line 410: undefined symbol: environ
</span><br>
<span class="quotelev1">&gt; &quot;.../openmpi-1.9a1r27751/ompi/contrib/vt/vt/vtlib/vt_execwrap.c&quot;,
</span><br>
<span class="quotelev1">&gt;  line 410: warning: improper pointer/integer combination: op &quot;=&quot;
</span><br>
<span class="quotelev1">&gt; cc: acomp failed for
</span><br>
<span class="quotelev1">&gt;  .../openmpi-1.9a1r27751/ompi/contrib/vt/vt/vtlib/vt_execwrap.c
</span><br>
<span class="quotelev1">&gt; make[5]: *** [vt_execwrap.lo] Error 1
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would be grateful if you could solve the problem. Thank you
</span><br>
<span class="quotelev1">&gt; very much for your help in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21088/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21089.php">Siegmar Gross: "[OMPI users] some comments on derived datatypes in mpiJava"</a>
<li><strong>Previous message:</strong> <a href="21087.php">Yoshiki SATO: "Re: [OMPI users] Backward Compatibility of MPI Java Binding"</a>
<li><strong>Maybe in reply to:</strong> <a href="21081.php">Siegmar Gross: "[OMPI users] problem building openmpi-1.9a1r27751 on Solaris 10"</a>
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
