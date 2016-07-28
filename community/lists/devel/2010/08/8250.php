<?
$subject_val = "Re: [OMPI devel] VampirTrace and MPI_Init_thread()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 10 21:59:17 2010" -->
<!-- isoreceived="20100811015917" -->
<!-- sent="Tue, 10 Aug 2010 21:59:10 -0400" -->
<!-- isosent="20100811015910" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] VampirTrace and MPI_Init_thread()" -->
<!-- id="3370ECCC-24D3-40B8-857B-1103467BC380_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTimUFYr_=SLgvRbWqjNL5-t-f09FMp_k7NAdbyB1_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] VampirTrace and MPI_Init_thread()<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-10 21:59:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8251.php">Lisandro Dalcin: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<li><strong>Previous message:</strong> <a href="8249.php">Lisandro Dalcin: "[OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<li><strong>In reply to:</strong> <a href="8249.php">Lisandro Dalcin: "[OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8251.php">Lisandro Dalcin: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<li><strong>Reply:</strong> <a href="8251.php">Lisandro Dalcin: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Lisandro,
<br>
<p>Thanks for the report. I quickly checked the Open MPI source code and the .so library and both show the existence of both MPI_Init_thread and PMPI_Init_thread symbols.
<br>
<p>0000000000031b60 T _MPI_Init_thread
<br>
000000000005e7c0 T _PMPI_Init_thread
<br>
<p>I CC'ed the VT folks.
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Aug 10, 2010, at 20:59 , Lisandro Dalcin wrote:
<br>
<p><span class="quotelev1">&gt; Below you have C program that will MPI_Init_thread()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ cat demo/helloworld.c
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  int provided;
</span><br>
<span class="quotelev1">&gt;  int size, rank, len;
</span><br>
<span class="quotelev1">&gt;  char name[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MPI_Init_thread(&amp;argc, &amp;argv, MPI_THREAD_MULTIPLE, &amp;provided);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;  MPI_Get_processor_name(name, &amp;len);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  printf(&quot;Hello, World! I am process %d of %d on %s.\n&quot;, rank, size, name);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;  return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now I build like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpicc-vt demo/helloworld.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and then try to run it:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ./a.out
</span><br>
<span class="quotelev1">&gt; Hello, World! I am process 0 of 1 on trantor.
</span><br>
<span class="quotelev1">&gt; [trantor:18854] *** An error occurred in MPI_Group_free
</span><br>
<span class="quotelev1">&gt; [trantor:18854] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [trantor:18854] *** MPI_ERR_GROUP: invalid group
</span><br>
<span class="quotelev1">&gt; [trantor:18854] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, if MPI_Init() is used, it succeeds.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems the MPI_Init_thread() wrapper to PMPI_Init_thread() is
</span><br>
<span class="quotelev1">&gt; missing, see this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ nm a.out | grep MPI_Init
</span><br>
<span class="quotelev1">&gt; 0805c4ef T MPI_Init
</span><br>
<span class="quotelev1">&gt;         U MPI_Init_thread
</span><br>
<span class="quotelev1">&gt;         U PMPI_Init
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PS: Sorry if this is actually a VT bug. I'm not a VT user, I'm just
</span><br>
<span class="quotelev1">&gt; reporting this issue (related to a mpi4py bug report that arrived at
</span><br>
<span class="quotelev1">&gt; my inbox months ago).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Lisandro Dalcin
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; CIMEC (INTEC/CONICET-UNL)
</span><br>
<span class="quotelev1">&gt; Predio CONICET-Santa Fe
</span><br>
<span class="quotelev1">&gt; Colectora RN 168 Km 472, Paraje El Pozo
</span><br>
<span class="quotelev1">&gt; Tel: +54-342-4511594 (ext 1011)
</span><br>
<span class="quotelev1">&gt; Tel/Fax: +54-342-4511169
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8251.php">Lisandro Dalcin: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<li><strong>Previous message:</strong> <a href="8249.php">Lisandro Dalcin: "[OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<li><strong>In reply to:</strong> <a href="8249.php">Lisandro Dalcin: "[OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8251.php">Lisandro Dalcin: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<li><strong>Reply:</strong> <a href="8251.php">Lisandro Dalcin: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
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
