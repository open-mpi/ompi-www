<?
$subject_val = "Re: [OMPI users] Error while compiling openMPI 1.4.2 in Cygwin 1.7.5-1. Library missing?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 15 03:49:38 2010" -->
<!-- isoreceived="20100715074938" -->
<!-- sent="Thu, 15 Jul 2010 09:51:25 +0200" -->
<!-- isosent="20100715075125" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error while compiling openMPI 1.4.2 in Cygwin 1.7.5-1. Library missing?" -->
<!-- id="4C3EBDFD.1080509_at_hlrs.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="AANLkTinvOa6udsxV8hrv4VJWj0DMS9gr41RTKyuzdGDV_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error while compiling openMPI 1.4.2 in Cygwin 1.7.5-1. Library missing?<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-15 03:51:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13643.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="13641.php">Nguyen Toan: "Re: [OMPI users] Question on checkpoint overhead in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="13561.php">Miguel Rubio-Roy: "[OMPI users] Error while compiling openMPI 1.4.2 in Cygwin 1.7.5-1. Library missing?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;Hi Miguel,
<br>
<p>Cygwin is not actively supported, as we are now focusing on native 
<br>
Windows build using CMake and Visual Studio. But I remember there were 
<br>
emails some time ago, that people has done Cygwin build with 1.3 series, 
<br>
see here: <a href="http://www.open-mpi.org/community/lists/users/2008/11/7294.php">http://www.open-mpi.org/community/lists/users/2008/11/7294.php</a> 
<br>
, but it's difficult and might be different for 1.4.2.
<br>
<p>However, I would like to recommend to use CMake+VS build, it's much 
<br>
easier and faster than the Cygwin build. Do you have any reason that you 
<br>
have to use Cygwin?
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p>On 2010-7-9 5:50 PM, Miguel Rubio-Roy wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;    I'm trying to compile openMPI 1.4.2 in Cygwin 1.7.5-1.
</span><br>
<span class="quotelev1">&gt;    After ./configure I do make and after some time I always get this
</span><br>
<span class="quotelev1">&gt; error. I've tried &quot;make clean&quot; and &quot;make&quot; again, but that doesn't
</span><br>
<span class="quotelev1">&gt; help. It looks to me like I have all the requirements of the
</span><br>
<span class="quotelev1">&gt; README.Windows file (Cygwin and libtool 2.2.7a&gt;  2.2.6).
</span><br>
<span class="quotelev1">&gt;    I guess my installation is missing some library, but which one? Find
</span><br>
<span class="quotelev1">&gt; attached the &quot;configure&quot; log.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Miguel
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/home/miguel/openmpi-1.4.2/opal/mca/installdirs/windows'
</span><br>
<span class="quotelev1">&gt; depbase=`echo opal_installdirs_windows.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`;\
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../../libtool --tag=CC   --mode=compile gcc
</span><br>
<span class="quotelev1">&gt; -DHAVE_CONFIG_H -I. -I../../../../opal/include
</span><br>
<span class="quotelev1">&gt; -I../../../../orte/include -I../../../../ompi/include
</span><br>
<span class="quotelev1">&gt; -I../../../../opal/mca/paffinity/linux/plpa/src/libplpa
</span><br>
<span class="quotelev1">&gt; -I../../../..  -D_REENTRANT  -O3 -DNDEBUG -finline-functions
</span><br>
<span class="quotelev1">&gt; -fno-strict-aliasing  -MT opal_installdirs_windows.lo -MD -MP -MF
</span><br>
<span class="quotelev1">&gt; $depbase.Tpo -c -o opal_installdirs_windows.lo
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c&amp;&amp;\
</span><br>
<span class="quotelev1">&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../../../opal/include
</span><br>
<span class="quotelev1">&gt; -I../../../../orte/include -I../../../../ompi/include
</span><br>
<span class="quotelev1">&gt; -I../../../../opal/mca/paffinity/linux/plpa/src/libplpa -I../../../..
</span><br>
<span class="quotelev1">&gt; -D_REENTRANT -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -MT
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.lo -MD -MP -MF
</span><br>
<span class="quotelev1">&gt; .deps/opal_installdirs_windows.Tpo -c opal_installdirs_windows.c
</span><br>
<span class="quotelev1">&gt; -DDLL_EXPORT -DPIC -o .libs/opal_installdirs_windows.o
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c: In function &#145;installdirs_windows_open&#146;:
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:69: error: &#145;HKEY&#146; undeclared (first use in
</span><br>
<span class="quotelev1">&gt; this function)
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:69: error: (Each undeclared identifier is
</span><br>
<span class="quotelev1">&gt; reported only once
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:69: error: for each function it appears in.)
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:69: error: expected &#145;;&#146; before &#145;ompi_key&#146;
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:79: error: &#145;ERROR_SUCCESS&#146; undeclared
</span><br>
<span class="quotelev1">&gt; (first use in this function)
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:79: error: &#145;HKEY_LOCAL_MACHINE&#146; undeclared
</span><br>
<span class="quotelev1">&gt; (first use in this function)
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:79: error: &#145;KEY_READ&#146; undeclared (first use
</span><br>
<span class="quotelev1">&gt; in this function)
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:79: error: &#145;ompi_key&#146; undeclared (first use
</span><br>
<span class="quotelev1">&gt; in this function)
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:85: error: &#145;DWORD&#146; undeclared (first use in
</span><br>
<span class="quotelev1">&gt; this function)
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:85: error: expected &#145;;&#146; before &#145;cbData&#146;
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:85: error: &#145;valueLength&#146; undeclared (first
</span><br>
<span class="quotelev1">&gt; use in this function)
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:85: error: &#145;cbData&#146; undeclared (first use
</span><br>
<span class="quotelev1">&gt; in this function)
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:85: error: &#145;keyType&#146; undeclared (first use
</span><br>
<span class="quotelev1">&gt; in this function)
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:85: error: &#145;LPBYTE&#146; undeclared (first use
</span><br>
<span class="quotelev1">&gt; in this function)
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:85: error: expected &#145;)&#146; before &#145;vData&#146;
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:85: error: &#145;REG_EXPAND_SZ&#146; undeclared
</span><br>
<span class="quotelev1">&gt; (first use in this function)
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:85: error: &#145;REG_SZ&#146; undeclared (first use
</span><br>
<span class="quotelev1">&gt; in this function)
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:86: error: expected &#145;;&#146; before &#145;cbData&#146;
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:86: error: expected &#145;)&#146; before &#145;vData&#146;
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:87: error: expected &#145;;&#146; before &#145;cbData&#146;
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:87: error: expected &#145;)&#146; before &#145;vData&#146;
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:88: error: expected &#145;;&#146; before &#145;cbData&#146;
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:88: error: expected &#145;)&#146; before &#145;vData&#146;
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:89: error: expected &#145;;&#146; before &#145;cbData&#146;
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:89: error: expected &#145;)&#146; before &#145;vData&#146;
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:90: error: expected &#145;;&#146; before &#145;cbData&#146;
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:90: error: expected &#145;)&#146; before &#145;vData&#146;
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:91: error: expected &#145;;&#146; before &#145;cbData&#146;
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:91: error: expected &#145;)&#146; before &#145;vData&#146;
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:92: error: expected &#145;;&#146; before &#145;cbData&#146;
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:92: error: expected &#145;)&#146; before &#145;vData&#146;
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:93: error: expected &#145;;&#146; before &#145;cbData&#146;
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:93: error: expected &#145;)&#146; before &#145;vData&#146;
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:94: error: expected &#145;;&#146; before &#145;cbData&#146;
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:94: error: expected &#145;)&#146; before &#145;vData&#146;
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:95: error: expected &#145;;&#146; before &#145;cbData&#146;
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:95: error: expected &#145;)&#146; before &#145;vData&#146;
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:96: error: expected &#145;;&#146; before &#145;cbData&#146;
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:96: error: expected &#145;)&#146; before &#145;vData&#146;
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:97: error: expected &#145;;&#146; before &#145;cbData&#146;
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:97: error: expected &#145;)&#146; before &#145;vData&#146;
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:98: error: expected &#145;;&#146; before &#145;cbData&#146;
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:98: error: expected &#145;)&#146; before &#145;vData&#146;
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:99: error: expected &#145;;&#146; before &#145;cbData&#146;
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:99: error: expected &#145;)&#146; before &#145;vData&#146;
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:100: error: expected &#145;;&#146; before &#145;cbData&#146;
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:100: error: expected &#145;)&#146; before &#145;vData&#146;
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:101: error: expected &#145;;&#146; before &#145;cbData&#146;
</span><br>
<span class="quotelev1">&gt; opal_installdirs_windows.c:101: error: expected &#145;)&#146; before &#145;vData&#146;
</span><br>
<span class="quotelev1">&gt; make[2]: *** [opal_installdirs_windows.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/miguel/openmpi-1.4.2/opal/mca/installdirs/windows'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/miguel/openmpi-1.4.2/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Miguel
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
--------------------------------------------------------------
Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
High Performance Computing           Tel.: +49 711 685 87234
   Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
Address:Allmandring 30               email: fan_at_[hidden]
70569 Stuttgart
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13642/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13643.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="13641.php">Nguyen Toan: "Re: [OMPI users] Question on checkpoint overhead in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="13561.php">Miguel Rubio-Roy: "[OMPI users] Error while compiling openMPI 1.4.2 in Cygwin 1.7.5-1. Library missing?"</a>
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
