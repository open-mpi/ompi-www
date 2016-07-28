<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 13 18:53:23 2006" -->
<!-- isoreceived="20061013225323" -->
<!-- sent="Fri, 13 Oct 2006 16:53:00 -0600" -->
<!-- isosent="20061013225300" -->
<!-- name="Josh England" -->
<!-- email="jjengla_at_[hidden]" -->
<!-- subject="[OMPI users] problem building static w/ 1.1.2_rc4" -->
<!-- id="1160779980.11741.29.camel_at_localhost" -->
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
<strong>From:</strong> Josh England (<em>jjengla_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-13 18:53:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1977.php">Scott Weitzenkamp \(sweitzen\): "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
<li><strong>Previous message:</strong> <a href="1975.php">Adam Moody: "[OMPI users] mca_oob_tcp_accept: accept() failed with errno 24"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1977.php">Scott Weitzenkamp \(sweitzen\): "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
<li><strong>Maybe reply:</strong> <a href="1977.php">Scott Weitzenkamp \(sweitzen\): "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm trying to statically compile a simple program, but have run into
<br>
some difficulties so far.  Trying with my own link line I get many
<br>
complaints about symbols being redefined:
<br>
<p>[root_at_dlogin2 examples]# gcc -static -o cpi cpi.c
<br>
-I/apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/include
<br>
-L/apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib
<br>
-L/apps/torque/lib -L/usr/ofed/lib64 -lmpi -lopal -ldl -lpthread -lrt
<br>
-lorte -lopal -ltorque -lutil -libverbs -lsysfs -lm
<br>
<p>/apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/libopal.a(ltdl.o)(.text+0x2ef): In function `sys_dl_open':
<br>
: warning: Using 'dlopen' in statically linked applications requires at
<br>
runtime the shared libraries from the glibc version used for linking
<br>
/apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/liborte.a(sys_info.o)(.text+0xa2): In function `orte_sys_info':
<br>
: warning: Using 'getpwuid' in statically linked applications requires
<br>
at runtime the shared libraries from the glibc version used for linking
<br>
/apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/libopal.a(if.o)(.text+0x5d9): In function `opal_ifaddrtoname':
<br>
: warning: Using 'gethostbyname' in statically linked applications
<br>
requires at runtime the shared libraries from the glibc version used for
<br>
linking
<br>
/usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.a(malloc.o)(.text+0x1880): In function `free':
<br>
: multiple definition of `free'
<br>
/apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/libopal.a(lt1-malloc.o)(.text+0x3a8a): first defined here
<br>
/usr/bin/ld: Warning: size of symbol `free' changed from 231
<br>
in /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/libopal.a(lt1-malloc.o) to 255 in /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.a(malloc.o)
<br>
/usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.a(malloc.o)(.text+0x38d0): In function `malloc':
<br>
: multiple definition of `malloc'
<br>
/apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/libopal.a(lt1-malloc.o)(.text+0x2fd5): first defined here
<br>
/usr/bin/ld: Warning: size of symbol `malloc' changed from 319
<br>
in /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/libopal.a(lt1-malloc.o) to 461 in /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.a(malloc.o)
<br>
/usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.a(malloc.o)(.text+0x3fb0): In function `realloc':
<br>
: multiple definition of `realloc'
<br>
/apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/libopal.a(lt1-malloc.o)(.text+0x3b71): first defined here
<br>
/usr/bin/ld: Warning: size of symbol `realloc' changed from 448
<br>
in /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/libopal.a(lt1-malloc.o) to 783 in /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.a(malloc.o)
<br>
/usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.a(malloc.o)(.text+0x4c0): In function `_int_new_arena':
<br>
: multiple definition of `_int_new_arena'
<br>
/apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/libopal.a(lt1-malloc.o)(.text+0x352): first defined here
<br>
/usr/bin/ld: Warning: size of symbol `_int_new_arena' changed from 242
<br>
in /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/libopal.a(lt1-malloc.o) to 224 in /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.a(malloc.o)
<br>
/usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.a(malloc.o)(.text+0xff0): In function `_int_free':
<br>
: multiple definition of `_int_free'
<br>
/apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/libopal.a(lt1-malloc.o)(.text+0x113a): first defined here
<br>
/usr/bin/ld: Warning: size of symbol `_int_free' changed from 856
<br>
in /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/libopal.a(lt1-malloc.o) to 1897 in /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.a(malloc.o)
<br>
/usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.a(malloc.o)(.text+0x1980): In function `_int_malloc':
<br>
: multiple definition of `_int_malloc'
<br>
/apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/libopal.a(lt1-malloc.o)(.text+0x1b0a): first defined here
<br>
/usr/bin/ld: Warning: size of symbol `_int_malloc' changed from 3193
<br>
in /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/libopal.a(lt1-malloc.o) to 3548 in /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.a(malloc.o)
<br>
/usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.a(malloc.o)(.text+0x2840): In function `_int_memalign':
<br>
: multiple definition of `_int_memalign'
<br>
/apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/libopal.a(lt1-malloc.o)(.text+0x28b9): first defined here
<br>
/usr/bin/ld: Warning: size of symbol `_int_memalign' changed from 464
<br>
in /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/libopal.a(lt1-malloc.o) to 524 in /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.a(malloc.o)
<br>
/usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.a(malloc.o)(.text+0x2a50): In function `_int_valloc':
<br>
: multiple definition of `_int_valloc'
<br>
/apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/libopal.a(lt1-malloc.o)(.text+0x3d71): first defined here
<br>
/usr/bin/ld: Warning: size of symbol `_int_valloc' changed from 69
<br>
in /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/libopal.a(lt1-malloc.o) to 71 in /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.a(malloc.o)
<br>
/usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.a(malloc.o)(.text+0x2c10): In function `_int_realloc':
<br>
: multiple definition of `_int_realloc'
<br>
/apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/libopal.a(lt1-malloc.o)(.text+0x2cd8): first defined here
<br>
/usr/bin/ld: Warning: size of symbol `_int_realloc' changed from 765
<br>
in /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/libopal.a(lt1-malloc.o) to 1273 in /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.a(malloc.o)
<br>
/usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.a(malloc.o)(.text+0x42c0): In function `__malloc_check_init':
<br>
: multiple definition of `__malloc_check_init'
<br>
/apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/libopal.a(lt1-malloc.o)(.text+0x631): first defined here
<br>
/usr/bin/ld: Warning: size of symbol `__malloc_check_init' changed from
<br>
141
<br>
in /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/libopal.a(lt1-malloc.o) to 164 in /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.a(malloc.o)
<br>
collect2: ld returned 1 exit status
<br>
<p><p>When I try mpicc, its seemingly unable to find some symbols, even when I
<br>
add the right library:
<br>
<p>[root_at_dlogin2 examples]# mpicc -static -o cpi cpi.c -L/usr/lib64 -lsysfs
<br>
...
<br>
...  Same 'multiple definition' stuff as above, followed by:
<br>
...
<br>
/usr/ofed/lib64/libibverbs.a(src_libibverbs_la-init.o)(.text+0x23b): In
<br>
function `ibverbs_init':
<br>
: undefined reference to `sysfs_open_class'
<br>
/usr/ofed/lib64/libibverbs.a(src_libibverbs_la-init.o)(.text+0x2d0): In
<br>
function `ibverbs_init':
<br>
: undefined reference to `sysfs_get_class_devices'
<br>
/usr/ofed/lib64/libibverbs.a(src_libibverbs_la-init.o)(.text+0x2e4): In
<br>
function `ibverbs_init':
<br>
: undefined reference to `dlist_start'
<br>
/usr/ofed/lib64/libibverbs.a(src_libibverbs_la-init.o)(.text+0x2f1): In
<br>
function `ibverbs_init':
<br>
: undefined reference to `_dlist_mark_move'
<br>
/usr/ofed/lib64/libibverbs.a(src_libibverbs_la-init.o)(.text+0x334): In
<br>
function `ibverbs_init':
<br>
: undefined reference to `sysfs_open_class_device'
<br>
collect2: ld returned 1 exit status
<br>
<p>[root_at_dlogin2 examples]# nm /usr/lib64/libsysfs.a |grep
<br>
sysfs_open_class_device
<br>
<p>0000000000000d60 T sysfs_open_class_device
<br>
0000000000000170 T sysfs_open_class_device_path
<br>
<p><p>I configured ompi with '--with-openib=/usr/ofed --with-tm=/apps/torque
<br>
--enable-static --without-libnuma' .
<br>
<p>Is there something I missed doing in order to be able to compile static
<br>
binaries?  Any help is greatly appreciated.
<br>
<p>-JE
<br>
<p><pre>
-- 
-----------------------------------------------
Josh England
Sandia National Laboratory, Albuquerque, NM
Infrastructure Computing Systems
email: jjengla_at_[hidden]
phone: (505) 284-0963
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1977.php">Scott Weitzenkamp \(sweitzen\): "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
<li><strong>Previous message:</strong> <a href="1975.php">Adam Moody: "[OMPI users] mca_oob_tcp_accept: accept() failed with errno 24"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1977.php">Scott Weitzenkamp \(sweitzen\): "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
<li><strong>Maybe reply:</strong> <a href="1977.php">Scott Weitzenkamp \(sweitzen\): "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
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
