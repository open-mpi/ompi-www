<?
$subject_val = "Re: [OMPI users] Bug Report for MPI_Alltoall";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 19 10:25:43 2012" -->
<!-- isoreceived="20120119152543" -->
<!-- sent="Thu, 19 Jan 2012 10:25:38 -0500" -->
<!-- isosent="20120119152538" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug Report for MPI_Alltoall" -->
<!-- id="3A09E1C2-2126-49FA-A56F-1021C859D5B0_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="FADC5EF855A4B441B284EDC51140C5F136549D01_at_ca3.appro.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bug Report for MPI_Alltoall<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-19 10:25:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18218.php">Jeff Squyres: "Re: [OMPI users] MPI_Type_struct for template class with dynamic arrays and objs. instantiated from other classes"</a>
<li><strong>Previous message:</strong> <a href="18216.php">Durga Choudhury: "Re: [OMPI users] system() call corrupts MPI processes"</a>
<li><strong>In reply to:</strong> <a href="18203.php">David Race: "[OMPI users] Bug Report for MPI_Alltoall"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the bug report!
<br>
<p>I have no idea how this slipped through the cracks, but IN_PLACE support for MPI_ALLTOALL seems to be missing.  :-(
<br>
<p>I've filed a bug about it: <a href="https://svn.open-mpi.org/trac/ompi/ticket/2965">https://svn.open-mpi.org/trac/ompi/ticket/2965</a>.
<br>
<p><p>On Jan 18, 2012, at 4:38 PM, David Race wrote:
<br>
<p><span class="quotelev1">&gt; One of our users makes use of the MPI_IN_PLACE option, but there appears to be a bug in the MPI_Alltoall.  According to the specification -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The &#147;in place&#148; option for intracommunicators is specified by passing MPI_IN_PLACE to
</span><br>
<span class="quotelev1">&gt; the argument sendbuf at all processes. In such a case, sendcount and sendtype are ignored.
</span><br>
<span class="quotelev1">&gt; The data to be sent is taken from the recvbuf and replaced by the received data. Data sent
</span><br>
<span class="quotelev1">&gt; and received must have the same type map as specified by recvcount and recvtype.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The application fails with 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [prod-0002:12156] *** An error occurred in MPI_Alltoall
</span><br>
<span class="quotelev1">&gt; [prod-0002:12156] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [prod-0002:12156] *** MPI_ERR_ARG: invalid argument of some other kind
</span><br>
<span class="quotelev1">&gt; [prod-0002:12156] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The file below shows the potential bug:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ================================================================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; //
</span><br>
<span class="quotelev1">&gt; //  test program for the potential invalid argument bug
</span><br>
<span class="quotelev1">&gt; //
</span><br>
<span class="quotelev1">&gt; //  David Race
</span><br>
<span class="quotelev1">&gt; //  18 Jan 2012
</span><br>
<span class="quotelev1">&gt; //
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;math.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;time.h&gt;
</span><br>
<span class="quotelev1">&gt; //
</span><br>
<span class="quotelev1">&gt; //  mpi
</span><br>
<span class="quotelev1">&gt; //
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; #define  MAX_SIZE 32
</span><br>
<span class="quotelev1">&gt; //
</span><br>
<span class="quotelev1">&gt; //
</span><br>
<span class="quotelev1">&gt; //
</span><br>
<span class="quotelev1">&gt; int main ( int argc, char *argv[] )
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; 	//
</span><br>
<span class="quotelev1">&gt; 	//  definitions
</span><br>
<span class="quotelev1">&gt; 	//
</span><br>
<span class="quotelev1">&gt; 	int	mpierror, isize, myRank; 
</span><br>
<span class="quotelev1">&gt; 	int	typeSize;
</span><br>
<span class="quotelev1">&gt; 	int	valA[MAX_SIZE], valB[MAX_SIZE];
</span><br>
<span class="quotelev1">&gt; 	int	i, j;
</span><br>
<span class="quotelev1">&gt; 	int	commRoot;
</span><br>
<span class="quotelev1">&gt; 	//
</span><br>
<span class="quotelev1">&gt; 	//  start processing
</span><br>
<span class="quotelev1">&gt; 	//
</span><br>
<span class="quotelev1">&gt; 	printf(&quot;Start of program\n&quot;);
</span><br>
<span class="quotelev1">&gt; 	printf(&quot;SIZE OF VALA %ld\n&quot;,sizeof(valA));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	mpierror = MPI_Init ( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev1">&gt;  	mpierror = MPI_Comm_rank ( MPI_COMM_WORLD, &amp;myRank );
</span><br>
<span class="quotelev1">&gt;  	mpierror = MPI_Comm_size ( MPI_COMM_WORLD, &amp;isize );
</span><br>
<span class="quotelev1">&gt; 	MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 	//
</span><br>
<span class="quotelev1">&gt; 	//  test the mpi_type_size using MPI_Alltoall
</span><br>
<span class="quotelev1">&gt; 	//
</span><br>
<span class="quotelev1">&gt; 	if (myRank == 0) {
</span><br>
<span class="quotelev1">&gt; 		printf(&quot;=====================================================\n&quot;);
</span><br>
<span class="quotelev1">&gt; 		printf(&quot;               Alltoall : Should work                \n&quot;);
</span><br>
<span class="quotelev1">&gt; 		printf(&quot;=====================================================\n&quot;);
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt; 	fflush(stdout);
</span><br>
<span class="quotelev1">&gt; 	for(i=0;i&lt;isize;i++) {
</span><br>
<span class="quotelev1">&gt; 		valA[i] = i;
</span><br>
<span class="quotelev1">&gt; 		valB[i] = -1;
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt; 	commRoot = 0;
</span><br>
<span class="quotelev1">&gt; 	MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 	mpierror = MPI_Alltoall(valA, 1, MPI_INT, valB, 1, MPI_INT, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 	MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 	for (j=0;j&lt;isize;j++) {
</span><br>
<span class="quotelev1">&gt; 		MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 		if (myRank == j) {
</span><br>
<span class="quotelev1">&gt; 			for(i=0;i&lt;isize;i++) printf(&quot;ALLTOALL NODE %d\tValue from node %d is %d\n&quot;,myRank, i, valA[i]);
</span><br>
<span class="quotelev1">&gt; 		}
</span><br>
<span class="quotelev1">&gt; 		fflush(stdout);
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt; 	//
</span><br>
<span class="quotelev1">&gt; 	//  test the mpi_type_size using MPI_Alltoall
</span><br>
<span class="quotelev1">&gt; 	//
</span><br>
<span class="quotelev1">&gt; 	MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 	if (myRank == 0) {
</span><br>
<span class="quotelev1">&gt; 		printf(&quot;=====================================================\n&quot;);
</span><br>
<span class="quotelev1">&gt; 		printf(&quot;                Alltoall : ????                      \n&quot;);
</span><br>
<span class="quotelev1">&gt; 		printf(&quot;=====================================================\n&quot;);
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt; 	fflush(stdout);
</span><br>
<span class="quotelev1">&gt; 	for(i=0;i&lt;isize;i++) valA[i] = i;
</span><br>
<span class="quotelev1">&gt; 	commRoot = 0;
</span><br>
<span class="quotelev1">&gt; 	MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 	//
</span><br>
<span class="quotelev1">&gt; 	//  The error occurs here
</span><br>
<span class="quotelev1">&gt; 	//
</span><br>
<span class="quotelev1">&gt; 	mpierror = MPI_Alltoall(MPI_IN_PLACE, 1, MPI_INT, valA, 1, MPI_INT, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 	MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 	if (myRank == 0) {
</span><br>
<span class="quotelev1">&gt; 		for(i=0;i&lt;isize;i++) printf(&quot;ALLTOALL NODE %d\tValue from node %d is %d\n&quot;,myRank, i,valA[i]);
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt; 	fflush(stdout);
</span><br>
<span class="quotelev1">&gt; 	MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 	if (myRank == 1) {
</span><br>
<span class="quotelev1">&gt; 		for(i=0;i&lt;isize;i++) printf(&quot;ALLTOALL NODE %d\tValue from node %d is %d\n&quot;,myRank, i, valA[i]);
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt; 	fflush(stdout);
</span><br>
<span class="quotelev1">&gt; 	MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 	//
</span><br>
<span class="quotelev1">&gt; 	//  test the mpi_type_size using MPI_Alltoall
</span><br>
<span class="quotelev1">&gt; 	//
</span><br>
<span class="quotelev1">&gt; 	if (myRank == 0) {
</span><br>
<span class="quotelev1">&gt; 		printf(&quot;=====================================================\n&quot;);
</span><br>
<span class="quotelev1">&gt; 		printf(&quot;       Alltoall : Failure with some MPI              \n&quot;);
</span><br>
<span class="quotelev1">&gt; 		printf(&quot;=====================================================\n&quot;);
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt; 	fflush(stdout);
</span><br>
<span class="quotelev1">&gt; 	for(i=0;i&lt;isize;i++) valA[i] = i;
</span><br>
<span class="quotelev1">&gt; 	commRoot = 0;
</span><br>
<span class="quotelev1">&gt; 	MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 	//
</span><br>
<span class="quotelev1">&gt; 	//  The error occurs here
</span><br>
<span class="quotelev1">&gt; 	//
</span><br>
<span class="quotelev1">&gt; 	mpierror = MPI_Alltoall(MPI_IN_PLACE, 0, MPI_DATATYPE_NULL, valA, 1, MPI_INT, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 	MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 	if (myRank == 0) {
</span><br>
<span class="quotelev1">&gt; 		for(i=0;i&lt;isize;i++) printf(&quot;ALLTOALL NODE %d\tValue from node %d is %d\n&quot;,myRank, i,valA[i]);
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt; 	fflush(stdout);
</span><br>
<span class="quotelev1">&gt; 	MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 	if (myRank == 1) {
</span><br>
<span class="quotelev1">&gt; 		for(i=0;i&lt;isize;i++) printf(&quot;ALLTOALL NODE %d\tValue from node %d is %d\n&quot;,myRank, i, valA[i]);
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt; 	fflush(stdout);
</span><br>
<span class="quotelev1">&gt; 	MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 	mpierror = MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; 	fflush(stdout);
</span><br>
<span class="quotelev1">&gt; 	printf(&quot;End of Program\n&quot;);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18218.php">Jeff Squyres: "Re: [OMPI users] MPI_Type_struct for template class with dynamic arrays and objs. instantiated from other classes"</a>
<li><strong>Previous message:</strong> <a href="18216.php">Durga Choudhury: "Re: [OMPI users] system() call corrupts MPI processes"</a>
<li><strong>In reply to:</strong> <a href="18203.php">David Race: "[OMPI users] Bug Report for MPI_Alltoall"</a>
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
