<?
$subject_val = "Re: [OMPI devel] RFC: libevent update";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 18 22:11:40 2008" -->
<!-- isoreceived="20080319021140" -->
<!-- sent="Tue, 18 Mar 2008 22:11:24 -0400" -->
<!-- isosent="20080319021124" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: libevent update" -->
<!-- id="E6E702A1-3C85-482D-97D9-DCD4B62EEDFE_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="EF22A45C-67D2-4A1D-8110-AE48B5BDD2FF_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: libevent update<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-18 22:11:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3473.php">Lenny Verkhovsky: "Re: [OMPI devel] rankfile questions"</a>
<li><strong>Previous message:</strong> <a href="3471.php">Ralph Castain: "Re: [OMPI devel] rankfile questions"</a>
<li><strong>In reply to:</strong> <a href="3470.php">Jeff Squyres: "Re: [OMPI devel] RFC: libevent update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3475.php">Jeff Squyres: "Re: [OMPI devel] RFC: libevent update"</a>
<li><strong>Reply:</strong> <a href="3475.php">Jeff Squyres: "Re: [OMPI devel] RFC: libevent update"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Commit 17872 is the one you're looking for.
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/changeset/17872">https://svn.open-mpi.org/trac/ompi/changeset/17872</a>
<br>
<p>george.
<br>
<p>On Mar 18, 2008, at 9:12 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; When did you fix it?  I merged the trunk down to the libevent-merge
</span><br>
<span class="quotelev1">&gt; branch late this afternoon (r17869).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 18, 2008, at 7:29 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This has been fixed in the trunk, but not yet merged in the branch.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 18, 2008, at 7:17 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I found another problem with the libevent branch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I set &quot;-mca btl tcp,self&quot; on the command line then I get a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; segfult
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when sending messages &gt; 16 KB. I can try to make a smaller repeater,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but if you use the &quot;progress&quot; or &quot;simple&quot; tests in ompi-tests below:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/iu/ft/correctness">https://svn.open-mpi.org/svn/ompi-tests/trunk/iu/ft/correctness</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To build:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shell$ make
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To run with failure:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shell$ mpirun  -np 2 -mca btl tcp,self progress  -s 16 -v 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To run without failure:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shell$ mpirun  -np 2 -mca btl tcp,self progress  -s 15 -v 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This program will display the message &quot;Checkpoint at any time...&quot;.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you send mpirun SIGUSR2 it will progress to the next stage of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; test. The failure occurs when the first message before this becomes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an issue though.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I was using Odin, and if I do not specify the btls then the test  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pass as normal.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The backtrace is below:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Core was generated by `progress -s 16 -v 1'.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Program terminated with signal 11, Segmentation fault.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #0  0x0000002a9793318b in mca_bml_base_free
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (bml_btl=0x736275705f61636d, des=0x559700) at ../../../../ompi/mca/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bml/bml.h:267
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 267         bml_btl-&gt;btl_free( bml_btl-&gt;btl, des );
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #0  0x0000002a9793318b in mca_bml_base_free
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (bml_btl=0x736275705f61636d, des=0x559700) at ../../../../ompi/mca/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bml/bml.h:267
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #1  0x0000002a9793304d in mca_pml_ob1_put_completion (btl=0x5598c0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ep=0x0, des=0x559700, status=0) at pml_ob1_recvreq.c:190
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #2  0x0000002a97930069 in mca_pml_ob1_recv_frag_callback
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (btl=0x5598c0, tag=64 '@', des=0x2a989d2b00, cbdata=0x0) at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pml_ob1_recvfrag.c:149
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #3  0x0000002a97d5f3e0 in mca_btl_tcp_endpoint_recv_handler (sd=10,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; flags=2, user=0x5a5df0) at btl_tcp_endpoint.c:696
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #4  0x0000002a95a0ab93 in event_process_active (base=0x508c80) at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; event.c:591
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #5  0x0000002a95a0af59 in opal_event_base_loop (base=0x508c80,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; flags=2) at event.c:763
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #6  0x0000002a95a0ad2b in opal_event_loop (flags=2) at event.c:670
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #7  0x0000002a959fadf8 in opal_progress () at runtime/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_progress.c:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 169
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #8  0x0000002a9792caae in opal_condition_wait (c=0x2a9587d940,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; m=0x2a9587d9c0) at ../../../../opal/threads/condition.h:93
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #9  0x0000002a9792c9dd in ompi_request_wait_completion  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (req=0x5a5380)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at ../../../../ompi/request/request.h:381
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #10 0x0000002a9792c920 in mca_pml_ob1_recv (addr=0x5baf70,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; count=16384, datatype=0x503770, src=1, tag=1001, comm=0x5039a0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; status=0x0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   at pml_ob1_irecv.c:104
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #11 0x0000002a956f1f00 in PMPI_Recv (buf=0x5baf70, count=16384,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; type=0x503770, source=1, tag=1001, comm=0x5039a0, status=0x0) at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; precv.c:75
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #12 0x000000000040211f in exchange_stage1 (ckpt_num=1) at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; progress.c:414
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #13 0x0000000000401295 in main (argc=5, argv=0x7fbfffe668) at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; progress.c:131
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) p bml_btl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $1 = (mca_bml_base_btl_t *) 0x736275705f61636d
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) p *bml_btl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cannot access memory at address 0x736275705f61636d
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 17, 2008, at 2:50 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHAT: Bring new version of libevent to the trunk.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHY: Newer version, slightly better performance (lower overheads /
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; lighter weight), properly integrate the use of epoll and other
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; scalable fd monitoring mechanisms.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHERE: 98% of the changes are in opal/event; there's a few changes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configury and one change to the orted.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; TIMEOUT: COB, Friday, 21 March 2008
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DESCRIPTION:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; George/UTK has done the bulk of the work to integrate a new
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; version of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libevent on the following tmp branch:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   <a href="https://svn.open-mpi.org/svn/ompi/tmp-public/libevent-merge">https://svn.open-mpi.org/svn/ompi/tmp-public/libevent-merge</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ** WE WOULD VERY MUCH APPRECIATE IF PEOPLE COULD MTT TEST THIS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; BRANCH!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; **
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cisco ran MTT on this branch on Friday and everything checked out
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (i.e., no more failures than on the trunk).  We just made a few  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; more
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; minor changes today and I'm running MTT again now, but I'm not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; expecting any new failures (MTT will take several hours).  We would
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; like to bring the new libevent in over this upcoming weekend, but
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; would very much appreciate if others could test on their platforms
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (Cisco tests mainly 64 bit RHEL4U4).  This new libevent *should*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fairly side-effect free change, but it is possible that since we're
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; now using epoll and other scalable fd monitoring tools, we'll run
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; into
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; some unanticipated issues on some platforms.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here's a consolidated diff if you want to see the changes:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset?old_path=tmp-public">https://svn.open-mpi.org/trac/ompi/changeset?old_path=tmp-public</a>%
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2Flibevent-merge&amp;old=17846&amp;new_path=trunk&amp;new=17842
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3472/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3473.php">Lenny Verkhovsky: "Re: [OMPI devel] rankfile questions"</a>
<li><strong>Previous message:</strong> <a href="3471.php">Ralph Castain: "Re: [OMPI devel] rankfile questions"</a>
<li><strong>In reply to:</strong> <a href="3470.php">Jeff Squyres: "Re: [OMPI devel] RFC: libevent update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3475.php">Jeff Squyres: "Re: [OMPI devel] RFC: libevent update"</a>
<li><strong>Reply:</strong> <a href="3475.php">Jeff Squyres: "Re: [OMPI devel] RFC: libevent update"</a>
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
