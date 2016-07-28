<?
$subject_val = "Re: [OMPI users] Parallel I/O with MPI-1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 23 08:28:57 2008" -->
<!-- isoreceived="20080723122857" -->
<!-- sent="Wed, 23 Jul 2008 13:28:53 +0100" -->
<!-- isosent="20080723122853" -->
<!-- name="Neil Storer" -->
<!-- email="Neil.Storer_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Parallel I/O with MPI-1" -->
<!-- id="48872405.4030005_at_ecmwf.int" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4FC5A352-01DC-4E31-BFC8-7EAE92BF40D5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Parallel I/O with MPI-1<br>
<strong>From:</strong> Neil Storer (<em>Neil.Storer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-23 08:28:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6111.php">Eloi Gaudry: "[OMPI users] openmpi on linux-ia64"</a>
<li><strong>Previous message:</strong> <a href="6109.php">Jeff Squyres: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>In reply to:</strong> <a href="6107.php">Jeff Squyres: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6113.php">Robert Kubrick: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>Reply:</strong> <a href="6113.php">Robert Kubrick: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>Reply:</strong> <a href="6125.php">Robert Latham: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>In general NFS servers run a file-locking daemon that should enable
<br>
clients to lock files.
<br>
<p>However, in Unix, there are two flavours of file locking, flock() from
<br>
BSD and lockf() from System V. It varies from system to system which of
<br>
these mechanisms work with NFS. In Solaris lockf() works with NFS, and
<br>
flock() is implemented via lockf(). On other systems, the results are
<br>
less consistent. For example, on some systems, lockf() is not
<br>
implemented at all, and flock() does not support NFS; while on other
<br>
systems, lockf() supports NFS but flock() does not.
<br>
<p>Unless you have a parallel filesystem, such as GPFS, which is
<br>
well-defined and does support file-locking, I would suggest writing to
<br>
different files, or doing I/O via a single MPI task, or via MPI-IO.
<br>
<p>Regards
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Neil
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jul 23, 2008, at 6:35 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;There is a whole chapter in the MPI standard about file I/O
</span><br>
<span class="quotelev2">&gt;&gt; operations. I'm quite confident you will find whatever you're looking
</span><br>
<span class="quotelev2">&gt;&gt; for there :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi George, i know this chapter :) But i'm using MPI-1, not MPI-2. I
</span><br>
<span class="quotelev2">&gt;&gt; would like to know methods for I/O with MPI-1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI builds ROMIO by default; there's no real distinction between
</span><br>
<span class="quotelev1">&gt; MPI-1 features and MPI-2 features in the Open MPI code base.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You could always effect your own parallel IO (e.g., use MPI sends and
</span><br>
<span class="quotelev1">&gt; receives to coordinate parallel reads and writes), but why?  It's
</span><br>
<span class="quotelev1">&gt; already done in the MPI-IO implementation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW: I do not believe that flock() is guaranteed to be safe across
</span><br>
<span class="quotelev1">&gt; network filesystems such as NFS.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
+-----------------+---------------------------------+------------------+
| Neil Storer     |    Head: Systems S/W Section    | Operations Dept. |
+-----------------+---------------------------------+------------------+
| ECMWF,          | email: neil.storer_at_[hidden]    |    //=\\  //=\\  |
| Shinfield Park, | Tel:   (+44 118) 9499353        |   //   \\//   \\ |
| Reading,        |        (+44 118) 9499000 x 2353 | ECMWF            |
| Berkshire,      | Fax:   (+44 118) 9869450        | ECMWF            |
| RG2 9AX,        |                                 |   \\   //\\   // |
| UK              | URL:   <a href="http://www.ecmwf.int/">http://www.ecmwf.int/</a>    |    \\=//  \\=//  |
+--+--------------+---------------------------------+----------------+-+
   | ECMWF is the European Centre for Medium-Range Weather Forecasts |
   +-----------------------------------------------------------------+
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6111.php">Eloi Gaudry: "[OMPI users] openmpi on linux-ia64"</a>
<li><strong>Previous message:</strong> <a href="6109.php">Jeff Squyres: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>In reply to:</strong> <a href="6107.php">Jeff Squyres: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6113.php">Robert Kubrick: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>Reply:</strong> <a href="6113.php">Robert Kubrick: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>Reply:</strong> <a href="6125.php">Robert Latham: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
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
