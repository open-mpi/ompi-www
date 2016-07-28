<?
$subject_val = "Re: [OMPI users] MPI_ERR_INTERN with MPI_Accumulate using MPI_REPLACE";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  6 16:34:01 2011" -->
<!-- isoreceived="20110106213401" -->
<!-- sent="Thu, 6 Jan 2011 14:35:03 -0700" -->
<!-- isosent="20110106213503" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_ERR_INTERN with MPI_Accumulate using MPI_REPLACE" -->
<!-- id="6E75322D-7D11-44CE-94C8-5874913BB107_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5DAAFF5C-36B5-4A1E-96CD-499F1DDA16D3_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_ERR_INTERN with MPI_Accumulate using MPI_REPLACE<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-06 16:35:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15293.php">Jeremiah Willcock: "Re: [OMPI users] MPI_ERR_INTERN with MPI_Accumulate using MPI_REPLACE"</a>
<li><strong>Previous message:</strong> <a href="15291.php">Tom Rosmond: "Re: [OMPI users] questions about MPI-IO"</a>
<li><strong>In reply to:</strong> <a href="15290.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_INTERN with MPI_Accumulate using MPI_REPLACE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15293.php">Jeremiah Willcock: "Re: [OMPI users] MPI_ERR_INTERN with MPI_Accumulate using MPI_REPLACE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff, I don't believe it is.  I'm still waiting for a compile to finish to test, but there shouldn't be a problem with predefined datatypes.  It's just user-defined that the ddt-&gt;opal move screwed up.
<br>
<p>Brian
<br>
<p>On Jan 6, 2011, at 2:19 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Jeremiah --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this the same as:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/trac/ompi/ticket/2656">https://svn.open-mpi.org/trac/ompi/ticket/2656</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 6, 2011, at 3:58 PM, Jeremiah Willcock wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When I run the following program on one rank using Open MPI 1.5:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char** argv) {
</span><br>
<span class="quotelev2">&gt;&gt; int size = 128;
</span><br>
<span class="quotelev2">&gt;&gt; unsigned char one = 1;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt; unsigned char* data = (unsigned char*)malloc(size * sizeof(unsigned char));
</span><br>
<span class="quotelev2">&gt;&gt; memset(data, 0, size * sizeof(unsigned char));
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Win data_win;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Win_create((void*)data, size * sizeof(unsigned char), sizeof(unsigned char), MPI_INFO_NULL, MPI_COMM_WORLD, &amp;data_win);
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Win_fence(0, data_win);
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Accumulate((void*)&amp;one, 1, MPI_UNSIGNED_CHAR, 0, 0, 1, MPI_UNSIGNED_CHAR, MPI_REPLACE, data_win);
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Win_fence(0, data_win);
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Win_free(&amp;data_win);
</span><br>
<span class="quotelev2">&gt;&gt; free(data);
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt; return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I receive the following error message:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [flowerpot.osl.iu.edu:13803] *** An error occurred in MPI_Accumlate
</span><br>
<span class="quotelev2">&gt;&gt; [flowerpot.osl.iu.edu:13803] *** on win 3
</span><br>
<span class="quotelev2">&gt;&gt; [flowerpot.osl.iu.edu:13803] *** MPI_ERR_INTERN: internal error
</span><br>
<span class="quotelev2">&gt;&gt; [flowerpot.osl.iu.edu:13803] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am running on 64-bit x86 Linux.  The code is sensitive to the value of &quot;size&quot; (smaller values such as 64 do not cause errors).  Is this an issue that is fixed in OMPI 1.5.1?  Is it known otherwise?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- Jeremiah Willcock
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
--
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15293.php">Jeremiah Willcock: "Re: [OMPI users] MPI_ERR_INTERN with MPI_Accumulate using MPI_REPLACE"</a>
<li><strong>Previous message:</strong> <a href="15291.php">Tom Rosmond: "Re: [OMPI users] questions about MPI-IO"</a>
<li><strong>In reply to:</strong> <a href="15290.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_INTERN with MPI_Accumulate using MPI_REPLACE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15293.php">Jeremiah Willcock: "Re: [OMPI users] MPI_ERR_INTERN with MPI_Accumulate using MPI_REPLACE"</a>
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
