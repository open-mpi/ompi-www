<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 12 10:28:00 2006" -->
<!-- isoreceived="20061012142800" -->
<!-- sent="Thu, 12 Oct 2006 10:27:43 -0400" -->
<!-- isosent="20061012142743" -->
<!-- name="Michael Kluskens" -->
<!-- email="mklus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trouble with shared libraries" -->
<!-- id="2D3D5532-63B5-4C47-989D-7D97BACD1375_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="e7ba66e40610110738w423c5f29m1ee8059737bc6e52_at_mail.gmail.com" -->
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
<strong>From:</strong> Michael Kluskens (<em>mklus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-12 10:27:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1971.php">Michael Kluskens: "Re: [OMPI users] PBS problem with OpenMP- only one processor used"</a>
<li><strong>Previous message:</strong> <a href="1969.php">Cupp, Matthew R: "Re: [OMPI users] OpenMPI 1.1.1 with Multiple Thread Support"</a>
<li><strong>In reply to:</strong> <a href="1963.php">Lisandro Dalcin: "Re: [OMPI users] Trouble with shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1980.php">Jeff Squyres: "Re: [OMPI users] Trouble with shared libraries"</a>
<li><strong>Reply:</strong> <a href="1980.php">Jeff Squyres: "Re: [OMPI users] Trouble with shared libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 11, 2006, at 10:38 AM, Lisandro Dalcin wrote:
<br>
<p><span class="quotelev1">&gt; On 10/11/06, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI v1.1.1 requires that you set your LD_LIBRARY_PATH to  
</span><br>
<span class="quotelev2">&gt;&gt; include the
</span><br>
<span class="quotelev2">&gt;&gt; directory where its libraries were installed (typically, $prefix/ 
</span><br>
<span class="quotelev2">&gt;&gt; lib).  Or,
</span><br>
<span class="quotelev2">&gt;&gt; you can use mpirun's --prefix functionality to avoid this
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW, Why mpicc/mpicxx does not symply pass a -rpath/-R flag to the
</span><br>
<span class="quotelev1">&gt; linker? Do you want to select libraries at runtime? There are
</span><br>
<span class="quotelev1">&gt; portability problem in some target plataform? This behavior can be
</span><br>
<span class="quotelev1">&gt; really useful to experienced unix users/developers but I am not sure
</span><br>
<span class="quotelev1">&gt; if this holds true for all users.
</span><br>
<p>It appears that you want to hardcode the path to libraries in the  
<br>
executable?
<br>
<p>That is a very bad thing to do.
<br>
<p>Example: you compile your code on your system and run the code on  
<br>
someone else's system.
<br>
<p>Not everyone distributes source code and not everyone wants to  
<br>
compile source code.
<br>
<p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1971.php">Michael Kluskens: "Re: [OMPI users] PBS problem with OpenMP- only one processor used"</a>
<li><strong>Previous message:</strong> <a href="1969.php">Cupp, Matthew R: "Re: [OMPI users] OpenMPI 1.1.1 with Multiple Thread Support"</a>
<li><strong>In reply to:</strong> <a href="1963.php">Lisandro Dalcin: "Re: [OMPI users] Trouble with shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1980.php">Jeff Squyres: "Re: [OMPI users] Trouble with shared libraries"</a>
<li><strong>Reply:</strong> <a href="1980.php">Jeff Squyres: "Re: [OMPI users] Trouble with shared libraries"</a>
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
