<?
$subject_val = "Re: [OMPI users] USE mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May  7 21:12:35 2011" -->
<!-- isoreceived="20110508011235" -->
<!-- sent="Sat, 07 May 2011 18:12:24 -0700" -->
<!-- isosent="20110508011224" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] USE mpi" -->
<!-- id="4DC5EDF8.1030602_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BANLkTindEx8RvRZy6NQ=LtYjGtQUb4HpoQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] USE mpi<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-07 21:12:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16484.php">Dmitry N. Mikushin: "Re: [OMPI users] USE mpi"</a>
<li><strong>Previous message:</strong> <a href="16482.php">Dmitry N. Mikushin: "Re: [OMPI users] USE mpi"</a>
<li><strong>In reply to:</strong> <a href="16482.php">Dmitry N. Mikushin: "Re: [OMPI users] USE mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16484.php">Dmitry N. Mikushin: "Re: [OMPI users] USE mpi"</a>
<li><strong>Reply:</strong> <a href="16484.php">Dmitry N. Mikushin: "Re: [OMPI users] USE mpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 5/7/2011 2:35 PM, Dmitry N. Mikushin wrote:
<br>
<span class="quotelev2">&gt;&gt; didn't find the icc compiler
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff, on 1.4.3 I saw the same issue, even more generally: &quot;make
</span><br>
<span class="quotelev1">&gt; install&quot; cannot find the compiler, if it is an alien compiler (i.e.
</span><br>
<span class="quotelev1">&gt; not the default gcc) - same situation for intel or llvm, for example.
</span><br>
<span class="quotelev1">&gt; The workaround is to specify full paths to compilers with CC=...
</span><br>
<span class="quotelev1">&gt; FC=... in ./configure params. Could it be &quot;make install&quot; breaks some
</span><br>
<span class="quotelev1">&gt; env paths?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Most likely reason for not finding an installed icc is that the icc 
<br>
environment (source the compilervars script if you have a current 
<br>
version) wasn't set prior to running configure.  Setting up the compiler 
<br>
in question in accordance with its own instructions is a more likely 
<br>
solution than the absolute path choice.
<br>
OpenMPI configure, for good reason, doesn't search your system to see 
<br>
where a compiler might be installed.  What if you had 2 versions of the 
<br>
same named compiler?
<br>
<pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16484.php">Dmitry N. Mikushin: "Re: [OMPI users] USE mpi"</a>
<li><strong>Previous message:</strong> <a href="16482.php">Dmitry N. Mikushin: "Re: [OMPI users] USE mpi"</a>
<li><strong>In reply to:</strong> <a href="16482.php">Dmitry N. Mikushin: "Re: [OMPI users] USE mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16484.php">Dmitry N. Mikushin: "Re: [OMPI users] USE mpi"</a>
<li><strong>Reply:</strong> <a href="16484.php">Dmitry N. Mikushin: "Re: [OMPI users] USE mpi"</a>
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
