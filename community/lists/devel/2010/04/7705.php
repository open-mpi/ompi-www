<?
$subject_val = "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  6 18:04:54 2010" -->
<!-- isoreceived="20100406220454" -->
<!-- sent="Tue, 06 Apr 2010 17:04:18 -0500" -->
<!-- isosent="20100406220418" -->
<!-- name="Oliver Geisler" -->
<!-- email="openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times" -->
<!-- id="4BBBAFE2.6070904_at_docawk.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6BDC6606-B703-401D-B74A-6B99374F7CD6_at_cisco.com" -->
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
<strong>From:</strong> Oliver Geisler (<em>openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-06 18:04:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7706.php">Jeff Squyres: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="7704.php">Jeff Squyres: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>In reply to:</strong> <a href="7702.php">Jeff Squyres: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7706.php">Jeff Squyres: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="7706.php">Jeff Squyres: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="7711.php">Eugene Loh: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 4/6/2010 2:54 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Sorry for the delay -- I just replied on the user list -- I think the first thing to do is to establish baseline networking performance and see if that is out of whack.  If the underlying network is bad, then MPI performance will also be bad.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Using netpipe and comparing tcp and mpi communication I get the
<br>
following results:
<br>
<p>TCP is much faster than MPI, approx. by factor 12
<br>
e.g a packet size of 4096 bytes deliveres in
<br>
97.11 usec with NPtcp and
<br>
15338.98 usec with NPmpi
<br>
or
<br>
packet size 262kb
<br>
0.05268801 sec NPtcp
<br>
0.00254560 sec NPmpi
<br>
<p>Further our benchmark started with &quot;--mca btl tcp,self&quot; runs with short
<br>
communication times, even using kernel 2.6.33.1
<br>
<p>Is there a way to see what type of communication is actually selected?
<br>
<p>Can anybody imagine why shared memory leads to these problems?
<br>
Kernel configuration?
<br>
<p><p>Thanks, Jeff, for insisting upon testing network performance.
<br>
Thanks all others, too ;-)
<br>
<p>oli
<br>
<p><p><span class="quotelev1">&gt; On Apr 6, 2010, at 11:51 AM, Oliver Geisler wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 4/6/2010 10:11 AM, Rainer Keller wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello Oliver,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hmm, this is really a teaser...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I haven't seen such a drastic behavior, and haven't read of any on the list.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; One thing however, that might interfere is process binding.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could You make sure, that processes are not bound to cores (default in 1.4.1):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with mpirun --bind-to-none
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have tried version 1.4.1. Using default settings and watched processes
</span><br>
<span class="quotelev2">&gt;&gt; switching from core to core in &quot;top&quot; (with &quot;f&quot; + &quot;j&quot;). Then I tried
</span><br>
<span class="quotelev2">&gt;&gt; --bind-to-core and explicitly --bind-to-none. All with the same result:
</span><br>
<span class="quotelev2">&gt;&gt; ~20% cpu wait and lot longer over-all computation times.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the idea ...
</span><br>
<span class="quotelev2">&gt;&gt; Every input is helpful.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Oli
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Just an idea...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rainer
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tuesday 06 April 2010 10:07:35 am Oliver Geisler wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello Devel-List,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am a little bit helpless about this matter. I already posted in the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; user list. In case you don't read the users list, I post in here.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is the original posting:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2010/03/12474.php">http://www.open-mpi.org/community/lists/users/2010/03/12474.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Short:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Switching from kernel 2.6.23 to 2.6.24 (and up), using openmpi 1.2.7-rc2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (I know outdated, but in debian stable, and same results with 1.4.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; increases communication times between processes (essentially between one
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; master and several slave processes). This is regardless of whether the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processes are local only or communication is over ethernet.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Did anybody witness such a behavior?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ideas what should I test for?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What additional information should I provide for you?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for your time
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; oli
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; This message has been scanned for viruses and
</span><br>
<span class="quotelev2">&gt;&gt; dangerous content by MailScanner, and is
</span><br>
<span class="quotelev2">&gt;&gt; believed to be clean.
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
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
This message has been scanned for viruses and
dangerous content by MailScanner, and is
believed to be clean.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7706.php">Jeff Squyres: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="7704.php">Jeff Squyres: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>In reply to:</strong> <a href="7702.php">Jeff Squyres: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7706.php">Jeff Squyres: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="7706.php">Jeff Squyres: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="7711.php">Eugene Loh: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
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
