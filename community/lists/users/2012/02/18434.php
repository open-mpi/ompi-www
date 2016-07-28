<?
$subject_val = "[OMPI users] OpenMPI build fails with &quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 11 12:10:57 2012" -->
<!-- isoreceived="20120211171057" -->
<!-- sent="Sat, 11 Feb 2012 19:10:47 +0200" -->
<!-- isosent="20120211171047" -->
<!-- name="Alex Margolin" -->
<!-- email="alex.margolin_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI build fails with &amp;quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&amp;quot;" -->
<!-- id="4F36A117.2060608_at_mail.huji.ac.il" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI build fails with &quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&quot;<br>
<strong>From:</strong> Alex Margolin (<em>alex.margolin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-11 12:10:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18435.php">Alex Margolin: "Re: [OMPI users] OpenMPI build fails with &quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&quot;"</a>
<li><strong>Previous message:</strong> <a href="18433.php">Jeff Squyres: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18435.php">Alex Margolin: "Re: [OMPI users] OpenMPI build fails with &quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&quot;"</a>
<li><strong>Reply:</strong> <a href="18435.php">Alex Margolin: "Re: [OMPI users] OpenMPI build fails with &quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I tried to unpack and build version 1.4.4 and run into a rare error, and I didn't find any mention of it online.
<br>
I know I shouldn't run autogen.sh (builds OK without it) unless I have a new MCA component, but this is the case here, so...
<br>
Does anyone else experience such errors (the command I ran appears at the bottom)?
<br>
Any tips on how to solve or get around it?
<br>
<p>Thanks,
<br>
Alex
<br>
<p>Making install in tools/orte-clean
<br>
make[2]: Entering directory `/home/alex/huji/openmpi-1.4.4/orte/tools/orte-clean'
<br>
/bin/bash ../../../libtool --tag=CC   --mode=link gcc  -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread -fvisibility=hidden  -export-dynamic   -o orte-clean orte-clean.o ../../../orte/libopen-rte.la -lnsl -lutil  -lm
<br>
libtool: link: gcc -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread -fvisibility=hidden -o .libs/orte-clean orte-clean.o -Wl,--export-dynamic  ../../../orte/.libs/libopen-rte.so -lnsl -lutil -lm -pthread -Wl,-rpath -Wl,/home/alex/huji/ompi4/lib
<br>
/usr/bin/ld: orte-clean.o: undefined reference to symbol 'opal_cmd_line_get_usage_msg'
<br>
/usr/bin/ld: note: 'opal_cmd_line_get_usage_msg' is defined in DSO /home/alex/huji/ompi4/lib/libopen-pal.so.0 so try adding it to the linker command line
<br>
/home/alex/huji/ompi4/lib/libopen-pal.so.0: could not read symbols: Invalid operation
<br>
collect2: ld returned 1 exit status
<br>
make[2]: *** [orte-clean] Error 1
<br>
make[2]: Leaving directory `/home/alex/huji/openmpi-1.4.4/orte/tools/orte-clean'
<br>
make[1]: *** [install-recursive] Error 1
<br>
make[1]: Leaving directory `/home/alex/huji/openmpi-1.4.4/orte'
<br>
make: *** [install-recursive] Error 1
<br>
alex_at_singularity:~/huji/openmpi-1.4.4$ make clean ; ./autogen.sh ; ./configure --prefix=/home/alex/huji/ompi4 ; make ; make install
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18435.php">Alex Margolin: "Re: [OMPI users] OpenMPI build fails with &quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&quot;"</a>
<li><strong>Previous message:</strong> <a href="18433.php">Jeff Squyres: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18435.php">Alex Margolin: "Re: [OMPI users] OpenMPI build fails with &quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&quot;"</a>
<li><strong>Reply:</strong> <a href="18435.php">Alex Margolin: "Re: [OMPI users] OpenMPI build fails with &quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&quot;"</a>
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
