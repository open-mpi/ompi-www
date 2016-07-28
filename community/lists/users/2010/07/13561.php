<?
$subject_val = "[OMPI users] Error while compiling openMPI 1.4.2 in Cygwin 1.7.5-1. Library missing?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  9 11:50:49 2010" -->
<!-- isoreceived="20100709155049" -->
<!-- sent="Fri, 9 Jul 2010 17:50:13 +0200" -->
<!-- isosent="20100709155013" -->
<!-- name="Miguel Rubio-Roy" -->
<!-- email="mrubioroy_at_[hidden]" -->
<!-- subject="[OMPI users] Error while compiling openMPI 1.4.2 in Cygwin 1.7.5-1. Library missing?" -->
<!-- id="AANLkTinvOa6udsxV8hrv4VJWj0DMS9gr41RTKyuzdGDV_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Error while compiling openMPI 1.4.2 in Cygwin 1.7.5-1. Library missing?<br>
<strong>From:</strong> Miguel Rubio-Roy (<em>mrubioroy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-09 11:50:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13562.php">Brian Budge: "[OMPI users] Dynamic process tutorials?"</a>
<li><strong>Previous message:</strong> <a href="13560.php">Andreas Sch&#228;fer: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13642.php">Shiqing Fan: "Re: [OMPI users] Error while compiling openMPI 1.4.2 in Cygwin 1.7.5-1. Library missing?"</a>
<li><strong>Reply:</strong> <a href="13642.php">Shiqing Fan: "Re: [OMPI users] Error while compiling openMPI 1.4.2 in Cygwin 1.7.5-1. Library missing?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
&#160;&#160;I'm trying to compile openMPI 1.4.2 in Cygwin 1.7.5-1.
<br>
&nbsp;&nbsp;After ./configure I do make and after some time I always get this
<br>
error. I've tried &quot;make clean&quot; and &quot;make&quot; again, but that doesn't
<br>
help. It looks to me like I have all the requirements of the
<br>
README.Windows file (Cygwin and libtool 2.2.7a &gt; 2.2.6).
<br>
&nbsp;&nbsp;I guess my installation is missing some library, but which one? Find
<br>
attached the &quot;configure&quot; log.
<br>
<p>Thanks!
<br>
<p>Miguel
<br>
<p>Error:
<br>
<p>make[2]: Entering directory
<br>
`/home/miguel/openmpi-1.4.2/opal/mca/installdirs/windows'
<br>
depbase=`echo opal_installdirs_windows.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`;\
<br>
/bin/sh ../../../../libtool --tag=CC &#160; --mode=compile gcc
<br>
-DHAVE_CONFIG_H -I. -I../../../../opal/include
<br>
-I../../../../orte/include -I../../../../ompi/include
<br>
-I../../../../opal/mca/paffinity/linux/plpa/src/libplpa
<br>
-I../../../.. &#160;-D_REENTRANT &#160;-O3 -DNDEBUG -finline-functions
<br>
-fno-strict-aliasing &#160;-MT opal_installdirs_windows.lo -MD -MP -MF
<br>
$depbase.Tpo -c -o opal_installdirs_windows.lo
<br>
opal_installdirs_windows.c &amp;&amp;\
<br>
mv -f $depbase.Tpo $depbase.Plo
<br>
libtool: compile: &#160;gcc -DHAVE_CONFIG_H -I. -I../../../../opal/include
<br>
-I../../../../orte/include -I../../../../ompi/include
<br>
-I../../../../opal/mca/paffinity/linux/plpa/src/libplpa -I../../../..
<br>
-D_REENTRANT -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -MT
<br>
opal_installdirs_windows.lo -MD -MP -MF
<br>
.deps/opal_installdirs_windows.Tpo -c opal_installdirs_windows.c
<br>
-DDLL_EXPORT -DPIC -o .libs/opal_installdirs_windows.o
<br>
opal_installdirs_windows.c: In function &#145;installdirs_windows_open&#146;:
<br>
opal_installdirs_windows.c:69: error: &#145;HKEY&#146; undeclared (first use in
<br>
this function)
<br>
opal_installdirs_windows.c:69: error: (Each undeclared identifier is
<br>
reported only once
<br>
opal_installdirs_windows.c:69: error: for each function it appears in.)
<br>
opal_installdirs_windows.c:69: error: expected &#145;;&#146; before &#145;ompi_key&#146;
<br>
opal_installdirs_windows.c:79: error: &#145;ERROR_SUCCESS&#146; undeclared
<br>
(first use in this function)
<br>
opal_installdirs_windows.c:79: error: &#145;HKEY_LOCAL_MACHINE&#146; undeclared
<br>
(first use in this function)
<br>
opal_installdirs_windows.c:79: error: &#145;KEY_READ&#146; undeclared (first use
<br>
in this function)
<br>
opal_installdirs_windows.c:79: error: &#145;ompi_key&#146; undeclared (first use
<br>
in this function)
<br>
opal_installdirs_windows.c:85: error: &#145;DWORD&#146; undeclared (first use in
<br>
this function)
<br>
opal_installdirs_windows.c:85: error: expected &#145;;&#146; before &#145;cbData&#146;
<br>
opal_installdirs_windows.c:85: error: &#145;valueLength&#146; undeclared (first
<br>
use in this function)
<br>
opal_installdirs_windows.c:85: error: &#145;cbData&#146; undeclared (first use
<br>
in this function)
<br>
opal_installdirs_windows.c:85: error: &#145;keyType&#146; undeclared (first use
<br>
in this function)
<br>
opal_installdirs_windows.c:85: error: &#145;LPBYTE&#146; undeclared (first use
<br>
in this function)
<br>
opal_installdirs_windows.c:85: error: expected &#145;)&#146; before &#145;vData&#146;
<br>
opal_installdirs_windows.c:85: error: &#145;REG_EXPAND_SZ&#146; undeclared
<br>
(first use in this function)
<br>
opal_installdirs_windows.c:85: error: &#145;REG_SZ&#146; undeclared (first use
<br>
in this function)
<br>
opal_installdirs_windows.c:86: error: expected &#145;;&#146; before &#145;cbData&#146;
<br>
opal_installdirs_windows.c:86: error: expected &#145;)&#146; before &#145;vData&#146;
<br>
opal_installdirs_windows.c:87: error: expected &#145;;&#146; before &#145;cbData&#146;
<br>
opal_installdirs_windows.c:87: error: expected &#145;)&#146; before &#145;vData&#146;
<br>
opal_installdirs_windows.c:88: error: expected &#145;;&#146; before &#145;cbData&#146;
<br>
opal_installdirs_windows.c:88: error: expected &#145;)&#146; before &#145;vData&#146;
<br>
opal_installdirs_windows.c:89: error: expected &#145;;&#146; before &#145;cbData&#146;
<br>
opal_installdirs_windows.c:89: error: expected &#145;)&#146; before &#145;vData&#146;
<br>
opal_installdirs_windows.c:90: error: expected &#145;;&#146; before &#145;cbData&#146;
<br>
opal_installdirs_windows.c:90: error: expected &#145;)&#146; before &#145;vData&#146;
<br>
opal_installdirs_windows.c:91: error: expected &#145;;&#146; before &#145;cbData&#146;
<br>
opal_installdirs_windows.c:91: error: expected &#145;)&#146; before &#145;vData&#146;
<br>
opal_installdirs_windows.c:92: error: expected &#145;;&#146; before &#145;cbData&#146;
<br>
opal_installdirs_windows.c:92: error: expected &#145;)&#146; before &#145;vData&#146;
<br>
opal_installdirs_windows.c:93: error: expected &#145;;&#146; before &#145;cbData&#146;
<br>
opal_installdirs_windows.c:93: error: expected &#145;)&#146; before &#145;vData&#146;
<br>
opal_installdirs_windows.c:94: error: expected &#145;;&#146; before &#145;cbData&#146;
<br>
opal_installdirs_windows.c:94: error: expected &#145;)&#146; before &#145;vData&#146;
<br>
opal_installdirs_windows.c:95: error: expected &#145;;&#146; before &#145;cbData&#146;
<br>
opal_installdirs_windows.c:95: error: expected &#145;)&#146; before &#145;vData&#146;
<br>
opal_installdirs_windows.c:96: error: expected &#145;;&#146; before &#145;cbData&#146;
<br>
opal_installdirs_windows.c:96: error: expected &#145;)&#146; before &#145;vData&#146;
<br>
opal_installdirs_windows.c:97: error: expected &#145;;&#146; before &#145;cbData&#146;
<br>
opal_installdirs_windows.c:97: error: expected &#145;)&#146; before &#145;vData&#146;
<br>
opal_installdirs_windows.c:98: error: expected &#145;;&#146; before &#145;cbData&#146;
<br>
opal_installdirs_windows.c:98: error: expected &#145;)&#146; before &#145;vData&#146;
<br>
opal_installdirs_windows.c:99: error: expected &#145;;&#146; before &#145;cbData&#146;
<br>
opal_installdirs_windows.c:99: error: expected &#145;)&#146; before &#145;vData&#146;
<br>
opal_installdirs_windows.c:100: error: expected &#145;;&#146; before &#145;cbData&#146;
<br>
opal_installdirs_windows.c:100: error: expected &#145;)&#146; before &#145;vData&#146;
<br>
opal_installdirs_windows.c:101: error: expected &#145;;&#146; before &#145;cbData&#146;
<br>
opal_installdirs_windows.c:101: error: expected &#145;)&#146; before &#145;vData&#146;
<br>
make[2]: *** [opal_installdirs_windows.lo] Error 1
<br>
make[2]: Leaving directory
<br>
`/home/miguel/openmpi-1.4.2/opal/mca/installdirs/windows'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/home/miguel/openmpi-1.4.2/opal'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p><p><pre>
--
Miguel

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13561/log.configure">log.configure</a>
</ul>
<!-- attachment="log.configure" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13562.php">Brian Budge: "[OMPI users] Dynamic process tutorials?"</a>
<li><strong>Previous message:</strong> <a href="13560.php">Andreas Sch&#228;fer: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13642.php">Shiqing Fan: "Re: [OMPI users] Error while compiling openMPI 1.4.2 in Cygwin 1.7.5-1. Library missing?"</a>
<li><strong>Reply:</strong> <a href="13642.php">Shiqing Fan: "Re: [OMPI users] Error while compiling openMPI 1.4.2 in Cygwin 1.7.5-1. Library missing?"</a>
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
