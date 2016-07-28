<?
$subject_val = "Re: [OMPI devel] [OMPI bugs] [Open MPI] #4919: Fix the application abort routine so we actually abort";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 25 13:40:21 2014" -->
<!-- isoreceived="20140925174021" -->
<!-- sent="Thu, 25 Sep 2014 13:40:19 -0400" -->
<!-- isosent="20140925174019" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI bugs] [Open MPI] #4919: Fix the application abort routine so we actually abort" -->
<!-- id="CAG4F6z9NFgNuhgg225J4ZM+K+3t6p3aZXgO2DEWH9E54OgKzJg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="054.d045533288b20b879a6d55703076fa69_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI bugs] [Open MPI] #4919: Fix the application abort routine so we actually abort<br>
<strong>From:</strong> Joshua Ladd (<em>jladd.mlnx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-25 13:40:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15915.php">Nathan Hjelm: "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<li><strong>Previous message:</strong> <a href="15913.php">Ralph Castain: "[OMPI devel] 1.8.3rc2 available"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
@iivanov I am looking into a fix.
<br>
<p>On Thu, Sep 25, 2014 at 11:42 AM, Open MPI &lt;bugs_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; #4919: Fix the application abort routine so we actually abort
</span><br>
<span class="quotelev1">&gt; -----------------------------------+-----------------------------
</span><br>
<span class="quotelev1">&gt; Reporter:  rhc                     |       Owner:  ompi-rm1.8
</span><br>
<span class="quotelev1">&gt;     Type:  changeset move request  |      Status:  closed
</span><br>
<span class="quotelev1">&gt; Priority:  blocker                 |   Milestone:  Open MPI 1.8.3
</span><br>
<span class="quotelev1">&gt;  Version:  trunk                   |  Resolution:  fixed
</span><br>
<span class="quotelev1">&gt; Keywords:                          |
</span><br>
<span class="quotelev1">&gt; -----------------------------------+-----------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Comment (by iivanov):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I would like to avoid misunderstanding in this issue.
</span><br>
<span class="quotelev1">&gt;  Here is my observation points:
</span><br>
<span class="quotelev1">&gt;  1. trunk is fine for slurm and osrun launches w/ and w/o corresponding
</span><br>
<span class="quotelev1">&gt;  commit in master branch;
</span><br>
<span class="quotelev1">&gt;  2. this commit (In [32793]) fixes issue in v1.8 branch for osrun only;
</span><br>
<span class="quotelev1">&gt;  3. srun launch is not fixed by this change;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Unfortunately I do not have a fix for srun launch at the moment;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Ticket URL: &lt;<a href="https://svn.open-mpi.org/trac/ompi/ticket/4919#comment:11">https://svn.open-mpi.org/trac/ompi/ticket/4919#comment:11</a>&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI &lt;<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; bugs mailing list
</span><br>
<span class="quotelev1">&gt; bugs_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/bugs">http://www.open-mpi.org/mailman/listinfo.cgi/bugs</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15914/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15915.php">Nathan Hjelm: "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<li><strong>Previous message:</strong> <a href="15913.php">Ralph Castain: "[OMPI devel] 1.8.3rc2 available"</a>
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
