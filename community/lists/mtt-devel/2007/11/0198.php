<?
$subject_val = "Re: [MTT devel] Submission totals graph";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 30 10:21:00 2007" -->
<!-- isoreceived="20071130152100" -->
<!-- sent="Fri, 30 Nov 2007 10:20:55 -0500" -->
<!-- isosent="20071130152055" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Submission totals graph" -->
<!-- id="3028D055-9C0C-4F92-A93B-6644E76AE7AC_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7AD40DCE-4ADE-45F0-BDBE-06ED97E53C73_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-11-30 10:20:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2008/01/0199.php">Jeff Squyres: "[MTT devel] server side MTT stuff"</a>
<li><strong>Previous message:</strong> <a href="0197.php">Josh Hursey: "Re: [MTT devel] Submission totals graph"</a>
<li><strong>In reply to:</strong> <a href="0197.php">Josh Hursey: "Re: [MTT devel] Submission totals graph"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Attached is a version with the calendar week data. Note that there is  
<br>
some flex in the calendar week since at the beginning and end of a  
<br>
month a week is not necessarily defined as 7 days. I'm not sure how  
<br>
this anomaly in the data can be ironed out.
<br>
<p>Month data uses the left axis, and week and day data use the right axis.
<br>
<p>I just committed the updated scripts with the -week option.
<br>
<p>Cheers,
<br>
Josh
<br>
<p><p>

<br><p>
<p>On Nov 30, 2007, at 9:49 AM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 28, 2007, at 5:01 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Nice!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The double y-axis threw me off there. I'm confused why the
</span><br>
<span class="quotelev2">&gt;&gt; the per-day-tuples plot (green line) is so jagged, I thought
</span><br>
<span class="quotelev2">&gt;&gt; we were more or less on steady 24-hour testing cycle.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yeah it threw me a bit too, but I wonder if this isn't the effect of
</span><br>
<span class="quotelev1">&gt; not testing as much on the weekends. a couple of days at low numbers
</span><br>
<span class="quotelev1">&gt; would cause the sudden down burst of traffic. I'm not completely sure
</span><br>
<span class="quotelev1">&gt; what is happening here. Maybe if we viewed it by week it would smooth
</span><br>
<span class="quotelev1">&gt; out a bit more.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I
</span><br>
<span class="quotelev2">&gt;&gt; couldn't decode the the new stats/*raw-data{.pl,.plot} files
</span><br>
<span class="quotelev2">&gt;&gt; to answer my own question :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I used the scripts as follows (I admit they are a bit rough):
</span><br>
<span class="quotelev1">&gt; shell$ ./make-raw-data.pl -day &gt; raw-day.data
</span><br>
<span class="quotelev1">&gt; shell$ ./make-raw-data.pl -month &gt; raw-month.data
</span><br>
<span class="quotelev1">&gt; shell$ gnuplot graph-raw-data.plot
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You may have to change the terminal in that gnuplot file from
</span><br>
<span class="quotelev1">&gt; 'aqua' (which is OSX specific I believe) to the postscript version
</span><br>
<span class="quotelev1">&gt; that is commented out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Ethan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Nov/28/2007 11:49:58AM, Josh Hursey wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For no other reason than I was curious to see what it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would look like, I created a graph of the per day and per
</span><br>
<span class="quotelev3">&gt;&gt;&gt; month submission totals to MTT and graphed it. This is the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; total number of MPI Install, Test Build, and Test Run
</span><br>
<span class="quotelev3">&gt;&gt;&gt; submissions. Attached is the graph if anyone is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interested.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like we peaked in July 2007, then dropped off
</span><br>
<span class="quotelev3">&gt;&gt;&gt; quite a bit there after. This is likely due to Cisco's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; transition to a new cluster setup so I'm not terribly
</span><br>
<span class="quotelev3">&gt;&gt;&gt; concerned.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; An interesting graph none the less.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><p><hr>
<ul>
<li>application/pdf attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0198/MTT-tuples-week.pdf">MTT-tuples-week.pdf</a>
</ul>
<!-- attachment="MTT-tuples-week.pdf" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2008/01/0199.php">Jeff Squyres: "[MTT devel] server side MTT stuff"</a>
<li><strong>Previous message:</strong> <a href="0197.php">Josh Hursey: "Re: [MTT devel] Submission totals graph"</a>
<li><strong>In reply to:</strong> <a href="0197.php">Josh Hursey: "Re: [MTT devel] Submission totals graph"</a>
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
