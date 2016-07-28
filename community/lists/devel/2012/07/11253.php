<?
$subject_val = "Re: [OMPI devel] VampirTrace: time not increasing";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  6 15:37:57 2012" -->
<!-- isoreceived="20120706193757" -->
<!-- sent="Fri, 6 Jul 2012 19:37:51 +0000" -->
<!-- isosent="20120706193751" -->
<!-- name="Fluder, Eugene" -->
<!-- email="eugene.fluder_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] VampirTrace: time not increasing" -->
<!-- id="CC1CB2C3.2B34%eugene.fluder_at_mssm.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4FF6FCC9.3060503_at_tu-dresden.de" -->
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
<strong>Date:</strong> 2012-07-06 15:37:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11254.php">Eugene Loh: "[OMPI devel] ibm/collective/bcast_f08.f90"</a>
<li><strong>Previous message:</strong> <a href="11252.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  reduce_scatter_block failing on v1.7"</a>
<li><strong>In reply to:</strong> <a href="11248.php">Holger Mickler: "Re: [OMPI devel] VampirTrace: time not increasing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11250.php">Fluder, Eugene: "Re: [OMPI devel] VampirTrace: time not increasing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks. Now that I know what to look for, I should be able to figure it
<br>
out.
<br>
BTW, I switched the script that ultimately runs the mpiexec from tcsh to
<br>
bash and the problem went away. Not complaining but do you have any idea
<br>
why that might be?
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
<p><p><p><p><p><p><p><p>On 7/6/12 10:57 AM, &quot;Holger Mickler&quot; &lt;holger.mickler_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;Oh, I just realized that you are probably using the Open MPI version of
</span><br>
<span class="quotelev1">&gt;VT which
</span><br>
<span class="quotelev1">&gt;builds as part of the Open MPI build. I'm not 100% sure if the
</span><br>
<span class="quotelev1">&gt;modification of
</span><br>
<span class="quotelev1">&gt;config.h works as laid out, but it should... you need to look out for VT's
</span><br>
<span class="quotelev1">&gt;config.h then, not Open MPI's.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Holger
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On 07/06/2012 04:54 PM, Holger Mickler wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Gene,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; this error is often caused by insufficiently synchronized TSCs (time
</span><br>
<span class="quotelev2">&gt;&gt;stamp
</span><br>
<span class="quotelev2">&gt;&gt; counter) of different processors/cores.
</span><br>
<span class="quotelev2">&gt;&gt; When VT uses the TSC for timing the events (it does that by default),
</span><br>
<span class="quotelev2">&gt;&gt;and the
</span><br>
<span class="quotelev2">&gt;&gt; processes switch to another core during execution, it may well happen
</span><br>
<span class="quotelev2">&gt;&gt;that the
</span><br>
<span class="quotelev2">&gt;&gt; next recorded time stamp is earlier in time than the last one.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; One possibility to avoid this situation is pinning the processes to
</span><br>
<span class="quotelev2">&gt;&gt;cores - Open
</span><br>
<span class="quotelev2">&gt;&gt; MPI has functionality for realizing this, see
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=tuning#using-paffinity">http://www.open-mpi.org/faq/?category=tuning#using-paffinity</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If this is not feasible, you may use another clock source with VT which
</span><br>
<span class="quotelev2">&gt;&gt;provides
</span><br>
<span class="quotelev2">&gt;&gt; global time. To do this, you need to compile another version of VT. Run
</span><br>
<span class="quotelev2">&gt;&gt; configure as usual, then edit config.h: replace the value of
</span><br>
<span class="quotelev2">&gt;&gt; #define TIMER [...]
</span><br>
<span class="quotelev2">&gt;&gt; with e.g.
</span><br>
<span class="quotelev2">&gt;&gt; #define TIMER TIMER_CLOCK_GETTIME
</span><br>
<span class="quotelev2">&gt;&gt; or
</span><br>
<span class="quotelev2">&gt;&gt; #define TIMER TIMER_GETTIMEOFDAY
</span><br>
<span class="quotelev2">&gt;&gt; depending on what is available on your system. Be aware that the
</span><br>
<span class="quotelev2">&gt;&gt;resolution of
</span><br>
<span class="quotelev2">&gt;&gt; those clocks is not as high as the TSC's.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Have a look inside config.h at the place of the mentioned variables -
</span><br>
<span class="quotelev2">&gt;&gt;there is
</span><br>
<span class="quotelev2">&gt;&gt; some documentation there.
</span><br>
<span class="quotelev2">&gt;&gt; Afterwards, compile and install VT. Using this version, you should not
</span><br>
<span class="quotelev2">&gt;&gt;encounter
</span><br>
<span class="quotelev2">&gt;&gt; the errors anymore.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;   Holger
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 07/06/2012 04:04 PM, Fluder, Eugene wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I got the following error running a VT enabled run of AMBER. This was
</span><br>
<span class="quotelev3">&gt;&gt;&gt;reported
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in December of 2009  under almost identical conditions but the thread
</span><br>
<span class="quotelev3">&gt;&gt;&gt;does not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; contain a resolution. I reran the test with VT_UNIFY=no and it
</span><br>
<span class="quotelev3">&gt;&gt;&gt;completed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; normally. The same error occurred when I ran vtunify separately. Any
</span><br>
<span class="quotelev3">&gt;&gt;&gt;help?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Was this ever resolved?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gene
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [fludee01_at_node7-10 trace_noiox]$ vtunify 8 a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OTF ERROR in function OTF_WBuffer_setTimeAndProcess, file:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;OTF_WBuffer.c, line: 308:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  time not increasing. (t= 99459634, p= 6)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vtunify: Error: Could not read events of OTF stream [namestub
</span><br>
<span class="quotelev3">&gt;&gt;&gt;./a__ufy.tmp id 6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OTF ERROR in function OTF_WBuffer_setTimeAndProcess, file:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;OTF_WBuffer.c, line: 308:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  time not increasing. (t= 105413860, p= 5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vtunify: Error: Could not read events of OTF stream [namestub
</span><br>
<span class="quotelev3">&gt;&gt;&gt;./a__ufy.tmp id 5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OTF ERROR in function OTF_WBuffer_setTimeAndProcess, file:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;OTF_WBuffer.c, line: 308:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  time not increasing. (t= 103189146, p= 7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vtunify: Error: Could not read events of OTF stream [namestub
</span><br>
<span class="quotelev3">&gt;&gt;&gt;./a__ufy.tmp id 7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OTF ERROR in function OTF_WBuffer_setTimeAndProcess, file:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;OTF_WBuffer.c, line: 308:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  time not increasing. (t= 100509810, p= 8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vtunify: Error: Could not read events of OTF stream [namestub
</span><br>
<span class="quotelev3">&gt;&gt;&gt;./a__ufy.tmp id 8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vtunify: An error occurred during unifying events - Terminating ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- /Eugene M Fluder, Jr, PhD/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /Computational Scientist/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /Scientific Computing/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /The Mt. Sinai School of Medicine/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /One Gustave L. Levy Place, Box 1498/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /New York, NY 10029-6574/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /T: 212 659 8608/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /F: 646 537 8660/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /E: eugene.fluder_at_[hidden]/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; //
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- 
</span><br>
<span class="quotelev1">&gt;Dipl.-Inf. Holger Mickler
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Technische Universit&#228;t Dresden
</span><br>
<span class="quotelev1">&gt;Center for Information Services
</span><br>
<span class="quotelev1">&gt;and High Performance Computing (ZIH)
</span><br>
<span class="quotelev1">&gt;01062 Dresden
</span><br>
<span class="quotelev1">&gt;Germany
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Office:  Willers-Bau (WIL) A36
</span><br>
<span class="quotelev1">&gt;Tel.:    +49 (351) 463-37903
</span><br>
<span class="quotelev1">&gt;Fax:     +49 (351) 463-37773
</span><br>
<span class="quotelev1">&gt;E-Mail:  holger.mickler_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="11254.php">Eugene Loh: "[OMPI devel] ibm/collective/bcast_f08.f90"</a>
<li><strong>Previous message:</strong> <a href="11252.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  reduce_scatter_block failing on v1.7"</a>
<li><strong>In reply to:</strong> <a href="11248.php">Holger Mickler: "Re: [OMPI devel] VampirTrace: time not increasing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11250.php">Fluder, Eugene: "Re: [OMPI devel] VampirTrace: time not increasing"</a>
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
