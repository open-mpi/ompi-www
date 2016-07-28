<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 18 08:04:41 2005" -->
<!-- isoreceived="20050818130441" -->
<!-- sent="Thu, 18 Aug 2005 16:04:09 +0300" -->
<!-- isosent="20050818130409" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re:  Compile error with latest code" -->
<!-- id="20050818130409.GC18673_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3C78FF0E-A261-465F-A969-FC442E943DD5_at_open-mpi.org" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-18 08:04:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0192.php">Brian Barrett: "Re:  Compile error with latest code"</a>
<li><strong>Previous message:</strong> <a href="0190.php">Rainer Keller: "Re:  1.0 platforms / compilers"</a>
<li><strong>In reply to:</strong> <a href="0189.php">Brian Barrett: "Re:  Compile error with latest code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0192.php">Brian Barrett: "Re:  Compile error with latest code"</a>
<li><strong>Reply:</strong> <a href="0192.php">Brian Barrett: "Re:  Compile error with latest code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Aug 18, 2005 at 07:08:07AM -0500, Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; Sorry about that - some files moved around yesterday afternoon.  You  
</span><br>
<span class="quotelev1">&gt; can either re-run autogen.sh / configure / make again and that  
</span><br>
<span class="quotelev1">&gt; *should* fix the problem, or you can:
</span><br>
It doesn't :(
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     cd ompi/mca/ptl/sm
</span><br>
<span class="quotelev1">&gt;     rm .deps/*
</span><br>
<span class="quotelev1">&gt;     make -k
</span><br>
<span class="quotelev1">&gt;     cd ../../../
</span><br>
<span class="quotelev1">&gt;     &lt;do whatever you normally do to build OMPI&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
I'll try that. Thank you.
<br>
<p><span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 18, 2005, at 7:02 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I can't compile today's svn code:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; gcc -shared  .libs/ptl_self.o .libs/ptl_self_component.o  -pthread -lm
</span><br>
<span class="quotelev2">&gt; &gt; -lutil  -Wl,-soname -Wl,mca_ptl_self.so -o .libs/mca_ptl_self.so
</span><br>
<span class="quotelev2">&gt; &gt; creating mca_ptl_self.la
</span><br>
<span class="quotelev2">&gt; &gt; (cd .libs &amp;&amp; rm -f mca_ptl_self.la &amp;&amp; ln -s ../mca_ptl_self.la
</span><br>
<span class="quotelev2">&gt; &gt; mca_ptl_self.la)
</span><br>
<span class="quotelev2">&gt; &gt; make[4]: Leaving directory
</span><br>
<span class="quotelev2">&gt; &gt; `/export/home/glebn/OpenMPI/ompi/ompi/mca/ptl/self'
</span><br>
<span class="quotelev2">&gt; &gt; Making all in sm
</span><br>
<span class="quotelev2">&gt; &gt; make[4]: Entering directory
</span><br>
<span class="quotelev2">&gt; &gt; `/export/home/glebn/OpenMPI/ompi/ompi/mca/ptl/sm'
</span><br>
<span class="quotelev2">&gt; &gt; make[4]: *** No rule to make target `src/ptl_sm.c', needed by
</span><br>
<span class="quotelev2">&gt; &gt; `ptl_sm.lo'.  Stop.
</span><br>
<span class="quotelev2">&gt; &gt; make[4]: Leaving directory
</span><br>
<span class="quotelev2">&gt; &gt; `/export/home/glebn/OpenMPI/ompi/ompi/mca/ptl/sm'
</span><br>
<span class="quotelev2">&gt; &gt; make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[3]: Leaving directory
</span><br>
<span class="quotelev2">&gt; &gt; `/export/home/glebn/OpenMPI/ompi/ompi/dynamic-mca/ptl'
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: Leaving directory
</span><br>
<span class="quotelev2">&gt; &gt; `/export/home/glebn/OpenMPI/ompi/ompi/dynamic-mca'
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: Leaving directory `/export/home/glebn/OpenMPI/ompi/ompi'
</span><br>
<span class="quotelev2">&gt; &gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt;             Gleb.
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;    Brian Barrett
</span><br>
<span class="quotelev1">&gt;    Open MPI developer
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0192.php">Brian Barrett: "Re:  Compile error with latest code"</a>
<li><strong>Previous message:</strong> <a href="0190.php">Rainer Keller: "Re:  1.0 platforms / compilers"</a>
<li><strong>In reply to:</strong> <a href="0189.php">Brian Barrett: "Re:  Compile error with latest code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0192.php">Brian Barrett: "Re:  Compile error with latest code"</a>
<li><strong>Reply:</strong> <a href="0192.php">Brian Barrett: "Re:  Compile error with latest code"</a>
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
