<?
$subject_val = "Re: [OMPI users] compiling OpenMPI 1.3.2 under Win Vista with MinGW 1.11-rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 16 08:31:44 2009" -->
<!-- isoreceived="20090616123144" -->
<!-- sent="Tue, 16 Jun 2009 14:31:59 +0200" -->
<!-- isosent="20090616123159" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compiling OpenMPI 1.3.2 under Win Vista with MinGW 1.11-rc1" -->
<!-- id="1245155512.0000_at_hypermail.dummy" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="43624E8A-8C7E-4CD6-B785-407908F58F34_at_flashpixx.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] compiling OpenMPI 1.3.2 under Win Vista with MinGW 1.11-rc1<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-16 08:31:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9623.php">David Robertson: "[OMPI users] Intel C and Fortran 11 and Open MPI 1.3.2"</a>
<li><strong>Previous message:</strong> <a href="9621.php">Shiqing Fan: "Re: [OMPI users] compiling OpenMPI 1.3.2 under Win Vista with MinGW 1.11-rc1"</a>
<li><strong>In reply to:</strong> <a href="9620.php">Kraus Philipp: "[OMPI users] compiling OpenMPI 1.3.2 under Win Vista with MinGW 1.11-rc1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Kraus,
<br>
<p>I suggest you to use Open MPI trunk version or the next coming release 
<br>
1.3.3 which includes the CMake support for Windows platforms, and there 
<br>
is a short description in README.WINDOWS file about how to use it. This 
<br>
new CMake build system will generate Open MPI solution files for Visual 
<br>
Studio automatically, so that you can compile the binaries easily.  If 
<br>
you have any difficulty or problem with that, I'm glad to help.
<br>
<p><p>Best Regards,
<br>
Shiqing
<br>
<p><p>Kraus Philipp wrote:
<br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev1">&gt; Hash: SHA1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello @all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I try to compile OpenMPI (1.3.2) with MinGW (MinGW 1.11-rc1) under Win 
</span><br>
<span class="quotelev1">&gt; Vista (32 Bit)  only for developing and linking.
</span><br>
<span class="quotelev1">&gt; On running make it breaks down with errors:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; c:/Library/MinGW/bin/../lib/gcc/mingw32/3.4.5/../../../../include/winsock2.h:392:1:  
</span><br>
<span class="quotelev1">&gt; warning: this is the location of the previous definition
</span><br>
<span class="quotelev1">&gt; event.c:38:18: misc.h: No such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In file included from event.c:41:
</span><br>
<span class="quotelev1">&gt; c:/Library/MinGW/bin/../lib/gcc/mingw32/3.4.5/../../../../include/sys/time.h:27:  
</span><br>
<span class="quotelev1">&gt; error: redefinition of `struct timezone'
</span><br>
<span class="quotelev1">&gt; c:/Library/MinGW/bin/../lib/gcc/mingw32/3.4.5/../../../../include/sys/time.h:40:  
</span><br>
<span class="quotelev1">&gt; error: conflicting types for 'gettimeofday'
</span><br>
<span class="quotelev1">&gt; ../../opal/win32/ompi_time.h:179: error: previous declaration of  
</span><br>
<span class="quotelev1">&gt; 'gettimeofday' was here
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; c:/Library/MinGW/bin/../lib/gcc/mingw32/3.4.5/../../../../include/sys/time.h:40:  
</span><br>
<span class="quotelev1">&gt; error: conflicting types for 'gettimeofday'
</span><br>
<span class="quotelev1">&gt; ../../opal/win32/ompi_time.h:179: error: previous declaration of  
</span><br>
<span class="quotelev1">&gt; 'gettimeofday' was here
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Under OSX &amp; Gentoo Linux I had compiled this and earlier versions 
</span><br>
<span class="quotelev1">&gt; without problems (okay I'm not windows user actually
</span><br>
<span class="quotelev1">&gt; so I have some using-problems with Visual Studio / MinGW compiling &amp; 
</span><br>
<span class="quotelev1">&gt; linking).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anyone help me or have some other solutions to compile MPI under 
</span><br>
<span class="quotelev1">&gt; Windows?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Phil
</span><br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; Version: GnuPG v1.4.8 (Darwin)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; iEYEARECAAYFAko3Y+UACgkQ6s0Ua5LeGukCaACgjaPpXaoyfgTD1OvaJVsg/A+M
</span><br>
<span class="quotelev1">&gt; MvkAoK1Fj2fUk7S1KeNrYwZPsH+6kVIm
</span><br>
<span class="quotelev1">&gt; =A2pW
</span><br>
<span class="quotelev1">&gt; -----END PGP SIGNATURE-----
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
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9623.php">David Robertson: "[OMPI users] Intel C and Fortran 11 and Open MPI 1.3.2"</a>
<li><strong>Previous message:</strong> <a href="9621.php">Shiqing Fan: "Re: [OMPI users] compiling OpenMPI 1.3.2 under Win Vista with MinGW 1.11-rc1"</a>
<li><strong>In reply to:</strong> <a href="9620.php">Kraus Philipp: "[OMPI users] compiling OpenMPI 1.3.2 under Win Vista with MinGW 1.11-rc1"</a>
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
