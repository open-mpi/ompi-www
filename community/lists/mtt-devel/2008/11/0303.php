<?
$subject_val = "Re: [MTT devel] [MTT bugs] [MTT] #258: Compare non-contiguous date	ranges";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 11 21:34:19 2008" -->
<!-- isoreceived="20081112023419" -->
<!-- sent="Tue, 11 Nov 2008 21:34:14 -0500" -->
<!-- isosent="20081112023414" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT bugs] [MTT] #258: Compare non-contiguous date	ranges" -->
<!-- id="20081112023414.GB12134_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CB2453C6-671C-4A5B-B01B-1074BD323838_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] [MTT bugs] [MTT] #258: Compare non-contiguous date	ranges<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-11 21:34:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2008/12/0304.php">Ethan Mallove: "[MTT devel] Time to make the 2009 mtt database partitions?"</a>
<li><strong>Previous message:</strong> <a href="0302.php">Jeff Squyres: "Re: [MTT devel] [MTT bugs] [MTT] #258: Compare non-contiguous date ranges"</a>
<li><strong>In reply to:</strong> <a href="0302.php">Jeff Squyres: "Re: [MTT devel] [MTT bugs] [MTT] #258: Compare non-contiguous date ranges"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Nov/11/2008 05:41:16PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Hey, how about Javascript calendars for selecting date ranges?
</span><br>
<p>#378 will have to come later :-)
<br>
<p><a href="https://svn.open-mpi.org/trac/mtt/ticket/378">https://svn.open-mpi.org/trac/mtt/ticket/378</a>
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; :p
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 11, 2008, at 1:15 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Folks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a fix for this ticket. The syntax to get
</span><br>
<span class="quotelev2">&gt;&gt; non-contiguous date ranges is to use space-delimited quoted
</span><br>
<span class="quotelev2">&gt;&gt; tokens (see <a href="http://tinyurl.com/6e2pqa">http://tinyurl.com/6e2pqa</a>), e.g.,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  &quot;2007-10-29 - 2007-11-30&quot; &quot;2008-11-07 - 2008-11-14&quot; &quot;by month&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Trying to view year-old results alongside week-old results in the
</span><br>
<span class="quotelev2">&gt;&gt; current Reporter can result in 10+ minutes of database thrashing. With
</span><br>
<span class="quotelev2">&gt;&gt; this fix, it's around 30 seconds. If I don't get any bug reports about
</span><br>
<span class="quotelev2">&gt;&gt; the above ~emallove Reporter within 48 hours, I'll push it out to the
</span><br>
<span class="quotelev2">&gt;&gt; main www.open-mpi.org site.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Ethan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Aug/08/2007 07:22:14PM, MTT wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #258: Compare non-contiguous date ranges
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------+--------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reporter:  jjhursey     |       Owner:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Type:  defect       |      Status:  new
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Priority:  major        |   Milestone:  Future
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Component:  Server side  |     Version:  trunk
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Keywords:               |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------+--------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It is possible to get results from two types of runs (say threaded and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; non-threaded) by regular expression arguments to some existing reporter
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fields (i,e., configure arguments).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However it is currently not possible to compare two distinct date ranges.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We should extend the reporter to effectively display such results.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We could extend the date specification to allow for a comma separated 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of ranges:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {{{
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To compare results from July 20, 21, and 22:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   2007-07-20 - 2007-07-21,2007-07-21 - 2007-07-22,2007-07-22 - 2007-07-23
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }}}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Then the reporter could make distinct summary tables for each range. Or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; something like that.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ticket URL: &lt;<a href="https://svn.open-mpi.org/trac/mtt/ticket/258">https://svn.open-mpi.org/trac/mtt/ticket/258</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MTT &lt;<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Issue tracking for the MPI Testing Tool.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2008/12/0304.php">Ethan Mallove: "[MTT devel] Time to make the 2009 mtt database partitions?"</a>
<li><strong>Previous message:</strong> <a href="0302.php">Jeff Squyres: "Re: [MTT devel] [MTT bugs] [MTT] #258: Compare non-contiguous date ranges"</a>
<li><strong>In reply to:</strong> <a href="0302.php">Jeff Squyres: "Re: [MTT devel] [MTT bugs] [MTT] #258: Compare non-contiguous date ranges"</a>
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
