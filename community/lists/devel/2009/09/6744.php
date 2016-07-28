<?
$subject_val = "Re: [OMPI devel] XML request";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  1 13:43:18 2009" -->
<!-- isoreceived="20090901174318" -->
<!-- sent="Tue, 1 Sep 2009 13:43:13 -0400" -->
<!-- isosent="20090901174313" -->
<!-- name="Neil Ludban" -->
<!-- email="nludban_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] XML request" -->
<!-- id="20090901134313.4c44e374.nludban_at_osc.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.3.1251820804.12805.devel_at_open-mpi.org" -->
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
<strong>From:</strong> Neil Ludban (<em>nludban_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-01 13:43:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6745.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>Previous message:</strong> <a href="6743.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/08/6630.php">Greg Watson: "[OMPI devel] XML request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6745.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>Reply:</strong> <a href="6745.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Date: Mon, 31 Aug 2009 20:26:20 -0500
</span><br>
<span class="quotelev1">&gt; From: Greg Watson &lt;g.watson_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] XML request
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;7C3BD80B-2E0D-4188-BA0A-9B4963AE2964_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hey Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately I don't think this is going to work for us. Most of the  
</span><br>
<span class="quotelev1">&gt; time we're starting the mpirun command using the ssh exec or shell  
</span><br>
<span class="quotelev1">&gt; service, neither of which provide any mechanism for reading from file  
</span><br>
<span class="quotelev1">&gt; descriptors other than 1 or 2. The only alternatives I see are:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Provide a separate command that starts mpirun at the end of a pipe  
</span><br>
<span class="quotelev1">&gt; that is connected to the fd passed using the -xml-fd argument. This  
</span><br>
<span class="quotelev1">&gt; command would need to be part of the OMPI distribution, because the  
</span><br>
<span class="quotelev1">&gt; whole purpose of the XML was to provide an out-of-the-box experience  
</span><br>
<span class="quotelev1">&gt; when using PTP with OMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. Implement an -xml-file option, but I could write the code for you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. Go back to limiting XML output to the map only.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; None of these are particularly ideal. If you can think of anything  
</span><br>
<span class="quotelev1">&gt; else, let me know.
</span><br>
<p>I don't think there's a nicer way to do this:
<br>
<p>if (xml_output) {
<br>
&nbsp;&nbsp;&nbsp;FILE *fxml = fopen(&quot;/dev/stdout&quot;, &quot;w&quot;);
<br>
&nbsp;&nbsp;&nbsp;freopen(&quot;/dev/stderr&quot;, &quot;w&quot;, stdout);
<br>
}
<br>
<p>You could also replace file descriptors 1 and 2 with pipes and
<br>
read data back in, convert to XML, and send it on to the dup'd
<br>
fd 1.  But this would cause problems if there were any debug
<br>
printfs that were timing sensitive.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6745.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>Previous message:</strong> <a href="6743.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/08/6630.php">Greg Watson: "[OMPI devel] XML request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6745.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>Reply:</strong> <a href="6745.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
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
