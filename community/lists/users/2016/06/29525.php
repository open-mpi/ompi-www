<?
$subject_val = "Re: [OMPI users] Shared Libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 23 00:59:24 2016" -->
<!-- isoreceived="20160623045924" -->
<!-- sent="Wed, 22 Jun 2016 21:59:19 -0700" -->
<!-- isosent="20160623045919" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Shared Libraries" -->
<!-- id="CF429E69-9415-4854-80B3-01E1671F1CF7_at_open-mpi.org" -->
<!-- charset="utf-8" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-23 00:59:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29526.php">RYAN RAY: "[OMPI users] Fw: OpenSHMEM Runtime Error"</a>
<li><strong>Previous message:</strong> <a href="29524.php">Gilles Gouaillardet: "Re: [OMPI users] Why communication performance change with binding PEs?"</a>
<li><strong>In reply to:</strong> <a href="29522.php">Richard C. Wagner: "[OMPI users] Shared Libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29528.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Shared Libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Wow, I haven&#226;&#128;&#153;t encountered Forth in over 20 years! Though I confess I used to program in it myself back in my control days.
<br>
<p>IIRC, you would need to write a wrapper to let Forth access C-based functions, yes? You could configure and build OMPI as a 32-bit library, and libmpi.so is C, so that isn&#226;&#128;&#153;t an issue.
<br>
<p>What compiler are you planning to use (as the cmd line options may vary a bit)?
<br>
<p><p><span class="quotelev1">&gt; On Jun 22, 2016, at 6:34 PM, Richard C. Wagner &lt;drsavage_at_[hidden]&gt; wrote:
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29526.php">RYAN RAY: "[OMPI users] Fw: OpenSHMEM Runtime Error"</a>
<li><strong>Previous message:</strong> <a href="29524.php">Gilles Gouaillardet: "Re: [OMPI users] Why communication performance change with binding PEs?"</a>
<li><strong>In reply to:</strong> <a href="29522.php">Richard C. Wagner: "[OMPI users] Shared Libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29528.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Shared Libraries"</a>
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
