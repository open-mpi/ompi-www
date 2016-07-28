<?
$subject_val = "Re: [OMPI users] Shared Libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 24 16:39:38 2016" -->
<!-- isoreceived="20160624203938" -->
<!-- sent="Fri, 24 Jun 2016 14:39:37 -0600" -->
<!-- isosent="20160624203937" -->
<!-- name="Richard C. Wagner" -->
<!-- email="drsavage_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Shared Libraries" -->
<!-- id="B726C97988654ECCA91733D10718F4FC_at_Euler" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] Shared Libraries" -->
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
<strong>Subject:</strong> Re: [OMPI users] Shared Libraries<br>
<strong>From:</strong> Richard C. Wagner (<em>drsavage_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-24 16:39:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29547.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Shared Libraries"</a>
<li><strong>Previous message:</strong> <a href="29545.php">Jeff Squyres (jsquyres): "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<li><strong>Maybe in reply to:</strong> <a href="29522.php">Richard C. Wagner: "[OMPI users] Shared Libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29547.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Shared Libraries"</a>
<li><strong>Reply:</strong> <a href="29547.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Shared Libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph and Jeff:
<br>
<p>Thanks for your replies to my questions about compiling a 32-bit MPI library for Forth.
<br>
<p>Ralph wrote:
<br>
<p><span class="quotelev1">&gt; IIRC, you would need to write a wrapper to let Forth access C-based functions, yes? You could 
</span><br>
<span class="quotelev1">&gt; configure and build OMPI as a 32-bit library, and libmpi.so is C, so that isn?t an issue.
</span><br>
<p>I'm using Microprocessor Engineering Ltd.'s Forth, which can import any executable image saved in a 
<br>
.so formatted file.  In Forth, two commands make the link to the executable.  The command:
<br>
<p>LIBRARY &lt;filename&gt;
<br>
<p>opens the library file.  Then the command:
<br>
<p>EXTERN: &lt;return value&gt; name ( &lt; list of passed parameters&gt; )
<br>
<p>makes the function callable from within Forth.  (The parameters and return values are passed on the 
<br>
stack.)  So, once you've got a usable library available, the process is trivial.
<br>
<p><p><span class="quotelev1">&gt; What compiler are you planning to use (as the cmd line options may vary a bit)?
</span><br>
<p>I only have my machine here in the lab to work with, and I don't have a lot of information on it. 
<br>
Entering &quot;mpicc --version&quot; I get:
<br>
<p>gcc (Debian 4.9.2-10) 4.9.2
<br>
<p><p>Ralph's suggestion is exactly what I've tried so far.  I've written a small C file where I include 
<br>
MPI.h and then write functions that are just wrappers for the MPI functions, such as:
<br>
<p>int FMPI_Finalize()
<br>
{
<br>
&nbsp;&nbsp;&nbsp;return MPI_Finalize():
<br>
}
<br>
<p>Then I try to compile the library file in 32-bit mode.  The first command is:
<br>
<p>mpicc -fPIC -m32 -c libtest.c
<br>
<p>Then the second is:
<br>
<p>mpicc -shared -m32 -o libmpi.so libtest.o
<br>
<p>As you can see below, compiling the object file works.  But the second command, linking libtest.o 
<br>
and writing the shared library, fails.  Can you see what's wrong?
<br>
<p>rwagner_at_tuxcfd10:~/engrhome/CSU/LibTests$ mpicc -fPIC -m32 -c libtest.c
<br>
rwagner_at_tuxcfd10:~/engrhome/CSU/LibTests$ mpicc -shared -m32 -o libmpi.so libtest.o
<br>
/usr/bin/ld: skipping incompatible /usr//lib/libmpi.so when searching for -lmpi
<br>
/usr/bin/ld: skipping incompatible /usr/lib/openmpi/lib/libmpi.so when searching for -lmpi
<br>
/usr/bin/ld: skipping incompatible /usr/lib/gcc/x86_64-linux-gnu/4.9/../../../libmpi.so when 
<br>
searching for -lmpi
<br>
/usr/bin/ld: skipping incompatible //usr/lib/libmpi.so when searching for -lmpi
<br>
/usr/bin/ld: cannot find -lmpi
<br>
/usr/bin/ld: cannot find -lhwloc
<br>
collect2: error: ld returned 1 exit status
<br>
<p>And for added info, these two commands succeed when I don't use the -m32 switch.  The library comes 
<br>
out as you'd expect it to, but as a 64-bit version.
<br>
<p><p>Regards,
<br>
<p>Rich Wagner
<br>
Aerospace Engineer
<br>
Grad Student
<br>
Montrose, CO, Fort Collins, CO and points elsewhere... 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29547.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Shared Libraries"</a>
<li><strong>Previous message:</strong> <a href="29545.php">Jeff Squyres (jsquyres): "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<li><strong>Maybe in reply to:</strong> <a href="29522.php">Richard C. Wagner: "[OMPI users] Shared Libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29547.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Shared Libraries"</a>
<li><strong>Reply:</strong> <a href="29547.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Shared Libraries"</a>
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
