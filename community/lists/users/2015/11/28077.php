<?
$subject_val = "[OMPI users] Ubuntu and MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 19 22:47:23 2015" -->
<!-- isoreceived="20151120034723" -->
<!-- sent="Thu, 19 Nov 2015 20:47:15 -0700" -->
<!-- isosent="20151120034715" -->
<!-- name="dave" -->
<!-- email="dave_at_[hidden]" -->
<!-- subject="[OMPI users] Ubuntu and MPI" -->
<!-- id="564E97C3.6050406_at_mynatt.biz" -->
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
<strong>Subject:</strong> [OMPI users] Ubuntu and MPI<br>
<strong>From:</strong> dave (<em>dave_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-19 22:47:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28078.php">Gilles Gouaillardet: "Re: [OMPI users] Ubuntu and MPI"</a>
<li><strong>Previous message:</strong> <a href="28076.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [OMPI devel] Slides from the Open MPI SC'15 State of the Union BOF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28078.php">Gilles Gouaillardet: "Re: [OMPI users] Ubuntu and MPI"</a>
<li><strong>Reply:</strong> <a href="28078.php">Gilles Gouaillardet: "Re: [OMPI users] Ubuntu and MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello-  I have a Ubuntu 12.04 distro, running on a 32 platform. I 
<br>
installed <a href="http://www.open-mpi.org/software/ompi/v1.10/downloads/openm">http://www.open-mpi.org/software/ompi/v1.10/downloads/openm</a> . 
<br>
I have hello_c.c in the examples subdirectory. I installed 'c' compiler.
<br>
<p>When I run mpicc hello_c.c screen dump shows:
<br>
<p>dave_at_ubuntu-desk:~/Desktop/openmpi-1.10.1$ mpicc hello_c.c
<br>
The program 'mpicc' can be found in the following packages:
<br>
&nbsp;&nbsp;* lam4-dev
<br>
&nbsp;&nbsp;* libmpich-mpd1.0-dev
<br>
&nbsp;&nbsp;* libmpich-shmem1.0-dev
<br>
&nbsp;&nbsp;* libmpich1.0-dev
<br>
&nbsp;&nbsp;* libmpich2-dev
<br>
&nbsp;&nbsp;* libopenmpi-dev
<br>
&nbsp;&nbsp;* libopenmpi1.5-dev
<br>
Try: sudo apt-get install &lt;selected package&gt;
<br>
dave_at_ubuntu-desk:~/Desktop/openmpi-1.10.1$
<br>
<p>This code helloworld.c works:
<br>
<p>/* Hello World C Program */
<br>
<p>#include&lt;stdio.h&gt;
<br>
<p>main()
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Hello World!&quot;);
<br>
<p>return 0;
<br>
<p>}
<br>
<p><p><p>I am at a stop point and was hoping for some assist from the group. What 
<br>
info/log file can I send that will help?
<br>
<p>Newbee here
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28078.php">Gilles Gouaillardet: "Re: [OMPI users] Ubuntu and MPI"</a>
<li><strong>Previous message:</strong> <a href="28076.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [OMPI devel] Slides from the Open MPI SC'15 State of the Union BOF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28078.php">Gilles Gouaillardet: "Re: [OMPI users] Ubuntu and MPI"</a>
<li><strong>Reply:</strong> <a href="28078.php">Gilles Gouaillardet: "Re: [OMPI users] Ubuntu and MPI"</a>
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
