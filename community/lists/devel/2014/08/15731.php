<?
$subject_val = "Re: [OMPI devel] Envelope of HINDEXED_BLOCK";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 26 23:46:24 2014" -->
<!-- isoreceived="20140827034624" -->
<!-- sent="Tue, 26 Aug 2014 23:46:22 -0400" -->
<!-- isosent="20140827034622" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Envelope of HINDEXED_BLOCK" -->
<!-- id="CAMJJpkV5SnS1VuQjtbrugPytsAA8zWvudxcxYy-7i_=oEYtqUQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAEcYPwCY0qYY5P74mSWEpaLRw7C_yjUJnPo5mr=MrqS86X2Pcw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Envelope of HINDEXED_BLOCK<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-26 23:46:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15732.php">Gilles Gouaillardet: "[OMPI devel] intercomm_create from the ibm test suite hangs"</a>
<li><strong>Previous message:</strong> <a href="15730.php">George Bosilca: "Re: [OMPI devel] Comm_split_type(COMM_SELF, MPI_UNDEFINED, ...)"</a>
<li><strong>In reply to:</strong> <a href="15709.php">Lisandro Dalcin: "[OMPI devel] Envelope of HINDEXED_BLOCK"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Lisandro,
<br>
<p>Thanks for the tester. I pushed a fix in the trunk (r32613) and I requested
<br>
a CMR for the 1.8.3.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p>On Tue, Aug 26, 2014 at 6:53 AM, Lisandro Dalcin &lt;dalcinl_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I've just installed 1.8.2, something is still wrong with
</span><br>
<span class="quotelev1">&gt; HINDEXED_BLOCK datatypes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please note the example below, it should print &quot;ni=2&quot; but I'm getting
</span><br>
<span class="quotelev1">&gt; &quot;ni=7&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ cat type_hindexed_block.c
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   MPI_Datatype datatype;
</span><br>
<span class="quotelev1">&gt;   MPI_Aint disps[] = {0,2,4,6,8};
</span><br>
<span class="quotelev1">&gt;   int ni,na,nd,combiner;
</span><br>
<span class="quotelev1">&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;   MPI_Type_create_hindexed_block(5, 2, disps, MPI_BYTE, &amp;datatype);
</span><br>
<span class="quotelev1">&gt;   MPI_Type_get_envelope(datatype, &amp;ni, &amp;na, &amp;nd, &amp;combiner);
</span><br>
<span class="quotelev1">&gt;   printf(&quot;ni=%d na=%d nd=%d combiner=%d\n&quot;, ni, na, nd, combiner);
</span><br>
<span class="quotelev1">&gt;   MPI_Type_free(&amp;datatype);
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;   return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpicc type_hindexed_block.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ./a.out
</span><br>
<span class="quotelev1">&gt; ni=7 na=5 nd=1 combiner=18
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Lisandro Dalcin
</span><br>
<span class="quotelev1">&gt; ============
</span><br>
<span class="quotelev1">&gt; Research Scientist
</span><br>
<span class="quotelev1">&gt; Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
</span><br>
<span class="quotelev1">&gt; Numerical Porous Media Center (NumPor)
</span><br>
<span class="quotelev1">&gt; King Abdullah University of Science and Technology (KAUST)
</span><br>
<span class="quotelev1">&gt; <a href="http://numpor.kaust.edu.sa/">http://numpor.kaust.edu.sa/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4700 King Abdullah University of Science and Technology
</span><br>
<span class="quotelev1">&gt; al-Khawarizmi Bldg (Bldg 1), Office # 4332
</span><br>
<span class="quotelev1">&gt; Thuwal 23955-6900, Kingdom of Saudi Arabia
</span><br>
<span class="quotelev1">&gt; <a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Office Phone: +966 12 808-0459
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15709.php">http://www.open-mpi.org/community/lists/devel/2014/08/15709.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15731/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15732.php">Gilles Gouaillardet: "[OMPI devel] intercomm_create from the ibm test suite hangs"</a>
<li><strong>Previous message:</strong> <a href="15730.php">George Bosilca: "Re: [OMPI devel] Comm_split_type(COMM_SELF, MPI_UNDEFINED, ...)"</a>
<li><strong>In reply to:</strong> <a href="15709.php">Lisandro Dalcin: "[OMPI devel] Envelope of HINDEXED_BLOCK"</a>
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
