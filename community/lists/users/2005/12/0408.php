<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Dec  1 06:33:22 2005" -->
<!-- isoreceived="20051201113322" -->
<!-- sent="Thu, 01 Dec 2005 12:33:34 +0100" -->
<!-- isosent="20051201113334" -->
<!-- name="Dries Kimpe" -->
<!-- email="Dries.Kimpe_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] pathscale 2.1/2.3 build problem" -->
<!-- id="438EDF8E.9020205_at_cs.kuleuven.be" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20051128221555.GC3612_at_greglaptop.internal.keyresearch.com" -->
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
<strong>From:</strong> Dries Kimpe (<em>Dries.Kimpe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-01 06:33:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0409.php">Eugen Wintersberger: "Re: [O-MPI users] Compiling RC4 on Alpha56 and SGI Origin"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/11/0407.php">Jeff Squyres: "Re: [O-MPI users] MPI_Offset and C++ interface"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/11/0404.php">Greg Lindahl: "Re: [O-MPI users] pathscale 2.1/2.3 build problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A quick message just to confirm that this problem
<br>
really had nothing to do with OpenMPI.
<br>
<p>It was caused by an incorrect wrapper script for gcc.
<br>
<p>&nbsp;&nbsp;&nbsp;Dries
<br>
<p>Greg Lindahl wrote:
<br>
<span class="quotelev1">&gt; Dries,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have built OpenMPI-1.0 with our compilers, but don't build SVN.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In your case you seem to have some kind of SUSE weirdness going on. Is
</span><br>
<span class="quotelev1">&gt; it possible you have a gcc-3.3 compatibility package of some kind
</span><br>
<span class="quotelev1">&gt; installed? We should probably take this conversation over to
</span><br>
<span class="quotelev1">&gt; support_at_[hidden], but the next step is to try &quot;pathcc -v
</span><br>
<span class="quotelev1">&gt; hello.c&quot;, and also
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/bin/gcc -E &quot;foo bar&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- greg
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>Disclaimer: <a href="http://www.kuleuven.be/cwis/email_disclaimer.htm">http://www.kuleuven.be/cwis/email_disclaimer.htm</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0409.php">Eugen Wintersberger: "Re: [O-MPI users] Compiling RC4 on Alpha56 and SGI Origin"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/11/0407.php">Jeff Squyres: "Re: [O-MPI users] MPI_Offset and C++ interface"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/11/0404.php">Greg Lindahl: "Re: [O-MPI users] pathscale 2.1/2.3 build problem"</a>
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
