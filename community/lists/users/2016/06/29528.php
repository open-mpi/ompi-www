<?
$subject_val = "Re: [OMPI users] Shared Libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 23 01:27:03 2016" -->
<!-- isoreceived="20160623052703" -->
<!-- sent="Thu, 23 Jun 2016 05:27:01 +0000" -->
<!-- isosent="20160623052701" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Shared Libraries" -->
<!-- id="C7BE2A05-3ED4-4385-B01B-7FD1B30D2D0F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9738277A935F41A5BC509F4B40F795CC_at_Euler" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-23 01:27:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29529.php">Saliya Ekanayake: "Re: [OMPI users] Why communication performance change with binding PEs?"</a>
<li><strong>Previous message:</strong> <a href="29527.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fw: OpenSHMEM Runtime Error"</a>
<li><strong>In reply to:</strong> <a href="29522.php">Richard C. Wagner: "[OMPI users] Shared Libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29546.php">Richard C. Wagner: "Re: [OMPI users] Shared Libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings Richard.
<br>
<p>Yes, that certainly is unusual.  :-)
<br>
<p>Here's my advice:
<br>
<p>- Configure Open MPI with the --disable-dlopen flag.  This will slurp in all of Open MPI's plugins into the main library, and make things considerably simpler for you.
<br>
<p>- Build Open MPI in a 32 bit mode -- e.g., supply CFLAGS=-m32 on the configure command line (or whatever flags are relevant for your compiler).
<br>
<p>Both of these taken together:
<br>
<p>&nbsp;&nbsp;./configure CFLAGS=-m32 --disable-dlopen ...
<br>
<p>- Then you should be able to dlopen libmpi.so and dlsym the symbols that you expect (e.g., MPI_Init and friends).
<br>
<p><p><span class="quotelev1">&gt; On Jun 22, 2016, at 9:34 PM, Richard C. Wagner &lt;drsavage_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Everyone:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to employ MPI in an unconventional programming language, Forth, running over Debian Linux.  The Forth I have can import a Linux shared library in the .so file format and then compile in the executable functions as externals.  The question: how to do it?  I'm looking to access MPI_Init, MPI_Finalize, MPI_Comm_size, MPI_Comm_rank, MPI_Waitany, MPI_Isend, MPI_Irecv plus other functions as needed.  The Forth is a 32-bit executable, so I need to include functions from a 32-bit library.  Is there a single 32-bit MPI library where I can find these functions?  Or would it make sense to create my own, 32-bit library using C?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rich Wagner
</span><br>
<span class="quotelev1">&gt; Aerospace Engineer
</span><br>
<span class="quotelev1">&gt; Graduate Student
</span><br>
<span class="quotelev1">&gt; Fort Collins, CO, USA 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29522.php">http://www.open-mpi.org/community/lists/users/2016/06/29522.php</a>
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
<li><strong>Next message:</strong> <a href="29529.php">Saliya Ekanayake: "Re: [OMPI users] Why communication performance change with binding PEs?"</a>
<li><strong>Previous message:</strong> <a href="29527.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fw: OpenSHMEM Runtime Error"</a>
<li><strong>In reply to:</strong> <a href="29522.php">Richard C. Wagner: "[OMPI users] Shared Libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29546.php">Richard C. Wagner: "Re: [OMPI users] Shared Libraries"</a>
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
