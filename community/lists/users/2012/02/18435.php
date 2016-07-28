<?
$subject_val = "Re: [OMPI users] OpenMPI build fails with &quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 11 16:39:15 2012" -->
<!-- isoreceived="20120211213915" -->
<!-- sent="Sat, 11 Feb 2012 23:39:06 +0200" -->
<!-- isosent="20120211213906" -->
<!-- name="Alex Margolin" -->
<!-- email="alex.margolin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI build fails with &amp;quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&amp;quot;" -->
<!-- id="4F36DFFA.1040404_at_mail.huji.ac.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F36A117.2060608_at_mail.huji.ac.il" -->
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
<strong>Date:</strong> 2012-02-11 16:39:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18436.php">Richard Bardwell: "[OMPI users] MPI orte_init fails on remote nodes"</a>
<li><strong>Previous message:</strong> <a href="18434.php">Alex Margolin: "[OMPI users] OpenMPI build fails with &quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&quot;"</a>
<li><strong>In reply to:</strong> <a href="18434.php">Alex Margolin: "[OMPI users] OpenMPI build fails with &quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18448.php">Jeff Squyres: "Re: [OMPI users] OpenMPI build fails with &quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&quot;"</a>
<li><strong>Reply:</strong> <a href="18448.php">Jeff Squyres: "Re: [OMPI users] OpenMPI build fails with &quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&quot;"</a>
<li><strong>Reply:</strong> <a href="18524.php">Alex Margolin: "Re: [OMPI users] OpenMPI build fails with &quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've tried other versions and got the same error, so I have to assume 
<br>
the local software has something to do with it,
<br>
so I've gathered the version information of everything that seemed 
<br>
relevat (I'm running a fully updated Ubuntu 11.10):
<br>
<p>alex_at_singularity:~/huji/openmpi-1.4.5rc6$ automake --version
<br>
automake (GNU automake) 1.11.1
<br>
Copyright (C) 2009 Free Software Foundation, Inc.
<br>
License GPLv2+: GNU GPL version 2 or later 
<br>
&lt;<a href="http://gnu.org/licenses/gpl-2.0.html">http://gnu.org/licenses/gpl-2.0.html</a>&gt;
<br>
This is free software: you are free to change and redistribute it.
<br>
There is NO WARRANTY, to the extent permitted by law.
<br>
Written by Tom Tromey &lt;tromey_at_[hidden]&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and Alexandre Duret-Lutz &lt;adl_at_[hidden]&gt;.
<br>
<p>alex_at_singularity:~/huji/openmpi-1.4.5rc6$ autoconf --version
<br>
autoconf (GNU Autoconf) 2.68
<br>
Copyright (C) 2010 Free Software Foundation, Inc.
<br>
License GPLv3+/Autoconf: GNU GPL version 3 or later
<br>
&lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;, 
<br>
&lt;<a href="http://gnu.org/licenses/exceptions.html">http://gnu.org/licenses/exceptions.html</a>&gt;
<br>
This is free software: you are free to change and redistribute it.
<br>
There is NO WARRANTY, to the extent permitted by law.
<br>
Written by David J. MacKenzie and Akim Demaille.
<br>
<p>alex_at_singularity:~/huji/openmpi-1.4.5rc6$ libtool --version
<br>
libtool (GNU libtool) 2.4
<br>
Written by Gordon Matzigkeit &lt;gord_at_[hidden]&gt;, 1996
<br>
Copyright (C) 2010 Free Software Foundation, Inc.
<br>
This is free software; see the source for copying conditions.  There is NO
<br>
warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
<br>
alex_at_singularity:~/huji/openmpi-1.4.5rc6$
<br>
<p><p>On 02/11/2012 07:10 PM, Alex Margolin wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried to unpack and build version 1.4.4 and run into a rare error, 
</span><br>
<span class="quotelev1">&gt; and I didn't find any mention of it online.
</span><br>
<span class="quotelev1">&gt; I know I shouldn't run autogen.sh (builds OK without it) unless I have 
</span><br>
<span class="quotelev1">&gt; a new MCA component, but this is the case here, so...
</span><br>
<span class="quotelev1">&gt; Does anyone else experience such errors (the command I ran appears at 
</span><br>
<span class="quotelev1">&gt; the bottom)?
</span><br>
<span class="quotelev1">&gt; Any tips on how to solve or get around it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Alex
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Making install in tools/orte-clean
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory 
</span><br>
<span class="quotelev1">&gt; `/home/alex/huji/openmpi-1.4.4/orte/tools/orte-clean'
</span><br>
<span class="quotelev1">&gt; /bin/bash ../../../libtool --tag=CC   --mode=link gcc  -O3 -DNDEBUG 
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -pthread -fvisibility=hidden  
</span><br>
<span class="quotelev1">&gt; -export-dynamic   -o orte-clean orte-clean.o 
</span><br>
<span class="quotelev1">&gt; ../../../orte/libopen-rte.la -lnsl -lutil  -lm
</span><br>
<span class="quotelev1">&gt; libtool: link: gcc -O3 -DNDEBUG -finline-functions 
</span><br>
<span class="quotelev1">&gt; -fno-strict-aliasing -pthread -fvisibility=hidden -o .libs/orte-clean 
</span><br>
<span class="quotelev1">&gt; orte-clean.o -Wl,--export-dynamic  ../../../orte/.libs/libopen-rte.so 
</span><br>
<span class="quotelev1">&gt; -lnsl -lutil -lm -pthread -Wl,-rpath -Wl,/home/alex/huji/ompi4/lib
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: orte-clean.o: undefined reference to symbol 
</span><br>
<span class="quotelev1">&gt; 'opal_cmd_line_get_usage_msg'
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: note: 'opal_cmd_line_get_usage_msg' is defined in DSO 
</span><br>
<span class="quotelev1">&gt; /home/alex/huji/ompi4/lib/libopen-pal.so.0 so try adding it to the 
</span><br>
<span class="quotelev1">&gt; linker command line
</span><br>
<span class="quotelev1">&gt; /home/alex/huji/ompi4/lib/libopen-pal.so.0: could not read symbols: 
</span><br>
<span class="quotelev1">&gt; Invalid operation
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[2]: *** [orte-clean] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory 
</span><br>
<span class="quotelev1">&gt; `/home/alex/huji/openmpi-1.4.4/orte/tools/orte-clean'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/alex/huji/openmpi-1.4.4/orte'
</span><br>
<span class="quotelev1">&gt; make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; alex_at_singularity:~/huji/openmpi-1.4.4$ make clean ; ./autogen.sh ; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/home/alex/huji/ompi4 ; make ; make install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18436.php">Richard Bardwell: "[OMPI users] MPI orte_init fails on remote nodes"</a>
<li><strong>Previous message:</strong> <a href="18434.php">Alex Margolin: "[OMPI users] OpenMPI build fails with &quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&quot;"</a>
<li><strong>In reply to:</strong> <a href="18434.php">Alex Margolin: "[OMPI users] OpenMPI build fails with &quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18448.php">Jeff Squyres: "Re: [OMPI users] OpenMPI build fails with &quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&quot;"</a>
<li><strong>Reply:</strong> <a href="18448.php">Jeff Squyres: "Re: [OMPI users] OpenMPI build fails with &quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&quot;"</a>
<li><strong>Reply:</strong> <a href="18524.php">Alex Margolin: "Re: [OMPI users] OpenMPI build fails with &quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&quot;"</a>
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
