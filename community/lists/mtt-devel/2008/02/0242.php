<?
$subject_val = "Re: [MTT devel] two recent commits";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 13 11:34:29 2008" -->
<!-- isoreceived="20080213163429" -->
<!-- sent="Wed, 13 Feb 2008 11:34:22 -0500" -->
<!-- isosent="20080213163422" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] two recent commits" -->
<!-- id="20080213163421.GP17034_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C0B582EA-807C-4FB5-A031-5681EFED3B37_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [MTT devel] two recent commits<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-13 11:34:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0243.php">Jeff Squyres: "Re: [MTT devel] two recent commits"</a>
<li><strong>Previous message:</strong> <a href="0241.php">Josh Hursey: "[MTT devel] two recent commits"</a>
<li><strong>In reply to:</strong> <a href="0241.php">Josh Hursey: "[MTT devel] two recent commits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0243.php">Jeff Squyres: "Re: [MTT devel] two recent commits"</a>
<li><strong>Reply:</strong> <a href="0243.php">Jeff Squyres: "Re: [MTT devel] two recent commits"</a>
<li><strong>Reply:</strong> <a href="0244.php">Josh Hursey: "Re: [MTT devel] two recent commits"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Feb/13/2008 10:35:51AM, Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; I just committed to the trunk two revisions that I want to push to the  
</span><br>
<span class="quotelev1">&gt; Open MPI version of MTT:
</span><br>
<span class="quotelev1">&gt;   <a href="https://svn.open-mpi.org/trac/mtt/changeset/1154">https://svn.open-mpi.org/trac/mtt/changeset/1154</a>
</span><br>
<span class="quotelev1">&gt;   <a href="https://svn.open-mpi.org/trac/mtt/changeset/1155">https://svn.open-mpi.org/trac/mtt/changeset/1155</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; r1154 is a performance fix which prevents us from executing the same  
</span><br>
<span class="quotelev1">&gt; SQL query twice for every MTT Reporter request.
</span><br>
<p>Whoa. Your fix does seem to be a 2x performance boost. Good one!
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; r1155 displays the total SQL execution time just after the Total  
</span><br>
<span class="quotelev1">&gt; execution time at the bottom of the Reporter. I was noticing that over  
</span><br>
<span class="quotelev1">&gt; a slow connection the difference between these two times was  
</span><br>
<span class="quotelev1">&gt; significant.
</span><br>
<p><p>Also very useful.
<br>
<p><span class="quotelev1">&gt; I tested both of these and didn't see any problems, but wanted to ask  
</span><br>
<span class="quotelev1">&gt; before I moved them to the Open MPI site version of MTT. A version of  
</span><br>
<span class="quotelev1">&gt; the Reporter with these patches applied is available at the link below:
</span><br>
<span class="quotelev1">&gt; <a href="http://osl.iu.edu/~jjhursey/research/mtt/server/php/index.php">http://osl.iu.edu/~jjhursey/research/mtt/server/php/index.php</a>
</span><br>
<p><p>I banged on this just now and it looks fine.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I don't hear anything by the end of the day I'll push them in.
</span><br>
<p><p>server/tools/commit-to-ompi-www.pl can be handy for
<br>
synchronizing mtt/server/php with ompi-www.
<br>
<p>-Ethan
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cheers,
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
<li><strong>Next message:</strong> <a href="0243.php">Jeff Squyres: "Re: [MTT devel] two recent commits"</a>
<li><strong>Previous message:</strong> <a href="0241.php">Josh Hursey: "[MTT devel] two recent commits"</a>
<li><strong>In reply to:</strong> <a href="0241.php">Josh Hursey: "[MTT devel] two recent commits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0243.php">Jeff Squyres: "Re: [MTT devel] two recent commits"</a>
<li><strong>Reply:</strong> <a href="0243.php">Jeff Squyres: "Re: [MTT devel] two recent commits"</a>
<li><strong>Reply:</strong> <a href="0244.php">Josh Hursey: "Re: [MTT devel] two recent commits"</a>
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
