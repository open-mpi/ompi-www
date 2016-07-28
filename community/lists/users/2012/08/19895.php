<?
$subject_val = "Re: [OMPI users] mpi.h incorrect format error?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  6 11:32:35 2012" -->
<!-- isoreceived="20120806153235" -->
<!-- sent="Mon, 6 Aug 2012 11:32:31 -0400" -->
<!-- isosent="20120806153231" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi.h incorrect format error?" -->
<!-- id="4EF3C567-9ADB-4103-AA30-E5BBD2493353_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="501FD642.6000801_at_earthlink.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi.h incorrect format error?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-06 11:32:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19896.php">Paul Romano: "[OMPI users] Parallel I/O doesn't work for derived datatypes with Fortran 90 interface"</a>
<li><strong>Previous message:</strong> <a href="19894.php">Tim Prince: "Re: [OMPI users] mpi.h incorrect format error?"</a>
<li><strong>In reply to:</strong> <a href="19893.php">PattiMichelle: "[OMPI users] mpi.h incorrect format error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/07/19826.php">Shiqing Fan: "Re: [OMPI users] Fortran90 Bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 6, 2012, at 10:35 AM, PattiMichelle wrote:
<br>
<p><span class="quotelev1">&gt; /usr/local/openmpi_16/include/mpi.h:1083:25: error: expected identifier or &#145;(&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi_16/include/mpi.h:1097:25: error: &#145;MPI_Comm&#146; redeclared as different kind of symbol
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi_16/include/mpi.h:319:37: note: previous declaration of &#145;MPI_Comm&#146; was here
</span><br>
<p>+1 on what Tim said.
<br>
<p>Additionally, what version of Open MPI is this (1.6?), and where did you get it from?
<br>
<p>I ask because these are very strange lines to get errors on in mpi.h.  In my copy of OMPI 1.6, mpi.h:1081-4 is:
<br>
<p>-----
<br>
1081: OMPI_DECLSPEC  int MPI_Comm_accept(char *port_name, MPI_Info info, int root,
<br>
1082:                                    MPI_Comm comm, MPI_Comm *newcomm);
<br>
1083: OMPI_DECLSPEC  MPI_Fint MPI_Comm_c2f(MPI_Comm comm);
<br>
1084: OMPI_DECLSPEC  int MPI_Comm_call_errhandler(MPI_Comm comm, int errorcode);
<br>
-----
<br>
<p>MPI_Fint on 1083 should likely resolve to &quot;int&quot;, and OMPI_DELCSPEC will resolve to be nothing or an __attribute__ directive.  But OMPI_DECLSPEC has already been used a bajillion times already in mpi.h, so that can't be the error.  I don't see any other error before MPI_Fint.
<br>
<p>Similarly, line 1097 also uses MPI_Fint.
<br>
<p>Is something else defining the value of MPI_Fint before you include mpi.h, perchance?
<br>
<p>I ask because I notice that we define MPI_Fint thusly:
<br>
<p>-----
<br>
#ifndef MPI_Fint
<br>
/* MPI_Fint is the same as ompi_fortran_INTEGER_t */
<br>
#define MPI_Fint ompi_fortran_integer_t
<br>
#endif
<br>
-----
<br>
<p>Meaning that if someone else has defined MPI_Fint before us, we'll keep that definition.  Which actually seems like a bad idea, but even so, no one else should be defining what MPI_Fint is.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19896.php">Paul Romano: "[OMPI users] Parallel I/O doesn't work for derived datatypes with Fortran 90 interface"</a>
<li><strong>Previous message:</strong> <a href="19894.php">Tim Prince: "Re: [OMPI users] mpi.h incorrect format error?"</a>
<li><strong>In reply to:</strong> <a href="19893.php">PattiMichelle: "[OMPI users] mpi.h incorrect format error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/07/19826.php">Shiqing Fan: "Re: [OMPI users] Fortran90 Bindings"</a>
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
