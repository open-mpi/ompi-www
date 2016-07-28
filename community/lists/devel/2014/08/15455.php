<?
$subject_val = "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  1 11:24:40 2014" -->
<!-- isoreceived="20140801152440" -->
<!-- sent="Fri, 1 Aug 2014 15:24:38 +0000" -->
<!-- isosent="20140801152438" -->
<!-- name="Pritchard Jr., Howard" -->
<!-- email="howardp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error" -->
<!-- id="5F6FB0CDAF4F98419A0D970E1F65ED05ACC4E0_at_ECS-EXG-P-MB05.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5F6FB0CDAF4F98419A0D970E1F65ED05ACC3CB_at_ECS-EXG-P-MB05.win.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error<br>
<strong>From:</strong> Pritchard Jr., Howard (<em>howardp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-01 11:24:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15456.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32398 - in trunk: ompi/mca/bcol/basesmuma ompi/mca/coll/hierarch ompi/mca/coll/sm ompi/mca/dpm/orte ompi/mca/pml/bfo ompi/mca/rte/orte ompi/proc ompi/runtime opal/util orte/mca/ess/base orte/mca/ess/hnp orte/runtime orte/util"</a>
<li><strong>Previous message:</strong> <a href="15454.php">George Bosilca: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>In reply to:</strong> <a href="15452.php">Pritchard Jr., Howard: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15468.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<li><strong>Reply:</strong> <a href="15468.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, finally got through all this ompi email and see this problem was fixed.
<br>
<p>-----Original Message-----
<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Pritchard Jr., Howard
<br>
Sent: Friday, August 01, 2014 8:59 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error
<br>
<p>Hi Jeff,
<br>
<p>Finally got info yesterday about where the newer PGI compilers are hiding out at LANL.
<br>
I'll check this out today.
<br>
<p>Howard
<br>
<p><p>-----Original Message-----
<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Jeff Squyres (jsquyres)
<br>
Sent: Tuesday, July 29, 2014 5:24 PM
<br>
To: Open MPI Developers List
<br>
Subject: Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error
<br>
<p>Tetsuya --
<br>
<p>I am unable to test with the PGI compiler -- I don't have a license.  I was hoping that LANL would be able to test today, but I don't think they got to it.
<br>
<p>Can you send more details?
<br>
<p>E.g., can you send the all the stuff listed on <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a> for 1.8 and 1.8.2rc2 for the 14.7 compiler?
<br>
<p>I'm *guessing* that we've done something new in the changes since 1.8 that PGI doesn't support, and we need to disable that something (hopefully while not needing to disable the entire mpi_f08 bindings...).
<br>
<p><p><p>On Jul 28, 2014, at 11:43 PM, tmishima_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to build openmpi-1.8.2rc2 with PGI-14.7 and execute a sample 
</span><br>
<span class="quotelev1">&gt; program. Then, it causes linking error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [mishima_at_manage work]$ cat test.f
</span><br>
<span class="quotelev1">&gt;      program hello_world
</span><br>
<span class="quotelev1">&gt;      use mpi_f08
</span><br>
<span class="quotelev1">&gt;      implicit none
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      type(MPI_Comm) :: comm
</span><br>
<span class="quotelev1">&gt;      integer :: myid, npes, ierror
</span><br>
<span class="quotelev1">&gt;      integer :: name_length
</span><br>
<span class="quotelev1">&gt;      character(len=MPI_MAX_PROCESSOR_NAME) :: processor_name
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      call mpi_init(ierror)
</span><br>
<span class="quotelev1">&gt;      comm = MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt;      call MPI_Comm_rank(comm, myid, ierror)
</span><br>
<span class="quotelev1">&gt;      call MPI_Comm_size(comm, npes, ierror)
</span><br>
<span class="quotelev1">&gt;      call MPI_Get_processor_name(processor_name, name_length, ierror)
</span><br>
<span class="quotelev1">&gt;      write (*,'(A,X,I4,X,A,X,I4,X,A,X,A)')
</span><br>
<span class="quotelev1">&gt;     +&quot;Process&quot;, myid, &quot;of&quot;, npes, &quot;is on&quot;, trim(processor_name)
</span><br>
<span class="quotelev1">&gt;      call MPI_Finalize(ierror)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      end program hello_world
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [mishima_at_manage work]$ mpif90 test.f -o test.ex
</span><br>
<span class="quotelev1">&gt; /tmp/pgfortran65ZcUeoncoqT.o: In function `.C1_283':
</span><br>
<span class="quotelev1">&gt; test.f:(.data+0x6c): undefined reference to `mpi_f08_interfaces_callbacks_'
</span><br>
<span class="quotelev1">&gt; test.f:(.data+0x74): undefined reference to `mpi_f08_interfaces_'
</span><br>
<span class="quotelev1">&gt; test.f:(.data+0x7c): undefined reference to `pmpi_f08_interfaces_'
</span><br>
<span class="quotelev1">&gt; test.f:(.data+0x84): undefined reference to `mpi_f08_sizeof_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, I did some more tests with previous version of PGI and 
</span><br>
<span class="quotelev1">&gt; openmpi-1.8. The results are summarized as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                  PGI13.10                       PGI14.7
</span><br>
<span class="quotelev1">&gt; openmpi-1.8       OK                             OK
</span><br>
<span class="quotelev1">&gt; openmpi-1.8.2rc2  configure sets use_f08_mpi:no  link error
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Tetsuya Mishima
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15303.php">http://www.open-mpi.org/community/lists/devel/2014/07/15303.php</a>
</span><br>
<p><p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
devel mailing list
devel_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15335.php">http://www.open-mpi.org/community/lists/devel/2014/07/15335.php</a>
_______________________________________________
devel mailing list
devel_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15452.php">http://www.open-mpi.org/community/lists/devel/2014/08/15452.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15456.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32398 - in trunk: ompi/mca/bcol/basesmuma ompi/mca/coll/hierarch ompi/mca/coll/sm ompi/mca/dpm/orte ompi/mca/pml/bfo ompi/mca/rte/orte ompi/proc ompi/runtime opal/util orte/mca/ess/base orte/mca/ess/hnp orte/runtime orte/util"</a>
<li><strong>Previous message:</strong> <a href="15454.php">George Bosilca: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>In reply to:</strong> <a href="15452.php">Pritchard Jr., Howard: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15468.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<li><strong>Reply:</strong> <a href="15468.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
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
