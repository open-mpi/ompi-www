<?
$subject_val = "Re: [OMPI devel] Issues with MPI_Add_error_class()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 22 23:08:03 2014" -->
<!-- isoreceived="20140423030803" -->
<!-- sent="Tue, 22 Apr 2014 23:08:00 -0400" -->
<!-- isosent="20140423030800" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Issues with MPI_Add_error_class()" -->
<!-- id="CAMJJpkX08kpR2P2zitSWwLJXh8jcMBG9iejR2nPKUL3ZWY0OKA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAEcYPwAfV3UYc4QYnYHsY+KA+--GKHtQbwb-769QfrYBydqD6A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Issues with MPI_Add_error_class()<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-22 23:08:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14579.php">Gilles Gouaillardet: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<li><strong>Previous message:</strong> <a href="14577.php">Nathan Hjelm: "Re: [OMPI devel] Win_fence() with assertion=MPI_MODE_NOPRECEDE|MPI_MODE_NOSUCCEED"</a>
<li><strong>In reply to:</strong> <a href="14564.php">Lisandro Dalcin: "[OMPI devel] Issues with MPI_Add_error_class()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Both these issues are fixed in the trunk and are scheduled for the
<br>
1.8. The commit you need to check is r28584 and the corresponding
<br>
ticket is
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/4554">https://svn.open-mpi.org/trac/ompi/ticket/4554</a>
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Mon, Apr 21, 2014 at 8:45 AM, Lisandro Dalcin &lt;dalcinl_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; It seems the implementation of MPI_Add_error_class() is out of sync
</span><br>
<span class="quotelev1">&gt; with the definition of MPI_ERR_LASTCODE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please review the list of error classes in mpi.h and the code in this
</span><br>
<span class="quotelev1">&gt; file: <a href="https://bitbucket.org/ompiteam/ompi-svn-mirror/src/v1.8/ompi/errhandler/errcode.c">https://bitbucket.org/ompiteam/ompi-svn-mirror/src/v1.8/ompi/errhandler/errcode.c</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW, in that file, all the MPI_T_ERR_XXX are not handled. The MPI-3
</span><br>
<span class="quotelev1">&gt; standard says they should be treated as other MPI error classes.
</span><br>
<span class="quotelev1">&gt; Trying to get an error string out of them (eg. MPI_T_ERR_MEMORY)
</span><br>
<span class="quotelev1">&gt; generates an error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [dalcinl_at_kw2060 openmpi]$ cat add_error_class.c
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   int errorclass,*lastused,flag;
</span><br>
<span class="quotelev1">&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;   MPI_Add_error_class(&amp;errorclass);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_get_attr(MPI_COMM_WORLD, MPI_LASTUSEDCODE, &amp;lastused, &amp;flag);
</span><br>
<span class="quotelev1">&gt;   printf(&quot;errorclass:%d lastused:%d MPI_ERR_LASTCODE:%d\n&quot;,
</span><br>
<span class="quotelev1">&gt; errorclass, *lastused, MPI_ERR_LASTCODE);
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;   return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; [dalcinl_at_kw2060 openmpi]$ mpicc add_error_class.c
</span><br>
<span class="quotelev1">&gt; [dalcinl_at_kw2060 openmpi]$ ./a.out
</span><br>
<span class="quotelev1">&gt; errorclass:54 lastused:54 MPI_ERR_LASTCODE:71
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [dalcinl_at_kw2060 openmpi]$ cat error_string.c
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   char errorstring[MPI_MAX_ERROR_STRING];
</span><br>
<span class="quotelev1">&gt;   int slen;
</span><br>
<span class="quotelev1">&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;   MPI_Error_string(MPI_T_ERR_MEMORY, errorstring, &amp;slen);
</span><br>
<span class="quotelev1">&gt;   printf(&quot;errorclass:%d errorstring:%s\n&quot;, MPI_T_ERR_MEMORY, errorstring);
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;   return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; [dalcinl_at_kw2060 openmpi]$ mpicc error_string.c
</span><br>
<span class="quotelev1">&gt; [dalcinl_at_kw2060 openmpi]$ ./a.out
</span><br>
<span class="quotelev1">&gt; [kw2060:20883] *** An error occurred in MPI_Error_string
</span><br>
<span class="quotelev1">&gt; [kw2060:20883] *** reported by process [140737332576257,0]
</span><br>
<span class="quotelev1">&gt; [kw2060:20883] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [kw2060:20883] *** MPI_ERR_ARG: invalid argument of some other kind
</span><br>
<span class="quotelev1">&gt; [kw2060:20883] *** MPI_ERRORS_ARE_FATAL (processes in this
</span><br>
<span class="quotelev1">&gt; communicator will now abort,
</span><br>
<span class="quotelev1">&gt; [kw2060:20883] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Lisandro Dalcin
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; CIMEC (UNL/CONICET)
</span><br>
<span class="quotelev1">&gt; Predio CONICET-Santa Fe
</span><br>
<span class="quotelev1">&gt; Colectora RN 168 Km 472, Paraje El Pozo
</span><br>
<span class="quotelev1">&gt; 3000 Santa Fe, Argentina
</span><br>
<span class="quotelev1">&gt; Tel: +54-342-4511594 (ext 1016)
</span><br>
<span class="quotelev1">&gt; Tel/Fax: +54-342-4511169
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14564.php">http://www.open-mpi.org/community/lists/devel/2014/04/14564.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14579.php">Gilles Gouaillardet: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<li><strong>Previous message:</strong> <a href="14577.php">Nathan Hjelm: "Re: [OMPI devel] Win_fence() with assertion=MPI_MODE_NOPRECEDE|MPI_MODE_NOSUCCEED"</a>
<li><strong>In reply to:</strong> <a href="14564.php">Lisandro Dalcin: "[OMPI devel] Issues with MPI_Add_error_class()"</a>
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
