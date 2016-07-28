<?
$subject_val = "[OMPI users] problem building 32-bit openmpi-1.9a1r27979 with Sun C";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 13:34:11 2013" -->
<!-- isoreceived="20130130183411" -->
<!-- sent="Wed, 30 Jan 2013 19:27:10 +0100 (CET)" -->
<!-- isosent="20130130182710" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] problem building 32-bit openmpi-1.9a1r27979 with Sun C" -->
<!-- id="201301301827.r0UIRAcj017788_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] problem building 32-bit openmpi-1.9a1r27979 with Sun C<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-30 13:27:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21270.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem building 32-bit openmpi-1.9a1r27979 with Sun C"</a>
<li><strong>Previous message:</strong> <a href="21268.php">Ralph Castain: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21270.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem building 32-bit openmpi-1.9a1r27979 with Sun C"</a>
<li><strong>Reply:</strong> <a href="21270.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem building 32-bit openmpi-1.9a1r27979 with Sun C"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>today I tried to install openmpi-1.9a1r2797 on SunOS 10 Sparc,
<br>
SunOS 10 x86_64, and Linux x86_64 with Sun C 5.12. I succeeded
<br>
with all 64-bit systems and the 32-bit system on Solaris Sparc.
<br>
<p>On Linux (openSUSE 12.1) and Solaris x86_64 I got the following
<br>
errors.
<br>
<p>tyr openmpi-1.9 245 tail 
<br>
openmpi-1.9-SunOS.x86_64.32_cc/log.make.SunOS.x86_64.32_cc&quot;../../../../openmpi-1
<br>
.9a1r27979/ompi/mpi/cxx/file.cc&quot;, line 197: Warning (Anachronism): Formal 
<br>
argument read_conversion_fn of type extern &quot;C&quot; 
<br>
int(*)(void*,ompi_datatype_t*,int,void*,long long,void*) in call to 
<br>
MPI_Register_datarep(char*, extern &quot;C&quot; 
<br>
int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; 
<br>
int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; 
<br>
int(*)(ompi_datatype_t*,int*,void*), void*) is being passed 
<br>
int(*)(void*,ompi_datatype_t*,int,void*,long long,void*).
<br>
&quot;../../../../openmpi-1.9a1r27979/ompi/mpi/cxx/file.cc&quot;, line 199: Warning 
<br>
(Anachronism): Formal argument dtype_file_extent_fn of type extern &quot;C&quot; 
<br>
int(*)(ompi_datatype_t*,int*,void*) in call to MPI_Register_datarep(char*, 
<br>
extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; 
<br>
int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; 
<br>
int(*)(ompi_datatype_t*,int*,void*), void*) is being passed 
<br>
int(*)(ompi_datatype_t*,int*,void*).
<br>
&quot;../../../../openmpi-1.9a1r27979/ompi/mpi/cxx/file.cc&quot;, line 224: Warning 
<br>
(Anachronism): Formal argument dtype_file_extent_fn of type extern &quot;C&quot; 
<br>
int(*)(ompi_datatype_t*,int*,void*) in call to MPI_Register_datarep(char*, 
<br>
extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; 
<br>
int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; 
<br>
int(*)(ompi_datatype_t*,int*,void*), void*) is being passed 
<br>
int(*)(ompi_datatype_t*,int*,void*).
<br>
&quot;../../../../openmpi-1.9a1r27979/ompi/mpi/cxx/file.cc&quot;, Error: The function 
<br>
opal_atomic_add_32(volatile int*, int) has not had a body defined.
<br>
1 Error(s) and 8 Warning(s) detected.
<br>
make[2]: *** [file.lo] Error 1
<br>
make[2]: Leaving directory 
<br>
`/export2/src/openmpi-1.9/openmpi-1.9-SunOS.x86_64.32_cc/ompi/mpi/cxx'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory 
<br>
`/export2/src/openmpi-1.9/openmpi-1.9-SunOS.x86_64.32_cc/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>tyr openmpi-1.9 246 tail 
<br>
openmpi-1.9-Linux.x86_64.32_cc/log.make.Linux.x86_64.32_cc&quot;../../../../openmpi-1
<br>
.9a1r27979/ompi/mpi/cxx/file.cc&quot;, line 197: Warning (Anachronism): Formal 
<br>
argument read_conversion_fn of type extern &quot;C&quot; 
<br>
int(*)(void*,ompi_datatype_t*,int,void*,long long,void*) in call to 
<br>
MPI_Register_datarep(char*, extern &quot;C&quot; 
<br>
int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; 
<br>
int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; 
<br>
int(*)(ompi_datatype_t*,int*,void*), void*) is being passed 
<br>
int(*)(void*,ompi_datatype_t*,int,void*,long long,void*).
<br>
&quot;../../../../openmpi-1.9a1r27979/ompi/mpi/cxx/file.cc&quot;, line 199: Warning 
<br>
(Anachronism): Formal argument dtype_file_extent_fn of type extern &quot;C&quot; 
<br>
int(*)(ompi_datatype_t*,int*,void*) in call to MPI_Register_datarep(char*, 
<br>
extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; 
<br>
int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; 
<br>
int(*)(ompi_datatype_t*,int*,void*), void*) is being passed 
<br>
int(*)(ompi_datatype_t*,int*,void*).
<br>
&quot;../../../../openmpi-1.9a1r27979/ompi/mpi/cxx/file.cc&quot;, line 224: Warning 
<br>
(Anachronism): Formal argument dtype_file_extent_fn of type extern &quot;C&quot; 
<br>
int(*)(ompi_datatype_t*,int*,void*) in call to MPI_Register_datarep(char*, 
<br>
extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; 
<br>
int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; 
<br>
int(*)(ompi_datatype_t*,int*,void*), void*) is being passed 
<br>
int(*)(ompi_datatype_t*,int*,void*).
<br>
&quot;../../../../openmpi-1.9a1r27979/ompi/mpi/cxx/file.cc&quot;, Error: The function 
<br>
opal_atomic_add_32(volatile int*, int) has not had a body defined.
<br>
1 Error(s) and 8 Warning(s) detected.
<br>
make[2]: *** [file.lo] Error 1
<br>
make[2]: Leaving directory 
<br>
`/export2/src/openmpi-1.9/openmpi-1.9-Linux.x86_64.32_cc/ompi/mpi/cxx'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory 
<br>
`/export2/src/openmpi-1.9/openmpi-1.9-Linux.x86_64.32_cc/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
tyr openmpi-1.9 247 
<br>
<p><p><p>Perhaps somebody can fix the problem. Thank you very much for your
<br>
help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21270.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem building 32-bit openmpi-1.9a1r27979 with Sun C"</a>
<li><strong>Previous message:</strong> <a href="21268.php">Ralph Castain: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21270.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem building 32-bit openmpi-1.9a1r27979 with Sun C"</a>
<li><strong>Reply:</strong> <a href="21270.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem building 32-bit openmpi-1.9a1r27979 with Sun C"</a>
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
