<?
$subject_val = "Re: [OMPI users] Fwd: Problem with sending vectors";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 10:46:00 2008" -->
<!-- isoreceived="20080407144600" -->
<!-- sent="Mon, 7 Apr 2008 16:47:49 +0200" -->
<!-- isosent="20080407144749" -->
<!-- name="Andreas Sch&#228;fer" -->
<!-- email="gentryx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: Problem with sending vectors" -->
<!-- id="20080407144749.GA24030_at_hex.inf-ra.uni-jena.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1758930525.8457051207577580713.JavaMail.root_at_zcs.TCNJ.EDU" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fwd: Problem with sending vectors<br>
<strong>From:</strong> Andreas Sch&#228;fer (<em>gentryx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-07 10:47:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5335.php">yacob sen: "[OMPI users] An error occurred in MPI_comm_size"</a>
<li><strong>Previous message:</strong> <a href="5333.php">Albert Babinskas: "[OMPI users] Fwd: Problem with sending vectors"</a>
<li><strong>In reply to:</strong> <a href="5333.php">Albert Babinskas: "[OMPI users] Fwd: Problem with sending vectors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5381.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problem with sending vectors"</a>
<li><strong>Reply:</strong> <a href="5381.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problem with sending vectors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Albert,
<br>
<p>On 10:13 Mon 07 Apr     , Albert Babinskas wrote:
<br>
<span class="quotelev1">&gt; Some code for the error that i get:
</span><br>
[snip]
<br>
<span class="quotelev1">&gt; class Box has two int array inside it like
</span><br>
<span class="quotelev1">&gt; int a[3];
</span><br>
<span class="quotelev1">&gt; int b[3];
</span><br>
<p>Sorry, but &quot;has two int array inside it like&quot; isn't very precise. Do
<br>
you mean:
<br>
<p>class Box {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int a[3];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int b[3];
<br>
};
<br>
<p>or might you also mean:
<br>
<p>class Box {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int a[3];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Foo aLotOf;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bar otherStuff;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int b[3];
<br>
};
<br>
<p>?
<br>
<p>Anyways, your MPI_Datatype construction doesn't seem to be right:
<br>
<p><span class="quotelev1">&gt; MPI_Type_contiguous(9, MPI_INT, &amp;MPI_box);
</span><br>
<p>Fist of all, you should be using MPI_Type_create_struct for C++
<br>
classes in order to ensure that each member is addressed with its
<br>
correct offset (b/c of compiler memory layout/alignment). And second
<br>
you said that myclass/Box or whatever is build from two int[3], but in
<br>
the code above you register 9 ints.
<br>
<p>Again, we can't help you if you don't provide us with self-sufficient
<br>
code; small excerpts mixed with comments won't cut it in most cases.
<br>
<p>Cheers
<br>
-Andreas
<br>
<p><p><pre>
-- 
============================================
Andreas Sch&#228;fer
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
PGP/GPG key via keyserver
I'm a bright... <a href="http://www.the-brights.net">http://www.the-brights.net</a>
============================================
(\___/)
(+'.'+)
(&quot;)_(&quot;)
This is Bunny. Copy and paste Bunny into your 
signature to help him gain world domination!

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5334/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5335.php">yacob sen: "[OMPI users] An error occurred in MPI_comm_size"</a>
<li><strong>Previous message:</strong> <a href="5333.php">Albert Babinskas: "[OMPI users] Fwd: Problem with sending vectors"</a>
<li><strong>In reply to:</strong> <a href="5333.php">Albert Babinskas: "[OMPI users] Fwd: Problem with sending vectors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5381.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problem with sending vectors"</a>
<li><strong>Reply:</strong> <a href="5381.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problem with sending vectors"</a>
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
