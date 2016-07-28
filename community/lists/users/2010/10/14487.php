<?
$subject_val = "Re: [OMPI users] my leak or OpenMPI's leak?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct 17 18:11:39 2010" -->
<!-- isoreceived="20101017221139" -->
<!-- sent="Sun, 17 Oct 2010 15:11:34 -0700" -->
<!-- isosent="20101017221134" -->
<!-- name="Brian Budge" -->
<!-- email="brian.budge_at_[hidden]" -->
<!-- subject="Re: [OMPI users] my leak or OpenMPI's leak?" -->
<!-- id="AANLkTimik-3VFXyVwXSKRxi9UOa2yX--hLD9hW7cW_vv_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTi=-GhomGWjCYkKot-g4tsQPtka46B8f4tD3Tj_8_at_mail.gmail.com" -->
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
<strong>From:</strong> Brian Budge (<em>brian.budge_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-17 18:11:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14488.php">Ralph Castain: "Re: [OMPI users] my leak or OpenMPI's leak?"</a>
<li><strong>Previous message:</strong> <a href="14486.php">Jeremiah Willcock: "[OMPI users] Typo in man page for MPI_File_iwrite_at"</a>
<li><strong>In reply to:</strong> <a href="14400.php">jody: "[OMPI users] my leak or OpenMPI's leak?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14488.php">Ralph Castain: "Re: [OMPI users] my leak or OpenMPI's leak?"</a>
<li><strong>Reply:</strong> <a href="14488.php">Ralph Castain: "Re: [OMPI users] my leak or OpenMPI's leak?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jody -
<br>
<p>I noticed this exact same thing the other day when I used OpenMPI v
<br>
2.5 built with valgrind support.  I actually ran out of memory due to
<br>
this.  When I went back to v 2.43, my program worked fine.
<br>
<p>Are you also using 2.5?
<br>
<p>&nbsp;&nbsp;Brian
<br>
<p>On Wed, Oct 6, 2010 at 4:32 AM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; I regularly use valgrind to check for leaks, but i ignore the leaks
</span><br>
<span class="quotelev1">&gt; clearly created by OpenMPI,
</span><br>
<span class="quotelev1">&gt; because i think most of them happen because of efficiency (lose no
</span><br>
<span class="quotelev1">&gt; time cleaning up unimportant leaks).
</span><br>
<span class="quotelev1">&gt; But i want to make sure no leaks come from my own apps.
</span><br>
<span class="quotelev1">&gt; In most of the cases, leaks i am responsible for have the name of one
</span><br>
<span class="quotelev1">&gt; of my files at the bottom of the stack printed by valgrind,
</span><br>
<span class="quotelev1">&gt; and no internal OpenMPI-calls above, whereas leaks clearly caused by
</span><br>
<span class="quotelev1">&gt; OpenMPI have something like
</span><br>
<span class="quotelev1">&gt; ompi_mpi_init, mca_pml_base_open, PMPI_Init etc at or very near the bottom.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now i have an application where i am completely unsure where the
</span><br>
<span class="quotelev1">&gt; responsibility for a particular leak lies. valgrind &#160;shows (among
</span><br>
<span class="quotelev1">&gt; others) this report
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==2756== 9,704 (8,348 direct, 1,356 indirect) bytes in 1 blocks are
</span><br>
<span class="quotelev1">&gt; definitely lost in loss record 2,033 of 2,036
</span><br>
<span class="quotelev1">&gt; ==2756== &#160; &#160;at 0x4005943: malloc (vg_replace_malloc.c:195)
</span><br>
<span class="quotelev1">&gt; ==2756== &#160; &#160;by 0x4049387: ompi_free_list_grow (in
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.4.2.p/lib/libmpi.so.0.0.2)
</span><br>
<span class="quotelev1">&gt; ==2756== &#160; &#160;by 0x41CA613: ???
</span><br>
<span class="quotelev1">&gt; ==2756== &#160; &#160;by 0x41BDD91: ???
</span><br>
<span class="quotelev1">&gt; ==2756== &#160; &#160;by 0x41B0C3D: ???
</span><br>
<span class="quotelev1">&gt; ==2756== &#160; &#160;by 0x408AC9C: PMPI_Send (in
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.4.2.p/lib/libmpi.so.0.0.2)
</span><br>
<span class="quotelev1">&gt; ==2756== &#160; &#160;by 0x8123377: ConnectorBase::send(CollectionBase*,
</span><br>
<span class="quotelev1">&gt; std::pair&lt;std::pair&lt;unsigned short, unsigned short&gt;,
</span><br>
<span class="quotelev1">&gt; std::pair&lt;unsigned short, unsigned short&gt; &gt;&amp;) (ConnectorBase.cpp:39)
</span><br>
<span class="quotelev1">&gt; ==2756== &#160; &#160;by 0x8123CEE: TileConnector::sendTile() (TileConnector.cpp:36)
</span><br>
<span class="quotelev1">&gt; ==2756== &#160; &#160;by 0x80C6839: TDMaster::init(int, char**) (TDMaster.cpp:226)
</span><br>
<span class="quotelev1">&gt; ==2756== &#160; &#160;by 0x80C167B: main (TDMain.cpp:24)
</span><br>
<span class="quotelev1">&gt; ==2756==
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At a first glimpse it looks like an OpenMPI-internal leak,
</span><br>
<span class="quotelev1">&gt; because it happens iinside PMPI_Send,
</span><br>
<span class="quotelev1">&gt; but then i am using the function ConnectorBase::send()
</span><br>
<span class="quotelev1">&gt; several times from other callers than TileConnector,
</span><br>
<span class="quotelev1">&gt; but these don't show up in valgrind's output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anybody have an idea what is happening here?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank You
</span><br>
<span class="quotelev1">&gt; jody
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14488.php">Ralph Castain: "Re: [OMPI users] my leak or OpenMPI's leak?"</a>
<li><strong>Previous message:</strong> <a href="14486.php">Jeremiah Willcock: "[OMPI users] Typo in man page for MPI_File_iwrite_at"</a>
<li><strong>In reply to:</strong> <a href="14400.php">jody: "[OMPI users] my leak or OpenMPI's leak?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14488.php">Ralph Castain: "Re: [OMPI users] my leak or OpenMPI's leak?"</a>
<li><strong>Reply:</strong> <a href="14488.php">Ralph Castain: "Re: [OMPI users] my leak or OpenMPI's leak?"</a>
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
