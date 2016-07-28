<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Oct 14 09:35:32 2006" -->
<!-- isoreceived="20061014133532" -->
<!-- sent="Sat, 14 Oct 2006 09:35:23 -0400" -->
<!-- isosent="20061014133523" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem building static w/ 1.1.2_rc4" -->
<!-- id="DFD3D0A1-EDF1-4C49-A6C1-754F23A09E11_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A15335FBE9BD2449AF2C9EF3D1EB8EA30266F045_at_xmb-sjc-216.amer.cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-14 09:35:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1983.php">Josh England: "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
<li><strong>Previous message:</strong> <a href="1981.php">Jeff Squyres: "Re: [OMPI users] PBS problem with OpenMP- only one processor used"</a>
<li><strong>In reply to:</strong> <a href="1977.php">Scott Weitzenkamp \(sweitzen\): "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1983.php">Josh England: "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
<li><strong>Reply:</strong> <a href="1983.php">Josh England: "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
<li><strong>Reply:</strong> <a href="1984.php">Josh England: "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It also depends on what exactly you mean by &quot;static binaries&quot; (see  
<br>
below).
<br>
<p>To fill in the background for those on the list, we had some prior  
<br>
off-list e-mail about static builds where I said:
<br>
<p>-----
<br>
Keep in mind that &quot;--disable-shared --enable-static&quot; on OMPI's  
<br>
configure line refers to how *Open MPI's libraries are built*; it  
<br>
does not refer to how Open MPI's libraries or executables are linked  
<br>
to external libraries (we didn't make this up; it's a GNU standard).   
<br>
For example, I just did a &quot;--disable-shared --enable-static&quot; build on  
<br>
my machine.  Running ldd on the generated &quot;mpirun&quot;, I see that it is  
<br>
fully static with respect to all OMPI components/libraries, but it  
<br>
still links to a variety of other shared libraries:
<br>
<p>shell$ ldd mpirun
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnuma.so.1 =&gt; /usr/lib64/libnuma.so.1 (0x0000003af3a00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib64/libdl.so.2 (0x0000002a95585000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x0000003af9300000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib64/libutil.so.1 (0x0000003af9500000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib64/tls/libm.so.6 (0x0000003af3f00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/tls/libpthread.so.0  
<br>
(0x0000003af4700000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/tls/libc.so.6 (0x0000003af3c00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x0000003af3800000)
<br>
<p>[...snipped...]
<br>
<p>Typically, one would use the &quot;-static&quot; (or your compiler's  
<br>
equivalent) flag to produce fully static executables.  I was unable  
<br>
to make this work on my development systems, however; it seems that  
<br>
some Linux system calls *require* shared libraries (I'm not sure  
<br>
why).  For example:
<br>
<p>[...failed link line omitted, similar to what Josh showed...]
<br>
<p>Let me know if this is a priority for you and I can poke around  
<br>
further. I'm guessing that your main goal is with regards to  
<br>
libtorque, and the other system libraries aren't that important.
<br>
-----
<br>
<p>With that background, a few questions on this mail:
<br>
<p>- You mentioned that you used &quot;--enable-static&quot; but you did not use  
<br>
&quot;--disable-shared&quot;.  Did you intend to build both the static and  
<br>
dynamic OMPI libraries?
<br>
<p>- What exactly is your intent: a) do you want 100% static executables  
<br>
(to include the normal Linux system libraries), b) do you just want  
<br>
to avoid having to set LD_LIBRARY_PATH for some of the esoteric  
<br>
libraries such as libmpi, libtorque, libibverbs, etc., or c)  
<br>
something else?
<br>
<p>Given the messages from the linker and my prior mail, I'm not sure  
<br>
that a) is possible -- it will require more poking around to know for  
<br>
sure.  b) is definitely possible simply by using --enable-static and  
<br>
--disable-shared and then using &quot;mpicc&quot; (and friends) as normal.   
<br>
OMPI will be built statically (to include torque and libibverbs,  
<br>
assuming you have .a's versions of both of those), but as Scott  
<br>
mentioned, system libraries such as dl and sysfs will be linked  
<br>
dynamically.
<br>
<p><p>On Oct 13, 2006, at 10:22 PM, Scott Weitzenkamp ((sweitzen)) wrote:
<br>
<p><span class="quotelev1">&gt; Shouldn't mpicc always link system libraries (like -ldl and -lsysfs)
</span><br>
<span class="quotelev1">&gt; dynamically?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scott Weitzenkamp
</span><br>
<span class="quotelev1">&gt; SQA and Release Manager
</span><br>
<span class="quotelev1">&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Josh England
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Friday, October 13, 2006 3:53 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] problem building static w/ 1.1.2_rc4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to statically compile a simple program, but have run into
</span><br>
<span class="quotelev2">&gt;&gt; some difficulties so far.  Trying with my own link line I get many
</span><br>
<span class="quotelev2">&gt;&gt; complaints about symbols being redefined:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_dlogin2 examples]# gcc -static -o cpi cpi.c
</span><br>
<span class="quotelev2">&gt;&gt; -I/apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/include
</span><br>
<span class="quotelev2">&gt;&gt; -L/apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib
</span><br>
<span class="quotelev2">&gt;&gt; -L/apps/torque/lib -L/usr/ofed/lib64 -lmpi -lopal -ldl -lpthread -lrt
</span><br>
<span class="quotelev2">&gt;&gt; -lorte -lopal -ltorque -lutil -libverbs -lsysfs -lm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/
</span><br>
<span class="quotelev2">&gt;&gt; libopal.a(ltdl.o)(.text+0x2ef): In function `sys_dl_open':
</span><br>
<span class="quotelev2">&gt;&gt; : warning: Using 'dlopen' in statically linked applications
</span><br>
<span class="quotelev2">&gt;&gt; requires at
</span><br>
<span class="quotelev2">&gt;&gt; runtime the shared libraries from the glibc version used for linking
</span><br>
<span class="quotelev2">&gt;&gt; /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/
</span><br>
<span class="quotelev2">&gt;&gt; liborte.a(sys_info.o)(.text+0xa2): In function `orte_sys_info':
</span><br>
<span class="quotelev2">&gt;&gt; : warning: Using 'getpwuid' in statically linked applications  
</span><br>
<span class="quotelev2">&gt;&gt; requires
</span><br>
<span class="quotelev2">&gt;&gt; at runtime the shared libraries from the glibc version used
</span><br>
<span class="quotelev2">&gt;&gt; for linking
</span><br>
<span class="quotelev2">&gt;&gt; /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/
</span><br>
<span class="quotelev2">&gt;&gt; libopal.a(if.o)(.text+0x5d9): In function `opal_ifaddrtoname':
</span><br>
<span class="quotelev2">&gt;&gt; : warning: Using 'gethostbyname' in statically linked applications
</span><br>
<span class="quotelev2">&gt;&gt; requires at runtime the shared libraries from the glibc
</span><br>
<span class="quotelev2">&gt;&gt; version used for
</span><br>
<span class="quotelev2">&gt;&gt; linking
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.
</span><br>
<span class="quotelev2">&gt;&gt; a(malloc.o)(.text+0x1880): In function `free':
</span><br>
<span class="quotelev2">&gt;&gt; : multiple definition of `free'
</span><br>
<span class="quotelev2">&gt;&gt; /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/
</span><br>
<span class="quotelev2">&gt;&gt; libopal.a(lt1-malloc.o)(.text+0x3a8a): first defined here
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: Warning: size of symbol `free' changed from 231
</span><br>
<span class="quotelev2">&gt;&gt; in
</span><br>
<span class="quotelev2">&gt;&gt; /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/
</span><br>
<span class="quotelev2">&gt;&gt; libopal.a(lt1-malloc.o) to 255 in
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.
</span><br>
<span class="quotelev2">&gt;&gt; a(malloc.o)
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.
</span><br>
<span class="quotelev2">&gt;&gt; a(malloc.o)(.text+0x38d0): In function `malloc':
</span><br>
<span class="quotelev2">&gt;&gt; : multiple definition of `malloc'
</span><br>
<span class="quotelev2">&gt;&gt; /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/
</span><br>
<span class="quotelev2">&gt;&gt; libopal.a(lt1-malloc.o)(.text+0x2fd5): first defined here
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: Warning: size of symbol `malloc' changed from 319
</span><br>
<span class="quotelev2">&gt;&gt; in
</span><br>
<span class="quotelev2">&gt;&gt; /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/
</span><br>
<span class="quotelev2">&gt;&gt; libopal.a(lt1-malloc.o) to 461 in
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.
</span><br>
<span class="quotelev2">&gt;&gt; a(malloc.o)
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.
</span><br>
<span class="quotelev2">&gt;&gt; a(malloc.o)(.text+0x3fb0): In function `realloc':
</span><br>
<span class="quotelev2">&gt;&gt; : multiple definition of `realloc'
</span><br>
<span class="quotelev2">&gt;&gt; /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/
</span><br>
<span class="quotelev2">&gt;&gt; libopal.a(lt1-malloc.o)(.text+0x3b71): first defined here
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: Warning: size of symbol `realloc' changed from 448
</span><br>
<span class="quotelev2">&gt;&gt; in
</span><br>
<span class="quotelev2">&gt;&gt; /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/
</span><br>
<span class="quotelev2">&gt;&gt; libopal.a(lt1-malloc.o) to 783 in
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.
</span><br>
<span class="quotelev2">&gt;&gt; a(malloc.o)
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.
</span><br>
<span class="quotelev2">&gt;&gt; a(malloc.o)(.text+0x4c0): In function `_int_new_arena':
</span><br>
<span class="quotelev2">&gt;&gt; : multiple definition of `_int_new_arena'
</span><br>
<span class="quotelev2">&gt;&gt; /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/
</span><br>
<span class="quotelev2">&gt;&gt; libopal.a(lt1-malloc.o)(.text+0x352): first defined here
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: Warning: size of symbol `_int_new_arena' changed from  
</span><br>
<span class="quotelev2">&gt;&gt; 242
</span><br>
<span class="quotelev2">&gt;&gt; in
</span><br>
<span class="quotelev2">&gt;&gt; /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/
</span><br>
<span class="quotelev2">&gt;&gt; libopal.a(lt1-malloc.o) to 224 in
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.
</span><br>
<span class="quotelev2">&gt;&gt; a(malloc.o)
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.
</span><br>
<span class="quotelev2">&gt;&gt; a(malloc.o)(.text+0xff0): In function `_int_free':
</span><br>
<span class="quotelev2">&gt;&gt; : multiple definition of `_int_free'
</span><br>
<span class="quotelev2">&gt;&gt; /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/
</span><br>
<span class="quotelev2">&gt;&gt; libopal.a(lt1-malloc.o)(.text+0x113a): first defined here
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: Warning: size of symbol `_int_free' changed from 856
</span><br>
<span class="quotelev2">&gt;&gt; in
</span><br>
<span class="quotelev2">&gt;&gt; /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/
</span><br>
<span class="quotelev2">&gt;&gt; libopal.a(lt1-malloc.o) to 1897 in
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.
</span><br>
<span class="quotelev2">&gt;&gt; a(malloc.o)
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.
</span><br>
<span class="quotelev2">&gt;&gt; a(malloc.o)(.text+0x1980): In function `_int_malloc':
</span><br>
<span class="quotelev2">&gt;&gt; : multiple definition of `_int_malloc'
</span><br>
<span class="quotelev2">&gt;&gt; /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/
</span><br>
<span class="quotelev2">&gt;&gt; libopal.a(lt1-malloc.o)(.text+0x1b0a): first defined here
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: Warning: size of symbol `_int_malloc' changed from 3193
</span><br>
<span class="quotelev2">&gt;&gt; in
</span><br>
<span class="quotelev2">&gt;&gt; /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/
</span><br>
<span class="quotelev2">&gt;&gt; libopal.a(lt1-malloc.o) to 3548 in
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.
</span><br>
<span class="quotelev2">&gt;&gt; a(malloc.o)
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.
</span><br>
<span class="quotelev2">&gt;&gt; a(malloc.o)(.text+0x2840): In function `_int_memalign':
</span><br>
<span class="quotelev2">&gt;&gt; : multiple definition of `_int_memalign'
</span><br>
<span class="quotelev2">&gt;&gt; /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/
</span><br>
<span class="quotelev2">&gt;&gt; libopal.a(lt1-malloc.o)(.text+0x28b9): first defined here
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: Warning: size of symbol `_int_memalign' changed from 464
</span><br>
<span class="quotelev2">&gt;&gt; in
</span><br>
<span class="quotelev2">&gt;&gt; /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/
</span><br>
<span class="quotelev2">&gt;&gt; libopal.a(lt1-malloc.o) to 524 in
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.
</span><br>
<span class="quotelev2">&gt;&gt; a(malloc.o)
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.
</span><br>
<span class="quotelev2">&gt;&gt; a(malloc.o)(.text+0x2a50): In function `_int_valloc':
</span><br>
<span class="quotelev2">&gt;&gt; : multiple definition of `_int_valloc'
</span><br>
<span class="quotelev2">&gt;&gt; /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/
</span><br>
<span class="quotelev2">&gt;&gt; libopal.a(lt1-malloc.o)(.text+0x3d71): first defined here
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: Warning: size of symbol `_int_valloc' changed from 69
</span><br>
<span class="quotelev2">&gt;&gt; in
</span><br>
<span class="quotelev2">&gt;&gt; /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/
</span><br>
<span class="quotelev2">&gt;&gt; libopal.a(lt1-malloc.o) to 71 in
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.
</span><br>
<span class="quotelev2">&gt;&gt; a(malloc.o)
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.
</span><br>
<span class="quotelev2">&gt;&gt; a(malloc.o)(.text+0x2c10): In function `_int_realloc':
</span><br>
<span class="quotelev2">&gt;&gt; : multiple definition of `_int_realloc'
</span><br>
<span class="quotelev2">&gt;&gt; /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/
</span><br>
<span class="quotelev2">&gt;&gt; libopal.a(lt1-malloc.o)(.text+0x2cd8): first defined here
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: Warning: size of symbol `_int_realloc' changed from 765
</span><br>
<span class="quotelev2">&gt;&gt; in
</span><br>
<span class="quotelev2">&gt;&gt; /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/
</span><br>
<span class="quotelev2">&gt;&gt; libopal.a(lt1-malloc.o) to 1273 in
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.
</span><br>
<span class="quotelev2">&gt;&gt; a(malloc.o)
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.
</span><br>
<span class="quotelev2">&gt;&gt; a(malloc.o)(.text+0x42c0): In function `__malloc_check_init':
</span><br>
<span class="quotelev2">&gt;&gt; : multiple definition of `__malloc_check_init'
</span><br>
<span class="quotelev2">&gt;&gt; /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/
</span><br>
<span class="quotelev2">&gt;&gt; libopal.a(lt1-malloc.o)(.text+0x631): first defined here
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: Warning: size of symbol `__malloc_check_init'
</span><br>
<span class="quotelev2">&gt;&gt; changed from
</span><br>
<span class="quotelev2">&gt;&gt; 141
</span><br>
<span class="quotelev2">&gt;&gt; in
</span><br>
<span class="quotelev2">&gt;&gt; /apps/x86_64/mpi/openmpi/gcc-3.4.6/openmpi-1.1.2_rc4-ofed/lib/
</span><br>
<span class="quotelev2">&gt;&gt; libopal.a(lt1-malloc.o) to 164 in
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64/libc.
</span><br>
<span class="quotelev2">&gt;&gt; a(malloc.o)
</span><br>
<span class="quotelev2">&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I try mpicc, its seemingly unable to find some symbols,
</span><br>
<span class="quotelev2">&gt;&gt; even when I
</span><br>
<span class="quotelev2">&gt;&gt; add the right library:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_dlogin2 examples]# mpicc -static -o cpi cpi.c
</span><br>
<span class="quotelev2">&gt;&gt; -L/usr/lib64 -lsysfs
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; ...  Same 'multiple definition' stuff as above, followed by:
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; /usr/ofed/lib64/libibverbs.a(src_libibverbs_la-init.o)(.text+0
</span><br>
<span class="quotelev2">&gt;&gt; x23b): In
</span><br>
<span class="quotelev2">&gt;&gt; function `ibverbs_init':
</span><br>
<span class="quotelev2">&gt;&gt; : undefined reference to `sysfs_open_class'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/ofed/lib64/libibverbs.a(src_libibverbs_la-init.o)(.text+0
</span><br>
<span class="quotelev2">&gt;&gt; x2d0): In
</span><br>
<span class="quotelev2">&gt;&gt; function `ibverbs_init':
</span><br>
<span class="quotelev2">&gt;&gt; : undefined reference to `sysfs_get_class_devices'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/ofed/lib64/libibverbs.a(src_libibverbs_la-init.o)(.text+0
</span><br>
<span class="quotelev2">&gt;&gt; x2e4): In
</span><br>
<span class="quotelev2">&gt;&gt; function `ibverbs_init':
</span><br>
<span class="quotelev2">&gt;&gt; : undefined reference to `dlist_start'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/ofed/lib64/libibverbs.a(src_libibverbs_la-init.o)(.text+0
</span><br>
<span class="quotelev2">&gt;&gt; x2f1): In
</span><br>
<span class="quotelev2">&gt;&gt; function `ibverbs_init':
</span><br>
<span class="quotelev2">&gt;&gt; : undefined reference to `_dlist_mark_move'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/ofed/lib64/libibverbs.a(src_libibverbs_la-init.o)(.text+0
</span><br>
<span class="quotelev2">&gt;&gt; x334): In
</span><br>
<span class="quotelev2">&gt;&gt; function `ibverbs_init':
</span><br>
<span class="quotelev2">&gt;&gt; : undefined reference to `sysfs_open_class_device'
</span><br>
<span class="quotelev2">&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_dlogin2 examples]# nm /usr/lib64/libsysfs.a |grep
</span><br>
<span class="quotelev2">&gt;&gt; sysfs_open_class_device
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 0000000000000d60 T sysfs_open_class_device
</span><br>
<span class="quotelev2">&gt;&gt; 0000000000000170 T sysfs_open_class_device_path
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I configured ompi with '--with-openib=/usr/ofed --with-tm=/apps/ 
</span><br>
<span class="quotelev2">&gt;&gt; torque
</span><br>
<span class="quotelev2">&gt;&gt; --enable-static --without-libnuma' .
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there something I missed doing in order to be able to
</span><br>
<span class="quotelev2">&gt;&gt; compile static
</span><br>
<span class="quotelev2">&gt;&gt; binaries?  Any help is greatly appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -JE
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Josh England
</span><br>
<span class="quotelev2">&gt;&gt; Sandia National Laboratory, Albuquerque, NM
</span><br>
<span class="quotelev2">&gt;&gt; Infrastructure Computing Systems
</span><br>
<span class="quotelev2">&gt;&gt; email: jjengla_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; phone: (505) 284-0963
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1983.php">Josh England: "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
<li><strong>Previous message:</strong> <a href="1981.php">Jeff Squyres: "Re: [OMPI users] PBS problem with OpenMP- only one processor used"</a>
<li><strong>In reply to:</strong> <a href="1977.php">Scott Weitzenkamp \(sweitzen\): "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1983.php">Josh England: "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
<li><strong>Reply:</strong> <a href="1983.php">Josh England: "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
<li><strong>Reply:</strong> <a href="1984.php">Josh England: "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
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
