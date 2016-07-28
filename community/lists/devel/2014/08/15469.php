<?
$subject_val = "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug  2 01:06:54 2014" -->
<!-- isoreceived="20140802050654" -->
<!-- sent="Fri, 1 Aug 2014 22:06:45 -0700" -->
<!-- isosent="20140802050645" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error" -->
<!-- id="60902DB7-5B63-4EC6-89EC-6EC2C2577C77_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OFA02EF7CD.EBA0E0A2-ON49257D28.001A8AD8-49257D28.001B1E93_at_jcity.maeda.co.jp" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-02 01:06:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15470.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with	PGI-14.7	causes link error"</a>
<li><strong>Previous message:</strong> <a href="15468.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<li><strong>In reply to:</strong> <a href="15468.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15470.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with	PGI-14.7	causes link error"</a>
<li><strong>Reply:</strong> <a href="15470.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with	PGI-14.7	causes link error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Kewl - the openib issue has been fixed in the nightly tarball. I'm waiting for review of a couple of pending CMRs, then we'll release a quick rc4 and move to release the final version
<br>
<p><p>On Aug 1, 2014, at 9:55 PM, tmishima_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I comfirmed openmpi-1.8.2rc3 with PGI-14.7 worked fine for me
</span><br>
<span class="quotelev1">&gt; except for the openib issue reported by Mike Dubman.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sorry, finally got through all this ompi email and see this problem was
</span><br>
<span class="quotelev1">&gt; fixed.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Pritchard
</span><br>
<span class="quotelev1">&gt; Jr., Howard
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Friday, August 01, 2014 8:59 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with
</span><br>
<span class="quotelev1">&gt; PGI-14.7 causes link error
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Finally got info yesterday about where the newer PGI compilers are hiding
</span><br>
<span class="quotelev1">&gt; out at LANL.
</span><br>
<span class="quotelev2">&gt;&gt; I'll check this out today.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Howard
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; (jsquyres)
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, July 29, 2014 5:24 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers List
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with
</span><br>
<span class="quotelev1">&gt; PGI-14.7 causes link error
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Tetsuya --
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am unable to test with the PGI compiler -- I don't have a license.  I
</span><br>
<span class="quotelev1">&gt; was hoping that LANL would be able to test today, but I don't think they
</span><br>
<span class="quotelev1">&gt; got to it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you send more details?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; E.g., can you send the all the stuff listed on
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a> for 1.8 and 1.8.2rc2 for the 14.7
</span><br>
<span class="quotelev1">&gt; compiler?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm *guessing* that we've done something new in the changes since 1.8
</span><br>
<span class="quotelev1">&gt; that PGI doesn't support, and we need to disable that something (hopefully
</span><br>
<span class="quotelev1">&gt; while not needing to disable the entire mpi_f08
</span><br>
<span class="quotelev2">&gt;&gt; bindings...).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 28, 2014, at 11:43 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi folks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried to build openmpi-1.8.2rc2 with PGI-14.7 and execute a sample
</span><br>
<span class="quotelev3">&gt;&gt;&gt; program. Then, it causes linking error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mishima_at_manage work]$ cat test.f
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     program hello_world
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     use mpi_f08
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     implicit none
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     type(MPI_Comm) :: comm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     integer :: myid, npes, ierror
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     integer :: name_length
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     character(len=MPI_MAX_PROCESSOR_NAME) :: processor_name
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     call mpi_init(ierror)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     comm = MPI_COMM_WORLD
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     call MPI_Comm_rank(comm, myid, ierror)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     call MPI_Comm_size(comm, npes, ierror)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     call MPI_Get_processor_name(processor_name, name_length, ierror)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     write (*,'(A,X,I4,X,A,X,I4,X,A,X,A)')
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    +&quot;Process&quot;, myid, &quot;of&quot;, npes, &quot;is on&quot;, trim(processor_name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     call MPI_Finalize(ierror)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     end program hello_world
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mishima_at_manage work]$ mpif90 test.f -o test.ex
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/pgfortran65ZcUeoncoqT.o: In function `.C1_283':
</span><br>
<span class="quotelev3">&gt;&gt;&gt; test.f:(.data+0x6c): undefined reference to
</span><br>
<span class="quotelev1">&gt; `mpi_f08_interfaces_callbacks_'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; test.f:(.data+0x74): undefined reference to `mpi_f08_interfaces_'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; test.f:(.data+0x7c): undefined reference to `pmpi_f08_interfaces_'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; test.f:(.data+0x84): undefined reference to `mpi_f08_sizeof_'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, I did some more tests with previous version of PGI and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.8. The results are summarized as follows:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 PGI13.10                       PGI14.7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.8       OK                             OK
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.8.2rc2  configure sets use_f08_mpi:no  link error
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tetsuya Mishima
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
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15303.php">http://www.open-mpi.org/community/lists/devel/2014/07/15303.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15335.php">http://www.open-mpi.org/community/lists/devel/2014/07/15335.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15452.php">http://www.open-mpi.org/community/lists/devel/2014/08/15452.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15455.php">http://www.open-mpi.org/community/lists/devel/2014/08/15455.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15468.php">http://www.open-mpi.org/community/lists/devel/2014/08/15468.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15470.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with	PGI-14.7	causes link error"</a>
<li><strong>Previous message:</strong> <a href="15468.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<li><strong>In reply to:</strong> <a href="15468.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15470.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with	PGI-14.7	causes link error"</a>
<li><strong>Reply:</strong> <a href="15470.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with	PGI-14.7	causes link error"</a>
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
