<?
$subject_val = "Re: [OMPI users] Object Send Doubt";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 13 05:33:18 2008" -->
<!-- isoreceived="20080713093318" -->
<!-- sent="Sun, 13 Jul 2008 11:33:11 +0200" -->
<!-- isosent="20080713093311" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Object Send Doubt" -->
<!-- id="3a37617f0807130233h183ef028ta5db04f7f38d5f11_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="b95def290807121742s88ec044o1b2066e14c729534_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2008-07-13 05:33:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6063.php">Carlos Henrique da Silva Santos: "Re: [OMPI users] Object Send Doubt"</a>
<li><strong>Previous message:</strong> <a href="6061.php">Carlos Henrique da Silva Santos: "Re: [OMPI users] Object Send Doubt"</a>
<li><strong>In reply to:</strong> <a href="6061.php">Carlos Henrique da Silva Santos: "Re: [OMPI users] Object Send Doubt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6063.php">Carlos Henrique da Silva Santos: "Re: [OMPI users] Object Send Doubt"</a>
<li><strong>Reply:</strong> <a href="6063.php">Carlos Henrique da Silva Santos: "Re: [OMPI users] Object Send Doubt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Carlos,
<br>
simply you can send all object's field and rebuild new object in destination
<br>
process.  Maybe, you have to delete old object in source process. Remember
<br>
that you can't send address (eg: pointers)  because they refera in local
<br>
memory. If you want to do &quot;deep copy&quot; of object, you have to send the entire
<br>
structures pointed to.
<br>
<p>2008/7/13 Carlos Henrique da Silva Santos &lt;santos.chs_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Mr. Andreas,
</span><br>
<span class="quotelev1">&gt; (English)       I tried to apply MPI_Type_create_struct(), which is
</span><br>
<span class="quotelev1">&gt; correct for C Struct, as showed
</span><br>
<span class="quotelev1">&gt; (
</span><br>
<span class="quotelev1">&gt; <a href="https://hec.wiki.leeds.ac.uk/pub/Techniques/ParallelComputing/MPI_course.pdf">https://hec.wiki.leeds.ac.uk/pub/Techniques/ParallelComputing/MPI_course.pdf</a>
</span><br>
<span class="quotelev1">&gt; ).
</span><br>
<span class="quotelev1">&gt;        But, I can't solve it for C++ object.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (Portuguese)       Eu tentei aplicar MPI_Type_create_struct(), que
</span><br>
<span class="quotelev1">&gt; funcionou em Struct do C, como mostrado em
</span><br>
<span class="quotelev1">&gt; (
</span><br>
<span class="quotelev1">&gt; <a href="https://hec.wiki.leeds.ac.uk/pub/Techniques/ParallelComputing/MPI_course.pdf">https://hec.wiki.leeds.ac.uk/pub/Techniques/ParallelComputing/MPI_course.pdf</a>
</span><br>
<span class="quotelev1">&gt; ).
</span><br>
<span class="quotelev1">&gt;        Mas eu n&#227;o consegui resolv&#234;-lo para objetos em C++.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Grato,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Carlos
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6062/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6063.php">Carlos Henrique da Silva Santos: "Re: [OMPI users] Object Send Doubt"</a>
<li><strong>Previous message:</strong> <a href="6061.php">Carlos Henrique da Silva Santos: "Re: [OMPI users] Object Send Doubt"</a>
<li><strong>In reply to:</strong> <a href="6061.php">Carlos Henrique da Silva Santos: "Re: [OMPI users] Object Send Doubt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6063.php">Carlos Henrique da Silva Santos: "Re: [OMPI users] Object Send Doubt"</a>
<li><strong>Reply:</strong> <a href="6063.php">Carlos Henrique da Silva Santos: "Re: [OMPI users] Object Send Doubt"</a>
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
