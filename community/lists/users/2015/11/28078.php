<?
$subject_val = "Re: [OMPI users] Ubuntu and MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 19 22:57:39 2015" -->
<!-- isoreceived="20151120035739" -->
<!-- sent="Fri, 20 Nov 2015 12:57:36 +0900" -->
<!-- isosent="20151120035736" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Ubuntu and MPI" -->
<!-- id="564E9A30.4060507_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="564E97C3.6050406_at_mynatt.biz" -->
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
<strong>Subject:</strong> Re: [OMPI users] Ubuntu and MPI<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-19 22:57:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28079.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;=	131072"</a>
<li><strong>Previous message:</strong> <a href="28077.php">dave: "[OMPI users] Ubuntu and MPI"</a>
<li><strong>In reply to:</strong> <a href="28077.php">dave: "[OMPI users] Ubuntu and MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dave,
<br>
<p>if you want to use the Open MPI you downloaded and compiled, you need to 
<br>
set your PATH environment variable accordingly
<br>
<p>if you'd rather keep it simple and use Ubuntu provided Open MPI,
<br>
you can do as advised by ubuntu :
<br>
<p>sudo apt-get install libopenmpi-dev
<br>
<p>and then try again
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 11/20/2015 12:47 PM, dave wrote:
<br>
<span class="quotelev1">&gt; Hello- I have a Ubuntu 12.04 distro, running on a 32 platform. I 
</span><br>
<span class="quotelev1">&gt; installed <a href="http://www.open-mpi.org/software/ompi/v1.10/downloads/openm">http://www.open-mpi.org/software/ompi/v1.10/downloads/openm</a> 
</span><br>
<span class="quotelev1">&gt; . I have hello_c.c in the examples subdirectory. I installed 'c' 
</span><br>
<span class="quotelev1">&gt; compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I run mpicc hello_c.c screen dump shows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; dave_at_ubuntu-desk:~/Desktop/openmpi-1.10.1$ mpicc hello_c.c
</span><br>
<span class="quotelev1">&gt; The program 'mpicc' can be found in the following packages:
</span><br>
<span class="quotelev1">&gt;  * lam4-dev
</span><br>
<span class="quotelev1">&gt;  * libmpich-mpd1.0-dev
</span><br>
<span class="quotelev1">&gt;  * libmpich-shmem1.0-dev
</span><br>
<span class="quotelev1">&gt;  * libmpich1.0-dev
</span><br>
<span class="quotelev1">&gt;  * libmpich2-dev
</span><br>
<span class="quotelev1">&gt;  * libopenmpi-dev
</span><br>
<span class="quotelev1">&gt;  * libopenmpi1.5-dev
</span><br>
<span class="quotelev1">&gt; Try: sudo apt-get install &lt;selected package&gt;
</span><br>
<span class="quotelev1">&gt; dave_at_ubuntu-desk:~/Desktop/openmpi-1.10.1$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This code helloworld.c works:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* Hello World C Program */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include&lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; main()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     printf(&quot;Hello World!&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; return 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am at a stop point and was hoping for some assist from the group. 
</span><br>
<span class="quotelev1">&gt; What info/log file can I send that will help?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Newbee here
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/11/28077.php">http://www.open-mpi.org/community/lists/users/2015/11/28077.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28079.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;=	131072"</a>
<li><strong>Previous message:</strong> <a href="28077.php">dave: "[OMPI users] Ubuntu and MPI"</a>
<li><strong>In reply to:</strong> <a href="28077.php">dave: "[OMPI users] Ubuntu and MPI"</a>
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
