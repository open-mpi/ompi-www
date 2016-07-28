<?
$subject_val = "Re: [OMPI devel] malloc(0) warning with 1.8.7";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 27 04:22:54 2015" -->
<!-- isoreceived="20150727082254" -->
<!-- sent="Mon, 27 Jul 2015 17:22:49 +0900" -->
<!-- isosent="20150727082249" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] malloc(0) warning with 1.8.7" -->
<!-- id="55B5EA59.20407_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAkFZ5utod8GMG11TeFgP_w-++58E=kKu58h4-QAdiaaENkM5w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] malloc(0) warning with 1.8.7<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-27 04:22:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17713.php">Christoph Niethammer: "[OMPI devel] stdout, stderr reporting different values for isatty"</a>
<li><strong>Previous message:</strong> <a href="17711.php">Gilles Gouaillardet: "Re: [OMPI devel] malloc(0) warning with 1.8.7"</a>
<li><strong>In reply to:</strong> <a href="17711.php">Gilles Gouaillardet: "Re: [OMPI devel] malloc(0) warning with 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17733.php">Lisandro Dalcin: "Re: [OMPI devel] malloc(0) warning with 1.8.7"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17733.php">Lisandro Dalcin: "Re: [OMPI devel] malloc(0) warning with 1.8.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Lisandro,
<br>
<p>i fixed it on master at 
<br>
<a href="https://github.com/open-mpi/ompi/commit/318a1a40a4ab345f417b8932326d4dd2e68d82bc">https://github.com/open-mpi/ompi/commit/318a1a40a4ab345f417b8932326d4dd2e68d82bc</a>
<br>
<p>could you git it a try ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 7/26/2015 9:26 AM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Lisandro,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think I see what is going wrong and will fix it
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the report,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Saturday, July 25, 2015, Lisandro Dalcin &lt;dalcinl_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:dalcinl_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Using a debug build of 1.8.7, I'm still getting this malloc(0)
</span><br>
<span class="quotelev1">&gt;     warning:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     malloc debug: Request for 0 bytes
</span><br>
<span class="quotelev1">&gt;     (coll_libnbc_ireduce_scatter_block.c, 67)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The simple code below should reproduce it:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     $ cat ireduce_scatter_block.c
</span><br>
<span class="quotelev1">&gt;     #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;     int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;       MPI_Request request;
</span><br>
<span class="quotelev1">&gt;       MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;       MPI_Ireduce_scatter_block(NULL, NULL, 0, MPI_INT,
</span><br>
<span class="quotelev1">&gt;                                 MPI_SUM, MPI_COMM_SELF, &amp;request);
</span><br>
<span class="quotelev1">&gt;       MPI_Wait(&amp;request, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev1">&gt;       MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;       return 0;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     $ mpicc ireduce_scatter_block.c
</span><br>
<span class="quotelev1">&gt;     $ mpiexec -n 1 ./a.out
</span><br>
<span class="quotelev1">&gt;     malloc debug: Request for 0 bytes
</span><br>
<span class="quotelev1">&gt;     (coll_libnbc_ireduce_scatter_block.c, 67)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --
</span><br>
<span class="quotelev1">&gt;     Lisandro Dalcin
</span><br>
<span class="quotelev1">&gt;     ============
</span><br>
<span class="quotelev1">&gt;     Research Scientist
</span><br>
<span class="quotelev1">&gt;     Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
</span><br>
<span class="quotelev1">&gt;     Numerical Porous Media Center (NumPor)
</span><br>
<span class="quotelev1">&gt;     King Abdullah University of Science and Technology (KAUST)
</span><br>
<span class="quotelev1">&gt;     <a href="http://numpor.kaust.edu.sa/">http://numpor.kaust.edu.sa/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     4700 King Abdullah University of Science and Technology
</span><br>
<span class="quotelev1">&gt;     al-Khawarizmi Bldg (Bldg 1), Office # 4332
</span><br>
<span class="quotelev1">&gt;     Thuwal 23955-6900, Kingdom of Saudi Arabia
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Office Phone: +966 12 808-0459
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     devel mailing list
</span><br>
<span class="quotelev1">&gt;     devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17696.php">http://www.open-mpi.org/community/lists/devel/2015/07/17696.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17711.php">http://www.open-mpi.org/community/lists/devel/2015/07/17711.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17712/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17713.php">Christoph Niethammer: "[OMPI devel] stdout, stderr reporting different values for isatty"</a>
<li><strong>Previous message:</strong> <a href="17711.php">Gilles Gouaillardet: "Re: [OMPI devel] malloc(0) warning with 1.8.7"</a>
<li><strong>In reply to:</strong> <a href="17711.php">Gilles Gouaillardet: "Re: [OMPI devel] malloc(0) warning with 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17733.php">Lisandro Dalcin: "Re: [OMPI devel] malloc(0) warning with 1.8.7"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17733.php">Lisandro Dalcin: "Re: [OMPI devel] malloc(0) warning with 1.8.7"</a>
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
