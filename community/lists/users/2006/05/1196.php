<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May  2 12:33:11 2006" -->
<!-- isoreceived="20060502163311" -->
<!-- sent="Tue, 2 May 2006 09:33:37 -0700" -->
<!-- isosent="20060502163337" -->
<!-- name="Brignone, Sergio" -->
<!-- email="sbrignone_at_[hidden]" -->
<!-- subject="Re: [OMPI users] F77 in AIX" -->
<!-- id="04260B711FDCB041A3AFD3476C1D7E14043494_at_sacexm01.nexant.corp" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] F77 in AIX" -->
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
<strong>From:</strong> Brignone, Sergio (<em>sbrignone_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-02 12:33:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1197.php">Dries Kimpe: "[OMPI users] pnetcdf &amp; Open MPI"</a>
<li><strong>Previous message:</strong> <a href="1195.php">Bernard Knaepen: "Re: [OMPI users] fortran mpi io malloc error"</a>
<li><strong>Maybe in reply to:</strong> <a href="1176.php">Brignone, Sergio: "[OMPI users] F77 in AIX"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The problems are related to the bindings.
<br>
I run nm against the libraries and it clearly shows that, among all
<br>
different aliases used, the ones used by the compiler are not there.
<br>
<p>For example, for the FORTAN function called MPI_COMM_RANK, this is what
<br>
is defined in the libraries:
<br>
<p>.MPI_Comm_rank
<br>
.PMPI_Comm_rank
<br>
MPI_Comm_rank
<br>
PMPI_Comm_rank
<br>
.mpi_comm_rank__
<br>
.mpi_comm_rank_f
<br>
MPI_COMM_RANK
<br>
PMPI_COMM_RANK
<br>
mpi_comm_rank
<br>
mpi_comm_rank_
<br>
mpi_comm_rank__
<br>
mpi_comm_rank_f
<br>
pmpi_comm_rank
<br>
pmpi_comm_rank_
<br>
pmpi_comm_rank__
<br>
<p>As I previously wrote, the one needed is:
<br>
<p>.mpi_comm_rank
<br>
<p>And it is not in the list
<br>
<p><p>Note that .mpi_comm_rank__ is defined, so, in the mean time, in the
<br>
FORTRAN code, if I use MPI_COMM_RANK__ instead of MPI_COMM_RANK, it
<br>
works ... but this is a temporary fix.
<br>
<p>Sergio
<br>
<p><p><p><p><p><p>-----Original Message-----
<br>
From: Jeff Squyres (jsquyres) [mailto:jsquyres_at_[hidden]] 
<br>
Sent: Monday, May 01, 2006 9:10 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] F77 in AIX
<br>
<p>Can you run &quot;mpif77 --showme&quot;?  This will show the underlying command
<br>
that mpif77 is issuing.  We can verify that it is linking against the
<br>
right Open MPI libraries, etc.
<br>
<p>&nbsp;
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Brignone, Sergio
</span><br>
<span class="quotelev1">&gt; Sent: Monday, May 01, 2006 2:14 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] F77 in AIX
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to compile a FORTRAN 77 test case and it failed when linking:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; %&gt;mpif77 -o fpi fpi.f
</span><br>
<span class="quotelev1">&gt; &quot;/usr/local/include/mpif.h&quot;, line 64.38: 1515-009 (E) Null literal
</span><br>
<span class="quotelev1">&gt; string is not permitted.  A single blank is assumed.
</span><br>
<span class="quotelev1">&gt; ** main   === End of Compilation 1 ===
</span><br>
<span class="quotelev1">&gt; 1501-510  Compilation successful for file fpi.f.
</span><br>
<span class="quotelev1">&gt; ld: 0711-317 ERROR: Undefined symbol: .mpi_init
</span><br>
<span class="quotelev1">&gt; ld: 0711-317 ERROR: Undefined symbol: .mpi_comm_rank
</span><br>
<span class="quotelev1">&gt; ld: 0711-317 ERROR: Undefined symbol: .mpi_comm_size
</span><br>
<span class="quotelev1">&gt; ld: 0711-317 ERROR: Undefined symbol: .mpi_bcast
</span><br>
<span class="quotelev1">&gt; ld: 0711-317 ERROR: Undefined symbol: .mpi_reduce
</span><br>
<span class="quotelev1">&gt; ld: 0711-317 ERROR: Undefined symbol: .mpi_finalize
</span><br>
<span class="quotelev1">&gt; ld: 0711-345 Use the -bloadmap or -bnoquiet option to obtain more
</span><br>
<span class="quotelev1">&gt; information.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you know how should I define the bindings to avoid this kind of
</span><br>
<span class="quotelev1">&gt; problems?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sergio
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; **************************************************************
</span><br>
<span class="quotelev1">&gt; ***************
</span><br>
<span class="quotelev1">&gt; **                                                            
</span><br>
<span class="quotelev1">&gt;              **
</span><br>
<span class="quotelev1">&gt; ** WARNING:  This email contains an attachment of a very 
</span><br>
<span class="quotelev1">&gt; suspicious type.  **
</span><br>
<span class="quotelev1">&gt; ** You are urged NOT to open this attachment unless you are 
</span><br>
<span class="quotelev1">&gt; absolutely     **
</span><br>
<span class="quotelev1">&gt; ** sure it is legitmate.  Opening this attachment may cause 
</span><br>
<span class="quotelev1">&gt; irreparable    **
</span><br>
<span class="quotelev1">&gt; ** damage to your computer and your files.  If you have any 
</span><br>
<span class="quotelev1">&gt; questions      **
</span><br>
<span class="quotelev1">&gt; ** about the validity of this message, PLEASE SEEK HELP 
</span><br>
<span class="quotelev1">&gt; BEFORE OPENING IT. **
</span><br>
<span class="quotelev1">&gt; **                                                            
</span><br>
<span class="quotelev1">&gt;              **
</span><br>
<span class="quotelev1">&gt; ** This warning was added by the IU Computer Science Dept. 
</span><br>
<span class="quotelev1">&gt; mail scanner.   **
</span><br>
<span class="quotelev1">&gt; **************************************************************
</span><br>
<span class="quotelev1">&gt; ***************
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1197.php">Dries Kimpe: "[OMPI users] pnetcdf &amp; Open MPI"</a>
<li><strong>Previous message:</strong> <a href="1195.php">Bernard Knaepen: "Re: [OMPI users] fortran mpi io malloc error"</a>
<li><strong>Maybe in reply to:</strong> <a href="1176.php">Brignone, Sergio: "[OMPI users] F77 in AIX"</a>
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
