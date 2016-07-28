<?
$subject_val = "Re: [OMPI users] About the necessity of cancelation of pending	communication and the use of buffer";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 25 10:17:52 2010" -->
<!-- isoreceived="20100525141752" -->
<!-- sent="Tue, 25 May 2010 09:50:54 -0400" -->
<!-- isosent="20100525135054" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] About the necessity of cancelation of pending	communication and the use of buffer" -->
<!-- id="OF7161C287.99A7AC58-ON8525772E.004B8939-8525772E.004C1244_at_us.ibm.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201005250603.11606.yves.caniou_at_ens-lyon.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] About the necessity of cancelation of pending	communication and the use of buffer<br>
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-25 09:50:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13162.php">Jeff Squyres: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="13160.php">Jeff Squyres: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<li><strong>In reply to:</strong> <a href="13153.php">Yves Caniou: "[OMPI users] About the necessity of cancelation of pending communication and the use of buffer"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dick Treumann  -  MPI Team
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p>users-bounces_at_[hidden] wrote on 05/25/2010 12:03:11 AM:
<br>
<p><span class="quotelev1">&gt; [image removed]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [OMPI users] About the necessity of cancelation of pending
</span><br>
<span class="quotelev1">&gt; communication and the use of buffer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yves Caniou
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
<span class="quotelev1">&gt; 05/25/2010 12:04 AM
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
<span class="quotelev1">&gt; Please respond to yves.caniou, Open MPI Users
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have 2 questions on the use of the MPI API:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1 ** Do I have to cancel Irecv() and Isend() operations before calling
</span><br>
<span class="quotelev1">&gt; MPI_Finalize() in the case of when MPI_Finalize() is called, I know for
</span><br>
sure
<br>
<span class="quotelev1">&gt; that the application has finished to compute the result, and must exit?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A silly example would be an iterative code that Isends() a value given a
</span><br>
<span class="quotelev1">&gt; proba, and checks if it receives a value given another proba. At the end,
</span><br>
<p><span class="quotelev1">&gt; each prints a value. There's no synchronization. Do I have to track all
</span><br>
<span class="quotelev1">&gt; Isend() and cancel them before calling MPI_Finalize()?
</span><br>
<p>The MPI Standard requires that all posted communications be locally
<br>
complete before a call to MPI_Finalize. That means every non blocking send
<br>
or receive must be MPI_WAITed (or successful TESTed).  If the matching
<br>
operation will never be posted because the program has done all it needs
<br>
to, then you must both MPI_CANCEL those operations and MPI_WAIT them.
<br>
<p>This is what the standard requires but that does not mean a particular MPI
<br>
implementation will fail if you ignore the rule. If you want to write
<br>
portable MPI code, obey the rule.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2 ** When I use a Isend() operation, the manpage says that I can't use
</span><br>
the
<br>
<span class="quotelev1">&gt; buffer until the operation completes.
</span><br>
<span class="quotelev1">&gt; What happens if I use an Isend() operation in a function, with a buffer
</span><br>
<span class="quotelev1">&gt; declared inside the function?
</span><br>
<span class="quotelev1">&gt; Do I have to Wait() for the communication to finish before returning, or
</span><br>
to
<br>
<span class="quotelev1">&gt; declare the buffer as a global variable?
</span><br>
I see somebody answered this part.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; .Yves.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Yves Caniou
</span><br>
<span class="quotelev1">&gt; Associate Professor at Universit&#233; Lyon 1,
</span><br>
<span class="quotelev1">&gt; Member of the team project INRIA GRAAL in the LIP ENS-Lyon,
</span><br>
<span class="quotelev1">&gt; D&#233;l&#233;gation CNRS in Japan French Laboratory of Informatics (JFLI),
</span><br>
<span class="quotelev1">&gt;   * in Information Technology Center, The University of Tokyo,
</span><br>
<span class="quotelev1">&gt;     2-11-16 Yayoi, Bunkyo-ku, Tokyo 113-8658, Japan
</span><br>
<span class="quotelev1">&gt;     tel: +81-3-5841-0540
</span><br>
<span class="quotelev1">&gt;   * in National Institute of Informatics
</span><br>
<span class="quotelev1">&gt;     2-1-2 Hitotsubashi, Chiyoda-ku, Tokyo 101-8430, Japan
</span><br>
<span class="quotelev1">&gt;     tel: +81-3-4212-2412
</span><br>
<span class="quotelev1">&gt; <a href="http://graal.ens-lyon.fr/~ycaniou/">http://graal.ens-lyon.fr/~ycaniou/</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13161/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13162.php">Jeff Squyres: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="13160.php">Jeff Squyres: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<li><strong>In reply to:</strong> <a href="13153.php">Yves Caniou: "[OMPI users] About the necessity of cancelation of pending communication and the use of buffer"</a>
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
