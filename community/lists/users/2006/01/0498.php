<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan 12 17:15:52 2006" -->
<!-- isoreceived="20060112221552" -->
<!-- sent="Thu, 12 Jan 2006 14:16:42 -0800" -->
<!-- isosent="20060112221642" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="[O-MPI users] Totalview question?" -->
<!-- id="43C6D54A.8090901_at_reachone.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="43BC4697.2060602_at_reachone.com" -->
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
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-12 17:16:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0499.php">Chris Gottbrath: "Re: [O-MPI users] Totalview question?"</a>
<li><strong>Previous message:</strong> <a href="0497.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>In reply to:</strong> <a href="0476.php">Tom Rosmond: "Re: [O-MPI users] LAM vs OPENMPI performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0499.php">Chris Gottbrath: "Re: [O-MPI users] Totalview question?"</a>
<li><strong>Reply:</strong> <a href="0499.php">Chris Gottbrath: "Re: [O-MPI users] Totalview question?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I downloaded totalview 7.1.0-2 yesterday for the trial period to test it 
<br>
with my
<br>
MPI applications.  Your FAQ's suggested it was compatible with Openmpi,
<br>
although it is not listed as a supported MPI on the Entus website.  I 
<br>
recompiled
<br>
one of my fortran mpi codes with the debugging option and tried to run 
<br>
it with both the
<br>
'-a' and '-tv' methods with no success; totalview opens the openmpi program
<br>
instead.  I copied the 'openmpi-totalview.tcl' file to '$HOME/.tvdrc' as 
<br>
suggested in the
<br>
FAQ's, but then when I run totalview in addition to the normal totalview 
<br>
windows
<br>
I get a pop-up window telling me it is running /bin/bash with yes and no 
<br>
buttons,
<br>
and pushing either causes an error and totalview abort.  I have attached the
<br>
standard error from this sequence.  Have I misunderstood something in 
<br>
all this?
<br>
<p>My system:
<br>
<p>ATHLON XP
<br>
Fedora 4
<br>
intel fortran 9.0
<br>
<p>Tom R.
<br>
<p><p><p>
<p>
mpirun -tv -np 1 /home/rosmond/arsou/soulanc_base/gonog
<br>
Linux x86 TotalView 7.1.0-2
<br>
Copyright 1999-2005 by Etnus, LLC. ALL RIGHTS RESERVED.
<br>
Copyright 1999 by Etnus, Inc.
<br>
Copyright 1996-1998 by Dolphin Interconnect Solutions, Inc.
<br>
Copyright 1989-1996 by BBN Inc.
<br>
Reading symbols for process 1, executing &quot;mpirun&quot;
<br>
Library /usr/local/bin/orterun, with 2 asects, was linked at 0x08048000, and initially loaded at 0x90000000
<br>
Mapping 3071 bytes of ELF string data from '/usr/local/bin/orterun'...done
<br>
Indexing 1352 bytes of DWARF '.debug_frame' symbols from '/usr/local/bin/orterun'...done
<br>
Indexing 4 bytes of DWARF '.eh_frame' symbols from '/usr/local/bin/orterun'...done
<br>
Skimming 24636 bytes of DWARF '.debug_info' symbols from '/usr/local/bin/orterun'...done
<br>
Library /usr/local/lib/liborte.so.0, with 2 asects, was linked at 0x00000000, and initially loaded at 0x90020000
<br>
Mapping 20808 bytes of ELF string data from '/usr/local/lib/liborte.so.0'...done
<br>
Indexing 4 bytes of DWARF '.eh_frame' symbols from '/usr/local/lib/liborte.so.0'...done
<br>
Library /usr/local/lib/libopal.so.0, with 2 asects, was linked at 0x00000000, and initially loaded at 0x90052300
<br>
Mapping 15171 bytes of ELF string data from '/usr/local/lib/libopal.so.0'...done
<br>
Indexing 60 bytes of DWARF '.eh_frame' symbols from '/usr/local/lib/libopal.so.0'...done
<br>
Library /lib/libdl.so.2, with 2 asects, was linked at 0x00000000, and initially loaded at 0x90095500
<br>
Mapping 1637 bytes of ELF string data from '/lib/libdl.so.2'...done
<br>
Indexing 4 bytes of DWARF '.eh_frame' symbols from '/lib/libdl.so.2'...done
<br>
Library /lib/libm.so.6, with 2 asects, was linked at 0x00000000, and initially loaded at 0x90097300
<br>
Mapping 15951 bytes of ELF string data from '/lib/libm.so.6'...done
<br>
Indexing 2984 bytes of DWARF '.eh_frame' symbols from '/lib/libm.so.6'...done
<br>
Library /lib/libutil.so.1, with 2 asects, was linked at 0x00000000, and initially loaded at 0x900b9100
<br>
Mapping 1332 bytes of ELF string data from '/lib/libutil.so.1'...done
<br>
Indexing 4 bytes of DWARF '.eh_frame' symbols from '/lib/libutil.so.1'...done
<br>
Library /lib/libnsl.so.1, with 2 asects, was linked at 0x00000000, and initially loaded at 0x900ba900
<br>
Mapping 7736 bytes of ELF string data from '/lib/libnsl.so.1'...done
<br>
Indexing 4 bytes of DWARF '.eh_frame' symbols from '/lib/libnsl.so.1'...done
<br>
Library /lib/libpthread.so.0, with 2 asects, was linked at 0x00000000, and initially loaded at 0x900ce500
<br>
Mapping 18657 bytes of ELF string data from '/lib/libpthread.so.0'...done
<br>
Indexing 2272 bytes of DWARF '.eh_frame' symbols from '/lib/libpthread.so.0'...done
<br>
Library /lib/libc.so.6, with 2 asects, was linked at 0x00000000, and initially loaded at 0x900ddb00
<br>
Mapping 99101 bytes of ELF string data from '/lib/libc.so.6'...done
<br>
Indexing 22196 bytes of DWARF '.eh_frame' symbols from '/lib/libc.so.6'...done
<br>
Library /lib/ld-linux.so.2, with 2 asects, was linked at 0x00000000, and initially loaded at 0x90006000
<br>
Mapping 6041 bytes of ELF string data from '/lib/ld-linux.so.2'...done
<br>
Indexing 1028 bytes of DWARF '.eh_frame' symbols from '/lib/ld-linux.so.2'...done
<br>
Library @syscall_library_at_-32, with 1 asects, was linked at 0x00000000, and initially loaded at 0x90206c00
<br>
INFO: Copying library &quot;@syscall_library_at_-32&quot; into the local file cache ...
<br>
&nbsp;... Done.
<br>
Mapping 86 bytes of ELF string data from '@syscall_library_at_-32'...done
<br>
Indexing 244 bytes of DWARF '.eh_frame' symbols from '@syscall_library_at_-32'...done
<br>
**************************************
<br>
Automatically starting orterun
<br>
**************************************
<br>
Library @syscall_library_at_-32, with 1 asects, was linked at 0x00000000, and initially loaded at 0x90207300
<br>
INFO: Copying library &quot;@syscall_library_at_-32&quot; into the local file cache ...
<br>
&nbsp;... Done.
<br>
Mapping 86 bytes of ELF string data from '@syscall_library_at_-32'...done
<br>
Indexing 244 bytes of DWARF '.eh_frame' symbols from '@syscall_library_at_-32'...done
<br>
Reading symbols for process 1, executing &quot;/bin/bash&quot;
<br>
Library /bin/bash, with 2 asects, was linked at 0x08048000, and initially loaded at 0x90207a00
<br>
Mapping 28978 bytes of ELF string data from '/bin/bash'...done
<br>
Indexing 48112 bytes of DWARF '.eh_frame' symbols from '/bin/bash'...done
<br>
Library /lib/libtermcap.so.2, with 2 asects, was linked at 0x00000000, and initially loaded at 0x902b2300
<br>
Mapping 474 bytes of ELF string data from '/lib/libtermcap.so.2'...done
<br>
Indexing 4 bytes of DWARF '.eh_frame' symbols from '/lib/libtermcap.so.2'...done
<br>
CLI callback failed: TV::symbol: Invalid symbol ID: 1|58
<br>
&nbsp;&nbsp;&nbsp;&nbsp;while executing
<br>
&quot;TV::symbol get $image_id needs_s2s&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(procedure &quot;::TV::S2S::handle_image_load&quot; line 2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;invoked from within
<br>
&quot;::TV::S2S::handle_image_load 1|58&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(&quot;uplevel&quot; body line 1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;invoked from within
<br>
&quot;uplevel #0 [list ::TV::S2S::handle_image_load {1|58}]&quot;
<br>
CLI callback failed: TV::symbol: Invalid symbol ID: 1|58
<br>
&nbsp;&nbsp;&nbsp;&nbsp;while executing
<br>
&quot;TV::symbol get $loaded_id full_pathname&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(procedure &quot;mpi_auto_run_starter&quot; line 3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;invoked from within
<br>
&quot;mpi_auto_run_starter 1|58&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(&quot;uplevel&quot; body line 1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;invoked from within
<br>
&quot;uplevel #0 [list mpi_auto_run_starter {1|58}]&quot;
<br>
Fatal error: ifb_action_obj_t::protected_get_folded_fields:  Field was not registered
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;File: ib_break_obj.cxx
<br>
Expression: found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Line: 479
<br>
<p>Terminated
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0499.php">Chris Gottbrath: "Re: [O-MPI users] Totalview question?"</a>
<li><strong>Previous message:</strong> <a href="0497.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>In reply to:</strong> <a href="0476.php">Tom Rosmond: "Re: [O-MPI users] LAM vs OPENMPI performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0499.php">Chris Gottbrath: "Re: [O-MPI users] Totalview question?"</a>
<li><strong>Reply:</strong> <a href="0499.php">Chris Gottbrath: "Re: [O-MPI users] Totalview question?"</a>
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
