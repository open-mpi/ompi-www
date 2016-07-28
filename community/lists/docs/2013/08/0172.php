<?
$subject_val = "Re: [OMPI docs] How to compile OpenMPI applications?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 24 12:46:28 2013" -->
<!-- isoreceived="20130824164628" -->
<!-- sent="Sat, 24 Aug 2013 18:44:11 +0200" -->
<!-- isosent="20130824164411" -->
<!-- name="manday_at_[hidden]" -->
<!-- email="manday_at_[hidden]" -->
<!-- subject="Re: [OMPI docs] How to compile OpenMPI applications?" -->
<!-- id="20130824164410.GC10861_at_slate" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> <a href="mailto:manday_at_[hidden]?Subject=Re:%20[OMPI%20docs]%20How%20to%20compile%20OpenMPI%20applications?"><em>manday_at_[hidden]</em></a><br>
<strong>Date:</strong> 2013-08-24 12:44:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0173.php">Ralph Castain: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<li><strong>Previous message:</strong> <a href="0171.php">&#195;&#150;zg&#195;&#188;r Pek&#195;&#167;a&#196;&#159;l&#196;&#177;yan: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<li><strong>In reply to:</strong> <a href="0170.php">Leonardo Fialho: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0173.php">Ralph Castain: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<li><strong>Reply:</strong> <a href="0173.php">Ralph Castain: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Basically, yes. But what are the &quot;right librarlies&quot; and the necessary
<br>
header files? I would like to find documentation which does *not* assume
<br>
a &quot;black box&quot; (mpicc) which does all the &quot;magic&quot;.
<br>
<p>Of course, I could just look at the example output of mpicc --showme,
<br>
but then I couldn't be sure that this is generally the right LD and CC
<br>
flags - therefore I'm looking for a documentation which covers the
<br>
compilation requirements generally.
<br>
<p><p>On Sat, Aug 24, 2013 at 11:13:31AM -0500, Leonardo Fialho wrote:
<br>
<span class="quotelev1">&gt; If I'm not wrong, you just have to link the right libraries and be sure the preprocessor will find the header files. Usually, the mpicc is a compiler wraper that does that for you. Check if actually it is not a script that you can just change the content to adapt it to your necessities.
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
<span class="quotelev4">&gt; &gt;&gt;&gt; could you please provide me with documentation of how to compile OpenMPI
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; C applications in general (without a does-it-for-you tool such as mpicc)?
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0173.php">Ralph Castain: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<li><strong>Previous message:</strong> <a href="0171.php">&#195;&#150;zg&#195;&#188;r Pek&#195;&#167;a&#196;&#159;l&#196;&#177;yan: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<li><strong>In reply to:</strong> <a href="0170.php">Leonardo Fialho: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0173.php">Ralph Castain: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<li><strong>Reply:</strong> <a href="0173.php">Ralph Castain: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
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
