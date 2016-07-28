<?
$subject_val = "Re: [OMPI users] Object Send Doubt";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 13 13:26:06 2008" -->
<!-- isoreceived="20080713172606" -->
<!-- sent="Sun, 13 Jul 2008 19:25:59 +0200" -->
<!-- isosent="20080713172559" -->
<!-- name="Andreas Sch&#228;fer" -->
<!-- email="gentryx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Object Send Doubt" -->
<!-- id="20080713172559.GC19555_at_neuromancer" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="b95def290807130410u6d1fce45qdb56bd0b023b1add_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Object Send Doubt<br>
<strong>From:</strong> Andreas Sch&#228;fer (<em>gentryx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-13 13:25:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6070.php">Shiqing Fan: "Re: [OMPI users] Valgrind Functionality"</a>
<li><strong>Previous message:</strong> <a href="6068.php">Brock Palen: "Re: [OMPI users] getting fortran90 to compile"</a>
<li><strong>In reply to:</strong> <a href="6063.php">Carlos Henrique da Silva Santos: "Re: [OMPI users] Object Send Doubt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6072.php">Gabriele Fatigati: "Re: [OMPI users] Object Send Doubt"</a>
<li><strong>Reply:</strong> <a href="6072.php">Gabriele Fatigati: "Re: [OMPI users] Object Send Doubt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 08:10 Sun 13 Jul     , Carlos Henrique da Silva Santos wrote:
<br>
<span class="quotelev1">&gt; Ok. Gabriele,
</span><br>
<span class="quotelev1">&gt;    But I would like to know, how can I define DATATYPE on send and
</span><br>
<span class="quotelev1">&gt; recv? Could you give me an example?
</span><br>
<span class="quotelev1">&gt;    For example, my class has the following design and I want to
</span><br>
<span class="quotelev1">&gt; send/recv Test object.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; class Test {
</span><br>
<span class="quotelev1">&gt; private:
</span><br>
<span class="quotelev1">&gt;      int coordinate;
</span><br>
<span class="quotelev1">&gt;      vector&lt;double&gt; s;
</span><br>
<span class="quotelev1">&gt; public:
</span><br>
<span class="quotelev1">&gt;       void setD(int, vector&lt;double&gt;);
</span><br>
<span class="quotelev1">&gt;       double getParameter(int);
</span><br>
<span class="quotelev1">&gt;       vector&lt;double&gt; getAll(void);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<p>Hi Carlos,
<br>
<p>the problem with this object is that it contains a pointer to malloc'd
<br>
memory (the vector). Since datatypes can only be used for objects with
<br>
fixed size (and layout), you can't define an MPI_Datatype for
<br>
this. I'd suggest you to use Boost.MPI in this case
<br>
(<a href="http://www.boost.org/doc/libs/1_35_0/doc/html/mpi.html">http://www.boost.org/doc/libs/1_35_0/doc/html/mpi.html</a>)
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
0049/3641-9-46376
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
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6069/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6070.php">Shiqing Fan: "Re: [OMPI users] Valgrind Functionality"</a>
<li><strong>Previous message:</strong> <a href="6068.php">Brock Palen: "Re: [OMPI users] getting fortran90 to compile"</a>
<li><strong>In reply to:</strong> <a href="6063.php">Carlos Henrique da Silva Santos: "Re: [OMPI users] Object Send Doubt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6072.php">Gabriele Fatigati: "Re: [OMPI users] Object Send Doubt"</a>
<li><strong>Reply:</strong> <a href="6072.php">Gabriele Fatigati: "Re: [OMPI users] Object Send Doubt"</a>
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
