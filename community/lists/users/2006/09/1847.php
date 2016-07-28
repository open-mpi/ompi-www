<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep  8 20:19:14 2006" -->
<!-- isoreceived="20060909001914" -->
<!-- sent="Fri, 8 Sep 2006 20:18:23 -0400" -->
<!-- isosent="20060909001823" -->
<!-- name="Nuno Sucena Almeida" -->
<!-- email="slug_at_[hidden]" -->
<!-- subject="[OMPI users] linux alpha ev6 openmpi 1.1.1" -->
<!-- id="200609082018.23484.slug_at_aeminium.org" -->
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
<strong>From:</strong> Nuno Sucena Almeida (<em>slug_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-08 20:18:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1848.php">Jeff Squyres: "Re: [OMPI users] Blacs tester failure due to bug in datatype_unpack.c (?)"</a>
<li><strong>Previous message:</strong> <a href="1846.php">Brian E Granger: "Re: [OMPI users] Dynamic loading of libmpi.dylib on Mac OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1880.php">Brian Barrett: "Re: [OMPI users] linux alpha ev6 openmpi 1.1.1"</a>
<li><strong>Reply:</strong> <a href="1880.php">Brian Barrett: "Re: [OMPI users] linux alpha ev6 openmpi 1.1.1"</a>
<li><strong>Reply:</strong> <a href="1881.php">Brian Barrett: "Re: [OMPI users] linux alpha ev6 openmpi 1.1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while trying to compile openmpi 1.1.1 on a linux alpha ev6 (tsunami) gentoo  
<br>
system, I had to add the following lines to config/ompi_config_asm.m4:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
alphaev6-*)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_cv_asm_arch=&quot;ALPHA&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_ASM_SUPPORT_64BIT=1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_GCC_INLINE_ASSIGN='&quot;bis zero,zero,%0&quot; : &quot;=&amp;r&quot;(ret)'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;;
<br>
<p>since my system was being detected as such , and not alpha-*
<br>
<p>I kept the alpha-* case too,i.e., I just added the previous lines.
<br>
<p>The other issue is the one described in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.mail-archive.com/debian-bugs-dist&#64;lists.debian.org/msg229867.html">http://www.mail-archive.com/debian-bugs-dist&#64;lists.debian.org/msg229867.html</a>
<br>
<p>(...)
<br>
gcc -O3 -DNDEBUG -fno-strict-aliasing -pthread -o .libs/opal_wrapper 
<br>
opal_wrapper.o -Wl,--export-dynamic  ../../../opal/.libs/libopal.so -ldl -lnsl -lutil -lm -Wl,--rpath -Wl,/opt/openmpi-1.1.1/lib
<br>
../../../opal/.libs/libopal.so: undefined reference to 
<br>
`opal_atomic_cmpset_acq_32'
<br>
../../../opal/.libs/libopal.so: undefined reference to `opal_atomic_cmpset_32'
<br>
(...)
<br>
<p><p>So I followed the described untested procedure, of changing this:
<br>
OMPI_GCC_INLINE_ASSIGN='&quot;bis zero,zero,%0&quot; : &quot;=&amp;r&quot;(ret)'
<br>
to
<br>
OMPI_GCC_INLINE_ASSIGN='&quot;bis $31,$31,%0&quot; : &quot;=&amp;r&quot;(ret)'
<br>
<p>but the configure output remains the same:
<br>
<p>checking if gcc supports GCC inline assembly... no
<br>
checking if g++ supports GCC inline assembly... no
<br>
<p>although I tried the test in a separate file:
<br>
int main(void)
<br>
{
<br>
&nbsp;&nbsp;int ret = 1;
<br>
&nbsp;&nbsp;__asm__ __volatile__ (&quot;bis $31,$31,%0&quot; : &quot;=&amp;r&quot;(ret));
<br>
&nbsp;&nbsp;printf (&quot;ret=%d\n&quot;,ret);
<br>
&nbsp;&nbsp;return ret;
<br>
}
<br>
<p>./aout
<br>
ret=0
<br>
<p>so the assembly source code is correct.
<br>
But even with this I get the same error:
<br>
<p>gcc -O3 -DNDEBUG -fno-strict-aliasing -pthread -o .libs/opal_wrapper 
<br>
opal_wrapper.o -Wl,--export-dynamic  ../../../opal/.libs/libopal.so -ldl -lnsl -lutil -lm -Wl,--rpath -Wl,/opt/openmpi-1.1.1/lib
<br>
../../../opal/.libs/libopal.so: undefined reference to 
<br>
`opal_atomic_cmpset_acq_32'
<br>
../../../opal/.libs/libopal.so: undefined reference to `opal_atomic_cmpset_32'
<br>
../../../opal/.libs/libopal.so: undefined reference to `opal_atomic_mb'
<br>
../../../opal/.libs/libopal.so: undefined reference to `opal_atomic_wmb'
<br>
collect2: ld returned 1 exit status
<br>
make[2]: *** [opal_wrapper] Error 1
<br>
make[2]: Leaving directory `/usr/src/mpi/openmpi-1.1.1/opal/tools/wrappers'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/usr/src/mpi/openmpi-1.1.1/opal'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p><p>gcc --version
<br>
gcc (GCC) 3.4.6 (Gentoo 3.4.6-r1, ssp-3.4.5-1.0, pie-8.7.9)
<br>
<p>uname -a
<br>
Linux livecd 2.6.16.19 #1 Sat Aug 12 21:24:12 UTC 2006 alpha EV6 GNU/Linux
<br>
<p>emerge --info
<br>
Portage 2.1-r2 (default-linux/alpha/2006.1, gcc-3.4.6, glibc-2.3.6-r4, 
<br>
2.6.16.19 alpha)
<br>
=================================================================
<br>
System uname: 2.6.16.19 alpha EV6
<br>
Gentoo Base System version 1.12.1
<br>
app-admin/eselect-compiler: [Not Present]
<br>
dev-lang/python:     2.4.3-r1
<br>
dev-python/pycrypto: 2.0.1-r5
<br>
dev-util/ccache:     [Not Present]
<br>
dev-util/confcache:  [Not Present]
<br>
sys-apps/sandbox:    1.2.17
<br>
sys-devel/autoconf:  2.13, 2.59-r7
<br>
sys-devel/automake:  1.4_p6, 1.5, 1.6.3, 1.7.9-r1, 1.8.5-r3, 1.9.6-r1
<br>
sys-devel/binutils:  2.16.1-r3
<br>
sys-devel/gcc-config: 1.3.13-r3
<br>
sys-devel/libtool:   1.5.22
<br>
virtual/os-headers:  2.6.11-r4
<br>
ACCEPT_KEYWORDS=&quot;alpha&quot;
<br>
AUTOCLEAN=&quot;yes&quot;
<br>
CBUILD=&quot;alpha-unknown-linux-gnu&quot;
<br>
CFLAGS=&quot;-mieee -pipe -O3 -mcpu=ev6&quot;
<br>
CHOST=&quot;alpha-unknown-linux-gnu&quot;
<br>
CONFIG_PROTECT=&quot;/etc&quot;
<br>
CONFIG_PROTECT_MASK=&quot;/etc/env.d /etc/gconf /etc/terminfo&quot;
<br>
CXXFLAGS=&quot;-mieee -pipe -O3 -mcpu=ev6&quot;
<br>
DISTDIR=&quot;/usr/portage/distfiles&quot;
<br>
FEATURES=&quot;autoconfig distlocks metadata-transfer sandbox sfperms strict&quot;
<br>
GENTOO_MIRRORS=&quot;<a href="http://distfiles.gentoo.org">http://distfiles.gentoo.org</a> 
<br>
<a href="http://distro.ibiblio.org/pub/linux/distributions/gentoo">http://distro.ibiblio.org/pub/linux/distributions/gentoo</a>&quot;
<br>
MAKEOPTS=&quot;-j2&quot;
<br>
PKGDIR=&quot;/usr/portage/packages&quot;
<br>
PORTAGE_RSYNC_OPTS=&quot;--recursive --links --safe-links --perms --times --compress --force --whole-file --delete --delete-after --stats --timeout=180 --exclude='/distfiles' --exclude='/local' --exclude='/packages'&quot;
<br>
PORTAGE_TMPDIR=&quot;/var/tmp&quot;
<br>
PORTDIR=&quot;/usr/portage&quot;
<br>
SYNC=&quot;rsync://fileserver/gentoo-portage&quot;
<br>
USE=&quot;alpha berkdb bitmap-fonts bzip2 cli crypt cups dlloader doc dri examples 
<br>
fortran gdbm hdf hdf5 ipv6 isdnlog kerberos ldap libg++ ncurses nls nptl 
<br>
nptlonly pam pcre perl ppds pppd python qt readline reflection session spl 
<br>
ssl tcpd truetype truetype-fonts type1-fonts udev unicode xml xorg zlib 
<br>
elibc_glibc input_devices_keyboard input_devices_mouse input_devices_evdev 
<br>
kernel_linux userland_GNU video_cards_cirrus video_cards_ati 
<br>
video_cards_dummy video_cards_fbdev video_cards_glint video_cards_mga 
<br>
video_cards_nv video_cards_rendition video_cards_s3 video_cards_s3virge 
<br>
video_cards_savage video_cards_siliconmotion video_cards_sisusb 
<br>
video_cards_tdfx video_cards_tga video_cards_v4l video_cards_vga 
<br>
video_cards_voodoo&quot;
<br>
Unset:  CTARGET, EMERGE_DEFAULT_OPTS, INSTALL_MASK, LANG, LC_ALL, LDFLAGS, 
<br>
LINGUAS, PORTAGE_RSYNC_EXTRA_OPTS, PORTDIR_OVERLAY
<br>
<p><pre>
-- 
<a href="http://people.bu.edu/nuno/">http://people.bu.edu/nuno/</a>
-- 
<a href="http://aeminium.org/slug/">http://aeminium.org/slug/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1848.php">Jeff Squyres: "Re: [OMPI users] Blacs tester failure due to bug in datatype_unpack.c (?)"</a>
<li><strong>Previous message:</strong> <a href="1846.php">Brian E Granger: "Re: [OMPI users] Dynamic loading of libmpi.dylib on Mac OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1880.php">Brian Barrett: "Re: [OMPI users] linux alpha ev6 openmpi 1.1.1"</a>
<li><strong>Reply:</strong> <a href="1880.php">Brian Barrett: "Re: [OMPI users] linux alpha ev6 openmpi 1.1.1"</a>
<li><strong>Reply:</strong> <a href="1881.php">Brian Barrett: "Re: [OMPI users] linux alpha ev6 openmpi 1.1.1"</a>
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
