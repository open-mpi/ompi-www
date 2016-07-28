<?
$subject_val = "Re: [OMPI users] Fortran derived types";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  7 09:46:23 2010" -->
<!-- isoreceived="20100507134623" -->
<!-- sent="Fri, 7 May 2010 09:46:05 -0400" -->
<!-- isosent="20100507134605" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran derived types" -->
<!-- id="OFA9DA9F77.48E89EA0-ON8525771C.004A54BE-8525771C.004BA17F_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="063591A1FD6A8143ACC2CA38F4C1B5EF88FAEA5F_at_HVXMSPA.us.lmco.com" -->
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
<strong>Date:</strong> 2010-05-07 09:46:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12966.php">Jeff Squyres: "Re: [OMPI users] MPIError:MPI_Recv: MPI_ERR_TRUNCATE:"</a>
<li><strong>Previous message:</strong> <a href="12964.php">Jeff Squyres: "Re: [OMPI users] About the correct use of DIET_Finalize()"</a>
<li><strong>In reply to:</strong> <a href="12960.php">Cole, Derek E: "Re: [OMPI users] Fortran derived types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12917.php">Paul Kapinos: "Re: [OMPI users] Fortran derived types"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If someone is deciding whether to use complex datatypes or stick with
<br>
contiguous ones, they need to look at their own situation.  There is no
<br>
simple answer. The only thing that is fully predictable is that an MPI
<br>
operation, measured in isolation, will be no slower with contiguous data
<br>
than with discontiguous.
<br>
<p>The question for a particular application is:
<br>
<p>&nbsp;in the application context, how does the performance with this
<br>
discontiguous datatype compare with the performance I get with other
<br>
solutions?&quot;
<br>
<p>The other solutions include anything your application must do to allow it
<br>
to use contiguous datatypes. (most often, packing &amp; unpacking)
<br>
<p>The water gets even more muddy when you consider that each MPI
<br>
implementation has differences in how it processes discontiguous data and
<br>
even a single MPI (like OpenMPI) could have different underlying trade
<br>
offs, depending on the capabilities of the underlying hardware.
<br>
<p>It should not matter whether the program is written in C or Fortran. The
<br>
cost of processing a discontiguous datatype is tied to the layout of the
<br>
data in memory and both languages can produce equally simple or complex
<br>
memory layouts.
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
<span class="quotelev1">  &gt;------------------------------------------------------------------------------------------------------------------------------------------------|
</span><br>
&nbsp;&nbsp;|&quot;Cole, Derek E&quot; &lt;derek.e.cole_at_[hidden]&gt;                                                                                                         |
<br>
<span class="quotelev1">  &gt;------------------------------------------------------------------------------------------------------------------------------------------------|
</span><br>
|------------&gt;
<br>
| To:        |
<br>
|------------&gt;
<br>
<span class="quotelev1">  &gt;------------------------------------------------------------------------------------------------------------------------------------------------|
</span><br>
&nbsp;&nbsp;|Open MPI Users &lt;users_at_[hidden]&gt;                                                                                                             |
<br>
<span class="quotelev1">  &gt;------------------------------------------------------------------------------------------------------------------------------------------------|
</span><br>
|------------&gt;
<br>
| Date:      |
<br>
|------------&gt;
<br>
<span class="quotelev1">  &gt;------------------------------------------------------------------------------------------------------------------------------------------------|
</span><br>
&nbsp;&nbsp;|05/07/2010 08:21 AM                                                                                                                             |
<br>
<span class="quotelev1">  &gt;------------------------------------------------------------------------------------------------------------------------------------------------|
</span><br>
|------------&gt;
<br>
| Subject:   |
<br>
|------------&gt;
<br>
<span class="quotelev1">  &gt;------------------------------------------------------------------------------------------------------------------------------------------------|
</span><br>
&nbsp;&nbsp;|Re: [OMPI users] Fortran derived types                                                                                                          |
<br>
<span class="quotelev1">  &gt;------------------------------------------------------------------------------------------------------------------------------------------------|
</span><br>
|------------&gt;
<br>
| Sent by:   |
<br>
|------------&gt;
<br>
<span class="quotelev1">  &gt;------------------------------------------------------------------------------------------------------------------------------------------------|
</span><br>
&nbsp;&nbsp;|users-bounces_at_[hidden]                                                                                                                      |
<br>
<span class="quotelev1">  &gt;------------------------------------------------------------------------------------------------------------------------------------------------|
</span><br>
<p><p><p><p><p>I don't have any hard numbers for fortran, but I do for C structures. Using
<br>
C structures with some other C functionality (pointer functions, etc etc)
<br>
can yield up to a 3x slowdown at worst, and at best, had a 15% slowdown. I
<br>
have seen similar results in fortran, but don't have the benchmark results
<br>
for it. In either language, nothing beats raw data types for performance.
<br>
Just my .02, I know some out there may not agree.
<br>
<p>Derek
<br>
<p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Terry Frankcombe
<br>
Sent: Thursday, May 06, 2010 12:24 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Fortran derived types
<br>
<p>Hi Derek
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
_______________________________________________
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12965/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-12965/graycol.gif" alt="graycol.gif">
<!-- attachment="graycol.gif" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-12965/ecblank.gif" alt="ecblank.gif">
<!-- attachment="ecblank.gif" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12966.php">Jeff Squyres: "Re: [OMPI users] MPIError:MPI_Recv: MPI_ERR_TRUNCATE:"</a>
<li><strong>Previous message:</strong> <a href="12964.php">Jeff Squyres: "Re: [OMPI users] About the correct use of DIET_Finalize()"</a>
<li><strong>In reply to:</strong> <a href="12960.php">Cole, Derek E: "Re: [OMPI users] Fortran derived types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12917.php">Paul Kapinos: "Re: [OMPI users] Fortran derived types"</a>
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
