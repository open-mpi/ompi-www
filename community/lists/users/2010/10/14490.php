<?
$subject_val = "Re: [OMPI users] my leak or OpenMPI's leak?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 18 08:48:47 2010" -->
<!-- isoreceived="20101018124847" -->
<!-- sent="Mon, 18 Oct 2010 06:48:35 -0600" -->
<!-- isosent="20101018124835" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] my leak or OpenMPI's leak?" -->
<!-- id="AA6CA72B-F096-4FCF-958B-3443ECB6091D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTimHPGg--iO__xy49iGjcU9wnqS9WcTzVkZecV+A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] my leak or OpenMPI's leak?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-18 08:48:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14491.php">Jeff Squyres: "Re: [OMPI users] Typo in man page for MPI_File_iwrite_at"</a>
<li><strong>Previous message:</strong> <a href="14489.php">jody: "Re: [OMPI users] my leak or OpenMPI's leak?"</a>
<li><strong>In reply to:</strong> <a href="14489.php">jody: "Re: [OMPI users] my leak or OpenMPI's leak?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14492.php">jody: "Re: [OMPI users] my leak or OpenMPI's leak?"</a>
<li><strong>Reply:</strong> <a href="14492.php">jody: "Re: [OMPI users] my leak or OpenMPI's leak?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 18, 2010, at 1:41 AM, jody wrote:
<br>
<p><span class="quotelev1">&gt; I had this leak with OpenMPI 1.4.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But in my case, there is no accumulation - when i repeat the same call,
</span><br>
<span class="quotelev1">&gt; no additional leak is reported for the second call
</span><br>
<p>That's because it grabs a larger-than-required chunk of memory just in case you call again. This helps performance by reducing the number of malloc's in your application.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Oct 18, 2010 at 1:57 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; There is no OMPI 2.5 - do you mean 1.5?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 17, 2010, at 4:11 PM, Brian Budge wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Jody -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I noticed this exact same thing the other day when I used OpenMPI v
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2.5 built with valgrind support.  I actually ran out of memory due to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this.  When I went back to v 2.43, my program worked fine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Are you also using 2.5?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Oct 6, 2010 at 4:32 AM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I regularly use valgrind to check for leaks, but i ignore the leaks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; clearly created by OpenMPI,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; because i think most of them happen because of efficiency (lose no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; time cleaning up unimportant leaks).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But i want to make sure no leaks come from my own apps.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In most of the cases, leaks i am responsible for have the name of one
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of my files at the bottom of the stack printed by valgrind,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and no internal OpenMPI-calls above, whereas leaks clearly caused by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OpenMPI have something like
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi_mpi_init, mca_pml_base_open, PMPI_Init etc at or very near the bottom.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Now i have an application where i am completely unsure where the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; responsibility for a particular leak lies. valgrind  shows (among
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; others) this report
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==2756== 9,704 (8,348 direct, 1,356 indirect) bytes in 1 blocks are
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; definitely lost in loss record 2,033 of 2,036
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==2756==    at 0x4005943: malloc (vg_replace_malloc.c:195)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==2756==    by 0x4049387: ompi_free_list_grow (in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /opt/openmpi-1.4.2.p/lib/libmpi.so.0.0.2)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==2756==    by 0x41CA613: ???
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==2756==    by 0x41BDD91: ???
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==2756==    by 0x41B0C3D: ???
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==2756==    by 0x408AC9C: PMPI_Send (in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /opt/openmpi-1.4.2.p/lib/libmpi.so.0.0.2)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==2756==    by 0x8123377: ConnectorBase::send(CollectionBase*,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; std::pair&lt;std::pair&lt;unsigned short, unsigned short&gt;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; std::pair&lt;unsigned short, unsigned short&gt; &gt;&amp;) (ConnectorBase.cpp:39)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==2756==    by 0x8123CEE: TileConnector::sendTile() (TileConnector.cpp:36)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==2756==    by 0x80C6839: TDMaster::init(int, char**) (TDMaster.cpp:226)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==2756==    by 0x80C167B: main (TDMain.cpp:24)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==2756==
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; At a first glimpse it looks like an OpenMPI-internal leak,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; because it happens iinside PMPI_Send,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but then i am using the function ConnectorBase::send()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; several times from other callers than TileConnector,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but these don't show up in valgrind's output.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Does anybody have an idea what is happening here?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank You
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jody
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="14491.php">Jeff Squyres: "Re: [OMPI users] Typo in man page for MPI_File_iwrite_at"</a>
<li><strong>Previous message:</strong> <a href="14489.php">jody: "Re: [OMPI users] my leak or OpenMPI's leak?"</a>
<li><strong>In reply to:</strong> <a href="14489.php">jody: "Re: [OMPI users] my leak or OpenMPI's leak?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14492.php">jody: "Re: [OMPI users] my leak or OpenMPI's leak?"</a>
<li><strong>Reply:</strong> <a href="14492.php">jody: "Re: [OMPI users] my leak or OpenMPI's leak?"</a>
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
