<?
$subject_val = "Re: [OMPI users] Tight integration and interactive sessions with SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 13 11:08:28 2008" -->
<!-- isoreceived="20081113160828" -->
<!-- sent="Thu, 13 Nov 2008 08:08:14 -0800" -->
<!-- isosent="20081113160814" -->
<!-- name="Scott Beardsley" -->
<!-- email="scott_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Tight integration and interactive sessions with SGE" -->
<!-- id="491C50EE.2090802_at_cse.ucdavis.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="11D5AF00-92EB-42B6-9582-3A2015F9B65F_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Tight integration and interactive sessions with SGE<br>
<strong>From:</strong> Scott Beardsley (<em>scott_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-13 11:08:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7309.php">Raymond Wan: "Re: [OMPI users] timing + /usr/bin/time"</a>
<li><strong>Previous message:</strong> <a href="7307.php">Peter Cebull: "Re: [OMPI users] Bus Error in ompi_free_list_grow"</a>
<li><strong>In reply to:</strong> <a href="7304.php">Reuti: "Re: [OMPI users] Tight integration and interactive sessions with SGE"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Reuti wrote:
<br>
<p><span class="quotelev1">&gt; What do you mean by &quot;in the past&quot; - you upgraded SGE from version x to 
</span><br>
<span class="quotelev1">&gt; version y? You can still source 
</span><br>
<span class="quotelev1">&gt; &lt;execd-spool&gt;/&lt;nodename&gt;/&lt;active_jobs&gt;/&lt;job_id&gt;.1/environment.
</span><br>
<p>Sorry, you are right, this hasn't changed. By in the past I meant before 
<br>
we started using OMPI (and SGE with tight integration).
<br>
<p><span class="quotelev1">&gt; There is nothing stopping you to define a start/stop_proc_args script 
</span><br>
<span class="quotelev1">&gt; anyway. You could use the example in $SGE_ROOT/mpi and then call this 
</span><br>
<span class="quotelev1">&gt; script with -uniq which will give you a list in the usual 
</span><br>
<span class="quotelev1">&gt; $TMPDIR/machines file. 
</span><br>
<p>You nailed my problem, thanks! I had /bin/true set in the 
<br>
start_proc_args option instead of a startup script.
<br>
<p>Thanks again.
<br>
Scott
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7309.php">Raymond Wan: "Re: [OMPI users] timing + /usr/bin/time"</a>
<li><strong>Previous message:</strong> <a href="7307.php">Peter Cebull: "Re: [OMPI users] Bus Error in ompi_free_list_grow"</a>
<li><strong>In reply to:</strong> <a href="7304.php">Reuti: "Re: [OMPI users] Tight integration and interactive sessions with SGE"</a>
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
