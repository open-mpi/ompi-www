<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 26 16:33:07 2007" -->
<!-- isoreceived="20070426203307" -->
<!-- sent="Thu, 26 Apr 2007 14:28:33 -0600" -->
<!-- isosent="20070426202833" -->
<!-- name="gshipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bproc problems" -->
<!-- id="E7D3D771-680C-4C3C-9E5C-594DFBEAF34C_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070426160646.J8327_at_tequila.chem.utoronto.ca" -->
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
<strong>From:</strong> gshipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-26 16:28:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3155.php">Jiming Jin: "[OMPI users] Compile WRFV2.2 with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="3153.php">David Gunter: "Re: [OMPI users] bproc problems"</a>
<li><strong>In reply to:</strong> <a href="3152.php">Daniel Gruner: "[OMPI users] bproc problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3161.php">Daniel Gruner: "Re: [OMPI users] bproc problems"</a>
<li><strong>Reply:</strong> <a href="3161.php">Daniel Gruner: "Re: [OMPI users] bproc problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is a known issue on BProc 4 w.r.t. pty support. Open MPI by  
<br>
default will try to use ptys for I/O forwarding but will revert to  
<br>
pipes if ptys are not available.
<br>
<p>You can &quot;safely&quot; ignore the pty warnings, or you may want to rerun  
<br>
configure and add:
<br>
--disable-pty-support
<br>
<p>I say &quot;safely&quot; because my understanding is that some I/O data may be  
<br>
lost if pipes are used during abnormal termination.
<br>
<p>Alternatively you might try getting pty support working, you need to  
<br>
configure ptys on the backend nodes.
<br>
You can then try the following code to test if it is working  
<br>
correctly, if this fails (it does on our BProc 4 cluster) you  
<br>
shouldn't use ptys on BProc.
<br>
<p><p>#include &lt;pty.h&gt;
<br>
#include &lt;utmp.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;string.h&gt;
<br>
#include &lt;errno.h&gt;
<br>
<p>int
<br>
main(int argc, char *agrv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int amaster, aslave;
<br>
<p>&nbsp;&nbsp;&nbsp;if (openpty(&amp;amaster, &amp;aslave, NULL, NULL, NULL) &lt; 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;openpty() failed with errno = %d, %s\n&quot;, errno, strerror 
<br>
(errno));
<br>
&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;openpty() succeeded\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p><p><p><p><p>On Apr 26, 2007, at 2:06 PM, Daniel Gruner wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have been testing OpenMPI 1.2, and now 1.2.1, on several BProc-
</span><br>
<span class="quotelev1">&gt; based clusters, and I have found some problems/issues.  All my
</span><br>
<span class="quotelev1">&gt; clusters have standard ethernet interconnects, either 100Base/T or
</span><br>
<span class="quotelev1">&gt; Gigabit, on standard switches.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The clusters are all running Clustermatic 5 (BProc 4.x), and range
</span><br>
<span class="quotelev1">&gt; from 32-bit Athlon, to 32-bit Xeon, to 64-bit Opteron.  In all cases
</span><br>
<span class="quotelev1">&gt; the same problems occur, identically.  I attach here the results
</span><br>
<span class="quotelev1">&gt; from &quot;ompi_info --all&quot; and the config.log, for my latest build on
</span><br>
<span class="quotelev1">&gt; an Opteron cluster, using the Pathscale compilers.  I had exactly
</span><br>
<span class="quotelev1">&gt; the same problems when using the vanilla GNU compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now for a description of the problem:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When running an mpi code (cpi.c, from the standard mpi examples, also
</span><br>
<span class="quotelev1">&gt; attached), using the mpirun defaults (e.g. -byslot), with a single
</span><br>
<span class="quotelev1">&gt; process:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	sonoma:dgruner{134}&gt; mpirun -n 1 ./cpip
</span><br>
<span class="quotelev1">&gt; 	[n17:30019] odls_bproc: openpty failed, using pipes instead
</span><br>
<span class="quotelev1">&gt; 	Process 0 on n17
</span><br>
<span class="quotelev1">&gt; 	pi is approximately 3.1415926544231341, Error is 0.0000000008333410
</span><br>
<span class="quotelev1">&gt; 	wall clock time = 0.000199
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, if one tries to run more than one process, this bombs:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	sonoma:dgruner{134}&gt; mpirun -n 2 ./cpip
</span><br>
<span class="quotelev1">&gt; 	.
</span><br>
<span class="quotelev1">&gt; 	.
</span><br>
<span class="quotelev1">&gt; 	.
</span><br>
<span class="quotelev1">&gt; 	[n21:30029] OOB: Connection to HNP lost
</span><br>
<span class="quotelev1">&gt; 	[n21:30029] OOB: Connection to HNP lost
</span><br>
<span class="quotelev1">&gt; 	[n21:30029] OOB: Connection to HNP lost
</span><br>
<span class="quotelev1">&gt; 	[n21:30029] OOB: Connection to HNP lost
</span><br>
<span class="quotelev1">&gt; 	[n21:30029] OOB: Connection to HNP lost
</span><br>
<span class="quotelev1">&gt; 	[n21:30029] OOB: Connection to HNP lost
</span><br>
<span class="quotelev1">&gt; 	.
</span><br>
<span class="quotelev1">&gt; 	. ad infinitum
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If one uses de option &quot;-bynode&quot;, things work:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	sonoma:dgruner{145}&gt; mpirun -bynode -n 2 ./cpip
</span><br>
<span class="quotelev1">&gt; 	[n17:30055] odls_bproc: openpty failed, using pipes instead
</span><br>
<span class="quotelev1">&gt; 	Process 0 on n17
</span><br>
<span class="quotelev1">&gt; 	Process 1 on n21
</span><br>
<span class="quotelev1">&gt; 	pi is approximately 3.1415926544231318, Error is 0.0000000008333387
</span><br>
<span class="quotelev1">&gt; 	wall clock time = 0.010375
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that there is always the message about &quot;openpty failed, using  
</span><br>
<span class="quotelev1">&gt; pipes instead&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I run more processes (on my 3-node cluster, with 2 cpus per  
</span><br>
<span class="quotelev1">&gt; node), the
</span><br>
<span class="quotelev1">&gt; openpty message appears repeatedly for the first node:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	sonoma:dgruner{146}&gt; mpirun -bynode -n 6 ./cpip
</span><br>
<span class="quotelev1">&gt; 	[n17:30061] odls_bproc: openpty failed, using pipes instead
</span><br>
<span class="quotelev1">&gt; 	[n17:30061] odls_bproc: openpty failed, using pipes instead
</span><br>
<span class="quotelev1">&gt; 	Process 0 on n17
</span><br>
<span class="quotelev1">&gt; 	Process 2 on n49
</span><br>
<span class="quotelev1">&gt; 	Process 1 on n21
</span><br>
<span class="quotelev1">&gt; 	Process 5 on n49
</span><br>
<span class="quotelev1">&gt; 	Process 3 on n17
</span><br>
<span class="quotelev1">&gt; 	Process 4 on n21
</span><br>
<span class="quotelev1">&gt; 	pi is approximately 3.1415926544231239, Error is 0.0000000008333307
</span><br>
<span class="quotelev1">&gt; 	wall clock time = 0.050332
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Should I worry about the openpty failure?  I suspect that  
</span><br>
<span class="quotelev1">&gt; communications
</span><br>
<span class="quotelev1">&gt; may be slower this way.  Using the -byslot option always fails, so  
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev1">&gt; is a bug.  The same occurs for all the codes that I have tried,  
</span><br>
<span class="quotelev1">&gt; both simple
</span><br>
<span class="quotelev1">&gt; and complex.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your attention to this.
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Daniel
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dr. Daniel Gruner                        dgruner_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Dept. of Chemistry                       daniel.gruner_at_[hidden]
</span><br>
<span class="quotelev1">&gt; University of Toronto                    phone:  (416)-978-8689
</span><br>
<span class="quotelev1">&gt; 80 St. George Street                     fax:    (416)-978-5325
</span><br>
<span class="quotelev1">&gt; Toronto, ON  M5S 3H6, Canada             finger for PGP public key
</span><br>
<span class="quotelev1">&gt; &lt;cpi.c.gz&gt;
</span><br>
<span class="quotelev1">&gt; &lt;config.log.gz&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ompiinfo.gz&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3155.php">Jiming Jin: "[OMPI users] Compile WRFV2.2 with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="3153.php">David Gunter: "Re: [OMPI users] bproc problems"</a>
<li><strong>In reply to:</strong> <a href="3152.php">Daniel Gruner: "[OMPI users] bproc problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3161.php">Daniel Gruner: "Re: [OMPI users] bproc problems"</a>
<li><strong>Reply:</strong> <a href="3161.php">Daniel Gruner: "Re: [OMPI users] bproc problems"</a>
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
