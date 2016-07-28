<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul  4 02:49:19 2007" -->
<!-- isoreceived="20070704064919" -->
<!-- sent="Wed, 4 Jul 2007 08:49:05 +0200" -->
<!-- isosent="20070704064905" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] vampir trace - additional compiler options" -->
<!-- id="195B5678-E1D8-4A1C-B5FF-2F34FB9EB5A6_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200707031059.47924.andreas.knuepfer_at_tu-dresden.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-04 02:49:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1796.php">Karol Mroz: "Re: [OMPI devel] extracting MPI message tag at the btl level"</a>
<li><strong>Previous message:</strong> <a href="1794.php">Karol Mroz: "Re: [OMPI devel] extracting MPI message tag at the btl level"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/08/2069.php">Andreas Knüpfer: "Re: [OMPI devel] vampir trace"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/08/2069.php">Andreas Knüpfer: "Re: [OMPI devel] vampir trace"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(moving discussion to public devel list)
<br>
<p>Thanks Andreas!
<br>
<p>I talked through a bunch of details with Brian a bit about VT  
<br>
integration on the phone yesterday; here's what we came up with:
<br>
<p>- Let's bring the code in via the normal SVN 3rd party methods  
<br>
(<a href="https://svn.open-mpi.org/trac/ompi/wiki/VendorImport">https://svn.open-mpi.org/trac/ompi/wiki/VendorImport</a>) and put it in  
<br>
ompi/tracing/vampirtrace.  We can put a &quot;glue&quot; Makefile.am in that  
<br>
directory (and possibly a configure.m4 for all the configury stuff  
<br>
that we'll need in the top-level OMPI configure -- details TBD), and  
<br>
put the actual VT code one level below this.  This strategy allows for:
<br>
<p>&nbsp;&nbsp;&nbsp;- Bringing in other tracing tools someday
<br>
&nbsp;&nbsp;&nbsp;- A descriptive directory name so that it's easy to know what's there
<br>
<p>- It turns out that &quot;vtcc --showme:*&quot; isn't going to be sufficient  
<br>
(sorry about that :-( ) because it won't work in cross-compiling  
<br>
scenarios.  So we'll either need a way to get these flags directly  
<br>
(either easily snarf them out of a file or run a script that will get  
<br>
them for us) or we'll simply have mpicc-vt call vtcc (a brianstorm  
<br>
from Brian).  Need to experiment with this to know if it'll work, but  
<br>
it might be the easiest/best way.  I'll let you know.
<br>
<p>- One thing that I did not think of ahead of time is a good way to  
<br>
know that VT has decided not to build itself (e.g., its configure  
<br>
fails).  We'll need to ensure that if the VT configure aborts, it  
<br>
doesn't abort the top-level OMPI configure.
<br>
<p>I'll probably have time to start on this next week, but may need some  
<br>
help from you guys.    I'll keep you posted.
<br>
<p><p>On Jul 3, 2007, at 10:59 AM, Andreas Kn&#252;pfer wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff, hi All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; we discussed the question how the new compiler wrapper can find out  
</span><br>
<span class="quotelev1">&gt; about
</span><br>
<span class="quotelev1">&gt; VampirTrace's additional compiler or linker options. This can be  
</span><br>
<span class="quotelev1">&gt; done with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # &gt; vtcc -vt:showme_compile
</span><br>
<span class="quotelev1">&gt; # &gt; vtcc -vt:showme_link
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It works the same way for vtcxx, vtf90 etc. if present.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btw: You can get the latest version of the VampirTrace tarball  
</span><br>
<span class="quotelev1">&gt; including OTF
</span><br>
<span class="quotelev1">&gt; (open trace format) at <a href="http://www.tu-dresden.de/zih/vampirtrace/">http://www.tu-dresden.de/zih/vampirtrace/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Andreas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dipl. Math. Andreas Knuepfer,
</span><br>
<span class="quotelev1">&gt; Center for Information Services and
</span><br>
<span class="quotelev1">&gt; High Performance Computing (ZIH), TU Dresden,
</span><br>
<span class="quotelev1">&gt; Willersbau A114, Zellescher Weg 12, 01062 Dresden
</span><br>
<span class="quotelev1">&gt; phone +49-351-463-38323, fax +49-351-463-37773
</span><br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1796.php">Karol Mroz: "Re: [OMPI devel] extracting MPI message tag at the btl level"</a>
<li><strong>Previous message:</strong> <a href="1794.php">Karol Mroz: "Re: [OMPI devel] extracting MPI message tag at the btl level"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/08/2069.php">Andreas Knüpfer: "Re: [OMPI devel] vampir trace"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/08/2069.php">Andreas Knüpfer: "Re: [OMPI devel] vampir trace"</a>
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
