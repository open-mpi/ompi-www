<?
$subject_val = "Re: [OMPI devel] SM init failures";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 27 01:39:46 2009" -->
<!-- isoreceived="20090327053946" -->
<!-- sent="Thu, 26 Mar 2009 21:39:12 -0800" -->
<!-- isosent="20090327053912" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM init failures" -->
<!-- id="49CC6680.30402_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A8B3BC94-BDD0-491A-A0B6-E8BB7A9124B8_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SM init failures<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-27 01:39:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5712.php">Josh Hursey: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5710.php">Ralph Castain: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5710.php">Ralph Castain: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5713.php">Ralph Castain: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5713.php">Ralph Castain: "Re: [OMPI devel] SM init failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; You are correct - the Sun errors are in a version prior to the  
</span><br>
<span class="quotelev1">&gt; insertion of the SM changes. We didn't relabel the version to 1.3.2  
</span><br>
<span class="quotelev1">&gt; until -after- those changes went in, so you have to look for anything  
</span><br>
<span class="quotelev1">&gt; with an r number &gt;= 20839.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The sif errors are all in that group - I would suggest starting there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suspect Josh or someone at IU could tell you the compiler. I would  
</span><br>
<span class="quotelev1">&gt; be very surprised if it wasn't gcc, but I don't know what version. I  
</span><br>
<span class="quotelev1">&gt; suspect they could even find a way to run some debugging on for you,  
</span><br>
<span class="quotelev1">&gt; if that would help.
</span><br>
<p>Okay, right now I'm not worried about compiler.
<br>
<p>My attorneys advised me not to speak to the public, but I share with you 
<br>
this
<br>
prepared statement.  :^)
<br>
<p>I don't claim my code is clean.  Honestly, there was sm BTL code that 
<br>
worried
<br>
me and I can't claim to have &quot;done no worse&quot; in the changes I made.  
<br>
But, this
<br>
spate of test failures doesn't indict me.  (Geez, sorry for being so 
<br>
defensive.
<br>
I guess I just worry myself!)
<br>
<p>Let's start with the recent test results you indicated.  Say,
<br>
<a href="http://www.open-mpi.org/mtt/index.php?do_redir=973">http://www.open-mpi.org/mtt/index.php?do_redir=973</a> which shows these 
<br>
failures:
<br>
<p>&nbsp;&nbsp;143 on IU_Sif
<br>
&nbsp;&nbsp;&nbsp;28 on Sun/Linux (row #6 at that URL, I guess, but you said 34?)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;3 on Sun/SunOS (row #7)
<br>
<p>But, I guess we agreed that the Sun/Linux and Sun/SunOS failures are 
<br>
with 1.3.1,
<br>
and therefore are not attributable to single-queue changes.
<br>
<p>So now we look at recent history for IU_Sif.  E.g.,
<br>
<a href="http://www.open-mpi.org/mtt/index.php?do_redir=975">http://www.open-mpi.org/mtt/index.php?do_redir=975</a>
<br>
Here is what I see:
<br>
<p>&nbsp;&nbsp;&nbsp;# MPI name           MPI version    MPI install Test build Test run
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pass Fail   Pass Fail  Pass  
<br>
Fail    pass:fail ratio
<br>
&nbsp;&nbsp;&nbsp;1 ompi-nightly-trunk 1.4a1r20771     6    0     24     0   10585   
<br>
11           962
<br>
&nbsp;&nbsp;&nbsp;2 ompi-nightly-trunk 1.4a1r20777     6    0     24     0   11880   
<br>
20           594
<br>
&nbsp;&nbsp;&nbsp;3 ompi-nightly-trunk 1.4a1r20781    12    0     48     0   23759   
<br>
95           250
<br>
&nbsp;&nbsp;&nbsp;4 ompi-nightly-trunk 1.4a1r20793    12    0     48     0   23822   
<br>
61           390
<br>
&nbsp;&nbsp;&nbsp;5 ompi-nightly-trunk 1.4a1r20828     8    0     28     8   22893   
<br>
51           448
<br>
&nbsp;&nbsp;&nbsp;6 ompi-nightly-trunk 1.4a1r20834     6    0     20     4   11442   
<br>
55           208
<br>
&nbsp;&nbsp;&nbsp;7 ompi-nightly-trunk 1.4a1r20837    18    0     72     0   34084  
<br>
157           217
<br>
&nbsp;&nbsp;&nbsp;8 ompi-nightly-trunk 1.4a1r20859     2    0     12     0   11900   
<br>
30           396
<br>
&nbsp;&nbsp;&nbsp;9 ompi-nightly-trunk 1.4a1r20884     6    0     24     0   11843   
<br>
59           200
<br>
&nbsp;&nbsp;10 ompi-nightly-v1.3  1.3.1rc5r20730 20    0     71     0   25108  
<br>
252            99
<br>
&nbsp;&nbsp;11 ompi-nightly-v1.3  1.3.1rc5r20794  5    0     18     0    7332  
<br>
112            65
<br>
&nbsp;&nbsp;12 ompi-nightly-v1.3  1.3.1rc5r20810  5    0     18     0    6813   
<br>
75            90
<br>
&nbsp;&nbsp;13 ompi-nightly-v1.3  1.3.1rc5r20826 26    0     96     0   37205 
<br>
3108            11
<br>
&nbsp;&nbsp;14 ompi-nightly-v1.3  1.3.2a1r20855   1    0      6     0     296  
<br>
107             2
<br>
&nbsp;&nbsp;15 ompi-nightly-v1.3  1.3.2a1r20880   5    0     18     0    5825  
<br>
143            40
<br>
<p>I added that last &quot;pass:fail ratio&quot; column.  The run you indicate (row 
<br>
#15) indeed
<br>
has a dramatically low pass:fail ratio, but not *THAT* low.  E.g., the 
<br>
first 1.3.1
<br>
run we see (row #10) is certainly of the same order of magnitude.
<br>
<p>We can compare those two revs in greater detail.  I see this:
<br>
<p>&nbsp;&nbsp;&nbsp;# Suite    np Pass Fail       r20730
<br>
&nbsp;&nbsp;&nbsp;1 ibm      16   0   32
<br>
&nbsp;&nbsp;&nbsp;2 intel    16   0  123
<br>
&nbsp;&nbsp;&nbsp;3 iu_ft_cr 16   0    3
<br>
&nbsp;&nbsp;&nbsp;4 onesided 10   0   16
<br>
&nbsp;&nbsp;&nbsp;5 onesided 12   0   32
<br>
&nbsp;&nbsp;&nbsp;6 onesided 14   0   24
<br>
&nbsp;&nbsp;&nbsp;7 onesided 16   0   22
<br>
<p>&nbsp;&nbsp;&nbsp;# Suite    np Pass Fail       r20880
<br>
&nbsp;&nbsp;&nbsp;1 ibm      16   0   27
<br>
&nbsp;&nbsp;&nbsp;2 intel    16   0   38
<br>
&nbsp;&nbsp;&nbsp;3 iu_ft_cr 16   0    2
<br>
&nbsp;&nbsp;&nbsp;4 onesided  2   0   10
<br>
&nbsp;&nbsp;&nbsp;5 onesided  4   0    9
<br>
&nbsp;&nbsp;&nbsp;6 onesided  6   0    9
<br>
&nbsp;&nbsp;&nbsp;7 onesided  8   0    9
<br>
&nbsp;&nbsp;&nbsp;8 onesided 10   0    9
<br>
&nbsp;&nbsp;&nbsp;9 onesided 12   0   10
<br>
&nbsp;&nbsp;10 onesided 14   0   10
<br>
&nbsp;&nbsp;11 onesided 16   0   10
<br>
<p>To me, r20880 doesn't particularly look worse than r20730.
<br>
<p>We can deep dive on some of these results.  I looked at the &quot;ibm np=16&quot; 
<br>
and &quot;onesided np=16&quot;
<br>
results a lot.  Indeed, r20880 shows lots of seg faults in 
<br>
mca_btl_sm.so.  On the other hand,
<br>
they don't (so far as I can tell) arise in the add_procs stack.  Indeed, 
<br>
many aren't in MPI_Init
<br>
at all.  Some have to do with librdmacm.  In any case, I seem to find 
<br>
very much the same stack
<br>
traces for 20730.
<br>
<p>I'm still worried that my single-queue code either left a race condition 
<br>
in the sm BTL start-up
<br>
or perhaps even made it worse.  The recent MTT failures, however, don't 
<br>
seem to point to that.
<br>
They seem to point to problems other than the intermittent segv's that 
<br>
Jeff and Terry were
<br>
seeing and the data does not seem to me to indicate an increased 
<br>
frequency with 1.3.2.
<br>
<p>Other opinions welcomed.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5712.php">Josh Hursey: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5710.php">Ralph Castain: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5710.php">Ralph Castain: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5713.php">Ralph Castain: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5713.php">Ralph Castain: "Re: [OMPI devel] SM init failures"</a>
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
