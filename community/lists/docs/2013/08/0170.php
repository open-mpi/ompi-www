<?
$subject_val = "Re: [OMPI docs] How to compile OpenMPI applications?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 24 12:13:37 2013" -->
<!-- isoreceived="20130824161337" -->
<!-- sent="Sat, 24 Aug 2013 11:13:31 -0500" -->
<!-- isosent="20130824161331" -->
<!-- name="Leonardo Fialho" -->
<!-- email="leonardofialho_at_[hidden]" -->
<!-- subject="Re: [OMPI docs] How to compile OpenMPI applications?" -->
<!-- id="9851F496-C00C-4068-98C4-F8FC81C7F773_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130824150201.GA10861_at_slate" -->
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
<strong>From:</strong> Leonardo Fialho (<em>leonardofialho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-24 12:13:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0171.php">Özgür Pekçağlıyan: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<li><strong>Previous message:</strong> <a href="0169.php">manday_at_[hidden]: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<li><strong>In reply to:</strong> <a href="0169.php">manday_at_[hidden]: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0171.php">Özgür Pekçağlıyan: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<li><strong>Reply:</strong> <a href="0171.php">Özgür Pekçağlıyan: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<li><strong>Reply:</strong> <a href="0172.php">manday_at_[hidden]: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If I'm not wrong, you just have to link the right libraries and be sure the preprocessor will find the header files. Usually, the mpicc is a compiler wraper that does that for you. Check if actually it is not a script that you can just change the content to adapt it to your necessities.
<br>
<p>On Aug 24, 2013, at 10:02 AM, manday_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; without mpicc, documentation of the general requirements. mpicc --showme
</span><br>
<span class="quotelev1">&gt; will just give an example, that's not what I meant when I referred to
</span><br>
<span class="quotelev1">&gt; &quot;documentation&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Freely rephrased, I'm looking for documentation which would
</span><br>
<span class="quotelev1">&gt; theoretically allow me to write a working mpicc myself (although that is
</span><br>
<span class="quotelev1">&gt; obviously not my goal).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, Aug 24, 2013 at 07:34:07AM -0700, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Just type &quot;mpicc --showme&quot; and it will tell you the cmd line
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 24, 2013, at 3:49 AM, manday_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; could you please provide me with documentation of how to compile OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C applications in general (without a does-it-for-you tool such as mpicc)?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; docs mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; docs_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; docs mailing list
</span><br>
<span class="quotelev2">&gt;&gt; docs_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
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
<li><strong>Next message:</strong> <a href="0171.php">Özgür Pekçağlıyan: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<li><strong>Previous message:</strong> <a href="0169.php">manday_at_[hidden]: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<li><strong>In reply to:</strong> <a href="0169.php">manday_at_[hidden]: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0171.php">Özgür Pekçağlıyan: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<li><strong>Reply:</strong> <a href="0171.php">Özgür Pekçağlıyan: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<li><strong>Reply:</strong> <a href="0172.php">manday_at_[hidden]: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
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
