<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 20 08:16:44 2006" -->
<!-- isoreceived="20060720121644" -->
<!-- sent="Thu, 20 Jul 2006 08:16:34 -0400" -->
<!-- isosent="20060720121634" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPEN_MPI with Intel Compiler  -regards" -->
<!-- id="C0E4EC62.B049%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="00be01c6abc1$d859a7f0$1c120897_at_hclad66fee8771" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-20 08:16:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1667.php">Jeff Squyres: "Re: [OMPI users] OpenMPI v/s( MPICH,LAM/MPI)"</a>
<li><strong>Previous message:</strong> <a href="1665.php">Jeff Squyres: "Re: [OMPI users] Summary of OMPI on OS X with Intel"</a>
<li><strong>In reply to:</strong> <a href="1659.php">esaifu: "[OMPI users] OPEN_MPI with Intel Compiler  -regards"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Could you re-send that?  The attachment that I got was an excel spreadsheet
<br>
with the output from configure that did not show any errors -- it just
<br>
stopped in the middle of the check for &quot;bool&quot; in the C++ compiler.
<br>
<p>Two notes:
<br>
<p>1. One common mistake that people make is to use the &quot;icc&quot; compiler for the
<br>
C++ compiler.  Recent versions of the Intel compiler renamed the C++
<br>
compiler to be &quot;icpc&quot;.  If your version of the Intel compiler has an &quot;icpc&quot;,
<br>
you need to use that for the C++ compiler.
<br>
<p>2. We had some problems with the Intel 8.1 compiler at one point -- it would
<br>
seg fault while compiling legal C code.  I think that later builds of the
<br>
Intel 8.1 compiler fixed the problem, however.  You might want to check that
<br>
you have the latest build of the 8.1 compiler.
<br>
<p>If these two suggestions don't help, please see the &quot;Getting help&quot; web page
<br>
to see what information we need to help with compile problems.  Thanks!
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p>On 7/20/06 2:00 AM, &quot;esaifu&quot; &lt;esaifu_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt;       I was able to compile OpenMPI and create wrapper functions(like
</span><br>
<span class="quotelev1">&gt; mpicc,mpif77,etc) on top of GNU compilers.But when i tried it with Intel
</span><br>
<span class="quotelev1">&gt; fortran compiler(Since i need f90 compiler also),i met with some configuration
</span><br>
<span class="quotelev1">&gt; error(Hence i did'nt ger the Makefile).I am here with attching the error file
</span><br>
<span class="quotelev1">&gt; which i am getting while configuring the source code.What could be the
</span><br>
<span class="quotelev1">&gt; problem.Thanks in advance.
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Saifudheen
</span><br>
<span class="quotelev1">&gt; esaifu_at_[hidden]
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1667.php">Jeff Squyres: "Re: [OMPI users] OpenMPI v/s( MPICH,LAM/MPI)"</a>
<li><strong>Previous message:</strong> <a href="1665.php">Jeff Squyres: "Re: [OMPI users] Summary of OMPI on OS X with Intel"</a>
<li><strong>In reply to:</strong> <a href="1659.php">esaifu: "[OMPI users] OPEN_MPI with Intel Compiler  -regards"</a>
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
