<?
$subject_val = "Re: [MTT devel] two recent commits";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 13 11:55:59 2008" -->
<!-- isoreceived="20080213165559" -->
<!-- sent="Wed, 13 Feb 2008 11:55:31 -0500" -->
<!-- isosent="20080213165531" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] two recent commits" -->
<!-- id="4963830E-67E6-4543-BD22-5C2A3040AEDA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080213163421.GP17034_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-13 11:55:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0244.php">Josh Hursey: "Re: [MTT devel] two recent commits"</a>
<li><strong>Previous message:</strong> <a href="0242.php">Ethan Mallove: "Re: [MTT devel] two recent commits"</a>
<li><strong>In reply to:</strong> <a href="0242.php">Ethan Mallove: "Re: [MTT devel] two recent commits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0244.php">Josh Hursey: "Re: [MTT devel] two recent commits"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's good with me!
<br>
<p>On Feb 13, 2008, at 11:34 AM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, Feb/13/2008 10:35:51AM, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I just committed to the trunk two revisions that I want to push to  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI version of MTT:
</span><br>
<span class="quotelev2">&gt;&gt;  <a href="https://svn.open-mpi.org/trac/mtt/changeset/1154">https://svn.open-mpi.org/trac/mtt/changeset/1154</a>
</span><br>
<span class="quotelev2">&gt;&gt;  <a href="https://svn.open-mpi.org/trac/mtt/changeset/1155">https://svn.open-mpi.org/trac/mtt/changeset/1155</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; r1154 is a performance fix which prevents us from executing the same
</span><br>
<span class="quotelev2">&gt;&gt; SQL query twice for every MTT Reporter request.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Whoa. Your fix does seem to be a 2x performance boost. Good one!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; r1155 displays the total SQL execution time just after the Total
</span><br>
<span class="quotelev2">&gt;&gt; execution time at the bottom of the Reporter. I was noticing that  
</span><br>
<span class="quotelev2">&gt;&gt; over
</span><br>
<span class="quotelev2">&gt;&gt; a slow connection the difference between these two times was
</span><br>
<span class="quotelev2">&gt;&gt; significant.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also very useful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tested both of these and didn't see any problems, but wanted to ask
</span><br>
<span class="quotelev2">&gt;&gt; before I moved them to the Open MPI site version of MTT. A version of
</span><br>
<span class="quotelev2">&gt;&gt; the Reporter with these patches applied is available at the link  
</span><br>
<span class="quotelev2">&gt;&gt; below:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://osl.iu.edu/~jjhursey/research/mtt/server/php/index.php">http://osl.iu.edu/~jjhursey/research/mtt/server/php/index.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I banged on this just now and it looks fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I don't hear anything by the end of the day I'll push them in.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; server/tools/commit-to-ompi-www.pl can be handy for
</span><br>
<span class="quotelev1">&gt; synchronizing mtt/server/php with ompi-www.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0244.php">Josh Hursey: "Re: [MTT devel] two recent commits"</a>
<li><strong>Previous message:</strong> <a href="0242.php">Ethan Mallove: "Re: [MTT devel] two recent commits"</a>
<li><strong>In reply to:</strong> <a href="0242.php">Ethan Mallove: "Re: [MTT devel] two recent commits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0244.php">Josh Hursey: "Re: [MTT devel] two recent commits"</a>
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
