<?
$subject_val = "Re: [OMPI users] Equivalent .h files";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 30 10:46:34 2008" -->
<!-- isoreceived="20081030144634" -->
<!-- sent="Thu, 30 Oct 2008 06:49:58 -0800" -->
<!-- isosent="20081030144958" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Equivalent .h files" -->
<!-- id="4909C996.8010508_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="71ec5a370810300733h5920d577hffaea987b7120378_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Equivalent .h files<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-30 10:49:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7142.php">Gus Correa: "Re: [OMPI users] Equivalent .h files"</a>
<li><strong>Previous message:</strong> <a href="7140.php">Brock Palen: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<li><strong>In reply to:</strong> <a href="7138.php">Benjamin Lamptey: "[OMPI users] Equivalent .h files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7142.php">Gus Correa: "Re: [OMPI users] Equivalent .h files"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Benjamin Lamptey wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; I am new at using open-mpi and will like to know something basic.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is the equivalent of the &quot;mpif.h&quot; in open-mpi which is normally 
</span><br>
<span class="quotelev1">&gt; &quot;included&quot; at
</span><br>
<span class="quotelev1">&gt; the beginning of mpi codes (fortran in this case).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I shall appreciate that for cpp as well.
</span><br>
<p>For Fortran:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INCLUDE &quot;mpif.h&quot;
<br>
<p>For C:
<br>
<p>#include &lt;mpi.h&gt;
<br>
<p>If you use the compiler wrappers (mpif90, mpicc, etc.), they should be 
<br>
able to find the include files.
<br>
<p>MPI source codes are *supposed* to run unchanged as you move them from 
<br>
one MPI to another, even if the procedures for compiling and launching 
<br>
those codes vary.
<br>
<p>P.S.  It's &quot;Open&lt;space&gt;MPI&quot; rather than &quot;open-mpi&quot;.  :^)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7142.php">Gus Correa: "Re: [OMPI users] Equivalent .h files"</a>
<li><strong>Previous message:</strong> <a href="7140.php">Brock Palen: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<li><strong>In reply to:</strong> <a href="7138.php">Benjamin Lamptey: "[OMPI users] Equivalent .h files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7142.php">Gus Correa: "Re: [OMPI users] Equivalent .h files"</a>
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
