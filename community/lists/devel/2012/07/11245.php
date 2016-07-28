<?
$subject_val = "Re: [OMPI devel] VampirTrace: time not increasing";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  6 10:54:16 2012" -->
<!-- isoreceived="20120706145416" -->
<!-- sent="Fri, 06 Jul 2012 16:54:15 +0200" -->
<!-- isosent="20120706145415" -->
<!-- name="Holger Mickler" -->
<!-- email="holger.mickler_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] VampirTrace: time not increasing" -->
<!-- id="4FF6FC17.7000402_at_tu-dresden.de" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CC1C68C2.2881%eugene.fluder_at_mssm.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] VampirTrace: time not increasing<br>
<strong>From:</strong> Holger Mickler (<em>holger.mickler_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-06 10:54:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11246.php">Richard Graham: "Re: [OMPI devel] non-blocking barrier"</a>
<li><strong>Previous message:</strong> <a href="11244.php">Fluder, Eugene: "[OMPI devel] VampirTrace: time not increasing"</a>
<li><strong>In reply to:</strong> <a href="11244.php">Fluder, Eugene: "[OMPI devel] VampirTrace: time not increasing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11248.php">Holger Mickler: "Re: [OMPI devel] VampirTrace: time not increasing"</a>
<li><strong>Reply:</strong> <a href="11248.php">Holger Mickler: "Re: [OMPI devel] VampirTrace: time not increasing"</a>
<li><strong>Reply:</strong> <a href="11250.php">Fluder, Eugene: "Re: [OMPI devel] VampirTrace: time not increasing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gene,
<br>
<p>this error is often caused by insufficiently synchronized TSCs (time stamp
<br>
counter) of different processors/cores.
<br>
When VT uses the TSC for timing the events (it does that by default), and the
<br>
processes switch to another core during execution, it may well happen that the
<br>
next recorded time stamp is earlier in time than the last one.
<br>
<p>One possibility to avoid this situation is pinning the processes to cores - Open
<br>
MPI has functionality for realizing this, see
<br>
<a href="http://www.open-mpi.org/faq/?category=tuning#using-paffinity">http://www.open-mpi.org/faq/?category=tuning#using-paffinity</a>
<br>
<p>If this is not feasible, you may use another clock source with VT which provides
<br>
global time. To do this, you need to compile another version of VT. Run
<br>
configure as usual, then edit config.h: replace the value of
<br>
#define TIMER [...]
<br>
with e.g.
<br>
#define TIMER TIMER_CLOCK_GETTIME
<br>
or
<br>
#define TIMER TIMER_GETTIMEOFDAY
<br>
depending on what is available on your system. Be aware that the resolution of
<br>
those clocks is not as high as the TSC's.
<br>
<p>Have a look inside config.h at the place of the mentioned variables - there is
<br>
some documentation there.
<br>
Afterwards, compile and install VT. Using this version, you should not encounter
<br>
the errors anymore.
<br>
<p>Regards,
<br>
&nbsp;&nbsp;Holger
<br>
<p><p><p><p>On 07/06/2012 04:04 PM, Fluder, Eugene wrote:
<br>
<span class="quotelev1">&gt; I got the following error running a VT enabled run of AMBER. This was reported
</span><br>
<span class="quotelev1">&gt; in December of 2009  under almost identical conditions but the thread does not
</span><br>
<span class="quotelev1">&gt; contain a resolution. I reran the test with VT_UNIFY=no and it completed
</span><br>
<span class="quotelev1">&gt; normally. The same error occurred when I ran vtunify separately. Any help?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Was this ever resolved?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gene
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [fludee01_at_node7-10 trace_noiox]$ vtunify 8 a
</span><br>
<span class="quotelev1">&gt; OTF ERROR in function OTF_WBuffer_setTimeAndProcess, file: OTF_WBuffer.c, line: 308:
</span><br>
<span class="quotelev1">&gt;  time not increasing. (t= 99459634, p= 6)
</span><br>
<span class="quotelev1">&gt; vtunify: Error: Could not read events of OTF stream [namestub ./a__ufy.tmp id 6]
</span><br>
<span class="quotelev1">&gt; OTF ERROR in function OTF_WBuffer_setTimeAndProcess, file: OTF_WBuffer.c, line: 308:
</span><br>
<span class="quotelev1">&gt;  time not increasing. (t= 105413860, p= 5)
</span><br>
<span class="quotelev1">&gt; vtunify: Error: Could not read events of OTF stream [namestub ./a__ufy.tmp id 5]
</span><br>
<span class="quotelev1">&gt; OTF ERROR in function OTF_WBuffer_setTimeAndProcess, file: OTF_WBuffer.c, line: 308:
</span><br>
<span class="quotelev1">&gt;  time not increasing. (t= 103189146, p= 7)
</span><br>
<span class="quotelev1">&gt; vtunify: Error: Could not read events of OTF stream [namestub ./a__ufy.tmp id 7]
</span><br>
<span class="quotelev1">&gt; OTF ERROR in function OTF_WBuffer_setTimeAndProcess, file: OTF_WBuffer.c, line: 308:
</span><br>
<span class="quotelev1">&gt;  time not increasing. (t= 100509810, p= 8)
</span><br>
<span class="quotelev1">&gt; vtunify: Error: Could not read events of OTF stream [namestub ./a__ufy.tmp id 8]
</span><br>
<span class="quotelev1">&gt; vtunify: An error occurred during unifying events - Terminating ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- /Eugene M Fluder, Jr, PhD/
</span><br>
<span class="quotelev1">&gt; /Computational Scientist/
</span><br>
<span class="quotelev1">&gt; /Scientific Computing/
</span><br>
<span class="quotelev1">&gt; /
</span><br>
<span class="quotelev1">&gt; /
</span><br>
<span class="quotelev1">&gt; /The Mt. Sinai School of Medicine/
</span><br>
<span class="quotelev1">&gt; /One Gustave L. Levy Place, Box 1498/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /New York, NY 10029-6574/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /
</span><br>
<span class="quotelev1">&gt; /
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /T: 212 659 8608/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /F: 646 537 8660/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /E: eugene.fluder_at_[hidden]/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /
</span><br>
<span class="quotelev1">&gt; /
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; //
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11246.php">Richard Graham: "Re: [OMPI devel] non-blocking barrier"</a>
<li><strong>Previous message:</strong> <a href="11244.php">Fluder, Eugene: "[OMPI devel] VampirTrace: time not increasing"</a>
<li><strong>In reply to:</strong> <a href="11244.php">Fluder, Eugene: "[OMPI devel] VampirTrace: time not increasing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11248.php">Holger Mickler: "Re: [OMPI devel] VampirTrace: time not increasing"</a>
<li><strong>Reply:</strong> <a href="11248.php">Holger Mickler: "Re: [OMPI devel] VampirTrace: time not increasing"</a>
<li><strong>Reply:</strong> <a href="11250.php">Fluder, Eugene: "Re: [OMPI devel] VampirTrace: time not increasing"</a>
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
