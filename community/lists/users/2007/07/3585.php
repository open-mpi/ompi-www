<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul  5 16:02:11 2007" -->
<!-- isoreceived="20070705200211" -->
<!-- sent="Thu, 5 Jul 2007 16:02:07 -0400" -->
<!-- isosent="20070705200207" -->
<!-- name="Dennis McRitchie" -->
<!-- email="dmcr_at_[hidden]" -->
<!-- subject="[OMPI users] Can't get TotalView to find main program" -->
<!-- id="5927226A3D285F40AB95CA2A3D2369D401B28738_at_EXCLUSTER.pu.win.princeton.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="350B898AB2BACD4980AC3DAFB99294F70A5B70_at_XCH-NW-4V2.nw.nos.boeing.com" -->
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
<strong>From:</strong> Dennis McRitchie (<em>dmcr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-05 16:02:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3586.php">Don Kerr: "[OMPI users] Exclude/Include HCA with OpenIB BTL ?"</a>
<li><strong>Previous message:</strong> <a href="3584.php">Robert Latham: "Re: [OMPI users] nfs romio"</a>
<li><strong>In reply to:</strong> <a href="3583.php">Yip, Elizabeth L: "Re: [OMPI users] Absoft compilation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3602.php">Jeff Squyres: "Re: [OMPI users] Can't get TotalView to find main program"</a>
<li><strong>Reply:</strong> <a href="3602.php">Jeff Squyres: "Re: [OMPI users] Can't get TotalView to find main program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm trying to get TotalView to work using OpenMPI with a simple
<br>
1-processor test program. I have tried building it using both OpenMPI
<br>
1.1.4 and 1.2.3, with the -g option. This is on two RedHat EL4 systems,
<br>
one a 32-bit system, and one a 64-bit system. Each executable is built
<br>
on its own system. I then use the command:
<br>
<p>mpirun -tv -np 1 /path/to/my/MPI/test/program
<br>
<p>or
<br>
<p>totalview mpirun -a -np 1 /path/to/my/MPI/test/program
<br>
<p>By following the OpenMPI docs
<br>
(<a href="http://www.open-mpi.org/faq/?category=running#run-with-tv">http://www.open-mpi.org/faq/?category=running#run-with-tv</a>), TV will
<br>
start mpirun (actually, orterun), and then state that it can't find my
<br>
main program, as shown below in the output on the 32-bit system:
<br>
<p>vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv
<br>
<span class="quotelev1">&gt; totalview mpirun -a -np 1 /path/to/my/MPI/test/program
</span><br>
Linux x86 TotalView 8.1.0-0
<br>
Copyright 2007 by TotalView Technologies, LLC. ALL RIGHTS RESERVED.
<br>
Copyright 1999-2007 by Etnus, LLC.
<br>
Copyright 1999 by Etnus, Inc.
<br>
Copyright 1996-1998 by Dolphin Interconnect Solutions, Inc.
<br>
Copyright 1989-1996 by BBN Inc.
<br>
Reading symbols for process 1, executing &quot;mpirun&quot;
<br>
Library /usr/local/openmpi/1.1.4/intel/i386/bin/orterun, with 2 asects,
<br>
was linked at 0x08048000, and initially loaded at 0x90000000
<br>
WARNING: Invalid .gnu_debuglink checksum for file
<br>
'/usr/lib/debug/usr/local/openmpi/1.1.4/intel/i386/bin/orterun.debug' is
<br>
3fb29221, expected fa794855
<br>
Mapping 3031 bytes of ELF string data from
<br>
'/usr/local/openmpi/1.1.4/intel/i386/bin/orterun'...done
<br>
Indexing 4 bytes of DWARF '.eh_frame' symbols from
<br>
'/usr/local/openmpi/1.1.4/intel/i386/bin/orterun'...done
<br>
Library /usr/local/openmpi/1.1.4/intel/i386/lib/liborte.so.0, with 2
<br>
asects, was linked at 0x00000000, and initially loaded at 0x90022d00
<br>
WARNING: Invalid .gnu_debuglink checksum for file
<br>
'/usr/lib/debug/usr/local/openmpi/1.1.4/intel/i386/lib/liborte.so.0.0.0.
<br>
debug' is d24f7322, expected 2e59816b
<br>
Mapping 32483 bytes of ELF string data from
<br>
'/usr/local/openmpi/1.1.4/intel/i386/lib/liborte.so.0'...done
<br>
Indexing 4 bytes of DWARF '.eh_frame' symbols from
<br>
'/usr/local/openmpi/1.1.4/intel/i386/lib/liborte.so.0'...done
<br>
Library /usr/lib/libtorque.so.0, with 2 asects, was linked at
<br>
0x00456000, and initially loaded at 0x900b0500
<br>
Mapping 6778 bytes of ELF string data from
<br>
'/usr/lib/libtorque.so.0'...done
<br>
Indexing 4 bytes of DWARF '.eh_frame' symbols from
<br>
'/usr/lib/libtorque.so.0'...done
<br>
Library /usr/local/openmpi/1.1.4/intel/i386/lib/libopal.so.0, with 2
<br>
asects, was linked at 0x00000000, and initially loaded at 0x900ea400
<br>
WARNING: Invalid .gnu_debuglink checksum for file
<br>
'/usr/lib/debug/usr/local/openmpi/1.1.4/intel/i386/lib/libopal.so.0.0.0.
<br>
debug' is 4a2fe1c5, expected 17575d23
<br>
Mapping 9597 bytes of ELF string data from
<br>
'/usr/local/openmpi/1.1.4/intel/i386/lib/libopal.so.0'...done
<br>
Indexing 4 bytes of DWARF '.eh_frame' symbols from
<br>
'/usr/local/openmpi/1.1.4/intel/i386/lib/libopal.so.0'...done
<br>
Library /lib/libnsl.so.1, with 2 asects, was linked at 0x04a92000, and
<br>
initially loaded at 0x9012a900
<br>
Mapping 3146 bytes of ELF string data from '/lib/libnsl.so.1'...done
<br>
Indexing 4 bytes of DWARF '.eh_frame' symbols from
<br>
'/lib/libnsl.so.1'...done
<br>
Library /lib/libutil.so.1, with 2 asects, was linked at 0x00343000, and
<br>
initially loaded at 0x9013ee00
<br>
Mapping 407 bytes of ELF string data from '/lib/libutil.so.1'...done
<br>
Indexing 4 bytes of DWARF '.eh_frame' symbols from
<br>
'/lib/libutil.so.1'...done
<br>
Library /lib/tls/libm.so.6, with 2 asects, was linked at 0x00bbb000, and
<br>
initially loaded at 0x90140800
<br>
Mapping 1996 bytes of ELF string data from '/lib/tls/libm.so.6'...done
<br>
Indexing 4 bytes of DWARF '.eh_frame' symbols from
<br>
'/lib/tls/libm.so.6'...done
<br>
Library /lib/libgcc_s.so.1, with 2 asects, was linked at 0x00456000, and
<br>
initially loaded at 0x90161700
<br>
Mapping 1403 bytes of ELF string data from '/lib/libgcc_s.so.1'...done
<br>
Indexing 1404 bytes of DWARF '.eh_frame' symbols from
<br>
'/lib/libgcc_s.so.1'...done
<br>
Library /lib/tls/libpthread.so.0, with 2 asects, was linked at
<br>
0x00cd1000, and initially loaded at 0x90168800
<br>
Mapping 4402 bytes of ELF string data from
<br>
'/lib/tls/libpthread.so.0'...done
<br>
Indexing 2272 bytes of DWARF '.eh_frame' symbols from
<br>
'/lib/tls/libpthread.so.0'...done
<br>
Library /lib/tls/libc.so.6, with 2 asects, was linked at 0x00a88000, and
<br>
initially loaded at 0x90178400
<br>
Mapping 20760 bytes of ELF string data from '/lib/tls/libc.so.6'...done
<br>
Indexing 16648 bytes of DWARF '.eh_frame' symbols from
<br>
'/lib/tls/libc.so.6'...done
<br>
Library /lib/libdl.so.2, with 2 asects, was linked at 0x00bb5000, and
<br>
initially loaded at 0x902a2000
<br>
Mapping 481 bytes of ELF string data from '/lib/libdl.so.2'...done
<br>
Indexing 4 bytes of DWARF '.eh_frame' symbols from
<br>
'/lib/libdl.so.2'...done
<br>
Library /opt/intel/fc/9.1.040/lib/libimf.so, with 2 asects, was linked
<br>
at 0x00000000, and initially loaded at 0x902a3c00
<br>
Mapping 38346 bytes of ELF string data from
<br>
'/opt/intel/fc/9.1.040/lib/libimf.so'...done
<br>
Library /opt/intel/fc/9.1.040/lib/libirc.so, with 2 asects, was linked
<br>
at 0x00000000, and initially loaded at 0x904e0900
<br>
Mapping 12223 bytes of ELF string data from
<br>
'/opt/intel/fc/9.1.040/lib/libirc.so'...done
<br>
Library /lib/ld-linux.so.2, with 2 asects, was linked at 0x00a6f000, and
<br>
initially loaded at 0x9000d600
<br>
Mapping 390 bytes of ELF string data from '/lib/ld-linux.so.2'...done
<br>
Indexing 348 bytes of DWARF '.eh_frame' symbols from
<br>
'/lib/ld-linux.so.2'...done
<br>
**************************************
<br>
Automatically starting orterun
<br>
**************************************
<br>
Library /lib/libnss_nis.so.2, with 2 asects, was linked at 0x00000000,
<br>
and initially loaded at 0x90520c00
<br>
Mapping 1974 bytes of ELF string data from '/lib/libnss_nis.so.2'...done
<br>
Indexing 4 bytes of DWARF '.eh_frame' symbols from
<br>
'/lib/libnss_nis.so.2'...done
<br>
Library /lib/libnss_files.so.2, with 2 asects, was linked at 0x00000000,
<br>
and initially loaded at 0x90528b00
<br>
Mapping 2020 bytes of ELF string data from
<br>
'/lib/libnss_files.so.2'...done
<br>
Indexing 4 bytes of DWARF '.eh_frame' symbols from
<br>
'/lib/libnss_files.so.2'...done
<br>
<p>[the following is the output of my program]
<br>
rank = 0, size = 1, sysname = Linux, nodename = adroit, release =
<br>
2.6.9-42.0.10.ELsmp, version = #1 SMP Tue Feb 27 07:12:58 EST 2007,
<br>
machine = i686
<br>
<p>Could not find the user's main function.
<br>
Check TV::Private::main_names in tvdinit.tvd
<br>
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
<br>
<p>The output from the 64-bit system is essentially the same, except that
<br>
the checksum warnings don't appear, and the paths are different. 
<br>
<p>tvdinit.tvd is located under the totalview root directory in
<br>
linux-x86/lib (32-bit system) or linux-x86-64/lib (64-bit system), and
<br>
appears to contain the correct main program name (&quot;main&quot;), which 'nm' is
<br>
able to display.
<br>
<p>If I don't source openmpi-totalview.tcl in .tvdrc, then I still get the
<br>
last 2 lines above, but the program doesn't start. If I tell TV to run
<br>
it, then it runs to the end. In either case, I never see any source or
<br>
assembly code, so I can't put in any breakpoints.
<br>
<p>Yet I can debug it under TotalView this way (i.e., via mpirun) when
<br>
building with and using MPICH, and I can debug it under TV with OpenMPI
<br>
if I run my program directly (i.e., not using mpirun or mpiexec).
<br>
<p>Any idea why the main program can't be found when running under mpirun?
<br>
Does openmpi need to be built with either --enable-debug or
<br>
--enable-mem-debug? The &quot;configure --help&quot; says the former is not for
<br>
general MPI users. Unclear about the latter.
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dennis
<br>
<p>Dennis McRitchie
<br>
Computational Science and Engineering Support (CSES)
<br>
Academic Services Department
<br>
Office of Information Technology
<br>
Princeton University
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3586.php">Don Kerr: "[OMPI users] Exclude/Include HCA with OpenIB BTL ?"</a>
<li><strong>Previous message:</strong> <a href="3584.php">Robert Latham: "Re: [OMPI users] nfs romio"</a>
<li><strong>In reply to:</strong> <a href="3583.php">Yip, Elizabeth L: "Re: [OMPI users] Absoft compilation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3602.php">Jeff Squyres: "Re: [OMPI users] Can't get TotalView to find main program"</a>
<li><strong>Reply:</strong> <a href="3602.php">Jeff Squyres: "Re: [OMPI users] Can't get TotalView to find main program"</a>
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
