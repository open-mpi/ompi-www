<?
$subject_val = "Re: [OMPI devel] Comm_split_type(COMM_SELF, MPI_UNDEFINED, ...)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 26 20:21:36 2014" -->
<!-- isoreceived="20140827002136" -->
<!-- sent="Wed, 27 Aug 2014 00:21:33 +0000" -->
<!-- isosent="20140827002133" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Comm_split_type(COMM_SELF, MPI_UNDEFINED, ...)" -->
<!-- id="F0B1561F-FAF9-4043-A58B-4191656832AC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAEcYPwBT7yqMfu7PyXtmLDppLLaiX05sxh=HV9Q6TDDnmvrsow_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-26 20:21:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15728.php">Andrej Prsa: "Re: [OMPI devel] Intermittent MPI issues with torque/maui"</a>
<li><strong>Previous message:</strong> <a href="15726.php">Ralph Castain: "Re: [OMPI devel] Intermittent MPI issues with torque/maui"</a>
<li><strong>In reply to:</strong> <a href="15710.php">Lisandro Dalcin: "[OMPI devel] Comm_split_type(COMM_SELF, MPI_UNDEFINED, ...)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15730.php">George Bosilca: "Re: [OMPI devel] Comm_split_type(COMM_SELF, MPI_UNDEFINED, ...)"</a>
<li><strong>Reply:</strong> <a href="15730.php">George Bosilca: "Re: [OMPI devel] Comm_split_type(COMM_SELF, MPI_UNDEFINED, ...)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good catch.
<br>
<p>I filed <a href="https://svn.open-mpi.org/trac/ompi/ticket/4876">https://svn.open-mpi.org/trac/ompi/ticket/4876</a> with a patch for the fix; I want to get more eyeballs on it before I commit.
<br>
<p><p>On Aug 26, 2014, at 7:07 AM, Lisandro Dalcin &lt;dalcinl_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; While I agree that the code below is rather useless, however I'm not
</span><br>
<span class="quotelev1">&gt; sure it should actually fail:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ cat comm_split_type.c
</span><br>
<span class="quotelev1">&gt; #include &lt;assert.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  MPI_Comm comm;
</span><br>
<span class="quotelev1">&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_split_type(MPI_COMM_SELF,MPI_UNDEFINED,0,MPI_INFO_NULL,&amp;comm);
</span><br>
<span class="quotelev1">&gt;  assert(comm == MPI_COMM_NULL);
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;  return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpicc comm_split_type.c
</span><br>
<span class="quotelev1">&gt; $ ./a.out
</span><br>
<span class="quotelev1">&gt; [kw2060:9865] *** An error occurred in MPI_Comm_split_type
</span><br>
<span class="quotelev1">&gt; [kw2060:9865] *** reported by process [140735368986625,140071768424448]
</span><br>
<span class="quotelev1">&gt; [kw2060:9865] *** on communicator MPI_COMM_SELF
</span><br>
<span class="quotelev1">&gt; [kw2060:9865] *** MPI_ERR_ARG: invalid argument of some other kind
</span><br>
<span class="quotelev1">&gt; [kw2060:9865] *** MPI_ERRORS_ARE_FATAL (processes in this communicator
</span><br>
<span class="quotelev1">&gt; will now abort,
</span><br>
<span class="quotelev1">&gt; [kw2060:9865] ***    and potentially your MPI job)
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15710.php">http://www.open-mpi.org/community/lists/devel/2014/08/15710.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15728.php">Andrej Prsa: "Re: [OMPI devel] Intermittent MPI issues with torque/maui"</a>
<li><strong>Previous message:</strong> <a href="15726.php">Ralph Castain: "Re: [OMPI devel] Intermittent MPI issues with torque/maui"</a>
<li><strong>In reply to:</strong> <a href="15710.php">Lisandro Dalcin: "[OMPI devel] Comm_split_type(COMM_SELF, MPI_UNDEFINED, ...)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15730.php">George Bosilca: "Re: [OMPI devel] Comm_split_type(COMM_SELF, MPI_UNDEFINED, ...)"</a>
<li><strong>Reply:</strong> <a href="15730.php">George Bosilca: "Re: [OMPI devel] Comm_split_type(COMM_SELF, MPI_UNDEFINED, ...)"</a>
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
