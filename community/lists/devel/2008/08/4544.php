<?
$subject_val = "Re: [OMPI devel] OMPI 1.3 problems";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  4 19:59:05 2008" -->
<!-- isoreceived="20080804235905" -->
<!-- sent="Mon, 4 Aug 2008 17:58:48 -0600" -->
<!-- isosent="20080804235848" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI 1.3 problems" -->
<!-- id="7C1AC4D3-40A2-4962-8767-DB6EA8CD2973_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C6EC0987-75BC-462A-A439-13641DD9DBD8_at_computer.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI 1.3 problems<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-04 19:58:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4545.php">Greg Watson: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<li><strong>Previous message:</strong> <a href="4543.php">Greg Watson: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<li><strong>In reply to:</strong> <a href="4543.php">Greg Watson: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4545.php">Greg Watson: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<li><strong>Reply:</strong> <a href="4545.php">Greg Watson: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see one difference, and it probably does lead to Terry's cited  
<br>
ticket. I always run -mca btl ^sm since I'm only testing  
<br>
functionality, not performance.
<br>
<p>Give that a try and see if it completes. If so, then the problem  
<br>
probably is related to the ticket cited by Terry. Otherwise, we'll  
<br>
have to consider other options.
<br>
<p>Ralph
<br>
<p>On Aug 4, 2008, at 5:50 PM, Greg Watson wrote:
<br>
<p><span class="quotelev1">&gt; Configuring with ./configure --prefix=/usr/local/openmpi-1.3-devel -- 
</span><br>
<span class="quotelev1">&gt; with-platform=contrib/platform/lanl/macosx-dynamic --disable-io-romio
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Recompiling the app, then running with mpirun -np 5 ./shallow
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All processes show R+ as their status. If I attach gdb to a worker I  
</span><br>
<span class="quotelev1">&gt; get the following stack trace:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) where
</span><br>
<span class="quotelev1">&gt; #0  0x9045e58a in swtch_pri ()
</span><br>
<span class="quotelev1">&gt; #1  0x904ccbc1 in sched_yield ()
</span><br>
<span class="quotelev1">&gt; #2  0x000f6480 in opal_progress () at runtime/opal_progress.c:220
</span><br>
<span class="quotelev1">&gt; #3  0x004bb0bc in opal_condition_wait ()
</span><br>
<span class="quotelev1">&gt; #4  0x004bca5c in ompi_request_wait_completion ()
</span><br>
<span class="quotelev1">&gt; #5  0x004bc92a in mca_pml_ob1_send ()
</span><br>
<span class="quotelev1">&gt; #6  0x003cdcab in MPI_Send ()
</span><br>
<span class="quotelev1">&gt; #7  0x0000453f in send_updated_ds (res_type=0x5040, jstart=8,  
</span><br>
<span class="quotelev1">&gt; jend=11, ds=0xbfff85b0, indx=57, master_id=0) at worker.c:214
</span><br>
<span class="quotelev1">&gt; #8  0x0000444d in worker () at worker.c:185
</span><br>
<span class="quotelev1">&gt; #9  0x00002e0b in main (argc=1, argv=0xbffff0b8) at main.c:90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The master process shows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) where
</span><br>
<span class="quotelev1">&gt; #0  0x9045e58a in swtch_pri ()
</span><br>
<span class="quotelev1">&gt; #1  0x904ccbc1 in sched_yield ()
</span><br>
<span class="quotelev1">&gt; #2  0x000f6480 in opal_progress () at runtime/opal_progress.c:220
</span><br>
<span class="quotelev1">&gt; #3  0x004ba8bb in opal_condition_wait ()
</span><br>
<span class="quotelev1">&gt; #4  0x004ba6e4 in ompi_request_wait_completion ()
</span><br>
<span class="quotelev1">&gt; #5  0x004ba589 in mca_pml_ob1_recv ()
</span><br>
<span class="quotelev1">&gt; #6  0x003c80aa in MPI_Recv ()
</span><br>
<span class="quotelev1">&gt; #7  0x0000354c in update_global_ds (res_type=0x5040, indx=57,  
</span><br>
<span class="quotelev1">&gt; ds=0xbfffd068) at main.c:257
</span><br>
<span class="quotelev1">&gt; #8  0x00003334 in main (argc=1, argv=0xbffff0b8) at main.c:195
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Seems to be stuck in communication.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 4, 2008, at 6:12 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you tell us how you are configuring and your command line? As I  
</span><br>
<span class="quotelev2">&gt;&gt; said, I'm having no problem running your code  on my Mac w/10.5,  
</span><br>
<span class="quotelev2">&gt;&gt; both PowerPC and Intel.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 4, 2008, at 3:10 PM, Greg Watson wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes the application does sends/receives. No, it doesn't seem to be  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; getting past MPI_Init.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've reinstalled from a completely new 1.3 branch. Still hangs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 4, 2008, at 4:45 PM, Terry Dontje wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Are you doing any communications?  Have you gotten past  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Init?  Could
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; your issue be related to the following ticket?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/1378">https://svn.open-mpi.org/trac/ompi/ticket/1378</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --td
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Greg Watson wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm seeing the same behavior on trunk as 1.3. The program just  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hangs.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Aug 4, 2008, at 2:25 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Well, I unfortunately cannot test this right now Greg - the 1.3
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; branch won't build due to a problem with the man page  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; installation
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; script. The fix is in the trunk, but hasn't migrated across yet.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; :-//
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; My guess is that you are caught on some stage where the hanging  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; bugs
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; hadn't been fixed, but you cannot update to the current head of  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 1.3 branch as it won't compile. All I can suggest is shifting  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; to the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; trunk (which definitely works) for now as the man page fix should
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; migrate soon.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Aug 4, 2008, at 12:12 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Depending upon the r-level, there was a problem for awhile  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; with the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; system hanging that was caused by a couple of completely  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; unrelated
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; issues. I believe these have been fixed now - at least, it is  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; fixed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on the trunk for me under that same system. I'll check 1.3 now  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; - it
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; could be that some commits are missing over there.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Aug 4, 2008, at 12:06 PM, Greg Watson wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I have a fairly simple test program that runs fine under 1.2 on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MacOS X 10.5 . When I recompile and run it under 1.3 (head of  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1.3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; branch) it just hangs.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; They are both built using
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --with-platform=contrib/platform/lanl/macosx-dynamic. For  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1.3, I've
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; added --disable-io-romio.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Any suggestions?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="4545.php">Greg Watson: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<li><strong>Previous message:</strong> <a href="4543.php">Greg Watson: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<li><strong>In reply to:</strong> <a href="4543.php">Greg Watson: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4545.php">Greg Watson: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<li><strong>Reply:</strong> <a href="4545.php">Greg Watson: "Re: [OMPI devel] OMPI 1.3 problems"</a>
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
