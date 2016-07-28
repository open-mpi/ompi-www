<?
$subject_val = "Re: [OMPI users] Object Send Doubt";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 13 14:31:33 2008" -->
<!-- isoreceived="20080713183133" -->
<!-- sent="Sun, 13 Jul 2008 20:31:24 +0200" -->
<!-- isosent="20080713183124" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Object Send Doubt" -->
<!-- id="3a37617f0807131131v560b5f69tda1df189ed948ac1_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080713172559.GC19555_at_neuromancer" -->
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
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-13 14:31:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6073.php">Terry Frankcombe: "Re: [OMPI users] getting fortran90 to compile"</a>
<li><strong>Previous message:</strong> <a href="6071.php">Doug Reeder: "Re: [OMPI users] getting fortran90 to compile"</a>
<li><strong>In reply to:</strong> <a href="6069.php">Andreas Sch&#228;fer: "Re: [OMPI users] Object Send Doubt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6128.php">Tim Mattox: "Re: [OMPI users] Object Send Doubt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Carlos,
<br>
but why you need to pass an object? I don't understand this. Usuall, in MPI,
<br>
we don't need to do this.
<br>
<p><p><p>2008/7/13 Andreas Sch&#228;fer &lt;gentryx_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; On 08:10 Sun 13 Jul     , Carlos Henrique da Silva Santos wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Ok. Gabriele,
</span><br>
<span class="quotelev2">&gt; &gt;    But I would like to know, how can I define DATATYPE on send and
</span><br>
<span class="quotelev2">&gt; &gt; recv? Could you give me an example?
</span><br>
<span class="quotelev2">&gt; &gt;    For example, my class has the following design and I want to
</span><br>
<span class="quotelev2">&gt; &gt; send/recv Test object.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; class Test {
</span><br>
<span class="quotelev2">&gt; &gt; private:
</span><br>
<span class="quotelev2">&gt; &gt;      int coordinate;
</span><br>
<span class="quotelev2">&gt; &gt;      vector&lt;double&gt; s;
</span><br>
<span class="quotelev2">&gt; &gt; public:
</span><br>
<span class="quotelev2">&gt; &gt;       void setD(int, vector&lt;double&gt;);
</span><br>
<span class="quotelev2">&gt; &gt;       double getParameter(int);
</span><br>
<span class="quotelev2">&gt; &gt;       vector&lt;double&gt; getAll(void);
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Carlos,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the problem with this object is that it contains a pointer to malloc'd
</span><br>
<span class="quotelev1">&gt; memory (the vector). Since datatypes can only be used for objects with
</span><br>
<span class="quotelev1">&gt; fixed size (and layout), you can't define an MPI_Datatype for
</span><br>
<span class="quotelev1">&gt; this. I'd suggest you to use Boost.MPI in this case
</span><br>
<span class="quotelev1">&gt; (<a href="http://www.boost.org/doc/libs/1_35_0/doc/html/mpi.html">http://www.boost.org/doc/libs/1_35_0/doc/html/mpi.html</a>)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers
</span><br>
<span class="quotelev1">&gt; -Andreas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ============================================
</span><br>
<span class="quotelev1">&gt; Andreas Sch&#228;fer
</span><br>
<span class="quotelev1">&gt; Cluster and Metacomputing Working Group
</span><br>
<span class="quotelev1">&gt; Friedrich-Schiller-Universit&#228;t Jena, Germany
</span><br>
<span class="quotelev1">&gt; 0049/3641-9-46376
</span><br>
<span class="quotelev1">&gt; PGP/GPG key via keyserver
</span><br>
<span class="quotelev1">&gt; I'm a bright... <a href="http://www.the-brights.net">http://www.the-brights.net</a>
</span><br>
<span class="quotelev1">&gt; ============================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (\___/)
</span><br>
<span class="quotelev1">&gt; (+'.'+)
</span><br>
<span class="quotelev1">&gt; (&quot;)_(&quot;)
</span><br>
<span class="quotelev1">&gt; This is Bunny. Copy and paste Bunny into your
</span><br>
<span class="quotelev1">&gt; signature to help him gain world domination!
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
<p><p><p><pre>
-- 
Gabriele Fatigati
CINECA Systems &amp; Tecnologies Department
Supercomputing Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it Tel: +39 051 6171722
g.fatigati_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6072/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6073.php">Terry Frankcombe: "Re: [OMPI users] getting fortran90 to compile"</a>
<li><strong>Previous message:</strong> <a href="6071.php">Doug Reeder: "Re: [OMPI users] getting fortran90 to compile"</a>
<li><strong>In reply to:</strong> <a href="6069.php">Andreas Sch&#228;fer: "Re: [OMPI users] Object Send Doubt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6128.php">Tim Mattox: "Re: [OMPI users] Object Send Doubt"</a>
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
