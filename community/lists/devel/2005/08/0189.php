<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 18 07:08:15 2005" -->
<!-- isoreceived="20050818120815" -->
<!-- sent="Thu, 18 Aug 2005 07:08:07 -0500" -->
<!-- isosent="20050818120807" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  Compile error with latest code" -->
<!-- id="3C78FF0E-A261-465F-A969-FC442E943DD5_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050818120234.GB18673_at_minantech.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-18 07:08:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0190.php">Rainer Keller: "Re:  1.0 platforms / compilers"</a>
<li><strong>Previous message:</strong> <a href="0188.php">Gleb Natapov: "Compile error with latest code"</a>
<li><strong>In reply to:</strong> <a href="0188.php">Gleb Natapov: "Compile error with latest code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0191.php">Gleb Natapov: "Re:  Compile error with latest code"</a>
<li><strong>Reply:</strong> <a href="0191.php">Gleb Natapov: "Re:  Compile error with latest code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry about that - some files moved around yesterday afternoon.  You  
<br>
can either re-run autogen.sh / configure / make again and that  
<br>
*should* fix the problem, or you can:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;cd ompi/mca/ptl/sm
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rm .deps/*
<br>
&nbsp;&nbsp;&nbsp;&nbsp;make -k
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cd ../../../
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;do whatever you normally do to build OMPI&gt;
<br>
<p>Brian
<br>
<p>On Aug 18, 2005, at 7:02 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt; I can't compile today's svn code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gcc -shared  .libs/ptl_self.o .libs/ptl_self_component.o  -pthread -lm
</span><br>
<span class="quotelev1">&gt; -lutil  -Wl,-soname -Wl,mca_ptl_self.so -o .libs/mca_ptl_self.so
</span><br>
<span class="quotelev1">&gt; creating mca_ptl_self.la
</span><br>
<span class="quotelev1">&gt; (cd .libs &amp;&amp; rm -f mca_ptl_self.la &amp;&amp; ln -s ../mca_ptl_self.la
</span><br>
<span class="quotelev1">&gt; mca_ptl_self.la)
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/export/home/glebn/OpenMPI/ompi/ompi/mca/ptl/self'
</span><br>
<span class="quotelev1">&gt; Making all in sm
</span><br>
<span class="quotelev1">&gt; make[4]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/export/home/glebn/OpenMPI/ompi/ompi/mca/ptl/sm'
</span><br>
<span class="quotelev1">&gt; make[4]: *** No rule to make target `src/ptl_sm.c', needed by
</span><br>
<span class="quotelev1">&gt; `ptl_sm.lo'.  Stop.
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/export/home/glebn/OpenMPI/ompi/ompi/mca/ptl/sm'
</span><br>
<span class="quotelev1">&gt; make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/export/home/glebn/OpenMPI/ompi/ompi/dynamic-mca/ptl'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/export/home/glebn/OpenMPI/ompi/ompi/dynamic-mca'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/export/home/glebn/OpenMPI/ompi/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;             Gleb.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0190.php">Rainer Keller: "Re:  1.0 platforms / compilers"</a>
<li><strong>Previous message:</strong> <a href="0188.php">Gleb Natapov: "Compile error with latest code"</a>
<li><strong>In reply to:</strong> <a href="0188.php">Gleb Natapov: "Compile error with latest code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0191.php">Gleb Natapov: "Re:  Compile error with latest code"</a>
<li><strong>Reply:</strong> <a href="0191.php">Gleb Natapov: "Re:  Compile error with latest code"</a>
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
