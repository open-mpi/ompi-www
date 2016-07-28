<?
$subject_val = "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with	PGI-14.7	causes link error";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug  2 04:45:52 2014" -->
<!-- isoreceived="20140802084552" -->
<!-- sent="Sat, 2 Aug 2014 17:44:43 +0900" -->
<!-- isosent="20140802084443" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with	PGI-14.7	causes link error" -->
<!-- id="OFAA5948EC.14D6869D-ON49257D28.002F2837-49257D28.0030246D_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="60902DB7-5B63-4EC6-89EC-6EC2C2577C77_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with	PGI-14.7	causes link error<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20openmpi-1.8.2rc2%20and%20f08%20interface%20built%20with	PGI-14.7	causes%20link%20error"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-08-02 04:44:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15471.php">Ralph Castain: "Re: [OMPI devel] Trunk broken for PPC64?"</a>
<li><strong>Previous message:</strong> <a href="15469.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<li><strong>In reply to:</strong> <a href="15469.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15377.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>I comfirmed that the openib issue was really fixed by r32395
<br>
and hope you'll be able to release the final version soon.
<br>
<p>Tetsuya
<br>
<p><span class="quotelev1">&gt; Kewl - the openib issue has been fixed in the nightly tarball. I'm
</span><br>
waiting for review of a couple of pending CMRs, then we'll release a quick
<br>
rc4 and move to release the final version
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 1, 2014, at 9:55 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I comfirmed openmpi-1.8.2rc3 with PGI-14.7 worked fine for me
</span><br>
<span class="quotelev2">&gt; &gt; except for the openib issue reported by Mike Dubman.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Tetsuya Mishima
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sorry, finally got through all this ompi email and see this problem
</span><br>
was
<br>
<span class="quotelev2">&gt; &gt; fixed.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Pritchard
</span><br>
<span class="quotelev2">&gt; &gt; Jr., Howard
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sent: Friday, August 01, 2014 8:59 AM
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subject: Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built
</span><br>
with
<br>
<span class="quotelev2">&gt; &gt; PGI-14.7 causes link error
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Finally got info yesterday about where the newer PGI compilers are
</span><br>
hiding
<br>
<span class="quotelev2">&gt; &gt; out at LANL.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'll check this out today.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Howard
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Jeff
</span><br>
Squyres
<br>
<span class="quotelev2">&gt; &gt; (jsquyres)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sent: Tuesday, July 29, 2014 5:24 PM
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To: Open MPI Developers List
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subject: Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built
</span><br>
with
<br>
<span class="quotelev2">&gt; &gt; PGI-14.7 causes link error
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Tetsuya --
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am unable to test with the PGI compiler -- I don't have a license.
</span><br>
I
<br>
<span class="quotelev2">&gt; &gt; was hoping that LANL would be able to test today, but I don't think
</span><br>
they
<br>
<span class="quotelev2">&gt; &gt; got to it.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Can you send more details?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; E.g., can you send the all the stuff listed on
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a> for 1.8 and 1.8.2rc2 for the
</span><br>
14.7
<br>
<span class="quotelev2">&gt; &gt; compiler?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm *guessing* that we've done something new in the changes since 1.8
</span><br>
<span class="quotelev2">&gt; &gt; that PGI doesn't support, and we need to disable that something
</span><br>
(hopefully
<br>
<span class="quotelev2">&gt; &gt; while not needing to disable the entire mpi_f08
</span><br>
<span class="quotelev3">&gt; &gt;&gt; bindings...).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jul 28, 2014, at 11:43 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi folks,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I tried to build openmpi-1.8.2rc2 with PGI-14.7 and execute a sample
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; program. Then, it causes linking error:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [mishima_at_manage work]$ cat test.f
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     program hello_world
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     use mpi_f08
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     implicit none
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     type(MPI_Comm) :: comm
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     integer :: myid, npes, ierror
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     integer :: name_length
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     character(len=MPI_MAX_PROCESSOR_NAME) :: processor_name
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     call mpi_init(ierror)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     comm = MPI_COMM_WORLD
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     call MPI_Comm_rank(comm, myid, ierror)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     call MPI_Comm_size(comm, npes, ierror)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     call MPI_Get_processor_name(processor_name, name_length, ierror)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     write (*,'(A,X,I4,X,A,X,I4,X,A,X,A)')
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    +&quot;Process&quot;, myid, &quot;of&quot;, npes, &quot;is on&quot;, trim(processor_name)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     call MPI_Finalize(ierror)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     end program hello_world
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [mishima_at_manage work]$ mpif90 test.f -o test.ex
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /tmp/pgfortran65ZcUeoncoqT.o: In function `.C1_283':
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; test.f:(.data+0x6c): undefined reference to
</span><br>
<span class="quotelev2">&gt; &gt; `mpi_f08_interfaces_callbacks_'
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; test.f:(.data+0x74): undefined reference to `mpi_f08_interfaces_'
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; test.f:(.data+0x7c): undefined reference to `pmpi_f08_interfaces_'
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; test.f:(.data+0x84): undefined reference to `mpi_f08_sizeof_'
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; So, I did some more tests with previous version of PGI and
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; openmpi-1.8. The results are summarized as follows:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                 PGI13.10                       PGI14.7
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; openmpi-1.8       OK                             OK
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; openmpi-1.8.2rc2  configure sets use_f08_mpi:no  link error
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15303.php">http://www.open-mpi.org/community/lists/devel/2014/07/15303.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15335.php">http://www.open-mpi.org/community/lists/devel/2014/07/15335.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15452.php">http://www.open-mpi.org/community/lists/devel/2014/08/15452.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15455.php">http://www.open-mpi.org/community/lists/devel/2014/08/15455.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/08/15468.php">http://www.open-mpi.org/community/lists/devel/2014/08/15468.php</a>
<br>
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
<a href="http://www.open-mpi.org/community/lists/devel/2014/08/15469.php">http://www.open-mpi.org/community/lists/devel/2014/08/15469.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15471.php">Ralph Castain: "Re: [OMPI devel] Trunk broken for PPC64?"</a>
<li><strong>Previous message:</strong> <a href="15469.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<li><strong>In reply to:</strong> <a href="15469.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15377.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
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
