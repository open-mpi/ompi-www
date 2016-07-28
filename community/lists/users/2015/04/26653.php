<?
$subject_val = "Re: [OMPI users] parsability of ompi_info --parsable output";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  8 11:43:20 2015" -->
<!-- isoreceived="20150408154320" -->
<!-- sent="Wed, 8 Apr 2015 11:43:15 -0400" -->
<!-- isosent="20150408154315" -->
<!-- name="Lev Givon" -->
<!-- email="lev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] parsability of ompi_info --parsable output" -->
<!-- id="20150408154315.GD4618_at_avicenna.ee.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="008CD118-5C04-421F-866A-483C3CEA23D3_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] parsability of ompi_info --parsable output<br>
<strong>From:</strong> Lev Givon (<em>lev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-08 11:43:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26654.php">Ralph Castain: "Re: [OMPI users] parsability of ompi_info --parsable output"</a>
<li><strong>Previous message:</strong> <a href="26652.php">Ralph Castain: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="26651.php">Ralph Castain: "Re: [OMPI users] parsability of ompi_info --parsable output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26654.php">Ralph Castain: "Re: [OMPI users] parsability of ompi_info --parsable output"</a>
<li><strong>Reply:</strong> <a href="26654.php">Ralph Castain: "Re: [OMPI users] parsability of ompi_info --parsable output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Received from Ralph Castain on Wed, Apr 08, 2015 at 10:46:58AM EDT:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 8, 2015, at 7:23 AM, Lev Givon &lt;lev_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The output of ompi_info --parsable is somewhat difficult to parse
</span><br>
<span class="quotelev2">&gt; &gt; programmatically because it doesn't escape or quote fields that contain colons,
</span><br>
<span class="quotelev2">&gt; &gt; e.g.,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; build:timestamp:Tue Dec 23 15:47:28 EST 2014
</span><br>
<span class="quotelev2">&gt; &gt; option:threads:posix (MPI_THREAD_MULTIPLE: no, OPAL support: yes, OMPI progress: no, ORTE progress: yes, Event lib: yes)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Is there some way to facilitate machine parsing of the output of ompi_info
</span><br>
<span class="quotelev2">&gt; &gt; without having to special-case those options/parameters whose data fields might
</span><br>
<span class="quotelev2">&gt; &gt; contain colons ? If not, it would be nice to quote such fields in
</span><br>
<span class="quotelev2">&gt; &gt; future releases of ompi_info.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think the assumption was that people would parse this as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * entry before the first colon is the category
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * entry between first and second colons is the subcategory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * everything past the second colon is the value
</span><br>
<p>Given that the &quot;value&quot; as defined above may still contain colons, it's still
<br>
necessary to process it to extract the various data in it, e.g., the various MCA
<br>
parameters, their values, types, etc.
<br>
<p><span class="quotelev1">&gt; You are right, however, that the current format precludes the use of an
</span><br>
<span class="quotelev1">&gt; automatic tokenizer looking for colon. I don't think quoting the value field
</span><br>
<span class="quotelev1">&gt; would really solve that problem - do you have any suggestions?
</span><br>
<p>Why wouldn't quoting the value field address the parsing problem? Quoting a
<br>
field that contains colons would effectively permit the output of ompi_info
<br>
--parsable to be processed just like a CSV file; most CSV readers seem to
<br>
support inclusion of the separator character in data fields via quoting.
<br>
<pre>
-- 
Lev Givon
Bionet Group | Neurokernel Project
<a href="http://www.columbia.edu/~lev/">http://www.columbia.edu/~lev/</a>
<a href="http://lebedov.github.io/">http://lebedov.github.io/</a>
<a href="http://neurokernel.github.io/">http://neurokernel.github.io/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26654.php">Ralph Castain: "Re: [OMPI users] parsability of ompi_info --parsable output"</a>
<li><strong>Previous message:</strong> <a href="26652.php">Ralph Castain: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="26651.php">Ralph Castain: "Re: [OMPI users] parsability of ompi_info --parsable output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26654.php">Ralph Castain: "Re: [OMPI users] parsability of ompi_info --parsable output"</a>
<li><strong>Reply:</strong> <a href="26654.php">Ralph Castain: "Re: [OMPI users] parsability of ompi_info --parsable output"</a>
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
