<?
$subject_val = "Re: [OMPI users] OpenMPI build fails with &quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 13 16:04:07 2012" -->
<!-- isoreceived="20120213210407" -->
<!-- sent="Mon, 13 Feb 2012 16:04:03 -0500" -->
<!-- isosent="20120213210403" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI build fails with &amp;quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&amp;quot;" -->
<!-- id="1D97068B-599E-4D73-89B3-4AB79394685D_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-13 16:04:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18449.php">Tohiko Looka: "[OMPI users] Strange OpenMPI messages"</a>
<li><strong>Previous message:</strong> <a href="18447.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>In reply to:</strong> <a href="18435.php">Alex Margolin: "Re: [OMPI users] OpenMPI build fails with &quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18524.php">Alex Margolin: "Re: [OMPI users] OpenMPI build fails with &quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try and &quot;ls -l /home/alex/huji/ompi4/lib/libopen-pal.so.0&quot; and &quot;nm /home/alex/huji/ompi4/lib/libopen-pal.so.0&quot; to ensure that the file is &gt;0 length and that it contains valid symbols.
<br>
<p>If it doesn't look back at the make output and ensure there wasn't some warning/non-fatal error in creating /home/alex/huji/ompi4/lib/libopen-pal.so.0.
<br>
<p><p><p>On Feb 11, 2012, at 4:39 PM, Alex Margolin wrote:
<br>
<p><span class="quotelev1">&gt; I've tried other versions and got the same error, so I have to assume the local software has something to do with it,
</span><br>
<span class="quotelev1">&gt; so I've gathered the version information of everything that seemed relevat (I'm running a fully updated Ubuntu 11.10):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; alex_at_singularity:~/huji/openmpi-1.4.5rc6$ automake --version
</span><br>
<span class="quotelev1">&gt; automake (GNU automake) 1.11.1
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2009 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; License GPLv2+: GNU GPL version 2 or later &lt;<a href="http://gnu.org/licenses/gpl-2.0.html">http://gnu.org/licenses/gpl-2.0.html</a>&gt;
</span><br>
<span class="quotelev1">&gt; This is free software: you are free to change and redistribute it.
</span><br>
<span class="quotelev1">&gt; There is NO WARRANTY, to the extent permitted by law.
</span><br>
<span class="quotelev1">&gt; Written by Tom Tromey &lt;tromey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;       and Alexandre Duret-Lutz &lt;adl_at_[hidden]&gt;.
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
<span class="quotelev1">&gt; &lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;, &lt;<a href="http://gnu.org/licenses/exceptions.html">http://gnu.org/licenses/exceptions.html</a>&gt;
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
<span class="quotelev1">&gt; This is free software; see the source for copying conditions.  There is NO
</span><br>
<span class="quotelev1">&gt; warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
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
<span class="quotelev2">&gt;&gt; I tried to unpack and build version 1.4.4 and run into a rare error, and I didn't find any mention of it online.
</span><br>
<span class="quotelev2">&gt;&gt; I know I shouldn't run autogen.sh (builds OK without it) unless I have a new MCA component, but this is the case here, so...
</span><br>
<span class="quotelev2">&gt;&gt; Does anyone else experience such errors (the command I ran appears at the bottom)?
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
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/home/alex/huji/openmpi-1.4.4/orte/tools/orte-clean'
</span><br>
<span class="quotelev2">&gt;&gt; /bin/bash ../../../libtool --tag=CC   --mode=link gcc  -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread -fvisibility=hidden  -export-dynamic   -o orte-clean orte-clean.o ../../../orte/libopen-rte.la -lnsl -lutil  -lm
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: gcc -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread -fvisibility=hidden -o .libs/orte-clean orte-clean.o -Wl,--export-dynamic  ../../../orte/.libs/libopen-rte.so -lnsl -lutil -lm -pthread -Wl,-rpath -Wl,/home/alex/huji/ompi4/lib
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: orte-clean.o: undefined reference to symbol 'opal_cmd_line_get_usage_msg'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: note: 'opal_cmd_line_get_usage_msg' is defined in DSO /home/alex/huji/ompi4/lib/libopen-pal.so.0 so try adding it to the linker command line
</span><br>
<span class="quotelev2">&gt;&gt; /home/alex/huji/ompi4/lib/libopen-pal.so.0: could not read symbols: Invalid operation
</span><br>
<span class="quotelev2">&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [orte-clean] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/home/alex/huji/openmpi-1.4.4/orte/tools/orte-clean'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/home/alex/huji/openmpi-1.4.4/orte'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; alex_at_singularity:~/huji/openmpi-1.4.4$ make clean ; ./autogen.sh ; ./configure --prefix=/home/alex/huji/ompi4 ; make ; make install
</span><br>
<span class="quotelev2">&gt;&gt; 
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18449.php">Tohiko Looka: "[OMPI users] Strange OpenMPI messages"</a>
<li><strong>Previous message:</strong> <a href="18447.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>In reply to:</strong> <a href="18435.php">Alex Margolin: "Re: [OMPI users] OpenMPI build fails with &quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18524.php">Alex Margolin: "Re: [OMPI users] OpenMPI build fails with &quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&quot;"</a>
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
