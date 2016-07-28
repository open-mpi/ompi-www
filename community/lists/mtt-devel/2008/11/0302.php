<?
$subject_val = "Re: [MTT devel] [MTT bugs] [MTT] #258: Compare non-contiguous date ranges";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 11 17:41:24 2008" -->
<!-- isoreceived="20081111224124" -->
<!-- sent="Tue, 11 Nov 2008 17:41:16 -0500" -->
<!-- isosent="20081111224116" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT bugs] [MTT] #258: Compare non-contiguous date ranges" -->
<!-- id="CB2453C6-671C-4A5B-B01B-1074BD323838_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20081111181556.GM12131_at_sun.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] [MTT bugs] [MTT] #258: Compare non-contiguous date ranges<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-11 17:41:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0303.php">Ethan Mallove: "Re: [MTT devel] [MTT bugs] [MTT] #258: Compare non-contiguous date	ranges"</a>
<li><strong>Previous message:</strong> <a href="0301.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1242"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0303.php">Ethan Mallove: "Re: [MTT devel] [MTT bugs] [MTT] #258: Compare non-contiguous date	ranges"</a>
<li><strong>Reply:</strong> <a href="0303.php">Ethan Mallove: "Re: [MTT devel] [MTT bugs] [MTT] #258: Compare non-contiguous date	ranges"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey, how about Javascript calendars for selecting date ranges?
<br>
<p>:p
<br>
<p><p>On Nov 11, 2008, at 1:15 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a fix for this ticket. The syntax to get
</span><br>
<span class="quotelev1">&gt; non-contiguous date ranges is to use space-delimited quoted
</span><br>
<span class="quotelev1">&gt; tokens (see <a href="http://tinyurl.com/6e2pqa">http://tinyurl.com/6e2pqa</a>), e.g.,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  &quot;2007-10-29 - 2007-11-30&quot; &quot;2008-11-07 - 2008-11-14&quot; &quot;by month&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Trying to view year-old results alongside week-old results in the
</span><br>
<span class="quotelev1">&gt; current Reporter can result in 10+ minutes of database thrashing. With
</span><br>
<span class="quotelev1">&gt; this fix, it's around 30 seconds. If I don't get any bug reports about
</span><br>
<span class="quotelev1">&gt; the above ~emallove Reporter within 48 hours, I'll push it out to the
</span><br>
<span class="quotelev1">&gt; main www.open-mpi.org site.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Aug/08/2007 07:22:14PM, MTT wrote:
</span><br>
<span class="quotelev2">&gt;&gt; #258: Compare non-contiguous date ranges
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; +--------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Reporter:  jjhursey     |       Owner:
</span><br>
<span class="quotelev2">&gt;&gt;     Type:  defect       |      Status:  new
</span><br>
<span class="quotelev2">&gt;&gt; Priority:  major        |   Milestone:  Future
</span><br>
<span class="quotelev2">&gt;&gt; Component:  Server side  |     Version:  trunk
</span><br>
<span class="quotelev2">&gt;&gt; Keywords:               |
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; +--------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It is possible to get results from two types of runs (say threaded  
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev2">&gt;&gt; non-threaded) by regular expression arguments to some existing  
</span><br>
<span class="quotelev2">&gt;&gt; reporter
</span><br>
<span class="quotelev2">&gt;&gt; fields (i,e., configure arguments).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However it is currently not possible to compare two distinct date  
</span><br>
<span class="quotelev2">&gt;&gt; ranges.
</span><br>
<span class="quotelev2">&gt;&gt; We should extend the reporter to effectively display such results.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We could extend the date specification to allow for a comma  
</span><br>
<span class="quotelev2">&gt;&gt; separated list
</span><br>
<span class="quotelev2">&gt;&gt; of ranges:
</span><br>
<span class="quotelev2">&gt;&gt; {{{
</span><br>
<span class="quotelev2">&gt;&gt; To compare results from July 20, 21, and 22:
</span><br>
<span class="quotelev2">&gt;&gt;   2007-07-20 - 2007-07-21,2007-07-21 - 2007-07-22,2007-07-22 -  
</span><br>
<span class="quotelev2">&gt;&gt; 2007-07-23
</span><br>
<span class="quotelev2">&gt;&gt; }}}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Then the reporter could make distinct summary tables for each  
</span><br>
<span class="quotelev2">&gt;&gt; range. Or
</span><br>
<span class="quotelev2">&gt;&gt; something like that.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Ticket URL: &lt;<a href="https://svn.open-mpi.org/trac/mtt/ticket/258">https://svn.open-mpi.org/trac/mtt/ticket/258</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MTT &lt;<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Issue tracking for the MPI Testing Tool.
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="0303.php">Ethan Mallove: "Re: [MTT devel] [MTT bugs] [MTT] #258: Compare non-contiguous date	ranges"</a>
<li><strong>Previous message:</strong> <a href="0301.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1242"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0303.php">Ethan Mallove: "Re: [MTT devel] [MTT bugs] [MTT] #258: Compare non-contiguous date	ranges"</a>
<li><strong>Reply:</strong> <a href="0303.php">Ethan Mallove: "Re: [MTT devel] [MTT bugs] [MTT] #258: Compare non-contiguous date	ranges"</a>
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
