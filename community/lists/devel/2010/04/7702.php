<?
$subject_val = "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  6 15:54:33 2010" -->
<!-- isoreceived="20100406195433" -->
<!-- sent="Tue, 6 Apr 2010 15:54:27 -0400" -->
<!-- isosent="20100406195427" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times" -->
<!-- id="6BDC6606-B703-401D-B74A-6B99374F7CD6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BBB5890.4040808_at_docawk.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-06 15:54:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7703.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="7701.php">Oliver Geisler: "Re: [OMPI devel] [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>In reply to:</strong> <a href="7700.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7703.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="7703.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="7705.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay -- I just replied on the user list -- I think the first thing to do is to establish baseline networking performance and see if that is out of whack.  If the underlying network is bad, then MPI performance will also be bad.
<br>
<p><p>On Apr 6, 2010, at 11:51 AM, Oliver Geisler wrote:
<br>
<p><span class="quotelev1">&gt; On 4/6/2010 10:11 AM, Rainer Keller wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello Oliver,
</span><br>
<span class="quotelev2">&gt; &gt; Hmm, this is really a teaser...
</span><br>
<span class="quotelev2">&gt; &gt; I haven't seen such a drastic behavior, and haven't read of any on the list.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; One thing however, that might interfere is process binding.
</span><br>
<span class="quotelev2">&gt; &gt; Could You make sure, that processes are not bound to cores (default in 1.4.1):
</span><br>
<span class="quotelev2">&gt; &gt; with mpirun --bind-to-none
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have tried version 1.4.1. Using default settings and watched processes
</span><br>
<span class="quotelev1">&gt; switching from core to core in &quot;top&quot; (with &quot;f&quot; + &quot;j&quot;). Then I tried
</span><br>
<span class="quotelev1">&gt; --bind-to-core and explicitly --bind-to-none. All with the same result:
</span><br>
<span class="quotelev1">&gt; ~20% cpu wait and lot longer over-all computation times.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the idea ...
</span><br>
<span class="quotelev1">&gt; Every input is helpful.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Oli
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Just an idea...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Rainer
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Tuesday 06 April 2010 10:07:35 am Oliver Geisler wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello Devel-List,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am a little bit helpless about this matter. I already posted in the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; user list. In case you don't read the users list, I post in here.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This is the original posting:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2010/03/12474.php">http://www.open-mpi.org/community/lists/users/2010/03/12474.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Short:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Switching from kernel 2.6.23 to 2.6.24 (and up), using openmpi 1.2.7-rc2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (I know outdated, but in debian stable, and same results with 1.4.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; increases communication times between processes (essentially between one
</span><br>
<span class="quotelev3">&gt; &gt;&gt; master and several slave processes). This is regardless of whether the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; processes are local only or communication is over ethernet.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Did anybody witness such a behavior?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ideas what should I test for?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; What additional information should I provide for you?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks for your time
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; oli
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; This message has been scanned for viruses and
</span><br>
<span class="quotelev1">&gt; dangerous content by MailScanner, and is
</span><br>
<span class="quotelev1">&gt; believed to be clean.
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
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7703.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="7701.php">Oliver Geisler: "Re: [OMPI devel] [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>In reply to:</strong> <a href="7700.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7703.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="7703.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="7705.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
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
