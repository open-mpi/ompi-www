<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 18 08:21:51 2005" -->
<!-- isoreceived="20050818132151" -->
<!-- sent="Thu, 18 Aug 2005 08:21:50 -0500" -->
<!-- isosent="20050818132150" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  Compile error with latest code" -->
<!-- id="C05C01A7-0242-43E8-A236-D66D7B7426A3_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050818130409.GC18673_at_minantech.com" -->
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
<strong>Date:</strong> 2005-08-18 08:21:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0193.php">Brian Barrett: "opal_progress changes"</a>
<li><strong>Previous message:</strong> <a href="0191.php">Gleb Natapov: "Re:  Compile error with latest code"</a>
<li><strong>In reply to:</strong> <a href="0191.php">Gleb Natapov: "Re:  Compile error with latest code"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 18, 2005, at 8:04 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, Aug 18, 2005 at 07:08:07AM -0500, Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry about that - some files moved around yesterday afternoon.  You
</span><br>
<span class="quotelev2">&gt;&gt; can either re-run autogen.sh / configure / make again and that
</span><br>
<span class="quotelev2">&gt;&gt; *should* fix the problem, or you can:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; It doesn't :(
</span><br>
<p>Grrr..  That makes sense, in the twiested Automake way.  Sorry about  
<br>
the bumm advice.
<br>
<p><span class="quotelev2">&gt;&gt;     cd ompi/mca/ptl/sm
</span><br>
<span class="quotelev2">&gt;&gt;     rm .deps/*
</span><br>
<span class="quotelev2">&gt;&gt;     make -k
</span><br>
<span class="quotelev2">&gt;&gt;     cd ../../../
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;do whatever you normally do to build OMPI&gt;
</span><br>
<p><span class="quotelev1">&gt; I'll try that. Thank you.
</span><br>
<p>If this doesn't work, removing ompi/mca/ptl/sm/.deps/ and rerunning  
<br>
autogen / configure / make will definitely work.  I recommend trying  
<br>
the make -k option first, as it's a whole lot faster ;).
<br>
<p>Most likely everyone is going to run into this problem today the  
<br>
first time we update.  If anyone really cares why, I can explain off  
<br>
list.  But the details are really lame, and entirely Automake's  
<br>
fault ;).
<br>
<p>Brian
<br>
<p><p><span class="quotelev2">&gt;&gt; On Aug 18, 2005, at 7:02 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can't compile today's svn code:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc -shared  .libs/ptl_self.o .libs/ptl_self_component.o  - 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pthread -lm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -lutil  -Wl,-soname -Wl,mca_ptl_self.so -o .libs/mca_ptl_self.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; creating mca_ptl_self.la
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (cd .libs &amp;&amp; rm -f mca_ptl_self.la &amp;&amp; ln -s ../mca_ptl_self.la
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_ptl_self.la)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[4]: Leaving directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `/export/home/glebn/OpenMPI/ompi/ompi/mca/ptl/self'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Making all in sm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[4]: Entering directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `/export/home/glebn/OpenMPI/ompi/ompi/mca/ptl/sm'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[4]: *** No rule to make target `src/ptl_sm.c', needed by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `ptl_sm.lo'.  Stop.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[4]: Leaving directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `/export/home/glebn/OpenMPI/ompi/ompi/mca/ptl/sm'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[3]: Leaving directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `/export/home/glebn/OpenMPI/ompi/ompi/dynamic-mca/ptl'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `/export/home/glebn/OpenMPI/ompi/ompi/dynamic-mca'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Leaving directory `/export/home/glebn/OpenMPI/ompi/ompi'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Gleb.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;    Brian Barrett
</span><br>
<span class="quotelev2">&gt;&gt;    Open MPI developer
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0193.php">Brian Barrett: "opal_progress changes"</a>
<li><strong>Previous message:</strong> <a href="0191.php">Gleb Natapov: "Re:  Compile error with latest code"</a>
<li><strong>In reply to:</strong> <a href="0191.php">Gleb Natapov: "Re:  Compile error with latest code"</a>
<!-- nextthread="start" -->
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
