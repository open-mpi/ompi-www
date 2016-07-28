<?
$subject_val = "Re: [OMPI users] Object Send Doubt";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 13 07:10:53 2008" -->
<!-- isoreceived="20080713111053" -->
<!-- sent="Sun, 13 Jul 2008 08:10:45 -0300" -->
<!-- isosent="20080713111045" -->
<!-- name="Carlos Henrique da Silva Santos" -->
<!-- email="santos.chs_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Object Send Doubt" -->
<!-- id="b95def290807130410u6d1fce45qdb56bd0b023b1add_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3a37617f0807130233h183ef028ta5db04f7f38d5f11_at_mail.gmail.com" -->
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
<strong>From:</strong> Carlos Henrique da Silva Santos (<em>santos.chs_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-13 07:10:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6064.php">Tom Riddle: "Re: [OMPI users] Valgrind Functionality"</a>
<li><strong>Previous message:</strong> <a href="6062.php">Gabriele Fatigati: "Re: [OMPI users] Object Send Doubt"</a>
<li><strong>In reply to:</strong> <a href="6062.php">Gabriele Fatigati: "Re: [OMPI users] Object Send Doubt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6069.php">Andreas Schäfer: "Re: [OMPI users] Object Send Doubt"</a>
<li><strong>Reply:</strong> <a href="6069.php">Andreas Schäfer: "Re: [OMPI users] Object Send Doubt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok. Gabriele,
<br>
&nbsp;&nbsp;&nbsp;But I would like to know, how can I define DATATYPE on send and
<br>
recv? Could you give me an example?
<br>
&nbsp;&nbsp;&nbsp;For example, my class has the following design and I want to
<br>
send/recv Test object.
<br>
<p>class Test {
<br>
private:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int coordinate;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vector&lt;double&gt; s;
<br>
public:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void setD(int, vector&lt;double&gt;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double getParameter(int);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vector&lt;double&gt; getAll(void);
<br>
}
<br>
<p><p>Thank you for all.
<br>
<p><p>On Sun, Jul 13, 2008 at 6:33 AM, Gabriele Fatigati &lt;g.fatigati_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Carlos,
</span><br>
<span class="quotelev1">&gt; simply you can send all object's field and rebuild new object in destination
</span><br>
<span class="quotelev1">&gt; process.  Maybe, you have to delete old object in source process. Remember
</span><br>
<span class="quotelev1">&gt; that you can't send address (eg: pointers)  because they refera in local
</span><br>
<span class="quotelev1">&gt; memory. If you want to do &quot;deep copy&quot; of object, you have to send the entire
</span><br>
<span class="quotelev1">&gt; structures pointed to.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2008/7/13 Carlos Henrique da Silva Santos &lt;santos.chs_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Mr. Andreas,
</span><br>
<span class="quotelev2">&gt;&gt; (English)       I tried to apply MPI_Type_create_struct(), which is
</span><br>
<span class="quotelev2">&gt;&gt; correct for C Struct, as showed
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (<a href="https://hec.wiki.leeds.ac.uk/pub/Techniques/ParallelComputing/MPI_course.pdf">https://hec.wiki.leeds.ac.uk/pub/Techniques/ParallelComputing/MPI_course.pdf</a>).
</span><br>
<span class="quotelev2">&gt;&gt;        But, I can't solve it for C++ object.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (Portuguese)       Eu tentei aplicar MPI_Type_create_struct(), que
</span><br>
<span class="quotelev2">&gt;&gt; funcionou em Struct do C, como mostrado em
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (<a href="https://hec.wiki.leeds.ac.uk/pub/Techniques/ParallelComputing/MPI_course.pdf">https://hec.wiki.leeds.ac.uk/pub/Techniques/ParallelComputing/MPI_course.pdf</a>).
</span><br>
<span class="quotelev2">&gt;&gt;        Mas eu n&#227;o consegui resolv&#234;-lo para objetos em C++.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; Grato,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Carlos
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Supercomputing Group
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.cineca.it Tel: +39 051 6171722
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g.fatigati_at_[hidden]
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
==================================================
Carlos Henrique da Silva Santos, M.Sc.
Graduate Research Assistant
Laboratory of Electromagnetism Applied and Computational
Department of Microwaves and Optics
School of Electrical and Computer Engineer
State University of Campinas (UNICAMP)
Phone: +55(19)3521-5175
==================================================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6064.php">Tom Riddle: "Re: [OMPI users] Valgrind Functionality"</a>
<li><strong>Previous message:</strong> <a href="6062.php">Gabriele Fatigati: "Re: [OMPI users] Object Send Doubt"</a>
<li><strong>In reply to:</strong> <a href="6062.php">Gabriele Fatigati: "Re: [OMPI users] Object Send Doubt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6069.php">Andreas Schäfer: "Re: [OMPI users] Object Send Doubt"</a>
<li><strong>Reply:</strong> <a href="6069.php">Andreas Schäfer: "Re: [OMPI users] Object Send Doubt"</a>
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
