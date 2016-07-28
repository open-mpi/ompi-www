<?
$subject_val = "Re: [OMPI users] Sharing (not copying) data with OpenMPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 17 19:35:39 2012" -->
<!-- isoreceived="20120417233539" -->
<!-- sent="Tue, 17 Apr 2012 19:35:34 -0400" -->
<!-- isosent="20120417233534" -->
<!-- name="Rayson Ho" -->
<!-- email="raysonlogin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Sharing (not copying) data with OpenMPI?" -->
<!-- id="CAHwLALNExpEEV8DuwwUw5iuyuet0Ke6TwLs5UoVRYuus_xkAcw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAKbzMGcLcDOnKQLJNNG+f1EXyRcckxpv9_JRA6ZGaqW=D93oFA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Sharing (not copying) data with OpenMPI?<br>
<strong>From:</strong> Rayson Ho (<em>raysonlogin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-17 19:35:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19036.php">Rohan Deshpande: "Re: [OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
<li><strong>Previous message:</strong> <a href="19034.php">Jeffrey Squyres: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>In reply to:</strong> <a href="19025.php">jody: "Re: [OMPI users] Sharing (not copying) data with OpenMPI?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Apr 17, 2012 at 2:26 AM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; As to OpenMP: i already make use of OpenMP in some places (for
</span><br>
<span class="quotelev1">&gt; instance for the creation of the large data block),
</span><br>
<span class="quotelev1">&gt; but unfortunately my main application is not well suited for OpenMP
</span><br>
<span class="quotelev1">&gt; parallelization..
</span><br>
<p>If MPI does not support this kind of programming, you can always write
<br>
the logic in your application... MPI tasks are normal &amp; real processes
<br>
just like any other processes in the system.
<br>
<p>Do something like:
<br>
<p>1. open a file in /tmp exclusively - which means only one MPI task on
<br>
each machine can get the &quot;lock&quot;.
<br>
<p>2. the one that gets the &quot;lock&quot; creates a shared memory segment &amp;
<br>
loads in the fileset.
<br>
<p>3. communicate with other MPI tasks on the machine (eg. read from a
<br>
file, or whatever that is easy) and let them know about the memory
<br>
segment.
<br>
<p>It's really 20 - 50 lines of C or C++ code - may not be the prettiest
<br>
architecture, but in the end the MPI library is doing something very
<br>
similar internally.
<br>
<p>Rayson
<br>
<p>=================================
<br>
Open Grid Scheduler / Grid Engine
<br>
<a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
<br>
<p>Scalable Grid Engine Support Program
<br>
<a href="http://www.scalablelogic.com/">http://www.scalablelogic.com/</a>
<br>
<p><p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I guess i'll have to take more detailed look at my problem to see if i
</span><br>
<span class="quotelev1">&gt; can restructure it in a good way...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank You
</span><br>
<span class="quotelev1">&gt; &#160;Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Apr 16, 2012 at 11:16 PM, Brian Austin &lt;brianmaustin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Maybe you meant to search for OpenMP instead of Open-MPI.
</span><br>
<span class="quotelev2">&gt;&gt; You can achieve something close to what you want by using OpenMP for on-node
</span><br>
<span class="quotelev2">&gt;&gt; parallelism and MPI for inter-node communication.
</span><br>
<span class="quotelev2">&gt;&gt; -Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Apr 16, 2012 at 11:02 AM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No currently there is no way in MPI (and subsequently in Open MPI) to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; achieve this. However, in the next version of the MPI standard there will be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a function allowing processes to shared a memory segment
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (<a href="https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/284">https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/284</a>).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you like living on the bleeding edge, you can try Brian's branch
</span><br>
<span class="quotelev3">&gt;&gt;&gt; implementing the MPI 3.0 RMA operations (including the shared memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; segment) from <a href="http://svn.open-mpi.org/svn/ompi/tmp-public/mpi3-onesided/">http://svn.open-mpi.org/svn/ompi/tmp-public/mpi3-onesided/</a>.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160;george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 16, 2012, at 09:52 , jody wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hi
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; In my application i have to generate a large block of data (several
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; gigs) which subsequently has to be accessed by all processes (read
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; only),
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Because of its size, it would take quite some time to serialize and
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; send the data to the different processes. Furthermore, i risk
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; running out of memory if this data is instantiated more than once on
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; one machine.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Does OpenMPI offer some way of sharing data between processes (on the
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; same machine) without needing to send (and therefore copy) it?
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Or would i have to do this by means of creating shared memory, writing
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; to it, and then make it accessible for reading by the processes?
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Thank You
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; &#160;Jody
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><p><pre>
-- 
==================================================
Open Grid Scheduler - The Official Open Source Grid Engine
<a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19036.php">Rohan Deshpande: "Re: [OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
<li><strong>Previous message:</strong> <a href="19034.php">Jeffrey Squyres: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>In reply to:</strong> <a href="19025.php">jody: "Re: [OMPI users] Sharing (not copying) data with OpenMPI?"</a>
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
