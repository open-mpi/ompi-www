<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr 24 17:44:32 2006" -->
<!-- isoreceived="20060424214432" -->
<!-- sent="Mon, 24 Apr 2006 17:42:13 -0400" -->
<!-- isosent="20060424214213" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_LONG_LONG_INT != MPI_LONG_LONG" -->
<!-- id="51ED04E0-94CB-451E-B52D-149F4D8FB791_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CEECA3BE5A1E334EBB71ADD1B9ABEF820107F42B_at_webmail.imi.nrc.ca" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-24 17:42:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1129.php">Brian Barrett: "Re: [OMPI users] SIGBUS on sparc / 64bit"</a>
<li><strong>Previous message:</strong> <a href="1127.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] users Digest, Vol 261, Issue 4"</a>
<li><strong>In reply to:</strong> <a href="1126.php">Audet, Martin: "[OMPI users] MPI_LONG_LONG_INT != MPI_LONG_LONG"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I miss that part of the MPI 2 errata. I made the corrections, now  
<br>
MPI_LONG_LONG and MPI_LONG_LONG_INT are identical. Therefore one will  
<br>
have MPI_LONG_LONG == MPI_LONG_LONG_INT.
<br>
<p>You can use it from the trunk starting from revision 9701. It will be  
<br>
back-ported on the 1.1 and 1.0.3 on the next days.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Apr 24, 2006, at 3:20 PM, Audet, Martin wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The current and the previous versions of OpenMPI define  
</span><br>
<span class="quotelev1">&gt; MPI_LONG_LONG_INT and MPI_LONG_LONG constants as the address of two  
</span><br>
<span class="quotelev1">&gt; distinct global variables (&amp;ompi_mpi_long_long_int and  
</span><br>
<span class="quotelev1">&gt; &amp;ompi_mpi_long_long respectively) which makes the following  
</span><br>
<span class="quotelev1">&gt; expression true: MPI_LONG_LONG_INT != MPI_LONG_LONG.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After consulting the MPI standards, I noticed the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  - The optional datatype corresponding to the optional C/C++ &quot;long  
</span><br>
<span class="quotelev1">&gt; long&quot; type is MPI_LONG_LONG_INT according to article 3.2.2.  
</span><br>
<span class="quotelev1">&gt; &quot;Message data&quot; of the MPI 1.1 standard (www.mpi-forum.org/docs/ 
</span><br>
<span class="quotelev1">&gt; mpi-11-html/node32.html) and article 10.2. &quot;Defined Constants for C  
</span><br>
<span class="quotelev1">&gt; and Fortran&quot; (www.mpi-forum.org/docs/mpi-11-html/node169.html) of  
</span><br>
<span class="quotelev1">&gt; the MPI 1.1 standard.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  - The MPI_LONG_LONG optional datatype appeared for the first time  
</span><br>
<span class="quotelev1">&gt; in section 9.5.2. &quot;External Data Representation: ``external32''&quot; of  
</span><br>
<span class="quotelev1">&gt; the MPI 2.0 standard (www.mpi-forum.org/docs/mpi-20-html/ 
</span><br>
<span class="quotelev1">&gt; node200.htm). This paragraph state that with the external32 data  
</span><br>
<span class="quotelev1">&gt; representation, this datatype is eight (8) bytes long.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  - However the previous statement was recognized as an error in the  
</span><br>
<span class="quotelev1">&gt; MPI 2.0 errata document (www.mpi-forum.org/docs/errata-20-2.html).  
</span><br>
<span class="quotelev1">&gt; The MPI 2.0 document should have used MPI_LONG_LONG_INT instead of  
</span><br>
<span class="quotelev1">&gt; MPI_LONG_LONG. It also state the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    In addition, the type MPI_LONG_LONG should be added as an  
</span><br>
<span class="quotelev1">&gt; optional type; it is a synonym for MPI_LONG_LONG_INT.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This means that the real optional datatype corresponding to the C/C+ 
</span><br>
<span class="quotelev1">&gt; + &quot;long long&quot; datatype is MPI_LONG_LONG_INT and that since  
</span><br>
<span class="quotelev1">&gt; MPI_LONG_LONG was mentioned by mistake in the MPI 2.0 standard  
</span><br>
<span class="quotelev1">&gt; document, the MPI_LONG_LONG predefined datatype constant is also  
</span><br>
<span class="quotelev1">&gt; accepted as a synonym to MPI_LONG_LONG_INT.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We should therefore have MPI_LONG_LONG_INT == MPI_LONG_LONG which  
</span><br>
<span class="quotelev1">&gt; is not the case in OpenMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So please have a look at this issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that MPICH and MPICH2 implementations satisfy:  
</span><br>
<span class="quotelev1">&gt; MPI_LONG_LONG_INT == MPI_LONG_LONG.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regrards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Martin Audet        E: martin DOT audet AT imi cnrc-nrc gc ca
</span><br>
<span class="quotelev1">&gt; Research Officer    T: 450-641-5034
</span><br>
<span class="quotelev1">&gt; Industrial Material Institute / National Research Council
</span><br>
<span class="quotelev1">&gt; 75 de Mortagne, Boucherville, QC, J4B 6Y4, Canada
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
<p>&quot;Half of what I say is meaningless; but I say it so that the other  
<br>
half may reach you&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kahlil Gibran
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1129.php">Brian Barrett: "Re: [OMPI users] SIGBUS on sparc / 64bit"</a>
<li><strong>Previous message:</strong> <a href="1127.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] users Digest, Vol 261, Issue 4"</a>
<li><strong>In reply to:</strong> <a href="1126.php">Audet, Martin: "[OMPI users] MPI_LONG_LONG_INT != MPI_LONG_LONG"</a>
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
