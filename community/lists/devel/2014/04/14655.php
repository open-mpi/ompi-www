<?
$subject_val = "Re: [OMPI devel] MPI_Comm_create_group()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 29 23:11:41 2014" -->
<!-- isoreceived="20140430031141" -->
<!-- sent="Wed, 30 Apr 2014 12:11:45 +0900" -->
<!-- isosent="20140430031145" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Comm_create_group()" -->
<!-- id="536069F1.2000206_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EA0AB667-F587-4420-9897-764B1BD8594C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Comm_create_group()<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-29 23:11:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14656.php">Mike Dubman: "Re: [OMPI devel] OSHMEM svn ignores missing"</a>
<li><strong>Previous message:</strong> <a href="14654.php">Ralph Castain: "[OMPI devel] OSHMEM svn ignores missing"</a>
<li><strong>In reply to:</strong> <a href="14652.php">Dave Goodell (dgoodell): "Re: [OMPI devel] MPI_Comm_create_group()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Lisandro,
<br>
<p>i assume you are running OpenMPI 1.8
<br>
<p>r31554 fixes this issue (and some others)
<br>
<a href="https://svn.open-mpi.org/trac/ompi/changeset/31554/branches/v1.8/ompi/communicator/comm_cid.c">https://svn.open-mpi.org/trac/ompi/changeset/31554/branches/v1.8/ompi/communicator/comm_cid.c</a>
<br>
<p>the root cause was an unitialized variable (rc in
<br>
ompi/communicator/comm_cid.c), and the issue only occured when using a
<br>
communicator of size 1.
<br>
<p>Gilles
<br>
<p>On 2014/04/30 2:48, Dave Goodell (dgoodell) wrote:
<br>
<span class="quotelev1">&gt; Thanks for the bug report.  It seems that nobody has time to work on this at the moment, so I've filed a ticket so that we don't lose track of it:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/4577">https://svn.open-mpi.org/trac/ompi/ticket/4577</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 21, 2014, at 9:55 AM, Lisandro Dalcin &lt;dalcinl_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A very basic test for MPI_Comm_create_group() is failing for me. I'm
</span><br>
<span class="quotelev2">&gt;&gt; pasting the code, the failure, and output from valgrind.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [dalcinl_at_kw2060 openmpi]$ cat comm_create_group.c
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Group group;
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Comm comm;
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Comm_group(MPI_COMM_WORLD, &amp;group);
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Comm_create_group(MPI_COMM_WORLD, group, 0, &amp;comm);
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Comm_free(&amp;comm);
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Group_free(&amp;group);
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;  return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14656.php">Mike Dubman: "Re: [OMPI devel] OSHMEM svn ignores missing"</a>
<li><strong>Previous message:</strong> <a href="14654.php">Ralph Castain: "[OMPI devel] OSHMEM svn ignores missing"</a>
<li><strong>In reply to:</strong> <a href="14652.php">Dave Goodell (dgoodell): "Re: [OMPI devel] MPI_Comm_create_group()"</a>
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
