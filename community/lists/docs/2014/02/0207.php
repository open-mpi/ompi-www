<?
$subject_val = "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  4 16:39:23 2014" -->
<!-- isoreceived="20140204213923" -->
<!-- sent="Tue, 4 Feb 2014 16:39:22 -0500" -->
<!-- isosent="20140204213922" -->
<!-- name="Kelly Black" -->
<!-- email="kjblack_at_[hidden]" -->
<!-- subject="Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun" -->
<!-- id="CAC2Zy4NGRJXf5zuPhb=6H3sb5jfJAok0dc=eEZjB6EdgobTA6A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F954294_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun<br>
<strong>From:</strong> Kelly Black (<em>kjblack_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-04 16:39:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2014/04/0208.php">Xuankang Lin: "[OMPI docs] One possible typo in MPI_Alltoallv documentation on mac"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2013/10/0206.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2013/10/0206.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I apologize for the long time away from this. Last semester was a bit
<br>
insane here with my teaching load. I finally got some things cleared up and
<br>
can start looking at this again. I gave this a try on a machine here and
<br>
got mixed results. Part of the problem is that our local implementation of
<br>
the submission system seems to be ignoring the host and hostfile
<br>
specification and allocating nodes as it sees fit.
<br>
<p>I will try to find another machine to test this on. I tried it on my
<br>
desktop machine playing around with localhost versus the fully qualified
<br>
domain name, but openmpi seems to be outsmarting me and recognizing that it
<br>
is all the same ip address.
<br>
<p>Sincerely,
<br>
Kel
<br>
_______________________________________________________
<br>
Kelly Black                     Phone: (315) 600-8334
<br>
Clarkson University             Fax:   (315) 268-2371
<br>
Department of Math. &amp; C.S.
<br>
PO Box 5815
<br>
Potsdam, NY 13699-5815
<br>
USA
<br>
<p><p>On Fri, Oct 11, 2013 at 5:05 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; On Oct 11, 2013, at 4:31 PM, Kelly Black &lt;kjblack_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yeah, it never occurred to me to use both, but when I was double
</span><br>
<span class="quotelev1">&gt; checking things on the Open MPI website I came across a blurb that said
</span><br>
<span class="quotelev1">&gt; that when used together the behavior is different. The documentation said
</span><br>
<span class="quotelev1">&gt; that if the names in the --host command are not contained in the host file
</span><br>
<span class="quotelev1">&gt; then the mpirun command fails.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Correct.  We basically use the --host as a filter on the hostfile.  If the
</span><br>
<span class="quotelev1">&gt; --host argument isn't a proper subset of the hostfile, OMPI errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; It was not clear if you do not use a fully qualified name in one but not
</span><br>
<span class="quotelev1">&gt; the other how it would be handled.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure.  Like Ralph said, I *think* it works.  I *think* OMPI may
</span><br>
<span class="quotelev1">&gt; actually resolve all names first, and then do comparisons/filtering with IP
</span><br>
<span class="quotelev1">&gt; addresses.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You might want to give it a whirl and see what happens...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/docs/att-0207/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2014/04/0208.php">Xuankang Lin: "[OMPI docs] One possible typo in MPI_Alltoallv documentation on mac"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2013/10/0206.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2013/10/0206.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
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
