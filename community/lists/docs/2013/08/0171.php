<?
$subject_val = "Re: [OMPI docs] How to compile OpenMPI applications?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 24 12:19:45 2013" -->
<!-- isoreceived="20130824161945" -->
<!-- sent="Sat, 24 Aug 2013 19:19:24 +0300" -->
<!-- isosent="20130824161924" -->
<!-- name="&#195;&#150;zg&#195;&#188;r Pek&#195;&#167;a&#196;&#159;l&#196;&#177;yan" -->
<!-- email="ozgur.pekcagliyan_at_[hidden]" -->
<!-- subject="Re: [OMPI docs] How to compile OpenMPI applications?" -->
<!-- id="CAA52m+MLx2pTj6mFjAmrtsh-9mToN-BsHys9MFXy7phx+1y18g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="9851F496-C00C-4068-98C4-F8FC81C7F773_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI docs] How to compile OpenMPI applications?<br>
<strong>From:</strong> &#195;&#150;zg&#195;&#188;r Pek&#195;&#167;a&#196;&#159;l&#196;&#177;yan (<em>ozgur.pekcagliyan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-24 12:19:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0172.php">manday_at_[hidden]: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<li><strong>Previous message:</strong> <a href="0170.php">Leonardo Fialho: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<li><strong>In reply to:</strong> <a href="0170.php">Leonardo Fialho: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0172.php">manday_at_[hidden]: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I really don't understand what you want to do. Do you want to create a new
<br>
compiler or want to know how to compile?
<br>
<p>If you want to know how to compile, here is some easy steps which you can
<br>
check;
<br>
<p>basically command works like this;
<br>
<p>mpicc inpit_file.c -o output_file
<br>
and you run it like
<br>
mpirun -np 2 output_file
<br>
<p>if you want documentation you can write this on a terminal;
<br>
<p>man mpicc
<br>
<p>finally you can refer to web site of my teacher;
<br>
<p><a href="http://siber.cankaya.edu.tr/ozdogan/GraduateParallelComputing/Fall2011/index.html#CourseSchedule">http://siber.cankaya.edu.tr/ozdogan/GraduateParallelComputing/Fall2011/index.html#CourseSchedule</a>
<br>
|outline
<br>
<p>hope this helps.
<br>
<p><p>On Sat, Aug 24, 2013 at 7:13 PM, Leonardo Fialho
<br>
&lt;leonardofialho_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; If I'm not wrong, you just have to link the right libraries and be sure
</span><br>
<span class="quotelev1">&gt; the preprocessor will find the header files. Usually, the mpicc is a
</span><br>
<span class="quotelev1">&gt; compiler wraper that does that for you. Check if actually it is not a
</span><br>
<span class="quotelev1">&gt; script that you can just change the content to adapt it to your necessities.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 24, 2013, at 10:02 AM, manday_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; without mpicc, documentation of the general requirements. mpicc --showme
</span><br>
<span class="quotelev2">&gt; &gt; will just give an example, that's not what I meant when I referred to
</span><br>
<span class="quotelev2">&gt; &gt; &quot;documentation&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Freely rephrased, I'm looking for documentation which would
</span><br>
<span class="quotelev2">&gt; &gt; theoretically allow me to write a working mpicc myself (although that is
</span><br>
<span class="quotelev2">&gt; &gt; obviously not my goal).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Sat, Aug 24, 2013 at 07:34:07AM -0700, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Just type &quot;mpicc --showme&quot; and it will tell you the cmd line
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Aug 24, 2013, at 3:49 AM, manday_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; could you please provide me with documentation of how to compile
</span><br>
<span class="quotelev1">&gt; OpenMPI
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; C applications in general (without a does-it-for-you tool such as
</span><br>
<span class="quotelev1">&gt; mpicc)?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thank you
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; docs mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; docs_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; docs mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; docs_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; docs mailing list
</span><br>
<span class="quotelev2">&gt; &gt; docs_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; docs mailing list
</span><br>
<span class="quotelev1">&gt; docs_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
&#195;&#150;zg&#195;&#188;r Pek&#195;&#167;a&#196;&#159;l&#196;&#177;yan
B.Sc. in Computer Engineering
M.Sc. in Computer Engineering
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/docs/att-0171/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0172.php">manday_at_[hidden]: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<li><strong>Previous message:</strong> <a href="0170.php">Leonardo Fialho: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<li><strong>In reply to:</strong> <a href="0170.php">Leonardo Fialho: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0172.php">manday_at_[hidden]: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
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
