<?
$subject_val = "Re: [OMPI devel] SM init failures";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 27 09:02:03 2009" -->
<!-- isoreceived="20090327130203" -->
<!-- sent="Fri, 27 Mar 2009 06:01:56 -0700" -->
<!-- isosent="20090327130156" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM init failures" -->
<!-- id="57BFCA13-2711-475A-8D10-474F3F1447FA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9B91E05D-35EA-46C2-85DF-2AA555E79856_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-27 09:01:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5715.php">Jeff Squyres: "[OMPI devel] cisco mtt failures"</a>
<li><strong>Previous message:</strong> <a href="5713.php">Ralph Castain: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5713.php">Ralph Castain: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5712.php">Josh Hursey: "Re: [OMPI devel] SM init failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, when I was looking into this before, the problem was definitely  
<br>
during MPI_INIT.  I ran out of time before being able to track it down  
<br>
further, but it was definitely something during the sm startup --  
<br>
during add_procs, IIRC.
<br>
<p>It *looked* like there was some kind of bogus value in the bootstrap  
<br>
shared memory segment, but I was having great difficulty tracking it  
<br>
down because the corefiles that are left when the job segv's does  
<br>
*not* include the shared memory segment.  The problem occurred on a  
<br>
line in the source code where we were accessing values in the  
<br>
bootstrap shared memory segment, and that's not in the corefile.  So  
<br>
you can't tell exactly what went wrong.  :-\
<br>
<p><p><p>On Mar 27, 2009, at 5:05 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Hmmm...Eugene, you need to be a tad less sensitive. Nobody was
</span><br>
<span class="quotelev1">&gt; attempting to indict you or in any way attack you or your code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I was attempting to point out is that there are a number of sm
</span><br>
<span class="quotelev1">&gt; failures during sm init. I didn't single you out. I posted it to the
</span><br>
<span class="quotelev1">&gt; community because (a) it is a persistent problem, as you yourself
</span><br>
<span class="quotelev1">&gt; note, that involves code from a number of people; (b) it is something
</span><br>
<span class="quotelev1">&gt; users have reported; and (c) it is clearly a race condition, which
</span><br>
<span class="quotelev1">&gt; means it will be very difficult to chase down.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So please stop the defensive rhetoric - we are not about assigning
</span><br>
<span class="quotelev1">&gt; blame, but rather about getting the code to work right.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since we clearly see problems on sif, and Josh has indicated a
</span><br>
<span class="quotelev1">&gt; willingness to help with debugging, this might be a place to start the
</span><br>
<span class="quotelev1">&gt; investigation. If asked nicely, they might even be willing to grant
</span><br>
<span class="quotelev1">&gt; access to the machine, if that would help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Whether or not we fix this for 1.3.2 is a community decision. At some
</span><br>
<span class="quotelev1">&gt; point, though, we are going to have to resolve this problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 26, 2009, at 11:39 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; You are correct - the Sun errors are in a version prior to the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; insertion of the SM changes. We didn't relabel the version to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1.3.2  until -after- those changes went in, so you have to look for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; anything  with an r number &gt;= 20839.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The sif errors are all in that group - I would suggest starting
</span><br>
<span class="quotelev3">&gt; &gt;&gt; there.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I suspect Josh or someone at IU could tell you the compiler. I
</span><br>
<span class="quotelev3">&gt; &gt;&gt; would  be very surprised if it wasn't gcc, but I don't know what
</span><br>
<span class="quotelev3">&gt; &gt;&gt; version. I  suspect they could even find a way to run some
</span><br>
<span class="quotelev3">&gt; &gt;&gt; debugging on for you,  if that would help.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Okay, right now I'm not worried about compiler.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My attorneys advised me not to speak to the public, but I share with
</span><br>
<span class="quotelev2">&gt; &gt; you this
</span><br>
<span class="quotelev2">&gt; &gt; prepared statement.  :^)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I don't claim my code is clean.  Honestly, there was sm BTL code
</span><br>
<span class="quotelev2">&gt; &gt; that worried
</span><br>
<span class="quotelev2">&gt; &gt; me and I can't claim to have &quot;done no worse&quot; in the changes I made.
</span><br>
<span class="quotelev2">&gt; &gt; But, this
</span><br>
<span class="quotelev2">&gt; &gt; spate of test failures doesn't indict me.  (Geez, sorry for being so
</span><br>
<span class="quotelev2">&gt; &gt; defensive.
</span><br>
<span class="quotelev2">&gt; &gt; I guess I just worry myself!)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Let's start with the recent test results you indicated.  Say,
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mtt/index.php?do_redir=973">http://www.open-mpi.org/mtt/index.php?do_redir=973</a> which shows these
</span><br>
<span class="quotelev2">&gt; &gt; failures:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 143 on IU_Sif
</span><br>
<span class="quotelev2">&gt; &gt;  28 on Sun/Linux (row #6 at that URL, I guess, but you said 34?)
</span><br>
<span class="quotelev2">&gt; &gt;   3 on Sun/SunOS (row #7)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But, I guess we agreed that the Sun/Linux and Sun/SunOS failures are
</span><br>
<span class="quotelev2">&gt; &gt; with 1.3.1,
</span><br>
<span class="quotelev2">&gt; &gt; and therefore are not attributable to single-queue changes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So now we look at recent history for IU_Sif.  E.g.,
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mtt/index.php?do_redir=975">http://www.open-mpi.org/mtt/index.php?do_redir=975</a>
</span><br>
<span class="quotelev2">&gt; &gt; Here is what I see:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  # MPI name           MPI version    MPI install Test build Test run
</span><br>
<span class="quotelev2">&gt; &gt;                                      Pass Fail   Pass Fail  Pass
</span><br>
<span class="quotelev2">&gt; &gt; Fail    pass:fail ratio
</span><br>
<span class="quotelev2">&gt; &gt;  1 ompi-nightly-trunk 1.4a1r20771     6    0     24     0   10585
</span><br>
<span class="quotelev2">&gt; &gt; 11           962
</span><br>
<span class="quotelev2">&gt; &gt;  2 ompi-nightly-trunk 1.4a1r20777     6    0     24     0   11880
</span><br>
<span class="quotelev2">&gt; &gt; 20           594
</span><br>
<span class="quotelev2">&gt; &gt;  3 ompi-nightly-trunk 1.4a1r20781    12    0     48     0   23759
</span><br>
<span class="quotelev2">&gt; &gt; 95           250
</span><br>
<span class="quotelev2">&gt; &gt;  4 ompi-nightly-trunk 1.4a1r20793    12    0     48     0   23822
</span><br>
<span class="quotelev2">&gt; &gt; 61           390
</span><br>
<span class="quotelev2">&gt; &gt;  5 ompi-nightly-trunk 1.4a1r20828     8    0     28     8   22893
</span><br>
<span class="quotelev2">&gt; &gt; 51           448
</span><br>
<span class="quotelev2">&gt; &gt;  6 ompi-nightly-trunk 1.4a1r20834     6    0     20     4   11442
</span><br>
<span class="quotelev2">&gt; &gt; 55           208
</span><br>
<span class="quotelev2">&gt; &gt;  7 ompi-nightly-trunk 1.4a1r20837    18    0     72     0   34084
</span><br>
<span class="quotelev2">&gt; &gt; 157           217
</span><br>
<span class="quotelev2">&gt; &gt;  8 ompi-nightly-trunk 1.4a1r20859     2    0     12     0   11900
</span><br>
<span class="quotelev2">&gt; &gt; 30           396
</span><br>
<span class="quotelev2">&gt; &gt;  9 ompi-nightly-trunk 1.4a1r20884     6    0     24     0   11843
</span><br>
<span class="quotelev2">&gt; &gt; 59           200
</span><br>
<span class="quotelev2">&gt; &gt; 10 ompi-nightly-v1.3  1.3.1rc5r20730 20    0     71     0   25108
</span><br>
<span class="quotelev2">&gt; &gt; 252            99
</span><br>
<span class="quotelev2">&gt; &gt; 11 ompi-nightly-v1.3  1.3.1rc5r20794  5    0     18     0    7332
</span><br>
<span class="quotelev2">&gt; &gt; 112            65
</span><br>
<span class="quotelev2">&gt; &gt; 12 ompi-nightly-v1.3  1.3.1rc5r20810  5    0     18     0    6813
</span><br>
<span class="quotelev2">&gt; &gt; 75            90
</span><br>
<span class="quotelev2">&gt; &gt; 13 ompi-nightly-v1.3  1.3.1rc5r20826 26    0     96     0   37205
</span><br>
<span class="quotelev2">&gt; &gt; 3108            11
</span><br>
<span class="quotelev2">&gt; &gt; 14 ompi-nightly-v1.3  1.3.2a1r20855   1    0      6     0     296
</span><br>
<span class="quotelev2">&gt; &gt; 107             2
</span><br>
<span class="quotelev2">&gt; &gt; 15 ompi-nightly-v1.3  1.3.2a1r20880   5    0     18     0    5825
</span><br>
<span class="quotelev2">&gt; &gt; 143            40
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I added that last &quot;pass:fail ratio&quot; column.  The run you indicate
</span><br>
<span class="quotelev2">&gt; &gt; (row #15) indeed
</span><br>
<span class="quotelev2">&gt; &gt; has a dramatically low pass:fail ratio, but not *THAT* low.  E.g.,
</span><br>
<span class="quotelev2">&gt; &gt; the first 1.3.1
</span><br>
<span class="quotelev2">&gt; &gt; run we see (row #10) is certainly of the same order of magnitude.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We can compare those two revs in greater detail.  I see this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  # Suite    np Pass Fail       r20730
</span><br>
<span class="quotelev2">&gt; &gt;  1 ibm      16   0   32
</span><br>
<span class="quotelev2">&gt; &gt;  2 intel    16   0  123
</span><br>
<span class="quotelev2">&gt; &gt;  3 iu_ft_cr 16   0    3
</span><br>
<span class="quotelev2">&gt; &gt;  4 onesided 10   0   16
</span><br>
<span class="quotelev2">&gt; &gt;  5 onesided 12   0   32
</span><br>
<span class="quotelev2">&gt; &gt;  6 onesided 14   0   24
</span><br>
<span class="quotelev2">&gt; &gt;  7 onesided 16   0   22
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  # Suite    np Pass Fail       r20880
</span><br>
<span class="quotelev2">&gt; &gt;  1 ibm      16   0   27
</span><br>
<span class="quotelev2">&gt; &gt;  2 intel    16   0   38
</span><br>
<span class="quotelev2">&gt; &gt;  3 iu_ft_cr 16   0    2
</span><br>
<span class="quotelev2">&gt; &gt;  4 onesided  2   0   10
</span><br>
<span class="quotelev2">&gt; &gt;  5 onesided  4   0    9
</span><br>
<span class="quotelev2">&gt; &gt;  6 onesided  6   0    9
</span><br>
<span class="quotelev2">&gt; &gt;  7 onesided  8   0    9
</span><br>
<span class="quotelev2">&gt; &gt;  8 onesided 10   0    9
</span><br>
<span class="quotelev2">&gt; &gt;  9 onesided 12   0   10
</span><br>
<span class="quotelev2">&gt; &gt; 10 onesided 14   0   10
</span><br>
<span class="quotelev2">&gt; &gt; 11 onesided 16   0   10
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; To me, r20880 doesn't particularly look worse than r20730.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We can deep dive on some of these results.  I looked at the &quot;ibm
</span><br>
<span class="quotelev2">&gt; &gt; np=16&quot; and &quot;onesided np=16&quot;
</span><br>
<span class="quotelev2">&gt; &gt; results a lot.  Indeed, r20880 shows lots of seg faults in
</span><br>
<span class="quotelev2">&gt; &gt; mca_btl_sm.so.  On the other hand,
</span><br>
<span class="quotelev2">&gt; &gt; they don't (so far as I can tell) arise in the add_procs stack.
</span><br>
<span class="quotelev2">&gt; &gt; Indeed, many aren't in MPI_Init
</span><br>
<span class="quotelev2">&gt; &gt; at all.  Some have to do with librdmacm.  In any case, I seem to
</span><br>
<span class="quotelev2">&gt; &gt; find very much the same stack
</span><br>
<span class="quotelev2">&gt; &gt; traces for 20730.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm still worried that my single-queue code either left a race
</span><br>
<span class="quotelev2">&gt; &gt; condition in the sm BTL start-up
</span><br>
<span class="quotelev2">&gt; &gt; or perhaps even made it worse.  The recent MTT failures, however,
</span><br>
<span class="quotelev2">&gt; &gt; don't seem to point to that.
</span><br>
<span class="quotelev2">&gt; &gt; They seem to point to problems other than the intermittent segv's
</span><br>
<span class="quotelev2">&gt; &gt; that Jeff and Terry were
</span><br>
<span class="quotelev2">&gt; &gt; seeing and the data does not seem to me to indicate an increased
</span><br>
<span class="quotelev2">&gt; &gt; frequency with 1.3.2.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Other opinions welcomed.
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="5715.php">Jeff Squyres: "[OMPI devel] cisco mtt failures"</a>
<li><strong>Previous message:</strong> <a href="5713.php">Ralph Castain: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5713.php">Ralph Castain: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5712.php">Josh Hursey: "Re: [OMPI devel] SM init failures"</a>
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
