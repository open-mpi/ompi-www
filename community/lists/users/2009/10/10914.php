<?
$subject_val = "[OMPI users] bug in MPI_Cart_create?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 13 02:54:39 2009" -->
<!-- isoreceived="20091013065439" -->
<!-- sent="Tue, 13 Oct 2009 17:54:34 +1100" -->
<!-- isosent="20091013065434" -->
<!-- name="David Singleton" -->
<!-- email="David.Singleton_at_[hidden]" -->
<!-- subject="[OMPI users] bug in MPI_Cart_create?" -->
<!-- id="4AD4242A.8080705_at_anu.edu.au" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI users] bug in MPI_Cart_create?<br>
<strong>From:</strong> David Singleton (<em>David.Singleton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-13 02:54:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10915.php">Dorian Krause: "Re: [OMPI users] Deadlock in MPI_File_write_all on Infiniband"</a>
<li><strong>Previous message:</strong> <a href="10913.php">Edgar Gabriel: "Re: [OMPI users] Deadlock in MPI_File_write_all on Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10961.php">Kiril Dichev: "Re: [OMPI users] bug in MPI_Cart_create?"</a>
<li><strong>Reply:</strong> <a href="10961.php">Kiril Dichev: "Re: [OMPI users] bug in MPI_Cart_create?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looking back through the archives, a lot of people have hit error
<br>
messages like
<br>
<p><span class="quotelev1"> &gt; [bl302:26556] *** An error occurred in MPI_Cart_create
</span><br>
<span class="quotelev1"> &gt; [bl302:26556] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1"> &gt; [bl302:26556] *** MPI_ERR_ARG: invalid argument of some other kind
</span><br>
<span class="quotelev1"> &gt; [bl302:26556] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<p>One of the reasons people *may* be hitting this is what I believe to
<br>
be an incorrect test in MPI_Cart_create():
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (0 &gt; reorder || 1 &lt; reorder) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_ERRHANDLER_INVOKE (old_comm, MPI_ERR_ARG,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FUNC_NAME);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>reorder is a &quot;logical&quot; argument and &quot;2.5.2 C bindings&quot; in the MPI 1.3
<br>
standard says:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Logical flags are integers with value 0 meaning &#147;false&#148; and a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;non-zero value meaning &#147;true.&#148;
<br>
<p>So I'm not sure there should be any argument test.
<br>
<p><p>We hit this because we (sorta erroneously) were trying to use a GNU build
<br>
of Open MPI with Intel compilers.  gfortran has true=1 while ifort has
<br>
true=-1.  It seems to all work (by luck, I know) except this test.  Are
<br>
there any other tests like this in Open MPI?
<br>
<p>David
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10915.php">Dorian Krause: "Re: [OMPI users] Deadlock in MPI_File_write_all on Infiniband"</a>
<li><strong>Previous message:</strong> <a href="10913.php">Edgar Gabriel: "Re: [OMPI users] Deadlock in MPI_File_write_all on Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10961.php">Kiril Dichev: "Re: [OMPI users] bug in MPI_Cart_create?"</a>
<li><strong>Reply:</strong> <a href="10961.php">Kiril Dichev: "Re: [OMPI users] bug in MPI_Cart_create?"</a>
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
