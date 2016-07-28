<?
$subject_val = "Re: [OMPI users] OpenMPI build fails with &quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 18 17:55:16 2012" -->
<!-- isoreceived="20120218225516" -->
<!-- sent="Sun, 19 Feb 2012 00:55:06 +0200" -->
<!-- isosent="20120218225506" -->
<!-- name="Alex Margolin" -->
<!-- email="alex.margolin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI build fails with &amp;quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&amp;quot;" -->
<!-- id="4F402C4A.9010503_at_mail.huji.ac.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F36DFFA.1040404_at_mail.huji.ac.il" -->
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
<strong>From:</strong> Alex Margolin (<em>alex.margolin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-18 17:55:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18525.php">Truls Edvard Stokke: "[OMPI users] Unexpected warning/return from mpirun with minimal MPI program"</a>
<li><strong>Previous message:</strong> <a href="18523.php">Aleksej Saushev: "[OMPI users] WEXITSTATUS: OpenMPI 1.5.5 RC1 doesn't build on NetBSD (and perhaps other BSDs)"</a>
<li><strong>In reply to:</strong> <a href="18435.php">Alex Margolin: "Re: [OMPI users] OpenMPI build fails with &quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18543.php">Jeffrey Squyres: "Re: [OMPI users] OpenMPI build fails with &quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&quot;"</a>
<li><strong>Reply:</strong> <a href="18543.php">Jeffrey Squyres: "Re: [OMPI users] OpenMPI build fails with &quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've looked for errors/warning in the make, but didn't find anything 
<br>
looking relevant. I've built a few tools &quot;manually&quot;, so I'll write it 
<br>
down here in case anyone comes across this (bug? compatibility issue?) 
<br>
again.
<br>
<p>Step #1: cd  /home/alex/huji/openmpi-1.4.4/orte/tools/orte-clean
<br>
Step #2: make (Gives the error output - from here I grab the line for 
<br>
the next state)
<br>
Step #3: /bin/bash ../../../libtool --tag=CC   --mode=link gcc  -O3 
<br>
-DNDEBUG -finline-functions -fno-strict-aliasing -pthread 
<br>
-fvisibility=hidden  -export-dynamic   -o orte-clean orte-clean.o 
<br>
../../../orte/libopen-rte.la -lnsl -lutil  -lm 
<br>
../../../opal/libopen-pal.la (This last .la file contains the missing 
<br>
symbol!)
<br>
Step #4: cd  /home/alex/huji/openmpi-1.4.4
<br>
Step #5: make
<br>
<p>I've repeated these five steps a few times to compile the following 
<br>
tools (which gave the same error, so fixed the same way):
<br>
openmpi-1.4.4/orte/tools/orte-iof , orte-ps, orterun, 
<br>
openmpi-1.4.4/ompi/tools/ompi_info, ompi-server (last two required both 
<br>
libopen-pal.la and libopen-rte.la). I'm not sure about the cause of 
<br>
these failures (is it related to x64? I trued w/ and w/o setting *FLAGS 
<br>
like the FAQ suggests), but the version I've built seems to work (and 
<br>
recognizes the new component - which is my next task).
<br>
<p>Alex
<br>
<p>On 02/11/2012 11:39 PM, Alex Margolin wrote:
<br>
<span class="quotelev1">&gt; I've tried other versions and got the same error, so I have to assume 
</span><br>
<span class="quotelev1">&gt; the local software has something to do with it,
</span><br>
<span class="quotelev1">&gt; so I've gathered the version information of everything that seemed 
</span><br>
<span class="quotelev1">&gt; relevat (I'm running a fully updated Ubuntu 11.10):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; alex_at_singularity:~/huji/openmpi-1.4.5rc6$ automake --version
</span><br>
<span class="quotelev1">&gt; automake (GNU automake) 1.11.1
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2009 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; License GPLv2+: GNU GPL version 2 or later 
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://gnu.org/licenses/gpl-2.0.html">http://gnu.org/licenses/gpl-2.0.html</a>&gt;
</span><br>
<span class="quotelev1">&gt; This is free software: you are free to change and redistribute it.
</span><br>
<span class="quotelev1">&gt; There is NO WARRANTY, to the extent permitted by law.
</span><br>
<span class="quotelev1">&gt; Written by Tom Tromey &lt;tromey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;        and Alexandre Duret-Lutz &lt;adl_at_[hidden]&gt;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; alex_at_singularity:~/huji/openmpi-1.4.5rc6$ autoconf --version
</span><br>
<span class="quotelev1">&gt; autoconf (GNU Autoconf) 2.68
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2010 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; License GPLv3+/Autoconf: GNU GPL version 3 or later
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;, 
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://gnu.org/licenses/exceptions.html">http://gnu.org/licenses/exceptions.html</a>&gt;
</span><br>
<span class="quotelev1">&gt; This is free software: you are free to change and redistribute it.
</span><br>
<span class="quotelev1">&gt; There is NO WARRANTY, to the extent permitted by law.
</span><br>
<span class="quotelev1">&gt; Written by David J. MacKenzie and Akim Demaille.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; alex_at_singularity:~/huji/openmpi-1.4.5rc6$ libtool --version
</span><br>
<span class="quotelev1">&gt; libtool (GNU libtool) 2.4
</span><br>
<span class="quotelev1">&gt; Written by Gordon Matzigkeit &lt;gord_at_[hidden]&gt;, 1996
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2010 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; This is free software; see the source for copying conditions.  There 
</span><br>
<span class="quotelev1">&gt; is NO
</span><br>
<span class="quotelev1">&gt; warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR 
</span><br>
<span class="quotelev1">&gt; PURPOSE.
</span><br>
<span class="quotelev1">&gt; alex_at_singularity:~/huji/openmpi-1.4.5rc6$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 02/11/2012 07:10 PM, Alex Margolin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried to unpack and build version 1.4.4 and run into a rare error, 
</span><br>
<span class="quotelev2">&gt;&gt; and I didn't find any mention of it online.
</span><br>
<span class="quotelev2">&gt;&gt; I know I shouldn't run autogen.sh (builds OK without it) unless I 
</span><br>
<span class="quotelev2">&gt;&gt; have a new MCA component, but this is the case here, so...
</span><br>
<span class="quotelev2">&gt;&gt; Does anyone else experience such errors (the command I ran appears at 
</span><br>
<span class="quotelev2">&gt;&gt; the bottom)?
</span><br>
<span class="quotelev2">&gt;&gt; Any tips on how to solve or get around it?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Alex
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Making install in tools/orte-clean
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory 
</span><br>
<span class="quotelev2">&gt;&gt; `/home/alex/huji/openmpi-1.4.4/orte/tools/orte-clean'
</span><br>
<span class="quotelev2">&gt;&gt; /bin/bash ../../../libtool --tag=CC   --mode=link gcc  -O3 -DNDEBUG 
</span><br>
<span class="quotelev2">&gt;&gt; -finline-functions -fno-strict-aliasing -pthread -fvisibility=hidden  
</span><br>
<span class="quotelev2">&gt;&gt; -export-dynamic   -o orte-clean orte-clean.o 
</span><br>
<span class="quotelev2">&gt;&gt; ../../../orte/libopen-rte.la -lnsl -lutil  -lm
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: gcc -O3 -DNDEBUG -finline-functions 
</span><br>
<span class="quotelev2">&gt;&gt; -fno-strict-aliasing -pthread -fvisibility=hidden -o .libs/orte-clean 
</span><br>
<span class="quotelev2">&gt;&gt; orte-clean.o -Wl,--export-dynamic  ../../../orte/.libs/libopen-rte.so 
</span><br>
<span class="quotelev2">&gt;&gt; -lnsl -lutil -lm -pthread -Wl,-rpath -Wl,/home/alex/huji/ompi4/lib
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: orte-clean.o: undefined reference to symbol 
</span><br>
<span class="quotelev2">&gt;&gt; 'opal_cmd_line_get_usage_msg'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: note: 'opal_cmd_line_get_usage_msg' is defined in DSO 
</span><br>
<span class="quotelev2">&gt;&gt; /home/alex/huji/ompi4/lib/libopen-pal.so.0 so try adding it to the 
</span><br>
<span class="quotelev2">&gt;&gt; linker command line
</span><br>
<span class="quotelev2">&gt;&gt; /home/alex/huji/ompi4/lib/libopen-pal.so.0: could not read symbols: 
</span><br>
<span class="quotelev2">&gt;&gt; Invalid operation
</span><br>
<span class="quotelev2">&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [orte-clean] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory 
</span><br>
<span class="quotelev2">&gt;&gt; `/home/alex/huji/openmpi-1.4.4/orte/tools/orte-clean'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/home/alex/huji/openmpi-1.4.4/orte'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; alex_at_singularity:~/huji/openmpi-1.4.4$ make clean ; ./autogen.sh ; 
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/home/alex/huji/ompi4 ; make ; make install
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18525.php">Truls Edvard Stokke: "[OMPI users] Unexpected warning/return from mpirun with minimal MPI program"</a>
<li><strong>Previous message:</strong> <a href="18523.php">Aleksej Saushev: "[OMPI users] WEXITSTATUS: OpenMPI 1.5.5 RC1 doesn't build on NetBSD (and perhaps other BSDs)"</a>
<li><strong>In reply to:</strong> <a href="18435.php">Alex Margolin: "Re: [OMPI users] OpenMPI build fails with &quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18543.php">Jeffrey Squyres: "Re: [OMPI users] OpenMPI build fails with &quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&quot;"</a>
<li><strong>Reply:</strong> <a href="18543.php">Jeffrey Squyres: "Re: [OMPI users] OpenMPI build fails with &quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&quot;"</a>
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
