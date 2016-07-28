<?
$subject_val = "Re: [OMPI users] Specifying slots in rankfile";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 10 13:25:01 2010" -->
<!-- isoreceived="20100610172501" -->
<!-- sent="Thu, 10 Jun 2010 13:23:58 -0400" -->
<!-- isosent="20100610172358" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Specifying slots in rankfile" -->
<!-- id="4C111FAE.7050104_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A8398574-AE41-4D98-97E0-7A5225D3638A_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Specifying slots in rankfile<br>
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-10 13:23:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13302.php">Price, Brian M (N-KCI): "[OMPI users] MPI_GET beyond 2 GB displacement"</a>
<li><strong>Previous message:</strong> <a href="13300.php">Jeff Squyres: "Re: [OMPI users] Address not mapped segmentation fault with1.4.2	..."</a>
<li><strong>In reply to:</strong> <a href="13279.php">Ralph Castain: "Re: [OMPI users] Specifying slots in rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13303.php">Terry Dontje: "Re: [OMPI users] Specifying slots in rankfile"</a>
<li><strong>Reply:</strong> <a href="13303.php">Terry Dontje: "Re: [OMPI users] Specifying slots in rankfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like the rankfile &quot;*&quot; syntax was broke between version r22761 
<br>
and r23214.  So, it looks like a regression to me.  Ethan is looking 
<br>
into trying to narrow this down more.
<br>
<p>--td
<br>
&nbsp;
<br>
Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I would have to look at the code, but I suspect it doesn't handle &quot;*&quot;. Could be upgraded to do so, but that would depend on the relevant developer to do so :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 9, 2010, at 10:16 AM, Grzegorz Maj wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Thanks a lot, it works fine for me.
</span><br>
<span class="quotelev2">&gt;&gt; But going back to my problems - is it some bug in open-mpi or I should
</span><br>
<span class="quotelev2">&gt;&gt; use &quot;slot=*&quot; option in some other way?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2010/6/9 Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would recommend using the sequential mapper instead:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -mca rmaps seq
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can then just list your hosts in your hostfile, and we will put the ranks sequentially on those hosts. So you get something like this
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; host01  &lt;= rank0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; host01  &lt;= rank1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; host02  &lt;= rank2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; host03  &lt;= rank3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; host01  &lt;= rank4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 9, 2010, at 4:39 AM, Grzegorz Maj wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In my previous mail I said that slot=0-3 would be a solution.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Unfortunately it gives me exactly the same segfault as in case with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *:*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2010/6/9 Grzegorz Maj &lt;maju3_at_[hidden]&gt;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'd like mpirun to run tasks with specific ranks on specific hosts,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; but I don't want to provide any particular sockets/slots/cores.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The following example uses just one host, but generally I'll use more.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In my hostfile I just have:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; root_at_host01 slots=4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I was playing with my rankfile to achieve what I've mentioned, but I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; always get some problems.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1) With rankfile like:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; rank 0=host01 slot=*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; rank 1=host01 slot=*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; rank 2=host01 slot=*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; rank 3=host01 slot=*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I get:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; We were unable to successfully process/set the requested processor
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; affinity settings:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Specified slot list: *
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Error: Error
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This could mean that a non-existent processor was specified, or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that the specification had improper syntax.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun was unable to start the specified application as it encountered an error:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Error name: Error
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Node: host01
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; when attempting to start process rank 0.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [host01:13715] Rank 0: PAFFINITY cannot get physical processor id for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; logical processor 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I think it tries to find processor #4, bug there are only 0-3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2) With rankfile like:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; rank 0=host01 slot=*:*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; rank 1=host01 slot=*:*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; rank 2=host01 slot=*:*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; rank 3=host01 slot=*:*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Everything looks well, i.e. my programs are spread across 4 processors.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; But when running MPI program as follows:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI::Init(argc, argv);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fprintf(stderr, &quot;after init %d\n&quot;, MPI::Is_initialized());
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; nprocs_mpi = MPI::COMM_WORLD.Get_size();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fprintf(stderr, &quot;won't get here\n&quot;);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I get:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; after init 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [host01:14348] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [host01:14348] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [host01:14348] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [host01:14348] Failing at address: 0x8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [host01:14348] [ 0] [0xffffe410]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [host01:14348] [ 1] p(_ZNK3MPI4Comm8Get_sizeEv+0x19) [0x8051299]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [host01:14348] [ 2] p(main+0x86) [0x804ee4e]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [host01:14348] [ 3] /lib/libc.so.6(__libc_start_main+0xe5) [0x4180b5c5]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [host01:14348] [ 4] p(__gxx_personality_v0+0x125) [0x804ecc1]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [host01:14348] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm using OPEN MPI v. 1.4.2 (downloaded yesterday).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In my rankfile I really want to write something like slot=*. I know
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; slot=0-3 would be a solution, but when generating rankfile I may not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; be sure how many processors are there available on a particular host.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Any help would be appreciated.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Grzegorz Maj
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;   
</span><br>
<p><p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.650.633.7054
Oracle * - Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13301/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-13301/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13302.php">Price, Brian M (N-KCI): "[OMPI users] MPI_GET beyond 2 GB displacement"</a>
<li><strong>Previous message:</strong> <a href="13300.php">Jeff Squyres: "Re: [OMPI users] Address not mapped segmentation fault with1.4.2	..."</a>
<li><strong>In reply to:</strong> <a href="13279.php">Ralph Castain: "Re: [OMPI users] Specifying slots in rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13303.php">Terry Dontje: "Re: [OMPI users] Specifying slots in rankfile"</a>
<li><strong>Reply:</strong> <a href="13303.php">Terry Dontje: "Re: [OMPI users] Specifying slots in rankfile"</a>
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
