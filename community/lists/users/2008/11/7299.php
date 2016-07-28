<?
$subject_val = "Re: [OMPI users] MPI_Type_create_darray causes MPI_File_set_view	to crash when ndims=2, array_of_gsizes[0]&gt;array_of_gsizes[1]";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 12 17:55:42 2008" -->
<!-- isoreceived="20081112225542" -->
<!-- sent="Wed, 12 Nov 2008 17:55:36 -0500" -->
<!-- isosent="20081112225536" -->
<!-- name="Antonio Molins" -->
<!-- email="amolins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Type_create_darray causes MPI_File_set_view	to crash when ndims=2, array_of_gsizes[0]&amp;gt;array_of_gsizes[1]" -->
<!-- id="D2AAF39E-C0A1-4F9B-A13D-0413B4409A65_at_mit.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20081112225106.GK16693_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Type_create_darray causes MPI_File_set_view	to crash when ndims=2, array_of_gsizes[0]&gt;array_of_gsizes[1]<br>
<strong>From:</strong> Antonio Molins (<em>amolins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-12 17:55:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7300.php">Neville Clark: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Previous message:</strong> <a href="7298.php">Robert Latham: "Re: [OMPI users] MPI_Type_create_darray causes MPI_File_set_view	to crash when ndims=2, array_of_gsizes[0]&gt;array_of_gsizes[1]"</a>
<li><strong>In reply to:</strong> <a href="7298.php">Robert Latham: "Re: [OMPI users] MPI_Type_create_darray causes MPI_File_set_view	to crash when ndims=2, array_of_gsizes[0]&gt;array_of_gsizes[1]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Rob,
<br>
<p>I think I could trim it down to a small test case, but this should be  
<br>
reproducible with the conditions given. I find it unlikely that it is  
<br>
a ROMIO bug, because when I construct the datatype by myself, it goes  
<br>
smooth as silk.
<br>
<p>Thanks for the reply,
<br>
A
<br>
<p>On Nov 12, 2008, at 5:51 PM, Robert Latham wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, Oct 31, 2008 at 11:19:39AM -0400, Antonio Molins wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi again,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem in a nutshell: it looks like, when I use
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Type_create_darray with an argument array_of_gsizes where
</span><br>
<span class="quotelev2">&gt;&gt; array_of_gsizes[0]&gt;array_of_gsizes[1], the datatype returned goes
</span><br>
<span class="quotelev2">&gt;&gt; through MPI_Type_commit() just fine, but then it causes
</span><br>
<span class="quotelev2">&gt;&gt; MPI_File_set_view to crash!! Any idea as to why this is happening?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi.  It sounds like from your description (and confirmed in your
</span><br>
<span class="quotelev1">&gt; backtrace) that this is a ROMIO bug.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you happen to have a small test case for this crash?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; ==rob
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Rob Latham
</span><br>
<span class="quotelev1">&gt; Mathematics and Computer Science Division    A215 0178 EA2D B059 8CDF
</span><br>
<span class="quotelev1">&gt; Argonne National Lab, IL USA                 B29D F333 664A 4280 315B
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>--------------------------------------------------------------------------------
<br>
Antonio Molins, PhD Candidate
<br>
Medical Engineering and Medical Physics
<br>
Harvard - MIT Division of Health Sciences and Technology
<br>
<pre>
--
&quot;Y as&#237; del poco dormir y del mucho leer,
se le sec&#243; el cerebro de manera que vino
a perder el juicio&quot;.
                                        Miguel de Cervantes
--------------------------------------------------------------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7300.php">Neville Clark: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Previous message:</strong> <a href="7298.php">Robert Latham: "Re: [OMPI users] MPI_Type_create_darray causes MPI_File_set_view	to crash when ndims=2, array_of_gsizes[0]&gt;array_of_gsizes[1]"</a>
<li><strong>In reply to:</strong> <a href="7298.php">Robert Latham: "Re: [OMPI users] MPI_Type_create_darray causes MPI_File_set_view	to crash when ndims=2, array_of_gsizes[0]&gt;array_of_gsizes[1]"</a>
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
