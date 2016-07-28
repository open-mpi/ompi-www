<?
$subject_val = "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 19:46:43 2014" -->
<!-- isoreceived="20140729234643" -->
<!-- sent="Tue, 29 Jul 2014 16:46:36 -0700" -->
<!-- isosent="20140729234636" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error" -->
<!-- id="B1D56EFD-2B24-4E0B-BD5C-63CBB7333F68_at_usgs.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA15s_qSgxJXzEZLaP9Amzujs2KQ0tJpLKgHn7VEKh2k4tA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error<br>
<strong>From:</strong> Larry Baker (<em>baker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-29 19:46:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15338.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Previous message:</strong> <a href="15336.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>In reply to:</strong> <a href="15336.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15338.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Reply:</strong> <a href="15338.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
PGI 14.7 is VERY new -- I just received the announcement on Sunday.
<br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p><p><p>On 29 Jul 2014, at 4:25 PM, Paul Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; I have license for PGI and installations of 14.1 and 14.4
</span><br>
<span class="quotelev1">&gt; I will see what I can do today in terms of testing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Jul 29, 2014 at 4:23 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Tetsuya --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am unable to test with the PGI compiler -- I don't have a license.  I was hoping that LANL would be able to test today, but I don't think they got to it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you send more details?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; E.g., can you send the all the stuff listed on <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a> for 1.8 and 1.8.2rc2 for the 14.7 compiler?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm *guessing* that we've done something new in the changes since 1.8 that PGI doesn't support, and we need to disable that something (hopefully while not needing to disable the entire mpi_f08 bindings...).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 28, 2014, at 11:43 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi folks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I tried to build openmpi-1.8.2rc2 with PGI-14.7 and execute a sample
</span><br>
<span class="quotelev2">&gt; &gt; program. Then, it causes linking error:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [mishima_at_manage work]$ cat test.f
</span><br>
<span class="quotelev2">&gt; &gt;      program hello_world
</span><br>
<span class="quotelev2">&gt; &gt;      use mpi_f08
</span><br>
<span class="quotelev2">&gt; &gt;      implicit none
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      type(MPI_Comm) :: comm
</span><br>
<span class="quotelev2">&gt; &gt;      integer :: myid, npes, ierror
</span><br>
<span class="quotelev2">&gt; &gt;      integer :: name_length
</span><br>
<span class="quotelev2">&gt; &gt;      character(len=MPI_MAX_PROCESSOR_NAME) :: processor_name
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      call mpi_init(ierror)
</span><br>
<span class="quotelev2">&gt; &gt;      comm = MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt; &gt;      call MPI_Comm_rank(comm, myid, ierror)
</span><br>
<span class="quotelev2">&gt; &gt;      call MPI_Comm_size(comm, npes, ierror)
</span><br>
<span class="quotelev2">&gt; &gt;      call MPI_Get_processor_name(processor_name, name_length, ierror)
</span><br>
<span class="quotelev2">&gt; &gt;      write (*,'(A,X,I4,X,A,X,I4,X,A,X,A)')
</span><br>
<span class="quotelev2">&gt; &gt;     +&quot;Process&quot;, myid, &quot;of&quot;, npes, &quot;is on&quot;, trim(processor_name)
</span><br>
<span class="quotelev2">&gt; &gt;      call MPI_Finalize(ierror)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      end program hello_world
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [mishima_at_manage work]$ mpif90 test.f -o test.ex
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/pgfortran65ZcUeoncoqT.o: In function `.C1_283':
</span><br>
<span class="quotelev2">&gt; &gt; test.f:(.data+0x6c): undefined reference to `mpi_f08_interfaces_callbacks_'
</span><br>
<span class="quotelev2">&gt; &gt; test.f:(.data+0x74): undefined reference to `mpi_f08_interfaces_'
</span><br>
<span class="quotelev2">&gt; &gt; test.f:(.data+0x7c): undefined reference to `pmpi_f08_interfaces_'
</span><br>
<span class="quotelev2">&gt; &gt; test.f:(.data+0x84): undefined reference to `mpi_f08_sizeof_'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So, I did some more tests with previous version of PGI and
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.8. The results are summarized as follows:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                  PGI13.10                       PGI14.7
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.8       OK                             OK
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.8.2rc2  configure sets use_f08_mpi:no  link error
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Tetsuya Mishima
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
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15303.php">http://www.open-mpi.org/community/lists/devel/2014/07/15303.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15335.php">http://www.open-mpi.org/community/lists/devel/2014/07/15335.php</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15336.php">http://www.open-mpi.org/community/lists/devel/2014/07/15336.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15337/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15338.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Previous message:</strong> <a href="15336.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>In reply to:</strong> <a href="15336.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15338.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Reply:</strong> <a href="15338.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
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
