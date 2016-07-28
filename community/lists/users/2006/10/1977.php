<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 13 22:22:44 2006" -->
<!-- isoreceived="20061014022244" -->
<!-- sent="Fri, 13 Oct 2006 19:22:36 -0700" -->
<!-- isosent="20061014022236" -->
<!-- name="Scott Weitzenkamp \(sweitzen\)" -->
<!-- email="sweitzen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem building static w/ 1.1.2_rc4" -->
<!-- id="A15335FBE9BD2449AF2C9EF3D1EB8EA30266F045_at_xmb-sjc-216.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] problem building static w/ 1.1.2_rc4" -->
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
<strong>From:</strong> Scott Weitzenkamp \(sweitzen\) (<em>sweitzen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-13 22:22:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1978.php">Aleph One: "Re: [OMPI users] mca_oob_tcp_accept: accept() failed with errno 24"</a>
<li><strong>Previous message:</strong> <a href="1976.php">Josh England: "[OMPI users] problem building static w/ 1.1.2_rc4"</a>
<li><strong>Maybe in reply to:</strong> <a href="1976.php">Josh England: "[OMPI users] problem building static w/ 1.1.2_rc4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1982.php">Jeff Squyres: "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
<li><strong>Reply:</strong> <a href="1982.php">Jeff Squyres: "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Shouldn't mpicc always link system libraries (like -ldl and -lsysfs)
<br>
dynamically?
<br>
<p>Scott Weitzenkamp
<br>
SQA and Release Manager
<br>
Server Virtualization Business Unit
<br>
Cisco Systems
<br>
&nbsp;
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Josh England
</span><br>
<span class="quotelev1">&gt; Sent: Friday, October 13, 2006 3:53 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] problem building static w/ 1.1.2_rc4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to statically compile a simple program, but have run into
</span><br>
<span class="quotelev1">&gt; some difficulties so far.  Trying with my own link line I get many
</span><br>
<span class="quotelev1">&gt; complaints about symbols being redefined:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_dlogin2 examples]# gcc -static -o cpi cpi.c
</span><br>
<span class="quotelev1">&gt; -I/apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/include
</span><br>
<span class="quotelev1">&gt; -L/apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib
</span><br>
<span class="quotelev1">&gt; -L/apps/torque/lib -L/usr/ofed/lib64 -lmpi -lopal -ldl -lpthread -lrt
</span><br>
<span class="quotelev1">&gt; -lorte -lopal -ltorque -lutil -libverbs -lsysfs -lm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/
</span><br>
<span class="quotelev1">&gt; libopal.a(ltdl.o)(.text+0x2ef): In function `sys_dl_open':
</span><br>
<span class="quotelev1">&gt; : warning: Using 'dlopen' in statically linked applications 
</span><br>
<span class="quotelev1">&gt; requires at
</span><br>
<span class="quotelev1">&gt; runtime the shared libraries from the glibc version used for linking
</span><br>
<span class="quotelev1">&gt; /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/
</span><br>
<span class="quotelev1">&gt; liborte.a(sys_info.o)(.text+0xa2): In function `orte_sys_info':
</span><br>
<span class="quotelev1">&gt; : warning: Using 'getpwuid' in statically linked applications requires
</span><br>
<span class="quotelev1">&gt; at runtime the shared libraries from the glibc version used 
</span><br>
<span class="quotelev1">&gt; for linking
</span><br>
<span class="quotelev1">&gt; /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/
</span><br>
<span class="quotelev1">&gt; libopal.a(if.o)(.text+0x5d9): In function `opal_ifaddrtoname':
</span><br>
<span class="quotelev1">&gt; : warning: Using 'gethostbyname' in statically linked applications
</span><br>
<span class="quotelev1">&gt; requires at runtime the shared libraries from the glibc 
</span><br>
<span class="quotelev1">&gt; version used for
</span><br>
<span class="quotelev1">&gt; linking
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.
</span><br>
<span class="quotelev1">&gt; a(malloc.o)(.text+0x1880): In function `free':
</span><br>
<span class="quotelev1">&gt; : multiple definition of `free'
</span><br>
<span class="quotelev1">&gt; /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/
</span><br>
<span class="quotelev1">&gt; libopal.a(lt1-malloc.o)(.text+0x3a8a): first defined here
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: Warning: size of symbol `free' changed from 231
</span><br>
<span class="quotelev1">&gt; in 
</span><br>
<span class="quotelev1">&gt; /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/
</span><br>
<span class="quotelev1">&gt; libopal.a(lt1-malloc.o) to 255 in 
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.
</span><br>
<span class="quotelev1">&gt; a(malloc.o)
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.
</span><br>
<span class="quotelev1">&gt; a(malloc.o)(.text+0x38d0): In function `malloc':
</span><br>
<span class="quotelev1">&gt; : multiple definition of `malloc'
</span><br>
<span class="quotelev1">&gt; /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/
</span><br>
<span class="quotelev1">&gt; libopal.a(lt1-malloc.o)(.text+0x2fd5): first defined here
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: Warning: size of symbol `malloc' changed from 319
</span><br>
<span class="quotelev1">&gt; in 
</span><br>
<span class="quotelev1">&gt; /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/
</span><br>
<span class="quotelev1">&gt; libopal.a(lt1-malloc.o) to 461 in 
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.
</span><br>
<span class="quotelev1">&gt; a(malloc.o)
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.
</span><br>
<span class="quotelev1">&gt; a(malloc.o)(.text+0x3fb0): In function `realloc':
</span><br>
<span class="quotelev1">&gt; : multiple definition of `realloc'
</span><br>
<span class="quotelev1">&gt; /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/
</span><br>
<span class="quotelev1">&gt; libopal.a(lt1-malloc.o)(.text+0x3b71): first defined here
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: Warning: size of symbol `realloc' changed from 448
</span><br>
<span class="quotelev1">&gt; in 
</span><br>
<span class="quotelev1">&gt; /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/
</span><br>
<span class="quotelev1">&gt; libopal.a(lt1-malloc.o) to 783 in 
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.
</span><br>
<span class="quotelev1">&gt; a(malloc.o)
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.
</span><br>
<span class="quotelev1">&gt; a(malloc.o)(.text+0x4c0): In function `_int_new_arena':
</span><br>
<span class="quotelev1">&gt; : multiple definition of `_int_new_arena'
</span><br>
<span class="quotelev1">&gt; /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/
</span><br>
<span class="quotelev1">&gt; libopal.a(lt1-malloc.o)(.text+0x352): first defined here
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: Warning: size of symbol `_int_new_arena' changed from 242
</span><br>
<span class="quotelev1">&gt; in 
</span><br>
<span class="quotelev1">&gt; /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/
</span><br>
<span class="quotelev1">&gt; libopal.a(lt1-malloc.o) to 224 in 
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.
</span><br>
<span class="quotelev1">&gt; a(malloc.o)
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.
</span><br>
<span class="quotelev1">&gt; a(malloc.o)(.text+0xff0): In function `_int_free':
</span><br>
<span class="quotelev1">&gt; : multiple definition of `_int_free'
</span><br>
<span class="quotelev1">&gt; /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/
</span><br>
<span class="quotelev1">&gt; libopal.a(lt1-malloc.o)(.text+0x113a): first defined here
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: Warning: size of symbol `_int_free' changed from 856
</span><br>
<span class="quotelev1">&gt; in 
</span><br>
<span class="quotelev1">&gt; /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/
</span><br>
<span class="quotelev1">&gt; libopal.a(lt1-malloc.o) to 1897 in 
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.
</span><br>
<span class="quotelev1">&gt; a(malloc.o)
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.
</span><br>
<span class="quotelev1">&gt; a(malloc.o)(.text+0x1980): In function `_int_malloc':
</span><br>
<span class="quotelev1">&gt; : multiple definition of `_int_malloc'
</span><br>
<span class="quotelev1">&gt; /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/
</span><br>
<span class="quotelev1">&gt; libopal.a(lt1-malloc.o)(.text+0x1b0a): first defined here
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: Warning: size of symbol `_int_malloc' changed from 3193
</span><br>
<span class="quotelev1">&gt; in 
</span><br>
<span class="quotelev1">&gt; /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/
</span><br>
<span class="quotelev1">&gt; libopal.a(lt1-malloc.o) to 3548 in 
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.
</span><br>
<span class="quotelev1">&gt; a(malloc.o)
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.
</span><br>
<span class="quotelev1">&gt; a(malloc.o)(.text+0x2840): In function `_int_memalign':
</span><br>
<span class="quotelev1">&gt; : multiple definition of `_int_memalign'
</span><br>
<span class="quotelev1">&gt; /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/
</span><br>
<span class="quotelev1">&gt; libopal.a(lt1-malloc.o)(.text+0x28b9): first defined here
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: Warning: size of symbol `_int_memalign' changed from 464
</span><br>
<span class="quotelev1">&gt; in 
</span><br>
<span class="quotelev1">&gt; /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/
</span><br>
<span class="quotelev1">&gt; libopal.a(lt1-malloc.o) to 524 in 
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.
</span><br>
<span class="quotelev1">&gt; a(malloc.o)
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.
</span><br>
<span class="quotelev1">&gt; a(malloc.o)(.text+0x2a50): In function `_int_valloc':
</span><br>
<span class="quotelev1">&gt; : multiple definition of `_int_valloc'
</span><br>
<span class="quotelev1">&gt; /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/
</span><br>
<span class="quotelev1">&gt; libopal.a(lt1-malloc.o)(.text+0x3d71): first defined here
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: Warning: size of symbol `_int_valloc' changed from 69
</span><br>
<span class="quotelev1">&gt; in 
</span><br>
<span class="quotelev1">&gt; /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/
</span><br>
<span class="quotelev1">&gt; libopal.a(lt1-malloc.o) to 71 in 
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.
</span><br>
<span class="quotelev1">&gt; a(malloc.o)
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.
</span><br>
<span class="quotelev1">&gt; a(malloc.o)(.text+0x2c10): In function `_int_realloc':
</span><br>
<span class="quotelev1">&gt; : multiple definition of `_int_realloc'
</span><br>
<span class="quotelev1">&gt; /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/
</span><br>
<span class="quotelev1">&gt; libopal.a(lt1-malloc.o)(.text+0x2cd8): first defined here
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: Warning: size of symbol `_int_realloc' changed from 765
</span><br>
<span class="quotelev1">&gt; in 
</span><br>
<span class="quotelev1">&gt; /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/
</span><br>
<span class="quotelev1">&gt; libopal.a(lt1-malloc.o) to 1273 in 
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.
</span><br>
<span class="quotelev1">&gt; a(malloc.o)
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.
</span><br>
<span class="quotelev1">&gt; a(malloc.o)(.text+0x42c0): In function `__malloc_check_init':
</span><br>
<span class="quotelev1">&gt; : multiple definition of `__malloc_check_init'
</span><br>
<span class="quotelev1">&gt; /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/
</span><br>
<span class="quotelev1">&gt; libopal.a(lt1-malloc.o)(.text+0x631): first defined here
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: Warning: size of symbol `__malloc_check_init' 
</span><br>
<span class="quotelev1">&gt; changed from
</span><br>
<span class="quotelev1">&gt; 141
</span><br>
<span class="quotelev1">&gt; in 
</span><br>
<span class="quotelev1">&gt; /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/
</span><br>
<span class="quotelev1">&gt; libopal.a(lt1-malloc.o) to 164 in 
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.
</span><br>
<span class="quotelev1">&gt; a(malloc.o)
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I try mpicc, its seemingly unable to find some symbols, 
</span><br>
<span class="quotelev1">&gt; even when I
</span><br>
<span class="quotelev1">&gt; add the right library:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_dlogin2 examples]# mpicc -static -o cpi cpi.c 
</span><br>
<span class="quotelev1">&gt; -L/usr/lib64 -lsysfs
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; ...  Same 'multiple definition' stuff as above, followed by:
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; /usr/ofed/lib64/libibverbs.a(src_libibverbs_la-init.o)(.text+0
</span><br>
<span class="quotelev1">&gt; x23b): In
</span><br>
<span class="quotelev1">&gt; function `ibverbs_init':
</span><br>
<span class="quotelev1">&gt; : undefined reference to `sysfs_open_class'
</span><br>
<span class="quotelev1">&gt; /usr/ofed/lib64/libibverbs.a(src_libibverbs_la-init.o)(.text+0
</span><br>
<span class="quotelev1">&gt; x2d0): In
</span><br>
<span class="quotelev1">&gt; function `ibverbs_init':
</span><br>
<span class="quotelev1">&gt; : undefined reference to `sysfs_get_class_devices'
</span><br>
<span class="quotelev1">&gt; /usr/ofed/lib64/libibverbs.a(src_libibverbs_la-init.o)(.text+0
</span><br>
<span class="quotelev1">&gt; x2e4): In
</span><br>
<span class="quotelev1">&gt; function `ibverbs_init':
</span><br>
<span class="quotelev1">&gt; : undefined reference to `dlist_start'
</span><br>
<span class="quotelev1">&gt; /usr/ofed/lib64/libibverbs.a(src_libibverbs_la-init.o)(.text+0
</span><br>
<span class="quotelev1">&gt; x2f1): In
</span><br>
<span class="quotelev1">&gt; function `ibverbs_init':
</span><br>
<span class="quotelev1">&gt; : undefined reference to `_dlist_mark_move'
</span><br>
<span class="quotelev1">&gt; /usr/ofed/lib64/libibverbs.a(src_libibverbs_la-init.o)(.text+0
</span><br>
<span class="quotelev1">&gt; x334): In
</span><br>
<span class="quotelev1">&gt; function `ibverbs_init':
</span><br>
<span class="quotelev1">&gt; : undefined reference to `sysfs_open_class_device'
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_dlogin2 examples]# nm /usr/lib64/libsysfs.a |grep
</span><br>
<span class="quotelev1">&gt; sysfs_open_class_device
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 0000000000000d60 T sysfs_open_class_device
</span><br>
<span class="quotelev1">&gt; 0000000000000170 T sysfs_open_class_device_path
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I configured ompi with '--with-openib=/usr/ofed --with-tm=/apps/torque
</span><br>
<span class="quotelev1">&gt; --enable-static --without-libnuma' .
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there something I missed doing in order to be able to 
</span><br>
<span class="quotelev1">&gt; compile static
</span><br>
<span class="quotelev1">&gt; binaries?  Any help is greatly appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -JE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------
</span><br>
<span class="quotelev1">&gt; Josh England
</span><br>
<span class="quotelev1">&gt; Sandia National Laboratory, Albuquerque, NM
</span><br>
<span class="quotelev1">&gt; Infrastructure Computing Systems
</span><br>
<span class="quotelev1">&gt; email: jjengla_at_[hidden]
</span><br>
<span class="quotelev1">&gt; phone: (505) 284-0963
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1978.php">Aleph One: "Re: [OMPI users] mca_oob_tcp_accept: accept() failed with errno 24"</a>
<li><strong>Previous message:</strong> <a href="1976.php">Josh England: "[OMPI users] problem building static w/ 1.1.2_rc4"</a>
<li><strong>Maybe in reply to:</strong> <a href="1976.php">Josh England: "[OMPI users] problem building static w/ 1.1.2_rc4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1982.php">Jeff Squyres: "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
<li><strong>Reply:</strong> <a href="1982.php">Jeff Squyres: "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
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
