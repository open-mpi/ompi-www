<?
$subject_val = "Re: [OMPI devel] Comm_split_type(COMM_SELF, MPI_UNDEFINED, ...)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 26 23:19:49 2014" -->
<!-- isoreceived="20140827031949" -->
<!-- sent="Tue, 26 Aug 2014 23:19:48 -0400" -->
<!-- isosent="20140827031948" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Comm_split_type(COMM_SELF, MPI_UNDEFINED, ...)" -->
<!-- id="CAMJJpkW+ooAqDOh5y9yyW-QBBg__5JEdmpMDK=WcCg0REeMQPQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="F0B1561F-FAF9-4043-A58B-4191656832AC_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Comm_split_type(COMM_SELF, MPI_UNDEFINED, ...)<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-26 23:19:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15731.php">George Bosilca: "Re: [OMPI devel] Envelope of HINDEXED_BLOCK"</a>
<li><strong>Previous message:</strong> <a href="15729.php">Ralph Castain: "Re: [OMPI devel] Intermittent MPI issues with torque/maui"</a>
<li><strong>In reply to:</strong> <a href="15727.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Comm_split_type(COMM_SELF, MPI_UNDEFINED, ...)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The proposed patch has several issues, all of them detailed on the ticket.
<br>
A correct patch as well as a broaden tester are provided.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p>On Tue, Aug 26, 2014 at 8:21 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Good catch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I filed <a href="https://svn.open-mpi.org/trac/ompi/ticket/4876">https://svn.open-mpi.org/trac/ompi/ticket/4876</a> with a patch for
</span><br>
<span class="quotelev1">&gt; the fix; I want to get more eyeballs on it before I commit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 26, 2014, at 7:07 AM, Lisandro Dalcin &lt;dalcinl_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; While I agree that the code below is rather useless, however I'm not
</span><br>
<span class="quotelev2">&gt; &gt; sure it should actually fail:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ cat comm_split_type.c
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;assert.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;  MPI_Comm comm;
</span><br>
<span class="quotelev2">&gt; &gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt; &gt;  MPI_Comm_split_type(MPI_COMM_SELF,MPI_UNDEFINED,0,MPI_INFO_NULL,&amp;comm);
</span><br>
<span class="quotelev2">&gt; &gt;  assert(comm == MPI_COMM_NULL);
</span><br>
<span class="quotelev2">&gt; &gt;  MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt;  return 0;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ mpicc comm_split_type.c
</span><br>
<span class="quotelev2">&gt; &gt; $ ./a.out
</span><br>
<span class="quotelev2">&gt; &gt; [kw2060:9865] *** An error occurred in MPI_Comm_split_type
</span><br>
<span class="quotelev2">&gt; &gt; [kw2060:9865] *** reported by process [140735368986625,140071768424448]
</span><br>
<span class="quotelev2">&gt; &gt; [kw2060:9865] *** on communicator MPI_COMM_SELF
</span><br>
<span class="quotelev2">&gt; &gt; [kw2060:9865] *** MPI_ERR_ARG: invalid argument of some other kind
</span><br>
<span class="quotelev2">&gt; &gt; [kw2060:9865] *** MPI_ERRORS_ARE_FATAL (processes in this communicator
</span><br>
<span class="quotelev2">&gt; &gt; will now abort,
</span><br>
<span class="quotelev2">&gt; &gt; [kw2060:9865] ***    and potentially your MPI job)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Lisandro Dalcin
</span><br>
<span class="quotelev2">&gt; &gt; ============
</span><br>
<span class="quotelev2">&gt; &gt; Research Scientist
</span><br>
<span class="quotelev2">&gt; &gt; Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
</span><br>
<span class="quotelev2">&gt; &gt; Numerical Porous Media Center (NumPor)
</span><br>
<span class="quotelev2">&gt; &gt; King Abdullah University of Science and Technology (KAUST)
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://numpor.kaust.edu.sa/">http://numpor.kaust.edu.sa/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 4700 King Abdullah University of Science and Technology
</span><br>
<span class="quotelev2">&gt; &gt; al-Khawarizmi Bldg (Bldg 1), Office # 4332
</span><br>
<span class="quotelev2">&gt; &gt; Thuwal 23955-6900, Kingdom of Saudi Arabia
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Office Phone: +966 12 808-0459
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15710.php">http://www.open-mpi.org/community/lists/devel/2014/08/15710.php</a>
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
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15727.php">http://www.open-mpi.org/community/lists/devel/2014/08/15727.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15730/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15731.php">George Bosilca: "Re: [OMPI devel] Envelope of HINDEXED_BLOCK"</a>
<li><strong>Previous message:</strong> <a href="15729.php">Ralph Castain: "Re: [OMPI devel] Intermittent MPI issues with torque/maui"</a>
<li><strong>In reply to:</strong> <a href="15727.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Comm_split_type(COMM_SELF, MPI_UNDEFINED, ...)"</a>
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
