<?
$subject_val = "[OMPI users] link problem on 64bit platform";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  1 05:20:32 2010" -->
<!-- isoreceived="20101101092032" -->
<!-- sent="Mon, 1 Nov 2010 10:20:28 +0100" -->
<!-- isosent="20101101092028" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="[OMPI users] link problem on 64bit platform" -->
<!-- id="AANLkTimnA1qaa=HZqYm0mrA+m0Jq-xFwc9s9wnDC1UKj_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-01 05:20:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14659.php">Siegmar Gross: "Re: [OMPI users] cannot install Open MPI 1.5 on Solaris x86_64 withOracle/Sun C 5.11"</a>
<li><strong>Previous message:</strong> <a href="14657.php">jody: "Re: [OMPI users] message truncated error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14660.php">Trent Creekmore: "Re: [OMPI users] link problem on 64bit platform"</a>
<li><strong>Reply:</strong> <a href="14660.php">Trent Creekmore: "Re: [OMPI users] link problem on 64bit platform"</a>
<li><strong>Reply:</strong> <a href="14661.php">Jeff Squyres: "Re: [OMPI users] link problem on 64bit platform"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
On a newly installed 64bit linux (2.6.32-gentoo-r7) with gcc version 4.4.4
<br>
i can't compile even simple Open-MPI applications (OpenMPI 1.4.2).
<br>
<p>The message is:
<br>
jody_at_aim-squid_0 ~/progs $ mpiCC -g -o HelloMPI HelloMPI.cpp
<br>
/usr/lib/gcc/x86_64-pc-linux-gnu/4.4.4/../../../../x86_64-pc-linux-gnu/bin/ld:
<br>
skipping incompatible /opt/openmpi-1.4.2/lib/libmpi_cxx.so when
<br>
searching for -lmpi_cxx
<br>
/usr/lib/gcc/x86_64-pc-linux-gnu/4.4.4/../../../../x86_64-pc-linux-gnu/bin/ld:
<br>
cannot find -lmpi_cxx
<br>
collect2: ld returned 1 exit status
<br>
<p>I am using the 64bit mpiCC:
<br>
jody_at_aim-squid_0 ~/progs $ which mpiCC
<br>
/opt/openmpi/bin/mpiCC
<br>
jody_at_aim-squid_0 ~/progs $ ls -l /opt/openmpi
<br>
lrwxrwxrwx 1 root root 22 Nov  1 09:56 /opt/openmpi -&gt; /opt/openmpi-1.4.2-64/
<br>
<p>The mpi_cxx should be found in the lib subdirectory:
<br>
jody_at_aim-squid_0 ~/progs $ ls -l /opt/openmpi/lib/libmpi_cxx*
<br>
-rwxr-xr-x 1 root root   1073 Jun 24 15:50 /opt/openmpi/lib/libmpi_cxx.la
<br>
lrwxrwxrwx 1 root root     19 Jun 24 15:50
<br>
/opt/openmpi/lib/libmpi_cxx.so -&gt; libmpi_cxx.so.0.0.1
<br>
lrwxrwxrwx 1 root root     19 Jun 24 15:50
<br>
/opt/openmpi/lib/libmpi_cxx.so.0 -&gt; libmpi_cxx.so.0.0.1
<br>
-rwxr-xr-x 1 root root 137442 Jun 24 15:50 /opt/openmpi/lib/libmpi_cxx.so.0.0.1
<br>
<p>PATH and LD_LIBRARY_PATH contain the correct paths:
<br>
jody_at_aim-squid_0 ~/progs $ echo $PATH
<br>
/opt/openmpi/bin:/usr/local/bin:/usr/local/bin:/usr/bin:/bin:/opt/bin:/usr/x86_64-pc-linux-gnu/gcc-bin/4.4.4
<br>
jody_at_aim-squid_0 ~/progs $ echo $LD_LIBRARY_PATH
<br>
/opt/openmpi/lib:
<br>
<p>AM i missing something?
<br>
<p>Thank You
<br>
&nbsp;&nbsp;jody
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14659.php">Siegmar Gross: "Re: [OMPI users] cannot install Open MPI 1.5 on Solaris x86_64 withOracle/Sun C 5.11"</a>
<li><strong>Previous message:</strong> <a href="14657.php">jody: "Re: [OMPI users] message truncated error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14660.php">Trent Creekmore: "Re: [OMPI users] link problem on 64bit platform"</a>
<li><strong>Reply:</strong> <a href="14660.php">Trent Creekmore: "Re: [OMPI users] link problem on 64bit platform"</a>
<li><strong>Reply:</strong> <a href="14661.php">Jeff Squyres: "Re: [OMPI users] link problem on 64bit platform"</a>
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
