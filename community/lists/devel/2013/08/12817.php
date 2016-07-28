<?
$subject_val = "[OMPI devel] Compilation error with OpenIPMI in ubntu 12.04";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 29 02:16:24 2013" -->
<!-- isoreceived="20130829061624" -->
<!-- sent="Thu, 29 Aug 2013 06:16:16 +0000" -->
<!-- isosent="20130829061616" -->
<!-- name="Rishi Kaundinya Mutnuru" -->
<!-- email="rkmutnuru_at_[hidden]" -->
<!-- subject="[OMPI devel] Compilation error with OpenIPMI in ubntu 12.04" -->
<!-- id="1e47d44ee2054390bc2dd1dc6208641c_at_BLUPR05MB053.namprd05.prod.outlook.com" -->
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
<strong>Subject:</strong> [OMPI devel] Compilation error with OpenIPMI in ubntu 12.04<br>
<strong>From:</strong> Rishi Kaundinya Mutnuru (<em>rkmutnuru_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-29 02:16:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12818.php">George Bosilca: "Re: [OMPI devel] Compilation error with OpenIPMI in ubntu 12.04"</a>
<li><strong>Previous message:</strong> <a href="12816.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12818.php">George Bosilca: "Re: [OMPI devel] Compilation error with OpenIPMI in ubntu 12.04"</a>
<li><strong>Reply:</strong> <a href="12818.php">George Bosilca: "Re: [OMPI devel] Compilation error with OpenIPMI in ubntu 12.04"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I have downladed OpenIPMI-2.0.20-rc1 and tried using for developing a hardware monitoring tool.
<br>
I am facing
<br>
&nbsp;compilation issues on ubuntu 12.04 host. I am snipping the error below with the system details.
<br>
Highly appreciate your quick response as this critical for our work.
<br>
<p><p>&lt;snip&gt;
<br>
$uname -a
<br>
Linux 3.2.0-29-generic #46-Ubuntu SMP Fri Jul 27 17:03:23 UTC 2012 x86_64 x86_64 x86_64 GNU/Linux
<br>
<p>$ lsb_release -a
<br>
No LSB modules are available.
<br>
Distributor ID: Ubuntu
<br>
Description:    Ubuntu 12.04.3 LTS
<br>
Release:        12.04
<br>
Codename:       precise
<br>
<p>jab_at_nunez-jab:~/OpenIPMI/OpenIPMI-2.0.20-rc1$&lt;mailto:jab_at_nunez-jab:~/OpenIPMI/OpenIPMI-2.0.20-rc1$&gt; gcc -v
<br>
Using built-in specs.
<br>
COLLECT_GCC=/usr/bin/gcc-4.6.real
<br>
COLLECT_LTO_WRAPPER=/usr/lib/gcc/x86_64-linux-gnu/4.6/lto-wrapper
<br>
Target: x86_64-linux-gnu
<br>
Configured with: ../src/configure -v --with-pkgversion='Ubuntu/Linaro 4.6.3-1ubuntu5' --with-bugurl=file:///usr/share/doc/gcc-4.6/README.Bugs --enable-languages=c,c++,fortran,objc,obj-c++ --prefix=/usr --program-suffix=-4.6 --enable-shared --enable-linker-build-id --with-system-zlib --libexecdir=/usr/lib --without-included-gettext --enable-threads=posix --with-gxx-include-dir=/usr/include/c++/4.6 --libdir=/usr/lib --enable-nls --with-sysroot=/ --enable-clocale=gnu --enable-libstdcxx-debug --enable-libstdcxx-time=yes --enable-gnu-unique-object --enable-plugin --enable-objc-gc --disable-werror --with-arch-32=i686 --with-tune=generic --enable-checking=release --build=x86_64-linux-gnu --host=x86_64-linux-gnu --target=x86_64-linux-gnu
<br>
Thread model: posix
<br>
gcc version 4.6.3 (Ubuntu/Linaro 4.6.3-1ubuntu5)
<br>
<p>...
<br>
....
<br>
..
<br>
bin/bash ../libtool --tag=CC   --mode=link gcc -Wall -Wsign-compare -I../include -DIPMI_CHECK_LOCKS  -g -O2 -rdynamic ../unix/libOpenIPMIposix.la  -o ipmi_sim ipmi_sim.o emu.o emu_cmd.o -lpopt libIPMIlanserv.la
<br>
libtool: link: gcc -Wall -Wsign-compare -I../include -DIPMI_CHECK_LOCKS -g -O2 -rdynamic -o .libs/ipmi_sim ipmi_sim.o emu.o emu_cmd.o  ../unix/.libs/libOpenIPMIposix.so /usr/lib/x86_64-linux-gnu/libpopt.so ./.libs/libIPMIlanserv.so -Wl,-rpath -Wl,/home/jab/OpenIPMI/opt/lib
<br>
ipmi_sim.o: In function `sleeper':
<br>
/home/jab/OpenIPMI/OpenIPMI-2.0.20-rc1/lanserv/ipmi_sim.c:968: undefined reference to `os_handler_alloc_waiter'
<br>
/home/jab/OpenIPMI/OpenIPMI-2.0.20-rc1/lanserv/ipmi_sim.c:974: undefined reference to `os_handler_waiter_wait'
<br>
/home/jab/OpenIPMI/OpenIPMI-2.0.20-rc1/lanserv/ipmi_sim.c:975: undefined reference to `os_handler_waiter_release'
<br>
ipmi_sim.o: In function `main':
<br>
/home/jab/OpenIPMI/OpenIPMI-2.0.20-rc1/lanserv/ipmi_sim.c:1190: undefined reference to `os_handler_alloc_waiter_factory'
<br>
collect2: ld returned 1 exit status
<br>
make[3]: *** [ipmi_sim] Error 1
<br>
make[3]: Leaving directory `/home/jab/OpenIPMI/OpenIPMI-2.0.20-rc1/lanserv'
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[2]: Leaving directory `/home/jab/OpenIPMI/OpenIPMI-2.0.20-rc1/lanserv'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/home/jab/OpenIPMI/OpenIPMI-2.0.20-rc1'
<br>
make: *** [all] Error 2
<br>
<p>Thanks,
<br>
Rishi
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12817/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12818.php">George Bosilca: "Re: [OMPI devel] Compilation error with OpenIPMI in ubntu 12.04"</a>
<li><strong>Previous message:</strong> <a href="12816.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12818.php">George Bosilca: "Re: [OMPI devel] Compilation error with OpenIPMI in ubntu 12.04"</a>
<li><strong>Reply:</strong> <a href="12818.php">George Bosilca: "Re: [OMPI devel] Compilation error with OpenIPMI in ubntu 12.04"</a>
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
