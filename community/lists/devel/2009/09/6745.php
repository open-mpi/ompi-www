<?
$subject_val = "Re: [OMPI devel] XML request";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  1 22:14:40 2009" -->
<!-- isoreceived="20090902021440" -->
<!-- sent="Tue, 1 Sep 2009 20:14:26 -0600" -->
<!-- isosent="20090902021426" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] XML request" -->
<!-- id="E402808E-2D30-48F2-B992-2809C4FA515C_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20090901134313.4c44e374.nludban_at_osc.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] XML request<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-01 22:14:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6746.php">Jeff Squyres: "Re: [OMPI devel] Cannot Free() a datatype created with Dup() orCreate_resized()"</a>
<li><strong>Previous message:</strong> <a href="6744.php">Neil Ludban: "Re: [OMPI devel] XML request"</a>
<li><strong>In reply to:</strong> <a href="6744.php">Neil Ludban: "Re: [OMPI devel] XML request"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah, if only it were that simple!
<br>
<p>Unfortunately, we need the xml stuff totally separated from anything  
<br>
else that might come out via stdout or stderr. That's the problem Greg  
<br>
and I are trying to solve.
<br>
<p>The -xml-file option appears to be the only solution at the moment.
<br>
<p>Thanks for the thought, though...
<br>
<p>On Sep 1, 2009, at 11:43 AM, Neil Ludban wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Date: Mon, 31 Aug 2009 20:26:20 -0500
</span><br>
<span class="quotelev2">&gt;&gt; From: Greg Watson &lt;g.watson_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] XML request
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;7C3BD80B-2E0D-4188-BA0A-9B4963AE2964_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hey Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately I don't think this is going to work for us. Most of the
</span><br>
<span class="quotelev2">&gt;&gt; time we're starting the mpirun command using the ssh exec or shell
</span><br>
<span class="quotelev2">&gt;&gt; service, neither of which provide any mechanism for reading from file
</span><br>
<span class="quotelev2">&gt;&gt; descriptors other than 1 or 2. The only alternatives I see are:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. Provide a separate command that starts mpirun at the end of a pipe
</span><br>
<span class="quotelev2">&gt;&gt; that is connected to the fd passed using the -xml-fd argument. This
</span><br>
<span class="quotelev2">&gt;&gt; command would need to be part of the OMPI distribution, because the
</span><br>
<span class="quotelev2">&gt;&gt; whole purpose of the XML was to provide an out-of-the-box experience
</span><br>
<span class="quotelev2">&gt;&gt; when using PTP with OMPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. Implement an -xml-file option, but I could write the code for you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3. Go back to limiting XML output to the map only.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; None of these are particularly ideal. If you can think of anything
</span><br>
<span class="quotelev2">&gt;&gt; else, let me know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't think there's a nicer way to do this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if (xml_output) {
</span><br>
<span class="quotelev1">&gt;   FILE *fxml = fopen(&quot;/dev/stdout&quot;, &quot;w&quot;);
</span><br>
<span class="quotelev1">&gt;   freopen(&quot;/dev/stderr&quot;, &quot;w&quot;, stdout);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You could also replace file descriptors 1 and 2 with pipes and
</span><br>
<span class="quotelev1">&gt; read data back in, convert to XML, and send it on to the dup'd
</span><br>
<span class="quotelev1">&gt; fd 1.  But this would cause problems if there were any debug
</span><br>
<span class="quotelev1">&gt; printfs that were timing sensitive.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6746.php">Jeff Squyres: "Re: [OMPI devel] Cannot Free() a datatype created with Dup() orCreate_resized()"</a>
<li><strong>Previous message:</strong> <a href="6744.php">Neil Ludban: "Re: [OMPI devel] XML request"</a>
<li><strong>In reply to:</strong> <a href="6744.php">Neil Ludban: "Re: [OMPI devel] XML request"</a>
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
