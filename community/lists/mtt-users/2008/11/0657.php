<?
$subject_val = "Re: [MTT users] [MTT bugs] [MTT] #258: Compare non-contiguous date ranges";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 11 13:16:02 2008" -->
<!-- isoreceived="20081111181602" -->
<!-- sent="Tue, 11 Nov 2008 13:15:57 -0500" -->
<!-- isosent="20081111181557" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] [MTT bugs] [MTT] #258: Compare non-contiguous date ranges" -->
<!-- id="20081111181556.GM12131_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="044.143aaf8920a82af564a03b6fa29d7c1b_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [MTT users] [MTT bugs] [MTT] #258: Compare non-contiguous date ranges<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-11 13:15:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2008/12/0658.php">John Fink: "[MTT users] Is the stock MPI that comes with OSX leopard broken with xgrid?"</a>
<li><strong>Previous message:</strong> <a href="0656.php">Brian Elliott Finley: "Re: [MTT users] Patch for whatami (new sles10 lsb-release	fileformat)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks, 
<br>
<p>I have a fix for this ticket. The syntax to get
<br>
non-contiguous date ranges is to use space-delimited quoted
<br>
tokens (see <a href="http://tinyurl.com/6e2pqa">http://tinyurl.com/6e2pqa</a>), e.g.,
<br>
<p>&nbsp;&nbsp;&quot;2007-10-29 - 2007-11-30&quot; &quot;2008-11-07 - 2008-11-14&quot; &quot;by month&quot;
<br>
<p>Trying to view year-old results alongside week-old results in the
<br>
current Reporter can result in 10+ minutes of database thrashing. With
<br>
this fix, it's around 30 seconds. If I don't get any bug reports about
<br>
the above ~emallove Reporter within 48 hours, I'll push it out to the
<br>
main www.open-mpi.org site.
<br>
<p>Thanks,
<br>
Ethan
<br>
<p><p>On Wed, Aug/08/2007 07:22:14PM, MTT wrote:
<br>
<span class="quotelev1">&gt; #258: Compare non-contiguous date ranges
</span><br>
<span class="quotelev1">&gt; -------------------------+--------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  Reporter:  jjhursey     |       Owner:        
</span><br>
<span class="quotelev1">&gt;      Type:  defect       |      Status:  new   
</span><br>
<span class="quotelev1">&gt;  Priority:  major        |   Milestone:  Future
</span><br>
<span class="quotelev1">&gt; Component:  Server side  |     Version:  trunk 
</span><br>
<span class="quotelev1">&gt;  Keywords:               |  
</span><br>
<span class="quotelev1">&gt; -------------------------+--------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  It is possible to get results from two types of runs (say threaded and
</span><br>
<span class="quotelev1">&gt;  non-threaded) by regular expression arguments to some existing reporter
</span><br>
<span class="quotelev1">&gt;  fields (i,e., configure arguments).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  However it is currently not possible to compare two distinct date ranges.
</span><br>
<span class="quotelev1">&gt;  We should extend the reporter to effectively display such results.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  We could extend the date specification to allow for a comma separated list
</span><br>
<span class="quotelev1">&gt;  of ranges:
</span><br>
<span class="quotelev1">&gt;  {{{
</span><br>
<span class="quotelev1">&gt;  To compare results from July 20, 21, and 22:
</span><br>
<span class="quotelev1">&gt;    2007-07-20 - 2007-07-21,2007-07-21 - 2007-07-22,2007-07-22 - 2007-07-23
</span><br>
<span class="quotelev1">&gt;  }}}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Then the reporter could make distinct summary tables for each range. Or
</span><br>
<span class="quotelev1">&gt;  something like that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ticket URL: &lt;<a href="https://svn.open-mpi.org/trac/mtt/ticket/258">https://svn.open-mpi.org/trac/mtt/ticket/258</a>&gt;
</span><br>
<span class="quotelev1">&gt; MTT &lt;<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>&gt;
</span><br>
<span class="quotelev1">&gt; Issue tracking for the MPI Testing Tool.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2008/12/0658.php">John Fink: "[MTT users] Is the stock MPI that comes with OSX leopard broken with xgrid?"</a>
<li><strong>Previous message:</strong> <a href="0656.php">Brian Elliott Finley: "Re: [MTT users] Patch for whatami (new sles10 lsb-release	fileformat)"</a>
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
