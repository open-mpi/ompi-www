<?
$subject_val = "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  6 11:52:14 2010" -->
<!-- isoreceived="20100406155214" -->
<!-- sent="Tue, 06 Apr 2010 10:51:44 -0500" -->
<!-- isosent="20100406155144" -->
<!-- name="Oliver Geisler" -->
<!-- email="openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times" -->
<!-- id="4BBB5890.4040808_at_docawk.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201004061111.51717.keller_at_ornl.gov" -->
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
<strong>Date:</strong> 2010-04-06 11:51:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7701.php">Oliver Geisler: "Re: [OMPI devel] [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="7699.php">Rainer Keller: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>In reply to:</strong> <a href="7699.php">Rainer Keller: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7702.php">Jeff Squyres: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="7702.php">Jeff Squyres: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 4/6/2010 10:11 AM, Rainer Keller wrote:
<br>
<span class="quotelev1">&gt; Hello Oliver,
</span><br>
<span class="quotelev1">&gt; Hmm, this is really a teaser...
</span><br>
<span class="quotelev1">&gt; I haven't seen such a drastic behavior, and haven't read of any on the list.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One thing however, that might interfere is process binding.
</span><br>
<span class="quotelev1">&gt; Could You make sure, that processes are not bound to cores (default in 1.4.1):
</span><br>
<span class="quotelev1">&gt; with mpirun --bind-to-none 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I have tried version 1.4.1. Using default settings and watched processes
<br>
switching from core to core in &quot;top&quot; (with &quot;f&quot; + &quot;j&quot;). Then I tried
<br>
--bind-to-core and explicitly --bind-to-none. All with the same result:
<br>
~20% cpu wait and lot longer over-all computation times.
<br>
<p>Thanks for the idea ...
<br>
Every input is helpful.
<br>
<p>Oli
<br>
<p><p><span class="quotelev1">&gt; Just an idea...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Rainer
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tuesday 06 April 2010 10:07:35 am Oliver Geisler wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello Devel-List,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am a little bit helpless about this matter. I already posted in the
</span><br>
<span class="quotelev2">&gt;&gt; user list. In case you don't read the users list, I post in here.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is the original posting:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2010/03/12474.php">http://www.open-mpi.org/community/lists/users/2010/03/12474.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Short:
</span><br>
<span class="quotelev2">&gt;&gt; Switching from kernel 2.6.23 to 2.6.24 (and up), using openmpi 1.2.7-rc2
</span><br>
<span class="quotelev2">&gt;&gt; (I know outdated, but in debian stable, and same results with 1.4.1)
</span><br>
<span class="quotelev2">&gt;&gt; increases communication times between processes (essentially between one
</span><br>
<span class="quotelev2">&gt;&gt; master and several slave processes). This is regardless of whether the
</span><br>
<span class="quotelev2">&gt;&gt; processes are local only or communication is over ethernet.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Did anybody witness such a behavior?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ideas what should I test for?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What additional information should I provide for you?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your time
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; oli
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="7701.php">Oliver Geisler: "Re: [OMPI devel] [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="7699.php">Rainer Keller: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>In reply to:</strong> <a href="7699.php">Rainer Keller: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7702.php">Jeff Squyres: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="7702.php">Jeff Squyres: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
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
