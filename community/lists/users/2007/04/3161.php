<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr 27 10:05:36 2007" -->
<!-- isoreceived="20070427140536" -->
<!-- sent="Fri, 27 Apr 2007 10:05:31 -0400" -->
<!-- isosent="20070427140531" -->
<!-- name="Daniel Gruner" -->
<!-- email="dgruner_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bproc problems" -->
<!-- id="20070427100531.A10044_at_tequila.chem.utoronto.ca" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E7D3D771-680C-4C3C-9E5C-594DFBEAF34C_at_lanl.gov" -->
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
<strong>From:</strong> Daniel Gruner (<em>dgruner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-27 10:05:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3162.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_Accept / MPI::Comm::Accept problem."</a>
<li><strong>Previous message:</strong> <a href="3160.php">Daniel Gruner: "Re: [OMPI users] Compile WRFV2.2 with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="3154.php">gshipman: "Re: [OMPI users] bproc problems"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks to both you and David Gunter.  I disabled pty support and
<br>
it now works.  
<br>
<p>There is still the issue of the mpirun default being &quot;-byslot&quot;, which
<br>
causes all kinds of trouble.  Only by using &quot;-bynode&quot; do things work
<br>
properly.
<br>
<p>Daniel
<br>
<p>On Thu, Apr 26, 2007 at 02:28:33PM -0600, gshipman wrote:
<br>
<span class="quotelev1">&gt; There is a known issue on BProc 4 w.r.t. pty support. Open MPI by  
</span><br>
<span class="quotelev1">&gt; default will try to use ptys for I/O forwarding but will revert to  
</span><br>
<span class="quotelev1">&gt; pipes if ptys are not available.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can &quot;safely&quot; ignore the pty warnings, or you may want to rerun  
</span><br>
<span class="quotelev1">&gt; configure and add:
</span><br>
<span class="quotelev1">&gt; --disable-pty-support
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I say &quot;safely&quot; because my understanding is that some I/O data may be  
</span><br>
<span class="quotelev1">&gt; lost if pipes are used during abnormal termination.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Alternatively you might try getting pty support working, you need to  
</span><br>
<span class="quotelev1">&gt; configure ptys on the backend nodes.
</span><br>
<span class="quotelev1">&gt; You can then try the following code to test if it is working  
</span><br>
<span class="quotelev1">&gt; correctly, if this fails (it does on our BProc 4 cluster) you  
</span><br>
<span class="quotelev1">&gt; shouldn't use ptys on BProc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;pty.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;utmp.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;errno.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int
</span><br>
<span class="quotelev1">&gt; main(int argc, char *agrv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    int amaster, aslave;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    if (openpty(&amp;amaster, &amp;aslave, NULL, NULL, NULL) &lt; 0) {
</span><br>
<span class="quotelev1">&gt;      printf(&quot;openpty() failed with errno = %d, %s\n&quot;, errno, strerror 
</span><br>
<span class="quotelev1">&gt; (errno));
</span><br>
<span class="quotelev1">&gt;    } else {
</span><br>
<span class="quotelev1">&gt;      printf(&quot;openpty() succeeded\n&quot;);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    return 0;
</span><br>
<span class="quotelev1">&gt; }
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
<span class="quotelev1">&gt; On Apr 26, 2007, at 2:06 PM, Daniel Gruner wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have been testing OpenMPI 1.2, and now 1.2.1, on several BProc-
</span><br>
<span class="quotelev2">&gt; &gt; based clusters, and I have found some problems/issues.  All my
</span><br>
<span class="quotelev2">&gt; &gt; clusters have standard ethernet interconnects, either 100Base/T or
</span><br>
<span class="quotelev2">&gt; &gt; Gigabit, on standard switches.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The clusters are all running Clustermatic 5 (BProc 4.x), and range
</span><br>
<span class="quotelev2">&gt; &gt; from 32-bit Athlon, to 32-bit Xeon, to 64-bit Opteron.  In all cases
</span><br>
<span class="quotelev2">&gt; &gt; the same problems occur, identically.  I attach here the results
</span><br>
<span class="quotelev2">&gt; &gt; from &quot;ompi_info --all&quot; and the config.log, for my latest build on
</span><br>
<span class="quotelev2">&gt; &gt; an Opteron cluster, using the Pathscale compilers.  I had exactly
</span><br>
<span class="quotelev2">&gt; &gt; the same problems when using the vanilla GNU compilers.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Now for a description of the problem:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When running an mpi code (cpi.c, from the standard mpi examples, also
</span><br>
<span class="quotelev2">&gt; &gt; attached), using the mpirun defaults (e.g. -byslot), with a single
</span><br>
<span class="quotelev2">&gt; &gt; process:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 	sonoma:dgruner{134}&gt; mpirun -n 1 ./cpip
</span><br>
<span class="quotelev2">&gt; &gt; 	[n17:30019] odls_bproc: openpty failed, using pipes instead
</span><br>
<span class="quotelev2">&gt; &gt; 	Process 0 on n17
</span><br>
<span class="quotelev2">&gt; &gt; 	pi is approximately 3.1415926544231341, Error is 0.0000000008333410
</span><br>
<span class="quotelev2">&gt; &gt; 	wall clock time = 0.000199
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, if one tries to run more than one process, this bombs:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 	sonoma:dgruner{134}&gt; mpirun -n 2 ./cpip
</span><br>
<span class="quotelev2">&gt; &gt; 	.
</span><br>
<span class="quotelev2">&gt; &gt; 	.
</span><br>
<span class="quotelev2">&gt; &gt; 	.
</span><br>
<span class="quotelev2">&gt; &gt; 	[n21:30029] OOB: Connection to HNP lost
</span><br>
<span class="quotelev2">&gt; &gt; 	[n21:30029] OOB: Connection to HNP lost
</span><br>
<span class="quotelev2">&gt; &gt; 	[n21:30029] OOB: Connection to HNP lost
</span><br>
<span class="quotelev2">&gt; &gt; 	[n21:30029] OOB: Connection to HNP lost
</span><br>
<span class="quotelev2">&gt; &gt; 	[n21:30029] OOB: Connection to HNP lost
</span><br>
<span class="quotelev2">&gt; &gt; 	[n21:30029] OOB: Connection to HNP lost
</span><br>
<span class="quotelev2">&gt; &gt; 	.
</span><br>
<span class="quotelev2">&gt; &gt; 	. ad infinitum
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If one uses de option &quot;-bynode&quot;, things work:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 	sonoma:dgruner{145}&gt; mpirun -bynode -n 2 ./cpip
</span><br>
<span class="quotelev2">&gt; &gt; 	[n17:30055] odls_bproc: openpty failed, using pipes instead
</span><br>
<span class="quotelev2">&gt; &gt; 	Process 0 on n17
</span><br>
<span class="quotelev2">&gt; &gt; 	Process 1 on n21
</span><br>
<span class="quotelev2">&gt; &gt; 	pi is approximately 3.1415926544231318, Error is 0.0000000008333387
</span><br>
<span class="quotelev2">&gt; &gt; 	wall clock time = 0.010375
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Note that there is always the message about &quot;openpty failed, using  
</span><br>
<span class="quotelev2">&gt; &gt; pipes instead&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If I run more processes (on my 3-node cluster, with 2 cpus per  
</span><br>
<span class="quotelev2">&gt; &gt; node), the
</span><br>
<span class="quotelev2">&gt; &gt; openpty message appears repeatedly for the first node:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 	sonoma:dgruner{146}&gt; mpirun -bynode -n 6 ./cpip
</span><br>
<span class="quotelev2">&gt; &gt; 	[n17:30061] odls_bproc: openpty failed, using pipes instead
</span><br>
<span class="quotelev2">&gt; &gt; 	[n17:30061] odls_bproc: openpty failed, using pipes instead
</span><br>
<span class="quotelev2">&gt; &gt; 	Process 0 on n17
</span><br>
<span class="quotelev2">&gt; &gt; 	Process 2 on n49
</span><br>
<span class="quotelev2">&gt; &gt; 	Process 1 on n21
</span><br>
<span class="quotelev2">&gt; &gt; 	Process 5 on n49
</span><br>
<span class="quotelev2">&gt; &gt; 	Process 3 on n17
</span><br>
<span class="quotelev2">&gt; &gt; 	Process 4 on n21
</span><br>
<span class="quotelev2">&gt; &gt; 	pi is approximately 3.1415926544231239, Error is 0.0000000008333307
</span><br>
<span class="quotelev2">&gt; &gt; 	wall clock time = 0.050332
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Should I worry about the openpty failure?  I suspect that  
</span><br>
<span class="quotelev2">&gt; &gt; communications
</span><br>
<span class="quotelev2">&gt; &gt; may be slower this way.  Using the -byslot option always fails, so  
</span><br>
<span class="quotelev2">&gt; &gt; this
</span><br>
<span class="quotelev2">&gt; &gt; is a bug.  The same occurs for all the codes that I have tried,  
</span><br>
<span class="quotelev2">&gt; &gt; both simple
</span><br>
<span class="quotelev2">&gt; &gt; and complex.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for your attention to this.
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Daniel
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Dr. Daniel Gruner                        dgruner_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Dept. of Chemistry                       daniel.gruner_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; University of Toronto                    phone:  (416)-978-8689
</span><br>
<span class="quotelev2">&gt; &gt; 80 St. George Street                     fax:    (416)-978-5325
</span><br>
<span class="quotelev2">&gt; &gt; Toronto, ON  M5S 3H6, Canada             finger for PGP public key
</span><br>
<span class="quotelev2">&gt; &gt; &lt;cpi.c.gz&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;config.log.gz&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;ompiinfo.gz&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
-- 
Dr. Daniel Gruner                        dgruner_at_[hidden]
Dept. of Chemistry                       daniel.gruner_at_[hidden]
University of Toronto                    phone:  (416)-978-8689
80 St. George Street                     fax:    (416)-978-5325
Toronto, ON  M5S 3H6, Canada             finger for PGP public key
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3162.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_Accept / MPI::Comm::Accept problem."</a>
<li><strong>Previous message:</strong> <a href="3160.php">Daniel Gruner: "Re: [OMPI users] Compile WRFV2.2 with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="3154.php">gshipman: "Re: [OMPI users] bproc problems"</a>
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
