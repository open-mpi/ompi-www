<?
$subject_val = "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 19 14:13:15 2013" -->
<!-- isoreceived="20130119191315" -->
<!-- sent="Sun, 20 Jan 2013 03:13:10 +0800" -->
<!-- isosent="20130119191310" -->
<!-- name="Lee Eric" -->
<!-- email="openlinuxsource_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi" -->
<!-- id="CAOJJ1Zp6q7qG7yYXFd5ExrTYp+U8db9s2n5-YFx=s50voQccQA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAOJJ1ZpAiqJipFozxEhCmObJ091dLxTrdC_B0o9MENnFCFJe+A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi<br>
<strong>From:</strong> Lee Eric (<em>openlinuxsource_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-19 14:13:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21167.php">Lee Eric: "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<li><strong>Previous message:</strong> <a href="21165.php">Mike Dubman: "Re: [OMPI users] OMPI 1.6.3, InfiniBand and MTL MXM; unable to make it work!"</a>
<li><strong>In reply to:</strong> <a href="21163.php">Lee Eric: "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21167.php">Lee Eric: "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<li><strong>Reply:</strong> <a href="21167.php">Lee Eric: "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I just use --disable-mpif77 and --disable-mpif90 to let configure run
<br>
well. However, I know it's only tough workround. After configured
<br>
well, I encounter following error when run make:
<br>
<p>Making all in config
<br>
make[1]: Entering directory `/home/huli/Projects/openmpi-1.6.3/config'
<br>
make[1]: Nothing to be done for `all'.
<br>
make[1]: Leaving directory `/home/huli/Projects/openmpi-1.6.3/config'
<br>
Making all in contrib
<br>
make[1]: Entering directory `/home/huli/Projects/openmpi-1.6.3/contrib'
<br>
make[1]: Nothing to be done for `all'.
<br>
make[1]: Leaving directory `/home/huli/Projects/openmpi-1.6.3/contrib'
<br>
Making all in opal
<br>
make[1]: Entering directory `/home/huli/Projects/openmpi-1.6.3/opal'
<br>
Making all in include
<br>
make[2]: Entering directory `/home/huli/Projects/openmpi-1.6.3/opal/include'
<br>
make  all-am
<br>
make[3]: Entering directory `/home/huli/Projects/openmpi-1.6.3/opal/include'
<br>
make[3]: Leaving directory `/home/huli/Projects/openmpi-1.6.3/opal/include'
<br>
make[2]: Leaving directory `/home/huli/Projects/openmpi-1.6.3/opal/include'
<br>
Making all in libltdl
<br>
make[2]: Entering directory `/home/huli/Projects/openmpi-1.6.3/opal/libltdl'
<br>
make  all-am
<br>
make[3]: Entering directory `/home/huli/Projects/openmpi-1.6.3/opal/libltdl'
<br>
/bin/sh ./libtool  --tag=CC   --mode=compile
<br>
armv6-rpi-linux-gnueabi-gcc -DHAVE_CONFIG_H -I.
<br>
-DLT_CONFIG_H='&lt;config.h&gt;' -DLTDL -I. -I. -Ilibltdl -I./libltdl
<br>
-I./libltdl -I/home/huli/Projects/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/include
<br>
&nbsp;&nbsp;-I/usr/include/infiniband -I/usr/include/infiniband   -Ofast
<br>
-mfpu=vfp -mfloat-abi=hard -MT dlopen.lo -MD -MP -MF .deps/dlopen.Tpo
<br>
-c -o dlopen.lo `test -f 'loaders/dlopen.c' || echo
<br>
'./'`loaders/dlopen.c
<br>
/bin/sh ./libtool  --tag=CC   --mode=compile
<br>
armv6-rpi-linux-gnueabi-gcc -DHAVE_CONFIG_H -I.  -DLTDLOPEN=libltdlc
<br>
-DLT_CONFIG_H='&lt;config.h&gt;' -DLTDL -I. -I. -Ilibltdl -I./libltdl
<br>
-I./libltdl -I/home/huli/Projects/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/include
<br>
&nbsp;&nbsp;-I/usr/include/infiniband -I/usr/include/infiniband   -Ofast
<br>
-mfpu=vfp -mfloat-abi=hard -MT libltdlc_la-preopen.lo -MD -MP -MF
<br>
.deps/libltdlc_la-preopen.Tpo -c -o libltdlc_la-preopen.lo `test -f
<br>
'loaders/preopen.c' || echo './'`loaders/preopen.c
<br>
/bin/sh ./libtool  --tag=CC   --mode=compile
<br>
armv6-rpi-linux-gnueabi-gcc -DHAVE_CONFIG_H -I.  -DLTDLOPEN=libltdlc
<br>
-DLT_CONFIG_H='&lt;config.h&gt;' -DLTDL -I. -I. -Ilibltdl -I./libltdl
<br>
-I./libltdl -I/home/huli/Projects/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/include
<br>
&nbsp;&nbsp;-I/usr/include/infiniband -I/usr/include/infiniband   -Ofast
<br>
-mfpu=vfp -mfloat-abi=hard -MT libltdlc_la-lt__alloc.lo -MD -MP -MF
<br>
.deps/libltdlc_la-lt__alloc.Tpo -c -o libltdlc_la-lt__alloc.lo `test
<br>
-f 'lt__alloc.c' || echo './'`lt__alloc.c
<br>
/bin/sh ./libtool  --tag=CC   --mode=compile
<br>
armv6-rpi-linux-gnueabi-gcc -DHAVE_CONFIG_H -I.  -DLTDLOPEN=libltdlc
<br>
-DLT_CONFIG_H='&lt;config.h&gt;' -DLTDL -I. -I. -Ilibltdl -I./libltdl
<br>
-I./libltdl -I/home/huli/Projects/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/include
<br>
&nbsp;&nbsp;-I/usr/include/infiniband -I/usr/include/infiniband   -Ofast
<br>
-mfpu=vfp -mfloat-abi=hard -MT libltdlc_la-lt_dlloader.lo -MD -MP -MF
<br>
.deps/libltdlc_la-lt_dlloader.Tpo -c -o libltdlc_la-lt_dlloader.lo
<br>
`test -f 'lt_dlloader.c' || echo './'`lt_dlloader.c
<br>
/bin/sh ./libtool  --tag=CC   --mode=compile
<br>
armv6-rpi-linux-gnueabi-gcc -DHAVE_CONFIG_H -I.  -DLTDLOPEN=libltdlc
<br>
-DLT_CONFIG_H='&lt;config.h&gt;' -DLTDL -I. -I. -Ilibltdl -I./libltdl
<br>
-I./libltdl -I/home/huli/Projects/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/include
<br>
&nbsp;&nbsp;-I/usr/include/infiniband -I/usr/include/infiniband   -Ofast
<br>
-mfpu=vfp -mfloat-abi=hard -MT libltdlc_la-lt_error.lo -MD -MP -MF
<br>
.deps/libltdlc_la-lt_error.Tpo -c -o libltdlc_la-lt_error.lo `test -f
<br>
'lt_error.c' || echo './'`lt_error.c
<br>
/bin/sh ./libtool  --tag=CC   --mode=compile
<br>
armv6-rpi-linux-gnueabi-gcc -DHAVE_CONFIG_H -I.  -DLTDLOPEN=libltdlc
<br>
-DLT_CONFIG_H='&lt;config.h&gt;' -DLTDL -I. -I. -Ilibltdl -I./libltdl
<br>
-I./libltdl -I/home/huli/Projects/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/include
<br>
&nbsp;&nbsp;-I/usr/include/infiniband -I/usr/include/infiniband   -Ofast
<br>
-mfpu=vfp -mfloat-abi=hard -MT libltdlc_la-ltdl.lo -MD -MP -MF
<br>
.deps/libltdlc_la-ltdl.Tpo -c -o libltdlc_la-ltdl.lo `test -f 'ltdl.c'
<br>
|| echo './'`ltdl.c
<br>
/bin/sh ./libtool  --tag=CC   --mode=compile
<br>
armv6-rpi-linux-gnueabi-gcc -DHAVE_CONFIG_H -I.  -DLTDLOPEN=libltdlc
<br>
-DLT_CONFIG_H='&lt;config.h&gt;' -DLTDL -I. -I. -Ilibltdl -I./libltdl
<br>
-I./libltdl -I/home/huli/Projects/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/include
<br>
&nbsp;&nbsp;-I/usr/include/infiniband -I/usr/include/infiniband   -Ofast
<br>
-mfpu=vfp -mfloat-abi=hard -MT libltdlc_la-slist.lo -MD -MP -MF
<br>
.deps/libltdlc_la-slist.Tpo -c -o libltdlc_la-slist.lo `test -f
<br>
'slist.c' || echo './'`slist.c
<br>
/bin/sh ./libtool --tag=CC   --mode=compile
<br>
armv6-rpi-linux-gnueabi-gcc -DHAVE_CONFIG_H -I.
<br>
-DLT_CONFIG_H='&lt;config.h&gt;' -DLTDL -I. -I. -Ilibltdl -I./libltdl
<br>
-I./libltdl -I/home/huli/Projects/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/include
<br>
&nbsp;&nbsp;-I/usr/include/infiniband -I/usr/include/infiniband   -Ofast
<br>
-mfpu=vfp -mfloat-abi=hard -MT lt__strl.lo -MD -MP -MF
<br>
.deps/lt__strl.Tpo -c -o lt__strl.lo lt__strl.c
<br>
libtool: compile:  armv6-rpi-linux-gnueabi-gcc -DHAVE_CONFIG_H -I.
<br>
-DLTDLOPEN=libltdlc &quot;-DLT_CONFIG_H=&lt;config.h&gt;&quot; -DLTDL -I. -I.
<br>
-Ilibltdl -I./libltdl -I./libltdl
<br>
-I/home/huli/Projects/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/include
<br>
-I/usr/include/infiniband -I/usr/include/infiniband -Ofast -mfpu=vfp
<br>
-mfloat-abi=hard -MT libltdlc_la-lt__alloc.lo -MD -MP -MF
<br>
.deps/libltdlc_la-lt__alloc.Tpo -c lt__alloc.c  -fPIC -DPIC -o
<br>
.libs/libltdlc_la-lt__alloc.o
<br>
libtool: compile:  armv6-rpi-linux-gnueabi-gcc -DHAVE_CONFIG_H -I.
<br>
-DLTDLOPEN=libltdlc &quot;-DLT_CONFIG_H=&lt;config.h&gt;&quot; -DLTDL -I. -I.
<br>
-Ilibltdl -I./libltdl -I./libltdl
<br>
-I/home/huli/Projects/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/include
<br>
-I/usr/include/infiniband -I/usr/include/infiniband -Ofast -mfpu=vfp
<br>
-mfloat-abi=hard -MT libltdlc_la-preopen.lo -MD -MP -MF
<br>
.deps/libltdlc_la-preopen.Tpo -c loaders/preopen.c  -fPIC -DPIC -o
<br>
.libs/libltdlc_la-preopen.o
<br>
libtool: compile:  armv6-rpi-linux-gnueabi-gcc -DHAVE_CONFIG_H -I.
<br>
-DLTDLOPEN=libltdlc &quot;-DLT_CONFIG_H=&lt;config.h&gt;&quot; -DLTDL -I. -I.
<br>
-Ilibltdl -I./libltdl -I./libltdl
<br>
-I/home/huli/Projects/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/include
<br>
-I/usr/include/infiniband -I/usr/include/infiniband -Ofast -mfpu=vfp
<br>
-mfloat-abi=hard -MT libltdlc_la-lt_error.lo -MD -MP -MF
<br>
.deps/libltdlc_la-lt_error.Tpo -c lt_error.c  -fPIC -DPIC -o
<br>
.libs/libltdlc_la-lt_error.o
<br>
libtool: compile:  armv6-rpi-linux-gnueabi-gcc -DHAVE_CONFIG_H -I.
<br>
&quot;-DLT_CONFIG_H=&lt;config.h&gt;&quot; -DLTDL -I. -I. -Ilibltdl -I./libltdl
<br>
-I./libltdl -I/home/huli/Projects/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/include
<br>
-I/usr/include/infiniband -I/usr/include/infiniband -Ofast -mfpu=vfp
<br>
-mfloat-abi=hard -MT lt__strl.lo -MD -MP -MF .deps/lt__strl.Tpo -c
<br>
lt__strl.c  -fPIC -DPIC -o .libs/lt__strl.o
<br>
libtool: compile:  armv6-rpi-linux-gnueabi-gcc -DHAVE_CONFIG_H -I.
<br>
&quot;-DLT_CONFIG_H=&lt;config.h&gt;&quot; -DLTDL -I. -I. -Ilibltdl -I./libltdl
<br>
-I./libltdl -I/home/huli/Projects/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/include
<br>
-I/usr/include/infiniband -I/usr/include/infiniband -Ofast -mfpu=vfp
<br>
-mfloat-abi=hard -MT dlopen.lo -MD -MP -MF .deps/dlopen.Tpo -c
<br>
loaders/dlopen.c  -fPIC -DPIC -o .libs/dlopen.o
<br>
libtool: compile:  armv6-rpi-linux-gnueabi-gcc -DHAVE_CONFIG_H -I.
<br>
-DLTDLOPEN=libltdlc &quot;-DLT_CONFIG_H=&lt;config.h&gt;&quot; -DLTDL -I. -I.
<br>
-Ilibltdl -I./libltdl -I./libltdl
<br>
-I/home/huli/Projects/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/include
<br>
-I/usr/include/infiniband -I/usr/include/infiniband -Ofast -mfpu=vfp
<br>
-mfloat-abi=hard -MT libltdlc_la-lt_dlloader.lo -MD -MP -MF
<br>
.deps/libltdlc_la-lt_dlloader.Tpo -c lt_dlloader.c  -fPIC -DPIC -o
<br>
.libs/libltdlc_la-lt_dlloader.o
<br>
libtool: compile:  armv6-rpi-linux-gnueabi-gcc -DHAVE_CONFIG_H -I.
<br>
-DLTDLOPEN=libltdlc &quot;-DLT_CONFIG_H=&lt;config.h&gt;&quot; -DLTDL -I. -I.
<br>
-Ilibltdl -I./libltdl -I./libltdl
<br>
-I/home/huli/Projects/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/include
<br>
-I/usr/include/infiniband -I/usr/include/infiniband -Ofast -mfpu=vfp
<br>
-mfloat-abi=hard -MT libltdlc_la-ltdl.lo -MD -MP -MF
<br>
.deps/libltdlc_la-ltdl.Tpo -c ltdl.c  -fPIC -DPIC -o
<br>
.libs/libltdlc_la-ltdl.o
<br>
libtool: compile:  armv6-rpi-linux-gnueabi-gcc -DHAVE_CONFIG_H -I.
<br>
-DLTDLOPEN=libltdlc &quot;-DLT_CONFIG_H=&lt;config.h&gt;&quot; -DLTDL -I. -I.
<br>
-Ilibltdl -I./libltdl -I./libltdl
<br>
-I/home/huli/Projects/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/include
<br>
-I/usr/include/infiniband -I/usr/include/infiniband -Ofast -mfpu=vfp
<br>
-mfloat-abi=hard -MT libltdlc_la-slist.lo -MD -MP -MF
<br>
.deps/libltdlc_la-slist.Tpo -c slist.c  -fPIC -DPIC -o
<br>
.libs/libltdlc_la-slist.o
<br>
mv -f .deps/dlopen.Tpo .deps/dlopen.Plo
<br>
/bin/sh ./libtool --tag=CC   --mode=link armv6-rpi-linux-gnueabi-gcc
<br>
-Ofast -mfpu=vfp -mfloat-abi=hard -module -avoid-version  -o dlopen.la
<br>
&nbsp;dlopen.lo -ldl -ldl -lrt -lnsl  -lutil -lm
<br>
mv -f .deps/libltdlc_la-lt__alloc.Tpo .deps/libltdlc_la-lt__alloc.Plo
<br>
mv -f .deps/lt__strl.Tpo .deps/lt__strl.Plo
<br>
mv -f .deps/libltdlc_la-lt_error.Tpo .deps/libltdlc_la-lt_error.Plo
<br>
mv -f .deps/libltdlc_la-preopen.Tpo .deps/libltdlc_la-preopen.Plo
<br>
mv -f .deps/libltdlc_la-lt_dlloader.Tpo .deps/libltdlc_la-lt_dlloader.Plo
<br>
libtool: link: armv6-rpi-linux-gnueabi-ar cru .libs/dlopen.a .libs/dlopen.o
<br>
libtool: link: armv6-rpi-linux-gnueabi-ranlib .libs/dlopen.a
<br>
mv -f .deps/libltdlc_la-slist.Tpo .deps/libltdlc_la-slist.Plo
<br>
libtool: link: ( cd &quot;.libs&quot; &amp;&amp; rm -f &quot;dlopen.la&quot; &amp;&amp; ln -s
<br>
&quot;../dlopen.la&quot; &quot;dlopen.la&quot; )
<br>
mv -f .deps/libltdlc_la-ltdl.Tpo .deps/libltdlc_la-ltdl.Plo
<br>
/bin/sh ./libtool --tag=CC   --mode=link armv6-rpi-linux-gnueabi-gcc
<br>
-Ofast -mfpu=vfp -mfloat-abi=hard -no-undefined -dlpreopen dlopen.la
<br>
-o libltdlc.la  libltdlc_la-preopen.lo libltdlc_la-lt__alloc.lo
<br>
libltdlc_la-lt_dlloader.lo libltdlc_la-lt_error.lo libltdlc_la-ltdl.lo
<br>
libltdlc_la-slist.lo lt__strl.lo -ldl -lrt -lnsl  -lutil -lm
<br>
libtool: link: rm -f .libs/libltdlc.nm .libs/libltdlc.nmS .libs/libltdlc.nmT
<br>
libtool: link: (cd .libs &amp;&amp; armv6-rpi-linux-gnueabi-gcc -Ofast
<br>
-mfpu=vfp -mfloat-abi=hard -c -fno-builtin  -fPIC -DPIC &quot;libltdlcS.c&quot;)
<br>
libtool: link: rm -f &quot;.libs/libltdlcS.c&quot; &quot;.libs/libltdlc.nm&quot;
<br>
&quot;.libs/libltdlc.nmS&quot; &quot;.libs/libltdlc.nmT&quot;
<br>
libtool: link: (cd .libs/libltdlc.lax/dlopen.a &amp;&amp;
<br>
armv6-rpi-linux-gnueabi-ar x
<br>
&quot;/home/huli/Projects/openmpi-1.6.3/opal/libltdl/./.libs/dlopen.a&quot;)
<br>
libtool: link: armv6-rpi-linux-gnueabi-ar cru .libs/libltdlc.a
<br>
.libs/libltdlc_la-preopen.o .libs/libltdlc_la-lt__alloc.o
<br>
.libs/libltdlc_la-lt_dlloader.o .libs/libltdlc_la-lt_error.o
<br>
.libs/libltdlc_la-ltdl.o .libs/libltdlc_la-slist.o .libs/lt__strl.o
<br>
.libs/libltdlcS.o  .libs/libltdlc.lax/dlopen.a/dlopen.o
<br>
libtool: link: armv6-rpi-linux-gnueabi-ranlib .libs/libltdlc.a
<br>
libtool: link: rm -fr .libs/libltdlc.lax
<br>
libtool: link: ( cd &quot;.libs&quot; &amp;&amp; rm -f &quot;libltdlc.la&quot; &amp;&amp; ln -s
<br>
&quot;../libltdlc.la&quot; &quot;libltdlc.la&quot; )
<br>
make[3]: Leaving directory `/home/huli/Projects/openmpi-1.6.3/opal/libltdl'
<br>
make[2]: Leaving directory `/home/huli/Projects/openmpi-1.6.3/opal/libltdl'
<br>
Making all in asm
<br>
make[2]: Entering directory `/home/huli/Projects/openmpi-1.6.3/opal/asm'
<br>
rm -f atomic-asm.S
<br>
&nbsp;&nbsp;CC     asm.lo
<br>
ln -s &quot;../../opal/asm/generated/atomic-local.s&quot; atomic-asm.S
<br>
&nbsp;&nbsp;CPPAS  atomic-asm.lo
<br>
atomic-asm.S: Assembler messages:
<br>
atomic-asm.S:7: Error: selected processor does not support ARM mode `dmb'
<br>
atomic-asm.S:15: Error: selected processor does not support ARM mode `dmb'
<br>
atomic-asm.S:23: Error: selected processor does not support ARM mode `dmb'
<br>
atomic-asm.S:55: Error: selected processor does not support ARM mode `dmb'
<br>
atomic-asm.S:70: Error: selected processor does not support ARM mode `dmb'
<br>
make[2]: *** [atomic-asm.lo] Error 1
<br>
make[2]: *** Waiting for unfinished jobs....
<br>
make[2]: Leaving directory `/home/huli/Projects/openmpi-1.6.3/opal/asm'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/home/huli/Projects/openmpi-1.6.3/opal'
<br>
make: *** [all-recursive] Error 1
<br>
<p>Here's my toolchain's gcc details.
<br>
<p>[huli_at_localhost openmpi-1.6.3]$ armv6-rpi-linux-gnueabi-gcc -v
<br>
Using built-in specs.
<br>
COLLECT_GCC=armv6-rpi-linux-gnueabi-gcc
<br>
COLLECT_LTO_WRAPPER=/home/huli/Projects/arm-devel-rpi/libexec/gcc/arm-rpi-linux-gnueabi/4.7.3/lto-wrapper
<br>
Target: arm-rpi-linux-gnueabi
<br>
Configured with:
<br>
/home/huli/Projects/ct-rpi/.build/src/gcc-linaro-4.7-2012.10/configure
<br>
--build=x86_64-build_unknown-linux-gnu
<br>
--host=x86_64-build_unknown-linux-gnu --target=arm-rpi-linux-gnueabi
<br>
--prefix=/home/huli/Projects/arm-devel-rpi
<br>
--with-sysroot=/home/huli/Projects/arm-devel-rpi/arm-rpi-linux-gnueabi/sysroot
<br>
--enable-languages=c,c++,fortran --with-arch=armv6zk
<br>
--with-cpu=arm1176jzf-s --with-tune=arm1176jzf-s --with-fpu=vfp
<br>
--with-float=hard --with-pkgversion='crosstool-NG 1.17.0'
<br>
--enable-__cxa_atexit --disable-libmudflap --disable-libgomp
<br>
--disable-libssp --disable-libquadmath --disable-libquadmath-support
<br>
--with-gmp=/home/huli/Projects/ct-rpi/.build/arm-rpi-linux-gnueabi/buildtools
<br>
--with-mpfr=/home/huli/Projects/ct-rpi/.build/arm-rpi-linux-gnueabi/buildtools
<br>
--with-mpc=/home/huli/Projects/ct-rpi/.build/arm-rpi-linux-gnueabi/buildtools
<br>
--with-ppl=/home/huli/Projects/ct-rpi/.build/arm-rpi-linux-gnueabi/buildtools
<br>
--with-cloog=/home/huli/Projects/ct-rpi/.build/arm-rpi-linux-gnueabi/buildtools
<br>
--with-libelf=/home/huli/Projects/ct-rpi/.build/arm-rpi-linux-gnueabi/buildtools
<br>
--with-host-libstdcxx='-static-libgcc -Wl,-Bstatic,-lstdc++,-Bdynamic
<br>
-lm -L/home/huli/Projects/ct-rpi/.build/arm-rpi-linux-gnueabi/buildtools/lib
<br>
-lpwl' --enable-threads=posix --enable-target-optspace --disable-nls
<br>
--disable-multilib
<br>
--with-local-prefix=/home/huli/Projects/arm-devel-rpi/arm-rpi-linux-gnueabi/sysroot
<br>
--enable-c99 --enable-long-long --with-float=hard
<br>
Thread model: posix
<br>
gcc version 4.7.3 20121001 (prerelease) (crosstool-NG 1.17.0)
<br>
<p>Anyone have idea?
<br>
<p>Thanks.
<br>
<p>Eric
<br>
<p>On Sun, Jan 20, 2013 at 2:05 AM, Lee Eric &lt;openlinuxsource_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The cross-compile issue I fixed. Check following source code:
</span><br>
<span class="quotelev1">&gt; opal_config_asm.m4:897: [AC_MSG_ERROR([No atomic primitives available
</span><br>
<span class="quotelev1">&gt; for $host])])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems that checks the toolchain's tuple is one of: armv7* or armv6*
</span><br>
<span class="quotelev1">&gt; or armv5*. I have recompiled my toolchain and no such error occurred.
</span><br>
<span class="quotelev1">&gt; However, I hit another issue about fortran as configure running.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** Fortran 90/95 compiler
</span><br>
<span class="quotelev1">&gt; checking for armv6-rpi-linux-gnueabi-gfortran...
</span><br>
<span class="quotelev1">&gt; armv6-rpi-linux-gnueabi-gfortran
</span><br>
<span class="quotelev1">&gt; checking whether we are using the GNU Fortran compiler... yes
</span><br>
<span class="quotelev1">&gt; checking whether armv6-rpi-linux-gnueabi-gfortran accepts -g... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran 77 compiler works... links (cross compiling)
</span><br>
<span class="quotelev1">&gt; checking armv6-rpi-linux-gnueabi-gfortran external symbol
</span><br>
<span class="quotelev1">&gt; convention... single underscore
</span><br>
<span class="quotelev1">&gt; checking if C and Fortran 77 are link compatible... yes
</span><br>
<span class="quotelev1">&gt; checking to see if F77 compiler likes the C++ exception flags...
</span><br>
<span class="quotelev1">&gt; skipped (no C++ exceptions flags)
</span><br>
<span class="quotelev1">&gt; checking to see if mpif77/mpif90 compilers need additional linker flags... none
</span><br>
<span class="quotelev1">&gt; checking if Fortran 77 compiler supports CHARACTER... yes
</span><br>
<span class="quotelev1">&gt; checking size of Fortran 77 CHARACTER... configure: error: Can not
</span><br>
<span class="quotelev1">&gt; determine size of CHARACTER when cross-compiling
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any hint? Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Jan 19, 2013 at 10:08 PM, Lee Eric &lt;openlinuxsource_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Any heads up? Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Jan 18, 2013 at 5:28 AM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev2">&gt;&gt; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 16, 2013, at 6:41 AM, Leif Lindholm &lt;Leif.Lindholm_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; That isn't, technically speaking, correct for the Raspberry Pi - but it is a workaround if you know you will never actually use the asm implementations of the atomics, but only the inline C ones..
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This sort of hides the problem that the dedicated barrier instructions were not available in ARMv6 (it used &quot;system control coprocessor operations&quot; instead.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If you ever executed the asm implementation, you would trigger an undefined instruction exception on the Pi.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hah; sweet.  Ok.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So what's the right answer?  Would it be acceptable to use a no-op for this operation on such architectures?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21167.php">Lee Eric: "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<li><strong>Previous message:</strong> <a href="21165.php">Mike Dubman: "Re: [OMPI users] OMPI 1.6.3, InfiniBand and MTL MXM; unable to make it work!"</a>
<li><strong>In reply to:</strong> <a href="21163.php">Lee Eric: "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21167.php">Lee Eric: "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<li><strong>Reply:</strong> <a href="21167.php">Lee Eric: "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
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
