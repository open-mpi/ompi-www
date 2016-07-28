<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 15 15:47:11 2005" -->
<!-- isoreceived="20050915204711" -->
<!-- sent="Thu, 15 Sep 2005 14:47:07 -0600" -->
<!-- isosent="20050915204707" -->
<!-- name="Nathan DeBardeleben" -->
<!-- email="ndebard_at_[hidden]" -->
<!-- subject="Re:  64bit shared library problems" -->
<!-- id="4329DDCB.8030300_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="e4ae4aa8852168d24eedc16f8a89ee5e_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-09-15 15:47:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0363.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux (fwd)"</a>
<li><strong>Previous message:</strong> <a href="0361.php">Jeff Squyres: "Re:  64bit shared library problems"</a>
<li><strong>In reply to:</strong> <a href="0359.php">Jeff Squyres: "Re:  64bit shared library problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0336.php">Ralf Wildenhues: "Re:  64bit shared library problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff and everyone else I contacted about this: thanks for helping track 
<br>
down the problem.  I've been beating my head on this for a few days and 
<br>
don't have the library experience to have caught these nuances.  Thanks 
<br>
again!
<br>
<p>-- Nathan
<br>
Correspondence
<br>
---------------------------------------------------------------------
<br>
Nathan DeBardeleben, Ph.D.
<br>
Los Alamos National Laboratory
<br>
Parallel Tools Team
<br>
High Performance Computing Environments
<br>
phone: 505-667-3428
<br>
email: ndebard_at_[hidden]
<br>
---------------------------------------------------------------------
<br>
<p><p><p>Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt;Followup for the list... a bit of explanation of Nathan's problem about 
</span><br>
<span class="quotelev1">&gt;shared libraries and unresolved symbols.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Short version:
</span><br>
<span class="quotelev1">&gt;--------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;It's an OMPI bug when built as a shared library (not an issue for 
</span><br>
<span class="quotelev1">&gt;static libraries).  The fix is straightforward, but involves grunt 
</span><br>
<span class="quotelev1">&gt;work.  I'll try to get a student to do it RSN.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Long version:
</span><br>
<span class="quotelev1">&gt;-------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;What's happening is that we are not linking OMPI components against the 
</span><br>
<span class="quotelev1">&gt;opal/orte/ompi libraries.  As such, we are exploiting the fact that 
</span><br>
<span class="quotelev1">&gt;when they are dlopened by a standalone application (e.g., a.out), the 
</span><br>
<span class="quotelev1">&gt;Libtool portable version of dlopen() exports all the symbols from the 
</span><br>
<span class="quotelev1">&gt;parent process such that the child can find and use them at run-time to 
</span><br>
<span class="quotelev1">&gt;resolve any unknown symbols.  Here's an example (I'm leaving out some 
</span><br>
<span class="quotelev1">&gt;fine-grained details, and it's slightly different on different OS's, 
</span><br>
<span class="quotelev1">&gt;but this is &quot;true enough&quot; for the purposes of this thread):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;- a.out, which was linked against libopal.so (and friends), launches
</span><br>
<span class="quotelev1">&gt;- the linker runs into an unresolved symbol
</span><br>
<span class="quotelev1">&gt;- the linker sees that that symbols is supposed to be in &quot;libopal.so&quot;, 
</span><br>
<span class="quotelev1">&gt;and starts searching LD_LIBRARY_PATH for it
</span><br>
<span class="quotelev1">&gt;- the linker finds libopal.so, loads it, and is able to resolve the 
</span><br>
<span class="quotelev1">&gt;symbol
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;It gets interesting at this part:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;- within MPI_Init()/orte_init()/opal_init() (i.e., however you 
</span><br>
<span class="quotelev1">&gt;initialized yourself to OMPI/ORTE/OPAL), we use the Libtool portable 
</span><br>
<span class="quotelev1">&gt;dlopen() to open our components
</span><br>
<span class="quotelev1">&gt;- the components will have unresolved symbols as well (i.e., the 
</span><br>
<span class="quotelev1">&gt;symbols in libopal, liborte, and libmpi)
</span><br>
<span class="quotelev1">&gt;- when the linker hits these, it tries to resolve them.
</span><br>
<span class="quotelev1">&gt;- first, the linker looks in the public namespace of the process, and 
</span><br>
<span class="quotelev1">&gt;if it finds the symbols there, it's done
</span><br>
<span class="quotelev1">&gt;- in this case, libopal (and friends) have already been loaded in the 
</span><br>
<span class="quotelev1">&gt;process, so the linker can find the symbols right away -- without 
</span><br>
<span class="quotelev1">&gt;loading any additional libraries
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This is the scheme that we were relying on for libopal/orte/ompi 
</span><br>
<span class="quotelev1">&gt;symbols to be resolved in our components.  And for standalone 
</span><br>
<span class="quotelev1">&gt;executables, it works fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;But for an environment like Eclipse, it doesn't.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I don't know anything about Eclipse, but I'm assuming that it does 
</span><br>
<span class="quotelev1">&gt;something similar to our component system -- it dlopen's them.  However 
</span><br>
<span class="quotelev1">&gt;-- here's where my guess comes in -- it doesn't make all the symbols in 
</span><br>
<span class="quotelev1">&gt;the opened component be in the public namespace of the process (this is 
</span><br>
<span class="quotelev1">&gt;different than what OMPI does, for various reasons).  Hence, if you 
</span><br>
<span class="quotelev1">&gt;build an Eclipse component against OMPI, the Eclipse component will be 
</span><br>
<span class="quotelev1">&gt;dynamically linked against libopal (etc.).  So when Eclipse loads in 
</span><br>
<span class="quotelev1">&gt;your component, similar to the standalone executable example above, the 
</span><br>
<span class="quotelev1">&gt;linker will realize that it has unresolved symbols and will use the 
</span><br>
<span class="quotelev1">&gt;normal mechanism to resolve them (e.g., look for libopal.so in 
</span><br>
<span class="quotelev1">&gt;LD_LIBRARY_PATH).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The problem comes in when we dlopen OMPI/ORTE/OPAL components.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Our scheme assumed that we'd be able to find the opal/orte/ompi symbols 
</span><br>
<span class="quotelev1">&gt;in the public namespace of the parent process.  But they're not -- 
</span><br>
<span class="quotelev1">&gt;Eclipse loaded the component in a private namespace, and therefore all 
</span><br>
<span class="quotelev1">&gt;the opal/orte/ompi symbols are in that private namespace.  And 
</span><br>
<span class="quotelev1">&gt;therefore the OMPI/ORTE/OPAL components can't find the symbols, and the 
</span><br>
<span class="quotelev1">&gt;linker barfs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The solution is to change our scheme in OMPI a bit.  We just need to 
</span><br>
<span class="quotelev1">&gt;add a few lines to all the component Makefile.am's to, in the dynamic 
</span><br>
<span class="quotelev1">&gt;case, link the components against their relevant libraries (opal 
</span><br>
<span class="quotelev1">&gt;components linked against libopal, orte components linked against 
</span><br>
<span class="quotelev1">&gt;liborte and libopal, etc.).  This does not make the components 
</span><br>
<span class="quotelev1">&gt;significantly larger -- it just adds an entry into the dynamic linker 
</span><br>
<span class="quotelev1">&gt;section of the component's resulting .so file indicating &quot;if you have 
</span><br>
<span class="quotelev1">&gt;unresolved components, go look in libopal.so&quot; (etc.).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This allows the components themselves to pull in shared libraries when 
</span><br>
<span class="quotelev1">&gt;they are dlopened -- if they need to.  If the symbols can be resolved 
</span><br>
<span class="quotelev1">&gt;in the parent process' public symbol namespace, they still will be (as 
</span><br>
<span class="quotelev1">&gt;in the standalone executable example, above).  But if they can't be 
</span><br>
<span class="quotelev1">&gt;resolved that way, this gives the ability to explicitly find and pull 
</span><br>
<span class="quotelev1">&gt;in a shared library and resolve the symbols that way (as in the Eclipse 
</span><br>
<span class="quotelev1">&gt;plugin example, above).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Aren't computers fun?  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Sep 14, 2005, at 12:47 PM, Nathan DeBardeleben wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Let me explain what I'm doing real quickly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I have a piece of Java code which is calling OMPI calls.  It's doing 
</span><br>
<span class="quotelev2">&gt;&gt;this through JNI (java native interface).  Don't worry, you don't have 
</span><br>
<span class="quotelev2">&gt;&gt;to understand Java to try and help me here.  The JNI code is C with 
</span><br>
<span class="quotelev2">&gt;&gt;some funky macros in it provided by Java.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I have to compile the JNI C code into a shared library and then the 
</span><br>
<span class="quotelev2">&gt;&gt;Java code will load it dynamically when that class is instantiated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;So - here's my compile line:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;[sparkplug]~/&lt;2&gt;ompi &gt; mpicc -I /usr/java/jdk1.5.0_04/include -I 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;/usr/java/jdk1.5.0_04/include/linux -c ptp_ompi_jni.c -fPIC           
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         [sparkplug]~/&lt;2&gt;ompi &gt; mpicc -I 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;/usr/java/jdk1.5.0_04/include -I /usr/java/jdk1.5.0_04/include/linux 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;-shared -o libptp_ompi_jni.so ptp_ompi_jni.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I then have libptp_ompi_jni.so.  I then load that from within Java.  
</span><br>
<span class="quotelev2">&gt;&gt;If I setup my LD_LIBRARY_PATH and some args to the Java VM correctly, 
</span><br>
<span class="quotelev2">&gt;&gt;then it finds the above library and loads it up.  OK - all fine so 
</span><br>
<span class="quotelev2">&gt;&gt;far.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;However, when I call 'orte_init()' it craps out with the following 
</span><br>
<span class="quotelev2">&gt;&gt;error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;/usr/java/jdk1.5.0_04/bin/java: error while loading shared libraries: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;/home/ndebard/local/ompi/lib/openmpi/mca_paffinity_linux.so: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;undefined symbol: mca_base_param_reg_int
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;So I went digging in mca_paffinity_linux.so looking for that symbol.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;[sparkplug]~/&lt;3&gt;openmpi &gt; nm mca_paffinity_linux.so | grep 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;mca_base_param_reg
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 U mca_base_param_reg_int
</span><br>
<span class="quotelev3">&gt;&gt;&gt;[sparkplug]~/&lt;3&gt;openmpi &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;OK.  So it's undefined in that .so.
</span><br>
<span class="quotelev2">&gt;&gt;I'm really not a library guy (can't you tell from my myriad of 
</span><br>
<span class="quotelev2">&gt;&gt;mails?).  What does this mean?  I went back digging in the parent 
</span><br>
<span class="quotelev2">&gt;&gt;directory, /home/ndebard/local/ompi/lib, to find the symbol.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;[sparkplug]~/&lt;2&gt;lib &gt; nm libopal.so | grep mca_base_param_reg_int
</span><br>
<span class="quotelev3">&gt;&gt;&gt;000000000001ce00 T mca_base_param_reg_int
</span><br>
<span class="quotelev3">&gt;&gt;&gt;000000000001cea3 T mca_base_param_reg_int_name
</span><br>
<span class="quotelev3">&gt;&gt;&gt;[sparkplug]~/&lt;2&gt;lib &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;OK so I read this as it's defined in opal.so.
</span><br>
<span class="quotelev2">&gt;&gt;Do you have any idea why my JNI library is trying to load 
</span><br>
<span class="quotelev2">&gt;&gt;mca_paffinity_linux.so?
</span><br>
<span class="quotelev2">&gt;&gt;I went back to my compile line and added -lopal -lmpi -lorte just in 
</span><br>
<span class="quotelev2">&gt;&gt;case, but that didn't help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Again, Jeff, I know this isn't really your concern (unless you want a 
</span><br>
<span class="quotelev2">&gt;&gt;wicked OMPI graphical demo at SC!) :) but I wanted to drop it out 
</span><br>
<span class="quotelev2">&gt;&gt;there in case you had any insight.  I'm kinda stumped on this one.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Does it mean my ompi compile is bad?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;-- Nathan
</span><br>
<span class="quotelev2">&gt;&gt;Correspondence
</span><br>
<span class="quotelev2">&gt;&gt;---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;Nathan DeBardeleben, Ph.D.
</span><br>
<span class="quotelev2">&gt;&gt;Los Alamos National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt;Parallel Tools Team
</span><br>
<span class="quotelev2">&gt;&gt;High Performance Computing Environments
</span><br>
<span class="quotelev2">&gt;&gt;phone: 505-667-3428
</span><br>
<span class="quotelev2">&gt;&gt;email: ndebard_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Maybe I'm dense -- I thought you couldn't use --shared when linking 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;to  a static library...?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;If you want to build OMPI as a shared library, then ditch the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;--enable-static --disable-shared from your configure line (building  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;OMPI as shared is the default, which is how I build 95% of the time).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;On Sep 12, 2005, at 5:47 PM, Nathan DeBardeleben wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;I've been having this problem for a week or so and I've been asking
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;other people to weigh in if they know what I'm doing wrong.  I've  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;gotten
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;no where on this so I figure I'll finally drop it out on the list.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;First, here's the important info:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;The machine:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;[sparkplug]~ &gt; cat /etc/issue
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;Welcome to SuSE Linux 9.1 (x86-64) - Kernel \r (\l).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;[sparkplug]~ &gt; uname -a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;Linux sparkplug 2.6.10 #4 SMP Wed Jan 26 11:50:00 MST 2005 x86_64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;My versions of libtool, autoconf, automake:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;[sparkplug]~ &gt; libtool --version
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;ltmain.sh (GNU libtool) 1.5.20 (1.1220.2.287 2005/08/31 18:54:15)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;Copyright (C) 2005  Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;This is free software; see the source for copying conditions.  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;There  is NO
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;PURPOSE.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;[sparkplug]~ &gt; autoconf --version
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;autoconf (GNU Autoconf) 2.59
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;Written by David J. MacKenzie and Akim Demaille.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;Copyright (C) 2003 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;This is free software; see the source for copying conditions.  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;There  is NO
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;PURPOSE.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;[sparkplug]~ &gt; automake --version
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;automake (GNU automake) 1.8.5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;Written by Tom Tromey &lt;tromey_at_[hidden]&gt;.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;Copyright 2004 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;This is free software; see the source for copying conditions.  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;There  is NO
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;PURPOSE.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;[sparkplug]~ &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;My ompi version: 7322 - but this has been going on for a few days 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;like  I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;said and I've been updating a lot, with no progress.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Configured using:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;$ ./configure --enable-static --disable-shared --without-threads
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;--prefix=/home/ndebard/local/ompi --with-devel-headers
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;--enable-mca-no-build=ptl-gm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Simple C file which I will compile into a shared library:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;int test_compile(int x) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   int rc;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   rc = orte_init(true);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   printf(&quot;rc = %d\n&quot;, rc);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   return x + 1;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;}
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Above file is named 'testlib.c'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;OK, so let's build this:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;[sparkplug]~/ompi-test &gt; mpicc -c testlib.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;[sparkplug]~/ompi-test &gt; mpicc -shared -o libtestlib.so testlib.o
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;/usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/../../../../x86_64-suse- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;linux/bin/ld:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;testlib.o: relocation R_X86_64_32 can not be used when making a 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;shared
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;object; recompile with -fPIC
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;testlib.o: could not read symbols: Bad value
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;OK so relocation problems.  Maybe I'll follow the directions and 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;-fPIC
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;my file myself:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;[sparkplug]~/ompi-test &gt; mpicc -c testlib.c -fPIC
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;[sparkplug]~/ompi-test &gt; mpicc -shared -o libtestlib.so testlib.o
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;/usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/../../../../x86_64-suse- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;linux/bin/ld:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;/home/ndebard/local/ompi/lib/liborte.a(orte_init.o): relocation
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;R_X86_64_32 can not be used when making a shared object; recompile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;with -fPIC
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;/home/ndebard/local/ompi/lib/liborte.a: could not read symbols: Bad 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;OK so I read this as there's a relocation problem in 'liborte.a'.  I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;un-arred liborte.a and checked some of the files with 'file' and it  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;says
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;64bit.  I havn't yet written a script to check every file in here, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;but
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;here's orte_init.o:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;[sparkplug]~/&lt;1&gt;tmp &gt; file orte_init.o
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;orte_init.o: ELF 64-bit LSB relocatable, AMD x86-64, version 1 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;(SYSV),
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;not stripped
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;So that at least says it's 64bit.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;And to confirm, my mpicc's 64bit too:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;[sparkplug]~/&lt;1&gt;tmp &gt; which mpicc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;/home/ndebard/local/ompi/bin/mpicc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;[sparkplug]~/&lt;1&gt;tmp &gt; file /home/ndebard/local/ompi/bin/mpicc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;/home/ndebard/local/ompi/bin/mpicc: ELF 64-bit LSB executable, AMD
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;x86-64, version 1 (SYSV), for GNU/Linux 2.4.1, dynamically linked
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;(uses shared libs), not stripped
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Someone suggested I take out the 'disabled-shared' from the configure
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;line, so I did.  The result was the same.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;So the result is that I can not build a shared library on a 64bit 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;linux
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;machine that uses orte calls.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;So then I tried taking out the orte calls and instead use MPI calls.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Sure, this function makes no sense but here it is now:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;#include &quot;orte_config.h&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;#include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;int test_compile(int x) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;x);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   return x + 1;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;}
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;And now, when I try and make a shared object I get relocation errors:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;/usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/../../../../x86_64-suse- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;linux/bin/ld:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;/home/ndebard/local/ompi/lib/libmpi.a(comm_init.o): relocation
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;R_X86_64_32 can not be used when making a shared object; recompile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;with -fPIC
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;/home/ndebard/local/ompi/lib/libmpi.a: could not read symbols: Bad  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;value
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;So... could perhaps the build be messed up and not be really using  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;64bit
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;code?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Am I the only one seeing this?  It's a trivial test for those of you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;with access to a 64bit machine if you wouldn't mind testing for me.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Help would be greatly appreciated.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;-- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;-- Nathan
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Correspondence
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;---------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Nathan DeBardeleben, Ph.D.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Los Alamos National Laboratory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Parallel Tools Team
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;High Performance Computing Environments
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;phone: 505-667-3428
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;email: ndebard_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;---------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0363.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux (fwd)"</a>
<li><strong>Previous message:</strong> <a href="0361.php">Jeff Squyres: "Re:  64bit shared library problems"</a>
<li><strong>In reply to:</strong> <a href="0359.php">Jeff Squyres: "Re:  64bit shared library problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0336.php">Ralf Wildenhues: "Re:  64bit shared library problems"</a>
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
