<?
$subject_val = "[OMPI users] compiling OpenMPI 1.3.2 under Win Vista with MinGW 1.11-rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 16 05:20:58 2009" -->
<!-- isoreceived="20090616092058" -->
<!-- sent="Tue, 16 Jun 2009 11:20:37 +0200" -->
<!-- isosent="20090616092037" -->
<!-- name="Kraus Philipp" -->
<!-- email="philipp.kraus_at_[hidden]" -->
<!-- subject="[OMPI users] compiling OpenMPI 1.3.2 under Win Vista with MinGW 1.11-rc1" -->
<!-- id="43624E8A-8C7E-4CD6-B785-407908F58F34_at_flashpixx.de" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] compiling OpenMPI 1.3.2 under Win Vista with MinGW 1.11-rc1<br>
<strong>From:</strong> Kraus Philipp (<em>philipp.kraus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-16 05:20:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9621.php">Shiqing Fan: "Re: [OMPI users] compiling OpenMPI 1.3.2 under Win Vista with MinGW 1.11-rc1"</a>
<li><strong>Previous message:</strong> <a href="9619.php">Kritiraj Sajadah: "[OMPI users] Segmentation fault (11)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9621.php">Shiqing Fan: "Re: [OMPI users] compiling OpenMPI 1.3.2 under Win Vista with MinGW 1.11-rc1"</a>
<li><strong>Reply:</strong> <a href="9621.php">Shiqing Fan: "Re: [OMPI users] compiling OpenMPI 1.3.2 under Win Vista with MinGW 1.11-rc1"</a>
<li><strong>Reply:</strong> <a href="9622.php">Shiqing Fan: "Re: [OMPI users] compiling OpenMPI 1.3.2 under Win Vista with MinGW 1.11-rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>Hello @all,
<br>
<p>I try to compile OpenMPI (1.3.2) with MinGW (MinGW 1.11-rc1) under Win  
<br>
Vista (32 Bit)  only for developing and linking.
<br>
On running make it breaks down with errors:
<br>
<p>c:/Library/MinGW/bin/../lib/gcc/mingw32/3.4.5/../../../../include/ 
<br>
winsock2.h:392:1:  warning: this is the location of the previous  
<br>
definition
<br>
event.c:38:18: misc.h: No such file or directory
<br>
<p>In file included from event.c:41:
<br>
c:/Library/MinGW/bin/../lib/gcc/mingw32/3.4.5/../../../../include/sys/ 
<br>
time.h:27:  error: redefinition of `struct timezone'
<br>
c:/Library/MinGW/bin/../lib/gcc/mingw32/3.4.5/../../../../include/sys/ 
<br>
time.h:40:  error: conflicting types for 'gettimeofday'
<br>
../../opal/win32/ompi_time.h:179: error: previous declaration of   
<br>
'gettimeofday' was here
<br>
<p>c:/Library/MinGW/bin/../lib/gcc/mingw32/3.4.5/../../../../include/sys/ 
<br>
time.h:40:  error: conflicting types for 'gettimeofday'
<br>
../../opal/win32/ompi_time.h:179: error: previous declaration of   
<br>
'gettimeofday' was here
<br>
<p>Under OSX &amp; Gentoo Linux I had compiled this and earlier versions  
<br>
without problems (okay I'm not windows user actually
<br>
so I have some using-problems with Visual Studio / MinGW compiling &amp;  
<br>
linking).
<br>
<p>Can anyone help me or have some other solutions to compile MPI under  
<br>
Windows?
<br>
<p>Thanks a lot
<br>
<p>Phil
<br>
-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.8 (Darwin)
<br>
<p>iEYEARECAAYFAko3Y+UACgkQ6s0Ua5LeGukCaACgjaPpXaoyfgTD1OvaJVsg/A+M
<br>
MvkAoK1Fj2fUk7S1KeNrYwZPsH+6kVIm
<br>
=A2pW
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9621.php">Shiqing Fan: "Re: [OMPI users] compiling OpenMPI 1.3.2 under Win Vista with MinGW 1.11-rc1"</a>
<li><strong>Previous message:</strong> <a href="9619.php">Kritiraj Sajadah: "[OMPI users] Segmentation fault (11)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9621.php">Shiqing Fan: "Re: [OMPI users] compiling OpenMPI 1.3.2 under Win Vista with MinGW 1.11-rc1"</a>
<li><strong>Reply:</strong> <a href="9621.php">Shiqing Fan: "Re: [OMPI users] compiling OpenMPI 1.3.2 under Win Vista with MinGW 1.11-rc1"</a>
<li><strong>Reply:</strong> <a href="9622.php">Shiqing Fan: "Re: [OMPI users] compiling OpenMPI 1.3.2 under Win Vista with MinGW 1.11-rc1"</a>
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
