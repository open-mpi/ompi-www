<?
$subject_val = "Re: [OMPI users] Reduce with XOR with MPI_Double";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 21 08:54:33 2009" -->
<!-- isoreceived="20090421125433" -->
<!-- sent="Tue, 21 Apr 2009 08:54:37 -0400" -->
<!-- isosent="20090421125437" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Reduce with XOR with MPI_Double" -->
<!-- id="OF034BCBC9.2323AFDC-ON8525759F.0044F41A-8525759F.0046EB2C_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4FAC3BCC-3602-4DAA-81ED-A0FE2779E2A0_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Reduce with XOR with MPI_Double<br>
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-21 08:54:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8995.php">Jeff Squyres: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="8993.php">Jeff Squyres: "Re: [OMPI users] Reduce with XOR with MPI_Double"</a>
<li><strong>In reply to:</strong> <a href="8993.php">Jeff Squyres: "Re: [OMPI users] Reduce with XOR with MPI_Double"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Santolo
<br>
<p>The MPI standard defines reduction operations where the operand/operation
<br>
pair has a meaningful semantic.  I cannot picture a well defined semantic
<br>
for:
<br>
9999999999999999999.0 BXOR 0.0000000000000000009.  Maybe you can but it is
<br>
not an error that the MPI standard leaves out BXOR on floating point
<br>
operands.  That means you are not going to &quot;Fix&quot; it.
<br>
<p>With more than one floating point representation in use by various
<br>
machines, the result of:
<br>
<p>printf(&quot;%f\n&quot;, 9999999999999999999.0 BXOR 0.0000000000000000009)
<br>
<p>could be vastly different from machine to machine (pseudo code obviously -
<br>
BXOR is not a C operator)
<br>
<p>If you agree that BXOR on floating point data has no well defined or
<br>
portable meaning and you still have a need for it in your application on
<br>
your hardware then you can try cheating.  Use MPI_Reduce but tell it the
<br>
data is an integer type.  Libmpi will apply the bitwise XOR to the bytes
<br>
you have pretended are integer and if you get the result you want you may
<br>
have solved your problem.
<br>
<p>Just understand that because what you are wanting to do has no defined
<br>
meaning you cannot assume portability.  You also cannot assume results that
<br>
match your expectations unless you fully understand the floating point
<br>
representations and fully understand  your own goals.  EG 99999.8 BXOR
<br>
99999.9 may give you what you expect while 22222.2 BXOR 22222.3 does not.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dick
<br>
<p>Dick Treumann  -  MPI Team
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p>users-bounces_at_[hidden] wrote on 04/21/2009 08:26:27 AM:
<br>
<p><span class="quotelev1">&gt; [image removed]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Re: [OMPI users] Reduce with XOR with MPI_Double
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI Users
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 04/21/2009 08:27 AM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent by:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please respond to Open MPI Users
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not quite sure what you're asking.  MPI_BXOR is valid on a variety
</span><br>
<span class="quotelev1">&gt; of Fortran and C integer types; see MPI-2.1 p162 for the full table.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.mpi-forum.org/docs/mpi21-report.pdf">http://www.mpi-forum.org/docs/mpi21-report.pdf</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 19, 2009, at 3:46 PM, Santolo Felaco wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;  I mean the bitwise xor. Pardon for standard the operation is valid
</span><br>
<span class="quotelev2">&gt; &gt; only integer dates.
</span><br>
<span class="quotelev2">&gt; &gt; Bye.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2009/4/19 Santolo Felaco &lt;ahuramazda10_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; I want to use the xor operation of reduce with double dates. For MPI
</span><br>
<span class="quotelev2">&gt; &gt; standars the operation is valid only MPI_Char dates.
</span><br>
<span class="quotelev2">&gt; &gt; How can I fix this?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks. Bye
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8994/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8995.php">Jeff Squyres: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="8993.php">Jeff Squyres: "Re: [OMPI users] Reduce with XOR with MPI_Double"</a>
<li><strong>In reply to:</strong> <a href="8993.php">Jeff Squyres: "Re: [OMPI users] Reduce with XOR with MPI_Double"</a>
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
