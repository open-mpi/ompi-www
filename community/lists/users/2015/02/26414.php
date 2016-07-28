<?
$subject_val = "Re: [OMPI users] LAM/MPI -&gt; OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 27 12:14:22 2015" -->
<!-- isoreceived="20150227171422" -->
<!-- sent="Fri, 27 Feb 2015 17:14:19 +0000" -->
<!-- isosent="20150227171419" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] LAM/MPI -&amp;gt; OpenMPI" -->
<!-- id="A59B96DE-A78E-46F2-BF52-EC59BED708A0_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F505D9A84D1D74E9397FB427DDF95BC46ABB202_at_ALPMBAPA12.e2k.ad.ge.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] LAM/MPI -&gt; OpenMPI<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-27 12:14:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26415.php">Gus Correa: "Re: [OMPI users] mpirun fails across cluster"</a>
<li><strong>Previous message:</strong> <a href="26413.php">Syed Ahsan Ali: "Re: [OMPI users] mpirun fails across cluster"</a>
<li><strong>In reply to:</strong> <a href="26408.php">Sasso, John (GE Power &amp; Water, Non-GE): "[OMPI users] LAM/MPI -&gt; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26418.php">Rob Latham: "Re: [OMPI users] LAM/MPI -&gt; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="26418.php">Rob Latham: "Re: [OMPI users] LAM/MPI -&gt; OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 27, 2015, at 9:42 AM, Sasso, John (GE Power &amp; Water, Non-GE) &lt;John1.Sasso_at_[hidden]&lt;mailto:John1.Sasso_at_[hidden]&gt;&gt; wrote:
<br>
<p>Unfortunately, we have a few apps which use LAM/MPI instead of OpenMPI (and this is something I have NO control over).
<br>
<p>Bummer!
<br>
<p>I have been making an effortlonger supported and end-of-life.   In fact, the website www.lam-mpi-org is no longer accessible as the domain name expired on 2/20/2015.
<br>
<p>Wow, I didn't realize that my prior employer had let the domain lapse.
<br>
<p>Well, perhaps it was time.  We haven't changed anything about LAM/MPI in ...a decade?  Now that the domain is gone, since I don't even have an SVN checkout any more, I can't check when the last meaningful commit was.  I see Rob found a ROMIO commit in 2007.
<br>
<p>Aside from a change of library paths in the Makefiles, I am assuming that hardly any code changes would be needed for them to rebuild and run the code with OpenMPI.  Comments on this?
<br>
<p>That should be correct.  MPI should be source code compatible.
<br>
<p>mpirun options will be different, of course.  And there's no lamboot and lamhalt.
<br>
<p>Yeah, any other recommendations I can give to convince the powers-that-be that immediate sun-setting of LAM/MPI would be great.   Sometimes I feel like I am trying to fit a square peg in a round hole L
<br>
<p>How's this:
<br>
<p>- Brian Barrett and myself were the primary maintainers of LAM/MPI.
<br>
- Brian and I moved on to Open MPI about a decade ago.
<br>
- There have been no releases of LAM/MPI in many years.
<br>
- There won't be any future releases of LAM/MPI, ever.
<br>
- There is zero support for LAM/MPI.
<br>
- Open MPI has MUCH better support for run-time systems and modern networks.
<br>
- Open MPI has an active developer and user community.
<br>
- Open MPI is supported by multiple different vendors.
<br>
- Jeff Immelt wants you to move away from LAM/MPI.
<br>
<p>[cid:1E778E8F-E5CC-4AB5-9EFE-A45D8441298E_at_[hidden]]
<br>
<p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26414/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-26414/JPEG_image-F73901B3F5B4-1.jpeg" alt="JPEG image-F73901B3F5B4-1.jpeg
">
<!-- attachment="JPEG_image-F73901B3F5B4-1.jpeg" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26415.php">Gus Correa: "Re: [OMPI users] mpirun fails across cluster"</a>
<li><strong>Previous message:</strong> <a href="26413.php">Syed Ahsan Ali: "Re: [OMPI users] mpirun fails across cluster"</a>
<li><strong>In reply to:</strong> <a href="26408.php">Sasso, John (GE Power &amp; Water, Non-GE): "[OMPI users] LAM/MPI -&gt; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26418.php">Rob Latham: "Re: [OMPI users] LAM/MPI -&gt; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="26418.php">Rob Latham: "Re: [OMPI users] LAM/MPI -&gt; OpenMPI"</a>
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
