<?
$subject_val = "[OMPI users] Ubuntu/Debian packages for recent version (for Travis CI support)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  2 17:20:07 2015" -->
<!-- isoreceived="20151102222007" -->
<!-- sent="Mon, 2 Nov 2015 14:19:44 -0800" -->
<!-- isosent="20151102221944" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="[OMPI users] Ubuntu/Debian packages for recent version (for Travis CI support)" -->
<!-- id="CAGKz=u+a3FLDdSUyZaqG4sPud-QjJTQ=WLYDwytuVuHRtj3Jqg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Ubuntu/Debian packages for recent version (for Travis CI support)<br>
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-02 17:19:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27977.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>Previous message:</strong> <a href="27975.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27981.php">Dave Love: "Re: [OMPI users] Ubuntu/Debian packages for recent version (for Travis CI support)"</a>
<li><strong>Reply:</strong> <a href="27981.php">Dave Love: "Re: [OMPI users] Ubuntu/Debian packages for recent version (for Travis CI support)"</a>
<li><strong>Maybe reply:</strong> <a href="27999.php">Gilles Gouaillardet: "Re: [OMPI users] Ubuntu/Debian packages for recent version (for Travis CI support)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I setup Travis CI support for ARMCI-MPI but the available version in
<br>
whatever Ubuntu they use is buggy.  For example:
<br>
<a href="https://travis-ci.org/jeffhammond/armci-mpi/jobs/88880279">https://travis-ci.org/jeffhammond/armci-mpi/jobs/88880279</a>.
<br>
<p>I have not checked lately, but I believe that Nathan (and perhaps others)
<br>
have fixed most if not all of the bugs that were blocking ARMCI-MPI from
<br>
working.  Thus, I'd like to use a recent version of OpenMPI, but I do not
<br>
want to have to have Travis build it from source for every instance.
<br>
<p>Can anyone suggest easy alternatives to building from source?  Are there
<br>
deb files online somewhere, perhaps provided by a third-party as for
<br>
MPICH?  Perhaps there is some obvious trick to get the latest OpenMPI via
<br>
apt-get.  However, since none of my machines run Ubuntu/Debian anymore, I
<br>
cannot easily test this, and I do not want to play guess-and-check via
<br>
repeated pushes to Github to fire up Travis builds.
<br>
<p>If someone knows an easy way to get a late-model OpenMPI in Travis using a
<br>
method other than what I've indicated above, by all means suggest that.  I
<br>
am still new to Travis CI and would be happy to learn new things.
<br>
<p>Thanks,
<br>
<p>Jeff
<br>
<p><pre>
-- 
Jeff Hammond
jeff.science_at_[hidden]
<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27976/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27977.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>Previous message:</strong> <a href="27975.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27981.php">Dave Love: "Re: [OMPI users] Ubuntu/Debian packages for recent version (for Travis CI support)"</a>
<li><strong>Reply:</strong> <a href="27981.php">Dave Love: "Re: [OMPI users] Ubuntu/Debian packages for recent version (for Travis CI support)"</a>
<li><strong>Maybe reply:</strong> <a href="27999.php">Gilles Gouaillardet: "Re: [OMPI users] Ubuntu/Debian packages for recent version (for Travis CI support)"</a>
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
