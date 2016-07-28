<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 15 15:32:31 2005" -->
<!-- isoreceived="20050915203231" -->
<!-- sent="Thu, 15 Sep 2005 16:32:21 -0400" -->
<!-- isosent="20050915203221" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  64bit shared library problems" -->
<!-- id="e4ae4aa8852168d24eedc16f8a89ee5e_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="43285404.2050108_at_lanl.gov" -->
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
<strong>Date:</strong> 2005-09-15 15:32:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0360.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component --	linux	(fwd)"</a>
<li><strong>Previous message:</strong> <a href="0358.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux	(fwd)"</a>
<li><strong>Maybe in reply to:</strong> <a href="0335.php">Jeff Squyres: "Re:  64bit shared library problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0361.php">Jeff Squyres: "Re:  64bit shared library problems"</a>
<li><strong>Reply:</strong> <a href="0361.php">Jeff Squyres: "Re:  64bit shared library problems"</a>
<li><strong>Reply:</strong> <a href="0362.php">Nathan DeBardeleben: "Re:  64bit shared library problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Followup for the list... a bit of explanation of Nathan's problem about 
<br>
shared libraries and unresolved symbols.
<br>
<p>Short version:
<br>
--------------
<br>
<p>It's an OMPI bug when built as a shared library (not an issue for 
<br>
static libraries).  The fix is straightforward, but involves grunt 
<br>
work.  I'll try to get a student to do it RSN.
<br>
<p>Long version:
<br>
-------------
<br>
<p>What's happening is that we are not linking OMPI components against the 
<br>
opal/orte/ompi libraries.  As such, we are exploiting the fact that 
<br>
when they are dlopened by a standalone application (e.g., a.out), the 
<br>
Libtool portable version of dlopen() exports all the symbols from the 
<br>
parent process such that the child can find and use them at run-time to 
<br>
resolve any unknown symbols.  Here's an example (I'm leaving out some 
<br>
fine-grained details, and it's slightly different on different OS's, 
<br>
but this is &quot;true enough&quot; for the purposes of this thread):
<br>
<p>- a.out, which was linked against libopal.so (and friends), launches
<br>
- the linker runs into an unresolved symbol
<br>
- the linker sees that that symbols is supposed to be in &quot;libopal.so&quot;, 
<br>
and starts searching LD_LIBRARY_PATH for it
<br>
- the linker finds libopal.so, loads it, and is able to resolve the 
<br>
symbol
<br>
<p>It gets interesting at this part:
<br>
<p>- within MPI_Init()/orte_init()/opal_init() (i.e., however you 
<br>
initialized yourself to OMPI/ORTE/OPAL), we use the Libtool portable 
<br>
dlopen() to open our components
<br>
- the components will have unresolved symbols as well (i.e., the 
<br>
symbols in libopal, liborte, and libmpi)
<br>
- when the linker hits these, it tries to resolve them.
<br>
- first, the linker looks in the public namespace of the process, and 
<br>
if it finds the symbols there, it's done
<br>
- in this case, libopal (and friends) have already been loaded in the 
<br>
process, so the linker can find the symbols right away -- without 
<br>
loading any additional libraries
<br>
<p>This is the scheme that we were relying on for libopal/orte/ompi 
<br>
symbols to be resolved in our components.  And for standalone 
<br>
executables, it works fine.
<br>
<p>But for an environment like Eclipse, it doesn't.
<br>
<p>I don't know anything about Eclipse, but I'm assuming that it does 
<br>
something similar to our component system -- it dlopen's them.  However 
<br>
-- here's where my guess comes in -- it doesn't make all the symbols in 
<br>
the opened component be in the public namespace of the process (this is 
<br>
different than what OMPI does, for various reasons).  Hence, if you 
<br>
build an Eclipse component against OMPI, the Eclipse component will be 
<br>
dynamically linked against libopal (etc.).  So when Eclipse loads in 
<br>
your component, similar to the standalone executable example above, the 
<br>
linker will realize that it has unresolved symbols and will use the 
<br>
normal mechanism to resolve them (e.g., look for libopal.so in 
<br>
LD_LIBRARY_PATH).
<br>
<p>The problem comes in when we dlopen OMPI/ORTE/OPAL components.
<br>
<p>Our scheme assumed that we'd be able to find the opal/orte/ompi symbols 
<br>
in the public namespace of the parent process.  But they're not -- 
<br>
Eclipse loaded the component in a private namespace, and therefore all 
<br>
the opal/orte/ompi symbols are in that private namespace.  And 
<br>
therefore the OMPI/ORTE/OPAL components can't find the symbols, and the 
<br>
linker barfs.
<br>
<p>The solution is to change our scheme in OMPI a bit.  We just need to 
<br>
add a few lines to all the component Makefile.am's to, in the dynamic 
<br>
case, link the components against their relevant libraries (opal 
<br>
components linked against libopal, orte components linked against 
<br>
liborte and libopal, etc.).  This does not make the components 
<br>
significantly larger -- it just adds an entry into the dynamic linker 
<br>
section of the component's resulting .so file indicating &quot;if you have 
<br>
unresolved components, go look in libopal.so&quot; (etc.).
<br>
<p>This allows the components themselves to pull in shared libraries when 
<br>
they are dlopened -- if they need to.  If the symbols can be resolved 
<br>
in the parent process' public symbol namespace, they still will be (as 
<br>
in the standalone executable example, above).  But if they can't be 
<br>
resolved that way, this gives the ability to explicitly find and pull 
<br>
in a shared library and resolve the symbols that way (as in the Eclipse 
<br>
plugin example, above).
<br>
<p>Aren't computers fun?  :-)
<br>
<p><p>On Sep 14, 2005, at 12:47 PM, Nathan DeBardeleben wrote:
<br>
<p><span class="quotelev1">&gt; Let me explain what I'm doing real quickly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a piece of Java code which is calling OMPI calls.  It's doing 
</span><br>
<span class="quotelev1">&gt; this through JNI (java native interface).  Don't worry, you don't have 
</span><br>
<span class="quotelev1">&gt; to understand Java to try and help me here.  The JNI code is C with 
</span><br>
<span class="quotelev1">&gt; some funky macros in it provided by Java.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have to compile the JNI C code into a shared library and then the 
</span><br>
<span class="quotelev1">&gt; Java code will load it dynamically when that class is instantiated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So - here's my compile line:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [sparkplug]~/&lt;2&gt;ompi &gt; mpicc -I /usr/java/jdk1.5.0_04/include -I 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/java/jdk1.5.0_04/include/linux -c ptp_ompi_jni.c -fPIC           
</span><br>
<span class="quotelev2">&gt;&gt;                          [sparkplug]~/&lt;2&gt;ompi &gt; mpicc -I 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/java/jdk1.5.0_04/include -I /usr/java/jdk1.5.0_04/include/linux 
</span><br>
<span class="quotelev2">&gt;&gt; -shared -o libptp_ompi_jni.so ptp_ompi_jni.o
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I then have libptp_ompi_jni.so.  I then load that from within Java.  
</span><br>
<span class="quotelev1">&gt; If I setup my LD_LIBRARY_PATH and some args to the Java VM correctly, 
</span><br>
<span class="quotelev1">&gt; then it finds the above library and loads it up.  OK - all fine so 
</span><br>
<span class="quotelev1">&gt; far.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, when I call 'orte_init()' it craps out with the following 
</span><br>
<span class="quotelev1">&gt; error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/java/jdk1.5.0_04/bin/java: error while loading shared libraries: 
</span><br>
<span class="quotelev2">&gt;&gt; /home/ndebard/local/ompi/lib/openmpi/mca_paffinity_linux.so: 
</span><br>
<span class="quotelev2">&gt;&gt; undefined symbol: mca_base_param_reg_int
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I went digging in mca_paffinity_linux.so looking for that symbol.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [sparkplug]~/&lt;3&gt;openmpi &gt; nm mca_paffinity_linux.so | grep 
</span><br>
<span class="quotelev2">&gt;&gt; mca_base_param_reg
</span><br>
<span class="quotelev2">&gt;&gt;                  U mca_base_param_reg_int
</span><br>
<span class="quotelev2">&gt;&gt; [sparkplug]~/&lt;3&gt;openmpi &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OK.  So it's undefined in that .so.
</span><br>
<span class="quotelev1">&gt; I'm really not a library guy (can't you tell from my myriad of 
</span><br>
<span class="quotelev1">&gt; mails?).  What does this mean?  I went back digging in the parent 
</span><br>
<span class="quotelev1">&gt; directory, /home/ndebard/local/ompi/lib, to find the symbol.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [sparkplug]~/&lt;2&gt;lib &gt; nm libopal.so | grep mca_base_param_reg_int
</span><br>
<span class="quotelev2">&gt;&gt; 000000000001ce00 T mca_base_param_reg_int
</span><br>
<span class="quotelev2">&gt;&gt; 000000000001cea3 T mca_base_param_reg_int_name
</span><br>
<span class="quotelev2">&gt;&gt; [sparkplug]~/&lt;2&gt;lib &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OK so I read this as it's defined in opal.so.
</span><br>
<span class="quotelev1">&gt; Do you have any idea why my JNI library is trying to load 
</span><br>
<span class="quotelev1">&gt; mca_paffinity_linux.so?
</span><br>
<span class="quotelev1">&gt; I went back to my compile line and added -lopal -lmpi -lorte just in 
</span><br>
<span class="quotelev1">&gt; case, but that didn't help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again, Jeff, I know this isn't really your concern (unless you want a 
</span><br>
<span class="quotelev1">&gt; wicked OMPI graphical demo at SC!) :) but I wanted to drop it out 
</span><br>
<span class="quotelev1">&gt; there in case you had any insight.  I'm kinda stumped on this one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does it mean my ompi compile is bad?
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Maybe I'm dense -- I thought you couldn't use --shared when linking 
</span><br>
<span class="quotelev2">&gt;&gt; to  a static library...?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you want to build OMPI as a shared library, then ditch the  
</span><br>
<span class="quotelev2">&gt;&gt; --enable-static --disable-shared from your configure line (building  
</span><br>
<span class="quotelev2">&gt;&gt; OMPI as shared is the default, which is how I build 95% of the time).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 12, 2005, at 5:47 PM, Nathan DeBardeleben wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've been having this problem for a week or so and I've been asking
</span><br>
<span class="quotelev3">&gt;&gt;&gt; other people to weigh in if they know what I'm doing wrong.  I've  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gotten
</span><br>
<span class="quotelev3">&gt;&gt;&gt; no where on this so I figure I'll finally drop it out on the list.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; First, here's the important info:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The machine:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sparkplug]~ &gt; cat /etc/issue
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Welcome to SuSE Linux 9.1 (x86-64) - Kernel \r (\l).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sparkplug]~ &gt; uname -a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Linux sparkplug 2.6.10 #4 SMP Wed Jan 26 11:50:00 MST 2005 x86_64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My versions of libtool, autoconf, automake:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sparkplug]~ &gt; libtool --version
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ltmain.sh (GNU libtool) 1.5.20 (1.1220.2.287 2005/08/31 18:54:15)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Copyright (C) 2005  Free Software Foundation, Inc.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is free software; see the source for copying conditions.  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There  is NO
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PURPOSE.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sparkplug]~ &gt; autoconf --version
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; autoconf (GNU Autoconf) 2.59
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Written by David J. MacKenzie and Akim Demaille.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Copyright (C) 2003 Free Software Foundation, Inc.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is free software; see the source for copying conditions.  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There  is NO
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PURPOSE.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sparkplug]~ &gt; automake --version
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; automake (GNU automake) 1.8.5
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Written by Tom Tromey &lt;tromey_at_[hidden]&gt;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Copyright 2004 Free Software Foundation, Inc.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is free software; see the source for copying conditions.  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There  is NO
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PURPOSE.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sparkplug]~ &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My ompi version: 7322 - but this has been going on for a few days 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; like  I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; said and I've been updating a lot, with no progress.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Configured using:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ ./configure --enable-static --disable-shared --without-threads
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --prefix=/home/ndebard/local/ompi --with-devel-headers
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --enable-mca-no-build=ptl-gm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Simple C file which I will compile into a shared library:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int test_compile(int x) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    int rc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    rc = orte_init(true);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    printf(&quot;rc = %d\n&quot;, rc);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    return x + 1;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Above file is named 'testlib.c'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OK, so let's build this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sparkplug]~/ompi-test &gt; mpicc -c testlib.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sparkplug]~/ompi-test &gt; mpicc -shared -o libtestlib.so testlib.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/../../../../x86_64-suse- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; linux/bin/ld:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; testlib.o: relocation R_X86_64_32 can not be used when making a 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shared
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; object; recompile with -fPIC
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; testlib.o: could not read symbols: Bad value
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OK so relocation problems.  Maybe I'll follow the directions and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -fPIC
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my file myself:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sparkplug]~/ompi-test &gt; mpicc -c testlib.c -fPIC
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sparkplug]~/ompi-test &gt; mpicc -shared -o libtestlib.so testlib.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/../../../../x86_64-suse- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; linux/bin/ld:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/ndebard/local/ompi/lib/liborte.a(orte_init.o): relocation
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; R_X86_64_32 can not be used when making a shared object; recompile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with -fPIC
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/ndebard/local/ompi/lib/liborte.a: could not read symbols: Bad 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  value
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OK so I read this as there's a relocation problem in 'liborte.a'.  I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; un-arred liborte.a and checked some of the files with 'file' and it  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; says
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 64bit.  I havn't yet written a script to check every file in here, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; here's orte_init.o:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sparkplug]~/&lt;1&gt;tmp &gt; file orte_init.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte_init.o: ELF 64-bit LSB relocatable, AMD x86-64, version 1 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (SYSV),
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; not stripped
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So that at least says it's 64bit.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And to confirm, my mpicc's 64bit too:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sparkplug]~/&lt;1&gt;tmp &gt; which mpicc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/ndebard/local/ompi/bin/mpicc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sparkplug]~/&lt;1&gt;tmp &gt; file /home/ndebard/local/ompi/bin/mpicc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/ndebard/local/ompi/bin/mpicc: ELF 64-bit LSB executable, AMD
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; x86-64, version 1 (SYSV), for GNU/Linux 2.4.1, dynamically linked
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (uses shared libs), not stripped
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Someone suggested I take out the 'disabled-shared' from the configure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; line, so I did.  The result was the same.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So the result is that I can not build a shared library on a 64bit 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linux
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machine that uses orte calls.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So then I tried taking out the orte calls and instead use MPI calls.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sure, this function makes no sense but here it is now:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &quot;orte_config.h&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int test_compile(int x) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    MPI_Comm_rank(MPI_COMM_WORLD, &amp;x);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    return x + 1;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And now, when I try and make a shared object I get relocation errors:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/../../../../x86_64-suse- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; linux/bin/ld:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/ndebard/local/ompi/lib/libmpi.a(comm_init.o): relocation
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; R_X86_64_32 can not be used when making a shared object; recompile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with -fPIC
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/ndebard/local/ompi/lib/libmpi.a: could not read symbols: Bad  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; value
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So... could perhaps the build be messed up and not be really using  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 64bit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; code?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am I the only one seeing this?  It's a trivial test for those of you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with access to a 64bit machine if you wouldn't mind testing for me.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Help would be greatly appreciated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Nathan
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Correspondence
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nathan DeBardeleben, Ph.D.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Parallel Tools Team
</span><br>
<span class="quotelev3">&gt;&gt;&gt; High Performance Computing Environments
</span><br>
<span class="quotelev3">&gt;&gt;&gt; phone: 505-667-3428
</span><br>
<span class="quotelev3">&gt;&gt;&gt; email: ndebard_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="0360.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component --	linux	(fwd)"</a>
<li><strong>Previous message:</strong> <a href="0358.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux	(fwd)"</a>
<li><strong>Maybe in reply to:</strong> <a href="0335.php">Jeff Squyres: "Re:  64bit shared library problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0361.php">Jeff Squyres: "Re:  64bit shared library problems"</a>
<li><strong>Reply:</strong> <a href="0361.php">Jeff Squyres: "Re:  64bit shared library problems"</a>
<li><strong>Reply:</strong> <a href="0362.php">Nathan DeBardeleben: "Re:  64bit shared library problems"</a>
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
