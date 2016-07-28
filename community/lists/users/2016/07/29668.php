<?
$subject_val = "[OMPI users] how to build with memchecker using valgrind, preferable linux distro install of valgrind?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 14 11:32:40 2016" -->
<!-- isoreceived="20160714153240" -->
<!-- sent="Thu, 14 Jul 2016 08:32:37 -0700" -->
<!-- isosent="20160714153237" -->
<!-- name="David A. Schneider" -->
<!-- email="davidsch_at_[hidden]" -->
<!-- subject="[OMPI users] how to build with memchecker using valgrind, preferable linux distro install of valgrind?" -->
<!-- id="5787B095.8020501_at_slac.stanford.edu" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] how to build with memchecker using valgrind, preferable linux distro install of valgrind?<br>
<strong>From:</strong> David A. Schneider (<em>davidsch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-14 11:32:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29669.php">Gus Correa: "Re: [OMPI users] how to build with memchecker using valgrind, preferable linux distro install of valgrind?"</a>
<li><strong>Previous message:</strong> <a href="29667.php">Justin Cinkelj: "Re: [OMPI users] Ssh launch code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29669.php">Gus Correa: "Re: [OMPI users] how to build with memchecker using valgrind, preferable linux distro install of valgrind?"</a>
<li><strong>Reply:</strong> <a href="29669.php">Gus Correa: "Re: [OMPI users] how to build with memchecker using valgrind, preferable linux distro install of valgrind?"</a>
<li><strong>Reply:</strong> <a href="29670.php">Jeff Squyres (jsquyres): "Re: [OMPI users] how to build with memchecker using valgrind, preferable linux distro install of valgrind?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I thought it would be a good idea to build a debugging version of 
<br>
openmpi 1.10.3. Following the instructions in the FAQ: 
<br>
<a href="https://www.open-mpi.org/faq/?category=debugging#memchecker_how">https://www.open-mpi.org/faq/?category=debugging#memchecker_how</a> 
<br>
&lt;<a href="https://email.slac.stanford.edu/owa/redir.aspx?REF=RP5_rOiQ9WZQgiVLWWUfJLansCsxNMkiYakBQ0zCua7x_z9A-6vTCAFodHRwczovL3d3dy5vcGVuLW1waS5vcmcvZmFxLz9jYXRlZ29yeT1kZWJ1Z2dpbmcjbWVtY2hlY2tlcl9ob3c">https://email.slac.stanford.edu/owa/redir.aspx?REF=RP5_rOiQ9WZQgiVLWWUfJLansCsxNMkiYakBQ0zCua7x_z9A-6vTCAFodHRwczovL3d3dy5vcGVuLW1waS5vcmcvZmFxLz9jYXRlZ29yeT1kZWJ1Z2dpbmcjbWVtY2hlY2tlcl9ob3c</a>.&gt; I 
<br>
went with
<br>
<p>.configure &#226;&#128;&#148;with-verbs &#226;&#128;&#148;enable-debug &#226;&#128;&#148;enable-memchecker 
<br>
&#226;&#128;&#148;with-valgrind=/usr/bin/valgrind
<br>
<p>Since I discovered valgrind was already installed on our network (this 
<br>
is rhel7). However configure fails, and part of the error messages read
<br>
<p>WARNING Expected file /usr/bin/include/valgrind/valgrind.h not found
<br>
<p>Is there a way to build openmpi to use the installation of valgrind on 
<br>
my system? I&#226;&#128;&#153;m not sure if/where the valgrind.h file is, I don&#226;&#128;&#153;t see it 
<br>
in /usr/include. If not, I will build against my own build of valgrind, 
<br>
but I run into similiar error messages - the auto tools script is not 
<br>
finding the headers my valgrind install - I've tried giving a full path 
<br>
to valgrind, the directory I used for PREFIX when I installed valgrind, 
<br>
there must be some assumptions about environment variables I need to 
<br>
have set to get the openmpi install script to work?
<br>
<p>Reading through a page on valgrind: 
<br>
<a href="http://valgrind.org/docs/manual/mc-manual.html#mc-manual.mpiwrap">http://valgrind.org/docs/manual/mc-manual.html#mc-manual.mpiwrap</a> 
<br>
&lt;<a href="https://email.slac.stanford.edu/owa/redir.aspx?REF=RUoQIaKZhwLZN3KFa0DpMOj3B1mLOQzP7xrqLqeC7obx_z9A-6vTCAFodHRwOi8vdmFsZ3JpbmQub3JnL2RvY3MvbWFudWFsL21jLW1hbnVhbC5odG1sI21jLW1hbnVhbC5tcGl3cmFw">https://email.slac.stanford.edu/owa/redir.aspx?REF=RUoQIaKZhwLZN3KFa0DpMOj3B1mLOQzP7xrqLqeC7obx_z9A-6vTCAFodHRwOi8vdmFsZ3JpbmQub3JnL2RvY3MvbWFudWFsL21jLW1hbnVhbC5odG1sI21jLW1hbnVhbC5tcGl3cmFw</a>&gt;
<br>
<p>I found instructions to the effect of how to wrap valgrind around an 
<br>
existing open-mpi install. Does any one know which is better? That is, 
<br>
what I'm trying, to build open-mpi based on a valgrind install, or to 
<br>
install valgrind based on a open-mpi install? Doing both looks like a 
<br>
circular dependency.
<br>
<p>Best,
<br>
<p>David
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29669.php">Gus Correa: "Re: [OMPI users] how to build with memchecker using valgrind, preferable linux distro install of valgrind?"</a>
<li><strong>Previous message:</strong> <a href="29667.php">Justin Cinkelj: "Re: [OMPI users] Ssh launch code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29669.php">Gus Correa: "Re: [OMPI users] how to build with memchecker using valgrind, preferable linux distro install of valgrind?"</a>
<li><strong>Reply:</strong> <a href="29669.php">Gus Correa: "Re: [OMPI users] how to build with memchecker using valgrind, preferable linux distro install of valgrind?"</a>
<li><strong>Reply:</strong> <a href="29670.php">Jeff Squyres (jsquyres): "Re: [OMPI users] how to build with memchecker using valgrind, preferable linux distro install of valgrind?"</a>
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
