<?
$subject_val = "Re: [OMPI docs] How to compile OpenMPI applications?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 24 12:50:52 2013" -->
<!-- isoreceived="20130824165052" -->
<!-- sent="Sat, 24 Aug 2013 09:50:49 -0700" -->
<!-- isosent="20130824165049" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI docs] How to compile OpenMPI applications?" -->
<!-- id="EBF70D4C-A776-4E1F-8B62-92462EE61969_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130824164410.GC10861_at_slate" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-24 12:50:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0174.php">Leonardo Fialho: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<li><strong>Previous message:</strong> <a href="0172.php">manday_at_[hidden]: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<li><strong>In reply to:</strong> <a href="0172.php">manday_at_[hidden]: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0174.php">Leonardo Fialho: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<li><strong>Reply:</strong> <a href="0174.php">Leonardo Fialho: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<li><strong>Reply:</strong> <a href="0175.php">manday_at_[hidden]: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We generally refrain from helping students with assignments as that somewhat violates the intent of the teacher, but we can certainly provide direction. Constructing your own version of mpicc would mean that you dig thru the various .m4 files in the config directory to see what compiler and linker flags are being set. The code base tests the local environment using the .m4 files to determine which are applicable.
<br>
<p>Good luck with your assignment!
<br>
<p>On Aug 24, 2013, at 9:44 AM, manday_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Basically, yes. But what are the &quot;right librarlies&quot; and the necessary
</span><br>
<span class="quotelev1">&gt; header files? I would like to find documentation which does *not* assume
</span><br>
<span class="quotelev1">&gt; a &quot;black box&quot; (mpicc) which does all the &quot;magic&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Of course, I could just look at the example output of mpicc --showme,
</span><br>
<span class="quotelev1">&gt; but then I couldn't be sure that this is generally the right LD and CC
</span><br>
<span class="quotelev1">&gt; flags - therefore I'm looking for a documentation which covers the
</span><br>
<span class="quotelev1">&gt; compilation requirements generally.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, Aug 24, 2013 at 11:13:31AM -0500, Leonardo Fialho wrote:
</span><br>
<span class="quotelev2">&gt;&gt; If I'm not wrong, you just have to link the right libraries and be sure the preprocessor will find the header files. Usually, the mpicc is a compiler wraper that does that for you. Check if actually it is not a script that you can just change the content to adapt it to your necessities.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 24, 2013, at 10:02 AM, manday_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; without mpicc, documentation of the general requirements. mpicc --showme
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will just give an example, that's not what I meant when I referred to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;documentation&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Freely rephrased, I'm looking for documentation which would
</span><br>
<span class="quotelev3">&gt;&gt;&gt; theoretically allow me to write a working mpicc myself (although that is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; obviously not my goal).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sat, Aug 24, 2013 at 07:34:07AM -0700, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Just type &quot;mpicc --showme&quot; and it will tell you the cmd line
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Aug 24, 2013, at 3:49 AM, manday_at_[hidden] wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; could you please provide me with documentation of how to compile OpenMPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; C applications in general (without a does-it-for-you tool such as mpicc)?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thank you
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; docs mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; docs_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; docs mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; docs_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; docs mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; docs_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
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
<li><strong>Next message:</strong> <a href="0174.php">Leonardo Fialho: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<li><strong>Previous message:</strong> <a href="0172.php">manday_at_[hidden]: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<li><strong>In reply to:</strong> <a href="0172.php">manday_at_[hidden]: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0174.php">Leonardo Fialho: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<li><strong>Reply:</strong> <a href="0174.php">Leonardo Fialho: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<li><strong>Reply:</strong> <a href="0175.php">manday_at_[hidden]: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
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
