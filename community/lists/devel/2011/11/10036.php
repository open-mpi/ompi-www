<?
$subject_val = "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 23 20:30:55 2011" -->
<!-- isoreceived="20111124013055" -->
<!-- sent="Thu, 24 Nov 2011 00:36:00 +0000 (GMT)" -->
<!-- isosent="20111124003600" -->
<!-- name="Lukas Razik" -->
<!-- email="linux_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)" -->
<!-- id="1322094960.2247.YahooMailNeo_at_web24714.mail.ird.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="2FA1F947-64C3-42BC-8780-E7E55D0588C3_at_usgs.gov" -->
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
<strong>From:</strong> Lukas Razik (<em>linux_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-23 19:36:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10037.php">Jeff Squyres: "Re: [OMPI devel] Rename &quot;vader&quot; BTL to &quot;xpmem&quot;"</a>
<li><strong>Previous message:</strong> <a href="10035.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>In reply to:</strong> <a href="10034.php">Larry Baker: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10035.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Larry,

I thank you for this helpful tip!

Regards and have a nice day,
Lukas




&gt;________________________________
&gt; Von: Larry Baker &lt;baker_at_[hidden]&gt;
&gt;An: Open MPI Developers &lt;devel_at_[hidden]&gt; 
&gt;Cc: Lukas Razik &lt;linux_at_[hidden]&gt;; Roland Dreier &lt;roland_at_[hidden]&gt; 
&gt;Gesendet: 20:10 Mittwoch, 23.November 2011
&gt;Betreff: Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)
&gt; 
&gt;
&gt;I think of -m32 (and -m64) as really selecting a different compiler. &#160;My practice is to put those flags in the compiler/linker environment variables. &#160;For example:
&gt;
&gt;
&gt;# ./configure &gt;configure.log 2&gt;&amp;1 \
&gt;&gt;&#160; &#160;--prefix=/usr/local/openmpi --with-sge \
&gt;&gt;&#160; &#160;CC=&quot;gcc -m32&quot; \
&gt;&gt;&#160; &#160;CFLAGS=&quot;-g -O3&quot; \
&gt;&gt;&#160; &#160;CXX=&quot;g++ -m32&quot; \
&gt;&gt;&#160; &#160;CXXFLAGS=&quot;-g -O3&quot; \
&gt;&gt;&#160; &#160;FC=&quot;gfortran -m32&quot; \
&gt;&gt;&#160; &#160;FCFLAGS=&quot;-g -O3&quot; \
&gt;&gt;&#160; &#160;F77=&quot;gfortran -m32&quot; \
&gt;&gt;&#160; &#160;FFLAGS=&quot;-g -O3&quot;
&gt;
&gt;
&gt;Larry Baker
&gt;US Geological Survey
&gt;650-329-5608
&gt;baker_at_[hidden]
&gt;
&gt;On 23 Nov 2011, at 10:52 AM, TERRY DONTJE wrote:
&gt;
&gt;On 11/23/2011 1:45 PM, Lukas Razik wrote: 
&gt;&gt;TERRY DONTJE &lt;terry.dontje_at_[hidden]&gt; wrote 
&gt;&gt;&gt;Can you build OMPI as a 32 bit library and see if that works any better? 
&gt;&gt;&gt;So you mean I shall leave the whole OFED stack as 64 bit and build only openmpi as 32 bit? 
I believe the OFED user libraries will need to be 32 bit also or the    32 bit MPI libraries will not be able to use them.
&gt;&gt;
&gt;&gt;How must I configure openmpi that it'll be definitely built as 32bit? 
You need to change the CFLAGS, CXXFLAGS, FFLAGS and FCFLAGS in the    configure line such that you replace &quot;-m64&quot; with &quot;-m32&quot; or just    &quot;-m32&quot; if &quot;-m64&quot; is not there?
&gt;&gt;
&gt;&gt;Regards,
Lukas 
&gt;&gt;
&gt;&gt;-- 
&gt;&gt;
&gt;&gt; &lt;mime-attachment.gif&gt;
&gt;&gt;
&gt;&gt;Terry D. Dontje | Principal                Software Engineer
&gt;&gt;
&gt;&gt;Developer                    Tools                    Engineering | +1.781.442.2631
&gt;&gt; Oracle - Performance                      Technologies
&gt;&gt;95 Network Drive, Burlington, MA 01803
&gt;&gt;Email terry.dontje_at_[hidden]
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;
_______________________________________________
&gt;&gt;devel mailing list
&gt;&gt;devel_at_[hidden]
&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;
&gt;
&gt;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10036/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10037.php">Jeff Squyres: "Re: [OMPI devel] Rename &quot;vader&quot; BTL to &quot;xpmem&quot;"</a>
<li><strong>Previous message:</strong> <a href="10035.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>In reply to:</strong> <a href="10034.php">Larry Baker: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10035.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
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
