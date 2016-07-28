<?
$subject_val = "[OMPI users] Build error using Cygwin on Winxp";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 15 05:34:58 2011" -->
<!-- isoreceived="20111015093458" -->
<!-- sent="Sat, 15 Oct 2011 11:34:53 +0200" -->
<!-- isosent="20111015093453" -->
<!-- name="Bj&#246;rn Adlerborn" -->
<!-- email="bjorn.adlerborn_at_[hidden]" -->
<!-- subject="[OMPI users] Build error using Cygwin on Winxp" -->
<!-- id="CAFynNR6+XDoz1v9JjspMNR1emfbLRE=na5fsUdm63CuJPnk-Dw_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI users] Build error using Cygwin on Winxp<br>
<strong>From:</strong> Bj&#246;rn Adlerborn (<em>bjorn.adlerborn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-15 05:34:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17550.php">Ralph Castain: "Re: [OMPI users] Error when using more than 88 processors for a specific executable -Abyss"</a>
<li><strong>Previous message:</strong> <a href="17548.php">Ashwani Kumar Mishra: "Re: [OMPI users] Error when using more than 88 processors for a specific executable -Abyss"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17555.php">Shiqing Fan: "Re: [OMPI users] Build error using Cygwin on Winxp"</a>
<li><strong>Reply:</strong> <a href="17555.php">Shiqing Fan: "Re: [OMPI users] Build error using Cygwin on Winxp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, Im trying to build openmpi v1.5.4 on my windows xp machine using cygwin
<br>
and f77.
<br>
.configure works ok, at least displays no errors. Im not supplying any
<br>
parameters to .configure.
<br>
When i try to build I get error when it tries to build using the makefile
<br>
under ..../openmpi-1.4.4/opal/mca/installdirs/windows
<br>
<p>make[2]: Entering directory
<br>
`/home/Bj&#246;rn/openmpi-1.5.4/opal/mca/installdirs/windows'
<br>
&nbsp;&nbsp;CC     opal_installdirs_windows.lo
<br>
opal_installdirs_windows.c: In function &#145;installdirs_windows_open&#146;:
<br>
opal_installdirs_windows.c:68:9: error: &#145;HKEY&#146; undeclared (first use in this
<br>
function)
<br>
opal_installdirs_windows.c:68:9: note: each undeclared identifier is
<br>
reported only once for each function it appears in
<br>
opal_installdirs_windows.c:68:14: error: expected &#145;;&#146; before &#145;ompi_key&#146;
<br>
opal_installdirs_windows.c:70:9: error: &#145;DWORD&#146; undeclared (first use in
<br>
this function)
<br>
opal_installdirs_windows.c:70:15: error: expected &#145;;&#146; before &#145;cbData&#146;
<br>
opal_installdirs_windows.c:81:13: error: &#145;ERROR_SUCCESS&#146; undeclared (first
<br>
use in this function)
<br>
opal_installdirs_windows.c:81:43: error: &#145;HKEY_LOCAL_MACHINE&#146; undeclared
<br>
(first use in this function)
<br>
opal_installdirs_windows.c:81:88: error: &#145;KEY_READ&#146; undeclared (first use in
<br>
this function)
<br>
opal_installdirs_windows.c:81:99: error: &#145;ompi_key&#146; undeclared (first use in
<br>
this function)
<br>
opal_installdirs_windows.c:84:17: error: &#145;valueLength&#146; undeclared (first use
<br>
in this function)
<br>
opal_installdirs_windows.c:86:17: error: &#145;cbData&#146; undeclared (first use in
<br>
this function)
<br>
opal_installdirs_windows.c:89:60: error: &#145;keyType&#146; undeclared (first use in
<br>
this function)
<br>
opal_installdirs_windows.c:89:70: error: &#145;LPBYTE&#146; undeclared (first use in
<br>
this function)
<br>
opal_installdirs_windows.c:89:78: error: expected &#145;)&#146; before &#145;vData&#146;
<br>
opal_installdirs_windows.c:90:27: error: &#145;REG_EXPAND_SZ&#146; undeclared (first
<br>
use in this function)
<br>
opal_installdirs_windows.c:90:57: error: &#145;REG_SZ&#146; undeclared (first use in
<br>
this function)
<br>
make[2]: *** [opal_installdirs_windows.lo] Fel 1
<br>
make[2]: Leaving directory
<br>
`/home/Bj&#246;rn/openmpi-1.5.4/opal/mca/installdirs/windows'
<br>
make[1]: *** [all-recursive] Fel 1
<br>
Question number 1. Why does it even bother to compile stuff like this. Pure
<br>
windows related.
<br>
Question number 2. Am i missing some vital libraries in order to compile
<br>
this ?
<br>
<p><p><p><p><p><pre>
-- 
Kindly regards
Bj&#246;rn
+46702048160
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17549/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17550.php">Ralph Castain: "Re: [OMPI users] Error when using more than 88 processors for a specific executable -Abyss"</a>
<li><strong>Previous message:</strong> <a href="17548.php">Ashwani Kumar Mishra: "Re: [OMPI users] Error when using more than 88 processors for a specific executable -Abyss"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17555.php">Shiqing Fan: "Re: [OMPI users] Build error using Cygwin on Winxp"</a>
<li><strong>Reply:</strong> <a href="17555.php">Shiqing Fan: "Re: [OMPI users] Build error using Cygwin on Winxp"</a>
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
