<?
$subject_val = "Re: [OMPI devel] 1.8.2rc3 now out";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  1 09:39:27 2014" -->
<!-- isoreceived="20140801133927" -->
<!-- sent="Fri, 1 Aug 2014 06:39:20 -0700" -->
<!-- isosent="20140801133920" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.2rc3 now out" -->
<!-- id="4AD12CB4-F812-4587-82B6-3B20D9EBCB52_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAO1KyZ6NoKxmyvvE5WeLM-gbCUCsQPWTMyWTehAS4H+t7P8KA_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-01 09:39:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15450.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>Previous message:</strong> <a href="15448.php">Ralph Castain: "Re: [OMPI devel] [1.8.2rc3] Build failure on FreeBSD (missing header)"</a>
<li><strong>In reply to:</strong> <a href="15444.php">Mike Dubman: "Re: [OMPI devel] 1.8.2rc3 now out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15464.php">Paul Hargrove: "Re: [OMPI devel] 1.8.2rc3 now out"</a>
<li><strong>Reply:</strong> <a href="15464.php">Paul Hargrove: "Re: [OMPI devel] 1.8.2rc3 now out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, I fixed those two and will release rc4 once the coll/ml fix has been reviewed. Thanks
<br>
<p>On Aug 1, 2014, at 2:46 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Also, latest commit into openib (origin/v1.8 <a href="https://svn.open-mpi.org/trac/ompi/changeset/32391">https://svn.open-mpi.org/trac/ompi/changeset/32391</a>) broke something:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 11:45:01 + timeout -s SIGSEGV 3m /scrap/jenkins/workspace/OMPI-vendor/label/hpctest/ompi_install1/bin/mpirun -np 8 -mca pml ob1 -mca btl self,openib /scrap/jenkins/workspace/OMPI-vendor/label/hpctest/ompi_install1/examples/hello_usempi
</span><br>
<span class="quotelev1">&gt; 11:45:01 --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 11:45:01 WARNING: There are more than one active ports on host 'hpctest', but the
</span><br>
<span class="quotelev1">&gt; 11:45:01 default subnet GID prefix was detected on more than one of these
</span><br>
<span class="quotelev1">&gt; 11:45:01 ports.  If these ports are connected to different physical IB
</span><br>
<span class="quotelev1">&gt; 11:45:01 networks, this configuration will fail in Open MPI.  This version of
</span><br>
<span class="quotelev1">&gt; 11:45:01 Open MPI requires that every physically separate IB subnet that is
</span><br>
<span class="quotelev1">&gt; 11:45:01 used between connected MPI processes must have different subnet ID
</span><br>
<span class="quotelev1">&gt; 11:45:01 values.
</span><br>
<span class="quotelev1">&gt; 11:45:01 
</span><br>
<span class="quotelev1">&gt; 11:45:01 Please see this FAQ entry for more details:
</span><br>
<span class="quotelev1">&gt; 11:45:01 
</span><br>
<span class="quotelev1">&gt; 11:45:01   <a href="http://www.open-mpi.org/faq/?category=openfabrics#ofa-default-subnet-gid">http://www.open-mpi.org/faq/?category=openfabrics#ofa-default-subnet-gid</a>
</span><br>
<span class="quotelev1">&gt; 11:45:01 
</span><br>
<span class="quotelev1">&gt; 11:45:01 NOTE: You can turn off this warning by setting the MCA parameter
</span><br>
<span class="quotelev1">&gt; 11:45:01       btl_openib_warn_default_gid_prefix to 0.
</span><br>
<span class="quotelev1">&gt; 11:45:01 --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 11:45:01 --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 11:45:01 WARNING: No queue pairs were defined in the btl_openib_receive_queues
</span><br>
<span class="quotelev1">&gt; 11:45:01 MCA parameter.  At least one queue pair must be defined.  The
</span><br>
<span class="quotelev1">&gt; 11:45:01 OpenFabrics (openib) BTL will therefore be deactivated for this run.
</span><br>
<span class="quotelev1">&gt; 11:45:01 
</span><br>
<span class="quotelev1">&gt; 11:45:01   Local host: hpctest
</span><br>
<span class="quotelev1">&gt; 11:45:01 --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 11:45:01 --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 11:45:01 At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev1">&gt; 11:45:01 MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev1">&gt; 11:45:01 that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev1">&gt; 11:45:01 an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev1">&gt; 11:45:01 each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev1">&gt; 11:45:01 specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev1">&gt; 11:45:01 
</span><br>
<span class="quotelev1">&gt; 11:45:01   Process 1 ([[55281,1],1]) is on host: hpctest
</span><br>
<span class="quotelev1">&gt; 11:45:01   Process 2 ([[55281,1],0]) is on host: hpctest
</span><br>
<span class="quotelev1">&gt; 11:45:01   BTLs attempted: self
</span><br>
<span class="quotelev1">&gt; 11:45:01 
</span><br>
<span class="quotelev1">&gt; 11:45:01 Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev1">&gt; 11:45:01 --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 11:45:01 --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 11:45:01 MPI_INIT has failed because at least one MPI process is unreachable
</span><br>
<span class="quotelev1">&gt; 11:45:01 from another.  This *usually* means that an underlying communication
</span><br>
<span class="quotelev1">&gt; 11:45:01 plugin -- such as a BTL or an MTL -- has either not loaded or not
</span><br>
<span class="quotelev1">&gt; 11:45:01 allowed itself to be used.  Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt; 11:45:01 
</span><br>
<span class="quotelev1">&gt; 11:45:01 You may wish to try to narrow down the problem;
</span><br>
<span class="quotelev1">&gt; 11:45:01 
</span><br>
<span class="quotelev1">&gt; 11:45:01  * Check the output of ompi_info to see which BTL/MTL plugins are
</span><br>
<span class="quotelev1">&gt; 11:45:01    available.
</span><br>
<span class="quotelev1">&gt; 11:45:01  * Run your application with MPI_THREAD_SINGLE.
</span><br>
<span class="quotelev1">&gt; 11:45:01  * Set the MCA parameter btl_base_verbose to 100 (or mtl_base_verbose,
</span><br>
<span class="quotelev1">&gt; 11:45:01    if using MTL-based communications) to see exactly which
</span><br>
<span class="quotelev1">&gt; 11:45:01    communication plugins were considered and/or discarded.
</span><br>
<span class="quotelev1">&gt; 11:45:01 --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 11:45:01 *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; 11:45:01 *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; 11:45:01 *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; 11:45:01 ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; 11:45:01 [hpctest:2761] Local abort before MPI_INIT completed successfully; not able to aggregate error messages, and not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; 11:45:01 *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; 11:45:01 *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; 11:45:01 *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; 11:45:01 ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; 11:45:01 [hpctest:2757] Local abort before MPI_INIT completed successfully; not able to aggregate error messages, and not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; 11:45:01 *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; 11:45:01 *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; 11:45:01 *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; 11:45:01 ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; 11:45:01 [hpctest:2751] Local abort before MPI_INIT completed successfully; not able to aggregate error messages, and not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; 11:45:01 *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; 11:45:01 *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; 11:45:01 *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; 11:45:01 ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; 11:45:01 [hpctest:2752] Local abort before MPI_INIT completed successfully; not able to aggregate error messages, and not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; 11:45:01 *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; 11:45:01 *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; 11:45:01 *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; 11:45:01 ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; 11:45:01 [hpctest:2753] Local abort before MPI_INIT completed successfully; not able to aggregate error messages, and not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; 11:45:01 *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; 11:45:01 *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; 11:45:01 *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; 11:45:01 ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; 11:45:01 [hpctest:2755] Local abort before MPI_INIT completed successfully; not able to aggregate error messages, and not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; 11:45:01 *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; 11:45:01 *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; 11:45:01 *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; 11:45:01 ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; 11:45:01 [hpctest:2759] Local abort before MPI_INIT completed successfully; not able to aggregate error messages, and not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; 11:45:01 *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; 11:45:01 *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; 11:45:01 *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; 11:45:01 ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; 11:45:01 [hpctest:2763] Local abort before MPI_INIT completed successfully; not able to aggregate error messages, and not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Aug 1, 2014 at 11:00 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Note that the Solaris unresolved alloca problem George fixed in r32388 is still present in 1.8.2rc3.
</span><br>
<span class="quotelev1">&gt; I have manually confirmed that the same patch resolves the problem in 1.8.2rc3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Jul 31, 2014 at 9:44 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Usual place - this is a last-chance check, so please hit it. Main change from rc2 is the repairs to the Fortran binding config logic
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15433.php">http://www.open-mpi.org/community/lists/devel/2014/08/15433.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15440.php">http://www.open-mpi.org/community/lists/devel/2014/08/15440.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15444.php">http://www.open-mpi.org/community/lists/devel/2014/08/15444.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15449/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15450.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>Previous message:</strong> <a href="15448.php">Ralph Castain: "Re: [OMPI devel] [1.8.2rc3] Build failure on FreeBSD (missing header)"</a>
<li><strong>In reply to:</strong> <a href="15444.php">Mike Dubman: "Re: [OMPI devel] 1.8.2rc3 now out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15464.php">Paul Hargrove: "Re: [OMPI devel] 1.8.2rc3 now out"</a>
<li><strong>Reply:</strong> <a href="15464.php">Paul Hargrove: "Re: [OMPI devel] 1.8.2rc3 now out"</a>
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
