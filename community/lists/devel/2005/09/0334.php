<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 12 16:47:37 2005" -->
<!-- isoreceived="20050912214737" -->
<!-- sent="Mon, 12 Sep 2005 15:47:33 -0600" -->
<!-- isosent="20050912214733" -->
<!-- name="Nathan DeBardeleben" -->
<!-- email="ndebard_at_[hidden]" -->
<!-- subject="64bit shared library problems" -->
<!-- id="4325F775.4030804_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Nathan DeBardeleben (<em>ndebard_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-12 16:47:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0335.php">Jeff Squyres: "Re:  64bit shared library problems"</a>
<li><strong>Previous message:</strong> <a href="0333.php">Jeff Squyres: "svn merge: lessons learned"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0335.php">Jeff Squyres: "Re:  64bit shared library problems"</a>
<li><strong>Reply:</strong> <a href="0335.php">Jeff Squyres: "Re:  64bit shared library problems"</a>
<li><strong>Reply:</strong> <a href="0336.php">Ralf Wildenhues: "Re:  64bit shared library problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've been having this problem for a week or so and I've been asking 
<br>
other people to weigh in if they know what I'm doing wrong.  I've gotten 
<br>
no where on this so I figure I'll finally drop it out on the list.  
<br>
First, here's the important info:
<br>
The machine:
<br>
<p><span class="quotelev1">&gt; [sparkplug]~ &gt; cat /etc/issue
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Welcome to SuSE Linux 9.1 (x86-64) - Kernel \r (\l).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [sparkplug]~ &gt; uname -a
</span><br>
<span class="quotelev1">&gt; Linux sparkplug 2.6.10 #4 SMP Wed Jan 26 11:50:00 MST 2005 x86_64 
</span><br>
<span class="quotelev1">&gt; x86_64 x86_64 GNU/Linux
</span><br>
<p>My versions of libtool, autoconf, automake:
<br>
<p><span class="quotelev1">&gt; [sparkplug]~ &gt; libtool --version
</span><br>
<span class="quotelev1">&gt; ltmain.sh (GNU libtool) 1.5.20 (1.1220.2.287 2005/08/31 18:54:15)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2005  Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; This is free software; see the source for copying conditions.  There is NO
</span><br>
<span class="quotelev1">&gt; warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR 
</span><br>
<span class="quotelev1">&gt; PURPOSE.
</span><br>
<span class="quotelev1">&gt; [sparkplug]~ &gt; autoconf --version
</span><br>
<span class="quotelev1">&gt; autoconf (GNU Autoconf) 2.59
</span><br>
<span class="quotelev1">&gt; Written by David J. MacKenzie and Akim Demaille.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2003 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; This is free software; see the source for copying conditions.  There is NO
</span><br>
<span class="quotelev1">&gt; warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR 
</span><br>
<span class="quotelev1">&gt; PURPOSE.
</span><br>
<span class="quotelev1">&gt; [sparkplug]~ &gt; automake --version
</span><br>
<span class="quotelev1">&gt; automake (GNU automake) 1.8.5
</span><br>
<span class="quotelev1">&gt; Written by Tom Tromey &lt;tromey_at_[hidden]&gt;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Copyright 2004 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; This is free software; see the source for copying conditions.  There is NO
</span><br>
<span class="quotelev1">&gt; warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR 
</span><br>
<span class="quotelev1">&gt; PURPOSE.
</span><br>
<span class="quotelev1">&gt; [sparkplug]~ &gt; 
</span><br>
<p>My ompi version: 7322 - but this has been going on for a few days like I 
<br>
said and I've been updating a lot, with no progress.
<br>
<p>Configured using:
<br>
<p><span class="quotelev1">&gt; $ ./configure --enable-static --disable-shared --without-threads 
</span><br>
<span class="quotelev1">&gt; --prefix=/home/ndebard/local/ompi --with-devel-headers 
</span><br>
<span class="quotelev1">&gt; --enable-mca-no-build=ptl-gm
</span><br>
<p>Simple C file which I will compile into a shared library:
<br>
<p><span class="quotelev1">&gt; int test_compile(int x) {
</span><br>
<span class="quotelev1">&gt;     int rc;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     rc = orte_init(true);
</span><br>
<span class="quotelev1">&gt;     printf(&quot;rc = %d\n&quot;, rc);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     return x + 1;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<p>Above file is named 'testlib.c'
<br>
<p>OK, so let's build this:
<br>
<p><span class="quotelev1">&gt; [sparkplug]~/ompi-test &gt; mpicc -c testlib.c
</span><br>
<span class="quotelev1">&gt; [sparkplug]~/ompi-test &gt; mpicc -shared -o libtestlib.so testlib.o
</span><br>
<span class="quotelev1">&gt; /usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/../../../../x86_64-suse-linux/bin/ld:
</span><br>
<span class="quotelev1">&gt; testlib.o: relocation R_X86_64_32 can not be used when making a shared
</span><br>
<span class="quotelev1">&gt; object; recompile with -fPIC
</span><br>
<span class="quotelev1">&gt; testlib.o: could not read symbols: Bad value
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<p>OK so relocation problems.  Maybe I'll follow the directions and -fPIC 
<br>
my file myself:
<br>
<p><span class="quotelev1">&gt; [sparkplug]~/ompi-test &gt; mpicc -c testlib.c -fPIC
</span><br>
<span class="quotelev1">&gt; [sparkplug]~/ompi-test &gt; mpicc -shared -o libtestlib.so testlib.o
</span><br>
<span class="quotelev1">&gt; /usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/../../../../x86_64-suse-linux/bin/ld:
</span><br>
<span class="quotelev1">&gt; /home/ndebard/local/ompi/lib/liborte.a(orte_init.o): relocation
</span><br>
<span class="quotelev1">&gt; R_X86_64_32 can not be used when making a shared object; recompile 
</span><br>
<span class="quotelev1">&gt; with -fPIC
</span><br>
<span class="quotelev1">&gt; /home/ndebard/local/ompi/lib/liborte.a: could not read symbols: Bad value
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<p>OK so I read this as there's a relocation problem in 'liborte.a'.  I 
<br>
un-arred liborte.a and checked some of the files with 'file' and it says 
<br>
64bit.  I havn't yet written a script to check every file in here, but 
<br>
here's orte_init.o:
<br>
<p><span class="quotelev1">&gt; [sparkplug]~/&lt;1&gt;tmp &gt; file orte_init.o
</span><br>
<span class="quotelev1">&gt; orte_init.o: ELF 64-bit LSB relocatable, AMD x86-64, version 1 (SYSV), 
</span><br>
<span class="quotelev1">&gt; not stripped
</span><br>
<p>So that at least says it's 64bit.
<br>
And to confirm, my mpicc's 64bit too:
<br>
<p><span class="quotelev1">&gt; [sparkplug]~/&lt;1&gt;tmp &gt; which mpicc
</span><br>
<span class="quotelev1">&gt; /home/ndebard/local/ompi/bin/mpicc
</span><br>
<span class="quotelev1">&gt; [sparkplug]~/&lt;1&gt;tmp &gt; file /home/ndebard/local/ompi/bin/mpicc
</span><br>
<span class="quotelev1">&gt; /home/ndebard/local/ompi/bin/mpicc: ELF 64-bit LSB executable, AMD 
</span><br>
<span class="quotelev1">&gt; x86-64, version 1 (SYSV), for GNU/Linux 2.4.1, dynamically linked 
</span><br>
<span class="quotelev1">&gt; (uses shared libs), not stripped
</span><br>
<p>Someone suggested I take out the 'disabled-shared' from the configure 
<br>
line, so I did.  The result was the same.
<br>
<p>So the result is that I can not build a shared library on a 64bit linux 
<br>
machine that uses orte calls.
<br>
So then I tried taking out the orte calls and instead use MPI calls.  
<br>
Sure, this function makes no sense but here it is now:
<br>
<p><span class="quotelev1">&gt; #include &quot;orte_config.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int test_compile(int x) {
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;x);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     return x + 1;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<p>And now, when I try and make a shared object I get relocation errors:
<br>
<p><span class="quotelev1">&gt; /usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/../../../../x86_64-suse-linux/bin/ld: 
</span><br>
<span class="quotelev1">&gt; /home/ndebard/local/ompi/lib/libmpi.a(comm_init.o): relocation 
</span><br>
<span class="quotelev1">&gt; R_X86_64_32 can not be used when making a shared object; recompile 
</span><br>
<span class="quotelev1">&gt; with -fPIC
</span><br>
<span class="quotelev1">&gt; /home/ndebard/local/ompi/lib/libmpi.a: could not read symbols: Bad value
</span><br>
<p>So... could perhaps the build be messed up and not be really using 64bit 
<br>
code?
<br>
Am I the only one seeing this?  It's a trivial test for those of you 
<br>
with access to a 64bit machine if you wouldn't mind testing for me.
<br>
<p>Help would be greatly appreciated.
<br>
<p><pre>
-- 
-- Nathan
Correspondence
---------------------------------------------------------------------
Nathan DeBardeleben, Ph.D.
Los Alamos National Laboratory
Parallel Tools Team
High Performance Computing Environments
phone: 505-667-3428
email: ndebard_at_[hidden]
---------------------------------------------------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0335.php">Jeff Squyres: "Re:  64bit shared library problems"</a>
<li><strong>Previous message:</strong> <a href="0333.php">Jeff Squyres: "svn merge: lessons learned"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0335.php">Jeff Squyres: "Re:  64bit shared library problems"</a>
<li><strong>Reply:</strong> <a href="0335.php">Jeff Squyres: "Re:  64bit shared library problems"</a>
<li><strong>Reply:</strong> <a href="0336.php">Ralf Wildenhues: "Re:  64bit shared library problems"</a>
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
