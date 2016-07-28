<?
$subject_val = "Re: [OMPI devel] 1.8.2rc3 now out";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  1 22:07:37 2014" -->
<!-- isoreceived="20140802020737" -->
<!-- sent="Sat, 2 Aug 2014 11:07:35 +0900" -->
<!-- isosent="20140802020735" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.2rc3 now out" -->
<!-- id="CAAkFZ5tCM8Sv_5cdXeYjtp8Hk3dt9ZeXsxVOBeeJTSc0rUb02w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA1708K0N9F-8D6OoMk_fRw1qcNAtQW4zWR+ooOE8O3cz9Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.2rc3 now out<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-01 22:07:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15468.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<li><strong>Previous message:</strong> <a href="15466.php">Paul Hargrove: "[OMPI devel] [1.8.2rc3] build failure on OpenBSD (libevent)"</a>
<li><strong>In reply to:</strong> <a href="15464.php">Paul Hargrove: "Re: [OMPI devel] 1.8.2rc3 now out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15491.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.2rc3 now out"</a>
<li><strong>Reply:</strong> <a href="15491.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.2rc3 now out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul,
<br>
<p>about the second point :
<br>
mmap is called with the MAP_FIXED flag, before the fix, the
<br>
required address was not aligned on a page size and hence
<br>
mmap failed.
<br>
the mmap failure was immediatly handled, but for some reasons
<br>
i did not fully investigate yet, this failure was not correctly propagated,
<br>
leading to a SIGSEGV later in lmngr_register (if i remember correctly)
<br>
<p>i will add this to my todo list : investigate why the error is not correctly
<br>
propagated and handled.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Sat, Aug 2, 2014 at 6:05 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Regarding review of the coll/ml fix:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While the fix Gilles worked out overnight proved sufficient on
</span><br>
<span class="quotelev1">&gt; Solaris/SPARC, Linux/PPC64 and Linux/IA64, I had two concerns:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) As I already voiced on the list, I am concerned with the portability of
</span><br>
<span class="quotelev1">&gt; _SC_PAGESIZE vs _SC_PAGE_SIZE (vs get_pagesize()).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) Though I have not tried to trace the code, the fact that fixing the
</span><br>
<span class="quotelev1">&gt; alignment prevents a SEGV strongly suggests that there was a mmap (or
</span><br>
<span class="quotelev1">&gt; something else sensitive to page size) call failing.  So, there should
</span><br>
<span class="quotelev1">&gt; probably be a check added for failure of that call to produce a cleaner
</span><br>
<span class="quotelev1">&gt; failure than SEGV.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just my USD 0.02.
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Aug 1, 2014 at 6:39 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Okay, I fixed those two and will release rc4 once the coll/ml fix has
</span><br>
<span class="quotelev2">&gt;&gt; been reviewed. Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 1, 2014, at 2:46 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, latest commit into openib (origin/v1.8
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/32391">https://svn.open-mpi.org/trac/ompi/changeset/32391</a>) broke something:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *11:45:01* + timeout -s SIGSEGV 3m /scrap/jenkins/workspace/OMPI-vendor/label/hpctest/ompi_install1/bin/mpirun -np 8 -mca pml ob1 -mca btl self,openib /scrap/jenkins/workspace/OMPI-vendor/label/hpctest/ompi_install1/examples/hello_usempi*11:45:01* --------------------------------------------------------------------------*11:45:01* WARNING: There are more than one active ports on host 'hpctest', but the*11:45:01* default subnet GID prefix was detected on more than one of these*11:45:01* ports.  If these ports are connected to different physical IB*11:45:01* networks, this configuration will fail in Open MPI.  This version of*11:45:01* Open MPI requires that every physically separate IB subnet that is*11:45:01* used between connected MPI processes must have different subnet ID*11:45:01* values.*11:45:01* *11:45:01* Please see this FAQ entry for more details:*11:45:01* *11:45:01*   <a href="http://www.open-mpi.org/faq/?category=openfabrics#ofa-default-subnet-gid*11:45:01">http://www.open-mpi.org/faq/?category=openfabrics#ofa-default-subnet-gid*11:45:01</a>* *11:45:01* NOTE: You can turn off this warning by setting the MCA parameter*11:45:01*       btl_openib_warn_default_gid_prefix to 0.*11:45:01* --------------------------------------------------------------------------*11:45:01* --------------------------------------------------------------------------*11:45:01* WARNING: No queue pairs were defined in the btl_openib_receive_queues*11:45:01* MCA parameter.  At least one queue pair must be defined.  The*11:45:01* OpenFabrics (openib) BTL will therefore be deactivated for this run.*11:45:01* *11:45:01*   Local host: hpctest*11:45:01* --------------------------------------------------------------------------*11:45:01* --------------------------------------------------------------------------*11:45:01* At least one pair of MPI processes are unable to reach each other for*11:45:01* MPI communications.  This means that no Open MPI device has indicated*11:45:01* that it can be used to communicate between these processes.  This is*11:45:01* an error; Open MPI requires that all MPI processes be able to reach*11:45:01* each other.  This error can sometimes be the result of forgetting to*11:45:01* specify the &quot;self&quot; BTL.*11:45:01* *11:45:01*   Process 1 ([[55281,1],1]) is on host: hpctest*11:45:01*   Process 2 ([[55281,1],0]) is on host: hpctest*11:45:01*   BTLs attempted: self*11:45:01* *11:45:01* Your MPI job is now going to abort; sorry.*11:45:01* --------------------------------------------------------------------------*11:45:01* --------------------------------------------------------------------------*11:45:01* MPI_INIT has failed because at least one MPI process is unreachable*11:45:01* from another.  This *usually* means that an underlying communication*11:45:01* plugin -- such as a BTL or an MTL -- has either not loaded or not*11:45:01* allowed itself to be used.  Your MPI job will now abort.*11:45:01* *11:45:01* You may wish to try to narrow down the problem;*11:45:01* *11:45:01*  * Check the output of ompi_info to see which BTL/MTL plugins are*11:45:01*    available.*11:45:01*  * Run your application with MPI_THREAD_SINGLE.*11:45:01*  * Set the MCA parameter btl_base_verbose to 100 (or mtl_base_verbose,*11:45:01*    if using MTL-based communications) to see exactly which*11:45:01*    communication plugins were considered and/or discarded.*11:45:01* --------------------------------------------------------------------------*11:45:01* *** An error occurred in MPI_Init*11:45:01* *** on a NULL communicator*11:45:01* *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,*11:45:01* ***    and potentially your MPI job)*11:45:01* [hpctest:2761] Local abort before MPI_INIT completed successfully; not able to aggregate error messages, and not able to guarantee that all other processes were killed!*11:45:01* *** An error occurred in MPI_Init*11:45:01* *** on a NULL communicator*11:45:01* *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,*11:45:01* ***    and potentially your MPI job)*11:45:01* [hpctest:2757] Local abort before MPI_INIT completed successfully; not able to aggregate error messages, and not able to guarantee that all other processes were killed!*11:45:01* *** An error occurred in MPI_Init*11:45:01* *** on a NULL communicator*11:45:01* *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,*11:45:01* ***    and potentially your MPI job)*11:45:01* [hpctest:2751] Local abort before MPI_INIT completed successfully; not able to aggregate error messages, and not able to guarantee that all other processes were killed!*11:45:01* *** An error occurred in MPI_Init*11:45:01* *** on a NULL communicator*11:45:01* *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,*11:45:01* ***    and potentially your MPI job)*11:45:01* [hpctest:2752] Local abort before MPI_INIT completed successfully; not able to aggregate error messages, and not able to guarantee that all other processes were killed!*11:45:01* *** An error occurred in MPI_Init*11:45:01* *** on a NULL communicator*11:45:01* *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,*11:45:01* ***    and potentially your MPI job)*11:45:01* [hpctest:2753] Local abort before MPI_INIT completed successfully; not able to aggregate error messages, and not able to guarantee that all other processes were killed!*11:45:01* *** An error occurred in MPI_Init*11:45:01* *** on a NULL communicator*11:45:01* *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,*11:45:01* ***    and potentially your MPI job)*11:45:01* [hpctest:2755] Local abort before MPI_INIT completed successfully; not able to aggregate error messages, and not able to guarantee that all other processes were killed!*11:45:01* *** An error occurred in MPI_Init*11:45:01* *** on a NULL communicator*11:45:01* *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,*11:45:01* ***    and potentially your MPI job)*11:45:01* [hpctest:2759] Local abort before MPI_INIT completed successfully; not able to aggregate error messages, and not able to guarantee that all other processes were killed!*11:45:01* *** An error occurred in MPI_Init*11:45:01* *** on a NULL communicator*11:45:01* *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,*11:45:01* ***    and potentially your MPI job)*11:45:01* [hpctest:2763] Local abort before MPI_INIT completed successfully; not able to aggregate error messages, and not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Aug 1, 2014 at 11:00 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note that the Solaris unresolved alloca problem George fixed in r32388
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is still present in 1.8.2rc3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have manually confirmed that the same patch resolves the problem in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.8.2rc3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, Jul 31, 2014 at 9:44 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Usual place - this is a last-chance check, so please hit it. Main
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; change from rc2 is the repairs to the Fortran binding config logic
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15433.php">http://www.open-mpi.org/community/lists/devel/2014/08/15433.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15440.php">http://www.open-mpi.org/community/lists/devel/2014/08/15440.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15444.php">http://www.open-mpi.org/community/lists/devel/2014/08/15444.php</a>
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15449.php">http://www.open-mpi.org/community/lists/devel/2014/08/15449.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15464.php">http://www.open-mpi.org/community/lists/devel/2014/08/15464.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15467/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15468.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<li><strong>Previous message:</strong> <a href="15466.php">Paul Hargrove: "[OMPI devel] [1.8.2rc3] build failure on OpenBSD (libevent)"</a>
<li><strong>In reply to:</strong> <a href="15464.php">Paul Hargrove: "Re: [OMPI devel] 1.8.2rc3 now out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15491.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.2rc3 now out"</a>
<li><strong>Reply:</strong> <a href="15491.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.2rc3 now out"</a>
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
