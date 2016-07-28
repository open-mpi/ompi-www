<?
$subject_val = "Re: [OMPI devel] VampirTrace: time not increasing";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  6 11:33:54 2012" -->
<!-- isoreceived="20120706153354" -->
<!-- sent="Fri, 6 Jul 2012 15:33:49 +0000" -->
<!-- isosent="20120706153349" -->
<!-- name="Fluder, Eugene" -->
<!-- email="eugene.fluder_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] VampirTrace: time not increasing" -->
<!-- id="CC1C7CF4.2938%eugene.fluder_at_mssm.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FF6FC17.7000402_at_tu-dresden.de" -->
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
<strong>From:</strong> Fluder, Eugene (<em>eugene.fluder_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-06 11:33:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11251.php">Eugene Loh: "[OMPI devel] reduce_scatter_block failing on v1.7"</a>
<li><strong>Previous message:</strong> <a href="11249.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  non-blocking barrier"</a>
<li><strong>In reply to:</strong> <a href="11245.php">Holger Mickler: "Re: [OMPI devel] VampirTrace: time not increasing"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Holger,
<br>
<p>Thanks. I appreciate the detail.
<br>
<p>Gene
<br>
-- 	Eugene M Fluder, Jr, PhD
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Computational Scientist
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Scientific Computing
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Mt. Sinai School of Medicine
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;One Gustave L. Levy Place, Box 1498
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;New York, NY 10029-6574
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;T: 212 659 8608
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;F: 646 537 8660
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E: eugene.fluder_at_[hidden]
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p><p><p><p><p><p><p><p>On 7/6/12 10:54 AM, &quot;Holger Mickler&quot; &lt;holger.mickler_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;Hi Gene,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;this error is often caused by insufficiently synchronized TSCs (time stamp
</span><br>
<span class="quotelev1">&gt;counter) of different processors/cores.
</span><br>
<span class="quotelev1">&gt;When VT uses the TSC for timing the events (it does that by default), and
</span><br>
<span class="quotelev1">&gt;the
</span><br>
<span class="quotelev1">&gt;processes switch to another core during execution, it may well happen
</span><br>
<span class="quotelev1">&gt;that the
</span><br>
<span class="quotelev1">&gt;next recorded time stamp is earlier in time than the last one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;One possibility to avoid this situation is pinning the processes to cores
</span><br>
<span class="quotelev1">&gt;- Open
</span><br>
<span class="quotelev1">&gt;MPI has functionality for realizing this, see
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/faq/?category=tuning#using-paffinity">http://www.open-mpi.org/faq/?category=tuning#using-paffinity</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;If this is not feasible, you may use another clock source with VT which
</span><br>
<span class="quotelev1">&gt;provides
</span><br>
<span class="quotelev1">&gt;global time. To do this, you need to compile another version of VT. Run
</span><br>
<span class="quotelev1">&gt;configure as usual, then edit config.h: replace the value of
</span><br>
<span class="quotelev1">&gt;#define TIMER [...]
</span><br>
<span class="quotelev1">&gt;with e.g.
</span><br>
<span class="quotelev1">&gt;#define TIMER TIMER_CLOCK_GETTIME
</span><br>
<span class="quotelev1">&gt;or
</span><br>
<span class="quotelev1">&gt;#define TIMER TIMER_GETTIMEOFDAY
</span><br>
<span class="quotelev1">&gt;depending on what is available on your system. Be aware that the
</span><br>
<span class="quotelev1">&gt;resolution of
</span><br>
<span class="quotelev1">&gt;those clocks is not as high as the TSC's.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Have a look inside config.h at the place of the mentioned variables -
</span><br>
<span class="quotelev1">&gt;there is
</span><br>
<span class="quotelev1">&gt;some documentation there.
</span><br>
<span class="quotelev1">&gt;Afterwards, compile and install VT. Using this version, you should not
</span><br>
<span class="quotelev1">&gt;encounter
</span><br>
<span class="quotelev1">&gt;the errors anymore.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Regards,
</span><br>
<span class="quotelev1">&gt;  Holger
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On 07/06/2012 04:04 PM, Fluder, Eugene wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I got the following error running a VT enabled run of AMBER. This was
</span><br>
<span class="quotelev2">&gt;&gt;reported
</span><br>
<span class="quotelev2">&gt;&gt; in December of 2009  under almost identical conditions but the thread
</span><br>
<span class="quotelev2">&gt;&gt;does not
</span><br>
<span class="quotelev2">&gt;&gt; contain a resolution. I reran the test with VT_UNIFY=no and it completed
</span><br>
<span class="quotelev2">&gt;&gt; normally. The same error occurred when I ran vtunify separately. Any
</span><br>
<span class="quotelev2">&gt;&gt;help?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Was this ever resolved?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Gene
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [fludee01_at_node7-10 trace_noiox]$ vtunify 8 a
</span><br>
<span class="quotelev2">&gt;&gt; OTF ERROR in function OTF_WBuffer_setTimeAndProcess, file:
</span><br>
<span class="quotelev2">&gt;&gt;OTF_WBuffer.c, line: 308:
</span><br>
<span class="quotelev2">&gt;&gt;  time not increasing. (t= 99459634, p= 6)
</span><br>
<span class="quotelev2">&gt;&gt; vtunify: Error: Could not read events of OTF stream [namestub
</span><br>
<span class="quotelev2">&gt;&gt;./a__ufy.tmp id 6]
</span><br>
<span class="quotelev2">&gt;&gt; OTF ERROR in function OTF_WBuffer_setTimeAndProcess, file:
</span><br>
<span class="quotelev2">&gt;&gt;OTF_WBuffer.c, line: 308:
</span><br>
<span class="quotelev2">&gt;&gt;  time not increasing. (t= 105413860, p= 5)
</span><br>
<span class="quotelev2">&gt;&gt; vtunify: Error: Could not read events of OTF stream [namestub
</span><br>
<span class="quotelev2">&gt;&gt;./a__ufy.tmp id 5]
</span><br>
<span class="quotelev2">&gt;&gt; OTF ERROR in function OTF_WBuffer_setTimeAndProcess, file:
</span><br>
<span class="quotelev2">&gt;&gt;OTF_WBuffer.c, line: 308:
</span><br>
<span class="quotelev2">&gt;&gt;  time not increasing. (t= 103189146, p= 7)
</span><br>
<span class="quotelev2">&gt;&gt; vtunify: Error: Could not read events of OTF stream [namestub
</span><br>
<span class="quotelev2">&gt;&gt;./a__ufy.tmp id 7]
</span><br>
<span class="quotelev2">&gt;&gt; OTF ERROR in function OTF_WBuffer_setTimeAndProcess, file:
</span><br>
<span class="quotelev2">&gt;&gt;OTF_WBuffer.c, line: 308:
</span><br>
<span class="quotelev2">&gt;&gt;  time not increasing. (t= 100509810, p= 8)
</span><br>
<span class="quotelev2">&gt;&gt; vtunify: Error: Could not read events of OTF stream [namestub
</span><br>
<span class="quotelev2">&gt;&gt;./a__ufy.tmp id 8]
</span><br>
<span class="quotelev2">&gt;&gt; vtunify: An error occurred during unifying events - Terminating ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- /Eugene M Fluder, Jr, PhD/
</span><br>
<span class="quotelev2">&gt;&gt; /Computational Scientist/
</span><br>
<span class="quotelev2">&gt;&gt; /Scientific Computing/
</span><br>
<span class="quotelev2">&gt;&gt; /
</span><br>
<span class="quotelev2">&gt;&gt; /
</span><br>
<span class="quotelev2">&gt;&gt; /The Mt. Sinai School of Medicine/
</span><br>
<span class="quotelev2">&gt;&gt; /One Gustave L. Levy Place, Box 1498/
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /New York, NY 10029-6574/
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /
</span><br>
<span class="quotelev2">&gt;&gt; /
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /T: 212 659 8608/
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /F: 646 537 8660/
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /E: eugene.fluder_at_[hidden]/
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /
</span><br>
<span class="quotelev2">&gt;&gt; /
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; //
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11251.php">Eugene Loh: "[OMPI devel] reduce_scatter_block failing on v1.7"</a>
<li><strong>Previous message:</strong> <a href="11249.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  non-blocking barrier"</a>
<li><strong>In reply to:</strong> <a href="11245.php">Holger Mickler: "Re: [OMPI devel] VampirTrace: time not increasing"</a>
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
