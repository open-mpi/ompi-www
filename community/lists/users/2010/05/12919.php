<?
$subject_val = "Re: [OMPI users] Fortran derived types";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  6 07:57:17 2010" -->
<!-- isoreceived="20100506115717" -->
<!-- sent="Thu, 6 May 2010 07:57:08 -0400" -->
<!-- isosent="20100506115708" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran derived types" -->
<!-- id="OFC3659EEE.A4C5918D-ON8525771B.00404F58-8525771B.0041A7EE_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1273119846.8881.66.camel_at_rscpc28.anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fortran derived types<br>
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-06 07:57:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12920.php">Ralph Castain: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12918.php">Ake Sandgren: "[OMPI users] opal_mutex_lock(): Resource deadlock avoided"</a>
<li><strong>In reply to:</strong> <a href="12915.php">Terry Frankcombe: "Re: [OMPI users] Fortran derived types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12960.php">Cole, Derek E: "Re: [OMPI users] Fortran derived types"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Assume your data is discontiguous in memory and  making it contiguous is
<br>
not practical (e.g. there is no way to make cells of a row and cells of a
<br>
column both contiguous.)  You have 3 options:
<br>
<p>1) Use many small/contiguous messages
<br>
2) Allocate scratch space and pack/unpack
<br>
3) Use a derived datatype.
<br>
<p>If you decide to use option 2 then the time your program spends in the
<br>
allocate/pack/send/free and the time it spends in allocate/recv/unpack/free
<br>
needs to be counted in the cost.  Just comparing a contiguous vs
<br>
discontiguous message time does not help make a good decision.
<br>
<p>Whether 2 or 3 is faster depends a lot in how the MPI implementation does
<br>
its datatype processing.  If the MPI implementation can move data directly
<br>
from discontiguous memory into the sends side adapter and from recv side
<br>
adapter to discontiguous memory, Datatypes may be faster and will conserve
<br>
memory.  If the MPI implementation just mallocs a scratch buffer and uses
<br>
the datatype to guide an internal pack/unpack subroutine, there is a pretty
<br>
good chance your hand crafted pack or unpack, along with contiguous
<br>
messaging will be more efficient.
<br>
<p>I mention option 1 for completeness and because if there were a very good
<br>
put/get available, it might even be the best choice.  It is probably not
<br>
the best choice in any current MPI but there may be exceptions.
<br>
<p><p>Dick Treumann  -  MPI Team
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p><p>|------------&gt;
<br>
| From:      |
<br>
|------------&gt;
<br>
<span class="quotelev1">  &gt;----------------------------------------------------------------------------------------------------------------------------------------|
</span><br>
&nbsp;&nbsp;|Terry Frankcombe &lt;terry_at_[hidden]&gt;                                                                                                     |
<br>
<span class="quotelev1">  &gt;----------------------------------------------------------------------------------------------------------------------------------------|
</span><br>
|------------&gt;
<br>
| To:        |
<br>
|------------&gt;
<br>
<span class="quotelev1">  &gt;----------------------------------------------------------------------------------------------------------------------------------------|
</span><br>
&nbsp;&nbsp;|Open MPI Users &lt;users_at_[hidden]&gt;                                                                                                     |
<br>
<span class="quotelev1">  &gt;----------------------------------------------------------------------------------------------------------------------------------------|
</span><br>
|------------&gt;
<br>
| Date:      |
<br>
|------------&gt;
<br>
<span class="quotelev1">  &gt;----------------------------------------------------------------------------------------------------------------------------------------|
</span><br>
&nbsp;&nbsp;|05/06/2010 12:25 AM                                                                                                                     |
<br>
<span class="quotelev1">  &gt;----------------------------------------------------------------------------------------------------------------------------------------|
</span><br>
|------------&gt;
<br>
| Subject:   |
<br>
|------------&gt;
<br>
<span class="quotelev1">  &gt;----------------------------------------------------------------------------------------------------------------------------------------|
</span><br>
&nbsp;&nbsp;|Re: [OMPI users] Fortran derived types                                                                                                  |
<br>
<span class="quotelev1">  &gt;----------------------------------------------------------------------------------------------------------------------------------------|
</span><br>
|------------&gt;
<br>
| Sent by:   |
<br>
|------------&gt;
<br>
<span class="quotelev1">  &gt;----------------------------------------------------------------------------------------------------------------------------------------|
</span><br>
&nbsp;&nbsp;|users-bounces_at_[hidden]                                                                                                              |
<br>
<span class="quotelev1">  &gt;----------------------------------------------------------------------------------------------------------------------------------------|
</span><br>
<p><p><p><p><p>Hi Derek
<br>
<p>On Wed, 2010-05-05 at 13:05 -0400, Cole, Derek E wrote:
<br>
<span class="quotelev1">&gt; In general, even in your serial fortran code, you're already taking a
</span><br>
<span class="quotelev1">&gt; performance hit using a derived type.
</span><br>
<p>Do you have any numbers to back that up?
<br>
<p>Ciao
<br>
Terry
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p>
<p><p>

<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12919/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-12919/graycol.gif" alt="graycol.gif">
<!-- attachment="graycol.gif" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-12919/ecblank.gif" alt="ecblank.gif">
<!-- attachment="ecblank.gif" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12920.php">Ralph Castain: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12918.php">Ake Sandgren: "[OMPI users] opal_mutex_lock(): Resource deadlock avoided"</a>
<li><strong>In reply to:</strong> <a href="12915.php">Terry Frankcombe: "Re: [OMPI users] Fortran derived types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12960.php">Cole, Derek E: "Re: [OMPI users] Fortran derived types"</a>
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
