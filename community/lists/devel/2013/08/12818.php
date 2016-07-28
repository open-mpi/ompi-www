<?
$subject_val = "Re: [OMPI devel] Compilation error with OpenIPMI in ubntu 12.04";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 29 06:47:09 2013" -->
<!-- isoreceived="20130829104709" -->
<!-- sent="Thu, 29 Aug 2013 12:47:07 +0200" -->
<!-- isosent="20130829104707" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compilation error with OpenIPMI in ubntu 12.04" -->
<!-- id="9F88E9CF-EB7B-4EDF-B772-FFFBDB0C78AB_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="1e47d44ee2054390bc2dd1dc6208641c_at_BLUPR05MB053.namprd05.prod.outlook.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Compilation error with OpenIPMI in ubntu 12.04<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-29 06:47:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12819.php">Ralph Castain: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>Previous message:</strong> <a href="12817.php">Rishi Kaundinya Mutnuru: "[OMPI devel] Compilation error with OpenIPMI in ubntu 12.04"</a>
<li><strong>In reply to:</strong> <a href="12817.php">Rishi Kaundinya Mutnuru: "[OMPI devel] Compilation error with OpenIPMI in ubntu 12.04"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Wrong mailing list, this one is for the development of OpenMPI. For OpenIPMI you should use openipmi-developer_at_lists.sourceforge.net.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Aug 29, 2013, at 08:16 , Rishi Kaundinya Mutnuru &lt;rkmutnuru_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I have downladed OpenIPMI-2.0.20-rc1 and tried using for developing a hardware monitoring tool.
</span><br>
<span class="quotelev1">&gt; I am facing
</span><br>
<span class="quotelev1">&gt; compilation issues on ubuntu 12.04 host. I am snipping the error below with the system details.
</span><br>
<span class="quotelev1">&gt; Highly appreciate your quick response as this critical for our work.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt; $uname -a
</span><br>
<span class="quotelev1">&gt; Linux 3.2.0-29-generic #46-Ubuntu SMP Fri Jul 27 17:03:23 UTC 2012 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; $ lsb_release -a
</span><br>
<span class="quotelev1">&gt; No LSB modules are available.
</span><br>
<span class="quotelev1">&gt; Distributor ID: Ubuntu
</span><br>
<span class="quotelev1">&gt; Description:    Ubuntu 12.04.3 LTS
</span><br>
<span class="quotelev1">&gt; Release:        12.04
</span><br>
<span class="quotelev1">&gt; Codename:       precise
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; jab_at_nunez-jab:~/OpenIPMI/OpenIPMI-2.0.20-rc1$ gcc -v
</span><br>
<span class="quotelev1">&gt; Using built-in specs.
</span><br>
<span class="quotelev1">&gt; COLLECT_GCC=/usr/bin/gcc-4.6.real
</span><br>
<span class="quotelev1">&gt; COLLECT_LTO_WRAPPER=/usr/lib/gcc/x86_64-linux-gnu/4.6/lto-wrapper
</span><br>
<span class="quotelev1">&gt; Target: x86_64-linux-gnu
</span><br>
<span class="quotelev1">&gt; Configured with: ../src/configure -v --with-pkgversion='Ubuntu/Linaro 4.6.3-1ubuntu5' --with-bugurl=file:///usr/share/doc/gcc-4.6/README.Bugs --enable-languages=c,c++,fortran,objc,obj-c++ --prefix=/usr --program-suffix=-4.6 --enable-shared --enable-linker-build-id --with-system-zlib --libexecdir=/usr/lib --without-included-gettext --enable-threads=posix --with-gxx-include-dir=/usr/include/c++/4.6 --libdir=/usr/lib --enable-nls --with-sysroot=/ --enable-clocale=gnu --enable-libstdcxx-debug --enable-libstdcxx-time=yes --enable-gnu-unique-object --enable-plugin --enable-objc-gc --disable-werror --with-arch-32=i686 --with-tune=generic --enable-checking=release --build=x86_64-linux-gnu --host=x86_64-linux-gnu --target=x86_64-linux-gnu
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; gcc version 4.6.3 (Ubuntu/Linaro 4.6.3-1ubuntu5)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; &#133;
</span><br>
<span class="quotelev1">&gt; &#133;.
</span><br>
<span class="quotelev1">&gt; ..
</span><br>
<span class="quotelev1">&gt; bin/bash ../libtool --tag=CC   --mode=link gcc -Wall -Wsign-compare -I../include -DIPMI_CHECK_LOCKS  -g -O2 -rdynamic ../unix/libOpenIPMIposix.la  -o ipmi_sim ipmi_sim.o emu.o emu_cmd.o -lpopt libIPMIlanserv.la
</span><br>
<span class="quotelev1">&gt; libtool: link: gcc -Wall -Wsign-compare -I../include -DIPMI_CHECK_LOCKS -g -O2 -rdynamic -o .libs/ipmi_sim ipmi_sim.o emu.o emu_cmd.o  ../unix/.libs/libOpenIPMIposix.so /usr/lib/x86_64-linux-gnu/libpopt.so ./.libs/libIPMIlanserv.so -Wl,-rpath -Wl,/home/jab/OpenIPMI/opt/lib
</span><br>
<span class="quotelev1">&gt; ipmi_sim.o: In function `sleeper':
</span><br>
<span class="quotelev1">&gt; /home/jab/OpenIPMI/OpenIPMI-2.0.20-rc1/lanserv/ipmi_sim.c:968: undefined reference to `os_handler_alloc_waiter'
</span><br>
<span class="quotelev1">&gt; /home/jab/OpenIPMI/OpenIPMI-2.0.20-rc1/lanserv/ipmi_sim.c:974: undefined reference to `os_handler_waiter_wait'
</span><br>
<span class="quotelev1">&gt; /home/jab/OpenIPMI/OpenIPMI-2.0.20-rc1/lanserv/ipmi_sim.c:975: undefined reference to `os_handler_waiter_release'
</span><br>
<span class="quotelev1">&gt; ipmi_sim.o: In function `main':
</span><br>
<span class="quotelev1">&gt; /home/jab/OpenIPMI/OpenIPMI-2.0.20-rc1/lanserv/ipmi_sim.c:1190: undefined reference to `os_handler_alloc_waiter_factory'
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[3]: *** [ipmi_sim] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/jab/OpenIPMI/OpenIPMI-2.0.20-rc1/lanserv'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/jab/OpenIPMI/OpenIPMI-2.0.20-rc1/lanserv'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/jab/OpenIPMI/OpenIPMI-2.0.20-rc1'
</span><br>
<span class="quotelev1">&gt; make: *** [all] Error 2
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Rishi
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12818/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12819.php">Ralph Castain: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>Previous message:</strong> <a href="12817.php">Rishi Kaundinya Mutnuru: "[OMPI devel] Compilation error with OpenIPMI in ubntu 12.04"</a>
<li><strong>In reply to:</strong> <a href="12817.php">Rishi Kaundinya Mutnuru: "[OMPI devel] Compilation error with OpenIPMI in ubntu 12.04"</a>
<!-- nextthread="start" -->
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
