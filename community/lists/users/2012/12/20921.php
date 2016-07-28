<?
$subject_val = "Re: [OMPI users] OpenMPI-1.6.3 MinGW64 buildup on Windows 7";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 04:56:29 2012" -->
<!-- isoreceived="20121212095629" -->
<!-- sent="Wed, 12 Dec 2012 10:54:18 +0100" -->
<!-- isosent="20121212095418" -->
<!-- name="Ilias Miroslav" -->
<!-- email="Miroslav.Ilias_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI-1.6.3 MinGW64 buildup on Windows 7" -->
<!-- id="C2E47DDD62F84E4CAF40AFFA65C0843C01E20CBA924F_at_MAILBOX2.umb.sk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C2E47DDD62F84E4CAF40AFFA65C0843C01E1F47A3538_at_MAILBOX2.umb.sk" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI-1.6.3 MinGW64 buildup on Windows 7<br>
<strong>From:</strong> Ilias Miroslav (<em>Miroslav.Ilias_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-12 04:54:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20922.php">Ilias Miroslav: "Re: [OMPI users] OpenMPI-1.6.3 MinGW64 buildup on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="20920.php">Ifeanyi: "[OMPI users] openmpi-1.7rc5 cannot install when build with ./configure --with-ft=cr"</a>
<li><strong>In reply to:</strong> <a href="20908.php">Ilias Miroslav: "[OMPI users] OpenMPI-1.6.3 MinGW64 buildup on Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20922.php">Ilias Miroslav: "Re: [OMPI users] OpenMPI-1.6.3 MinGW64 buildup on Windows 7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi again,
<br>
<p>in addition, I met the same compilation error on my 32-bit Windows 7 PC,  with 32-bit MinGW compilers:
<br>
<p>C:\OpenMPI-1.6.3-MinGW&gt;mingw32-make
<br>
-- The Fortran compiler identification is GNU
<br>
-- checking for type of MPI_Offset...
<br>
-- checking for type of MPI_Offset...long long
<br>
-- checking for an MPI datatype for MPI_Offset...
<br>
-- checking for an MPI datatype for MPI_Offset...MPI_LONG_LONG
<br>
-- Check for working flex...
<br>
-- Skipping MPI F77 interface
<br>
-- looking for ccp...
<br>
-- looking for ccp...not found.
<br>
-- looking for ccp...
<br>
-- looking for ccp...not found.
<br>
-- Configuring done
<br>
-- Generating done
<br>
-- Build files have been written to: C:/OpenMPI-1.6.3-MinGW
<br>
Scanning dependencies of target libopen-pal
<br>
[  1%] Building C object opal/CMakeFiles/libopen-pal.dir/datatype/opal_datatype_
<br>
pack_checksum.obj
<br>
In file included from C:/Users/milias/Downloads/openmpi-1.6.3/opal/include/opal_
<br>
config_bottom.h:258:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from C:/OpenMPI-1.6.3-MinGW/opal/include/opal_config.h:1468,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from C:\OpenMPI-1.6.3-MinGW\opal\datatype\opal_datatype_pack_ch
<br>
ecksum.c:21:
<br>
C:/Users/milias/Downloads/openmpi-1.6.3/opal/win32/win_compat.h:93:14: error: co
<br>
nflicting types for 'ssize_t'
<br>
In file included from c:\mingw\bin\../lib/gcc/mingw32/4.7.2/../../../../include/
<br>
process.h:17:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from C:/Users/milias/Downloads/openmpi-1.6.3/opal/win32/win_com
<br>
pat.h:70,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from C:/Users/milias/Downloads/openmpi-1.6.3/opal/include/opal_
<br>
config_bottom.h:258,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from C:/OpenMPI-1.6.3-MinGW/opal/include/opal_config.h:1468,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from C:\OpenMPI-1.6.3-MinGW\opal\datatype\opal_datatype_pack_ch
<br>
ecksum.c:21:
<br>
c:\mingw\bin\../lib/gcc/mingw32/4.7.2/../../../../include/sys/types.h:118:18: no
<br>
te: previous declaration of 'ssize_t' was here
<br>
In file included from C:/OpenMPI-1.6.3-MinGW/opal/include/opal_config.h:1468:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from C:\OpenMPI-1.6.3-MinGW\opal\datatype\opal_datatype_pack_ch
<br>
ecksum.c:21:
<br>
C:/Users/milias/Downloads/openmpi-1.6.3/opal/include/opal_config_bottom.h:559:0:
<br>
&nbsp;warning: &quot;PF_UNSPEC&quot; redefined [enabled by default]
<br>
In file included from C:/Users/milias/Downloads/openmpi-1.6.3/opal/win32/win_com
<br>
pat.h:68:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from C:/Users/milias/Downloads/openmpi-1.6.3/opal/include/opal_
<br>
config_bottom.h:258,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from C:/OpenMPI-1.6.3-MinGW/opal/include/opal_config.h:1468,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from C:\OpenMPI-1.6.3-MinGW\opal\datatype\opal_datatype_pack_ch
<br>
ecksum.c:21:
<br>
c:\mingw\bin\../lib/gcc/mingw32/4.7.2/../../../../include/winsock2.h:368:0: note
<br>
: this is the location of the previous definition
<br>
In file included from C:/OpenMPI-1.6.3-MinGW/opal/include/opal_config.h:1468:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from C:\OpenMPI-1.6.3-MinGW\opal\datatype\opal_datatype_pack_ch
<br>
ecksum.c:21:
<br>
C:/Users/milias/Downloads/openmpi-1.6.3/opal/include/opal_config_bottom.h:562:0:
<br>
&nbsp;warning: &quot;AF_INET6&quot; redefined [enabled by default]
<br>
In file included from C:/Users/milias/Downloads/openmpi-1.6.3/opal/win32/win_com
<br>
pat.h:68:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from C:/Users/milias/Downloads/openmpi-1.6.3/opal/include/opal_
<br>
config_bottom.h:258,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from C:/OpenMPI-1.6.3-MinGW/opal/include/opal_config.h:1468,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from C:\OpenMPI-1.6.3-MinGW\opal\datatype\opal_datatype_pack_ch
<br>
ecksum.c:21:
<br>
c:\mingw\bin\../lib/gcc/mingw32/4.7.2/../../../../include/winsock2.h:329:0: note
<br>
: this is the location of the previous definition
<br>
In file included from C:/OpenMPI-1.6.3-MinGW/opal/include/opal_config.h:1468:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from C:\OpenMPI-1.6.3-MinGW\opal\datatype\opal_datatype_pack_ch
<br>
ecksum.c:21:
<br>
C:/Users/milias/Downloads/openmpi-1.6.3/opal/include/opal_config_bottom.h:565:0:
<br>
&nbsp;warning: &quot;PF_INET6&quot; redefined [enabled by default]
<br>
In file included from C:/Users/milias/Downloads/openmpi-1.6.3/opal/win32/win_com
<br>
pat.h:68:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from C:/Users/milias/Downloads/openmpi-1.6.3/opal/include/opal_
<br>
config_bottom.h:258,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from C:/OpenMPI-1.6.3-MinGW/opal/include/opal_config.h:1468,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from C:\OpenMPI-1.6.3-MinGW\opal\datatype\opal_datatype_pack_ch
<br>
ecksum.c:21:
<br>
c:\mingw\bin\../lib/gcc/mingw32/4.7.2/../../../../include/winsock2.h:392:0: note
<br>
: this is the location of the previous definition
<br>
opal\CMakeFiles\libopen-pal.dir\build.make:57: recipe for target 'opal/CMakeFile
<br>
s/libopen-pal.dir/datatype/opal_datatype_pack_checksum.obj' failed
<br>
mingw32-make[2]: *** [opal/CMakeFiles/libopen-pal.dir/datatype/opal_datatype_pac
<br>
k_checksum.obj] Error 1
<br>
CMakeFiles\Makefile2:82: recipe for target 'opal/CMakeFiles/libopen-pal.dir/all'
<br>
&nbsp;failed
<br>
mingw32-make[1]: *** [opal/CMakeFiles/libopen-pal.dir/all] Error 2
<br>
Makefile:135: recipe for target 'all' failed
<br>
mingw32-make: *** [all] Error 2
<br>
<p>C:\OpenMPI-1.6.3-MinGW&gt;
<br>
<p><p>________________________________________
<br>
From: Ilias Miroslav
<br>
Sent: Sunday, December 09, 2012 8:52 PM
<br>
To: users_at_[hidden]
<br>
Subject: OpenMPI-1.6.3 MinGW64 buildup on Windows 7
<br>
<p>Dear experts,
<br>
<p>following README.WINDOWS.txt I am trying to install OpenMPI-1.6.3 using MinGW64 package on my 64-bit Windows 7 machine.
<br>
<p>After configuring with cmake-giu, I got these error messages below. Any help, please ? Maybe I should set up some CMake variable to cure &quot; conflicting types for 'ssize_t'&quot; ?
<br>
It seems that you support build only on 32-bit Windows platform....?
<br>
<p>Miro
<br>
<p>C:\OpenMPI-1.6.3_MinGW64&gt;mingw32-make install
<br>
-- The Fortran compiler identification is GNU
<br>
-- checking for type of MPI_Offset...
<br>
-- checking for type of MPI_Offset...long long
<br>
-- checking for an MPI datatype for MPI_Offset...
<br>
-- checking for an MPI datatype for MPI_Offset...MPI_LONG_LONG
<br>
-- Check for working flex...
<br>
-- Skipping MPI F77 interface
<br>
-- looking for ccp...
<br>
-- looking for ccp...not found.
<br>
-- looking for ccp...
<br>
-- looking for ccp...not found.
<br>
-- Configuring done
<br>
-- Generating done
<br>
-- Build files have been written to: C:/OpenMPI-1.6.3_MinGW64
<br>
Scanning dependencies of target libopen-pal
<br>
[  1%] Building C object opal/CMakeFiles/libopen-pal.dir/datatype/opal_datatype_pack_check
<br>
sum.obj
<br>
In file included from C:/Users/milias/Downloads/openmpi-1.6.3/openmpi-1.6.3/opal/include/o
<br>
pal_config_bottom.h:258:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from C:/OpenMPI-1.6.3_MinGW64/opal/include/opal_config.h:1468,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from C:\OpenMPI-1.6.3_MinGW64\opal\datatype\opal_datatype_pack_checksum.c
<br>
:21:
<br>
C:/Users/milias/Downloads/openmpi-1.6.3/openmpi-1.6.3/opal/win32/win_compat.h:93:14: error
<br>
: conflicting types for 'ssize_t'
<br>
In file included from c:\mingw64\bin\../lib/gcc/x86_64-w64-mingw32/4.7.1/../../../../x86_6
<br>
4-w64-mingw32/include/windows.h:9:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from C:/Users/milias/Downloads/openmpi-1.6.3/openmpi-1.6.3/opal/win32/win
<br>
_compat.h:59,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from C:/Users/milias/Downloads/openmpi-1.6.3/openmpi-1.6.3/opal/include/o
<br>
pal_config_bottom.h:258,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from C:/OpenMPI-1.6.3_MinGW64/opal/include/opal_config.h:1468,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from C:\OpenMPI-1.6.3_MinGW64\opal\datatype\opal_datatype_pack_checksum.c
<br>
:21:
<br>
c:\mingw64\bin\../lib/gcc/x86_64-w64-mingw32/4.7.1/../../../../x86_64-w64-mingw32/include/
<br>
_mingw.h:381:35: note: previous declaration of 'ssize_t' was here
<br>
In file included from C:/Users/milias/Downloads/openmpi-1.6.3/openmpi-1.6.3/opal/include/o
<br>
pal_config_bottom.h:258:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from C:/OpenMPI-1.6.3_MinGW64/opal/include/opal_config.h:1468,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from C:\OpenMPI-1.6.3_MinGW64\opal\datatype\opal_datatype_pack_checksum.c
<br>
:21:
<br>
C:/Users/milias/Downloads/openmpi-1.6.3/openmpi-1.6.3/opal/win32/win_compat.h:175:0: warni
<br>
ng: &quot;PATH_MAX&quot; redefined [enabled by default]
<br>
In file included from c:\mingw64\bin\../lib/gcc/x86_64-w64-mingw32/4.7.1/include-fixed/lim
<br>
its.h:169:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from c:\mingw64\bin\../lib/gcc/x86_64-w64-mingw32/4.7.1/include-fixed/sys
<br>
limits.h:7,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from c:\mingw64\bin\../lib/gcc/x86_64-w64-mingw32/4.7.1/include-fixed/lim
<br>
its.h:34,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from c:\mingw64\bin\../lib/gcc/x86_64-w64-mingw32/4.7.1/../../../../x86_6
<br>
4-w64-mingw32/include/stdlib.h:10,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from c:\mingw64\bin\../lib/gcc/x86_64-w64-mingw32/4.7.1/../../../../x86_6
<br>
4-w64-mingw32/include/intrin.h:21,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from c:\mingw64\bin\../lib/gcc/x86_64-w64-mingw32/4.7.1/../../../../x86_6
<br>
4-w64-mingw32/include/winnt.h:1472,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from c:\mingw64\bin\../lib/gcc/x86_64-w64-mingw32/4.7.1/../../../../x86_6
<br>
4-w64-mingw32/include/windef.h:139,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from c:\mingw64\bin\../lib/gcc/x86_64-w64-mingw32/4.7.1/../../../../x86_6
<br>
4-w64-mingw32/include/windows.h:69,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from C:/Users/milias/Downloads/openmpi-1.6.3/openmpi-1.6.3/opal/win32/win
<br>
_compat.h:59,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from C:/Users/milias/Downloads/openmpi-1.6.3/openmpi-1.6.3/opal/include/o
<br>
pal_config_bottom.h:258,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from C:/OpenMPI-1.6.3_MinGW64/opal/include/opal_config.h:1468,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from C:\OpenMPI-1.6.3_MinGW64\opal\datatype\opal_datatype_pack_checksum.c
<br>
:21:
<br>
c:\mingw64\bin\../lib/gcc/x86_64-w64-mingw32/4.7.1/../../../../x86_64-w64-mingw32/include/
<br>
limits.h:20:0: note: this is the location of the previous definition
<br>
In file included from C:/OpenMPI-1.6.3_MinGW64/opal/include/opal_config.h:1468:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from C:\OpenMPI-1.6.3_MinGW64\opal\datatype\opal_datatype_pack_checksum.c
<br>
:21:
<br>
C:/Users/milias/Downloads/openmpi-1.6.3/openmpi-1.6.3/opal/include/opal_config_bottom.h:55
<br>
9:0: warning: &quot;PF_UNSPEC&quot; redefined [enabled by default]
<br>
In file included from C:/Users/milias/Downloads/openmpi-1.6.3/openmpi-1.6.3/opal/win32/win
<br>
_compat.h:68:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from C:/Users/milias/Downloads/openmpi-1.6.3/openmpi-1.6.3/opal/include/o
<br>
pal_config_bottom.h:258,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from C:/OpenMPI-1.6.3_MinGW64/opal/include/opal_config.h:1468,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from C:\OpenMPI-1.6.3_MinGW64\opal\datatype\opal_datatype_pack_checksum.c
<br>
:21:
<br>
c:\mingw64\bin\../lib/gcc/x86_64-w64-mingw32/4.7.1/../../../../x86_64-w64-mingw32/include/
<br>
winsock2.h:268:0: note: this is the location of the previous definition
<br>
In file included from C:/OpenMPI-1.6.3_MinGW64/opal/include/opal_config.h:1468:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from C:\OpenMPI-1.6.3_MinGW64\opal\datatype\opal_datatype_pack_checksum.c
<br>
:21:
<br>
C:/Users/milias/Downloads/openmpi-1.6.3/openmpi-1.6.3/opal/include/opal_config_bottom.h:56
<br>
2:0: warning: &quot;AF_INET6&quot; redefined [enabled by default]
<br>
In file included from C:/Users/milias/Downloads/openmpi-1.6.3/openmpi-1.6.3/opal/win32/win
<br>
_compat.h:68:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from C:/Users/milias/Downloads/openmpi-1.6.3/openmpi-1.6.3/opal/include/o
<br>
pal_config_bottom.h:258,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from C:/OpenMPI-1.6.3_MinGW64/opal/include/opal_config.h:1468,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from C:\OpenMPI-1.6.3_MinGW64\opal\datatype\opal_datatype_pack_checksum.c
<br>
:21:
<br>
c:\mingw64\bin\../lib/gcc/x86_64-w64-mingw32/4.7.1/../../../../x86_64-w64-mingw32/include/
<br>
winsock2.h:243:0: note: this is the location of the previous definition
<br>
In file included from C:/OpenMPI-1.6.3_MinGW64/opal/include/opal_config.h:1468:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from C:\OpenMPI-1.6.3_MinGW64\opal\datatype\opal_datatype_pack_checksum.c
<br>
:21:
<br>
C:/Users/milias/Downloads/openmpi-1.6.3/openmpi-1.6.3/opal/include/opal_config_bottom.h:56
<br>
5:0: warning: &quot;PF_INET6&quot; redefined [enabled by default]
<br>
In file included from C:/Users/milias/Downloads/openmpi-1.6.3/openmpi-1.6.3/opal/win32/win
<br>
_compat.h:68:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from C:/Users/milias/Downloads/openmpi-1.6.3/openmpi-1.6.3/opal/include/o
<br>
pal_config_bottom.h:258,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from C:/OpenMPI-1.6.3_MinGW64/opal/include/opal_config.h:1468,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from C:\OpenMPI-1.6.3_MinGW64\opal\datatype\opal_datatype_pack_checksum.c
<br>
:21:
<br>
c:\mingw64\bin\../lib/gcc/x86_64-w64-mingw32/4.7.1/../../../../x86_64-w64-mingw32/include/
<br>
winsock2.h:292:0: note: this is the location of the previous definition
<br>
mingw32-make[2]: *** [opal/CMakeFiles/libopen-pal.dir/datatype/opal_datatype_pack_checksum
<br>
.obj] Error 1
<br>
mingw32-make[1]: *** [opal/CMakeFiles/libopen-pal.dir/all] Error 2
<br>
mingw32-make: *** [all] Error 2
<br>
<p>C:\OpenMPI-1.6.3_MinGW64&gt;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20922.php">Ilias Miroslav: "Re: [OMPI users] OpenMPI-1.6.3 MinGW64 buildup on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="20920.php">Ifeanyi: "[OMPI users] openmpi-1.7rc5 cannot install when build with ./configure --with-ft=cr"</a>
<li><strong>In reply to:</strong> <a href="20908.php">Ilias Miroslav: "[OMPI users] OpenMPI-1.6.3 MinGW64 buildup on Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20922.php">Ilias Miroslav: "Re: [OMPI users] OpenMPI-1.6.3 MinGW64 buildup on Windows 7"</a>
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
