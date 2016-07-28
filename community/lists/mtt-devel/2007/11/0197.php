<?
$subject_val = "Re: [MTT devel] Submission totals graph";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 30 09:50:05 2007" -->
<!-- isoreceived="20071130145005" -->
<!-- sent="Fri, 30 Nov 2007 09:49:59 -0500" -->
<!-- isosent="20071130144959" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Submission totals graph" -->
<!-- id="7AD40DCE-4ADE-45F0-BDBE-06ED97E53C73_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071128220148.GB57122_at_sun.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] Submission totals graph<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-30 09:49:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0198.php">Josh Hursey: "Re: [MTT devel] Submission totals graph"</a>
<li><strong>Previous message:</strong> <a href="0196.php">Ethan Mallove: "Re: [MTT devel] Submission totals graph"</a>
<li><strong>In reply to:</strong> <a href="0196.php">Ethan Mallove: "Re: [MTT devel] Submission totals graph"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0198.php">Josh Hursey: "Re: [MTT devel] Submission totals graph"</a>
<li><strong>Reply:</strong> <a href="0198.php">Josh Hursey: "Re: [MTT devel] Submission totals graph"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 28, 2007, at 5:01 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; Nice!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The double y-axis threw me off there. I'm confused why the
</span><br>
<span class="quotelev1">&gt; the per-day-tuples plot (green line) is so jagged, I thought
</span><br>
<span class="quotelev1">&gt; we were more or less on steady 24-hour testing cycle.
</span><br>
<p>Yeah it threw me a bit too, but I wonder if this isn't the effect of  
<br>
not testing as much on the weekends. a couple of days at low numbers  
<br>
would cause the sudden down burst of traffic. I'm not completely sure  
<br>
what is happening here. Maybe if we viewed it by week it would smooth  
<br>
out a bit more.
<br>
<p><span class="quotelev1">&gt; I
</span><br>
<span class="quotelev1">&gt; couldn't decode the the new stats/*raw-data{.pl,.plot} files
</span><br>
<span class="quotelev1">&gt; to answer my own question :-)
</span><br>
<p>I used the scripts as follows (I admit they are a bit rough):
<br>
shell$ ./make-raw-data.pl -day &gt; raw-day.data
<br>
shell$ ./make-raw-data.pl -month &gt; raw-month.data
<br>
shell$ gnuplot graph-raw-data.plot
<br>
<p>You may have to change the terminal in that gnuplot file from  
<br>
'aqua' (which is OSX specific I believe) to the postscript version  
<br>
that is commented out.
<br>
<p>-- Josh
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Nov/28/2007 11:49:58AM, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt; For no other reason than I was curious to see what it
</span><br>
<span class="quotelev2">&gt;&gt; would look like, I created a graph of the per day and per
</span><br>
<span class="quotelev2">&gt;&gt; month submission totals to MTT and graphed it. This is the
</span><br>
<span class="quotelev2">&gt;&gt; total number of MPI Install, Test Build, and Test Run
</span><br>
<span class="quotelev2">&gt;&gt; submissions. Attached is the graph if anyone is
</span><br>
<span class="quotelev2">&gt;&gt; interested.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like we peaked in July 2007, then dropped off
</span><br>
<span class="quotelev2">&gt;&gt; quite a bit there after. This is likely due to Cisco's
</span><br>
<span class="quotelev2">&gt;&gt; transition to a new cluster setup so I'm not terribly
</span><br>
<span class="quotelev2">&gt;&gt; concerned.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; An interesting graph none the less.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
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
<li><strong>Next message:</strong> <a href="0198.php">Josh Hursey: "Re: [MTT devel] Submission totals graph"</a>
<li><strong>Previous message:</strong> <a href="0196.php">Ethan Mallove: "Re: [MTT devel] Submission totals graph"</a>
<li><strong>In reply to:</strong> <a href="0196.php">Ethan Mallove: "Re: [MTT devel] Submission totals graph"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0198.php">Josh Hursey: "Re: [MTT devel] Submission totals graph"</a>
<li><strong>Reply:</strong> <a href="0198.php">Josh Hursey: "Re: [MTT devel] Submission totals graph"</a>
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
