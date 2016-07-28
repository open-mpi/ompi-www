<?
$subject_val = "Re: [OMPI users] iof, readline, lost stdin buffering";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  3 17:52:17 2008" -->
<!-- isoreceived="20080403215217" -->
<!-- sent="Thu, 3 Apr 2008 17:52:11 -0400" -->
<!-- isosent="20080403215211" -->
<!-- name="Will Portnoy" -->
<!-- email="will.portnoy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] iof, readline, lost stdin buffering" -->
<!-- id="e1ac6ccc0804031452o5aa417adqcf2668aa97b8e0fa_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="38829780-31F0-4225-BAF9-369B8B68E932_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] iof, readline, lost stdin buffering<br>
<strong>From:</strong> Will Portnoy (<em>will.portnoy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-03 17:52:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5306.php">Patrick Heckeler: "Re: [OMPI users] error when sending a single 'long double' from an amd64 architecture to a ppc and a sparc machine"</a>
<li><strong>Previous message:</strong> <a href="5304.php">Korambath, Prakashan: "Re: [OMPI users] SGE error: executing task of job 22966 failed:"</a>
<li><strong>In reply to:</strong> <a href="5298.php">Jeff Squyres: "Re: [OMPI users] iof, readline, lost stdin buffering"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5315.php">Jeff Squyres: "Re: [OMPI users] iof, readline, lost stdin buffering"</a>
<li><strong>Reply:</strong> <a href="5315.php">Jeff Squyres: "Re: [OMPI users] iof, readline, lost stdin buffering"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Do you mean that you are starting it via ./my_mpi_program?
</span><br>
<p>Yes.
<br>
<p><span class="quotelev1">&gt; Uck.  :-(
</span><br>
<p>Yes. :)
<br>
<p><span class="quotelev1">&gt; What happens if you replace readline with a simple fgets() (or
</span><br>
<span class="quotelev1">&gt; equivalent)?  That is, I'm curious to see if the problem is with
</span><br>
<span class="quotelev1">&gt; OMPI's interaction with readline or our I/O forwarding in general.
</span><br>
<p>Yes, disabling readline makes the problem go away.  I've read
<br>
<p><a href="http://www.open-mpi.org/faq/?category=running#mpirun-curses-readline">http://www.open-mpi.org/faq/?category=running#mpirun-curses-readline</a>
<br>
<p>Is there any method to minimize the impact that openmpi has on the
<br>
spawning program, stdin in particular?
<br>
<p><span class="quotelev1">&gt; No, it is not possible to disable iof.
</span><br>
<p>Setting iof_base_window_size=0 seemed to help, though it could be my
<br>
imagination since the problem's effects don't seem to be very
<br>
consistent.
<br>
<p>thank you,
<br>
<p>Will
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5306.php">Patrick Heckeler: "Re: [OMPI users] error when sending a single 'long double' from an amd64 architecture to a ppc and a sparc machine"</a>
<li><strong>Previous message:</strong> <a href="5304.php">Korambath, Prakashan: "Re: [OMPI users] SGE error: executing task of job 22966 failed:"</a>
<li><strong>In reply to:</strong> <a href="5298.php">Jeff Squyres: "Re: [OMPI users] iof, readline, lost stdin buffering"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5315.php">Jeff Squyres: "Re: [OMPI users] iof, readline, lost stdin buffering"</a>
<li><strong>Reply:</strong> <a href="5315.php">Jeff Squyres: "Re: [OMPI users] iof, readline, lost stdin buffering"</a>
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
