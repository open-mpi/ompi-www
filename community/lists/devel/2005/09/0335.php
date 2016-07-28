<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 12 17:31:57 2005" -->
<!-- isoreceived="20050912223157" -->
<!-- sent="Mon, 12 Sep 2005 18:31:48 -0400" -->
<!-- isosent="20050912223148" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  64bit shared library problems" -->
<!-- id="4b02347dc493f8a377b141abd3709e6f_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4325F775.4030804_at_lanl.gov" -->
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
<strong>Date:</strong> 2005-09-12 17:31:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0336.php">Ralf Wildenhues: "Re:  64bit shared library problems"</a>
<li><strong>Previous message:</strong> <a href="0334.php">Nathan DeBardeleben: "64bit shared library problems"</a>
<li><strong>In reply to:</strong> <a href="0334.php">Nathan DeBardeleben: "64bit shared library problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0359.php">Jeff Squyres: "Re:  64bit shared library problems"</a>
<li><strong>Maybe reply:</strong> <a href="0359.php">Jeff Squyres: "Re:  64bit shared library problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Maybe I'm dense -- I thought you couldn't use --shared when linking to  
<br>
a static library...?
<br>
<p>If you want to build OMPI as a shared library, then ditch the  
<br>
--enable-static --disable-shared from your configure line (building  
<br>
OMPI as shared is the default, which is how I build 95% of the time).
<br>
<p><p><p>On Sep 12, 2005, at 5:47 PM, Nathan DeBardeleben wrote:
<br>
<p><span class="quotelev1">&gt; I've been having this problem for a week or so and I've been asking
</span><br>
<span class="quotelev1">&gt; other people to weigh in if they know what I'm doing wrong.  I've  
</span><br>
<span class="quotelev1">&gt; gotten
</span><br>
<span class="quotelev1">&gt; no where on this so I figure I'll finally drop it out on the list.
</span><br>
<span class="quotelev1">&gt; First, here's the important info:
</span><br>
<span class="quotelev1">&gt; The machine:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [sparkplug]~ &gt; cat /etc/issue
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Welcome to SuSE Linux 9.1 (x86-64) - Kernel \r (\l).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [sparkplug]~ &gt; uname -a
</span><br>
<span class="quotelev2">&gt;&gt; Linux sparkplug 2.6.10 #4 SMP Wed Jan 26 11:50:00 MST 2005 x86_64
</span><br>
<span class="quotelev2">&gt;&gt; x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My versions of libtool, autoconf, automake:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [sparkplug]~ &gt; libtool --version
</span><br>
<span class="quotelev2">&gt;&gt; ltmain.sh (GNU libtool) 1.5.20 (1.1220.2.287 2005/08/31 18:54:15)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Copyright (C) 2005  Free Software Foundation, Inc.
</span><br>
<span class="quotelev2">&gt;&gt; This is free software; see the source for copying conditions.  There  
</span><br>
<span class="quotelev2">&gt;&gt; is NO
</span><br>
<span class="quotelev2">&gt;&gt; warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR
</span><br>
<span class="quotelev2">&gt;&gt; PURPOSE.
</span><br>
<span class="quotelev2">&gt;&gt; [sparkplug]~ &gt; autoconf --version
</span><br>
<span class="quotelev2">&gt;&gt; autoconf (GNU Autoconf) 2.59
</span><br>
<span class="quotelev2">&gt;&gt; Written by David J. MacKenzie and Akim Demaille.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Copyright (C) 2003 Free Software Foundation, Inc.
</span><br>
<span class="quotelev2">&gt;&gt; This is free software; see the source for copying conditions.  There  
</span><br>
<span class="quotelev2">&gt;&gt; is NO
</span><br>
<span class="quotelev2">&gt;&gt; warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR
</span><br>
<span class="quotelev2">&gt;&gt; PURPOSE.
</span><br>
<span class="quotelev2">&gt;&gt; [sparkplug]~ &gt; automake --version
</span><br>
<span class="quotelev2">&gt;&gt; automake (GNU automake) 1.8.5
</span><br>
<span class="quotelev2">&gt;&gt; Written by Tom Tromey &lt;tromey_at_[hidden]&gt;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Copyright 2004 Free Software Foundation, Inc.
</span><br>
<span class="quotelev2">&gt;&gt; This is free software; see the source for copying conditions.  There  
</span><br>
<span class="quotelev2">&gt;&gt; is NO
</span><br>
<span class="quotelev2">&gt;&gt; warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR
</span><br>
<span class="quotelev2">&gt;&gt; PURPOSE.
</span><br>
<span class="quotelev2">&gt;&gt; [sparkplug]~ &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My ompi version: 7322 - but this has been going on for a few days like  
</span><br>
<span class="quotelev1">&gt; I
</span><br>
<span class="quotelev1">&gt; said and I've been updating a lot, with no progress.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Configured using:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ ./configure --enable-static --disable-shared --without-threads
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/home/ndebard/local/ompi --with-devel-headers
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mca-no-build=ptl-gm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Simple C file which I will compile into a shared library:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int test_compile(int x) {
</span><br>
<span class="quotelev2">&gt;&gt;     int rc;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     rc = orte_init(true);
</span><br>
<span class="quotelev2">&gt;&gt;     printf(&quot;rc = %d\n&quot;, rc);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     return x + 1;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Above file is named 'testlib.c'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OK, so let's build this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [sparkplug]~/ompi-test &gt; mpicc -c testlib.c
</span><br>
<span class="quotelev2">&gt;&gt; [sparkplug]~/ompi-test &gt; mpicc -shared -o libtestlib.so testlib.o
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/../../../../x86_64-suse- 
</span><br>
<span class="quotelev2">&gt;&gt; linux/bin/ld:
</span><br>
<span class="quotelev2">&gt;&gt; testlib.o: relocation R_X86_64_32 can not be used when making a shared
</span><br>
<span class="quotelev2">&gt;&gt; object; recompile with -fPIC
</span><br>
<span class="quotelev2">&gt;&gt; testlib.o: could not read symbols: Bad value
</span><br>
<span class="quotelev2">&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OK so relocation problems.  Maybe I'll follow the directions and -fPIC
</span><br>
<span class="quotelev1">&gt; my file myself:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [sparkplug]~/ompi-test &gt; mpicc -c testlib.c -fPIC
</span><br>
<span class="quotelev2">&gt;&gt; [sparkplug]~/ompi-test &gt; mpicc -shared -o libtestlib.so testlib.o
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/../../../../x86_64-suse- 
</span><br>
<span class="quotelev2">&gt;&gt; linux/bin/ld:
</span><br>
<span class="quotelev2">&gt;&gt; /home/ndebard/local/ompi/lib/liborte.a(orte_init.o): relocation
</span><br>
<span class="quotelev2">&gt;&gt; R_X86_64_32 can not be used when making a shared object; recompile
</span><br>
<span class="quotelev2">&gt;&gt; with -fPIC
</span><br>
<span class="quotelev2">&gt;&gt; /home/ndebard/local/ompi/lib/liborte.a: could not read symbols: Bad  
</span><br>
<span class="quotelev2">&gt;&gt; value
</span><br>
<span class="quotelev2">&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OK so I read this as there's a relocation problem in 'liborte.a'.  I
</span><br>
<span class="quotelev1">&gt; un-arred liborte.a and checked some of the files with 'file' and it  
</span><br>
<span class="quotelev1">&gt; says
</span><br>
<span class="quotelev1">&gt; 64bit.  I havn't yet written a script to check every file in here, but
</span><br>
<span class="quotelev1">&gt; here's orte_init.o:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [sparkplug]~/&lt;1&gt;tmp &gt; file orte_init.o
</span><br>
<span class="quotelev2">&gt;&gt; orte_init.o: ELF 64-bit LSB relocatable, AMD x86-64, version 1 (SYSV),
</span><br>
<span class="quotelev2">&gt;&gt; not stripped
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So that at least says it's 64bit.
</span><br>
<span class="quotelev1">&gt; And to confirm, my mpicc's 64bit too:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [sparkplug]~/&lt;1&gt;tmp &gt; which mpicc
</span><br>
<span class="quotelev2">&gt;&gt; /home/ndebard/local/ompi/bin/mpicc
</span><br>
<span class="quotelev2">&gt;&gt; [sparkplug]~/&lt;1&gt;tmp &gt; file /home/ndebard/local/ompi/bin/mpicc
</span><br>
<span class="quotelev2">&gt;&gt; /home/ndebard/local/ompi/bin/mpicc: ELF 64-bit LSB executable, AMD
</span><br>
<span class="quotelev2">&gt;&gt; x86-64, version 1 (SYSV), for GNU/Linux 2.4.1, dynamically linked
</span><br>
<span class="quotelev2">&gt;&gt; (uses shared libs), not stripped
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Someone suggested I take out the 'disabled-shared' from the configure
</span><br>
<span class="quotelev1">&gt; line, so I did.  The result was the same.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So the result is that I can not build a shared library on a 64bit linux
</span><br>
<span class="quotelev1">&gt; machine that uses orte calls.
</span><br>
<span class="quotelev1">&gt; So then I tried taking out the orte calls and instead use MPI calls.
</span><br>
<span class="quotelev1">&gt; Sure, this function makes no sense but here it is now:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int test_compile(int x) {
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;x);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     return x + 1;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And now, when I try and make a shared object I get relocation errors:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/../../../../x86_64-suse- 
</span><br>
<span class="quotelev2">&gt;&gt; linux/bin/ld:
</span><br>
<span class="quotelev2">&gt;&gt; /home/ndebard/local/ompi/lib/libmpi.a(comm_init.o): relocation
</span><br>
<span class="quotelev2">&gt;&gt; R_X86_64_32 can not be used when making a shared object; recompile
</span><br>
<span class="quotelev2">&gt;&gt; with -fPIC
</span><br>
<span class="quotelev2">&gt;&gt; /home/ndebard/local/ompi/lib/libmpi.a: could not read symbols: Bad  
</span><br>
<span class="quotelev2">&gt;&gt; value
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So... could perhaps the build be messed up and not be really using  
</span><br>
<span class="quotelev1">&gt; 64bit
</span><br>
<span class="quotelev1">&gt; code?
</span><br>
<span class="quotelev1">&gt; Am I the only one seeing this?  It's a trivial test for those of you
</span><br>
<span class="quotelev1">&gt; with access to a 64bit machine if you wouldn't mind testing for me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Help would be greatly appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; -- Nathan
</span><br>
<span class="quotelev1">&gt; Correspondence
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Nathan DeBardeleben, Ph.D.
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt; Parallel Tools Team
</span><br>
<span class="quotelev1">&gt; High Performance Computing Environments
</span><br>
<span class="quotelev1">&gt; phone: 505-667-3428
</span><br>
<span class="quotelev1">&gt; email: ndebard_at_[hidden]
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
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
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0336.php">Ralf Wildenhues: "Re:  64bit shared library problems"</a>
<li><strong>Previous message:</strong> <a href="0334.php">Nathan DeBardeleben: "64bit shared library problems"</a>
<li><strong>In reply to:</strong> <a href="0334.php">Nathan DeBardeleben: "64bit shared library problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0359.php">Jeff Squyres: "Re:  64bit shared library problems"</a>
<li><strong>Maybe reply:</strong> <a href="0359.php">Jeff Squyres: "Re:  64bit shared library problems"</a>
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
