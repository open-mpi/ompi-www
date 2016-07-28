<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 26 17:13:05 2006" -->
<!-- isoreceived="20061026211305" -->
<!-- sent="Thu, 26 Oct 2006 15:12:55 -0600" -->
<!-- isosent="20061026211255" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun crashes when compiled in 64-bit mode on Apple Mac Pro" -->
<!-- id="C16680F8.5653%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="62F95D54-5605-4813-A528-4FF747E7719C_at_maven.de" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-26 17:12:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2060.php">Daniel Vollmer: "Re: [OMPI users] mpirun crashes when compiled in 64-bit mode on Apple Mac Pro"</a>
<li><strong>Previous message:</strong> <a href="2058.php">George Bosilca: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<li><strong>In reply to:</strong> <a href="2057.php">Daniel Vollmer: "[OMPI users] mpirun crashes when compiled in 64-bit mode on Apple Mac Pro"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2060.php">Daniel Vollmer: "Re: [OMPI users] mpirun crashes when compiled in 64-bit mode on Apple Mac Pro"</a>
<li><strong>Reply:</strong> <a href="2060.php">Daniel Vollmer: "Re: [OMPI users] mpirun crashes when compiled in 64-bit mode on Apple Mac Pro"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you wouldn't mind, could you try it again after applying the attached
<br>
patch? This looks like a problem we encountered on another release where
<br>
something in the runtime didn't get initialized early enough. It only shows
<br>
up in certain circumstances, but this seems to fix it.
<br>
<p>You can apply the patch by going to the top directory where you installed
<br>
the code, saving the patch, and then &quot;patch -p0 &lt; patch.txt&quot;. You will then
<br>
just need to do another &quot;make install&quot;.
<br>
<p>If this solves your problem, I will have the patch incorporated into the
<br>
1.1.2 release code.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p><p>On 10/26/06 1:54 PM, &quot;Daniel Vollmer&quot; &lt;maven_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've compiled open-mpi 1.1.2 in 64bit mode (using XCode 2.4 / i686-
</span><br>
<span class="quotelev1">&gt; apple-darwin8-gcc-4.0.1 (GCC) 4.0.1 (Apple Computer, Inc. build
</span><br>
<span class="quotelev1">&gt; 5363)) with
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local/openmpi-1.1.2 --enable-debug CFLAGS=-
</span><br>
<span class="quotelev1">&gt; m64 CXXFLAGS=-m64 OBJCFLAGS=-m64 LDLFLAGS=-m64
</span><br>
<span class="quotelev1">&gt; on an Intel Mac Pro (with Xeon 51XX processors) on Mac OS 10.4.8.
</span><br>
<span class="quotelev1">&gt; Everything builds fine and results in proper 64bit libraries and
</span><br>
<span class="quotelev1">&gt; executables. Unfortunately, when attempting to run something as
</span><br>
<span class="quotelev1">&gt; simple as
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.1.2/bin/mpirun ls
</span><br>
<span class="quotelev1">&gt; it crashes (and hangs) with a NULL pointer dereference after outputting
</span><br>
<span class="quotelev1">&gt; [Sonnenblume.local:25036] opal_ifinit: unable to find network
</span><br>
<span class="quotelev1">&gt; interfaces.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; gdb shows the following:
</span><br>
<span class="quotelev1">&gt; Sonnenblume:~/Development/tau/openmpi-1.1.2 maven$ gdb /usr/local/
</span><br>
<span class="quotelev1">&gt; openmpi-1.1.2/bin/mpirun
</span><br>
<span class="quotelev1">&gt; GNU gdb 6.3.50-20050815 (Apple version gdb-563) (Wed Jul 19 05:10:58
</span><br>
<span class="quotelev1">&gt; GMT 2006)
</span><br>
<span class="quotelev1">&gt; Copyright 2004 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; GDB is free software, covered by the GNU General Public License, and
</span><br>
<span class="quotelev1">&gt; you are
</span><br>
<span class="quotelev1">&gt; welcome to change it and/or distribute copies of it under certain
</span><br>
<span class="quotelev1">&gt; conditions.
</span><br>
<span class="quotelev1">&gt; Type &quot;show copying&quot; to see the conditions.
</span><br>
<span class="quotelev1">&gt; There is absolutely no warranty for GDB.  Type &quot;show warranty&quot; for
</span><br>
<span class="quotelev1">&gt; details.
</span><br>
<span class="quotelev1">&gt; This GDB was configured as &quot;i386-apple-darwin&quot;...Reading symbols for
</span><br>
<span class="quotelev1">&gt; shared libraries .... done
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (gdb) run ls
</span><br>
<span class="quotelev1">&gt; Starting program: /usr/local/openmpi-1.1.2/bin/mpirun ls
</span><br>
<span class="quotelev1">&gt; Reading symbols for shared libraries .+++ done
</span><br>
<span class="quotelev1">&gt; Reading symbols for shared libraries . done
</span><br>
<span class="quotelev1">&gt; Reading symbols for shared libraries . done
</span><br>
<span class="quotelev1">&gt; Reading symbols for shared libraries . done
</span><br>
<span class="quotelev1">&gt; Reading symbols for shared libraries . done
</span><br>
<span class="quotelev1">&gt; [Sonnenblume.local:25051] opal_ifinit: unable to find network
</span><br>
<span class="quotelev1">&gt; interfaces.
</span><br>
<span class="quotelev1">&gt; Reading symbols for shared libraries . done
</span><br>
<span class="quotelev1">&gt; Reading symbols for shared libraries . done
</span><br>
<span class="quotelev1">&gt; Reading symbols for shared libraries . done
</span><br>
<span class="quotelev1">&gt; Reading symbols for shared libraries . done
</span><br>
<span class="quotelev1">&gt; Reading symbols for shared libraries . done
</span><br>
<span class="quotelev1">&gt; Reading symbols for shared libraries . done
</span><br>
<span class="quotelev1">&gt; Reading symbols for shared libraries . done
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Program received signal EXC_BAD_ACCESS, Could not access memory.
</span><br>
<span class="quotelev1">&gt; Reason: KERN_INVALID_ADDRESS at address: 0x0000000000000000
</span><br>
<span class="quotelev1">&gt; 0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev1">&gt; #1  0x000000010040851c in orte_init_stage1 (infrastructure=true) at
</span><br>
<span class="quotelev1">&gt; runtime/orte_init_stage1.c:267
</span><br>
<span class="quotelev1">&gt; #2  0x000000010040c727 in orte_system_init (infrastructure=true) at
</span><br>
<span class="quotelev1">&gt; runtime/orte_system_init.c:41
</span><br>
<span class="quotelev1">&gt; #3  0x0000000100407eea in orte_init (infrastructure=true) at runtime/
</span><br>
<span class="quotelev1">&gt; orte_init.c:48
</span><br>
<span class="quotelev1">&gt; #4  0x0000000100000e20 in orterun (argc=2, argv=0x7fff5fbffbc0) at
</span><br>
<span class="quotelev1">&gt; orterun.c:329
</span><br>
<span class="quotelev1">&gt; #5  0x0000000100000cc1 in main (argc=2, argv=0x7fff5fbffbc0) at
</span><br>
<span class="quotelev1">&gt; main.c:13
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas / advice?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Daniel.
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
<p><p>
<br><p>
<p><p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2059/patch.txt">patch.txt</a>
</ul>
<!-- attachment="patch.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2060.php">Daniel Vollmer: "Re: [OMPI users] mpirun crashes when compiled in 64-bit mode on Apple Mac Pro"</a>
<li><strong>Previous message:</strong> <a href="2058.php">George Bosilca: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<li><strong>In reply to:</strong> <a href="2057.php">Daniel Vollmer: "[OMPI users] mpirun crashes when compiled in 64-bit mode on Apple Mac Pro"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2060.php">Daniel Vollmer: "Re: [OMPI users] mpirun crashes when compiled in 64-bit mode on Apple Mac Pro"</a>
<li><strong>Reply:</strong> <a href="2060.php">Daniel Vollmer: "Re: [OMPI users] mpirun crashes when compiled in 64-bit mode on Apple Mac Pro"</a>
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
