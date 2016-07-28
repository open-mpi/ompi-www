<?
$subject_val = "Re: [MTT devel] MTT Visualization";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 10 18:00:52 2008" -->
<!-- isoreceived="20080110230052" -->
<!-- sent="Thu, 10 Jan 2008 18:00:45 -0500" -->
<!-- isosent="20080110230045" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT Visualization" -->
<!-- id="20080110230045.GS17034_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="442898BF-FA70-45B7-BB1C-AD225E2FCB74_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [MTT devel] MTT Visualization<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-10 18:00:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0221.php">Jeff Squyres: "Re: [MTT devel] MTT Visualization"</a>
<li><strong>Previous message:</strong> <a href="0219.php">Jeff Squyres: "[MTT devel] server side Mellanox patch"</a>
<li><strong>In reply to:</strong> <a href="0212.php">Josh Hursey: "[MTT devel] MTT Visualization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0221.php">Jeff Squyres: "Re: [MTT devel] MTT Visualization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Woo hoo!
<br>
<p>The reporter has been much much more useful since the DB
<br>
optimizations, though I wonder if in the next batch of
<br>
changes we could also have #296 (a few more columns are
<br>
needed)? (Not really related to visibility, but I thought
<br>
I'd speak my mind while there seems to be another round of
<br>
database stuff going on :-))
<br>
<p>Stats visualization would be interesting on virtually any
<br>
column. Particularly combinations of these:
<br>
<p>&nbsp;&nbsp;* runtime_parameters
<br>
&nbsp;&nbsp;* configure_options (broken down by individual options)
<br>
&nbsp;&nbsp;* bitness
<br>
&nbsp;&nbsp;* threadedness
<br>
&nbsp;&nbsp;* np
<br>
&nbsp;&nbsp;* platform
<br>
&nbsp;&nbsp;* hardware
<br>
<p>How much focus will be on the interface for generating
<br>
whatever visualization versus creating more static pictures?
<br>
It would be nice to have a flexible dashboard of some kind
<br>
that would allow us to generate ad hoc visualizations on any
<br>
combination of database columns.
<br>
<p>-Ethan
<br>
<p><p>On Thu, Jan/10/2008 10:29:32AM, Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; I met with Joseph Cottam (Grad student in my lab at IU)
</span><br>
<span class="quotelev1">&gt; yesterday  about MTT visualization. He is working on some
</span><br>
<span class="quotelev1">&gt; new visualization  techniques and wants to apply them to
</span><br>
<span class="quotelev1">&gt; the MTT dataset.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since we are ramping up to a v1.3 release we want to
</span><br>
<span class="quotelev1">&gt; visualization to  support this effort. So we want to make
</span><br>
<span class="quotelev1">&gt; sure that the visualization  will meet the development
</span><br>
<span class="quotelev1">&gt; community's needs. We should probably ask  the devel-core
</span><br>
<span class="quotelev1">&gt; list, but I thought I would start some of the  discussion
</span><br>
<span class="quotelev1">&gt; here to make sure I am asking the right questions of the
</span><br>
<span class="quotelev1">&gt; group.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To start I have some basic questions:
</span><br>
<span class="quotelev1">&gt;   - How does Open MPI determine that it is stable enough to release?
</span><br>
<span class="quotelev1">&gt;   - What dimensions of testing are most/least important (i.e.,  
</span><br>
<span class="quotelev1">&gt; platforms, compilers, feature sets, scale, ...)?
</span><br>
<span class="quotelev1">&gt;   - What other questions would be useful to answer with regard to  
</span><br>
<span class="quotelev1">&gt; testing (thinking completely outside of the box)?
</span><br>
<span class="quotelev1">&gt;     * Example: Are we testing a specific platform/configuration set  
</span><br>
<span class="quotelev1">&gt; too much/too little?
</span><br>
<span class="quotelev1">&gt;   - Other questions you think we should pose to the group?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We are currently feeling out the domain of possibilities,
</span><br>
<span class="quotelev1">&gt; but hope to  start doing some sketching some ideas in
</span><br>
<span class="quotelev1">&gt; another week or so. This work  should proceed fairly
</span><br>
<span class="quotelev1">&gt; quickly since we are targeting a paper about  this for the
</span><br>
<span class="quotelev1">&gt; ACM Symposium on Software Visualization
</span><br>
<span class="quotelev1">&gt; (<a href="http://www.softvis.org/">http://www.softvis.org/</a> ) which is due in early April.
</span><br>
<span class="quotelev1">&gt; How is that for expecting success :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0221.php">Jeff Squyres: "Re: [MTT devel] MTT Visualization"</a>
<li><strong>Previous message:</strong> <a href="0219.php">Jeff Squyres: "[MTT devel] server side Mellanox patch"</a>
<li><strong>In reply to:</strong> <a href="0212.php">Josh Hursey: "[MTT devel] MTT Visualization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0221.php">Jeff Squyres: "Re: [MTT devel] MTT Visualization"</a>
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
