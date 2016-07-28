<?
$subject_val = "Re: [OMPI devel] How to 'hook' a new BTL to OMPI call chain?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 16 19:31:00 2016" -->
<!-- isoreceived="20160316233100" -->
<!-- sent="Wed, 16 Mar 2016 23:30:57 +0000" -->
<!-- isosent="20160316233057" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] How to 'hook' a new BTL to OMPI call chain?" -->
<!-- id="A955FB02-D9C9-4476-B37E-87484CDA231B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAHXxYDjjAwVxXEv2_Qy=2UHCoJuLSNFcS56o10GkoDdmSFf5wQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] How to 'hook' a new BTL to OMPI call chain?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-16 19:30:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18707.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] How to 'hook' a new BTL to OMPI call chain?"</a>
<li><strong>Previous message:</strong> <a href="18705.php">dpchoudh .: "Re: [OMPI devel] How to 'hook' a new BTL to OMPI call chain?"</a>
<li><strong>In reply to:</strong> <a href="18704.php">dpchoudh .: "[OMPI devel] How to 'hook' a new BTL to OMPI call chain?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18708.php">Gilles Gouaillardet: "Re: [OMPI devel] How to 'hook' a new BTL to OMPI call chain?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 16, 2016, at 12:52 PM, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry about asking too many 101 level question, but here is another one:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a BTL layer code, called 'lf' that is ready for unit testing; it compiles with the OMPI tool chain (by doing a ./configure; make from the top level directory) and have the basic data transport calls implemented.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How do I 'hook up' the BTL to the OMPI call chain?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I do the following:
</span><br>
<span class="quotelev1">&gt; mpirin -np 2 --hostfile ~/hostfile -mca btl lf,self ./NPmpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; it fails to run and the gist of the failure is that it does not even attempt connecting with the 'lf' BTL (the error says: 'BTLs attempted: self')
</span><br>
<p>It usually means one of two things:
<br>
<p>1. That your BTL failed to dlopen/load.  Although you should typically see a warning/error about the component failing to load when that happens, so it should be obvious.  More generally, you should be able to &quot;ompi_info | grep btl&quot; and see your lf BTL.  If so, then it's probably loading properly in your MPI processes, too.
<br>
<p>2. That you BTL elected not to run.  E.g., it returned a failure from the component open or init.  Double check what you're returning from these functions.
<br>
<p>Pro tip: you can use opal_output(0, &quot;your message&quot;) to output process/PID-tagged output from MPI processes for debugging purposes.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18707.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] How to 'hook' a new BTL to OMPI call chain?"</a>
<li><strong>Previous message:</strong> <a href="18705.php">dpchoudh .: "Re: [OMPI devel] How to 'hook' a new BTL to OMPI call chain?"</a>
<li><strong>In reply to:</strong> <a href="18704.php">dpchoudh .: "[OMPI devel] How to 'hook' a new BTL to OMPI call chain?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18708.php">Gilles Gouaillardet: "Re: [OMPI devel] How to 'hook' a new BTL to OMPI call chain?"</a>
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
