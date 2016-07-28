<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 30 07:10:00 2007" -->
<!-- isoreceived="20070330111000" -->
<!-- sent="Fri, 30 Mar 2007 12:09:55 +0100" -->
<!-- isosent="20070330110955" -->
<!-- name="stephen mulcahy" -->
<!-- email="smulcahy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Measuring MPI message size used by application" -->
<!-- id="460CF003.7000702_at_aplpi.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EE7AA5D8-0500-4D46-89D4-EB26D0A40FED_at_cs.utk.edu" -->
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
<strong>From:</strong> stephen mulcahy (<em>smulcahy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-30 07:09:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2950.php">Jeff Squyres: "Re: [OMPI users] Jeff Squyres: &quot;Re:  password orted problem&quot;"</a>
<li><strong>Previous message:</strong> <a href="2948.php">George Bosilca: "Re: [OMPI users] Measuring MPI message size used by application"</a>
<li><strong>In reply to:</strong> <a href="2948.php">George Bosilca: "Re: [OMPI users] Measuring MPI message size used by application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2957.php">Heywood, Todd: "Re: [OMPI users] Measuring MPI message size used by application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca wrote:
<br>
<span class="quotelev1">&gt; I used it on a IA64 platform, so I supposed x86_64 is supported, but  
</span><br>
<span class="quotelev1">&gt; I never use it on an AMD 64. On the mpiP webpage they claim they  
</span><br>
<span class="quotelev1">&gt; support the Cray XT3, which as far as I know are based on AMD Opteron  
</span><br>
<span class="quotelev1">&gt; 64 bits. So, there is at least a spark of hope in the dark ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I decide to give it a try on my x86_64 AMD box (Debian based system).  
</span><br>
<span class="quotelev1">&gt; First problem, my box didn't have the libunwind. Not a big deal, it's  
</span><br>
<span class="quotelev1">&gt; freely available on HP website (<a href="http://www.hpl.hp.com/research/linux/">http://www.hpl.hp.com/research/linux/</a> 
</span><br>
<span class="quotelev1">&gt; libunwind/download.php4). Few minutes later, the libunwind was  
</span><br>
<span class="quotelev1">&gt; installed in /lib64. Now, time to focus on mpiP ... For some obscure  
</span><br>
<span class="quotelev1">&gt; reason the configure script was unable to detect my g77 compiler  
</span><br>
<span class="quotelev1">&gt; (whatever!!!) nor the installation of libunwind. Moreover, it keep  
</span><br>
<span class="quotelev1">&gt; trying to use the clock_gettime call. Fortunately (which make me  
</span><br>
<span class="quotelev1">&gt; think I'm not the only one having trouble with this), mpiP provide  
</span><br>
<span class="quotelev1">&gt; configure options for all these. The final configure line was: ./ 
</span><br>
<span class="quotelev1">&gt; configure --prefix=/opt/ --without-f77 --with-wtime --with-include=-I/ 
</span><br>
<span class="quotelev1">&gt; include --with-lib=-L/lib64. Then a quick &quot;make shared&quot; followed by  
</span><br>
<span class="quotelev1">&gt; &quot;make install&quot;, complete the work. So, at least mpiP can compile on a  
</span><br>
<span class="quotelev1">&gt; x86_64 box.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Hi George,
<br>
<p>I'm not onsite with the cluster now but this sounds promising enough
<br>
that I'll give it a shot the next time I'm back onsite.
<br>
<p>Thanks for your reply,
<br>
<p>-stephen
<br>
<p><pre>
-- 
Stephen Mulcahy, Applepie Solutions Ltd, Innovation in Business Center,
   GMIT, Dublin Rd, Galway, Ireland.      <a href="http://www.aplpi.com">http://www.aplpi.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2950.php">Jeff Squyres: "Re: [OMPI users] Jeff Squyres: &quot;Re:  password orted problem&quot;"</a>
<li><strong>Previous message:</strong> <a href="2948.php">George Bosilca: "Re: [OMPI users] Measuring MPI message size used by application"</a>
<li><strong>In reply to:</strong> <a href="2948.php">George Bosilca: "Re: [OMPI users] Measuring MPI message size used by application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2957.php">Heywood, Todd: "Re: [OMPI users] Measuring MPI message size used by application"</a>
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
