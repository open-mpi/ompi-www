<?
$subject_val = "[OMPI users] ABI stabilization/versioning";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 07:12:34 2010" -->
<!-- isoreceived="20100125121234" -->
<!-- sent="Mon, 25 Jan 2010 12:11:58 +0000" -->
<!-- isosent="20100125121158" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="[OMPI users] ABI stabilization/versioning" -->
<!-- id="87r5pebcz5.fsf_at_liv.ac.uk" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] ABI stabilization/versioning<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-25 07:11:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11863.php">Rafael Arco Arredondo: "[OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>Previous message:</strong> <a href="11861.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11864.php">Manuel Prinz: "Re: [OMPI users] ABI stabilization/versioning"</a>
<li><strong>Reply:</strong> <a href="11864.php">Manuel Prinz: "Re: [OMPI users] ABI stabilization/versioning"</a>
<li><strong>Reply:</strong> <a href="11866.php">Jeff Squyres: "Re: [OMPI users] ABI stabilization/versioning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What's the status of (stabilizing and?) versioning libraries?  If I
<br>
recall correctly, it was supposed to be defined as fixed for some
<br>
release period as of 1.3.something.
<br>
<p>I assumed that the libraries would then be versioned (at least for ELF
<br>
-- I don't know about other formats) and we could remove a major source
<br>
of grief from dynamically linking against the wrong thing, and I think
<br>
Jeff said that would happen.  However, the current sources don't seem to
<br>
be trying to set libtool version info, though I'm not sure what
<br>
determines them producing .so.0.0.1 instead of .0.0.0 in other binaries
<br>
I have.  This doesn't seem to have been addressed in the Debian or
<br>
Fedora packaging, either
<br>
<p>Is that just an oversight or something dropped, so it could be fixed
<br>
(modulo historical mess) if someone did the work?  It isn't covered
<br>
under <a href="http://www.open-mpi.org/software/ompi/versions/">http://www.open-mpi.org/software/ompi/versions/</a> or as far as I can
<br>
tell in the FAQ, and seems important (like plenty of other things, I'm
<br>
sure!), given how much of a problem it's been for users and admins doing
<br>
updates.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11863.php">Rafael Arco Arredondo: "[OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>Previous message:</strong> <a href="11861.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11864.php">Manuel Prinz: "Re: [OMPI users] ABI stabilization/versioning"</a>
<li><strong>Reply:</strong> <a href="11864.php">Manuel Prinz: "Re: [OMPI users] ABI stabilization/versioning"</a>
<li><strong>Reply:</strong> <a href="11866.php">Jeff Squyres: "Re: [OMPI users] ABI stabilization/versioning"</a>
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
