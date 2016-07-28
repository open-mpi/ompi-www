<?
$subject_val = "Re: [OMPI users] Segfault in mca_odls_default.so with &gt; ~100 process.";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 27 09:02:44 2010" -->
<!-- isoreceived="20100227140244" -->
<!-- sent="Sat, 27 Feb 2010 14:02:38 +0000" -->
<!-- isosent="20100227140238" -->
<!-- name="Oliver Ford" -->
<!-- email="openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfault in mca_odls_default.so with &amp;gt; ~100 process." -->
<!-- id="4B8925FE.4020207_at_oliford.co.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="096979E7-964C-4D13-9552-C51C73024CB6_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segfault in mca_odls_default.so with &gt; ~100 process.<br>
<strong>From:</strong> Oliver Ford (<em>openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-27 09:02:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12178.php">Rodolfo Chua: "[OMPI users] LAMMPS (openMPI)"</a>
<li><strong>Previous message:</strong> <a href="12176.php">Federico Golfr&#232; Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>In reply to:</strong> <a href="12172.php">Ralph Castain: "Re: [OMPI users] Segfault in mca_odls_default.so with &gt; ~100 process."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12181.php">Ralph Castain: "Re: [OMPI users] Segfault in mca_odls_default.so with &gt; ~100 process."</a>
<li><strong>Reply:</strong> <a href="12181.php">Ralph Castain: "Re: [OMPI users] Segfault in mca_odls_default.so with &gt; ~100 process."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Yeah, the system won't like this. Your approach makes it look like you are launching 136 app_contexts. We currently only support up to 128 app_contexts. I don't think anyone anticipated somebody trying to use the system this way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can expand the number to something larger. Will have to see how big a change it requires (mostly a question of how many places are touched) before we know what release this might show up in.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
The app_context allocation is all dynamic so is fine, the problem that 
<br>
'app_idx' (various structures and code) which appears to be some kind of 
<br>
index mapping is defined as int8_t, so everything goes negative after 
<br>
128 - hence the segfault.
<br>
<p>Attached is a patch to the openmpi-1.4.1 taball on the website to make 
<br>
it all int32_t, which I've tested and works fine.
<br>
<p>I've also attached a patch for the current SVN head, which compiles but 
<br>
I can't test it because the current SVN head doesn't work for me at all 
<br>
at present (for an appfile with less than 128 entries).
<br>
<p>Sorry to send this here rather than the dev list, but I don't really 
<br>
have the time to sign up and get involved at the moment.
<br>
<p><p>Hope that helps a bit,
<br>
Oliver
<br>
<p>

<br><hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12177/ompi-1.4.1-big_app_idx.patch">ompi-1.4.1-big_app_idx.patch</a>
</ul>
<!-- attachment="ompi-1.4.1-big_app_idx.patch" -->
<hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12177/ompi-svg-big_app_idx.patch">ompi-svg-big_app_idx.patch</a>
</ul>
<!-- attachment="ompi-svg-big_app_idx.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12178.php">Rodolfo Chua: "[OMPI users] LAMMPS (openMPI)"</a>
<li><strong>Previous message:</strong> <a href="12176.php">Federico Golfr&#232; Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>In reply to:</strong> <a href="12172.php">Ralph Castain: "Re: [OMPI users] Segfault in mca_odls_default.so with &gt; ~100 process."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12181.php">Ralph Castain: "Re: [OMPI users] Segfault in mca_odls_default.so with &gt; ~100 process."</a>
<li><strong>Reply:</strong> <a href="12181.php">Ralph Castain: "Re: [OMPI users] Segfault in mca_odls_default.so with &gt; ~100 process."</a>
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
