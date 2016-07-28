<?
$subject_val = "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 23 14:10:29 2011" -->
<!-- isoreceived="20111123191029" -->
<!-- sent="Wed, 23 Nov 2011 11:10:22 -0800" -->
<!-- isosent="20111123191022" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)" -->
<!-- id="2FA1F947-64C3-42BC-8780-E7E55D0588C3_at_usgs.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4ECD40DB.5090908_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)<br>
<strong>From:</strong> Larry Baker (<em>baker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-23 14:10:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10035.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Previous message:</strong> <a href="10033.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>In reply to:</strong> <a href="10033.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10036.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Reply:</strong> <a href="10036.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think of -m32 (and -m64) as really selecting a different compiler.   
<br>
My practice is to put those flags in the compiler/linker environment  
<br>
variables.  For example:
<br>
<p><span class="quotelev1">&gt; # ./configure &gt;configure.log 2&gt;&amp;1 \
</span><br>
<span class="quotelev1">&gt;    --prefix=/usr/local/openmpi --with-sge \
</span><br>
<span class="quotelev1">&gt;    CC=&quot;gcc -m32&quot; \
</span><br>
<span class="quotelev1">&gt;    CFLAGS=&quot;-g -O3&quot; \
</span><br>
<span class="quotelev1">&gt;    CXX=&quot;g++ -m32&quot; \
</span><br>
<span class="quotelev1">&gt;    CXXFLAGS=&quot;-g -O3&quot; \
</span><br>
<span class="quotelev1">&gt;    FC=&quot;gfortran -m32&quot; \
</span><br>
<span class="quotelev1">&gt;    FCFLAGS=&quot;-g -O3&quot; \
</span><br>
<span class="quotelev1">&gt;    F77=&quot;gfortran -m32&quot; \
</span><br>
<span class="quotelev1">&gt;    FFLAGS=&quot;-g -O3&quot;
</span><br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p>On 23 Nov 2011, at 10:52 AM, TERRY DONTJE wrote:
<br>
<p><span class="quotelev1">&gt; On 11/23/2011 1:45 PM, Lukas Razik wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; TERRY DONTJE &lt;terry.dontje_at_[hidden]&gt; wrote
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you build OMPI as a 32 bit library and see if that works any  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; better?
</span><br>
<span class="quotelev2">&gt;&gt; So you mean I shall leave the whole OFED stack as 64 bit and build  
</span><br>
<span class="quotelev2">&gt;&gt; only openmpi as 32 bit?
</span><br>
<span class="quotelev1">&gt; I believe the OFED user libraries will need to be 32 bit also or the  
</span><br>
<span class="quotelev1">&gt; 32 bit MPI libraries will not be able to use them.
</span><br>
<span class="quotelev2">&gt;&gt; How must I configure openmpi that it'll be definitely built as 32bit?
</span><br>
<span class="quotelev1">&gt; You need to change the CFLAGS, CXXFLAGS, FFLAGS and FCFLAGS in the  
</span><br>
<span class="quotelev1">&gt; configure line such that you replace &quot;-m64&quot; with &quot;-m32&quot; or just &quot;- 
</span><br>
<span class="quotelev1">&gt; m32&quot; if &quot;-m64&quot; is not there?
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Lukas
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; &lt;mime-attachment.gif&gt;
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10034/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10035.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Previous message:</strong> <a href="10033.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>In reply to:</strong> <a href="10033.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10036.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Reply:</strong> <a href="10036.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
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
