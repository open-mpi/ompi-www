<?
$subject_val = "Re: [OMPI users] Parallel I/O with MPI-1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 23 09:49:02 2008" -->
<!-- isoreceived="20080723134902" -->
<!-- sent="Wed, 23 Jul 2008 09:47:56 -0400" -->
<!-- isosent="20080723134756" -->
<!-- name="Robert Kubrick" -->
<!-- email="robertkubrick_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Parallel I/O with MPI-1" -->
<!-- id="7146BE63-8F39-4CE2-A7FB-729440866384_at_gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48872405.4030005_at_ecmwf.int" -->
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
<strong>From:</strong> Robert Kubrick (<em>robertkubrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-23 09:47:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6114.php">Eloi Gaudry: "Re: [OMPI users] openmpi on linux-ia64"</a>
<li><strong>Previous message:</strong> <a href="6112.php">Jeff Squyres: "Re: [OMPI users] openmpi on linux-ia64"</a>
<li><strong>In reply to:</strong> <a href="6110.php">Neil Storer: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6126.php">Robert Latham: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>Reply:</strong> <a href="6126.php">Robert Latham: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HDF5 supports parallel I/O through MPI-I/O. I've never used it, but I  
<br>
think the API is easier than direct MPI-I/O, maybe even easier than  
<br>
raw read/writes given its support for hierarchal objects and metadata.
<br>
<p>HDF5 supports multiple storage models and it supports MPI-IO.
<br>
HDF5 has an open interface to access raw storage. This enables HDF5  
<br>
files to be written to a variety of media, including sequential  
<br>
files, families of files, memory, Unix sockets (i.e., a network).
<br>
New &quot;Virtual File&quot; drivers can be added to support new storage access  
<br>
mechanisms.
<br>
HDF5 also supports MPI-IO with Parallel HDF5. When building HDF5,  
<br>
parallel support is included by configuring with the --enable- 
<br>
parallel option. A tutorial for Parallel HDF5 is included with the  
<br>
HDF5 Tutorial at:
<br>
&nbsp;&nbsp;&nbsp;/HDF5/Tutor/
<br>
<p>On Jul 23, 2008, at 8:28 AM, Neil Storer wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In general NFS servers run a file-locking daemon that should enable
</span><br>
<span class="quotelev1">&gt; clients to lock files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, in Unix, there are two flavours of file locking, flock() from
</span><br>
<span class="quotelev1">&gt; BSD and lockf() from System V. It varies from system to system  
</span><br>
<span class="quotelev1">&gt; which of
</span><br>
<span class="quotelev1">&gt; these mechanisms work with NFS. In Solaris lockf() works with NFS, and
</span><br>
<span class="quotelev1">&gt; flock() is implemented via lockf(). On other systems, the results are
</span><br>
<span class="quotelev1">&gt; less consistent. For example, on some systems, lockf() is not
</span><br>
<span class="quotelev1">&gt; implemented at all, and flock() does not support NFS; while on other
</span><br>
<span class="quotelev1">&gt; systems, lockf() supports NFS but flock() does not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unless you have a parallel filesystem, such as GPFS, which is
</span><br>
<span class="quotelev1">&gt; well-defined and does support file-locking, I would suggest writing to
</span><br>
<span class="quotelev1">&gt; different files, or doing I/O via a single MPI task, or via MPI-IO.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;        Neil
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 23, 2008, at 6:35 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There is a whole chapter in the MPI standard about file I/O
</span><br>
<span class="quotelev3">&gt;&gt;&gt; operations. I'm quite confident you will find whatever you're  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; looking
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for there :)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi George, i know this chapter :) But i'm using MPI-1, not MPI-2. I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would like to know methods for I/O with MPI-1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI builds ROMIO by default; there's no real distinction between
</span><br>
<span class="quotelev2">&gt;&gt; MPI-1 features and MPI-2 features in the Open MPI code base.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You could always effect your own parallel IO (e.g., use MPI sends and
</span><br>
<span class="quotelev2">&gt;&gt; receives to coordinate parallel reads and writes), but why?  It's
</span><br>
<span class="quotelev2">&gt;&gt; already done in the MPI-IO implementation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FWIW: I do not believe that flock() is guaranteed to be safe across
</span><br>
<span class="quotelev2">&gt;&gt; network filesystems such as NFS.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; +-----------------+--------------------------------- 
</span><br>
<span class="quotelev1">&gt; +------------------+
</span><br>
<span class="quotelev1">&gt; | Neil Storer     |    Head: Systems S/W Section    | Operations  
</span><br>
<span class="quotelev1">&gt; Dept. |
</span><br>
<span class="quotelev1">&gt; +-----------------+--------------------------------- 
</span><br>
<span class="quotelev1">&gt; +------------------+
</span><br>
<span class="quotelev1">&gt; | ECMWF,          | email: neil.storer_at_[hidden]    |    //=\\  //=\ 
</span><br>
<span class="quotelev1">&gt; \  |
</span><br>
<span class="quotelev1">&gt; | Shinfield Park, | Tel:   (+44 118) 9499353        |   //   \\//    
</span><br>
<span class="quotelev1">&gt; \\ |
</span><br>
<span class="quotelev1">&gt; | Reading,        |        (+44 118) 9499000 x 2353 |  
</span><br>
<span class="quotelev1">&gt; ECMWF            |
</span><br>
<span class="quotelev1">&gt; | Berkshire,      | Fax:   (+44 118) 9869450        |  
</span><br>
<span class="quotelev1">&gt; ECMWF            |
</span><br>
<span class="quotelev1">&gt; | RG2 9AX,        |                                 |   \\   //\ 
</span><br>
<span class="quotelev1">&gt; \   // |
</span><br>
<span class="quotelev1">&gt; | UK              | URL:   <a href="http://www.ecmwf.int/">http://www.ecmwf.int/</a>    |    \\=//  \ 
</span><br>
<span class="quotelev1">&gt; \=//  |
</span><br>
<span class="quotelev1">&gt; +--+--------------+--------------------------------- 
</span><br>
<span class="quotelev1">&gt; +----------------+-+
</span><br>
<span class="quotelev1">&gt;    | ECMWF is the European Centre for Medium-Range Weather Forecasts |
</span><br>
<span class="quotelev1">&gt;    +-----------------------------------------------------------------+
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6114.php">Eloi Gaudry: "Re: [OMPI users] openmpi on linux-ia64"</a>
<li><strong>Previous message:</strong> <a href="6112.php">Jeff Squyres: "Re: [OMPI users] openmpi on linux-ia64"</a>
<li><strong>In reply to:</strong> <a href="6110.php">Neil Storer: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6126.php">Robert Latham: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>Reply:</strong> <a href="6126.php">Robert Latham: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
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
