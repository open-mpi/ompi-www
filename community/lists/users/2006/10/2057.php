<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 26 15:54:50 2006" -->
<!-- isoreceived="20061026195450" -->
<!-- sent="Thu, 26 Oct 2006 21:54:30 +0200" -->
<!-- isosent="20061026195430" -->
<!-- name="Daniel Vollmer" -->
<!-- email="maven_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun crashes when compiled in 64-bit mode on Apple Mac Pro" -->
<!-- id="62F95D54-5605-4813-A528-4FF747E7719C_at_maven.de" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Daniel Vollmer (<em>maven_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-26 15:54:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2058.php">George Bosilca: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<li><strong>Previous message:</strong> <a href="2056.php">Troy Telford: "[OMPI users] Fault Tolerance &amp; Behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2059.php">Ralph H Castain: "Re: [OMPI users] mpirun crashes when compiled in 64-bit mode on Apple Mac Pro"</a>
<li><strong>Reply:</strong> <a href="2059.php">Ralph H Castain: "Re: [OMPI users] mpirun crashes when compiled in 64-bit mode on Apple Mac Pro"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I've compiled open-mpi 1.1.2 in 64bit mode (using XCode 2.4 / i686- 
<br>
apple-darwin8-gcc-4.0.1 (GCC) 4.0.1 (Apple Computer, Inc. build  
<br>
5363)) with
<br>
./configure --prefix=/usr/local/openmpi-1.1.2 --enable-debug CFLAGS=- 
<br>
m64 CXXFLAGS=-m64 OBJCFLAGS=-m64 LDLFLAGS=-m64
<br>
on an Intel Mac Pro (with Xeon 51XX processors) on Mac OS 10.4.8.
<br>
Everything builds fine and results in proper 64bit libraries and  
<br>
executables. Unfortunately, when attempting to run something as  
<br>
simple as
<br>
/usr/local/openmpi-1.1.2/bin/mpirun ls
<br>
it crashes (and hangs) with a NULL pointer dereference after outputting
<br>
[Sonnenblume.local:25036] opal_ifinit: unable to find network  
<br>
interfaces.
<br>
<p>gdb shows the following:
<br>
Sonnenblume:~/Development/tau/openmpi-1.1.2 maven$ gdb /usr/local/ 
<br>
openmpi-1.1.2/bin/mpirun
<br>
GNU gdb 6.3.50-20050815 (Apple version gdb-563) (Wed Jul 19 05:10:58  
<br>
GMT 2006)
<br>
Copyright 2004 Free Software Foundation, Inc.
<br>
GDB is free software, covered by the GNU General Public License, and  
<br>
you are
<br>
welcome to change it and/or distribute copies of it under certain  
<br>
conditions.
<br>
Type &quot;show copying&quot; to see the conditions.
<br>
There is absolutely no warranty for GDB.  Type &quot;show warranty&quot; for  
<br>
details.
<br>
This GDB was configured as &quot;i386-apple-darwin&quot;...Reading symbols for  
<br>
shared libraries .... done
<br>
<p>(gdb) run ls
<br>
Starting program: /usr/local/openmpi-1.1.2/bin/mpirun ls
<br>
Reading symbols for shared libraries .+++ done
<br>
Reading symbols for shared libraries . done
<br>
Reading symbols for shared libraries . done
<br>
Reading symbols for shared libraries . done
<br>
Reading symbols for shared libraries . done
<br>
[Sonnenblume.local:25051] opal_ifinit: unable to find network  
<br>
interfaces.
<br>
Reading symbols for shared libraries . done
<br>
Reading symbols for shared libraries . done
<br>
Reading symbols for shared libraries . done
<br>
Reading symbols for shared libraries . done
<br>
Reading symbols for shared libraries . done
<br>
Reading symbols for shared libraries . done
<br>
Reading symbols for shared libraries . done
<br>
<p>Program received signal EXC_BAD_ACCESS, Could not access memory.
<br>
Reason: KERN_INVALID_ADDRESS at address: 0x0000000000000000
<br>
0x0000000000000000 in ?? ()
<br>
(gdb) bt
<br>
#0  0x0000000000000000 in ?? ()
<br>
#1  0x000000010040851c in orte_init_stage1 (infrastructure=true) at  
<br>
runtime/orte_init_stage1.c:267
<br>
#2  0x000000010040c727 in orte_system_init (infrastructure=true) at  
<br>
runtime/orte_system_init.c:41
<br>
#3  0x0000000100407eea in orte_init (infrastructure=true) at runtime/ 
<br>
orte_init.c:48
<br>
#4  0x0000000100000e20 in orterun (argc=2, argv=0x7fff5fbffbc0) at  
<br>
orterun.c:329
<br>
#5  0x0000000100000cc1 in main (argc=2, argv=0x7fff5fbffbc0) at  
<br>
main.c:13
<br>
<p><p>Any ideas / advice?
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daniel.
<br>
<p><p><p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2057/omni_output.tar.bz2">omni_output.tar.bz2</a>
</ul>
<!-- attachment="omni_output.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2058.php">George Bosilca: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<li><strong>Previous message:</strong> <a href="2056.php">Troy Telford: "[OMPI users] Fault Tolerance &amp; Behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2059.php">Ralph H Castain: "Re: [OMPI users] mpirun crashes when compiled in 64-bit mode on Apple Mac Pro"</a>
<li><strong>Reply:</strong> <a href="2059.php">Ralph H Castain: "Re: [OMPI users] mpirun crashes when compiled in 64-bit mode on Apple Mac Pro"</a>
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
