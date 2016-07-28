<?
$subject_val = "Re: [OMPI users] OpenMPI build fails with &quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 21 08:26:21 2012" -->
<!-- isoreceived="20120221132621" -->
<!-- sent="Tue, 21 Feb 2012 08:26:15 -0500" -->
<!-- isosent="20120221132615" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI build fails with &amp;quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&amp;quot;" -->
<!-- id="1D53D2A8-CF02-40F0-A717-DC53827E1F46_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="4F402C4A.9010503_at_mail.huji.ac.il" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI build fails with &quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&quot;<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-21 08:26:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18544.php">Rob Latham: "Re: [OMPI users] ROMIO Podcast"</a>
<li><strong>Previous message:</strong> <a href="18542.php">Rayson Ho: "Re: [OMPI users] ROMIO Podcast"</a>
<li><strong>In reply to:</strong> <a href="18524.php">Alex Margolin: "Re: [OMPI users] OpenMPI build fails with &quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&quot;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Alex --
<br>
<p>I'm sorry this mail thread fell through the cracks.
<br>
<p>You might be using GNU Autotools that are actually too new for the 1.4 series.  The Autotools tightened up on some of their syntax and usage in more recent versions that we didn't adapt to until well after 1.4 branched from the main SVN development trunk.
<br>
<p>That being said, I can't think of a good reason why that would cause those symbols to be undefined.  Perhaps it's a linker visibility issue, caused by weirdness from configure not being entirely correct&#133;?
<br>
<p>Perhaps try the following versions (this is what we use to make the 1.4.x tar balls):
<br>
<p>M4: 1.4.11
<br>
AC: 2.63
<br>
AM: 1.10.3
<br>
LT 2.2.6b (a tarball of this is available here: <a href="http://www.open-mpi.org/svn/building.php">http://www.open-mpi.org/svn/building.php</a>)
<br>
Flex: 2.5.4
<br>
<p>This conversation might well be better suited for the devel list, since you're adding a new component.  If you have further questions, please migrate this thread over to that list.  Thanks!
<br>
<p><p><p>On Feb 18, 2012, at 5:55 PM, Alex Margolin wrote:
<br>
<p><span class="quotelev1">&gt; I've looked for errors/warning in the make, but didn't find anything looking relevant. I've built a few tools &quot;manually&quot;, so I'll write it down here in case anyone comes across this (bug? compatibility issue?) again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Step #1: cd  /home/alex/huji/openmpi-1.4.4/orte/tools/orte-clean
</span><br>
<span class="quotelev1">&gt; Step #2: make (Gives the error output - from here I grab the line for the next state)
</span><br>
<span class="quotelev1">&gt; Step #3: /bin/bash ../../../libtool --tag=CC   --mode=link gcc  -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread -fvisibility=hidden  -export-dynamic   -o orte-clean orte-clean.o ../../../orte/libopen-rte.la -lnsl -lutil  -lm ../../../opal/libopen-pal.la (This last .la file contains the missing symbol!)
</span><br>
<span class="quotelev1">&gt; Step #4: cd  /home/alex/huji/openmpi-1.4.4
</span><br>
<span class="quotelev1">&gt; Step #5: make
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've repeated these five steps a few times to compile the following tools (which gave the same error, so fixed the same way):
</span><br>
<span class="quotelev1">&gt; openmpi-1.4.4/orte/tools/orte-iof , orte-ps, orterun, openmpi-1.4.4/ompi/tools/ompi_info, ompi-server (last two required both libopen-pal.la and libopen-rte.la). I'm not sure about the cause of these failures (is it related to x64? I trued w/ and w/o setting *FLAGS like the FAQ suggests), but the version I've built seems to work (and recognizes the new component - which is my next task).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Alex
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 02/11/2012 11:39 PM, Alex Margolin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I've tried other versions and got the same error, so I have to assume the local software has something to do with it,
</span><br>
<span class="quotelev2">&gt;&gt; so I've gathered the version information of everything that seemed relevat (I'm running a fully updated Ubuntu 11.10):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; alex_at_singularity:~/huji/openmpi-1.4.5rc6$ automake --version
</span><br>
<span class="quotelev2">&gt;&gt; automake (GNU automake) 1.11.1
</span><br>
<span class="quotelev2">&gt;&gt; Copyright (C) 2009 Free Software Foundation, Inc.
</span><br>
<span class="quotelev2">&gt;&gt; License GPLv2+: GNU GPL version 2 or later &lt;<a href="http://gnu.org/licenses/gpl-2.0.html">http://gnu.org/licenses/gpl-2.0.html</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is free software: you are free to change and redistribute it.
</span><br>
<span class="quotelev2">&gt;&gt; There is NO WARRANTY, to the extent permitted by law.
</span><br>
<span class="quotelev2">&gt;&gt; Written by Tom Tromey &lt;tromey_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       and Alexandre Duret-Lutz &lt;adl_at_[hidden]&gt;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; alex_at_singularity:~/huji/openmpi-1.4.5rc6$ autoconf --version
</span><br>
<span class="quotelev2">&gt;&gt; autoconf (GNU Autoconf) 2.68
</span><br>
<span class="quotelev2">&gt;&gt; Copyright (C) 2010 Free Software Foundation, Inc.
</span><br>
<span class="quotelev2">&gt;&gt; License GPLv3+/Autoconf: GNU GPL version 3 or later
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;, &lt;<a href="http://gnu.org/licenses/exceptions.html">http://gnu.org/licenses/exceptions.html</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is free software: you are free to change and redistribute it.
</span><br>
<span class="quotelev2">&gt;&gt; There is NO WARRANTY, to the extent permitted by law.
</span><br>
<span class="quotelev2">&gt;&gt; Written by David J. MacKenzie and Akim Demaille.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; alex_at_singularity:~/huji/openmpi-1.4.5rc6$ libtool --version
</span><br>
<span class="quotelev2">&gt;&gt; libtool (GNU libtool) 2.4
</span><br>
<span class="quotelev2">&gt;&gt; Written by Gordon Matzigkeit &lt;gord_at_[hidden]&gt;, 1996
</span><br>
<span class="quotelev2">&gt;&gt; Copyright (C) 2010 Free Software Foundation, Inc.
</span><br>
<span class="quotelev2">&gt;&gt; This is free software; see the source for copying conditions.  There is NO
</span><br>
<span class="quotelev2">&gt;&gt; warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
</span><br>
<span class="quotelev2">&gt;&gt; alex_at_singularity:~/huji/openmpi-1.4.5rc6$
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 02/11/2012 07:10 PM, Alex Margolin wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried to unpack and build version 1.4.4 and run into a rare error, and I didn't find any mention of it online.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I know I shouldn't run autogen.sh (builds OK without it) unless I have a new MCA component, but this is the case here, so...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does anyone else experience such errors (the command I ran appears at the bottom)?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any tips on how to solve or get around it?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Alex
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Making install in tools/orte-clean
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Entering directory `/home/alex/huji/openmpi-1.4.4/orte/tools/orte-clean'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /bin/bash ../../../libtool --tag=CC   --mode=link gcc  -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread -fvisibility=hidden  -export-dynamic   -o orte-clean orte-clean.o ../../../orte/libopen-rte.la -lnsl -lutil  -lm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtool: link: gcc -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread -fvisibility=hidden -o .libs/orte-clean orte-clean.o -Wl,--export-dynamic  ../../../orte/.libs/libopen-rte.so -lnsl -lutil -lm -pthread -Wl,-rpath -Wl,/home/alex/huji/ompi4/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/bin/ld: orte-clean.o: undefined reference to symbol 'opal_cmd_line_get_usage_msg'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/bin/ld: note: 'opal_cmd_line_get_usage_msg' is defined in DSO /home/alex/huji/ompi4/lib/libopen-pal.so.0 so try adding it to the linker command line
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/alex/huji/ompi4/lib/libopen-pal.so.0: could not read symbols: Invalid operation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: *** [orte-clean] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Leaving directory `/home/alex/huji/openmpi-1.4.4/orte/tools/orte-clean'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Leaving directory `/home/alex/huji/openmpi-1.4.4/orte'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; alex_at_singularity:~/huji/openmpi-1.4.4$ make clean ; ./autogen.sh ; ./configure --prefix=/home/alex/huji/ompi4 ; make ; make install
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18544.php">Rob Latham: "Re: [OMPI users] ROMIO Podcast"</a>
<li><strong>Previous message:</strong> <a href="18542.php">Rayson Ho: "Re: [OMPI users] ROMIO Podcast"</a>
<li><strong>In reply to:</strong> <a href="18524.php">Alex Margolin: "Re: [OMPI users] OpenMPI build fails with &quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&quot;"</a>
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
