<?
$subject_val = "Re: [OMPI users] Build error using Cygwin on Winxp";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 15 17:46:29 2011" -->
<!-- isoreceived="20111015214629" -->
<!-- sent="Sat, 15 Oct 2011 23:46:19 +0200" -->
<!-- isosent="20111015214619" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Build error using Cygwin on Winxp" -->
<!-- id="4E99FF2B.70805_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAFynNR6+XDoz1v9JjspMNR1emfbLRE=na5fsUdm63CuJPnk-Dw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Build error using Cygwin on Winxp<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-15 17:46:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17556.php">MM: "[OMPI users] revisiting topic: prebuilt on windows7 not xp"</a>
<li><strong>Previous message:</strong> <a href="17554.php">Ralph Castain: "Re: [OMPI users] remote spawned process hangs at MPI_Init"</a>
<li><strong>In reply to:</strong> <a href="17549.php">Bj&#246;rn Adlerborn: "[OMPI users] Build error using Cygwin on Winxp"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Bj&#246;rn,
<br>
<p>Why not giving CMake a try? It has been supported on Windows platforms 
<br>
and the building process is nearly 5 times faster then building under 
<br>
Cygwin.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p>On 2011-10-15 11:34 AM, Bj&#246;rn Adlerborn wrote:
<br>
<span class="quotelev1">&gt; Hi, Im trying to build openmpi v1.5.4 on my windows xp machine 
</span><br>
<span class="quotelev1">&gt; using cygwin and f77.
</span><br>
<span class="quotelev1">&gt; .configure works ok, at least displays no errors. Im not supplying any 
</span><br>
<span class="quotelev1">&gt; parameters to .configure.
</span><br>
<span class="quotelev1">&gt; When i try to build I get error when it tries to build using the 
</span><br>
<span class="quotelev1">&gt; makefile under ..../openmpi-1.4.4/opal/mca/installdirs/windows
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory 
</span><br>
<span class="quotelev1">&gt; `/home/Bj&#246;rn/openmpi-1.5.4/opal/mca/installdirs/windows'
</span><br>
<span class="quotelev1">&gt;   CC     opal_installdirs_windows.lo
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c: In function 'installdirs_windows_open':
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:68:9: error: 'HKEY' undeclared (first use 
</span><br>
<span class="quotelev1">&gt; in this function)
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:68:9: note: each undeclared identifier is 
</span><br>
<span class="quotelev1">&gt; reported only once for each function it appears in
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:68:14: error: expected ';' before 'ompi_key'
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:70:9: error: 'DWORD' undeclared (first use 
</span><br>
<span class="quotelev1">&gt; in this function)
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:70:15: error: expected ';' before 'cbData'
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:81:13: error: 'ERROR_SUCCESS' undeclared 
</span><br>
<span class="quotelev1">&gt; (first use in this function)
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:81:43: error: 'HKEY_LOCAL_MACHINE' 
</span><br>
<span class="quotelev1">&gt; undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:81:88: error: 'KEY_READ' undeclared (first 
</span><br>
<span class="quotelev1">&gt; use in this function)
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:81:99: error: 'ompi_key' undeclared (first 
</span><br>
<span class="quotelev1">&gt; use in this function)
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:84:17: error: 'valueLength' undeclared 
</span><br>
<span class="quotelev1">&gt; (first use in this function)
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:86:17: error: 'cbData' undeclared (first 
</span><br>
<span class="quotelev1">&gt; use in this function)
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:89:60: error: 'keyType' undeclared (first 
</span><br>
<span class="quotelev1">&gt; use in this function)
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:89:70: error: 'LPBYTE' undeclared (first 
</span><br>
<span class="quotelev1">&gt; use in this function)
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:89:78: error: expected ')' before 'vData'
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:90:27: error: 'REG_EXPAND_SZ' undeclared 
</span><br>
<span class="quotelev1">&gt; (first use in this function)
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:90:57: error: 'REG_SZ' undeclared (first 
</span><br>
<span class="quotelev1">&gt; use in this function)
</span><br>
<span class="quotelev1">&gt; make[2]: *** [opal_installdirs_windows.lo] Fel 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory 
</span><br>
<span class="quotelev1">&gt; `/home/Bj&#246;rn/openmpi-1.5.4/opal/mca/installdirs/windows'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Fel 1
</span><br>
<span class="quotelev1">&gt; Question number 1. Why does it even bother to compile stuff like this. 
</span><br>
<span class="quotelev1">&gt; Pure windows related.
</span><br>
<span class="quotelev1">&gt; Question number 2. Am i missing some vital libraries in order to 
</span><br>
<span class="quotelev1">&gt; compile this ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Kindly regards
</span><br>
<span class="quotelev1">&gt; Bj&#246;rn
</span><br>
<span class="quotelev1">&gt; +46702048160
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17555/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17556.php">MM: "[OMPI users] revisiting topic: prebuilt on windows7 not xp"</a>
<li><strong>Previous message:</strong> <a href="17554.php">Ralph Castain: "Re: [OMPI users] remote spawned process hangs at MPI_Init"</a>
<li><strong>In reply to:</strong> <a href="17549.php">Bj&#246;rn Adlerborn: "[OMPI users] Build error using Cygwin on Winxp"</a>
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
