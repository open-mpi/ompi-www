<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 13 01:21:41 2005" -->
<!-- isoreceived="20050913062141" -->
<!-- sent="Tue, 13 Sep 2005 08:21:33 +0200" -->
<!-- isosent="20050913062133" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re:  64bit shared library problems" -->
<!-- id="20050913062133.6830.qmail_at_iam.uni-bonn.de" -->
<!-- charset="utf-8" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-13 01:21:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0337.php">Nathan DeBardeleben: "OMPI compile failing"</a>
<li><strong>Previous message:</strong> <a href="0335.php">Jeff Squyres: "Re:  64bit shared library problems"</a>
<li><strong>In reply to:</strong> <a href="0334.php">Nathan DeBardeleben: "64bit shared library problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0347.php">Ralf Wildenhues: "Re:  64bit shared library problems"</a>
<li><strong>Reply:</strong> <a href="0347.php">Ralf Wildenhues: "Re:  64bit shared library problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Nathan, 
<br>
<p>Nathan DeBardeleben writes:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've been having this problem for a week or so and I've been asking 
</span><br>
<span class="quotelev1">&gt; other people to weigh in if they know what I'm doing wrong.  I've gotten 
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
<p><span class="quotelev2">&gt;&gt; [sparkplug]~ &gt; uname -a
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
*snip* 
<br>
<p><span class="quotelev1">&gt; My ompi version: 7322 - but this has been going on for a few days like I 
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
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/../../../../x86_64-suse-linux/bin/ld:
</span><br>
<span class="quotelev2">&gt;&gt; testlib.o: relocation R_X86_64_32 can not be used when making a shared
</span><br>
<span class="quotelev2">&gt;&gt; object; recompile with -fPIC
</span><br>
<span class="quotelev2">&gt;&gt; testlib.o: could not read symbols: Bad value
</span><br>
<span class="quotelev2">&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<p>OK, I don't have time to reproduce this at the moment, but I see several
<br>
issues: First, testlib.o needs to be compiled PIC (you noticed that 
<br>
already). 
<br>
<p><span class="quotelev1">&gt; OK so relocation problems.  Maybe I'll follow the directions and -fPIC 
</span><br>
<span class="quotelev1">&gt; my file myself: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [sparkplug]~/ompi-test &gt; mpicc -c testlib.c -fPIC
</span><br>
<span class="quotelev2">&gt;&gt; [sparkplug]~/ompi-test &gt; mpicc -shared -o libtestlib.so testlib.o
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/../../../../x86_64-suse-linux/bin/ld:
</span><br>
<span class="quotelev2">&gt;&gt; /home/ndebard/local/ompi/lib/liborte.a(orte_init.o): relocation
</span><br>
<span class="quotelev2">&gt;&gt; R_X86_64_32 can not be used when making a shared object; recompile 
</span><br>
<span class="quotelev2">&gt;&gt; with -fPIC
</span><br>
<span class="quotelev2">&gt;&gt; /home/ndebard/local/ompi/lib/liborte.a: could not read symbols: Bad value
</span><br>
<span class="quotelev2">&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<p>This is the second issue: orte_init.o is not compiled PIC (surely,
<br>
as you --disable-shared).  But the error here is that it tries to
<br>
link the static library into the shared one, which is wrong.
<br>
Either a Libtool or an OpenMPI bug.  Please show what both of the above
<br>
mpicc calls generate. 
<br>
<p><span class="quotelev1">&gt; OK so I read this as there's a relocation problem in 'liborte.a'.  I 
</span><br>
<span class="quotelev1">&gt; un-arred liborte.a and checked some of the files with 'file' and it says 
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
<p>Are you sure you really rebuilt the library afterwards (I believe a
<br>
&quot;make clean&quot; in between is necessary)?  Please show the link line
<br>
of liborte.la.  (You can do a full build, then delete liborte.la and
<br>
type &quot;make&quot; again to capture its output more easily.) 
<br>
<p><span class="quotelev1">&gt; So the result is that I can not build a shared library on a 64bit linux 
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
<p>Should be the same issue. 
<br>
<p>/usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/../../../../x86_64-suse-linux/bin 
<br>
/ld:
<br>
<span class="quotelev2">&gt;&gt; /home/ndebard/local/ompi/lib/libmpi.a(comm_init.o): relocation 
</span><br>
<span class="quotelev2">&gt;&gt; R_X86_64_32 can not be used when making a shared object; recompile 
</span><br>
<span class="quotelev2">&gt;&gt; with -fPIC
</span><br>
<span class="quotelev2">&gt;&gt; /home/ndebard/local/ompi/lib/libmpi.a: could not read symbols: Bad value
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So... could perhaps the build be messed up and not be really using 64bit 
</span><br>
<span class="quotelev1">&gt; code?
</span><br>
<span class="quotelev1">&gt; Am I the only one seeing this?  It's a trivial test for those of you 
</span><br>
<span class="quotelev1">&gt; with access to a 64bit machine if you wouldn't mind testing for me.
</span><br>
<p>As I said, I can probably only test this a few days from now. 
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0337.php">Nathan DeBardeleben: "OMPI compile failing"</a>
<li><strong>Previous message:</strong> <a href="0335.php">Jeff Squyres: "Re:  64bit shared library problems"</a>
<li><strong>In reply to:</strong> <a href="0334.php">Nathan DeBardeleben: "64bit shared library problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0347.php">Ralf Wildenhues: "Re:  64bit shared library problems"</a>
<li><strong>Reply:</strong> <a href="0347.php">Ralf Wildenhues: "Re:  64bit shared library problems"</a>
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
